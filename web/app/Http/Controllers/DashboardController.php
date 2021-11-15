<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dataweb;
use App\Models\Berita;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index()
    { 
        $datawebs = Dataweb::all();
        $beritas = Berita::select('judul_berita', 'foto', 'created_at','id')
        ->orderBy('created_at', 'desc')
        ->latest()
        ->take(3)
        ->get();
        return view('dashboard', compact('beritas','datawebs'));
    }


    public function create()
    {
        //
    }
    


    public function store(Request $request)
    {
        //
    }

    public function editQuestion(Request $request, $id){
        
    }


    public function show($id)
    {
        $count_pengumuman= Berita::where('jenis_berita','=','Pengumuman')->count();
        $count_loker= Berita::where('jenis_berita','=','Loker')->count();
        $count_intern= Berita::where('jenis_berita','=','Internship')->count();
        $beritas = Berita::where('id','=',$id)->select('*')->get();
        $kategoris = Berita::select('jenis_berita',DB::raw('count(jenis_berita) as total'))
        ->groupby('jenis_berita')
        ->orderby('jenis_berita','asc')
        ->get();
        $listberitas = Berita::select('judul_berita', 'foto', 'created_at','id')
        ->orderBy('created_at', 'desc')
        ->latest()
        ->take(5)
        ->get();
        return view('user.beritasingle', compact('beritas','kategoris','listberitas','count_pengumuman','count_loker','count_intern'));

    }

    public function beritaall()
    {
        $count_pengumuman= Berita::where('jenis_berita','=','Pengumuman')->count();
        $count_loker= Berita::where('jenis_berita','=','Loker')->count();
        $count_intern= Berita::where('jenis_berita','=','Internship')->count();
        $beritas= DB::table('beritas')->orderBy('created_at', 'desc')->paginate(5);
        $kategoris = Berita::select('jenis_berita',DB::raw('count(jenis_berita) as total'))
        ->groupby('jenis_berita')
        ->orderby('jenis_berita','asc')
        ->get();
        $listberitas = Berita::select('judul_berita', 'foto', 'created_at','id')
        ->orderBy('created_at', 'desc')
        ->latest()
        ->take(5)
        ->get();
       
        return view('user.berita', compact('beritas','kategoris','listberitas','count_pengumuman','count_loker','count_intern'));
    }
    
    public function beritakategori($kategori)
    {
        $count_pengumuman= Berita::where('jenis_berita','=','Pengumuman')->count();
        $count_loker= Berita::where('jenis_berita','=','Loker')->count();
        $count_intern= Berita::where('jenis_berita','=','Internship')->count();
        $beritas= Berita::where('jenis_berita','=',$kategori)->orderBy('created_at', 'desc')->paginate(5);
        $listberitas = Berita::select('judul_berita', 'foto', 'created_at','id')
        ->orderBy('created_at', 'desc')
        ->latest()
        ->take(5)
        ->get();
       
        return view('user.beritakategori', compact('beritas','listberitas','count_pengumuman','count_loker','count_intern'));
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

    public function alumni()
    {
        return view('user.alumni');
    }
}
