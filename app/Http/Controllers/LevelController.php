<?php

namespace App\Http\Controllers;

use App\Models\AkunModel;
use App\Models\LevelModel;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {
        $users = AkunModel::with('level', 'penduduk')
            ->whereHas('level', function ($query) {
                $query->where('nama_level', '!=', 'Penduduk');
            })
            ->get();

        // dd($users[1]->penduduk->alamat->toArray());
        return view("admin.level", compact("users"));
    }
}
