<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BansosController extends Controller
{
    public function index()
    {
        return view("admin.bansos");
    }
}
