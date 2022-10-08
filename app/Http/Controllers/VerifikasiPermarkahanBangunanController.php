<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVerifikasiPermarkahanBangunanRequest;
use App\Http\Requests\UpdateVerifikasiPermarkahanBangunanRequest;
use App\Models\Projek;
use App\Models\PemudahCara;
use App\Models\KriteriaPhjkrBangunan;
use App\Models\VerifikasiPermarkahanBangunan;
use Illuminate\Http\Request;

class VerifikasiPermarkahanBangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projeks = Projek::all();
        //paparan senarai projek
        return view('modul.verifikasi_permarkahan_bangunan.index',[
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
     * @param  \App\Http\Requests\StoreVerifikasiPermarkahanBangunanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVerifikasiPermarkahanBangunanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VerifikasiPermarkahanBangunan  $verifikasiPermarkahanBangunan
     * @return \Illuminate\Http\Response
     */
    public function show(VerifikasiPermarkahanBangunan $verifikasiPermarkahanBangunan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VerifikasiPermarkahanBangunan  $verifikasiPermarkahanBangunan
     * @return \Illuminate\Http\Response
     */
    public function edit(VerifikasiPermarkahanBangunan $verifikasiPermarkahanBangunan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVerifikasiPermarkahanBangunanRequest  $request
     * @param  \App\Models\VerifikasiPermarkahanBangunan  $verifikasiPermarkahanBangunan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVerifikasiPermarkahanBangunanRequest $request, VerifikasiPermarkahanBangunan $verifikasiPermarkahanBangunan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VerifikasiPermarkahanBangunan  $verifikasiPermarkahanBangunan
     * @return \Illuminate\Http\Response
     */
    public function destroy(VerifikasiPermarkahanBangunan $verifikasiPermarkahanBangunan)
    {
        //
    }

    #pengesahan penilaian verifikasi bangunan
    public function pengesahan_penilaian()
    {

        // $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();
        $projeks = Projek::all();

        // $total = [];
        // $calc1 = 3*3;
        // $total['pertama'] = $calc1; 
        // $total['kedua'] = $calc1; 

        

        // papar mcm index tapi ada button utk pengesahan
        return view('modul.verifikasi_permarkahan_bangunan.pengesahan_penilaian.index',[
            'projeks'=>$projeks,
            // 'total'=>$total
        ]);
    }

    public function papar_pengesahan_penilaian($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);
        // papar form pengesahan penilaian with id projek 
        return view('modul.verifikasi_permarkahan_bangunan.pengesahan_penilaian.show',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function simpan_pengesahan_penilaian(Request $request, $id)
    {
        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan($request->all());

        $kriteria_phjkr_bangunan->save();

        alert()->success('Penilaian Disahkan.', 'Berjaya');

        // simpan pengesahan penilaian
        return redirect('/verifikasi_permarkahan_bangunan/pengesahan_penilaian');
    }

    #pemudahcara
    // public function papar_projek()
    // {
    //     $projeks = Projek::all();
    //     $projeks = new Projek;
    //     $pemudah_cara = new PemudahCara;
        

    //     // papar table projek with button melantik pemudah cara
    //     // return view('modul.penilaian_reka_bentuk_bangunan.pemudah_cara.index');

    //     return view('modul.verifikasi_permarkahan_bangunan.pemudah_cara.index',[
    //         'projeks'=>$projeks,
    //         'pemudah_cara'=>$pemudah_cara
    //     ]);
    // }
    
    public function pemudah_cara($id)
    {
        $pemudah_cara = new PemudahCara;
        $projeks = new Projek;

        return view('modul.verifikasi_permarkahan_bangunan.pemudah_cara.create',[
            'pemudah_cara'=>$pemudah_cara,
            'projeks'=>$projeks
        ]);
    }

    public function melantik_pemudah_cara(Request $request, $id)
    {
        //submit form melantik pemudah cara
        $pemudah_cara = new PemudahCara;
        $projeks = new Projek;

        $pemudah_cara->nama = $request->input('nama');
        $pemudah_cara->syarikat_cawangan = $request->input('syarikat_cawangan');
        $pemudah_cara->no_tel = $request->input('no_tel');
        $pemudah_cara->no_fax = $request->input('no_fax');
        $pemudah_cara->email = $request->input('email');
        $pemudah_cara->disiplin = $request->input('disiplin');
        $pemudah_cara->kategori = $request->kategori;
        alert()->success('Pemudah cara berjaya didaftar.', 'Berjaya');
        $pemudah_cara->save();

        $projeks->namaProjek = $request->input('namaProjek');
        $projeks->save();

        // // submit form melantik pemudah cara
        return redirect('/verifikasi_permarkahan_bangunan/pemudah_cara/create');
    }

    #semakan rawak verifikasi permarkahan bangunan
    #sekretariat
    public function semakan_rawak()
    {
        $projeks = Projek::all();

        return view('modul.verifikasi_permarkahan_bangunan.semakan_rawak.index',[
            'projeks'=>$projeks,
        ]);

    }
    public function papar_semakan_rawak($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);

        return view('modul.verifikasi_permarkahan_bangunan.semakan_rawak.show',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);

    }
    public function simpan_semakan_rawak(Request $request, $id)
    {
        alert()->success('Semakan Rawak Disahkan.', 'Berjaya');

        return redirect('/verifikasi_permarkahan_bangunan/semakan_rawak');
    }

    #pemudahcara
    public function skor_penilaian()
    {
        $projeks = Projek::all();

        return view('modul.verifikasi_permarkahan_bangunan.skor_penilaian.index',[
            'projeks'=>$projeks
        ]);

    }

    public function papar_skor_penilaian($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);

        return view('modul.verifikasi_permarkahan_bangunan.skor_penilaian.show',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function simpan_skor_penilaian(Request $request, $id)
    {
        $markah_TL_total = $request->markahTL1_MSV + $request->markahTL2_MSV
        + $request->markahTL3_MSV + $request->markahTL32_MSV + $request->markahTL4_MSV + $request->markahTL5_MSV + $request->markahTL6_MSV
        + $request->markahTL81_MSV + $request->markahTL82_MSV + $request->markahTL83_MSV + $request->markahTL84_MSV + $request->markahTL85_MSV + $request->markahTL91_MSV 
        + $request->markahTL92_MSV;

        $markah_KT_total = $request->markahKT1_MSV + $request->markahKT2_MSV
        + $request->markahKT21_MSV + $request->markahKT22_MSV + $request->markahKT3_MSV + $request->markahKT31_MSV + $request->markahKT32_MSV
        + $request->markahKT4_MSV + $request->markahKT52_MSV + $request->markahKT8_MSV + $request->markahKT11_MSV;

        $markah_SB_total = $request->markahSB1_MSV + $request->markahSB2_MSV
        + $request->markahSB3_MSV + $request->markahSB4_MSV;

        $markah_PA_total = $request->markahPA1_MSV + $request->markahPA2_MSV
        + $request->markahPA3_MSV + $request->markahPA32_MSV;

        $markah_PD_total = $request->markahPD24_MSV + $request->markahPD25_MSV
        + $request->markahPD31_MSV + $request->markahPD32_MSV + $request->markahPD33_MSV + $request->markahPD34_MSV + $request->markahPD8_MSV
        + $request->markahPD10_MSV;

        $markah_FL_total = $request->markahFL1_MSV + $request->markahFL2_MSV
        + $request->markahFL21_MSV + $request->markahFL22_MSV + $request->markahFL23_MSV + $request->markahFL3_MSV + $request->markahFL31_MSV
        + $request->markahFL32_MSV + $request->markahFL33_MSV + $request->markahFL34_MSV;

        $markah_IN_total = $request->markahIN1_MSV;

        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan($request->all());
        $kriteria_phjkr_bangunan->markahTOTAL_TL_MSV = $markah_TL_total;
        $kriteria_phjkr_bangunan->markahTOTAL_KT_MSV = $markah_KT_total;
        $kriteria_phjkr_bangunan->markahTOTAL_SB_MSV = $markah_SB_total;
        $kriteria_phjkr_bangunan->markahTOTAL_PA_MSV = $markah_PA_total;
        $kriteria_phjkr_bangunan->markahTOTAL_PD_MSV = $markah_PD_total;
        $kriteria_phjkr_bangunan->markahTOTAL_FL_MSV = $markah_FL_total;
        $kriteria_phjkr_bangunan->markahTOTAL_IN_MSV = $markah_IN_total;
        $kriteria_phjkr_bangunan->save();

        // $kriteria_phjkr_bangunan->markahMSV = $request->markahTOTAL_TL_MSV
        // + $request->markahTOTAL_KT_MSV
        // + $request->markahTOTAL_SB_MSV
        // + $request->markahTOTAL_PA_MSV
        // + $request->markahTOTAL_PD_MSV
        // + $request->markahTOTAL_FL_MSV
        // + $request->markahTOTAL_IN_MSV;

        // $kriteria_phjkr_bangunan->markahMMV = $request->markahTOTAL_TL_MMV
        // + $request->markahTOTAL_KT_MMV
        // + $request->markahTOTAL_SB_MMV
        // + $request->markahTOTAL_PA_MMV
        // + $request->markahTOTAL_PD_MMV
        // + $request->markahTOTAL_FL_MMV
        // + $request->markahTOTAL_IN_MMV;



        alert()->success('PENILAIAN VERIFIKASI DISIMPAN', 'Berjaya');

        return redirect('/verifikasi_permarkahan_bangunan/skor_penilaian');
    }

    #ketua pasukan
    public function sijil_penilaian()
    {
        $projeks = Projek::all();
        return view('modul.verifikasi_permarkahan_bangunan.muat_turun_sijil.index',[
            'projeks'=>$projeks
        ]);
    }

    public function papar_sijil_penilaian($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);

        return view('modul.verifikasi_permarkahan_bangunan.muat_turun_sijil.show',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function simpan_sijil_penilaian(Request $request, $id)
    {
        return view('/verifikasi_permarkahan_bangunan/muat_turun_sijil');
    }


    


    
}