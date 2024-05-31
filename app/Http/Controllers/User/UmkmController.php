<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\GambarUMKMModel;
use App\Models\KategoriUMKMModel;
use App\Models\ListKategoriUMKMModel;
use App\Models\UMKMModel;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Storage;

class UmkmController extends Controller
{
    public function index()
    {
        $umkm = UMKMModel::all();
        return view('user.UMKM.index', compact('umkm'));
    }

    public function dashboard()
    {
        $umkm = auth()->user()->umkm;
        return view('user.UMKM.dashboard', compact('umkm'));
    }

    public function show($id)
    {
        $umkm = UMKMModel::find($id);
        return view('user.UMKM.show', compact('umkm'));
    }

    public function create()
    {
        $kategori = KategoriUMKMModel::all();
        return view('user.UMKM.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
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
            return config('app.debug') ? $e->getMessage() : redirect()->back()->withErrors(['Terjadi kesalahan pada gambar/format berita yang diupload', 'Coba format ulang text berita'])->withInput();
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
                $gambar->save();
                Storage::disk('public')->makeDirectory('images/umkm/content');
                Storage::disk('public')->put('images/umkm/content/' . $name, $data);
            }

            // image list
            foreach ($request->slide as $data) {
                $slide = new GambarUMKMModel();
                $slide->id_umkm = $umkm->id_umkm;
                $slide->gambar = $data->hashName();
                $slide->save();
                $data->store('images/umkm/content', 'public');
            }

            // 
            foreach ($request->list_kategori as $data) {
                $list_kategori = new ListKategoriUMKMModel();
                $list_kategori->id_umkm = $umkm->id_umkm;
                $list_kategori->id_kategori = $data;
                $list_kategori->save();
            }

            $request->cover->store('images/cover_umkm', 'public');
        });
        return redirect()->route('user.umkm.dashboard')->with('success', 'UMKM berhasil ditambahkan');
    }
}
