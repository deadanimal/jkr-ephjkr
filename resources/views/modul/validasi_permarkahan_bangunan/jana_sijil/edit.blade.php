@extends('layouts.base')
<link rel="stylesheet" href="/cssfile/skor_penilaian.css">
<link rel="stylesheet" href="/cssfile/style.css">

@section('content')
<div class="header">
    <div class="col-sm-6">
        Penilaian Reka Bentuk Bangunan 
        <b style="color: #0F5E31;">> Jana Sijil</b>
    </div>
            <h1 class="header-title">
                PENILAIAN VALIDASI PERMARKAHAN BANGUNAN
            </h1>
            <hr class="line-6">

<div class="container-fluid">
    <div class="card-body">
        <form action="/validasi_permarkahan_bangunan/pengesahan_rayuan/{id}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- @method('PUT') --}}

            <!--Nama Projek-->
            <div class="mb-3 form-group row">
                <label class="col-sm-2 col-form-label">Nama Projek:</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" autocapitalize="off" name="namaProjek" placeholder="Hospital Seri Iskandar" value="{{$pemudah_cara ?? ''}}"/>   
                    </div>                     
            </div>

            <!--ID Rujukan Skala-->
            <div class="mb-3 form-group row">
                <label class="col-sm-2 col-form-label">ID Rujukan Skala:</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" autocapitalize="off" name="id_ruj_skala" placeholder="SKL0202" value="{{$pemudah_cara ?? ''}}"/>  
                    </div>                      
            </div>

            <!--Alamat-->
            <div class="mb-3 form-group row">
                <label class="col-sm-2 col-form-label">Alamat:</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" autocapitalize="off" name="alamatProjek" placeholder="Mukah" value="{{$pemudah_cara ?? ''}}"/>   
                    </div>                         
            </div>

            <!--Kos Projek Semasa-->
            <div class="mb-3 form-group row">
                <label class="col-sm-2 col-form-label">Kos Projek Semasa:</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="number" autocapitalize="off" name="kosProjek" placeholder="RM 5,000,000.00" value="{{$pemudah_cara ?? ''}}"/>                        
                    </div>
            </div>

            <!--Button Jana Sijil-->
            <div class="text-center">
                <a class="btn btn-primary" href="/validasi_permarkahan_bangunan/jana_sijil/edit" role="button"
                data-toggle="tooltip" data-placement="bottom" title="Jana">Jana</a>
            </div>


        </form>
    </div>
</div>


@endsection