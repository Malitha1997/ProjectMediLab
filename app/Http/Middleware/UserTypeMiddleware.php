<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserTypeMiddleware
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
        if (Auth::check() && Auth::user()->isAdmin()) {
        $nav = 'Layouts.navbar';
        } elseif (Auth::check() && Auth::user()->isPatient()) {
        $nav = 'Layouts.patientNavbar';
        } else {
        $nav = 'layouts.navbar';
        }

        view()->share('nav', $nav);
        return $next($request);
    }
}
