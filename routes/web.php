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
// use App\Http\Controllers\VerifikasiPermarkahanBangunanController;
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
            'profil_pengguna' => ProfilController::class,
            'senarai_pengguna' => PenggunaController::class,
            'manual_dan_standard' => ManualDanStandardController::class,
            'faq' => FaqController::class,
            'audit_trail' => AuditTrailController::class,
            'maklum_balas' => MaklumBalasController::class,
            'hebahan' => HebahanController::class,
            'pendaftaran_projek' => ProjekController::class,
        ]);

        Route::get('profil_pengguna/{id}/penukaran_peranan', [ProfilController::class, 'penukaran_peranan']);
        Route::post('profil_pengguna/{id}/penukaran_peranan', [ProfilController::class, 'update_peranan']);
    });

    // Penilaian Reka Bentuk Bangunan
    // Route::resource('/penilaian_reka_bentuk_bangunan', PenilaianRekaBentukBangunanController::class);
    Route::get('/penilaian_reka_bentuk_bangunan', [PenilaianRekaBentukBangunanController::class, 'index']);
    Route::get('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara', [PenilaianRekaBentukBangunanController::class, 'papar_projek']);
    Route::get('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara/{id}', [PenilaianRekaBentukBangunanController::class, 'pemudah_cara']);
    Route::post('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara/{id}', [PenilaianRekaBentukBangunanController::class, 'melantik_pemudah_cara']);
    Route::get('/penilaian_reka_bentuk_bangunan/skor_penilaian', [PenilaianRekaBentukBangunanController::class, 'skor_penilaian']);
    Route::get('/penilaian_reka_bentuk_bangunan/skor_penilaian/{id}', [PenilaianRekaBentukBangunanController::class, 'papar_skor_penilaian']);
    Route::post('/penilaian_reka_bentuk_bangunan/simpan_skor/{id}', [PenilaianRekaBentukBangunanController::class, 'simpan_skor']);
    Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian', [PenilaianRekaBentukBangunanController::class, 'pengesahan_penilaian']);
    Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian/{id}', [PenilaianRekaBentukBangunanController::class, 'papar_pengesahan_penilaian']);
    Route::put('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian/{id}', [PenilaianRekaBentukBangunanController::class, 'simpan_pengesahan_penilaian']);

    // Pengesahan Penilaian Reka Bentuk Bangunan-Halaman 2
    Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_2', [PenilaianRekaBentukBangunanController::class, 'pengesahan_penilaian_halaman_2']);
    Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_2/{id}', [PenilaianRekaBentukBangunanController::class, 'papar_pengesahan_penilaian_halaman_2']);
    Route::post('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_2/{id}', [PenilaianRekaBentukBangunanController::class, 'simpan_pengesahan_penilaian_halaman_2']);

    // Pengesahan Penilaian Reka Bentuk Bangunan-Halaman 3
    Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_3', [PenilaianRekaBentukBangunanController::class, 'pengesahan_penilaian_halaman_3']);
    Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_3/{id}', [PenilaianRekaBentukBangunanController::class, 'papar_pengesahan_penilaian_halaman_3']);
    // Pengesahan Penilaian Reka Bentuk Bangunan-Halaman 4
    Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_4', [PenilaianRekaBentukBangunanController::class, 'pengesahan_penilaian_halaman_4']);
    Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_4/{id}', [PenilaianRekaBentukBangunanController::class, 'papar_pengesahan_penilaian_halaman_4']);
    // Pengesahan Penilaian Reka Bentuk Bangunan-Halaman 5
    Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_5', [PenilaianRekaBentukBangunanController::class, 'pengesahan_penilaian_halaman_5']);
    Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_5/{id}', [PenilaianRekaBentukBangunanController::class, 'papar_pengesahan_penilaian_halaman_5']);
    // Pengesahan Penilaian Reka Bentuk Bangunan-Halaman 6
    Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_6', [PenilaianRekaBentukBangunanController::class, 'pengesahan_penilaian_halaman_6']);
    Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_6/{id}', [PenilaianRekaBentukBangunanController::class, 'papar_pengesahan_penilaian_halaman_6']);
    // Pengesahan Penilaian Reka Bentuk Bangunan-Halaman 7
    Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_7', [PenilaianRekaBentukBangunanController::class, 'pengesahan_penilaian_halaman_7']);
    Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_7/{id}', [PenilaianRekaBentukBangunanController::class, 'papar_pengesahan_penilaian_halaman_7']);


    // Semakan Rawak Penilaian Reka Bentuk Bangunan

    // papar semakan rawak
    Route::get('/penilaian_reka_bentuk_bangunan/semakan_rawak', [PenilaianRekaBentukBangunanController::class, 'semakan_rawak']);
    // tekan button
    Route::get('/penilaian_reka_bentuk_bangunan/semakan_rawak/{id}', [PenilaianRekaBentukBangunanController::class, 'semakan_rawak_form']);
    // submit semakan rawak
    Route::post('penilaian_reka_bentuk_bangunan/semakan_rawak/{id}',  [PenilaianRekaBentukBangunanController::class, 'simpan_semakan_rawak']);

    // Muat Turun Sijil Penilaian Reka Bentuk Bangunan 

    // papar muat turun sijil
    Route::get('/penilaian_reka_bentuk_bangunan/muat_turun_sijil', [PenilaianRekaBentukBangunanController::class, 'muat_turun_sijil']);
    // tekan button
    Route::get('/penilaian_reka_bentuk_bangunan/muat_turun_sijil/{id}', [PenilaianRekaBentukBangunanController::class, 'muat_turun_sijil_form']);
    // submit semakan rawak
    Route::post('penilaian_reka_bentuk_bangunan/muat_turun_sijil/{id}',  [PenilaianRekaBentukBangunanController::class, 'simpan_muat_turun_sijil']);


    

    // Penilaian Reka Bentuk Gpss
    Route::get('/penilaian_reka_bentuk_gpss', [PenilaianRekaBentukGpssController::class, 'index']);
    // papar projek utk pemudahcara
    Route::get('/penilaian_reka_bentuk_gpss/melantik_pemudah_cara', [PenilaianRekaBentukGpssController::class, 'papar_projek']);
    // papar form pemudah cara
    Route::get('/penilaian_reka_bentuk_gpss/melantik_pemudah_cara/{id}', [PenilaianRekaBentukGpssController::class, 'pemudah_cara']);
    //action form pemudah cara
    Route::post('/penilaian_reka_bentuk_gpss/melantik_pemudah_cara/{id}', [PenilaianRekaBentukGpssController::class, 'melantik_pemudah_cara']);

    // papar projek utk skor penilaian
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian', [PenilaianRekaBentukGpssController::class, 'skor_penilaian']);
    // papar form rating
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian/{id}', [PenilaianRekaBentukGpssController::class, 'papar_skor_penilaian']);
    // action form rating
    Route::post('/penilaian_reka_bentuk_gpss/simpan_skor/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_skor']);

    // arkitek form
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek', [PenilaianRekaBentukGpssController::class, 'skor_penilaian_arkitek']);
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_skor_penilaian_arkitek']);







    // papar projek utk pengesahan
    Route::get('/penilaian_reka_bentuk_gpss/pengesahan_penilaian', [PenilaianRekaBentukGpssController::class, 'pengesahan_penilaian']);
    // papar form pengesahan
    Route::get('/penilaian_reka_bentuk_gpss/pengesahan_penilaian/{id}', [PenilaianRekaBentukGpssController::class, 'papar_pengesahan_penilaian']);
    // action pengesahan
    Route::put('/penilaian_reka_bentuk_gpss/pengesahan_penilaian/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_pengesahan_penilaian']);


    // Verifikasi Permarkahan Bangunan
    // Route::resource('/penilaian_reka_bentuk_bangunan', PenilaianRekaBentukBangunanController::class);
    // Route::get('/verifikasi_permarkahan_bangunan', [VerifikasiPermarkahanBangunanController, 'index']);
    // Route::get('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara', [PenilaianRekaBentukBangunanController::class, 'papar_projek']);
    // Route::get('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara/{id}', [PenilaianRekaBentukBangunanController::class, 'pemudah_cara']);
    // Route::post('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara/{id}', [PenilaianRekaBentukBangunanController::class, 'melantik_pemudah_cara']);
    // Route::get('/penilaian_reka_bentuk_bangunan/skor_penilaian', [PenilaianRekaBentukBangunanController::class, 'skor_penilaian']);
    // Route::get('/penilaian_reka_bentuk_bangunan/skor_penilaian/{id}', [PenilaianRekaBentukBangunanController::class, 'papar_skor_penilaian']);
    // Route::post('/penilaian_reka_bentuk_bangunan/simpan_skor/{id}', [PenilaianRekaBentukBangunanController::class, 'simpan_skor']);
    // Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian', [PenilaianRekaBentukBangunanController::class, 'pengesahan_penilaian']);
    // Route::get('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian/{id}', [PenilaianRekaBentukBangunanController::class, 'papar_pengesahan_penilaian']);
    // Route::put('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian/{id}', [PenilaianRekaBentukBangunanController::class, 'simpan_pengesahan_penilaian']);


});



