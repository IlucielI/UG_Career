<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
// use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ProvinsiController extends Controller
{
    public function index()
    {
        $provinsis = Provinsi::all();
        return view('admin.provinsi', ['provinsis' => $provinsis]);
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
        //
    }

   
    public function update(Request $request, $id)
    {
        $rules = array(
            'nama_provinsi' => 'string|required',
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid Data', 'Data Tidak Boleh Kosong');
            return redirect()->back();
        }

        $update_provinsi = provinsi::findOrFail($id)
        ->where('provinsis.id', '=', $id)
        ->select('provinsis.*')
        ->first();

        $update_provinsi->nama_provinsi = $request->nama_provinsi;
        $update_provinsi->save();
        Alert::success(' Berhasil Update Data ', ' Silahkan dicek kembali');
        return redirect()->back();
    }

    
    public function destroy($id)
    {
        DB::table('provinsis')->where('id_provinsi', $id)->delete();
        return redirect()->back();
    }
}
