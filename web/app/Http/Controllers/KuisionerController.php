<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Pertanyaan;
use App\Models\PertanyaanCabang;
use App\Models\Jawabanresponden;
use App\Models\Jawabanrespondendetail;
use App\Models\PilihanJawaban;
use App\Models\Provinsi;
use App\Models\Kabkota;
use App\Models\Perusahaan;
use App\Models\Alumni;
use App\Models\PilihanJawabanCabang;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class KuisionerController extends Controller
{

    public function index()
    {
        //
    }

    public function isikuisioneralumni($id)
    {
        $alumnis = Alumni::where('id_user', '=', $id)->select('*')->get();
        $provinsis = Provinsi::all();
        $pertanyaans = Pertanyaan::where('kategori_pertanyaan', '=', 'alumni')->orderBy('no_tampilan')->get();
        $i = 0;
        foreach ($pertanyaans as $pertanyaan) {
            $pertanyaans[$i]["pilihanjawaban"] = PilihanJawaban::where('id_pertanyaan', '=', $pertanyaan['id'])->select('*')->get();
            if ($pertanyaan['jenis_pertanyaan'] == "if else") {
                $j = 0;
                foreach ($pertanyaans[$i]["pilihanjawaban"] as $pilihanjawaban) {
                    $pertanyaans[$i]["pilihanjawaban"][$j]['pertanyaan_cabang'] = PertanyaanCabang::leftJoin('link_ifelse', 'link_ifelse.id_pertanyaancabang', '=', 'pertanyaancabangs.id')->where('link_ifelse.id_pilihanjawaban', '=', $pilihanjawaban['id'])->select('*')->get();
                    $j++;
                }
                $i++;
                continue;
            }
            if ($pertanyaan['is_cabang'] == "ya") {
                $pertanyaans[$i]["pertanyaan_cabang"] = PertanyaanCabang::where('id_pertanyaan', '=', $pertanyaan['id'])->select('*')->get();
                if ($pertanyaan['jenis_pertanyaan'] == "pilihan dan text") {
                    $j = 0;
                    foreach ($pertanyaans[$i]["pertanyaan_cabang"] as $pertanyaan_cabang) {
                        $pertanyaans[$i]["pertanyaan_cabang"][$j]['pilihanjawabancabang'] = PilihanJawabanCabang::where('id_pertanyaancabang', '=', $pertanyaan_cabang['id'])->select('*')->get();
                        $j++;
                    }
                }
            }
            $i++;
        }
        return view('user.isikuisioneralumni', compact('pertanyaans', 'alumnis', 'provinsis'));
    }

    public function isikuisionerperusahaan($id)
    {
        $perusahaans = Perusahaan::where('id_user', '=', $id)->select('*')->get();
        $provinsis = Provinsi::all();
        $pertanyaansquery = Pertanyaan::where('kategori_pertanyaan', '=', 'perusahaan')->orderBy('kd_pertanyaan')->get();
        $i = 0;
        $pertanyaans = [];
        foreach ($pertanyaansquery as $pertanyaan) {
            $pertanyaans[$pertanyaan['kd_pertanyaan']] = $pertanyaansquery[$i];
            $pertanyaans[$pertanyaan['kd_pertanyaan']]["pilihanjawaban"] = PilihanJawaban::where('id_pertanyaan', '=', $pertanyaan['id'])->select('*')->get();
            if ($pertanyaan['is_cabang'] == "ya") {
                $pertanyaans[$pertanyaan['kd_pertanyaan']]["pertanyaan_cabang"] = PertanyaanCabang::where('id_pertanyaan', '=', $pertanyaan['id'])->select('*')->get();
            }
            $i++;
        }
        ksort($pertanyaans, SORT_NATURAL);
        return view('user.isikuisioner_perusahaan', compact('pertanyaans', 'perusahaans', 'provinsis'));
    }

    public function isikuisionercontoh($id)
    {
        // $pertanyaans = Pertanyaan::where('kategori_pertanyaan','=','alumni')->orderBy('kd_pertanyaan')->get();
        $alumnis = Alumni::where('id_user', '=', $id)->select('*')->get();
        return view('user.isikuisioner_alumni', compact('pertanyaans', 'alumnis'));
    }

    public function ajaxkabkota($id)
    {
        $data = Kabkota::where('id_provinsi', '=', $id)->get();
        // $desa = Desa::where("desa_kec",$request->kecID)->pluck('desa_kode','desa_nama');
        // return response()->json($desa);
        echo json_encode($data);
    }

    public function kuisionerperusahaanstore(Request $request)
    {

        $user = Auth::user();

        // $cek_perusahaan = Jawabanresponden::where('user', $request->username)->count();
        // if ($cek_perusahaan == 0) {
        $responden = new Jawabanresponden;
        $responden->id_user = $user->id;
        $responden->kategori_responden = 'perusahaan';
        $responden->save();

        $get_id_responden = DB::getPdo()->lastInsertId();

        foreach ($request->except('_token', '_method') as $key => $val) {
            if (is_array($request->$key)) {
                foreach ($request[$key] as $k => $v) {
                    $hasil_perusahaan = new Jawabanrespondendetail;
                    $hasil_perusahaan->kd_pertanyaan = $key;
                    $hasil_perusahaan->kd_jawaban = $key;
                    $hasil_perusahaan->jawaban = $v;
                    $hasil_perusahaan->id_jawabanresponden =  $get_id_responden;
                    // dd($hasil_perusahaan);
                    $hasil_perusahaan->save();
                }
            } else {
                $hasil_perusahaan = new Jawabanrespondendetail;
                $pertanyaan_cabang = PertanyaanCabang::where('kd_cabang', '=', $key)->select('id_pertanyaan')->get();
                if ($pertanyaan_cabang->first()) {
                    $kd_pert = Pertanyaan::where('id', '=', $pertanyaan_cabang[0]->id_pertanyaan)->select('kd_pertanyaan')->get();
                    // dd($kd_pert[0]->kd_pertanyaan);
                    $hasil_perusahaan->kd_pertanyaan = $kd_pert[0]->kd_pertanyaan;
                } else {
                    $hasil_perusahaan->kd_pertanyaan = $key;
                }
                $hasil_perusahaan->kd_jawaban = $key;
                $hasil_perusahaan->jawaban = $val;
                $hasil_perusahaan->id_jawabanresponden =  $get_id_responden;
                $hasil_perusahaan->save();
                $pertanyaan_cabang = [];
            }
        }

        // }else{

        //     }
        Alert::success(' Berhasil Tambah Data ', ' Silahkan Periksa Kembali');
        return redirect()->back();
    }

    public function kuisioneralumnistore(Request $request)
    {

        $user = Auth::user();
        $user_new = new User;
        $user_new->npwp = $request->npwp;

        // $cek_perusahaan = Jawabanresponden::where('user', $request->username)->count();
        // if ($cek_perusahaan == 0) {
        $responden = new Jawabanresponden;
        $responden->id_user = $user->id;
        $responden->kategori_responden = 'alumni';
        $responden->save();

        $get_id_responden = DB::getPdo()->lastInsertId();

        foreach ($request->except('_token', '_method') as $key => $val) {
            if (is_array($request->$key)) {
                foreach ($request[$key] as $k => $v) {
                    $hasil_alumni = new Jawabanrespondendetail;
                    $hasil_alumni->kd_pertanyaan = $key;
                    $hasil_alumni->kd_jawaban = $k;
                    $hasil_alumni->jawaban = $v;
                    $hasil_alumni->id_jawabanresponden =  $get_id_responden;
                    // dd($hasil_alumni);
                    $hasil_alumni->save();
                }
            } else {
                $hasil_alumni = new Jawabanrespondendetail;
                $pertanyaan_cabang = PertanyaanCabang::where('kd_cabang', '=', $key)->select('id_pertanyaan')->get();
                if ($pertanyaan_cabang->first()) {
                    $kd_pert = Pertanyaan::where('id', '=', $pertanyaan_cabang[0]->id_pertanyaan)->select('kd_pertanyaan')->get();
                    $hasil_alumni->kd_pertanyaan = $kd_pert[0]->kd_pertanyaan;
                    $hasil_alumni->kd_jawaban = $key;
                    $hasil_alumni->jawaban = $val;
                    $hasil_alumni->id_jawabanresponden =  $get_id_responden;
                    $hasil_alumni->save();
                }
                $pertanyaan_cabang = [];
                // else {
                //     $hasil_alumni->kd_pertanyaan = $key;
                // }
            }
        }
        // }else{

        //     }
        Alert::success(' Berhasil Tambah Data ', ' Silahkan Periksa Kembali');
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
        //
    }


    public function destroy($id)
    {
        //
    }
}
