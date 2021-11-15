<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
// use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    public function index($kategori = "pengumuman")
    {
        $beritas = Berita::where('jenis_berita', '=', $kategori)->select('*')->get();
        return view('admin.berita2', ['beritas' => $beritas]);
    }

    public function jenisberita($kategori = "pengumuman")
    {
        $beritas = Berita::where('jenis_berita', '=', $kategori)->select('*')->get();
        return view('admin.berita2', ['beritas' => $beritas]);
    }

    public function ajaxdetail($id)
    {
        $data = Berita::where('id', '=', $id)->select('*')->get();
        echo json_encode($data);
    }


    public function store(Request $request)
    {
        $rules = array(
            'foto' => 'required|mimes:jpeg,png,jpg,gif,svg',
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Data Tidak Sesuai', 'Silahkan coba lagi');
            return redirect()->back();
        }

        $cek_berita = Berita::where('judul_berita', $request->judul_berita)->count();
        if ($cek_berita == 0) {
            $berita = new Berita;
            $berita->jenis_berita = $request->jenis_berita;
            $berita->judul_berita = $request->judul_berita;
            $berita->preview_berita = $request->preview_berita;
            $berita->isi_berita = $request->isi_berita;
            $file = $request->file('foto');
            $nama_file = rand() . $file->getClientOriginalName();
            $file->move('public/img/', $nama_file);
            $berita->foto = $nama_file;
            $berita->save();

            Alert::success('Berhasil Tambah Berita', 'Silahkan Periksa Kembali');
        } else {
            Alert::error('Judul Berita Sudah Ada', 'Silahkan coba lagi');
        }
        return redirect()->back();
    }


    public function show(Request $request)
    {
        // $cek_berita = Berita::where('judul_berita', $request->judul_berita)->count();
        // if ($cek_berita == 0) {
        //     $berita = Berita::findOrFail($id);
        //     if ($request->hasFile('foto')){
        //         $image_path = public_path("public/img/".$berita->foto);
        //         if (File::exists($image_path)) {
        //             File::delete($image_path);
        //         }
        //         $bannerImage = $request->file('foto');
        //         $imgName = $bannerImage->getClientOriginalName();
        //         $destinationPath = public_path('public/img/');
        //         $bannerImage->move($destinationPath, $imgName);
        //     } else {
        //         $imgName = $berita->foto;
        //     }
        //     $berita->jenis_berita = $request->jenis_berita;
        //     $berita->judul_berita = $request->judul_berita;
        //     $berita->preview_berita = $request->preview_berita;
        //     $berita->isi_berita = $request->isi_berita;
        //     $file = $request->file('foto');
        //     $nama_file = rand().$file->getClientOriginalName();
        //     $file->move('public/img/', $nama_file);
        //     $berita->foto = $nama_file;
        //     $berita->save();

        //     Alert::success('Berhasil Tambah Berita', 'Silahkan Periksa Kembali');
        // } else {
        //     Alert::error('Judul Berita Sudah Ada', 'Silahkan coba lagi');
        // }
        // return redirect()->back();
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $cek_berita = Berita::where('judul_berita', $request->judul_berita)->count();
        // if ($cek_berita > 0) {
            $berita = Berita::findOrFail($id);
            if ($request->hasFile('foto')) {
                $image_path = 'public/img/'.$berita->foto;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
                $bannerImage = $request->file('foto');
                $imgName = rand().$bannerImage->getClientOriginalName();
                $bannerImage->move('public/img/', $imgName);
                $berita->foto = $imgName;
            } else {
                $imgName = $berita->foto;
            }
            $berita->jenis_berita = $request->jenis_berita;
            $berita->judul_berita = $request->judul_berita;
            $berita->preview_berita = $request->preview_berita;
            $berita->isi_berita = $request->isi_berita;
            // $file = $request->file('foto');
            // $nama_file = rand().$file->getClientOriginalName();
            // $file->move('public/img/', $nama_file);
            $berita->save();

            Alert::success('Berhasil Ubah Berita', 'Silahkan Periksa Kembali');
        // } else {
        //     Alert::error('Judul Berita Sudah Ada', 'Silahkan coba lagi');
        // }
        return redirect()->back();
    }


    public function destroy($id)
    {
        DB::table('beritas')->where('id', $id)->delete();
        return redirect()->back();
    }
}
