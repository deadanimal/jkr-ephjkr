@extends('layouts.base')

<style>
    ::placeholder{
        color: black !important
    }
</style>

@section('content')
    {{-- header --}}
    <div class="header" >
        <h1 class="header-title" style="color: #EB5500">
            PENILAIAN REKA BENTUK GPSS
        </h1>
    </div>
    <hr style="background-color: #EB5500;">
    {{-- body --}}
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="card p-3  py-4">
                {{-- @foreach ($projeks as $p) --}}
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <label for="nama_projek">Nama:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Hospital Seri Iskandar">
                        {{-- <input type="text" class="form-control" value=" {{$p->namaProjek}} ">--}}
                    </div>
                </div>
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <label for="nama_projek">ID Rujukan Skala:</label>
                    </div>
                    <div class="col-md-6">
                        {{-- <input type="text" class="form-control" value=" {{$p->id_ruj_skala}} ">  --}}
                        <input type="text" class="form-control" placeholder="SKL0202">

                    </div>
                </div>
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <label for="nama_projek">Alamat:</label>
                    </div>
                    <div class="col-md-6">
                        {{-- <input type="text" class="form-control" value=" {{ $p->alamatProjek }}">  --}}
                        <input type="text" class="form-control" placeholder="Mukah">
                       
                    </div>
                </div>
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <label for="nama_projek">Kos Projek Semasa:</label>
                    </div>
                    <div class="col-md-6">
                        {{-- <input type="text" class="form-control" value=" {{ $p->kosProjek }}"> --}}
                        <input type="text" class="form-control" placeholder="RM50,000,000">
                        
                    </div>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}

        

        <div>
            <form action= "/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek/{id}" method="post" enctype="multipart/form-data">
                @method('POST')
                  @csrf
            
                  <div class="col">
                    <table class="table table-bordered line-table text-center" style="width: 100%">
                      <thead class="text-white bg-orange-jkr">
                        
                        <tr>
                          <th colspan="2">OVERALL GREEN PRODUCT SCORING SHEET</th>
                        </tr>
                        <tr>
                          <th>Green Product Scoring Sheet</th>
                        </tr>
                      </thead>
                      <tbody>

                       <table>
                        <div class="row d-flex justify-content-center">
                            <div class="card p-3  py-4">
                                <div class="row g-3 mt-2">
                                    <div class="col-md-3">
                                        <label for="nama_projek">Name of evaluator:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Name of evaluator">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-3">
                                        <label for="nama_projek">Date:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="DD/MM/YYYY">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-3">
                                        <label for="nama_projek">Time:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="00:00:00">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-3">
                                        <label for="nama_projek">Project:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" placeholder="Project">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-3">
                                        <label for="nama_projek">Building/Road:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" placeholder="Building/Road">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-3">
                                        <label for="nama_projek">Work component:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" placeholder="Dropdown">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div>
                                <form action="">
                                  <table>
                                    <div class="row3 mx-4 table-responsive scrollbar">
                                        <div class="col">
                                          <table class="table table-bordered line-table text-center" style="width: 100%">
                                            <thead class="text-white bg-orange-jkr">
                                              <tr>
                                    
                                                
                                                <th >No.</th>
                                                <th >Work Element</th>
                                                <th >Total Point Allocated</th>
                                                <th colspan="2">Total Points Requested</th>
                                                <th >Total Points Awarded</th>
                                                <th >Remarks</th>
                                 
                                              </tr>
                                              <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th >Design stage</th>
                                                <th >Construction stage</th>
                                                <th></th>
                                                <th></th>
                                              </tr>
                            
                                            </thead>
                                            <tbody>
                            
                                              <tr>
                                                <th >1</th>
                                                <th >Architectural (Aw)</th>
                                                <th>232</th>
                                                <th> {{$gpss_bangunan->markahPRAwRoof + $gpss_bangunan->markahPRAwWall + $gpss_bangunan->markahPRAwWindow + $gpss_bangunan->markahPRAwDoor + $gpss_bangunan->markahPRAwSystem + $gpss_bangunan->markahPRAwSanitary}} </th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                
                                              </tr>

                                              <tr>
                                                <th >2</th>
                                                <th >Mechanical (Mw)</th>
                                                <th>34</th>
                                                <th>{{ $gpss_bangunan->markahPRMw }} </th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                
                                              </tr>

                                              <tr>
                                                <th >3</th>
                                                <th >Electrical (Ew)</th>
                                                <th>110</th>
                                                <th>{{ $gpss_bangunan->markahPREw }}</th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                
                                              </tr>

                                              <tr>
                                                <th >4</th>
                                                <th >Civil & Structural (Cw)</th>
                                                <th>124</th>
                                                <th>{{ $gpss_bangunan->markahPRCw }}</th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                
                                              </tr>

                                              <tr>
                                                <th >5</th>
                                                <th >Road & Geotechnial (Rw)</th>
                                                <th>98</th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                
                                              </tr>

                                              <tr>
                                                <th >6</th>
                                                <th >Structural(Bridge) (Sw)</th>
                                                <th>12</th>
                                                <th>{{ $gpss_bangunan->markahPRSw }}</th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                              </tr>

                                              <tr>
                                                <th ></th>
                                                <th >Total points</th>
                                                <th>610</th>
                                                <th> {{$gpss_bangunan->markahPRAwRoof + $gpss_bangunan->markahPRAwWall + $gpss_bangunan->markahPRAwWindow + $gpss_bangunan->markahPRAwDoor + $gpss_bangunan->markahPRAwSystem + $gpss_bangunan->markahPRAwSanitary + $gpss_bangunan->markahPRMw + $gpss_bangunan->markahPREw + $gpss_bangunan->markahPRCw + $gpss_bangunan->markahPRSw}} </th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                              </tr>
                            
                                            </tbody>
                                          </table>

                                          <div>
                                            <!-- Design stage -->
                                          <div class="mb-3 form-group row">
                                            <label class="col-sm-5 col-form-label text-black">Check by: (Project Manager)</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" type="text" autocapitalize="off" name="namaProjek"/>
                                                </div>
                                        </div>
                                        <!-- Construction stage -->
                                        <div class="mb-3 form-group row">
                                            <label class="col-sm-5 col-form-label text-black">Verified by: (Secretariat)</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" type="text" autocapitalize="off" name="namaProjek"/>
                                                </div>
                                        </div>
                                        <!-- Checked -->
                                        <div class="mb-3 form-group row">
                                            <label class="col-sm-5 col-form-label text-black">Muat Naik Dokumen Sokongan</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" type="file" autocapitalize="off" name="namaProjek"/>
                                                </div>
                                        </div>
                                          </div>
                          
                                          <div align="right" >
                                            <button class="btn btn-primary" type="submit" title="Simpan">Jana</button>
                                          </div>
                        </div>
                       </table>

                      </tbody>
                     
                    </table>
            
                  </div>
              </form>
        </div>      
    </div>

@endsection