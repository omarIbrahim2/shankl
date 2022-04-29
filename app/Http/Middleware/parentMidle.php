<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\parentt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class parentMidle
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
        $parent = Auth::guard('parent')->user();

        if (Auth::guard('parent')->check()) {
            return $next($request);
        }


        return redirect()->back();
    }
}
