<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenilaianRekaBentukGpssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // paparan senarai projek
        return view('modul.penilaian_reka_bentuk_gpss.index');
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
        // papar table projek with button melantik pemudah cara
        return view('modul.penilaian_reka_bentuk_gpss.pemudah_cara.index');
    }

    public function pemudah_cara($id)
    {
        // papar form pemudah cara with id projek
        return view('modul.penilaian_reka_bentuk_gpss.pemudah_cara.create');
    }

    public function melantik_pemudah_cara(Request $request, $id)
    {
        // submit form melantik pemudah cara
        return redirect('/penilaian_reka_bentuk_gpss/melantik_pemudah_cara');
    }

    # bawah ni utk skor penilaian
    public function skor_penilaian()
    {
        // papar mcm index tapi ada button utk skor
        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.index');
    }
    public function papar_skor_penilaian($id)
    {
        // papar form skor penilaian with id projek 
        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.edit');
    }

    public function simpan_skor(Request $request, $id)
    {
        // simpan skor penilaian
        return redirect('/penilaian_reka_bentuk_gpss/skor_penilaian');
    }

    #pengesahan penilaian
    public function pengesahan_penilaian()
    {
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.penilaian_reka_bentuk_gpss.pengesahan_penilaian.index');
    }
    public function papar_pengesahan_penilaian($id)
    {
        // papar form pengesahan penilaian with id projek 
        return view('modul.penilaian_reka_bentuk_gpss.pengesahan_penilaian.edit');
    }

    public function simpan_pengesahan_penilaian(Request $request, $id)
    {
        // simpan pengesahan penilaian
        return redirect('/penilaian_reka_bentuk_gpss/pengesahan_penilaian');
    }
}
