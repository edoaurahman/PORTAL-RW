<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AgendaModel;
use App\Models\AspirasiModel;
use App\Models\SettingHomeModel;
use App\Models\UMKMModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $agenda = AgendaModel::where('start', '>=', date('Y-m-d'))->first();
        $aspirasi = AspirasiModel::all();
        $umkm = UMKMModel::limit(4)->orderBy('created_at', 'desc')->get();
        $gambar_struktur = SettingHomeModel::select('id_setting', 'gambarstruktur')->first();
        return view("user.home", compact('agenda', 'aspirasi', 'gambar_struktur', 'umkm'));
    }

}
