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
    <div class="table-responsive scrollbar">
    <div class="card-body">
        <form action="/validasi_permarkahan_bangunan/jana_keputusan/{id}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- @method('PUT') --}}

            <!--Nama Projek-->
            {{-- <div class="mb-3 form-group row">
                <label class="col-sm-2 col-form-label">Nama Projek:</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" autocapitalize="off" name="namaProjek" placeholder="Hospital Seri Iskandar" value="{{$pemudah_cara ?? ''}}"/>   
                    </div>                     
            </div> --}}

            <!--ID Rujukan Skala-->
            {{-- <div class="mb-3 form-group row">
                <label class="col-sm-2 col-form-label">ID Rujukan Skala:</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" autocapitalize="off" name="id_ruj_skala" placeholder="SKL0202" value="{{$pemudah_cara ?? ''}}"/>  
                    </div>                      
            </div> --}}

            <!--No Telefon-->
            {{-- <div class="mb-3 form-group row">
                <label class="col-sm-2 col-form-label">No. Tel:</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" autocapitalize="off" name="no_tel" placeholder="Mukah" value="{{$pemudah_cara ?? ''}}"/>   
                    </div>                         
            </div> --}}

            <!--Kos Projek Semasa-->
            {{-- <div class="mb-3 form-group row">
                <label class="col-sm-2 col-form-label">Kos Projek Semasa:</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="number" autocapitalize="off" name="kosProjek" placeholder="RM5,000,000.00" value="{{$pemudah_cara ?? ''}}"/>                        
                    </div>
            </div>
        </div> --}}

        {{-- <div class="row mx-3">
            <table class="table table-bordered line-table shadow-table-jkr line-corner-table-jkr">
                <thead class="text-white line-table">
                    <tr align="center" style="background-color:#EB5500">
                        <th colspan="3">Jenis Pembangunan</th>
                        <th colspan="8">Pembangunan Baru</th>
                    </tr>
                
                    <tr align="center" style="background-color:#EB5500">
                        <th colspan="3">Peratusan Mengikut Kriteria</th>
                        <th>MM</th>
                        <th>MS</th>
                        <th>MR</th>
                        <th>MMV</th>
                        <th>MS</th>
                        <th>MV</th>
                        <th>ML</th>
                    </thead>
                    </tr>

                    <tr align="center" class="text-black" >
                        <th>TL</th>
                        <th colspan="2">Perancangan dan Pengurusan Tapak Lestari</th>
                        <th>26</th>
                        <th>0</th>
                        <th>0</th>
                        <th>24</th>
                        <th>0</th>
                        <th>0</th>
                        <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_ML}}</th>

                    </tr>
                    <tr align="center" class="text-black" >
                        <th>KT</th>
                        <th colspan="2">Pengurusan Kecekapan Tenaga</th>
                        <th>26</th>
                        <th>0</th>
                        <th>0</th>
                        <th>24</th>
                        <th>0</th>
                        <th>0</th>
                        <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_ML}}</th>

                    </tr>

                    <tr align="center" class="text-black" >
                        <th>SB</th>
                        <th colspan="2">Pengurusan Sumber dan Bahan</th>
                        <th>26</th>
                        <th>0</th>
                        <th>0</th>
                        <th>24</th>
                        <th>0</th>
                        <th>0</th>
                        <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_ML}}</th>

                    </tr>

                    <tr align="center" class="text-black" >
                        <th>PA</th>
                        <th colspan="2">Pengurusan Kecekapan Penggunaan Air</th>
                        <th>26</th>
                        <th>0</th>
                        <th>0</th>
                        <th>24</th>
                        <th>0</th>
                        <th>0</th>
                        <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_ML}}</th>

                    </tr>

                    <tr align="center" class="text-black" >
                        <th>PD</th>
                        <th colspan="2">Pengurusan Kualiti Persekitaran Dalaman</th>
                        <th>26</th>
                        <th>0</th>
                        <th>0</th>
                        <th>24</th>
                        <th>0</th>
                        <th>0</th>
                        <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_ML}}</th>
                    
                    </tr>

                    <tr align="center" class="text-black" >
                        <th>FL</th>
                        <th colspan="2">Pengurusan Fasiliti Lestari</th>
                        <th>26</th>
                        <th>0</th>
                        <th>0</th>
                        <th>24</th>
                        <th>0</th>
                        <th>0</th>
                        <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_ML}}</th>

                    </tr>

                    <tr align="center" class="text-black" >
                        <th>IN</th>
                        <th colspan="2">Inovasi dalam Reka Bentuk</th>
                        <th>26</th>
                        <th>0</th>
                        <th>0</th>
                        <th>24</th>
                        <th>0</th>
                        <th>0</th>
                        <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_ML}}</th>
                
                    </tr>

                    <tr align="center" class="text-black" >
                        <th colspan="3">JUMLAH</th>
                        <th>101</th>
                        <th>0</th>
                        <th>0</th>
                        <th>103</th>
                        <th>0</th>
                        <th>0</th>
                        <th>{{$kriteria_phjkr_bangunan->markahML}}</th>
                
                    </tr>
        
                </table>
        </div> <!--row mx-3--> --}}

        
            <div class="row mx-3">
                <table class="table table-bordered line-table shadow-table-jkr line-corner-table-jkr">
                    <thead class="text-white line-table">
                        <tr align="center" style="background-color:#EB5500">
                            <th colspan="3">Jenis Pembangunan</th>
                            <th colspan="20">Pembangunan Baru</th>
                            <th colspan="20">Pemuliharaan/Ubah Suai/Naik Taraf (PUN)</th>
                            <th colspan="20">Penarafan Semula/Sedia Ada</th>     
                        </tr>

                        <tr align="center" style="background-color:#EB5500">
                            <th colspan="3">Kategori</th>
                            <th colspan="5">A</th>
                            <th colspan="5">B</th>
                            <th colspan="5">C</th>
                            <th colspan="5">D</th>

                            <th colspan="5">A</th>
                            <th colspan="5">B</th>
                            <th colspan="5">C</th>
                            <th colspan="5">D</th>

                            <th colspan="5">A</th>
                            <th colspan="5">B</th>
                            <th colspan="5">C</th>
                            <th colspan="5">D</th>
                        </tr>
            
                        <tr align="center" style="background-color:#EB5500">
                            {{-- <th></th> --}}
                            <th colspan="3">Peratusan Mengikut Kriteria</th>
                            <th>MMR</th>
                            {{-- <th>MS</th> --}}
                            <th>MR</th>
                            <th>MMV</th>
                            {{-- <th>MS</th> --}}
                            <th>MV</th>
                            <th>ML</th>

                            <th>MMR</th>
                            {{-- <th>MS</th> --}}
                            <th>MR</th>
                            <th>MMV</th>
                            {{-- <th>MS</th> --}}
                            <th>MV</th>
                            <th>ML</th>

                            <th>MMR</th>
                            {{-- <th>MS</th> --}}
                            <th>MR</th>
                            <th>MMV</th>
                            {{-- <th>MS</th> --}}
                            <th>MV</th>
                            <th>ML</th>

                            <th>MMR</th>
                            {{-- <th>MS</th> --}}
                            <th>MR</th>
                            <th>MMV</th>
                            {{-- <th>MS</th> --}}
                            <th>MV</th>
                            <th>ML</th>

                            {{-- PUN --}}
                            <th>MMR</th>
                            {{-- <th>MS</th> --}}
                            <th>MR</th>
                            <th>MMV</th>
                            {{-- <th>MS</th> --}}
                            <th>MV</th>
                            <th>ML</th>

                            <th>MMR</th>
                            {{-- <th>MS</th> --}}
                            <th>MR</th>
                            <th>MMV</th>
                            {{-- <th>MS</th> --}}
                            <th>MV</th>
                            <th>ML</th>

                            <th>MMR</th>
                            {{-- <th>MS</th> --}}
                            <th>MR</th>
                            <th>MMV</th>
                            {{-- <th>MS</th> --}}
                            <th>MV</th>
                            <th>ML</th>

                            <th>MMR</th>
                            {{-- <th>MS</th> --}}
                            <th>MR</th>
                            <th>MMV</th>
                            {{-- <th>MS</th> --}}
                            <th>MV</th>
                            <th>ML</th>

                            {{-- Sedia Ada --}}
                            <th>MMR</th>
                            {{-- <th>MS</th> --}}
                            <th>MR</th>
                            <th>MMV</th>
                            {{-- <th>MS</th> --}}
                            <th>MV</th>
                            <th>ML</th>

                            <th>MMR</th>
                            {{-- <th>MS</th> --}}
                            <th>MR</th>
                            <th>MMV</th>
                            {{-- <th>MS</th> --}}
                            <th>MV</th>
                            <th>ML</th>

                            <th>MMR</th>
                            {{-- <th>MS</th> --}}
                            <th>MR</th>
                            <th>MMV</th>
                            {{-- <th>MS</th> --}}
                            <th>MV</th>
                            <th>ML</th>

                            <th>MMR</th>
                            {{-- <th>MS</th> --}}
                            <th>MR</th>
                            <th>MMV</th>
                            {{-- <th>MS</th> --}}
                            <th>MV</th>
                            <th>ML</th>
                        </tr>
                    </thead>

                        <tr align="center" class="text-black" >
                            <th>TL</th>
                            <th colspan="2">Perancangan dan Pengurusan Tapak Lestari</th>
                            <th>26</th>
                            <th>0</th>
                            <th>0</th>
                            <th>24</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MMV}}</th> --}}
                            <th>0</th>

                            <th>26</th>
                            <th>0</th>
                            <th>0</th>
                            <th>24</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MMV}}</th> --}}
                            <th>0</th>

                            <th>26</th>
                            <th>0</th>
                            <th>0</th>
                            <th>24</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MMV}}</th> --}}
                            <th>0</th>

                            <th>26</th>
                            <th>0</th>
                            <th>0</th>
                            <th>24</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MMV}}</th> --}}
                            <th>0</th>

                            {{-- PUN --}}
                            <th>26</th>
                            <th>0</th>
                            <th>0</th>
                            <th>24</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MMV}}</th> --}}
                            <th>0</th>

                            <th>26</th>
                            <th>0</th>
                            <th>0</th>
                            <th>24</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MMV}}</th> --}}
                            <th>0</th>

                            <th>26</th>
                            <th>0</th>
                            <th>0</th>
                            <th>24</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MMV}}</th> --}}
                            <th>0</th>

                            <th>26</th>
                            <th>0</th>
                            <th>0</th>
                            <th>24</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MMV}}</th> --}}
                            <th>0</th>

                            {{-- Sedia Ada --}}
                            <th>26</th>
                            <th>0</th>
                            <th>0</th>
                            <th>24</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MMV}}</th> --}}
                            <th>0</th>

                            <th>26</th>
                            <th>0</th>
                            <th>0</th>
                            <th>24</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MMV}}</th> --}}
                            <th>0</th>

                            <th>26</th>
                            <th>0</th>
                            <th>0</th>
                            <th>24</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MMV}}</th> --}}
                            <th>0</th>

                            <th>26</th>
                            <th>0</th>
                            <th>0</th>
                            <th>24</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MMV}}</th> --}}
                            <th>0</th>


                        </tr>
                        <tr align="center" class="text-black" >
                            <th>KT</th>
                            <th colspan="2">Pengurusan Kecekapan Tenaga</th>
                            <th>24</th>
                            <th>0</th>
                            <th>0</th>
                            <th>26</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MMV}}</th> --}}
                            <th>0</th>

                            <th>24</th>
                            <th>0</th>
                            <th>0</th>
                            <th>26</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MMV}}</th> --}}
                            <th>0</th>

                            <th>24</th>
                            <th>0</th>
                            <th>0</th>
                            <th>26</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MMV}}</th> --}}
                            <th>0</th>

                            <th>24</th>
                            <th>0</th>
                            <th>0</th>
                            <th>26</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MMV}}</th> --}}
                            <th>0</th>

                            {{-- PUN --}}
                            <th>24</th>
                            <th>0</th>
                            <th>0</th>
                            <th>26</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MMV}}</th> --}}
                            <th>0</th>

                            <th>24</th>
                            <th>0</th>
                            <th>0</th>
                            <th>26</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MMV}}</th> --}}
                            <th>0</th>

                            <th>24</th>
                            <th>0</th>
                            <th>0</th>
                            <th>26</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MMV}}</th> --}}
                            <th>0</th>

                            <th>24</th>
                            <th>0</th>
                            <th>0</th>
                            <th>26</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MMV}}</th> --}}
                            <th>0</th>

                            {{-- Sedia Ada --}}
                            <th>24</th>
                            <th>0</th>
                            <th>0</th>
                            <th>26</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MMV}}</th> --}}
                            <th>0</th>

                            <th>24</th>
                            <th>0</th>
                            <th>0</th>
                            <th>26</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MMV}}</th> --}}
                            <th>0</th>

                            <th>24</th>
                            <th>0</th>
                            <th>0</th>
                            <th>26</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MMV}}</th> --}}
                            <th>0</th>

                            <th>24</th>
                            <th>0</th>
                            <th>0</th>
                            <th>26</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MMV}}</th> --}}
                            <th>0</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th>SB</th>
                            <th colspan="2">Pengurusan Sumber dan Bahan</th>
                            <th>20</th>
                            <th>0</th>
                            <th>0</th>
                            <th>20</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MMV}}</th> --}}
                            <th>0</th>

                            <th>20</th>
                            <th>0</th>
                            <th>0</th>
                            <th>20</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MMV}}</th> --}}
                            <th>0</th>

                            <th>20</th>
                            <th>0</th>
                            <th>0</th>
                            <th>20</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MMV}}</th> --}}
                            <th>0</th>

                            <th>20</th>
                            <th>0</th>
                            <th>0</th>
                            <th>20</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MMV}}</th> --}}
                            <th>0</th>

                            {{-- PUN --}}
                            <th>20</th>
                            <th>0</th>
                            <th>0</th>
                            <th>20</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MMV}}</th> --}}
                            <th>0</th>

                            <th>20</th>
                            <th>0</th>
                            <th>0</th>
                            <th>20</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MMV}}</th> --}}
                            <th>0</th>

                            <th>20</th>
                            <th>0</th>
                            <th>0</th>
                            <th>20</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MMV}}</th> --}}
                            <th>0</th>

                            <th>20</th>
                            <th>0</th>
                            <th>0</th>
                            <th>20</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MMV}}</th> --}}
                            <th>0</th>

                            {{-- Sedia Ada --}}
                            <th>20</th>
                            <th>0</th>
                            <th>0</th>
                            <th>20</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MMV}}</th> --}}
                            <th>0</th>

                            <th>20</th>
                            <th>0</th>
                            <th>0</th>
                            <th>20</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MMV}}</th> --}}
                            <th>0</th>

                            <th>20</th>
                            <th>0</th>
                            <th>0</th>
                            <th>20</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MMV}}</th> --}}
                            <th>0</th>

                            <th>20</th>
                            <th>0</th>
                            <th>0</th>
                            <th>20</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MMV}}</th> --}}
                            <th>0</th>

                        </tr>

                        <tr align="center" class="text-black" >
                            <th>PA</th>
                            <th colspan="2">Pengurusan Kecekapan Penggunaan Air</th>
                            <th>14</th>
                            <th>0</th>
                            <th>0</th>
                            <th>14</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MMV}}</th> --}}
                            <th>0</th>

                            <th>14</th>
                            <th>0</th>
                            <th>0</th>
                            <th>14</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MMV}}</th> --}}
                            <th>0</th>

                            <th>14</th>
                            <th>0</th>
                            <th>0</th>
                            <th>14</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MMV}}</th> --}}
                            <th>0</th>

                            <th>14</th>
                            <th>0</th>
                            <th>0</th>
                            <th>14</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MMV}}</th> --}}
                            <th>0</th>

                            {{-- PUN --}}
                            <th>14</th>
                            <th>0</th>
                            <th>0</th>
                            <th>14</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MMV}}</th> --}}
                            <th>0</th>

                            <th>14</th>
                            <th>0</th>
                            <th>0</th>
                            <th>14</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MMV}}</th> --}}
                            <th>0</th>

                            <th>14</th>
                            <th>0</th>
                            <th>0</th>
                            <th>14</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MMV}}</th> --}}
                            <th>0</th>

                            <th>14</th>
                            <th>0</th>
                            <th>0</th>
                            <th>14</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MMV}}</th> --}}
                            <th>0</th>

                            {{-- Sedia Ada --}}
                            <th>14</th>
                            <th>0</th>
                            <th>0</th>
                            <th>14</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MMV}}</th> --}}
                            <th>0</th>

                            <th>14</th>
                            <th>0</th>
                            <th>0</th>
                            <th>14</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MMV}}</th> --}}
                            <th>0</th>

                            <th>14</th>
                            <th>0</th>
                            <th>0</th>
                            <th>14</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MMV}}</th> --}}
                            <th>0</th>

                            <th>14</th>
                            <th>0</th>
                            <th>0</th>
                            <th>14</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MMV}}</th> --}}
                            <th>0</th>

                        </tr>

                        <tr align="center" class="text-black" >
                            <th>PD</th>
                            <th colspan="2">Pengurusan Kualiti Persekitaran Dalaman</th>
                            <th>11</th>
                            <th>0</th>
                            <th>0</th>
                            <th>13</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MMV}}</th> --}}
                            <th>0</th>

                            <th>11</th>
                            <th>0</th>
                            <th>0</th>
                            <th>13</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MMV}}</th> --}}
                            <th>0</th>

                            <th>11</th>
                            <th>0</th>
                            <th>0</th>
                            <th>13</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MMV}}</th> --}}
                            <th>0</th>

                            <th>11</th>
                            <th>0</th>
                            <th>0</th>
                            <th>13</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MMV}}</th> --}}
                            <th>0</th>

                            {{-- PUN --}}
                            <th>11</th>
                            <th>0</th>
                            <th>0</th>
                            <th>13</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MMV}}</th> --}}
                            <th>0</th>

                            <th>11</th>
                            <th>0</th>
                            <th>0</th>
                            <th>13</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MMV}}</th> --}}
                            <th>0</th>

                            <th>11</th>
                            <th>0</th>
                            <th>0</th>
                            <th>13</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MMV}}</th> --}}
                            <th>0</th>

                            <th>11</th>
                            <th>0</th>
                            <th>0</th>
                            <th>13</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MMV}}</th> --}}
                            <th>0</th>

                            {{-- Sedia Ada --}}
                            <th>11</th>
                            <th>0</th>
                            <th>0</th>
                            <th>13</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MMV}}</th> --}}
                            <th>0</th>

                            <th>11</th>
                            <th>0</th>
                            <th>0</th>
                            <th>13</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MMV}}</th> --}}
                            <th>0</th>

                            <th>11</th>
                            <th>0</th>
                            <th>0</th>
                            <th>13</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MMV}}</th> --}}
                            <th>0</th>

                            <th>11</th>
                            <th>0</th>
                            <th>0</th>
                            <th>13</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MMV}}</th> --}}
                            <th>0</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th>FL</th>
                            <th colspan="2">Pengurusan Fasiliti Lestari</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MMV}}</th> --}}
                            <th>0</th>

                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MMV}}</th> --}}
                            <th>0</th>

                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MMV}}</th> --}}
                            <th>0</th>

                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MMV}}</th> --}}
                            <th>0</th>

                            {{-- PUN --}}
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MMV}}</th> --}}
                            <th>0</th>

                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MMV}}</th> --}}
                            <th>0</th>

                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MMV}}</th> --}}
                            <th>0</th>

                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MMV}}</th> --}}
                            <th>0</th>

                            {{-- Sedia Ada --}}
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MMV}}</th> --}}
                            <th>0</th>

                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MMV}}</th> --}}
                            <th>0</th>

                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MMV}}</th> --}}
                            <th>0</th>

                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MMV}}</th> --}}
                            <th>0</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th>IN</th>
                            <th colspan="2">Inovasi dalam Reka Bentuk</th>
                            <th>6</th>
                            <th>0</th>
                            <th>0</th>
                            <th>6</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MMV}}</th> --}}
                            <th>0</th>

                            <th>6</th>
                            <th>0</th>
                            <th>0</th>
                            <th>6</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MMV}}</th> --}}
                            <th>0</th>

                            <th>6</th>
                            <th>0</th>
                            <th>0</th>
                            <th>6</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MMV}}</th> --}}
                            <th>0</th>

                            <th>6</th>
                            <th>0</th>
                            <th>0</th>
                            <th>6</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MMV}}</th> --}}
                            <th>0</th>

                            {{-- PUN --}}
                            <th>6</th>
                            <th>0</th>
                            <th>0</th>
                            <th>6</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MMV}}</th> --}}
                            <th>0</th>

                            <th>6</th>
                            <th>0</th>
                            <th>0</th>
                            <th>6</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MMV}}</th> --}}
                            <th>0</th>

                            <th>6</th>
                            <th>0</th>
                            <th>0</th>
                            <th>6</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MMV}}</th> --}}
                            <th>0</th>

                            <th>6</th>
                            <th>0</th>
                            <th>0</th>
                            <th>6</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MMV}}</th> --}}
                            <th>0</th>

                            {{-- Sedia Ada --}}
                            <th>6</th>
                            <th>0</th>
                            <th>0</th>
                            <th>6</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MMV}}</th> --}}
                            <th>0</th>

                            <th>6</th>
                            <th>0</th>
                            <th>0</th>
                            <th>6</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MMV}}</th> --}}
                            <th>0</th>

                            <th>6</th>
                            <th>0</th>
                            <th>0</th>
                            <th>6</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MMV}}</th> --}}
                            <th>0</th>

                            <th>6</th>
                            <th>0</th>
                            <th>0</th>
                            <th>6</th>
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MSV}}</th> --}}
                            {{-- <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MMV}}</th> --}}
                            <th>0</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th colspan="3">JUMLAH</th>
                            <th>101</th>
                            <th>0</th>
                            <th>0</th>
                            <th>103</th>
                            {{-- <th>0</th>
                            <th>0</th> --}}
                            <th>0</th>

                            <th>101</th>
                            <th>0</th>
                            <th>0</th>
                            <th>103</th>
                            {{-- <th>0</th>
                            <th>0</th> --}}
                            <th>0</th>

                            <th>101</th>
                            <th>0</th>
                            <th>0</th>
                            <th>103</th>
                            {{-- <th>0</th>
                            <th>0</th> --}}
                            <th>0</th>

                            <th>101</th>
                            <th>0</th>
                            <th>0</th>
                            <th>103</th>
                            {{-- <th>0</th>
                            <th>0</th> --}}
                            <th>0</th>

                            {{-- PUN --}}
                            <th>101</th>
                            <th>0</th>
                            <th>0</th>
                            <th>103</th>
                            {{-- <th>0</th>
                            <th>0</th> --}}
                            <th>0</th>

                            <th>101</th>
                            <th>0</th>
                            <th>0</th>
                            <th>103</th>
                            {{-- <th>0</th>
                            <th>0</th> --}}
                            <th>0</th>

                            <th>101</th>
                            <th>0</th>
                            <th>0</th>
                            <th>103</th>
                            {{-- <th>0</th>
                            <th>0</th> --}}
                            <th>0</th>

                            <th>101</th>
                            <th>0</th>
                            <th>0</th>
                            <th>103</th>
                            {{-- <th>0</th>
                            <th>0</th> --}}
                            <th>0</th>

                            {{-- Sedia Ada --}}
                            <th>101</th>
                            <th>0</th>
                            <th>0</th>
                            <th>103</th>
                            {{-- <th>0</th>
                            <th>0</th> --}}
                            <th>0</th>

                            <th>101</th>
                            <th>0</th>
                            <th>0</th>
                            <th>103</th>
                            {{-- <th>0</th>
                            <th>0</th> --}}
                            <th>0</th>

                            <th>101</th>
                            <th>0</th>
                            <th>0</th>
                            <th>103</th>
                            {{-- <th>0</th>
                            <th>0</th> --}}
                            <th>0</th>

                            <th>101</th>
                            <th>0</th>
                            <th>0</th>
                            <th>103</th>
                            {{-- <th>0</th>
                            <th>0</th> --}}
                            <th>0</th>
                        </tr>
                </table>
            </div>  <!--Row mx-3-->
    </div>
