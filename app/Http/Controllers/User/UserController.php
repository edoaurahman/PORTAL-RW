<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AgendaModel;
use App\Models\AspirasiModel;
use App\Models\SettingHomeModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $agenda = AgendaModel::where('start', '>=', date('Y-m-d'))->first();
        $aspirasi = AspirasiModel::all();
        $gambar_struktur = SettingHomeModel::select('id_setting', 'gambarstruktur')->first();
        return view("user.home", compact('agenda', 'aspirasi', 'gambar_struktur'));
    }

}
