<?php

namespace App\Http\Controllers;

use App\Models\Projek;
use App\Models\User;
use Illuminate\Http\Request;

class VerifikasiPermarkahanJalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $senarai_projek = Projek::all();
        // return view('modul.verifikasi_permarkahan_jalan.papar_senarai_projek.index', [
        //     'senarai_projek'=>$senarai_projek
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    //     return view('modul.verifikasi_permarkahan_jalan.papar_senarai_projek.create');
        
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
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
    }

    //papar senarai projek
    public function papar_senarai_projek_verifikasi()
    {
        // papar mcm index tapi ada button utk pengesahan
        $senarai_projek = Projek::all();
        return view('modul.verifikasi_permarkahan_jalan.papar_senarai_projek.index', [
            'senarai_projek'=>$senarai_projek
        ]);
        
    }

    //melantik penilai jalan
    public function melantik_penilai_jalan()
    {
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.verifikasi_permarkahan_jalan.melantik_penilai_jalan.create');
    }

    public function pemudah_cara()
    {
        // papar mcm index tapi ada button utk pengesahan
        
        
        return view('modul.verifikasi_permarkahan_jalan.pemudah_cara.create');
        
    }

    public function isi_skor_kad_verifikasi()
    {
        // papar mcm index tapi ada button utk pengesahan
        
        
        return view('modul.verifikasi_permarkahan_jalan.isi_skor_kad_verifikasi.index');
        
    }

    public function markah_penilaian_verifikasi()
    {
        
        return view('modul.verifikasi_permarkahan_jalan.markah_penilaian.create');
        
    }

    public function kemaskini_penilai_jalan_verifikasi()
    {
        
        return view('modul.verifikasi_permarkahan_jalan.kemaskini_penilai_jalan_verifikasi.create');
        
    }

    public function verifikasi_permarkahan()
    {
        
        return view('modul.verifikasi_permarkahan_jalan.verifikasi_permarkahan.index');
        
    }

    public function verifikasi_permarkahan_create()
    {
        
        return view('modul.verifikasi_permarkahan_jalan.verifikasi_permarkahan.create');
        
    }

    public function jana_keputusan_verifikasi()
    {
        
        return view('modul.verifikasi_permarkahan_jalan.jana_keputusan.index');
        
    }

    public function jana_keputusan_verifikasi_create()
    {
        
        return view('modul.verifikasi_permarkahan_jalan.jana_keputusan.create');
        
    }

    public function papar_skor_kad_verifikasi()
    {
        
        return view('modul.verifikasi_permarkahan_jalan.papar_skor_kad.index');
        
    }

    public function permohonan_rayuan_verifikasi()
    {
        
        return view('modul.verifikasi_permarkahan_jalan.permohonan_rayuan.index');
        
    }

    public function permohonan_rayuan_verifikasi_create()
    {
        
        return view('modul.verifikasi_permarkahan_jalan.permohonan_rayuan.create');
        
    }
}
