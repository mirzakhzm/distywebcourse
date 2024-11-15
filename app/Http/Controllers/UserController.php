<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserController extends Controller
{
    public function register (Request $request)
    {
            // Validasi data
            $request->validate([
                'name' => 'required|string|max:255',
                'password' => 'required|string|min:8',
                'email' => 'required|string|email|max:255|unique:users',
                
                
            ]);
    
            // Simpan pengguna ke database
            DB::table('users')->insert([
                'name' => $request->name,
                'password' => Hash::make($request->password), // Hash password
                'email' => $request->email,
                'remember_token' => Str::random(60), // Token acak 60 karakter
                'created_at' =>now(),
                'updated_at' =>now(),
            ]);

    
            return redirect('/login'); 
    }
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string|min:8',
        ]);
    
        // Cari pengguna berdasarkan nama
        $user = DB::table('users')->where('name', $request->name)->first();
    
        // Validasi keberadaan pengguna dan kecocokan password
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'credentials' => 'Username atau password salah.',
            ]);
        }
    
        // Jika validasi berhasil, buat sesi login
        session(['user_id' => $user->id, 'user_name' => $user->name]);
    
        // Redirect ke halaman dashboard atau halaman lain
        return redirect('/home')->with('success', 'Login berhasil.');
    }
    
}