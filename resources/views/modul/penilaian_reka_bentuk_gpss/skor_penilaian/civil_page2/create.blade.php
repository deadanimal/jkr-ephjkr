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
                  Civil Works (Sw)
              </li>
          </ol>
      </nav>
  </div>
</div>

<div class="row3 mx-1  text-center">
  <form action= "/penilaian_reka_bentuk_gpss/simpan_skor_penilaian_civil_page2/{id}" method="post" enctype="multipart/form-data">
    @method('POST')
      @csrf

      <div class="col">
        <table class="table table-bordered line-table text-center" style="width: 100%">
          <thead class="text-white bg-orange-jkr">
            
            <tr>
              <th colspan="8">List of products for structure</th>
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
              <td rowspan="5" >1</td>
              <td rowspan="5">Common items</td>
              <td >Cement</td>
              <td >2</td>
              <td>
                <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonCement" id="SwCommonCement">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>

            <tr>
              <td >Reinforcement bar</td>
              <td >2</td>
              <td>
                <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonBar" id="SwCommonBar">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>

            <tr>
              <td >Sand</td>
              <td >2</td>
              <td>
                <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonSand" id="SwCommonSand">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>

            <tr>
              <td >Aggregate</td>
              <td >2</td>
              <td>
                <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonAggregate" id="SwCommonAggregate">
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
                <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonTimber" id="SwCommonTimber">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
              <tr class="text-center">
                <td rowspan="7" >2</td>
                <td rowspan="7">Super structure</td>
                <td >Concrete</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperConcrete" id="SwSuperConcrete">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Reinforcement bar</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperBar" id="SwSuperBar">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Steel</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperSteel" id="SwSuperSteel">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Water stop</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperWater" id="SwSuperWater">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Damp proof membrane</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperDamp" id="SwSuperDamp">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Plastic sheeting</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperPlastic" id="SwSuperPlastic">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Sealant</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperSealant" id="SwSuperSealant">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="6" >3</td>
                <td rowspan="6">Roof trusses</td>
                <td >Steel</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofSteel" id="SwRoofSteel">
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
                  <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofTimber" id="SwRoofTimber">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Aluminium</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofAluminium" id="SwRoofAluminium">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Bolt</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofBolt" id="SwRoofBolt">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Plates</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofPlates" id="SwRoofPlates">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Membrane</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofMembrane" id="SwRoofMembrane">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr style="display: none">
                <td><input type="text" name="markahPRSw" id="markahPRSw" /></td>
              </tr>

          </tbody>
        </table>

        <div align="right" class="mt-3">
          <button class="btn btn-primary" type="submit" title="Simpan">Hantar</button>
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
      </div>
  </form>
  </div>

  {{-- <p><strong>findTotalmarkahPRSw <span class="required"></span></strong><br />
    <input type="text" name="markahPRSw" id="markahPRSw" /></p> --}}

<script>
  function findTotalmarkahPRSw(){
  var arr = document.getElementsByClassName('structure');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('markahPRSw').value = tot;
} 
</script>  


@endsection
