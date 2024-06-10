<?php

namespace App\View\Components\Partials\User\Aspirasi;


use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Status extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $isi,
        public string $status,
        public string $respon
    ) {
    }

    public function render(): View|Closure|string
    {
        if ($this->status == 'pending') {
            return view('components.partials.user.aspirasi.pending', [
                'isi' => $this->isi,
                'respon' => $this->respon,
            ]);
        } else if ($this->status == 'done') {
            return view('components.partials.user.aspirasi.done', [
                'isi' => $this->isi,
                'respon' => $this->respon,
            ]);
        } 
        return null;
    }
}

