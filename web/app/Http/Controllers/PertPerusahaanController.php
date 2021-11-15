<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\PertanyaanCabang;
use App\Models\PilihanJawaban;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PertPerusahaanController extends Controller
{
    public function index($kategori="teks")
    {
        $pertanyaans = Pertanyaan::where('kategori_pertanyaan','=','perusahaan')->where('jenis_pertanyaan','=',$kategori)->select('*')->get();
        return view('admin.pert_perusahaan', ['pertanyaans' => $pertanyaans]);
    }

    public function jenispertanyaan($kategori="teks")
    {
        $pertanyaans = Pertanyaan::where('kategori_pertanyaan','=','perusahaan')->where('jenis_pertanyaan','=',$kategori)->select('*')->get();
        return view('admin.pert_perusahaan', ['pertanyaans' => $pertanyaans]);
    }

    public function ajaxdetail($id, $is_cabang)
    {
        if($is_cabang == "ya"){
            $data["pilihanjawaban"] = PilihanJawaban::where('id_pertanyaan','=', $id)->select('*')->get();
            $data["pertanyaan_cabang"] = PertanyaanCabang::where('id_pertanyaan','=',$id)->select('*')->get();
        }else{
            $data = PilihanJawaban::where('id_pertanyaan','=', $id)->select('*')->get();
        }
        // $datadetail1 = PertanyaanCabang::where('id_pertanyaan','=', $id)->select('*')->get();
		echo json_encode($data);
    }

    
    public function store(Request $request)
    {
        // $rules = array(
        //     'kd_pertanyaan' => 'string|max:6|required',
        //     'pertanyaan' => 'string|required',
        //     'jenis_pertanyaan' => 'string|required',
        // );
        // $validation = Validator::make($request->all(), $rules);
        // if ($validation->fails()) {
        //     Alert::error('Invalid Data', 'Kode pertanyaan Maksimal 5 Angka dan Data Tidak Boleh Kosong');
        //     return redirect()->back();
        // }
        $cek_pertanyaan = Pertanyaan::where('kd_pertanyaan', $request->kd_pertanyaan)->count();
        
        if ($cek_pertanyaan == 0) {
        if($request->kategori == "text"){
            $pertanyaan = new Pertanyaan;
            $pertanyaan->kategori_pertanyaan = 'perusahaan';
            $pertanyaan->jenis_pertanyaan = $request->kategori;
            // $pertanyaan->kelas_pertanyaan = $request->kelas_pertanyaan;
            $pertanyaan->pertanyaan = $request->pertanyaan;
            $pertanyaan->is_cabang = 'tidak';
            $pertanyaan->kd_pertanyaan = $request->kd_pertanyaan;
            $pertanyaan->save();
            Alert::success(' Berhasil Tambah Data ', ' Silahkan Periksa Kembali');
            return redirect()->back();
        }else{
            if($request->is_cabang == "ya"){
                $pertanyaan = new Pertanyaan;
                $pertanyaan->kategori_pertanyaan = 'perusahaan';
                $pertanyaan->jenis_pertanyaan = $request->kategori;
                // $pertanyaan->kelas_pertanyaan = $request->kelas_pertanyaan;
                $pertanyaan->pertanyaan = $request->pertanyaan;
                $pertanyaan->kd_pertanyaan = $request->kd_pertanyaan;
                $pertanyaan->is_cabang = $request->is_cabang;
                $pertanyaan->save();
                $get_id_pertanyaan = DB::getPdo()->lastInsertId();

                foreach($request->kd_cabang as $key => $val)
                {
                $pertanyaancabang= new PertanyaanCabang;
                $pertanyaancabang->kd_cabang=$val;
                $pertanyaancabang->pertanyaan_cabang=$request->pertanyaan_cabang[$key];
                $pertanyaancabang->id_pertanyaan =  $get_id_pertanyaan;
                $pertanyaancabang->save();
                }

                foreach($request->jawaban as $key => $value)
                {
                    $pilihanjawaban = new PilihanJawaban;
                    $pilihanjawaban->jawaban = $value;
                    
                    $pilihanjawaban->id_pertanyaan =  $get_id_pertanyaan;
                    $pilihanjawaban->created_at = now();
                    $pilihanjawaban->updated_at = now();
                    $pilihanjawaban->save();
                }
            }else{
                $pertanyaan = new Pertanyaan;
                $pertanyaan->kategori_pertanyaan = 'perusahaan';
                $pertanyaan->jenis_pertanyaan = $request->kategori;
                $pertanyaan->is_cabang= $request->is_cabang;
                // $pertanyaan->kelas_pertanyaan = $request->kelas_pertanyaan;
                $pertanyaan->pertanyaan = $request->pertanyaan;
                $pertanyaan->kd_pertanyaan = $request->kd_pertanyaan;
                $pertanyaan->save();
                $get_id_pertanyaan = DB::getPdo()->lastInsertId();

                foreach($request->jawaban as $key => $value)
                {
                    $pilihanjawaban = new PilihanJawaban;
                    $pilihanjawaban->jawaban = $value;
                    $pilihanjawaban->id_pertanyaan =  $get_id_pertanyaan;
                    $pilihanjawaban->created_at = now();
                    $pilihanjawaban->updated_at = now();
                    $pilihanjawaban->save();
                }
            }
            }
            Alert::success(' Berhasil Tambah Data ', ' Silahkan Periksa Kembali');
        } else {
            Alert::error('Data pertanyaan Sudah Ada ', ' Silahkan coba lagi');
        }
        return redirect()->back();
    }


    
    public function update(Request $request, $id)
    {
        // $rules = array(
        //     'kd_pertanyaan' => 'string|max:6|required',
        //     'pertanyaan' => 'string|required',
        //     'jenis_pertanyaan' => 'string|required',
        // );
        // $validation = Validator::make($request->all(), $rules);
        // if ($validation->fails()) {
        //     Alert::error('Invalid ', 'Kode pertanyaan Maksimal 5 Angka dan Data Tidak Boleh Kosong');
        //     return redirect()->back();
        // }

        if($request->kategori == "text"){
            $update_pertanyaan = Pertanyaan::findOrFail($id)
            ->where('pertanyaans.id', '=', $id)
            ->select('pertanyaans.*')
            ->first();
            $update_pertanyaan->kategori_pertanyaan = 'perusahaan';
            $update_pertanyaan->jenis_pertanyaan = $request->kategori;
            // $update_pertanyaan->kelas_pertanyaan = $request->kelas_pertanyaan;
            $update_pertanyaan->pertanyaan = $request->pertanyaan;
            $update_pertanyaan->kd_pertanyaan = $request->kd_pertanyaan;
            $update_pertanyaan->save();
            Alert::success(' Berhasil Ubah Data ', ' Silahkan Periksa Kembali');
            return redirect()->back();
        }else{


            if($request->is_cabang == "ya"){
                $cek_tambahpertanyaan=0;
                foreach($request->kd_cabang as $kd_cabang){
                if($kd_cabang != null){
                    $cek_tambahpertanyaan++;
                    // dd($kd_cabang);
                    // echo('ok');
                    // die;
                }
                }
                $cek_tambahjawaban=0;
                foreach($request->jawaban as $jawaban){
                if($jawaban != null){
                    $cek_tambahjawaban++;
                    // dd($kd_cabang);
                    // echo('ok');
                    // die;
                }
                }
                $update_pertanyaan = Pertanyaan::findOrFail($id)
                ->where('pertanyaans.id', '=', $id)
                ->select('pertanyaans.*')
                ->first();
                $update_pertanyaan->kategori_pertanyaan = 'perusahaan';
                $update_pertanyaan->jenis_pertanyaan = $request->kategori;
                // $update_pertanyaan->kelas_pertanyaan = $request->kelas_pertanyaan;
                $update_pertanyaan->pertanyaan = $request->pertanyaan;
                $update_pertanyaan->kd_pertanyaan = $request->kd_pertanyaan;
                $update_pertanyaan->save();

                $j=0;
                foreach($request->idcabang as $key => $value){
                $update_pilihancabang = PertanyaanCabang::findOrFail($value)
                ->where('id', '=', $value)
                ->select('pertanyaancabangs.*')
                ->first();
    
                $update_pilihancabang->kd_cabang = $request->update_kdcabang[$j];
                $update_pilihancabang->pertanyaan_cabang = $request->update_cabang[$j];
                $j++;
                $update_pilihancabang->save();
            }
            if($request->idpilihan != null){
                $i=0;
                foreach($request->idpilihan as $key => $value){
                $update_pilihanjawaban = PilihanJawaban::findOrFail($value)
                ->where('id', '=', $value)
                ->select('pilihanjawabans.*')
                ->first();
    
                $update_pilihanjawaban->jawaban = $request->update_jawaban[$i++];
                $update_pilihanjawaban->save();
                
            }}

            if($cek_tambahpertanyaan > 0){
            foreach($request->kd_cabang as $key => $val)
            {
            $pertanyaancabang= new PertanyaanCabang;
            $pertanyaancabang->kd_cabang=$val;
            $pertanyaancabang->pertanyaan_cabang=$request->pertanyaan_cabang[$key];
            $pertanyaancabang->id_pertanyaan =  $id;
            $pertanyaancabang->save();
            }
        }
            if($cek_tambahjawaban > 0){
            foreach($request->jawaban as $key => $value)
            {
                $pilihanjawaban = new PilihanJawaban;
                $pilihanjawaban->jawaban = $value;
                $pilihanjawaban->id_pertanyaan =  $id;
                $pilihanjawaban->created_at = now();
                $pilihanjawaban->updated_at = now();
                $pilihanjawaban->save();
            }
        }

    }else{
       
        $cek_tambahjawaban=0;
                foreach($request->jawaban as $jawaban){
                if($jawaban != null){
                    $cek_tambahjawaban++;
                    // dd($cek_tambahjawaban);
                    // echo('ok');
                    // die;
                }
                }
            $update_pertanyaan = Pertanyaan::findOrFail($id)
            ->where('pertanyaans.id', '=', $id)
            ->select('pertanyaans.*')
            ->first();
            $update_pertanyaan->kategori_pertanyaan = 'perusahaan';
            $update_pertanyaan->jenis_pertanyaan = $request->kategori;
            // $update_pertanyaan->kelas_pertanyaan = $request->kelas_pertanyaan;
            $update_pertanyaan->pertanyaan = $request->pertanyaan;
            $update_pertanyaan->kd_pertanyaan = $request->kd_pertanyaan;
            $update_pertanyaan->save();

            if($request->idpilihan != null){
            $i=0;
            foreach($request->idpilihan as $key => $value){
            $update_pilihanjawaban = PilihanJawaban::findOrFail($value)
            ->where('id', '=', $value)
            ->select('pilihanjawabans.*')
            ->first();

            $update_pilihanjawaban->jawaban = $request->update_jawaban[$i++];
            $update_pilihanjawaban->save();
            }}

            if($cek_tambahjawaban > 0){
                foreach($request->jawaban as $key => $value)
                {
                    $pilihanjawaban = new PilihanJawaban;
                    $pilihanjawaban->jawaban = $value;
                    $pilihanjawaban->id_pertanyaan =  $id;
                    $pilihanjawaban->created_at = now();
                    $pilihanjawaban->updated_at = now();
                    $pilihanjawaban->save();
                }
            }

        // if($request->pilihan_jawaban != null){
        // foreach($request->pilihan_jawaban as $key => $value)
        // {
        //     $pilihanjawaban = new PilihanJawaban;
        //     $pilihanjawaban->jawaban = $value;
        //     $pilihanjawaban->id_pertanyaan =  $id;
        //     $pilihanjawaban->created_at = now();
        //     $pilihanjawaban->updated_at = now();
        //     $pilihanjawaban->save();
        // }
        // }else{
        //     Alert::success(' Berhasil Ubah Data ', ' Silahkan Periksa Kembali');
        //     return redirect()->back();
        // }
    }
        }
            Alert::success(' Berhasil Ubah Data ', ' Silahkan Periksa Kembali');
        return redirect()->back();
    }

   
    public function destroy($id)
    {
        DB::table('pertanyaans')->where('id', $id)->delete();
        DB::table('pilihanjawabans')->where('id_pertanyaan', $id)->delete();
        DB::table('pertanyaancabangs')->where('id_pertanyaan', $id)->delete();
        return redirect()->back();
    }
}
