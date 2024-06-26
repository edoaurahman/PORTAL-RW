<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\GambarUMKMModel;
use App\Models\KategoriUMKMModel;
use App\Models\ListKategoriUMKMModel;
use App\Models\UMKMModel;
use App\Notifications\UMKM;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Storage;

class UmkmController extends Controller
{
    public function index(Request $request)
    {
        $query = UMKMModel::where('status', 'publish')->orderBy('created_at', 'desc');
        if ($request->has('kategori')) {
            $query->whereHas('listKategori', function ($q) use ($request) {
                $q->whereIn('id_kategori', $request->kategori);
            });
        }
        if ($request->has('s')) {
            $query->where('nama_umkm', 'like', '%' . $request->s . '%');
        }
        $umkm = $query->get();
        $kategori = KategoriUMKMModel::all();
        return view('user.UMKM.index', compact('umkm', 'kategori'));
    }

    public function dashboard()
    {
        $umkm = auth()->user()->umkm;
        return view('user.UMKM.dashboard', compact('umkm'));
    }

    public function show($id)
    {
        $umkm = UMKMModel::find($id);
        if (!session()->has('viewed_umkm_' . $umkm->id_berita)) {
            $umkm->view += 1;
            $umkm->save();
            session()->put('viewed_umkm_' . $umkm->id_berita, true);
        }
        // dd($umkm->gambarSlide()->get()->toArray());
        return view('user.UMKM.detailumkm', compact('umkm'));
    }

    public function create()
    {
        $kategori = KategoriUMKMModel::all();
        return view('user.UMKM.create', compact('kategori'));
    }

