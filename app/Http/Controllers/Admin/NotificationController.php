<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AkunModel;
use App\Models\KeuanganModel;
use App\Models\KkModel;
use App\Models\PendudukModel;
use App\Models\SettingKeuanganModel;
use App\Notifications\BayarIuran;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    private $level;
    private $alamat;
    private $user;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->init();
            return $next($request);
        });
    }
    private function init()
    {
        $this->user = auth()->user();
        $this->level = $this->user->level->nama_level;
        $this->alamat = $this->user->penduduk->alamat;
    }
    public function iuran_reminder()
    {
        // mendapatkan semua akun yang belum membayar iuran bulan ini
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
                $kepalaKK = KkModel::whereHas('kepalaKeluarga.alamat', function ($query) {
                    $query->where('rt', $this->alamat->rt);
                })->get();

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
                    if ($totalDibayar >= $totalBayar) {
                        $listKK[] = $penduduk->nik_kepalakeluarga;
                    }
                }
                $kk = KkModel::whereNotIn('nik_kepalakeluarga', $listKK)->whereHas('kepalaKeluarga.alamat', function ($query) {
                    $query->where('rt', $this->alamat->rt);
                })->get();
                $penduduk = AkunModel::whereIn('nik', $kk->pluck('nik_kepalakeluarga'))->get();
                foreach ($penduduk as $p) {
                    $p->notify(new BayarIuran('Anda belum membayar iuran bulan ini. Silahkan segera membayar.'));
                }
            } else {
                return redirect()->back()->withErrors(['message' => 'Pengaturan interval, interval waktu, atau minimal pembayaran tidak ditemukan.']);
            }
        } else {
            return redirect()->back()->withErrors(['message' => 'Setting keuangan aktif tidak ditemukan.']);
        }
        return redirect()->back()->with('success', 'Pemberitahuan iuran berhasil dikirim.');
    }
}
