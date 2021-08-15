<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CekLevelAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$role_id)
    {
        if(in_array($request->user()->role_id, $role_id)) {
            return $next($request);
        } else {
            Auth::logout();
            Session::flash('error', 'Anda Tidak Punya Akses');
            return redirect('/admin/login');
        }
    }
}
