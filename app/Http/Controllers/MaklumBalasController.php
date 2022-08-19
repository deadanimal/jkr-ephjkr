<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMaklumBalasRequest;
use App\Http\Requests\UpdateMaklumBalasRequest;
use App\Models\MaklumBalas;
use Illuminate\Support\Facades\Auth;

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
        return view('modul.pengurusan_maklumat.maklum_balas.index', [
            'maklum_balas' => MaklumBalas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('modul.pengurusan_maklumat.maklum_balas.create');
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
        $mb = new MaklumBalas;
        $mb->nama = $request->nama;
        $mb->email= $request->email;
        $mb->subjek = $request->subjek;
        $mb->kategori = $request->kategori;
        $mb->tarikhStatus = $request->tarikhStatus;
        $mb->statusMaklumbalas = $request->statusMaklumbalas;
        $mb->user_id = Auth::id();
        $mb->save();
        alert()->success('Maklumat telah disimpan', 'Berjaya');
        return redirect('/pengurusan_maklumat/maklum_balas');
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
        return view('modul.pengurusan_maklumat.maklum_balas.show', [
            'maklum_balas' => MaklumBalas::all()
        ]);
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
        return view('modul.pengurusan_maklumat.maklum_balas.edit', [
            'mb' => $maklumBalas
        ]);
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
        $maklumBalas->delete();
        alert()->success('Maklumat telah dihapuskan', 'Berjaya');
        return redirect('/pengurusan_maklumat/maklum_balas');
    }
}
