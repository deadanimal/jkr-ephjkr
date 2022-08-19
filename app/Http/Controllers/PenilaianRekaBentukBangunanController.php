<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePenilaianRekaBentukBangunanRequest;
use App\Http\Requests\UpdatePenilaianRekaBentukBangunanRequest;
use App\Models\Projek;
use App\Models\PemudahCara;
use App\Models\KriteriaPhjkrBangunan;

use Illuminate\Http\Request;

class PenilaianRekaBentukBangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // paparan senarai projek
        return view('modul.penilaian_reka_bentuk_bangunan.index');
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
        // $melantikpemudahcara = new PenilaianRekaBentukBangunan();

        // $melantikpemudahcara->nama = $request->nama;
        // $melantikpemudahcara->syarikat = $request->syarikat;
        // $melantikpemudahcara->noTel = $request->noTel;
        // $melantikpemudahcara->noFax = $request->noFax;
        // $melantikpemudahcara->emel = $request->emel;
        // $melantikpemudahcara->disiplin = $request->disiplin;
        // $melantikpemudahcara->save();

        // return redirect('/penilaian_reka_bentuk_bangunan');

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

    # bawah ni pemudah cara
    public function papar_projek()
    {
        $projeks = Projek::all();

        // papar table projek with button melantik pemudah cara
        // return view('modul.penilaian_reka_bentuk_bangunan.pemudah_cara.index');

        return view('modul.penilaian_reka_bentuk_bangunan.pemudah_cara.index',[
            'projeks'=>$projeks
        ]);
    }

    public function pemudah_cara($id)
    {
        // papar form pemudah cara with id projek
        // $projek = Projek::find($id);
        return view('modul.penilaian_reka_bentuk_bangunan.pemudah_cara.create');
    }

    public function melantik_pemudah_cara(Request $request, $id)
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
        $pemudah_cara->save();

        // // submit form melantik pemudah cara
        return redirect('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara');

    }

    # bawah ni utk skor penilaian
    public function skor_penilaian()
    {
        // papar mcm index tapi ada button utk skor
        return view('modul.penilaian_reka_bentuk_bangunan.skor_penilaian.index');
    }
    public function papar_skor_penilaian($id)
    {
        // papar form skor penilaian with id projek 
        return view('modul.penilaian_reka_bentuk_bangunan.skor_penilaian.edit');
    }

    public function simpan_skor(Request $request, $id)
    {
        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan;

        $kriteria_phjkr_bangunan = $request->input('jenisKategori');
        $kriteria_phjkr_bangunan->markahTL = $request->input('markahTL');
        $kriteria_phjkr_bangunan->markahKT = $request->input('markahKT');
        $kriteria_phjkr_bangunan->markahSB = $request->input('markahSB');
        $kriteria_phjkr_bangunan->markahPD = $request->input('markahPD');
        $kriteria_phjkr_bangunan->markahFL = $request->input('markahFL');
        $kriteria_phjkr_bangunan->markahIN = $request->input('markahIN');
        $kriteria_phjkr_bangunan->markahPA = $request->input('markahPA');
        $kriteria_phjkr_bangunan->save();

        // simpan skor penilaian
        return redirect('/penilaian_reka_bentuk_bangunan/skor_penilaian');
    }

    #pengesahan penilaian
    public function pengesahan_penilaian()
    {
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.index');
    }
    public function papar_pengesahan_penilaian($id)
    {
        // papar form pengesahan penilaian with id projek 
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.edit');
    }

    public function simpan_pengesahan_penilaian(Request $request, $id)
    {
        // simpan pengesahan penilaian
        return redirect('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian');
    }

     #Pengesahan Penilaian Reka Bentuk Bangunan-Halaman 2

    public function pengesahan_penilaian_halaman_2()
    {
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p2');
    }
    public function papar_pengesahan_penilaian_halaman_2($id)
    {
        // papar form pengesahan penilaian with id projek 
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p2');
    }

    public function simpan_pengesahan_penilaian_halaman_2(Request $request, $id)
    {
        // simpan pengesahan penilaian
        // return redirect('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian');
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p3');
    }

    public function pengesahan_penilaian_halaman_3()
    {
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p3');
    }
    public function papar_pengesahan_penilaian_halaman_3($id)
    {
        // papar form pengesahan penilaian with id projek 
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p3');
    }
    public function simpan_pengesahan_penilaian_halaman_3(Request $request, $id)
    {
        // simpan pengesahan penilaian
        // return redirect('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian');
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p4');
    }

    public function pengesahan_penilaian_halaman_4()
    {
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p4');
    }
    public function papar_pengesahan_penilaian_halaman_4($id)
    {
        // papar form pengesahan penilaian with id projek 
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p4');
    }
    public function simpan_pengesahan_penilaian_halaman_4(Request $request, $id)
    {
        // simpan pengesahan penilaian
        // return redirect('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian');
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p5');
    }

    public function pengesahan_penilaian_halaman_5()
    {
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p5');
    }
    public function papar_pengesahan_penilaian_halaman_5($id)
    {
        // papar form pengesahan penilaian with id projek 
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p5');
    } 
    public function simpan_pengesahan_penilaian_halaman_5(Request $request, $id)
    {
        // simpan pengesahan penilaian
        // return redirect('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian');
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p6');
    }

    public function pengesahan_penilaian_halaman_6()
    {
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p6');
    }
    public function papar_pengesahan_penilaian_halaman_6($id)
    {
        // papar form pengesahan penilaian with id projek 
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p6');
    }
    public function simpan_pengesahan_penilaian_halaman_6(Request $request, $id)
    {
        // simpan pengesahan penilaian
        // return redirect('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian');
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p7');
    }

    public function pengesahan_penilaian_halaman_7()
    {
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p7');
    }
    public function papar_pengesahan_penilaian_halaman_7($id)
    {
        // papar form pengesahan penilaian with id projek 
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p7');
    }
    public function simpan_pengesahan_penilaian_halaman_7(Request $request, $id)
    {
        // simpan pengesahan penilaian
        // return redirect('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian');
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.p7');
    }


    // Semakan Rawak Penilaian Reka Bentuk Bangunan

    public function semakan_rawak()
    {
        return view('modul.penilaian_reka_bentuk_bangunan.semakan_rawak.index');

    }
    public function semakan_rawak_form($id)
    {
        return view('modul.penilaian_reka_bentuk_bangunan.semakan_rawak.edit');

    }
    public function simpan_semakan_rawak(Request $request, $id)
    {
        return redirect('/penilaian_reka_bentuk_bangunan/semakan_rawak');

    }

    // Muat Turun Sijil Penilaian Reka Bentuk Bangunan

    public function muat_turun_sijil()
    {
        return view('modul.penilaian_reka_bentuk_bangunan.muat_turun_sijil.index');

    }
    public function muat_turun_sijil_form($id)
    {

        //letak code upload file
        // if($request->hasFile('print_sijil')){
        //     $apaapa = $request->file('print_sijil')->store('print_sijil');
        //     $apapa -> print_naziran = $apapapa;
        // }
        
        return view('modul.penilaian_reka_bentuk_bangunan.muat_turun_sijil.edit');

    }
    public function simpan_muat_turun_sijil(Request $request, $id)
    {
        return redirect('/penilaian_reka_bentuk_bangunan/muat_turun_sijil');

    }
    
}