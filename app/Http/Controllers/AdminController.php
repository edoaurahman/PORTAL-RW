<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $level = auth()->user()->level->nama_level;
        return view('admin.dashboard', compact('level'));
    }
}
