<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AspirasiModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $aspirasi = AspirasiModel::all();
        return view("user.home");
    }

}
