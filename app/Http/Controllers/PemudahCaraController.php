<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePemudahCaraRequest;
use App\Http\Requests\UpdatePemudahCaraRequest;
use App\Models\PemudahCara;

class PemudahCaraController extends Controller
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
     * @param  \App\Http\Requests\StorePemudahCaraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePemudahCaraRequest $request)
    {
        $pemudahcara = new PemudahCara();

        $pemudahcara->nama = $request->nama;
        $pemudahcara->syarikat_cawangan = $request->syarikat_cawangan;
        $pemudahcara->no_tel = $request->no_tel;
        $pemudahcara->no_fax = $request->no_fax;
        $pemudahcara->email = $request->email;
        $pemudahcara->disiplin = $request->disiplin;
        $pemudahcara->save();

        return redirect('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara')




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PemudahCara  $pemudahCara
     * @return \Illuminate\Http\Response
     */
    public function show(PemudahCara $pemudahCara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PemudahCara  $pemudahCara
     * @return \Illuminate\Http\Response
     */
    public function edit(PemudahCara $pemudahCara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePemudahCaraRequest  $request
     * @param  \App\Models\PemudahCara  $pemudahCara
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePemudahCaraRequest $request, PemudahCara $pemudahCara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PemudahCara  $pemudahCara
     * @return \Illuminate\Http\Response
     */
    public function destroy(PemudahCara $pemudahCara)
    {
        //
    }
}
