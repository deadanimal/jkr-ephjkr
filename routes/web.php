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
use App\Http\Controllers\PenilaianRekaBentukJalanController;
use App\Http\Controllers\SelenggaraPerananController;
use App\Http\Controllers\SelenggaraStatusController;
use App\Http\Controllers\SelenggaraHebahanController;
use App\Http\Controllers\StatusMaklumBalasController;
use App\Http\Controllers\KriteriaPenilaianController;
use App\Http\Controllers\SelenggaraStatusMaklumBalasController;
use App\Http\Controllers\LogAuditController;
use App\Http\Controllers\VerifikasiPermarkahanBangunanController;
use App\Http\Controllers\VerifikasiPermarkahanJalanController;
use App\Http\Controllers\VerifikasiPermarkahanGpssController;
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
    
    //selenggara
    Route::resource('/pengurusan_maklumat/selenggara/selenggara_peranan', SelenggaraPerananController::class);
    Route::resource('/pengurusan_maklumat/selenggara/selenggara_status', SelenggaraStatusController::class);
    Route::resource('/pengurusan_maklumat/selenggara/selenggara_hebahan', SelenggaraHebahanController::class);
    Route::resource('/pengurusan_maklumat/selenggara/status_maklum_balas', SelenggaraStatusMaklumBalasController::class);
    Route::resource('/pengurusan_maklumat/selenggara/kriteria_penilaian', KriteriaPenilaianController::class);
    Route::resource('/pengurusan_maklumat/selenggara/log_audit', LogAuditController::class);

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
    // Route::post('/penilaian_reka_bentuk_bangunan/simpan_skor/{id}', [PenilaianRekaBentukBangunanController::class, 'dokumen_sokongan']);



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


    
    // Ketua Pasukan/Penolong view
    // Penilaian Reka Bentuk Gpss - papar projek, index() method
    Route::get('/penilaian_reka_bentuk_gpss', [PenilaianRekaBentukGpssController::class, 'index']);
    // papar form pemudah cara, create() method
    Route::get('/penilaian_reka_bentuk_gpss/pemudah_cara/create', [PenilaianRekaBentukGpssController::class, 'pemudah_cara']);
    //action form pemudah cara, show() method
    Route::post('/penilaian_reka_bentuk_gpss/melantik_pemudah_cara/{id}', [PenilaianRekaBentukGpssController::class, 'melantik_pemudah_cara']);

    // Sekretariat view
    // papar projek utk skor penilaian, index()
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian', [PenilaianRekaBentukGpssController::class, 'skor_penilaian']);
    // // papar form rating
    // Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian/{id}', [PenilaianRekaBentukGpssController::class, 'papar_skor_penilaian']);
    // // action form rating
    // Route::post('/penilaian_reka_bentuk_gpss/simpan_skor/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_skor']);

    // arkitek form
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek/create', [PenilaianRekaBentukGpssController::class, 'skor_penilaian_arkitek']);
    Route::post('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_skor_penilaian_arkitek']);
    //arkitek form (second page)
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page2', [PenilaianRekaBentukGpssController::class, 'skor_penilaian_arkitek_page2']);
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page2/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_skor_penilaian_arkitek_page2']);
    //third page
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page3', [PenilaianRekaBentukGpssController::class, 'skor_penilaian_arkitek_page3']);
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page3/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_skor_penilaian_arkitek_page3']);

    //third page
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page4', [PenilaianRekaBentukGpssController::class, 'skor_penilaian_arkitek_page4']);
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page4/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_skor_penilaian_arkitek_page4']);


    // papar projek utk pengesahan
    Route::get('/penilaian_reka_bentuk_gpss/pengesahan_penilaian', [PenilaianRekaBentukGpssController::class, 'pengesahan_penilaian']);
    // papar form pengesahan
    Route::get('/penilaian_reka_bentuk_gpss/pengesahan_penilaian/{id}', [PenilaianRekaBentukGpssController::class, 'papar_pengesahan_penilaian']);
    // action pengesahan
    Route::put('/penilaian_reka_bentuk_gpss/pengesahan_penilaian/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_pengesahan_penilaian']);

    // jana keputusan
    Route::get('/penilaian_reka_bentuk_gpss/jana_keputusan', [PenilaianRekaBentukGpssController::class, 'jana_keputusan']);
    // papar form pengesahan
    Route::get('/penilaian_reka_bentuk_gpss/jana_keputusan/{id}', [PenilaianRekaBentukGpssController::class, 'papar_jana_keputusan']);
    // action pengesahan
    Route::put('/penilaian_reka_bentuk_gpss/jana_keputusan/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_jana_keputusan']);

    Route::get('/penilaian_reka_bentuk_gpss/paparan_sijil', [PenilaianRekaBentukGpssController::class, 'paparan_sijil']);
    Route::get('/penilaian_reka_bentuk_gpss/papar_sijil', [PenilaianRekaBentukGpssController::class, 'papar_sijil']);
    Route::get('/penilaian_reka_bentuk_gpss/createPDF', [PenilaianRekaBentukGpssController::class, 'createPDF']);

    // Penilaian Verifikasi Permarkahan GPSS
    // Route::resource('/penilaian_reka_bentuk_bangunan', PenilaianRekaBentukJalanController::class);
    Route::get('/papar_verifikasi_gpss', [VerifikasiPermarkahanGpssController::class, 'index']);
    Route::get('/verifikasi_permarkahan_gpss/pemudah_cara/create', [VerifikasiPermarkahanGpssController::class, 'pemudah_cara']);
    Route::get('/penilaian_reka_bentuk_jalan/melantik_pemudah_cara_jalan/{id}', [VerifikasiPermarkahanGpssController::class, 'melantik_pemudah_cara_jalan']);
    Route::get('/penilaian_reka_bentuk_jalan/isi_skor_kad', [VerifikasiPermarkahanGpssController::class, 'isi_skor_kad']);


    // Verifikasi Permarkahan Bangunan
    // Route::resource('/penilaian_reka_bentuk_bangunan', PenilaianRekaBentukBangunanController::class);
    Route::get('/verifikasi_permarkahan_bangunan', [VerifikasiPermarkahanBangunanController::class, 'index']);
    // Route::get('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara', [PenilaianRekaBentukBangunanController::class, 'papar_projek']);
    // Route::get('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara/{id}', [PenilaianRekaBentukBangunanController::class, 'pemudah_cara']);
    // Route::post('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara/{id}', [PenilaianRekaBentukBangunanController::class, 'melantik_pemudah_cara']);
    // Route::get('/penilaian_reka_bentuk_bangunan/skor_penilaian', [PenilaianRekaBentukBangunanController::class, 'skor_penilaian']);
    // Route::get('/penilaian_reka_bentuk_bangunan/skor_penilaian/{id}', [PenilaianRekaBentukBangunanController::class, 'papar_skor_penilaian']);
    // Route::post('/penilaian_reka_bentuk_bangunan/simpan_skor/{id}', [PenilaianRekaBentukBangunanController::class, 'simpan_skor']);
    Route::get('/verifikasi_permarkahan_bangunan/pengesahan_penilaian', [VerifikasiPermarkahanBangunanController::class, 'pengesahan_penilaian']);
    Route::get('/verifikasi_permarkahan_bangunan/pengesahan_penilaian/{id}', [VerifikasiPermarkahanBangunanController::class, 'papar_pengesahan_penilaian']);
    // Route::put('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian/{id}', [PenilaianRekaBentukBangunanController::class, 'simpan_pengesahan_penilaian']);
     Route::get('/verifikasi_permarkahan_bangunan/semakan_rawak', [VerifikasiPermarkahanBangunanController::class, 'semakan_rawak']);
     Route::get('/verifikasi_permarkahan_bangunan/semakan_rawak/{id}', [VerifikasiPermarkahanBangunanController::class, 'semakan_rawak_form']);
    //  Route::post('penilaian_reka_bentuk_bangunan/semakan_rawak/{id}',  [PenilaianRekaBentukBangunanController::class, 'simpan_semakan_rawak']);

    //Validasi Permarkahan Bangunan
    
    
    // Penilaian Reka Bentuk Jalan
    // Route::resource('/penilaian_reka_bentuk_bangunan', PenilaianRekaBentukJalanController::class);
    Route::get('/penilaian_reka_bentuk_jalan', [PenilaianRekaBentukJalanController::class, 'index']);
    Route::get('/penilaian_reka_bentuk_jalan/pemudah_cara_jalan', [PenilaianRekaBentukJalanController::class, 'pemudah_cara_jalan']);
    Route::get('/penilaian_reka_bentuk_jalan/melantik_pemudah_cara_jalan/{id}', [PenilaianRekaBentukJalanController::class, 'melantik_pemudah_cara_jalan']);
    Route::get('/penilaian_reka_bentuk_jalan/isi_skor_kad', [PenilaianRekaBentukJalanController::class, 'isi_skor_kad']);
    //store() and edit() later
    Route::get('/penilaian_reka_bentuk_jalan/penilai_jalan', [PenilaianRekaBentukJalanController::class, 'penilai_jalan']);
    Route::get('/penilaian_reka_bentuk_jalan/penilai_reka_bentuk', [PenilaianRekaBentukJalanController::class, 'penilai_reka_bentuk']);
    //penilai_reka_bentuk edit() method
    Route::get('/penilaian_reka_bentuk_jalan/pengesahan_penilaian_jalan', [PenilaianRekaBentukJalanController::class, 'pengesahan_penilaian_jalan']);
    Route::get('/penilaian_reka_bentuk_jalan/jana_keputusan_jalan', [PenilaianRekaBentukJalanController::class, 'jana_keputusan_jalan']);

    Route::get('/penilaian_reka_bentuk_jalan/skor_penilaian/{id}', [PenilaianRekaBentukJalanController::class, 'papar_skor_penilaian']);
    Route::post('/penilaian_reka_bentuk_jalan/simpan_skor/{id}', [PenilaianRekaBentukJalanController::class, 'simpan_skor']);
    Route::get('/penilaian_reka_bentuk_jalan/pengesahan_penilaian/{id}', [PenilaianRekaBentukJalanController::class, 'papar_pengesahan_penilaian']);
    Route::put('/penilaian_reka_bentuk_jalan/pengesahan_penilaian/{id}', [PenilaianRekaBentukJalanController::class, 'simpan_pengesahan_penilaian']);

    // Verifikasi Permarkahan Jalan resource
    Route::resource('/verifikasi_permarkahan_jalan', VerifikasiPermarkahanJalanController::class);
    // verifikasi permarkahan jalan custom action 
    //Route::get('/verifikasi_permarkahan_jalan', [VerifikasiPermarkahanJalanController::class, 'index']);
    //Route::post('/verifikasi_permarkahan_jalan', [VerifikasiPermarkahanJalanController::class, 'create']);
    Route::get('/verifikasi_permarkahan_jalan/melantik_penilai_jalan', [VerifikasiPermarkahanJalanController::class, 'melantik_penilai_jalan']);
    Route::post('/verifikasi_permarkahan_jalan/senarai_projek_create', [VerifikasiPermarkahanJalanController::class, 'senarai_projek_create']);



});



