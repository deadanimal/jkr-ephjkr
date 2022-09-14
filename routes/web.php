<?php

use App\Http\Controllers\AuditTrailController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GugurProjekController;
use App\Http\Controllers\HebahanController;
use App\Http\Controllers\LamanUtamaController;
use App\Http\Controllers\MaklumBalasController;
use App\Http\Controllers\ManualDanStandardController;
use App\Http\Controllers\PengesahanPendaftaranProjekController;
use App\Http\Controllers\PengesahanPenggunaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\PenilaianRekaBentukBangunanController;
use App\Http\Controllers\PenilaianRekaBentukGpssController;
use App\Http\Controllers\PenilaianRekaBentukJalanController;
use App\Http\Controllers\ProjekPemilihanAhliController;
use App\Http\Controllers\SelenggaraPerananController;
use App\Http\Controllers\SelenggaraStatusController;
use App\Http\Controllers\SelenggaraHebahanController;
use App\Http\Controllers\StatusMaklumBalasController;
use App\Http\Controllers\SelenggaraKriteriaPenilaianController;
use App\Http\Controllers\SelenggaraStatusMaklumBalasController;
use App\Http\Controllers\SelenggaraLogAuditController;
use App\Http\Controllers\VerifikasiPermarkahanBangunanController;
use App\Http\Controllers\VerifikasiPermarkahanJalanController;
use App\Http\Controllers\VerifikasiPermarkahanGpssController;
use App\Http\Controllers\ValidasiPermarkahanBangunanController;
use App\Models\ValidasiPermarkahanBangunan;
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
            'pemilihan_ahli' => ProjekPemilihanAhliController::class,
            
        ]);

        Route::get('profil_pengguna/{id}/penukaran_peranan', [ProfilController::class, 'penukaran_peranan']);
        Route::post('profil_pengguna/{id}/penukaran_peranan', [ProfilController::class, 'update_peranan']);
        
        //gugur projek
        //Route::get('/pengurusan_maklumat/gugur_projek/gugurprojek', [ProjekController::class, 'gugurprojek']);
    });
    
    //selenggara
    Route::resource('/pengurusan_maklumat/selenggara/selenggara_peranan', SelenggaraPerananController::class);
    Route::resource('/pengurusan_maklumat/selenggara/selenggara_status', SelenggaraStatusController::class);
    Route::resource('/pengurusan_maklumat/selenggara/selenggara_hebahan', SelenggaraHebahanController::class);
    Route::resource('/pengurusan_maklumat/selenggara/status_maklum_balas', SelenggaraStatusMaklumBalasController::class);
    Route::resource('/pengurusan_maklumat/selenggara/kriteria_penilaian', SelenggaraKriteriaPenilaianController::class);
    Route::resource('/pengurusan_maklumat/selenggara/log_audit', SelenggaraLogAuditController::class);
    
    
    //pendaftaran projek
    //Route::resource('/pengurusan_maklumat/gugur_projek',GugurProjekController::class);
    //Route::resource('/pengurusan_maklumat/pengesahan_projek', PengesahanPendaftaranProjekController::class);

    //pdf muat turun
    Route::get('/cetakprojek/{id}', [ProjekController::class, 'cetakpdfprojek']);

    //gugur projek
    Route::get('/pengurusan_maklumat/pendaftaran_projek/gugur_projek/projek', [ProjekController::class, 'gugurprojek']);
    Route::get('/pengurusan_maklumat/pendaftaran_projek/gugur_projek/create', [ProjekController::class, 'gugurprojek_create']);
    Route::get('/pengurusan_maklumat/pendaftaran_projek/gugur_projek/projek/padam/{id}', [ProjekController::class, 'padam_gugurprojek']);

    //pengesahan projek
    Route::get('/pengurusan_maklumat/pendaftaran_projek/pengesahan_projek/projek', [ProjekController::class, 'pengesahanprojek']);
    Route::get('/pengurusan_maklumat/pendaftaran_projek/pengesahan_projek/create', [ProjekController::class, 'pengesahanprojek_create']);
    Route::get('/pengurusan_maklumat/pendaftaran_projek/pengesahan_projek/edit/{id}', [ProjekController::class, 'pengesahanprojek_edit']);
    

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

    // Pemudah Cara views
    // architectural works - Roof forms
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek/create', [PenilaianRekaBentukGpssController::class, 'skor_penilaian_arkitek']);
    Route::post('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_skor_penilaian_arkitek']);
    // architectural works - Window forms
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page2/create', [PenilaianRekaBentukGpssController::class, 'skor_penilaian_arkitek_page2']);
    Route::post('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page2/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_skor_penilaian_arkitek_page2']);
    // architectural works - Floor forms
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page3/create', [PenilaianRekaBentukGpssController::class, 'skor_penilaian_arkitek_page3']);
    Route::post('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page3/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_skor_penilaian_arkitek_page3']);
    // architectural works - Sanitary forms
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page4/create', [PenilaianRekaBentukGpssController::class, 'skor_penilaian_arkitek_page4']);
    Route::post('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page4/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_skor_penilaian_arkitek_page4']);
    // mechanical works form
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian/mekanikal/create', [PenilaianRekaBentukGpssController::class, 'skor_penilaian_mekanikal']);
    Route::post('/penilaian_reka_bentuk_gpss/skor_penilaian_mekanikal/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_skor_penilaian_mekanikal']);
    // electrical works form
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian/elektrikal/create', [PenilaianRekaBentukGpssController::class, 'skor_penilaian_elektrikal']);
    Route::post('/penilaian_reka_bentuk_gpss/skor_penilaian_elektrikal/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_skor_penilaian_elektrikal']);
    // electrical works form page 2
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian/elektrikal_page2/create', [PenilaianRekaBentukGpssController::class, 'skor_penilaian_elektrikal_page2']);
    Route::post('/penilaian_reka_bentuk_gpss/skor_penilaian_elektrikal_page2/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_skor_penilaian_elektrikal_page2']);
    // civil works
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian/civil/create', [PenilaianRekaBentukGpssController::class, 'skor_penilaian_civil']);
    Route::post('/penilaian_reka_bentuk_gpss/skor_penilaian_civil/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_skor_penilaian_civil']);
    // civil works page2
    Route::get('/penilaian_reka_bentuk_gpss/skor_penilaian/civil_page2/create', [PenilaianRekaBentukGpssController::class, 'skor_penilaian_civil_page2']);
    Route::post('/penilaian_reka_bentuk_gpss/skor_penilaian_civil_page2/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_skor_penilaian_civil_page2']);

    // Sekretariat views
    // Pengesahan Penilaian, index() method
    Route::get('/penilaian_reka_bentuk_gpss/pengesahan_penilaian', [PenilaianRekaBentukGpssController::class, 'pengesahan_penilaian']);
    // papar form pengesahan, show() method
    Route::get('/penilaian_reka_bentuk_gpss/pengesahan_penilaian/{id}', [PenilaianRekaBentukGpssController::class, 'pengesahan_penilaian_skor_penilaian_arkitek']);
    Route::get('/penilaian_reka_bentuk_gpss/pengesahan_penilaian/arkitek_page2/{id}', [PenilaianRekaBentukGpssController::class, 'pengesahan_penilaian_skor_penilaian_arkitek_page2']);
    Route::get('/penilaian_reka_bentuk_gpss/pengesahan_penilaian/arkitek_page3/{id}', [PenilaianRekaBentukGpssController::class, 'pengesahan_penilaian_skor_penilaian_arkitek_page3']);
    Route::get('/penilaian_reka_bentuk_gpss/pengesahan_penilaian/arkitek_page4/{id}', [PenilaianRekaBentukGpssController::class, 'pengesahan_penilaian_skor_penilaian_arkitek_page4']);
    // action pengesahan, update() method?
    Route::put('/penilaian_reka_bentuk_gpss/pengesahan_penilaian/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_pengesahan_penilaian']);

    // jana keputusan
    Route::get('/penilaian_reka_bentuk_gpss/jana_keputusan', [PenilaianRekaBentukGpssController::class, 'jana_keputusan']);
    // papar form pengesahan
    Route::get('/penilaian_reka_bentuk_gpss/jana_keputusan/{id}', [PenilaianRekaBentukGpssController::class, 'papar_jana_keputusan']);
    // action pengesahan
    Route::put('/penilaian_reka_bentuk_gpss/jana_keputusan/{id}', [PenilaianRekaBentukGpssController::class, 'simpan_jana_keputusan']);

    Route::get('/penilaian_reka_bentuk_gpss/paparan_sijil', [PenilaianRekaBentukGpssController::class, 'paparan_sijil']);
    Route::get('/penilaian_reka_bentuk_gpss/papar_sijil', [PenilaianRekaBentukGpssController::class, 'papar_sijil']);
    Route::get('/penilaian_reka_bentuk_gpss/createPDF/{id}', [PenilaianRekaBentukGpssController::class, 'createPDF']);

    // Penilaian Verifikasi Permarkahan GPSS
    // Route::resource('/penilaian_reka_bentuk_bangunan', PenilaianRekaBentukJalanController::class);
    Route::get('/papar_verifikasi_gpss', [VerifikasiPermarkahanGpssController::class, 'index']);
    Route::get('/verifikasi_permarkahan_gpss/pemudah_cara/create', [VerifikasiPermarkahanGpssController::class, 'pemudah_cara']);
    Route::get('/penilaian_reka_bentuk_jalan/melantik_pemudah_cara_jalan/{id}', [VerifikasiPermarkahanGpssController::class, 'melantik_pemudah_cara_jalan']);
    Route::get('/penilaian_reka_bentuk_jalan/isi_skor_kad', [VerifikasiPermarkahanGpssController::class, 'isi_skor_kad']);


    // Verifikasi Permarkahan Bangunan
    // Route::resource('/penilaian_reka_bentuk_bangunan', PenilaianRekaBentukBangunanController::class);
    Route::get('/verifikasi_permarkahan_bangunan', [VerifikasiPermarkahanBangunanController::class, 'index']);
    Route::get('/verifikasi_permarkahan_bangunan/melantik_pemudah_cara', [VerifikasiPermarkahanBangunanController::class, 'papar_projek']);
    Route::get('/verifikasi_permarkahan_bangunan/melantik_pemudah_cara/{id}', [VerifikasiPermarkahanBangunanController::class, 'pemudah_cara']);
    Route::post('/verifikasi_permarkahan_bangunan/melantik_pemudah_cara/{id}', [VerifikasiPermarkahanBangunanController::class, 'melantik_pemudah_cara']);
    Route::get('/verifikasi_permarkahan_bangunan/skor_penilaian', [VerifikasiPermarkahanBangunanController::class, 'skor_penilaian']);
    Route::get('/verifikasi_permarkahan_bangunan/skor_penilaian/{id}', [VerifikasiPermarkahanBangunanController::class, 'papar_skor_penilaian']);
    Route::post('/verifikasi_permarkahan_bangunan/simpan_skor/{id}', [VerifikasiPermarkahanBangunanController::class, 'simpan_skor_penilaian']);
    Route::get('/verifikasi_permarkahan_bangunan/pengesahan_penilaian', [VerifikasiPermarkahanBangunanController::class, 'pengesahan_penilaian']);
    Route::get('/verifikasi_permarkahan_bangunan/pengesahan_penilaian/{id}', [VerifikasiPermarkahanBangunanController::class, 'papar_pengesahan_penilaian']);
    Route::post('/verifikasi_permarkahan_bangunan/pengesahan_penilaian/{id}', [VerifikasiPermarkahanBangunanController::class, 'simpan_pengesahan_penilaian']);
    // Route::put('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian/{id}', [PenilaianRekaBentukBangunanController::class, 'simpan_pengesahan_penilaian']);
    Route::get('/verifikasi_permarkahan_bangunan/semakan_rawak', [VerifikasiPermarkahanBangunanController::class, 'semakan_rawak']);
    Route::get('/verifikasi_permarkahan_bangunan/semakan_rawak/{id}', [VerifikasiPermarkahanBangunanController::class, 'papar_semakan_rawak']);
    Route::post('/verifikasi_permarkahan_bangunan/semakan_rawak/{id}',  [VerifikasiPermarkahanBangunanController::class, 'simpan_semakan_rawak']);
    // Sijil Penilaian
    Route::get('/verifikasi_permarkahan_bangunan/muat_turun_sijil', [VerifikasiPermarkahanBangunanController::class, 'sijil_penilaian']);
    Route::get('/verifikasi_permarkahan_bangunan/muat_turun_sijil/{id}', [VerifikasiPermarkahanBangunanController::class, 'papar_sijil_penilaian']);
    Route::post('/verifikasi_permarkahan_bangunan/muat_turun_sijil/{id}', [VerifikasiPermarkahanBangunanController::class, 'simpan_sijil_penilaian']);




    //Validasi Permarkahan Bangunan
    Route::get('/validasi_permarkahan_bangunan', [ValidasiPermarkahanBangunanController::class, 'index']);
    // Sekretariat
    Route::get('/validasi_permarkahan_bangunan/melantik_pasukan_validasi', [ValidasiPermarkahanBangunanController::class, 'papar_projek']);
    Route::get('/validasi_permarkahan_bangunan/melantik_pasukan_validasi/{id}', [ValidasiPermarkahanBangunanController::class, 'pasukan_validasi']);
    Route::post('/validasi_permarkahan_bangunan/melantik_pasukan_validasi/{id}', [ValidasiPermarkahanBangunanController::class, 'melantik_pasukan_validasi']);
    Route::get('/validasi_permarkahan_bangunan/pengesahan_penilaian_validasi', [ValidasiPermarkahanBangunanController::class, 'pengesahan_penilaian_validasi']);
    Route::get('/validasi_permarkahan_bangunan/pengesahan_penilaian_validasi/{id}', [ValidasiPermarkahanBangunanController::class, 'papar_pengesahan_penilaian_validasi']);
    Route::get('/validasi_permarkahan_bangunan/jana_keputusan', [ValidasiPermarkahanBangunanController::class, 'jana_keputusan']);
    Route::get('/validasi_permarkahan_bangunan/jana_keputusan/{id}', [ValidasiPermarkahanBangunanController::class, 'papar_jana_keputusan']);
    Route::get('/validasi_permarkahan_bangunan/pengesahan_rayuan', [ValidasiPermarkahanBangunanController::class, 'pengesahan_rayuan']);
    Route::get('/validasi_permarkahan_bangunan/pengesahan_rayuan/{id}', [ValidasiPermarkahanBangunanController::class, 'papar_pengesahan_rayuan']);
    Route::get('/validasi_permarkahan_bangunan/jana_sijil', [ValidasiPermarkahanBangunanController::class, 'jana_sijil']);
    Route::get('/validasi_permarkahan_bangunan/jana_sijil/{id}', [ValidasiPermarkahanBangunanController::class, 'papar_jana_sijil']);
    Route::post('/validasi_permarkahan_bangunan/jana_sijil/{id}', [ValidasiPermarkahanBangunanController::class, 'simpan_jana_sijil']);

    //Ketua Pasukan/Pen Ketua Pasukan
    Route::get('/validasi_permarkahan_bangunan/permohonan_rayuan', [ValidasiPermarkahanBangunanController::class, 'permohonan_rayuan']);
    Route::get('/validasi_permarkahan_bangunan/permohonan_rayuan/{id}', [ValidasiPermarkahanBangunanController::class, 'papar_permohonan_rayuan']);
    Route::post('/validasi_permarkahan_bangunan/permohonan_rayuan/{id}', [ValidasiPermarkahanBangunanController::class, 'simpan_permohonan_rayuan']);

    // Pasukan Validasi
    Route::get('/validasi_permarkahan_bangunan/penilaian_validasi', [ValidasiPermarkahanBangunanController::class, 'penilaian_validasi']);
    Route::get('/validasi_permarkahan_bangunan/penilaian_validasi/{id}', [ValidasiPermarkahanBangunanController::class, 'papar_penilaian_validasi']);
    Route::post('/validasi_permarkahan_bangunan/penilaian_validasi/{id}', [ValidasiPermarkahanBangunanController::class, 'simpan_penilaian_validasi']);

    //Ketua Validasi
    Route::get('/validasi_permarkahan_bangunan/borang_validasi', [ValidasiPermarkahanBangunanController::class, 'borang_validasi']);
    Route::get('/validasi_permarkahan_bangunan/borang_validasi/{id}', [ValidasiPermarkahanBangunanController::class, 'papar_borang_validasi']);
    Route::put('/validasi_permarkahan_bangunan/borang_validasi/{id}', [ValidasiPermarkahanBangunanController::class, 'kemaskini_borang_validasi']);






    
    
    // Penilaian Reka Bentuk Jalan
    // Route::resource('/penilaian_reka_bentuk_bangunan', PenilaianRekaBentukJalanController::class);
    Route::get('/penilaian_reka_bentuk_jalan', [PenilaianRekaBentukJalanController::class, 'index']);
    Route::get('/penilaian_reka_bentuk_jalan/pemudah_cara_jalan', [PenilaianRekaBentukJalanController::class, 'pemudah_cara_jalan']);
    Route::post('/penilaian_reka_bentuk_jalan/melantik_pemudah_cara_jalan/{id}', [PenilaianRekaBentukJalanController::class, 'melantik_pemudah_cara_jalan']);
    // isi skor kad
    Route::get('/penilaian_reka_bentuk_jalan/isi_skor_kad', [PenilaianRekaBentukJalanController::class, 'isi_skor_kad']);
    Route::get('/penilaian_reka_bentuk_jalan/isi_skor_kad_page2', [PenilaianRekaBentukJalanController::class, 'isi_skor_kad_page2']);
    Route::get('/penilaian_reka_bentuk_jalan/isi_skor_kad_page3', [PenilaianRekaBentukJalanController::class, 'isi_skor_kad_page3']);
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

    // Route::resource('/verifikasi_permarkahan_jalan', VerifikasiPermarkahanJalanController::class);
    // verifikasi permarkahan jalan custom action 
    //Route::get('/verifikasi_permarkahan_jalan', [VerifikasiPermarkahanJalanController::class, 'index']);
    //Route::post('/verifikasi_permarkahan_jalan', [VerifikasiPermarkahanJalanController::class, 'create']);
    Route::get('/verifikasi_permarkahan_jalan/papar_senarai_projek', [VerifikasiPermarkahanJalanController::class, 'papar_senarai_projek_verifikasi']);
    Route::get('/verifikasi_permarkahan_jalan/melantik_penilai_jalan/create', [VerifikasiPermarkahanJalanController::class, 'melantik_penilai_jalan']);
    Route::post('/verifikasi_permarkahan_jalan/melantik_penilai_jalan/simpan/{id}', [VerifikasiPermarkahanJalanController::class, 'simpan_penilai_jalan']);
    //Route::post('/verifikasi_permarkahan_jalan/senarai_projek_create', [VerifikasiPermarkahanJalanController::class, 'senarai_projek_create']);
    Route::get('/verifikasi_permarkahan_jalan/pemudah_cara/create', [VerifikasiPermarkahanJalanController::class, 'pemudah_cara']);
    Route::post('/verifikasi_permarkahan_jalan/pemudah_cara/simpan/{id}', [VerifikasiPermarkahanJalanController::class, 'simpan_pemudah_cara']);

    //isi skor kad
    Route::get('/verifikasi_permarkahan_jalan/isi_skor_kad_verifikasi', [VerifikasiPermarkahanJalanController::class, 'isi_skor_kad_verifikasi']);

    //markah penilaian
    Route::get('/verifikasi_permarkahan_jalan/markah_penilaian/create', [VerifikasiPermarkahanJalanController::class, 'markah_penilaian_verifikasi']);
    Route::get('/verifikasi_permarkahan_jalan/kemaskini_penilai_jalan_verifikasi/create', [VerifikasiPermarkahanJalanController::class, 'kemaskini_penilai_jalan_verifikasi']);

    //verifikasi permarkahan
    Route::get('/verifikasi_permarkahan_jalan/verifikasi_permarkahan', [VerifikasiPermarkahanJalanController::class, 'verifikasi_permarkahan']);
    Route::get('/verifikasi_permarkahan_jalan/verifikasi_permarkahan/create', [VerifikasiPermarkahanJalanController::class, 'verifikasi_permarkahan_create']);

    //verifikasi jana_keputusan
    Route::get('/verifikasi_permarkahan_jalan/jana_keputusan', [VerifikasiPermarkahanJalanController::class, 'jana_keputusan_verifikasi']);
    Route::get('/verifikasi_permarkahan_jalan/jana_keputusan/create', [VerifikasiPermarkahanJalanController::class, 'jana_keputusan_verifikasi_create']);

    //verifikasi papar_skor_kad
    Route::get('/verifikasi_permarkahan_jalan/papar_skor_kad', [VerifikasiPermarkahanJalanController::class, 'papar_skor_kad_verifikasi']);

    //verifikasi permohonan
    Route::get('/verifikasi_permarkahan_jalan/permohonan_rayuan', [VerifikasiPermarkahanJalanController::class, 'permohonan_rayuan_verifikasi']);
    Route::get('/verifikasi_permarkahan_jalan/permohonan_rayuan/create', [VerifikasiPermarkahanJalanController::class, 'permohonan_rayuan_verifikasi_create']);

});



