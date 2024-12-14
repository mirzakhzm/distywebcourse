<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth; // Pastikan Auth facade digunakan

class LoginController extends Controller
{
    public function index()
    {
        // Tampilkan halaman login jika pengguna belum login
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Cek jika login berhasil
        if (Auth::attempt($credentials)) { 
            $request->session()->regenerate();

            // Cek apakah user adalah admin
            if (Auth::user()->role === 'admin') { 
                Auth::logout(); 
                return redirect()->route('login')->with('loginError', 'Akses ditolak! Anda tidak memiliki akses, silakan login melalui halaman admin.');
            }

            // Jika bukan admin, arahkan ke halaman yang dimaksud setelah login
            return redirect()->intended('/');
        }

        // Jika login gagal
        return back()->with('loginError', 'Login gagal!');
    }
}
