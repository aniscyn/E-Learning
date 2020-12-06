<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $user = auth()->user();

        if ($user) {
            if ($user->role == 'siswa') {
                return redirect('/siswa');
            }
            if ($user->role == 'guru') {
                return redirect('/guru');
            }
            if ($user->role == 'admin') {
                return redirect('/admin/beranda');
            }
        }

        return $next($request);
    }
}
