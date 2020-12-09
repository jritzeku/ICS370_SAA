<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckAdvisor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $userRoles = Auth::user()->roles->pluck('name');

        if(!$userRoles->contains('advisor')){
          //  return redirect('/home'); //todo: used in multiauth roles tutorial but we dont have this path!
           // dd($userRoles);
            return redirect('/');
        }//todo: ???

//        dd($userRoles);

        return $next($request);
    }
}
