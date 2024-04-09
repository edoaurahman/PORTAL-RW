<?php

namespace App\View\Components\partials\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class header extends Component
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
        return view('components.partials.admin.header',compact('username','level'));
    }
}
