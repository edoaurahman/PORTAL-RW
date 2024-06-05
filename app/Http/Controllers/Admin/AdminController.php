<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AgendaModel;
use App\Models\AlamatModel;
use App\Models\KeuanganModel;
use App\Models\PendudukModel;
use App\Models\PengeluaranModel;
use App\Models\SettingHomeModel;
use App\Models\UMKMModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Number;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahRT = AlamatModel::distinct('rt')->count('rt');
        $jumlahPenduduk = PendudukModel::count();
        $jumlahAgenda = AgendaModel::count();
        $jumlahUMKM = UMKMModel::count();

        $totalPemasukkan = KeuanganModel::sum('jumlah');
        $totalPengeluaran = PengeluaranModel::sum('jumlah');
        $total = Number::currency($totalPemasukkan - $totalPengeluaran, 'IDR');
        $totalPemasukkan = Number::currency($totalPemasukkan, 'IDR');
        $totalPengeluaran = Number::currency($totalPengeluaran, 'IDR');

        $agenda = AgendaModel::select('id', 'title', 'deskripsi', 'start', 'end')->get();
        $gambarstruktur = SettingHomeModel::select('id_setting', 'gambarstruktur')->first();
        // dd($agenda);

        // buatkan pemasukkan uang perbulan pada tahun ini
        $pemasukkan = KeuanganModel::select(DB::raw('MONTH(created_at) as bulan'), DB::raw('SUM(jumlah) as total'))
            ->whereYear('created_at', date('Y'))
            ->groupBy('bulan')
            ->get();
            
        $pengeluaran = PengeluaranModel::select(DB::raw('MONTH(created_at) as bulan'), DB::raw('SUM(jumlah) as total'))
            ->whereYear('created_at', date('Y'))
            ->groupBy('bulan')
            ->get();

        $listBulan = [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        ];

        $totalPenduduk = PendudukModel::count();
        $totalPendudukTetap = PendudukModel::where('status_penduduk', 'Penduduk Tetap')->count();
        $totalPendudukPendatang = PendudukModel::where('status_penduduk', 'Pendatang')->count();

        $totalPendudukPerempuan = PendudukModel::where('jenis_kelamin', 'Perempuan')->count();
        $totalPendudukLaki = PendudukModel::where('jenis_kelamin', 'Laki-laki')->count();

        $totalPendudukLakiTetap = PendudukModel::where('jenis_kelamin', 'Laki-laki')->where('status_penduduk', 'Penduduk Tetap')->count();
        $totalPendudukLakiPendatang = PendudukModel::where('jenis_kelamin', 'Laki-laki')->where('status_penduduk', 'Pendatang')->count();

        $totalPendudukPerempuanTetap = PendudukModel::where('jenis_kelamin', 'Perempuan')->where('status_penduduk', 'Penduduk Tetap')->count();
        $totalPendudukPerempuanPendatang = PendudukModel::where('jenis_kelamin', 'Perempuan')->where('status_penduduk', 'Pendatang')->count();

        $umkmList = UMKMModel::take(4)->get();

        // hitung umur berdasarkan tanggal lahir
        $umur = [
            '0-5' => PendudukModel::whereBetween('tgl_lahir', [date('Y-m-d', strtotime('-5 years')), date('Y-m-d')])->count(),
            '6-12' => PendudukModel::whereBetween('tgl_lahir', [date('Y-m-d', strtotime('-12 years')), date('Y-m-d', strtotime('-5 years'))])->count(),
            '13-19' => PendudukModel::whereBetween('tgl_lahir', [date('Y-m-d', strtotime('-19 years')), date('Y-m-d', strtotime('-12 years'))])->count(),
            '20-60' => PendudukModel::whereBetween('tgl_lahir', [date('Y-m-d', strtotime('-60 years')), date('Y-m-d', strtotime('-19 years'))])->count(),
            '60+' => PendudukModel::where('tgl_lahir', '<', date('Y-m-d', strtotime('-60 years')))->count(),
        ];
        // dd($umur['0-5']);

        return view('admin.dashboard', compact('jumlahRT', 'jumlahPenduduk', 'jumlahAgenda', 'jumlahUMKM', 'agenda', 'total', 'totalPemasukkan', 'totalPengeluaran', 'gambarstruktur', 'pemasukkan', 'pengeluaran', 'listBulan', 'totalPenduduk', 'totalPendudukPerempuan', 'totalPendudukLaki', 'totalPendudukLakiTetap', 'totalPendudukLakiPendatang', 'totalPendudukPerempuanTetap', 'totalPendudukPerempuanPendatang', 'totalPendudukTetap', 'totalPendudukPendatang', 'umur', 'umkmList'));
    }

    public function store_agenda(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);

        try {
            DB::transaction(function () use ($request) {
                $agenda = new AgendaModel();
                $agenda->title = $request->title;
                $agenda->deskripsi = $request->deskripsi;
                $agenda->start = $request->start;
                $agenda->end = $request->end;
                $agenda->author = auth()->user()->nik;
                $agenda->save();
            });
        } catch (\Exception $e) {
            return config('app.debug') ? redirect()->route('admin.dashboard')->withErrors($e->getMessage())->withInput() : redirect()->route('admin.dashboard')->withErrors('Agenda Gagal Ditambahkan.')->withInput();
        }
        return redirect()->route('admin.dashboard', '#kalender')->with('success', 'Agenda Berhasil Ditambahkan.');
    }

    public function update_agenda(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);

        try {
            DB::transaction(function () use ($request) {
                $agenda = AgendaModel::find($request->id);
                $agenda->title = $request->title;
                $agenda->deskripsi = $request->deskripsi;
                $agenda->start = $request->start;
                $agenda->end = $request->end;
                $agenda->author = auth()->user()->nik;
                $agenda->save();
            });
        } catch (\Exception $e) {
            return config('app.debug') ? redirect()->route('admin.dashboard')->withErrors($e->getMessage())->withInput() : redirect()->route('admin.dashboard')->withErrors('Agenda Gagal Diubah.')->withInput();
        }
        return redirect()->route('admin.dashboard', '#kalender')->with('success', 'Agenda Berhasil Diubah.');
    }

    public function delete_agenda($id)
    {
        try {
            $agenda = AgendaModel::find($id);
            $agenda->delete();
        } catch (\Exception $e) {
            return config('app.debug') ? redirect()->route('admin.dashboard')->withErrors($e->getMessage())->withInput() : redirect()->route('admin.dashboard')->withErrors('Agenda Gagal Dihapus.')->withInput();
        }
        return redirect()->route('admin.dashboard', '#kalender')->with('success', 'Agenda Berhasil Dihapus.');

    }

    // public function updategambarStruktur(Request $request)
    // {
    //     $request->validate([
    //         'gambarstruktur' => 'required|image|mimes:jpeg,png,webp,jpg,gif,svg|max:2048',
    //     ]);

    //     try {
    //         $gambarstruktur = SettingHomeModel::find($request->id_setting);
    //         // hapus gambar lama keculi gambar default struktur.png
    //         if ($gambarstruktur->gambarstruktur != 'struktur.png') {
    //             if (file_exists(public_path('assets/images/struktur/' . $gambarstruktur->gambarstruktur))) {
    //                 unlink(public_path('assets/images/struktur/' . $gambarstruktur->gambarstruktur));
    //             }
    //         }
    //         $gambarstruktur->gambarstruktur = $request->gambarstruktur->hashName();
    //         $gambarstruktur->save();
    //         move_uploaded_file($request->gambarstruktur, public_path('assets/images/struktur/' . $gambarstruktur->gambarstruktur));
    //     } catch (\Exception $e) {
    //         return config('app.debug') ? redirect()->route('admin.dashboard')->withErrors($e->getMessage())->withInput() : redirect()->route('admin.dashboard')->withErrors('Struktur RT Berhasil di Ubah, Gambar tidak ditemukan')->withInput();
    //     }
    //     return redirect()->route('admin.dashboard')->with('success', 'Struktur RW Berhasil Diubah.');
    // }
}
