<?php

namespace App\View\Components\partials\admin\penduduk;

use App\Models\PendudukModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EditAkun extends Component
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
        $listPenduduk = PendudukModel::whereDoesntHave('akun')->get();
        return view('components.partials.admin.penduduk.edit-akun', compact('listPenduduk'));
    }
}
