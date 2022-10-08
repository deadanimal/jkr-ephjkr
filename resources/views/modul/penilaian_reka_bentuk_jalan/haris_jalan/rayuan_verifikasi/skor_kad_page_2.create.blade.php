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

    

    <div>
      <form action="/penilaian_reka_bentuk_jalan/simpan_isi_skor_kad_page2/{id}" method="post" enctype="multipart/form-data">
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
                      <th colspan="4">Verification</th>
                      
       
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
                      <td>PT</td>
                      <td colspan="6" align="left">PAVEMENT TECHNOLOGIES</td>
                     
                      
                      
                      
                    </tr>
  
                    <tr>
                      <td colspan="1" rowspan="6">PT1</td>
                      <td colspan="2">EXISTING PAVEMENT EVALUATION</td>
                      {{-- <td></td> --}}
                      <td>3</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>
  
                    <tr>
                      <td>Surface Condition Survey</td>
                      <td rowspan="5">CSFJ</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                      {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                      <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
  
                    <tr>
                      <td >Coring & Dynamic Cone Penetrometer test</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                      {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                      <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Deflection test</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                      {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                      <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
  
                    <tr>
                      <td >Trial pit & Laboratory</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                      {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                      <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Surface Regularity Test (International Roughness Index, IRI)</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                      {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                      <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahPT1<input type="text" name="markahPT1" id="markahPT1" /></td>            
                    </tr>

                    

                    <tr>
                      <td colspan="1" rowspan="4">PT 2</td>
                      <td colspan="2">PERMEABLE PAVEMENT</td>
                      {{-- <td></td> --}}
                      <td>3</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>
  
                    {{-- <tr>
                      <td rowspan="9">SM2</td>
                      <td colspan="2">Road alignment</td>
                      <td>6</td>
                      
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr> --}}

                    <tr>
                      <td >use of permeable (porous) pavement mix design</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointPT2()" type="number" min="0" max="2" class="targetPointPT2" ></td>
                      {{-- <td><input onblur="findAssessmentPointPT2()" type="number" min="0" max="2" class="assessmentPointPT2"></td> --}}
                      <td><input onblur="commentPT2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >Pavement crossfall 2.5% and min unpaved shoulder to drain</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointPT2()" type="number" min="0" max="2" class="targetPointPT2" ></td>
                      {{-- <td><input onblur="findAssessmentPointPT2()" type="number" min="0" max="2" class="assessmentPointPT2"></td> --}}
                      <td><input onblur="commentPT2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >Drainability of porous asphalt wearing course having a minimum thickness of 50mm</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointPT2()" type="number" min="0" max="2" class="targetPointPT2" ></td>
                      {{-- <td><input onblur="findAssessmentPointPT2()" type="number" min="0" max="2" class="assessmentPointPT2"></td> --}}
                      <td><input onblur="commentPT2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahPT2<input type="text" name="markahPT2" id="markahPT2" /></td>            
                    </tr>
                    

                    <tr>
                      <td colspan="1" rowspan="2">PT 3</td>
                      <td colspan="2">PAVEMENT PERFORMANCE TRACKING</td>
                      {{-- <td></td> --}}
                      <td>2</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Use a process that allows construction quality measurements and long-term pavement performance measurements</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointPT3()" type="number" min="0" max="2" class="targetPointPT3" name="" id=""></td>
                      {{-- <td><input onblur="findAssessmentPointPT3()" type="number" min="0" max="2" class="assessmentPointPT3" name="" id=""></td> --}}
                      <td><input onblur="commentPT3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahPT3<input type="text" name="markahPT3" id="markahPT3" /></td>            
                    </tr>
                    

                    <tr>
                      <td colspan="1" rowspan="5">PT 4</td>
                      <td colspan="2">LONG-LIFE PAVEMENT</td>
                      {{-- <td></td> --}}
                      <td>4</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Meet the requirements of Arahan Teknik Jalan</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointPT4()" type="number" min="0" max="2" class="targetPointPT4"></td>
                      {{-- <td><input onblur="findAssessmentPointPT4()" type="number" min="0" max="2" class="assessmentPointPT4"></td> --}}
                      <td><input onblur="commentPT4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >Pavement design is in accordance</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointPT4()" type="number" min="0" max="2" class="targetPointPT4"></td>
                      {{-- <td><input onblur="findAssessmentPointPT4()" type="number" min="0" max="2" class="assessmentPointPT4"></td> --}}
                      <td><input onblur="commentPT4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >Drainability surface runoff</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointPT4()" type="number" min="0" max="2" class="targetPointPT4"></td>
                      {{-- <td><input onblur="findAssessmentPointPT4()" type="number" min="0" max="2" class="assessmentPointPT4"></td> --}}
                      <td><input onblur="commentPT4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Riqid Pavement > 40 years design life</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointPT4()" type="number" min="0" max="2" class="targetPointPT4"></td>
                      {{-- <td><input onblur="findAssessmentPointPT4()" type="number" min="0" max="2" class="assessmentPointPT4"></td> --}}
                      <td><input onblur="commentPT4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahPT4<input type="text" name="markahPT4" id="markahPT4" /></td>            
                    </tr>

                    <tr >
                      <td colspan="3"> SUB TOTAL PT POINT</td>
                      <td>12</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>

                  </tbody>
                </table>

                <div align="center" class="mt-3">
                  <button class="btn btn-primary" type="submit" title="Simpan">Batal</button>
                  <button class="btn btn-primary" type="submit" title="Hantar">Simpan</button>
                  <a href="/penilaian_reka_bentuk_jalan/isi_skor_kad_page3" type="button" class="btn btn-primary">Seterusnya</a>          
                </div>
      </form>
      </div>
      
      <script>
        function findTargetPointPT1(){
        var arr = document.getElementsByClassName('targetPointPT1');
        // add new var 
        var tot=0;
        for(var i=0;i<arr.length;i++){
            if(parseFloat(arr[i].value))
                tot += parseFloat(arr[i].value);
                // add tot2
        }
        document.getElementById('markahPT1').value = tot;
      } 
        </script> 

      <script>
        function findTargetPointPT3(){
        var arr = document.getElementsByClassName('targetPointPT3');
        // add new var 
        var tot=0;
        for(var i=0;i<arr.length;i++){
            if(parseFloat(arr[i].value))
                tot += parseFloat(arr[i].value);
                // add tot2
        }
        document.getElementById('markahPT3').value = tot;
      } 
        </script> 

      <script>
        function findTargetPointPT4(){
        var arr = document.getElementsByClassName('targetPointPT4');
        // add new var 
        var tot=0;
        for(var i=0;i<arr.length;i++){
            if(parseFloat(arr[i].value))
                tot += parseFloat(arr[i].value);
                // add tot2
        }
        document.getElementById('markahPT4').value = tot;
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

