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
        // paparan senarai projek untuk Ketua Pasukan/Penolong, dummy data, should be from pendaftaran projek
        // $projeks = Projek::all();
        return view('modul.penilaian_reka_bentuk_gpss.index',[
            // 'projeks'=> $projeks,
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
    // public function papar_projek()
    //  {
    //    //papar table projek with button melantik pemudah cara
    //    //should be isi form pemudahcara - create()
         
    //      return view('modul.penilaian_reka_bentuk_gpss.pemudah_cara.index', [
    //         'projeks'=> $projeks
    //      ]);
    //  }
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

        return redirect('/penilaian_reka_bentuk_gpss');
    }
    # Pemudah Cara - bawah ni utk skor penilaian
    public function skor_penilaian()
    {
        // papar mcm index tapi ada button utk skor penilaian
        // pemudah cara view, akan memasukkan markah penilaian dan memuat naik dokumen
        // below view should be in paparan senarai projek for pemudah cara, temporary
        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.index');
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

    public function skor_penilaian_arkitek()
    {
        // 1st form(create) page GPSS architectural works for Pemudah Cara
        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.arkitek.create');
    }

    public function simpan_skor_penilaian_arkitek(Request $request, $id)
    {
        // simpan skor penilaian
        $gpss_bangunan = new KriteriaGpssBangunan($request->all());
        // $gpss_bangunan->AwRoofRoofTilesClayTiles = $request->input('AwRoofRoofTilesClayTiles');
        // $gpss_bangunan->AwRoofRoofTilesConcreteTiles = $request->input('AwRoofRoofTilesConcreteTiles');
        // $gpss_bangunan->AwRoofRoofTilesMetalRoofing = $request->input('AwRoofRoofTilesMetalRoofing');
        // $gpss_bangunan->AwRoofRoofTilesShingles = $request->input('AwRoofRoofTilesShingles');
        // $gpss_bangunan->AwRoofRoofInsulationRockwool = $request->input('AwRoofRoofInsulationRockwool');
        // $gpss_bangunan->AwRoofRoofInsulationGlasswool = $request->input('AwRoofRoofInsulationGlasswool');
        // $gpss_bangunan->AwRoofRoofInsulationFoam = $request->input('AwRoofRoofInsulationFoam');
        // $gpss_bangunan->AwRoofRoofInsulationAlumFoil = $request->input('AwRoofRoofInsulationAlumFoil');
        // $gpss_bangunan->AwRoofRoofInsulationUndersheeting = $request->input('AwRoofRoofInsulationUndersheeting');
        // $gpss_bangunan->AwRoofRoofEavesMetal = $request->input('AwRoofRoofEavesMetal');
        // $gpss_bangunan->AwRoofRoofEavesFiberCement = $request->input('AwRoofRoofEavesFiberCement');
        // $gpss_bangunan->AwRoofRoofEavesPlasterboard = $request->input('AwRoofRoofEavesPlasterboard');
        // $gpss_bangunan->AwRoofFascialBoardsMetal = $request->input('AwRoofFascialBoardsMetal');
        // $gpss_bangunan->AwRoofFascialBoardsFiberCement = $request->input('AwRoofFascialBoardsFiberCement');
        // $gpss_bangunan->AwRoofFascialBoardsPlasterboard = $request->input('AwRoofFascialBoardsPlasterboard');
        // $gpss_bangunan->AwRoofFascialBoardsTimber = $request->input('AwRoofFascialBoardsTimber');
        // $gpss_bangunan->AwRoofGutterUpvc = $request->input('AwRoofGutterUpvc');
        // $gpss_bangunan->AwRoofGutterGallron = $request->input('AwRoofGutterGallron');
        // $gpss_bangunan->AwRoofGutterAluminium = $request->input('AwRoofGutterAluminium');
        // $gpss_bangunan->AwRoofGutterStainSteel = $request->input('AwRoofGutterStainSteel');
        // $gpss_bangunan->AwRoofRainPipesUpvc = $request->input('AwRoofRainPipesUpvc');
        // $gpss_bangunan->AwRoofRainPipesGallron = $request->input('AwRoofRainPipesGallron');
        // $gpss_bangunan->AwRoofRainPipesAluminium = $request->input('AwRoofRainPipesAluminium');
        // $gpss_bangunan->AwRoofRainPipesStainSteel = $request->input('AwRoofRainPipesStainSteel');
        // $gpss_bangunan->AwRoofCellingPlasterboards = $request->input('AwRoofCellingPlasterboards');
        // $gpss_bangunan->AwRoofCellingFibreCement = $request->input('AwRoofCellingFibreCement');
        // $gpss_bangunan->AwRoofCellingMetalStrip = $request->input('AwRoofCellingMetalStrip');
        // $gpss_bangunan->AwRoofTrussTimber = $request->input('AwRoofTrussTimber');
        // $gpss_bangunan->AwRoofTrussMetal = $request->input('AwRoofTrussMetal');
        // $gpss_bangunan->AwRoofTrussTimber = $request->input('AwRoofTrussTimber');
        // $gpss_bangunan->markahPRAwRoof = $request->input('markahPRAwRoof');
        // $gpss_bangunan->AwWallWallTypesBricks = $request->input('AwWallWallTypesBricks');
        // $gpss_bangunan->AwWallWallTypesTimber = $request->input('AwWallWallTypesTimber');
        // $gpss_bangunan->AwWallWallTypesBlockwork = $request->input('AwWallWallTypesBlockwork');
        // $gpss_bangunan->AwWallWallTypesReinforce = $request->input('AwWallWallTypesReinforce');
        // $gpss_bangunan->AwWallWallTypesAerated = $request->input('AwWallWallTypesAerated');
        // $gpss_bangunan->AwWallWallTypesGlass = $request->input('AwWallWallTypesGlass');
        // $gpss_bangunan->AwWallWallTypesGypsum = $request->input('AwWallWallTypesGypsum');
        // $gpss_bangunan->AwWallWallTypesCement = $request->input('AwWallWallTypesCement');
        // $gpss_bangunan->AwWallWallTypesFibreCement = $request->input('AwWallWallTypesFibreCement');
        // $gpss_bangunan->AwWallFinishesPaints = $request->input('AwWallFinishesPaints');
        // $gpss_bangunan->AwWallFinishesComposite = $request->input('AwWallFinishesComposite');
        // $gpss_bangunan->AwWallFinishesWallpaper = $request->input('AwWallFinishesWallpaper');
        // $gpss_bangunan->AwWallFinishesCeramic = $request->input('AwWallFinishesCeramic');
        // $gpss_bangunan->AwWallFinishesStones = $request->input('AwWallFinishesStones');
        // $gpss_bangunan->AwWallFinishesPebblewash = $request->input('AwWallFinishesPebblewash');
        // $gpss_bangunan->AwWallFinishesGranite = $request->input('AwWallFinishesGranite');
        // $gpss_bangunan->AwWallFinishesGlass = $request->input('AwWallFinishesGlass');
        // $gpss_bangunan->AwWallFinishesGlassBlock = $request->input('AwWallFinishesGlassBlock');
        // $gpss_bangunan->AwWallFinishesTimber = $request->input('AwWallFinishesTimber');
        // $gpss_bangunan->AwWallFinishesPaster = $request->input('AwWallFinishesPaster');
        // $gpss_bangunan->AwWallFinishesGrowall = $request->input('AwWallFinishesGrowall');
        // $gpss_bangunan->markahPRAwWall = $request->input('markahPRAwWall');
        // $gpss_bangunan->markahAwW = $request->input('markahAwW');
        // $gpss_bangunan->markahAwD = $request->input('markahAwD');
        // $gpss_bangunan->markahAwF = $request->input('markahAwF');
        // $gpss_bangunan->markahAwS = $request->input('markahAwS');
        // $gpss_bangunan->markahAwWs = $request->input('markahAwWs');
        alert()->success('Markah disimpan', 'Berjaya');
        $gpss_bangunan->save();

        return redirect('/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek/create');
    }

    public function skor_penilaian_arkitek_page2()
    {
        // papar 2nd page GPSS architectural works
        return view('modul.penilaian_reka_bentuk_gpss.skor_penilaian.arkitek_page2.create');
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