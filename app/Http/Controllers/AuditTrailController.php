<?php

namespace App\Http\Controllers;


use App\Http\Requests\Request;
use App\Http\Requests\StoreAuditTrailRequest;
use App\Http\Requests\UpdateAuditTrailRequest;
use App\Mail\PengesahanPengguna;
use App\Models\AuditTrail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuditTrailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //dd('dsa');
        $selenggara_log = AuditTrail::with('pengguna')->where('user_id',Auth::user()->id)->get();
        return view('modul.pengurusan_maklumat.selenggara.log_audit.index', [
            'selenggara_log'=>$selenggara_log
        ]);

        // dd('selenggara_log');
        // $selenggara_log = AuditTrail::all();
        // return view('modul.pengurusan_maklumat.selenggara.log_audit.index', [
        //     'selenggara_log'=>$selenggara_log,
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            Mail::to('najhan.mnajib@gmail.com')->send(new PengesahanPengguna());
            dd('done');
        } catch (\Throwable $th) {
            dd('error');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAuditTrailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuditTrailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AuditTrail  $auditTrail
     * @return \Illuminate\Http\Response
     */
    public function show(AuditTrail $auditTrail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuditTrail  $auditTrail
     * @return \Illuminate\Http\Response
     */
    public function edit(AuditTrail $auditTrail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAuditTrailRequest  $request
     * @param  \App\Models\AuditTrail  $auditTrail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAuditTrailRequest $request, AuditTrail $auditTrail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuditTrail  $auditTrail
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuditTrail $auditTrail)
    {
        //
    }

    // public function tunjuk_audit(Request $request)
    // {
    //     $user_id = $request->user()->id;
    //     $semua_aktiviti = Activity::where('user_id', $user_id)->get();
       
    // }

    public static function audit($tindakan, $model, $id)
    {
        //dd('sdf');
        $audit = new AuditTrail;
        $audit->user_id = Auth::id();
        //$audit->icPengguna = Auth::user()->icPengguna;
        $audit->tindakan = strtoupper($tindakan);
        $audit->prosesAktiviti = ucwords($tindakan).''. ucwords($model).' ID='.$id;
        $audit->save();
    }
}
