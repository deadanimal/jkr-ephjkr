<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMaklumBalasRequest;
use App\Http\Requests\UpdateMaklumBalasRequest;
use App\Models\MaklumBalas;

class MaklumBalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $maklum_balas = MaklumBalas::all();
        return view('modul.pengurusan_maklumat.maklum_balas.index', compact('maklum_balas'));
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
     * @param  \App\Http\Requests\StoreMaklumBalasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaklumBalasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaklumBalas  $maklumBalas
     * @return \Illuminate\Http\Response
     */
    public function show(MaklumBalas $maklumBalas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaklumBalas  $maklumBalas
     * @return \Illuminate\Http\Response
     */
    public function edit(MaklumBalas $maklumBalas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaklumBalasRequest  $request
     * @param  \App\Models\MaklumBalas  $maklumBalas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaklumBalasRequest $request, MaklumBalas $maklumBalas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaklumBalas  $maklumBalas
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaklumBalas $maklumBalas)
    {
        //
    }
}
