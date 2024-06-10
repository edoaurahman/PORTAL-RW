<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBansos;
use App\Models\BansosModel;
use App\Models\FotoBansosModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BansosController extends Controller
{
    public function index()
    {
        $bansos = BansosModel::where('no_kk', auth()->user()->penduduk->no_kk)->get();
        return view('user.bansos.index', compact('bansos'));
    }
    public function store(StoreBansos $request)
    {
        // batasi request bansos 1 kali dalam 1 bulan
        $bansos = BansosModel::where('no_kk', $request->no_kk)->where('created_at', '>=', now()->subMonth())->first();
        if ($bansos) {
            return redirect()->route('user.bansos')->withErrors('Anda sudah mengajukan bansos dalam 1 bulan terakhir');
        }
        try {
            DB::transaction(function () use ($request) {
                $bansos = new BansosModel();
                $bansos->no_kk = $request->no_kk;
                $bansos->gaji = $request->gaji;
                $bansos->jumlah_tanggungan = $request->jumlah_tanggungan;
                $bansos->luas_tanah = $request->luas_tanah;
                $bansos->kapasitas_listrik = $request->kapasitas_listrik;
                $bansos->jumlah_kendaraan = $request->jumlah_kendaraan;
                $bansos->save();

                foreach ($request->images as $image) {
                    $foto_bansos = new FotoBansosModel();
                    $foto_bansos->id_bansos = $bansos->id_bansos;
                    $foto_bansos->image = $image->hashName();
                    $foto_bansos->save();
                    $image->store('images/foto_bansos', 'public');
                }
            });
        } catch (\Exception $e) {
            return redirect()->route('user.bansos')->withErrors('Data bansos gagal ditambahkan');
        }

        return redirect()->route('user.bansos')->with('success', 'Data bansos berhasil ditambahkan');
    }

    public function update(BansosModel $bansos, Request $request)
    {
        try {
            DB::transaction(function () use ($bansos, $request) {
                $bansos->gaji = $request->gaji;
                $bansos->jumlah_tanggungan = $request->jumlah_tanggungan;
                $bansos->luas_tanah = $request->luas_tanah;
                $bansos->kapasitas_listrik = $request->kapasitas_listrik;
                $bansos->jumlah_kendaraan = $request->jumlah_kendaraan;
                $bansos->status = 'pending';
                $bansos->save();

                if ($request->hasFile('images')) {
                    foreach ($request->images as $image) {
                        $foto_bansos = new FotoBansosModel();
                        $foto_bansos->id_bansos = $bansos->id_bansos;
                        $foto_bansos->image = $image->hashName();
                        $foto_bansos->save();
                        $image->store('images/foto_bansos', 'public');
                    }
                }
            });
        } catch (\Exception $e) {
            return redirect()->route('user.bansos')->withErrors('Data bansos gagal diubah');
        }
        return redirect()->route('user.bansos')->with('success', 'Data bansos berhasil diubah');
    }
    public function show(BansosModel $bansos)
    {
        $bansos->load('foto_bansos');
        return view('user.bansos.show', compact('bansos'));
    }
    public function destroy(Request $request)
    {
        $bansos = BansosModel::find($request->id);
        // delete foto bansos
        foreach ($bansos->foto_bansos as $foto_bansos) {
            Storage::delete('public/images/foto_bansos/' . $foto_bansos->image);
            $foto_bansos->delete();
        }
        $bansos->delete();
        return redirect()->back()->with('success', 'Data bansos berhasil dihapus');
    }
}
