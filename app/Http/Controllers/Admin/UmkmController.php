<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UMKMModel;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $UMKM = UMKMModel::all();

        return view("admin.data-umkm",compact("UMKM"));
    }
}
