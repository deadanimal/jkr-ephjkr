<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePenilaianRekaBentukBangunanRequest;
use App\Http\Requests\UpdatePenilaianRekaBentukBangunanRequest;
use App\Models\Projek;
use App\Models\PemudahCara;
use App\Models\KriteriaPhjkrBangunan;

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
    public function papar_projek()
    {
        $projeks = Projek::all();

        // papar table projek with button melantik pemudah cara
        // return view('modul.penilaian_reka_bentuk_bangunan.pemudah_cara.index');

        return view('modul.penilaian_reka_bentuk_bangunan.pemudah_cara.index',[
            'projeks'=>$projeks
        ]);
    }

    

    public function pemudah_cara($id)
    {
        $pemudah_cara = new PemudahCara;
        $projeks = new Projek;

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
        $projeks = new Projek;

        $pemudah_cara->nama = $request->input('nama');
        $pemudah_cara->syarikat_cawangan = $request->input('syarikat_cawangan');
        $pemudah_cara->no_tel = $request->input('no_tel');
        $pemudah_cara->no_fax = $request->input('no_fax');
        $pemudah_cara->email = $request->input('email');
        $pemudah_cara->disiplin = $request->input('disiplin');
        $pemudah_cara->kategori = $request->kategori;
        $pemudah_cara->save();

        $projeks->namaProjek = $request->input('namaProjek');
        $projeks->save();

        // // submit form melantik pemudah cara
        return redirect('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara');

    }

    # bawah ni utk skor penilaian
    public function skor_penilaian()
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();
    
        // papar mcm index tapi ada button utk skor
        return view('modul.penilaian_reka_bentuk_bangunan.skor_penilaian.index',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }
    public function papar_skor_penilaian($id)
    {
        $projeks = new Projek;

        // papar form skor penilaian with id projek 
        return view('modul.penilaian_reka_bentuk_bangunan.skor_penilaian.edit',[
            'projeks'=> $projeks
        ]);
    }

    public function simpan_skor(Request $request, $id)
    {
        $markah_TL_total = $request->markahTL1 + $request->markahTL2;
        $markah_KT_total = $request->markahKT1 + $request->markahKT2;
        $markah_SB_total = $request->markahSB1 + $request->markahSB2;
        $markah_PA_total = $request->markahPA1 + $request->markahPA2;
        $markah_PD_total = $request->markahPD1 + $request->markahPD2;
        $markah_FL_total = $request->markahFL1 + $request->markahFL2;
        $markah_IN_total = $request->markahIN1 + $request->markahIN2;
        $markah_total_MMR = $request->markahTL1 + $request->markahKT1 + $request->markahSB1
                            + $request->markahPA1 + $request->markahPD1 + $request->markahFL1 + $request->markahIN1;
        $markah_total_MMV = $request->markahTL2 + $request->markahKT2 + $request->markahSB2
                            + $request->markahPA2 + $request->markahPD2 + $request->markahFL2 + $request->markahIN2;


        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan;

        $kriteria_phjkr_bangunan->jenisKategori = $request->input('jenisKategori');
        $kriteria_phjkr_bangunan->markahTL = $markah_TL_total;
        $kriteria_phjkr_bangunan->markahKT = $markah_KT_total;
        $kriteria_phjkr_bangunan->markahSB = $markah_SB_total;
        $kriteria_phjkr_bangunan->markahPA = $markah_PA_total;
        $kriteria_phjkr_bangunan->markahPD = $markah_PD_total;
        $kriteria_phjkr_bangunan->markahFL = $markah_FL_total;
        $kriteria_phjkr_bangunan->markahIN = $markah_IN_total;
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

    #pengesahan penilaian
    public function pengesahan_penilaian()
    {
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.index');
    }
    public function papar_pengesahan_penilaian($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();
        // papar form pengesahan penilaian with id projek 
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.edit',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function simpan_pengesahan_penilaian(Request $request, $id)
    {
        // simpan pengesahan penilaian
        return redirect('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian');
    }

    // Semakan Rawak Penilaian Reka Bentuk Bangunan

    public function semakan_rawak()
    {
        return view('modul.penilaian_reka_bentuk_bangunan.semakan_rawak.index');

    }
    public function semakan_rawak_form($id)
    {
        return view('modul.penilaian_reka_bentuk_bangunan.semakan_rawak.edit');

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

        return redirect('/penilaian_reka_bentuk_bangunan/semakan_rawak');

    }

    // Muat Turun Sijil Penilaian Reka Bentuk Bangunan

    public function muat_turun_sijil()
    {
        return view('modul.penilaian_reka_bentuk_bangunan.muat_turun_sijil.index');

    }
    public function muat_turun_sijil_form($id)
    {

        //letak code upload file
        // if($request->hasFile('print_sijil')){
        //     $apaapa = $request->file('print_sijil')->store('print_sijil');
        //     $apapa -> print_naziran = $apa-apa;
        // }
        
        return view('modul.penilaian_reka_bentuk_bangunan.muat_turun_sijil.edit');

    }
    public function simpan_muat_turun_sijil(Request $request, $id)
    {
        return redirect('/penilaian_reka_bentuk_bangunan/muat_turun_sijil');

    }
    
}