<?php

use App\Http\Controllers\AuditTrailController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HebahanController;
use App\Http\Controllers\KriteriaGpssBangunanController;
use App\Http\Controllers\KriteriaGpssJalanController;
use App\Http\Controllers\LamanUtamaController;
use App\Http\Controllers\MaklumBalasController;
use App\Http\Controllers\ManualDanStandardController;
use App\Http\Controllers\PengesahanPenggunaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\PemudahCaraController;
use App\Http\Controllers\PenilaianRekaBentukGpss;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/check_base', function () {
    return view('layouts.landing-base');
});

Route::get('/check_auth', function () {
    return view('auth.daftar');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Auth::routes();

// Route::resource('/penilaian_reka_bentuk_bangunan/senarai_projek_bangunan', ProjekController::class);  
// Route::resource('/penilaian_reka_bentuk_bangunan/pemudah_cara_bangunan', ProjekController::class); 
// Route::resource('/penilaian_reka_bentuk_bangunan/penilaian_verifikasi', ProjekController::class);
// Route::resource('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_verifikasi', ProjekController::class); 
// Route::resource('/penilaian_reka_bentuk_bangunan/jana_sijil', ProjekController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {

    // Dashboard
    Route::prefix('/dashboard')->group(function () {
        Route::resources([
            'laman_utama' => LamanUtamaController::class,
            'pengesahan_pengguna' => PengesahanPenggunaController::class,
        ]);
    });

    // Pengurusan Maklumat
    Route::prefix('/pengurusan_maklumat')->group(function () {
        Route::resources([
            'profil' => ProfilController::class,
            'pengguna' => PenggunaController::class,
            'manual_dan_standard' => ManualDanStandardController::class,
            'faq' => FaqController::class,
            'audit_trail' => AuditTrailController::class,
            'makluma_balas' => MaklumBalasController::class,
            'hebahan' => HebahanController::class,
            'pendaftaran_projek' => ProjekController::class,
        ]);
    });

    // Penilaian Reka Bentuk GPSS
    Route::prefix('/penilaian_reka_bentuk_gpss')->group(function () {
        Route::resources([
            'senarai_projek' => ProjekController::class,
        ]);
    });

    // Penilaian Reka Bentuk Bangunan
    // Route::prefix('/penilaian_reka_bentuk_bangunan')->group(function (){
    // Route::resources([
    // 'senarai_projek_bangunan'=>SenaraiprojekbangunanController::class,
    // 'pemudah_cara_bangunan'=>ProjekController::class,
    // 'penilaian_reka_bentuk'=>PenilaianrekabentukController::class,
    // 'semakan_rawak_jana_sijil'=>SemakanrawakjanasijilController::class,
    // 'pengesahan_penilaian_reka_bentuk'=>PengesahanpenilaianrekabentukController::class,
    // 'sijil_verifikasi_bangunan'=>SijilverifikasipenilaianrekabentukController::class,
    // ]);

    // Route::get('/senarai_projek_bangunan', [ProjekController::class, 'senarai_projek_bangunan']);
    // Route::get([
    //     'senarai_projek_bangunan'=>ProjekController::class,
    // ]);

    // });

});
