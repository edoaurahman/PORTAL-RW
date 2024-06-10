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

            if ($request->has('rt')) {
                $query->whereHas(
                    'alamat',
                    function ($query) use ($request) {
                        $query->where('rt', $request->rt);
                    }
                );
            }

            if ($request->has('status_penduduk')) {
                $query->where('status_penduduk', $request->status_penduduk);
            }

            if ($request->has('jenis_kelamin')) {
                $query->where('jenis_kelamin', $request->jenis_kelamin);
            }


            $penduduk = $query->orderBy('created_at', 'desc')->paginate($paginate)->withQueryString();
        } catch (\Exception $e) {
            return redirect()->route('error')->with([
                'code' => 500,
                'message' => $e->getMessage(),
            ]);
        }
        return view('admin.penduduk.index', compact('penduduk'));
    }


    public function akun_penduduk(Request $request)
    {
        $query = AkunModel::with('penduduk');
        try {
            if (!$this->isAdmin() && !$this->isRW()) {
                $rt = $this->alamat->rt;
                $query->whereHas('penduduk.alamat', function ($query) use ($rt) {
                    $query->where('rt', $rt);
                });
            }
            if ($request->has('s')) {
                $query->whereHas('penduduk', function ($query) use ($request) {
                    $query->where('nama', 'like', '%' . $request->s . '%');
                });
            }

            if ($request->has('rt')) {
                $query->whereHas('penduduk.alamat', function ($query) use ($request) {
                    $query->where('rt', $request->rt);
                });
            }

            if ($request->has('jenis_kelamin')) {
                $query->whereHas('penduduk', function ($query) use ($request) {
                    $query->where('jenis_kelamin', $request->jenis_kelamin);
                });
            }

            if ($request->has('status_penduduk')) {
                $query->whereHas('penduduk', function ($query) use ($request) {
                    $query->where('status_penduduk', $request->status_penduduk);
                });
            }
            // dd($query->get());
        } catch (\Exception $e) {
            return redirect()->route('error')->with([
                'code' => 500,
                'message' => $e->getMessage(),
            ]);
        }
        $penduduk = $query->orderBy('created_at', 'desc')->paginate(10)->withQueryString();
        return view('admin.penduduk.akun', compact('penduduk'));
    }

    public function kk_penduduk(Request $request)
    {
        $query = new KkModel();
        try {
            if ($this->isAdmin() || $this->isRW()) {
                $penduduk = KkModel::with('pendudukHasOne');
            } else {
                $penduduk = KkModel::with('pendudukHasOne');
                if ($this->alamat) {
                    $penduduk->whereHas('pendudukHasOne.alamat', function ($query) {
                        $query->where('rt', $this->alamat->rt);
                    });
                }
            }
        } catch (\Exception $e) {
            return redirect()->route('error')->with([
                'code' => 500,
                'message' => $e->getMessage(),
            ]);
        }
        if ($request->has('s')) {
            $penduduk->whereHas('pendudukHasOne', function ($query) use ($request) {
                $query->where('nama', 'like', '%' . $request->s . '%');
            });
        }
        $penduduk = $penduduk->paginate(10)->withQueryString();
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
        $foto_rumah = FotoRumah::where('no_kk', $penduduk->no_kk)->get();
        $foto_penduduk = $penduduk->foto_profile();
        return view('admin.penduduk.penduduk-detail', compact('detail_penduduk', 'foto_rumah', 'foto_penduduk'));
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

    public function store_foto_rumah(Request $request)
    {
        // dd($request->toArray());
        // batasi maskimal ukuaran file 2MB
        $request->validate([
            'foto_rumah.*' => 'required|file|mimes:jpg,jpeg,png,svg|max:2048',
        ], [
            'foto_rumah.*.required' => 'Foto rumah wajib diunggah.',
            'foto_rumah.*.file' => 'Foto rumah harus berupa file.',
            'foto_rumah.*.mimes' => 'Foto rumah harus berformat: jpg, jpeg, png, atau svg.',
            'foto_rumah.*.max' => 'Ukuran foto rumah tidak boleh lebih dari 2MB.',
        ]);

        try {
            foreach ($request->foto_rumah as $image) {
                $fotoRumah = new FotoRumah();
                $fotoRumah->no_kk = $request->no_kk;
                $fotoRumah->image = $image->hashName();
                $fotoRumah->save();
                $image->store('images/rumah', 'public');
            }
        } catch (\Exception $e) {
            return redirect()->route('admin.penduduk.kk-detail', $request->no_kk)->withErrors($e->getMessage());
        }

        return redirect()->back()->with('success', 'Foto Rumah Berhasil Ditambahkan.');
    }

    public function delete_foto_rumah($id)
    {
        try {
            $fotoRumah = FotoRumah::find($id);
            // delete file image
            if (file_exists('storage/images/rumah/' . $fotoRumah->image)) {
                unlink('storage/images/rumah/' . $fotoRumah->image);
            }
            $fotoRumah->delete();
            return redirect()->back()->with('success', 'Foto Rumah Berhasil Dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
