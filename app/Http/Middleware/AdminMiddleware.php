<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        if (!$request->session()->has('username')) {
            return redirect('/loginAdmin')->with('alert', 'Vous devez être connecté pour accéder à cette page.');
        }

        return $next($request);
    }
}
