<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePasukanValidasiRequest;
use App\Http\Requests\UpdatePasukanValidasiRequest;
use App\Models\PasukanValidasi;

class PasukanValidasiController extends Controller
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
     * @param  \App\Http\Requests\StorePasukanValidasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePasukanValidasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PasukanValidasi  $pasukanValidasi
     * @return \Illuminate\Http\Response
     */
    public function show(PasukanValidasi $pasukanValidasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PasukanValidasi  $pasukanValidasi
     * @return \Illuminate\Http\Response
     */
    public function edit(PasukanValidasi $pasukanValidasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePasukanValidasiRequest  $request
     * @param  \App\Models\PasukanValidasi  $pasukanValidasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePasukanValidasiRequest $request, PasukanValidasi $pasukanValidasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PasukanValidasi  $pasukanValidasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(PasukanValidasi $pasukanValidasi)
    {
        //
    }
}
