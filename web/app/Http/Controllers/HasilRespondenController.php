<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jawabanresponden;
use Illuminate\Support\Facades\DB;
use App\Exports\HasilRespondenDetail;
use App\Exports\HasilRespondenPerusahaanDetail;
use Carbon\Carbon;
use App\Imports\JawabanRespondenImport;
use App\Imports\JawabanRespondenPerusahaanImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class HasilRespondenController extends Controller
{

    public function hasilalumni()
    {
        $jawaban_respondens = Jawabanresponden::where('kategori_responden', '=', 'alumni')->select('*')->get();
        return view('admin.hasil_alumni', compact('jawaban_respondens'));
    }

    public function hasilperusahaan()
    {
        $jawaban_respondens = Jawabanresponden::where('kategori_responden', '=', 'perusahaan')->select('*')->get();
        return view('admin.hasil_perusahaan', compact('jawaban_respondens'));
    }

    public function detailhasilalumni($id)
    {
        $data = Jawabanresponden::leftJoin('jawabanrespondendetails','jawabanrespondens.id','=','jawabanrespondendetails.id_jawabanresponden')
        ->leftJoin('alumnis','alumnis.id_user','=','jawabanrespondens.id_user')
        ->leftJoin('users','users.id','=','jawabanrespondens.id_user')
        ->leftJoin('prodis','prodis.id','=','alumnis.id_prodi')
        ->where('jawabanrespondens.id','=', $id)
        ->select('users.*','alumnis.*','prodis.*','jawabanrespondendetails.*','jawabanrespondens.*')->get();
        echo json_encode($data);
    }
    public function detailhasilperusahaan($id)
    {
        $data = Jawabanresponden::leftJoin('jawabanrespondendetails','jawabanrespondens.id','=','jawabanrespondendetails.id_jawabanresponden')
        ->leftJoin('perusahaans','perusahaans.id_user','=','jawabanrespondens.id_user')
        ->leftJoin('users','users.id','=','jawabanrespondens.id_user')
        ->where('jawabanrespondens.id','=', $id)
        ->select('users.*','perusahaans.*','jawabanrespondendetails.*','jawabanrespondens.*')->get();
        echo json_encode($data);
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function exportalumni(Request $request)
    {
        return Excel::download(new HasilRespondenDetail($request->date_range), 'hasilalumni.xlsx');
    }

    public function exportperusahaan(Request $request)
    {
        return Excel::download(new HasilRespondenPerusahaanDetail($request->date_range), 'hasilperusahaan.xlsx');
    }
    public function importalumni(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:csv,xlx,xls,xlsx'
        ]);

        if ($validator->fails()) {
            Alert::error('Invalid Format Data', 'Pastikan Data Berbentuk (csv,xlx,xls,xlsx)');
            return redirect()->back();
        }
        $file = $request->file('file');
        $nama_file = time() . '_' . $file->getClientOriginalName();
        $file->move('public/file_responden/', $nama_file);
        Excel::import(new JawabanRespondenImport, 'public/file_responden/' . $nama_file);
        Alert::success('Sukses', 'Data Hasil Responden Berhasil Diimport!');
        return redirect()->back();
    }

    public function importperusahaan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:csv,xlx,xls,xlsx'
        ]);

        if ($validator->fails()) {
            Alert::error('Invalid Format Data', 'Pastikan Data Berbentuk (csv,xlx,xls,xlsx)');
            return redirect()->back();
        }
        $file = $request->file('file');
        $nama_file = time() . '_' . $file->getClientOriginalName();
        $file->move('public/file_responden/', $nama_file);
        Excel::import(new JawabanRespondenPerusahaanImport, 'public/file_responden/' . $nama_file);
        Alert::success('Sukses', 'Data Hasil Responden Berhasil Diimport!');
        return redirect()->back();
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        DB::table('jawabanrespondens')->where('id', $id)->delete();
        DB::table('jawabanrespondendetails')->where('id_jawabanresponden', $id)->delete();
        return redirect()->back();
    }
}
