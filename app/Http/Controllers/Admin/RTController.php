<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AkunModel;
use App\Models\LevelModel;
use App\Models\MapsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RTController extends Controller
{
    public function index()
    {
        $DataRT = AkunModel::with(['penduduk', 'level', 'link_maps'])
            ->where('id_level', 2)
            ->get();

        return view('admin.data-rt', compact('DataRT'));
    }

    public function edit_rt(Request $request)
    {
        // dd($request->toArray());
        DB::transaction(function () use ($request) {
            $data_rt = AkunModel::find($request->id_akun);
            $link_maps = new MapsModel();
            $link_maps->nik = $data_rt->nik;
            $link_maps->link = $request->link;
            if (isset ($request->nik)) {
                // pindah user ke level penduduk
                $level = LevelModel::where('nama_level', 'Penduduk')->first();
                $data_rt->id_level = $level->id_level;
                $data_rt->save();
                // pindah user ke level RT
                $akun = AkunModel::where('nik', $request->nik)->first();
                $level = LevelModel::where('nama_level', 'RT')->first();
                $akun->id_level = $level->id_level;
                $akun->save();
            }
            // dd($link_maps->toArray());
            $link_maps->save();
        });
        return redirect()->back()->with('success', 'Link Maps Berhasil Ditambahkan');
    }
}
