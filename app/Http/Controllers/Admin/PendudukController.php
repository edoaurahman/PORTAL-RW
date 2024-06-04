<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAkunPenduduk;
use App\Http\Requests\StorePenduduk;
use App\Models\AkunModel;
use App\Models\AlamatModel;
use App\Models\FotoRumah;
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
        $paginate = 10;
        try {
            $query = PendudukModel::with('alamat');

            if ($request->has('s')) {
                $query->where('nama', 'like', '%' . $request->s . '%');
            }

            if ($this->isAdmin()) {
                $query->where('nama', 'like', '%' . $request->s . '%');
            } elseif ($this->isRW()) {
                $query->where('nama', 'like', '%' . $request->s . '%');
            } else {
                $rt = $this->alamat->rt;
                $query->whereHas('alamat', function ($query) use ($rt) {
                    $query->where('rt', $rt);
                });
            }

            $filters = [
                'rt' => 'alamat.rt',
                'status_penduduk' => 'status_penduduk',
                'jenis_kelamin' => 'jenis_kelamin'
            ];

            foreach ($filters as $param => $column) {
                if ($request->has($param)) {
                    $value = $request->$param;
                    if (is_array($value)) {
                        $query->whereIn($column, $value);
                    } else {
                        $query->where($column, $value);
                    }
                }
            }

            $penduduk = $query->paginate($paginate);
        } catch (\Exception $e) {
            return redirect()->route('error')->with([
                'code' => 500,
                'message' => $e->getMessage(),
            ]);
        }

        $listRT = AlamatModel::select('rt')->distinct()->get();
        return view('admin.penduduk.index', compact('penduduk', 'listRT'));
    }


    public function akun_penduduk(Request $request)
    {
        $penduduk = new AkunModel();
        try {
            if ($this->isAdmin()) {
                $penduduk = AkunModel::when($request->has('s'), function ($query) use ($request) {
                    return $query->whereHas('penduduk', function ($query) use ($request) {
                        $query->where('nama', 'like', '%' . $request->s . '%');
                    });
                })->get();
            } else if ($this->isRW()) {
                $penduduk = AkunModel::with('penduduk', 'level')->whereHas('level', function ($query) {
                    $query->whereIn('nama_level', ['Penduduk', 'RT']);
                })->when($request->has('s'), function ($query) use ($request) {
                    return $query->whereHas('penduduk', function ($query) use ($request) {
                        $query->where('nama', 'like', '%' . $request->s . '%');
                    });
                })->get();
            } else {
                $rt = $this->alamat->rt;
                $penduduk = AkunModel::with('penduduk', 'level')->whereHas('penduduk.alamat', function ($query) use ($rt) {
                    $query->where('rt', $rt);
                })->whereHas('level', function ($query) {
                    $query->where('nama_level', 'Penduduk');
                })->when($request->has('s'), function ($query) use ($request, $rt) {
                    return $query->whereHas('penduduk', function ($query) use ($request, $rt) {
                        $query->where('nama', 'like', '%' . $request->s . '%');
                    })->whereHas('penduduk.alamat', function ($query) use ($rt) {
                        $query->where('rt', $rt);
                    });
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
                $penduduk = KkModel::with('pendudukHasOne');
                if ($this->alamat) {
                    $penduduk->whereHas('pendudukHasOne.alamat', function ($query) {
                        $query->where('rt', $this->alamat->rt);
                    });
                }
                $penduduk = $penduduk->get();
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
        // dd($request->toArray());
        try {
            DB::transaction(function () use ($request) {
                $isKepalaKK = $request->isKepalaKK;
                if (!empty ($isKepalaKK)) {
                    $kk = [
                        'no_kk' => $request->no_kk,
                        'nik_kepalakeluarga' => $request->nik,
                    ];
                    $checkKK = KkModel::where('no_kk', $request->no_kk)->first();
                    if (!empty ($checkKK)) {
                        return redirect()->back()->withErrors('Kepala Keluarga dengan no KK ' . ' ' . $request->no_kk . ' ' . 'sudah terdaftar. hilangkan opsi <strong class="dark:text-white text-black">☑️ kepala keluarga</strong>, anda dapat merubah kepala keluarga pada halaman detail KK.')->withInput();
                    } else {
                        KkModel::create($kk);
                        // save all images
                        foreach ($request->rumah as $image) {
                            $fotoRumah = new FotoRumah();
                            $fotoRumah->no_kk = $request->no_kk;
                            $fotoRumah->image = $image->hashName();
                            $fotoRumah->save();
                            $image->store('images/rumah', 'public');
                        }
                    }
                }

                $alamat = AlamatModel::create([
                    'kel' => $request->kel,
                    'kecamatan' => $request->kecamatan,
                    'jalan' => $request->jalan,
                    'rw' => $request->rw,
                    'rt' => $request->rt,
                ]);

                PendudukModel::create([
                    'id_alamat' => $alamat->id_alamat,
                    'nik' => $request->nik,
                    'nama' => $request->nama,
                    'tempat_lahir' => $request->tempat_lahir,
                    'tgl_lahir' => $request->tgl_lahir,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'agama' => $request->agama,
                    'status_perkawinan' => $request->status_perkawinan,
                    'pekerjaan' => $request->pekerjaan,
                    'gol_darah' => $request->gol_darah,
                    'no_kk' => $request->no_kk,
                    'status_penduduk' => $request->status_penduduk,
                    'no_hp' => $request->no_hp,
                    'image' => $request->image->hashName(),
                ]);

                // store foto
                $request->image->store('images/penduduk', 'public');
            });
        } catch (\Exception $e) {
            return config('app.debug') ? redirect()->route('admin.penduduk')->withErrors($e->getMessage())->withInput() : redirect()->back()->withErrors('Kepala Keluarga dengan no KK ' . ' ' . $request->no_kk . ' ' . 'belum terdaftar. nyalakan opsi <strong class="dark:text-white text-black">☑️ kepala keluarga</strong>, anda dapat merubah kepala keluarga pada halaman detail KK.')->withInput();
        }

        return redirect()->route('admin.penduduk')->with('success', 'Penduduk Berhasil Ditambahkan.');
    }

    public function akun_penduduk_store(StoreAkunPenduduk $request)
    {
        $setAsNik = $request->setAsNik;
        $nik = $request->nik;
        $id_level = LevelModel::where('nama_level', 'Penduduk')->first()->id_level;

        AkunModel::create([
            'nik' => $setAsNik ? $nik : $request->nik,
            'username' => $setAsNik ? $nik : $request->username,
            'password' => $setAsNik ? Hash::make($nik) : Hash::make($request->password),
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
            $updateData = [
                'username' => $request->username,
                'email' => $request->email,
            ];
            if ($request->password != null) {
                $updateData['password'] = Hash::make($request->password);
            }
            $akun->update($updateData);
            return redirect()->route('admin.penduduk.akun')->with('success', 'Akun Berhasil Diupdate.');
        } catch (\Exception $e) {
            return config('app.debug') ? redirect()->route('admin.penduduk.akun')->withErrors($e->getMessage())->withInput() : redirect()->route('admin.penduduk.akun')->withErrors('Gagal mengupdate akun.')->withInput();
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
            'RT' => $penduduk->alamat->rt,
            'RW' => $penduduk->alamat->rw,
        ];
        return view('admin.penduduk.penduduk-detail', compact('detail_penduduk'));
    }

    public function update(Request $request)
    {
        $penduduk = PendudukModel::where('nik', $request->nik)->first();
        $alamat = AlamatModel::where('id_alamat', $penduduk->id_alamat)->first();
        $penduduk->update($request->all());
        $alamat->update($request->all());
        if ($request->hasFile('image')) {
            // cek apakah file image yang lama ada
            if ($penduduk->image) {
                // hapus file image yang lama
                $oldImage = 'public/images/penduduk/' . $penduduk->image;
                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }
            }
            // simpan file image yang baru
            $request->image->store('images/penduduk', 'public');
            $penduduk->update(['image' => $request->image->hashName()]);
        }
        return redirect()->route('admin.penduduk')->with('success', 'Penduduk Berhasil Diupdate.');
    }

    public function destroy($nik)
    {
        // return $nik;
        try {
            $penduduk = PendudukModel::where('nik', $nik)->first();
            // cek apakah penduduk kepala keluarga
            $isKepalaKK = KkModel::where('nik_kepalakeluarga', $penduduk->nik)->first();
            if ($isKepalaKK) {
                // ambil semua anggota keluarga kecuali kepala keluarga
                $anggotaKeluarga = PendudukModel::where('no_kk', $isKepalaKK->no_kk)->where('nik', '!=', $penduduk->nik)->get();
                // jika anggota keluarga lebih dari 1
                if ($anggotaKeluarga->count() >= 1) {
                    return redirect()->route('admin.penduduk')->withErrors('Kepala Keluarga tidak dapat dihapus, silahkan pindahkan kepala keluarga terlebih dahulu.')->withInput();
                }
                // jika anggota keluarga hanya 1
                $penduduk->delete();
                $isKepalaKK->delete();
            }
            $penduduk->delete();
        } catch (\Exception $e) {
            return config('app.debug') ? redirect()->route('admin.penduduk')->withErrors($e->getMessage())->withInput() : redirect()->route('admin.penduduk')->withErrors('Penduduk Gagal Dihapus.')->withInput();
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
