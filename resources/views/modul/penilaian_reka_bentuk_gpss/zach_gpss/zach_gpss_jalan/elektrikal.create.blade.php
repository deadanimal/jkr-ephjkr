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
                  Electrical Works (Ew)
              </li>
          </ol>
      </nav>
  </div>
</div>

<div class="row3 mx-1  text-center">
  <form action= "/penilaian_reka_bentuk_gpss/simpan_skor_penilaian_elektrikal/{id}" method="post" enctype="multipart/form-data">
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
              {{-- <th>Point Requested (construction)</th>
              <th>Point Awarded</th> --}}
              <th >Remark</th>
              <th >Supporting Documents</th>
            </tr>
          </thead>
          <tbody>
            
            <tr class="text-center">
              <td rowspan="1" >1</td>
              <td rowspan="1">Generator set</td>
              <td >Generator set</td>
              <td >2</td>
              <td>
                <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwGeneratorSet" id="EwGeneratorSet">
              </td>                       
              <td><input type="text" name="EwGeneratorSet" id="EwGeneratorSet"></td>                    
              <td><input type="file" name="EwGeneratorSet" id="EwGeneratorSet"></td>                    
            </tr>
  
            
  
  
            <tr class="text-center">
                <td rowspan="1" >2</td>
                <td rowspan="1">Transformer</td>
                <td >11kV dry type distribution transformer</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTransformer" id="EwTransformer">
                </td>            
                         
                <td><input type="text" name="EwTransformer" id="EwTransformer"></td>                    
                <td><input type="file" name="EwTransformer" id="EwTransformer"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="1" >3</td>
                <td rowspan="1">Surge Protective Device (PSD)</td>
                <td >Surge Protective Device (PSD)</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSPD" id="EwSPD">
                </td>            
                          
                <td><input type="text" name="EwSPD" id="EwSPD"></td>                    
                <td><input type="file" name="EwSPD" id="EwSPD"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="4" >5</td>
                <td rowspan="4">Protection relays</td>
                <td >Combined overcurrent and earth fault relay</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayCombined" id="EwRelayCombined">
                </td>            
                         
                <td><input type="text" name="EwRelayCombined" id="EwRelayCombined"></td>                    
                <td><input type="file" name="EwRelayCombined" id="EwRelayCombined"></td>                    
              </tr>

              <tr>
                <td >Overcurrent relay</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayOvercurrent" id="EwRelayOvercurrent">
                </td>            
                          
                <td><input type="text" name="EwRelayOvercurrent" id="EwRelayOvercurrent"></td>                    
                <td><input type="file" name="EwRelayOvercurrent" id="EwRelayOvercurrent"></td>                    
              </tr>

              <tr>
                <td >Earth fault relay</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayEarthFault" id="EwRelayEarthFault">
                </td>            
                         
                <td><input type="text" name="EwRelayEarthFault" id="EwRelayEarthFault"></td>                    
                <td><input type="file" name="EwRelayEarthFault" id="EwRelayEarthFault"></td>                    
              </tr>

              <tr>
                <td >Earth fault leakage</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayEarthLeakage" id="EwRelayEarthLeakage">
                </td>            
                        
                <td><input type="text" name="EwRelayEarthLeakage" id="EwRelayEarthLeakage"></td>                    
                <td><input type="file" name="EwRelayEarthLeakage" id="EwRelayEarthLeakage"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="3" >5</td>
                <td rowspan="3">Circuit breaker</td>
                <td >Air Circuit Breaker(ACB)</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitACB" id="EwCircuitACB">
                </td>            
                       
                <td><input type="text" name="EwCircuitACB" id="EwCircuitACB"></td>                    
                <td><input type="file" name="EwCircuitACB" id="EwCircuitACB"></td>                    
              </tr>

              <tr>
                <td >Moulded Case Circuit Breaker(MCCB)</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitMCCB" id="EwCircuitMCCB">
                </td>            
                       
                <td><input type="text" name="EwCircuitMCCB" id="EwCircuitMCCB"></td>                    
                <td><input type="file" name="EwCircuitMCCB" id="EwCircuitMCCB"></td>                    
              </tr>

              <tr>
                <td >Miniature Circuit Breaker(MCB)</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitMCB" id="EwCircuitMCB">
                </td>            
                          
                <td><input type="text" name="EwCircuitMCB" id="EwCircuitMCB"></td>                    
                <td><input type="file" name="EwCircuitMCB" id="EwCircuitMCB"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="1" >6</td>
                <td rowspan="1">Residual current devices</td>
                <td >Residual Current Operated Circuit Breaker with Integral o/c protection(RCBO)</td>
                <td >2</td>
                <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwResidualRCBO" id="EwResidualRCBO"></td>            
                          
                <td><input type="text" name="EwResidualRCBO" id="EwResidualRCBO"></td>                    
                <td><input type="file" name="EwResidualRCBO" id="EwResidualRCBO"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="5" >7</td>
                <td rowspan="5">Switchboard</td>
                <td >Metal enclosure</td>
                <td >2</td>
                <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwResidualRCBO" id="EwResidualRCBO"></td>            
                         
                <td><input type="text" name="EwResidualRCBO" id="EwResidualRCBO"></td>                    
                <td><input type="file" name="EwResidualRCBO" id="EwResidualRCBO"></td>                    
              </tr>

              <tr>
                <td >Busbar support</td>
                <td >2</td>
                <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardBusbar" id="EwSwitchboardBusbar"></td>            
                          
                <td><input type="text" name="EwSwitchboardBusbar" id="EwSwitchboardBusbar"></td>                    
                <td><input type="file" name="EwSwitchboardBusbar" id="EwSwitchboardBusbar"></td>                    
              </tr>

              <tr>
                <td >Cables</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardCables" id="EwSwitchboardCables">
                </td>            
                          
                <td><input type="text" name="EwSwitchboardCables" id="EwSwitchboardCables"></td>                    
                <td><input type="file" name="EwSwitchboardCables" id="EwSwitchboardCables"></td>                    
              </tr>

              <tr>
                <td >Busbar</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardCables" id="EwSwitchboardCables">
                </td>            
                        
                <td><input type="text" name="EwSwitchboardCables" id="EwSwitchboardCables"></td>                    
                <td><input type="file" name="EwSwitchboardCables" id="EwSwitchboardCables"></td>                    
              </tr>

              <tr>
                <td >Consumer unit</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardConsumer" id="EwSwitchboardConsumer">
                </td>            
                       
                <td><input type="text" name="EwSwitchboardConsumer" id="EwSwitchboardConsumer"></td>                    
                <td><input type="file" name="EwSwitchboardConsumer" id="EwSwitchboardConsumer"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="4" >8</td>
                <td rowspan="4">Lamp</td>
                <td >Compact fluorescent lamp(CFL)</td>
                <td >2</td>
                <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampCFL" id="EwLampCFL"></td>            
                         
                <td><input type="text" name="EwLampCFL" id="EwLampCFL"></td>                    
                <td><input type="file" name="EwLampCFL" id="EwLampCFL"></td>                    
              </tr>

              <tr>
                <td >Fluorescent lamp(T5)</td>
                <td >2</td>
                <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampT5" id="EwLampT5"></td>            
                         
                <td><input type="text" name="EwLampT5" id="EwLampT5"></td>                    
                <td><input type="file" name="EwLampT5" id="EwLampT5"></td>                    
              </tr>

              <tr>
                <td >LED tubes</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampLEDTube" id="EwLampLEDTube">
                </td>            
                          
                <td><input type="text" name="EwLampLEDTube" id="EwLampLEDTube"></td>                    
                <td><input type="file" name="EwLampLEDTube" id="EwLampLEDTube"></td>                    
              </tr>

              <tr>
                <td >LED bulb</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampLEDBulb" id="EwLampLEDBulb">
                </td>            
                          
                <td><input type="text" name="EwLampLEDBulb" id="EwLampLEDBulb"></td>                    
                <td><input type="file" name="EwLampLEDBulb" id="EwLampLEDBulb"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="6" >9</td>
                <td rowspan="6">Indoor luminaires</td>
                <td >LED downlight</td>
                <td >2</td>
                <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDDownlight" id="EwIndoorLEDDownlight"></td>            
                            
                <td><input type="text" name="EwIndoorLEDDownlight" id="EwIndoorLEDDownlight"></td>                    
                <td><input type="file" name="EwIndoorLEDDownlight" id="EwIndoorLEDDownlight"></td>                    
              </tr>

              <tr>
                <td >LED recessed luminaires</td>
                <td >2</td>
                <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDRecessed" id="EwIndoorLEDRecessed"></td>            
                          
                <td><input type="text" name="EwIndoorLEDRecessed" id="EwIndoorLEDRecessed"></td>                    
                <td><input type="file" name="EwIndoorLEDRecessed" id="EwIndoorLEDRecessed"></td>                    
              </tr>

              <tr>
                <td >Fluorescent luminaires(T5)</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorT5" id="EwIndoorT5">
                </td>            
                          
                <td><input type="text" name="EwIndoorT5" id="EwIndoorT5"></td>                    
                <td><input type="file" name="EwIndoorT5" id="EwIndoorT5"></td>                    
              </tr>

              <tr>
                <td >Fluorescent luminaires(T8) c/w electronic ballast</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorT8" id="EwIndoorT8">
                </td>            
                          
                <td><input type="text" name="EwIndoorT8" id="EwIndoorT8"></td>                    
                <td><input type="file" name="EwIndoorT8" id="EwIndoorT8"></td>                    
              </tr>

              <tr>
                <td >Electronic ballast</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorBallast" id="EwIndoorBallast">
                </td>            
                          
                <td><input type="text" name="EwIndoorBallast" id="EwIndoorBallast"></td>                    
                <td><input type="file" name="EwIndoorBallast" id="EwIndoorBallast"></td>                    
              </tr>

              <tr>
                <td >LED driver</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDDriver" id="EwIndoorLEDDriver">
                </td>            
                          
                <td><input type="text" name="EwIndoorLEDDriver" id="EwIndoorLEDDriver"></td>                    
                <td><input type="file" name="EwIndoorLEDDriver" id="EwIndoorLEDDriver"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="5" >10</td>
                <td rowspan="5">Outdoor luminaires</td>
                <td >Road lighting luminaires(HPSV)</td>
                <td >2</td>
                <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorHPSV" id="EwOutdoorHPSV"></td>            
                           
                <td><input type="text" name="EwOutdoorHPSV" id="EwOutdoorHPSV"></td>                    
                <td><input type="file" name="EwOutdoorHPSV" id="EwOutdoorHPSV"></td>                    
              </tr>

              <tr>
                <td >Road lighting luminaires(Induction)</td>
                <td >2</td>
                <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorInduction" id="EwOutdoorInduction"></td>            
                          
                <td><input type="text" name="EwOutdoorInduction" id="EwOutdoorInduction"></td>                    
                <td><input type="file" name="EwOutdoorInduction" id="EwOutdoorInduction"></td>                    
              </tr>

              <tr>
                <td >Road lighting luminaires(LED)</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorLED" id="EwOutdoorLED">
                </td>            
             
                <td><input type="text" name="EwOutdoorLED" id="EwOutdoorLED"></td>                    
                <td><input type="file" name="EwOutdoorLED" id="EwOutdoorLED"></td>                    
              </tr>

              <tr>
                <td >Ballast for discharge lamp</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorBallast" id="EwOutdoorBallast">
                </td>            
                         
                <td><input type="text" name="EwOutdoorBallast" id="EwOutdoorBallast"></td>                    
                <td><input type="file" name="EwOutdoorBallast" id="EwOutdoorBallast"></td>                    
              </tr>

              <tr>
                <td >Lighting columns</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorLighting" id="EwOutdoorLighting">
                </td>            
                          
                <td><input type="text" name="EwOutdoorLighting" id="EwOutdoorLighting"></td>                    
                <td><input type="file" name="EwOutdoorLighting" id="EwOutdoorLighting"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="3" >11</td>
                <td rowspan="3">Traffic light</td>
                <td > Controller</td>
                <td >2</td>
                <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficController" id="EwTrafficController"></td>            
                         
                <td><input type="text" name="EwTrafficController" id="EwTrafficController"></td>                    
                <td><input type="file" name="EwTrafficController" id="EwTrafficController"></td>                    
              </tr>

              <tr>
                <td >Traffic signal module</td>
                <td >2</td>
                <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficSignal" id="EwTrafficSignal"></td>            
                        
                <td><input type="text" name="EwTrafficSignal" id="EwTrafficSignal"></td>                    
                <td><input type="file" name="EwTrafficSignal" id="EwTrafficSignal"></td>                    
              </tr>

              <tr>
                <td >Lighting columns</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficLighting" id="EwTrafficLighting">
                </td>            
                          
                <td><input type="text" name="EwTrafficLighting" id="EwTrafficLighting"></td>                    
                <td><input type="file" name="EwTrafficLighting" id="EwTrafficLighting"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="2" >12</td>
                <td rowspan="2">Switches and socket outlet</td>
                <td > Switches</td>
                <td >2</td>
                <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitches" id="EwSwitches"></td>            
                          
                <td><input type="text" name="EwSwitches" id="EwSwitches"></td>                    
                <td><input type="file" name="EwSwitches" id="EwSwitches"></td>                    
              </tr>

              <tr>
                <td >Switches socket outlet</td>
                <td >2</td>
                <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchesSocket" id="EwSwitchesSocket"></td>            
                          
                <td><input type="text" name="EwSwitchesSocket" id="EwSwitchesSocket"></td>                    
                <td><input type="file" name="EwSwitchesSocket" id="EwSwitchesSocket"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="3" >13</td>
                <td rowspan="3">Cables</td>
                <td > Low voltage cable</td>
                <td >2</td>
                <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesLow" id="EwCablesLow"></td>            
                          
                <td><input type="text" name="EwCablesMedium" id="EwCablesMedium"></td>                    
                <td><input type="file" name="EwCablesMedium" id="EwCablesMedium"></td>                    
              </tr>

              <tr>
                <td >Medium voltage cable</td>
                <td >2</td>
                <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesMedium" id="EwCablesMedium"></td>            
                          
                <td><input type="text" name="EwCablesMedium" id="EwCablesMedium"></td>                    
                <td><input type="file" name="EwCablesMedium" id="EwCablesMedium"></td>                    
              </tr>

              <tr>
                <td >High voltage cable</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesHigh" id="EwCablesHigh">
                </td>            
                          
                <td><input type="text" name="EwCablesHigh" id="EwCablesHigh"></td>                    
                <td><input type="file" name="EwCablesHigh" id="EwCablesHigh"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="4" >14</td>
                <td rowspan="4">G. S conduit & High Impact PVC conduit/trunking/tray</td>
                <td >Rigid high impact PVC conduit</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayPVC" id="EwTrayPVC">
                </td>            
                          
                <td><input type="text" name="EwTrayPVC" id="EwTrayPVC"></td>                    
                <td><input type="file" name="EwTrayPVC" id="EwTrayPVC"></td>                    
              </tr>
  
              <tr>
                <td >Galvanised steel conduit</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayGalvanised" id="EwTrayGalvanised">
                </td>            
                          
                <td><input type="text" name="EwTrayGalvanised" id="EwTrayGalvanised"></td>                    
                <td><input type="file" name="EwTrayGalvanised" id="EwTrayGalvanised"></td>                    
              </tr>
  
              <tr>
                <td >Trunking</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayTrunking" id="EwTrayTrunking">
                </td>            
                           
                <td><input type="text" name="EwTrayTrunking" id="EwTrayTrunking"></td>                    
                <td><input type="file" name="EwTrayTrunking" id="EwTrayTrunking"></td>                    
              </tr>
  
              <tr>
                <td >Cable tray</td>
                <td >2</td>
                <td>
                  <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayCableTray" id="EwTrayCableTray">
                </td>            
                         
                <td><input type="text" name="EwTrayCableTray" id="EwTrayCableTray"></td>                    
                <td><input type="file" name="EwTrayCableTray" id="EwTrayCableTray"></td>                    
              </tr>
    
                <tr class="text-center">
                  <td rowspan="3" >15</td>
                  <td rowspan="3">Fan</td>
                  <td >Ceiling fan</td>
                  <td >2</td>
                  <td>
                    <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanCeiling" id="EwFanCeiling">
                  </td>            
                             
                  <td><input type="text" name="EwFanCeiling" id="EwFanCeiling"></td>                    
                  <td><input type="file" name="EwFanCeiling" id="EwFanCeiling"></td>                    
                </tr>
  
                <tr>
                  <td >Wall fan</td>
                  <td >2</td>
                  <td>
                    <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanWall" id="EwFanWall">
                  </td>            
                           
                  <td><input type="text" name="EwFanWall" id="EwFanWall"></td>                    
                  <td><input type="file" name="EwFanWall" id="EwFanWall"></td>                    
                </tr>
  
                <tr>
                  <td >Oscillating fan</td>
                  <td >2</td>
                  <td>
                    <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanOscillating" id="EwFanOscillating">
                  </td>            
                            
                  <td><input type="text" name="EwFanOscillating" id="EwFanOscillating"></td>                    
                  <td><input type="file" name="EwFanOscillating" id="EwFanOscillating"></td>                    
                </tr>
  
                <tr class="text-center">
                  <td rowspan="2" >16</td>
                  <td rowspan="2">Power factor correction</td>
                  <td >Capacitor for power factor correction</td>
                  <td >2</td>
                  <td>
                    <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwPowerCapasitor" id="EwPowerCapasitor">
                  </td>            
                             
                  <td><input type="text" name="EwPowerCapasitor" id="EwPowerCapasitor"></td>                    
                  <td><input type="file" name="EwPowerCapasitor" id="EwPowerCapasitor"></td>                    
                </tr>
  
                <tr>
                  <td >Power factor regulator</td>
                  <td >2</td>
                  <td>
                    <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwPowerRegulator" id="EwPowerRegulator">
                  </td>            
                         
                  <td><input type="text" name="EwPowerRegulator" id="EwPowerRegulator"></td>                    
                  <td><input type="file" name="EwPowerRegulator" id="EwPowerRegulator"></td>                    
                </tr>
  
                <tr class="text-center">
                  <td rowspan="2" >17</td>
                  <td rowspan="2">Emergency light & luminous sign</td>
                  <td >'KELUAR' sign LED</td>
                  <td >2</td>
                  <td>
                    <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwEmergencyKeluar" id="EwEmergencyKeluar">
                  </td>            
                            
                  <td><input type="text" name="EwEmergencyKeluar" id="EwEmergencyKeluar"></td>                    
                  <td><input type="file" name="EwEmergencyKeluar" id="EwEmergencyKeluar"></td>                    
                </tr>
  
                <tr>
                  <td >Emergency light LED</td>
                  <td >2</td>
                  <td>
                    <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwEmergencyLED" id="EwEmergencyLED">
                  </td>            
                             
                  <td><input type="text" name="EwEmergencyLED" id="EwEmergencyLED"></td>                    
                  <td><input type="file" name="EwEmergencyLED" id="EwEmergencyLED"></td>                    
                </tr>
  
                <tr class="text-center">
                  <td rowspan="1" >18</td>
                  <td rowspan="1">Switchgear</td>
                  <td >11kV metal enclosed Switchgear - VCB</td>
                  <td >2</td>
                  <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwithcgearVCB" id="EwSwithcgearVCB"></td>            
                            
                  <td><input type="text" name="EwSwithcgearVCB" id="EwSwithcgearVCB"></td>                    
                  <td><input type="file" name="EwSwithcgearVCB" id="EwSwithcgearVCB"></td>                    
                </tr>
  
                <tr class="text-center">
                  <td rowspan="4" >19</td>
                  <td rowspan="4">Renewable energy system</td>
                  <td >Solar panel</td>
                  <td >2</td>
                  <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableSolar" id="EwRenewableSolar"></td>            
                            
                  <td><input type="text" name="EwRenewableSolar" id="EwRenewableSolar"></td>                    
                  <td><input type="file" name="EwRenewableSolar" id="EwRenewableSolar"></td>                    
                </tr>
  
                <tr>
                  <td >Battery</td>
                  <td >2</td>
                  <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableBattery" id="EwRenewableBattery"></td>            
                            
                  <td><input type="text" name="EwRenewableBattery" id="EwRenewableBattery"></td>                    
                  <td><input type="file" name="EwRenewableBattery" id="EwRenewableBattery"></td>                    
                </tr>
  
                <tr>
                  <td >Inverter</td>
                  <td >2</td>
                  <td>
                    <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableInverter" id="EwRenewableInverter">
                  </td>            
                            
                  <td><input type="text" name="EwRenewableInverter" id="EwRenewableInverter"></td>                    
                  <td><input type="file" name="EwRenewableInverter" id="EwRenewableInverter"></td>                    
                </tr>
  
                <tr>
                  <td >Low voltage cable</td>
                  <td >2</td>
                  <td>
                    <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableLowCable" id="EwRenewableLowCable">
                  </td>            
                             
                  <td><input type="text" name="EwRenewableLowCable" id="EwRenewableLowCable"></td>                    
                  <td><input type="file" name="EwRenewableLowCable" id="EwRenewableLowCable"></td>                    
                </tr>

                <tr style="display: none">
                  <td><input type="text" name="markahPREw" id="markahPREw" /></td>
                </tr>

          </tbody>
        </table>


        <div align="right" class="mt-3">
          <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
          <button class="btn btn-primary" type="submit" title="hantar">Hantar</button>
          {{-- <a href="/penilaian_reka_bentuk_gpss/skor_penilaian_civil/create/{{$id}}" type="button" class="btn btn-secondary">Seterusnya</a>           --}}
        </div>
  
       
      </div>
  
  
  </form>
    
  </div>

  {{-- <p><strong>findTotalmarkahPREw <span class="required"></span></strong><br />
    <input type="text" name="markahPREw" id="markahPREw" /></p> --}}

<script>
  function findTotalmarkahPREw(){
  var arr = document.getElementsByClassName('elektrikal');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('markahPREw').value = tot;
} 
</script>  


@endsection
