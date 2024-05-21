<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\InventarisModel;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    public function index()
    {
        // Mengambil semua data inventaris
        $inventaris = InventarisModel::all();
        
        // Mengirimkan data ke view
        return view('user.inventaris.index', compact('inventaris'));
    }

    public function pinjam($id)
    {
        $item = InventarisModel::findOrFail($id);
        if ($item->status == 'tersedia') {
            $item->status = 'dipinjam';
            $item->save();
        }
        return redirect('/inventaris');
    }
}
