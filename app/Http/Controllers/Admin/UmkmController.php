<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        return view("admin.data-umkm");
    }
}
