<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Vérifiez ici si l'utilisateur est un administrateur
        if (auth()->check() && auth()->user()->isAdmin()) {
            return $next($request);
        }

        // Redirigez l'utilisateur vers une page d'erreur ou une autre page appropriée
        return redirect('/')->with('error', 'Accès non autorisé');
    }
}
