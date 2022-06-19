<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenticationCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
       
        // if(!Session()->has('loginId') == ($request->path() != 'dashboard')){
        //     return view('landingpage/landingpages/login');
        // }
        if(session()->has('loginId') && ($request->path() == '/' || $request->path() == '/login')){
           return  redirect('userpages/dashboard'); 
        }
        return $next($request);
    }
}
