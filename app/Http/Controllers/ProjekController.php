<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjekRequest;
use App\Http\Requests\UpdateProjekRequest;
use App\Models\Projek;
use App\Models\StatusProjek;
use Illuminate\Support\Facades\Auth;

class ProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(Projek::with('status')->get());
        return view('modul.pengurusan_maklumat.pendaftaran_projek.index', [
            'pendaftaran_projek' => Projek::with('status')->get()
        ]);
        // return view('modul.gpss.penilaian_reka_bentuk_gpss.senarai_projek_gpss.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modul.pengurusan_maklumat.pendaftaran_projek.create');
        //return view('modul.gpss.penilaian_reka_bentuk_gpss.senarai_projek_gpss.create');
        // return view('modul.bangunan.penilaian_reka_bentuk_bangunan.pemudah_cara_bangunan.create');
        // return view('modul.bangunan.penilaian_reka_bentuk_bangunan.jana_sijil.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjekRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjekRequest $request)
    {
        //
        $pd = new Projek();
        
        $pd->id_ruj_skala = $request->id_ruj_skala;
        $pd->namaProjek = $request->namaProjek;
        $pd->alamatProjek = $request->alamatProjek;
        $pd->poskod = $request->poskod;
        $pd->bandar = $request->bandar;
        $pd->negeri = $request->negeri;
        $pd->keluasanTapak = $request->keluasanTapak;
        $pd->jumlahblokBangunan = $request->jumlahblokBangunan;
        $pd->dokumenSokongan = $request->dokumenSokongan;
        $pd->tarikh = $request->tarikh;
        $pd->tarikhJangkaMulaPembinaan = $request->tarikhJangkaSiapPembinaan;
        $pd->kaedahPelaksanaan = $request->kaedahPelaksanaan;
        $pd->jenisPelaksanaan = $request->jenisPelaksanaan;
        $pd->kosProjek = $request->kosProjek;
        $pd->jenisKategoriProjek = $request->jenisKategoriProjek;
        $pd->tempohSijil = $request->tempohSijil;
        $pd->jarak = $request->jarak;
        // $pd->user_id = Auth::id();
        $pd->save();

        $pd2 = new StatusProjek();
        $pd2->statusProjek = $request->statusProjek;
        $pd2->projek_id = $pd->id;
        $pd2->save();

        alert()->success('Maklumat telah disimpan', 'Berjaya');
        return redirect('/pengurusan_maklumat/pendaftaran_projek');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function show(Projek $projek)
    {
        //
        return view('modul.pengurusan_maklumat.pendaftaran_projek.show', [
            'pendaftaran_projek' => Projek::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function edit(Projek $projek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjekRequest  $request
     * @param  \App\Models\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjekRequest $request, Projek $projek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pendaftaran_projek = Projek::find($id);
        $pendaftaran_projek->delete();
        alert()->success('Maklumat telah dihapuskan', 'Berjaya');
        return redirect('/pengurusan_maklumat/pendaftaran_projek');
    }
}