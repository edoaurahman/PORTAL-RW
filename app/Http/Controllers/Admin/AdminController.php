<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AgendaModel;
use App\Models\AlamatModel;
use App\Models\KeuanganModel;
use App\Models\PendudukModel;
use App\Models\PengeluaranModel;
use App\Models\UMKMModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Number;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahRT = AlamatModel::groupBy('rt')->count('rt');
        $jumlahPenduduk = PendudukModel::count();
        $jumlahAgenda = AgendaModel::count();
        $jumlahUMKM = UMKMModel::count();

        $totalPemasukkan = KeuanganModel::sum('jumlah');
        $totalPengeluaran = PengeluaranModel::sum('jumlah');
        $total = Number::currency($totalPemasukkan - $totalPengeluaran, 'IDR');
        $totalPemasukkan = Number::currency($totalPemasukkan, 'IDR');
        $totalPengeluaran = Number::currency($totalPengeluaran, 'IDR');

        $agenda = AgendaModel::select('id', 'title', 'deskripsi', 'start', 'end')->get();
        // dd($agenda);

        return view('admin.dashboard', compact('jumlahRT', 'jumlahPenduduk', 'jumlahAgenda', 'jumlahUMKM', 'agenda', 'total', 'totalPemasukkan', 'totalPengeluaran'));
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
}
