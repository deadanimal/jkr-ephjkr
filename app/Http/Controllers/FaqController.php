<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('modul.pengurusan_maklumat.faq.index', [
            'faq' => Faq::all()
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
        return view('modul.pengurusan_maklumat.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFaqRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaqRequest $request)
    {
        //
        $f = new Faq;
        $f->namaFAQ = $request->namaFAQ;
        $f->soalanFAQ = $request->soalanFAQ;
        $f->JawapanFAQ = $request->JawapanFAQ;
        $f->user_id = Auth::id();
        $f->save();
        alert()->success('Maklumat telah disimpan', 'Berjaya');
        return redirect('/pengurusan_maklumat/faq');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        $faq = Faq::all();
        return view('modul.pengurusan_maklumat.faq.edit', [
            'f' => $faq
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFaqRequest  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        //
        $f = $faq;
        $f->namaFAQ = $request->namaFAQ;
        $f->soalanFAQ = $request->solanFAQ;
        $f->JawapanFAQ = $request->JawapanFAQ;
        $f->save();
        alert()->success('Maklumat telah disimpan', 'Berjaya');
        return redirect('/pengurusan_maklumat/faq');
        // if ($request->failManual != null) {
        //     $dokumen_sokongan = time() . '_' . Auth::id() . '.' . $request->failManual->extension();
        //     $request->failManual->move(public_path('dokumen_sokongan/manual_dan_standard'), $dokumen_sokongan);
        //     $f->failManual = 'dokumen_sokongan/manual_dan_standard/' . $dokumen_sokongan;
        //     $f->user_id = Auth::id();
        
        
        //
        // $f = Faq;
        // $f->namaFAQ = $request->namaFAQ;
        // $f->soalanFAQ = $request->soalanFAQ;
        // $f->JawapanFAQ = $request->JawapanFAQ;
        // $f->user_id = Auth::id();
        // $f->save();
        // alert()->success('Maklumat telah disimpan', 'Berjaya');
        // return redirect('/pengurusan_maklumat/faq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        //
    }
}

