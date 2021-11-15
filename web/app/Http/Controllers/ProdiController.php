<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Prodi;

class ProdiController extends Controller
{

    public function index()
    {
        $prodis = Prodi::all();
        return view('admin.prodi', ['prodis' => $prodis]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $rules = array(
            'kd_prodi' => 'string|max:6|required',
            'nama_prodi' => 'string|required',
            'jenjang' => 'string|required',
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid Data', 'Kode Prodi Maksimal 5 Angka dan Data Tidak Boleh Kosong');
            return redirect()->back();
        }
        $cek_prodi = prodi::where('kd_prodi', $request->kd_prodi)->count();
        if ($cek_prodi == 0) {
            $prodi = new prodi;
            $prodi->jenjang = $request->jenjang;
            $prodi->nama_prodi = $request->nama_prodi;
            $prodi->kd_prodi = $request->kd_prodi;
            $prodi->save();
            Alert::success(' Berhasil Tambah Data ', ' Silahkan Periksa Kembali');
        } else {
            Alert::error('Data Prodi Sudah Ada ', ' Silahkan coba lagi');
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
        $rules = array(
            'kd_prodi' => 'string|max:6|required',
            'nama_prodi' => 'string|required',
            'jenjang' => 'string|required',
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid ', 'Kode Prodi Maksimal 5 Angka dan Data Tidak Boleh Kosong');
            return redirect()->back();
        }

        $update_prodi = Prodi::findOrFail($id)
        ->where('prodis.id', '=', $id)
        ->select('prodis.*')
        ->first();

        $update_prodi->jenjang = $request->jenjang;
        $update_prodi->nama_prodi = $request->nama_prodi;
        $update_prodi->kd_prodi = $request->kd_prodi;
        $update_prodi->save();
        Alert::success(' Berhasil Update Data ', ' Silahkan dicek kembali');
        return redirect()->back();
    }


    public function destroy($id)
    {
        DB::table('prodis')->where('id', $id)->delete();
        return redirect()->back();
    }
}
