@extends('layouts.base')
<link rel="stylesheet" href="/cssfile/pengesahan_penilaian_style.css">

@section('content')
<body>
    {{-- <div class="scroll"> --}}
    <!--TO ENABLE SCROLLBAR AT TABLES-->
    <div class="table-responsive scrollbar">
        <table class="table table-bordered line-table">
            <thead class="text-white">
                <tr align="center" style="background-color:#EB5500">
                    <th>Kod</th>
                    <th colspan="2">Perancangan & Pengurusan Tapak Lestari</th>
                    <th colspan="7">Pembangunan Baru</th>
                    <th colspan="2">Markah</th>
                    <th colspan="2">Dokumen</th>
                </tr>

                <tr align="center" style="background-color:#EB5500">
                    <th colspan="15">Markah</th>
                </tr>
            
            </thead>
            <thead class="text-white">
                <tr align="center" style="background-color:#EB5500">
                    <th>TL</th>
                    <th>Kriteria</th>
                    <th>Kategori Bangunan</th>
                    <th>MM</th>
                    <th>MS</th>
                    <th>MR</th>
                    <th>MMV</th>
                    <th>MS</th>
                    <th>MV</th>
                    <th>ML</th>
                    <th colspan="4">Reka Bentuk (Peringkat 2)</th>

                </tr>
            </thead>

                <tr align="center">
                    <th>TL2</th>
                    <th>Sistem Pengurusan Alam Sekitar</th>
                    <th>A</th>
                    <th>0</th>
                    <th>0</th>
                    <th>24</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>Lorem Ipsum</th>

                </tr>
                <tr align="center">
                    <th>TL3</th>
                    <th>Sistem Pengurusan Alam Sekitar</th>
                    <th>A</th>
                    <th>0</th>
                    <th>0</th>
                    <th>24</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>Lorem Ipsum</th>

                </tr>

                <tr align="center">
                    <th>TL3</th>
                    <th>Sistem Pengurusan Alam Sekitar</th>
                    <th>A</th>
                    <th>0</th>
                    <th>0</th>
                    <th>24</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>Lorem Ipsum</th>

                </tr>

                <tr align="center">
                    <th>TL4</th>
                    <th>Pelan Kawalan Hakisan & Kelodak (ESCP)</th>
                    <th>A</th>
                    <th>0</th>
                    <th>0</th>
                    <th>24</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>Lorem Ipsum</th>

                </tr>

                <tr align="center">
                    <th>TL5</th>
                    <th>Pemuliharaan & Pemeliharaan Cerun</th>
                    <th>A</th>
                    <th>0</th>
                    <th>0</th>
                    <th>24</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>Lorem Ipsum</th>

                </tr>

                <tr align="center">
                    <th>TL6</th>
                    <th>Pengurusan Air Larian Hujan</th>
                    <th>A</th>
                    <th>0</th>
                    <th>0</th>
                    <th>24</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>Lorem Ipsum</th>

                </tr>

                <tr align="center">
                    <th>TL8</th>
                    <th>Sistem Pengurusan Alam Sekitar</th>
                    <th>A</th>
                    <th>0</th>
                    <th>0</th>
                    <th>24</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>Lorem Ipsum</th>

                </tr>

                <tr align="center">
                    <th>TL8.1</th>
                    <th>Memelihara & Memulihara Pokok yang Matang</th>
                    <th>A</th>
                    <th>0</th>
                    <th>0</th>
                    <th>24</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>Lorem Ipsum</th>

                </tr>
        
        </table>
    </div>
{{-- </div> --}}
</body>

        <th>
            <form action="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian/{id}" method="post">
                @csrf
                @method('DELETE')
                <div class="text-left">
                    <button type="submit" class="btn-tolak">Tolak</button>
                </div>
            </form>
        </th>

        <th>
            <form action="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian/{id}" method="post">
                @csrf
                @method('POST')
                <div class="text-right">
                    <button type="submit" class="btn-sah">Sah</button>
                </div>
            </form>
        </th>


{{-- <nav aria-label="...">
    <ul class="pagination pagination-sm">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">1</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
    </ul>
  </nav> --}}

  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </nav>

@endsection