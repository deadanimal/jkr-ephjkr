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
    <div class="col">
      <table class="table table-bordered line-table text-center" style="width: 100%">
        <thead class="text-white bg-orange-jkr">
          
          <tr>
            <th colspan="8">List of products for architectural works - Floor</th>
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
            <td rowspan="18" >1</td>
            <td rowspan="18">Floor</td>
            <td >Epoxy paint</td>
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
            <td >Floor hardener</td>
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
            
            <td >Ceramic tiles</td>
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
            <td >Stones</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="stones" id="stones">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Granites</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="granites" id="granites">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Marble</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="marble" id="marble">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Carpet</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="carpet" id="carpet">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Carpet underlay</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="carpet_underlay" id="carpet_underlay">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Vinyl</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="vinyl" id="vinyl">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Timber</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="timber" id="timber">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Interlocking pavers</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="interlocking_pavers" id="interlocking_pavers">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Pebble wash</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="pebble_wash" id="pebble_wash">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Bamboo</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="bamboo" id="bamboo">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Cement render</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="cement_render" id="cement_render">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Marmoleum</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="marmoleum" id="marmoleum">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Rubber mat(playgrouubd)</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="rubber_mat" id="rubber_mat">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Concrete imprint</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="concrete_imprint" id="concrete_imprint">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Laminated flooring</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="laminated_flooring" id="laminated_flooring">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>
          
          <tr>
            <td rowspan="3">2</td>
            <td rowspan="3">Water proofing</td>
            <td >Adhesive</td>
            <td >2</td>
            <td> 
              <input onblur="findTotal()" type="number" class="arkitek" name="rockwool" id="rockwool">
            </td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Sealant</td>
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
            <td >Grout</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="concrete_tiles" id="concrete_tiles">
              
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

        </tbody>
      </table>

     
    </div>
  </div>

  <p><strong>Sum of AwF <span class="required"></span></strong><br />
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
                <a href="/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page4">Seterusnya</a>
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
