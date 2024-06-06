<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ReportDataController extends Controller
{
    public function index()
    {
        return view("admin.report-data");
    }
}
