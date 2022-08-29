<?php

namespace App\Http\Controllers;

use App\Models\Hebahan;
use Illuminate\Http\Request;

class SelenggaraHebahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $selenggara_hebahan = Hebahan::all();
        return view('modul.pengurusan_maklumat.selenggara.selenggara_hebahan.index', [
            'selenggara_hebahan'=>$selenggara_hebahan
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
        return view('modul.pengurusan_maklumat.selenggara.selenggara_hebahan.create');
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
        // SelenggaraHebahanController::create(['tajukHebahan' => $request->tajukHebahan]);
        // return redirect('/pengurusan_maklumat/selenggara/selenggara_hebahan');
        
        $selenggara_hebahan = new Hebahan;
        $selenggara_hebahan->tajukHebahan = $request->tajukHebahan;
        
        
        $selenggara_hebahan->save();
        
        alert()->success('Maklumat telah disimpan', 'Berjaya');
        return redirect('/pengurusan_maklumat/selenggara/selenggara_hebahan');
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
        return view('modul.pengurusan_maklumat.selenggara.selenggara_hebahan.edit');
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
        $selenggara_hebahan = Hebahan::find($id);
        Hebahan::create(['tajukHebahan' => $request->tajukHebahan]);
        return redirect('/pengurusan_maklumat/selenggara/selanggara_hebahan');
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
        $selenggara_hebahan = Hebahan::find($id);
        $selenggara_hebahan->delete();
        alert()->success('Maklumat telah dihapuskan', 'Berjaya');
        return redirect('/pengurusan_maklumat/selenggara/selenggara_hebahan');
    }
}
