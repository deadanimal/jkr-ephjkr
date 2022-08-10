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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware('auth')->group(function () {

    

    
// });

Route::prefix('/dashboard')->group(function (){
    Route::resources([
        'laman_utama'=>LamanUtamaController::class,
        'pengesahan_pengguna'=>PengesahanPenggunaController::class,
    ]);
});

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

Route::prefix('/penilaian_reka_bentuk_gpss')->group(function (){
    Route::resources([
        'senarai_projek_gpss'=>ProjekController::class,
        'pemudah_cara_gpss'=>ProjekController::class,
        'penilaian_reka_bentuk'=>ProjekController::class,
        'pengesahan_penilaian_reka_bentuk'=>ProjekController::class,
        'jana_keputusan'=>ProjekController::class,
        'skor_penilaian'=>ProjekController::class,  
    ]);
});

// Route::resource('/penilaian_reka_bentuk_gpss/pemudah_cara_gpss', ProjekController::class);

// trying creating own controller & function for every section
Route::get('pengesahan_penilaian_reka_bentuk_gpss', [ProjekController::class, 'index']);
Route::post('pengesahan_penilaian_reka_bentuk_gpss', [ProjekController::class, 'store']);