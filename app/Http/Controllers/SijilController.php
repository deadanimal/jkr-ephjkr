<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSijilRequest;
use App\Http\Requests\UpdateSijilRequest;
use App\Models\Sijil;

class SijilController extends Controller
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
     * @param  \App\Http\Requests\StoreSijilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSijilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sijil  $sijil
     * @return \Illuminate\Http\Response
     */
    public function show(Sijil $sijil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sijil  $sijil
     * @return \Illuminate\Http\Response
     */
    public function edit(Sijil $sijil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSijilRequest  $request
     * @param  \App\Models\Sijil  $sijil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSijilRequest $request, Sijil $sijil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sijil  $sijil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sijil $sijil)
    {
        //
    }
}
