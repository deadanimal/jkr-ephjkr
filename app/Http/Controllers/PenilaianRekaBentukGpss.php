<?php

namespace App\Http\Controllers;

use App\Models\PemudahCara;
use App\Models\Projek;
use Illuminate\Http\Request;

class PenilaianRekaBentukGpss extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projeks = Projek::all();
        return view('bla.bal', [
            'projeks' => $projeks
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
        $projek = Projek::find($id);
        return view('bla.bla.show', [
            'projek'=>$projek
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

    public function melantik_pemudah_cara(Request $request, $id)
    {
        $pemudah_cara = new PemudahCara;
        $pemudah_cara->pengguna = $request->pengguna; //pemudah cara = user_id
        $pemudah_cara->projek_id = $id; 
        $pemudah_cara->save();
        alert()->success('Telah disimpan', 'Berjaya');
        return redirect('/balbla');
    }
}
