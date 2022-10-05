<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreValidasiPermarkahanBangunanRequest;
use App\Http\Requests\UpdateValidasiPermarkahanBangunanRequest;
use App\Models\ValidasiPermarkahanBangunan;
use App\Models\Projek;
use App\Models\PemudahCara;
use App\Models\KriteriaPhjkrBangunan;
use App\Models\PasukanValidasi;
use Illuminate\Http\Request;

class ValidasiPermarkahanBangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreValidasiPermarkahanBangunanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreValidasiPermarkahanBangunanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ValidasiPermarkahanBangunan  $validasiPermarkahanBangunan
     * @return \Illuminate\Http\Response
     */
    public function show(ValidasiPermarkahanBangunan $validasiPermarkahanBangunan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ValidasiPermarkahanBangunan  $validasiPermarkahanBangunan
     * @return \Illuminate\Http\Response
     */
    public function edit(ValidasiPermarkahanBangunan $validasiPermarkahanBangunan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateValidasiPermarkahanBangunanRequest  $request
     * @param  \App\Models\ValidasiPermarkahanBangunan  $validasiPermarkahanBangunan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateValidasiPermarkahanBangunanRequest $request, ValidasiPermarkahanBangunan $validasiPermarkahanBangunan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ValidasiPermarkahanBangunan  $validasiPermarkahanBangunan
     * @return \Illuminate\Http\Response
     */
    public function destroy(ValidasiPermarkahanBangunan $validasiPermarkahanBangunan)
    {
        //
    }

    #pasukan validasi (sekretariat)
    public function papar_projek()
    {
        $projeks = Projek::all();
        $projeks = new Projek;
        $pasukan_validasi = new PasukanValidasi;
        

        return view('modul.validasi_permarkahan_bangunan.pasukan_validasi.index',[
            'projeks'=>$projeks,
            'pasukan_validasi'=>$pasukan_validasi
        ]);
    }
    public function pasukan_validasi($id)
    {
        $pasukan_validasi = new PasukanValidasi;

        return view('modul.validasi_permarkahan_bangunan.pasukan_validasi.create',[
            'pasukan_validasi'=>$pasukan_validasi
        ]);

    }

    public function melantik_pasukan_validasi(Request $request, $id)
    {
        // submit form melantik pasukan validasi
        $pasukan_validasi = new PasukanValidasi();

        $pasukan_validasi->nama = $request->nama;
        $pasukan_validasi->syarikat_cawangan = $request->syarikat_cawangan;
        $pasukan_validasi->no_tel = $request->no_tel;
        $pasukan_validasi->no_fax = $request->no_fax;
        $pasukan_validasi->email = $request->email;
        $pasukan_validasi->disiplin = $request->disiplin;
        $pasukan_validasi->kategori = $request->kategori;
        alert()->success('Pasukan Validasi berjaya didaftar.', 'Berjaya');

        $pasukan_validasi->save();

        // submit form melantik pasukan validasi
        return redirect('/validasi_permarkahan_bangunan/melantik_pasukan_validasi');


    }

    public function pengesahan_penilaian_validasi()
    {
        // $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();
        $projeks = Projek::all();

        return view('modul.validasi_permarkahan_bangunan.pengesahan_penilaian_validasi.index', [
            'projeks'=>$projeks
            // 'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function papar_pengesahan_penilaian_validasi($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);

        return view('modul.validasi_permarkahan_bangunan.pengesahan_penilaian_validasi.show', [
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function simpan_pengesahan_penilaian_validasi(Request $request, $id)
    {

        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan($request->all());
        $kriteria_phjkr_bangunan->save();

        alert()->success('PENILAIAN VALIDASI BERJAYA', 'Berjaya');
        return redirect('/validasi_permarkahan_bangunan/pengesahan_penilaian_validasi');
    }

    public function jana_keputusan()
    {
        $projeks = Projek::all();

        return view('modul.validasi_permarkahan_bangunan.jana_keputusan.index',[
            'projeks'=>$projeks
        ]);
    }

    public function papar_jana_keputusan($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);

        return view('modul.validasi_permarkahan_bangunan.jana_keputusan.show',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function pengesahan_rayuan()
    {
        $projeks = Projek::all();
        return view('modul.validasi_permarkahan_bangunan.pengesahan_rayuan.index',[
            'projeks'=>$projeks
        ]);
    }

    public function papar_pengesahan_rayuan($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);
        return view('modul.validasi_permarkahan_bangunan.pengesahan_rayuan.edit',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function jana_sijil()
    {
        $projeks = Projek::all();
        return view('modul.validasi_permarkahan_bangunan.jana_sijil.index',[
            'projeks'=>$projeks
        ]);
    }

    public function papar_jana_sijil($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);
        return view('modul.validasi_permarkahan_bangunan.jana_sijil.edit',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function simpan_jana_sijil(Request $request, $id)
    {
        // submit form jana sijil
        return redirect('/validasi_permarkahan_bangunan/form_jana_sijil');
    }

    #ketua pasukan/penolong ketua pasukan
    public function permohonan_rayuan()
    {
        $projeks = Projek::all();

        return view('modul.validasi_permarkahan_bangunan.permohonan_rayuan.index',[
            'projeks'=>$projeks
        ]);
    }

    public function papar_permohonan_rayuan($id)
    {
        // $pasukan_validasi = PemudahCara::find($id);
        // $projeks = Projek::find($id);
        return view('modul.validasi_permarkahan_bangunan.permohonan_rayuan.edit');
    }

    public function simpan_permohonan_rayuan(Request $request, $id)
    {
        alert()->success('PERMOHONAN RAYUAN BERJAYA', 'Berjaya');
        return redirect('/validasi_permarkahan_bangunan/form_permohonan_rayuan');
    }

    #Pasukan Validasi
    public function penilaian_validasi()
    {
        $projeks = Projek::all();

        return view('modul.validasi_permarkahan_bangunan.penilaian_validasi.index',[
            'projeks'=>$projeks
        ]);
    }

    public function papar_penilaian_validasi($id)
    {
        // $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan::all();
        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan();
        // $projeks = Projek::find($id);
        

        return view('modul.validasi_permarkahan_bangunan.penilaian_validasi.create',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan,
        ]);
    }

    public function simpan_penilaian_validasi(Request $request, $id)
    {
    
        $markah_TL_total = $request->markahTL1_ML + $request->markahTL2_ML
        + $request->markahTL3_ML + $request->markahTL32_ML + $request->markahTL4_ML + $request->markahTL5_ML + $request->markahTL6_ML
        + $request->markahTL81_ML + $request->markahTL82_ML + $request->markahTL83_ML + $request->markahTL84_ML + $request->markahTL85_ML + $request->markahTL91_ML 
        + $request->markahTL92_ML;

        $markah_KT_total = $request->markahKT1_ML + $request->markahKT2_ML
        + $request->markahKT21_ML + $request->markahKT22_ML + $request->markahKT3_ML + $request->markahKT31_ML + $request->markahKT32_ML
        + $request->markahKT4_ML + $request->markahKT52_ML + $request->markahKT8_ML + $request->markahKT11_ML;

        $markah_SB_total = $request->markahSB1_ML + $request->markahSB2_ML
        + $request->markahSB3_ML + $request->markahSB4_ML;

        $markah_PA_total = $request->markahPA1_ML + $request->markahPA2_ML
        + $request->markahPA3_ML + $request->markahPA32_ML;

        $markah_PD_total = $request->markahPD24_ML + $request->markahPD25_ML
        + $request->markahPD31_ML + $request->markahPD32_ML + $request->markahPD33_ML + $request->markahPD34_ML + $request->markahPD8_ML
        + $request->markahPD10_ML;

        $markah_FL_total = $request->markahFL1_ML + $request->markahFL2_ML
        + $request->markahFL21_ML + $request->markahFL22_ML + $request->markahFL23_ML + $request->markahFL3_ML + $request->markahFL31_ML
        + $request->markahFL32_ML + $request->markahFL33_ML + $request->markahFL34_ML;

        $markah_IN_total = $request->markahIN1_ML;

        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan($request->all());
        $kriteria_phjkr_bangunan->markahTOTAL_TL_ML = $markah_TL_total;
        $kriteria_phjkr_bangunan->markahTOTAL_KT_ML = $markah_KT_total;
        $kriteria_phjkr_bangunan->markahTOTAL_SB_ML = $markah_SB_total;
        $kriteria_phjkr_bangunan->markahTOTAL_PA_ML = $markah_PA_total;
        $kriteria_phjkr_bangunan->markahTOTAL_PD_ML = $markah_PD_total;
        $kriteria_phjkr_bangunan->markahTOTAL_FL_ML = $markah_FL_total;
        $kriteria_phjkr_bangunan->markahTOTAL_IN_ML = $markah_IN_total;
        $kriteria_phjkr_bangunan->save();

        alert()->success('PENILAIAN VALIDASI BERJAYA', 'Berjaya');
        return redirect('/validasi_permarkahan_bangunan/penilaian_validasi');
    }

    #ketua validasi
    public function borang_validasi()
    {
        // $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();
        $projeks = Projek::all();

        return view('modul.validasi_permarkahan_bangunan.borang_validasi.index',[
            'projeks'=>$projeks
        ]);
    }

    public function papar_borang_validasi($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);

        return view('modul.validasi_permarkahan_bangunan.borang_validasi.show',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function kemaskini_borang_validasi($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);

        return view('modul.validasi_permarkahan_bangunan.borang_validasi.edit',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    // Muat Turun Sijil Validasi
    public function sijil_validasi()
    {
        $projeks = Projek::all();
        return view('modul.validasi_permarkahan_bangunan.sijil_validasi.index',[
            'projeks'=>$projeks
        ]);
    }

    public function papar_sijil_validasi($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);

        return view('modul.validasi_permarkahan_bangunan.sijil_validasi.show',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function simpan_sijil_validasi(Request $request,$id)
    {
        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan($request->all());

        $kriteria_phjkr_bangunan->save();
        return redirect('/validasi_permarkahan_bangunan/sijil_validasi');
    }

    // Muat Turun Skor
    public function muat_turun_skor()
    {
        $projeks = Projek::all();

        return view('modul.validasi_permarkahan_bangunan.muat_turun_skor.index',[
            'projeks'=>$projeks
        ]);
    }

    public function papar_muat_turun_skor($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);

        return view('modul.validasi_permarkahan_bangunan.sijil_validasi.show',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function simpan_muat_turun_skor(Request $request, $id)
    {
        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan($request->all());
        $kriteria_phjkr_bangunan->save();
        return redirect('/validasi_permarkahan_bangunan/sijil_validasi');
    }


}
