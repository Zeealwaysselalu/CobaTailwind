<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoUserController extends Controller
{
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
        ]);

        $profile = auth()->user()->infoUser;

        // Update field SESUAI NAMA INPUT
        $profile->username = $request->username;
        $profile->addres = $request->addres;
        $profile->phone = $request->phone;
        $profile->about = $request->about;
        $profile->lulusan = $request->lulusan;
        $profile->jurusan = $request->jurusan;

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $profile->image = $filename;
        }

        $profile->save();

        return redirect()->route('profile')->with('success', 'Profil berhasil diubah.');
    }
}
