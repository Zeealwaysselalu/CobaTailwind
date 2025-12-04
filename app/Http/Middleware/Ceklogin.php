<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Ceklogin
{
    public function handle(Request $request, Closure $next): Response
    {
        $role = User::find($request->session()->get('isAdmin'));
        if ($role->isAdmin == false) {
            return redirect('/');
        }
        return $next($request);
    }
}
