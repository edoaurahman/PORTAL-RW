<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlamatModel;
use App\Models\PendudukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahRT = AlamatModel::groupBy('rt')->count('rt');
        $jumlahPenduduk = PendudukModel::count();
        return view('admin.dashboard', compact('jumlahRT', 'jumlahPenduduk'));
    }
}
