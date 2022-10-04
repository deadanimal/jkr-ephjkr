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

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Kategori:</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="disiplin">
                    <option selected="">Sila Pilih</option>
                    <option value="Arkitektur">Bangunan 1</option>
                    <option value="Mekanikal">Bangunan 2</option>
                    <option value="Elektrikal">Bangunan 3</option>
                    <option value="Jalan">Jalan</option>
                </select>
            </div>
        </div>
        
        <div>
            <form action= "/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek/{id}" method="post" enctype="multipart/form-data">
                @method('POST')
                  @csrf
            
                  <div class="col">
                    <table class="table table-bordered line-table text-center" style="width: 100%">
                      {{-- <thead class="text-white bg-orange-jkr">
                        
                        <tr>
                          <th colspan="2">OVERALL GREEN PRODUCT SCORING SHEET</th>
                        </tr>
                        <tr>
                          <th>Green Product Scoring Sheet</th>
                        </tr>
                      </thead> --}}
                      <tbody>

                       <table>

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
                                                <th >Weightage (Refer Annex C)</th>
                                                <th >Percentage of Green Product Scoring Score</th>
                                 
                                              </tr>
                                              <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th >Design stage</th>
                                                <th >Construction stage</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                              </tr>
                            
                                            </thead>
                                            <tbody>
                            
                                              <tr>
                                                <th >1</th>
                                                <th >Architectural (Aw)</th>
                                                <th>232</th>
                                                {{-- <th>{{ $gpss_bangunan->markahPRAwRoof}} </th> --}}
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                <th>0.45</th>
                                                <th></th>
                                                
                                              </tr>

                                              <tr>
                                                <th >2</th>
                                                <th >Mechanical (Mw)</th>
                                                <th>34</th>
                                                {{-- <th>{{ $gpss_bangunan->markahPRMw }} </th> --}}
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                <th>0.30</th>
                                                <th></th>

                                                
                                              </tr>

                                              <tr>
                                                <th >3</th>
                                                <th >Electrical (Ew)</th>
                                                <th>110</th>
                                                {{-- <th>{{ $gpss_bangunan->markahPREw }}</th> --}}
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                <th></th>
                                                <th></th>
                                                
                                              </tr>

                                              <tr>
                                                <th >4</th>
                                                <th >Civil & Structural (Cw)</th>
                                                <th>124</th>
                                                {{-- <th>{{ $gpss_bangunan->markahPRCw }}</th> --}}
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                <th></th>
                                                <th></th>
                                                
                                              </tr>

                                              <tr>
                                                <th >5</th>
                                                <th >Road & Geotechnial (Rw)</th>
                                                <th>98</th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                <th></th>
                                                <th></th>
                                                
                                              </tr>

                                              <tr>
                                                <th >6</th>
                                                <th >Structural(Bridge) (Sw)</th>
                                                <th>12</th>
                                                {{-- <th>{{ $gpss_bangunan->markahPRSw }}</th> --}}
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                <th></th>
                                                <th></th>
                                              </tr>

                                              <tr>
                                                <th ></th>
                                                <th >Total points</th>
                                                <th>610</th>
                                                {{-- <th> {{$gpss_bangunan->markahPRAwRoof + $gpss_bangunan->markahPRAwWall + $gpss_bangunan->markahPRAwWindow + $gpss_bangunan->markahPRAwDoor + $gpss_bangunan->markahPRAwSystem + $gpss_bangunan->markahPRAwSanitary + $gpss_bangunan->markahPRMw + $gpss_bangunan->markahPREw + $gpss_bangunan->markahPRCw + $gpss_bangunan->markahPRSw}} </th> --}}
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                <th></th>
                                                <th></th>
                                              </tr>
                            
                                            </tbody>
                                          </table>
                          
                                          <div align="center" >
                                            <a class="btn btn-primary" href="/penilaian_reka_bentuk_gpss/createPDF/{id}">Muat Turun</a>
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