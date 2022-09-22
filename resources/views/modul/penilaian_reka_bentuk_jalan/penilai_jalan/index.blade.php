@extends('layouts.base')
@section('content')
    <!--header-->
    <div class="row mb-3">
        <div class="col">
            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                        Melantik Penilai Jalan
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3 class="mb-0 text-primary"><strong>PENILAIAN REKA BENTUK JALAN</strong></h3>
        </div>
    </div>

    <hr class="text-primary mb-3">

    <div class="row">
        <div class="col">
            <h4 class="mb-0 text-primary"><strong>Lantikan Penilai Jalan</strong></h4>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-oranje-jkr">
                <b></b>
            </div>
            <div class="card-body">
                <form action= "/penilaian_reka_bentuk_gpss/melantik_pemudah_cara/{id}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!--Nama-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nama Projek:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="nama" value="{{ $pemudah_cara ?? '' }}" />
                    </div>
                    </div>
                    <!--Syarikat/Cawangan-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Syarikat:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="syarikat_cawangan" value="{{ $pemudah_cara ?? '' }}" />
                    </div>
                    </div>
                    <!--No. Telefon-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nama Penilai Jalan:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="no_tel" value="{{ $pemudah_cara ?? '' }}" />
                    </div>
                    </div>
                    <!--No. Fax-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">No. Tel:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="no_fax" value="{{ $pemudah_cara ?? '' }}" />
                    </div>
                    </div>
                    <!--Emel-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">E-mel:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="email" value="{{ $pemudah_cara ?? '' }}" />
                    </div>
                    </div>
                    <!--No. Fax-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">No. Fax:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="no_fax" value="{{ $pemudah_cara ?? '' }}" />
                    </div>
                    </div>
                    
                    
                    <!--Button Daftar-->
                    {{-- <button class=“btn btn-primary” type=“submit”>Daftar</button> --}}
                    <!--Button Daftar (TOOLTIPS)-->
                    <div class="text-center" align="right">
                        <button class="btn btn-secondary" data-toggle="tooltip" data-placement="center"
                        title="Batal_Pemudah_Cara" type="button">Batal</button>
                        <button class="btn btn-warning" data-toggle="tooltip" data-placement="center"
                        title="Daftar Pemudah Cara" type="submit">Lantik Penilai Jalan</button>
                    </div>
                </form>
            </div>
        </div> <!--Card-->
    </div>
    
    
    <!--Container Fluid-->
            <!--JS-->
            <!--JS BUTTON TOOLTIPS-->
            <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
            </script>

@endsection

