<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBansos;
use App\Models\BansosModel;
use App\Models\FotoBansosModel;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BansosController extends Controller
{
    private $pagination = 10;
    private function method_saw()
    {
        $bobot = [
            'gaji' => 0.25,
            'jumlah_tanggungan' => 0.3,
            'luas_tanah' => 0.2,
            'kapasitas_listrik' => 0.15,
            'jumlah_kendaraan' => 0.1,
        ];
        $data = BansosModel::where('status', 'pending')->get();

        // Normalisasi nilai kriteria
        $maxJumlahTanggungan = $data->max('jumlah_tanggungan');
        $minGaji = $data->min('gaji');
        $minLuasTanah = $data->min('luas_tanah');
        $minKapasitasListrik = $data->min('kapasitas_listrik');
        $minJumlahKendaraan = $data->min('jumlah_kendaraan');

        $normalizedData = $data->map(function ($item) use ($maxJumlahTanggungan, $minGaji, $minLuasTanah, $minKapasitasListrik, $minJumlahKendaraan) {
            return [
                'id_bansos' => $item->id_bansos,
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
        $data = BansosModel::where('status', 'pending')->get();
        // Normalisasi nilai kriteria
        $maxJumlahTanggungan = $data->max('jumlah_tanggungan');
        $minGaji = $data->min('gaji');
        $minLuasTanah = $data->min('luas_tanah');
        $minKapasitasListrik = $data->min('kapasitas_listrik');
        $minJumlahKendaraan = $data->min('jumlah_kendaraan');

        $normalizedData = $data->map(function ($item) use ($maxJumlahTanggungan, $minGaji, $minLuasTanah, $minKapasitasListrik, $minJumlahKendaraan) {
            return [
                'id_bansos' => $item->id_bansos,
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
        $gaji = [
            1 => 'Kurang dari 1 Juta',
            2 => '1 Juta - 2 Juta',
            3 => '2 Juta - 3 Juta',
            4 => '3 Juta - 4 Juta',
            5 => 'Lebih dari 4 Juta',
        ];
        $jumlah_tanggungan = [
            1 => '1 - 2 Orang',
            2 => '3 - 4 Orang',
            3 => '5 - 6 Orang',
            4 => '7 - 8 Orang',
            5 => 'Lebih dari 8 Orang',
        ];
        $luas_tanah = [
            1 => 'Kurang dari 36 m2',
            2 => '36 m2 - 72 m2',
            3 => '72 m2 - 108 m2',
            4 => '108 m2 - 144 m2',
            5 => 'Lebih dari 144 m2',
        ];
        $kapasitas_listrik = [
            1 => '450 VA',
            2 => '900 VA',
            3 => '1300 VA',
            4 => '2200 VA',
            5 => '4400 VA',
        ];
        $jumlah_kendaraan = [
            1 => 'Tidak Punya',
            2 => '1 Kendaraan',
            3 => '2 Kendaraan',
            4 => '3 Kendaraan',
            5 => 'Lebih dari 3 Kendaraan',
        ];
        // dd($bansos);

        return view('admin.bansos.show', compact('bansos', 'gaji', 'jumlah_tanggungan', 'luas_tanah', 'kapasitas_listrik', 'jumlah_kendaraan'));
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

    public function set_status(Request $request)
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

    public function penerima(Request $request)
    {
        $penerima = BansosModel::whereIn('status', ['done', 'approved'])->where('created_at', '>=', now()->subMonth())->paginate($this->pagination);
        if ($request->has('date')) {
            $date = Carbon::parse($request->date);
            $year = $date->year;
            $month = $date->month;
            $penerima = BansosModel::whereIn('status', ['done', 'approved'])
                ->whereYear('created_at', $year)
                ->whereMonth('created_at', $month)
                ->paginate($this->pagination);
        }
        if ($request->has('s')) {
            $penerima = BansosModel::whereIn('status', ['done', 'approved'])
                ->where('no_kk', 'like', '%' . $request->s . '%')
                ->paginate($this->pagination);
        }
        return view('admin.bansos.penerima', compact('penerima'));
    }

    public function set_penerima(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:tb_bansos,id_bansos',
            'status' => 'required|in:done,approved,pending',
        ]);
        $bansos = BansosModel::find($request->id);
        $bansos->status = $request->status;
        $bansos->save();
        return redirect()->back()->with('success', 'Status bansos berhasil diubah');
    }
}
