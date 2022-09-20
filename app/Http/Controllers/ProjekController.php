<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjekRequest;
use App\Http\Requests\UpdateProjekRequest;
use App\Models\Projek;
use App\Models\StatusProjek;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
// use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
// use Barryvdh\DomPDF\PDF as PDF;
use Illuminate\Support\Facades\Auth;
// use Barryvdh\DomPDF\Facade\Pdf;
use \PDF;


class ProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('test');
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
        $pd->tarikhJangkaMulaPembinaan = $request->tarikhJangkaMulaPembinaan;
        $pd->tarikhJangkaSiapPembinaan = $request->tarikhJangkaSiapPembinaan;
        $pd->kaedahPelaksanaan = $request->kaedahPelaksanaan;
        $pd->jenisPelaksanaan = $request->jenisPelaksanaan;
        $pd->statusProjek = $request->statusProjek;
        $pd->kosProjek = $request->kosProjek;
        $pd->jenisProjek = $request->jenisProjek;
        $pd->ahli = $request->ahli;
        $pd->perananAhli = $request->perananAhli;
        $pd->ulasanGugur = $request->ulasanGugur;
        $pd->dokumenGugur = $request->dokumenGugur;
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
        return redirect('/pengurusan_maklumat/pemilihan_ahli/'.$pd->id);

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
    public function edit($id)
    {
        //
        //dd('projek');
        $projek = Projek::find($id);
        // dd($projek->id);
        return view('modul.pengurusan_maklumat.pendaftaran_projek.edit', [
            'pendaftaran_projek' => $projek
        ]);

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
        $gp = new Projek();
        
        $gp->id_ruj_skala = $request->id_ruj_skala;
        $gp->namaProjek = $request->namaProjek;
        $gp->alamatProjek = $request->alamatProjek;
        $gp->poskod = $request->poskod;
        $gp->bandar = $request->bandar;
        $gp->negeri = $request->negeri;
        $gp->keluasanTapak = $request->keluasanTapak;
        $gp->jumlahblokBangunan = $request->jumlahblokBangunan;
        $gp->dokumenSokongan = $request->dokumenSokongan;
        $gp->tarikh = $request->tarikh;
        $gp->tarikhJangkaMulaPembinaan = $request->tarikhJangkaMulaPembinaan;
        $gp->tarikhJangkaSiapPembinaan = $request->tarikhJangkaSiapPembinaan;
        $gp->kaedahPelaksanaan = $request->kaedahPelaksanaan;
        $gp->jenisPelaksanaan = $request->jenisPelaksanaan;
        $gp->statusProjek = $request->statusProjek;
        $gp->kosProjek = $request->kosProjek;
        $gp->jenisProjek = $request->jenisProjek;
        $gp->ahli = $request->ahli;
        $gp->perananAhli = $request->perananAhli;
        $gp->ulasanGugur = $request->ulasanGugur;
        $gp->dokumenGugur = $request->dokumenGugur;
        $gp->jenisKategoriProjek = $request->jenisKategoriProjek;
        $gp->tempohSijil = $request->tempohSijil;
        $gp->jarak = $request->jarak;
        // $gp->user_id = Auth::id();
        $gp->save();

        $gp2 = new StatusProjek();
        $gp2->statusProjek = $request->statusProjek;
        $gp2->projek_id = $gp->id;
        $gp2->save();

        alert()->success('Maklumat telah disimpan', 'Berjaya');
        return redirect('/pengurusan_maklumat/pendaftaran_projek/gugur_projek/projek');
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

    //paparprojek
    public function papar(){

        return view('modul.pengurusan_maklumat.pendaftaran_projek.papar', [
            'papar' => Projek::with('status')->get()
        ]);
    }

    public function cetakpdfprojek($id){

        $pendaftaran_projek = Projek::find($id);
        
        $pdf = FacadePdf::loadView('test');
        // $pdf = PDF::loadView('pendaftaran_projek.test');


        return $pdf->download('PROJEK.'.'pdf');
    }

    public function gugurprojek(){

        return view('modul.pengurusan_maklumat.pendaftaran_projek.gugur_projek.index', [
            'gugur_projek' => Projek::with('status')->get()
        ]);
    }

    public function gugurprojek_create(){

        return view('modul.pengurusan_maklumat.pendaftaran_projek.gugur_projek.create'
            
        );
    }

    public function gugurprojek_store(){

        return view('modul.pengurusan_maklumat.pendaftaran_projek.gugur_projek.create'
            
        );
    }

    public function gugurprojek_edit($id){
        //dd('fd');
        $gugur_projek = Projek::find($id);
        return view('modul.pengurusan_maklumat.pendaftaran_projek.gugur_projek.create',[
            'gugur_projek' => $gugur_projek
        ]);
                
    }

    public function padam_gugurprojek($id){
        //dd('fd');

        $gugur_projek = Projek::find($id);
    
        $gugur_projek->delete();
        alert()->success('Maklumat telah dihapuskan', 'Berjaya');
        return redirect('/pengurusan_maklumat/pendaftaran_projek/gugur_projek');
            
        }

    public function pengesahanprojek(){
//dd('fd');
        return view('modul.pengurusan_maklumat.pendaftaran_projek.pengesahan_projek.index', [
            'pengesahan_projek' => Projek::with('status')->get()
        ]);
    }

    public function pengesahanprojek_edit($id){
        //dd('fd');
        $pengesahan_projek = Projek::find($id);
        return view('modul.pengurusan_maklumat.pendaftaran_projek.pengesahan_projek.edit',[
            'pengesahan_projek' => $pengesahan_projek
        ]);
                
    }

    public function pengesahanprojek_simpan(UpdateProjekRequest $request, $id)
    {
        //dd('projek');
        $pengesahan_projek = Projek::find($id);
        $pengesahan_projek->statusProjek = $request->statusProjek;
        $pengesahan_projek->save();
        alert()->success('Pengesahan pengguna telah berjaya', 'Berjaya');
        return redirect('/pengurusan_maklumat/pendaftaran_projek/pengesahan_projek/projek');
    }

    public function pengesahanprojek_create(){
    //dd('fd');
        return view('modul.pengurusan_maklumat.pendaftaran_projek.create');

        }

}