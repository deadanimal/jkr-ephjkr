<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIntegrasiRequest;
use App\Http\Requests\UpdateIntegrasiRequest;
use App\Models\Integrasi;

use Illuminate\Support\Facades\Http;


class IntegrasiController extends Controller
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
     * @param  \App\Http\Requests\StoreIntegrasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIntegrasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Integrasi  $integrasi
     * @return \Illuminate\Http\Response
     */
    public function show(Integrasi $integrasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Integrasi  $integrasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Integrasi $integrasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIntegrasiRequest  $request
     * @param  \App\Models\Integrasi  $integrasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIntegrasiRequest $request, Integrasi $integrasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Integrasi  $integrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Integrasi $integrasi)
    {
        //
    }

    public function papar_semua_projek($id_sso_skala) 
    {

        //dd('');
        $url = 'http://admin3-skala.jkr.gov.my/ephjkr-api/';
        $response = Http::withHeaders(([
            'id_pengguna' => $id_sso_skala
        ]))->get($url);

        $response_json = $response->json();

        //dd();  

        return view('modul.pengurusan_maklumat.pendaftaran_projek.myskala', $response_json);


    }
}
