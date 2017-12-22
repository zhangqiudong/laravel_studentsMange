<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    protected $auth;


    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }



    public function handle($request, Closure $next)
    {
//        if (Auth::guard($guard)->check()) {
//            return redirect('/');
//        }
        if($this->auth->check())   //用户是否登录
        {
            if(!Auth::user() -> is_admin){
                return new RedirectResponse(url('stu/home'));
            }
            else{
                return new RedirectResponse(url('/admin'));
            }
        }
        return $next($request);
    }
}
