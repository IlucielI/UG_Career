<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dataweb;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert; 

class DatawebController extends Controller
{
   
    public function index()
    {
        $datawebs = Dataweb::all();
        return view('admin.dataweb', ['datawebs' => $datawebs]);
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
            'nama_web'      => 'string|required',
            'email'         => 'string|required',
            'alamat'        => 'string|required',
            'jam_pelayanan' => 'string|required',
        );

        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid Data', 'Data Tidak Boleh Kosong');
            return redirect()->back();
        }

            $dataweb = Dataweb::find($id);
            $dataweb->nama_web      = $request['nama_web'];
            // $dataweb->no_telp       = $request['no_telp'];
            $dataweb->email         = $request['email'];
            $dataweb->alamat        = $request['alamat'];
            $dataweb->jam_pelayanan = $request['jam_pelayanan'];
            $dataweb->update();
            $datawebs = Dataweb::all();
            Alert::success(' Berhasil Update Data ', ' Silahkan dicek kembali');
            return view('admin.dataweb', compact('datawebs'));

    }

    
    public function destroy($id)
    {
        //
    }
}
