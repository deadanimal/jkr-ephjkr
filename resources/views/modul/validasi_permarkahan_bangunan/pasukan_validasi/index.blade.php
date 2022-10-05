@extends('layouts.base')
<link rel="stylesheet" href="/cssfile/pemudah_cara_style.css">

@section('content')

<div class="header">
    <div class="col-sm-6">
        Penilaian Validasi Permarkahan Bangunan
            <b style="color: #0F5E31;">> Melantik Pasukan Validasi</b>
    </div>

        <h1 class="header-title" style="color: #EB5500">
            PENILAIAN VALIDASI PERMARKAHAN BANGUNAN
        </h1>
        <!--horizontal line-->
        <hr class="line-6">
</div>
    <div class="container-fluid">
        
            <div class="card-header" style="color: #EB5500">
                <b class="maklumat-pemudah-cara">Maklumat Pasukan Validasi</b>
            </div>
            <div class="card-body">
                <form action="/validasi_permarkahan_bangunan/melantik_pasukan_validasi/{id}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PUT') --}}

                    <!--Nama-->
                    <div class="mb-3 form-group row">
                        <label class="col-sm-2 col-form-label">Nama:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" autocapitalize="off" name="nama" value="{{$pasukan_validasi->nama}}"/>                        
                            </div>
                    </div>

                    <!--Nama Projek-->
                    {{-- <div class="mb-3 form-group row">
                        <label class="col-sm-2 col-form-label">Nama Projek:</label>
                            <div class="col-sm-7">
                                
                                <input class="form-control" type="text" autocapitalize="off" name="namaProjek" value="{{$projeks->namaProjek}}" disabled/>                    
                            </div>
                    </div> --}}

                    <!--Syarikat/Cawangan-->
                    <div class="mb-3 form-group row">
                        <label class="col-sm-2 col-form-label">Syarikat:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" autocapitalize="off" name="syarikat_cawangan" value="{{$pasukan_validasi->syarikat_cawangan}}"/>                        
                            </div>
                    </div>

                    <!--No. Telefon-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">No. Tel:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="number" autocapitalize="off" name="no_tel" value="{{$pasukan_validasi->no_tel}}"/>                        
                            </div>
                    </div>

                    <!--No. Fax-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">No. Fax:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="number" autocapitalize="off" name="no_fax" value="{{$pasukan_validasi->no_fax}}"/>                        
                            </div>
                    </div>

                    <!--Emel-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">E-mel:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" autocapitalize="off" name="email" value="{{$pasukan_validasi->email}}"/>                        
                            </div>
                    </div>

                    <!--Disiplin-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Disiplin:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" autocapitalize="off" name="disiplin" value="{{$pasukan_validasi->disiplin}}"/>
                            </div>
                    </div>

                    <!--Kategori-->
                        <input class="form-control" type="hidden" name="kategori" value="bangunan" />

                    <!--Button Daftar Pasukan Validasi (TOOLTIPS)-->
                    <div class="text-center">
                        {{-- <a href="#" class="btn btn-primary" type="submit">Daftar</a> --}}
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Daftar Pasukan Validasi" type="submit">Daftar</button>
                    </div>
                </form>
            </div> <!--card-body-->
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