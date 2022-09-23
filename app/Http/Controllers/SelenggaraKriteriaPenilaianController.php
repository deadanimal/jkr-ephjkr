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
        $kp = new SelenggaraKriteriaPenilaian;
        $kp->nama_kriteria = $request->nama_kriteria;
        $kp->jenis_kriteria = $request->jenis_kriteria;
        $kp->kod_kriteria = $request->kod_kriteria;
        $kp->kategori_kriteria = $request->kategori_kriteria;
        $kp->save();
        
        //AuditTrailController::audit('create', 'pengguna', $pengguna->id);
        alert()->success('Maklumat telah disimpan', 'Berjaya');
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
        $kriteria_penilaian = SelenggaraKriteriaPenilaian::find($id);
        return view('modul.pengurusan_maklumat.selenggara.kriteria_penilaian.edit', [
            'kp' => $kriteria_penilaian,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SelenggaraKriteriaPenilaian $kriteria_penilaian)
    {
        //
        
        $kp = $kriteria_penilaian;
        $kp->nama_kriteria = $request->nama_kriteria;
        $kp->jenis_kriteria = $request->jenis_kriteria;
        $kp->kod_kriteria = $request->kod_kriteria;
        $kp->kategori_kriteria = $request->kategori_kriteria;
        $kp->save();
        
        alert()->success('Maklumat telah disimpan', 'Berjaya');
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
        $kp = SelenggaraKriteriaPenilaian::find($id);
        $kp->delete();
        alert()->success('Maklumat telah dihapuskan', 'Berjaya');
        return redirect('/pengurusan_maklumat/selenggara/kriteria_penilaian');
    }
}
