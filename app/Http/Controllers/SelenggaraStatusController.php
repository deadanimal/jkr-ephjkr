<?php

namespace App\Http\Controllers;

use App\Models\SelenggaraStatus;
use App\Models\StatusProjek;
use Illuminate\Http\Request;


class SelenggaraStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $selenggara_status = StatusProjek::all();
        return view('modul.pengurusan_maklumat.selenggara.selenggara_status.index', [
            'selenggara_status'=>$selenggara_status
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
        return view('modul.pengurusan_maklumat.selenggara.selenggara_status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->statusProjek);
        // $status = SelenggaraStatus::create($request->statusProjek);

        $status = new SelenggaraStatus();
        $status->statusProjek = $request->statusProjek;

        $status->save();

        return redirect('/pengurusan_maklumat/selenggara/selenggara_status');
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
        return view('modul.pengurusan_maklumat.selenggara.selenggara_status.edit');
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
        $selenggara_status = StatusProjek::find($id);
        StatusProjek::create(['statusProjek' => $request->statusProjek]);
        return redirect('/pengurusan_maklumat/selenggara/selanggara_status');
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
        $selenggara_status = StatusProjek::find($id);
        $selenggara_status->delete();
        alert()->success('Maklumat telah dihapuskan', 'Berjaya');
        return redirect('/pengurusan_maklumat/selenggara/selenggara_status');
    }
}
