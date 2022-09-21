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
              <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="AwRoofRoofTilesClayTiles" id="AwRoofRoofTilesClayTiles"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofTilesClayTiles" id="Cons_AwRoofRoofTilesClayTiles">
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofTilesClayTiles" id="Awarded_AwRoofRoofTilesClayTiles">
              <td><input type="text" name="Remark_AwRoofRoofTilesClayTiles" id="Remark_AwRoofRoofTilesClayTiles"></td>                    
            </tr>
  
            <tr>
              <td >Concrete tiles</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="AwRoofRoofTilesConcreteTiles" id="AwRoofRoofTilesConcreteTiles"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofTilesConcreteTiles" id="Cons_AwRoofRoofTilesConcreteTiles">
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofTilesConcreteTiles" id="Awarded_AwRoofRoofTilesConcreteTiles">
              <td><input type="text" name="Remark_AwRoofRoofTilesConcreteTiles" id="Remark_AwRoofRoofTilesConcreteTiles"></td>                    
            </tr>
  
            <tr>
              
              <td >Metal roofing</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofTilesMetalRoofing" id="AwRoofRoofTilesMetalRoofing"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofTilesMetalRoofing" id="Cons_AwRoofRoofTilesMetalRoofing"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofTilesMetalRoofing" id="Awarded_AwRoofRoofTilesMetalRoofing"></td>            
              <td><input type="text" name="Remark_AwRoofRoofTilesMetalRoofing" id="Remark_AwRoofRoofTilesMetalRoofing"></td>                    
            </tr>
  
            <tr>
              <td >Shingles</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofTilesShingles" id="AwRoofRoofTilesShingles"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofTilesShingles" id="Cons_AwRoofRoofTilesShingles"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofTilesShingles" id="Awarded_AwRoofRoofTilesShingles"></td>            
              <td><input type="text" name="Remark_AwRoofRoofTilesShingles" id="Remark_AwRoofRoofTilesShingles"></td>                    
            </tr>
            
            <tr>
              <td rowspan="5">2</td>
              <td rowspan="5">Insulation</td>
              <td >Rockwool</td>
              <td >2</td>
              <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationRockwool" id="AwRoofRoofInsulationRockwool"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationRockwool" id="Cons_AwRoofRoofInsulationRockwool"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationRockwool" id="Awarded_AwRoofRoofInsulationRockwool"></td>             
              <td><input type="text" name="Remark_AwRoofRoofInsulationRockwool" id="Remark_AwRoofRoofInsulationRockwool"></td>                    
            </tr>
  
            <tr>
              <td >Glasswool</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationGlasswool" id="AwRoofRoofInsulationGlasswool"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationGlasswool" id="Cons_AwRoofRoofInsulationGlasswool"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationGlasswool" id="Awarded_AwRoofRoofInsulationGlasswool"></td>             
              <td><input type="text" name="Remark_AwRoofRoofInsulationGlasswool" id="Remark_AwRoofRoofInsulationGlasswool"></td>                    
            </tr>
  
            <tr>
              <td >Foam</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationFoam" id="AwRoofRoofInsulationFoam"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationFoam" id="Cons_AwRoofRoofInsulationFoam"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationFoam" id="Awarded_AwRoofRoofInsulationFoam"></td>             
              <td><input type="text"name="Remark_AwRoofRoofInsulationFoam" id="Remark_AwRoofRoofInsulationFoam"></td>                    
            </tr>
  
            <tr>
              <td >Aluminium Foil</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationAlumFoil" id="AwRoofRoofInsulationAlumFoil"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationAlumFoil" id="Cons_AwRoofRoofInsulationAlumFoil"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationAlumFoil" id="Awarded_AwRoofRoofInsulationAlumFoil"></td>             
              <td><input type="text" name="Remark_AwRoofRoofInsulationAlumFoil" id="Remark_AwRoofRoofInsulationAlumFoil"></td>                    
            </tr>
  
            <tr>
              <td >Undersheeting</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationUndersheeting" id="AwRoofRoofInsulationUndersheeting"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationUndersheeting" id="Cons_AwRoofRoofInsulationUndersheeting"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationUndersheeting" id="Awarded_AwRoofRoofInsulationUndersheeting"></td>             
              <td><input type="text" name="Remark_AwRoofRoofInsulationUndersheeting" id="Remark_AwRoofRoofInsulationUndersheeting"></td>                    
            </tr>
  
            <tr>
              <td rowspan="3">3</td>
              <td rowspan="3">Roof Eaves</td>
              <td >Metal</td>
              <td >2</td>
              <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofEavesMetal" id="AwRoofRoofEavesMetal"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofEavesMetal" id="Cons_AwRoofRoofEavesMetal"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofEavesMetal" id="Awarded_AwRoofRoofEavesMetal"></td>             
              <td><input type="text"name="Remark_AwRoofRoofEavesMetal" id="Remark_AwRoofRoofEavesMetal"></td>                    
            </tr>
  
            <tr>
              <td >Fiber cement</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofEavesFiberCement" id="AwRoofRoofEavesFiberCement"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofEavesFiberCement" id="Cons_AwRoofRoofEavesFiberCement"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofEavesFiberCement" id="Awarded_AwRoofRoofEavesFiberCement"></td>             
              <td><input type="text" name="Remark_AwRoofRoofEavesFiberCement" id="Remark_AwRoofRoofEavesFiberCement"></td>                    
            </tr>
  
            <tr>
              <td >Plasterboard</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofEavesPlasterboard" id="AwRoofRoofEavesPlasterboard"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofEavesPlasterboard" id="Cons_AwRoofRoofEavesPlasterboard"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofEavesPlasterboard" id="Awarded_AwRoofRoofEavesPlasterboard"></td>             
              <td><input type="text" name="Remark_AwRoofRoofEavesPlasterboard" id="Remark_AwRoofRoofEavesPlasterboard"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="4">4</td>
              <td rowspan="4">Fascia boards</td>
              <td >Metal</td>
              <td >2</td>
              <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsMetal" id="AwRoofFascialBoardsMetal"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofFascialBoardsMetal" id="Cons_AwRoofFascialBoardsMetal"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofFascialBoardsMetal" id="Awarded_AwRoofFascialBoardsMetal"></td>             
              <td><input type="text" name="Remark_AwRoofFascialBoardsMetal" id="Remark_AwRoofFascialBoardsMetal"></td> 
  
            </tr>
  
            <tr>
              <td >Fibre cement</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsFiberCement" id="AwRoofFascialBoardsFiberCement"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofFascialBoardsFiberCement" id="Cons_AwRoofFascialBoardsFiberCement"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofFascialBoardsFiberCement" id="Awarded_AwRoofFascialBoardsFiberCement"></td>             
              <td><input type="text" name="Remark_AwRoofFascialBoardsFiberCement" id="Remark_AwRoofFascialBoardsFiberCement"></td>                    
            </tr>
  
            <tr>
              <td >Plasterboard</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsPlasterboard" id="AwRoofFascialBoardsPlasterboard"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofFascialBoardsPlasterboard" id="Cons_AwRoofFascialBoardsPlasterboard"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofFascialBoardsPlasterboard" id="Awarded_AwRoofFascialBoardsPlasterboard"></td>             
              <td><input type="text" name="Remark_AwRoofFascialBoardsPlasterboard" id="Remark_AwRoofFascialBoardsPlasterboard"></td>                    
            </tr>
  
            <tr>
              <td >Timber</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsTimber" id="AwRoofFascialBoardsTimber"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofFascialBoardsTimber" id="Cons_AwRoofFascialBoardsTimber"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofFascialBoardsTimber" id="Awarded_AwRoofFascialBoardsTimber"></td>             
              <td><input type="text" name="Remark_AwRoofFascialBoardsTimber" id="Remark_AwRoofFascialBoardsTimber"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="4">5</td>
              <td rowspan="4">Gutter</td>
              <td >Upvc</td>
              <td >2</td>
              <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterUpvc" id="AwRoofGutterUpvc"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofGutterUpvc" id="Cons_AwRoofGutterUpvc"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofGutterUpvc" id="Awarded_AwRoofGutterUpvc"></td>             
              <td><input type="text" name="Remark_AwRoofGutterUpvc" id="Remark_AwRoofGutterUpvc"></td> 
  
            </tr>
  
            <tr>
              <td >Galvanised iron</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterGallron" id="AwRoofGutterGallron"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofGutterGallron" id="Cons_AwRoofGutterGallron"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofGutterGallron" id="Awarded_AwRoofGutterGallron"></td>             
              <td><input type="text" name="Remark_AwRoofGutterGallron" id="Remark_AwRoofGutterGallron"></td>                    
            </tr>
  
            <tr>
              <td >Aluminium</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterAluminium" id="AwRoofGutterAluminium"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofGutterAluminium" id="Cons_AwRoofGutterAluminium"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofGutterAluminium" id="Awarded_AwRoofGutterAluminium"></td>             
              <td><input type="text" name="Remark_AwRoofGutterAluminium" id="Remark_AwRoofGutterAluminium"></td>                    
            </tr>
  
            <tr>
              <td >Stainless steel</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterStainSteel" id="AwRoofGutterStainSteel"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofGutterStainSteel" id="Cons_AwRoofGutterStainSteel"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofGutterStainSteel" id="Awarded_AwRoofGutterStainSteel"></td>            
              <td><input type="text" name="Remark_AwRoofGutterStainSteel" id="Remark_AwRoofGutterStainSteel"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="4">6</td>
              <td rowspan="4">Rainwater down pipes</td>
              <td >Upvc</td>
              <td >2</td>
              <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesUpvc" id="AwRoofRainPipesUpvc"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRainPipesUpvc" id="Cons_AwRoofRainPipesUpvc"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRainPipesUpvc" id="Awarded_AwRoofRainPipesUpvc"></td>             
              <td><input type="text" name="Remark_AwRoofRainPipesUpvc" id="Remark_AwRoofRainPipesUpvc"></td> 
  
            </tr>
  
            <tr>
              <td >Galvanised iron</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesGallron" id="AwRoofRainPipesGallron"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRainPipesGallron" id="Cons_AwRoofRainPipesGallron"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRainPipesGallron" id="Awarded_AwRoofRainPipesGallron"></td>            
              <td><input type="text" name="Remark_AwRoofRainPipesGallron" id="Remark_AwRoofRainPipesGallron"></td>                    
            </tr>
  
            <tr>
              <td >Aluminium</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesAluminium" id="AwRoofRainPipesAluminium"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRainPipesAluminium" id="Cons_AwRoofRainPipesAluminium"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRainPipesAluminium" id="Awarded_AwRoofRainPipesAluminium"></td>             
              <td><input type="text" name="Remark_AwRoofRainPipesAluminium" id="Remark_AwRoofRainPipesAluminium"></td>                    
            </tr>
  
            <tr>
              <td >Stainless steel</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesStainSteel" id="AwRoofRainPipesStainSteel"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRainPipesStainSteel" id="Cons_AwRoofRainPipesStainSteel"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRainPipesStainSteel" id="Awarded_AwRoofRainPipesStainSteel"></td>             
              <td><input type="text" name="Remark_AwRoofRainPipesStainSteel" id="Remark_AwRoofRainPipesStainSteel"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="3">7</td>
              <td rowspan="3">Gutter</td>
              <td >Plasterboard</td>
              <td >2</td>
              <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofCellingPlasterboards" id="AwRoofCellingPlasterboards"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofCellingPlasterboards" id="Cons_AwRoofCellingPlasterboards"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofCellingPlasterboards" id="Awarded_AwRoofCellingPlasterboards"></td>            
              <td><input type="text" name="Remark_AwRoofCellingPlasterboards" id="Remark_AwRoofCellingPlasterboards"></td> 
  
            </tr>
  
            <tr>
              <td >Fibre cement board</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofCellingFibreCement" id="AwRoofCellingFibreCement"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofCellingFibreCement" id="Cons_AwRoofCellingFibreCement"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofCellingFibreCement" id="Awarded_AwRoofCellingFibreCement"></td>             
              <td><input type="text" name="Remark_AwRoofCellingFibreCement" id="Remark_AwRoofCellingFibreCement"></td>                    
            </tr>
  
            <tr>
              <td >Metal strip</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofCellingMetalStrip" id="AwRoofCellingMetalStrip"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofCellingMetalStrip" id="Cons_AwRoofCellingMetalStrip"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofCellingMetalStrip" id="Awarded_AwRoofCellingMetalStrip"></td>            
              <td><input type="text" name="Remark_AwRoofCellingMetalStrip" id="Remark_AwRoofCellingMetalStrip"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="2">8</td>
              <td rowspan="2">Truss system</td>
              <td >Timber</td>
              <td >2</td>
              <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofTrussTimber" id="AwRoofTrussTimber"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofTrussTimber" id="Cons_AwRoofTrussTimber"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofTrussTimber" id="Awarded_AwRoofTrussTimber"></td>             
              <td><input type="text" name="Remark_AwRoofTrussTimber" id="Remark_AwRoofTrussTimber"></td> 
  
            </tr>
  
            <tr>
              <td >Metal</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofTrussMetal" id="AwRoofTrussMetal"></td>            
              <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofTrussMetal" id="Cons_AwRoofTrussMetal"></td>            
              <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofTrussMetal" id="Awarded_AwRoofTrussMetal"></td>             
              <td><input type="text" name="Remark_AwRoofTrussMetal" id="Remark_AwRoofTrussMetal"></td>                    
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


            {{-- New table for wall system --}}
            <tr class="text-white bg-orange-jkr">
              <th colspan="8">List of products for architectural works - Wall System</th>
            </tr>
  
            <tr>
              
              <td rowspan="10">1</td>
              <td rowspan="10">Wall types</td>
              <td >Bricks</td>
              <td >2</td>
              <td> <input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesBricks" id="AwWallWallTypesBricks"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesBricks" id="Cons_AwWallWallTypesBricks"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesBricks" id="Awarded_AwWallWallTypesBricks"></td>             
              <td><input type="text" name="Remark_AwWallWallTypesBricks" id="Remark_AwWallWallTypesBricks"></td> 
  
            </tr>
  
            <tr>
              <td >Timberwork</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall " name="AwWallWallTypesTimber" id="AwWallWallTypesTimber"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesTimber" id="Cons_AwWallWallTypesTimber"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesTimber" id="Awarded_AwWallWallTypesTimber"></td>            
              <td><input type="text" name="Remark_AwWallWallTypesTimber" id="Remark_AwWallWallTypesTimber"></td>                    
            </tr>
  
            <tr>
              <td >Clay bricks</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesClay" id="AwWallWallTypesClay"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesClay" id="Cons_AwWallWallTypesClay"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesClay" id="Awarded_AwWallWallTypesClay"></td>            
              <td><input type="text" name="Remark_AwWallWallTypesClay" id="Remark_AwWallWallTypesClay"></td>                    
            </tr>
  
            <tr>
              <td >Blockwork</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesBlockwork" id="AwWallWallTypesBlockwork"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesBlockwork" id="Cons_AwWallWallTypesBlockwork"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesBlockwork" id="Awarded_AwWallWallTypesBlockwork"></td>            
              <td><input type="text" name="Remark_AwWallWallTypesBlockwork" id="Remark_AwWallWallTypesBlockwork"></td>                    
            </tr>
  
            <tr>
              <td >Reinforce concrete</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesReinforce" id="AwWallWallTypesReinforce"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesReinforce" id="Cons_AwWallWallTypesReinforce"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesReinforce" id="Awarded_AwWallWallTypesReinforce"></td>            
              <td><input type="text" name="Remark_AwWallWallTypesReinforce" id="Remark_AwWallWallTypesReinforce"></td>                    
            </tr>
  
            <tr>
              <td >Aerated concrete</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesAerated" id="AwWallWallTypesAerated"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesAerated" id="Cons_AwWallWallTypesAerated"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesAerated" id="Awarded_AwWallWallTypesAerated"></td>            
              <td><input type="text" name="Remark_AwWallWallTypesAerated" id="Remark_AwWallWallTypesAerated"></td>                    
            </tr>
  
            <tr>
              <td >Glass</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesGlass" id="AwWallWallTypesGlass"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesGlass" id="Cons_AwWallWallTypesGlass"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesGlass" id="Awarded_AwWallWallTypesGlass"></td>            
              <td><input type="text" name="Remark_AwWallWallTypesGlass" id="Remark_AwWallWallTypesGlass"></td>                    
            </tr>
  
            <tr>
              <td >Gypsum board</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesGypsum" id="AwWallWallTypesGypsum"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesGypsum" id="Cons_AwWallWallTypesGypsum"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesGypsum" id="Awarded_AwWallWallTypesGypsum"></td>            
              <td><input type="text" name="Remark_AwWallWallTypesGypsum" id="Remark_AwWallWallTypesGypsum"></td>                    
            </tr>
  
            <tr>
              <td >Cement board</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesCement" id="AwWallWallTypesCement"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesCement" id="Cons_AwWallWallTypesCement"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesCement" id="Awarded_AwWallWallTypesCement"></td>            
              <td><input type="text" name="Remark_AwWallWallTypesCement" id="Remark_AwWallWallTypesCement"></td>                    
            </tr>
  
            <tr>
              <td >Fibre cement</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesFibreCement" id="AwWallWallTypesFibreCement"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesFibreCement" id="Cons_AwWallWallTypesFibreCement"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesFibreCement" id="Awarded_AwWallWallTypesFibreCement"></td>            
              <td><input type="text" name="Remark_AwWallWallTypesFibreCement" id="Remark_AwWallWallTypesFibreCement"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="12">2</td>
              <td rowspan="12">Finishes</td>
              <td >Paints</td>
              <td >2</td>
              <td> <input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesPaints" id="AwWallFinishesPaints"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesPaints" id="Cons_AwWallFinishesPaints"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesPaints" id="Awarded_AwWallFinishesPaints"></td>            
              <td><input type="text" name="Remark_AwWallFinishesPaints" id="Remark_AwWallFinishesPaints"></td> 
  
            </tr>
  
            <tr>
              <td >Composite panel</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesComposite" id="AwWallFinishesComposite"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesComposite" id="Cons_AwWallFinishesComposite"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesComposite" id="Awarded_AwWallFinishesComposite"></td>            
              <td><input type="text" name="Remark_AwWallFinishesComposite" id="Remark_AwWallFinishesComposite"></td>                    
            </tr>
  
            <tr>
              <td >Wall paper</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesWallpaper" id="AwWallFinishesWallpaper"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesWallpaper" id="Cons_AwWallFinishesWallpaper"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesWallpaper" id="Awarded_AwWallFinishesWallpaper"></td>            
              <td><input type="text" name="Remark_AwWallFinishesWallpaper" id="Remark_AwWallFinishesWallpaper"></td>                    
            </tr>
  
            <tr>
              <td >Ceramic tiles</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesCeramic" id="AwWallFinishesCeramic"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesCeramic" id="Cons_AwWallFinishesCeramic"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesCeramic" id="Awarded_AwWallFinishesCeramic"></td>            
              <td><input type="text" name="Remark_AwWallFinishesCeramic" id="Remark_AwWallFinishesCeramic"></td>                    
            </tr>
  
            <tr>
              <td >Stones</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesStones" id="AwWallFinishesStones"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesStones" id="Cons_AwWallFinishesStones"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesStones" id="Awarded_AwWallFinishesStones"></td>            
              <td><input type="text" name="Remark_AwWallFinishesStones" id="Remark_AwWallFinishesStones"></td>                    
            </tr>
  
            <tr>
              <td >Pebblewash</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesPebblewash" id="AwWallFinishesPebblewash"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesPebblewash" id="Cons_AwWallFinishesPebblewash"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesPebblewash" id="Awarded_AwWallFinishesPebblewash"></td>            
              <td><input type="text" name="Remark_AwWallFinishesPebblewash" id="Remark_AwWallFinishesPebblewash"></td>                    
            </tr>
  
            <tr>
              <td >Granite</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGranite" id="AwWallFinishesGranite"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesGranite" id="Cons_AwWallFinishesGranite"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesGranite" id="Awarded_AwWallFinishesGranite"></td>            
              <td><input type="text" name="Remark_AwWallFinishesGranite" id="Remark_AwWallFinishesGranite"></td>                    
            </tr>
  
            <tr>
              <td >Glass</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGlass" id="AwWallFinishesGlass"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesGlass" id="Cons_AwWallFinishesGlass"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesGlass" id="Awarded_AwWallFinishesGlass"></td>           
              <td><input type="text" name="Remark_AwWallFinishesGlass" id="Remark_AwWallFinishesGlass"></td>                    
            </tr>
  
            <tr>
              <td >Glass block</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGlassBlock" id="AwWallFinishesGlassBlock"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesGlassBlock" id="Cons_AwWallFinishesGlassBlock"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesGlassBlock" id="Awarded_AwWallFinishesGlassBlock"></td>           
              <td><input type="text" name="Remark_AwWallFinishesGlassBlock" id="Remark_AwWallFinishesGlassBlock"></td>                    
            </tr>
  
            <tr>
              <td >Timber panelling</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesTimber" id="AwWallFinishesTimber"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesTimber" id="Cons_AwWallFinishesTimber"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesTimber" id="Awarded_AwWallFinishesTimber"></td>            
              <td><input type="text" name="Remark_AwWallFinishesTimber" id="Remark_AwWallFinishesTimber"></td>                    
            </tr>
  
            <tr>
              <td >Plaster</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesPaster" id="AwWallFinishesPaster"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesPaster" id="Cons_AwWallFinishesPaster"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesPaster" id="Awarded_AwWallFinishesPaster"></td>            
              <td><input type="text" name="Remark_AwWallFinishesPaster" id="Remark_AwWallFinishesPaster"></td>                    
            </tr>
  
            <tr>
              <td >Growall</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGrowall" id="AwWallFinishesGrowall"></td>            
              <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesGrowall" id="Cons_AwWallFinishesGrowall"></td>            
              <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesGrowall" id="Awarded_AwWallFinishesGrowall"></td>             
              <td><input type="text" name="Remark_AwWallFinishesGrowall" id="Remark_AwWallFinishesGrowall"></td>                    
            </tr>

            <tr style="display: none">
              <td>markahPRAwWall <input type="text" name="markahPRAwWall" id="markahPRAwWall" /></td>            
            </tr>

            <tr style="display: none">
              <td>markahPRAwWallConstruction <input type="text" name="Cons_markahPRAwWall" id="Cons_markahPRAwWall" /></td>            
            </tr>

            <tr style="display: none">
              <td>markahPRAwWallAwarded <input type="text" name="Awarded_markahPRAwWall" id="Awarded_markahPRAwWall" /></td>            
            </tr>
            
          </tbody>
          </form>
        </table>

        <div align="right" class="mt-3">
          <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
          <a href="/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page2/create" type="button" class="btn btn-secondary">Seterusnya</a>          
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
