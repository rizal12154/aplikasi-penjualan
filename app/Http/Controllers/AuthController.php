<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cari user berdasarkan username
        $user = \App\Models\User::where('username', $request->username)->first();

        // Periksa password
        if ($user) {
            // Cek jika password masih dalam format MD5
            if (md5($request->password) === $user->password) {
                // Konversi password ke hash Laravel yang aman
                $user->password = Hash::make($request->password);
                $user->save();
            }

            // Gunakan Hash::check untuk verifikasi
            if (Hash::check($request->password, $user->password)) {
                // Periksa status user
                if ($user->status !== 'aktif') {
                    return back()->with('error', 'Akun Anda tidak aktif.');
                }

                // Login pengguna
                Auth::login($user, $request->boolean('remember'));

                // Redirect ke dashboard
                return redirect()->intended('/dashboard');
            }
        }

        // Jika login gagal
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->withInput($request->only('username'));
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
