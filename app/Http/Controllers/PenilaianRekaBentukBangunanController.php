<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePenilaianRekaBentukBangunanRequest;
use App\Http\Requests\UpdatePenilaianRekaBentukBangunanRequest;
use App\Models\Projek;
use App\Models\PemudahCara;
use App\Models\KriteriaPhjkrBangunan;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use \PDF;

use Illuminate\Http\Request;

class PenilaianRekaBentukBangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projeks = Projek::all();
        // paparan senarai projek


        return view('modul.penilaian_reka_bentuk_bangunan.index',[
            'projeks'=>$projeks
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    # bawah ni pemudah cara
    // ketua pasukan atau pen ketua pasukan
    public function papar_projek()
    {
        $projeks = Projek::all();
        $projeks = new Projek;
        $pemudah_cara = new PemudahCara;
        

        // papar table projek with button melantik pemudah cara
        // return view('modul.penilaian_reka_bentuk_bangunan.pemudah_cara.index');

        return view('modul.penilaian_reka_bentuk_bangunan.pemudah_cara.index',[
            'projeks'=>$projeks,
            'pemudah_cara'=>$pemudah_cara
        ]);
    }

    public function pemudah_cara($id)
    {
        $pemudah_cara = new PemudahCara;
        $projeks = Projek::find($id);

        // papar form pemudah cara with id projek
        // $projek = Projek::find($id);
        
        return view('modul.penilaian_reka_bentuk_bangunan.pemudah_cara.create',[
            'pemudah_cara'=>$pemudah_cara,
            'projeks'=> $projeks
        ]);
        
    }

    public function melantik_pemudah_cara(Request $request, $id)
    {
        // submit form melantik pemudah cara
        $pemudah_cara = new PemudahCara;
        

        $pemudah_cara->nama = $request->input('nama');
        $pemudah_cara->syarikat_cawangan = $request->input('syarikat_cawangan');
        $pemudah_cara->no_tel = $request->input('no_tel');
        $pemudah_cara->no_fax = $request->input('no_fax');
        $pemudah_cara->email = $request->input('email');
        $pemudah_cara->disiplin = $request->input('disiplin');
        $pemudah_cara->kategori = $request->kategori;
        $pemudah_cara->projek_id = $request->projek_id;
        alert()->success('Pemudah cara berjaya didaftar.', 'Berjaya');
        $pemudah_cara->save();

        $projeks = new Projek;
        $projeks->id = $request->id;
        // $projeks->save();

        // // submit form melantik pemudah cara
        return redirect('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara');

    }

    // PemudahCara
    # bawah ni utk skor penilaian
    public function skor_penilaian()
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();
        $projeks = Projek::all();
    
        // papar mcm index tapi ada button utk skor
        return view('modul.penilaian_reka_bentuk_bangunan.skor_penilaian.index',compact('projeks'));
    }
    public function papar_skor_penilaian($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);
        // $projeks = Projek::all();

        // papar form skor penilaian with id projek 
        return view('modul.penilaian_reka_bentuk_bangunan.skor_penilaian.show',[
            'kriteria_phjkr_bangunan'=> $kriteria_phjkr_bangunan,
            // 'projeks'=>$projeks
        ]);
    }

    public function simpan_skor(Request $request, $id)
    {

        $markah_TL_total = $request->markahTL1_MS + $request->markahTL2_MS
        + $request->markahTL3_MS + $request->markahTL32_MS + $request->markahTL4_MS + $request->markahTL5_MS + $request->markahTL6_MS
        + $request->markahTL81_MS + $request->markahTL82_MS + $request->markahTL83_MS + $request->markahTL84_MS + $request->markahTL85_MS + $request->markahTL91_MS 
        + $request->markahTL92_MS;

        $markah_KT_total = $request->markahKT1_MS + $request->markahKT2_MS
        + $request->markahKT21_MS + $request->markahKT22_MS + $request->markahKT3_MS + $request->markahKT31_MS + $request->markahKT32_MS
        + $request->markahKT4_MS + $request->markahKT52_MS + $request->markahKT8_MS + $request->markahKT11_MS;

        $markah_SB_total = $request->markahSB1_MS + $request->markahSB2_MS
        + $request->markahSB3_MS + $request->markahSB4_MS;

        $markah_PA_total = $request->markahPA1_MS + $request->markahPA2_MS
        + $request->markahPA3_MS + $request->markahPA32_MS;

        $markah_PD_total = $request->markahPD24_MS + $request->markahPD25_MS
        + $request->markahPD31_MS + $request->markahPD32_MS + $request->markahPD33_MS + $request->markahPD34_MS + $request->markahPD8_MS
        + $request->markahPD10_MS;

        $markah_FL_total = $request->markahFL1_MS + $request->markahFL2_MS
        + $request->markahFL21_MS + $request->markahFL22_MS + $request->markahFL23_MS + $request->markahFL3_MS + $request->markahFL31_MS
        + $request->markahFL32_MS + $request->markahFL33_MS + $request->markahFL34_MS;

        $markah_IN_total = $request->markahIN1_MS;
        // $markah_KT_total = $request->markahKT1 + $request->markahKT2;
        // $markah_SB_total = $request->markahSB1 + $request->markahSB2;
        // $markah_PA_total = $request->markahPA1 + $request->markahPA2;
        // $markah_PD_total = $request->markahPD1 + $request->markahPD2;
        // $markah_FL_total = $request->markahFL1 + $request->markahFL2;
        // $markah_IN_total = $request->markahIN1 + $request->markahIN2;
        // $markah_total_MMR = $request->markahTL1 + $request->markahKT1 + $request->markahSB1
        //                     + $request->markahPA1 + $request->markahPD1 + $request->markahFL1 + $request->markahIN1;
        // $markah_total_MMV = $request->markahTL2 + $request->markahKT2 + $request->markahSB2
        //                     + $request->markahPA2 + $request->markahPD2 + $request->markahFL2 + $request->markahIN2;


        // req all
        // $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan($request->all());
        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan;


        // $kriteria_phjkr_bangunan->jenisKategori = $request->input('jenisKategori');
        $kriteria_phjkr_bangunan->markahTOTAL_TL_MS = $markah_TL_total;
        $kriteria_phjkr_bangunan->markahTOTAL_KT_MS = $markah_KT_total;
        $kriteria_phjkr_bangunan->markahTOTAL_SB_MS = $markah_SB_total;
        $kriteria_phjkr_bangunan->markahTOTAL_PA_MS = $markah_PA_total;
        $kriteria_phjkr_bangunan->markahTOTAL_PD_MS = $markah_PD_total;
        $kriteria_phjkr_bangunan->markahTOTAL_FL_MS = $markah_FL_total;
        $kriteria_phjkr_bangunan->markahTOTAL_IN_MS = $markah_IN_total;


        // $kriteria_phjkr_bangunan->markahKT = $markah_KT_total;
        // $kriteria_phjkr_bangunan->markahSB = $markah_SB_total;
        // $kriteria_phjkr_bangunan->markahPA = $markah_PA_total;
        // $kriteria_phjkr_bangunan->markahPD = $markah_PD_total;
        // $kriteria_phjkr_bangunan->markahFL = $markah_FL_total;
        // $kriteria_phjkr_bangunan->markahIN = $markah_IN_total;

        $kriteria_phjkr_bangunan->jenisKategori = $request->input('jenisKategori');
        $kriteria_phjkr_bangunan->markahTL = $request->markahTL;
        $kriteria_phjkr_bangunan->markahKT = $request->markahKT;
        $kriteria_phjkr_bangunan->markahSB = $request->markahSB;
        $kriteria_phjkr_bangunan->markahPA = $request->markahPA;
        $kriteria_phjkr_bangunan->markahPD = $request->markahPD;
        $kriteria_phjkr_bangunan->markahFL = $request->markahFL;
        $kriteria_phjkr_bangunan->markahIN = $request->markahIN;

        // $kriteria_phjkr_bangunan->markahMMR = $request->markahMMR;
        // $kriteria_phjkr_bangunan->markahMS = $request->markahMS;
        // $kriteria_phjkr_bangunan->markahMR = $request->markahMR;
        // $kriteria_phjkr_bangunan->markahMMV = $request->markahMMV;
        // $kriteria_phjkr_bangunan->markahMSV = $request->markahMSV;
        // $kriteria_phjkr_bangunan->markahML = $request->markahML;
        // JUMLAH MARKAH 
        $kriteria_phjkr_bangunan->markahMMR = $request->markahMMR;
        $kriteria_phjkr_bangunan->markahMS = $request->markahTOTAL_MS + $request->markahTOTAL_MR;
        $kriteria_phjkr_bangunan->markahMR = $request->markahTOTAL_MR + $request->markahTOTAL_MR;
        $kriteria_phjkr_bangunan->markahMMV = $request->markahMMV;
        $kriteria_phjkr_bangunan->markahMSV = $request->markahMSV;
        $kriteria_phjkr_bangunan->markahML = $request->markahML;
        

        $kriteria_phjkr_bangunan->markahTOTAL_TL_MMR = $request->markahTOTAL_TL_MMR;
        $kriteria_phjkr_bangunan->markahTOTAL_TL_MS = $request->markahTOTAL_TL_MS;
        $kriteria_phjkr_bangunan->markahTOTAL_TL_MR = $request->markahTOTAL_TL_MR;
        $kriteria_phjkr_bangunan->markahTOTAL_TL_MMV = $request->markahTOTAL_TL_MMV;
        $kriteria_phjkr_bangunan->markahTOTAL_TL_MSV = $request->markahTOTAL_TL_MSV;
        $kriteria_phjkr_bangunan->markahTOTAL_TL_ML = $request->markahTOTAL_TL_ML;
        $kriteria_phjkr_bangunan->markahTOTAL_KT_MMR = $request->markahTOTAL_KT_MMR;
        $kriteria_phjkr_bangunan->markahTOTAL_KT_MS = $request->markahTOTAL_KT_MS;
        $kriteria_phjkr_bangunan->markahTOTAL_KT_MR = $request->markahTOTAL_KT_MR;
        $kriteria_phjkr_bangunan->markahTOTAL_KT_MMV = $request->markahTOTAL_KT_MMV;
        $kriteria_phjkr_bangunan->markahTOTAL_KT_MSV = $request->markahTOTAL_KT_MSV;
        $kriteria_phjkr_bangunan->markahTOTAL_KT_ML = $request->markahTOTAL_KT_ML;
        $kriteria_phjkr_bangunan->markahTOTAL_SB_MMR = $request->markahTOTAL_SB_MMR;
        $kriteria_phjkr_bangunan->markahTOTAL_SB_MS = $request->markahTOTAL_SB_MS;
        $kriteria_phjkr_bangunan->markahTOTAL_SB_MR = $request->markahTOTAL_SB_MR;
        $kriteria_phjkr_bangunan->markahTOTAL_SB_MMV = $request->markahTOTAL_SB_MMV;
        $kriteria_phjkr_bangunan->markahTOTAL_SB_MSV = $request->markahTOTAL_SB_MSV;
        $kriteria_phjkr_bangunan->markahTOTAL_SB_ML = $request->markahTOTAL_SB_ML;
        $kriteria_phjkr_bangunan->markahTOTAL_PA_MMR = $request->markahTOTAL_PA_MMR;
        $kriteria_phjkr_bangunan->markahTOTAL_PA_MS = $request->markahTOTAL_PA_MS;
        $kriteria_phjkr_bangunan->markahTOTAL_PA_MR = $request->markahTOTAL_PA_MR;
        $kriteria_phjkr_bangunan->markahTOTAL_PA_MMV = $request->markahTOTAL_PA_MMV;
        $kriteria_phjkr_bangunan->markahTOTAL_PA_MSV = $request->markahTOTAL_PA_MSV;
        $kriteria_phjkr_bangunan->markahTOTAL_PA_ML = $request->markahTOTAL_PA_ML;
        $kriteria_phjkr_bangunan->markahTOTAL_PD_MMR = $request->markahTOTAL_PD_MMR;
        $kriteria_phjkr_bangunan->markahTOTAL_PD_MS = $request->markahTOTAL_PD_MS;
        $kriteria_phjkr_bangunan->markahTOTAL_PD_MR = $request->markahTOTAL_PD_MR;
        $kriteria_phjkr_bangunan->markahTOTAL_PD_MMV = $request->markahTOTAL_PD_MMV;
        $kriteria_phjkr_bangunan->markahTOTAL_PD_MSV = $request->markahTOTAL_PD_MSV;
        $kriteria_phjkr_bangunan->markahTOTAL_PD_ML = $request->markahTOTAL_PD_ML;
        $kriteria_phjkr_bangunan->markahTOTAL_FL_MMR = $request->markahTOTAL_FL_MMR;
        $kriteria_phjkr_bangunan->markahTOTAL_FL_MS = $request->markahTOTAL_FL_MS;
        $kriteria_phjkr_bangunan->markahTOTAL_FL_MR = $request->markahTOTAL_FL_MR;
        $kriteria_phjkr_bangunan->markahTOTAL_FL_MMV = $request->markahTOTAL_FL_MMV;
        $kriteria_phjkr_bangunan->markahTOTAL_FL_MSV = $request->markahTOTAL_FL_MSV;
        $kriteria_phjkr_bangunan->markahTOTAL_FL_ML = $request->markahTOTAL_FL_ML;
        $kriteria_phjkr_bangunan->markahTOTAL_IN_MMR = $request->markahTOTAL_IN_MMR;
        $kriteria_phjkr_bangunan->markahTOTAL_IN_MS = $request->markahTOTAL_IN_MS;
        $kriteria_phjkr_bangunan->markahTOTAL_IN_MR = $request->markahTOTAL_IN_MR;
        $kriteria_phjkr_bangunan->markahTOTAL_IN_MMV = $request->markahTOTAL_IN_MMV;
        $kriteria_phjkr_bangunan->markahTOTAL_IN_MSV = $request->markahTOTAL_IN_MSV;
        $kriteria_phjkr_bangunan->markahTOTAL_IN_ML = $request->markahTOTAL_IN_ML;
        $kriteria_phjkr_bangunan->markahTL1_MMR = $request->markahTL1_MMR;
        $kriteria_phjkr_bangunan->markahTL1_MS = $request->markahTL1_MS;
        $kriteria_phjkr_bangunan->markahTL1_MR = $request->markahTL1_MR;
        $kriteria_phjkr_bangunan->markahTL1_MMV = $request->markahTL1_MMV;
        $kriteria_phjkr_bangunan->markahTL1_MSV = $request->markahTL1_MSV;
        $kriteria_phjkr_bangunan->markahTL1_ML = $request->markahTL1_ML;
        $kriteria_phjkr_bangunan->markahTL2_MMR = $request->markahTL2_MMR;
        $kriteria_phjkr_bangunan->markahTL2_MS = $request->markahTL2_MS;
        $kriteria_phjkr_bangunan->markahTL2_MR = $request->markahTL2_MR;
        $kriteria_phjkr_bangunan->markahTL2_MMV = $request->markahTL2_MMV;
        $kriteria_phjkr_bangunan->markahTL2_MSV = $request->markahTL2_MSV;
        $kriteria_phjkr_bangunan->markahTL2_ML = $request-> markahTL2_ML;
        $kriteria_phjkr_bangunan->markahTL3_MMR = $request->markahTL3_MMR;
        $kriteria_phjkr_bangunan->markahTL3_MS = $request->markahTL3_MS;
        $kriteria_phjkr_bangunan->markahTL3_MR = $request->markahTL3_MR;
        $kriteria_phjkr_bangunan->markahTL3_MMV = $request->markahTL3_MMV;
        $kriteria_phjkr_bangunan->markahTL3_MSV = $request->markahTL3_MSV;
        $kriteria_phjkr_bangunan->markahTL3_ML = $request->markahTL3_ML;
        $kriteria_phjkr_bangunan->markahTL32_MMR = $request->markahTL32_MMR;
        $kriteria_phjkr_bangunan->markahTL32_MS = $request->markahTL32_MS;
        $kriteria_phjkr_bangunan->markahTL32_MR = $request->markahTL32_MR;
        $kriteria_phjkr_bangunan->markahTL32_MMV = $request->markahTL32_MMV;
        $kriteria_phjkr_bangunan->markahTL32_MSV = $request->markahTL32_MSV;
        $kriteria_phjkr_bangunan->markahTL32_ML = $request->markahTL32_ML;
        $kriteria_phjkr_bangunan->markahTL4_MMR = $request->markahTL4_MMR;
        $kriteria_phjkr_bangunan->markahTL4_MS = $request->markahTL4_MS;
        $kriteria_phjkr_bangunan->markahTL4_MR = $request->markahTL4_MR;
        $kriteria_phjkr_bangunan->markahTL4_MMV = $request->markahTL4_MMV;
        $kriteria_phjkr_bangunan->markahTL4_MSV = $request->markahTL4_MSV;
        $kriteria_phjkr_bangunan->markahTL4_ML = $request->markahTL4_ML;
        $kriteria_phjkr_bangunan->markahTL5_MMR = $request->markahTL5_MMR;
        $kriteria_phjkr_bangunan->markahTL5_MS = $request->markahTL5_MS;
        $kriteria_phjkr_bangunan->markahTL5_MR = $request->markahTL5_MR;
        $kriteria_phjkr_bangunan->markahTL5_MMV = $request->markahTL5_MMV;
        $kriteria_phjkr_bangunan->markahTL5_MSV = $request->markahTL5_MSV;
        $kriteria_phjkr_bangunan->markahTL5_ML = $request->markahTL5_ML;
        $kriteria_phjkr_bangunan->markahTL6_MMR = $request->markahTL6_MMR;
        $kriteria_phjkr_bangunan->markahTL6_MS = $request->markahTL6_MS;
        $kriteria_phjkr_bangunan->markahTL6_MR = $request->markahTL6_MR;
        $kriteria_phjkr_bangunan->markahTL6_MMV = $request->markahTL6_MMV;
        $kriteria_phjkr_bangunan->markahTL6_MSV = $request->markahTL6_MSV;
        $kriteria_phjkr_bangunan->markahTL6_ML = $request->markahTL6_ML;
        $kriteria_phjkr_bangunan->markahTL8_MMR = $request->markahTL8_MMR;
        $kriteria_phjkr_bangunan->markahTL8_MS = $request->markahTL8_MS;
        $kriteria_phjkr_bangunan->markahTL8_MR = $request->markahTL8_MR;
        $kriteria_phjkr_bangunan->markahTL8_MMV = $request->markahTL8_MMV;
        $kriteria_phjkr_bangunan->markahTL8_MSV = $request->markahTL8_MSV;
        $kriteria_phjkr_bangunan->markahTL8_ML = $request->markahTL8_ML;
        $kriteria_phjkr_bangunan->markahTL81_MMR = $request->markahTL81_MMR;
        $kriteria_phjkr_bangunan->markahTL81_MS = $request->markahTL81_MS;
        $kriteria_phjkr_bangunan->markahTL81_MR = $request->markahTL81_MR;
        $kriteria_phjkr_bangunan->markahTL81_MMV = $request->markahTL81_MMV;
        $kriteria_phjkr_bangunan->markahTL81_MSV = $request->markahTL81_MSV;
        $kriteria_phjkr_bangunan->markahTL81_ML = $request->markahTL81_ML;
        $kriteria_phjkr_bangunan->markahTL82_MMR = $request->markahTL82_MMR;
        $kriteria_phjkr_bangunan->markahTL82_MS = $request->markahTL82_MS;
        $kriteria_phjkr_bangunan->markahTL82_MR = $request->markahTL82_MR;
        $kriteria_phjkr_bangunan->markahTL82_MMV = $request->markahTL82_MMV;
        $kriteria_phjkr_bangunan->markahTL82_MSV = $request->markahTL82_MSV;
        $kriteria_phjkr_bangunan->markahTL82_ML = $request->markahTL82_ML;
        $kriteria_phjkr_bangunan->markahTL83_MMR = $request->markahTL83_MMR;
        $kriteria_phjkr_bangunan->markahTL83_MS = $request->markahTL83_MS;
        $kriteria_phjkr_bangunan->markahTL83_MR = $request->markahTL83_MR;
        $kriteria_phjkr_bangunan->markahTL83_MMV = $request->markahTL83_MMV;
        $kriteria_phjkr_bangunan->markahTL83_MSV = $request->markahTL83_MSV;
        $kriteria_phjkr_bangunan->markahTL83_ML = $request->markahTL83_ML;
        $kriteria_phjkr_bangunan->markahTL84_MMR = $request->markahTL84_MMR;
        $kriteria_phjkr_bangunan->markahTL84_MS = $request->markahTL84_MS;
        $kriteria_phjkr_bangunan->markahTL84_MR = $request->markahTL84_MR;
        $kriteria_phjkr_bangunan->markahTL84_MMV = $request->markahTL84_MMV;
        $kriteria_phjkr_bangunan->markahTL84_MSV = $request->markahTL84_MSV;
        $kriteria_phjkr_bangunan->markahTL84_ML = $request->markahTL84_ML;
        $kriteria_phjkr_bangunan->markahTL85_MMR = $request->markahTL85_MMR;
        $kriteria_phjkr_bangunan->markahTL85_MS = $request->markahTL85_MS;
        $kriteria_phjkr_bangunan->markahTL85_MR = $request->markahTL85_MR;
        $kriteria_phjkr_bangunan->markahTL85_MMV = $request->markahTL85_MMV;
        $kriteria_phjkr_bangunan->markahTL85_MSV = $request->markahTL85_MSV;
        $kriteria_phjkr_bangunan->markahTL85_ML = $request->markahTL85_ML;
        $kriteria_phjkr_bangunan->markahTL9_MMR = $request->markahTL9_MMR;
        $kriteria_phjkr_bangunan->markahTL9_MS = $request->markahTL9_MS;
        $kriteria_phjkr_bangunan->markahTL9_MR = $request->markahTL9_MR;
        $kriteria_phjkr_bangunan->markahTL9_MMV = $request->markahTL9_MMV;
        $kriteria_phjkr_bangunan->markahTL9_MSV = $request->markahTL9_MSV;
        $kriteria_phjkr_bangunan->markahTL9_ML = $request->markahTL9_ML;
        $kriteria_phjkr_bangunan->markahTL91_MMR = $request->markahTL91_MMR;
        $kriteria_phjkr_bangunan->markahTL91_MS = $request->markahTL91_MS;
        $kriteria_phjkr_bangunan->markahTL91_MR = $request->markahTL91_MR;
        $kriteria_phjkr_bangunan->markahTL91_MMV = $request->markahTL91_MMV;
        $kriteria_phjkr_bangunan->markahTL91_MSV = $request->markahTL91_MSV;
        $kriteria_phjkr_bangunan->markahTL91_ML = $request->markahTL91_ML;
        $kriteria_phjkr_bangunan->markahTL92_MMR = $request->markahTL92_MMR;
        $kriteria_phjkr_bangunan->markahTL92_MS = $request->markahTL92_MS;
        $kriteria_phjkr_bangunan->markahTL92_MR = $request->markahTL92_MR;
        $kriteria_phjkr_bangunan->markahTL92_MMV = $request->markahTL92_MMV;
        $kriteria_phjkr_bangunan->markahTL92_MSV = $request->markahTL92_MSV;
        $kriteria_phjkr_bangunan->markahTL92_ML = $request->markahTL92_ML;

        $kriteria_phjkr_bangunan->markahKT1_MMR = $request->markahKT1_MMR;
        $kriteria_phjkr_bangunan->markahKT1_MS = $request->markahKT1_MS;
        $kriteria_phjkr_bangunan->markahKT1_MR = $request->markahKT1_MR;
        $kriteria_phjkr_bangunan->markahKT1_MMV = $request->markahKT1_MMV;
        $kriteria_phjkr_bangunan->markahKT1_MSV = $request->markahKT1_MSV;
        $kriteria_phjkr_bangunan->markahKT1_ML = $request->markahKT1_ML;
        $kriteria_phjkr_bangunan->markahKT2_MMR = $request->markahKT2_MMR;
        $kriteria_phjkr_bangunan->markahKT2_MS = $request->markahKT2_MS;
        $kriteria_phjkr_bangunan->markahKT2_MR = $request->markahKT2_MR;
        $kriteria_phjkr_bangunan->markahKT2_MMV = $request->markahKT2_MMV;
        $kriteria_phjkr_bangunan->markahKT2_MSV = $request->markahKT2_MSV;
        $kriteria_phjkr_bangunan->markahKT2_ML = $request->markahKT2_ML;
        $kriteria_phjkr_bangunan->markahKT21_MMR = $request->markahKT21_MMR;
        $kriteria_phjkr_bangunan->markahKT21_MS = $request->markahKT21_MS;
        $kriteria_phjkr_bangunan->markahKT21_MR = $request->markahKT21_MR;
        $kriteria_phjkr_bangunan->markahKT21_MMV = $request->markahKT21_MMV;
        $kriteria_phjkr_bangunan->markahKT21_MSV = $request->markahKT21_MSV;
        $kriteria_phjkr_bangunan->markahKT21_ML = $request->markahKT21_ML;
        $kriteria_phjkr_bangunan->markahKT22_MMR = $request->markahKT22_MMR;
        $kriteria_phjkr_bangunan->markahKT22_MS = $request->markahKT22_MS;
        $kriteria_phjkr_bangunan->markahKT22_MR = $request->markahKT22_MR;
        $kriteria_phjkr_bangunan->markahKT22_MMV = $request->markahKT22_MMV;
        $kriteria_phjkr_bangunan->markahKT22_MSV = $request->markahKT22_MSV;
        $kriteria_phjkr_bangunan->markahKT22_ML = $request->markahKT22_ML;
        $kriteria_phjkr_bangunan->markahKT3_MMR = $request->markahKT3_MMR;
        $kriteria_phjkr_bangunan->markahKT3_MS = $request->markahKT3_MS;
        $kriteria_phjkr_bangunan->markahKT3_MR = $request->markahKT3_MR;
        $kriteria_phjkr_bangunan->markahKT3_MMV = $request->markahKT3_MMV;
        $kriteria_phjkr_bangunan->markahKT3_MSV = $request->markahKT3_MSV;
        $kriteria_phjkr_bangunan->markahKT3_ML = $request->markahKT3_ML;
        $kriteria_phjkr_bangunan->markahKT31_MMR = $request->markahKT31_MMR;
        $kriteria_phjkr_bangunan->markahKT31_MS = $request->markahKT31_MS;
        $kriteria_phjkr_bangunan->markahKT31_MR = $request->markahKT31_MR;
        $kriteria_phjkr_bangunan->markahKT31_MMV = $request->markahKT31_MMV;
        $kriteria_phjkr_bangunan->markahKT31_MSV = $request->markahKT31_MSV;
        $kriteria_phjkr_bangunan->markahKT31_ML = $request->markahKT31_ML;
        $kriteria_phjkr_bangunan->markahKT32_MMR = $request->markahKT32_MMR;
        $kriteria_phjkr_bangunan->markahKT32_MS = $request->markahKT32_MS;
        $kriteria_phjkr_bangunan->markahKT32_MR = $request->markahKT32_MR;
        $kriteria_phjkr_bangunan->markahKT32_MMV = $request->markahKT32_MMV;
        $kriteria_phjkr_bangunan->markahKT32_MSV = $request->markahKT32_MSV;
        $kriteria_phjkr_bangunan->markahKT32_ML = $request->markahKT32_ML;
        $kriteria_phjkr_bangunan->markahKT4_MMR = $request->markahKT4_MMR;
        $kriteria_phjkr_bangunan->markahKT4_MS = $request->markahKT4_MS;
        $kriteria_phjkr_bangunan->markahKT4_MR = $request->markahKT4_MR;
        $kriteria_phjkr_bangunan->markahKT4_MMV = $request->markahKT4_MMV;
        $kriteria_phjkr_bangunan->markahKT4_MSV = $request->markahKT4_MSV;
        $kriteria_phjkr_bangunan->markahKT4_ML = $request->markahKT4_ML;
        $kriteria_phjkr_bangunan->markahKT5_MMR = $request->markahKT5_MMR;
        $kriteria_phjkr_bangunan->markahKT5_MS = $request->markahKT5_MS;
        $kriteria_phjkr_bangunan->markahKT5_MR = $request->markahKT5_MR;
        $kriteria_phjkr_bangunan->markahKT5_MMV = $request->markahKT5_MMV;
        $kriteria_phjkr_bangunan->markahKT5_MSV = $request->markahKT5_MSV;
        $kriteria_phjkr_bangunan->markahKT5_ML = $request->markahKT5_ML;
        $kriteria_phjkr_bangunan->markahKT52_MMR = $request->markahKT52_MMR;
        $kriteria_phjkr_bangunan->markahKT52_MS = $request->markahKT52_MS;
        $kriteria_phjkr_bangunan->markahKT52_MR = $request->markahKT52_MR;
        $kriteria_phjkr_bangunan->markahKT52_MMV = $request->markahKT52_MMV;
        $kriteria_phjkr_bangunan->markahKT52_MSV = $request->markahKT52_MSV;
        $kriteria_phjkr_bangunan->markahKT52_ML = $request->markahKT52_ML;
        $kriteria_phjkr_bangunan->markahKT8_MMR = $request->markahKT8_MMR;
        $kriteria_phjkr_bangunan->markahKT8_MS = $request->markahKT8_MS;
        $kriteria_phjkr_bangunan->markahKT8_MR = $request->markahKT8_MR;
        $kriteria_phjkr_bangunan->markahKT8_MMV = $request->markahKT8_MMV;
        $kriteria_phjkr_bangunan->markahKT8_MSV = $request->markahKT8_MSV;
        $kriteria_phjkr_bangunan->markahKT8_ML = $request->markahKT8_ML;
        $kriteria_phjkr_bangunan->markahKT11_MMR = $request->markahKT11_MMR;
        $kriteria_phjkr_bangunan->markahKT11_MS = $request->markahKT11_MS;
        $kriteria_phjkr_bangunan->markahKT11_MR = $request->markahKT11_MR;
        $kriteria_phjkr_bangunan->markahKT11_MMV = $request->markahKT11_MMV;
        $kriteria_phjkr_bangunan->markahKT11_MSV = $request->markahKT11_MSV;
        $kriteria_phjkr_bangunan->markahKT11_ML = $request->markahKT11_ML;
        $kriteria_phjkr_bangunan->markahSB1_MMR = $request->markahSB1_MMR;
        $kriteria_phjkr_bangunan->markahSB1_MS = $request->markahSB1_MS;
        $kriteria_phjkr_bangunan->markahSB1_MR = $request->markahSB1_MR;
        $kriteria_phjkr_bangunan->markahSB1_MMV = $request->markahSB1_MMV;
        $kriteria_phjkr_bangunan->markahSB1_MSV = $request->markahSB1_MSV;
        $kriteria_phjkr_bangunan->markahSB1_ML = $request->markahSB1_ML;
        $kriteria_phjkr_bangunan->markahSB2_MMR = $request->markahSB2_MMR;
        $kriteria_phjkr_bangunan->markahSB2_MS = $request->markahSB2_MS;
        $kriteria_phjkr_bangunan->markahSB2_MR = $request->markahSB2_MR;
        $kriteria_phjkr_bangunan->markahSB2_MMV = $request->markahSB2_MMV;
        $kriteria_phjkr_bangunan->markahSB2_MSV = $request->markahSB2_MSV;
        $kriteria_phjkr_bangunan->markahSB2_ML = $request->markahSB2_ML;
        $kriteria_phjkr_bangunan->markahSB3_MMR = $request->markahSB3_MMR;
        $kriteria_phjkr_bangunan->markahSB3_MS = $request->markahSB3_MS;
        $kriteria_phjkr_bangunan->markahSB3_MR = $request->markahSB3_MR;
        $kriteria_phjkr_bangunan->markahSB3_MMV = $request->markahSB3_MMV;
        $kriteria_phjkr_bangunan->markahSB3_MSV = $request->markahSB3_MSV;
        $kriteria_phjkr_bangunan->markahSB3_ML = $request->markahSB3_ML;
        $kriteria_phjkr_bangunan->markahSB4_MMR = $request->markahSB4_MMR;
        $kriteria_phjkr_bangunan->markahSB4_MS = $request->markahSB4_MS;
        $kriteria_phjkr_bangunan->markahSB4_MR = $request->markahSB4_MR;
        $kriteria_phjkr_bangunan->markahSB4_MMV = $request->markahSB4_MMV;
        $kriteria_phjkr_bangunan->markahSB4_MSV = $request->markahSB4_MSV;
        $kriteria_phjkr_bangunan->markahSB4_ML = $request->markahSB4_ML;
        $kriteria_phjkr_bangunan->markahPA1_MMR = $request->markahPA1_MMR;
        $kriteria_phjkr_bangunan->markahPA1_MS = $request->markahPA1_MS;
        $kriteria_phjkr_bangunan->markahPA1_MR = $request->markahPA1_MR;
        $kriteria_phjkr_bangunan->markahPA1_MMV = $request->markahPA1_MMV;
        $kriteria_phjkr_bangunan->markahPA1_MSV = $request->markahPA1_MSV;
        $kriteria_phjkr_bangunan->markahPA1_ML = $request->markahPA1_ML;
        $kriteria_phjkr_bangunan->markahPA2_MMR = $request->markahPA2_MMR;
        $kriteria_phjkr_bangunan->markahPA2_MS = $request->markahPA2_MS;
        $kriteria_phjkr_bangunan->markahPA2_MR = $request->markahPA2_MR;
        $kriteria_phjkr_bangunan->markahPA2_MMV = $request->markahPA2_MMV;
        $kriteria_phjkr_bangunan->markahPA2_MSV = $request->markahPA2_MSV;
        $kriteria_phjkr_bangunan->markahPA2_ML = $request->markahPA2_ML;
        $kriteria_phjkr_bangunan->markahPA32_MMR = $request->markahPA32_MMR;
        $kriteria_phjkr_bangunan->markahPA32_MS = $request->markahPA32_MS;
        $kriteria_phjkr_bangunan->markahPA32_MR = $request->markahPA32_MR;
        $kriteria_phjkr_bangunan->markahPA32_MMV = $request->markahPA32_MMV;
        $kriteria_phjkr_bangunan->markahPA32_MSV = $request->markahPA32_MSV;
        $kriteria_phjkr_bangunan->markahPA32_ML = $request->markahPA32_ML;
        $kriteria_phjkr_bangunan->markahPA3_MMR = $request->markahPA3_MMR;
        $kriteria_phjkr_bangunan->markahPA3_MS = $request->markahPA3_MS;
        $kriteria_phjkr_bangunan->markahPA3_MR = $request->markahPA3_MR;
        $kriteria_phjkr_bangunan->markahPA3_MMV = $request->markahPA3_MMV;
        $kriteria_phjkr_bangunan->markahPA3_MSV = $request->markahPA3_MSV;
        $kriteria_phjkr_bangunan->markahPA3_ML = $request->markahPA3_ML;
        $kriteria_phjkr_bangunan->markahPD2_MMR = $request->markahPD2_MMR;
        $kriteria_phjkr_bangunan->markahPD2_MS = $request->markahPD2_MS;
        $kriteria_phjkr_bangunan->markahPD2_MR = $request->markahPD2_MR;
        $kriteria_phjkr_bangunan->markahPD2_MMV = $request->markahPD2_MMV;
        $kriteria_phjkr_bangunan->markahPD2_MSV = $request->markahPD2_MSV;
        $kriteria_phjkr_bangunan->markahPD2_ML = $request->markahPD2_ML;
        $kriteria_phjkr_bangunan->markahPD24_MMR = $request->markahPD24_MMR;
        $kriteria_phjkr_bangunan->markahPD24_MS = $request->markahPD24_MS;
        $kriteria_phjkr_bangunan->markahPD24_MR = $request->markahPD24_MR;
        $kriteria_phjkr_bangunan->markahPD24_MMV = $request->markahPD24_MMV;
        $kriteria_phjkr_bangunan->markahPD24_MSV = $request->markahPD24_MSV;
        $kriteria_phjkr_bangunan->markahPD24_ML = $request->markahPD24_ML;
        $kriteria_phjkr_bangunan->markahPD25_MMR = $request->markahPD25_MMR;
        $kriteria_phjkr_bangunan->markahPD25_MS = $request->markahPD25_MS;
        $kriteria_phjkr_bangunan->markahPD25_MR = $request->markahPD25_MR;
        $kriteria_phjkr_bangunan->markahPD25_MMV = $request->markahPD25_MMV;
        $kriteria_phjkr_bangunan->markahPD25_MSV = $request->markahPD25_MSV;
        $kriteria_phjkr_bangunan->markahPD25_ML = $request->markahPD25_ML;
        $kriteria_phjkr_bangunan->markahPD3_MMR = $request->markahPD3_MMR;
        $kriteria_phjkr_bangunan->markahPD3_MS = $request->markahPD3_MS;
        $kriteria_phjkr_bangunan->markahPD3_MR = $request->markahPD3_MR;
        $kriteria_phjkr_bangunan->markahPD3_MMV = $request->markahPD3_MMV;
        $kriteria_phjkr_bangunan->markahPD3_MSV = $request->markahPD3_MSV;
        $kriteria_phjkr_bangunan->markahPD3_ML = $request->markahPD3_ML;
        $kriteria_phjkr_bangunan->markahPD31_MMR = $request->markahPD31_MMR;
        $kriteria_phjkr_bangunan->markahPD31_MS = $request->markahPD31_MS;
        $kriteria_phjkr_bangunan->markahPD31_MR = $request->markahPD31_MR;
        $kriteria_phjkr_bangunan->markahPD31_MMV = $request->markahPD31_MMV;
        $kriteria_phjkr_bangunan->markahPD31_MSV = $request->markahPD31_MSV;
        $kriteria_phjkr_bangunan->markahPD31_ML = $request->markahPD31_ML;
        $kriteria_phjkr_bangunan->markahPD32_MMR = $request->markahPD32_MMR;
        $kriteria_phjkr_bangunan->markahPD32_MS = $request->markahPD32_MS;
        $kriteria_phjkr_bangunan->markahPD32_MR = $request->markahPD32_MR;
        $kriteria_phjkr_bangunan->markahPD32_MMV = $request->markahPD32_MMV;
        $kriteria_phjkr_bangunan->markahPD32_MSV = $request->markahPD32_MSV;
        $kriteria_phjkr_bangunan->markahPD32_ML = $request->markahPD32_ML;
        $kriteria_phjkr_bangunan->markahPD33_MMR = $request->markahPD33_MMR;
        $kriteria_phjkr_bangunan->markahPD33_MS = $request->markahPD33_MS;
        $kriteria_phjkr_bangunan->markahPD33_MR = $request->markahPD33_MR;
        $kriteria_phjkr_bangunan->markahPD33_MMV = $request->markahPD33_MMV;
        $kriteria_phjkr_bangunan->markahPD33_MSV = $request->markahPD33_MSV;
        $kriteria_phjkr_bangunan->markahPD33_ML = $request->markahPD33_ML;
        $kriteria_phjkr_bangunan->markahPD34_MMR = $request->markahPD34_MMR;
        $kriteria_phjkr_bangunan->markahPD34_MS = $request->markahPD34_MS;
        $kriteria_phjkr_bangunan->markahPD34_MR = $request->markahPD34_MR;
        $kriteria_phjkr_bangunan->markahPD34_MMV = $request->markahPD34_MMV;
        $kriteria_phjkr_bangunan->markahPD34_MSV = $request->markahPD34_MSV;
        $kriteria_phjkr_bangunan->markahPD34_ML = $request->markahPD34_ML;
        $kriteria_phjkr_bangunan->markahPD8_MMR = $request->markahPD8_MMR;
        $kriteria_phjkr_bangunan->markahPD8_MS = $request->markahPD8_MS;
        $kriteria_phjkr_bangunan->markahPD8_MR = $request->markahPD8_MR;
        $kriteria_phjkr_bangunan->markahPD8_MMV = $request->markahPD8_MMV;
        $kriteria_phjkr_bangunan->markahPD8_MSV = $request->markahPD8_MSV;
        $kriteria_phjkr_bangunan->markahPD8_ML = $request->markahPD8_ML;
        $kriteria_phjkr_bangunan->markahPD10_MMR = $request->markahPD10_MMR;
        $kriteria_phjkr_bangunan->markahPD10_MS = $request->markahPD10_MS;
        $kriteria_phjkr_bangunan->markahPD10_MR = $request->markahPD10_MR;
        $kriteria_phjkr_bangunan->markahPD10_MMV = $request->markahPD10_MMV;
        $kriteria_phjkr_bangunan->markahPD10_MSV = $request->markahPD10_MSV;
        $kriteria_phjkr_bangunan->markahPD10_ML = $request->markahPD10_ML;
        $kriteria_phjkr_bangunan->markahFL1_MMR = $request->markahFL1_MMR;
        $kriteria_phjkr_bangunan->markahFL1_MS = $request->markahFL1_MS;
        $kriteria_phjkr_bangunan->markahFL1_MR = $request->markahFL1_MR;
        $kriteria_phjkr_bangunan->markahFL1_MMV = $request->markahFL1_MMV;
        $kriteria_phjkr_bangunan->markahFL1_MSV = $request->markahFL1_MSV;
        $kriteria_phjkr_bangunan->markahFL1_ML = $request->markahFL1_ML;
        $kriteria_phjkr_bangunan->markahFL2_MMR = $request->markahFL2_MMR;
        $kriteria_phjkr_bangunan->markahFL2_MS = $request->markahFL2_MS;
        $kriteria_phjkr_bangunan->markahFL2_MR =$request->markahFL2_MR;
        $kriteria_phjkr_bangunan->markahFL2_MMV = $request->markahFL2_MMV;
        $kriteria_phjkr_bangunan->markahFL2_MSV = $request->markahFL2_MSV;
        $kriteria_phjkr_bangunan->markahFL2_ML = $request->markahFL2_ML;
        $kriteria_phjkr_bangunan->markahFL21_MMR = $request->markahFL21_MMR;
        $kriteria_phjkr_bangunan->markahFL21_MS = $request->markahFL21_MS;
        $kriteria_phjkr_bangunan->markahFL21_MR = $request->markahFL21_MR;
        $kriteria_phjkr_bangunan->markahFL21_MMV = $request->markahFL21_MMV;
        $kriteria_phjkr_bangunan->markahFL21_MSV = $request->markahFL21_MSV;
        $kriteria_phjkr_bangunan->markahFL21_ML = $request->markahFL21_ML;
        $kriteria_phjkr_bangunan->markahFL22_MMR = $request->markahFL22_MMR;
        $kriteria_phjkr_bangunan->markahFL22_MS = $request->markahFL22_MS;
        $kriteria_phjkr_bangunan->markahFL22_MR = $request->markahFL22_MR;
        $kriteria_phjkr_bangunan->markahFL22_MMV = $request->markahFL22_MMV;
        $kriteria_phjkr_bangunan->markahFL22_MSV = $request->markahFL22_MSV;
        $kriteria_phjkr_bangunan->markahFL22_ML = $request->markahFL22_ML;
        $kriteria_phjkr_bangunan->markahFL23_MMR = $request->markahFL23_MMR;
        $kriteria_phjkr_bangunan->markahFL23_MS = $request->markahFL23_MS;
        $kriteria_phjkr_bangunan->markahFL23_MR = $request->markahFL23_MR;
        $kriteria_phjkr_bangunan->markahFL23_MMV = $request->markahFL23_MMV;
        $kriteria_phjkr_bangunan->markahFL23_MSV = $request->markahFL23_MSV;
        $kriteria_phjkr_bangunan->markahFL23_ML = $request->markahFL23_ML;
        $kriteria_phjkr_bangunan->markahFL3_MMR = $request->markahFL3_MMR;
        $kriteria_phjkr_bangunan->markahFL3_MS = $request->markahFL3_MS;
        $kriteria_phjkr_bangunan->markahFL3_MR = $request->markahFL3_MR;
        $kriteria_phjkr_bangunan->markahFL3_MMV = $request->markahFL3_MMV;
        $kriteria_phjkr_bangunan->markahFL3_MSV = $request->markahFL3_MSV;
        $kriteria_phjkr_bangunan->markahFL3_ML = $request->markahFL3_ML;
        $kriteria_phjkr_bangunan->markahFL31_MMR = $request->markahFL31_MMR;
        $kriteria_phjkr_bangunan->markahFL31_MS = $request->markahFL31_MS;
        $kriteria_phjkr_bangunan->markahFL31_MR = $request->markahFL31_MR;
        $kriteria_phjkr_bangunan->markahFL31_MMV = $request->markahFL31_MMV;
        $kriteria_phjkr_bangunan->markahFL31_MSV = $request->markahFL31_MSV;
        $kriteria_phjkr_bangunan->markahFL31_ML = $request->markahFL31_ML;
        $kriteria_phjkr_bangunan->markahFL32_MMR = $request->markahFL32_MMR;
        $kriteria_phjkr_bangunan->markahFL32_MS = $request->markahFL32_MS;
        $kriteria_phjkr_bangunan->markahFL32_MR = $request->markahFL32_MR;
        $kriteria_phjkr_bangunan->markahFL32_MMV = $request->markahFL32_MMV;
        $kriteria_phjkr_bangunan->markahFL32_MSV = $request->markahFL32_MSV;
        $kriteria_phjkr_bangunan->markahFL32_ML = $request->markahFL32_ML;
        $kriteria_phjkr_bangunan->markahFL33_MMR = $request->markahFL33_MMR;
        $kriteria_phjkr_bangunan->markahFL33_MS = $request->markahFL33_MS;
        $kriteria_phjkr_bangunan->markahFL33_MR = $request->markahFL33_MR;
        $kriteria_phjkr_bangunan->markahFL33_MMV = $request->markahFL33_MMV;
        $kriteria_phjkr_bangunan->markahFL33_MSV = $request->markahFL33_MSV;
        $kriteria_phjkr_bangunan->markahFL33_ML = $request->markahFL33_ML;
        $kriteria_phjkr_bangunan->markahFL34_MMR = $request->markahFL34_MMR;
        $kriteria_phjkr_bangunan->markahFL34_MS = $request->markahFL34_MS;
        $kriteria_phjkr_bangunan->markahFL34_MR = $request->markahFL34_MR;
        $kriteria_phjkr_bangunan->markahFL34_MMV = $request->markahFL34_MMV;
        $kriteria_phjkr_bangunan->markahFL34_MSV = $request->markahFL34_MSV;
        $kriteria_phjkr_bangunan->markahFL34_ML = $request->markahFL34_ML;
        $kriteria_phjkr_bangunan->markahIN1_MMR = $request->markahIN1_MMR;
        $kriteria_phjkr_bangunan->markahIN1_MS = $request->markahIN1_MS;
        $kriteria_phjkr_bangunan->markahIN1_MR = $request->markahIN1_MR;
        $kriteria_phjkr_bangunan->markahIN1_MMV = $request-> markahIN1_MMV;
        $kriteria_phjkr_bangunan->markahIN1_MSV = $request->markahIN1_MSV;
        $kriteria_phjkr_bangunan->markahIN1_ML = $request->markahIN1_ML;

        $kriteria_phjkr_bangunan->save();

        $projeks = new Projek;
        

        if($request->hasFile('dokumenSokongan')){
            $projeks = $request->file('dokumenSokongan')->store('dokumenSokongan');
            // $projeks->dokumenSokongan = $projeks;
        }

        $projeks->dokumenSokongan = $request->input('dokumenSokongan');
        $projeks->save();

        // simpan skor penilaian
        return redirect('/penilaian_reka_bentuk_bangunan/skor_penilaian');
    }

    // Dokumen Sokongan
    // public function dokumen_sokongan(Request $request, $id)
    // {
    //     // $dokumen = new Projek;

    //     // if($request->hasFile('dokumenSokongan')){
    //     //     $dokumen = $request->file('dokumenSokongan')->store('dokumenSokongan');
    //     //     //  $dokumen->input('dokumenSokongan') = $dokumen;
    //     // }

    //     // $dokumen->dokumenSokongan = $request->input('dokumenSokongan');
    //     // $dokumen->save();

    //     return redirect('/penilaian_reka_bentuk_bangunan/skor_penilaian');

    // }


    #Sekreatariat
    // pengesahan penilaian
    public function pengesahan_penilaian()
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();
        $projeks = Projek::all();

        // papar mcm index tapi ada button utk pengesahan
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.index',
        compact('kriteria_phjkr_bangunan'), compact('projeks'));
    }
    public function papar_pengesahan_penilaian($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);
        // papar form pengesahan penilaian with id projek 
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.show',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function simpan_pengesahan_penilaian(Request $request, $id)
    {
        
        alert()->success('Penilaian Disahkan.', 'Berjaya');

        // simpan pengesahan penilaian
        return redirect('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian');
    }

    // Sekretariat 
    // Semakan Rawak Penilaian Reka Bentuk Bangunan

    public function semakan_rawak()
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();

        return view('modul.penilaian_reka_bentuk_bangunan.semakan_rawak.index', compact('kriteria_phjkr_bangunan'));

    }
    public function semakan_rawak_form($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);

        return view('modul.penilaian_reka_bentuk_bangunan.semakan_rawak.show',[
            'kriteria_phjkr_bangunan'=> $kriteria_phjkr_bangunan
        ]
    );

    }
    public function simpan_semakan_rawak(Request $request, $id)
    {
        // $dokumen = new Projek;

        // if($request->hasFile('dokumenSokongan')){
        //     $dokumen = $request->file('dokumenSokongan')->store('dokumenSokongan');
        //     $dokumen->input('dokumenSokongan') = $dokumen;
        // }

        // $dokumen->dokumenSokongan = $request->input('dokumenSokongan');
        // $dokumen->save();

        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan;
        
        // JUMLAH MARKAH 
        $kriteria_phjkr_bangunan->markahMMR = $request->markahMMR;
        $kriteria_phjkr_bangunan->markahMS = $request->markahTOTAL_MS + $request->markahTOTAL_MR;
        $kriteria_phjkr_bangunan->markahMR = $request->markahTOTAL_MR + $request->markahTOTAL_MR;
        $kriteria_phjkr_bangunan->markahMMV = $request->markahMMV;
        $kriteria_phjkr_bangunan->markahMSV = $request->markahMSV;
        $kriteria_phjkr_bangunan->markahML = $request->markahML;


        return redirect('/penilaian_reka_bentuk_bangunan/semakan_rawak');

    }

    // Ketua Pasukan ATAU Penolong Ketua Pasukan
    // Muat Turun Sijil Penilaian Reka Bentuk Bangunan

    public function muat_turun_sijil()
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();

        return view('modul.penilaian_reka_bentuk_bangunan.muat_turun_sijil.index', compact('kriteria_phjkr_bangunan'));

    }
    public function muat_turun_sijil_form($id)
    {

        //letak code upload file
        // if($request->hasFile('print_sijil')){
        //     $apaapa = $request->file('print_sijil')->store('print_sijil');
        //     $apapa -> print_naziran = $apa-apa;
        // }
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);

        
        return view('modul.penilaian_reka_bentuk_bangunan.muat_turun_sijil.show',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);

    }
    public function simpan_muat_turun_sijil(Request $request, $id)
    {
        return redirect('/penilaian_reka_bentuk_bangunan/muat_turun_sijil');

    }

    #sekretariat JANA SIJIL
    public function jana_sijil()
    {

        return view('modul.penilaian_reka_bentuk_bangunan.jana_sijil.index');
    }

    
}