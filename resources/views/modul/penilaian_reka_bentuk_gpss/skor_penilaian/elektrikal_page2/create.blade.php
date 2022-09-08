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
                  Electrical Works (Ew)
              </li>
          </ol>
      </nav>
  </div>
</div>

<div class="row3 mx-1  text-center">
  <form action= "/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek/{id}" method="post" enctype="multipart/form-data">
    @method('POST')
      @csrf

      <div class="col">
        <table class="table table-bordered line-table text-center" style="width: 100%">
          <thead class="text-white bg-orange-jkr">
            
            <tr>
              <th colspan="8">List of products for electrical works</th>
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
              <td rowspan="4" >14</td>
              <td rowspan="4">G. S conduit & High Impact PVC conduit/trunking/tray</td>
              <td >Rigid high impact PVC conduit</td>
              <td >2</td>
              <td>
                <input onblur="markahPREw()" type="number" min="0" max="2" class="arkitek" name="EwTrayPVC" id="EwTrayPVC">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>

            <tr>
              <td >Galvanised steel conduit</td>
              <td >2</td>
              <td>
                <input onblur="markahPREw()" type="number" min="0" max="2" class="arkitek" name="EwTrayGalvanised" id="EwTrayGalvanised">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>

            <tr>
              <td >Trunking</td>
              <td >2</td>
              <td>
                <input onblur="markahPREw()" type="number" min="0" max="2" class="arkitek" name="EwTrayTrunking" id="EwTrayTrunking">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>

            <tr>
              <td >Cable tray</td>
              <td >2</td>
              <td>
                <input onblur="markahPREw()" type="number" min="0" max="2" class="arkitek" name="EwTrayCableTray" id="EwTrayCableTray">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
              <tr class="text-center">
                <td rowspan="3" >15</td>
                <td rowspan="3">Fan</td>
                <td >Ceiling fan</td>
                <td >2</td>
                <td>
                  <input onblur="markahPREw()" type="number" min="0" max="2" class="arkitek" name="EwFanCeiling" id="EwFanCeiling">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Wall fan</td>
                <td >2</td>
                <td>
                  <input onblur="markahPREw()" type="number" min="0" max="2" class="arkitek" name="EwFanWall" id="EwFanWall">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Oscillating fan</td>
                <td >2</td>
                <td>
                  <input onblur="markahPREw()" type="number" min="0" max="2" class="arkitek" name="EwFanOscillating" id="EwFanOscillating">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="2" >16</td>
                <td rowspan="2">Power factor correction</td>
                <td >Capacitor for power factor correction</td>
                <td >2</td>
                <td>
                  <input onblur="markahPREw()" type="number" min="0" max="2" class="arkitek" name="EwPowerCapasitor" id="EwPowerCapasitor">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Power factor regulator</td>
                <td >2</td>
                <td>
                  <input onblur="markahPREw()" type="number" min="0" max="2" class="arkitek" name="EwPowerRegulator" id="EwPowerRegulator">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="2" >17</td>
                <td rowspan="2">Emergency light & luminous sign</td>
                <td >'KELUAR' sign LED</td>
                <td >2</td>
                <td>
                  <input onblur="markahPREw()" type="number" min="0" max="2" class="arkitek" name="EwEmergencyKeluar" id="EwEmergencyKeluar">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Emergency light LED</td>
                <td >2</td>
                <td>
                  <input onblur="markahPREw()" type="number" min="0" max="2" class="arkitek" name="EwEmergencyLED" id="EwEmergencyLED">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="1" >18</td>
                <td rowspan="1">Switchgear</td>
                <td >11kV metal enclosed Switchgear - VCB</td>
                <td >2</td>
                <td><input onblur="markahPREw()" type="number" min="0" max="2" class="arkitek" name="EwSwithcgearVCB" id="EwSwithcgearVCB"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="4" >19</td>
                <td rowspan="4">Renewable energy system</td>
                <td >Solar panel</td>
                <td >2</td>
                <td><input onblur="markahPREw()" type="number" min="0" max="2" class="arkitek" name="EwRenewableSolar" id="EwRenewableSolar"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Battery</td>
                <td >2</td>
                <td><input onblur="markahPREw()" type="number" min="0" max="2" class="arkitek" name="EwRenewableBattery" id="EwRenewableBattery"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Inverter</td>
                <td >2</td>
                <td>
                  <input onblur="markahPREw()" type="number" min="0" max="2" class="arkitek" name="EwRenewableInverter" id="EwRenewableInverter">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Low voltage cable</td>
                <td >2</td>
                <td>
                  <input onblur="markahPREw()" type="number" min="0" max="2" class="arkitek" name="EwRenewableLowCable" id="EwRenewableLowCable">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
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
          <a href="/penilaian_reka_bentuk_gpss/skor_penilaian/civil/create" type="button" class="btn btn-secondary">Seterusnya</a>          
        </div>
  
       
      </div>
  
  
  </form>
    
  </div>

  <p><strong>markahPREw <span class="required"></span></strong><br />
    <input type="text" name="markahPREw" id="markahPREw" /></p>

<script>
  function markahPREw(){
  var arr = document.getElementsByClassName('arkitek');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('markahPREw').value = tot;
} 
</script>  


@endsection
