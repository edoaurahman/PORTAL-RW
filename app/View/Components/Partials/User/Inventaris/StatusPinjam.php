<?php

namespace App\View\Components\Partials\User\Inventaris;


use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatusPinjam extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $nama,
        public string $status,
        public string $jumlah
    ) {
    }

    public function render(): View|Closure|string
    {
        if ($this->status == 'pending') {
            return view('components.partials.user.inventaris.pending', [
                'nama' => $this->nama,
                'jumlah' => $this->jumlah,
            ]);
        } else if ($this->status == 'approved') {
            return view('components.partials.user.inventaris.approved', [
                'nama' => $this->nama,
                'jumlah' => $this->jumlah,
            ]);
        }  else if ($this->status == 'rejected') {
            return view('components.partials.user.inventaris.rejected', [
                'nama' => $this->nama,
                'jumlah' => $this->jumlah,
            ]);
        } 
        return null;
    }
}

