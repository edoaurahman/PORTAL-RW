<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBerita;
use App\Models\BeritaModel;
use App\Models\GambarBeritaModel;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Storage;

// use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = BeritaModel::with('autor')->get();

        // foreach ($berita as $news) {
        //     $news->isi = Str::words($news->isi, 50, '...');
        // }

        return view('user.berita.index', compact('berita'));
    }

    public function show($slug)
    {
        $berita = BeritaModel::with('autor')->where('slug', $slug)->first();
        return view('user.berita.detailBerita', compact('berita'));
    }

    public function populer()
    {
        return view('user.berita.populerBerita');
    }

    public function create()
    {
        return view('user.berita.create');
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
                    return redirect()->back()->with('error', 'Ukuran gambar tidak boleh melebihi 2MB')->withInput();
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
            $berita->gambar = asset('storage/images/berita/' . $request->gambar->hashName());
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
        });
        return redirect()->route('user.berita');
    }

    public function destroy(BeritaModel $berita)
    {
        // cek apakah berita punya gambar content
        $gambar = GambarBeritaModel::where('id_berita', $berita->id_berita)->get();
        if ($gambar->count() > 0) {
            foreach ($gambar as $g) {
                $g->delete();
                try {
                    // unlink(storage_path('app/public/images/berita/content/' . $g->gambar));
                    Storage::disk('public')->delete('images/berita/content/' . $g->gambar);
                } catch (\Exception $e) {
                    continue;
                }
            }
        }
        // hapus gambar berita
        $fileName = basename($berita->gambar);
        try {
            // unlink(storage_path('app/public/images/berita/' . $fileName));
            Storage::disk('public')->delete('images/berita/' . $fileName);
        } catch (\Exception $e) {
            $berita->delete();
            return redirect()->route('user.berita')->with('success', 'Berita berhasil dihapus (Gambar tidak ditemukan)');
        }
        $berita->delete();
        return redirect()->route('user.berita')->with('success', 'Berita berhasil dihapus');
    }
}
