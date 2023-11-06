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
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // Periksa apakah pengguna adalah admin
            if (Auth::user()->role == 'admin') {
                return $next($request);
            }
        }

        // Jika pengguna bukan admin atau tidak login, tampilkan 404
        abort(404);
    }
}
