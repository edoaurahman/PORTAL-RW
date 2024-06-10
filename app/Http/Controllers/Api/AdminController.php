<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AgendaModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function update_draggable_agenda(Request $request)
    {
        $request->validate([
            'start' => 'required',
            'end' => 'required',
        ]);
        $agenda = AgendaModel::find($request->id);
        $agenda->start = $request->start;
        $agenda->end = $request->end;
        $agenda->save();
        return response()->json(['message' => 'Agenda Berhasil Diubah.']);
    }
}
