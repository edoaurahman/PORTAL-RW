<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\BeritaModel;
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
}
