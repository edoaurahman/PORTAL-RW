<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlamatModel;
use App\Models\KkModel;
use App\Models\PendudukModel;
use Illuminate\Http\Request;

class ReportDataController extends Controller
{
    public function index()
    {
        $jumlahRT = AlamatModel::distinct('rt')->count('rt');

        $totalPenduduk = PendudukModel::count();

        // Mengambil jumlah penduduk dengan status pendatang
        $pendudukPendatang = PendudukModel::where('status_penduduk', 'Pendatang')->count();

        // Mengambil jumlah penduduk dengan status tetap
        $pendudukTetap = PendudukModel::where('status_penduduk', 'Penduduk Tetap')->count();

        $jumlahKK = KkModel::count();

        return view("admin.report-data", compact('jumlahRT', 'totalPenduduk', 'pendudukPendatang', 'pendudukTetap', 'jumlahKK'));
    }
}
