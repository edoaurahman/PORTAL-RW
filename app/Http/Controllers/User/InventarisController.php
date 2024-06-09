<?php

namespace App\Http\Controllers\user;


use App\Http\Controllers\Controller;
use App\Models\InventarisModel;
use App\Models\PeminjamanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventarisController extends Controller
{
    public function index()
    {
        $inventaris = InventarisModel::all();
        return view('user.inventaris.index', compact('inventaris'));
    }

    public function riwayatinventaris()
    {
        return view('user.inventaris.riwayatinventaris');
    }

    public function pinjam(Request $request)
    {
        DB::transaction(function () use ($request) {
            $inventaris = new PeminjamanModel();
            $inventaris->id_inventaris = $request->id_inventaris;
            $inventaris->jumlah = $request->jumlah;
            $inventaris->nik = auth()->user()->nik;
            $inventaris->status = 'pending';
            $inventaris->save();
        });

        return redirect()->route('user.inventaris')->with('success', 'Barang berhasil dipinjam');
    }
}
