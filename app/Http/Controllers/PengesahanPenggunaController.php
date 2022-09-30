<?php

namespace App\Http\Controllers;

use App\Mail\PendaftaranLulus;
use App\Mail\PendaftaranTolak;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PengesahanPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modul.dashboard.pengesahan_pengguna.index', [
            'pengguna'=>User::where('status_akaun', null)->where('icPengguna', '!=', '010101010101')->get(),
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
        return view('modul.dashboard.pengesahan_pengguna.show', [
            'pengguna' => User::find($id)
        ]);
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
        $pengguna = User::find($id);
        $pengguna->status_akaun = $request->status_akaun;
        $pengguna->save();
        if ($request->status_akaun == 'Lulus') {
            Mail::to($pengguna->email)->send(new PendaftaranLulus());
        } else {
            Mail::to($pengguna->email)->send(new PendaftaranTolak());
        }
        
        alert()->success('Pengesahan pengguna telah berjaya', 'Berjaya');
        return redirect('/dashboard/pengesahan_pengguna');
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
