<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjekRequest;
use App\Http\Requests\UpdateProjekRequest;
use App\Models\Projek;

class ProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('modul.gpss.penilaian_reka_bentuk_gpss.senarai_projek_gpss.index');
    }

    public function senarai_projek_gpss()
    {
        return view('modul.gpss.penilaian_reka_bentuk_gpss.senarai_projek_gpss.index');
    }

    public function pemudah_cara_gpss()
    {
        return view('modul.gpss.penilaian_reka_bentuk_gpss.pemudah_cara_gpss.index');
        
    }

    public function penilaian_reka_bentuk()
    {
        return view('modul.gpss.penilaian_reka_bentuk_gpss.penilaian_reka_bentuk.index');
        
    }

    public function pengesahan_penilaian_reka_bentuk_gpss()
    {
        return view('modul.gpss.penilaian_reka_bentuk_gpss.pengesahan_penilaian_reka_bentuk_gpss.index');
        // return view('modul.bangunan.penilaian_reka_bentuk_bangunan.senarai_projek_bangunan.index');
        // return view('modul.bangunan.penilaian_reka_bentuk_bangunan.pemudah_cara_bangunan.index');
        // return view('modul.bangunan.penilaian_reka_bentuk_bangunan.penilaian_reka_bentuk.index');
        // return view('modul.bangunan.penilaian_reka_bentuk_bangunan.pengesahan_penilaian_reka_bentuk.index');
        // return view('modul.bangunan.penilaian_reka_bentuk_bangunan.jana_sijil.index');

        
    

    }

    public function senarai_projek_bangunan()
    {
        return view('modul.bangunan.penilaian_reka_bentuk_bangunan.senarai_projek_bangunan.index');
    }

    public function pemudah_cara_bangunan()
    {
        // return view('modul.bangunan.penilaian_reka_bentuk_bangunan.pemudah_cara_bangunan.index');
        return view('modul.bangunan.penilaian_reka_bentuk_bangunan.pemudah_cara_bangunan.create');
        
    }
    
    public function penilaian_reka_bentuk()
    {
        return view('modul.bangunan.penilaian_reka_bentuk_bangunan.penilaian_reka_bentuk.index');
        
    }

    public function pengesahan_penilaian_reka_bentuk()
    {
        return view('modul.bangunan.penilaian_reka_bentuk_bangunan.pengesahan_penilaian_reka_bentuk.index');
        
    }

    public function semakan_rawak_jana_sijil()
    {
        return view('modul.bangunan.penilaian_reka_bentuk_bangunan.semakan_rawak_jana_sijil.index');
        
    }

    public function sijil_verifikasi_bangunan()
    {
        return view('modul.bangunan.penilaian_reka_bentuk_bangunan.sijil_verifikasi_bangunan.index');
        
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('modul.gpss.penilaian_reka_bentuk_gpss.senarai_projek_gpss.create');
        // return view('modul.bangunan.penilaian_reka_bentuk_bangunan.pemudah_cara_bangunan.create');
        // return view('modul.bangunan.penilaian_reka_bentuk_bangunan.jana_sijil.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjekRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjekRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function show(Projek $projek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function edit(Projek $projek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjekRequest  $request
     * @param  \App\Models\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjekRequest $request, Projek $projek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projek $projek)
    {
        //
    }
}
