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
              <th colspan="8">List of products for road structure works</th>
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
              <td rowspan="6">Road structure (bridge)</td>
              <td >Abutment</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="STwBridgeAbutment" id="STwBridgeAbutment"></td>            
              <td><input type="text" name="Remark_STwBridgeAbutment" id="Remark_STwBridgeAbutment"></td>                    
              <td><input type="file" name="Remark_STwBridgeAbutment" id="Remark_STwBridgeAbutment"></td>                    
            </tr>
  
            <tr>
              <td >Pier</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="STwStructureBridgePier" id="STwStructureBridgePier"></td>            
              <td><input type="text" name="Remark_STwStructureBridgePier" id="Remark_STwStructureBridgePier"></td>                    
              <td><input type="file" name="Remark_STwStructureBridgePier" id="Remark_STwStructureBridgePier"></td>                    
            </tr>
  
            <tr>
              
              <td >Bearing pad</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="STwStructureBridgeBearing" id="STwStructureBridgeBearing"></td>            
              <td><input type="text" name="Remark_STwStructureBridgeBearing" id="Remark_STwStructureBridgeBearing"></td>                    
              <td><input type="file" name="Remark_STwStructureBridgeBearing" id="Remark_STwStructureBridgeBearing"></td>                    
            </tr>
  
            <tr>
              <td >Decking</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="STwStructureBridgeDecking" id="STwStructureBridgeDecking"></td>            
              <td><input type="text" name="Remark_STwStructureBridgeDecking" id="Remark_STwStructureBridgeDecking"></td>                    
              <td><input type="file" name="Remark_STwStructureBridgeDecking" id="Remark_STwStructureBridgeDecking"></td>                    
            </tr>

            <tr>
              <td >Expansion joint</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="STwStructureBridgeExpansion" id="STwStructureBridgeExpansion"></td>            
              <td><input type="text" name="Remark_STwStructureBridgeExpansion" id="Remark_STwStructureBridgeExpansion"></td>                    
              <td><input type="file" name="Remark_STwStructureBridgeExpansion" id="Remark_STwStructureBridgeExpansion"></td>                    
            </tr>

            <tr>
              <td >Parapet wall</td>
              <td >2</td>
              <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="STwStructureBridgeParapet" id="STwStructureBridgeParapet"></td>            
              <td><input type="text" name="Remark_STwStructureBridgeParapet" id="Remark_STwStructureBridgeParapet"></td>                    
              <td><input type="file" name="Remark_STwStructureBridgeParapet" id="Remark_STwStructureBridgeParapet"></td>                    
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
          <a href="/penilaian_reka_bentuk_gpss/skor_penilaian" type="button" class="btn btn-secondary">Seterusnya</a>          
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
