<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BeritaModel;
use App\Models\PendudukModel;
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
        return view('user.penduduk.index', compact('penduduk', 'user'));
    }

    public function show($nik)
    {
        $penduduk = PendudukModel::with('alamat')->where('nik', $nik)->first();
        $berita = BeritaModel::with('penulis')->where('author', $nik)->orderBy('updated_at', 'desc')->get();
        return view('user.penduduk.detailPenduduk', compact('penduduk', 'berita'));
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
