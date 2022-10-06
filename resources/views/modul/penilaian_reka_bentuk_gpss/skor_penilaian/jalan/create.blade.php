@extends('layouts.base')

<link rel="stylesheet" href="/cssfile/pengesahan_penilaian_style.css">

<style>
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>

@section('content')

 {{-- header --}}
<div class="row">
  <div class="col">
      <h3 class="mb-0 text-primary"><strong>PENILAIAN REKA BENTUK GPSS</strong></h3>
  </div>
</div>

<hr class="text-primary mb-3">


<div class="card-body">
  <div class="row3 mx-1 table-responsive scrollbar text-center">
    <form action= "/penilaian_reka_bentuk_gpss/simpan_skor_penilaian_arkitek/{id}" method="post" enctype="multipart/form-data">
      @method('POST')
      @csrf
      <div class="col">
        <table class="table table-bordered line-table text-center" style="width: 100%">
          <thead class="text-white bg-orange-jkr">
            <tr>          
              <th colspan="8">Green Product Scoring Sheet</th>
            </tr>
            <tr>
              <th colspan="8">List of products for road and geotechnical works</th>
            </tr>
            <tr>
              <th>No.</th>
              <th >Component</th>
              <th>Product</th>
              <th>Point Allocated</th>
              <th>Point Requested (design)</th>
              {{-- <th>Point Requested (construction)</th> --}}
              {{-- <th>Point Awarded</th> --}}
              <th >Remark</th>
              <th >Supporting Documents</th>
            </tr>
          </thead>
          <tbody>
            
            <tr class="text-center">
              <td rowspan="6" >1</td>
              <td rowspan="6">Common items</td>
              <td >Cement</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwCommonCement" id="RwCommonCement"></td>            
              <td><input type="text" name="Remark_RwCommonCement" id="Remark_RwCommonCement"></td>                    
              <td><input type="file" name="Remark_RwCommonCement" id="Remark_RwCommonCement"></td>                    
            </tr>
  
            <tr>
              <td >Formwork</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwCommonFormwork" id="RwCommonFormwork"></td>            
              <td><input type="text" name="Remark_RwCommonFormwork" id="Remark_RwCommonFormwork"></td>                    
              <td><input type="file" name="Remark_RwCommonFormwork" id="Remark_RwCommonFormwork"></td>                    
            </tr>
  
            <tr>
              
              <td >Steel fabric</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwCommonSteel" id="RwCommonSteel"></td>            
              <td><input type="text" name="Remark_RwCommonSteel" id="Remark_RwCommonSteel"></td>                    
              <td><input type="file" name="Remark_RwCommonSteel" id="Remark_RwCommonSteel"></td>                    
            </tr>
  
            <tr>
              <td >Piles</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwCommonPiles" id="RwCommonPiles"></td>            
              <td><input type="text" name="Remark_RwCommonPiles" id="Remark_RwCommonPiles"></td>                    
              <td><input type="file" name="Remark_RwCommonPiles" id="Remark_RwCommonPiles"></td>                    
            </tr>

            <tr>
              <td >Steel reinforcement bar</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwCommonSteelBar" id="RwCommonSteelBar"></td>            
              <td><input type="text" name="Remark_RwCommonSteelBar" id="Remark_RwCommonSteelBar"></td>                    
              <td><input type="file" name="Remark_RwCommonSteelBar" id="Remark_RwCommonSteelBar"></td>                    
            </tr>

            <tr>
              <td >Silicone sealant</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwCommonSilicone" id="RwCommonSilicone"></td>            
              <td><input type="text" name="Remark_RwCommonSilicone" id="Remark_RwCommonSilicone"></td>                    
              <td><input type="file" name="Remark_RwCommonSilicone" id="Remark_RwCommonSilicone"></td>                    
            </tr>

            <tr class="text-center">
              <td rowspan="6" >2</td>
              <td rowspan="6">Slope protection/geotechnical works</td>
              <td >Geotextile</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwSlopeGeotextile" id="RwSlopeGeotextile"></td>            
              <td><input type="text" name="Remark_RwSlopeGeotextile" id="Remark_RwSlopeGeotextile"></td>                    
              <td><input type="file" name="Remark_RwSlopeGeotextile" id="Remark_RwSlopeGeotextile"></td>                    
            </tr>
  
            <tr>
              <td >Geogrid</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwSlopeGeogrid" id="RwSlopeGeogrid"></td>            
              <td><input type="text" name="Remark_RwSlopeGeogrid" id="Remark_RwSlopeGeogrid"></td>                    
              <td><input type="file" name="Remark_RwSlopeGeogrid" id="Remark_RwSlopeGeogrid"></td>                    
            </tr>
  
            <tr>
              
              <td >Prefabricated vertical</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwSlopePrefabricated" id="RwSlopePrefabricated"></td>            
              <td><input type="text" name="Remark_RwSlopePrefabricated" id="Remark_RwSlopePrefabricated"></td>                    
              <td><input type="file" name="Remark_RwSlopePrefabricated" id="Remark_RwSlopePrefabricated"></td>                    
            </tr>
  
            <tr>
              <td >Blanket</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwSlopeBlanket" id="RwSlopeBlanket"></td>            
              <td><input type="text" name="Remark_RwSlopeBlanket" id="Remark_RwSlopeBlanket"></td>                    
              <td><input type="file" name="Remark_RwSlopeBlanket" id="Remark_RwSlopeBlanket"></td>                    
            </tr>

            <tr>
              <td >Sheeting</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="" id=""></td>            
              <td><input type="text" name="" id=""></td>                    
              <td><input type="file" name="" id=""></td>                    
            </tr>

            <tr>
              <td >Fibro mat</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwSlopeFibroMat" id="RwSlopeFibroMat"></td>            
              <td><input type="text" name="Remark_RwSlopeFibroMat" id="Remark_RwSlopeFibroMat"></td>                    
              <td><input type="file" name="Remark_RwSlopeFibroMat" id="Remark_RwSlopeFibroMat"></td>                    
            </tr>

            <tr class="text-center">
              <td rowspan="9" >3</td>
              <td rowspan="9">Drainage works</td>
              <td >Precast reinforced</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwDrainagePrecast" id="RwDrainagePrecast"></td>            
              <td><input type="text" name="Remark_RwDrainagePrecast" id="Remark_RwDrainagePrecast"></td>                    
              <td><input type="file" name="Remark_RwDrainagePrecast" id="Remark_RwDrainagePrecast"></td>                    
            </tr>
  
            <tr>
              <td >Pipes</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwDrainagePipes" id="RwDrainagePipes"></td>            
              <td><input type="text" name="Remark_RwDrainagePipes" id="Remark_RwDrainagePipes"></td>                    
              <td><input type="file" name="Remark_RwDrainagePipes" id="Remark_RwDrainagePipes"></td>                    
            </tr>
  
            <tr>
              
              <td >Drains</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageDrains" id="RwDrainageDrains"></td>            
              <td><input type="text" name="Remark_RwDrainageDrains" id="Remark_RwDrainageDrains"></td>                    
              <td><input type="file" name="Remark_RwDrainageDrains" id="Remark_RwDrainageDrains"></td>                    
            </tr>
  
            <tr>
              <td >Bricks</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageBricks" id="RwDrainageBricks"></td>            
              <td><input type="text" name="Remark_RwDrainageBricks" id="Remark_RwDrainageBricks"></td>                    
              <td><input type="file" name="Remark_RwDrainageBricks" id="Remark_RwDrainageBricks"></td>                    
            </tr>

            <tr>
              <td >Precast subsoil drain</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainagePrecastDrain" id="RwDrainagePrecastDrain"></td>            
              <td><input type="text" name="RwDrainagePrecastDrain" id="RwDrainagePrecastDrain"></td>                    
              <td><input type="file" name="RwDrainagePrecastDrain" id="RwDrainagePrecastDrain"></td>                    
            </tr>

            <tr>
              <td >Bricks</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageBricks" id="RwDrainageBricks"></td>            
              <td><input type="text" name="Remark_RwDrainageBricks" id="Remark_RwDrainageBricks"></td>                    
              <td><input type="file" name="Remark_RwDrainageBricks" id="Remark_RwDrainageBricks"></td>                    
            </tr>

            <tr>
              <td >Gabion cage</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageGabionCage" id="RwDrainageGabionCage"></td>            
              <td><input type="text" name="Remark_RwDrainageGabionCage" id="Remark_RwDrainageGabionCage"></td>                    
              <td><input type="file" name="Remark_RwDrainageGabionCage" id="Remark_RwDrainageGabionCage"></td>                    
            </tr>

            <tr>
              <td >Grating</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageGrating" id="RwDrainageGrating"></td>            
              <td><input type="text" name="RwDrainageGrating" id="RwDrainageGrating"></td>                    
              <td><input type="file" name="RwDrainageGrating" id="RwDrainageGrating"></td>                    
            </tr>

            <tr>
              <td >Water stop</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageWaterStop" id="RwDrainageWaterStop"></td>            
              <td><input type="text" name="Remark_RwDrainageWaterStop" id="Remark_RwDrainageWaterStop"></td>                    
              <td><input type="file" name="Remark_RwDrainageWaterStop" id="Remark_RwDrainageWaterStop"></td>                    
            </tr>

            <tr class="text-center">
              <td rowspan="10" >4</td>
              <td rowspan="10">Pavements</td>
              <td >Prime coat</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwPavementsPrime" id="RwPavementsPrime"></td>            
              <td><input type="text" name="Remark_RwPavementsPrime" id="Remark_RwPavementsPrime"></td>                    
              <td><input type="file" name="Remark_RwPavementsPrime" id="Remark_RwPavementsPrime"></td>                    
            </tr>
  
            <tr>
              <td >Tack coat</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwPavementsTack" id="RwPavementsTack"></td>            
              <td><input type="text" name="Remark_RwPavementsTack" id="Remark_RwPavementsTack"></td>                    
              <td><input type="file" name="Remark_RwPavementsTack" id="Remark_RwPavementsTack"></td>                    
            </tr>
  
            <tr>
              
              <td >Bitumen</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsBitumen" id="RwPavementsBitumen"></td>            
              <td><input type="text" name="Remark_RwPavementsBitumen" id="Remark_RwPavementsBitumen"></td>                    
              <td><input type="file" name="Remark_RwPavementsBitumen" id="Remark_RwPavementsBitumen"></td>                    
            </tr>
  
            <tr>
              <td >Bitumen additives</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsAdditives" id="RwPavementsAdditives"></td>            
              <td><input type="text" name="Remark_RwPavementsAdditives" id="Remark_RwPavementsAdditives"></td>                    
              <td><input type="file" name="Remark_RwPavementsAdditives" id="Remark_RwPavementsAdditives"></td>                    
            </tr>

            <tr>
              <td >Aggregate</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsAggregate" id="RwPavementsAggregate"></td>            
              <td><input type="text" name="RwPavementsAggregate" id="RwPavementsAggregate"></td>                    
              <td><input type="file" name="RwPavementsAggregate" id="RwPavementsAggregate"></td>                    
            </tr>

            <tr>
              <td >Cement</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsCement" id="RwPavementsCement"></td>            
              <td><input type="text" name="Remark_RwPavementsCement" id="Remark_RwPavementsCement"></td>                    
              <td><input type="file" name="Remark_RwPavementsCement" id="Remark_RwPavementsCement"></td>                    
            </tr>

            <tr>
              <td >Reinforcement bar</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsBar" id="RwPavementsBar"></td>            
              <td><input type="text" name="Remark_RwPavementsBar" id="Remark_RwPavementsBar"></td>                    
              <td><input type="file" name="Remark_RwPavementsBar" id="Remark_RwPavementsBar"></td>                    
            </tr>

            <tr>
              <td >Wire mesh</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsWire" id="RwPavementsWire"></td>            
              <td><input type="text" name="RwPavementsWire" id="RwPavementsWire"></td>                    
              <td><input type="file" name="RwPavementsWire" id="RwPavementsWire"></td>                    
            </tr>

            <tr>
              <td >Paving block</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsPaving" id="RwPavementsPaving"></td>            
              <td><input type="text" name="Remark_RwPavementsPaving" id="Remark_RwPavementsPaving"></td>                    
              <td><input type="file" name="Remark_RwPavementsPaving" id="Remark_RwPavementsPaving"></td>                    
            </tr>

            <tr>
              <td >Soil stabiliser</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsSoil" id="RwPavementsSoil"></td>            
              <td><input type="text" name="Remark_RwPavementsSoil" id="Remark_RwPavementsSoil"></td>                    
              <td><input type="file" name="Remark_RwPavementsSoil" id="Remark_RwPavementsSoil"></td>                    
            </tr>


            <tr class="text-center">
              <td rowspan="18" >5</td>
              <td rowspan="18">Road furnitures</td>
              <td >Guardrails</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwRoadGuardrails" id="RwRoadGuardrails"></td>            
              <td><input type="text" name="Remark_RwRoadGuardrails" id="Remark_RwRoadGuardrails"></td>                    
              <td><input type="file" name="Remark_RwRoadGuardrails" id="Remark_RwRoadGuardrails"></td>                    
            </tr>
  
            <tr>
              <td >Railings</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwRoadRailings" id="RwRoadRailings"></td>            
              <td><input type="text" name="Remark_RwRoadRailings" id="Remark_RwRoadRailings"></td>                    
              <td><input type="file" name="Remark_RwRoadRailings" id="Remark_RwRoadRailings"></td>                    
            </tr>
  
            <tr>
              
              <td >Precast concrete</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadPrecast" id="RwRoadPrecast"></td>            
              <td><input type="text" name="Remark_RwRoadPrecast" id="Remark_RwRoadPrecast"></td>                    
              <td><input type="file" name="Remark_RwRoadPrecast" id="Remark_RwRoadPrecast"></td>                    
            </tr>
  
            <tr>
              <td >Wire rope</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadWire" id="RwRoadWire"></td>            
              <td><input type="text" name="Remark_RwRoadWire" id="Remark_RwRoadWire"></td>                    
              <td><input type="file" name="Remark_RwRoadWire" id="Remark_RwRoadWire"></td>                    
            </tr>

            <tr>
              <td >Thermoplastic</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadThermoplastic" id="RwRoadThermoplastic"></td>            
              <td><input type="text" name="RwRoadThermoplastic" id="RwRoadThermoplastic"></td>                    
              <td><input type="file" name="RwRoadThermoplastic" id="RwRoadThermoplastic"></td>                    
            </tr>

            <tr>
              <td >Road paint</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadPaint" id="RwRoadPaint"></td>            
              <td><input type="text" name="Remark_RwRoadPaint" id="Remark_RwRoadPaint"></td>                    
              <td><input type="file" name="Remark_RwRoadPaint" id="Remark_RwRoadPaint"></td>                    
            </tr>

            <tr>
              <td >Anti-glare screen</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadAntiGlare" id="RwRoadAntiGlare"></td>            
              <td><input type="text" name="Remark_RwRoadAntiGlare" id="Remark_RwRoadAntiGlare"></td>                    
              <td><input type="file" name="Remark_RwRoadAntiGlare" id="Remark_RwRoadAntiGlare"></td>                    
            </tr>

            <tr>
              <td >Sound barrier</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadSoundBarrier" id="RwRoadSoundBarrier"></td>            
              <td><input type="text" name="RwRoadSoundBarrier" id="RwRoadSoundBarrier"></td>                    
              <td><input type="file" name="RwRoadSoundBarrier" id="RwRoadSoundBarrier"></td>                    
            </tr>

            <tr>
              <td >Paving block</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadPaving" id="RwRoadPaving"></td>            
              <td><input type="text" name="Remark_RwRoadPaving" id="Remark_RwRoadPaving"></td>                    
              <td><input type="file" name="Remark_RwRoadPaving" id="Remark_RwRoadPaving"></td>                    
            </tr>

            <tr>
              <td >Precast concrete kerb</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="" id=""></td>            
              <td><input type="text" name="Remark_" id="Remark_"></td>                    
              <td><input type="file" name="Remark_" id="Remark_"></td>                    
            </tr>
  
            <tr>
              <td >Road stud</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwRoadStud" id="RwRoadStud"></td>            
              <td><input type="text" name="Remark_RwRoadStud" id="Remark_RwRoadStud"></td>                    
              <td><input type="file" name="Remark_RwRoadStud" id="Remark_RwRoadStud"></td>                    
            </tr>
  
            <tr>
              
              <td >Chevron delineators</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadChevron" id="RwRoadChevron"></td>            
              <td><input type="text" name="Remark_RwRoadChevron" id="Remark_RwRoadChevron"></td>                    
              <td><input type="file" name="Remark_RwRoadChevron" id="Remark_RwRoadChevron"></td>                    
            </tr>
  
            <tr>
              <td >Flexible post</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadPost" id="RwRoadPost"></td>            
              <td><input type="text" name="Remark_RwRoadPost" id="Remark_RwRoadPost"></td>                    
              <td><input type="file" name="Remark_RwRoadPost" id="Remark_RwRoadPost"></td>                    
            </tr>

            <tr>
              <td >Impact attenuator</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadImpact" id="RwRoadImpact"></td>            
              <td><input type="text" name="RwRoadImpact" id="RwRoadImpact"></td>                    
              <td><input type="file" name="RwRoadImpact" id="RwRoadImpact"></td>                    
            </tr>

            <tr>
              <td >Signages</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadSignages" id="RwRoadSignages"></td>            
              <td><input type="text" name="Remark_RwRoadSignages" id="Remark_RwRoadSignages"></td>                    
              <td><input type="file" name="Remark_RwRoadSignages" id="Remark_RwRoadSignages"></td>                    
            </tr>

            <tr>
              <td >Amber light</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadAmber" id="RwRoadAmber"></td>            
              <td><input type="text" name="Remark_RwRoadAmber" id="Remark_RwRoadAmber"></td>                    
              <td><input type="file" name="Remark_RwRoadAmber" id="Remark_RwRoadAmber"></td>                    
            </tr>

            <tr>
              <td >Traffic light</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadTraffic" id="RwRoadTraffic"></td>            
              <td><input type="text" name="RwRoadTraffic" id="RwRoadTraffic"></td>                    
              <td><input type="file" name="RwRoadTraffic" id="RwRoadTraffic"></td>                    
            </tr>

            <tr>
              <td >Street light</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadStreet" id="RwRoadStreet"></td>            
              <td><input type="text" name="Remark_RwRoadStreet" id="Remark_RwRoadStreet"></td>                    
              <td><input type="file" name="Remark_RwRoadStreet" id="Remark_RwRoadStreet"></td>                    
            </tr>
 

            <tr style="display: none">
              <td>markahPRAwRoof<input type="text" name="markahPRAwRoof" id="markahPRAwRoof" /></td>            
            </tr>

            <tr style="display: none">
              <td>markahPRAwRoofConstruction<input type="text" name="Cons_markahPRAwRoof" id="Cons_markahPRAwRoof" /></td>            
            </tr>

            <tr style="display: none">
              <td>markahPRAwRoofAwarded<input type="text" name="Awarded_markahPRAwRoof" id="Awarded_markahPRAwRoof" /></td>            
            </tr>


            
            
          </tbody>
          </form>
        </table>

        <div align="right" class="mt-3">
          <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
          <a href="/penilaian_reka_bentuk_gpss/skor_penilaian_struktur_jalan/create/{{$id}}" type="button" class="btn btn-secondary">Hantar</a>          
        </div>

      </div>

