<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AkunModel;
use Illuminate\Http\Request;

class RTController extends Controller
{
    public function index()
    {
        $DataRT = AkunModel::with(['penduduk', 'level'])
                    ->where('id_level', 2)
                    ->get();
        
        return view('admin.data-rt', compact('DataRT'));
    }
}
