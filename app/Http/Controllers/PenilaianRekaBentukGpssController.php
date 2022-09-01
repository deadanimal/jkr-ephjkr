<?php
namespace App\Http\Controllers; 
use App\Models\Projek;
use Illuminate\Http\Request;
use App\Models\PemudahCara;
use App\Models\KriteriaGpssBangunan;
use Barryvdh\DomPDF\PDF;

class PenilaianRekaBentukGpssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // paparan senarai projek
        return view('modul.penilaian_reka_bentuk_gpss.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view(‘modul.penilaian_reka_bentuk_gpss.pemudah_cara.create’);
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
    # bawah ni pemudah cara
    public function papar_projek()
     {
         // papar table projek with button melantik pemudah cara
         $projeks = Projek::all();
         return view('modul.penilaian_reka_bentuk_gpss.pemudah_cara.index', [
             'projeks'=> $projeks
         ]);
     }
    public function pemudah_cara($id)
    {
        // papar form pemudah cara with id projek
        // $projek = Projek::find($id);
        return view('modul.penilaian_reka_bentuk_gpss.pemudah_cara.create');
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
        alert()->success('Pemudah cara berjaya didaftar.', 'Berjaya');

        $pemudah_cara->save();

        return redirect('/penilaian_reka_bentuk_gpss/melantik_pemudah_cara');
    }
    # bawah ni utk skor penilaian
    public function skor_penilaian()
    {
        // papar mcm index tapi ada button utk skor penilaian
        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.index');
    }
    public function papar_skor_penilaian($id)
    {
        // papar form skor penilaian with id projek
        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.edit');
    }
    public function simpan_skor(Request $request, $id)
    {
        // simpan skor penilaian

        return redirect('/penilaian_reka_bentuk_gpss/melantik_pemudah_cara');
    }

    public function skor_penilaian_arkitek()
    {
        // papar 1st page GPSS architectural works
        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.arkitek.index');
    }

    public function simpan_skor_penilaian_arkitek(Request $request, $id)
    {
        // simpan skor penilaian
        $gpss_bangunan = new KriteriaGpssBangunan;
        $gpss_bangunan->markahAwR = $request->input('markahAwR');
        // $gpss_bangunan->markahAwW = $request->input('markahAwW');
        // $gpss_bangunan->markahAwD = $request->input('markahAwD');
        // $gpss_bangunan->markahAwF = $request->input('markahAwF');
        // $gpss_bangunan->markahAwS = $request->input('markahAwS');
        // $gpss_bangunan->markahAwWs = $request->input('markahAwWs');
        $gpss_bangunan->save();

        return redirect('/penilaian_reka_bentuk_gpss/skor_penilaian/arkitek_page2');
    }

    public function skor_penilaian_arkitek_page2()
    {
        // papar 2nd page GPSS architectural works
        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.arkitek_page2.index');
    }

    public function simpan_skor_penilaian_arkitek_page2(Request $request, $id)
    {
        // simpan skor penilaian
        $gpss_bangunan = new KriteriaGpssBangunan;
        $gpss_bangunan->markahAwW = $request->input('markahAwW');
        $gpss_bangunan->save();

        return redirect('/penilaian_reka_bentuk_gpss/skor_penilaian/arkitek_page3');
    }

    public function skor_penilaian_arkitek_page3()
    {
        // papar 2nd page GPSS architectural works
        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.arkitek_page3.index');
    }

    public function simpan_skor_penilaian_arkitek_page3(Request $request, $id)
    {
        // simpan skor penilaian
        $gpss_bangunan = new KriteriaGpssBangunan;
        $gpss_bangunan->markahAwW = $request->input('markahAwF');
        $gpss_bangunan->save();

        return redirect('/penilaian_reka_bentuk_gpss/skor_penilaian/arkitek_page3');
    }

    public function skor_penilaian_arkitek_page4()
    {
        // papar 2nd page GPSS architectural works
        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.arkitek_page4.index');
    }

    public function simpan_skor_penilaian_arkitek_page4(Request $request, $id)
    {
        // simpan skor penilaian
        $gpss_bangunan = new KriteriaGpssBangunan;
        $gpss_bangunan->markahAwW = $request->input('markahAwS');
        $gpss_bangunan->save();

        return redirect('/penilaian_reka_bentuk_gpss/skor_penilaian/arkitek_page4');
    }




    #pengesahan penilaian
    public function pengesahan_penilaian()
    {
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.penilaian_reka_bentuk_gpss.pengesahan_penilaian.index');
    }
    public function papar_pengesahan_penilaian($id)
    {
        // papar form pengesahan penilaian with id projek
        return view('modul.penilaian_reka_bentuk_gpss.pengesahan_penilaian.edit');
    }
    public function simpan_pengesahan_penilaian(Request $request, $id)
    {
        // simpan pengesahan penilaian
        return redirect('/penilaian_reka_bentuk_gpss/pengesahan_penilaian');
    }

    #jana keputusan
    public function jana_keputusan()
    {
        // index jana keputusan
        return view('modul.penilaian_reka_bentuk_gpss.jana_keputusan.index');
    }
    public function papar_jana_keputusan($id)
    {
        //  form kana keputusan
        return view('modul.penilaian_reka_bentuk_gpss.jana_keputusan.create');
    }
    public function simpan_jana_keputusan(Request $request, $id)
    {
        // simpan jana keputusan
        return redirect('/penilaian_reka_bentuk_gpss/jana_keputusan');
    }

    #papar sijil
    public function paparan_sijil()
    {
        // index jana keputusan
        return view('modul.penilaian_reka_bentuk_gpss.paparan_sijil.index');
    }
    
    public function papar_sijil()
    {
        // index jana keputusan
        return view('modul.penilaian_reka_bentuk_gpss.papar_sijil.index');
    }

    public function createPDF(){

        $details =['title' => 'test'];
        $pdf = PDF::loadView('modul.penilaian_reka_bentuk_gpss.papar_sijil.index',$details);
        return $pdf->download('sijil.pdf');
 
    }

}