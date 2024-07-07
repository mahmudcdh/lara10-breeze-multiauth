<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckStatusMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if ($request->user() && $request->user()->status !== 'active') {
            abort(403, 'Your account is disabled. Please contact admin.');
            // return redirect('/login')->with('status', 'Your account is disabled. Please contact admin.');
        }
        return $next($request);
    }
}
