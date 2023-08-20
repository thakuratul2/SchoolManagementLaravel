<?php

namespace App\Http\Middleware\Panel;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ParentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if(!empty(Auth::check())){
            if(Auth::user()->user_type == 3){
                return $next($request);
            }else{
                Auth::logout();
            return redirect(url(''));
            }

            
        }else{

            Auth::logout();
            return redirect(url(''));
        }
        
    }
}
