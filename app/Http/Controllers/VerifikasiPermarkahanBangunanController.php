<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVerifikasiPermarkahanBangunanRequest;
use App\Http\Requests\UpdateVerifikasiPermarkahanBangunanRequest;
use App\Models\VerifikasiPermarkahanBangunan;

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
