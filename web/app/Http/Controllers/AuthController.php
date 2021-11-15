<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function index()
    {
        return view('administrator');
    }
    public function proses_login(Request $request)
    {
        request()->validate([
        'username' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level == 'admin' or $user->level == 'prodi') {
                return redirect()->intended('administrator/dashboard');
            }elseif($user->level == 'prodi') {
                return redirect()->intended('administrator/dashboard');
            }else{
                Alert::error('Invalid Login', 'Anda Tidak Mempunyai Akses');
                return redirect('administrator');
            }  
        }
        Alert::error('Invalid Login', 'Cek Kembali Username dan Password');
        return redirect('administrator');
    }
    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('administrator');
    }
}
