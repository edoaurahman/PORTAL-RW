<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePenduduk;
use App\Models\AkunModel;
use App\Models\AlamatModel;
use App\Models\KkModel;
use App\Models\PendudukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduk = PendudukModel::all();
        $kk = KkModel::with('pendudukHasOne')->get();
        return view('admin.penduduk.index', compact('penduduk', 'kk'));
    }

    public function akun_penduduk()
    {
        $penduduk = AkunModel::with('penduduk')->get();
        return view('admin.penduduk.akun', compact('penduduk'));
    }

    public function kk_penduduk()
    {
        $penduduk = KkModel::with('pendudukHasOne')->get();
        // dd($penduduk->toArray());
        return view('admin.penduduk.kk', compact('penduduk'));
    }

    public function kk_detail_penduduk(string $no_kk)
    {
        $penduduk = KkModel::with('penduduk')->where('no_kk', $no_kk)->first();
        // dd($penduduk->toArray());
        return view('admin.penduduk.kk-detail', compact('penduduk'));
    }

    public function store(StorePenduduk $request)
    {

        $isKepalaKK = $request->isKepalaKK;
        if (!empty($isKepalaKK)) {
            $kk = [
                'no_kk' => $request->no_kk,
                'nik_kepalakeluarga' => $request->nik,
            ];
            $isKepalaKK = KkModel::where('no_kk', $request->no_kk)->first();
            if (!empty($isKepalaKK)) {
                return redirect()->back()->withErrors('Kepala Keluarga dengan no KK ' . ' ' . $request->no_kk . ' ' . 'sudah terdaftar. hilangkan opsi kepala keluarga, anda dapat merubah kepala keluarga pada halaman detail KK.');
            } else {
                KkModel::create($kk);
            }
        }

        DB::transaction(function () use ($request) {
            $alamat = AlamatModel::create([
                'kel' => $request->kelurahan,
                'kecamatan' => $request->kecamatan,
                'jalan' => $request->jalan,
                'rw' => $request->rw,
                'rt' => $request->rt,
            ]);


            $request->merge([
                'id_alamat' => $alamat->id_alamat,
            ]);
            PendudukModel::create($request->all());
        });
        return redirect()->route('admin.penduduk')->with('success', 'Penduduk Berhasil Ditambahkan');
    }
}
