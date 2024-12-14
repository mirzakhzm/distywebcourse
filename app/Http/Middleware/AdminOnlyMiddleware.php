<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminOnlyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Pastikan user login dan memiliki nama 'admin'
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
            
        }

        // Jika bukan admin, logout dan arahkan ke halaman login
        Auth::logout(); // Logout user
        return redirect()->route('login')->with('loginError', 'Akses ditolak! Hanya admin yang dapat mengakses.');
    }
}
