<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class passVarify
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
        if($request->session()->has('password')){
            return $next($request);
        }
        else{
            $errors = 'Invalid request';
            return redirect('/login/user')->with($errors);
        }
        
    }
}
