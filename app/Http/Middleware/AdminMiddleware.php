<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated and has the 'admin' role
        if (Auth::check() && Auth::user()->role && Auth::user()->role->id == 1) {
            return $next($request);
        } else {
            // Redirect to login if the user is not authorized
            return redirect()->route('login');
        }
    }
}