</div>


<script>
  function findTotal(){
  var arr = document.getElementsByClassName('arkitek');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot2
  }
  document.getElementById('markahPRAwRoof').value = tot;
} 
  </script> 

  <script>
  function findTotalConstructed(){
  var arr = document.getElementsByClassName('arkitek_construction');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot2
  }
  document.getElementById('Cons_markahPRAwRoof').value = tot;
} 
  </script> 

<script>
  function findTotalAwarded(){
  var arr = document.getElementsByClassName('arkitek_awarded');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot2
  }
  document.getElementById('Awarded_markahPRAwRoof').value = tot;
} 
  </script>
  
<script>
  function findTotalWall(){
  var arr = document.getElementsByClassName('prawwall');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add PRAwWall2
  }
  document.getElementById('markahPRAwWall').value = tot;
} 
  </script> 

<script>
  function findTotalConstructedWall(){
  var arr = document.getElementsByClassName('prawwall_construction');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add PRAwWall2
  }
  document.getElementById('Cons_markahPRAwWall').value = tot;
} 
  </script>

<script>
  function findTotalAwardedWall(){
  var arr = document.getElementsByClassName('prawwall_awarded');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add PRAwWall2
  }
  document.getElementById('Awarded_markahPRAwWall').value = tot;
} 
  </script>

@endsection
