<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Response;

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
        if($request->user() == null) {
            return redirect('/login');
        }

        if($request->user()->administrador == null){
            return new Response(view('auth.unauthorized')->with('role', 'ADMIN')); 
        }
        return $next($request);
    }
}
