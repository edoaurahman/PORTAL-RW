<?php

namespace App\View\Components\partials\admin\penduduk;

use App\Models\KkModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class add extends Component
{
    private $user;
    private $level;
    private $alamat;

    public function __construct()
    {
        $this->init();
    }
    private function init()
    {
        $this->user = auth()->user();
        $this->level = $this->user->level->nama_level;
        $this->alamat = $this->user->penduduk->alamat;
    }

    private function checkLevel(string $level): bool
    {
        return $level === 'Super Admin' || $level === 'RW';
    }

    public function render(): View|Closure|string
    {
        $kk = KkModel::with('pendudukHasOne')->get();
        $rt = $this->alamat->rt;
        $level = $this->level;
        return view('components.partials.admin.penduduk.add', compact('kk', 'rt', 'level'));
    }
}
