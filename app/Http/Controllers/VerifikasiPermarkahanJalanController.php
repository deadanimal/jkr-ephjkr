<?php

namespace App\Http\Controllers;

use App\Models\Projek;
use App\Models\PemudahCara;
use App\Models\PenilaianRekaBentukBangunan;
use App\Models\PenilaiJalanVerifikasi;
use App\Models\User;
use App\Models\VerifikasiPermarkahanJalan;
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
    public function melantik_penilai_jalan($id)
    {

        $spk = Projek::find($id);
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.verifikasi_permarkahan_jalan.melantik_penilai_jalan.create',[
            'spk' => $spk
        ]);
    }

    public function pemudah_cara($id)
    {
        // papar mcm index tapi ada button utk pengesahan
        
        $spk = Projek::find($id);
        return view('modul.verifikasi_permarkahan_jalan.pemudah_cara.create',[
            'spk' => $spk
        ]);
        
    }

    // public function pemudah_cara_simpan(Request $request, $id)
    // {
    //     // papar mcm index tapi ada button utk pengesahan
        
    //     $spk = VerifikasiPermarkahanJalan::find($id);

    //     $spk->nama = $request->nama;
    //     $spk->syarikat_cawangan = $request->syarikat_cawangan;
    //     $spk->no_tel = $request->no_tel;
    //     $spk->no_fax = $request->no_fax;
    //     $spk->email = $request->email;
    //     $spk->disiplin = $request->disiplin;
    //     $spk->kategori = $request->kategori;
    //     $spk->dokumenSokongan = $request->dokumenSokongan;
        
    //     $spk->save();

    //     alert()->success('Maklumat telah disimpan', 'Berjaya');
    //     return redirect('/verifikasi_permarkahan_jalan/papar_senarai_projek');
        
    // }

    public function isi_skor_kad_verifikasi()
    {
        // papar mcm index tapi ada button utk pengesahan
        
        //dd('sd');
        return view('modul.verifikasi_permarkahan_jalan.isi_skor_kad_verifikasi.index');
        
    }

    public function isi_skor_kad_verifikasi2()
    {
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.verifikasi_permarkahan_jalan.isi_skor_kad_page2.create');
        
    }

    public function isi_skor_kad_verifikasi3()
    {
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.verifikasi_permarkahan_jalan.isi_skor_kad_page3.create');
        
    }

    public function isi_skor_kad_verifikasi4()
    {
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.verifikasi_permarkahan_jalan.isi_skor_kad_page4.create');
        
    }

    public function isi_skor_kad_verifikasi5()
    {
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.verifikasi_permarkahan_jalan.isi_skor_kad_page5.create');
        
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

    //simpan pemuda cara
    public function simpan_pemudah_cara(Request $request, $id)
    {
        // submit form melantik pemudah cara
        $pemudah_cara = new PemudahCara;
        $pemudah_cara->nama = $request->input('nama');
        $pemudah_cara->syarikat_cawangan = $request->input('syarikat_cawangan');
        $pemudah_cara->nama = $request->input('nama');
        $pemudah_cara->no_tel = $request->input('no_tel');
        $pemudah_cara->email = $request->input('email');
        $pemudah_cara->no_fax = $request->input('no_fax');
        alert()->success('Pemudah cara berjaya didaftar.', 'Berjaya');

        $pemudah_cara->save();

        return redirect('/verifikasi_permarkahan_jalan/pemudah_cara');
    }

    //simpan penilai jalan
    public function simpan_penilai_jalan(Request $request, $id)
    {
        // submit form melantik penilai jalan
        $penilai_jalan = new PenilaiJalanVerifikasi();
        $penilai_jalan->namaProjek = $request->input('namaProjek');
        $penilai_jalan->syarikat_cawangan = $request->input('syarikat_cawangan');
        $penilai_jalan->nama = $request->input('nama');
        $penilai_jalan->no_tel = $request->input('no_tel');
        $penilai_jalan->email = $request->input('email');
        $penilai_jalan->no_fax = $request->input('no_fax');
        alert()->success('Pemudah cara berjaya didaftar.', 'Berjaya');

        $penilai_jalan->save();

        return redirect('/verifikasi_permarkahan_jalan/penilai_jalan');
    }
}
