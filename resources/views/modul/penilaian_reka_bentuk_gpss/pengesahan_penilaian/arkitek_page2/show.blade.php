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

<div class="row3 mx-1 table-responsive scrollbar text-center">
  <form action="/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek/{id}" method="post" enctype="multipart/form-data">
    @method('POST')
    @csrf
    <div class="col">
      <table class="table table-bordered line-table text-center" style="width: 100%">
        <thead class="text-white bg-orange-jkr">
          
          <tr>
            <th colspan="8">List of products for architectural works - Window</th>
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
            <td rowspan="4" >1</td>
            <td rowspan="4">Frames</td>
            <td >Aluminium</td>
            <td >2</td>
            <td>
              {{$gpss_bangunan->AwWindowFramesAluminium}}
            </td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Mild steel</td>
            <td >2</td>
            <td>
              {{$gpss_bangunan->AwWindowFramesMildSteel}}
              
            </td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            
            <td >Timber</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwWindowFramesTimber}}</td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >UPVC</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwWindowFramesUpvc}}   </td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>
          
          <tr>
            <td rowspan="4">2</td>
            <td rowspan="4">Sub component (panel)</td>
            <td >Glass</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwWindowPanelGlass}}</td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Timber</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwWindowPanelTimber}}</td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Aluminium</td>
            <td >2</td>
            <td>
              {{$gpss_bangunan->AwWindowPanelAluminium}}             
            </td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Steel</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwWindowPanelSteel}}   </td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td rowspan="4">3</td>
            <td rowspan="4">Ironmongeries</td>
            <td >Friction Stay</td>
            <td >2</td>
            <td> {{$gpss_bangunan->AwWindowIronFriction}}</td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Hinges</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwWindowIronHinges}}     
            </td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Handle</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwWindowIronHandle}}     
            </td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Rubber Gasket</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwWindowIronRubber}}   </td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td rowspan="3">4</td>
            <td rowspan="3">Finishes</td>
            <td >Anodised Coatings</td>
            <td >2</td>
            <td> 
              {{$gpss_bangunan->AwWindowFinishesAnodised}}
            </td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Paint</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwWindowFinishesPaint}}</td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Varnish/shellac</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwWindowFinishesVarnish}}</td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          {{-- New table for door --}}
          <tr class="text-white bg-orange-jkr">
            <th colspan="8">List of products for architectural works - Door</th>
          </tr>

          <tr>
            <td rowspan="4">1</td>
            <td rowspan="4">Frames</td>
            <td >Aluminium</td>
            <td >2</td>
            <td> {{$gpss_bangunan->AwDoorFramesAluminium}} </td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Mild steel</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwDoorFramesMildSteel}}</td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Timber</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwDoorFramesTimber}}   
            </td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Upvc</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwDoorFramesUpvc}} </td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td rowspan="5">2</td>
            <td rowspan="5">Sub component (Panel)</td>
            <td >Timber</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwDoorPanelTimber}}</td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Aluminium</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwDoorPanelAluminium}}</td>            
            <td><input type="number" min="0" max="2"></td>                        
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Upvc</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwDoorPanelUpvc}}</td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Steel</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwDoorPanelSteel}}</td>                        
            <td><input type="number" min="0" max="2"></td>
            <td><input type="number" min="0" max="2"></td>                       
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Glass</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwDoorPanelGlass}}           
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td rowspan="3">3</td>
            <td rowspan="3">Ironmongeries</td>
            <td >Lockset</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwDoorIronLockset}}</td>           
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Door closer</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwDoorIronDoorCloser}}       
            </td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Hinges</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwDoorIronHinges}}</td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td rowspan="3">4</td>
            <td rowspan="3">Finishes</td>
            <td >Anodised coatings</td>
            <td >2</td>
            <td> {{$gpss_bangunan->AwDoorFinishesAnodised}}</td>
            <td><input type="number" min="0" max="2"></td>                        
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Paint</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwDoorFinishesPaint}}   </td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Varnish/shellac</td>
            <td >2</td>
            <td>{{$gpss_bangunan->AwDoorFinishesVarnish}} </td>            
            <td>
              <input type="number" min="0" max="2"></td>            
            <td><input type="number" min="0" max="2"></td>            
            <td><input type="text"></td>                    
          </tr>
        </tbody>
      </table>

      <div align="right" class="mt-3">
        <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
        <a href="/penilaian_reka_bentuk_gpss/pengesahan_penilaian/arkitek_page3/{{$gpss_bangunan->id}}" type="button" class="btn btn-secondary">Seterusnya</a>          
      </div>

     
    </div>
  </form>
    
  </div>

  <p><strong>markahPRAwWindow <span class="required"></span></strong><br />
    <input type="text" name="markahPRAwWindow" id="markahPRAwWindow" /></p>

  <p><strong>markahPRAwDoor <span class="required"></span></strong><br />
    <input type="text" name="markahPRAwDoor" id="markahPRAwDoor" /></p>


<script>
  function findTotal(){
  var arr = document.getElementsByClassName('arkitek');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('markahPRAwWindow').value = tot;
}  
</script>

<script>
  function markahPRAwDoor(){
  var arr = document.getElementsByClassName('arkitek');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('markahPRAwDoor').value = tot;
}  
</script>
@endsection
