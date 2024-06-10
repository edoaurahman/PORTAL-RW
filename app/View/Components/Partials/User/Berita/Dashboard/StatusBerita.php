<?php

namespace App\View\Components\partials\user\berita\dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatusBerita extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type,
        public string $judul,
        public string $slug,
        public string $idBerita,
    ) {
    }


    public function render(): View|Closure|string
    {
        if ($this->type == 'pending') {
            return view('components.partials.user.berita.dashboard.pending-berita', [
                'judul' => $this->judul,
                'slug' => $this->slug,
                'id_berita' => $this->idBerita,
            ]);
        } else if ($this->type == 'publish') {
            return view('components.partials.user.berita.dashboard.published-berita', [
                'judul' => $this->judul,
                'slug' => $this->slug,
                'id_berita' => $this->idBerita,
            ]);
        } else if ($this->type == 'reject') {
            return view('components.partials.user.berita.dashboard.rejected-berita', [
                'judul' => $this->judul,
                'slug' => $this->slug,
                'id_berita' => $this->idBerita,
            ]);
        }
        return null;
    }
}
