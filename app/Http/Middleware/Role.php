<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;

class Role
{
    public function handle($request, Closure $next , $roles)
    {
        $user_role = Auth::user()->getRole();

        $roles = explode("|", $roles);
        foreach ($roles as $role) {
            if(trim($role) == $user_role)
                return $next($request);
        }

        return redirect('/');
    }
}
