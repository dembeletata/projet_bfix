<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Vérifier si l'utilisateur est connecté
        if (!$request->session()->has('pseudo')) {
            return redirect('/login')->with('alert', 'Vous devez être connecté pour accéder à cette page.');
        }

        return $next($request);
    }
}
