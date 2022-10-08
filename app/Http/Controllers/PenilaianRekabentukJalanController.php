<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProjekController;
use App\Models\KriteriaPhjkrJalan;
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

    public function papar_senarai_pemudah_cara_jalan()
     {
       //papar table projek with button melantik pemudah cara
       //should be isi form pemudahcara - create()

    //    $pemudah_cara = PemudahCara::where('id', Auth::user()->id)->get();
        $pemudah_cara = PemudahCara::all();
       
         return view('modul.penilaian_reka_bentuk_jalan.papar_senarai_pemudah_cara_jalan.index',[
            'pemudah_cara'=> $pemudah_cara
         ]);
     }

    public function pemudah_cara_jalan() 
    {   
        $pemudah_cara = PemudahCara::all();

        return view('modul.penilaian_reka_bentuk_jalan.pemudah_cara_jalan.create', compact('pemudah_cara'));
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

    public function papar_senarai_penilai_jalan()
    {
      //papar table projek with button melantik pemudah cara
      //should be isi form pemudahcara - create()

   //    $pemudah_cara = PemudahCara::where('id', Auth::user()->id)->get();
       $pemudah_cara = PemudahCara::all();
      
        return view('modul.penilaian_reka_bentuk_jalan.papar_senarai_pemudah_cara_jalan.index',[
           'pemudah_cara'=> $pemudah_cara
        ]);
    }



    public function isi_skor_kad(Request $request) 
    {
        // create method
        $rb_jalan = $request->session()->all();
        return view('modul.penilaian_reka_bentuk_jalan.isi_skor_kad.create',compact('rb_jalan'));
    }

    public function simpan_isi_skor_kad(Request $request) 
    {   
        $validatedData = $request->all();

        $rb_jalan = new KriteriaPhjkrJalan();
        $rb_jalan->fill( $validatedData);
        $request->session()->put('rb_jalan', $rb_jalan);


        // $rb_jalan->markahSM1 = $request->input('markahSM1');
        // $rb_jalan->markahSM2 = $request->input('markahSM2');
        // $rb_jalan->markahSM3 = $request->input('markahSM3');
        // $rb_jalan->markahSM4 = $request->input('markahSM4');
        // alert()->success('Markah disimpan', 'Berjaya');

        // $rb_jalan->save();

        
        return redirect('/penilaian_reka_bentuk_jalan/isi_skor_kad_page2');
    }

    // store() method - refer to which table?
    //store() and edit() method later

    // next page isi_skor_kad

    public function isi_skor_kad_page2(Request $request) 
    {
        // create method
        $rb_jalan = $request->session()->all();

        return view('modul.penilaian_reka_bentuk_jalan.isi_skor_kad_page2.create',compact('rb_jalan'));
    }

    public function simpan_isi_skor_kad_page2(Request $request) 
    {
        $validatedData = $request->all();

        $rb_jalan = new KriteriaPhjkrJalan();
        $rb_jalan->fill( $validatedData);
        $request->session()->put('rb_jalan', $rb_jalan);
        // $rb_jalan = $request->session()->get('rb_jalan');
        // alert()->success('Pemudah cara berjaya didaftar.', 'Berjaya');
        // $rb_jalan->save();

        return redirect('/penilaian_reka_bentuk_jalan/isi_skor_kad_page3');
    }



    public function isi_skor_kad_page3(Request $request) 
    {
        $rb_jalan = $request->session()->all();

        return view('modul.penilaian_reka_bentuk_jalan.isi_skor_kad_page3.create',compact('rb_jalan') );
    }

    public function simpan_isi_skor_kad_page3(Request $request) 
    {
        $validatedData = $request->all();

        $rb_jalan = new KriteriaPhjkrJalan();
        $rb_jalan->fill( $validatedData);
        $request->session()->put('rb_jalan', $rb_jalan);

        // $rb_jalan = $request->session()->get('rb_jalan');
        // alert()->success('Pemudah cara berjaya didaftar.', 'Berjaya');
        // $rb_jalan->save();

        return redirect('/penilaian_reka_bentuk_jalan/isi_skor_kad_page4');
    }

    public function isi_skor_kad_page4(Request $request) 
    {
        $rb_jalan = $request->session()->all();
        return view('modul.penilaian_reka_bentuk_jalan.isi_skor_kad_page4.create',compact('rb_jalan') );
    }

    public function simpan_isi_skor_kad_page4(Request $request) 
    {
        $validatedData = $request->all();

        $rb_jalan = new KriteriaPhjkrJalan();
        $rb_jalan->fill( $validatedData);
        $request->session()->put('rb_jalan', $rb_jalan);

        // $rb_jalan = $request->session()->get('rb_jalan');
        // alert()->success('Pemudah cara berjaya didaftar.', 'Berjaya');
        // $rb_jalan->save();

        return redirect('/penilaian_reka_bentuk_jalan/isi_skor_kad_page5');
    }

    public function isi_skor_kad_page5(Request $request) 
    {
        $rb_jalan = $request->session()->all();
        return view('modul.penilaian_reka_bentuk_jalan.isi_skor_kad_page5.create',compact('rb_jalan'));
    }

    public function simpan_isi_skor_kad_page5(Request $request) 
    {
        // $validatedData = $request->all();

        // $rb_jalan = new KriteriaPhjkrJalan();
        // $rb_jalan->fill( $validatedData);
        // $request->session()->put('rb_jalan', $rb_jalan);

        $rb_jalan = $request->session()->get('rb_jalan');
        alert()->success('Pemudah cara berjaya didaftar.', 'Berjaya');
        $rb_jalan->save();

        return redirect('/penilaian_reka_bentuk_jalan/isi_skor_kad');
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

    public function papar_skor_kad() 
    {
        return view('modul.penilaian_reka_bentuk_jalan.papar_skor_kad.index');
    }

    public function permohonan_rayuan() 
    {
        $projeks = Projek::all();
        return view('modul.penilaian_reka_bentuk_jalan.permohonan_rayuan.index',[
            'projeks'=> $projeks,
        ]);
    }

    public function pengesahan_rayuan() 
    {   
        $projeks = Projek::all();
        return view('modul.penilaian_reka_bentuk_jalan.pengesahan_rayuan.index', compact('projeks'));
    }

    public function jana_sijil() 
    {
        return view('modul.penilaian_reka_bentuk_jalan.jana_sijil.index');
    }

    public function muat_turun_sijil() 
    {
        return view('modul.penilaian_reka_bentuk_jalan.muat_turun_sijil.index');
    }

    
}

