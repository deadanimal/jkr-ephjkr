<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modul.pengurusan_maklumat.senarai_pengguna.index', [
            'pengguna' => User::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modul.pengurusan_maklumat.senarai_pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->icPengguna = $request->icPengguna;
        $user->email = $request->email;
        $user->notelbimbitPengguna = $request->notelbimbitPengguna;
        $user->nofaxPengguna = $request->nofaxPengguna;
        $user->namaSyarikat = $request->namaSyarikat;
        $user->alamatSyarikat = $request->alamatSyarikat;
        $user->daerah = $request->daerah;
        $user->negeri = $request->negeri;
        $user->sijilKompeten = $request->sijilKompeten;
        $user->kelayakanAkademik = $request->kelayakanAkademik;
        $user->password = Hash::make('pnsb1234');
        $user->katalaluan = 'pnsb1234';
        $user->save();
        $user->assignRole('Pengguna');
        alert()->success('Pengguna berjaya didaftar. Sila sahkan dibahagian Pengesahan Pengguna.', 'Berjaya');
        return redirect('/pengurusan_maklumat/senarai_pengguna');
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
        return view('modul.pengurusan_maklumat.senarai_pengguna.edit', [
            'pengguna' => User::find($id)
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
        $pengguna = User::find($id);
        $input = $request->all();
        $pengguna->fill($input)->save();
        alert()->success('Maklumat telah dikemaskini', 'Berjaya');
        return redirect('/pengurusan_maklumat/senarai_pengguna');
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

    public function pengguna_sembunyi()
    {
        //dd('sd');
        return view('modul.pengurusan_maklumat.senarai_pengguna.pengguna_disembunyi', [
            'pengguna' => User::get()
        ]);
    }
}
