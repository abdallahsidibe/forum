<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class InfluentMiddleware
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
        if(Auth::user()->usertype == 'influent')
        {
            return $next($request);
        }
        else
        {
            return redirect('/home')->with('status', 'You are Not Allowed to Admin dashboard');
        }
        //return $next($request);
    }
}
