<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePenilaianrekabentukRequest;
use App\Http\Requests\UpdatePenilaianrekabentukRequest;
use App\Models\Penilaianrekabentuk;

class PenilaianrekabentukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('modul.bangunan.penilaian_reka_bentuk_bangunan.penilaian_reka_bentuk.index');

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
     * @param  \App\Http\Requests\StorePenilaianrekabentukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenilaianrekabentukRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penilaianrekabentuk  $penilaianrekabentuk
     * @return \Illuminate\Http\Response
     */
    public function show(Penilaianrekabentuk $penilaianrekabentuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penilaianrekabentuk  $penilaianrekabentuk
     * @return \Illuminate\Http\Response
     */
    public function edit(Penilaianrekabentuk $penilaianrekabentuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenilaianrekabentukRequest  $request
     * @param  \App\Models\Penilaianrekabentuk  $penilaianrekabentuk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenilaianrekabentukRequest $request, Penilaianrekabentuk $penilaianrekabentuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penilaianrekabentuk  $penilaianrekabentuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penilaianrekabentuk $penilaianrekabentuk)
    {
        //
    }
}
