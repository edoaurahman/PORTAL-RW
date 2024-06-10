<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BeritaModel;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $berita = BeritaModel::with('penulis')->orderBy('updated_at', 'desc')->get();
        return view("admin.news", compact('berita'));
    }
}
