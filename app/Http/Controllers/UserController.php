<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function authenticate(Request $request){
        {
            $credentials = $request->validate([
                'email' => 'required]email',
                'password' => 'required|min:8',
            ]);

            if(auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('/home');
            }

            return back()->with('loginError', 'Login gagal!');
        }
    }

    // Fungsi untuk logout pengguna
    public function logout(Request $request)
    {
        Auth::logout();

        // Hapus sesi
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login
        return redirect('/')->with('success', 'Logout berhasil.');
    }
}
