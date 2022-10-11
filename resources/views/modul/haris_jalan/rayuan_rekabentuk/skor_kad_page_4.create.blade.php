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
      <form action="/penilaian_reka_bentuk_jalan/simpan_isi_skor_kad_page4/{id}" method="post" enctype="multipart/form-data">
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
                      <th colspan="4">Design</th>
                      
       
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
                      <td>MR</td>
                      <td colspan="6" align="left">MATERIAL & RESOURCES</td>
                     
                      
                      
                      
                    </tr>
  
                    <tr>
                      <td colspan="1" rowspan="6">MR 1</td>
                      <td colspan="2">MATERIAL REUSE	</td>
                      {{-- <td></td> --}}
                      <td>5</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>
  
                    <tr>
                      <td>Reuse at a minimum 30% of existing pavement materials by estimated volume</td>
                      <td rowspan="4">CJ</td>
                      <td>2</td>
                      <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                      {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                      <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr>
                      <td>Reuse of existing material other than pavement materials </td>
                      <td>1</td>
                      <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                      {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                      <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr>
                      <td>Earthwork balance </td>
                      <td>1</td>
                      <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                      {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                      <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr>
                      <td>Fiber Roll Netting using biodegradable material at site for erosion control (eg. Wooden dust, coconut fiber)</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                      {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                      <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr>
                      <td>To use reusable formwork for structure (eg: steel/ fiber formwork)</td>
                      <td ></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                      {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                      <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahMR1<input type="text" name="markahMR1" id="markahMR1" /></td>            
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="5">MR 2</td>
                      <td colspan="2">GREEN PRODUCT</td>
                      {{-- <td></td> --}}
                      <td>4</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Green Products Scoring System (GPSS) of 70% - 100%</td>
                      <td rowspan="4">CASKT</td>
                      <td>4</td>
                      <td><input onblur="findTargetPointMR2()" type="number" min="0" max="2" class="targetPointMR2"></td>
                      {{-- <td><input onblur="findAssessmentPointMR2()" type="number" min="0" max="2" class="assessmentPointMR2"></td> --}}
                      <td><input onblur="commentMR()" type="text" min="0" max="2" class="road"></td>
                    </tr>
                    <tr>
                      <td >Green Products Scoring System (GPSS) of 50% - 69%</td>
                      {{-- <td></td> --}}
                      <td>3</td>
                      <td><input onblur="findTargetPointMR2()" type="number" min="0" max="2" class="targetPointMR2"></td>
                      {{-- <td><input onblur="findAssessmentPointMR2()" type="number" min="0" max="2" class="assessmentPointMR2"></td> --}}
                      <td><input onblur="commentMR2()" type="text" min="0" max="2" class="road"></td>
                    </tr>
                    <tr>
                      <td >Green Products Scoring System (GPSS) of 40% - 49%</td>
                      {{-- <td></td> --}}
                      <td>2</td>
                      <td><input onblur="findTargetPointMR2()" type="number" min="0" max="2" class="targetPointMR2"></td>
                      {{-- <td><input onblur="findAssessmentPointMR2()" type="number" min="0" max="2" class="assessmentPointMR2"></td> --}}
                      <td><input onblur="commentMR2()" type="text" min="0" max="2" class="road"></td>
                    </tr>
                    <tr>
                      <td >Use Green Product Scoring System (GPSS)</td>
                      {{-- <td></td> --}}
                      <td>1</td>
                      <td><input onblur="findTargetPointMR2()" type="number" min="0" max="2" class="targetPointMR2"></td>
                      {{-- <td><input onblur="findAssessmentPointMR2()" type="number" min="0" max="2" class="assessmentPointMR2"></td> --}}
                      <td><input onblur="commentMR2()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahMR2<input type="text" name="markahMR2" id="markahMR2" /></td>            
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="3">MR 3</td>
                      <td colspan="2">ROAD INVENTORIES</td>
                      {{-- <td></td> --}}
                      <td>2</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Provide updated master inventory of road asset / warranty of material/product after completion of road works</td>
                      <td rowspan="2">CSFJ</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointMR3()" type="number" min="0" max="2" class="targetPointMR3"></td>
                      {{-- <td><input onblur="findAssessmentPointMR3()" type="number" min="0" max="2" class="assessmentPointMR3"></td> --}}
                      <td><input onblur="commentMR3()" type="text" min="0" max="2" class="road"></td>
                    </tr>
                    <tr>
                      <td >Provide established master inventory of  road asset / warranty of material/product of existing road </td>
                      {{-- <td></td> --}}
                      <td>1</td>
                      <td><input onblur="findTargetPointMR3()" type="number" min="0" max="2" class="targetPointMR3"></td>
                      {{-- <td><input onblur="findAssessmentPointMR3()" type="number" min="0" max="2" class="assessmentPointMR3"></td> --}}
                      <td><input onblur="commentMR3()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahMR3<input type="text" name="markahMR3" id="markahMR3" /></td>            
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="2">MR 4</td>
                      <td colspan="2">EFFICIENT ROAD LIGHTINGS</td>
                      {{-- <td></td> --}}
                      <td>1</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >All systems should be designed to use energy efficient road lightings, while complying to standard and specification for road lightings (eg. MS 825 part 1:2007)</td>
                      <td rowspan="1">CKE</td>
                      <td>1</td>
                      <td><input onblur="findTargetPointMR4()" type="number" min="0" max="2" class="targetPointMR4"></td>
                      {{-- <td><input onblur="findAssessmentPointMR4()" type="number" min="0" max="2" class="assessmentPointMR4"></td> --}}
                      <td><input onblur="commentMR4()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahMR4<input type="text" name="markahMR4" id="markahMR4" /></td>            
                    </tr>

                    <tr >
                      <td colspan="3"> SUB TOTAL MR POINT</td>
                      <td>12</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>

                    <tr >
                      <td colspan="3"> TOTAL CORE POINT</td>
                      <td>69</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>

                    <tr>
                      <td>EC</td>
                      <td colspan="6" align="left">ELECTIVE CRITERIAS</td>
                     
                      
                      
                      
                    </tr>
  
                    <tr>
                      <td colspan="1" rowspan="4">SM 5 - EC</td>
                      <td colspan="2">SERVICES FOR DISABLED USERS	</td>
                      {{-- <td></td> --}}
                      <td>3</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Crossing for disabled users with noise making devices installed</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM5EC()" type="number" min="0" max="2" class="targetPointSM5EC"></td>
                      <td><input onblur="findAssessmentPointSM5EC()" type="number" min="0" max="2" class="assessmentPointSM5EC"></td>
                      <td><input onblur="commentSM5EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr>
                      <td >Walkway access for disabled users by providing sidewalks sloped for easy access</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM5EC()" type="number" min="0" max="2" class="targetPointSM5EC"></td>
                      <td><input onblur="findAssessmentPointSM5EC()" type="number" min="0" max="2" class="assessmentPointEC"></td>
                      <td><input onblur="commentSM5EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr>
                      <td >Tac tile on the pedestrian pathway and access for disabled users</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointSM5EC()" type="number" min="0" max="2" class="targetPointSM5EC"></td>
                      <td><input onblur="findAssessmentPointSM5EC()" type="number" min="0" max="2" class="assessmentPointSM5EC"></td>
                      <td><input onblur="commentSM5EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahSM5EC<input type="text" name="markahSM5EC" id="markahSM5EC" /></td>            
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="4">SM 6 - EC</td>
                      <td colspan="2">NOISE CONTROL	</td>
                      {{-- <td></td> --}}
                      <td>2</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >The pavement mix design  by using quiet pavement</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointSM6EC()" type="number" min="0" max="2" class="targetPointSM6EC"></td>
                      {{-- <td><input onblur="findAssessmentPointSM6EC()" type="number" min="0" max="2" class="assessmentPointSM6EC"></td> --}}
                      <td><input onblur="commentSM6EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr>
                      <td >Noise barrier shall be provided in sensitive areas such as housing situated beside busy roads or highways, schools and hospitals</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointSM6EC()" type="number" min="0" max="2" class="targetPointSM6EC"></td>
                      {{-- <td><input onblur="findAssessmentPointSM6EC()" type="number" min="0" max="2" class="assessmentPointSM6EC"></td> --}}
                      <td><input onblur="commentSM6EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr>
                      <td >Buffer Zone </td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointSM6EC()" type="number" min="0" max="2" class="targetPointSM6EC"></td>
                      {{-- <td><input onblur="findAssessmentPointSM6EC()" type="number" min="0" max="2" class="assessmentPointSM6EC"></td> --}}
                      <td><input onblur="commentSM6EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahSM6EC<input type="text" name="markahSM6EC" id="markahSM6EC" /></td>            
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="2">EW 3 - EC</td>
                      <td colspan="2">ECOLOGICAL CONNECTIVITY		</td>
                      {{-- <td></td> --}}
                      <td>5</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >"Provide dedicated wildlife crossing structures and protective fencing as determined by Environmental Impact Assessment (EIA) report 
                        OR
                        Provide sound barrier at sensitive area for wildlife"</td>
                      <td></td>
                      <td>5</td>
                      <td><input onblur="findTargetPointEW3EC()" type="number" min="0" max="2" class="targetPointEW3EC"></td>
                      {{-- <td><input onblur="findAssessmentPointEW3EC()" type="number" min="0" max="2" class="assessmentPointEW3EC"></td> --}}
                      <td><input onblur="commentEW3EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahEW3EC<input type="text" name="markahEW3EC" id="markahEW3EC" /></td>            
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="2">AE 2 - EC</td>
                      <td colspan="2"> SCENIC VIEWS </td>
                      {{-- <td></td> --}}
                      <td>5</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >"Provide dedicated wildlife crossing structures and protective fencing as determined by Environmental Impact Assessment (EIA) report 
                        OR
                        Provide sound barrier at sensitive area for wildlife"</td>
                      <td></td>
                      <td>5</td>
                      <td><input onblur="findTargetPointAE2EC()" type="number" min="0" max="2" class="targetPointAE2EC"></td>
                      {{-- <td><input onblur="findAssessmentPointAE2EC()" type="number" min="0" max="2" class="assessmentPointAE2EC"></td> --}}
                      <td><input onblur="commentAE2EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahAE2EC<input type="text" name="markahAE2EC" id="markahAE2EC" /></td>            
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="5">AE 3 - EC</td>
                      <td colspan="2"> PEDESTRIAN ACCESS </td>
                      {{-- <td></td> --}}
                      <td>5</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Zebra Crossing or Signalised Pedestrian Crossing  and Refuge Island</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointAE3EC()" type="number" min="0" max="2" class="targetPointAE3EC"></td>
                      {{-- <td><input onblur="findAssessmentPointAE3EC()" type="number" min="0" max="2" class="assessmentPointAE3EC"></td> --}}
                      <td><input onblur="commentAE3EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr>
                      <td >Overhead Pedestrian Bridge</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointAE3EC()" type="number" min="0" max="2" class="targetPointAE3EC"></td>
                      {{-- <td><input onblur="findAssessmentPointAE3EC()" type="number" min="0" max="2" class="assessmentPointAE3EC"></td> --}}
                      <td><input onblur="commentAE3EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>
                    <tr>
                      <td >Sidewalk / Walkway and Raised Crosswalk</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointAE3EC()" type="number" min="0" max="2" class="targetPointAE3EC"></td>
                      {{-- <td><input onblur="findAssessmentPointAE3EC()" type="number" min="0" max="2" class="assessmentPointAE3EC"></td> --}}
                      <td><input onblur="commentAE3EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>
                    <tr>
                      <td >Covered walkway</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointAE3EC()" type="number" min="0" max="2" class="targetPointAE3EC"></td>
                      {{-- <td><input onblur="findAssessmentPointAE3EC()" type="number" min="0" max="2" class="assessmentPointAE3EC"></td> --}}
                      <td><input onblur="commentAE3EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahAE3EC<input type="text" name="markahAE3EC" id="markahAE3EC" /></td>            
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="5">AE 4 - EC</td>
                      <td colspan="2"> MOTORCYCLE LANE </td>
                      {{-- <td></td> --}}
                      <td>6</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Paved shoulder, non-exclusive motorcycle lane and end treatment at junction</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointAE4EC()" type="number" min="0" max="2" class="targetPointAE4EC"></td>
                      {{-- <td><input onblur="findAssessmentPointEC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                      <td><input onblur="commentAE4EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr>
                      <td >Exclusive motorcycle lane</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointAE4EC()" type="number" min="0" max="2" class="targetPointAE4EC"></td>
                      {{-- <td><input onblur="findAssessmentPointEC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                      <td><input onblur="commentAE4EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>
                    <tr>
                      <td >Overhead motorcycle bridge</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointAE4EC()" type="number" min="0" max="2" class="targetPointAE4EC"></td>
                      {{-- <td><input onblur="findAssessmentPointEC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                      <td><input onblur="commentAE4EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>
                    <tr>
                      <td >Motorcycle shelter</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointAE4EC()" type="number" min="0" max="2" class="targetPointAE4EC"></td>
                      {{-- <td><input onblur="findAssessmentPointEC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                      <td><input onblur="commentAE4EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahAE4EC<input type="text" name="markahAE4EC" id="markahAE4EC" /></td>            
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="2">AE 5 - EC</td>
                      <td colspan="2"> REST AREA </td>
                      {{-- <td></td> --}}
                      <td>2</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Provide or maintain existing rest area facilities along the road </td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointAE5EC()" type="number" min="0" max="2" class="targetPointAE5EC"></td>
                      {{-- <td><input onblur="findAssessmentPointAE5EC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                      <td><input onblur="commentAE5EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahAE5EC<input type="text" name="markahAE5EC" id="markahAE5EC" /></td>            
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="3">AE 6 - EC</td>
                      <td colspan="2"> BICYCLE ASSESS </td>
                      {{-- <td></td> --}}
                      <td>2</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Implement physical or constructed changes to the roadway structure, dimensions, or form that provide bicycle-only facilities with dedicated access (such as bicycle lane). Lanes shared with motorized vehicles do not meet this requirement </td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="findTargetPointAE6EC()" type="number" min="0" max="2" class="targetPointAE6EC"></td>
                      {{-- <td><input onblur="findAssessmentPointAE6EC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                      <td><input onblur="commentAE6EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr>
                      <td >Implement physical or constructed changes to the roadway structure, dimensions, or form that provide bicycle-only facilities with dedicated access (such as bicycle lane). Lanes shared with motorized vehicles do not meet this requirement</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="findTargetPointAE6EC()" type="number" min="0" max="2" class="targetPointAE6EC"></td>
                      {{-- <td><input onblur="findAssessmentPointAE6EC()" type="number" min="0" max="2" class="assessmentPointAE6EC"></td> --}}
                      <td><input onblur="commentAE6EC()" type="text" min="0" max="2" class="road"></td>
                    </tr>

                    <tr >
                      <td style="display: none">markahAE6EC<input type="text" name="markahAE6EC" id="markahAE6EC" /></td>            
                    </tr>

                    

                    <tr >
                      <td colspan="3"> TOTAL ELECTIVE POINT</td>
                      <td>27</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>

                    

                  </tbody>
                </table>

                <div align="center" class="mt-3">
                  <button class="btn btn-primary" type="submit" title="Batal">Batal</button>
                  <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
                  <a href="/penilaian_reka_bentuk_jalan/isi_skor_kad_page5" type="button" class="btn btn-primary">Seterusnya</a>          
                </div>
      </form>
      </div>
      
      <script>
        function findTargetPointMR1(){
        var arr = document.getElementsByClassName('targetPointMR1');
        // add new var 
        var tot=0;
        for(var i=0;i<arr.length;i++){
            if(parseFloat(arr[i].value))
                tot += parseFloat(arr[i].value);
                // add tot4
        }
        document.getElementById('markahMR1').value = tot;
      } 
        </script> 

<script>
  function findTargetPointMR2(){
  var arr = document.getElementsByClassName('targetPointMR2');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot4
  }
  document.getElementById('markahMR2').value = tot;
} 
  </script>

<script>
  function findTargetPointMR3(){
  var arr = document.getElementsByClassName('targetPointMR3');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot4
  }
  document.getElementById('markahMR3').value = tot;
} 
  </script>

<script>
  function findTargetPointMR4(){
  var arr = document.getElementsByClassName('targetPointMR4');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot4
  }
  document.getElementById('markahMR4').value = tot;
} 
  </script>

    <script>
      function findTargetPointSM5EC(){
      var arr = document.getElementsByClassName('targetPointSM5EC');
      // add new var 
      var tot=0;
      for(var i=0;i<arr.length;i++){
          if(parseFloat(arr[i].value))
              tot += parseFloat(arr[i].value);
              // add tot4
      }
      document.getElementById('markahSM5EC').value = tot;
    } 
      </script> 

<script>
  function findTargetPointSM6EC(){
  var arr = document.getElementsByClassName('targetPointSM6EC');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot4
  }
  document.getElementById('markahSM6EC').value = tot;
} 
  </script> 

<script>
  function findTargetPointEW3EC(){
  var arr = document.getElementsByClassName('targetPointEW3EC');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot4
  }
  document.getElementById('markahEW3EC').value = tot;
} 
  </script> 

<script>
  function findTargetPointAE2EC(){
  var arr = document.getElementsByClassName('targetPointAE2EC');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot4
  }
  document.getElementById('markahAE2EC').value = tot;
} 
  </script> 

<script>
  function findTargetPointAE3EC(){
  var arr = document.getElementsByClassName('targetPointAE3EC');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot4
  }
  document.getElementById('markahAE3EC').value = tot;
} 
  </script> 

<script>
  function findTargetPointAE4EC(){
  var arr = document.getElementsByClassName('targetPointAE4EC');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot4
  }
  document.getElementById('markahAE4EC').value = tot;
} 
  </script> 

<script>
  function findTargetPointAE5EC(){
  var arr = document.getElementsByClassName('targetPointAE5EC');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot4
  }
  document.getElementById('markahAE5EC').value = tot;
} 
  </script> 

<script>
  function findTargetPointAE6EC(){
  var arr = document.getElementsByClassName('targetPointAE6EC');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot4
  }
  document.getElementById('markahAE6EC').value = tot;
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

