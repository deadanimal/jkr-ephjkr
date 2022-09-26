<?php
namespace App\Http\Controllers; 
use App\Models\Projek;
use Illuminate\Http\Request;
use App\Models\PemudahCara;
use App\Models\KriteriaGpssBangunan;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Laravel\Ui\Presets\React;

class PenilaianRekaBentukGpssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // paparan senarai projek untuk Ketua Pasukan/Penolong, dummy data, should be from pendaftaran projek
        $projeks = Projek::all();
        return view('modul.penilaian_reka_bentuk_gpss.index',[
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
    public function papar_senarai_pemudah_cara()
     {
       //papar table projek with button melantik pemudah cara
       //should be isi form pemudahcara - create()

       $pemudah_cara = PemudahCara::all();
         
         return view('modul.penilaian_reka_bentuk_gpss.pemudah_cara.index', [
            'pemudah_cara'=> $pemudah_cara
         ]);
     }
    public function pemudah_cara()
    {
        // papar form pemudah cara with id projek

        //should
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

        return redirect('/penilaian_reka_bentuk_gpss/papar_senarai_pemudah_cara');
    }
    # Pemudah Cara - bawah ni utk skor penilaian
    public function skor_penilaian()
    {
        // papar mcm index tapi ada button utk skor penilaian
        // pemudah cara view, akan memasukkan markah penilaian dan memuat naik dokumen
        // below view should be in paparan senarai projek for pemudah cara, temporary
        $projeks = Projek::all();

        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.index',[
            'projeks'=> $projeks,

        ]);
    }
    // public function papar_skor_penilaian($id)
    // {
    //     // papar form skor penilaian with id projek
    //     // this one should be for sekretariat
    //     return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.edit');
    // }
    // public function simpan_skor(Request $request, $id)
    // {
    //     // simpan skor penilaian

    //     return redirect('/penilaian_reka_bentuk_gpss/melantik_pemudah_cara');
    // }

    public function skor_penilaian_arkitek(Request $request)
    {
        // 1st form(create) page GPSS architectural works for Pemudah Cara
        $gpss_bangunan = $request->session()->all();

        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.arkitek.create', compact('gpss_bangunan'));
    }

    public function simpan_skor_penilaian_arkitek(Request $request, $id)
    {
        // simpan skor penilaian
        $validatedData = $request->all();
        $gpss_bangunan = new KriteriaGpssBangunan();
        $gpss_bangunan->fill($validatedData);
        $request->session()->put('gpss_bangunan', $gpss_bangunan);
        // $gpss_bangunan->save();
        alert()->success('Markah disimpan', 'Berjaya');
        
        return redirect('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page2/create');
    }

    public function skor_penilaian_arkitek_page2(Request $request)
    {
        // papar 2nd page GPSS architectural works

        // HTTP Sessions - to store data temporary
        $gpss_bangunan = $request->session()->all();        
        // dd($id);

        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.arkitek_page2.create', compact('gpss_bangunan'));
    }

    // public function simpan_skor_penilaian_arkitek_page2(Request $request, KriteriaGpssBangunan $gpss_bangunan)
    public function simpan_skor_penilaian_arkitek_page2(Request $request, $id)
    {
        // simpan skor penilaian

        // $gpss_bangunan = KriteriaGpssBangunan::find($id);
        // $gpss_bangunan = new KriteriaGpssBangunan($request->session()->all());
        $validatedData = $request->all();
        $gpss_bangunan = $request->session()->get('gpss_bangunan');
        $gpss_bangunan->fill($validatedData);
        $request->session()->put('gpss_bangunan', $gpss_bangunan);
        // $gpss_bangunan->save();

        alert()->success('Markah disimpan', 'Berjaya');

        return redirect('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page3/create');
    }

    public function skor_penilaian_arkitek_page3(Request $request)
    {
        // papar 2nd page GPSS architectural works
        $gpss_bangunan = $request->session()->all();        

        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.arkitek_page3.create',compact('gpss_bangunan'));
    }

    public function simpan_skor_penilaian_arkitek_page3(Request $request, $id)
    {
        // simpan skor penilaian
        $validatedData = $request->all();
        $gpss_bangunan = $request->session()->get('gpss_bangunan');
        $gpss_bangunan->fill($validatedData);
        $request->session()->put('gpss_bangunan', $gpss_bangunan);
        alert()->success('Markah disimpan', 'Berjaya');

        return redirect('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page4/create');
    }

    public function skor_penilaian_arkitek_page4(Request $request)
    {
        // papar 2nd page GPSS architectural works
        $gpss_bangunan = $request->session()->all();        
        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.arkitek_page4.create', compact('gpss_bangunan'));
    }

    public function simpan_skor_penilaian_arkitek_page4(Request $request, $id)
    {
        // simpan skor penilaian
        $validatedData = $request->all();
        $gpss_bangunan = $request->session()->get('gpss_bangunan');
        $gpss_bangunan->fill($validatedData);
        $request->session()->put('gpss_bangunan', $gpss_bangunan);
        alert()->success('Markah disimpan', 'Berjaya');

        return redirect('/penilaian_reka_bentuk_gpss/skor_penilaian_mekanikal/create');
    }

    public function skor_penilaian_mekanikal(Request $request)
    {
        // mechanical works
        $gpss_bangunan = $request->session()->all();        

        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.mekanikal.create', compact('gpss_bangunan'));
    }

    public function simpan_skor_penilaian_mekanikal(Request $request, $id)
    {
        // simpan mechanical works
        $validatedData = $request->all();
        $gpss_bangunan = $request->session()->get('gpss_bangunan');
        $gpss_bangunan->fill($validatedData);
        $request->session()->put('gpss_bangunan', $gpss_bangunan);
        alert()->success('Markah disimpan', 'Berjaya');

        return redirect('/penilaian_reka_bentuk_gpss/skor_penilaian_elektrikal/create');
    }

    public function skor_penilaian_elektrikal(Request $request)
    {
        // elektrikal works
        $gpss_bangunan = $request->session()->all();        
        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.elektrikal.create', compact('gpss_bangunan'));
    }

    public function simpan_skor_penilaian_elektrikal(Request $request, $id)
    {
        // simpan elektrikal works
        $validatedData = $request->all();
        $gpss_bangunan = $request->session()->get('gpss_bangunan');
        $gpss_bangunan->fill($validatedData);
        $request->session()->put('gpss_bangunan', $gpss_bangunan);
        alert()->success('Markah disimpan', 'Berjaya');

        return redirect('/penilaian_reka_bentuk_gpss/skor_penilaian_civil/create');
    }

    // public function skor_penilaian_elektrikal_page2(Request $request)
    // {
    //     // elektrikal works
    //     $gpss_bangunan = $request->session()->all();        

    //     return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.elektrikal_page2.create',compact('gpss_bangunan') );
    // }

    // public function simpan_skor_penilaian_elektrikal_page2(Request $request, $id)
    // {
    //     // simpan elektrikal works
    //     $validatedData = $request->all();
    //     $gpss_bangunan = $request->session()->get('gpss_bangunan');
    //     $gpss_bangunan->fill($validatedData);
    //     $request->session()->put('gpss_bangunan', $gpss_bangunan);
    //     alert()->success('Markah disimpan', 'Berjaya');
    //     $gpss_bangunan->save();

    //     return redirect('/penilaian_reka_bentuk_gpss/skor_penilaian/elektrikal_page2');
    // }

    public function skor_penilaian_civil(Request $request)
    {
        // civil works
        $gpss_bangunan = $request->session()->all(); 
        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.civil.create',compact('gpss_bangunan'));
    }

    public function simpan_skor_penilaian_civil(Request $request, $id)
    {
        // simpan civil works
        $validatedData = $request->all();
        $gpss_bangunan = $request->session()->get('gpss_bangunan');
        $gpss_bangunan->fill($validatedData);
        $request->session()->put('gpss_bangunan', $gpss_bangunan);
        alert()->success('Markah disimpan', 'Berjaya');
        // $gpss_bangunan->save();

        return redirect('/penilaian_reka_bentuk_gpss/skor_penilaian_civil_page2/create');
    }

    public function skor_penilaian_civil_page2(Request $request)
    {
        // continue civil works
        $gpss_bangunan = $request->session()->all(); 

        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.civil_page2.create',compact('gpss_bangunan'));
    }

    public function simpan_skor_penilaian_civil_page2(Request $request, $id)
    {
        // simpan civil works
        $validatedData = $request->all();
        $gpss_bangunan = $request->session()->get('gpss_bangunan');
        $gpss_bangunan->fill($validatedData);
        $request->session()->put('gpss_bangunan', $gpss_bangunan);
        alert()->success('Markah disimpan', 'Berjaya');
        $gpss_bangunan->save();

        return redirect('/penilaian_reka_bentuk_gpss/skor_penilaian');
    }



    #pengesahan penilaian for Sekretariat views
    public function pengesahan_penilaian()
    {
        // get all skor_penilaian_arkitek data
        $projeks = Projek::all();

        // show(method)
        return view('modul.penilaian_reka_bentuk_gpss.pengesahan_penilaian.index',[
            'projeks'=> $projeks,

        ]);
    }
    public function pengesahan_penilaian_skor_penilaian_arkitek($id)
    {
        $gpss_bangunan = KriteriaGpssBangunan::find($id);

        // dd('pape');
        // papar form pengesahan penilaian with id projek
        return view('modul.penilaian_reka_bentuk_gpss.pengesahan_penilaian.show',[
            'gpss_bangunan' => $gpss_bangunan
        ]);
    }

    public function pengesahan_penilaian_skor_penilaian_arkitek_page2($id)
    {
        $gpss_bangunan = KriteriaGpssBangunan::find($id);

        // dd('pape');
        // papar form pengesahan penilaian with id projek
        return view('modul.penilaian_reka_bentuk_gpss.pengesahan_penilaian.arkitek_page2.show',[
            'gpss_bangunan' => $gpss_bangunan
        ])
        ;
    }

    public function pengesahan_penilaian_skor_penilaian_arkitek_page3($id)
    {
        $gpss_bangunan = KriteriaGpssBangunan::find($id);

        // dd('pape');
        // papar form pengesahan penilaian with id projek
        return view('modul.penilaian_reka_bentuk_gpss.pengesahan_penilaian.arkitek_page3.show',[
            'gpss_bangunan' => $gpss_bangunan
        ])
        ;
    }

    public function pengesahan_penilaian_skor_penilaian_arkitek_page4($id)
    {
        $gpss_bangunan = KriteriaGpssBangunan::find($id);

        // dd('pape');
        // papar form pengesahan penilaian with id projek
        return view('modul.penilaian_reka_bentuk_gpss.pengesahan_penilaian.arkitek_page4.show',[
            'gpss_bangunan' => $gpss_bangunan
        ])
        ;
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
        $gpss_bangunan = KriteriaGpssBangunan::all();
        $projeks = Projek::all();

        return view('modul.penilaian_reka_bentuk_gpss.jana_keputusan.index',compact('projeks','gpss_bangunan'));
    }
    public function papar_jana_keputusan($id)
    {
        $projeks = Projek::all();
        $gpss_bangunan = KriteriaGpssBangunan::find($id);

        // $projeks = Projek::find($id);

        //  form jana keputusan
        return view('modul.penilaian_reka_bentuk_gpss.jana_keputusan.create',[
            'projeks' => $projeks,
            'gpss_bangunan' => $gpss_bangunan
        ]);
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

    public function createPDF($id){

        // $gpss_bangunan = KriteriaGpssBangunan::find($id);
        $pdf = FacadePdf::loadView('modul.penilaian_reka_bentuk_gpss.pengesahan_penilaian.pdf');
        return $pdf->download('sijil.pdf');
 
    }

}