<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\DatawebController;
use App\Http\Controllers\DataAlumniController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\PertAlumniController;
use App\Http\Controllers\PertPerusahaanController;
use App\Http\Controllers\HasilRespondenController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KuisionerController;



Route::resource('/', DashboardController::class)->names([
    'index' => 'dashboard.user'
]);

Route::get('login',[AuthUserController::class, 'index'])->name('login.index');
Route::get('registrasi', [AuthUserController::class, 'registrasi'])->name('daftar.registrasi');
Route::get('lupa_password',[AuthUserController::class, 'lupa_password'])->name('lupapassword.lupa_password');
Route::post('/post_lupa_password',[AuthUserController::class, 'post_lupa_password'])->name('post_lupa_password');
Route::post('password_update', [AuthUserController::class, 'password_update'])->name('password_update');
Route::post('simpanregistrasi',  [AuthUserController::class, 'simpanregistrasi'])->name('simpanregistrasi');
Route::post('store', [AuthUserController::class, 'store'])->name('store');
Route::post('postlogin', [AuthUserController::class, 'postlogin'])->name('postlogin');
Route::get('log_out', [AuthUserController::class, 'log_out'])->name('log_out');

Route::get('/berita', [DashboardController::class, 'beritaall'])->name('beritaall');
Route::get('/berita/{id}', [DashboardController::class, 'show'])->name('beritasingle.show');
Route::get('/berita/kategori/{jenisberita}', [DashboardController::class,'beritakategori'])->name('beritakategori');

// Route::get('/isikuisioneralumni/{id}', 'App\Http\Controllers\KuisionerController@isikuisionercontoh')->name('isikuisioneralumni');
Route::get('/isikuisioneralumni/{id}', [KuisionerController::class, 'isikuisioneralumni'])->name('isikuisioneralumni')->middleware('cek_login:alumni');
Route::post('/isikuisioneralumni/store', [KuisionerController::class,'kuisioneralumnistore'])->name('kuisioneralumni.store')->middleware('cek_login:alumni');
Route::get('/getkabkota/{id}', [KuisionerController::class,'ajaxkabkota']);
// Route::get('/getkabkota/{id}', [KuisionerController::class, 'ajaxkabkota']);
Route::get('/isikuisionerperusahaan/{id}', [KuisionerController::class,'isikuisionerperusahaan'])->name('isikuisionerperusahaan')->middleware('cek_login:perusahaan');
Route::post('/isikuisionerperusahaan/store', [KuisionerController::class,'kuisionerperusahaanstore'])->name('kuisionerperusahaan.store')->middleware('cek_login:perusahaan');

Route::get('/editprofil_front/{id}', [ProfilController::class, 'editprofil_front'])->name('editprofil_front')->middleware('cek_login:alumni');
Route::post('/updateprofil/{id}', [ProfilController::class, 'updateprofil'])->name('updateprofil')->middleware('cek_login:alumni');
Route::get('/editprofilperusahaan/{id}', [ProfilController::class, 'editprofilperusahaan'])->name('editprofilperusahaan')->middleware('cek_login:perusahaan');
Route::post('/updateprofilperusahaan/{id}', [ProfilController::class, 'updateprofilperusahaan'])->name('updateprofilperusahaan')->middleware('cek_login:perusahaan');

