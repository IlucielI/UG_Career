<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Kabkota;
use App\Models\Provinsi;


class KabkotaController extends Controller
{
    public function index()
    {
        $kabkotas = Kabkota::all();
        $provinsis = Provinsi::all();
        return view('admin.kabkota', compact('provinsis', 'kabkotas'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $rules = array(
            'kd_kabkota' => 'string|max:6|required',
            'id_provinsi' => 'int|required',
            'nama_kabkota' => 'string|required',
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid Kode Kab/Kota', 'Maksimal 6 Angka');
            return redirect()->back();
        }
        $cek_kabkota = Kabkota::where('kd_kabkota', $request->kd_kabkota)->orWhere('nama_kabkota', $request->nama_kabkota)->count();
        if ($cek_kabkota == 0) {
            $kabkota = new Kabkota;
            $kabkota->id_provinsi = $request->id_provinsi;
            $kabkota->nama_kabkota = $request->nama_kabkota;
            $kabkota->kd_kabkota = $request->kd_kabkota;
            $kabkota->save();
            Alert::success(' Berhasil Tambah Data ', ' Silahkan Periksa Kembali');
        } else {
            Alert::error('Data Kab/Kota Sudah Ada ', ' Silahkan coba lagi');
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
            'kd_kabkota' => 'string|max:6|required',
            'id_provinsi' => 'int|required',
            'nama_kabkota' => 'string|required',
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid Kode Kab/Kota', 'Maksimal 6 Angka');
            return redirect()->back();
        }

        $update_kabkota = Kabkota::findOrFail($id)
        ->leftJoin('provinsis', 'provinsis.id', '=', 'kabkotas.id_provinsi')
        ->where('kabkotas.id', '=', $id)
        ->select('provinsis.*', 'kabkotas.*')
        ->first();

        $update_kabkota->id_provinsi = $request->id_provinsi;
        $update_kabkota->nama_kabkota = $request->nama_kabkota;
        $update_kabkota->kd_kabkota = $request->kd_kabkota;
        $update_kabkota->save();
        Alert::success(' Berhasil Update Data ', ' Silahkan dicek kembali');
        return redirect()->back();
    }

 
    public function destroy($id)
    {
        DB::table('kabkotas')->where('id', $id)->delete();
        return redirect()->back();
    }
}
