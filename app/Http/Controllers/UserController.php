<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function update(Request $request)
    {

        $user = auth()->user();
    
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'new_password' => 'nullable|min:8',
        ]);
    
        $user->name = $request->name;
        $user->email = $request->email;
    
        if ($request->filled('new_password')) {
            $user->password = Hash::make($request->new_password);
        }

        $user->save();
    
        return redirect('profile')->with('success', 'Profile updated successfully!');
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
