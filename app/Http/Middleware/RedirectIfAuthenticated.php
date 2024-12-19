<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // Check if the user is authenticated
        if (Auth::guard($guard)->check()) {
            $user = Auth::user();

            // Ensure that the role exists before accessing its ID
            if ($user->role && $user->role->id == 1) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role && $user->role->id == 2) {
                return redirect()->route('users.dashboard');
            }
        }

        return $next($request);
    }
}
