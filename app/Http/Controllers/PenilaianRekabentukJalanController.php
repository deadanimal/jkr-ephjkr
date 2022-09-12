<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProjekController;
use App\Models\Projek;

use Illuminate\Http\Request;
use App\Models\PemudahCara;

class PenilaianRekaBentukJalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projeks = Projek::all();
        return view('modul.penilaian_reka_bentuk_jalan.papar.index',[
            'projeks'=> $projeks,
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

    public function pemudah_cara_jalan() 
    {
        return view('modul.penilaian_reka_bentuk_jalan.pemudah_cara_jalan.create');
    }

    public function melantik_pemudah_cara_jalan(Request $request, $id)
    {
        // submit form melantik pemudah cara
        $pemudah_cara = new PemudahCara;
        $pemudah_cara->nama = $request->input('nama');
        $pemudah_cara->syarikat_cawangan = $request->input('syarikat_cawangan');
        $pemudah_cara->no_tel = $request->input('no_tel');
        $pemudah_cara->no_fax = $request->input('no_fax');
        $pemudah_cara->email = $request->input('email');
        $pemudah_cara->disiplin = $request->input('disiplin');
        $pemudah_cara->kategori = $request->kategori;
        alert()->success('Pemudah cara berjaya didaftar.', 'Berjaya');

        $pemudah_cara->save();

        return redirect('/penilaian_reka_bentuk_jalan/pemudah_cara_jalan');
    }

    public function isi_skor_kad() 
    {
        // create method
        return view('modul.penilaian_reka_bentuk_jalan.isi_skor_kad.create');
    }

    // store() method - refer to which table?
    //store() and edit() method later

    // next page isi_skor_kad

    public function isi_skor_kad_page2() 
    {
        // create method
        return view('modul.penilaian_reka_bentuk_jalan.isi_skor_kad_page2.create');
    }

    public function isi_skor_kad_page3() 
    {
        // create method
        return view('modul.penilaian_reka_bentuk_jalan.isi_skor_kad_page3.create');
    }



    public function penilai_jalan() 
    {
        return view('modul.penilaian_reka_bentuk_jalan.penilai_jalan.index');
    }

    public function penilai_reka_bentuk() 
    {
        return view('modul.penilaian_reka_bentuk_jalan.penilai_reka_bentuk.index');
    }

    public function pengesahan_penilaian_jalan() 
    {
        return view('modul.penilaian_reka_bentuk_jalan.pengesahan_penilaian_jalan.index');
    }

    public function jana_keputusan_jalan() 
    {
        return view('modul.penilaian_reka_bentuk_jalan.jana_keputusan_jalan.index');
    }

    
}

