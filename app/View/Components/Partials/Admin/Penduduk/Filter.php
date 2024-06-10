<?php

namespace App\View\Components\Partials\Admin\Penduduk;

use App\Models\AlamatModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Filter extends Component
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
        $listRT = AlamatModel::select('rt')->distinct()->get();
        return view('components.partials.admin.penduduk.filter', compact('listRT'));
    }
}
