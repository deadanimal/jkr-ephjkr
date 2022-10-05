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
              {{-- <th>Point Requested (construction)</th>
              <th>Point Awarded</th> --}}
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
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofRoofTilesClayTiles}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofRoofTilesClayTiles}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofRoofTilesClayTiles}} </td>
              {{-- <td><input type="number" min="0" max="2"></td>                        
              <td><input type="number" min="0" max="2" min="0" max="2"></td>            
              <td><input type="text"></td>                     --}}
            </tr>
  
            <tr>
              <td >Concrete tiles</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRoofTilesConcreteTiles}} </td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofRoofTilesConcreteTiles}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofRoofTilesConcreteTiles}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofRoofTilesConcreteTiles}} </td>
            </tr>
  
            <tr>
              
              <td >Metal roofing</td>
              <td >2</td>
              <td> {{$gpss_bangunan->AwRoofRoofTilesMetalRoofing}} </td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofRoofTilesMetalRoofing}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofRoofTilesMetalRoofing}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofRoofTilesMetalRoofing}} </td>                   
            </tr>
  
            <tr>
              <td >Shingles</td>
              <td >2</td>
              <td> {{$gpss_bangunan->AwRoofRoofTilesShingles}} </td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofRoofTilesShingles}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofRoofTilesShingles}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofRoofTilesShingles}} </td>                   
            </tr>
            
            <tr>
              <td rowspan="5">2</td>
              <td rowspan="5">Insulation</td>
              <td >Rockwool</td>
              <td >2</td>
              <td> {{$gpss_bangunan->AwRoofRoofInsulationRockwool}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofRoofInsulationRockwool}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofRoofInsulationRockwool}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofRoofInsulationRockwool}} </td>                    
            </tr>
  
            <tr>
              <td >Glasswool</td>
              <td >2</td>
              <td> {{$gpss_bangunan->AwRoofRoofInsulationGlasswool}} </td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofRoofInsulationGlasswool}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofRoofInsulationGlasswool}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofRoofInsulationGlasswool}} </td>                   
            </tr>
  
            <tr>
              <td >Foam</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRoofInsulationFoam}} </td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofRoofInsulationFoam}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofRoofInsulationFoam}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofRoofInsulationFoam}} </td>                    
            </tr>
  
            <tr>
              <td >Aluminium Foil</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRoofInsulationAlumFoil}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofRoofInsulationAlumFoil}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofRoofInsulationAlumFoil}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofRoofInsulationAlumFoil}} </td>                   
            </tr>
  
            <tr>
              <td >Undersheeting</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRoofInsulationUndersheeting}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofRoofInsulationUndersheeting}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofRoofInsulationUndersheeting}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofRoofInsulationUndersheeting}} </td>                   
            </tr>
  
            <tr>
              <td rowspan="3">3</td>
              <td rowspan="3">Roof Eaves</td>
              <td >Metal</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRoofEavesMetal}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofRoofEavesMetal}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofRoofEavesMetal}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofRoofEavesMetal}} </td>                   
            </tr>
  
            <tr>
              <td >Fiber cement</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRoofEavesFiberCement}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofRoofEavesFiberCement}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofRoofEavesFiberCement}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofRoofEavesFiberCement}} </td>                   
            </tr>
  
            <tr>
              <td >Plasterboard</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRoofEavesPlasterboard}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofRoofEavesPlasterboard}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofRoofEavesPlasterboard}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofRoofEavesPlasterboard}} </td>                   
            </tr>
  
            <tr>
              
              <td rowspan="4">4</td>
              <td rowspan="4">Fascia boards</td>
              <td >Metal</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofFascialBoardsMetal}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofFascialBoardsMetal}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofFascialBoardsMetal}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofFascialBoardsMetal}} </td> 
  
            </tr>
  
            <tr>
              <td >Fibre cement</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofFascialBoardsFiberCement}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofFascialBoardsFiberCement}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofFascialBoardsFiberCement}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofFascialBoardsFiberCement}} </td>                   
            </tr>
  
            <tr>
              <td >Plasterboard</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofFascialBoardsPlasterboard}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofFascialBoardsPlasterboard}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofFascialBoardsPlasterboard}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofFascialBoardsPlasterboard}} </td>                    
            </tr>
  
            <tr>
              <td >Timber</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofFascialBoardsTimber}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofFascialBoardsTimber}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofFascialBoardsTimber}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofFascialBoardsTimber}} </td>                    
            </tr>
  
            <tr>
              
              <td rowspan="4">5</td>
              <td rowspan="4">Gutter</td>
              <td >Upvc</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofGutterUpvc}}</td>      
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofGutterUpvc}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofGutterUpvc}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofGutterUpvc}} </td>
  
            </tr>
  
            <tr>
              <td >Galvanised iron</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofGutterGallron}}</td>           
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofGutterGallron}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofGutterGallron}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofGutterGallron}} </td>                   
            </tr>
  
            <tr>
              <td >Aluminium</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofGutterAluminium}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofGutterAluminium}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofGutterAluminium}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofGutterAluminium}} </td>                    
            </tr>
  
            <tr>
              <td >Stainless steel</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofGutterStainSteel}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofGutterStainSteel}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofGutterStainSteel}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofGutterStainSteel}} </td>                    
            </tr>
  
            <tr>
              
              <td rowspan="4">6</td>
              <td rowspan="4">Rainwater down pipes</td>
              <td >Upvc</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRainPipesUpvc}}</td>           
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofRainPipesUpvc}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofRainPipesUpvc}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofRainPipesUpvc}} </td>
  
            </tr>
  
            <tr>
              <td >Galvanised iron</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRainPipesGallron}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofRainPipesGallron}} </td>
              <td> {{$gpss_bangunan->Awarded_AwRoofRainPipesGallron}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofRainPipesGallron}} </td>                    
            </tr>
  
            <tr>
              <td >Aluminium</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRainPipesAluminium}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofRainPipesAluminium}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwRoofRainPipesAluminium}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofRainPipesAluminium}} </td>                   
            </tr>
  
            <tr>
              <td >Stainless steel</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofRainPipesStainSteel}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofRainPipesStainSteel}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwRoofRainPipesStainSteel}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofRainPipesStainSteel}} </td>                   
            </tr>
  
            <tr>
              
              <td rowspan="3">7</td>
              <td rowspan="3">Gutter</td>
              <td >Plasterboard</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofCellingPlasterboards}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofCellingPlasterboards}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwRoofCellingPlasterboards}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofCellingPlasterboards}} </td> 
  
            </tr>
  
            <tr>
              <td >Fibre cement board</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofCellingFibreCement}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofCellingFibreCement}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwRoofCellingFibreCement}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofCellingFibreCement}} </td>                   
            </tr>
  
            <tr>
              <td >Metal strip</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofCellingMetalStrip}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofCellingMetalStrip}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwRoofCellingMetalStrip}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofCellingMetalStrip}} </td>                    
            </tr>
  
            <tr>
              
              <td rowspan="2">8</td>
              <td rowspan="2">Truss system</td>
              <td >Timber</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofTrussTimber}}</td>       
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofTrussTimber}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwRoofTrussTimber}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofTrussTimber}} </td> 
  
            </tr>
  
            <tr>
              <td >Metal</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwRoofTrussMetal}}</td>     
              {{-- <td> {{$gpss_bangunan->Cons_AwRoofTrussMetal}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwRoofTrussMetal}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwRoofTrussMetal}} </td>                    
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
              {{-- <td> {{$gpss_bangunan->Cons_AwWallWallTypesBricks}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallWallTypesBricks}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallWallTypesBricks}} </td>
  
            </tr>
  
            <tr>
              <td >Timberwork</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesTimber}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallWallTypesTimber}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallWallTypesTimber}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallWallTypesTimber}} </td>                   
            </tr>
  
            <tr>
              <td >Clay bricks</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesClay}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallWallTypesClay}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallWallTypesClay}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallWallTypesClay}} </td>                     
            </tr>
  
            <tr>
              <td >Blockwork</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesBlockwork}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallWallTypesBlockwork}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallWallTypesBlockwork}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallWallTypesBlockwork}} </td>                    
            </tr>
  
            <tr>
              <td >Reinforce concrete</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesReinforce}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallWallTypesReinforce}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallWallTypesReinforce}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallWallTypesReinforce}} </td>                    
            </tr>
  
            <tr>
              <td >Aerated concrete</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesAerated}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallWallTypesAerated}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallWallTypesAerated}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallWallTypesAerated}} </td>                   
            </tr>
  
            <tr>
              <td >Glass</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesGlass}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallWallTypesGlass}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallWallTypesGlass}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallWallTypesGlass}} </td>                    
            </tr>
  
            <tr>
              <td >Gypsum board</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesGypsum}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallWallTypesGypsum}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallWallTypesGypsum}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallWallTypesGypsum}} </td>                   
            </tr>
  
            <tr>
              <td >Cement board</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesCement}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallWallTypesCement}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallWallTypesCement}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallWallTypesCement}} </td>                   
            </tr>
  
            <tr>
              <td >Fibre cement</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallWallTypesFibreCement}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallWallTypesFibreCement}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallWallTypesFibreCement}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallWallTypesFibreCement}} </td>                   
            </tr>
  
            <tr>
              
              <td rowspan="12">2</td>
              <td rowspan="12">Finishes</td>
              <td >Paints</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesPaints}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallFinishesPaints}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallFinishesPaints}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallFinishesPaints}} </td>
  
            </tr>
  
            <tr>
              <td >Composite panel</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesComposite}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallFinishesComposite}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallFinishesComposite}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallFinishesComposite}} </td>                  
            </tr>
  
            <tr>
              <td >Wall paper</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesWallpaper}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallFinishesWallpaper}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallFinishesWallpaper}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallFinishesWallpaper}} </td>                   
            </tr>
  
            <tr>
              <td >Ceramic tiles</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesCeramic}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallFinishesCeramic}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallFinishesCeramic}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallFinishesCeramic}} </td>                    
            </tr>
  
            <tr>
              <td >Stones</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesStones}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallFinishesStones}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallFinishesStones}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallFinishesStones}} </td>                   
            </tr>
  
            <tr>
              <td >Pebblewash</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesPebblewash}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallFinishesPebblewash}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallFinishesPebblewash}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallFinishesPebblewash}} </td>                    
            </tr>
  
            <tr>
              <td >Granite</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesGranite}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallFinishesGranite}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallFinishesGranite}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallFinishesGranite}} </td>                   
            </tr>
  
            <tr>
              <td >Glass</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesGlass}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallFinishesGlass}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallFinishesGlass}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallFinishesGlass}} </td>                   
            </tr>
  
            <tr>
              <td >Glass block</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesGlassBlock}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallFinishesGlassBlock}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallFinishesGlassBlock}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallFinishesGlassBlock}} </td>                    
            </tr>
  
            <tr>
              <td >Timber panelling</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesTimber}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallFinishesTimber}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallFinishesTimber}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallFinishesTimber}} </td>                    
            </tr>
  
            <tr>
              <td >Plaster</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesPaster}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallFinishesPaster}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallFinishesPaster}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallFinishesPaster}} </td>                   
            </tr>
  
            <tr>
              <td >Growall</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwWallFinishesGrowall}}</td>            
              {{-- <td> {{$gpss_bangunan->Cons_AwWallFinishesGrowall}} </td> --}}
              {{-- <td> {{$gpss_bangunan->Awarded_AwWallFinishesGrowall}} </td> --}}
              <td> {{$gpss_bangunan->Remark_AwWallFinishesGrowall}} </td>                   
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
