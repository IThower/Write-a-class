<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {

            //user = 0 professor = 1 admin = 2

            if (Auth::user()->role == '2') {

                return $next($request);

            } else {
                return redirect('/home')->with('error', 'Você não tem acesso de adm.');
            }

        } else {

            return redirect('/login')->with('error', 'Você não tem acesso de adm.');
        }

    }
}