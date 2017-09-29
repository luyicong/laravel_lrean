<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
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
        //利用中间件，管理后台验证是否已经登录
        if(!Auth::guard('admin')->check()){
           return redirect('/admin/login');
        }
        return $next($request);
    }
}