    public function edit($id)
    {

        $kategori = KategoriUMKMModel::all();
        $umkm = UMKMModel::find($id);
        return view('user.UMKM.edit', compact('umkm', 'kategori'));
    }
    public function store(Request $request)
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
                $img->setAttribute('src', asset('storage/images/umkm/content/' . $image_name));
            }
        } catch (\Exception $e) {
            return config('app.debug') ? $e->getMessage() : redirect()->back()->withErrors(['Terjadi kesalahan pada gambar/format UMKM yang diupload', 'Coba format ulang text UMKM'])->withInput();
        }

        $deskripsi = $dom->saveHTML();
        DB::transaction(function () use ($request, $deskripsi, $list_images) {
            $umkm = new UMKMModel();
            $umkm->nik = auth()->user()->penduduk->nik;
            $umkm->nama_umkm = $request->nama_umkm;
            $umkm->cover = $request->cover->hashName();
            $umkm->deskripsi = $deskripsi;
            $umkm->hari = implode(',', $request->hari);
            $umkm->jam_buka = $request->start_time;
            $umkm->jam_tutup = $request->end_time;
            $umkm->save();

            // isi content
            foreach ($list_images as $name => $data) {
                $gambar = new GambarUMKMModel();
                $gambar->id_umkm = $umkm->id_umkm;
                $gambar->gambar = $name;
                $gambar->position = 'content';
                $gambar->save();
                Storage::disk('public')->makeDirectory('images/umkm/content');
                Storage::disk('public')->put('images/umkm/content/' . $name, $data);
            }

            // image slide
            foreach ($request->slide as $data) {
                $slide = new GambarUMKMModel();
                $slide->id_umkm = $umkm->id_umkm;
                $slide->gambar = $data->hashName();
                $slide->position = 'slide';
                $slide->save();
                $data->store('images/umkm/slide_umkm', 'public');
            }

            // 
            foreach ($request->list_kategori as $data) {
                $list_kategori = new ListKategoriUMKMModel();
                $list_kategori->id_umkm = $umkm->id_umkm;
                $list_kategori->id_kategori = $data;
                $list_kategori->save();
            }

            $request->cover->store('images/umkm/cover_umkm', 'public');
            $user = auth()->user();
            $user->notify(new UMKM('UMKM berhasil ditambahkan. Mohon tunggu verifikasi dari admin.'));
        });
        return redirect()->route('user.umkm.dashboard')->with('success', 'UMKM berhasil ditambahkan');
    }

    public function update(Request $request)
    {
        $request->validate([
            'id_umkm' => 'required|exists:tb_umkm,id_umkm',
            'deskripsi' => 'required',
        ]);

        $id_umkm = $request->id_umkm;

        try {
            $isi = $request->deskripsi;
            $dom = new DOMDocument();
            $dom->loadHTML($isi);
            $images = $dom->getElementsByTagName('img');
            $list_images = [];
            foreach ($images as $k => $img) {
                $data = $img->getAttribute('src');
                if (filter_var($data, FILTER_VALIDATE_URL)) {
                    $name = basename($data);
                    $list_images[$name] = $name;
                    continue;
                }
                list(, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
                $data = base64_decode($data);
                if (strlen($data) > 2 * 1024 * 1024) {
                    return redirect()->back()->withErrors('Ukuran gambar tidak boleh melebihi 2MB')->withInput();
                }
                $image_name = time() . $k . '.png';
                $list_images[$image_name] = $data;
                $img->removeAttribute('src');
                $img->setAttribute('src', asset('storage/images/umkm/content/' . $image_name));
            }
        } catch (\Exception $e) {
            return config('app.debug') ? $e->getMessage() : redirect()->back()->withErrors(['Terjadi kesalahan pada gambar/format berita yang diupload', 'Coba format ulang text berita'])->withInput();
        }

        $deskripsi = $dom->saveHTML();
        $gambar_umkm = GambarUMKMModel::where('id_umkm', $id_umkm)->where('position', 'content')->get();
        foreach ($gambar_umkm as $g) {
            if (!in_array($g->gambar, array_keys($list_images))) {
                $g->delete();
                try {
                    Storage::disk('public')->delete('images/umkm/content/' . $g->gambar);
                } catch (\Exception $e) {
                    continue;
                }
            }
        }

        DB::transaction(function () use ($request, $deskripsi, $list_images, $id_umkm) {
            $umkm = UMKMModel::find($id_umkm);
            $umkm->nama_umkm = $request->nama_umkm;
            if ($request->hasFile('cover')) {
                $fileName = $umkm->cover;
                try {
                    Storage::disk('public')->delete('images/umkm/cover_umkm/' . $fileName);
                } catch (\Exception $e) {
                }
                $umkm->cover = $request->cover->hashName();
            }
            $umkm->deskripsi = $deskripsi;
            $umkm->hari = implode(',', $request->hari);
            $umkm->jam_buka = $request->start_time;
            $umkm->jam_tutup = $request->end_time;
            $umkm->save();

            foreach ($list_images as $name => $data) {
                if (GambarUMKMModel::where('id_umkm', $umkm->id_umkm)->where('gambar', $name)->where('position', 'content')->count() > 0) {
                    continue;
                }
                $gambar = new GambarUMKMModel();
                $gambar->id_umkm = $umkm->id_umkm;
                $gambar->gambar = $name;
                $gambar->position = 'content';
                $gambar->save();
                Storage::disk('public')->makeDirectory('images/umkm/content');
                Storage::disk('public')->put('images/umkm/content/' . $name, $data);
            }

            if ($request->hasFile('slide')) {
                // cek hapus gambar slide
                $gambar_slide = GambarUMKMModel::where('id_umkm', $umkm->id_umkm)->where('position', 'slide')->get();
                foreach ($gambar_slide as $g) {
                    $g->delete();
                    try {
                        Storage::disk('public')->delete('images/umkm/slide_umkm/' . $g->gambar);
                    } catch (\Exception $e) {
                        continue;
                    }
                }
                foreach ($request->slide as $data) {
                    $slide = new GambarUMKMModel();
                    $slide->id_umkm = $umkm->id_umkm;
                    $slide->gambar = $data->hashName();
                    $slide->position = 'slide';
                    $slide->save();
                    $data->store('images/umkm/slide_umkm', 'public');
                }
            }

            ListKategoriUMKMModel::where('id_umkm', $umkm->id_umkm)->delete();
            foreach ($request->list_kategori as $data) {
                $list_kategori = new ListKategoriUMKMModel();
                $list_kategori->id_umkm = $umkm->id_umkm;
                $list_kategori->id_kategori = $data;
                $list_kategori->save();
            }

            if ($request->hasFile('cover')) {
                $request->cover->store('images/umkm/cover_umkm', 'public');
            }
            $user = auth()->user();
            $user->notify(new UMKM('UMKM berhasil diubah. Mohon tunggu verifikasi dari admin.'));
        });

        return redirect()->route('user.umkm.dashboard')->with('success', 'UMKM berhasil diperbarui');
    }

    public function destroy(UMKMModel $umkm)
    {
        // Check if the UMKM has associated content images
        $gambarContent = GambarUMKMModel::where('id_umkm', $umkm->id_umkm)->where('position', 'content')->get();
        if ($gambarContent->count() > 0) {
            foreach ($gambarContent as $g) {
                $g->delete();
                try {
                    Storage::disk('public')->delete('images/umkm/content/' . $g->gambar);
                } catch (\Exception $e) {
                    continue;
                }
            }
        }

        // Check if the UMKM has associated slide images
        $gambarSlide = GambarUMKMModel::where('id_umkm', $umkm->id_umkm)->where('position', 'slide')->get();
        if ($gambarSlide->count() > 0) {
            foreach ($gambarSlide as $g) {
                $g->delete();
                try {
                    Storage::disk('public')->delete('images/umkm/slide_umkm/' . $g->gambar);
                } catch (\Exception $e) {
                    continue;
                }
            }
        }

        // Delete the cover image
        $coverFileName = $umkm->cover;
        try {
            Storage::disk('public')->delete('images/umkm/cover_umkm/' . $coverFileName);
        } catch (\Exception $e) {
            $umkm->delete();
            return redirect()->route('user.umkm.dashboard')->with('success', 'UMKM berhasil dihapus (Gambar tidak ditemukan)');
        }

        // Delete the UMKM entry
        $umkm->delete();
        return redirect()->route('user.umkm.dashboard')->with('success', 'UMKM berhasil dihapus');
    }
}
