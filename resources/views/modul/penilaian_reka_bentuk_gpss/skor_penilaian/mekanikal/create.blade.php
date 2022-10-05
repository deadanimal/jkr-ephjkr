@extends('layouts.base')

<link rel="stylesheet" href="/cssfile/pengesahan_penilaian_style.css">
@section('content')

<style>
  ul,li{
  color: #5e6e82;
  }

  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button
  {
  -webkit-appearance: none;
  margin: 0;
  }
</style>

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
                  Mechanical Works (Mw)
              </li>
          </ol>
      </nav>
  </div>
</div>

<div class="row3 mx-1  text-center">
  <form action= "/penilaian_reka_bentuk_gpss/simpan_skor_penilaian_mekanikal/{id}" method="post" enctype="multipart/form-data">
    @method('POST')
      @csrf

      <div class="col">
        <table class="table table-bordered line-table text-center" style="width: 100%">
          <thead class="text-white bg-orange-jkr">
            
            <tr>
              <th colspan="8">List of products for mechanical works</th>
            </tr>
            <tr>
              <th>No.</th>
              <th >Component</th>
              <th>Product</th>
              <th >Point Allocated</th>
              <th>Point Requested (design)</th>
              <th>Point Requested (construction)</th>
              <th>Point Awarded</th>
              <th >Remark</th>
            </tr>
          </thead>
          <tbody>
            
            <tr class="text-center">
              <td rowspan="5">1</td>
              <td rowspan="5">Water cooled chiller system</td>
              <td>Compressor <li>Refrigerant</li></td>
              <td>2</td>
              <td>
                <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemCompressor" id="MwWaterSystemCompressor">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td >Air side <li>Air handling unit</li></td>
              <td >2</td>
              <td>
                <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemAirSide" id="MwWaterSystemAirSide">
                
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            <tr>
              <td>Water side 
                <li>Pump</li>
              </td>
              <td >2</td>
              <td>
                <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemPump" id="MwWaterSystemPump">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>

            <tr>
              <td><li>Cooling tower</li></td>
              <td>2</td>
              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemCoolingTower" id="MwWaterSystemCoolingTower"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>            
              
            </tr>

            <tr>
              <td><li>Electronic water descater</li></td>
              <td>2</td>
              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemElectronicWater" id="MwWaterSystemElectronicWater"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>            
            </tr>
  
            <tr class="text-center">
                <td rowspan="3" >2</td>
                <td rowspan="3">Multiple air-conditioning system</td>
                <td >Compressor <li>Refrigerant</li></td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwACCompressor" id="MwACCompressor">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>
  
            <tr>
              <td >Air side <li>Air handling unit</li></td>
              <td >2</td>
              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal " name="MwACAirHandling" id="MwACAirHandling"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>

            <tr>
              <td><li>Outdoor unit</li></td>
              <td>2</td>
              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwACOutdoorUnit" id="MwACOutdoorUnit"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>            
            </tr>

          

            <tr class="text-center">
                <td rowspan="1" >3</td>
                <td rowspan="1">Split unit</td>
                <td >Compressor <li>Refrigerant</li></td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwSplitCompressor" id="MwSplitCompressor">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="1" >4</td>
                <td rowspan="1">Lift</td>
                <td >Lift motor</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwLiftMotor" id="MwLiftMotor">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="4" >5</td>
                <td rowspan="4">Firefighting system</td>
                <td >Clean agent <li>Mist</li></td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwFireSystemMist" id="MwFireSystemMist">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Hose reel <li>Pump</li></td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwFireSystemHosePump" id="MwFireSystemHosePump">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Sprinkler <li>Pump</li></td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwFireSystemSpriklerPump" id="MwFireSystemSpriklerPump">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Wet or dry riser <li>Pump</li></td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwFireSystemWetPump" id="MwFireSystemWetPump">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="2" >6</td>
                <td rowspan="2">Cold water system</td>
                <td >Pump</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwColdSystemPump" id="MwColdSystemPump">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Water tank</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwColdSystemWaterTank" id="MwColdSystemWaterTank">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="1" >7</td>
                <td rowspan="1">Innovation</td>
                <td >Rain water harvesting</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwInnovationRainHarvesting" id="MwInnovationRainHarvesting">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr style="display: none">
                <td><input type="text" name="markahPRMw" id="markahPRMw" /></td>
              </tr>

          </tbody>
        </table>

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
          <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
          <a href="/penilaian_reka_bentuk_gpss/skor_penilaian_elektrikal/create" type="button" class="btn btn-secondary">Seterusnya</a>          
        </div>
  
       
      </div>
  
  
  </form>
    
  </div>

  {{-- <p><strong>markahPRMw <span class="required"></span></strong><br />
    <input type="text" name="markahPRMw" id="markahPRMw" /></p> --}}

<script>
  function findTotalmarkahPRMw(){
  var arr = document.getElementsByClassName('mekanikal');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('markahPRMw').value = tot;
} 
</script>  


@endsection
