<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next) {

        // El modelo de Usuario tiene un atributo `role` o un método `isAdmin()`
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Si no es admin, redirigir a una página específica
        return redirect()->route('home')->with('error', 'No tienes acceso de administrador');
    }
}
