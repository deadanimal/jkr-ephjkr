@extends('layouts.base')
<link rel="stylesheet" href="/cssfile/pengesahan_penilaian_style.css">

@section('content')

   <!--MarkahSB-->
{{-- <div class="container-fluid"></div> --}}
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
                    <th>SB</th>
                    <th colspan="15">PENGURUSAN SUMBER DAN BAHAN</th>
                </tr>
            </thead>

            <tr align="center">
                <th>SB1</th>
                <th>Sistem Binaan Berindustri (IBS)</th>
                <th>A</th>
                <th>5</th>
                <th></th>
                <th></th>
                <th>5</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                    <span>&#183; Cadangan sistem IBS oleh pembekal IBS berdaftar</span><br>
                    <span>&#183; Laporan Pengiraan Skor IBS</span><br>
                </th>
                <th>
                    <span>&#183; Lukisan pembinaan IBS</span><br>
                    <span>&#183; Lukisan siap bina</span><br>
                </th>

            </tr>

                <tr align="center">
                    <th>SB2</th>
                    <th>Produk hijau</th>
                    <th>A</th>
                    <th>5</th>
                    <th></th>
                    <th></th>
                    <th>5</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Sijil Pengesahan produk hijau</span><br>
                        <span>&#183; spesifikasi produk</span><br>
                        <span>&#183; Senarai permarkahan produk hijau berdasarkan GPSS</span><br>                    
                    </th>
                    <th>
                        <span>&#183; Brosur pembekal</span><br>
                        <span>&#183; Bukti bergambar</span><br>
                        <span>&#183; Borang pengiraan skor GPSS</span><br>

                    </th>

                </tr>
                <tr align="center">
                    <th>SB3</th>
                    <th>Pengurusan sisa semasa pembinaan</th>
                    <th>A</th>
                    <th>4</th>
                    <th></th>
                    <th></th>
                    <th>4</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Pelan pengurusan sisa yang meliputi Buangan Terjadual
                            dan Sisa Bahan Binaan</span><br>
                        <span>&#183; Lukisan yang menunjukkan ruang pengurusan sisa</span><br>
                        <span>&#183; Pelan tapak dengan kawasan simpanan sementara</span><br>
                    </th>
                    <th>
                        <span>&#183; Dokumen bukti proses penyimpanan</span><br>
                        <span>&#183; Dokumen bukti proses penghantaran ke tapak pelupusan</span><br>
                        <span>&#183; Dokumen bukti proses pelupusan sisa berjadual seperti resit
                            dan borang semasa audit dijalankan
                        </span><br>
                        <span>&#183; Bukti bergambar</span><br>
                        <span>&#183; Pengiraan kitar semula (jika ada)</span><br>
                    </th>
                    

                </tr>

                <tr align="center">
                    <th>SB4</th>
                    <th>3r-Semasa Operasi</th>
                    <th>A</th>
                    <th>4</th>
                    <th></th>
                    <th></th>
                    <th>4</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Pelan pengurusan sisa domestik</span><br>
                        <span>&#183; Pelan kedudukan tong 3Rdi semua aras bangunan</span><br>
                        <span>&#183; Lokasi kebuk sampah</span><br>                    
                    </th>
                    <th>
                        <span>&#183; Pematuhan pelan pengurusan sisa domestik</span><br>
                        <span>&#183; Bukti bergambar</span><br>
                    </th>

                <!--Jumlah MarkahSB-->
                <tr align="center">
                    <th colspan="3">Jumlah markah SB</th>
                    <th>20</th>
                    <th>0</th>
                    <th>0</th>
                    <th>20</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th colspan="4"></th>
                    <th colspan="3"></th>
                </tr>    
        </table>
    </div>
    {{-- </div> <!--container fluid--> --}}

        <th>
            <form action="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_2/{id}" method="post">
                @csrf
                @method('DELETE')
                <div class="text-center">
                    <button type="submit" class="btn btn-secondary">Tolak</button>
                </div>
            </form>
        </th>

        <th>
            <form action="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian_halaman_2/{id}" method="post">
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