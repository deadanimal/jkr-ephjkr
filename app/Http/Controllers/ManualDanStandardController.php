<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreManualDanStandardRequest;
use App\Http\Requests\UpdateManualDanStandardRequest;
use App\Models\ManualDanStandard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ManualDanStandardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modul.pengurusan_maklumat.manual_dan_standard.index', [
            'manual_dan_standard' => ManualDanStandard::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modul.pengurusan_maklumat.manual_dan_standard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreManualDanStandardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreManualDanStandardRequest $request)
    {
        $mds = new ManualDanStandard;
        $mds->namaManual = $request->namaManual;
        $dokumen_sokongan = time() . '_' . Auth::id() . '.' . $request->failManual->extension();
        $request->failManual->move(public_path('dokumen_sokongan/manual_dan_standard'), $dokumen_sokongan);
        $mds->failManual = 'dokumen_sokongan/manual_dan_standard/' . $dokumen_sokongan;
        $mds->user_id = Auth::id();
        $mds->save();

        AuditTrailController::audit('create', 'pengguna', $mds->id);
        alert()->success('Maklumat telah disimpan', 'Berjaya');
        return redirect('/pengurusan_maklumat/manual_dan_standard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ManualDanStandard  $manualDanStandard
     * @return \Illuminate\Http\Response
     */
    public function show(ManualDanStandard $manualDanStandard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManualDanStandard  $manualDanStandard
     * @return \Illuminate\Http\Response
     */
    public function edit(ManualDanStandard $manualDanStandard)
    {
        return view('modul.pengurusan_maklumat.manual_dan_standard.edit', [
            'mds' => $manualDanStandard
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateManualDanStandardRequest  $request
     * @param  \App\Models\ManualDanStandard  $manualDanStandard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateManualDanStandardRequest $request, ManualDanStandard $manualDanStandard)
    {
        $mds = $manualDanStandard;
        $mds->namaManual = $request->namaManual;
        if ($request->failManual != null) {
            $dokumen_sokongan = time() . '_' . Auth::id() . '.' . $request->failManual->extension();
            $request->failManual->move(public_path('dokumen_sokongan/manual_dan_standard'), $dokumen_sokongan);
            $mds->failManual = 'dokumen_sokongan/manual_dan_standard/' . $dokumen_sokongan;
            $mds->user_id = Auth::id();
        }
        $mds->save();

        AuditTrailController::audit('update', 'pengguna', $mds->id);
        alert()->success('Maklumat telah disimpan', 'Berjaya');
        return redirect('/pengurusan_maklumat/manual_dan_standard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManualDanStandard  $manualDanStandard
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManualDanStandard $manualDanStandard)
    {
        $manualDanStandard->delete();
        alert()->success('Maklumat telah dihapuskan', 'Berjaya');
        return redirect('/pengurusan_maklumat/manual_dan_standard');
    }
}
