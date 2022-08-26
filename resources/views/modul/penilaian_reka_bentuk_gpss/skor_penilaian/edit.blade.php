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

<div class="row3 mx-4 table-responsive scrollbar">
    <div class="col">
      <table class="table table-bordered line-table text-center" style="width: 100%">
        <thead class="text-white bg-orange-jkr">
          <tr>

            
            <th >Kod</th>
            <th colspan="8">Perancangan & Pengurusan Tapak Lestari</th>
            <th colspan="12">Pembangunan Baru</th>
            <th colspan="12">Dokumen Pembuktian</th>
            <th rowspan="3">Ulasan / Maklum Balas Penilai</th>
            <th rowspan="3">Muat Naik Dokumen Sokongan</th>
            
            
            
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
            <th colspan="6">Reka Bentuk (Peringkat 2)</th>
            <th colspan="6">Verifikasi (Peringkat 3)</th>
            
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
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>
            <th>pdf</th>             
          </tr>
          <tr>
            <th>TL2</th>
            <th colspan="4" >Sistem Pengurusan Alam Sekitar</th>
            <th colspan="4">A</th>
            <th>0</th>            
            <th>0</th>            
            <th>24</th>            
            <th>0</th>            
            <th>0</th>            
            <th>0</th>            
            <th>0</th>
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th> 
            <th>pdf</th>            
          </tr>
          <tr>
            <th>TL3</th>
            <th colspan="4" >Pemotongan & Penambahan Markah</th>
            <th colspan="4">A</th>
            <th>0</th>            
            <th>0</th>            
            <th>24</th>            
            <th>0</th>            
            <th>0</th>            
            <th>0</th>            
            <th>0</th>
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>
            <th>pdf</th>             
          </tr>
          <tr>
            <th>TL4</th>
            <th colspan="4" >Pelan Kawalan Hakisan & Kelodak(ESCP)</th>
            <th colspan="4">A</th>
            <th>0</th>            
            <th>0</th>            
            <th>24</th>            
            <th>0</th>            
            <th>0</th>            
            <th>0</th>            
            <th>0</th>
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>
            <th>pdf</th>             
          </tr>
          <tr>
            <th>TL5</th>
            <th colspan="4" >Pemuliharaan & Pemeliharaan Cerun</th>
            <th colspan="4">A</th>
            <th>0</th>            
            <th>0</th>            
            <th>24</th>            
            <th>0</th>            
            <th>0</th>            
            <th>0</th>            
            <th>0</th>
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>
            <th>pdf</th>             
          </tr>
          <tr>
            <th>TL6</th>
            <th colspan="4" >Pengurusan Air Larian Hujan</th>
            <th colspan="4">A</th>
            <th>0</th>            
            <th>0</th>            
            <th>24</th>            
            <th>0</th>            
            <th>0</th>            
            <th>0</th>            
            <th>0</th>
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
            <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>
            <th>pdf</th>             
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
            <li class="page-item"><a class="page-link" href="">1</a></li>
            <li class="page-item"><a class="page-link" href="/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek">2</a></li>
            <li class="page-item"><a class="page-link" href="/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page2">3</a></li>
            <li class="page-item"><a class="page-link" href="/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page3">4</a></li>
            <li class="page-item"><a class="page-link" href="/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page4">5</a></li>
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
