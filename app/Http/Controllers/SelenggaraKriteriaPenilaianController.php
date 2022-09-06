<?php

namespace App\Http\Controllers;

use App\Models\Projek;
use App\Models\SelenggaraKriteriaPenilaian;
use Illuminate\Http\Request;

class SelenggaraKriteriaPenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kriteria_penilaian = SelenggaraKriteriaPenilaian::all();
        return view('modul.pengurusan_maklumat.selenggara.kriteria_penilaian.index', [
            'kriteria_penilaian'=>$kriteria_penilaian
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
        return view('modul.pengurusan_maklumat.selenggara.kriteria_penilaian.create');
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
        Projek::create(['namaProjek' => $request->namaProjek]);
        return redirect('/pengurusan_maklumat/selenggara/kriteria_penilaian');
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
        $kriteria_penilaian = Projek::find($id);
        return view('modul.pengurusan_maklumat.selenggara.kriteria_penilaian.edit', [
            'kriteria_penilaian' => $kriteria_penilaian,
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
        Projek::where('id',$id)->update(['namaProjek' => $request->namaProjek]);    
        return redirect('/pengurusan_maklumat/selenggara/kriteria_penilaian');
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
        $kriteria_penilaian = Projek::find($id);
        $kriteria_penilaian->delete();
        alert()->success('Maklumat telah dihapuskan', 'Berjaya');
        return redirect('/pengurusan_maklumat/selenggara/kriteria_penilaian');
    }
}
