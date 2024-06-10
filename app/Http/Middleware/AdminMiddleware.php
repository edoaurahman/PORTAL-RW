<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $level = auth()->user()->level->nama_level;
        $auth = $level == 'Super Admin' || $level == 'RT' || $level == 'RW';
        if ($auth) {
            return $next($request);
        }
        return redirect()->route('user.home');
    }
}
