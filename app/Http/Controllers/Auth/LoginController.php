<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AkunModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('components.view.login');
    }
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
            'page' => 'required'
        ]);
        $remember = $request->remember ?? false;
        if (Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']], $remember)) {
            $request->session()->regenerate();
            $page = $request->page;
            if ($page == 'penduduk') {
                return redirect()->intended('/home');
            } else if ($page == 'admin') {
                return redirect()->intended('/admin');
            }
        }

        return back()->withErrors([
            'message' => 'Username atau password salah.',
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // clear all localStorage


        return redirect()->route('user.home');
    }
}
