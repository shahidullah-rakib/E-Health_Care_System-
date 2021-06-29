<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class editVarify
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
        if($request->session()->has('email')){
            return $next($request);
        }
        else{
            $errors = 'Invalid request';
            return redirect('/login/user')->with($errors);
        }
    }
}
