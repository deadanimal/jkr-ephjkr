<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePengesahanpenilaianrekabentukRequest;
use App\Http\Requests\UpdatePengesahanpenilaianrekabentukRequest;
use App\Models\Pengesahanpenilaianrekabentuk;

class PengesahanpenilaianrekabentukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('modul.bangunan.penilaian_reka_bentuk_bangunan.pengesahan_penilaian_reka_bentuk.index');

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
     * @param  \App\Http\Requests\StorePengesahanpenilaianrekabentukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePengesahanpenilaianrekabentukRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengesahanpenilaianrekabentuk  $pengesahanpenilaianrekabentuk
     * @return \Illuminate\Http\Response
     */
    public function show(Pengesahanpenilaianrekabentuk $pengesahanpenilaianrekabentuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengesahanpenilaianrekabentuk  $pengesahanpenilaianrekabentuk
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengesahanpenilaianrekabentuk $pengesahanpenilaianrekabentuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePengesahanpenilaianrekabentukRequest  $request
     * @param  \App\Models\Pengesahanpenilaianrekabentuk  $pengesahanpenilaianrekabentuk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePengesahanpenilaianrekabentukRequest $request, Pengesahanpenilaianrekabentuk $pengesahanpenilaianrekabentuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengesahanpenilaianrekabentuk  $pengesahanpenilaianrekabentuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengesahanpenilaianrekabentuk $pengesahanpenilaianrekabentuk)
    {
        //
    }
}
