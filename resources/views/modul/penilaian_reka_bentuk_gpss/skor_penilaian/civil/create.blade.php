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
                  Civil Works (Cw)
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
              <th colspan="8">List of products for civil works</th>
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
                <td rowspan="6" >1</td>
                <td rowspan="6">Common items</td>
                <td >Cement</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwCommonCement" id="CwCommonCement">
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
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwCommonTimber" id="CwCommonTimber">
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
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwCommonBar" id="CwCommonBar">
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
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwCommonSand" id="CwCommonSand">
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
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwCommonAggregate" id="CwCommonAggregate">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Stone/rock</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwCommonStone" id="CwCommonStone">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="6" >2</td>
                <td rowspan="6">Earthworks/erosion sediment control</td>
                <td >Geotextile</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwEarthworksGeotextile" id="CwEarthworksGeotextile">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Erosion mat</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwEarthworksErosion" id="CwEarthworksErosion">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Geogrid</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwEarthworksGeogrid" id="CwEarthworksGeogrid">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Mulching</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwEarthworksMulching" id="CwEarthworksMulching">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Gabion</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwEarthworksGabion" id="CwEarthworksGabion">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Hydroseeding</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwEarthworksHydroseeding" id="CwEarthworksHydroseeding">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="6" >3</td>
                <td rowspan="6">Drainage works</td>
                <td >Drain culvert</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwDrainageCulvert" id="CwDrainageCulvert">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Sump</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwDrainageSump" id="CwDrainageSump">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Pipe</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwDrainagePipe" id="CwDrainagePipe">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Modular tank</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwDrainageTank" id="CwDrainageTank">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Geotextile</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwDrainageGeotextile" id="CwDrainageGeotextile">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Grating</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwDrainageGrating" id="CwDrainageGrating">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="15" >7</td>
                <td rowspan="15">Pavement/road furniture</td>
                <td >Asphalt concrete</td>
                <td >2</td>
                <td><input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="" id=""></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Porous asphalt</td>
                <td >2</td>
                <td><input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="" id=""></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Prime coat</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwPavementsPrime" id="CwPavementsPrime">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Tack coat</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwPavementsTack" id="CwPavementsTack">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Retroreflective sheeting</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="" id="">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Road paint</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="" id="">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Paver block</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="" id="">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Permeable paver</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="" id="">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Kerb</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="" id="">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Road stud</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="" id="">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Chevron delineator</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="" id="">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Guardrail</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="" id="">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Railing</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="" id="">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Wire rope</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="" id="">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Signages</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwRoadSignages" id="CwRoadSignages">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="7" >5</td>
                <td rowspan="7">Water reticulation works</td>
                <td >Pipes</td>
                <td >2</td>
                <td><input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwWaterPipes" id="CwWaterPipes"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Bulk meter</td>
                <td >2</td>
                <td><input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwWaterBulk" id="CwWaterBulk"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Valves</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwWaterValves" id="CwWaterValves">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Tank</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwWaterTank" id="CwWaterTank">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Pump</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwWaterPump" id="CwWaterPump">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >First flush filter</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwWaterFirstFlush" id="CwWaterFirstFlush">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Sand filter</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwWaterSand" id="CwWaterSand">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr class="text-center">
                <td rowspan="4" >6</td>
                <td rowspan="4">Sewerage works</td>
                <td >Pipes</td>
                <td >2</td>
                <td><input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwSeveragePipes" id="CwSeveragePipes"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Tank</td>
                <td >2</td>
                <td><input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwSeverageTank" id="CwSeverageTank"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Pump</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwSeveragePump" id="CwSeveragePump">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

              <tr>
                <td >Manhole</td>
                <td >2</td>
                <td>
                  <input onblur="markahPRCw()" type="number" min="0" max="2" class="arkitek" name="CwSeverageManhole" id="CwSeverageManhole">
                </td>            
                <td>
                  <input type="number" min="0" max="2"></td>            
                <td><input type="number" min="0" max="2"></td>            
                <td><input type="text"></td>                    
              </tr>

          </tbody>
        </table>

        
  
        <div align="right" class="mt-3">
          <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
          <a href="/penilaian_reka_bentuk_gpss/skor_penilaian/civil_page2/create" type="button" class="btn btn-secondary">Seterusnya</a>          
        </div>
      </div>
  </form>
    
  </div>

  <p><strong>markahPRCw <span class="required"></span></strong><br />
    <input type="text" name="markahPRCw" id="markahPRCw" /></p>

<script>
  function markahPRCw(){
  var arr = document.getElementsByClassName('arkitek');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('markahPRCw').value = tot;
} 
</script>  


@endsection
