<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Prodi;
use App\Models\Alumni;
use App\Models\Perusahaan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use App\Mail\TracerEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class AuthUserController extends Controller
{
    public function index()
    {
        return view('user.login');
    }

    public function postlogin(Request $request)
    {
        $input = $request->all();
        // dd($input);
        $this->validate($request,[
        'username' => 'required',
        'password' => 'required',
        ]);
        // $user = User::where("username", $request->input('username'))->get();
        // if(Crypt::decryptString($request->password)==$request->input('password'))
        // {
        //     return redirect()->intended('/');
        // } else {
        //     Alert::error('Salah Username atau Password ', ' Silahkan coba lagi');
        //     return redirect()->back();
        // }
        // $credentials = $request->only('username', 'password');
        // if (Auth::attempt($credentials)) {
        //     $user = Auth::user();
        //     if ($user->level == 'alumni') {
        //         return redirect()->intended('/');
        //     } elseif ($user->level == 'perusahaan') {
        //         return redirect()->intended('/');
        //     }
        //     return view('user.login');
        // }
        // return view('user.login')->withSuccess('Oppes! Silahkan Cek Inputanmu');
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        // $data_user = User::where('username','=', $request->username)->orWhere('email','=', $request->email)->select('*')->first();
        // $encrypt = Crypt::encryptString($request->password);
        if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'] )))
        {
            $user = Auth::user();
            if ($user->level == 'alumni') {
                return redirect()->intended('/');
            } elseif ($user->level == 'perusahaan'){
                return redirect()->intended('/');
            }
            return redirect()->route('login');
            Alert::success(' Request email telah terkirim.');
        }else{
            Alert::error('Salah Username atau Password ', ' Silahkan coba lagi');
            return redirect()->back();
        }
    }

    public function log_out(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }

    public function registrasi()
    {
        $prodis = Prodi::all();
        return view('user.daftar', ['prodis' => $prodis]);
    }

    public function simpanregistrasi(Request $request)
    {
        $rules = array(
            'password' => 'string|min:8',
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid Data', 'Password min 8 digit, kombinasi dari huruf dan angka');
            return redirect()->back();
        }
        $daftar_perusahaan = User::where('username', $request->username)->orWhere('email', $request->email)->count();
        if ($daftar_perusahaan == 0) {
            $user           = new User;
            $user->name     = $request->name;
            $user->username = $request->username;
            $user->email    = $request->email;
            $user->email_verified_at  = now();
            $user->level    = 'perusahaan';
            $user->password = Hash::make($request->password);
            $user->forget_password = Crypt::encryptString($request->password);
            $user->save();

            $get_id_user = DB::getPdo()->lastInsertId();;

            $perusahaan = new Perusahaan;
            $perusahaan->id_user     =  $get_id_user;
            $perusahaan->no_telp     = $request->no_telp;
            $perusahaan->url_web     = $request->url_web;
            $perusahaan->alamat      = $request->alamat;
            $perusahaan->nama_cp     = $request->nama_cp;
            $perusahaan->email_cp    = $request->email_cp;
            $perusahaan->jabatan     = $request->jabatan;
            $perusahaan->created_at  = now();
            $perusahaan->updated_at  = now();
            $perusahaan->save();
            Alert::success(' Akun sudah berhasil didaftarkan ');
        } else {
            Alert::error('Data Akun Sudah Ada ', ' Silahkan coba lagi');
            return redirect()->back();
        }
        return view('user.login');
    }

    public function store(Request $request)
    {
        $rules = array(
            'password' => 'string|min:8',
            'nik' => 'string|max:16',
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid Data', 'Data Invalid cek kembali inputan Anda');
            return redirect()->back();
        }
        $daftar_alumni = User::where('username', $request->username)->orWhere('email', $request->email)->count();
        $cek_npm = Alumni::where('npm', $request->npm)->count();
        if ($daftar_alumni == 0 and $cek_npm == 0) {
            $user           = new User;
            $user->name     = $request->name;
            $user->username = $request->username;
            $user->email    = $request->email;
            $user->email_verified_at  = now();
            $user->level    = 'alumni';
            $user->password = Hash::make($request->password);
            $user->forget_password = Crypt::encryptString($request->password);
            $user->save();

            $get_id_user = DB::getPdo()->lastInsertId();;
            $cek_npm = Alumni::where('npm', $request->npm)->count();
            $alumni = new Alumni;
            $alumni->id_user     =  $get_id_user;
            $alumni->npm         = $request->npm;
            $alumni->tahun_masuk = $request->tahun_masuk;
            $alumni->tahun_lulus = $request->tahun_lulus;
            $alumni->id_prodi    = $request->id_prodi;
            $alumni->no_telp     = $request->no_telp;
            $alumni->nik         = $request->nik;
            if($request->filled('npwp')) {
                $alumni->npwp        = $request->npwp;
            } else {
                $alumni->npwp    = " ";
            }
            $alumni->created_at  = now();
            $alumni->updated_at  = now();
            $alumni->save();
            Alert::success(' Akun sudah berhasil didaftarkan ');

        } else {
            Alert::error('Data Akun Sudah Ada ', 'Cek kembali username, email, dan NPM');
            return redirect()->back();
        }
        return view('user.login');
    }

    public function lupa_password()
    {
        return view('user.lupapassword');
    }

    public function post_lupa_password(Request $request)
    {
        $request->validate([
        'email' => 'required|email',
        ]);

        $user=User::where('email', $request->email)->count();

        if(!$user){
            return redirect()->back();
        } else {
            // Mail::to("firdaaviola17@gmail.com")->send(new TracerEmail());
            $data_user = User::where('email','=', $request->email)->select('*')->first();
            $decrypted = Crypt::decryptString($data_user->forget_password);
            Mail::send('user.email', ['data_user' => $data_user, 'password' => $decrypted], function ($m) use ($data_user) {
                $m->from("example@gmail.com", config('app.Mail.TracerEmail', 'APP Name'));
                $m->to($data_user->email, $data_user->email)->subject('Email UG Tracer');
            });
            //  \Mail::raw('Halo '.$data_user->name, 'Username : '.$data_user->username, function ($message) use ($data_user){
            //      $message->to($data_user->email, $data_user->name);
            //      $message->subject('Haloooooooooo!!!');
            //  });
            return redirect()->back();
        }
    }
    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
