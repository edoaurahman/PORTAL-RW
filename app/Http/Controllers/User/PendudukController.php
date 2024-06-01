<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BeritaModel;
use App\Models\PendudukModel;
use App\Models\UMKMModel;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index(Request $request)
    {
        $query = PendudukModel::with('alamat')->whereHas('alamat', function ($query) {
            $query->where('rt', auth()->user()->penduduk->alamat->rt);
        });
        if ($request->has('s')) {
            $query->where('nama', 'like', '%' . $request->s . '%');
        }
        $filters = [
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

        $penduduk = $query->paginate(10);
        $user = auth()->user();
        $totalPenduduk = PendudukModel::with('alamat')->whereHas('alamat', function ($query) {
            $query->where('rt', auth()->user()->penduduk->alamat->rt);
        })->count();
        $totalPendudukLakiLaki = PendudukModel::with('alamat')->whereHas('alamat', function ($query) {
            $query->where('rt', auth()->user()->penduduk->alamat->rt);
        })->where('jenis_kelamin', 'Laki-Laki')->count();
        $totalPendudukPerempuan = PendudukModel::with('alamat')->whereHas('alamat', function ($query) {
            $query->where('rt', auth()->user()->penduduk->alamat->rt);
        })->where('jenis_kelamin', 'Perempuan')->count();

        $totalPendudukPendatang = PendudukModel::with('alamat')->whereHas('alamat', function ($query) {
            $query->where('rt', auth()->user()->penduduk->alamat->rt);
        })->where('status_penduduk', 'Pendatang')->count();
        $totalPendudukTetap = PendudukModel::with('alamat')->whereHas('alamat', function ($query) {
            $query->where('rt', auth()->user()->penduduk->alamat->rt);
        })->where('status_penduduk', 'Tetap')->count();

        $totalPendudukLakiLakiPendatang = PendudukModel::with('alamat')->whereHas('alamat', function ($query) {
            $query->where('rt', auth()->user()->penduduk->alamat->rt);
        })->where('jenis_kelamin', 'Laki-Laki')->where('status_penduduk', 'Pendatang')->count();
        $totalPendudukPerempuanPendatang = PendudukModel::with('alamat')->whereHas('alamat', function ($query) {
            $query->where('rt', auth()->user()->penduduk->alamat->rt);
        })->where('jenis_kelamin', 'Perempuan')->where('status_penduduk', 'Pendatang')->count();
        $totalPendudukLakiLakiTetap = PendudukModel::with('alamat')->whereHas('alamat', function ($query) {
            $query->where('rt', auth()->user()->penduduk->alamat->rt);
        })->where('jenis_kelamin', 'Laki-Laki')->where('status_penduduk', 'Tetap')->count();
        $totalPendudukPerempuanTetap = PendudukModel::with('alamat')->whereHas('alamat', function ($query) {
            $query->where('rt', auth()->user()->penduduk->alamat->rt);
        })->where('jenis_kelamin', 'Perempuan')->where('status_penduduk', 'Tetap')->count();
        return view('user.penduduk.index', compact('penduduk', 'user', 'totalPenduduk', 'totalPendudukLakiLaki', 'totalPendudukPerempuan', 'totalPendudukPendatang', 'totalPendudukTetap', 'totalPendudukLakiLakiPendatang', 'totalPendudukPerempuanPendatang', 'totalPendudukLakiLakiTetap', 'totalPendudukPerempuanTetap'));
    }

    public function show($nik)
    {
        $penduduk = PendudukModel::with('alamat')->where('nik', $nik)->first();
        $berita = BeritaModel::with('penulis')->where('author', $nik)->orderBy('updated_at', 'desc')->get();
        $umkm = UMKMModel::where('nik', $nik)->orderBy('updated_at', 'desc')->get();
        return view('user.penduduk.detailPenduduk', compact('penduduk', 'berita','umkm'));
    }

    public function store(Request $request)
    {
        // store data
    }

    public function update(Request $request)
    {
        // update data
    }

    public function kk_penduduk()
    {
        return view('penduduk.kk');
    }

    public function detail_penduduk($nik)
    {
        return view('penduduk.detail', compact('nik'));
    }

    public function destroy($nik)
    {
        // delete data
    }

    public function akun_penduduk()
    {
        return view('penduduk.akun');
    }

    public function akun_penduduk_store(Request $request)
    {
        // store data
    }

    public function akun_penduduk_update(Request $request)
    {
        // update data
    }

    public function akun_penduduk_delete($id)
    {
        // delete data
    }

    public function kk_detail_penduduk($no_kk)
    {
        return view('penduduk.kk_detail', compact('no_kk'));
    }

    public function update_kk(Request $request)
    {
        // update data
    }


}
