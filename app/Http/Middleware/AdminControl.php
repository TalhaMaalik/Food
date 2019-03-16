<?php

namespace App\Http\Middleware;

use App\admin;
use Closure;

class AdminControl
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
        if (isset($_COOKIE['token'])) {

            try {
                $token = $_COOKIE['token'];
                $admin = Admin::where('token', $token)->firstOrFail();
                $request->admin_details = $admin;
                return $next($request);
            } catch (\Exception $e) {

                return redirect('/login?nologin=true');
            }
        } else {

            return redirect('/login?nologin=true');
        }
    }
}
