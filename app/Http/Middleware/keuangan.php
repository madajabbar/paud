<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;

class keuangan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $keuangan = Role::where('name','keuangan')->first();
        $admin = Role::where('name','admin')->first();
        if(auth()->check() && (auth()->user()->role_id == $keuangan->id || auth()->user()->role_id == $admin->id)){
            return $next($request);
        }
        return redirect('login')->with('error',"You don't have admin access.");
    }
}
