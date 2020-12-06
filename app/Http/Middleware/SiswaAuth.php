<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SiswaAuth
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
        $user = auth()->user();
        if (empty($user) || $user->role != 'siswa') {
            return redirect('/');
        }

        return $next($request);
    }
}
