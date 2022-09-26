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
        //paparan senarai projek
        return view('modul.verifikasi_permarkahan_bangunan.index');
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
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();
        $projeks = Projek::all();

        // papar mcm index tapi ada button utk pengesahan
        return view('modul.verifikasi_permarkahan_bangunan.pengesahan_penilaian.index',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan,
            'projeks'=>$projeks
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
        return redirect('/verifikasi_permarkahan_bangunan/melantik_pemudah_cara');
    }

    #semakan rawak verifikasi permarkahan bangunan
    #sekretariat
    public function semakan_rawak()
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();
        $projeks = Projek::all();

        return view('modul.verifikasi_permarkahan_bangunan.semakan_rawak.index',[
            'projeks'=>$projeks,
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
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
        alert()->success('Penilaian Disahkan.', 'Berjaya');

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
        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan($request->all());
        $kriteria_phjkr_bangunan->save();

        $kriteria_phjkr_bangunan->markahMSV = $request->markahTOTAL_TL_MSV
        + $request->markahTOTAL_KT_MSV
        + $request->markahTOTAL_SB_MSV
        + $request->markahTOTAL_PA_MSV
        + $request->markahTOTAL_PD_MSV
        + $request->markahTOTAL_FL_MSV
        + $request->markahTOTAL_IN_MSV;

        $kriteria_phjkr_bangunan->markahMMV = $request->markahTOTAL_TL_MMV
        + $request->markahTOTAL_KT_MMV
        + $request->markahTOTAL_SB_MMV
        + $request->markahTOTAL_PA_MMV
        + $request->markahTOTAL_PD_MMV
        + $request->markahTOTAL_FL_MMV
        + $request->markahTOTAL_IN_MMV;



        alert()->success('PENILAIAN VERIFIKASI DISIMPAN', 'Berjaya');

        return redirect('/verifikasi_permarkahan_bangunan/skor_penilaian');
    }

    #ketua pasukan
    public function sijil_penilaian()
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();

        return view('modul.verifikasi_permarkahan_bangunan.muat_turun_sijil.index',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function papar_sijil_penilaian($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);

        return view('modul.verifikasi_permarkahan_bangunan.muat_turun_sijil.edit',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function simpan_sijil_penilaian(Request $request, $id)
    {
        return view('/verifikasi_permarkahan_bangunan/muat_turun_sijil');
    }


    


    
}
