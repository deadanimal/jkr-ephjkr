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

<div class="row3 mx-4">
    <div class="col">
      <table class="table table-bordered line-table text-center" style="width: 100%">
        <thead class="text-white bg-orange-jkr">
          <tr>

            
            <th >Kod</th>
            <th colspan="8">Perancangan & Pengurusan Tapak Lestari</th>
            <th colspan="12">Pembangunan Baru</th>
            <th >Dokumen</th>
            
            
            
          </tr>
          <tr>
            <th scope="row">TL</th>
            <th scope="col" colspan="4">Kriteria</th>
            <th colspan="4">Kategori Bangunan</th>
            <th >MM</th>
            <th >MS</th>
            <th >MR</th>
            <th >MMV</th>
            <th >MS</th>
            <th >MV</th>
            <th >ML</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>TL1</th>
            <th colspan="4" >Perancangan Tapak</th>
            <th colspan="4">A</th>
            <th>0</th>            
            <th>0</th>            
            <th>24</th>            
            <th>0</th>            
            <th>0</th>            
            <th>0</th>            
            <th>0</th>            
            
          </tr>
          <tr>
            <th scope="row">KT</th>
            <td colspan="3" >Pengurusan Kecekapan Tenaga</td>
            <td>26</td>
            <td>0</td>
            <td>0</td>
            <td>24</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <th scope="row">SB</th>
            <td colspan="3" >Pengurusan Sumber dan Bahan</td>
            <td>26</td>
            <td>0</td>
            <td>0</td>
            <td>24</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <th scope="row">PA</th>
            <td colspan="3" >Pengurusan Kecekapan Penggunaan Air</td>
            <td>26</td>
            <td>0</td>
            <td>0</td>
            <td>24</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <th scope="row">PD</th>
            <td colspan="3" >Pengurusan Kualiti Persekitaran Dalaman</td>
            <td>26</td>
            <td>0</td>
            <td>0</td>
            <td>24</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <th scope="row">FL</th>
            <td colspan="3" >Pengurusan Fasiliti Lestari</td>
            <td>26</td>
            <td>0</td>
            <td>0</td>
            <td>24</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <th scope="row">IN</th>
            <td colspan="3" >Inovasi dalam Reka Bentuk</td>
            <td>26</td>
            <td>0</td>
            <td>0</td>
            <td>24</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            
            <td colspan="4" >JUMLAH</td>
            <td>101</td>
            <td>0</td>
            <td>0</td>
            <td>103</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
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
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
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
            </li>
            <li>
                <button>Tolak</button>
                <button>Sah</button>
            </li>
        </ul>
        </nav>

</tfoot>

    
@endsection