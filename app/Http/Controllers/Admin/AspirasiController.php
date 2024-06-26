<?php

namespace App\Http\Controllers\Admin;


use App\Notifications\Aspirasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AspirasiModel;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasi = AspirasiModel::all();

        return view("admin.aspirasi", compact('aspirasi'));
    }

    public function respon(Request $request)
    {
        $request->validate([
            'respon' => 'required',
            'status' => 'required',
        ]);

        $aspirasi = AspirasiModel::find($request->id_aspirasi);
        $aspirasi->respon = $request->respon;
        $aspirasi->status = $request->status;
        $aspirasi->save();
        $aspirasi->akun->notify(new Aspirasi('Aspirasi Anda telah direspon oleh admin.'));

        return redirect()->route('admin.aspirasi')->with('success', 'Respon berhasil dikirim.');
    }
}
