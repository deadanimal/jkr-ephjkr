<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projek;
use App\Models\PemudahCara;
use App\Models\KriteriaGpssBangunan;




class VerifikasiPermarkahanGpssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //papar senarai projek
        $projeks = Projek::all();
        return view('modul.verifikasi_permarkahan_gpss.papar_verifikasi_gpss.index',[
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


     // papar senarai pemudahcara
    public function papar_senarai_pemudah_cara_verifikasi()
    {
      //papar table projek with button melantik pemudahcara
      //should be isi form pemudahcara - create()

      $pemudah_cara = PemudahCara::all();
        
        return view('modul.verifikasi_permarkahan_gpss.pemudah_cara_verifikasi_gpss.index', [
           'pemudah_cara'=> $pemudah_cara
        ]);
    }


   // form pemudahcara
   public function pemudah_cara_verifikasi_gpss($id) 
   {
       $pemudah_cara = PemudahCara::find($id);
       return view('modul.verifikasi_permarkahan_gpss.pemudah_cara_verifikasi_gpss.create', compact('pemudah_cara','id'));
   }

   // store pemudahcara
   public function melantik_pemudah_cara_verifikasi_gpss(Request $request, $id)
   {
       // submit form melantik pemudahcara
       $pemudah_cara = new PemudahCara;
       $pemudah_cara->nama = $request->input('nama');
       $pemudah_cara->syarikat_cawangan = $request->input('syarikat_cawangan');
       $pemudah_cara->no_tel = $request->input('no_tel');
       $pemudah_cara->no_fax = $request->input('no_fax');
       $pemudah_cara->email = $request->input('email');
       $pemudah_cara->disiplin = $request->input('disiplin');
       $pemudah_cara->kategori = $request->kategori;
       alert()->success('Pemudah Cara berjaya didaftar.', 'Berjaya');


       $pemudah_cara->save();

       return redirect('/verifikasi_permarkahan_gpss/papar_senarai_pemudah_cara_verifikasi');
   }

    public function skor_kad()
    {
        
        // below view should be in paparan senarai projek for pemudah cara, temporary
        $projeks = Projek::all();

        return view('modul.verifikasi_permarkahan_gpss.skor_kad.index',[
            'projeks'=> $projeks,

        ]);
    }

    public function skor_verifikasi_arkitek(Request $request, $id)
    {
        // 1st form(create) page GPSS architectural works for Pemudah Cara
        // dd($id);
        $gpss_bangunan = KriteriaGpssBangunan::find($id);
        // $gpss_bangunan = $request->session()->all();

        return view('modul.verifikasi_permarkahan_gpss.skor_verifikasi.arkitek.create', compact('gpss_bangunan','id'));
    }

    public function simpan_skor_verifikasi_arkitek(Request $request, $id)
    {
        // simpan skor verifikasi
        $validatedData = $request->all();
        $gpss_bangunan = new KriteriaGpssBangunan();
        $gpss_bangunan->fill($validatedData);
        $request->session()->put('gpss_bangunan', $gpss_bangunan);
        $gpss_bangunan->save();
        alert()->success('Markah disimpan', 'Berjaya');
        
        return redirect('/verifikasi_permarkahan_gpss/skor_verifikasi_arkitek_page2/create');
    }

    // Sekretariat Views

    // papar senarai penilai_jalan
    public function papar_senarai_penilai_jalan()
     {
       //papar table projek with button melantik penilai_jalan
       //should be isi form pemudahcara - create()

       $pemudah_cara = PemudahCara::all();
         
         return view('modul.verifikasi_permarkahan_gpss.penilai_jalan_verifikasi_gpss.index', [
            'pemudah_cara'=> $pemudah_cara
         ]);
     }

    // form penilai_jalan
    public function penilai_jalan_verifikasi_gpss($id) 
    {
        $pemudah_cara = PemudahCara::find($id);
        return view('modul.verifikasi_permarkahan_gpss.penilai_jalan_verifikasi_gpss.create', compact('pemudah_cara','id'));
    }

    // store penilai_jalan
    public function melantik_penilai_jalan_verifikasi_gpss(Request $request, $id)
    {
        // submit form melantik penilai_jalan
        $pemudah_cara = new PemudahCara;
        $pemudah_cara->nama = $request->input('nama');
        $pemudah_cara->syarikat_cawangan = $request->input('syarikat_cawangan');
        $pemudah_cara->no_tel = $request->input('no_tel');
        $pemudah_cara->no_fax = $request->input('no_fax');
        $pemudah_cara->email = $request->input('email');
        $pemudah_cara->disiplin = $request->input('disiplin');
        $pemudah_cara->kategori = $request->kategori;
        alert()->success('Penilai Jalan berjaya didaftar.', 'Berjaya');


        $pemudah_cara->save();

        return redirect('/verifikasi_permarkahan_gpss/papar_senarai_penilai_jalan');
    }

    public function penilaian_verifikasi()
    {
        
        // below view should be in paparan senarai projek for pemudah cara, temporary
        $projeks = Projek::all();

        return view('modul.verifikasi_permarkahan_gpss.penilaian_verifikasi.index',[
            'projeks'=> $projeks,

        ]);
    }
    

    public function pengesahan_penilaian_verifikasi()
    {
        // get all skor_penilaian_arkitek data
        $projeks = Projek::all();

        // show(method)
        return view('modul.verifikasi_permarkahan_gpss.pengesahan_penilaian_verifikasi.index',[
            'projeks'=> $projeks,

        ]);
    }

     #jana keputusan(skor kad)
     public function jana_keputusan_skor_kad()
     {
         // index jana keputusan
         $gpss_bangunan = KriteriaGpssBangunan::all();
         $projeks = Projek::all();
 
         return view('modul.verifikasi_permarkahan_gpss.jana_keputusan_skor_kad.index',compact('projeks','gpss_bangunan'));
     }

     public function permohonan_rayuan_verifikasi()
    {

        return view('modul.verifikasi_permarkahan_gpss.permohonan_rayuan_verifikasi.index');
    }

    public function pengesahan_rayuan_verifikasi()
    {

        return view('modul.verifikasi_permarkahan_gpss.pengesahan_rayuan_verifikasi.index');
    }
}
