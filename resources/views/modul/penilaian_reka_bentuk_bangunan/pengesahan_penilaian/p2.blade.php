@extends('layouts.base')
<link rel="stylesheet" href="/cssfile/pengesahan_penilaian_style.css">

@section('content')
<body>
   <!--MarkahKT-->

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
                    <th>KT</th>
                    <th colspan="15">PENGURUSAN KECEKAPAN TENAGA DAN PENGGUNAAN TENAGA BOLEH BAHARU</th>
                </tr>
            </thead>

            <tr align="center">
                <th>KT1</th>
                <th>Rekabentuk bumbung</th>
                <th>A</th>
                <th>2</th>
                <th></th>
                <th></th>
                <th>2</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="4">
                    <span>&#183; Katalog spesifikasi U-Value bahan</span><br>
                    <span>&#183; Pengiraan U-Value bagi rekabentuk bumbung</span><br>
                </th>
                <th>
                    <span>&#183; Katalog bahan dan sampel yang diluluskan</span><br>
                    <span>&#183; Lukisan siap bina</span><br>
                    <span>&#183; Bukti bergambar</span><br>
                </th>

            </tr>

                <tr align="center">
                    <th>KT2</th>
                    <th>Orientasi bangunan</th>
                    <th>A</th>
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
                    <th>KT2.1</th>
                    <th>Fasad Utama bangunan yang menghadap orientasi utara-selatan</th>
                    <th>A</th>
                    <th>1</th>
                    <th></th>
                    <th></th>
                    <th>1</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Pelan tapak berserta penunjuk arah utara
                            menunjukkan pelan bangunan dengan meletakkan sun-path diagram</span><br>
                        <span>&#183; Lukisan siap bina</span><br>
                    </th>
                    <th>
                        <span>&#183; Bukti bergambar</span><br>
                    </th>
                    

                </tr>

                <tr align="center">
                    <th>KT2.2</th>
                    <th>Meminimumkan bukaan pada fasad yang menghadap timur dan barat</th>
                    <th>A</th>
                    <th>1</th>
                    <th></th>
                    <th></th>
                    <th>1</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Pengiraan WWR</span><br>
                        <span>&#183; Tampak setiap arah dengan mewarnakan dinding dan tingkap berasingan</span><br>
                    </th>
                    <th>
                        <span>&#183; Lukisan siap bina</span><br>
                    </th>
                </tr>

                <tr align="center">
                    <th>KT3</th>
                    <th>Rekabentuk fasad</th>
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
                    <th>KT3.1</th>
                    <th>Dinding luar bangunan</th>
                    <th>A</th>
                    <th>1</th>
                    <th></th>
                    <th></th>
                    <th>1</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Katalog spesifikasi U-Value bahan</span><br>
                        <span>&#183; Pengiraan U-value bagi rekabentuk dinding</span><br>
                    </th>
                    <th>
                        <span>&#183; Katalog bahan yang diluluskan untuk pembinaan</span><br>
                        <span>&#183; Pengiraan U-Value yang disahkan</span><br>
                    </th>

                </tr>

                <tr align="center">
                    <th>KT3.2</th>
                    <th>Pengadang Suria Luaran</th>
                    <th>A</th>
                    <th>3</th>
                    <th></th>
                    <th></th>
                    <th>3</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Katalog Bahan</span><br>
                    </th>
                    <th>
                        <span>&#183; Bukti bergambar</span><br>
                        <span>&#183; Lukisan siap bina</span><br>
                    </th>

                </tr>

                <tr align="center">
                    <th>KT4</th>
                    <th>OTTV & RTTV</th>
                    <th>A</th>
                    <th>5</th>
                    <th></th>
                    <th></th>
                    <th>5</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Pengiraan OTTV dan RTTV yang disahkan</span><br>
                    </th>
                    <th>
                        <span>&#183; Pengiraan OTTV dan RTTV yang disahkan</span><br>
                    </th>

                </tr>

                <tr align="center">
                    <th>KT5</th>
                    <th>Kecekapan pencahayaan</th>
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
                    <th>KT5.2</th>
                    <th>Kawalan pencahayaan (M)</th>
                    <th>A</th>
                    <th>6</th>
                    <th></th>
                    <th></th>
                    <th>6</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                        <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                    </th>
                    <th>
                        <span>&#183; Lukisan siap bina yang menunjukkan lokasi suis</span><br>
                        <span>&#183; Bukti bergambar</span><br>
                    </th>

                </tr>

                <tr align="center">
                    <th>KT8</th>
                    <th>Tenaga Boleh Baharu</th>
                    <th>A</th>
                    <th>6</th>
                    <th></th>
                    <th></th>
                    <th>6</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Mengemukakan lukisan rekabentuk sistem dan simulasi pengiraan bagi anggarann tenaga baharu
                            yang boleh dihasilkan oleh sistem tersebut</span><br>
                    </th>
                    <th>
                        <span>&#183; Salinan lukisan siap bina dan laporan uji 
                            terima yang mematuhi kehendak rekabentuk</span><br>
                        <span>&#183; Pengiraan penjanaan tenaga boleh baharuu berbanding 
                            jumlah penggunaan tenaga tahunan bangunan</span><br>
                    </th>

                </tr>

                <tr align="center">
                    <th>KT11</th>
                    <th>Pengujian dan pentauliahan</th>
                    <th>A</th>
                    <th>1</th>
                    <th></th>
                    <th></th>
                    <th>3</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Pelan pengujian dan pentauliahan</span><br>
                    </th>
                    <th>
                        <span>&#183; Dokumen lengkap pengujian dan pentauliahan yang telah disahkan</span><br>
                    </th>

                </tr>

                <tr align="center">
                    <th colspan="3">Jumlah markah KT</th>
                    <th>24</th>
                    <th>0</th>
                    <th>0</th>
                    <th>26</th>
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