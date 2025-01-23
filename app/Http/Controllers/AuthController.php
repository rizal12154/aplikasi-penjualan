<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'password' => 'required',
        ]);

        $username = $request->input('username');
        $password = md5($request->input('password')); // Hash password dengan MD5

        // Cek apakah username dan password cocok
        $user = \App\Models\User::where('username', $username)
            ->where('password', $password)
            ->first();

        if ($user) {
            // Login pengguna secara manual
            Auth::login($user, $request->remember);

            // Redirect ke dashboard
            return redirect()->intended('/dashboard');
        }

        // Jika login gagal
        return back()->with('error', 'Username atau password salah.');
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
