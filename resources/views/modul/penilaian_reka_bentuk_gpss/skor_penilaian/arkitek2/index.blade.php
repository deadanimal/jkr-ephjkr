@extends('layouts.base')

<link rel="stylesheet" href="/cssfile/pengesahan_penilaian_style.css">

@section('content')

 {{-- header --}}
 <div class="header" >
    <h1 class="header-title" style="color: #EB5500">
        PENILAIAN REKA BENTUK GPSS
    </h1>
</div>
<hr style="background-color: #EB5500;">

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
                <a href="/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek2">Seterusnya</a>
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
