@extends('layouts.base')

<link rel="stylesheet" href="/cssfile/pengesahan_penilaian_style.css">

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
              <td>
                <input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="AwRoofRoofTilesClayTiles" id="AwRoofRoofTilesClayTiles">
              </td>            
              <td>
                <input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="clay_tiles" id="clay_tiles">
              <td><input type="number" min="0" max="2" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Concrete tiles</td>
              <td >2</td>
              <td>
                <input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="AwRoofRoofTilesConcreteTiles" id="AwRoofRoofTilesConcreteTiles">
              </td>            
              <td>
                <input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="concrete_tiles" id="concrete_tiles">
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              
              <td >Metal roofing</td>
              <td >2</td>
              <td>
                <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofTilesMetalRoofing" id="AwRoofRoofTilesMetalRoofing">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Shingles</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofTilesShingles" id="AwRoofRoofTilesShingles"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
            
            <tr>
              <td rowspan="5">2</td>
              <td rowspan="5">Insulation</td>
              <td >Rockwool</td>
              <td >2</td>
              <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationRockwool" id="AwRoofRoofInsulationRockwool"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Glasswool</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationGlasswool" id="AwRoofRoofInsulationGlasswool"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Foam</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationFoam" id="AwRoofRoofInsulationFoam"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Aluminium Foil</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationAlumFoil" id="AwRoofRoofInsulationAlumFoil"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Undersheeting</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationUndersheeting" id="AwRoofRoofInsulationUndersheeting"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td rowspan="3">3</td>
              <td rowspan="3">Roof Eaves</td>
              <td >Metal</td>
              <td >2</td>
              <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofEavesMetal" id="AwRoofRoofEavesMetal"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Fiber cement</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofEavesFiberCement" id="AwRoofRoofEavesFiberCement"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Plasterboard</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofEavesPlasterboard" id="AwRoofRoofEavesPlasterboard"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="4">4</td>
              <td rowspan="4">Fascia boards</td>
              <td >Metal</td>
              <td >2</td>
              <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsMetal" id="AwRoofFascialBoardsMetal"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td> 
  
            </tr>
  
            <tr>
              <td >Fibre cement</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsFiberCement" id="AwRoofFascialBoardsFiberCement"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Plasterboard</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsPlasterboard" id="AwRoofFascialBoardsPlasterboard"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Timber</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsTimber" id="AwRoofFascialBoardsTimber"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="4">5</td>
              <td rowspan="4">Gutter</td>
              <td >Upvc</td>
              <td >2</td>
              <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterUpvc" id="AwRoofGutterUpvc"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td> 
  
            </tr>
  
            <tr>
              <td >Galvanised iron</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterGallron" id="AwRoofGutterGallron"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Aluminium</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterAluminium" id="AwRoofGutterAluminium"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Stainless steel</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterStainSteel" id="AwRoofGutterStainSteel"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="4">6</td>
              <td rowspan="4">Rainwater down pipes</td>
              <td >Upvc</td>
              <td >2</td>
              <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesUpvc" id="AwRoofRainPipesUpvc"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td> 
  
            </tr>
  
            <tr>
              <td >Galvanised iron</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesGallron" id="AwRoofRainPipesGallron"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Aluminium</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesAluminium" id="AwRoofRainPipesAluminium"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Stainless steel</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesStainSteel" id="AwRoofRainPipesStainSteel"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="3">7</td>
              <td rowspan="3">Gutter</td>
              <td >Plasterboard</td>
              <td >2</td>
              <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofCellingPlasterboards" id="AwRoofCellingPlasterboards"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td> 
  
            </tr>
  
            <tr>
              <td >Fibre cement board</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofCellingFibreCement" id="AwRoofCellingFibreCement"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Metal strip</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofCellingMetalStrip" id="AwRoofCellingMetalStrip"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="2">8</td>
              <td rowspan="2">Truss system</td>
              <td >Timber</td>
              <td >2</td>
              <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofTrussTimber" id="AwRoofTrussTimber"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td> 
  
            </tr>
  
            <tr>
              <td >Metal</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofTrussMetal" id="AwRoofTrussMetal"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>

            <tr style="display: none">
              <td>markahPRAwRoof<input type="text" name="markahPRAwRoof" id="markahPRAwRoof" /></td>            
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
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td> 
  
            </tr>
  
            <tr>
              <td >Timberwork</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall " name="AwWallWallTypesTimber" id="AwWallWallTypesTimber"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Clay bricks</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesClay" id="AwWallWallTypesClay"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Blockwork</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesBlockwork" id="AwWallWallTypesBlockwork"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Reinforce concrete</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesReinforce" id="AwWallWallTypesReinforce"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Aerated concrete</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesAerated" id="AwWallWallTypesAerated"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Glass</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesGlass" id="AwWallWallTypesGlass"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Gypsum board</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesGypsum" id="AwWallWallTypesGypsum"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Cement board</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesCement" id="AwWallWallTypesCement"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Fibre cement</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesFibreCement" id="AwWallWallTypesFibreCement"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              
              <td rowspan="12">2</td>
              <td rowspan="12">Finishes</td>
              <td >Paints</td>
              <td >2</td>
              <td> <input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesPaints" id="AwWallFinishesPaints"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td> 
  
            </tr>
  
            <tr>
              <td >Composite panel</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesComposite" id="AwWallFinishesComposite"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Wall paper</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesWallpaper" id="AwWallFinishesWallpaper"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Ceramic tiles</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesCeramic" id="AwWallFinishesCeramic"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Stones</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesStones" id="AwWallFinishesStones"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Pebblewash</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesPebblewash" id="AwWallFinishesPebblewash"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Granite</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGranite" id="AwWallFinishesGranite"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Glass</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGlass" id="AwWallFinishesGlass"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Glass block</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGlassBlock" id="AwWallFinishesGlassBlock"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Timber panelling</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesTimber" id="AwWallFinishesTimber"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Plaster</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesPaster" id="AwWallFinishesPaster"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Growall</td>
              <td >2</td>
              <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGrowall" id="AwWallFinishesGrowall"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>

            <tr style="display: none">
              <td>markahPRAwWall <input type="text" name="markahPRAwWall" id="markahPRAwWall" /></td>            
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

@endsection
