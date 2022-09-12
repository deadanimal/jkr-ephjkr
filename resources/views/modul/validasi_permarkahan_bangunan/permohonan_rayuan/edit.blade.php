@extends('layouts.base')
<link rel="stylesheet" href="/cssfile/skor_penilaian.css">
<link rel="stylesheet" href="/cssfile/style.css">

@section('content')
<div class="header">
    <div class="col-sm-6">
        Penilaian Verifikasi Permarkahan GPSS 
        <b style="color: #0F5E31;">> Permohonan Rayuan</b>
    </div>
            <h1 class="header-title">
                PENILAIAN VALIDASI PERMARKAHAN BANGUNAN
            </h1>
            <hr class="line-6">

<div class="container-fluid">
    <div class="card-body">
        <form action="/validasi_permarkahan_bangunan/permohonan_rayuan/{id}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- @method('PUT') --}}

            <!--Nama Projek-->
            <div class="mb-3 form-group row">
                <label class="col-sm-2 col-form-label">Nama Projek:</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" autocapitalize="off" name="namaProjek" placeholder="Hospital Seri Iskandar"/>   
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


                    <!--Green Product Scoring Sheet-->
                    <div class="row mx-3">
                        <table class="table table-bordered line-table shadow-table-jkr line-corner-table-jkr">
                            <thead class="text-white line-table">
                                <tr align="center" style="background-color:#EB5500">
                                    <th colspan="8">OVERALL GREEN PRODUCT SCORING SHEET</th>
                                </tr>
                            
                                <tr align="center" style="background-color:#EB5500">
                                    <th colspan="8">Green Product Scoring Sheet</th>
                                </tr>
                            </thead>

                            
                            <tr>
                                <td colspan="12" style="color: #282828">
                                    <!--Name of evaluator-->
                                    <div class="mb-3 form-group row">
                                        <label class="col-sm-2 col-form-label text-black">Name of Evaluator:</label>
                                            <div class="col-sm-5">
                                                <input class="form-control" type="text" autocapitalize="off" placeholder="Hospital Seri Iskandar" name="namaProjek" value="{{$pemudah_cara ?? ''}}"/>   
                                            </div>                     
                                    </div>

                                    <!--Date-->
                                    <div class="mb-3 form-group row">
                                        <label class="col-sm-2 col-form-label text-black">Date:</label>
                                            <div class="col-sm-5">
                                                <input class="form-control" type="date" autocapitalize="off" placeholder="Hospital Seri Iskandar" name="namaProjek" value="{{$pemudah_cara ?? ''}}"/>   
                                            </div>                     
                                    </div>

                                    <!--Time-->
                                    <div class="mb-3 form-group row">
                                        <label class="col-sm-2 col-form-label text-black">Time:</label>
                                            <div class="col-sm-5">
                                                <input class="form-control" type="time" autocapitalize="off" placeholder="Hospital Seri Iskandar" name="namaProjek" value="{{$pemudah_cara ?? ''}}"/>   
                                            </div>                     
                                    </div>

                                    <!--Project-->
                                    <div class="mb-3 form-group row">
                                        <label class="col-sm-2 col-form-label text-black">Project:</label>
                                            <div class="col-sm-5">
                                                <input class="form-control" type="text" autocapitalize="off" placeholder="SKL0202" name="namaProjek" value="{{$pemudah_cara ?? ''}}"/>   
                                            </div>                     
                                    </div>

                                    <!--Building/Road-->
                                    <div class="mb-3 form-group row">
                                        <label class="col-sm-2 col-form-label text-black">Building/Road:</label>
                                            <div class="col-sm-5">
                                                <input class="form-control" type="text" autocapitalize="off" placeholder="Hospital Seri Iskandar" name="namaProjek" value="{{$pemudah_cara ?? ''}}"/>   
                                            </div>                     
                                    </div>

                                    <!--Work Component-->
                                    <div class="mb-3 form-group row">
                                        <label class="col-sm-2 col-form-label text-black">Work Component:</label>
                                            <div class="col-sm-5">
                                                <input class="form-control" type="text" autocapitalize="off" placeholder="Hospital Seri Iskandar" name="namaProjek" value="{{$pemudah_cara ?? ''}}"/>   
                                            </div>                     
                                    </div>
                                </td>
                            </tr>
    
                            
                            <thead class="text-white line-table">
                                <tr align="center" style="background-color:#EB5500">
                                    <th rowspan="2">No.</th>
                                    <th rowspan="2">Work Element</th>
                                    <th colspan="2">Total Point Allocated</th>
                                    <th colspan="2">Total Point Requested (design)</th>
                                    <th rowspan="2">Remark</th>
                                </tr>
                            
                                <tr align="center" style="background-color:#EB5500">
                                    <th>Design Stage</th>
                                    <th>Construction Stage</th>
                                    <th colspan="2">Construction Stage</th>
                                </tr>
                                
                            </thead>

                            <tr>
                                <td>1</td>
                                <td>Architectural (Aw)</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Mechanical (Mw)</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Electrical (Ew)</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Civil and Structural (Cw)</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Road & Geotechnical (Rw)</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Structural (Bridge) (Sw)</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>

                            <tr>
                                <td colspan="2">TOTAL POINTS</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>

                            
            
                                
                    
                        </table> <!--table-->
                    </div> <!--row mx-3-->

                    <!--Checked by: (Project Manager)-->
                    <div class="mb-3 form-group row">
                        <label class="col-sm-5 col-form-label text-black">Prepared by: (Design Stage)</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" autocapitalize="off" name="namaProjek" value="{{$pemudah_cara ?? ''}}"/>   
                            </div>                     
                    </div>

                    <!--Verified by: (Project Manager)-->
                    <div class="mb-3 form-group row">
                        <label class="col-sm-5 col-form-label text-black">Prepared by: (Construction Stage)</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" autocapitalize="off" name="namaProjek" value="{{$pemudah_cara ?? ''}}"/>   
                            </div>                     
                    </div>

                    <!--Checked by: (Project Manager)-->
                    <div class="mb-3 form-group row">
                        <label class="col-sm-5 col-form-label text-black">Prepared by: (Design Stage)</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" autocapitalize="off" name="namaProjek" value="{{$pemudah_cara ?? ''}}"/>   
                            </div>                     
                    </div>

                    <!--Sebab Rayuan-->
                    <a class="btn btn-primary" href="/validasi_permarkahan_bangunan/permohonan_rayuan/edit" role="button"
                    data-toggle="tooltip" data-placement="bottom" title="Sebab Rayuan" disabled>Sebab Rayuan</a>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nyatakan sebab rayuan..."></textarea>
                    </div>

                    <!--Button Batal & Hantar-->
                    <div class="mt-3 text-center">
                    <a class="btn btn-primary" href="/validasi_permarkahan_bangunan/permohonan_rayuan/edit" role="button"
                    data-toggle="tooltip" data-placement="bottom" title="Batal">Batal</a>
                    <a class="btn btn-primary" href="/validasi_permarkahan_bangunan/permohonan_rayuan/edit" role="button"
                    data-toggle="tooltip" data-placement="bottom" title="Hantar">Hantar</a>
                    </div>     

        </form> <!--Form Action--> 
    </div> <!--Card Body-->
</div> <!--Container Fluid-->
@endsection