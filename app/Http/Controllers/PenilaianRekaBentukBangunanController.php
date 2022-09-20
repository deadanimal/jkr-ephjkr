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
        return view('modul.penilaian_reka_bentuk_bangunan.skor_penilaian.index',[
            'projeks'=>$projeks
        ]);
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
        // req all
        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan($request->all());
        //$kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan;
        
        // JUMLAH MARKAH 
        // $kriteria_phjkr_bangunan->markahMMR = $request->markahMMR;

        // $kriteria_phjkr_bangunan->markahMS = $markahTOTALMS;
        // $kriteria_phjkr_bangunan->markahMR = $request->markahTOTAL_MR + $request->markahTOTAL_MR;
        

        // $kriteria_phjkr_bangunan->markahMMV = $request->markahMMV;
        // $kriteria_phjkr_bangunan->markahMSV = $request->markahMSV;
        // $kriteria_phjkr_bangunan->markahML = $request->markahML;

        $kriteria_phjkr_bangunan->save();

        // $projeks = new Projek;

        // $projeks->dokumenSokongan = $request->input('dokumenSokongan');

        //Dokumen Sokongan
        // $request->file->store('public');
        // if($request->hasFile('dokumenSokongan')){
        //     $projeks = $request->file('dokumenSokongan');
        //  }

        // $projeks->save();

        alert()->success('PENILAIAN REKA BENTUK BANGUNAN BERJAYA', 'Berjaya');
        // simpan skor penilaian
        return redirect('/penilaian_reka_bentuk_bangunan/skor_penilaian');
    }

    // Dokumen Sokongan
    // public function dokumen_sokongan()
    // {
    //     // $dokumen = new Projek;

    //     // if($request->hasFile('dokumenSokongan')){
    //     //     $dokumen = $request->file('dokumenSokongan')->store('dokumenSokongan');
    //     //     //  $dokumen->input('dokumenSokongan') = $dokumen;
    //     // }

    //     // $dokumen->dokumenSokongan = $request->input('dokumenSokongan');
    //     // $dokumen->save();

    //     return view('modul.penilaian_reka_bentuk_bangunan.skor_penilaian.show');

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

        return view('modul.penilaian_reka_bentuk_bangunan.semakan_rawak.index',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);

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
        // $kriteria_phjkr_bangunan->markahMMR = $request->markahMMR;
        $kriteria_phjkr_bangunan->markahMS = $request->markahTOTAL_TL_MS 
        + $request->markahTOTAL_KT_MS 
        + $request->markahTOTAL_SB_MS
        + $request->markahTOTAL_PA_MS 
        + $request->markahTOTAL_FL_MS 
        + $request->markahTOTAL_IN_MS;

        $kriteria_phjkr_bangunan->markahMR = $request->markahTOTAL_MR + $request->markahTOTAL_MR;
        // $kriteria_phjkr_bangunan->markahMMV = $request->markahMMV;
        // $kriteria_phjkr_bangunan->markahMSV = $request->markahMSV;
        // $kriteria_phjkr_bangunan->markahML = $request->markahML;

        $kriteria_phjkr_bangunan->save();


        alert()->success('Pemudah cara berjaya didaftar.', 'Berjaya');

        return redirect('/penilaian_reka_bentuk_bangunan/semakan_rawak');

    }

    // Ketua Pasukan ATAU Penolong Ketua Pasukan
    // Muat Turun Sijil Penilaian Reka Bentuk Bangunan

    public function muat_turun_sijil()
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();

        return view('modul.penilaian_reka_bentuk_bangunan.muat_turun_sijil.index', [
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);

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