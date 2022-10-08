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

<div class="row3 mx-1 text-center">
  <form action= "/penilaian_reka_bentuk_gpss/simpan_skor_penilaian_arkitek_page4/{{ $id }}" method="post" enctype="multipart/form-data">
    @method('POST')
      @csrf
      <div class="col">
        <table class="table table-bordered line-table text-center" style="width: 100%">
          <thead class="text-white bg-orange-jkr">
            
            <tr>
              <th colspan="8">List of products for architectural works - Sanitary</th>
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
              <th>Supporting Documents</th>
            </tr>
          </thead>
          <tbody>
            
            <tr class="text-center">
              <td rowspan="9" >1</td>
              <td rowspan="9">Sanitary Features</td>
              <td >Tap fitting</td>
              <td >2</td>
              <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryTapFitting" id="AwSanitaryTapFitting"></td>            
              {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryTapFitting" id="Cons_AwSanitaryTapFitting"></td>             --}}
              {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryTapFitting" id="Awarded_AwSanitaryTapFitting"></td>             --}}
              <td><input type="text" name="Remark_AwSanitaryTapFitting" id="Remark_AwSanitaryTapFitting"></td>            
              <td><input type="file" name="Remark_AwSanitaryTapFitting" id="Remark_AwSanitaryTapFitting"></td>            
                                 
            </tr>
  
            <tr>
              <td >Water closet</td>
              <td >2</td>
              <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryWaterCloset" id="AwSanitaryWaterCloset"></td>            
              {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryWaterCloset" id="Cons_AwSanitaryWaterCloset"></td>             --}}
              {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryWaterCloset" id="Awarded_AwSanitaryWaterCloset"></td>             --}}
              <td><input type="text" name="Remark_AwSanitaryWaterCloset" id="Remark_AwSanitaryWaterCloset"></td>                   
              <td><input type="file" name="Remark_AwSanitaryWaterCloset" id="Remark_AwSanitaryWaterCloset"></td>                   
            </tr>
  
            <tr>
              
              <td >Water basin</td>
              <td >2</td>
              <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryWaterBasin" id="AwSanitaryWaterBasin"></td>            
              {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryWaterBasin" id="Cons_AwSanitaryWaterBasin"></td>             --}}
              {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryWaterBasin" id="Awarded_AwSanitaryWaterBasin"></td>             --}}
              <td><input type="text" name="Remark_AwSanitaryWaterBasin" id="Remark_AwSanitaryWaterBasin"></td>                   
              <td><input type="file" name="Remark_AwSanitaryWaterBasin" id="Remark_AwSanitaryWaterBasin"></td>                   
            </tr>
  
            <tr>
              <td >Sink</td>
              <td >2</td>
              <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitarySink" id="AwSanitarySink"></td>            
              {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitarySink" id="Cons_AwSanitarySink"></td>             --}}
              {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitarySink" id="Awarded_AwSanitarySink"></td>             --}}
              <td><input type="text" name="Remark_AwSanitarySink" id="Remark_AwSanitarySink"></td>                    
              <td><input type="file" name="Remark_AwSanitarySink" id="Remark_AwSanitarySink"></td>                    
            </tr>
  
            <tr>
              <td >Urinal</td>
              <td >2</td>
              <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryUrinal" id="AwSanitaryUrinal"></td>            
              {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryUrinal" id="Cons_AwSanitaryUrinal"></td>             --}}
              {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryUrinal" id="Awarded_AwSanitaryUrinal"></td>             --}}
              <td><input type="text" name="Remark_AwSanitaryUrinal" id="Remark_AwSanitaryUrinal"></td>                    
              <td><input type="file" name="Remark_AwSanitaryUrinal" id="Remark_AwSanitaryUrinal"></td>                    
            </tr>
  
            <tr>
              <td >Bidet</td>
              <td >2</td>
              <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryBidet" id="AwSanitaryBidet"></td>            
              {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryBidet" id="Cons_AwSanitaryBidet"></td>             --}}
              {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryBidet" id="Awarded_AwSanitaryBidet"></td>             --}}
              <td><input type="text" name="Remark_AwSanitaryBidet" id="Remark_AwSanitaryBidet"></td>                   
              <td><input type="file" name="Remark_AwSanitaryBidet" id="Remark_AwSanitaryBidet"></td>                   
            </tr>
  
            <tr>
              <td >Floor trap</td>
              <td >2</td>
              <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryFloorTrap" id="AwSanitaryFloorTrap"></td>            
              {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryFloorTrap" id="Cons_AwSanitaryFloorTrap"></td>             --}}
              {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryFloorTrap" id="Awarded_AwSanitaryFloorTrap"></td>             --}}
              <td><input type="text" name="Remark_AwSanitaryFloorTrap" id="Remark_AwSanitaryFloorTrap"></td>                    
              <td><input type="file" name="Remark_AwSanitaryFloorTrap" id="Remark_AwSanitaryFloorTrap"></td>                    
            </tr>
  
            <tr>
              <td >Shower</td>
              <td >2</td>
              <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryShower" id="AwSanitaryShower"></td>            
              {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryShower" id="Cons_AwSanitaryShower"></td>             --}}
              {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryShower" id="Awarded_AwSanitaryShower"></td>             --}}
              <td><input type="text" name="Remark_AwSanitaryShower" id="Remark_AwSanitaryShower"></td>
              <td><input type="file" name="Remark_AwSanitaryShower" id="Remark_AwSanitaryShower"></td>
            </tr>
  
            <tr>
              <td >Faucet</td>
              <td >2</td>
              <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryFaucet" id="AwSanitaryFaucet"></td>            
              {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryFaucet" id="Cons_AwSanitaryFaucet"></td>             --}}
              {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryFaucet" id="Awarded_AwSanitaryFaucet"></td>             --}}
              <td><input type="text" name="Remark_AwSanitaryFaucet" id="Remark_AwSanitaryFaucet"></td>                   
              <td><input type="file" name="Remark_AwSanitaryFaucet" id="Remark_AwSanitaryFaucet"></td>                   
            </tr>

            <tr style="display: none">
              <td><input type="text" name="markahPRAwSanitary" id="markahPRAwSanitary" /></td>
            </tr>

            <tr style="display: none">
              <td>Cons_markahPRAwSanitary<input type="text" name="Cons_markahPRAwSanitary" id="Cons_markahPRAwSanitary" /></td>
            </tr>

            <tr style="display: none">
              <td>Awarded_markahPRAwSanitary<input type="text" name="Awarded_markahPRAwSanitary" id="Awarded_markahPRAwSanitary" /></td>
            </tr>

          </tbody>
        </table>

        <div>
          <p>NOTE. Figure B.3 presents a non-exhaustive list of products of reference for architectural works. 
            Products used in a project may be selected from the list or can be added when required.
          </p>
        </div>

        <div>
          
        </div>
  
        <div align="right" class="mt-3">
          <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
          <button class="btn btn-primary" type="submit" title="Hantar">Hantar</button>
          {{-- <a href="/penilaian_reka_bentuk_gpss/skor_penilaian_mekanikal/create/{{$id}}" type="button" class="btn btn-secondary">Seterusnya</a>           --}}
        </div>
  
      </div>
  
  </form>
   

  </div>
        

<script>
  function findTotalSanitary(){
  var arr = document.getElementsByClassName('sanitary');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('markahPRAwSanitary').value = tot;
} 
  
  </script>  

<script>
  function findTotalSanitaryConstruction(){
  var arr = document.getElementsByClassName('sanitary_construction');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('Cons_markahPRAwSanitary').value = tot;
} 
  
  </script>

<script>
  function findTotalSanitaryAwarded(){
  var arr = document.getElementsByClassName('sanitary_awarded');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('Awarded_markahPRAwSanitary').value = tot;
} 
  
  </script>
@endsection
