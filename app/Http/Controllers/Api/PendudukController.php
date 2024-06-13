<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function getPendudukByKK($no_kk) // untuk mengambil data penduduk berdasarkan no_kk di halaman Daftar KK
    {
        $penduduk = PendudukModel::where('no_kk', $no_kk)->get(['nik', 'nama']);
        return response()->json($penduduk);
    }
}
