<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BeritaModel;
use App\Models\GambarBeritaModel;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = BeritaModel::with('autor')->get();

        foreach ($berita as $news) {
            $news->isi = Str::words($news->isi, 50, '...');
        }

        return view('user.berita.index', compact('berita'));
    }

    public function show($id)
    {
        $berita = BeritaModel::with('autor')->findOrFail($id);
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

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image',
            'isi' => 'required'
        ]);

        $isi = $request->isi;
        $dom = new DOMDocument();
        $dom->loadHTML($isi, 9);
        $images = $dom->getElementsByTagName('img');
        $list_images = [];
        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            list(, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);
            $image_name = time() . $k . '.png';
            $list_images[$image_name] = $data;
            $img->removeAttribute('src');
            $img->setAttribute('src', asset('images/berita/content/' . $image_name));
        }

        $isi = $dom->saveHTML();
        DB::transaction(function () use ($request, $isi, $list_images) {
            $berita = new BeritaModel();
            $berita->judul = $request->judul;
            $berita->gambar = asset('images/berita/' . $request->gambar->hashName());
            $berita->isi = $isi;
            $berita->author = auth()->user()->nik;
            $berita->tanggal_posting = now();
            $berita->save();

            foreach ($list_images as $name => $data) {
                $gambar = new GambarBeritaModel();
                $gambar->id_berita = $berita->id_berita;
                $gambar->gambar = $name;
                $gambar->save();
                file_put_contents(storage_path('app/public/images/berita/content/' . $name), $data);
            }

            $request->gambar->store('images/berita', 'public');
        });
        return redirect()->route('user.berita');
    }
}
