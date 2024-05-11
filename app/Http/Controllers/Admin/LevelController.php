<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLevel;
use App\Models\AkunModel;
use App\Models\LevelModel;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    private $level;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->level = auth()->user()->level->nama_level;
            return $next($request);
        });
    }

    public function index()
    {
        $users = new AkunModel();
        $listLevel = new LevelModel();
        if ($this->level === 'Super Admin') {
            $users = AkunModel::with('level', 'penduduk')
                ->whereHas('level', function ($query) {
                    $query->where('nama_level', '!=', 'Penduduk');
                })
                ->get();
            $listLevel = LevelModel::whereNotIn('nama_level', ['Penduduk', 'Super Admin'])->get();
        } else if ($this->level === 'RW') {
            $users = AkunModel::with('level', 'penduduk')
                ->whereHas('level', function ($query) {
                    $query->where('nama_level', 'RT');
                })
                ->get();
            $listLevel = LevelModel::where('nama_level', 'RT')->get();
        }
        // dd($users[1]->penduduk->alamat->toArray());
        // mendapatkan penduduk yang memiliki level penduduk
        $penduduk = AkunModel::with('penduduk')
            ->whereHas('level', function ($query) {
                $query->where('nama_level', 'Penduduk');
            })
            ->get();
        // dd($penduduk->toArray());

        return view("admin.level", compact("users", "penduduk", "listLevel"));
    }

    public function store(StoreLevel $request)
    {
        $akun = AkunModel::where('nik', $request->nik)->first();
        // dd($akun->toArray());
        // jika akun tidak ditemukan
        if ($akun) {
            $akun->id_level = $request->level;
            $akun->save();
            return redirect()->route('admin.level')->with('success', 'Penambahan level berhasil!');
        }
        return redirect()->route('admin.level')->withErrors('Akun tidak ditemukan!, tambahkan akun terlebih dahulu! di halaman <a class="text-blue-500" href="' . route('admin.penduduk.akun') . '">Akun Penduduk</a>');
    }

    public function delete(Request $request)
    {
        $akun = AkunModel::find($request->id_akun);
        $level = $akun->level->nama_level;

        // jika level yang dihapus adalah level yang sedang digunakan, berikan pesan error
        if ($this->level === $level) {
            return redirect()->route('admin.level')->withErrors('Tidak dapat menghapus level yang sedang digunakan!');
        }

        $id_level = LevelModel::where('nama_level', 'Penduduk')->first()->id_level;
        if ($id_level) {
            $akun->id_level = $id_level;
            $akun->save();
        } else {
            return redirect()->route('admin.level')->withErrors('Hubungi pengenmbang!');
        }
        return redirect()->route('admin.level')->with('success', 'Akun berhasil di set ke penduduk!');
    }
}
