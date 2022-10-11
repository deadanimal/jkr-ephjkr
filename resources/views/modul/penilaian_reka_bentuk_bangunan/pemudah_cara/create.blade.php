@extends('layouts.base')
<link rel="stylesheet" href="/cssfile/pemudah_cara_style.css">

@section('content')
<div class="header">
    <div class="col-sm-6">
        <a href="/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara/" style="text-decoration: none; color:#5e6e82;">Melantik Pemudah Cara</a>
            <a href="/penilaian_reka_bentuk_bangunan/pemudah_cara/create/{{$pemudah_cara->id}}" style="text-decoration: none; color: #0F5E31; font-weight:bold">> Daftar Pemudah Cara</a>

    </div>

        <h1 class="header-title" style="color: #EB5500">
            PENILAIAN REKA BENTUK BANGUNAN
        </h1>
        <!--horizontal line-->
        <hr class="line-6">
</div>
<div class="container-fluid">
        
    <div class="card-header" style="color: #EB5500">
        <b class="maklumat-pemudah-cara">Maklumat Pemudah Cara</b>
    </div>
    <div class="card-body">
        <form action="/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara/{id}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- @method('PUT') --}}

            <!--Nama-->
            {{-- <input type="text" name="projek_id" value={{$projeks->id}}> --}}

            <div class="mb-3 form-group row">
                <label class="col-sm-2 col-form-label">Nama:</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" autocapitalize="off" name="nama" />                        
                    </div>
            </div>

            <!--Syarikat/Cawangan-->
            <div class="mb-3 form-group row">
                <label class="col-sm-2 col-form-label">Syarikat:</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" autocapitalize="off" name="syarikat_cawangan"/>                        
                    </div>
            </div>

            <!--No. Telefon-->
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">No. Tel:</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="number" autocapitalize="off" name="no_tel"/>                        
                    </div>
            </div>

            <!--No. Fax-->
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">No. Fax:</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="number" autocapitalize="off" name="no_fax"/>                        
                    </div>
            </div>

            <!--Emel-->
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">E-mel:</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" autocapitalize="off" name="email"/>                        
                    </div>
            </div>

            <!--Disiplin-->
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Disiplin:</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" autocapitalize="off" name="disiplin"/>
                    </div>
            </div>

            <!--Kategori-->
                <input class="form-control" type="hidden" name="kategori" value="bangunan" />

            <!--Button Daftar Pemudah Cara (TOOLTIPS)-->
            <div class="text-center">
                {{-- <a href="#" class="btn btn-primary" type="submit">Daftar</a> --}}
                <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                title="Lantik Pemudah Cara" type="submit">Lantik</button>
            </div>
        </form>
    </div> <!--card-body-->

    <div class="col-12">
        <div class="card-header">
            {{-- <div class="row mt-3"> --}}
                {{-- <div class="col text-end">
                    <a href="/penilaian_reka_bentuk_bangunan/pemudah_cara/create/{id}" class="btn btn-primary">Tambah</a>
                </div> --}}
            {{-- </div> --}}
            <div class="mt-5 row">
                        <table class="table table-bordered line-table" style="width:100%">
                                <thead class="text-white bg-orange-jkr">
                                    <tr>
                                        <th class="text-center">Bil</th>
                                        <th class="text-center">Pemudah Cara</th>
                                        <th class="text-center">Nama Projek</th>
                                        <th class="text-center">Nama Syarikat</th>
                                        <th class="text-center">Peranan</th>
                                        <th class="text-center">Tindakan</th>                                                    
                                    </tr>
                                </thead>

                            <tbody id="myTable">
                                <!--LOOPING TABLES-->
                                {{-- @foreach ($projeks as $key => $p) --}}
                                {{-- @foreach ($pemudah_cara as $key => $pc) --}}
                                {{-- @foreach ($all as $key => $p) --}}
                                {{-- @foreach ($all as $p) --}}

                                    <tr class="text-black">
                                        <td style="text-align: center; vertical-align: middle;">{{$projeks->id}}</td>
                                        <td style="text-align: center; vertical-align: middle;">{{$pemudah_cara->nama}}</td>
                                        <td style="text-align: center; vertical-align: middle;">{{$projeks->namaProjek}}</td>
                                        <td style="text-align: center; vertical-align: middle;">{{$pemudah_cara->syarikat_cawangan}}</td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            <div class="form-check">
                                                <input class="form-check-input " type="checkbox" value="" name="check" id="flexCheckDefault" onclick="onlyOne(this)">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  Ketua Pemudah Cara
                                                </label><br>
                                                
                                                <input class="form-check-input" type="checkbox" value="" name="check" id="flexCheckDefault" onclick="onlyOne(this)">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  Pemudah Cara
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="/penilaian_reka_bentuk_bangunan/pemudah_cara/edit/{{$pemudah_cara->id}}"
                                                        class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                </div>
                                                <div class="col-auto">
                                                    <form action="/penilaian_reka_bentuk_bangunan/pemudah_cara/{{$pemudah_cara->id}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-outline-primary"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                {{-- @endforeach --}}
                                {{-- @endforeach --}}
                            </tbody>
                            {{-- </table> --}}
                        </table> 
                    {{-- </div>
                </div>
                </div> --}}
            </div>
        </div>
    </div>
</div> <!--Container Fluid-->

            <!--JavaScript-->
            <!--JS BUTTON TOOLTIPS-->
            <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
            </script>

            <!--Checkbox (Select one only)-->
            <script>
                function onlyOne(checkbox) {
                    var checkboxes = document.getElementsByName('check')
                    checkboxes.forEach((item) => {
                        if (item !== checkbox) item.checked = false
                    })
                }
            </script>
@endsection