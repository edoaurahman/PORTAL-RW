<?php

namespace App\View\Components\Partials\User;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Nav extends Component
{
    public function __construct()
    {
        //
    }
    public function render(): View|Closure|string
    {
        $user = auth()->user();
        return view('components.partials.user.nav', compact('user'));
    }
}
