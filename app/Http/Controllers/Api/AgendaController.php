<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AgendaModel;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        // agenda pada bulan ini dan tahun ini
        $date = $request->date ?? date('Y-m');
        $agenda = AgendaModel::where('start', 'like', $date . '%')->get();
        return response()->json($agenda);
    }
}
