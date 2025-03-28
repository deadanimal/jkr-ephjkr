@extends('layouts.base')

@section('content')


    <!--header-->
<div class="header">
    
    <h1 class="header-title" style="color: #EB5500">
        PENILAIAN REKA BENTUK GPSS
    </h1>
    
    <hr style="color: #EB5500">
</div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header" style="color: #EB5500">
                <b>Maklumat Pemudah Cara</b>
            </div>
            <div class="card-body">
                <form action="/penilaian_reka_bentuk_gpss" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!--Nama-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nama:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="nama" id="nama" />                        
                    </div>
                    </div>

                    <!--Syarikat/Cawangan-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Syarikat:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="syarikat"/>                        
                    </div>
                    </div>

                    <!--No. Telefon-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">No. Tel:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" autocapitalize="off" name="nomborTelefon"/>                        
                    </div>
                    </div>

                    <!--No. Fax-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">No. Fax:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" autocapitalize="off" name="nomborFax"/>                        
                    </div>
                    </div>

                    <!--Emel-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">E-mel:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="emel"/>                        
                    </div>
                    </div>

                    <!--Disiplin-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Disiplin:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="disiplin"/>
                    </div>
                    </div>

                    <!--Button Daftar-->
                    {{-- <button class="btn btn-primary" type="submit">Daftar</button> --}}

                    <!--Button Daftar (TOOLTIPS)-->
                    <div class="text-center">
                        <a href="/penilaian_reka_bentuk_gpss" type="submit" class="btn btn-warning">Daftar</a>

                        {{-- <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" 
                        title="Daftar Pemudah Cara" type="submit">Daftar</button> --}}
                    </div>

                    
                </form>
            </div>
        </div> <!--Card-->
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