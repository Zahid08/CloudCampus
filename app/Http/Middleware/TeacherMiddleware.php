<?php

namespace App\Http\Middleware;

use Auth;

use Closure;

class TeacherMiddleware
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
        if (Auth::user() && Auth::user()->user_type == 'te')
        {
            return $next($request);
        }
        return redirect('/');
    }
}
