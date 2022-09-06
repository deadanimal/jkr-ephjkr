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
  <form action= "/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek/{id}" method="post" enctype="multipart/form-data">
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
              <th>Point Requested (construction)</th>
              <th>Point Awarded</th>
              <th >Remark</th>
            </tr>
          </thead>
          <tbody>
            
            <tr class="text-center">
              <td rowspan="9" >1</td>
              <td rowspan="9">Sanitary Features</td>
              <td >Tap fitting</td>
              <td >2</td>
              <td>
                <input onblur="markahPRAwSanitary()" type="number" min="0" max="2" class="arkitek" name="AwSanitaryTapFitting" id="AwSanitaryTapFitting">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Water closet</td>
              <td >2</td>
              <td>
                <input onblur="markahPRAwSanitary()" type="number" min="0" max="2" class="arkitek" name="AwSanitaryWaterCloset" id="AwSanitaryWaterCloset">
                
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              
              <td >Water basin</td>
              <td >2</td>
              <td>
                <input onblur="markahPRAwSanitary()" type="number" min="0" max="2" class="arkitek" name="AwSanitaryWaterBasin" id="AwSanitaryWaterBasin">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Sink</td>
              <td >2</td>
              <td>
                <input onblur="markahPRAwSanitary()" type="number" min="0" max="2" class="arkitek" name="AwSanitarySink" id="AwSanitarySink">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Urinal</td>
              <td >2</td>
              <td>
                <input onblur="markahPRAwSanitary()" type="number" min="0" max="2" class="arkitek" name="AwSanitaryUrinal" id="AwSanitaryUrinal">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Bidet</td>
              <td >2</td>
              <td>
                <input onblur="markahPRAwSanitary()" type="number" min="0" max="2" class="arkitek" name="AwSanitaryBidet" id="AwSanitaryBidet">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Floor trap</td>
              <td >2</td>
              <td>
                <input onblur="markahPRAwSanitary()" type="number" min="0" max="2" class="arkitek" name="AwSanitaryFloorTrap" id="AwSanitaryFloorTrap">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Shower</td>
              <td >2</td>
              <td>
                <input onblur="markahPRAwSanitary()" type="number" min="0" max="2" class="arkitek" name="AwSanitaryShower" id="AwSanitaryShower">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Faucet</td>
              <td >2</td>
              <td>
                <input onblur="markahPRAwSanitary()" type="number" min="0" max="2" class="arkitek" name="AwSanitaryFaucet" id="AwSanitaryFaucet">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
          </tbody>
        </table>

        <div>
          <p>NOTE. Figure B.3 presents a non-exhaustive list of products of reference for architectural works. 
            Products used in a project may be selected from the list or can be added when required.
          </p>
        </div>

        <div>
          <!-- Design stage -->
        <div class="mb-3 form-group row">
          <label class="col-sm-5 col-form-label text-black">Prepared by: (Design Stage)</label>
              <div class="col-sm-5">
                  <input class="form-control" type="text" autocapitalize="off" name="namaProjek"/>
              </div>
      </div>
      <!-- Construction stage -->
      <div class="mb-3 form-group row">
          <label class="col-sm-5 col-form-label text-black">Prepared by: (Construction Stage)</label>
              <div class="col-sm-5">
                  <input class="form-control" type="text" autocapitalize="off" name="namaProjek"/>
              </div>
      </div>
      <!-- Checked -->
      <div class="mb-3 form-group row">
          <label class="col-sm-5 col-form-label text-black">Checked by: (Construction Stage)</label>
              <div class="col-sm-5">
                  <input class="form-control" type="text" autocapitalize="off" name="namaProjek"/>
              </div>
      </div>
        </div>
  
        <div align="right" class="mt-3">
          <button class="btn btn-primary" type="submit" title="Simpan">Hantar</button>
        </div>
  
      </div>
  
  </form>
   

  </div>

  <p><strong>markahPRAwSanitary <span class="required"></span></strong><br />
    <input type="text" name="markahPRAwSanitary" id="markahPRAwSanitary" /></p>

        

<script>
  function markahPRAwSanitary(){
  var arr = document.getElementsByClassName('arkitek');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('markahPRAwSanitary').value = tot;
} 
  
  </script>  
@endsection
