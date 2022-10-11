@extends('layouts.base')
<link rel="stylesheet" href="/cssfile/pemudah_cara_style.css">

@section('content')

<div class="header">
    <div class="col-sm-6">
        Melantik Pemudah Cara 
            <b style="color: #0F5E31;">> Lantik Pemudah Cara</b>
    </div>

        <h1 class="header-title" style="color: #EB5500">
            PENILAIAN REKA BENTUK BANGUNAN
        </h1>
        <hr class="line-6">
</div>
    <div class="container-fluid">
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
                                        @foreach ($projeks as $key => $p)
                                        {{-- @foreach ($pemudah_cara as $key => $pc) --}}
                                        {{-- @foreach ($all as $key => $p) --}}
                                        {{-- @foreach ($all as $p) --}}

                                            <tr class="text-black">
                                                <td style="text-align: center; vertical-align: middle;">{{$p->id}}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{$p->nama}}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{$p->namaProjek}}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{$p->syarikat_cawangan}}</td>
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
                                                            <a href="/penilaian_reka_bentuk_bangunan/pemudah_cara/edit/{{$p->id}}"
                                                                class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                        </div>
                                                        <div class="col-auto">
                                                            <form action="/penilaian_reka_bentuk_bangunan/pemudah_cara/{{$p->id}}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm btn-outline-primary"><i class="fas fa-trash-alt"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                        @endforeach
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


            {{-- <div class="card-header" style="color: #EB5500">
                <b class="maklumat-pemudah-cara">Maklumat Pemudah Cara</b>
            </div> --}}

            
            {{-- <div class="card-body">
                <form action="/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara/{id}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST') --}}

                    <!--Nama Pemudah Cara-->
                    {{-- <input type="text" name="projek_id" value={{$projeks->id}}> --}}

                    {{-- <div class="mb-3 form-group row">
                        <label class="col-sm-2 col-form-label">Pemudah Cara:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" autocapitalize="off" name="nama" value="{{$pemudah_cara->nama}}"/>                        
                            </div>
                    </div> --}}

                    <!--Nama Projek-->
                    {{-- <div class="mb-3 form-group row">
                        <label class="col-sm-2 col-form-label">Nama Projek:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" autocapitalize="off" name="namaProjek"/> 
                            </div>
                    </div> --}}

                    {{-- <!--Nama Syarikat-->
                    <div class="mb-3 form-group row">
                        <label class="col-sm-2 col-form-label">Nama Syarikat:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" autocapitalize="off" name="namaProjek"/> 
                            </div>
                    </div> --}}

                    <!--Syarikat/Cawangan-->
                    {{-- <div class="mb-3 form-group row">
                        <label class="col-sm-3 col-form-label">Syarikat/Cawangan:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" autocapitalize="off" name="syarikat_cawangan"/>                        
                            </div>
                    </div> --}}

                    <!--Nama Pemudah Cara-->
                    {{-- <input type="text" name="projek_id" value={{$projeks->id}}> --}}

                    {{-- <div class="mb-3 form-group row">
                        <label class="col-sm-3 col-form-label">Pemudah Cara:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" autocapitalize="off" name="nama" value="{{$pemudah_cara->nama}}"/>                        
                            </div>
                    </div> --}}

                    <!--No. Telefon-->
                    {{-- <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">No. Tel:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="number" autocapitalize="off" name="no_tel" />                        
                            </div>
                    </div> --}}

                    <!--No. Fax-->
                    {{-- <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">No. Fax:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="number" autocapitalize="off" name="no_fax"/>                        
                            </div>
                    </div> --}}

                    <!--Emel-->
                    {{-- <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">E-mel:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" autocapitalize="off" name="email"/>                        
                            </div>
                    </div> --}}

                    <!--Disiplin-->
                    {{-- <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Disiplin:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" autocapitalize="off" name="disiplin"/>
                            </div>
                    </div> --}}

                    <!--Peranan-->
                    {{-- <div class="mb-3 row form-check form-check-inline">
                        <label class="col-sm-2 col-form-label">Peranan:</label>
                            <div class="col-sm-7">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            </div>
                        <label class="form-check-label" for="inlineCheckbox1">Ketua Pemudah Cara</label>
                    </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Pemudah Cara</label>
                      </div> --}}

                      <!--Peranan-->
                    


                    <!--Kategori-->
                        {{-- <input class="form-control" type="hidden" name="kategori" value="bangunan" /> --}}

                    <!--Button Daftar Pemudah Cara (TOOLTIPS)-->
                    {{-- <div class="text-center"> --}}
                        {{-- <a href="#" class="btn btn-primary" type="submit">Daftar</a> --}}
                        {{-- <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Lantik Pemudah Cara" type="submit">Lantik</button>
                    </div>
                </form> --}}
            </div> <!--card-body-->
    </div> <!--Container Fluid-->

            <!--JavaScript-->
            <!--BUTTON TOOLTIPS-->
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