<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjekPemilihanAhliRequest;
use App\Http\Requests\UpdateProjekPemilihanAhliRequest;
use App\Models\Projek;
use App\Models\ProjekPemilihanAhli;
use App\Models\User;
use Spatie\Permission\Models\Role;

class ProjekPemilihanAhliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modul.pengurusan_maklumat.pendaftaran_projek.pemilihan_ahli.index', [
            'pendaftaran_projek' => Projek::with('status')->get()
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjekPemilihanAhliRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjekPemilihanAhliRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjekPemilihanAhli  $projekPemilihanAhli
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd(ProjekPemilihanAhli::with(['pengguna', 'peranan'])->where('projek_id', $id)->get());
        return view('modul.pengurusan_maklumat.pendaftaran_projek.pemilihan_ahli.edit', [
            'pp' => Projek::with('ahli')->where('id', $id)->first(),
            'ahli' => ProjekPemilihanAhli::with(['pengguna', 'peranan'])->where('projek_id', $id)->get(),
            'pengguna' => User::all(),
            'peranan' => Role::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjekPemilihanAhli  $projekPemilihanAhli
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjekPemilihanAhli $projekPemilihanAhli)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjekPemilihanAhliRequest  $request
     * @param  \App\Models\ProjekPemilihanAhli  $projekPemilihanAhli
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjekPemilihanAhliRequest $request, $id)
    {
        $ahli = new ProjekPemilihanAhli($request->all());
        $ahli->save();

        return redirect('/pengurusan_maklumat/pemilihan_ahli/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjekPemilihanAhli  $projekPemilihanAhli
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjekPemilihanAhli $projekPemilihanAhli)
    {
        //
    }
}
