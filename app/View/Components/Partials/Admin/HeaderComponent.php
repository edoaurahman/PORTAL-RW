<?php

namespace App\View\Components\Partials\Admin;

use App\Models\AspirasiModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderComponent extends Component
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
        $username = auth()->user()->penduduk->nama;
        $level = auth()->user()->level->nama_level;
        $aspirasi = AspirasiModel::where('status', 'pending')->get();
        // dd($level);
        return view('components.partials.admin.header-component', compact('username', 'level', 'aspirasi'));
    }
}
