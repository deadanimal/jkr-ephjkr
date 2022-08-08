<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeringkatRequest;
use App\Http\Requests\UpdatePeringkatRequest;
use App\Models\Peringkat;

class PeringkatController extends Controller
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
     * @param  \App\Http\Requests\StorePeringkatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePeringkatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peringkat  $peringkat
     * @return \Illuminate\Http\Response
     */
    public function show(Peringkat $peringkat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peringkat  $peringkat
     * @return \Illuminate\Http\Response
     */
    public function edit(Peringkat $peringkat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePeringkatRequest  $request
     * @param  \App\Models\Peringkat  $peringkat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePeringkatRequest $request, Peringkat $peringkat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peringkat  $peringkat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peringkat $peringkat)
    {
        //
    }
}
