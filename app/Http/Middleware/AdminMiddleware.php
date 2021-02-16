<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
class AdminMiddleware
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
        //dd('here');
        if ($request->user() && $request->user()->role_id == 4){
        return new Response(view('unauthorized')->with('role', 'ADMIN'));
      }


        return $next($request);
    }
}
