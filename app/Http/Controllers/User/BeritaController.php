<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBerita;
use App\Models\AkunModel;
use App\Models\BeritaModel;
use App\Models\DetailBeritaModel;
use App\Models\GambarBeritaModel;
use App\Models\KategoriBeritaModel;
use App\Notifications\Berita;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Storage;

// use Illuminate\Support\Str;

class BeritaController extends Controller
{
    private $paggination = 10;
    public function index(Request $request)
    {
        $query = BeritaModel::with('penulis')->where('status', 'publish')->orderBy('created_at', 'desc');
        $kategori_populer = KategoriBeritaModel::withCount('berita')->orderBy('berita_count', 'desc')->limit(5)->get();
        // berita populer di urutan pertama dan kedua
        $berita_populer = BeritaModel::with('penulis')->where('status', 'publish')->orderBy('view', 'desc')->limit(2)->get();
        if ($request->has('kategori')) {
            $query->whereHas('kategori', function ($q) use ($request) {
                $q->where('nama_kategori', $request->kategori);
            });
        }
        if ($request->has('s')) {
            $query->where('judul', 'like', '%' . $request->s . '%');
        }
        $berita = $query->paginate($this->paggination)->withQueryString();
        return view('user.berita.index', compact('berita', 'kategori_populer', 'berita_populer'));
    }

    public function riwayatBerita()
    {
        $nik = auth()->user()->nik;
        $berita = BeritaModel::with('penulis')->where('author', $nik)->orderBy('updated_at', 'desc')->get();
        return view('user.berita.riwayatBerita', compact('berita'));
    }

    public function show($slug)
    {
        $berita = BeritaModel::with('penulis')->where('slug', $slug)->first();
        // add view count, and limit view count to 1 per session
        if (!session()->has('viewed_berita_' . $berita->id_berita)) {
            $berita->view += 1;
            $berita->save();
            session()->put('viewed_berita_' . $berita->id_berita, true);
        }
        return view('user.berita.detailBerita', compact('berita'));
    }

    public function populer()
    {
        return view('user.berita.populerBerita');
    }

    public function create()
    {
        $kategori = KategoriBeritaModel::all();
        return view('user.berita.create', compact('kategori'));
    }

