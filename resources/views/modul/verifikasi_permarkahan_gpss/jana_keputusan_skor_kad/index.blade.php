@extends('layouts.base')

<style>
    ::placeholder{
        color: black !important
    }
</style>

@section('content')
    {{-- header --}}
    <div class="row mb-3">
        <div class="col">
            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                        Jana Keputusan
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3 class="mb-0 text-primary"><strong>PENILAIAN VERIFIKASI PERMARKAHAN GPSS</strong></h3>
        </div>
    </div>
    
    <hr style="background-color: #EB5500;">
    {{-- body --}}
    <div class="container mt-5">
        
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
                                <form action="calculation">
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
                                            {{-- <tbody>
                            
                                              <tr>
                                                <th >1</th>
                                                <th >Architectural (Aw)</th>
                                                <th>232</th>
                                                <th>{{ $gpss_bangunan->markahPRAwRoof + $gpss_bangunan->markahPRAwWall
                                                    + $gpss_bangunan->markahPRAwWindow + $gpss_bangunan->markahPRAwDoor+ $gpss_bangunan->markahPRAwFloor
                                                    + $gpss_bangunan->markahPRAwSystem
                                                    + $gpss_bangunan->markahPRAwSanitary}} </th>
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
                            
                                            </tbody> --}}
                                          </table>

                                          
                                          </div>
                          
                                          <div align="center" >
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