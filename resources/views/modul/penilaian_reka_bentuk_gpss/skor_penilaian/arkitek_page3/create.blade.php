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
              <th>Point Requested (construction)</th>
              <th>Point Awarded</th>
              <th >Remark</th>
            </tr>
          </thead>
          <tbody>
            
            <tr class="text-center">
              <td rowspan="18" >1</td>
              <td rowspan="18">Floor</td>
              <td >Epoxy paint</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorEpoxy" id="AwFloorFloorEpoxy">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Floor hardener</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorFloorHardener" id="AwFloorFloorFloorHardener">
                
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              
              <td >Ceramic tiles</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorCeramic" id="AwFloorFloorCeramic">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Stones</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorStones" id="AwFloorFloorStones">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Granites</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorGranite" id="AwFloorFloorGranite">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Marble</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorMarble" id="AwFloorFloorMarble">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Carpet</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorCarpet" id="AwFloorFloorCarpet">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Carpet underlay</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorUnderlay" id="AwFloorFloorUnderlay">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Vinyl</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorVinyl" id="AwFloorFloorVinyl">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Timber</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorTimber" id="AwFloorFloorTimber">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Interlocking pavers</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorPavers" id="AwFloorFloorPavers">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Pebble wash</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorPebble" id="AwFloorFloorPebble">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Bamboo</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorBamboo" id="AwFloorFloorBamboo">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Cement render</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorCement" id="AwFloorFloorCement">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Marmoleum</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorMarmoleum" id="AwFloorFloorMarmoleum">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Rubber mat(playgrouubd)</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorRubber" id="AwFloorFloorRubber">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Concrete imprint</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorConcrete" id="AwFloorFloorConcrete">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Laminated flooring</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorLaminate" id="AwFloorFloorLaminate">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
            
            <tr>
              <td rowspan="3">2</td>
              <td rowspan="3">Water proofing</td>
              <td >Adhesive</td>
              <td >2</td>
              <td> 
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorProofingAdhesive" id="AwFloorProofingAdhesive">
              </td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Sealant</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorProofingSealant" id="AwFloorProofingSealant">
                
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Grout</td>
              <td >2</td>
              <td>
                <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorProofingGrout" id="AwFloorProofingGrout">
                
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>

            <tr style="display: none">
              <td><input type="text" name="markahPRAwFloor" id="markahPRAwFloor" /></td>
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
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td> 
  
            </tr>
  
            <tr>
              <td >Toilet cubicle</td>
              <td >2</td>
              <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem " name="AwSystemBuiltToilet" id="AwSystemBuiltToilet"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Institutional seating</td>
              <td >2</td>
              <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltInstitutional" id="AwSystemBuiltInstitutional"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Built-in cupboards</td>
              <td >2</td>
              <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltCupboards" id="AwSystemBuiltCupboards"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Sport facilities seating</td>
              <td >2</td>
              <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltSport" id="AwSystemBuiltSport"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>

            <tr style="display: none">
              <td><input type="text" name="markahPRAwSystem" id="markahPRAwSystem" /></td>
            </tr>
  
          </tbody>
        </table>
  
        <div align="right" class="mt-3">
          <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
          <a href="/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page4/create" type="button" class="btn btn-secondary">Seterusnya</a>          
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

@endsection
