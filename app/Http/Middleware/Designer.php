<?php

namespace App\Http\Middleware;

use Closure;

class Designer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->role=="seller") {
            return redirect('/manage-projects');
        }

        if ($request->user() && $request->user()->role=="admin") {
            return redirect('/admin/users');
        }
        
        return $next($request);
    }
}
