<?php

namespace App\Http\Controllers;

use App\Models\PerananProjek;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modul.pengurusan_maklumat.profil_pengguna.index', [
            'pengguna' => Auth::user()
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
        return view('modul.pengurusan_maklumat.profil_pengguna.edit', [
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
        return redirect('/pengurusan_maklumat/profil_pengguna');
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

    public function penukaran_peranan($id)
    {
        $pengguna = User::find($id);
        $peranan = Role::all();
        $projek = PerananProjek::with(['projek', 'peranan','pengguna'])->where('user_id', $id)->get();
        return view('modul.pengurusan_maklumat.profil_pengguna.peranan', [
            'pengguna'=>$pengguna,
            'peranan'=>$peranan,
            'projek'=>$projek
        ]);
    }

    public function update_peranan(Request $request, $id)
    {
        $perananProjek = PerananProjek::where('user_id', $id)->where('projek_id', $request->projek_id)->first();
        if ($perananProjek == null) {
            $perananProjek = new PerananProjek;
        }
        $perananProjek->user_id = $id;
        $perananProjek->projek_id = $request->projek_id;
        $perananProjek->role_id = $request->role_id;
        $perananProjek->save();
        alert()->success('Peranan telah dikemaskini', 'Berjaya');
        return redirect('/pengurusan_maklumat/profil_pengguna');
    }
}
