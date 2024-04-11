<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isRw
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $level = auth()->user()->level->nama_level;
        $auth = $level == 'RW' || $level == 'Super Admin';
        if ($auth) {
            return $next($request);
        }
        return redirect()->route('admin.dashboard');
    }
}
