<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVerifikasiPermarkahanBangunanRequest;
use App\Http\Requests\UpdateVerifikasiPermarkahanBangunanRequest;
use App\Models\Projek;
use App\Models\PemudahCara;
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
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.verifikasi_permarkahan_bangunan.pengesahan_penilaian.index');
    }

    public function papar_pengesahan_penilaian($id)
    {
        // papar form pengesahan penilaian with id projek 
        return view('modul.verifikasi_permarkahan_bangunan.pengesahan_penilaian.edit');
    }

    #pemudahcara
    public function papar_projek()
    {
        $projeks = Projek::all();
        $projeks = new Projek;
        $pemudah_cara = new PemudahCara;
        

        // papar table projek with button melantik pemudah cara
        // return view('modul.penilaian_reka_bentuk_bangunan.pemudah_cara.index');

        return view('modul.verifikasi_permarkahan_bangunan.pemudah_cara.index',[
            'projeks'=>$projeks,
            'pemudah_cara'=>$pemudah_cara
        ]);
    }
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
    public function semakan_rawak()
    {
        return view('modul.verifikasi_permarkahan_bangunan.semakan_rawak.index');

    }
    public function semakan_rawak_form($id)
    {
        return view('modul.verifikasi_permarkahan_bangunan.semakan_rawak.edit');

    }


    


    
}
