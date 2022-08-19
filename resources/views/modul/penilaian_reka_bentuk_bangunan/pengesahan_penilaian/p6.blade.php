@extends('layouts.base')
<link rel="stylesheet" href="/cssfile/pengesahan_penilaian_style.css">

@section('content')
<body>
      <!--MarkahFL-->

    <!--TO ENABLE SCROLLBAR AT TABLES-->
    <div class="table-responsive scrollbar">
        <table class="table table-bordered line-table">
            <thead class="text-white">
                <tr align="center" style="background-color:#EB5500">
                    <th rowspan="3">Kod</th>
                    <th rowspan="3">Kriteria</th>
                    <th rowspan="3">Kategori bangunan</th>
                    <th colspan="7">Pembangunan Baru</th>
                    <th rowspan="2" colspan="4">Dokumen Pembuktian</th>
                    <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
                </tr>

                <tr align="center" style="background-color:#EB5500">
                    <th colspan="7">Markah</th>
                </tr>
            
                <tr align="center" style="background-color:#EB5500">
                    <th>MM</th>
                    <th>MS</th>
                    <th>MR</th>
                    <th>MMV</th>
                    <th>MS</th>
                    <th>MV</th>
                    <th>ML</th>
                    <th colspan="2">Rekabentuk (Peringkat 2)</th>
                    <th>Verifikasi (Peringkat 3)</th>

                </tr>

                <tr style="background-color:#EB5500">
                    <th>FL</th>
                    <th colspan="15">PENGURUSAN FASILITI LESTARI</th>
                </tr>
            </thead>

            <tr align="center">
                <th>FL1</th>
                <th>Penarafan sedia ada</th>
                <th>A</th>
                <th>5</th>
                <th></th>
                <th></th>
                <th>5</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4"></th>
                <th></th>

            </tr>

            <tr align="center">
                <th>FL2</th>
                <th>Pengurusan fasiliti bangunan</th>
                <th>A</th>
                <th>5</th>
                <th></th>
                <th></th>
                <th>5</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                </th>
                <th>
                </th>

            </tr>

            <tr align="center">
                <th>FL2.1</th>
                <th>Pengurusan data dan ruang</th>
                <th>A</th>
                <th>5</th>
                <th></th>
                <th></th>
                <th>5</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                </th>
                <th>
                </th>

            </tr>

            <tr align="center">
                <th>FL2.2</th>
                <th>Pengurusan sistem penyenggaraan</th>
                <th>A</th>
                <th>5</th>
                <th></th>
                <th></th>
                <th>5</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                </th>
                <th>
                </th>

            </tr>

            <tr align="center">
                <th>FL2.3</th>
                <th>Prestasi penggurusan</th>
                <th>A</th>
                <th>5</th>
                <th></th>
                <th></th>
                <th>5</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                </th>
                <th>
                </th>

            </tr>

            <tr align="center">
                <th>FL3</th>
                <th>Penyenggaraan lestari</th>
                <th>A</th>
                <th>5</th>
                <th></th>
                <th></th>
                <th>5</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                </th>
                <th></th>

            </tr>

            <tr align="center">
                <th>FL3.1</th>
                <th>Ruang pejabat untuk pasukan penyenggaraan</th>
                <th>A</th>
                <th>5</th>
                <th></th>
                <th></th>
                <th>5</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                </th>
                <th>
                </th>

            </tr>

            <tr align="center">
                <th>FL3.2</th>
                <th>Kontraktor pengurusan fasiliti (FM)</th>
                <th>A</th>
                <th>5</th>
                <th></th>
                <th></th>
                <th>5</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                </th>
                <th></th>

            </tr>

            <tr align="center">
                <th>FL3.3</th>
                <th>Pelan Pengurusan Fasiliti (FM)</th>
                <th>A</th>
                <th>5</th>
                <th></th>
                <th></th>
                <th>5</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                </th>
                <th>
                </th>

            </tr>

            <tr align="center">
                <th>FL3.4</th>
                <th>Manual Operasi dan Penyenggaraan Bangunan</th>
                <th>A</th>
                <th>5</th>
                <th></th>
                <th></th>
                <th>5</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4"> 
                Lorem ipsum</th>
                <th>
                    loren ipsum<br>
                </th>

            </tr>


                <!-- Jumlah MarkahFL-->
                <tr align="center">
                    <th colspan="3">Jumlah markah PA</th>
                    <th>11</th>
                    <th>0</th>
                    <th>0</th>
                    <th>13</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th colspan="4"></th>
                    <th colspan="3"></th>
                </tr>    
        </table>
    </div>

</body>

        <th>
            <form action="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_3/{id}" method="post">
                @csrf
                @method('DELETE')
                <div class="text-center">
                    <button type="submit" class="btn btn-secondary">Tolak</button>
                </div>
            </form>
        </th>

        <th>
            <form action="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_3/{id}" method="post">
                @csrf
                @method('POST')
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Sah</button>
                </div>
            </form>
        </th>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian/edit">1</a></li>
              <li class="page-item"><a class="page-link" href="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_2/p2">2</a></li>
              <li class="page-item"><a class="page-link" href="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_3/p3">3</a></li>
              <li class="page-item"><a class="page-link" href="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_4/p4">4</a></li>
              <li class="page-item"><a class="page-link" href="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_5/p5">5</a></li>
              <li class="page-item"><a class="page-link" href="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_6/p6">6</a></li>
              <li class="page-item"><a class="page-link" href="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_7/p7">7</a></li>
        
            </ul>
          </nav>

@endsection