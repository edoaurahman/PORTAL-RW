<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAkunPenduduk;
use App\Http\Requests\StorePenduduk;
use App\Models\AkunModel;
use App\Models\AlamatModel;
use App\Models\KkModel;
use App\Models\LevelModel;
use App\Models\PendudukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    private function isAdmin(): bool
    {
        return $this->level === 'Super Admin';
    }
    private function isRW(): bool
    {
        return $this->level === 'RW';
    }

    public function index(Request $request)
    {
        $penduduk = new PendudukModel();
        $paginate = 10;
        try {
            if ($this->isAdmin()) {
                $penduduk = PendudukModel::with('alamat')->paginate($paginate);
                if ($request->has('s')) {
                    $penduduk = PendudukModel::where('nama', 'like', '%' . $request->s . '%')->paginate($paginate);
                }
            } else if ($this->isRW()) {
                $penduduk = PendudukModel::with('alamat')->whereHas('akun.level', function ($query) {
                    $query->whereIn('nama_level', ['Penduduk', 'RT']);
                })->paginate($paginate);
                if ($request->has('s')) {
                    $penduduk = PendudukModel::with('alamat')->whereHas('akun.level', function ($query) {
                        $query->whereIn('nama_level', ['Penduduk', 'RT']);
                    })->where('nama', 'like', '%' . $request->s . '%')->paginate($paginate);
                }
            } else {
                $rt = $this->alamat->rt;
                $penduduk = PendudukModel::with('alamat')->whereHas('alamat', function ($query) use ($rt) {
                    $query->where('rt', $rt);
                })->paginate($paginate);

                if ($request->has('s')) {
                    $penduduk = PendudukModel::with('alamat')->whereHas('alamat', function ($query) use ($rt) {
                        $query->where('rt', $rt);
                    })->where('nama', 'like', '%' . $request->s . '%')->paginate($paginate);
                }
            }
        } catch (\Exception $e) {
            return redirect()->route('error')->with([
                'code' => 500,
                'message' => $e->getMessage(),
            ]);
        }
        return view('admin.penduduk.index', compact('penduduk'));
    }

    public function akun_penduduk()
    {
        $penduduk = new AkunModel();
        try {
            if ($this->isAdmin()) {
                $penduduk = AkunModel::all();
            } else if ($this->isRW()) {
                $penduduk = AkunModel::with('penduduk', 'level')->whereHas('level', function ($query) {
                    $query->whereIn('nama_level', ['Penduduk', 'RT']);
                })->get();
            } else {
                $rt = $this->alamat->rt;
                $penduduk = AkunModel::with('penduduk', 'level')->whereHas('penduduk.alamat', function ($query) use ($rt) {
                    $query->where('rt', $rt);
                })->whereHas('level', function ($query) {
                    $query->where('nama_level', 'Penduduk');
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
            if ($this->isAdmin()) {
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
                    'kel' => $request->kel,
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
            return redirect()->back()->withErrors('Kepala Keluarga dengan no KK ' . ' ' . $request->no_kk . ' ' . 'belum terdaftar. nyalakan opsi <strong class="dark:text-white text-black">☑️ kepala keluarga</strong>, anda dapat merubah kepala keluarga pada halaman detail KK.')->withInput();
        }

        return redirect()->route('admin.penduduk')->with('success', 'Penduduk Berhasil Ditambahkan.');
    }

    public function akun_penduduk_store(StoreAkunPenduduk $request)
    {
        $setAsNik = $request->setAsNik;
        $nik = $request->nik;
        $id_level = LevelModel::where('nama_level', 'Penduduk')->first()->id_level;
        if ($setAsNik) {
            AkunModel::create([
                'nik' => $nik,
                'username' => $nik,
                'password' => Hash::make($nik),
                'email' => $request->email,
                'id_level' => $id_level,
            ]);

            return redirect()->route('admin.penduduk.akun')->with('success', 'Akun Berhasil Ditambahkan.');
        }
        AkunModel::create([
            'nik' => $request->nik,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'id_level' => $id_level,
        ]);
        return redirect()->route('admin.penduduk.akun')->with('success', 'Akun Berhasil Ditambahkan.');
    }

    public static function akun_penduduk_update(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'username' => 'required',
            'password' => 'nullable',
            'email' => 'required',
        ]);

        try {
            $akun = AkunModel::where('nik', $request->nik)->first();
            if ($request->password != null) {
                $akun->update([
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                    'email' => $request->email,
                ]);
            } else {
                $akun->update([
                    'username' => $request->username,
                    'email' => $request->email,
                ]);
            }
            return redirect()->route('admin.penduduk.akun')->with('success', 'Akun Berhasil Diupdate.');
        } catch (\Exception $e) {
            return redirect()->route('admin.penduduk.akun')->withErrors($e->getMessage())->withInput();
        }
    }

    public function detail_penduduk($nik)
    {
        $penduduk = PendudukModel::with('alamat')->where('nik', $nik)->first();
        $detail_penduduk = [
            'No KK' => $penduduk->no_kk,
            'Nama' => $penduduk->nama,
            'NIK' => $penduduk->nik,
            'Tempat Lahir' => $penduduk->tempat_lahir,
            'Tanggal Lahir' => $penduduk->tgl_lahir,
            'Jenis Kelamin' => $penduduk->jenis_kelamin,
            'Golongan Darah' => $penduduk->gol_darah,
            'Agama' => $penduduk->agama,
            'Status Perkawinan' => $penduduk->status_perkawinan,
            'Pekerjaan' => $penduduk->pekerjaan,
            'Alamat' => $penduduk->alamat->jalan,
            'Kelurahan' => $penduduk->alamat->kel,
            'Kecamatan' => $penduduk->alamat->kecamatan,
            'Rt' => $penduduk->alamat->rt,
            'Rw' => $penduduk->alamat->rw,
        ];
        return view('admin.penduduk.penduduk-detail', compact('detail_penduduk'));
    }

    public function update(Request $request)
    {
        $penduduk = PendudukModel::where('nik', $request->nik)->first();
        $penduduk->update($request->all());
        $alamat = AlamatModel::where('id_alamat', $penduduk->id_alamat)->first();
        $alamat->update($request->all());
        return redirect()->route('admin.penduduk')->with('success', 'Penduduk Berhasil Diupdate.');
    }

    public function destroy($nik)
    {
        // return $nik;
        try {
            $penduduk = PendudukModel::where('nik', $nik)->first();
            $penduduk->delete();
        } catch (\Exception $e) {
            return redirect()->route('admin.penduduk')->withErrors('Penduduk Gagal Dihapus.');
        }
        return redirect()->route('admin.penduduk')->with('success', 'Penduduk Berhasil Dihapus.');
    }

    public function update_kk(Request $request)
    {
        $request->validate([
            'no_kk' => 'required',
            'no_kk_prev' => 'required',
            'nik_kepalakeluarga' => 'required',
        ]);
        try {
            $kk = KkModel::where('no_kk', $request->no_kk_prev)->first();
            $kk->update([
                'no_kk' => $request->no_kk,
                'nik_kepalakeluarga' => $request->nik_kepalakeluarga,
            ]);
            return redirect()->route('admin.penduduk.kk')->with('success', 'Kepala Keluarga Berhasil Diupdate.');
        } catch (\Exception $e) {
            return redirect()->route('admin.penduduk.kk')->withErrors($e->getMessage())->withInput();
        }
    }

    public function akun_penduduk_delete($id)
    {
        try {
            $akun = AkunModel::find($id);
            $akun->delete();
            return redirect()->route('admin.penduduk.akun')->with('success', 'Akun Berhasil Dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.penduduk.akun')->withErrors($e->getMessage());
        }
    }
}
