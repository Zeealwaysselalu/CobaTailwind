<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class InfoUserController extends Controller
{
    public function tempimg(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|max:2048',
        ]);

        $profile = auth('web')->user()->infoUser;

        if ($profile->tempimg != null) {
            Storage::disk('public')->delete('images/temp/' . $profile->tempimg);
        }

        $file = $request->file('avatar');
        $filename = $file->hashName();
        $file->storeAs('images/temp/', $filename, 'public');
        $profile->tempimg = $filename;


        $profile->save();
        return response()->json([
            'status' => 'success',
            'temp_image' => asset('storage/images/temp/' . $filename),
        ]);
    }

    public function removeTempimg()
    {
        $profile = auth('web')->user()->infoUser;

        if ($profile->tempimg != null) {
            Storage::disk('public')->delete('images/temp/' . $profile->tempimg);
            $profile->tempimg = null;
            $profile->save();
        }

        return response()->json([
            'status' => 'success',
        ]);
    }

    public function edit(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'addres' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'lulusan' => 'nullable|integer',
            'jurusan' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
            'email' => 'required|email|max:255',
            'about' => 'required|string|max:500',
            'status' => 'required|string|max:50',
        ]);

        $profile = auth('web')->user()->infoUser;

        // Update field SESUAI NAMA INPUT
        $profile->username = $request->username;
        $profile->addres = $request->addres;
        $profile->phone = $request->phone;
        $profile->about = $request->about;
        $profile->lulusan = $request->lulusan;
        $profile->jurusan = $request->jurusan;
        $profile->status = $request->status;
        $profile->email = $request->email;

        if ($request->hasFile('avatar')) {

            if ($profile && $profile->image && $profile->image !== 'default.jpg') {
                Storage::disk('public')->delete('images/' . $profile->image);
            }

            $file = $request->file('avatar');
            $filename = $file->hashName();
            $file->storeAs('images', $filename, 'public');
            $profile->image = $filename;
        }

        $profile->save();

        return redirect()->route('profile')->with('success', 'Profil berhasil diubah.');
    }

    public function deleteAccount(Request $request)
    {
        $user = auth('web')->user();
        $profile = $user->infoUser;

        if ($profile && $profile->image && $profile->image !== 'default.jpg') {
            Storage::disk('public')->delete('images/' . $profile->image);
        }

        $user->delete();

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
