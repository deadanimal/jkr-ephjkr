@extends('layouts.base')

@section('content')
<!--Title: Header-->
<div class="header">
    Melantik Pemudah Cara > Daftar Pemudah Cara
    <h1 class="header-title" style="color: #EB5500">
        Penilaian Reka Bentuk Bangunan
    </h1>
    {{-- horizontal line --}}
    <hr style="color: #EB5500"></hr>
</div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header" style="color: #EB5500">
                <b>Maklumat Pemudah Cara</b>
            </div>
            <div class="card-body">
                <form action="/pemudah_cara_bangunan" method="post" enctype="multipart/form-data">
                    @csrf

                    <!--Nama-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nama:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="name" placeholder="Nama"/>                        
                    </div>
                    </div>

                    <!--Syarikat/Cawangan-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Syarikat/Cawangan:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="name" placeholder="Syarikat"/>                        
                    </div>
                    </div>

                    <!--No. Telefon-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">No. Tel:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" autocapitalize="off" name="name" placeholder="No.Tel"/>                        
                    </div>
                    </div>

                    <!--No. Fax-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">No. Fax:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" autocapitalize="off" name="name" placeholder="No.Fax"/>                        
                    </div>
                    </div>

                    <!--Emel-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">E-mel:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="name" placeholder="Emel"/>                        
                    </div>
                    </div>

                    <!--Disiplin-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Disiplin:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="name" placeholder="Disiplin"/>
                    </div>
                    </div>

                    <!--Button Daftar (TOOLTIPS)-->
                    <div class="text-center">
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Daftar Pemudah Cara" type="submit">Daftar</button>
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