<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSemakanrawakjanasijilRequest;
use App\Http\Requests\UpdateSemakanrawakjanasijilRequest;
use App\Models\Semakanrawakjanasijil;

class SemakanrawakjanasijilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modul.bangunan.penilaian_reka_bentuk_bangunan.semakan_rawak_jana_sijil.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modul.bangunan.penilaian_reka_bentuk_bangunan.semakan_rawak_jana_sijil.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSemakanrawakjanasijilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSemakanrawakjanasijilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Semakanrawakjanasijil  $semakanrawakjanasijil
     * @return \Illuminate\Http\Response
     */
    public function show(Semakanrawakjanasijil $semakanrawakjanasijil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Semakanrawakjanasijil  $semakanrawakjanasijil
     * @return \Illuminate\Http\Response
     */
    public function edit(Semakanrawakjanasijil $semakanrawakjanasijil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSemakanrawakjanasijilRequest  $request
     * @param  \App\Models\Semakanrawakjanasijil  $semakanrawakjanasijil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSemakanrawakjanasijilRequest $request, Semakanrawakjanasijil $semakanrawakjanasijil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Semakanrawakjanasijil  $semakanrawakjanasijil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semakanrawakjanasijil $semakanrawakjanasijil)
    {
        //
    }
}
