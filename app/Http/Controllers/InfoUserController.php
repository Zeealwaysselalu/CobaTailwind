<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoUserController extends Controller
{
    public function edit(Request $request, $id)
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

        // Update data
        $id->update($request->about());
        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil diubah.');
    }
}
