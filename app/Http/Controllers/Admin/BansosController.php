<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBansos;
use App\Models\BansosModel;
use App\Models\FotoBansosModel;
use App\Notifications\Bansos;
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
        // Matriks perbandingan kriteria
        $criteriaComparisonMatrix = [
            [1, 3, 5, 7, 9],
            [1 / 3, 1, 3, 5, 7],
            [1 / 5, 1 / 3, 1, 3, 5],
            [1 / 7, 1 / 5, 1 / 3, 1, 3],
            [1 / 9, 1 / 7, 1 / 5, 1 / 3, 1],
        ];

        // Hitung bobot kriteria
        $criteriaWeights = $this->calculateWeights($criteriaComparisonMatrix);

        // Ambil data bansos yang statusnya pending
        $bansos = BansosModel::where('status', 'pending')->get();

        $bansosWeights = [];
        foreach ($bansos as $data) {
            $gajiWeight = $criteriaWeights[0] * (1 / $data->gaji);
            $tanggunganWeight = $criteriaWeights[1] * $data->jumlah_tanggungan;
            $luasTanahWeight = $criteriaWeights[2] * (1 / $data->luas_tanah);
            $listrikWeight = $criteriaWeights[3] * (1 / $data->kapasitas_listrik);
            $kendaraanWeight = $criteriaWeights[4] * (1 / $data->jumlah_kendaraan);

            $totalWeight = $gajiWeight + $tanggunganWeight + $luasTanahWeight + $listrikWeight + $kendaraanWeight;

            $bansosWeights[] = [
                'id_bansos' => $data->id_bansos,
                'no_kk' => $data->no_kk,
                'gaji' => $gajiWeight,
                'jumlah_tanggungan' => $tanggunganWeight,
                'luas_tanah' => $luasTanahWeight,
                'kapasitas_listrik' => $listrikWeight,
                'jumlah_kendaraan' => $kendaraanWeight,
                'nilai_total' => $totalWeight,
            ];
        }

        // Urutkan berdasarkan nilai total secara descending
        usort($bansosWeights, function ($a, $b) {
            return $b['nilai_total'] <=> $a['nilai_total'];
        });

        return $bansosWeights;
    }

    private function calculateWeights($matrix)
    {
        $numCriteria = count($matrix);

        // Jumlahkan setiap kolom
        $columnSums = array_fill(0, $numCriteria, 0);
        for ($i = 0; $i < $numCriteria; $i++) {
            for ($j = 0; $j < $numCriteria; $j++) {
                $columnSums[$j] += $matrix[$i][$j];
            }
        }

        // Normalisasi matriks
        $normalizedMatrix = [];
        for ($i = 0; $i < $numCriteria; $i++) {
            for ($j = 0; $j < $numCriteria; $j++) {
                $normalizedMatrix[$i][$j] = $matrix[$i][$j] / $columnSums[$j];
            }
        }

        // Hitung bobot kriteria
        $weights = array_fill(0, $numCriteria, 0);
        for ($i = 0; $i < $numCriteria; $i++) {
            $weights[$i] = array_sum($normalizedMatrix[$i]) / $numCriteria;
        }

        return $weights;
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
            1 => '1 Orang',
            2 => '2 Orang',
            3 => '3 Orang',
            4 => '4 Orang',
            5 => '5 Orang atau Lebih',
        ];
        $luas_tanah = [
            1 => 'Kurang dari 50 m2',
            2 => '50 m2 - 100 m2',
            3 => '100 m2 - 200 m2',
            4 => '200 m2 - 500 m2',
            5 => 'Lebih dari 500 m2',
        ];
        $kapasitas_listrik = [
            1 => '450 VA',
            2 => '900 VA',
            3 => '1300 VA',
            4 => '2200 VA',
            5 => 'Lebih dari 2200 VA',
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
        $bansos->kk->akunKepalaKeluarga->notify(new Bansos('Periksa status bansos Anda.'));
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
        // kirim notifikasi
        $bansos->kk->akunKepalaKeluarga->notify(new Bansos('Periksa status bansos Anda.'));
        return redirect()->back()->with('success', 'Status bansos berhasil diubah');
    }
}
