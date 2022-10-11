@extends('layouts.base')
@section('content')
    <!--header-->
    <div class="row mb-3">
        <div class="col">
            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    
                    <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                        Isi Skor Kad
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3 class="mb-0 text-primary"><strong>PENILAIAN REKA BENTUK JALAN</strong></h3>
        </div>
    </div>

    <hr class="text-primary mb-3">

    <div class="row">
        <div class="col">
            <h4 class="mb-0 text-primary"><strong>Skor Kad</strong></h4>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action= "/penilaian_reka_bentuk_jalan/simpan_isi_skor_kad/{id}" method="post" enctype="multipart/form-data">
                  @method('POST')
                  @csrf
                    <!--Nama-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nama Projek:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="nama" />
                    </div>
                    </div>
                    <!--Syarikat/Cawangan-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Syarikat:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="syarikat_cawangan" />
                    </div>
                    </div>
                    <!--No. Telefon-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nama Pemudah Cara Jalan:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="no_tel" />
                    </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-2 col-form-label">Kategori:</label>
                  <div class="col-sm-10">
                      <input class="form-control" type="text" autocapitalize="off" name="no_tel" value="Existing Road" />
                  </div>
                  </div>
                </form>
            </div>
        </div>
    </div>

    <div>
      <form action="/penilaian_reka_bentuk_jalan/simpan_isi_skor_kad/{$id}" method="post" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <table>
          <div class="row3 mx-4 table-responsive scrollbar">
              <div class="col">
                <table class="table table-bordered line-table text-center" style="width: 100%">
                  <thead class="text-white bg-orange-jkr">
                    <tr>
          
                      
                      <th >Kod</th>
                      <th >Kriteria</th>
                      <th >Responsibility</th>
                      <th colspan="3">Verification</th>
                      
       
                    </tr>
                    <tr>
                      
                      <th></th>
                      <th></th>
                      <th></th>
                      <th >MAX POINT</th>
                      <th >TARGET POINT</th>
                      {{-- <th >ASSESSMENT POINT</th> --}}
                      <th>COMMENT BY ASSESSOR</th>
                    </tr>
  
                  </thead>
                  <tbody>

                    <tr>
                      <td>SM</td>
                      <td colspan="" align="left">SUSTAINABLE SITE PLANNING AND MANAGEMENT</td>  
                    </tr>
  
                    <tr>
                      <td colspan="1" rowspan="12">SM1</td>
                      <td colspan="2">REQUIREMENT FOR ROAD WORKS DESIGN</td>
                      <td>7</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>
  
                    <tr>
                      <td >Traffic study</td>
                      <td rowspan="7">CJ</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
  
                    <tr>
                      <td >Site investigation data</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                     
                    </tr>

                    <tr>
                      <td >Flood records</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                      
                    </tr>
  
                    <tr>
                      <td >Response to public complaints or requests from public, local authority & etc.</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                      
                    </tr>

                    <tr>
                      <td >Value Management (VM)</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                 
                    </tr>

                    <tr>
                      <td >Survey Drawing</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                      
                  
                    </tr>

                    <tr>
                      <td >As Built Drawings</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                
                    </tr>

                    <tr>
                      <td >Accident Reports</td>
                      <td>CSFJ</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                      
                    </tr>

                    <tr>
                      <td >Structure Replacement</td>
                      <td rowspan="3">CJ</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                      
                    </tr>

                    <tr>
                      <td >Forensic Report</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                      
                    </tr>

                    <tr>
                      <td >Pavement Evaluation</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <td style="display: none">markahSM1<input type="text" name="markahSM1" id="markahSM1" /></td>            


                   

                    <tr>
                      <td colspan="1" rowspan="9">SM2</td>
                      <td colspan="2">ROAD ALIGNMENT</td>
                      <td>6</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>
  
                    <tr>
                      <td >Slope not more than 6 berms</td>
                      <td rowspan="7">CJ</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
  
                    <tr>
                      <td >Cut slope not steeper than 1:1.5 or Rock slope not steeper than 4:1 </td>
                      {{-- <td rowspan="7">CKG</td> --}}
                      <td>1</td>
                      <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                     
                    </tr>

                    <tr>
                      <td >Fill slope not steeper than 1:2</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                      
                    </tr>
  
                    <tr>
                      <td >Height of slope not more than 6m</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                      
                    </tr>

                    <tr>
                      <td >Maximum grade less than 7%</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                 
                    </tr>

                    <tr>
                      <td >No reclamation involved existing water bodies</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                      
                  
                    </tr>

                    <tr>
                      <td >Provide added uphill lane (climbing lane) where the length of critical grade exceeds 5%</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                
                    </tr>

                    <tr>
                      <td >Not in Sensitive Area OR Sensitive area with mitigation plan</td>
                      <td>CASKT</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                      
                    </tr>

                    <td style="display: none">markahSM2<input type="text" name="markahSM2" id="markahSM2" /></td>            


                  

                    <tr>
                      <td colspan="1" rowspan="8">SM3</td>
                      <td colspan="2">SITE VEGETATION</td>
                      <td>3</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
   
                    </tr>
  
                    <tr>
                      <td >Slope not more than 6 berms</td>
                      <td rowspan="7">CJ</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
  
                    <tr>
                      <td >Use non-invasive plant species(example: grass/creeper) </td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                     
                    </tr>

                    <tr>
                      <td >Use bio-engineering techniques (example: vetiver grass, creeper and regeneration of natural plants and material )</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                      
                    </tr>
  
                    <tr>
                      <td >Use native plant species</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                      
                    </tr>

                    <tr>
                      <td >Use of grass/creeper for slope protection /unpaved shoulder</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                 
                    </tr>

                    <tr>
                      <td >Hydroseeding with Bio-degradable Erosion Control Blanket(BECB) on slope</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                      
                    </tr>

                    <tr>
                      <td >Preservation of existing tree/vegetation</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                      <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                
                    </tr>

                    <td style="display: none">markahSM3<input type="text" name="markahSM3" id="markahSM3" /></td>            



                   


                    <td colspan="1" rowspan="4">SM4</td>
                    <td colspan="2">NOISE MITIGATION PLAN</td>
                    <td>2</td>
                    <td>0</td>
                    <td>0</td>
                    <td></td>
 
                  </tr>

                  <tr>
                    <td >Supply and install noise barrier including maintenance during the construction and defects liability period</td>
                    <td rowspan="7">CJ</td>
                    <td>1</td>
                    <td><input onblur="findTargetPointSM4()" type="number" min="0" max="2" class="targetPointSM4" ></td>
                    {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                    <td><input onblur="commentSM4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                  </tr>

                  <tr>
                    <td >To ensure that all site equipment are in using low decibel to control noise pollution </td>
                    <td>1</td>
                    <td><input onblur="findTargetPointSM4()" type="number" min="0" max="2" class="targetPointSM4" ></td>
                    {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                    <td><input onblur="commentSM4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                   
                  </tr>

                  <tr>
                    <td >To ensure using all machineryon site are low decibel to minimize the amount of noise generated </td>
                    <td>1</td>
                    <td><input onblur="findTargetPointSM4()" type="number" min="0" max="2" class="targetPointSM4" ></td>
                    {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                    <td><input onblur="commentSM4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    
                  </tr>

                  <td style="display: none">markahSM4<input type="text" name="markahSM4" id="markahSM4" /></td>            


                  <tr >
                    <td colspan="3"> SUB TOTAL SM POINT</td>
                    <td>18</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>



                  </tbody>
                </table>

                <div align="center" class="mt-3">
                  <button class="btn btn-primary" type="submit" title="Simpan">Batal</button>
                  <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
                  <a href="/penilaian_reka_bentuk_jalan/isi_skor_kad_page2" type="button" class="btn btn-primary">Seterusnya</a>          
                </div>
      </form>
      </div> 
      
      
      <script>
        function findTargetPointSM1(){
        var arr = document.getElementsByClassName('targetPointSM1');
        // add new var 
        var tot=0;
        for(var i=0;i<arr.length;i++){
            if(parseFloat(arr[i].value))
                tot += parseFloat(arr[i].value);
                // add tot2
        }
        document.getElementById('markahSM1').value = tot;
      } 
        </script> 

<script>
  function findTargetPointSM2(){
  var arr = document.getElementsByClassName('targetPointSM2');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot2
  }
  document.getElementById('markahSM2').value = tot;
} 
  </script> 

<script>
  function findTargetPointSM3(){
  var arr = document.getElementsByClassName('targetPointSM3');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot2
  }
  document.getElementById('markahSM3').value = tot;
} 
  </script> 

<script>
  function findTargetPointSM4(){
  var arr = document.getElementsByClassName('targetPointSM4');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot2
  }
  document.getElementById('markahSM4').value = tot;
} 
  </script>


    
    
    <!--Container Fluid-->
            <!--JS-->
            <!--JS BUTTON TOOLTIPS-->
            <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
            </script>

@endsection

