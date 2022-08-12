<?php

use App\Http\Controllers\AuditTrailController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HebahanController;
use App\Http\Controllers\LamanUtamaController;
use App\Http\Controllers\MaklumBalasController;
use App\Http\Controllers\ManualDanStandardController;
use App\Http\Controllers\PengesahanPenggunaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\PenilaianRekaBentukBangunanController;
use App\Http\Controllers\PenilaianRekaBentukGpssController;
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
    return view('auth.login');
});

Route::get('/check_base', function () {
    return view('layouts.landing-base');
});

Route::get('/check_auth', function () {
    return view('auth.auth_pass');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware('auth')->group(function () {

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

    // Penilaian Reka Bentuk Bangunan
    Route::resource('/penilaian_reka_bentuk_bangunan', PenilaianRekaBentukBangunanController::class);
    Route::get('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara', [PenilaianRekaBentukBangunanController::class, 'papar_projek']);
    Route::get('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara/{id}', [PenilaianRekaBentukBangunanController::class, 'pemudah_cara']);
    Route::post('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara/{id}', [PenilaianRekaBentukBangunanController::class, 'melantik_pemudah_cara']);
    Route::get('/penilaian_reka_bentuk_bangunan/skor_penilaian', [PenilaianRekaBentukBangunanController::class, 'skor_penilaian']);
    Route::get('/penilaian_reka_bentuk_bangunan/skor_penilaian/{id}', [PenilaianRekaBentukBangunanController::class, 'papar_skor_penilaian']);
    Route::post('/penilaian_reka_bentuk_bangunan/simpan_skor/{id}', [PenilaianRekaBentukBangunanController::class, 'simpan_skor']);
    Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian', [PenilaianRekaBentukBangunanController::class, 'pengesahan_penilaian']);
    Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian/{id}', [PenilaianRekaBentukBangunanController::class, 'papar_pengesahan_penilaian']);
    Route::post('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian/{id}', [PenilaianRekaBentukBangunanController::class, 'simpan_pengesahan_penilaian']);

    // Penilaian Reka Bentuk Gpss
    Route::resource('/penilaian_reka_bentuk_gpss', PenilaianRekaBentukGpssController::class);
    Route::get('/penilaian_reka_bentuk_gpss/melantik_pemudah_cara', [PenilaianRekaBentukGpssController::class, 'papar_projek']);
    Route::get('/penilaian_reka_bentuk_gpss/melantik_pemudah_cara/{id}', [PenilaianRekaBentukGpssController::class, 'pemudah_cara']);
    Route::post('/penilaian_reka_bentuk_gpss/melantik_pemudah_cara/{id}', [PenilaianRekaBentukGpssController::class, 'melantik_pemudah_cara']);
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian', [PenilaianRekaBentukGpssController::class, 'skor_penilaian']);
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian/{id}', [PenilaianRekaBentukGpssController::class, 'papar_skor_penilaian']);
    Route::post('/penilaian_reka_bentuk_gpss/simpan_skor/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_skor']);
    Route::get('/penilaian_reka_bentuk_gpss/pengesahan_penilaian', [PenilaianRekaBentukGpssController::class, 'pengesahan_penilaian']);
    Route::get('/penilaian_reka_bentuk_gpss/pengesahan_penilaian/{id}', [PenilaianRekaBentukGpssController::class, 'papar_pengesahan_penilaian']);
    Route::post('/penilaian_reka_bentuk_gpss/pengesahan_penilaian/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_pengesahan_penilaian']);


// });

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

// Route::prefix('/penilaian_reka_bentuk_gpss')->group(function (){
//     Route::resources([
//         'senarai_projek_gpss'=>ProjekController::class,
//         'pemudah_cara_gpss'=>ProjekController::class,
//         'penilaian_reka_bentuk'=>ProjekController::class,
//         'pengesahan_penilaian_reka_bentuk'=>ProjekController::class,
//         'jana_keputusan'=>ProjekController::class,
//         'skor_penilaian'=>ProjekController::class,  
//     ]);
// });

// Route::resource('/penilaian_reka_bentuk_gpss/pemudah_cara_gpss', ProjekController::class);

// trying creating own controller & function for every section
// Route::get('/senarai_projek_gpss', [ProjekController::class, 'senarai_projek_gpss']);
// Route::get('/pemudah_cara_gpss', [ProjekController::class, 'pemudah_cara_gpss']);
// Route::get('/penilaian_reka_bentuk', [ProjekController::class, 'penilaian_reka_bentuk']);
// Route::get('/pengesahan_penilaian_reka_bentuk_gpss', [ProjekController::class, 'pengesahan_penilaian_reka_bentuk_gpss']);
// Route::post('/pengesahan_penilaian_reka_bentuk_gpss', [ProjekController::class, 'create']);
