<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class Language
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
        //Regarde si on a dans la session une langue et que la langue correspond a une langue reconu
        if (Session()->has('applocale') AND array_key_exists(Session()->get('applocale'), config('languages'))) {
            //On modifie la langue de l'application
            App::setLocale(Session()->get('applocale'));
        }
        // else { // Sinon on utilise le language
        //     App::setLocale(config('app.fallback_locale'));
        // }
        return $next($request);
    }
}
