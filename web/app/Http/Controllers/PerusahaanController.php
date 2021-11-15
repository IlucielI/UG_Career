<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perusahaan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class PerusahaanController extends Controller
{

    public function index()
    {
        $perusahaans = Perusahaan::all();
        return view('admin.perusahaan', compact('perusahaans'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $rules = array(
            'password' => 'string|min:8',
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid Data', 'Password min 8 digit, kombinasi dari huruf dan angka');
            return redirect()->back();
        }
        $cek_perusahaan = User::where('username', $request->username)->orWhere('email', $request->email)->count();
        if ($cek_perusahaan == 0) {
            $user = new User;
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->email_verified_at=now();
            $user->level = 'perusahaan';
            $user->password = Hash::make($request->password);
            $user->forget_password = Crypt::encryptString($request->password);
            $user->save();

            $get_id_user = DB::getPdo()->lastInsertId();;

            $perusahaan = new Perusahaan;
            $perusahaan->id_user =  $get_id_user;
            $perusahaan->alamat = $request->alamat;
            $perusahaan->no_telp = $request->no_telp;
            $perusahaan->url_web = $request->url_web;
            $perusahaan->nama_cp = $request->nama_cp;
            $perusahaan->jabatan = $request->jabatan;
            $perusahaan->email_cp = $request->email_cp;
            $perusahaan->created_at = now();
            $perusahaan->updated_at = now();
            $perusahaan->save();
            Alert::success(' Berhasil Tambah Data ', ' Silahkan Periksa Kembali');
        } else {
            Alert::error('Data Akun Sudah Ada ', ' Silahkan coba lagi');
        }
        return redirect()->back();
    }


    public function show($id)
    {
        $data = Perusahaan::leftJoin('users','users.id','=','perusahaans.id_user')->where('perusahaans.id','=', $id)->select('users.*','perusahaans.*')->get();
         echo json_encode($data);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        // $rules = array(
        //     'username' => 'string|unique|required',
        //     'password' => 'string|min:8|required',
        //     'name' => 'string|required',
        //     'email' => 'string|unique|required',
        //     'alamat' => 'string|required',
        //     'no_telp' => 'string|required',
        //     'url_web' => 'string|required',
        //     'nama_cp' => 'string|required',
        //     'jabatan' => 'string|required',
        // );
        // $validation = Validator::make($request->all(), $rules);
        // if ($validation->fails()) {
        //     Alert::error('Invalid Data', 'Data sudah tersedia');
        //     return redirect()->back();
        // }
        $perusahaan = Perusahaan::findOrFail($id)
            ->where('perusahaans.id', '=', $id)
            ->select('perusahaans.*')
            ->first();

            $user = User::findOrFail($perusahaan->id_user)
            ->where('users.id', '=', $perusahaan->id_user)
            ->select('users.*')
            ->first();
            $user->name = $request->name;
            $user->username = $user->username;
            $user->email = $request->email;
            $user->level = 'perusahaan';
            if($request->filled('password')) {
                $user->password = Hash::make($request->password);
                $user->forget_password = Crypt::encryptString($request->password);
            } else {
                $user->password = $user->password;
                $user->forget_password = $user->forget_password;
            }
            $user->save();
        
            $perusahaan->id_user  = $perusahaan->id_user;
            $perusahaan->alamat   = $perusahaan->alamat;
            $perusahaan->no_telp  = $request->no_telp;
            $perusahaan->url_web  = $request->url_web;
            $perusahaan->nama_cp  = $request->nama_cp;
            $perusahaan->jabatan  = $request->jabatan;
            $perusahaan->email_cp = $request->email_cp;
            $perusahaan->save();
            Alert::success(' Berhasil Ubah Data ', ' Silahkan Periksa Kembali');
        return redirect()->back();
       
    }

    public function destroy($id)
    {
        DB::table('perusahaans')->where('id_user', $id)->delete();
        DB::table('users')->where('id', $id)->delete();
        return redirect()->back();
    }
}
