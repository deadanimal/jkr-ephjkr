@extends('layouts.base')

<link rel="stylesheet" href="/cssfile/pemudah_cara_style.css">

@section('content')
<!--Title: Header-->
<div class="header">
    <div class="col-sm-6">
    Melantik Pemudah Cara 
    <b style="color: #0F5E31;">> Daftar Pemudah Cara</b>
    </div>

    <h1 class="header-title" style="color: #EB5500">
        PENILAIAN REKA BENTUK BANGUNAN
    </h1>
    {{-- horizontal line --}}
    <hr class="line-6">
</div>
    <div class="container-fluid">
        
            <div class="card-header" style="color: #EB5500">
                <b class="maklumat-pemudah-cara">Maklumat Pemudah Cara</b>
            </div>
            <div class="card-body">
                <form action="/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara/{{$projek->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PUT') --}}

                    <!--Nama-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nama:</label>
                    {{-- <div class="col-md-6"> --}}
                        <input class="kotak-nama" type="text" autocapitalize="off" name="nama" value="{{$projek->}}"/>                        
                    {{-- </div> --}}
                    </div>

                    <!--Syarikat/Cawangan-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Syarikat/Cawangan:</label>
                    {{-- <div class="col-sm-10"> --}}
                        <input class="kotak-nama" type="text" autocapitalize="off" name="syarikat_cawangan"/>                        
                    {{-- </div> --}}
                    </div>

                    <!--No. Telefon-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">No. Tel:</label>
                    {{-- <div class="col-sm-10"> --}}
                        <input class="kotak-nama" type="number" autocapitalize="off" name="no_tel"/>                        
                    {{-- </div> --}}
                    </div>

                    <!--No. Fax-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">No. Fax:</label>
                    {{-- <div class="col-sm-10"> --}}
                        <input class="kotak-nama" type="number" autocapitalize="off" name="no_fax"/>                        
                    {{-- </div> --}}
                    </div>

                    <!--Emel-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">E-mel:</label>
                    {{-- <div class="col-sm-10"> --}}
                        <input class="kotak-nama" type="text" autocapitalize="off" name="email"/>                        
                    {{-- </div> --}}
                    </div>

                    <!--Disiplin-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Disiplin:</label>
                    {{-- <div class="col-sm-10"> --}}
                        <input class="kotak-nama" type="text" autocapitalize="off" name="disiplin"/>
                    {{-- </div> --}}
                    </div>

                    <!--Button Daftar (TOOLTIPS)-->
                    <div class="text-center">
                        {{-- <a href="#" class="btn btn-primary" type="submit">Daftar</a> --}}
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Daftar Pemudah Cara" type="submit">Daftar</button>
                    </div>

                    

                    {{-- <button class="btn-daftar">Test</button> --}}

                    
                </form>
            </div>
    </div> <!--Container Fluid-->

            <!--JS-->
            <!--JS BUTTON TOOLTIPS-->
            <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
            </script>
@endsection