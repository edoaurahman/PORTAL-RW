<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AspirasiModel;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasi = AspirasiModel::all();
        return view('user.aspirasi.index', compact('aspirasi'));
    }
    public function riwayataspirasi()
    {
        $nik = auth()->user()->nik;
        $aspirasi = AspirasiModel::with('akun')->where('author', $nik)->orderBy('updated_at', 'desc')->get();
        return view('user.aspirasi.riwayataspirasi', compact('aspirasi'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'aspirasi' => 'required',
        ]);

        $aspirasi = new AspirasiModel();
        $aspirasi->author = auth()->user()->nik;
        $aspirasi->isi = $request->aspirasi;
        $aspirasi->status = 'pending';
        $aspirasi->respon = $request->aspirasi;
        $aspirasi->save();

        return redirect()->route('user.home')->with('success', 'Aspirasi berhasil dikirim.');
    }
}
