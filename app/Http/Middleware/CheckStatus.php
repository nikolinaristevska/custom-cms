<?php

namespace App\Http\Middleware;

use Closure;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $roleUser =  $request->user()->getRoleUser;
        if($roleUser->name === $role)
        {
            return $next($request);
        }

        return redirect()->route('home');
    }
}
