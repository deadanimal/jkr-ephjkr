@extends('layouts.base')
<link rel="stylesheet" href="/cssfile/pengesahan_penilaian_style.css">

@section('content')
<body>
      <!--MarkahPD-->

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
                    <th>PD</th>
                    <th colspan="15">PENGURUSAN KUALITI PERSEKITARAN DALAMAN</th>
                </tr>
            </thead>

            <tr align="center">
                <th>PD2</th>
                <th>Perancangan ruang</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4"></th>
                <th></th>

            </tr>

            <tr align="center">
                <th>PD2.4</th>
                <th>Ketinggian siling yang efektif</th>
                <th>A</th>
                <th>1</th>
                <th></th>
                <th></th>
                <th>1</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                                <span>&#183; Lukisan keratan bangunan yang menunjukkan
                                    ukuran (lantai ke siling)</span><br>
                </th>
                <th>
                    <span>&#183; Lukisan siap bina</span><br>
                </th>

            </tr>

            <tr align="center">
                <th>PD2.5</th>
                <th>Warna cerah di permukaan dinding dan siling</th>
                <th>A</th>
                <th>1</th>
                <th></th>
                <th></th>
                <th>1</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                                <span>&#183; Katalog dan sampel menunjukkan warna yang dicadangkan</span><br>
                </th>
                <th>
                    <span>&#183; Bukti bergambar bagi mengesahkan skima warna yang digunakan</span><br>
                </th>

            </tr>

            <tr align="center">
                <th>PD3</th>
                <th>Kualiti Visual</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                </th>
                <th>
                </th>

            </tr>

            <tr align="center">
                <th>PD3.1</th>
                <th>Faktor Pencahayaan Siang (DF)</th>
                <th>A</th>
                <th>2</th>
                <th></th>
                <th></th>
                <th>2</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                                <span>&#183; Lukisan tampak dan jadual tingkap</span><br>
                                <span>&#183; Pengiraan keluasan lantai yang menunjukkan
                                    30% daripada NLA yang menunjukkan nilai DF 1.0% - 3.5%</span><br>
                                <span>&#183; Laporan simulasi (jika ada)</span><br>
                </th>
                <th>
                    <span>&#183; Lukisan siap bina</span><br>
                </th>

            </tr>

            <tr align="center">
                <th>PD3.2</th>
                <th>Menggunakan rak cahaya (light shelves)</th>
                <th>A</th>
                <th>2</th>
                <th></th>
                <th></th>
                <th>2</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                                <span>&#183; Rekabentuk rak cahaya</span><br>
                                <span>&#183; Lukisan terperinci</span><br>
                                <span>&#183; Laporan simulasi, jika ada</span><br>
                </th>
                <th>
                    <span>&#183; Lukisan pemasangan</span><br>
                    <span>&#183; Lukisan siap bina</span><br>
                    <span>&#183; Bukti bergambar</span><br>

                </th>

            </tr>

            <tr align="center">
                <th>PD3.3</th>
                <th>Kawalan Tahap Kesilauan</th>
                <th>A</th>
                <th>1</th>
                <th></th>
                <th></th>
                <th>1</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                                <span>&#183; Katalog dan sampel menunjukkan bidai yang dicadangkan</span><br>
                </th>
                <th>
                    <span>&#183; Lukisan siap bina dan bukti bergambar
                        bagi mengesahkan bidai yang digunakan</span><br>
                    <span>&#183; Laporan prestasi pencahayaan (jika ada)</span><br>
                </th>

            </tr>

            <tr align="center">
                <th>PD3.4</th>
                <th>Akses visual kepada pandangan di luar</th>
                <th>A</th>
                <th>1</th>
                <th></th>
                <th></th>
                <th>1</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                                <span>&#183; Pelan susuratur</span><br>
                                <span>&#183; Rekabentuk awalan yang menunjukkan
                                    pembahagian ruang yang bebas halangan binaan kekal</span><br>
                                <span>&#183; Lukisan terperinci dinding sesekat berserta spesifikasi</span><br>
                </th>
                <th>
                    <span>&#183; Katalog dan sample bahan yang diluluskan oleh S.O.</span><br>
                    <span>&#183; Lukisan Siap Bina</span><br>
                </th>

            </tr>

            <tr align="center">
                <th>PD8</th>
                <th>Kualiti Udara Dalaman (IAQ)</th>
                <th>A</th>
                <th>3</th>
                <th></th>
                <th></th>
                <th>3</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                                <span>&#183; Katalog dan sijil pengesahan penarafan eco-label bahan</span><br>
                                <span>&#183; Spesifikasi teknikal pembekal</span><br>
                </th>
                <th>
                    <span>&#183; Katalog dan kaedah pemasangan (method statement) yang telah
                        disahkan oleh Pegawai yang kompeten</span><br>
                    <span>&#183; Gambar semasa kerja pemasangan</span><br>
                    <span>&#183; Lukisan siap bina</span><br>
                </th>

            </tr>

            <tr align="center">
                <th>PD10</th>
                <th>Kaji Selidik Keselesaan Penghuni</th>
                <th>A</th>
                <th>0</th>
                <th></th>
                <th></th>
                <th>2</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4"> 
                    <span>&#183; Tidak berkaitan (TB)</span></th>
                <th>
                    <span>&#183; Laporan maklumbalas kaji selidik</span><br>
                </th>

            </tr>


                <!-- Jumlah MarkahPD-->
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