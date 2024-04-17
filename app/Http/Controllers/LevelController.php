<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLevel;
use App\Models\AkunModel;
use App\Models\LevelModel;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {
        $users = AkunModel::with('level', 'penduduk')
            ->whereHas('level', function ($query) {
                $query->where('nama_level', '!=', 'Penduduk');
            })
            ->get();

        // dd($users[1]->penduduk->alamat->toArray());
        // mendapatkan penduduk yang memiliki level penduduk
        $penduduk = AkunModel::with('penduduk')
            ->whereHas('level', function ($query) {
                $query->where('nama_level', 'Penduduk');
            })
            ->get();
        // dd($penduduk->toArray());
        $listLevel = LevelModel::where('nama_level', '!=', 'Penduduk')->where('nama_level', '!=', 'Super Admin')->get();
        return view("admin.level", compact("users", "penduduk", "listLevel"));
    }

    public function store(StoreLevel $request)
    {
        $akun = AkunModel::where('nik', $request->nik)->first();
        // dd($akun->toArray());
        // jika akun tidak ditemukan
        if($akun){
            $akun->id_level = $request->level;
            $akun->save();
            return redirect()->route('admin.level')->with('success','Penambahan level berhasil!');
        }
        return redirect()->route('admin.level')->withErrors('Akun tidak ditemukan!, tambahkan akun terlebih dahulu! di halaman <a class="text-blue-500" href="'.route('admin.penduduk.akun').'">Akun Penduduk</a>');
    }
}
