<?php

namespace App\Http\Controllers;

use App\Models\GugurProjek;
use App\Models\Projek;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Contracts\Role;

class GugurProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        // $gugur_projek = GugurProjek::all();
        // return view('modul.pengurusan_maklumat.pendaftaran_projek.gugur_projek.index', [
        //     'gugur_projek'=>$gugur_projek
        // ]);
        
        // return view('modul.pengurusan_maklumat.pendaftaran_projek.gugur_projek.index', [
        //     'pendaftaran_projek' => Projek::with('gugur_projek')->get()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('2');
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
        // return view('modul.pengurusan_maklumat.pendaftaran_projek.gugur_projek.edit', [
        //     'pp' => Projek::with('gugur_projek')->where('id', $id)->first(),
        //     'gugur_projek' => GugurProjek::with(['pengguna', 'peranan'])->where('projek_id', $id)->get(),
        //     'pengguna' => User::all(),
        //     'peranan' => Role::all(),

        // ]);
        
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
}
