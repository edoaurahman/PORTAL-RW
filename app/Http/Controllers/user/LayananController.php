<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\LayananModel;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $layanan = LayananModel::all();
        return view('user.layanan.index', compact('layanan'));
    }
}
