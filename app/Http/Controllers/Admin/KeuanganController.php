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

class KeuanganController extends Controller
{
    protected $pagging = 10;
    public function index()
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

            if ($intervalSetting && $intervalWaktuSetting && $minimalPembayaranSetting) {
                $interval = $intervalSetting->nilai_setting;
                $intervalWaktu = (int) $intervalWaktuSetting->nilai_setting;
                $minimalPembayaran = (int) $minimalPembayaranSetting->nilai_setting;
                $listKK = [];
                $kepalaKK = KkModel::all();

                // Hitung jumlah pembayaran yang harus dibayar dan jumlah yang sudah dibayar
                foreach ($kepalaKK as $penduduk) {
                    $awalPembayaran = KeuanganModel::where('nik', $penduduk->nik_kepalakeluarga)->first()->created_at ?? null;
                    if (empty($awalPembayaran))
                        continue;
                    $now = now();
                    switch ($interval) {
                        case '1':
                            $intervalLalu = $now->diffInWeeks($awalPembayaran);
                            break;
                        case '2':
                            $intervalLalu = $now->diffInMonths($awalPembayaran);
                            break;
                        case '3':
                            $intervalLalu = $now->diffInYears($awalPembayaran);
                            break;
                        default:
                            $intervalLalu = 0;
                            break;
                    }
                    $totalBayar = $intervalLalu * $intervalWaktu * $minimalPembayaran;
                    $totalDibayar = KeuanganModel::where('nik', $penduduk->nik_kepalakeluarga)->sum('jumlah');
                    if ($totalDibayar >= $totalBayar) {
                        $listKK[] = $penduduk->nik_kepalakeluarga;
                    }
                }
                $kk = KkModel::whereNotIn('nik_kepalakeluarga', $listKK)->get();
                $penduduk = PendudukModel::whereIn('nik', $kk->pluck('nik_kepalakeluarga'))->paginate($this->pagging);

                return view("admin.keuangan", compact('penduduk'));
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
            $keuangan->id_kategori = $request->id_kategori;
            $keuangan->jumlah = $request->jumlah;
            $keuangan->nik = $request->nik;
            $keuangan->save();
        });
        return redirect()->route('admin.keuangan')->with('success', 'Data keuangan berhasil ditambahkan');
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

        return redirect()->route('admin.keuangan')->with('success', 'Setting keuangan berhasil diubah');
    }
}