    public function store(StoreBerita $request)
    {
        try {
            $isi = $request->isi;
            $dom = new DOMDocument();
            $dom->loadHTML($isi);
            $images = $dom->getElementsByTagName('img');
            $list_images = [];
            foreach ($images as $k => $img) {
                $data = $img->getAttribute('src');
                if (filter_var($data, FILTER_VALIDATE_URL)) {
                    continue;
                }
                list(, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
                $data = base64_decode($data);
                // check image size max 2MB
                if (strlen($data) > 2 * 1024 * 1024) {
                    return redirect()->back()->withErrors('Ukuran gambar tidak boleh melebihi 2MB')->withInput();
                }
                $image_name = time() . $k . '.png';
                $list_images[$image_name] = $data;
                $img->removeAttribute('src');
                $img->setAttribute('src', asset('storage/images/berita/content/' . $image_name));
            }
        } catch (\Exception $e) {
            return config('app.debug') ? $e->getMessage() : redirect()->back()->withErrors(['Terjadi kesalahan pada gambar/format berita yang diupload', 'Coba format ulang text berita'])->withInput();
        }
        $isi = $dom->saveHTML();
        DB::transaction(function () use ($request, $isi, $list_images) {
            // add '-' to slug
            $request->slug = Str::slug($request->slug, '-');
            $berita = new BeritaModel();
            $berita->judul = $request->judul;
            $berita->gambar = $request->gambar->hashName();
            $berita->isi = $isi;
            $berita->slug = $request->slug;
            $berita->author = auth()->user()->nik;
            $berita->tanggal_posting = now();
            $berita->save();

            foreach ($list_images as $name => $data) {
                $gambar = new GambarBeritaModel();
                $gambar->id_berita = $berita->id_berita;
                $gambar->gambar = $name;
                $gambar->save();
                Storage::disk('public')->makeDirectory('images/berita/content');
                Storage::disk('public')->put('images/berita/content/' . $name, $data);
            }
            $request->gambar->store('images/berita', 'public');

            $kategori = $request->kategori;
            foreach ($kategori as $k) {
                $detail = new DetailBeritaModel();
                $detail->id_berita = $berita->id_berita;
                $detail->id_kategori = $k;
                $detail->save();
            }
        });
        $admins = AkunModel::whereHas('level', function ($q) {
            $q->whereIn('nama_level', ['Super Admin', 'RW', 'RT']);
        })->get();
        foreach ($admins as $admin) {
            $admin->notify(new Berita('Terdapat Berita baru telah ditambahkan, periksa di halaman admin'));
        }
        return redirect()->route('user.berita.dashboard');
    }

    public function update(Request $request)
    {
        $request->validate([
            'id_berita' => 'required|exists:tb_berita,id_berita',
            'isi' => 'required',
        ]);

        $id_berita = $request->id_berita;

        try {
            $isi = $request->isi;
            $dom = new DOMDocument();
            $dom->loadHTML($isi);
            $images = $dom->getElementsByTagName('img');
            $list_images = [];
            foreach ($images as $k => $img) {
                $data = $img->getAttribute('src');
                if (filter_var($data, FILTER_VALIDATE_URL)) {
                    // pick basenae of url and add to list_images
                    $name = basename($data);
                    $list_images[$name] = $name;
                    continue;
                }
                list(, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
                $data = base64_decode($data);
                // check image size max 2MB
                if (strlen($data) > 2 * 1024 * 1024) {
                    return redirect()->back()->withErrors('Ukuran gambar tidak boleh melebihi 2MB')->withInput();
                }
                $image_name = time() . $k . '.png';
                $list_images[$image_name] = $data;
                $img->removeAttribute('src');
                $img->setAttribute('src', asset('storage/images/berita/content/' . $image_name));
            }
        } catch (\Exception $e) {
            return config('app.debug') ? $e->getMessage() : redirect()->back()->withErrors(['Terjadi kesalahan pada gambar/format berita yang diupload', 'Coba format ulang text berita'])->withInput();
        }
        $isi = $dom->saveHTML();
        // cek apakah gambar content yang dihapus
        $gambar = GambarBeritaModel::where('id_berita', $id_berita)->get();
        foreach ($gambar as $g) {
            if (!in_array($g->gambar, array_keys($list_images))) {
                $g->delete();
                try {
                    Storage::disk('public')->delete('images/berita/content/' . $g->gambar);
                } catch (\Exception $e) {
                    continue;
                }
            }
        }

        DB::transaction(function () use ($request, $isi, $list_images) {
            // add '-' to slug
            $request->slug = Str::slug($request->slug, '-');
            $berita = BeritaModel::find($request->id_berita);
            $berita->judul = $request->judul;
            if ($request->hasFile('gambar')) {
                $fileName = $berita->gambar;
                try {
                    Storage::disk('public')->delete('images/berita/' . $fileName);
                } catch (\Exception $e) {
                }
                $berita->gambar = $request->gambar->hashName();
            }
            $berita->isi = $isi;
            $berita->slug = $request->slug;
            $berita->author = auth()->user()->nik;
            $berita->tanggal_posting = now();
            $berita->status = 'pending';
            $berita->save();

            // hapus semua kategori berita
            DetailBeritaModel::where('id_berita', $berita->id_berita)->delete();
            $kategori = $request->kategori;
            foreach ($kategori as $k) {
                $detail = new DetailBeritaModel();
                $detail->id_berita = $berita->id_berita;
                $detail->id_kategori = $k;
                $detail->save();
            }

            foreach ($list_images as $name => $data) {
                $gambar = new GambarBeritaModel();
                // check if image already exist
                if (GambarBeritaModel::where('id_berita', $berita->id_berita)->where('gambar', $name)->count() > 0) {
                    continue;
                }
                $gambar->id_berita = $berita->id_berita;
                $gambar->gambar = $name;
                $gambar->save();
                Storage::disk('public')->makeDirectory('images/berita/content');
                Storage::disk('public')->put('images/berita/content/' . $name, $data);
            }
            if ($request->hasFile('gambar'))
                $request->gambar->store('images/berita', 'public');
        });
        auth()->user()->notify(new Berita('Berita anda sedang dalam proses review'));
        // send notification to all admin
        $admins = AkunModel::whereHas('level', function ($q) {
            $q->whereIn('nama_level', ['Super Admin', 'RW', 'RT']);
        })->get();
        foreach ($admins as $admin) {
            $admin->notify(new Berita('Terdapat Berita baru telah ditambahkan, periksa di halaman admin'));
        }
        return redirect()->route('user.berita.dashboard');
    }

    public function destroy(BeritaModel $berita)
    {
        // cek apakah berita punya gambar content
        $gambar = GambarBeritaModel::where('id_berita', $berita->id_berita)->get();
        if ($gambar->count() > 0) {
            foreach ($gambar as $g) {
                $g->delete();
                try {
                    Storage::disk('public')->delete('images/berita/content/' . $g->gambar);
                } catch (\Exception $e) {
                    continue;
                }
            }
        }
        // hapus gambar berita
        $fileName = $berita->gambar;
        try {
            Storage::disk('public')->delete('images/berita/' . $fileName);
        } catch (\Exception $e) {
            $berita->delete();
            return redirect()->route('user.berita')->with('success', 'Berita berhasil dihapus (Gambar tidak ditemukan)');
        }
        $berita->delete();
        return redirect()->route('user.berita.dashboard')->with('success', 'Berita berhasil dihapus');
    }

    public function set_status(Request $request)
    {
        $berita = BeritaModel::find($request->id_berita);
        $berita->status = $request->status;
        $berita->save();
        if ($request->status == 'publish') {
            $berita->penulis->akun->notify(new Berita('Berita anda telah dipublikasikan'));
        } else if ($request->status == 'pending') {
            $berita->penulis->akun->notify(new Berita('Berita anda sedang dalam proses review'));
        } else if ($request->status == 'reject') {
            $berita->penulis->akun->notify(new Berita('Berita anda ditolak'));
        }
        return redirect()->back();
    }

    public function edit(BeritaModel $berita)
    {
        $kategori = KategoriBeritaModel::all();
        return view('user.berita.edit', compact('berita', 'kategori'));
    }
}
