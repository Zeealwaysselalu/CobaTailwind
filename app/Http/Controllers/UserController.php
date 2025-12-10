<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function storeAccount(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);
        if (User::where('email', $request->email)->exists()) {
            return redirect()->route('register')->with('error', 'Email sudah terdaftar.');
        }
        User::create([
            'email' => $request->email,
            'password' => ($request->password),
        ]);
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat.');
    }
    public function checker(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {

            // Login sukses -> simpan session
            $request->session()->put('user_id', $user->id);

            return redirect()->route('new');
        }

        return redirect()->route('login')->with('error', 'Email atau password salah.');
    }
}
