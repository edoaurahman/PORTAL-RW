<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AgendaModel;
use App\Models\AlamatModel;
use App\Models\PendudukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahRT = AlamatModel::groupBy('rt')->count('rt');
        $jumlahPenduduk = PendudukModel::count();
        $agenda = AgendaModel::select('id', 'title', 'deskripsi', 'start', 'end')->get();
        // dd($agenda);
        return view('admin.dashboard', compact('jumlahRT', 'jumlahPenduduk', 'agenda'));
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
        return redirect()->route('admin.dashboard')->with('success', 'Agenda Berhasil Ditambahkan.');
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
        return redirect()->route('admin.dashboard')->with('success', 'Agenda Berhasil Diubah.');
    }

    public function delete_agenda($id)
    {
        try {
            $agenda = AgendaModel::find($id);
            $agenda->delete();
        } catch (\Exception $e) {
            return config('app.debug') ? redirect()->route('admin.dashboard')->withErrors($e->getMessage())->withInput() : redirect()->route('admin.dashboard')->withErrors('Agenda Gagal Dihapus.')->withInput();
        }
        return redirect()->route('admin.dashboard')->with('success', 'Agenda Berhasil Dihapus.');
    }
}
