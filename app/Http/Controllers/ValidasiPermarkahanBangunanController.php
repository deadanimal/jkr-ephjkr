<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreValidasiPermarkahanBangunanRequest;
use App\Http\Requests\UpdateValidasiPermarkahanBangunanRequest;
use App\Models\ValidasiPermarkahanBangunan;
use App\Models\Projek;
use App\Models\PemudahCara;
use App\Models\KriteriaPhjkrBangunan;
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
        $pasukan_validasi = new PemudahCara;
        

        return view('modul.validasi_permarkahan_bangunan.pasukan_validasi.index',[
            'projeks'=>$projeks,
            'pasukan_validasi'=>$pasukan_validasi
        ]);
    }
    public function pasukan_validasi($id)
    {
        $pasukan_validasi = new PemudahCara;

        return view('modul.validasi_permarkahan_bangunan.pasukan_validasi.create',[
            'pasukan_validasi'=>$pasukan_validasi
        ]);

    }

    public function melantik_pasukan_validasi(Request $request, $id)
    {
        // submit form melantik pasukan validasi
        $pasukan_validasi = new PemudahCara;

        $pasukan_validasi->nama = $request->input('nama');
        $pasukan_validasi->syarikat_cawangan = $request->input('syarikat_cawangan');
        $pasukan_validasi->no_tel = $request->input('no_tel');
        $pasukan_validasi->no_fax = $request->input('no_fax');
        $pasukan_validasi->email = $request->input('email');
        $pasukan_validasi->disiplin = $request->input('disiplin');
        $pasukan_validasi->kategori = $request->kategori;
        alert()->success('Pasukan Validasi berjaya didaftar.', 'Berjaya');

        $pasukan_validasi->save();

        // submit form melantik pasukan validasi
        return redirect('/validasi_permarkahan_bangunan/melantik_pasukan_validasi');


    }

    public function pengesahan_penilaian_validasi()
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();
        $projeks = Projek::all();

        return view('modul.validasi_permarkahan_bangunan.pengesahan_penilaian_validasi.index', [
            'projeks'=>$projeks,
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function papar_pengesahan_penilaian_validasi($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);

        return view('modul.validasi_permarkahan_bangunan.pengesahan_penilaian_validasi.show', [
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function jana_keputusan()
    {
        return view('modul.validasi_permarkahan_bangunan.jana_keputusan.index');
    }

    public function papar_jana_keputusan()
    {
        return view('modul.validasi_permarkahan_bangunan.jana_keputusan.edit');
    }

    public function pengesahan_rayuan()
    {
        return view('modul.validasi_permarkahan_bangunan.pengesahan_rayuan.index');
    }

    public function papar_pengesahan_rayuan($id)
    {
        return view('modul.validasi_permarkahan_bangunan.pengesahan_rayuan.edit');
    }

    public function jana_sijil()
    {
        return view('modul.validasi_permarkahan_bangunan.jana_sijil.index');
    }

    public function papar_jana_sijil($id)
    {
        return view('modul.validasi_permarkahan_bangunan.jana_sijil.edit');
    }

    public function simpan_jana_sijil(Request $request, $id)
    {
        // submit form jana sijil
        return redirect('/validasi_permarkahan_bangunan/form_jana_sijil');
    }

    #ketua pasukan/penolong ketua pasukan
    public function permohonan_rayuan()
    {

        return view('modul.validasi_permarkahan_bangunan.permohonan_rayuan.index');
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
        // $projeks = Projek::all();
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();

        return view('modul.validasi_permarkahan_bangunan.penilaian_validasi.index',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
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
        //SUM OF TL1 TO TL9.2
        $markah_TL_total = $request->markahTL1_ML 
        + $request->markahTL2_ML 
        + $request->markahTL3_ML 
        + $request->markahTL32_ML 
        + $request->markahTL4_ML 
        + $request->markahTL5_ML 
        + $request->markahTL6_ML
        + $request->markahTL81_ML 
        + $request->markahTL82_ML 
        + $request->markahTL83_ML 
        + $request->markahTL84_ML 
        + $request->markahTL85_ML 
        + $request->markahTL91_ML 
        + $request->markahTL92_ML;

        //SUM OF KT1 TO KT11
        // $markah_KT_total = $request->markahKT1_ML
        // + $request->markahKT2_ML
        // + $request->markahKT21_ML
        // + $request->markahKT22_ML
        // + $request->markahKT3_ML
        // + $request->markahKT31_ML
        // + $request->markahKT32_ML
        // + $request->markahKT4_ML
        // + $request->markahKT5_ML
        // + $request->markahKT52_ML
        // + $request->markahKT8_ML
        // + $request->markahKT11_ML;

        //SUM OF SB1 TO SB4
        $markah_SB_total =
        + $request->markahSB1_ML
        + $request->markahSB2_ML
        + $request->markahSB3_ML
        + $request->markahSB4_ML;

        //SUM OF PA1 TO PA3
        $markah_PA_total =
        + $request->markahPA1_ML
        + $request->markahPA2_ML
        + $request->markahPA32_ML
        + $request->markahPA3_ML;

        //SUM OF PD2 TO PD10
        $markah_PD_total =
        + $request->markahPD2_ML
        + $request->markahPD24_ML
        + $request->markahPD25_ML
        + $request->markahPD3_ML
        + $request->markahPD31_ML
        + $request->markahPD32_ML
        + $request->markahPD33_ML
        + $request->markahPD34_ML
        + $request->markahPD8_ML
        + $request->markahPD10_ML;

        //SUM OF FL1 TO FL3.4
        $markah_FL_total =
        + $request->markahFL1_ML
        + $request->markahFL2_ML
        + $request->markahFL21_ML
        + $request->markahFL22_ML
        + $request->markahFL23_ML
        + $request->markahFL3_ML
        + $request->markahFL31_ML
        + $request->markahFL32_ML
        + $request->markahFL33_ML
        + $request->markahFL34_ML;

        //SUM OF IN1
        $markah_IN_total =
        + $request->markahFL1_ML
        + $request->markahFL2_ML
        + $request->markahFL21_ML
        + $request->markahFL22_ML
        + $request->markahFL23_ML
        + $request->markahFL3_ML
        + $request->markahFL31_ML
        + $request->markahFL32_ML
        + $request->markahFL33_ML
        + $request->markahFL34_ML;


    
        //Request all
       $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan($request->all());
    
       
        $kriteria_phjkr_bangunan->markahTOTAL_TL_ML = $markah_TL_total;
        // $kriteria_phjkr_bangunan->markahTOTAL_KT_ML = $markah_KT_total;
        $kriteria_phjkr_bangunan->markahTOTAL_SB_ML = $markah_SB_total;
        $kriteria_phjkr_bangunan->markahTOTAL_PA_ML = $markah_PA_total;
        $kriteria_phjkr_bangunan->markahTOTAL_PD_ML = $markah_PD_total;
        $kriteria_phjkr_bangunan->markahTOTAL_FL_ML = $markah_FL_total;
        $kriteria_phjkr_bangunan->markahTOTAL_IN_ML = $markah_IN_total;


    //    $kriteria_phjkr_bangunan->markahML = $markahJumlahTL;

        // $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan;

        // $kriteria_phjkr_bangunan->jenisKategori = $request->input('jenisKategori');
        // $kriteria_phjkr_bangunan->markahTL = $request->markahTL;
        // $kriteria_phjkr_bangunan->markahKT = $request->markahKT;
        // $kriteria_phjkr_bangunan->markahSB = $request->markahSB;
        // $kriteria_phjkr_bangunan->markahPA = $request->markahPA;
        // $kriteria_phjkr_bangunan->markahPD = $request->markahPD;
        // $kriteria_phjkr_bangunan->markahFL = $request->markahFL;
        // $kriteria_phjkr_bangunan->markahIN = $request->markahIN;

        // JUMLAH MARKAH from TOTAL_TL_ML to TOTAL_IN_ML
        //// $kriteria_phjkr_bangunan->markahML = $request->markahML;
        // $kriteria_phjkr_bangunan->markahML = $request->markahTOTAL_TL_ML + $request->markahTOTAL_KT_ML
        // + $request->markahTOTAL_SB_ML + $request->markahTOTAL_PA_ML + $request->markahTOTAL_PD_ML + $request->markahTOTAL_FL_ML
        // + $request->markahTOTAL_IN_ML;

        
        //JUMLAH MARKAH EACH ROW TABLE JANA KEPUTUSAN
        // $kriteria_phjkr_bangunan->markahTOTAL_TL_ML = $request->markahTOTAL_TL_ML;
        // $kriteria_phjkr_bangunan->markahTOTAL_KT_ML = $request->markahTOTAL_KT_ML;
        // $kriteria_phjkr_bangunan->markahTOTAL_SB_ML = $request->markahTOTAL_SB_ML;
        // $kriteria_phjkr_bangunan->markahTOTAL_PA_ML = $request->markahTOTAL_PA_ML;
        // $kriteria_phjkr_bangunan->markahTOTAL_PD_ML = $request->markahTOTAL_PD_ML;
        // $kriteria_phjkr_bangunan->markahTOTAL_FL_ML = $request->markahTOTAL_FL_ML;
        // $kriteria_phjkr_bangunan->markahTOTAL_IN_ML = $request->markahTOTAL_IN_ML;

        //MARKAHTL
        // $kriteria_phjkr_bangunan->markahTL1_ML = $request->markahTL1_ML;
        // $kriteria_phjkr_bangunan->markahTL2_ML = $request-> markahTL2_ML;
        // $kriteria_phjkr_bangunan->markahTL3_ML = $request->markahTL3_ML;
        // $kriteria_phjkr_bangunan->markahTL32_ML = $request->markahTL32_ML;
        // $kriteria_phjkr_bangunan->markahTL4_ML = $request->markahTL4_ML;
        // $kriteria_phjkr_bangunan->markahTL5_ML = $request->markahTL5_ML;
        // $kriteria_phjkr_bangunan->markahTL6_ML = $request->markahTL6_ML;
        // $kriteria_phjkr_bangunan->markahTL8_ML = $request->markahTL8_ML;
        // $kriteria_phjkr_bangunan->markahTL81_ML = $request->markahTL81_ML;
        // $kriteria_phjkr_bangunan->markahTL82_ML = $request->markahTL82_ML;
        // $kriteria_phjkr_bangunan->markahTL83_ML = $request->markahTL83_ML;
        // $kriteria_phjkr_bangunan->markahTL84_ML = $request->markahTL84_ML;
        // $kriteria_phjkr_bangunan->markahTL85_ML = $request->markahTL85_ML;
        // $kriteria_phjkr_bangunan->markahTL9_ML = $request->markahTL9_ML;
        // $kriteria_phjkr_bangunan->markahTL91_ML = $request->markahTL91_ML;
        // $kriteria_phjkr_bangunan->markahTL92_ML = $request->markahTL92_ML;

        //MARKAHKT
        // $kriteria_phjkr_bangunan->markahKT1_ML = $request->markahKT1_ML;
        // $kriteria_phjkr_bangunan->markahKT2_ML = $request->markahKT2_ML;
        // $kriteria_phjkr_bangunan->markahKT21_ML = $request->markahKT21_ML;
        // $kriteria_phjkr_bangunan->markahKT22_ML = $request->markahKT22_ML;
        // $kriteria_phjkr_bangunan->markahKT3_ML = $request->markahKT3_ML;
        // $kriteria_phjkr_bangunan->markahKT31_ML = $request->markahKT31_ML;
        // $kriteria_phjkr_bangunan->markahKT32_ML = $request->markahKT32_ML;
        // $kriteria_phjkr_bangunan->markahKT4_ML = $request->markahKT4_ML;
        // $kriteria_phjkr_bangunan->markahKT5_ML = $request->markahKT5_ML;
        // $kriteria_phjkr_bangunan->markahKT52_ML = $request->markahKT52_ML;
        // $kriteria_phjkr_bangunan->markahKT8_ML = $request->markahKT8_ML;
        // $kriteria_phjkr_bangunan->markahKT11_ML = $request->markahKT11_ML;

        //MARKAHSB
        // $kriteria_phjkr_bangunan->markahSB1_ML = $request->markahSB1_ML;
        // $kriteria_phjkr_bangunan->markahSB2_ML = $request->markahSB2_ML;
        // $kriteria_phjkr_bangunan->markahSB3_ML = $request->markahSB3_ML;
        // $kriteria_phjkr_bangunan->markahSB4_ML = $request->markahSB4_ML;

        //MARKAHPA
        // $kriteria_phjkr_bangunan->markahPA1_ML = $request->markahPA1_ML;
        // $kriteria_phjkr_bangunan->markahPA2_ML = $request->markahPA2_ML;
        // $kriteria_phjkr_bangunan->markahPA32_ML = $request->markahPA32_ML;
        // $kriteria_phjkr_bangunan->markahPA3_ML = $request->markahPA3_ML;

        //MARKAHPD
        // $kriteria_phjkr_bangunan->markahPD2_ML = $request->markahPD2_ML;
        // $kriteria_phjkr_bangunan->markahPD24_ML = $request->markahPD24_ML;
        // $kriteria_phjkr_bangunan->markahPD25_ML = $request->markahPD25_ML;
        // $kriteria_phjkr_bangunan->markahPD3_ML = $request->markahPD3_ML;
        // $kriteria_phjkr_bangunan->markahPD31_ML = $request->markahPD31_ML;
        // $kriteria_phjkr_bangunan->markahPD32_ML = $request->markahPD32_ML;
        // $kriteria_phjkr_bangunan->markahPD33_ML = $request->markahPD33_ML;
        // $kriteria_phjkr_bangunan->markahPD34_ML = $request->markahPD34_ML;
        // $kriteria_phjkr_bangunan->markahPD8_ML = $request->markahPD8_ML;
        // $kriteria_phjkr_bangunan->markahPD10_ML = $request->markahPD10_ML;

        //MARKAHFL
        // $kriteria_phjkr_bangunan->markahFL1_ML = $request->markahFL1_ML;
        // $kriteria_phjkr_bangunan->markahFL2_ML = $request->markahFL2_ML;
        // $kriteria_phjkr_bangunan->markahFL21_ML = $request->markahFL21_ML;
        // $kriteria_phjkr_bangunan->markahFL22_ML = $request->markahFL22_ML;
        // $kriteria_phjkr_bangunan->markahFL23_ML = $request->markahFL23_ML;
        // $kriteria_phjkr_bangunan->markahFL3_ML = $request->markahFL3_ML;
        // $kriteria_phjkr_bangunan->markahFL31_ML = $request->markahFL31_ML;
        // $kriteria_phjkr_bangunan->markahFL32_ML = $request->markahFL32_ML;
        // $kriteria_phjkr_bangunan->markahFL33_ML = $request->markahFL33_ML;
        // $kriteria_phjkr_bangunan->markahFL34_ML = $request->markahFL34_ML;

        //MARKAHIN
        // $kriteria_phjkr_bangunan->markahIN1_ML = $request->markahIN1_ML;

        $kriteria_phjkr_bangunan->save();

        alert()->success('PENILAIAN VALIDASI BERJAYA', 'Berjaya');
        return redirect('/validasi_permarkahan_bangunan/penilaian_validasi');
    }

    #ketua validasi
    public function borang_validasi()
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();

        return view('modul.validasi_permarkahan_bangunan.borang_validasi.index',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
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

}
