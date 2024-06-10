<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AkunModel;
use Illuminate\Http\Request;

class RTController extends Controller
{
    public function getDataRT($id)
    {
        $akun = AkunModel::with('penduduk')->whereHas('penduduk.alamat', function ($query) use ($id) {
            $query->where('rt', $id);
        })->whereHas('level', function ($query) {
            $query->where('nama_level', 'Penduduk');
        })->get();
        return response()->json($akun, 200);
    }
}
