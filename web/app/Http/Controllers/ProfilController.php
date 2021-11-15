<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Alumni;
use App\Models\Perusahaan;
use App\Models\Prodi;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;


class ProfilController extends Controller
{
    
    public function index()
    {
        
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $users = User::where('id','=',$id)->select('*')->get();
        return view('admin.editprofil', ['users' => $users]);
    }

   
    public function update(Request $request, $id)
    {
        $rules = array(
            'name'     => 'string',
            'email'    => 'string',
            'password' => 'string|min:8',
        );

        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid Data', 'Password Minimal 8 Karakter, kombinasi dari huruf dan angka');
            return redirect()->back();
        }
            $user = User::findOrFail($id);
            $user->name     = $request->name;
            $user->username    = $user->username;
            $user->email    = $request->email;
            // $user->password = $request[Hash::make('password')];
            // $user->forget_password = $request[Hash::make('password')];
            if($request->filled('password')) {
                $user->password = Hash::make($request->password);
                $user->forget_password = Crypt::encryptString($request->password);
            } else {
                $user->password = $user->password;
                $user->forget_password = $user->forget_password;
            }
            $user->update();
            // $user = User::all();
            Alert::success(' Berhasil Update Data ', ' Silahkan dicek kembali');
            return redirect()->back();
    }

    // FRONT END PROFIL ALUMNI
    public function editprofil_front($id)
    {
        $users = User::where('id','=',$id)->select('*')->get();
        $alumnis = Alumni::where('id_user', '=', $id)->select('*')->get();
        $prodis = Prodi::all();
        return view('user.edit-profil', ['users' => $users, 'alumnis'=>$alumnis,'prodis'=>$prodis ]);
    }

    public function updateprofil(Request $request, $id)
    {
        $rules = array(
            'name'        => 'string',
            'email'       => 'string',
            'nik'         => 'string',
            'npm'         => 'string',
            'tahun_masuk' => 'string',
            'tahun_lulus' => 'string',
            'no_telp'     => 'string',
        );

        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid Data', 'Password Minimal 8 Karakter, kombinasi dari huruf dan angka');
            return redirect()->back();
        }
            $alumni = Alumni::findOrFail($id)
            ->where('alumnis.id', '=', $id)
            ->select('alumnis.*')
            ->first();

            $user = User::findOrFail($alumni->id_user);
            $user->name     = $request->name;
            $user->username = $user->username;
            $user->email    = $request->email;
            // $user->password = $request[Hash::make('password')];
            // $user->forget_password = $request[Hash::make('password')];
            if($request->filled('password')) {
                $user->password = Hash::make($request->password);
                $user->forget_password = Crypt::encryptString($request->password);
            } else {
                $user->password = $user->password;
                $user->forget_password = $user->forget_password;
            }
            $user->save();
            $alumni->id_user     = $alumni->id_user;
            $alumni->npm         = $alumni->npm;
            $alumni->id_prodi    = $request->prodi;
            $alumni->tahun_masuk = $request->tahun_masuk;
            $alumni->tahun_lulus = $request->tahun_lulus;
            $alumni->id_prodi    = $request->id_prodi;
            $alumni->no_telp     = $request->no_telp;
            $alumni->nik         = $request->nik;
            $alumni->npwp        = $request->npwp;
            $alumni->save();
            Alert::success(' Berhasil Ubah Data ', ' Silahkan Periksa Kembali');
            return redirect()->back();
    }

    // FRONT END PERUSAHAAN
    public function editprofilperusahaan($id)
    {
        $users = User::where('id','=',$id)->select('*')->get();
        $perusahaans = Perusahaan::where('id_user', '=', $id)->select('*')->get();
        return view('user.editprofilperusahaan', ['users' => $users, 'perusahaans'=>$perusahaans]);
    }

    public function updateprofilperusahaan(Request $request, $id)
    {
        $rules = array(
            'name'        => 'string',
            'email'       => 'string',
            'alamat'      => 'string',
            'nama_cp'     => 'string',
            'jabatan'     => 'string',
            'email_cp'    => 'string',
            'no_telp'     => 'string',
        );

        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid Data', 'Password Minimal 8 Karakter, kombinasi dari huruf dan angka');
            return redirect()->back();
        }
            $perusahaan = Perusahaan::findOrFail($id)
            ->where('perusahaans.id', '=', $id)
            ->select('perusahaans.*')
            ->first();

            $user = User::findOrFail($perusahaan->id_user);
            $user->name     = $request->name;
            $user->username    = $user->username;
            $user->email    = $request->email;
            // $user->password = $request[Hash::make('password')];
            // $user->forget_password = $request[Hash::make('password')];
            if($request->filled('password')) {
                $user->password = Hash::make($request->password);
                $user->forget_password = Crypt::encryptString($request->password);
            } else {
                $user->password = $user->password;
                $user->forget_password = $user->forget_password;
            }
            $user->save();

            $perusahaan->id_user  = $perusahaan->id_user;
            $perusahaan->alamat   = $request->alamat;
            $perusahaan->nama_cp  = $request->nama_cp;
            $perusahaan->jabatan  = $request->jabatan;
            $perusahaan->email_cp = $request->email_cp;
            $perusahaan->no_telp  = $request->no_telp;
            $perusahaan->url_web  = $request->url_web;
            $perusahaan->save();
            Alert::success(' Berhasil Ubah Data ', ' Silahkan Periksa Kembali');
            return redirect()->back();
    }
    
    public function destroy($id)
    {
        //
    }
}
