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
              <input onblur="findTotal()" type="number" class="arkitek" name="clay_tiles" id="clay_tiles">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Mild steel</td>
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
            
            <td >Timber</td>
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
            <td >UPVC</td>
            <td >2</td>
            <td>
              <input onblur="findTotal()" type="number" class="arkitek" name="shingles" id="shingles">
            </td>            
            <td>
              <input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>
          
          <tr>
            <td rowspan="5">2</td>
            <td rowspan="5">Sub component (panel)</td>
            <td >Glass</td>
            <td >2</td>
            <td> 
              <input onblur="findTotal()" type="number" class="arkitek" name="rockwool" id="rockwool">
            </td>            
            <td><input type="number"></td>            
            <td><input type="number"></td>            
            <td><input type="text"></td>                    
          </tr>

          <tr>
            <td >Timber</td>
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
            <td >Aluminium</td>
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
            <td >Steel</td>
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
            <td >Undersheeting</td>
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

  <p><strong>Sum of AwW <span class="required"></span></strong><br />
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
                <a href="/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page3">Seterusnya</a>
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
