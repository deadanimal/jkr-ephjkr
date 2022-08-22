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
            <td >Clay</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="clay_tiles" id="clay_tiles">
            </td>            
            <td>
              <input type="number"></td>            
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
              <input type="number"></td>            
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
            
            <td rowspan="3">8</td>
            <td rowspan="3">Truss system</td>
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
        </tbody>
      </table>    
    </div>
  </div>

  <p><strong>Sum of AwR <span class="required"></span></strong><br />
    <input type="text" name="totalordercost" id="totalordercost" /></p>



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
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('totalordercost').value = tot;
} 
  
  </script>  
@endsection
