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
              <td rowspan="1" >1</td>
              <td rowspan="1">Generator set</td>
              <td >Generator set</td>
              <td >2</td>
              <td>
                <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwGeneratorSet" id="EwGeneratorSet">
              </td>            
              <td>
                <input type="number" min="0" max="2"></td>            
              <td><input type="number" min="0" max="2"></td>            
              <td><input type="text"></td>                    
            </tr>
  
            
  
  
            <tr class="text-center">
                <td rowspan="1" >2</td>
                <td rowspan="1">Transformer</td>
                <td >11kV dry type distribution transformer</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwTransformer" id="EwTransformer">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="1" >3</td>
                <td rowspan="1">Surge Protective Device (PSD)</td>
                <td >Surge Protective Device (PSD)</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwSPD" id="EwSPD">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="4" >5</td>
                <td rowspan="4">Protection relays</td>
                <td >Combined overcurrent and earth fault relay</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwRelayCombined" id="EwRelayCombined">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Overcurrent relay</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwRelayOvercurrent" id="EwRelayOvercurrent">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Earth fault relay</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwRelayEarthFault" id="EwRelayEarthFault">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Earth fault leakage</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwRelayEarthLeakage" id="EwRelayEarthLeakage">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="3" >5</td>
                <td rowspan="3">Circuit breaker</td>
                <td >Air Circuit Breaker(ACB)</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwCircuitACB" id="EwCircuitACB">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Moulded Case Circuit Breaker(MCCB)</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwCircuitMCCB" id="EwCircuitMCCB">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Miniature Circuit Breaker(MCB)</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwCircuitMCB" id="EwCircuitMCB">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="1" >6</td>
                <td rowspan="1">Residual current devices</td>
                <td >Residual Current Operated Circuit Breaker with Integral o/c protection(RCBO)</td>
                <td >2</td>
                <td><input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwResidualRCBO" id="EwResidualRCBO"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="5" >7</td>
                <td rowspan="5">Switchboard</td>
                <td >Metal enclosure</td>
                <td >2</td>
                <td><input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwResidualRCBO" id="EwResidualRCBO"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Busbar support</td>
                <td >2</td>
                <td><input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwSwitchboardBusbar" id="EwSwitchboardBusbar"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Cables</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwSwitchboardCables" id="EwSwitchboardCables">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Busbar</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwSwitchboardCables" id="EwSwitchboardCables">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Consumer unit</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwSwitchboardConsumer" id="EwSwitchboardConsumer">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="4" >8</td>
                <td rowspan="4">Lamp</td>
                <td >Compact fluorescent lamp(CFL)</td>
                <td >2</td>
                <td><input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwLampCFL" id="EwLampCFL"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Fluorescent lamp(T5)</td>
                <td >2</td>
                <td><input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwLampT5" id="EwLampT5"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >LED tubes</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwLampLEDTube" id="EwLampLEDTube">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >LED bulb</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwLampLEDBulb" id="EwLampLEDBulb">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="6" >9</td>
                <td rowspan="6">Indoor luminaires</td>
                <td >LED downlight</td>
                <td >2</td>
                <td><input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwIndoorLEDDownlight" id="EwIndoorLEDDownlight"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >LED recessed luminaires</td>
                <td >2</td>
                <td><input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwIndoorLEDRecessed" id="EwIndoorLEDRecessed"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Fluorescent luminaires(T5)</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwIndoorT5" id="EwIndoorT5">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Fluorescent luminaires(T8) c/w electronic ballast</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwIndoorT8" id="EwIndoorT8">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Electronic ballast</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwIndoorBallast" id="EwIndoorBallast">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >LED driver</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwIndoorLEDDriver" id="EwIndoorLEDDriver">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="5" >10</td>
                <td rowspan="5">Outdoor luminaires</td>
                <td >Road lighting luminaires(HPSV)</td>
                <td >2</td>
                <td><input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwOutdoorHPSV" id="EwOutdoorHPSV"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Road lighting luminaires(Induction)</td>
                <td >2</td>
                <td><input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwOutdoorInduction" id="EwOutdoorInduction"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Road lighting luminaires(LED)</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwOutdoorLED" id="EwOutdoorLED">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Ballast for discharge lamp</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwOutdoorBallast" id="EwOutdoorBallast">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Lighting columns</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwOutdoorLighting" id="EwOutdoorLighting">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="3" >11</td>
                <td rowspan="3">Traffic light</td>
                <td > Controller</td>
                <td >2</td>
                <td><input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwTrafficController" id="EwTrafficController"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Traffic signal module</td>
                <td >2</td>
                <td><input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwTrafficSignal" id="EwTrafficSignal"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Lighting columns</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwTrafficLighting" id="EwTrafficLighting">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="2" >12</td>
                <td rowspan="2">Switches and socket outlet</td>
                <td > Switches</td>
                <td >2</td>
                <td><input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwSwitches" id="EwSwitches"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Switches socket outlet</td>
                <td >2</td>
                <td><input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwSwitchesSocket" id="EwSwitchesSocket"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="3" >13</td>
                <td rowspan="3">Cables</td>
                <td > Low voltage cable</td>
                <td >2</td>
                <td><input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwCablesLow" id="EwCablesLow"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Medium voltage cable</td>
                <td >2</td>
                <td><input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwCablesMedium" id="EwCablesMedium"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >High voltage cable</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRMw()" type="number" min="0" max="2" class="arkitek" name="EwCablesHigh" id="EwCablesHigh">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              

          </tbody>
        </table>

        {{-- <div>
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
          </div> --}}
  
        <div align="right" class="mt-3">
          <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
          <a href="/penilaian_reka_bentuk_gpss/skor_penilaian/elektrikal_page2/create" type="button" class="btn btn-secondary">Seterusnya</a>          
        </div>
  
       
      </div>
  
  
  </form>
    
  </div>

  <p><strong>markahPRMw <span class="required"></span></strong><br />
    <input type="text" name="markahPRMw" id="markahPRMw" /></p>

<script>
  function markahPRMw(){
  var arr = document.getElementsByClassName('arkitek');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('markahPRMw').value = tot;
} 
</script>  


@endsection
