<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AgendaModel;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = AgendaModel::select('id', 'title', 'deskripsi', 'start', 'end')->get();
        return view('user.agenda.index', compact('agenda'));
    }
}
