<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePemudahcarabangunanRequest;
use App\Http\Requests\UpdatePemudahcarabangunanRequest;
use App\Models\Pemudahcarabangunan;

class PemudahcarabangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modul.bangunan.penilaian_reka_bentuk_bangunan.pemudah_cara_bangunan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modul.bangunan.penilaian_reka_bentuk_bangunan.pemudah_cara_bangunan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePemudahcarabangunanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePemudahcarabangunanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemudahcarabangunan  $pemudahcarabangunan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemudahcarabangunan $pemudahcarabangunan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemudahcarabangunan  $pemudahcarabangunan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemudahcarabangunan $pemudahcarabangunan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePemudahcarabangunanRequest  $request
     * @param  \App\Models\Pemudahcarabangunan  $pemudahcarabangunan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePemudahcarabangunanRequest $request, Pemudahcarabangunan $pemudahcarabangunan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemudahcarabangunan  $pemudahcarabangunan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemudahcarabangunan $pemudahcarabangunan)
    {
        //
    }
}
