<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class notRegistered
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
        if(auth()->user()->status = "GEC") return redirect()->route('/gec');
        elseif(auth()->user()->status = "CPPC") return redirect()->route('/cppc');
        elseif(auth()->user()->status = "CESC") return redirect()->route('/cesc');
        return $next($request);
    }
}