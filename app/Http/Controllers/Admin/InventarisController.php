<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InventarisModel;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    private $inventaris;

    public function index()
    {
        $inventaris = InventarisModel::all();

        return view("admin.inventaris", compact("inventaris"));
    }

    public function destroy($id_inventaris)
    {
        // return $nik;
        try {
            $barang = InventarisModel::where('id_inventaris', $id_inventaris)->first();
            $barang->delete();
        } catch (\Exception $e) {
            return config('app.debug') ? redirect()->route('admin.inventaris')->withErrors($e->getMessage())->withInput() : redirect()->route('admin.penduduk')->withErrors('Barang di Inventaris Gagal di Hapus.')->withInput();
        }
        return redirect()->route('admin.inventaris')->with('success', 'Barang Berhasil Dihapus.');
    }
}
