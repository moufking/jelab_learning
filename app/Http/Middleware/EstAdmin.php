<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //On recupere l'utilisateur connecter ou null si c'est un visiteur
        $utilisateur = $request->user();
        //Si l'utilisateur n'est pas null est que le nom de son role est bien admin
        if (isset($utilisateur) && $utilisateur->role->nom == "admin") {
            //Alors on continue la requete...
            return $next($request);
        } else {
            //Sinon on affiche la page 404
            abort(404);
        }
    }
}

