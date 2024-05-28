<?php

namespace App\View\Components\Partials\Admin\Keuangan\Pengeluaran;

use App\Models\KategoriKeuanganModel;
use App\Models\KeuanganModel;
use App\Models\PengeluaranModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Number;
use Illuminate\View\Component;

class Add extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $kategori = KategoriKeuanganModel::all();
        $keuangan = KeuanganModel::sum('jumlah');
        $pengeluaran = PengeluaranModel::sum('jumlah');
        $total = $keuangan - $pengeluaran;
        // format number to currency IDR
        $totalFormat = Number::currency($total, 'IDR');
        return view('components.partials.admin.keuangan.pengeluaran.add', compact('kategori', 'total', 'totalFormat'));
    }
}
