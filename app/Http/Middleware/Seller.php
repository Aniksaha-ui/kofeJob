<?php

namespace App\Http\Middleware;

use Closure;

class Seller
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

        if ($request->user() && $request->user()->role=="designer") {
            return redirect('/designer-project-proposals');
        }

        if ($request->user() && $request->user()->role=="admin") {
            return redirect('/admin/users');
        }

        return $next($request);
    }
}
