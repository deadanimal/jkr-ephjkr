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

    public function papar_semua_projek() 
    {

        //dd('jksbdc');
        //cara risda
        // $skala = Integrasi::where('tajuk_projek')->get();
        // foreach ($skala as $key => $s) {
        //     $skala = Http::withHeaders('')
        //         ->get('http://admin3-skala.jkr.gov.my/ephjkr-api/' . $s->tajuk_projek)
        //         ->getBody()
        //         ->getContents();

        //     $skala = json_decode($skala, true);
        //     if (!empty($skala['tajuk_projek'])) {
        //         $s->tajuk_projek = $skala['tajuk_projek'];
        //     } else {
        //         $s->tajuk_projek = null;
        //     }
        // }

        // return view('modul.pengurusan_maklumat.pendaftaran_projek.integrasi', [
        //     'skala' => $skala
        // ]);
    
        $url = 'http://admin3-skala.jkr.gov.my/ephjkr-api/';
        $url = Http::withHeaders(([
            'id_pengguna' => $url
        ]))->get($url);

        // //dd($url);
        $url = json_decode($url, true);

        // // $url = json_decode($url, true);
        // //     if (!empty($url['tajuk_projek'])) {
        // //         $s->tajuk_projek = $url['tajuk_projek'];
        // //     } else {
        // //         $s->tajuk_projek = null;
        // //     }

        return view('modul.pengurusan_maklumat.pendaftaran_projek.integrasi', [
            'id_pengguna' => $url
        ]);

        // //dd(); 

        //cara bos
        // $url = 'http://admin3-skala.jkr.gov.my/ephjkr-api/';
        // $response = Http::withHeaders(([
        //     'id_pengguna' => $id_sso_skala
        // ]))->get($url);

        // $response_json = $response->json();

        // return view('modul.pengurusan_maklumat.pendaftaran_projek.integrasi', $response_json);


    }
}
