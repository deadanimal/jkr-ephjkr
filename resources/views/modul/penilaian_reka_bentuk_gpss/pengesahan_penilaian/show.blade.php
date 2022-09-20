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
      <div class="col">
        <table class="table table-bordered line-table text-center" style="width: 100%">
          <thead class="text-white bg-orange-jkr">
            <tr>          
              <th colspan="8">Green Product Scoring Sheet</th>
            </tr>
            <tr>
              <th colspan="8">List of products for architectural works - Roof</th>
            </tr>
            <tr>
              <th>No.</th>
              <th >Component</th>
              <th>Product</th>
              <th>Point Allocated</th>
              <th>Point Requested (design)</th>
              <th>Point Requested (construction)</th>
              <th>Point Awarded</th>
              <th >Remark</th>
            </tr>
          </thead>
          <tbody>
            
            <tr class="text-center">
              <td rowspan="4" >1</td>
              <td rowspan="4">Roof tiles</td>
              <td >Clay tiles</td>
              <td >2</td>
              <td> {{$gpss_bangunan->AwRoofRoofTilesClayTiles}} </td>
              <td><input type="number" min="0" max="2"></td>                        
              <td><input type="number" min="0" max="2" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Concrete tiles</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRoofTilesConcreteTiles}} </td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              
              <td >Metal roofing</td>
              <td >2</td>
              <td> {{$gpss_bangunan->AwRoofRoofTilesMetalRoofing}} </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Shingles</td>
              <td >2</td>
              <td> {{$gpss_bangunan->AwRoofRoofTilesShingles}} </td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
            
            <tr>
              <td rowspan="5">2</td>
              <td rowspan="5">Insulation</td>
              <td >Rockwool</td>
              <td >2</td>
              <td> {{$gpss_bangunan->AwRoofRoofInsulationRockwool}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Glasswool</td>
              <td >2</td>
              <td> {{$gpss_bangunan->AwRoofRoofInsulationGlasswool}} </td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Foam</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRoofInsulationFoam}} </td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Aluminium Foil</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRoofInsulationAlumFoil}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Undersheeting</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRoofInsulationUndersheeting}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td rowspan="3">3</td>
              <td rowspan="3">Roof Eaves</td>
              <td >Metal</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRoofEavesMetal}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Fiber cement</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRoofEavesFiberCement}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Plasterboard</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRoofEavesPlasterboard}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="4">4</td>
              <td rowspan="4">Fascia boards</td>
              <td >Metal</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofFascialBoardsMetal}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td> 
  
            </tr>
  
            <tr>
              <td >Fibre cement</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofFascialBoardsFiberCement}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Plasterboard</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofFascialBoardsPlasterboard}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Timber</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofFascialBoardsTimber}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="4">5</td>
              <td rowspan="4">Gutter</td>
              <td >Upvc</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofGutterUpvc}}</td>      
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td> 
  
            </tr>
  
            <tr>
              <td >Galvanised iron</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofGutterGallron}}</td>           
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Aluminium</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofGutterAluminium}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Stainless steel</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofGutterStainSteel}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="4">6</td>
              <td rowspan="4">Rainwater down pipes</td>
              <td >Upvc</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRainPipesUpvc}}</td>           
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td> 
  
            </tr>
  
            <tr>
              <td >Galvanised iron</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRainPipesGallron}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Aluminium</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRainPipesAluminium}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Stainless steel</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRainPipesStainSteel}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="3">7</td>
              <td rowspan="3">Gutter</td>
              <td >Plasterboard</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofCellingPlasterboards}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td> 
  
            </tr>
  
            <tr>
              <td >Fibre cement board</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofCellingFibreCement}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Metal strip</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofCellingMetalStrip}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="2">8</td>
              <td rowspan="2">Truss system</td>
              <td >Timber</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofTrussTimber}}</td>       
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td> 
  
            </tr>
  
            <tr>
              <td >Metal</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofTrussMetal}}</td>     
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>

            {{-- New table for wall system --}}
            <tr class="text-white bg-orange-jkr">
              <th colspan="8">List of products for architectural works - Wall System</th>
            </tr>
            <tr>
              
              <td rowspan="10">1</td>
              <td rowspan="10">Wall types</td>
              <td >Bricks</td>
              <td >2</td>
              <td> {{$gpss_bangunan->AwWallWallTypesBricks}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td> 
  
            </tr>
  
            <tr>
              <td >Timberwork</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesTimber}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Clay bricks</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesClay}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Blockwork</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesBlockwork}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Reinforce concrete</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesReinforce}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Aerated concrete</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesAerated}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Glass</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesGlass}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Gypsum board</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesGypsum}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Cement board</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesCement}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Fibre cement</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesFibreCement}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="12">2</td>
              <td rowspan="12">Finishes</td>
              <td >Paints</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesPaints}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td> 
  
            </tr>
  
            <tr>
              <td >Composite panel</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesComposite}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Wall paper</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesWallpaper}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Ceramic tiles</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesCeramic}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Stones</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesStones}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Pebblewash</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesPebblewash}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Granite</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesGranite}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Glass</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesGlass}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Glass block</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesGlassBlock}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Timber panelling</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesTimber}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Plaster</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesPaster}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Growall</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesGrowall}}</td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>

          </tbody>
        </table>

        <div align="right" class="mt-3">
          <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
          <a href="/penilaian_reka_bentuk_gpss/pengesahan_penilaian/arkitek_page2/{{$gpss_bangunan->id}}" type="button" class="btn btn-secondary">Seterusnya</a> 
         
        </div>

      </div>

</div>

@endsection
