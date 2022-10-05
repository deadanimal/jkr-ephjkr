<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePenilaianRekaBentukBangunanRequest;
use App\Http\Requests\UpdatePenilaianRekaBentukBangunanRequest;
use App\Models\Projek;
use App\Models\PemudahCara;
use App\Models\KriteriaPhjkrBangunan;
use App\Models\PenilaianEphjkr;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use \PDF;
use Illuminate\Support\Facades\DB;
// use Spatie\Permission\Models\Permission;
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\PermissionRegistrar;

use Illuminate\Http\Request;

class PenilaianRekaBentukBangunanController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $projeks = Projek::all();
        // Contoh
        // $user = $request->user();
        // if($user->hasRole('alpha') or $user->hasRole('beta')) {
        //     return view('modul.penilaian_reka_bentuk_bangunan.index',[
        //         'projeks'=>$projeks
        //     ]);
        // } else {
        //     return view('tak_leh_viewla');
        // }

        // $user = $request->user();
        // if($user->hasRole('Ketua Pasukan') or $user->hasRole('Penolong Ketua Pasukan')) {
        //     return view('modul.penilaian_reka_bentuk_bangunan.create',[
        //         'projeks'=>$projeks
        //     ]);
        // } else {
        //     return view('modul.penilaian_reka_bentuk_bangunan.index');
        // }

        // Reset cached roles and permissions
        // app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        // Permission::create(['name' => 'Ketua Pasukan']);

        // create roles and assign existing permissions
        // $role1 = Role::where(['name' => 'Ketua Pasukan'])->get()->first();
        // $role1->givePermissionTo('modul.penilaian_reka_bentuk_bangunan.index');
        // $role1->givePermissionTo('delete articles');

        // $role2 = Role::create(['name' => 'Penolong Ketua Pasukan']);
        // $role2->givePermissionTo('publish articles');
        // $role2->givePermissionTo('unpublish articles');




        return view('modul.penilaian_reka_bentuk_bangunan.index',[
            'projeks'=>$projeks
        ]);


        // $user = $request->user();
        // if($user->hasRole('alpha') or $user->hasRole('beta')) {
        //     return view('modul.penilaian_reka_bentuk_bangunan.index',[
        //         'projeks'=>$projeks
        //     ]);
        // } else {
        //     return view('tak_leh_viewla');
        // }

        
        

        // paparan senarai projek


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
        $pemudah_cara =PemudahCara::find($id);

        $pemudah_cara->nama = $request->nama;
        $pemudah_cara->syarikat_cawangan = $request->syarikat_cawangan;
        $pemudah_cara->no_tel = $request->no_tel;
        $pemudah_cara->no_fax = $request->no_fax;
        $pemudah_cara->email = $request->email;
        $pemudah_cara->disiplin = $request->disiplin;
        $pemudah_cara->kategori = $request->kategori;
        $pemudah_cara->projek_id = $request->projek_id;
        alert()->success('Pemudah cara berjaya didaftar.', 'Berjaya');
        $pemudah_cara->save();

        // dd($id);
        // return redirect()->back();
        return redirect('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara');
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
        $projeks = Projek::find($id);
        $projeks->delete();
        alert()->success('Maklumat telah dihapuskan', 'Berjaya');
        return redirect('/penilaian_reka_bentuk_bangunan/pemudah_cara');
    }

    # bawah ni pemudah cara
    // ketua pasukan atau pen ketua pasukan
    public function papar_pemudah_cara()
    {
        $projeks = Projek::all();
        $pemudah_cara = PemudahCara::all();
        // $projeks = new Projek;
        // $projeks = Projek::find($id);
        // $pemudah_cara = PemudahCara::find($id);
        // $pemudah_cara = PemudahCara::find($id);
        

        // papar table projek with button melantik pemudah cara
        // return view('modul.penilaian_reka_bentuk_bangunan.pemudah_cara.index',[
        //     'projeks'=>$projeks,
        //     'pemudah_cara'=>$pemudah_cara
        // ]);

        return view('modul.penilaian_reka_bentuk_bangunan.pemudah_cara.index',
        compact('projeks'),
        compact('pemudah_cara')
        );
    }

    public function pemudah_cara($id)
    {
        // $pemudah_cara = new PemudahCara($id);
        // $pemudah_cara = PemudahCara::find($id);
        // $projeks = new Projek();
        // $projeks = Projek::all();
        // $projeks = Projek::find($id);
        $pemudah_cara = PemudahCara::find($id);

        // $user = $request->user();
        // if($user->hasRole('Pemudah Cara (bagi PHJKR Bangunan & GPSS Bangunan dan Jalan)')) {
        //     return view('modul.penilaian_reka_bentuk_bangunan.pemudah_cara.create',[
        //         'pemudah_cara'=>$pemudah_cara
        //     ]);
        // 


        // papar form pemudah cara with id projek
        
        // return view('modul.penilaian_reka_bentuk_bangunan.pemudah_cara.create',[
        //     'pemudah_cara'=>$pemudah_cara,
        //     'projeks'=>$projeks
        // ]);
    //     return view('modul.penilaian_reka_bentuk_bangunan.pemudah_cara.create', compact('pemudah_cara','id'),
    // compact('projeks'));
        return view('modul.penilaian_reka_bentuk_bangunan.pemudah_cara.create', 
        compact('pemudah_cara')
        );
        
    }

    public function kemaskini_pemudah_cara($id)
    {
        $pemudah_cara = PemudahCara::find($id);

        return view('modul.penilaian_reka_bentuk_bangunan.pemudah_cara.edit',
        compact('pemudah_cara'));
    }

    public function melantik_pemudah_cara(Request $request, $id)
    {
        // submit form melantik pemudah cara
        $pemudah_cara = new PemudahCara;

        $pemudah_cara->nama = $request->nama;
        $pemudah_cara->syarikat_cawangan = $request->syarikat_cawangan;
        $pemudah_cara->no_tel = $request->no_tel;
        $pemudah_cara->no_fax = $request->no_fax;
        $pemudah_cara->email = $request->email;
        $pemudah_cara->disiplin = $request->disiplin;
        $pemudah_cara->kategori = $request->kategori;
        $pemudah_cara->projek_id = $request->projek_id;
        alert()->success('Pemudah cara berjaya didaftar.', 'Berjaya');
        $pemudah_cara->save();

        // $projeks = Projek::find($id);
        // $projeks = new Projek;
        // $projeks->id = $request->id;
        // $projeks->save();

        // // submit form melantik pemudah cara
        return redirect('/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara');

    }

    // PemudahCara
    # bawah ni utk skor penilaian
    public function skor_penilaian()
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();
        $projeks = Projek::all();

        // $user = $request->user();
        // if($user->hasRole('Pemudah Cara (bagi PHJKR Bangunan & GPSS Bangunan dan Jalan')) {
        //     return view('modul.penilaian_reka_bentuk_bangunan.skor_penilaian.index',[
        //         'projeks'=>$projeks,
        //          'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        //     ]);

    
        // papar mcm index tapi ada button utk skor
        return view('modul.penilaian_reka_bentuk_bangunan.skor_penilaian.index',[
            'projeks'=>$projeks,
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }
    public function papar_skor_penilaian($id)
    {
        // $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);
        // $projeks = Projek::all();
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();

        // Roles
        // $user = $request->user();
        // if($user->hasRole('Pemudah Cara (bagi PHJKR Bangunan & GPSS Bangunan dan Jalan)')) {
        //     return view('modul.penilaian_reka_bentuk_bangunan.skor_penilaian.create',[
        //         'projeks'=>$projeks,
        //          'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        //     ]);
        

        // papar form skor penilaian with id projek 
        return view('modul.penilaian_reka_bentuk_bangunan.skor_penilaian.create',[
            'kriteria_phjkr_bangunan'=> $kriteria_phjkr_bangunan,
            // 'projeks'=>$projeks
        ]);
    }

    public function simpan_skor(Request $request, $id)
    {
        $penilaian_ephjkr = new PenilaianEphjkr();
        $penilaian_ephjkr->ulasan = $request->ulasan;
        $penilaian_ephjkr->save();
        // request all
        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan($request->all());

        $markah_TL_total = $request->markahTL1_MR + $request->markahTL2_MR
        + $request->markahTL3_MR + $request->markahTL32_MR + $request->markahTL4_MR + $request->markahTL5_MR + $request->markahTL6_MR
        + $request->markahTL81_MR + $request->markahTL82_MR + $request->markahTL83_MR + $request->markahTL84_MR + $request->markahTL85_MR + $request->markahTL91_MR 
        + $request->markahTL92_MR;

         $markah_KT_total = $request->markahKT1_MR + $request->markahKT2_MR
        + $request->markahKT21_MR + $request->markahKT22_MR + $request->markahKT3_MR + $request->markahKT31_MR + $request->markahKT32_MR
        + $request->markahKT4_MR + $request->markahKT52_MR + $request->markahKT8_MR + $request->markahKT11_MR;

         $markah_SB_total = $request->markahSB1_MR + $request->markahSB2_MR
        + $request->markahSB3_MR + $request->markahSB4_MR;

        $markah_PA_total = $request->markahPA1_MR + $request->markahPA2_MR
        + $request->markahPA3_MR + $request->markahPA32_MR;

        $markah_PD_total = $request->markahPD24_MR + $request->markahPD25_MR
        + $request->markahPD31_MR + $request->markahPD32_MR + $request->markahPD33_MR + $request->markahPD34_MR + $request->markahPD8_MR
        + $request->markahPD10_MR;

        $markah_FL_total = $request->markahFL1_MR + $request->markahFL2_MR
        + $request->markahFL21_MR + $request->markahFL22_MR + $request->markahFL23_MR + $request->markahFL3_MR + $request->markahFL31_MR
        + $request->markahFL32_MR + $request->markahFL33_MR + $request->markahFL34_MR;

        $markah_IN_total = $request->markahIN1_MR;



        $kriteria_phjkr_bangunan->markahTOTAL_TL_MR = $markah_TL_total;
        $kriteria_phjkr_bangunan->markahTOTAL_KT_MR = $markah_KT_total;
        $kriteria_phjkr_bangunan->markahTOTAL_SB_MR = $markah_SB_total;
        $kriteria_phjkr_bangunan->markahTOTAL_PA_MR = $markah_PA_total;
        $kriteria_phjkr_bangunan->markahTOTAL_PD_MR = $markah_PD_total;
        $kriteria_phjkr_bangunan->markahTOTAL_FL_MR = $markah_FL_total;
        $kriteria_phjkr_bangunan->markahTOTAL_IN_MR = $markah_IN_total;
        $kriteria_phjkr_bangunan->save();
        // $total = [];
        // $calc1 = 3*3;
        // $total['markahTL1_MMR'] = $calc1; 
        // $total['markahTL2_MMR'] = $calc1; 

        // $total2 = $total['markahTL1_MR'] + $total['markahTL2_MR'];

        // $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::where('','id_bangunan');
        // $kriteria_phjkr_bangunan->markahTOTAL_TL_MR = $total2;
        // $total2 = $kriteria_phjkr_bangunan->markahTL1_MR + $kriteria_phjkr_bangunan->markahTL2_MR;

        // $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::where('','id_bangunan');
        // $kriteria_phjkr_bangunan->markahTOTAL_TL_MR = $total2;
        // $kriteria_phjkr_bangunan->save();

        // $penilaian_ephjkr = new PenilaianEphjkr($request->all());
        // $penilaian_ephjkr->save();

        // $projeks = new Projek;

        // $projeks->dokumenSokongan = $request->input('dokumenSokongan');

        // Dokumen Sokongan
        // $request->file->store('public');
        // if($request->hasFile('dokumenSokongan')){
        //     $projeks = $request->file('dokumenSokongan');
        //  }

        // $projeks->save();
        // dd($markah_TL_total);

        alert()->success('PENILAIAN REKA BENTUK BANGUNAN BERJAYA', 'Berjaya');
        // simpan skor penilaian
        return redirect('/penilaian_reka_bentuk_bangunan/skor_penilaian');
    }

    // Dokumen Sokongan
    // public function dokumen_sokongan()
    // {
    //     // $dokumen = new Projek;

    //     // if($request->hasFile('dokumenSokongan')){
    //     //     $dokumen = $request->file('dokumenSokongan')->store('dokumenSokongan');
    //     //     //  $dokumen->input('dokumenSokongan') = $dokumen;
    //     // }

    //     // $dokumen->dokumenSokongan = $request->input('dokumenSokongan');
    //     // $dokumen->save();

    //     return view('modul.penilaian_reka_bentuk_bangunan.skor_penilaian.show');

    // }


    #Sekretariat
    // pengesahan penilaian
    public function pengesahan_penilaian()
    {
        $projeks = Projek::all();
        // $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::all();
        
        // Contoh AA
        // $projeks = Projek::find($id);
        // $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::where('id', $projeks->id)->get();

        // Roles
        // $user = $request->user();
        // if($user->hasRole('Sekretariat')) {
        //     return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.index',[
        //         'projeks'=>$projeks,
        //          'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        //     ]);
        
        // papar mcm index tapi ada button utk pengesahan
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.index',[
        'projeks'=>$projeks
        // 'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }
    public function papar_pengesahan_penilaian($id)
    {
        // $projeks = Projek::find($id);
        // $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::where('id', $projeks->id)->get();
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);
        $penilaian_ephjkr = PenilaianEphjkr::find($id);

        // papar form pengesahan penilaian with id projek 
        return view('modul.penilaian_reka_bentuk_bangunan.pengesahan_penilaian.show',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan,
            'penilaian_ephjkr'=>$penilaian_ephjkr
        ]);
    }

    public function simpan_pengesahan_penilaian(Request $request, $id)
    {

        alert()->success('Penilaian Disahkan.', 'Berjaya');

        // simpan pengesahan penilaian
        return redirect('/penilaian_reka_bentuk_bangunan/pengesahan_penilaian');
    }

    // Sekretariat 
    // Semakan Rawak Penilaian Reka Bentuk Bangunan

    public function semakan_rawak()
    {
        $projeks = Projek::all();

        // Roles
        // $user = $request->user();
        // if($user->hasRole('Sekretariat')) {
        //     return view('modul.penilaian_reka_bentuk_bangunan.semakan_rawak.index',[
        //         'projeks'=>$projeks,
        //          'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        //     ]);

        return view('modul.penilaian_reka_bentuk_bangunan.semakan_rawak.index',[
            'projeks'=>$projeks
        ]);

    }
    public function semakan_rawak_form($id)
    {
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);
        // $penilaian_ephjkr = PenilaianEphjkr::find($id);
        // dd($penilaian_ephjkr);

        // Roles
        // $user = $request->user();
        // if($user->hasRole('Sekretariat')) {
        //     return view('modul.penilaian_reka_bentuk_bangunan.semakan_rawak.show',[
        //         'projeks'=>$projeks,
        //          'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        //     ]);

        return view('modul.penilaian_reka_bentuk_bangunan.semakan_rawak.show',[
            'kriteria_phjkr_bangunan'=> $kriteria_phjkr_bangunan
        ]
    );

    }
    public function simpan_semakan_rawak(Request $request, $id)
    {
        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan;
        $kriteria_phjkr_bangunan->save();

        // untuk penarafan PH
        // $penilaian_ephjkr = new PenilaianEphjkr;
        // $penilaian_ephjkr->save();


        alert()->success('Semakan Rawak Disahkan.', 'Berjaya');

        return redirect('/penilaian_reka_bentuk_bangunan/semakan_rawak');

    }

    // Ketua Pasukan ATAU Penolong Ketua Pasukan
    // Muat Turun Sijil Penilaian Reka Bentuk Bangunan

    public function muat_turun_sijil()
    {
        $projeks = Projek::all();

        // Roles
        // $user = $request->user();
        // if($user->hasRole('Ketua Pasukan') or $user->hasRole('Ketua Pasukan')) {
        //     return view('modul.penilaian_reka_bentuk_bangunan.semakan_rawak.show',[
        //         'projeks'=>$projeks,
        //          'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        //     ]);

        return view('modul.penilaian_reka_bentuk_bangunan.muat_turun_sijil.index', [
            'projeks'=>$projeks
        ]);

    }
    public function muat_turun_sijil_form($id)
    {

        //letak code upload file
        // if($request->hasFile('print_sijil')){
        //     $apaapa = $request->file('print_sijil')->store('print_sijil');
        //     $apapa -> print_naziran = $apa-apa;
        // }
        $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::find($id);

        
        return view('modul.penilaian_reka_bentuk_bangunan.muat_turun_sijil.show',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);

    }
    public function simpan_muat_turun_sijil(Request $request, $id)
    {
        return redirect('/penilaian_reka_bentuk_bangunan/muat_turun_sijil');

    }

    #sekretariat JANA SIJIL
    public function jana_sijil()
    {

        return view('modul.penilaian_reka_bentuk_bangunan.jana_sijil.index');
    }

    public function papar_jana_sijil()
    {
        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan();
        // $kriteria_phjkr_bangunan = KriteriaPhjkrBangunan::where('id','$kriteria_phjkr_bangunan->id');
        
        return view('modul.penilaian_reka_bentuk_bangunan.jana_sijil.create',[
            'kriteria_phjkr_bangunan'=>$kriteria_phjkr_bangunan
        ]);
    }

    public function simpan_jana_sijil(Request $request, $id)
    {
        $kriteria_phjkr_bangunan = new KriteriaPhjkrBangunan;
        $kriteria_phjkr_bangunan->save();
        
        alert()->success('Jana Sijil.', 'Berjaya');

        return view('modul.penilaian_reka_bentuk_bangunan.jana_sijil.create');
    }

    public function createPDFBangunan($id){

        // $gpss_bangunan = KriteriaGpssBangunan::find($id);
        $pdf = FacadePdf::loadView('modul.penilaian_reka_bentuk_bangunan.muat_turun_sijil.pdf');
        return $pdf->download('sijil.pdf');
 
    }

    
}