<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jawabanresponden;
use App\Models\Perusahaan;
use App\Models\User;
use App\Models\Berita;
use App\Models\Pertanyaan;


class AdminController extends Controller
{

    public function index()
    {
        $jumlah_perusahaan = Perusahaan::count();
        $jumlah_pertanyaan = Pertanyaan::count();
        $jumlah_berita = Berita::count();
        $jumlah_user_alumni = User::where('level', '=', 'alumni')->count();
        $jumlah_survey_alumni = Jawabanresponden::where('kategori_responden', '=', 'alumni')->count();
        $jumlah_survey_perusahaan = Jawabanresponden::where('kategori_responden', '=', 'perusahaan')->count();
        return view('admin.dashboard', compact('jumlah_perusahaan', 'jumlah_pertanyaan', 'jumlah_berita', 'jumlah_user_alumni', 'jumlah_survey_alumni', 'jumlah_survey_perusahaan'));
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
        //
    }

    public function destroy($id)
    {
        //
    }
}
