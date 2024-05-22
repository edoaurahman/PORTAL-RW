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

        $layanan = LayananModel::all();
        return view('admin.layanan', compact('layanan'));
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

    public function edit(Request $request)
    {
        
        DB::transaction(function () use ($request) {
            $layanan = LayananModel::findOrFail($request->id_surat);
            if ($request->hasFile('image')) {
                // hapus gambar lama
                unlink(storage_path('app/public/layanan/' . $layanan->image));
                $image = $request->file('image');
                $image->store('public/layanan');
                $layanan->image = $image->hashName();
            }
            if ($request->hasFile('file')) {
                // hapus file lama
                unlink(storage_path('app/public/layanan/berkas/' . $layanan->file));
                $file = $request->file('file');
                $file->store('public/layanan/berkas/');
                $layanan->file = $file->hashName();
            }
            $layanan->nama_surat = $request->nama_surat;
            $layanan->keterangan = $request->keterangan;
            $layanan->save();
        });
        return redirect()->route('admin.layanan')->with('success', 'Data berhasil diubah');
    }

    public function delete($id_surat)
    {
        $layanan = LayananModel::findOrFail($id_surat);
        unlink(storage_path('app/public/layanan/' . $layanan->image));
        unlink(storage_path('app/public/layanan/berkas/' . $layanan->file));
        $layanan->delete();
        return redirect()->route('admin.layanan')->with('success', 'Data berhasil dihapus');
    }
}
