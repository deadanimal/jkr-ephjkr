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

<div class="row3 mx-1 table-responsive scrollbar">
    <div class="col">
      <table class="table table-bordered line-table text-center" style="width: 100%">
        <thead class="text-white bg-orange-jkr">
          <tr>          
            <th colspan="20">Green Product Scoring Sheet</th>
          </tr>
          <tr>
            <th colspan="20">List of products for architectural works - Roof</th>
          </tr>
          <tr>
            <th>No.</th>
            <th colspan="4" >Component</th>
            <th rowspan="10">Product</th>
            <th>Point Allocated</th>
            <th>Point Requested (design)</th>
            <th>Point Requested (construction)</th>
            <th>Point Awarded</th>
            <th colspan="8">Remark</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="6">1</td>
            <td colspan="4" >Roof tiles</td>
            <td rowspan="6">Clay</td>
            <td rowspan="6">2</td>            
            <form action="/penilaian_reka_bentuk_gpss//{id}">
                <td>
                    <input type="number" name="markahAwR" value="{{ $gpss_bangunan ?? '' }}">
                </td>            
                <td>
                    <input type="number" name="" id="">
    
                </td>
                <td>
                    <input type="number" name="" id="">
    
                </td>
                <td>
                    <input type="text" name="" id="">
                </td> 
                
            
            </form>           
          </tr>
          
          
        
          
          
          
          
        </tbody>
      </table>

     
    </div>
  </div>

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
                <a href="/penilaian_reka_bentuk_gpss/melantik_pemudah_cara">Seterusnya</a>
            </li>
        </ul>
        </nav>

</tfoot>

    
@endsection
