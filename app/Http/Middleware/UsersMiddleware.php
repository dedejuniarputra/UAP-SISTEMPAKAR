<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UsersMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect('/login')->with('error', 'Please login to access this page.');
        }

        return $next($request);
    }
}
