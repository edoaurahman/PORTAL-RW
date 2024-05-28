<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function read_iuran_reminder(Request $request)
    {
        // $request->user()->unreadNotifications;
        dd($request->user()->unreadNotifications);
        return response()->json(['message' => 'success']);
    }
}
