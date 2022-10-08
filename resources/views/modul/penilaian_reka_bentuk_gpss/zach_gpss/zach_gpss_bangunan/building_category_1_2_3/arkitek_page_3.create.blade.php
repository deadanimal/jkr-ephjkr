@extends('layouts.base')

<link rel="stylesheet" href="/cssfile/pengesahan_penilaian_style.css">

<style>
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button
  {
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

<div class="row mb-3">
  <div class="col">
      <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                  Architectural Works (Aw)
              </li>
          </ol>
      </nav>
  </div>
</div>

<div class="row3 mx-1 table-responsive scrollbar text-center">
  <form action= "/penilaian_reka_bentuk_gpss/simpan_skor_penilaian_arkitek_page3/{id}" method="post" enctype="multipart/form-data">
    @method('POST')
      @csrf

      <div class="col">
        <table class="table table-bordered line-table text-center" style="width: 100%">
          <thead class="text-white bg-orange-jkr">
            
            <tr>
              <th colspan="8">List of products for architectural works - Floor</th>
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
              <th>Supporting Documents</th>
            </tr>
          </thead>
          <tbody>
            
            <tr class="text-center">
              <td rowspan="18" >1</td>
              <td rowspan="18">Floor</td>
              <td >Epoxy paint</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorEpoxy" id="AwFloorFloorEpoxy"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorEpoxy" id="Cons_AwFloorFloorEpoxy"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorEpoxy" id="Awarded_AwFloorFloorEpoxy"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorEpoxy" id="Remark_AwFloorFloorEpoxy"></td>                    
              <td><input type="file" name="Remark_AwFloorFloorEpoxy" id="Remark_AwFloorFloorEpoxy"></td>                    
            </tr>
  
            <tr>
              <td >Floor hardener</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorFloorHardener" id="AwFloorFloorFloorHardener"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorFloorHardener" id="Cons_AwFloorFloorFloorHardener"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorFloorHardener" id="Awarded_AwFloorFloorFloorHardener"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorFloorHardener" id="Remark_AwFloorFloorFloorHardener"></td>                   
              <td><input type="file" name="Remark_AwFloorFloorFloorHardener" id="Remark_AwFloorFloorFloorHardener"></td>                   
            </tr>
  
            <tr>
              
              <td >Ceramic tiles</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorCeramic" id="AwFloorFloorCeramic"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorCeramic" id="Cons_AwFloorFloorCeramic"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorCeramic" id="Awarded_AwFloorFloorCeramic"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorCeramic" id="Remark_AwFloorFloorCeramic"></td>                   
              <td><input type="file" name="Remark_AwFloorFloorCeramic" id="Remark_AwFloorFloorCeramic"></td>                   
            </tr>
  
            <tr>
              <td >Stones</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorStones" id="AwFloorFloorStones"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorStones" id="Cons_AwFloorFloorStones"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorStones" id="Awarded_AwFloorFloorStones"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorStones" id="Remark_AwFloorFloorStones"></td>                    
              <td><input type="file" name="Remark_AwFloorFloorStones" id="Remark_AwFloorFloorStones"></td>                    
            </tr>
  
            <tr>
              <td >Granites</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorGranite" id="AwFloorFloorGranite"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorGranite" id="Cons_AwFloorFloorGranite"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorGranite" id="Awarded_AwFloorFloorGranite"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorGranite" id="Remark_AwFloorFloorGranite"></td>                    
              <td><input type="file" name="Remark_AwFloorFloorGranite" id="Remark_AwFloorFloorGranite"></td>                    
            </tr>
  
            <tr>
              <td >Marble</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorMarble" id="AwFloorFloorMarble"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorMarble" id="Cons_AwFloorFloorMarble"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorMarble" id="Awarded_AwFloorFloorMarble"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorMarble" id="Remark_AwFloorFloorMarble"></td>                   
              <td><input type="file" name="Remark_AwFloorFloorMarble" id="Remark_AwFloorFloorMarble"></td>                   
            </tr>
  
            <tr>
              <td >Carpet</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorCarpet" id="AwFloorFloorCarpet"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorCarpet" id="Cons_AwFloorFloorCarpet"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorCarpet" id="Awarded_AwFloorFloorCarpet"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorCarpet" id="Remark_AwFloorFloorCarpet"></td>                   
              <td><input type="file" name="Remark_AwFloorFloorCarpet" id="Remark_AwFloorFloorCarpet"></td>                   
            </tr>
  
            <tr>
              <td >Carpet underlay</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorUnderlay" id="AwFloorFloorUnderlay"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorUnderlay" id="Cons_AwFloorFloorUnderlay"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorUnderlay" id="Awarded_AwFloorFloorUnderlay"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorUnderlay" id="Remark_AwFloorFloorUnderlay"></td>                    
              <td><input type="file" name="Remark_AwFloorFloorUnderlay" id="Remark_AwFloorFloorUnderlay"></td>                    
            </tr>
  
            <tr>
              <td >Vinyl</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorVinyl" id="AwFloorFloorVinyl"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorVinyl" id="Cons_AwFloorFloorVinyl"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorVinyl" id="Awarded_AwFloorFloorVinyl"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorVinyl" id="Remark_AwFloorFloorVinyl"></td>                   
              <td><input type="file" name="Remark_AwFloorFloorVinyl" id="Remark_AwFloorFloorVinyl"></td>                   
            </tr>
  
            <tr>
              <td >Timber</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorTimber" id="AwFloorFloorTimber"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorTimber" id="Cons_AwFloorFloorTimber"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorTimber" id="Awarded_AwFloorFloorTimber"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorTimber" id="Remark_AwFloorFloorTimber"></td>                   
              <td><input type="file" name="Remark_AwFloorFloorTimber" id="Remark_AwFloorFloorTimber"></td>                   
            </tr>
  
            <tr>
              <td >Interlocking pavers</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorPavers" id="AwFloorFloorPavers"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorPavers" id="Cons_AwFloorFloorPavers"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorPavers" id="Awarded_AwFloorFloorPavers"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorPavers" id="Remark_AwFloorFloorPavers"></td>                    
              <td><input type="file" name="Remark_AwFloorFloorPavers" id="Remark_AwFloorFloorPavers"></td>                    
            </tr>
  
            <tr>
              <td >Pebble wash</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorPebble" id="AwFloorFloorPebble"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorPebble" id="Cons_AwFloorFloorPebble"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorPebble" id="Awarded_AwFloorFloorPebble"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorPebble" id="Remark_AwFloorFloorPebble"></td>                   
              <td><input type="file" name="Remark_AwFloorFloorPebble" id="Remark_AwFloorFloorPebble"></td>                   
            </tr>
  
            <tr>
              <td >Bamboo</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorBamboo" id="AwFloorFloorBamboo"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorBamboo" id="Cons_AwFloorFloorBamboo"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorBamboo" id="Awarded_AwFloorFloorBamboo"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorBamboo" id="Remark_AwFloorFloorBamboo"></td>                  
              <td><input type="file" name="Remark_AwFloorFloorBamboo" id="Remark_AwFloorFloorBamboo"></td>                  
            </tr>
  
            <tr>
              <td >Cement render</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorCement" id="AwFloorFloorCement"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorCement" id="Cons_AwFloorFloorCement"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorCement" id="Awarded_AwFloorFloorCement"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorCement" id="Remark_AwFloorFloorCement"></td>                    
              <td><input type="file" name="Remark_AwFloorFloorCement" id="Remark_AwFloorFloorCement"></td>                    
            </tr>
  
            <tr>
              <td >Marmoleum</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorMarmoleum" id="AwFloorFloorMarmoleum"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorMarmoleum" id="Cons_AwFloorFloorMarmoleum"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorMarmoleum" id="Awarded_AwFloorFloorMarmoleum"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorMarmoleum" id="Remark_AwFloorFloorMarmoleum"></td>                    
              <td><input type="file" name="Remark_AwFloorFloorMarmoleum" id="Remark_AwFloorFloorMarmoleum"></td>                    
            </tr>
  
            <tr>
              <td >Rubber mat(playgrouubd)</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorRubber" id="AwFloorFloorRubber"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorRubber" id="Cons_AwFloorFloorRubber"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorRubber" id="Awarded_AwFloorFloorRubber"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorRubber" id="Remark_AwFloorFloorRubber"></td>                    
              <td><input type="file" name="Remark_AwFloorFloorRubber" id="Remark_AwFloorFloorRubber"></td>                    
            </tr>
  
            <tr>
              <td >Concrete imprint</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorConcrete" id="AwFloorFloorConcrete"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorConcrete" id="Cons_AwFloorFloorConcrete"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorConcrete" id="Awarded_AwFloorFloorConcrete"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorConcrete" id="Remark_AwFloorFloorConcrete"></td>                   
              <td><input type="file" name="Remark_AwFloorFloorConcrete" id="Remark_AwFloorFloorConcrete"></td>                   
            </tr>
  
            <tr>
              <td >Laminated flooring</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorLaminate" id="AwFloorFloorLaminate"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorLaminate" id="Cons_AwFloorFloorLaminate"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorLaminate" id="Awarded_AwFloorFloorLaminate"></td>             --}}
              <td><input type="text" name="Remark_AwFloorFloorLaminate" id="Remark_AwFloorFloorLaminate"></td>                   
              <td><input type="file" name="Remark_AwFloorFloorLaminate" id="Remark_AwFloorFloorLaminate"></td>                   
            </tr>
            
            <tr>
              <td rowspan="3">2</td>
              <td rowspan="3">Water proofing</td>
              <td >Adhesive</td>
              <td >2</td>
              <td> <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorProofingAdhesive" id="AwFloorProofingAdhesive"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorProofingAdhesive" id="Cons_AwFloorProofingAdhesive"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorProofingAdhesive" id="Awarded_AwFloorProofingAdhesive"></td>             --}}
              <td><input type="text" name="Remark_AwFloorProofingAdhesive" id="Remark_AwFloorProofingAdhesive"></td>                    
              <td><input type="file" name="Remark_AwFloorProofingAdhesive" id="Remark_AwFloorProofingAdhesive"></td>                    
            </tr>
  
            <tr>
              <td >Sealant</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorProofingSealant" id="AwFloorProofingSealant"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorProofingSealant" id="Cons_AwFloorProofingSealant"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorProofingSealant" id="Awarded_AwFloorProofingSealant"></td>             --}}
              <td><input type="text" name="Remark_AwFloorProofingSealant" id="Remark_AwFloorProofingSealant"></td>                  
              <td><input type="file" name="Remark_AwFloorProofingSealant" id="Remark_AwFloorProofingSealant"></td>                  
            </tr>
  
            <tr>
              <td >Grout</td>
              <td >2</td>
              <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorProofingGrout" id="AwFloorProofingGrout"></td>            
              {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorProofingGrout" id="Cons_AwFloorProofingGrout"></td>             --}}
              {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorProofingGrout" id="Awarded_AwFloorProofingGrout"></td>             --}}
              <td><input type="text" name="Remark_AwFloorProofingGrout" id="Remark_AwFloorProofingGrout"></td>                    
              <td><input type="file" name="Remark_AwFloorProofingGrout" id="Remark_AwFloorProofingGrout"></td>                    
            </tr>

            <tr style="display: none">
              <td>markahPRAwFloor<input type="text" name="markahPRAwFloor" id="markahPRAwFloor" /></td>
            </tr>

            <tr style="display: none">
              <td> Cons_markahPRAwFloor <input type="text" name="Cons_markahPRAwFloor" id="Cons_markahPRAwFloor" /></td>
            </tr>

            <tr style="display: none">
              <td> Awarded_markahPRAwFloor <input type="text" name="Awarded_markahPRAwFloor" id="Awarded_markahPRAwFloor" /></td>
            </tr>
  
            {{-- New table for wall system --}}
            <tr class="text-white bg-orange-jkr">
              <th colspan="8">List of products for architectural works - System Furniture</th>
            </tr>
  
            <tr>
              
              <td rowspan="5">1</td>
              <td rowspan="5">Built in furniture (system furniture)</td>
              <td >Office workstation</td>
              <td >2</td>
              <td> <input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltOffice" id="AwSystemBuiltOffice"></td>            
              {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltOffice" id="Cons_AwSystemBuiltOffice"></td>             --}}
              {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltOffice" id="Awarded_AwSystemBuiltOffice"></td>             --}}
              <td><input type="text" name="Remark_AwSystemBuiltOffice" id="Remark_AwSystemBuiltOffice"></td> 
              <td><input type="file" name="Remark_AwSystemBuiltOffice" id="Remark_AwSystemBuiltOffice"></td> 
  
            </tr>
  
            <tr>
              <td >Toilet cubicle</td>
              <td >2</td>
              <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem " name="AwSystemBuiltToilet" id="AwSystemBuiltToilet"></td>            
              {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltToilet" id="Cons_AwSystemBuiltToilet"></td>             --}}
              {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltToilet" id="Awarded_AwSystemBuiltToilet"></td>             --}}
              <td><input type="text" name="Remark_AwSystemBuiltToilet" id="Remark_AwSystemBuiltToilet"></td>                   
              <td><input type="file" name="Remark_AwSystemBuiltToilet" id="Remark_AwSystemBuiltToilet"></td>                   
            </tr>
  
            <tr>
              <td >Institutional seating</td>
              <td >2</td>
              <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltInstitutional" id="AwSystemBuiltInstitutional"></td>            
              {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltInstitutional" id="Cons_AwSystemBuiltInstitutional"></td>             --}}
              {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltInstitutional" id="Awarded_AwSystemBuiltInstitutional"></td>             --}}
              <td><input type="text" name="Remark_AwSystemBuiltInstitutional" id="Remark_AwSystemBuiltInstitutional"></td>                   
              <td><input type="file" name="Remark_AwSystemBuiltInstitutional" id="Remark_AwSystemBuiltInstitutional"></td>                   
            </tr>
  
            <tr>
              <td >Built-in cupboards</td>
              <td >2</td>
              <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltCupboards" id="AwSystemBuiltCupboards"></td>            
              {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltCupboards" id="Cons_AwSystemBuiltCupboards"></td>             --}}
              {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltCupboards" id="Awarded_AwSystemBuiltCupboards"></td>             --}}
              <td><input type="text" name="Remark_AwSystemBuiltCupboards" id="Remark_AwSystemBuiltCupboards"></td>                    
              <td><input type="file" name="Remark_AwSystemBuiltCupboards" id="Remark_AwSystemBuiltCupboards"></td>                    
            </tr>
  
            <tr>
              <td >Sport facilities seating</td>
              <td >2</td>
              <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltSport" id="AwSystemBuiltSport"></td>            
              {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltSport" id="Cons_AwSystemBuiltSport"></td>             --}}
              {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltSport" id="Awarded_AwSystemBuiltSport"></td>             --}}
              <td><input type="text" name="Remark_AwSystemBuiltSport" id="Remark_AwSystemBuiltSport"></td>                    
              <td><input type="file" name="Remark_AwSystemBuiltSport" id="Remark_AwSystemBuiltSport"></td>                    
            </tr>

            <tr style="display: none">
              <td>markahPRAwSystem<input type="text" name="markahPRAwSystem" id="markahPRAwSystem" /></td>
            </tr>

            <tr style="display: none">
              <td>Cons_markahPRAwSystem<input type="text" name="Cons_markahPRAwSystem" id="Cons_markahPRAwSystem" /></td>
            </tr>

            <tr style="display: none">
              <td>Awarded_markahPRAwSystem<input type="text" name="Awarded_markahPRAwSystem" id="Awarded_markahPRAwSystem" /></td>
            </tr>
  
          </tbody>
        </table>
  
        <div align="right" class="mt-3">
          <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
          <a href="/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page4/create/{{$id}}" type="button" class="btn btn-secondary">Seterusnya</a>          
        </div>
  
       
      </div>
  
  
  </form>
    
  </div>



<script>
  function findTotalFloor(){
  var arr = document.getElementsByClassName('floor');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('markahPRAwFloor').value = tot;
} 
</script>  

<script>
  function findTotalFloorConstruction(){
  var arr = document.getElementsByClassName('floor_construction');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('Cons_markahPRAwFloor').value = tot;
} 
</script> 

<script>
  function findTotalFloorAwarded(){
  var arr = document.getElementsByClassName('floor_awarded');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('Awarded_markahPRAwFloor').value = tot;
} 
</script>

<script>
  function findTotalSystem(){
  var arr = document.getElementsByClassName('prawsystem');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('markahPRAwSystem').value = tot;
} 
</script>

<script>
  function findTotalSystemConstruction(){
  var arr = document.getElementsByClassName('prawsystem_construction');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('Cons_markahPRAwSystem').value = tot;
} 
</script>

<script>
  function findTotalSystemAwarded(){
  var arr = document.getElementsByClassName('prawsystem_awarded');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('Awarded_markahPRAwSystem').value = tot;
} 
</script>

@endsection
