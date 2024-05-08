<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduk = PendudukModel::with('alamat')->get();
        return view('user.penduduk.index', compact('penduduk'));
    }

    public function show($nik)
    {
        $penduduk = PendudukModel::with('alamat')->where('nik', $nik)->first();
        return view('user.penduduk.detailPenduduk', compact('penduduk'));
    }

    public function store(Request $request)
    {
        // store data
    }

    public function update(Request $request)
    {
        // update data
    }

    public function kk_penduduk()
    {
        return view('penduduk.kk');
    }

    public function detail_penduduk($nik)
    {
        return view('penduduk.detail', compact('nik'));
    }

    public function destroy($nik)
    {
        // delete data
    }

    public function akun_penduduk()
    {
        return view('penduduk.akun');
    }

    public function akun_penduduk_store(Request $request)
    {
        // store data
    }

    public function akun_penduduk_update(Request $request)
    {
        // update data
    }

    public function akun_penduduk_delete($id)
    {
        // delete data
    }

    public function kk_detail_penduduk($no_kk)
    {
        return view('penduduk.kk_detail', compact('no_kk'));
    }

    public function update_kk(Request $request)
    {
        // update data
    }
}
