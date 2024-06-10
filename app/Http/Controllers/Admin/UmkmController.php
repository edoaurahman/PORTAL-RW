<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UMKMModel;
use App\Notifications\UMKM;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    private $pagging = 10;
    public function index()
    {
        $UMKM = UMKMModel::orderBy('created_at', 'desc')->paginate($this->pagging);

        return view("admin.data-umkm", compact("UMKM"));
    }

    public function set_status(Request $request)
    {
        $umkm = UMKMModel::find($request->id_umkm);
        $umkm->status = $request->status;
        $umkm->save();
        if ($request->status == 'publish') {
            $umkm->penduduk->akun->notify(new UMKM('UMKM anda telah di publish'));
        } else if ($request->status == 'pending') {
            $umkm->penduduk->akun->notify(new UMKM('UMKM anda sedang di review'));
        } else if ($request->status == 'reject') {
            $umkm->penduduk->akun->notify(new UMKM('UMKM anda di tolak'));
        }
        return redirect()->back();
    }
}
