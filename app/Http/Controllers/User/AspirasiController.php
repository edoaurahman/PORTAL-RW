<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AspirasiModel;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'aspirasi' => 'required',
        ]);

        $aspirasi = new AspirasiModel();
        $aspirasi->author = auth()->user()->nik;
        $aspirasi->isi = $request->aspirasi;
        $aspirasi->status = 'pending';
        $aspirasi->save();

        return redirect()->route('user.home')->with('success', 'Aspirasi berhasil dikirim.');
    }
}
