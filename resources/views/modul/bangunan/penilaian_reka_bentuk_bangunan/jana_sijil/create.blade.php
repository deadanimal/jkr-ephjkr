@extends('layouts.base')

@section('content')
<!--Title: Header-->
<div class="header">
    <h1 class="header-title" style="color: #EB5500">
        Penilaian Reka Bentuk Bangunan
    </h1>
    {{-- horizontal line --}}
    <hr style="color: #EB5500"></hr>
</div>
    {{-- <div class="container-fluid"> --}}
        {{-- <div class="card"> --}}
            <div class="card-header" style="color: #EB5500">
                {{-- <b>Maklumat Pemudah Cara</b> --}}
            </div>
            <div class="card-body">
                <form action="/jana_sijil" method="post" enctype="multipart/form-data">
                    @csrf

                    <!--Nama-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nama:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="name" placeholder="Nama"/>                        
                    </div>
                    </div>

                    <!--ID Rujukan Skala-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">ID Rujukan Skala:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="name" placeholder="ID Rujukan Skala"/>                        
                    </div>
                    </div>

                    <!--Alamat-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Alamat:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="name" placeholder="Alamat"/>                        
                    </div>
                    </div>

                    <!--Kos Projek Semasa-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Kos Projek Semasa:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" autocapitalize="off" name="name" placeholder="Kos Projek Semasa"/>                        
                    </div>
                    </div>

                    <!--Button Daftar-->
                    {{-- <button class="btn btn-primary" type="submit">Daftar</button> --}}

                    <!--Button Jana (TOOLTIPS)-->
                    <div class="text-left">
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Daftar Pemudah Cara" type="submit">Jana</button>
                    </div>

                    
                </form>
            </div>
        {{-- </div> <!--Card--> --}}
    {{-- </div> <!--Container Fluid--> --}}

            <!--JS-->
            <!--JS BUTTON TOOLTIPS-->
            <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
            </script>
@endsection