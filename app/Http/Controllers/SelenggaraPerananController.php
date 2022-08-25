<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class SelenggaraPerananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $nama = Role::select('nama')->get();
        // return view ('modul.pengurusan_maklumat.selenggara.selenggara_peranan.index', compact('nama'));
        $peranan = Role::all();
        return view('modul.pengurusan_maklumat.selenggara.selenggara_peranan.index', [
            'peranan'=>$peranan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modul.pengurusan_maklumat.selenggara.selenggara_peranan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Role::create(['name' => $request->nama]);
        return redirect('/pengurusan_maklumat/selenggara/selenggara_peranan');
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
        $peranan = Role::all();
        return view('modul.pengurusan_maklumat.selenggara.selenggara_peranan.edit', [
            'peranan' => $peranan
        ]);
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
        $peranan = Role::find($id);
        Role::create(['name' => $request->nama]);
        return redirect('/pengurusan_maklumat/selenggara/selanggara_peranan');
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
        $peranan = Role::find($id);
        $peranan->delete();
        alert()->success('Maklumat telah dihapuskan', 'Berjaya');
        return redirect('/pengurusan_maklumat/selenggara/selenggara_peranan');
    }
}
