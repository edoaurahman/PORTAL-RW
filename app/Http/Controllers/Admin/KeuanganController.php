<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKeuangan;
use App\Models\KeuanganModel;
use App\Models\KkModel;
use App\Models\PendudukModel;
use App\Models\SettingKeuanganModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Number;

class KeuanganController extends Controller
{
    protected $pagging = 10;
    public function index(Request $request)
    {
        // jumlahkan semua keuangan per KK
        $keuangan = KeuanganModel::select('no_kk', DB::raw('sum(jumlah) as jumlah'))->groupBy('no_kk')->paginate($this->pagging)->withQueryString();
        if ($request->has('s')) {
            $keuangan = KeuanganModel::select('no_kk', DB::raw('sum(jumlah) as jumlah'))
                ->where('no_kk', 'like', '%' . $request->s . '%')
                ->groupBy('no_kk')
                ->paginate($this->pagging)->withQueryString();
        }
        $total = Number::currency(KeuanganModel::sum('jumlah'), 'IDR');
        return view('admin.keuangan.index', compact('keuangan', 'total'));
    }
    public function pembayaran()
    {
        $setting = SettingKeuanganModel::where('status', 'active')->first();

        if ($setting) {
            $intervalSetting = SettingKeuanganModel::where('status', 'active')
                ->where('nama_setting', 'Interval') // Minggu,Bulan,Tahun
                ->first();
            $intervalWaktuSetting = SettingKeuanganModel::where('status', 'active')
                ->where('nama_setting', 'Interval Waktu') // n = n/Minggu,n/Bulan,n/Tahun
                ->first();
            $minimalPembayaranSetting = SettingKeuanganModel::where('status', 'active')
                ->where('nama_setting', 'Pemasukan') // 20000
                ->first();

            $tagihan = [];
            if ($intervalSetting && $intervalWaktuSetting && $minimalPembayaranSetting) {
                $interval = $intervalSetting->nilai_setting;
                $intervalWaktu = (int) $intervalWaktuSetting->nilai_setting;
                $minimalPembayaran = (int) $minimalPembayaranSetting->nilai_setting;
                $listKK = [];
                $kepalaKK = KkModel::all();

                // Hitung jumlah pembayaran yang harus dibayar dan jumlah yang sudah dibayar
                foreach ($kepalaKK as $penduduk) {
                    $awalPembayaran = KeuanganModel::where('no_kk', $penduduk->no_kk)->first()->created_at ?? null;
                    if (empty($awalPembayaran))
                        continue;
                    $now = now();
                    switch ($interval) {
                        case '1':
                            $intervalLalu = $now->diffInWeeks($awalPembayaran) == 0 ? 1 : $now->diffInWeeks($awalPembayaran);
                            break;
                        case '2':
                            $intervalLalu = $now->diffInMonths($awalPembayaran) == 0 ? 1 : $now->diffInMonths($awalPembayaran);
                            break;
                        case '3':
                            $intervalLalu = $now->diffInYears($awalPembayaran) == 0 ? 1 : $now->diffInYears($awalPembayaran);
                            break;
                        default:
                            $intervalLalu = 0;
                            break;
                    }
                    $totalBayar = $intervalLalu * $intervalWaktu * $minimalPembayaran;
                    $totalDibayar = KeuanganModel::where('no_kk', $penduduk->no_kk)->sum('jumlah');
                    $tagihan[$penduduk->no_kk] = $totalBayar - $totalDibayar;
                    // echo ($penduduk->penduduk[0]->nama);
                    // echo "<br>";
                    // print_r($totalBayar);
                    if ($totalDibayar >= $totalBayar) {
                        $listKK[] = $penduduk->nik_kepalakeluarga;
                    }
                    // echo "<br> === <br>";
                }
                $kk = KkModel::whereNotIn('nik_kepalakeluarga', $listKK)->get();
                $penduduk = PendudukModel::whereIn('nik', $kk->pluck('nik_kepalakeluarga'))->paginate($this->pagging);
                // dd($tagihan);
                $cekKeuangan = KeuanganModel::count();
                return view("admin.keuangan.pembayaran", compact('penduduk', 'tagihan', 'cekKeuangan'));
            } else {
                return redirect()->back()->withErrors(['message' => 'Pengaturan interval, interval waktu, atau minimal pembayaran tidak ditemukan.']);
            }
        } else {
            return redirect()->back()->withErrors(['message' => 'Setting keuangan aktif tidak ditemukan.']);
        }
    }

    public function store(StoreKeuangan $request)
    {
        DB::transaction(function () use ($request) {
            $keuangan = new KeuanganModel();
            $keuangan->jumlah = $request->jumlah;
            $keuangan->no_kk = $request->no_kk;
            $keuangan->save();
        });
        return redirect()->route('admin.keuangan.pembayaran')->with('success', 'Data keuangan berhasil ditambahkan');
    }

    public function update_setting(Request $request)
    {
        $request->validate([
            'interval' => 'required',
            'interval_waktu' => 'required',
            'minimal_pembayaran' => 'required',
        ]);

        DB::transaction(function () use ($request) {
            SettingKeuanganModel::where('nama_setting', 'Interval')->update(['nilai_setting' => $request->interval]);
            SettingKeuanganModel::where('nama_setting', 'Interval Waktu')->update(['nilai_setting' => $request->interval_waktu]);
            SettingKeuanganModel::where('nama_setting', 'Pemasukan')->update(['nilai_setting' => $request->minimal_pembayaran]);
        });

        return redirect()->route('admin.keuangan.setting')->with('success', 'Setting keuangan berhasil diubah');
    }

    public function setting()
    {
        $interval = SettingKeuanganModel::where('nama_setting', 'Interval')->first();
        $intervalWaktu = SettingKeuanganModel::where('nama_setting', 'Interval Waktu')->first();
        $minimalPembayaran = SettingKeuanganModel::where('nama_setting', 'Pemasukan')->first();
        $setting = (object) [
            'interval' => $interval->nilai_setting,
            'interval_waktu' => $intervalWaktu->nilai_setting,
            'minimal_pembayaran' => $minimalPembayaran->nilai_setting,
        ];
        return view('admin.keuangan.setting', compact('setting'));
    }

    public function riwayat()
    {
        $keuangan = KeuanganModel::orderBy('created_at', 'desc')->paginate($this->pagging);
        return view('admin.keuangan.riwayat', compact('keuangan'));
    }

    public function show($no_kk)
    {
        $keuangan = KeuanganModel::where('no_kk', $no_kk)->orderBy('created_at', 'desc')->paginate($this->pagging);
        return view('admin.keuangan.show', compact('keuangan'));
    }

    public function update_keuangan(Request $request)
    {
        $request->validate([
            'jumlah' => 'required|numeric',
            'id' => 'required|exists:tb_keuangan,id_keuangan'
        ]);

        DB::transaction(function () use ($request) {
            KeuanganModel::where('id_keuangan', $request->id)->update(['jumlah' => $request->jumlah]);
        });

        return redirect()->back()->with('success', 'Data keuangan berhasil diubah');
    }
}
