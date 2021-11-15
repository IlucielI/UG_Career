<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Models\Jawabanresponden;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Exports\HasilRespondenDetail;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class AlumniController extends Controller
{

    public function index()
    {

        // return Excel::download(new HasilRespondenDetail, 'jawabanrespondens.xlsx');
        $alumnis = Alumni::all();
        return view('admin.alumni', compact('alumnis'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // $rules = array(
        //     'password' => 'string|min:8|required',
        // );
        // $validation = Validator::make($request->all(), $rules);
        // if ($validation->fails()) {
        //     Alert::error('Invalid Data', 'Password min 8 digit');
        //     return redirect()->back();
        // }
        $cek_alumni = User::where('username', $request->username)->orWhere('email', $request->email)->count();
        if ($cek_alumni == 0) {
            $user = new User;
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->email_verified_at=now();
            $user->level = 'alumni';
            $user->password = Hash::make($request->password);
            $user->forget_password = Crypt::encryptString($request->password);
            $user->save();

            $get_id_user = DB::getPdo()->lastInsertId();;

            $alumni = new alumni;
            $alumni->id_user =  $get_id_user;
            $alumni->alamat = $request->alamat;
            $alumni->no_telp = $request->no_telp;
            $alumni->url_web = $request->url_web;
            $alumni->nama_cp = $request->nama_cp;
            $alumni->jabatan = $request->jabatan;
            $alumni->email_cp = $request->email_cp;
            $alumni->created_at = now();
            $alumni->updated_at = now();
            $alumni->save();
            Alert::success(' Berhasil Tambah Data ', ' Silahkan Periksa Kembali');
        } else {
            Alert::error('Data Akun Sudah Ada ', ' Silahkan coba lagi');
        }
        return redirect()->back();
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
        $cek_alumni = User::where('email', $request->email)->count();
        if ($cek_alumni == 0) {
            $alumni = alumni::findOrFail($id)
            ->where('alumnis.id', '=', $id)
            ->select('alumnis.*')
            ->first();

            $user = User::findOrFail($alumni->id_user)
            ->where('users.id', '=', $alumni->id_user)
            ->select('users.*')
            ->first();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->level = 'alumni';
            if($request->filled('password')) {
                $user->password = Hash::make($request->password);
                $user->forget_password = Crypt::encryptString($request->password);
            } else {
                $user->password = $user->password;
                $user->forget_password = $user->forget_password;
            }
            $user->save();
        
            $alumni->id_user = $alumni->id_user;
            $alumni->alamat = $request->alamat;
            $alumni->no_telp = $request->no_telp;
            $alumni->url_web = $request->url_web;
            $alumni->nama_cp = $request->nama_cp;
            $alumni->jabatan = $request->jabatan;
            $alumni->email_cp = $request->email_cp;
            $alumni->save();
            Alert::success(' Berhasil Ubah Data ', ' Silahkan Periksa Kembali');
        } else {
            Alert::error('Data Kab/Kota Sudah Ada ', ' Silahkan coba lagi');
        }
        return redirect()->back();
       

    }

    public function destroy($id)
    {
        DB::table('alumnis')->where('id_user', $id)->delete();
        return redirect()->back();
    }
}
