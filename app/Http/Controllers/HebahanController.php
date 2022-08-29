<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHebahanRequest;
use App\Http\Requests\UpdateHebahanRequest;
use App\Models\Hebahan;
use Illuminate\Support\Facades\Auth;

class HebahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //
        return view('modul.pengurusan_maklumat.hebahan.index', [
            'hebahan' => Hebahan::all()
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
        return view('modul.pengurusan_maklumat.hebahan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHebahanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHebahanRequest $request)
    {
        //
        $h = new Hebahan;
        $h->tajukHebahan = $request->tajukHebahan;
        $h->jenisHebahan = $request->jenisHebahan;
        $h->user_id = Auth::id();
        $h->save();
        alert()->success('Maklumat telah disimpan', 'Berjaya');
        return redirect('/pengurusan_maklumat/hebahan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hebahan  $hebahan
     * @return \Illuminate\Http\Response
     */
    public function show(Hebahan $hebahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hebahan  $hebahan
     * @return \Illuminate\Http\Response
     */
    public function edit(Hebahan $hebahan)
    {
        //
        return view('modul.pengurusan_maklumat.hebahan.edit', [
            'h' => $hebahan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHebahanRequest  $request
     * @param  \App\Models\Hebahan  $hebahan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHebahanRequest $request, Hebahan $hebahan)
    {
        //
        $h = $hebahan;
        $h->tajukHebahan = $request->tajukHebahan;
        $h->jenisHebahan = $request->jenisHebahan;
        $h->user_id = Auth::id();
        $h->save();
        alert()->success('Maklumat telah disimpan', 'Berjaya');
        return redirect('/pengurusan_maklumat/hebahan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hebahan  $hebahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hebahan $hebahan)
    {
        //
        $hebahan->delete();
        alert()->success('Maklumat telah dihapuskan', 'Berjaya');
        return redirect('/pengurusan_maklumat/hebahan');
    }
}
