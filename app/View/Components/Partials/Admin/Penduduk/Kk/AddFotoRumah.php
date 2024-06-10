<?php

namespace App\View\Components\Partials\Admin\Penduduk\Kk;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AddFotoRumah extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $noKk,
    ) {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $no_kk = $this->noKk;
        return view('components.partials.admin.penduduk.kk.add-foto-rumah', compact('no_kk'));
    }
}
