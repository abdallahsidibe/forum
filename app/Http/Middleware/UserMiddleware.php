<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {                    //status 
        if (Auth::check() && Auth::user()->isban)
         {
            $banned = Auth::user()->isban= "1";
            Auth::logout();

            if ($banned == 1) 
            {
                $message = 'Your account has been banned. Please contact administrator';
            }
            return redirect()->route('login')
                 ->with('staus',$message)
                 ->withErrors(['email' => 'Your account has been banned. Please contact administrator']);
        }
    }

    return $next($request);
}
