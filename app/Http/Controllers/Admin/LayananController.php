<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LayananModel;
use Illuminate\Support\Facades\DB;

class LayananController extends Controller
{
    public function index()
    {
        return view("admin.layanan");
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_surat' => 'required',
            'image' => 'required',
            'keterangan' => 'required',
            'file' => 'required',
        ]);
        DB::transaction(function () use ($request) {
            $layanan = new LayananModel();
            $layanan->nama_surat = $request->nama_surat;
            $layanan->image = $request->image->hashName();
            $layanan->keterangan = $request->keterangan;
            $layanan->file = $request->file->hashName();
            $layanan->author = auth()->user()->nik;
            $layanan->save();
            $file = $request->file('file');
            $file->store('public/layanan/berkas');
            $image = $request->file('image');
            $image->store('public/layanan');
        });
        return redirect()->route('admin.layanan')->with('success', 'Data berhasil ditambahkan');
    }
    
}
