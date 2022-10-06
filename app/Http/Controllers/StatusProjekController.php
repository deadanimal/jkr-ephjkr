<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStatusProjekRequest;
use App\Http\Requests\UpdateStatusProjekRequest;
use App\Models\StatusProjek;

class StatusProjekController extends Controller
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
     * @param  \App\Http\Requests\StoreStatusProjekRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatusProjekRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StatusProjek  $statusProjek
     * @return \Illuminate\Http\Response
     */
    public function show(StatusProjek $statusProjek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StatusProjek  $statusProjek
     * @return \Illuminate\Http\Response
     */
    public function edit(StatusProjek $statusProjek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStatusProjekRequest  $request
     * @param  \App\Models\StatusProjek  $statusProjek
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatusProjekRequest $request, StatusProjek $statusProjek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StatusProjek  $statusProjek
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatusProjek $statusProjek)
    {
        //
    }
}
