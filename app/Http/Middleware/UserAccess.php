<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $guard= null)
    {
        if (Auth::guard('applicant')->user() && $request->is('applicant/*')) { 
            return redirect('/applicant/dashboard'); 
        } 

        if (Auth::guard('admin')->user() && $request->is('admin/*')) { 
            return redirect('/admin/dashboard'); 
        } 

        if (Auth::guard('student')->user() && $request->is('student/*')) { 
           return redirect('/student/dashboard'); 
        } 

        if (Auth::guard('guardian')->user() && $request->is('guardian/*')) { 
            return redirect('/guardian/dashboard'); 
        } 
        
        return $next($request);   

        
        
    }
}
