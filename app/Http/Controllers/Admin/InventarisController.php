<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InventarisModel;
use App\Models\PeminjamanModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventarisController extends Controller
{
    private $inventaris;

    public function index()
    {
        $inventaris = InventarisModel::orderBy('created_at', 'desc')->get();

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
    public function updatePeminjaman(Request $request)
    {
        $peminjaman = PeminjamanModel::findOrFail($request->id_peminjaman);
        $peminjaman->status = $request->status;
        $peminjaman->save();
        return redirect()->route('admin.peminjaman')->with('success', 'Status peminjaman berhasil diubah');
    }

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
            $image->store('inventaris', 'public');
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
                $image->store('inventaris', 'public');
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
        try {
            unlink(storage_path('app/public/inventaris/' . $inventaris->image));
        } catch (Exception $e) {
            $inventaris->delete();
            return redirect()->route('admin.inventaris')->with('success', 'Data berhasil dihapus, gambar tidak ditemukan');
        }
        $inventaris->delete();
        return redirect()->route('admin.inventaris')->with('success', 'Data berhasil dihapus');
    }

    public function peminjaman()
    {
        $peminjaman = PeminjamanModel::all();
        return view("admin.peminjaman", compact("peminjaman"));
    }

    public function peminjaman_status(Request $request)
    {
        $peminjaman = PeminjamanModel::findOrFail($request->id_peminjaman);
        $peminjaman->status = $request->status;
        $peminjaman->save();
        $inventaris = InventarisModel::findOrFail($peminjaman->id_inventaris);
        if ($request->status == 'approved') {
            $inventaris->jumlah = $inventaris->jumlah - $peminjaman->jumlah;
            $inventaris->save();
        }
        if ($request->status == 'done') {
            $inventaris->jumlah = $inventaris->jumlah + $peminjaman->jumlah;
            $inventaris->save();
        }
        return redirect()->route('admin.inventaris.peminjaman')->with('success', 'Status peminjaman berhasil diubah');
    }


}

