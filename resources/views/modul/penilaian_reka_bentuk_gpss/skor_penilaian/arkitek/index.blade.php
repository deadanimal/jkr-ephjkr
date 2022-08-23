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


<div class="row3 mx-6 table-responsive scrollbar text-center">
    <div class="col">
      <table class="table table-bordered line-table text-center" style="width: 100%">
        <thead class="text-white bg-orange-jkr">
          <tr>          
            <th colspan="8">Green Product Scoring Sheet</th>
          </tr>
          <tr>
            <th colspan="8">List of products for architectural works - Roof</th>
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
            <td rowspan="4">Roof tiles</td>
            <td >Clay tiles</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="clay_tiles" id="clay_tiles">
            </td>            
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="clay_tiles" id="clay_tiles">
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Concrete tiles</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="concrete_tiles" id="concrete_tiles">
              
            </td>            
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="clay_tiles" id="clay_tiles">
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            
            <td >Metal roofing</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="metal_roofing" id="metal_roofing">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Shingles</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="shingles" id="shingles"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>
          
          <tr>
            <td rowspan="5">2</td>
            <td rowspan="5">Insulation</td>
            <td >Rockwool</td>
            <td >2</td>
            <td> <input onblur="findTotal()" type="number" class="arkitek" name="rockwool" id="rockwool"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Glasswool</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="glasswool" id="glasswool"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Foam</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="foam" id="foam"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Aluminium Foil</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="aluminium_foil" id="aluminium_foil"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Undersheeting</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="undersheeting" id="undersheeting"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td rowspan="3">3</td>
            <td rowspan="3">Roof Eaves</td>
            <td >Metal</td>
            <td >2</td>
            <td> <input onblur="findTotal()" type="number" class="arkitek" name="metal" id="metal"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Fiber cement</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="fiber_cement" id="fiber_cement"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Plasterboard</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="plasterboard" id="plasterboard"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            
            <td rowspan="4">4</td>
            <td rowspan="4">Fascia boards</td>
            <td >Metal</td>
            <td >2</td>
            <td> <input onblur="findTotal()" type="number" class="arkitek" name="metal" id="metal"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td> 

          </tr>

          <tr>
            <td >Fibre cement</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="fibre_cement" id="fibre_cement"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Plasterboard</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="plasterboard" id="plasterboard"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Timber</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="timber" id="timber"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            
            <td rowspan="4">5</td>
            <td rowspan="4">Gutter</td>
            <td >Upvc</td>
            <td >2</td>
            <td> <input onblur="findTotal()" type="number" class="arkitek" name="upvc" id="upvc"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td> 

          </tr>

          <tr>
            <td >Galvanised iron</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="galvanised_iron" id="galvanised_iron"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Aluminium</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="aluminium" id="aluminium"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Stainless steel</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="stainless_steel" id="stainless_steel"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            
            <td rowspan="4">6</td>
            <td rowspan="4">Rainwater down pipes</td>
            <td >Upvc</td>
            <td >2</td>
            <td> <input onblur="findTotal()" type="number" class="arkitek" name="upvc" id="upvc"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td> 

          </tr>

          <tr>
            <td >Galvanised iron</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="galvanised_iron" id="galvanised_iron"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Aluminium</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="aluminium" id="aluminium"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Stainless steel</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="stainless_steel" id="stainless_steel"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            
            <td rowspan="3">7</td>
            <td rowspan="3">Gutter</td>
            <td >Plasterboard</td>
            <td >2</td>
            <td> <input onblur="findTotal()" type="number" class="arkitek" name="plasterboard" id="plasterboard"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td> 

          </tr>

          <tr>
            <td >Fibre cement board</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="fibre_cement_board" id="fibre_cement_board"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Metal strip</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="metal_strip" id="metal_strip"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            
            <td rowspan="2">8</td>
            <td rowspan="2">Truss system</td>
            <td >Timber</td>
            <td >2</td>
            <td> <input onblur="findTotal()" type="number" class="arkitek" name="timber" id="timber"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td> 

          </tr>

          <tr>
            <td >Metal</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="metal" id="metal"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          {{-- New table for wall system --}}
          <tr class="text-white bg-orange-jkr">
            <th colspan="8">List of products for architectural works - Wall System</th>
          </tr>

          <tr>
            
            <td rowspan="10">1</td>
            <td rowspan="10">Wall types</td>
            <td >Bricks</td>
            <td >2</td>
            <td> <input onblur="findTotal()" type="number" class="arkitek" name="bricks" id="bricks"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td> 

          </tr>

          <tr>
            <td >Timberwork</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="timberwork" id="timberwork"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Clay bricks</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="clay_bricks" id="clay_bricks"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Blockwork</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="blockwork" id="blockwork"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Reinforce concrete</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="reinforce_concrete" id="reinforce_concrete"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Aerated concrete</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="aerated_concrete" id="aerated_concrete"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Glass</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="glass" id="glass"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Gypsum board</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="gypsum_board" id="gypsum_board"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Cement board</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="cement_board" id="cement_board"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Fibre cement</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="fibre_cement" id="fibre_cement"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            
            <td rowspan="12">2</td>
            <td rowspan="12">Finishes</td>
            <td >Paints</td>
            <td >2</td>
            <td> <input onblur="findTotal()" type="number" class="arkitek" name="paints" id="paints"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td> 

          </tr>

          <tr>
            <td >Composite panel</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="composite_panel" id="composite_panel"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Wall paper</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="wall_paper" id="wall_paper"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Ceramic tiles</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="ceramic_tiles" id="ceramic_tiles"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Stones</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="stones" id="stones"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Pebblewash</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="pebblewash" id="pebblewash"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Granite</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="granite" id="granite"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Glass</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="glass" id="glass"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Glass block</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="glass_block" id="glass_block"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Timber panelling</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="timber_panelling" id="timber_panelling"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Plaster</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="plaster" id="plaster"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Growall</td>
            <td >2</td>
            <td><input onblur="findTotal()" type="number" class="arkitek" name="growall" id="growall"></td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>


        </tbody>
      </table>
      

    </div>
  </div>


    <p><strong>Sum of AwR <span class="required"></span></strong><br />
      <input type="text" name="totalroof" id="totalroof" /></p>



        {{-- pagination --}}

<tfoot>
    <nav aria-label="Page navigation example">
        <ul class="pagination ">
            <li class="page-item">
            {{-- <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a> --}}
            </li>
            {{-- <li class="page-item"><a class="page-link" href="">1</a></li>
            <li class="page-item"><a class="page-link" href="/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li>
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
            </li> --}}
            <li>
                <button>Simpan</button>
                <a href="/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page2">Seterusnya</a>
            </li>
        </ul>
        </nav>

</tfoot>

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
  document.getElementById('totalroof').value = tot;
} 
  </script>  



@endsection
