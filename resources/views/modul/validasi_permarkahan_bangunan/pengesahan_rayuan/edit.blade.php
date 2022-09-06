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
                        <input class="form-control" type="text" autocapitalize="off" name="namaProjek" value="{{$pemudah_cara ?? ''}}"/>   
                    </div>                     
            </div>

            <!--ID Rujukan Skala-->
            <div class="mb-3 form-group row">
                <label class="col-sm-2 col-form-label">ID Rujukan Skala:</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" autocapitalize="off" name="id_ruj_skala" value="{{$pemudah_cara ?? ''}}"/>  
                    </div>                      
            </div>

            <!--No Telefon-->
            <div class="mb-3 form-group row">
                <label class="col-sm-2 col-form-label">No. Tel:</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" autocapitalize="off" name="no_tel" value="{{$pemudah_cara ?? ''}}"/>   
                    </div>                         
            </div>

            <!--Kos Projek Semasa-->
            <div class="mb-3 form-group row">
                <label class="col-sm-2 col-form-label">Kos Projek Semasa:</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="number" autocapitalize="off" name="kosProjek" value="{{$pemudah_cara ?? ''}}"/>                        
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

                            
                            {{-- <tr>
                                <td style="color: #282828">
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
                                                <input class="form-control" type="text" autocapitalize="off" placeholder="Hospital Seri Iskandar" name="namaProjek" value="{{$pemudah_cara ?? ''}}"/>   
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
                            </tr> --}}

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
                        <label class="col-sm-5 col-form-label text-black">Checked by: (Project Manager)</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" autocapitalize="off" placeholder="Hospital Seri Iskandar" name="namaProjek" value="{{$pemudah_cara ?? ''}}"/>   
                            </div>                     
                    </div>

                    <!--Verified by: (Project Manager)-->
                    <div class="mb-3 form-group row">
                        <label class="col-sm-5 col-form-label text-black">Checked by: (Project Manager)</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" autocapitalize="off" placeholder="Hospital Seri Iskandar" name="namaProjek" value="{{$pemudah_cara ?? ''}}"/>   
                            </div>                     
                    </div>

                    <!--Checked by: (Project Manager)-->
                    <div class="mb-3 form-group row">
                        <label class="col-sm-5 col-form-label text-black">Checked by: (Project Manager)</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" autocapitalize="off" placeholder="Hospital Seri Iskandar" name="namaProjek" value="{{$pemudah_cara ?? ''}}"/>   
                            </div>                     
                    </div>
            

        </form> <!--Form Action--> 
    </div> <!--Card Body-->
</div> <!--Container Fluid-->
    @endsection