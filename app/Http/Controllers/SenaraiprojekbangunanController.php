<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSenaraiprojekbangunanRequest;
use App\Http\Requests\UpdateSenaraiprojekbangunanRequest;
use App\Models\Senaraiprojekbangunan;

class SenaraiprojekbangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modul.bangunan.penilaian_reka_bentuk_bangunan.senarai_projek_bangunan.index');

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
     * @param  \App\Http\Requests\StoreSenaraiprojekbangunanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSenaraiprojekbangunanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Senaraiprojekbangunan  $senaraiprojekbangunan
     * @return \Illuminate\Http\Response
     */
    public function show(Senaraiprojekbangunan $senaraiprojekbangunan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Senaraiprojekbangunan  $senaraiprojekbangunan
     * @return \Illuminate\Http\Response
     */
    public function edit(Senaraiprojekbangunan $senaraiprojekbangunan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSenaraiprojekbangunanRequest  $request
     * @param  \App\Models\Senaraiprojekbangunan  $senaraiprojekbangunan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSenaraiprojekbangunanRequest $request, Senaraiprojekbangunan $senaraiprojekbangunan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Senaraiprojekbangunan  $senaraiprojekbangunan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Senaraiprojekbangunan $senaraiprojekbangunan)
    {
        //
    }
}