</div> <!--Scrollbar-->

            

        <div class="row mx-3">
            <table class="table table-bordered line-table shadow-table-jkr">
                <thead class="text-white line-table">
                <tr align="center" style="background-color:#EB5500">
                    <th colspan="3">KEPUTUSAN PENARAFAN HIJAU PERINGKAT VALIDASI</th>
                </tr>

                <tr align="center" class="text-black">
                    <th colspan="3"><button class="btn btn-primary btn-sasaran">Sasaran</button>
                        <button class="btn btn-secondary">Disahkan</button></th>
                </tr>

                <tr align="center" style="background-color:#EB5500">
                    <th colspan="3">MARKAH PENILAIAN</th>
                </tr>

                <tr align="center" class="text-black" >
                    <th colspan="2">Jumlah Markah</th>
                    <th colspan="2">0</th>
                </tr>

                <tr align="center" class="text-black" >
                    <th colspan="2">Peratusan</th>
                    <th colspan="2">0</th>
                </tr>

                <tr align="center" class="text-black" >
                    <th colspan="2">Penarafan PH</th>
                    <th colspan="2">1 <span class="star">&starf;</span></th>
                </tr>

                <tr align="center" style="background-color:#EB5500" >
                    <th colspan="2">Petunjuk Penarafan</th>
                    <th>Sijil Penarafan</th>
                </tr>

                <tr align="center" class="text-black" >
                    <th><span class="star">&starf; &starf; &starf; &starf; &starf;</span></th>
                    <th>80 - 100</th>
                    <th>Kecemerlangan Global</th>
                </tr>
                <tr align="center" class="text-black" >
                    <th><span class="star">&starf; &starf; &starf; &starf;</span></th>
                    <th>65 - 79</th>
                    <th>Kecemerlangan Nasional</th>
                </tr>
                <tr align="center" class="text-black" >
                    <th><span class="star">&starf; &starf; &starf;</span></th>
                    <th>45 - 64</th>
                    <th>Amalan Pengurusan Terbaik</th>
                </tr>
                <tr align="center" class="text-black" >
                    <th><span class="star">&starf; &starf;</span></th>
                    <th>30 - 44</th>
                    <th>Potensi Pengiktirafan</th>
                </tr>
                <tr align="center" class="text-black" >
                    <th><span class="star">&starf;</span></th>
                    <th>< 29</th>
                    <th>Sijil Penyertaan</th>
                </tr>
            </thead>
        </table>
        </div>

    {{-- </div> --}}
</div>

    {{-- <!--pdf form Muat Naik Sijil -->
    <div class="mb-3 text-center">
    <input type="file" id="real-file" hidden="hidden" />
    <button type="button" id="custom-button">MUAT NAIK SIJIL</button>
    </div> --}}
    
    <!--Button Jana Sijil-->
    <div class="mb-3 text-center">
    <button class="btn btn-primary">Muat Turun</button>
    </div>
@endsection