<?php

namespace App\Http\Controllers;

use App\Models\AkunModel;
use App\Models\PendudukModel;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduk = PendudukModel::all();
        return view('admin.penduduk', compact('penduduk'));
    }

    public function akun_penduduk()
    {
        $penduduk = AkunModel::with('penduduk')->get();
        return view('admin.akun-penduduk', compact('penduduk'));
    }
}
