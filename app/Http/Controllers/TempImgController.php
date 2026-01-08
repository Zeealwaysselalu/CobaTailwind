<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TempImgController extends Controller
{
    //// Method Upload Temp
    public function uploadTemp(Request $request)
    {
        if ($request->hasFile('avatar')) {
            // Simpan di storage/app/public/temp
            $path = $request->file('avatar')->store('temp', 'public');

            $profile = auth('web')->user()->infoUser;
            $profile->tempimg = ($path);
            $profile->save();

            return response()->json([
                'path' => $path, // Ini masuk ke input hidden
                'url'  => Storage::url($path) // Ini untuk preview <img>
            ]);
        }
        return response()->json(['error' => 'No file'], 400);
    }

    // Method Revert/Batal
    public function revertTemp(Request $request)
    {
        $dataprofil = auth('web')->user()->infoUser;
        $path = $dataprofil->tempimg;
        // Validasi sederhana agar tidak menghapus file selain di temp
        if ($path && str_contains($path, 'temp/')) {
            Storage::disk('public')->delete($path);
        }
        return response()->json(['status' => 'deleted']);
    }

    public function deleteTempImage($tempImagePath)
    {
        // Hapus file sementara dari storage
    }
}
