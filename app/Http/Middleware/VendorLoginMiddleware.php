<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VendorLoginMiddleware
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
        if(!Auth::guard('vendorLogin')->check()){
          return redirect()->route('vendorRegistrationForm')->with('message','Login First');
        }
        return $next($request);
    }
}
