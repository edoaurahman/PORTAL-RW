<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AgendaModel;
use App\Models\AkunModel;
use App\Models\AlamatModel;
use App\Models\AspirasiModel;
use App\Models\PendudukModel;
use App\Models\SettingHomeModel;
use App\Models\UMKMModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $agenda = AgendaModel::where('start', '>=', date('Y-m-d'))->first();
        $aspirasi = AspirasiModel::get()->random(4);
        
        $umkm = UMKMModel::limit(4)->where('status', 'publish')->orderBy('view', 'desc')->get();
        $rw = AkunModel::whereHas('level', function ($q) {
            $q->where('nama_level', 'RW');
        })->first();
        $rt = AkunModel::whereHas('level', function ($q) {
            $q->where('nama_level', 'RT');
        })->get();

        $totalPenduduk = PendudukModel::count();
        $jumlahRT = AlamatModel::distinct('rt')->count('rt');
        $listRT = [];
        for ($i = 1; $i <= $jumlahRT; $i++) {
            // get persentase RT berdasarkan jumlah penduduk
            $jumlahPendudukRT = PendudukModel::has('alamat')->whereHas('alamat', function ($q) use ($i) {
                $q->where('rt', $i);
            })->count();
            $listRT[] = (object) [
                'rt' => $i,
                'persentase' => round(($jumlahPendudukRT / $totalPenduduk) * 100)
            ];
        }
        $totalPendudukLaki = PendudukModel::where('jenis_kelamin', 'Laki-Laki')->count();
        $totalPendudukPerempuan = PendudukModel::where('jenis_kelamin', 'Perempuan')->count();
        $totalPendudukTetap = PendudukModel::where('status_penduduk', 'Penduduk Tetap')->count();
        $totalPendudukPendatang = PendudukModel::where('status_penduduk', 'Pendatang')->count();

        return view("user.home", compact('agenda', 'aspirasi', 'umkm', 'rw', 'rt', 'listRT', 'totalPenduduk', 'totalPendudukLaki', 'totalPendudukPerempuan', 'totalPendudukTetap', 'totalPendudukPendatang'));
    }


}
