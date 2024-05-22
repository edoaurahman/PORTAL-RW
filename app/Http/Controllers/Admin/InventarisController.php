<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InventarisModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventarisController extends Controller
{
    private $inventaris;

    public function index()
    {
        $inventaris = InventarisModel::all();

        return view("admin.inventaris", compact("inventaris"));
    }

    // public function destroy($id_inventaris)
    // {
    //     // return $nik;
    //     try {
    //         $barang = InventarisModel::where('id_inventaris', $id_inventaris)->first();
    //         $barang->delete();
    //     } catch (\Exception $e) {
    //         return config('app.debug') ? redirect()->route('admin.inventaris')->withErrors($e->getMessage())->withInput() : redirect()->route('admin.penduduk')->withErrors('Barang di Inventaris Gagal di Hapus.')->withInput();
    //     }
    //     return redirect()->route('admin.inventaris')->with('success', 'Barang Berhasil Dihapus.');
    // }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jumlah' => 'required',
        ]);
        DB::transaction(function () use ($request) {
            $layanan = new InventarisModel();
            $layanan->nama = $request->nama;
            $layanan->image = $request->image->hashName();
            $layanan->jumlah = $request->jumlah;
            $layanan->save();
            $image = $request->file('image');
            $image->store('public/inventaris');
        });
        return redirect()->route('admin.inventaris')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Request $request)
    {
        
        DB::transaction(function () use ($request) {
            $inventaris = InventarisModel::findOrFail($request->id_inventaris);
            if ($request->hasFile('image')) {
                // hapus gambar lama
                unlink(storage_path('app/public/inventaris/' . $inventaris->image));
                $image = $request->file('image');
                $image->store('public/inventaris');
                $inventaris->image = $image->hashName();
            }
            $inventaris->nama = $request->nama;
            $inventaris->jumlah = $request->jumlah;
            $inventaris->save();
        });
        return redirect()->route('admin.inventaris')->with('success', 'Data berhasil diubah');
    }

    public function delete($id_inventaris)
    {
        $inventaris = InventarisModel::findOrFail($id_inventaris);
        unlink(storage_path('app/public/layanan/' . $inventaris->image));
        unlink(storage_path('app/public/layanan/berkas/' . $inventaris->file));
        $inventaris->delete();
        return redirect()->route('admin.layanan')->with('success', 'Data berhasil dihapus');
    }
}

