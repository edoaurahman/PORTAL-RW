<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AgendaModel;
use App\Models\AkunModel;
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
        $rw = AkunModel::whereHas('level', function ($q) {
            $q->where('nama_level', 'RW');
        })->first();
        $rt = AkunModel::whereHas('level', function ($q) {
            $q->where('nama_level', 'RT');
        })->get();
        return view("user.home", compact('agenda', 'aspirasi', 'umkm', 'rw', 'rt'));
    }


}
