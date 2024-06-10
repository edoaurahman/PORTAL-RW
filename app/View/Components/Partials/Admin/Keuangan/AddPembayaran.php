<?php

namespace App\View\Components\partials\Admin\Keuangan;

use App\Models\KategoriKeuanganModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AddPembayaran extends Component
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
        $kategoriKeuangan = KategoriKeuanganModel::all();
        return view('components.partials.admin.keuangan.add-pembayaran', compact('kategoriKeuangan'));
    }
}
