<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsLogin
{
    /**
     * Handle an incoming request.
     *
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()) {
            return $next($request);
        } else {
            return redirect()->route('login')->with('failed', 'Anda belum Login');
        }
    }
}
