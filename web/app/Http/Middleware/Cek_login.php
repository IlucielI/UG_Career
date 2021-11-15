<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert; 

class Cek_login
{
    public function handle(Request $request, Closure $next,...$roles)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $user = Auth::user();

        foreach($roles as $role) {
        if($user->level == $role)
            return $next($request);}

        Alert::error('Invalid Login', 'Anda Tidak Punya Akses');
        return redirect('login')->with('error',"Anda Tidak Punya Akses");
    }
}
