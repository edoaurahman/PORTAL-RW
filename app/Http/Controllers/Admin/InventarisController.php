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
        // $inventaris = new InventarisModel();
        $inventaris = InventarisModel::all();
        
        return view("admin.inventaris", compact("inventaris"));
    }

    public function destroy($id_inventaris)
    {
        // return $nik;
        try {
            $penduduk = InventarisModel::where('id_inventaris', $id_inventaris)->first();
            
            if ($isKepalaKK) {
                // ambil semua anggota keluarga kecuali kepala keluarga
                $anggotaKeluarga = PendudukModel::where('no_kk', $isKepalaKK->no_kk)->where('nik', '!=', $penduduk->nik)->get();
                // jika anggota keluarga lebih dari 1
                if ($anggotaKeluarga->count() >= 1) {
                    return redirect()->route('admin.penduduk')->withErrors('Kepala Keluarga tidak dapat dihapus, silahkan pindahkan kepala keluarga terlebih dahulu.')->withInput();
                }
                // jika anggota keluarga hanya 1
                $penduduk->delete();
                $isKepalaKK->delete();
            }
            $penduduk->delete();
        } catch (\Exception $e) {
            return config('app.debug') ? redirect()->route('admin.penduduk')->withErrors($e->getMessage())->withInput() : redirect()->route('admin.penduduk')->withErrors('Penduduk Gagal Dihapus.')->withInput();
        }
        return redirect()->route('admin.penduduk')->with('success', 'Penduduk Berhasil Dihapus.');
    }
}
