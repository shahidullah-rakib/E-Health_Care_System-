<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class PatientDoctorContact
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
       
        if($request->type && $request->type="doctor"){

          echo "not appropriate user";
        }else if($request->type && $request->type="receptionist"){

            echo "not appropriate user";
        }else if($request->type && $request->type="admin"){
            
            echo "not appropriate user";
        }else{
            return $next($request);
        }
      
    }
}
