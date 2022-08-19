@extends('layouts.base')
<link rel="stylesheet" href="/cssfile/pengesahan_penilaian_style.css">

@section('content')
<body>
   <!--MarkahPA-->

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
                    <th>PA</th>
                    <th colspan="15">PENGURUSAN KECEKAPAN PENGGUNAAN AIR</th>
                </tr>
            </thead>

            <tr align="center">
                <th>PA1</th>
                <th>Produk Kecekapan Air</th>
                <th>A</th>
                <th>3</th>
                <th></th>
                <th></th>
                <th>3</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                                <span>&#183; Katalog bahan dan sampai yang telah disahkan WELPS dan SPAN</span><br>
                                <span>&#183; Pengiraan penjimatan</span><br>
                </th>
                <th>
                    <span>&#183; Bukti bergambar</span><br>
                    <span>&#183; Pensijilan WELPS</span><br>
                </th>

            </tr>

            <tr align="center">
                <th>PA2</th>
                <th>Penjimatan Penggunaan Air Dalam Bangunan</th>
                <th>A</th>
                <th>2</th>
                <th></th>
                <th></th>
                <th>2</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                                <span>&#183; Katalog bahan dan sampai yang telah disahkan WELPS dan SPAN</span><br>
                                <span>&#183; Pengiraan</span><br>
                </th>
                <th>
                    <span>&#183; Bukti bergambar</span><br>
                    <span>&#183; Pensijilan WELPS</span><br>
                </th>

            </tr>

            <tr align="center">
                <th rowspan="2">PA3</th>
                <th>i. SPAH</th>
                <th>A</th>
                <th>2</th>
                <th></th>
                <th></th>
                <th>2</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                                <span>&#183; Katalog bahan dan sampai yang telah disahkan WELPS dan SPAN</span><br>
                                <span>&#183; Pengiraan</span><br>
                </th>
                <th>
                    <span>&#183; Bukti bergambar</span><br>
                    <span>&#183; Pensijilan WELPS</span><br>
                </th>

            </tr>

            <tr align="center">
                {{-- <th rowspan="2">PA3</th> --}}
                <th>ii. Kitar Semula Air Sisa</th>
                <th>A</th>
                <th>5</th>
                <th></th>
                <th></th>
                <th>5</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                                <span>&#183; Laporan rekabentuk dan pengiraan SPAH atau
                                    sistem kitar semula air sisa</span><br>
                                <span>&#183; Lukisan SPAH atau lukisan sistem kitar semula air sisa</span><br>
                                <span>&#183; Bil air domestik</span><br>
                </th>
                <th>
                    <span>&#183; Laporan pengujian sistem</span><br>
                    <span>&#183; Bukti bergambar</span><br>
                    <span>&#183; Lukisan siap bina</span><br>
                </th>

            </tr>

                <!-- Jumlah MarkahPA-->
                <tr align="center">
                    <th colspan="3">Jumlah markah PA</th>
                    <th>26</th>
                    <th>0</th>
                    <th>0</th>
                    <th>24</th>
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