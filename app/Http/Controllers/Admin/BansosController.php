<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBansos;
use App\Models\BansosModel;
use App\Models\FotoBansosModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BansosController extends Controller
{
    private function method_saw()
    {
        $bobot = [
            'gaji' => 0.25,
            'jumlah_tanggungan' => 0.3,
            'luas_tanah' => 0.2,
            'kapasitas_listrik' => 0.15,
            'jumlah_kendaraan' => 0.1,
        ];
        $data = BansosModel::all();

        // Normalisasi nilai kriteria
        $maxJumlahTanggungan = $data->max('jumlah_tanggungan');
        $minGaji = $data->min('gaji');
        $minLuasTanah = $data->min('luas_tanah');
        $minKapasitasListrik = $data->min('kapasitas_listrik');
        $minJumlahKendaraan = $data->min('jumlah_kendaraan');

        $normalizedData = $data->map(function ($item) use ($maxJumlahTanggungan, $minGaji, $minLuasTanah, $minKapasitasListrik, $minJumlahKendaraan) {
            return [
                'no_kk' => $item->no_kk,
                'gaji' => $minGaji / $item->gaji,
                'jumlah_tanggungan' => $item->jumlah_tanggungan / $maxJumlahTanggungan,
                'luas_tanah' => $minLuasTanah / $item->luas_tanah,
                'kapasitas_listrik' => $minKapasitasListrik / $item->kapasitas_listrik,
                'jumlah_kendaraan' => $minJumlahKendaraan / $item->jumlah_kendaraan,
            ];
        });
        // Menghitung nilai total
        $rankedData = $normalizedData->map(function ($item) use ($bobot) {
            $item['nilai_total'] = ($item['gaji'] * $bobot['gaji']) +
                ($item['jumlah_tanggungan'] * $bobot['jumlah_tanggungan']) +
                ($item['luas_tanah'] * $bobot['luas_tanah']) +
                ($item['kapasitas_listrik'] * $bobot['kapasitas_listrik']) +
                ($item['jumlah_kendaraan'] * $bobot['jumlah_kendaraan']);
            return $item;
        });
        // Urutkan berdasarkan nilai total
        $sortedData = $rankedData->sortByDesc('nilai_total');

        return $sortedData;
    }

    public function method_ahp()
    {
        $bobot = [
            'gaji' => 0.15,
            'jumlah_tanggungan' => 0.25,
            'luas_tanah' => 0.2,
            'kapasitas_listrik' => 0.2,
            'jumlah_kendaraan' => 0.2,
        ];
        $data = BansosModel::all();
        // Normalisasi nilai kriteria
        $maxJumlahTanggungan = $data->max('jumlah_tanggungan');
        $minGaji = $data->min('gaji');
        $minLuasTanah = $data->min('luas_tanah');
        $minKapasitasListrik = $data->min('kapasitas_listrik');
        $minJumlahKendaraan = $data->min('jumlah_kendaraan');

        $normalizedData = $data->map(function ($item) use ($maxJumlahTanggungan, $minGaji, $minLuasTanah, $minKapasitasListrik, $minJumlahKendaraan) {
            return [
                'no_kk' => $item->no_kk,
                'gaji' => $minGaji / $item->gaji,
                'jumlah_tanggungan' => $item->jumlah_tanggungan / $maxJumlahTanggungan,
                'luas_tanah' => $minLuasTanah / $item->luas_tanah,
                'kapasitas_listrik' => $minKapasitasListrik / $item->kapasitas_listrik,
                'jumlah_kendaraan' => $minJumlahKendaraan / $item->jumlah_kendaraan,
            ];
        });

        // Menghitung nilai total
        $rankedData = $normalizedData->map(function ($item) use ($bobot) {
            $item['nilai_total'] = ($item['gaji'] * $bobot['gaji']) +
                ($item['jumlah_tanggungan'] * $bobot['jumlah_tanggungan']) +
                ($item['luas_tanah'] * $bobot['luas_tanah']) +
                ($item['kapasitas_listrik'] * $bobot['kapasitas_listrik']) +
                ($item['jumlah_kendaraan'] * $bobot['jumlah_kendaraan']);
            return $item;
        });

        // Urutkan berdasarkan nilai total
        $sortedData = $rankedData->sortByDesc('nilai_total');
        // dd($sortedData, $rankedData);
        return $sortedData;
    }

    public function index()
    {
        $saw = $this->method_saw();
        $ahp = $this->method_ahp();
        return view("admin.bansos.index", compact('saw', 'ahp'));
    }

    public function store(StoreBansos $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $bansos = new BansosModel();
                $bansos->no_kk = $request->no_kk;
                $bansos->gaji = $request->gaji;
                $bansos->jumlah_tanggungan = $request->jumlah_tanggungan;
                $bansos->luas_tanah = $request->luas_tanah;
                $bansos->kapasitas_listrik = $request->kapasitas_listrik;
                $bansos->jumlah_kendaraan = $request->jumlah_kendaraan;
                $bansos->save();

                foreach ($request->images as $image) {
                    $foto_bansos = new FotoBansosModel();
                    $foto_bansos->id_bansos = $bansos->id_bansos;
                    $foto_bansos->image = $image->hashName();
                    $foto_bansos->save();
                    $image->store('images/foto_bansos', 'public');
                }
            });
        } catch (\Exception $e) {
            return redirect()->route('admin.bansos')->withErrors('Data bansos gagal ditambahkan');
        }

        return redirect()->route('admin.bansos')->with('success', 'Data bansos berhasil ditambahkan');
    }

    public function update(BansosModel $bansos, Request $request)
    {
        try {
            DB::transaction(function () use ($bansos, $request) {
                $bansos->gaji = $request->gaji;
                $bansos->jumlah_tanggungan = $request->jumlah_tanggungan;
                $bansos->luas_tanah = $request->luas_tanah;
                $bansos->kapasitas_listrik = $request->kapasitas_listrik;
                $bansos->jumlah_kendaraan = $request->jumlah_kendaraan;
                $bansos->status = 'pending';
                $bansos->save();

                if ($request->hasFile('images')) {
                    foreach ($request->images as $image) {
                        $foto_bansos = new FotoBansosModel();
                        $foto_bansos->id_bansos = $bansos->id_bansos;
                        $foto_bansos->image = $image->hashName();
                        $foto_bansos->save();
                        $image->store('images/foto_bansos', 'public');
                    }
                }
            });
        } catch (\Exception $e) {
            return redirect()->route('admin.bansos')->withErrors('Data bansos gagal diubah');
        }
        return redirect()->route('admin.bansos')->with('success', 'Data bansos berhasil diubah');
    }

    public function show(BansosModel $bansos)
    {
        $bansos->load('foto_bansos');
        return view('admin.bansos.show', compact('bansos'));
    }

    public function destroy_foto_bansos(Request $request)
    {
        $foto_bansos = FotoBansosModel::find($request->id);
        Storage::delete('public/images/foto_bansos/' . $foto_bansos->image);
        $foto_bansos->delete();
        return redirect()->back()->with('success', 'Foto bansos berhasil dihapus');
    }

    public function destroy(Request $request)
    {
        $bansos = BansosModel::find($request->id);
        // delete foto bansos
        foreach ($bansos->foto_bansos as $foto_bansos) {
            Storage::delete('public/images/foto_bansos/' . $foto_bansos->image);
            $foto_bansos->delete();
        }
        $bansos->delete();
        return redirect()->back()->with('success', 'Data bansos berhasil dihapus');
    }

    public function status(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:tb_bansos,id_bansos',
            'status' => 'required|in:approved,rejected',
            'alasan' => 'required_if:status,rejected',
        ]);
        $bansos = BansosModel::find($request->id);
        $bansos->status = $request->status;
        $bansos->alasan = $request->alasan;
        $bansos->save();
        return redirect()->back()->with('success', 'Status bansos berhasil diubah');
    }
}
