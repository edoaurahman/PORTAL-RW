<?php

namespace App\View\Components\Partials\Admin\ReportData;

use App\Models\AlamatModel;
use App\Models\KeuanganModel;
use App\Models\KkModel;
use App\Models\PendudukModel;
use App\Models\PengeluaranModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Preview extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
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

        return view("components.partials.admin.report-data.preview", compact('jumlahRT', 'totalPenduduk', 'pendudukPendatang', 'pendudukTetap', 'jumlahKK', 'totalKeuangan', 'pemasukkan', 'pengeluaran'));
    }
}
