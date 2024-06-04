<?php

namespace App\View\Components\view;

use App\Models\BeritaModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PopularBerita extends Component
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
        // berikan 5 berita yang paling populer
        $berita = BeritaModel::with('penulis', 'kategori')->where('status', 'publish')
            ->orderBy('view', 'desc')
            ->limit(3)
            ->get();
        return view('components.view.popular-berita', compact('berita'));
    }
}
