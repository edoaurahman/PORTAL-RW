<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BansosController extends Controller
{
    public function index()
    {
        return view("admin.bansos");
    }
}