Route::get('administrator', [AuthController::class, 'index'])->name('administrator');
Route::get('administrator', [AuthController::class,'index'])->name('login');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::prefix('administrator')->middleware(['auth'])->group(function () {
    Route::group(['middleware' => ['cek_login:admin,prodi']], function () {
        Route::resource('/dashboard', AdminController::class)->names([
            'index' => 'administrator.dashboard',
        ]);
        Route::resource('/provinsi', ProvinsiController::class)->names([
            'index' => 'provinsi.index',
        ]);
        Route::resource('/kabkota', KabkotaController::class)->names([
            'index' => 'kabkota.index',
            'store' => 'kabkota.store',
            'destroy' => 'kabkota.destroy',
        ]);
        Route::resource('/perusahaan', PerusahaanController::class)->names([
            'index' => 'perusahaan.index',
            'show'=>'perusahaan.show',
            'store' => 'perusahaan.store',
            'destroy' => 'perusahaan.destroy',
            'update' => 'perusahaan.update',
        ]);
        Route::resource('/prodi', ProdiController::class)->names([
            'index' => 'prodi.index',
            'store' => 'prodi.store',
            'destroy' => 'prodi.destroy',
            'update' => 'prodi.update',
        ]);

        Route::get('/berita/detail/{id}',[BeritaController::class, 'ajaxdetail'])->name('berita.ajaxdetail');
        Route::get('/berita/{jenis_berita}', [BeritaController::class, 'jenisberita'])->name('berita.ajaxdetail');
        Route::resource('/berita', BeritaController::class)->names([
            'destroy' => 'berita.destroy',
            'show' => 'berita.show',
            'store' => 'berita.store',
        ]);
        Route::resource('/dataweb', DatawebController::class)->names([
            'index' => 'dataweb.index',
        ])->middleware('cek_login:admin');
        Route::resource('/editprofil', ProfilController::class)->names([
            'update' => 'editprofil.update',
            'edit' => 'editprofil.edit'
        ]);
        Route::resource('/user', UserController::class)->names([
            'index' => 'user.index',
        ]);

        Route::resource('/dataalumni', DataAlumniController::class)->names([
            'index' => 'dataalumni.index',
            'destroy' => 'dataalumni.destroy',
            'show' => 'dataalumni.show',
        ]);

        Route::get('/pert_alumni/{kategori}',[PertAlumniController::class, 'jenispertanyaan'])->name('pert_alumni.kategori');
        Route::get('/pert_alumni/detail/{id}/{is_cabang}', [PertAlumniController::class,'ajaxdetail'])->name('pert_alumni.ajaxdetail');
        Route::resource('/pert_alumni', PertAlumniController::class)->names([
            'store' => 'pert_alumni.store',
            'destroy' => 'pert_alumni.destroy',
            'update' => 'pert_alumni.update',
        ]);
        Route::get('/pert_perusahaan/{kategori}', [PertPerusahaanController::class, 'jenispertanyaan'])->name('pert_perusahaan.kategori');
        Route::get('/pert_perusahaan/detail/{id}/{is_cabang}',[PertPerusahaanController::class, 'ajaxdetail'])->name('pert_perusahaan.ajaxdetail');
        Route::resource('/pert_perusahaan', PertPerusahaanController::class)->names([
            'store' => 'pert_perusahaan.store',
            'destroy' => 'pert_perusahaan.destroy',
            'update' => 'pert_perusahaan.update',
        ]);
        // Route::resource('/pert_perusahaan', PertPerusahaanController::class)->names([
        //     'store' => 'pert_perusahaan.store',
        //     'destroy' => 'pert_perusahaan.destroy',
        //     'update' => 'pert_perusahaan.update',
        // ]);
        Route::get('/hasil_alumni', [HasilRespondenController::class,'hasilalumni'])->name('hasil_alumni');
        Route::get('/hasil_alumni/export', [HasilRespondenController::class,'exportalumni'])->name('hasil_alumni.export');
        Route::post('/hasil_alumni/import', [HasilRespondenController::class,'importalumni'])->name('hasil_alumni.import');
        Route::get('/hasil_alumni/detail/{id}', [HasilRespondenController::class,'detailhasilalumni'])->name('detail_responden.alumni');
        Route::delete('/hasil_alumni/delete/{id}', [HasilRespondenController::class,'destroy'])->name('delete_responden.alumni');
        
        Route::delete('/hasil_perusahaan/delete/{id}', [HasilRespondenController::class,'destroy'])->name('delete_responden.perusahaan');
        Route::get('/hasil_perusahaan', [HasilRespondenController::class, 'hasilperusahaan'])->name('hasil_perusahaan');
        Route::get('/hasil_perusahaan/detail/{id}', [HasilRespondenController::class,'detailhasilperusahaan'])->name('detail_responden.perusahaan');
        Route::get('/hasil_perusahaan/export', [HasilRespondenController::class,'exportperusahaan'])->name('hasil_perusahaan.export');
        Route::post('/hasil_perusahaan/import', [HasilRespondenController::class,'importperusahaan'])->name('hasil_perusahaan.import');
    });

});

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
