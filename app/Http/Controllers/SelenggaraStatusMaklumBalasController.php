<?php

namespace App\Http\Controllers;

use App\Models\MaklumBalas;
use Illuminate\Http\Request;

class SelenggaraStatusMaklumBalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $status_maklum_balas = MaklumBalas::all();
        // dd($status_maklum_balas);
        return view('modul.pengurusan_maklumat.selenggara.status_maklum_balas.index', [
            'status_maklum_balas'=>$status_maklum_balas
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
        return view('modul.pengurusan_maklumat.selenggara.status_maklum_balas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $status_maklum_balas = new MaklumBalas();
        $status_maklum_balas->statusMaklumbalas = $request->statusMaklumbalas;

        $status_maklum_balas->save();

        AuditTrailController::audit('create', 'pengguna', $status_maklum_balas->id);
        return redirect('/pengurusan_maklumat/selenggara/status_maklum_balas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $status_maklum_balas = MaklumBalas::find($id);
        return view('modul.pengurusan_maklumat.selenggara.status_maklum_balas.edit', [
            'status_maklum_balas' => $status_maklum_balas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        MaklumBalas::where('id',$id)->update(['statusMaklumbalas' => $request->statusMaklumbalas]);
        return redirect('/pengurusan_maklumat/selenggara/status_maklum_balas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $status_maklum_balas = MaklumBalas::find($id);
        $status_maklum_balas->delete();
        alert()->success('Maklumat telah dihapuskan', 'Berjaya');
        return redirect('/pengurusan_maklumat/selenggara/status_maklum_balas');
    }
}
