<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreValidasiPermarkahanBangunanRequest;
use App\Http\Requests\UpdateValidasiPermarkahanBangunanRequest;
use App\Models\ValidasiPermarkahanBangunan;
use App\Models\Projek;
use App\Models\PemudahCara;
use App\Models\KriteriaPhjkrBangunan;
use Illuminate\Http\Request;

class ValidasiPermarkahanBangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreValidasiPermarkahanBangunanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreValidasiPermarkahanBangunanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ValidasiPermarkahanBangunan  $validasiPermarkahanBangunan
     * @return \Illuminate\Http\Response
     */
    public function show(ValidasiPermarkahanBangunan $validasiPermarkahanBangunan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ValidasiPermarkahanBangunan  $validasiPermarkahanBangunan
     * @return \Illuminate\Http\Response
     */
    public function edit(ValidasiPermarkahanBangunan $validasiPermarkahanBangunan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateValidasiPermarkahanBangunanRequest  $request
     * @param  \App\Models\ValidasiPermarkahanBangunan  $validasiPermarkahanBangunan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateValidasiPermarkahanBangunanRequest $request, ValidasiPermarkahanBangunan $validasiPermarkahanBangunan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ValidasiPermarkahanBangunan  $validasiPermarkahanBangunan
     * @return \Illuminate\Http\Response
     */
    public function destroy(ValidasiPermarkahanBangunan $validasiPermarkahanBangunan)
    {
        //
    }

    #pasukan validasi (sekretariat)
    public function papar_projek()
    {
        $projeks = Projek::all();
        $projeks = new Projek;
        $pasukan_validasi = new PemudahCara;
        

        return view('modul.validasi_permarkahan_bangunan.pasukan_validasi.index',[
            'projeks'=>$projeks,
            'pasukan_validasi'=>$pasukan_validasi
        ]);
    }
    public function pasukan_validasi($id)
    {
        $pasukan_validasi = new PemudahCara;

        return view('modul.validasi_permarkahan_bangunan.pasukan_validasi.create',[
            'pasukan_validasi'=>$pasukan_validasi
        ]);

    }

    public function melantik_pasukan_validasi(Request $request, $id)
    {
        // submit form melantik pasukan validasi
        $pasukan_validasi = new PemudahCara;

        $pasukan_validasi->nama = $request->input('nama');
        $pasukan_validasi->syarikat_cawangan = $request->input('syarikat_cawangan');
        $pasukan_validasi->no_tel = $request->input('no_tel');
        $pasukan_validasi->no_fax = $request->input('no_fax');
        $pasukan_validasi->email = $request->input('email');
        $pasukan_validasi->disiplin = $request->input('disiplin');
        $pasukan_validasi->kategori = $request->kategori;
        alert()->success('Pasukan Validasi berjaya didaftar.', 'Berjaya');

        $pasukan_validasi->save();

        // submit form melantik pasukan validasi
        return redirect('/validasi_permarkahan_bangunan/melantik_pasukan_validasi');


    }

    public function pengesahan_penilaian_validasi()
    {
        return view('modul.validasi_permarkahan_bangunan.pengesahan_penilaian_validasi.index');
    }

    public function papar_pengesahan_penilaian_validasi($id)
    {
        return view('modul.validasi_permarkahan_bangunan.pengesahan_penilaian_validasi.show');
    }

    public function jana_keputusan()
    {
        return view('modul.validasi_permarkahan_bangunan.jana_keputusan.index');
    }

    public function papar_jana_keputusan()
    {
        return view('modul.validasi_permarkahan_bangunan.jana_keputusan.edit');
    }

    public function pengesahan_rayuan()
    {
        return view('modul.validasi_permarkahan_bangunan.pengesahan_rayuan.index');
    }

    public function papar_pengesahan_rayuan($id)
    {
        return view('modul.validasi_permarkahan_bangunan.pengesahan_rayuan.edit');
    }

    public function jana_sijil()
    {
        return view('modul.validasi_permarkahan_bangunan.jana_sijil.index');
    }

    public function papar_jana_sijil($id)
    {
        return view('modul.validasi_permarkahan_bangunan.jana_sijil.edit');
    }

    public function simpan_jana_sijil(Request $request, $id)
    {
        // submit form jana sijil
        return redirect('/validasi_permarkahan_bangunan/form_jana_sijil');
    }

    #ketua pasukan/penolong ketua pasukan
    public function permohonan_rayuan()
    {
        return view('modul.validasi_permarkahan_bangunan.permohonan_rayuan.index');
    }

    public function papar_permohonan_rayuan($id)
    {
        return view('modul.validasi_permarkahan_bangunan.permohonan_rayuan.edit');
    }

    public function simpan_permohonan_rayuan(Request $request, $id)
    {
        alert()->success('PERMOHONAN RAYUAN BERJAYA', 'Berjaya');
        return redirect('/validasi_permarkahan_bangunan/form_permohonan_rayuan');
    }

    #Pasukan Validasi
    public function penilaian_validasi()
    {
        return view('modul.validasi_permarkahan_bangunan.penilaian_validasi.index');
    }

    public function papar_penilaian_validasi($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();
        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan();
        

        return view('modul.validasi_permarkahan_bangunan.penilaian_validasi.create',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function simpan_penilaian_validasi(Request $request, $id)
    {
        // $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan($request->all());
        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan();
        $kriteria_phjkr_bangunan->markahTL = $request->input('markahTL');

        $kriteria_phjkr_bangunan->save();

        alert()->success('PENILAIAN VALIDASI BERJAYA', 'Berjaya');
        return redirect('/validasi_permarkahan_bangunan/penilaian_validasi');
    }

}
