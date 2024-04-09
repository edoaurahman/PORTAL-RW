<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePenduduk;
use App\Models\AkunModel;
use App\Models\AlamatModel;
use App\Models\KkModel;
use App\Models\PendudukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendudukController extends Controller
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

    private function checkLevel(string $level): bool
    {
        return $level === 'Super Admin' || $level === 'RW';
    }

    public function index()
    {
        $penduduk = new PendudukModel();
        try {
            if ($this->checkLevel($this->level)) {
                $penduduk = PendudukModel::all();
            } else {
                $rt = $this->alamat->rt;
                $penduduk = PendudukModel::with('alamat')->whereHas('alamat', function ($query) use ($rt) {
                    $query->where('rt', $rt);
                })->get();
            }
        } catch (\Exception $e) {
            return redirect()->route('error')->with([
                'code' => 500,
                'message' => $e->getMessage(),
            ]);
        }
        $kk = KkModel::with('pendudukHasOne')->get();
        return view('admin.penduduk.index', compact('penduduk', 'kk'));
    }

    public function akun_penduduk()
    {
        $penduduk = new AkunModel();
        try {
            if ($this->checkLevel($this->level)) {
                $penduduk = AkunModel::all();
            } else {
                $rt = $this->alamat->rt;
                $penduduk = AkunModel::with('penduduk')->whereHas('penduduk.alamat', function ($query) use ($rt) {
                    $query->where('rt', $rt);
                })->get();
            }
        } catch (\Exception $e) {
            return redirect()->route('error')->with([
                'code' => 500,
                'message' => $e->getMessage(),
            ]);
        }
        return view('admin.penduduk.akun', compact('penduduk'));
    }

    public function kk_penduduk()
    {
        $penduduk = new KkModel();
        try {
            if ($this->checkLevel($this->level)) {
                $penduduk = KkModel::with('pendudukHasOne')->get();
            } else {
                $rt = $this->alamat->rt;
                $penduduk = KkModel::with('pendudukHasOne')->whereHas('pendudukHasOne.alamat', function ($query) use ($rt) {
                    $query->where('rt', $rt);
                })->get();
            }
        } catch (\Exception $e) {
            return redirect()->route('error')->with([
                'code' => 500,
                'message' => $e->getMessage(),
            ]);
        }
        return view('admin.penduduk.kk', compact('penduduk'));
    }

    public function kk_detail_penduduk(string $no_kk)
    {
        $penduduk = KkModel::with('penduduk')->where('no_kk', $no_kk)->first();
        // dd($penduduk->toArray());
        return view('admin.penduduk.kk-detail', compact('penduduk'));
    }

    public function store(StorePenduduk $request)
    {

        $isKepalaKK = $request->isKepalaKK;
        if (!empty($isKepalaKK)) {
            $kk = [
                'no_kk' => $request->no_kk,
                'nik_kepalakeluarga' => $request->nik,
            ];
            $isKepalaKK = KkModel::where('no_kk', $request->no_kk)->first();
            if (!empty($isKepalaKK)) {
                return redirect()->back()->withErrors('Kepala Keluarga dengan no KK ' . ' ' . $request->no_kk . ' ' . 'sudah terdaftar. hilangkan opsi kepala keluarga, anda dapat merubah kepala keluarga pada halaman detail KK.');
            } else {
                KkModel::create($kk);
            }
        }

        try {
            DB::transaction(function () use ($request) {
                $alamat = AlamatModel::create([
                    'kel' => $request->kelurahan,
                    'kecamatan' => $request->kecamatan,
                    'jalan' => $request->jalan,
                    'rw' => $request->rw,
                    'rt' => $request->rt,
                ]);

                $request->merge([
                    'id_alamat' => $alamat->id_alamat,
                ]);

                PendudukModel::create($request->all());
            });
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Kepala Keluarga dengan no KK ' . ' ' . $request->no_kk . ' ' . 'belum terdaftar. nyalakan opsi <strong class="text-white">☑️ kepala keluarga</strong>, anda dapat merubah kepala keluarga pada halaman detail KK.')->withInput();
        }

        return redirect()->route('admin.penduduk')->with('success', 'Penduduk Berhasil Ditambahkan.');
    }
}
