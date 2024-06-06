<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlamatModel;
use App\Models\KeuanganModel;
use App\Models\KkModel;
use App\Models\PendudukModel;
use App\Models\PengeluaranModel;
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

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

    public function downloadPdf(Request $request)
    {
        $url = 'http://' . $request->getHttpHost() . '/report-data/preview';
        // dd($url);
        Browsershot::url($url)->setNodeModulePath(base_path('node_modules'))->landscape()->savePdf(public_path('/storage/report.pdf'));
        return response()->download(public_path('/storage/report.pdf'));
    }

    public function preview()
    {
        $jumlahRT = AlamatModel::distinct('rt')->count('rt');

        $totalPenduduk = PendudukModel::count();

        // Mengambil jumlah penduduk dengan status pendatang
        $pendudukPendatang = PendudukModel::where('status_penduduk', 'Pendatang')->count();

        // Mengambil jumlah penduduk dengan status tetap
        $pendudukTetap = PendudukModel::where('status_penduduk', 'Penduduk Tetap')->count();

        $jumlahKK = KkModel::count();

        $pemasukkan = KeuanganModel::sum('jumlah');
        $pengeluaran = PengeluaranModel::sum('jumlah');
        $totalKeuangan = $pemasukkan - $pengeluaran;

        return view("preview", compact('jumlahRT', 'totalPenduduk', 'pendudukPendatang', 'pendudukTetap', 'jumlahKK', 'totalKeuangan', 'pemasukkan', 'pengeluaran'));
    }
}
