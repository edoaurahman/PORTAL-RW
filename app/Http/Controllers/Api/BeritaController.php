<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $request->validate([
                'upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imageName = time() . '.' . $request->upload->extension();
            $request->upload->storeAs('public/images/berita/content/', $imageName);
            $url = asset('images/berita/content/' . $imageName);

            return response()->json([
                'uploaded' => 1,
                'fileName' => $imageName,
                'url' => $url,
            ]);
        } else {
            return response()->json([
                'uploaded' => 0,
                'error' => [
                    'message' => 'Upload file not found',
                ],
            ]);
        }
    }
}
