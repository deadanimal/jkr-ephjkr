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
      <form action="/penilaian_reka_bentuk_jalan/simpan_isi_skor_kad_page3/{id}" method="post" enctype="multipart/form-data">
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
                      <td>EW</td>
                      <td colspan="6" align="left">ENVIRONMENT & WATER</td>
                     
                      
                      
                      
                    </tr>
  
                    <tr>
                      <td colspan="1" rowspan="2">EW1</td>
                      <td colspan="2">ENVIRONMENTAL MANAGEMENT SYSTEM</td>
                      {{-- <td></td> --}}
                      <td>3</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>
  
                    <tr>
                      <td>Provision of EPW in contract (Design Stage)</td>
                      <td rowspan="1">CSFJ</td>
                      <td>3</td>
                      <td><input onblur="findTargetPointEW1()" type="number" min="0" max="2" class="targetPointEW1" ></td>
                      {{-- <td><input onblur="findAssessmentPointEW1()" type="number" min="0" max="2" class="assessmentPointEW1"></td> --}}
                      <td><input onblur="commentEW1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahEW1<input type="text" name="markahEW1" id="markahEW1" /></td>            
                    </tr>
  
                    

                    

                    <tr>
                      <td colspan="1" rowspan="3">EW2</td>
                      <td colspan="2">STORMWATER MANAGEMENT</td>
                      {{-- <td></td> --}}
                      <td>2</td>
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
                      <td >Develop a stormwater management documents and frawing plans</td>
                      <td rowspan="2">CKAS</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointEW2()" type="number" min="0" max="2" class="targetPointEW2" ></td>
                      {{-- <td><input onblur="findAssessmentPointEW2()" type="number" min="0" max="2" class="assessmentPointEW2"></td> --}}
                      <td><input onblur="commentEW2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >Develop a stromwater management plan for the site using stormwater</td>
                      {{-- <td></td> --}}
                      <td>1</td>
                      <td><input onblur="findTargetPointEW2()" type="number" min="0" max="2" class="targetPointEW2" ></td>
                      {{-- <td><input onblur="findAssessmentPointEW2()" type="number" min="0" max="2" class="assessmentPointEW2"></td> --}}
                      <td><input onblur="commentEW2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahEW2<input type="text" name="markahEW2" id="markahEW2" /></td>            
                    </tr>
                    
                    <tr >
                      <td colspan="3"> SUB TOTAL EW POINT</td>
                      <td>5</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>

                    <tr>
                      <td>AE</td>
                      <td colspan="6" align="left">ACCESS & EQUITY</td>
                     
                      
                      
                      
                    </tr>
  
                    <tr>
                      <td colspan="1" rowspan="5">AE 1</td>
                      <td colspan="2">SAFETY AUDIT</td>
                      {{-- <td></td> --}}
                      <td>5</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Road Safety Audit (During Design Stage)</td>
                      <td></td>
                      <td>3</td>
                      <td><input onblur="findTargetPointAE1()" type="number" min="0" max="2" class="targetPointAE1" ></td>
                      {{-- <td><input onblur="findAssessmentPointAE1()" type="number" min="0" max="2" class="assessmentPointAE1" ></td> --}}
                      <td><input onblur="commentAE1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Road Safety Audit (During Construction Stage)</td>
                      <td></td>
                      <td>3</td>
                      <td><input onblur="findTargetPointAE1()" type="number" min="0" max="2" class="targetPointAE1" ></td>
                      {{-- <td><input onblur="findAssessmentPointAE1()" type="number" min="0" max="2" class="assessmentPointAE1" ></td> --}}
                      <td><input onblur="commentAE1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Additional Audit For Traffic Management Safety Report During Construction</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointAE1()" type="number" min="0" max="2" class="targetPointAE1" ></td>
                      {{-- <td><input onblur="findAssessmentPointAE1()" type="number" min="0" max="2" class="assessmentPointAE1" ></td> --}}
                      <td><input onblur="commentAE1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Road Safety Audit (During Operational Stage)</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointAE1()" type="number" min="0" max="2" class="targetPointAE1" ></td>
                      {{-- <td><input onblur="findAssessmentPointAE1()" type="number" min="0" max="2" class="assessmentPointAE1" ></td> --}}
                      <td><input onblur="commentAE1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahAE1<input type="text" name="markahAE1" id="markahAE1" /></td>            
                    </tr>

                    <tr >
                      <td colspan="3"> SUB TOTAL AE POINT</td>
                      <td>5</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>

                    <tr>
                      <td>CA</td>
                      <td colspan="6" align="left">CONSTRUCTION ACTIVITY</td>
                      
                    </tr>
                    

                    <tr>
                      <td colspan="1" rowspan="2">CA1</td>
                      <td colspan="2">REQUIREMENT FOR ROAD WORKS DESIGN</td>
                      {{-- <td></td> --}}
                      <td>3</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >MS ISO 9001:2008 or (latest version) certification for main contractor</td>
                      <td></td>
                      <td>3</td>
                      <td><input onblur="findTargetPointCA1()" type="number" min="0" max="2" class="targetPointCA1"></td>
                      {{-- <td><input onblur="findAssessmentPointCA1()" type="number" min="0" max="2" class="assessmentPointCA1" ></td> --}}
                      <td><input onblur="commentCA1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahCA1<input type="text" name="markahCA1" id="markahCA1" /></td>            
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="3">CA2</td>
                      <td colspan="2">OCCUPTIONAL HEALTH AND SAFETY MANAGEMENT SYSTEM</td>
                      {{-- <td></td> --}}
                      <td>3</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >OHSAS 18001:2007 0r (latest version) certification for main contractor</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointCA2()" type="number" min="0" max="2" class="targetPointCA2"></td>
                      {{-- <td><input onblur="findAssessmentPointCA2()" type="number" min="0" max="2" class="assessmentPointCA2" ></td> --}}
                      <td><input onblur="commentCA2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >To provide site safety and health officer with certification by DOSH</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointCA2()" type="number" min="0" max="2" class="targetPointCA2"></td>
                      {{-- <td><input onblur="findAssessmentPointCA2()" type="number" min="0" max="2" class="assessmentPointCA2" ></td> --}}
                      <td><input onblur="commentCA2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahCA2<input type="text" name="markahCA2" id="markahCA2" /></td>            
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="5">CA 3</td>
                      <td colspan="2">OCONSTRUCTION WASTE MANAGEMENT PLAN	</td>
                      {{-- <td></td> --}}
                      <td>4</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Create, establish, implement and maintain a formal construction waste management plan during road construction</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointCA3()" type="number" min="0" max="2" class="targetPointCA3"></td>
                      {{-- <td><input onblur="findAssessmentPointCA3()" type="number" min="0" max="2" class="assessmentPointCA3" ></td> --}}
                      <td><input onblur="commentCA3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Provision of Waste Management Plan in the contract (BQ)</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointCA3()" type="number" min="0" max="2" class="targetPointCA3"></td>
                      {{-- <td><input onblur="findAssessmentPointCA3()" type="number" min="0" max="2" class="assessmentPointCA3" ></td> --}}
                      <td><input onblur="commentCA3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Provide a designated location to segregate construction waste on-site</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointCA3()" type="number" min="0" max="2" class="targetPointCA3"></td>
                      {{-- <td><input onblur="findAssessmentPointCA3()" type="number" min="0" max="2" class="assessmentPointCA3" ></td> --}}
                      <td><input onblur="commentCA3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Appoint the licensed contractor(s) to collect the construction waste </td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointCA3()" type="number" min="0" max="2" class="targetPointCA3"></td>
                      {{-- <td><input onblur="findAssessmentPointCA3()" type="number" min="0" max="2" class="assessmentPointCA3" ></td> --}}
                      <td><input onblur="commentCA3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahCA3<input type="text" name="markahCA3" id="markahCA3" /></td>            
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="4">CA 4</td>
                      <td colspan="2">TRAFFIC MANAGEMENT PLAN</td>
                      {{-- <td></td> --}}
                      <td>4</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Create, establish and implement a formal traffic management plan during Design and road construction stage</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointCA4()" type="number" min="0" max="2" class="targetPointCA4"></td>
                      {{-- <td><input onblur="findAssessmentPointCA4()" type="number" min="0" max="2" class="assessmentPointCA4" ></td> --}}
                      <td><input onblur="commentCA4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Provision of Traffic Management Officer in the contract document (BQ)</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointCA4()" type="number" min="0" max="2" class="targetPointCA4"></td>
                      {{-- <td><input onblur="findAssessmentPointCA4()" type="number" min="0" max="2" class="assessmentPointCA4" ></td> --}}
                      <td><input onblur="commentCA4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Provision of third party auditor for Traffic Management Plan (TMP)</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointCA4()" type="number" min="0" max="2" class="targetPointCA4"></td>
                      {{-- <td><input onblur="findAssessmentPointCA4()" type="number" min="0" max="2" class="assessmentPointCA4" ></td> --}}
                      <td><input onblur="commentCA4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahCA4<input type="text" name="markahCA4" id="markahCA4" /></td>            
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="2">CA 5</td>
                      <td colspan="2">SITE ROUTINE MAINTENANCE PLAN 	</td>
                      {{-- <td></td> --}}
                      <td>2</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Create, establish, implement routine maintenanace for road project </td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointCA5()" type="number" min="0" max="2" class="targetPointCA5"></td>
                      <td><input onblur="findAssessmentPointCA5()" type="number" min="0" max="2" class="assessmentPointCA5" ></td>
                      <td><input onblur="commentCA5()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahCA5<input type="text" name="markahCA5" id="markahCA5" /></td>            
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="2">CA 6</td>
                      <td colspan="2">HOUSEKEEPING 	</td>
                      {{-- <td></td> --}}
                      <td>2</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >"Provision Housekeeping implementation in the contract document/ BQ
                        OR
                        Establish and implement housekeeping during construction "</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointCA6()" type="number" min="0" max="2" class="targetPointCA6"></td>
                      {{-- <td><input onblur="findAssessmentPointCA6()" type="number" min="0" max="2" class="assessmentPointCA6" ></td> --}}
                      <td><input onblur="commentCA6()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahCA6<input type="text" name="markahCA6" id="markahCA6" /></td>            
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="4">CA 7</td>
                      <td colspan="2">HOUSEKEEPING 	</td>
                      {{-- <td></td> --}}
                      <td>4</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Perform scheduled maintenance of construction machineries</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointCA7()" type="number" min="0" max="2" class="targetPointCA7"></td>
                      {{-- <td><input onblur="findAssessmentPointCA7()" type="number" min="0" max="2" class="assessmentPointCA7" ></td> --}}
                      <td><input onblur="commentCA7()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >Use high performance machineries with low fuel consumption and low air emission</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointCA7()" type="number" min="0" max="2" class="targetPointCA7"></td>
                      {{-- <td><input onblur="findAssessmentPointCA7()" type="number" min="0" max="2" class="assessmentPointCA7" ></td> --}}
                      <td><input onblur="commentCA7()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >Provision of ESCP and Environmental Monitoring Report (EMR) – (eg. Water/ Air/ Noise Quality ) in the contract</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointCA7()" type="number" min="0" max="2" class="targetPointCA7"></td>
                      {{-- <td><input onblur="findAssessmentPointCA7()" type="number" min="0" max="2" class="assessmentPointCA7" ></td> --}}
                      <td><input onblur="commentCA7()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahCA7<input type="text" name="markahCA7" id="markahCA7" /></td>            
                    </tr>

                   

                    <tr >
                      <td colspan="3"> SUB TOTAL CA POINT</td>
                      <td>22</td>
                      <td style="display: none">markahCA<input type="text" name="markahCA" id="markahCA" /></td>            
                      <td></td>
                      <td></td>
                    </tr>

                  </tbody>
                </table>

                <div align="center" class="mt-3">
                  <button class="btn btn-primary" type="submit" title="Simpan">Batal</button>
                  <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
                  <a href="/penilaian_reka_bentuk_jalan/isi_skor_kad_page4" type="button" class="btn btn-primary">Seterusnya</a>          
                </div>
      </form>
      </div> 
      
      <script>
        function findTargetPointEW1(){
        var arr = document.getElementsByClassName('targetPointEW1');
        // add new var 
        var tot=0;
        for(var i=0;i<arr.length;i++){
            if(parseFloat(arr[i].value))
                tot += parseFloat(arr[i].value);
                // add tot2
        }
        document.getElementById('markahEW1').value = tot;
      } 
        </script> 

  <script>
    function findTargetPointEW2(){
    var arr = document.getElementsByClassName('targetPointEW2');
    // add new var 
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
            // add tot2
    }
    document.getElementById('markahEW2').value = tot;
  } 
    </script> 

  <script>
    function findTargetPointAE1(){
    var arr = document.getElementsByClassName('targetPointAE1');
    // add new var 
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
            // add tot2
    }
    document.getElementById('markahAE1').value = tot;
  } 
    </script> 

  <script>
    function findTargetPointCA1(){
    var arr = document.getElementsByClassName('targetPointCA1');
    // add new var 
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
            // add tot2
    }
    document.getElementById('markahCA1').value = tot;
  } 
    </script> 

<script>
  function findTargetPointCA2(){
  var arr = document.getElementsByClassName('targetPointCA2');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot2
  }
  document.getElementById('markahCA2').value = tot;
} 
  </script> 

<script>
  function findTargetPointCA3(){
  var arr = document.getElementsByClassName('targetPointCA3');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot2
  }
  document.getElementById('markahCA3').value = tot;
} 
  </script> 

<script>
  function findTargetPointCA4(){
  var arr = document.getElementsByClassName('targetPointCA4');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot2
  }
  document.getElementById('markahCA4').value = tot;
} 
  </script>

<script>
  function findTargetPointCA5(){
  var arr = document.getElementsByClassName('targetPointCA5');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot2
  }
  document.getElementById('markahCA5').value = tot;
} 
  </script>

<script>
  function findTargetPointCA6(){
  var arr = document.getElementsByClassName('targetPointCA6');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot2
  }
  document.getElementById('markahCA6').value = tot;
} 
  </script>

<script>
  function findTargetPointCA7(){
  var arr = document.getElementsByClassName('targetPointCA7');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot2
  }
  document.getElementById('markahCA7').value = tot;
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

