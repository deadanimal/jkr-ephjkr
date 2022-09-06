@extends('layouts.base')

<!--Style-->
<style>
th {
    border-top: 1px solid #F4A258;
    border-bottom: 1px solid #F4A258;
    border-right: 1px solid #F4A258;
    color: #fff;
    text-align: center;
    border-left: 1px solid #F4A258;
  }

thead {
    background-color: #EB5500;
}

/* .scrollbar {

    scrollbar-color: auto;
  
      height: 150px;
      width: 200px;
      overflow-y: scroll;
      background-color: lightgreen;
} */



    
   /* th:first-child {
    border-left: 1px solid #F4A258;
    text-align: center;

  } */ 
</style>


@section('content')
<div class="container">
<div class="table-responsive scrollbar">

<table class="table table-bordered line-table display" style="width:100%">
    <thead>
        <tr class="pg-1">
            <th rowspan="3">Kod</th>
            <th rowspan="3">Kriteria</th>
            <th rowspan="3">Kategori Bangunan</th>
            <th colspan="7">Pembangunan Baru</th>
            <th rowspan="2" colspan="2">Dokumen Pembuktian</th>
            <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
        </tr>
        <tr class="pg-1">
            <th colspan="7">Markah</th>      
        </tr>
        <tr class="pg-1">
            <th>MMR</th>
            <th>MS</th>
            <th>MR</th>
            <th>MMV</th>
            <th>MS</th>
            <th>MV</th>
            <th>ML</th>
            <th>Rekabentuk (Peringkat 2)</th>
            <th>Verifikasi (Peringkat 3)</th>
        
        </tr>
        <tr class="pg-1">
            <th>TL</th>
            <th colspan="20">PERANCANGAN & PENGURUSAN TAPAK LESTARI</th>
        </tr>
    </thead>
       
    <tbody>
        <tr class="pg-1">
            {{-- @foreach ($kriteria_phjkr_bangunan as $k) --}}
                
            
            <td>TL1</td>
            <td>Perancangan Tapak</td>
            <td></td>
            {{-- <td>{{$k->jenisKategori}}</td> --}}
            <td>1</td>
            <td></td>
            <td></td>
            <td>0</td>
            <td></td>
            <td></td>
            <td></td>
            <td>Rancangan Tempatan yang menunjukkan kawasan pembangunan yang terlibat</td>
            <td>Tidak Berkenaan</td>
            <td></td>

            {{-- @endforeach --}}
        </tr>
        <tr class="pg-1">
            <td>TL2</td>
            <td>Sistem Pengurusan Alam Sekitar (SPAS)</td>
            <td></td>
            {{-- <td>{{$k->jenisKategori}}</td> --}}
            <td>3</td>
            <td></td>
            <td></td>
            <td>3</td>
            <td></td>
            <td></td>
            <td></td>
            <td><span>&#183; Sijil ISO 14001</span><br>
                <span>&#183; Senarai kuantiti (BQ) kerja-kerja perlindungan alam sekitar</span>
            </td>
            <td>
                <span>&#183; Laporan Pelan Pengurusan Alam Sekitar</span><br>
                <span>&#183; Borang SPAS (Peringkat pembinaan)</span>
            </td>
            <td></td>
        </tr>
        <tr class="pg-1">
            <td rowspan="2">TL3</td>
                    <td>i. Pemotongan dan Penambakan tanah</td>
                    <td rowspan="2">A</td>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <span>&#183; Laporan rekabentuk tanah</span><br>
                        <span>&#183; Lukisan pelan tanah</span><br>
                        <span>&#183; Laporan geoteknikal (jika perlu)</span>
                    </td>
                    <td>
                        <span>&#183; Laporan kuantiti tanah yang diimport atau eksport</span><br>
                        <span>&#183; Bukti bergambar</span><br>
                        <span>&#183; Pengesahan kuantiti tanah potong/tambak sebenar oleh PD/SO 
                            atau setaraf
                        </span>
                    </td>
                    <td></td>
        </tr>
        <tr class="pg-1">
            <td>ii. Mengekalkan Topografi Tanah</td>
                    {{-- <th>A</th> --}}
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <span>&#183; Pelan Topografi</span><br>
                        <span>&#183; Laporan geoteknikal</span><br>
                        <span>&#183; Laporan rekabentuk tanah</span><br>
                        <span>&#183; Lukisan pelan kerja tanah</span><br>
                        <span>&#183; Pelan kawalan hakisan kelodak (ESCP)</span>

                    </td>
                    <td>
                        <span>&#183; Bukti bergambar</span><br>
                        <span>&#183; Pengesahan kuantiti tanah potong/tambak sebenar oleh PD/SO atau setaraf</span><br>
                        <span>&#183; Pengesahan pelaksanaan ESCP di tapak</span>
                    </td>
                    <td></td>
        </tr>
        <tr class="pg-1">
            <td>TL4</td>
                    <td>Pelan Kawalan Hakisan & Kelodak (ESCP)</td>
                    <td>A</td>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <span>&#183; Pelan Kawalan Hakisan & Kelodak (ESCP)</span><br>
                    </td>
                    <td>
                        <span>&#183; Pengesahan pelaksanaan ESCP di tapak</span><br>
                    </td>
                    <td></td>
        </tr>
        <tr class="pg-1">
            <td>TL5</td>
                    <td>Pemuliharaan dan Pemeliharaan Cerun</td>
                    <td>A</td>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <span>&#183; Laporan penyenggaraan cerun</span><br>
                    </td>
                    <td>
                        <span>Tidak Berkenaan</span><br>
                    </td>
                    <td></td>
        </tr>

        <tr class="pg-1">
            <td>TL6</td>
                    <td>Pengurusan Air Larian Hujan</td>
                    <td>A</td>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <span>&#183; Laporan rekabentuk sistem perparitan</span><br>
                        <span>&#183; Pelan sistem perparitan berdasarkan MSMA</span><br>
                    </td>
                    <td>
                        <span> &#40;a&#41; Baru</span><br>
                        <span>&#183; Laporan sistem perparitan</span><br>
                        <span>&#183; Bukti bergambar</span><br>
                        <span> &#40;b&#41; Sedia ada</span><br>
                        <span>&#183; Laporan penyenggaraan sistem perparitan berkala</span><br>
                        <span>&#183; Bukti bergambar</span><br>
                    </td>
                    <td></td>
        </tr>
    
        <tr class="pg-1">
            <td>TL8</td>
                    <td>Landskap strategik</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
        </tr>
        <tr class="pg-1">
            <td>TL8.1</td>
                    <td>Memelihara dan menyenggara pokok yang matang</td>
                    <td>A</td>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <span>&#183; Inventori pokok</span><br>
                        <span>&#183; Pelan ukur bagi lokasi pokok matang sedia ada</span><br>
                        <span>&#183; Pelan penanaman pokok</span><br>
                    </td>
                    <td>
                        <span> &#40;a&#41; Lukisan siap bina landskap</span><br>
                        <span>&#183; Bukti bergambar pokok tidak ditebang dan disenggara dengan baik</span><br>
                    </td>
                    <td></td>
        </tr>
        <tr class="pg-1">
            <td>TL8.2</td>
                            <td>Menyediakan kawasan hijau</td>
                            <td>A</td>                            
                            <td>3</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span>Laporan cadangan menunjukkan:</span><br>
                                <span>&#183; 30% kawasan hijau (disahkan oleh arkitek atau jururancang bertauliah)</span><br>
                                <span>&#183; Pokok, pokok renek, tumbuhan penutup bumi, rumput</span><br>
                            </td>
                            <td>
                                <span> &#40;a&#41; Pelan tapak siap bina yang telah disahkan oleh Arkitek Bertauliah</span><br>
                                Nyatakan sekiranya ada perubahan
                            </td>
                            <td></td>
        </tr>
        <tr class="pg-1">
            <td>TL8.3</td>
            <td>Menyedia dan menyenggara penanaman pokok teduhan</td>
            <td></td>                            
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Penyediaan pelan landskap</span><br>
                <span>&#183; Jadual spesis pokok</span><br>
                <span>&#183; Anggaran bayang-bayang pokok atau struktur selain bangunan</span><br>
            </td>
            <td>
                <span> &#183; Pelan landskap siap bina</span><br>
                <span> &#183; Inventori pokok</span><br>
                <span> &#183; Bukti bergambar</span><br>
            </td>
            <td></td>
        </tr>
        <tr class="pg-1">
            <td>TL8.4</td>
            <td>Pemilihan bahan binaan siarkaki (walkway) yang mempunyai daya pantulan
                                haba yang tinggi
            </td>
            <td></td>                            
            <td><td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Lukisan terperinci dengan spesifikasi</span><br>
                <span>&#183; Katalog berserta jadual SRI bahan siarkaki</span><br>
            </td>
            <td>
                <span> &#183; Bukti bergambar</span><br>
            </td>
            <td></td>
        </tr>
        <tr class="pg-1">
            <td>TL8.5</td>
                            <td>Menyedia dan menyenggara sistem turapan berumput</td>
                            <td>                              </td>                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span>&#183; Lukisan butiran dan spesifikasi sistem turapan</span><br>
                                <span>&#183; Lukisan susun atur tapak pembangunan</span><br>
                                <span>&#183; Pengiraan luas zon turapan</span><br>

                            </td>
                            <td>
                                <span> &#183; Lukisan siap bina</span><br>
                                <span> &#183; Bukti bergambar</span><br>
                            </td>
                            <td></td>
        </tr>
        <tr class="pg-1">
            <td>TL9</td>
                            <td>Bumbung Hijau & Dinding Hijau</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
        </tr>
        <tr class="pg-1">
            <td>TL9.1</td>
            <td>Indeks Pantulan Suria (SRI) mengikut jenis & kecerunan bumbung
            </td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Katalog berserta jadual SRI bumbung</span><br>
                <span>&#183; Pengiraan keluasan bumbung</span><br>
            </td>
            <td>
                <span>&#183; Method statement yang telah disahkan oleh
                                    pegawai penguasa (SO)</span><br>
                <span>&#183; Bukti bergambar</span><br>
                <span>&#183; Lukisan siap bina</span><br>
            </td> 
            <td></td> 

        </tr>
        <tr class="pg-1">
            <td>TL9.2</td>
                            <td>Menggalakkan rekabentuk bumbung/dinding hijau
                            </td>
                            <td>A</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span>&#183; Pelan konsep rekabentuk</span><br>
                                <span>&#183; Jadual keluasan kawasan bumbung</span><br>
                                <span>&#183; Lukisan butiran dan jadual penanaman</span><br>
                                <span>&#183; Pengiraan</span><br>

                            </td>
                            <td>
                                <span>&#183; Bukti bergambar</span><br>
                                <span>&#183; Lukisan siap bina</span><br>
                                <span>&#183; Rekod Senggaraan</span><br>

                            </td>
                            <td></td>

        </tr>   
        <!--JUMLAH MARKAHTL-->
        <tr class="pg-1">
            <td colspan="3">Jumlah markah TL</td>
            <td>1</td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td></td>
        </tr> 
    </tbody>

<!---------------------------------------MARKAHKT---------------------------------->

    <thead>
        <tr class="pg-2">
            <th rowspan="3" style="border-color: #F4A258">Kod</th>
            <th rowspan="3" style="border-color: #F4A258">Kriteria</th>
            <th rowspan="3" style="border-color: #F4A258">Kategori Bangunan</th>
            <th colspan="7" >Pembangunan Baru</th>
            <th rowspan="2" colspan="2">Dokumen Pembuktian</th>
            <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
        </tr class="pg-2">
        <tr class="pg-2">
            <th colspan="7">Markah</th>      
        </tr>
        <tr class="pg-2">
            <th>MMR</th>
            <th>MS</th>
            <th>MR</th>
            <th>MMV</th>
            <th>MS</th>
            <th>MV</th>
            <th>ML</th>
            <th>Rekabentuk (Peringkat 2)</th>
            <th>Verifikasi (Peringkat 3)</th>
        
        </tr>
        <tr class="pg-2">
            <th>KT</th>
            <th colspan="20">PENGURUSAN KECEKAPAN TENAGA DAN PENGGUNAAN TENAGA BOLEH BAHARU</th>
        </tr>
    </thead>

    <tr class="pg-2">
        <td>KT1</td>
        <td>Rekabentuk bumbung</td>
        <td>A</td> 
        <td></td>
        <td></td>
        <td></td>
        <td><td>
        <td></td>
        <td></td>
        <td>
            <span>&#183; Katalog spesifikasi U-Value bahan</span><br>
            <span>&#183; Pengiraan U-Value bagi rekabentuk bumbung</span><br>
        </td>
        <td>
            <span>&#183; Katalog bahan dan sampel yang diluluskan</span><br>
            <span>&#183; Lukisan siap bina</span><br>
            <span>&#183; Bukti bergambar</span><br>
        </td> 
        <td></td>
    </tr> 

    <tr class="pg-2">
        <td>KT2</td>
            <td>Orientasi bangunan</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Katalog spesifikasi U-Value bahan</span><br>
                <span>&#183; Pengiraan U-Value bagi rekabentuk bumbung</span><br>
            </td>
            <td>
                <span>&#183; Katalog bahan dan sampel yang diluluskan</span><br>
                <span>&#183; Lukisan siap bina</span><br>
                <span>&#183; Bukti bergambar</span><br>
            </td> 
            <td></td>
    </tr>
    
    <tr class="pg-2">
        <td>KT2.1</td>
            <td>Fasad Utama bangunan yang menghadap orientasi utara-selatan</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Pelan tapak berserta penunjuk arah utara
                    menunjukkan pelan bangunan dengan meletakkan sun-path diagram</span><br>
                <span>&#183; Lukisan siap bina</span><br>
            </td>
            <td>
                <span>&#183; Bukti bergambar</span><br>
            </td> 
            <td></td>
    </tr>
    
    <tr class="pg-2">
        <td>KT2.2</td>
            <td>Meminimumkan bukaan pada fasad yang menghadap timur dan barat</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Laporan penyenggaraan cerun</span><br>
            </td>
            <td>
                <span>Tidak Berkenaan</span><br>
            </td> 
            <td></td>
    </tr>
    
    <tr class="pg-2">
        <td>KT3</td>
            <td>Rekabentuk fasad</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Katalog spesifikasi U-Value bahan</span><br>
                <span>&#183; Pengiraan U-Value bagi rekabentuk bumbung</span><br>
            </td>
            <td>
                <span>&#183; Katalog bahan dan sampel yang diluluskan</span><br>
                <span>&#183; Lukisan siap bina</span><br>
                <span>&#183; Bukti bergambar</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-2">
        <td>KT3.1</td>
            <td>Dinding luar bangunan</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Katalog spesifikasi U-Value bahan</span><br>
                <span>&#183; Pengiraan U-Value bagi rekabentuk dinding</span><br>
            </td>
            <td>
                <span>&#183; Katalog bahan yang diluluskan untuk pembinaan</span><br>
                <span>&#183; Pengiraan U-Value yang disahkan</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-2">
        <td>KT3.2</td>
            <td>Pengadang Suria Luaran</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Katalog bahan</span><br>
            </td>
            <td>
                <span>&#183; Bukti bergambar</span><br>
                <span>&#183; Lukisan siap bina</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-2">
        <td>KT4</td>
            <td>OTTV & RTTV</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Pengiraan OTTV dan RTTV yang disahkan</span><br>
            </td>
            <td>
                <span>&#183; Pengiraan OTTV dan RTTV yang disahkan</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-2">
        <td>KT5</td>
            <td>Kecekapan pencahayaan</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Katalog spesifikasi U-Value bahan</span><br>
                <span>&#183; Pengiraan U-Value bagi rekabentuk bumbung</span><br>
            </td>
            <td>
                <span>&#183; Katalog bahan dan sampel yang diluluskan</span><br>
                <span>&#183; Lukisan siap bina</span><br>
                <span>&#183; Bukti bergambar</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-2">
        <td>KT5.2</td>
            <td>Kawalan Pencahayaan</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
            </td>
            <td>
                <span> &#183; Lukisan siap bina yang menunjukkan lokasi suis</span><br>
                <span> &#183; Bukti bergambar</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-2">
        <td>KT8</td>
            <td>Tenaga Boleh Baharu (TBB)</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Mengemukakan lukisan rekabentuk sistem dan simulasi pengiraan
                    bagi anggaran tenaga baharu yang boleh dihasilkan oleh sistem tersebut</span><br>
            </td>
            <td>
                <span> &#183; Salinan lukisan siap bina dan laporan uji terima yang mematuhi kehendak rekabentuk</span><br>
                <span> &#183; Pengiraan penjanaan tenaga boleh baharu berbanding jumlah penggunaan tenaga tahunan bangunan</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-2">
        <td>KT11</td>
            <td>Pengujian dan pentauliahan</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Pelan pengujian dan pentauliahan</span><br>
            </td>
            <td>
                <span>&#183; Dokumen lengkap pengujian dan pentauliahan yang telah disahkan</span><br>
            </td> 
            <td></td>
    </tr>

    <!--JUMLAH MARKAHKT-->
    <tr class="pg-2">
        <td colspan="3">Jumlah markah KT</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td></td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td></td>
        <td></td>
    </tr> 
</tbody>





<!---------------------------------------MARKAHSB---------------------------------->
    <thead>
        <tr class="pg-3">
            <th rowspan="3" style="border-color: #F4A258">Kod</th>
            <th rowspan="3" style="border-color: #F4A258">Kriteria</th>
            <th rowspan="3" style="border-color: #F4A258">Kategori Bangunan</th>
            <th colspan="7" >Pembangunan Baru</th>
            <th rowspan="2" colspan="2">Dokumen Pembuktian</th>
            <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
        </tr class="pg-3">
        <tr class="pg-3">
            <th colspan="7">Markah</th>      
        </tr>
        <tr class="pg-3">
            <th>MMR</th>
            <th>MS</th>
            <th>MR</th>
            <th>MMV</th>
            <th>MS</th>
            <th>MV</th>
            <th>ML</th>
            <th>Rekabentuk (Peringkat 2)</th>
            <th>Verifikasi (Peringkat 3)</th>
        
        </tr>
        <tr class="pg-3">
            <th>SB</th>
            <th colspan="20">PENGURUSAN SUMBER DAN BAHAN</th>
        </tr>
    </thead>

    <tr class="pg-3">
        <td>SB1</td>
            <td>Sistem Binaan Berindustri (IBS)</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Cadangan sistem IBS oleh pembekal IBS berdaftar</span><br>
                <span>&#183; Laporan Pengiraan Skor IBS</span><br>
            </td>
            <td>
                <span>&#183; Lukisan pembinaan IBS</span><br>
                <span>&#183; Lukisan siap bina</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-3">
        <td>SB2</td>
            <td>Produk hijau</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Sijil Pengesahan produk hijau</span><br>
                <span>&#183; spesifikasi produk</span><br>
                <span>&#183; Senarai permarkahan produk hijau berdasarkan GPSS</span><br>                    
            </td>
            <td>
                <span>&#183; Brosur pembekal</span><br>
                <span>&#183; Bukti bergambar</span><br>
                <span>&#183; Borang pengiraan skor GPSS</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-3">
        <td>SB3</td>
            <td>Pengurusan sisa semasa pembinaan</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Pelan pengurusan sisa yang meliputi Buangan Terjadual
                    dan Sisa Bahan Binaan</span><br>
                <span>&#183; Lukisan yang menunjukkan ruang pengurusan sisa</span><br>
                <span>&#183; Pelan tapak dengan kawasan simpanan sementara</span><br>
            </td>
            <td>
                <span>&#183; Dokumen bukti proses penyimpanan</span><br>
                <span>&#183; Dokumen bukti proses penghantaran ke tapak pelupusan</span><br>
                <span>&#183; Dokumen bukti proses pelupusan sisa berjadual seperti resit
                    dan borang semasa audit dijalankan
                </span><br>
                <span>&#183; Bukti bergambar</span><br>
                <span>&#183; Pengiraan kitar semula (jika ada)</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-3">
        <td>SB4</td>
            <td>3r-Semasa Operasi</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Pelan pengurusan sisa domestik</span><br>
                <span>&#183; Pelan kedudukan tong 3Rdi semua aras bangunan</span><br>
                <span>&#183; Lokasi kebuk sampah</span><br>                    
            </td>
            <td>
                <span>&#183; Pematuhan pelan pengurusan sisa domestik</span><br>
                <span>&#183; Bukti bergambar</span><br>
            </td> 
            <td></td>
    </tr>

    <!--JUMLAH MARKAHSB-->
    <tr class="pg-3">
        <td colspan="3">Jumlah markah SB</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td></td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td></td>
        <td></td>
    </tr> 


<!---------------------------------------MARKAHPA---------------------------------->
<thead>
    <tr class="pg-4">
        <th rowspan="3" style="border-color: #F4A258">Kod</th>
        <th rowspan="3" style="border-color: #F4A258">Kriteria</th>
        <th rowspan="3" style="border-color: #F4A258">Kategori Bangunan</th>
        <th colspan="7" >Pembangunan Baru</th>
        <th rowspan="2" colspan="2">Dokumen Pembuktian</th>
        <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
    </tr class="pg-4">
    <tr class="pg-4">
        <th colspan="7">Markah</th>      
    </tr>
    <tr class="pg-4">
        <th>MMR</th>
        <th>MS</th>
        <th>MR</th>
        <th>MMV</th>
        <th>MS</th>
        <th>MV</th>
        <th>ML</th>
        <th>Rekabentuk (Peringkat 2)</th>
        <th>Verifikasi (Peringkat 3)</th>
    
    </tr>
    <tr class="pg-4">
        <th>PA</th>
        <th colspan="20">PENGURUSAN KECEKAPAN PENGGUNAAN AIR</th>
    </tr>
</thead>

    <tr class="pg-4">
        <td>PA1</td>
            <td>Produk Kecekapan Air</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Katalog bahan dan sampai yang telah disahkan WELPS dan SPAN</span><br>
                <span>&#183; Pengiraan penjimatan</span><br>
            </td>
            <td>
                <span>&#183; Bukti bergambar</span><br>
                <span>&#183; Pensijilan WELPS</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-4">
        <td>PA2</td>
            <td>Penjimatan Penggunaan Air Dalam Bangunan</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Katalog bahan dan sampai yang telah disahkan WELPS dan SPAN</span><br>
                <span>&#183; Pengiraan</span><br>
            </td>
            <td>
                <span>&#183; Bukti bergambar</span><br>
                <span>&#183; Pensijilan WELPS</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-4">
        <td rowspan="2">PA3</td>
            <td>Rekabentuk bumbung</td>
            <td>i. SPAH</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Katalog bahan dan sampai yang telah disahkan WELPS dan SPAN</span><br>
                <span>&#183; Pengiraan</span><br>
            </td>
            <td>
                <span>&#183; Bukti bergambar</span><br>
                <span>&#183; Pensijilan WELPS</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-4">
        {{-- <td>PA3</td> --}}
            <td>ii. Kitar Semula Air Sisa</td>
            <td></td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Laporan rekabentuk dan pengiraan SPAH atau
                    sistem kitar semula air sisa</span><br>
                <span>&#183; Lukisan SPAH atau lukisan sistem kitar semula air sisa</span><br>
                <span>&#183; Bil air domestik</span><br>
            </td>
            <td>
                <span>&#183; Laporan pengujian sistem</span><br>
                <span>&#183; Bukti bergambar</span><br>
                <span>&#183; Lukisan siap bina</span><br>
            </td> 
            <td></td>
    </tr>

    <!--JUMLAH MARKAHPA-->
    <tr class="pg-4">
        <td colspan="3">Jumlah markah PA</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td></td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td></td>
        <td></td>
    </tr> 






<!---------------------------------------MARKAHPD---------------------------------->
<thead>
    <tr class="pg-5">
        <th rowspan="3" style="border-color: #F4A258">Kod</th>
        <th rowspan="3" style="border-color: #F4A258">Kriteria</th>
        <th rowspan="3" style="border-color: #F4A258">Kategori Bangunan</th>
        <th colspan="7" >Pembangunan Baru</th>
        <th rowspan="2" colspan="2">Dokumen Pembuktian</th>
        <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
    </tr class="pg-5">
    <tr class="pg-5">
        <th colspan="7">Markah</th>      
    </tr>
    <tr class="pg-5">
        <th>MMR</th>
        <th>MS</th>
        <th>MR</th>
        <th>MMV</th>
        <th>MS</th>
        <th>MV</th>
        <th>ML</th>
        <th>Rekabentuk (Peringkat 2)</th>
        <th>Verifikasi (Peringkat 3)</th>
    
    </tr>
    <tr class="pg-5">
        <th>PD</th>
        <th colspan="20">PENGURUSAN KUALITI PERSEKITARAN DALAMAN</th>
    </tr>
</thead>

    <tr class="pg-5">
        <td>PD2</td>
            <td>Perancangan ruang</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Katalog spesifikasi U-Value bahan</span><br>
                <span>&#183; Pengiraan U-Value bagi rekabentuk bumbung</span><br>
            </td>
            <td>
                <span>&#183; Katalog bahan dan sampel yang diluluskan</span><br>
                <span>&#183; Lukisan siap bina</span><br>
                <span>&#183; Bukti bergambar</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-5">
        <td>PD2.4</td>
            <td>Ketinggian siling yang efektif</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Lukisan keratan bangunan yang menunjukkan
                    ukuran (lantai ke siling)</span><br>            
            </td>
            <td>
                <span>&#183; Lukisan siap bina</span><br>            
            </td> 
            <td></td>
    </tr>

    <tr class="pg-5">
        <td>PD2.5</td>
            <td>Warna cerah di permukaan dinding dan siling</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Katalog dan sampel menunjukkan warna yang dicadangkan</span><br>
            </td>
            <td>
                <span>&#183; Bukti bergambar bagi mengesahkan skima warna yang digunakan</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-5">
        <td>PD3</td>
            <td>Kualiti Visual</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
            </td>
            <td>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-5">
        <td>PD3.1</td>
            <td>Faktor Pencahayaan Siang (DF)</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Lukisan tampak dan jadual tingkap</span><br>
                <span>&#183; Pengiraan keluasan lantai yang menunjukkan
                    30% daripada NLA yang menunjukkan nilai DF 1.0% - 3.5%</span><br>
                <span>&#183; Laporan simulasi (jika ada)</span><br>
            </td>
            <td>
                <span>&#183; Lukisan siap bina</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-5">
        <td>PD3.2</td>
            <td>Menggunakan rak cahaya (light shelves)</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Rekabentuk rak cahaya</span><br>
                <span>&#183; Lukisan terperinci</span><br>
                <span>&#183; Laporan simulasi, jika ada</span><br>
            </td>
            <td>
                <span>&#183; Lukisan pemasangan</span><br>
                <span>&#183; Lukisan siap bina</span><br>
                <span>&#183; Bukti bergambar</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-5">
        <td>PD3.3</td>
            <td>Kawalan Tahap Kesilauan</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Katalog dan sampel menunjukkan bidai yang dicadangkan</span><br>
            </td>
            <td>
                <span>&#183; Lukisan siap bina dan bukti bergambar
                    bagi mengesahkan bidai yang digunakan</span><br>
                <span>&#183; Laporan prestasi pencahayaan (jika ada)</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-5">
        <td>PD3.4</td>
            <td>Akses visual kepada pandangan di luar</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Pelan susuratur</span><br>
                <span>&#183; Rekabentuk awalan yang menunjukkan
                            pembahagian ruang yang bebas halangan binaan kekal</span><br>
                <span>&#183; Lukisan terperinci dinding sesekat berserta spesifikasi</span><br>
            </td>
            <td>
                <span>&#183; Katalog dan sample bahan yang diluluskan oleh S.O.</span><br>
                <span>&#183; Lukisan Siap Bina</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-5">
        <td>PD8</td>
            <td>Kualiti Udara Dalaman (IAQ)</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Katalog dan sijil pengesahan penarafan eco-label bahan</span><br>
                <span>&#183; Spesifikasi teknikal pembekal</span><br>
            </td>
            <td>
                <span>&#183; Katalog dan kaedah pemasangan (method statement) yang telah
                    disahkan oleh Pegawai yang kompeten</span><br>
                <span>&#183; Gambar semasa kerja pemasangan</span><br>
                <span>&#183; Lukisan siap bina</span><br>
            </td> 
            <td></td>
    </tr>

    <tr class="pg-5">
        <td>PD10</td>
            <td>Kaji Selidik Keselesaan Penghuni</td>
            <td>A</td> 
            <td></td>
            <td></td>
            <td></td>
            <td><td>
            <td></td>
            <td></td>
            <td>
                <span>&#183; Tidak berkaitan (TB)</span></th>
            </td>
            <td>
                <span>&#183; Laporan maklumbalas kaji selidik</span><br>
            </td> 
            <td></td>
    </tr>

    <!--JUMLAH MARKAHPD-->
    <tr class="pg-5">
        <td colspan="3">Jumlah markah PD</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td></td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td></td>
        <td></td>
    </tr> 

<!---------------------------------------MARKAHIN---------------------------------->
<thead>
    <tr class="pg-6">
        <th rowspan="3" style="border-color: #F4A258">Kod</th>
        <th rowspan="3" style="border-color: #F4A258">Kriteria</th>
        <th rowspan="3" style="border-color: #F4A258">Kategori Bangunan</th>
        <th colspan="7" >Pembangunan Baru</th>
        <th rowspan="2" colspan="2">Dokumen Pembuktian</th>
        <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
    </tr class="pg-6">
    <tr class="pg-6">
        <th colspan="7">Markah</th>      
    </tr>
    <tr class="pg-6">
        <th>MMR</th>
        <th>MS</th>
        <th>MR</th>
        <th>MMV</th>
        <th>MS</th>
        <th>MV</th>
        <th>ML</th>
        <th>Rekabentuk (Peringkat 2)</th>
        <th>Verifikasi (Peringkat 3)</th>
    
    </tr>
    <tr class="pg-6">
        <th>IN</th>
        <th colspan="20">INOVASI DALAM REKABENTUK</th>
    </tr>
</thead>

<tr class="pg-6">
    <td>IN1</td>
        <td>Reka Bentuk Inovasi</td>
        <td>A</td> 
        <td></td>
        <td></td>
        <td></td>
        <td><td>
        <td></td>
        <td></td>
        <td>
            <span>&#183; Laporan cadangan inovasi</span><br>
            <span>&#183; Laporan kajian Return of Investment</span><br>
        </td>
        <td>
            <span>&#183; Lukisan siap bina dan bukti bergambar</span><br>
            <span>&#183; Laporan prestasi inovasi</span><br>
        </td> 
        <td></td>
</tr>

 <!--JUMLAH MARKAHIN-->
 <tr class="pg-6">
    <td colspan="3">Jumlah markah IN</td>
    <td>1</td>
    <td>0</td>
    <td>0</td>
    <td></td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td></td>
    <td></td>
</tr> 

<!---------------------------------------MARKAHFL---------------------------------->
<thead>
    <tr class="pg-7">
        <th rowspan="3" style="border-color: #F4A258">Kod</th>
        <th rowspan="3" style="border-color: #F4A258">Kriteria</th>
        <th rowspan="3" style="border-color: #F4A258">Kategori Bangunan</th>
        <th colspan="7" >Pembangunan Baru</th>
        <th rowspan="2" colspan="2">Dokumen Pembuktian</th>
        <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
    </tr class="pg-7">
    <tr class="pg-7">
        <th colspan="7">Markah</th>      
    </tr>
    <tr class="pg-7">
        <th>MMR</th>
        <th>MS</th>
        <th>MR</th>
        <th>MMV</th>
        <th>MS</th>
        <th>MV</th>
        <th>ML</th>
        <th>Rekabentuk (Peringkat 2)</th>
        <th>Verifikasi (Peringkat 3)</th>
    
    </tr>
    <tr class="pg-7">
        <th>FL</th>
        <th colspan="20">INOVASI DALAM REKABENTUK</th>
    </tr>
</thead>

<tr class="pg-7">
    <td>FL1</td>
        <td>Reka Bentuk Inovasi</td>
        <td>A</td> 
        <td></td>
        <td></td>
        <td></td>
        <td><td>
        <td></td>
        <td></td>
        <td>
            <span>&#183; Laporan cadangan inovasi</span><br>
            <span>&#183; Laporan kajian Return of Investment</span><br>
        </td>
        <td>
            <span>&#183; Lukisan siap bina dan bukti bergambar</span><br>
            <span>&#183; Laporan prestasi inovasi</span><br>
        </td> 
        <td></td>
</tr>

<tr class="pg-7">
    <td>FL2</td>
        <td>Reka Bentuk Inovasi</td>
        <td>A</td> 
        <td></td>
        <td></td>
        <td></td>
        <td><td>
        <td></td>
        <td></td>
        <td>
            <span>&#183; Laporan cadangan inovasi</span><br>
            <span>&#183; Laporan kajian Return of Investment</span><br>
        </td>
        <td>
            <span>&#183; Lukisan siap bina dan bukti bergambar</span><br>
            <span>&#183; Laporan prestasi inovasi</span><br>
        </td> 
        <td></td>
</tr>

<tr class="pg-7">
    <td>FL2.1</td>
        <td>Reka Bentuk Inovasi</td>
        <td>A</td> 
        <td></td>
        <td></td>
        <td></td>
        <td><td>
        <td></td>
        <td></td>
        <td>
            <span>&#183; Laporan cadangan inovasi</span><br>
            <span>&#183; Laporan kajian Return of Investment</span><br>
        </td>
        <td>
            <span>&#183; Lukisan siap bina dan bukti bergambar</span><br>
            <span>&#183; Laporan prestasi inovasi</span><br>
        </td> 
        <td></td>
</tr>

<tr class="pg-7">
    <td>FL2.2</td>
        <td>Reka Bentuk Inovasi</td>
        <td>A</td> 
        <td></td>
        <td></td>
        <td></td>
        <td><td>
        <td></td>
        <td></td>
        <td>
            <span>&#183; Laporan cadangan inovasi</span><br>
            <span>&#183; Laporan kajian Return of Investment</span><br>
        </td>
        <td>
            <span>&#183; Lukisan siap bina dan bukti bergambar</span><br>
            <span>&#183; Laporan prestasi inovasi</span><br>
        </td> 
        <td></td>
</tr>

<tr class="pg-7">
    <td>FL2.3</td>
        <td>Reka Bentuk Inovasi</td>
        <td>A</td> 
        <td></td>
        <td></td>
        <td></td>
        <td><td>
        <td></td>
        <td></td>
        <td>
            <span>&#183; Laporan cadangan inovasi</span><br>
            <span>&#183; Laporan kajian Return of Investment</span><br>
        </td>
        <td>
            <span>&#183; Lukisan siap bina dan bukti bergambar</span><br>
            <span>&#183; Laporan prestasi inovasi</span><br>
        </td> 
        <td></td>
</tr>

<tr class="pg-7">
    <td>FL3</td>
        <td>Reka Bentuk Inovasi</td>
        <td>A</td> 
        <td></td>
        <td></td>
        <td></td>
        <td><td>
        <td></td>
        <td></td>
        <td>
            <span>&#183; Laporan cadangan inovasi</span><br>
            <span>&#183; Laporan kajian Return of Investment</span><br>
        </td>
        <td>
            <span>&#183; Lukisan siap bina dan bukti bergambar</span><br>
            <span>&#183; Laporan prestasi inovasi</span><br>
        </td> 
        <td></td>
</tr>

<tr class="pg-7">
    <td>FL3.1</td>
        <td>Reka Bentuk Inovasi</td>
        <td>A</td> 
        <td></td>
        <td></td>
        <td></td>
        <td><td>
        <td></td>
        <td></td>
        <td>
            <span>&#183; Laporan cadangan inovasi</span><br>
            <span>&#183; Laporan kajian Return of Investment</span><br>
        </td>
        <td>
            <span>&#183; Lukisan siap bina dan bukti bergambar</span><br>
            <span>&#183; Laporan prestasi inovasi</span><br>
        </td> 
        <td></td>
</tr>

<tr class="pg-7">
    <td>FL3.2</td>
        <td>Reka Bentuk Inovasi</td>
        <td>A</td> 
        <td></td>
        <td></td>
        <td></td>
        <td><td>
        <td></td>
        <td></td>
        <td>
            <span>&#183; Laporan cadangan inovasi</span><br>
            <span>&#183; Laporan kajian Return of Investment</span><br>
        </td>
        <td>
            <span>&#183; Lukisan siap bina dan bukti bergambar</span><br>
            <span>&#183; Laporan prestasi inovasi</span><br>
        </td> 
        <td></td>
</tr>

<tr class="pg-7">
    <td>FL3.3</td>
        <td>Reka Bentuk Inovasi</td>
        <td>A</td> 
        <td></td>
        <td></td>
        <td></td>
        <td><td>
        <td></td>
        <td></td>
        <td>
            <span>&#183; Laporan cadangan inovasi</span><br>
            <span>&#183; Laporan kajian Return of Investment</span><br>
        </td>
        <td>
            <span>&#183; Lukisan siap bina dan bukti bergambar</span><br>
            <span>&#183; Laporan prestasi inovasi</span><br>
        </td> 
        <td></td>
</tr>

<tr class="pg-7">
    <td>FL3.4</td>
        <td>Reka Bentuk Inovasi</td>
        <td>A</td> 
        <td></td>
        <td></td>
        <td></td>
        <td><td>
        <td></td>
        <td></td>
        <td>
            <span>&#183; Laporan cadangan inovasi</span><br>
            <span>&#183; Laporan kajian Return of Investment</span><br>
        </td>
        <td>
            <span>&#183; Lukisan siap bina dan bukti bergambar</span><br>
            <span>&#183; Laporan prestasi inovasi</span><br>
        </td> 
        <td></td>
</tr>

<!--JUMLAH MARKAHFL-->
<tr class="pg-7">
    <td colspan="3">Jumlah markah FL</td>
    <td>1</td>
    <td>0</td>
    <td>0</td>
    <td></td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td></td>
    <td></td>
</tr> 




        </table>

    </div>

    <form action="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian/{id}">
        <div class="mt-3 text-center">
            <button type="submit" class="btn btn-secondary">Tolak</button>
            <button type="submit" class="btn btn-primary">Sah</button>
        </div>
    </form>

</div>
<div class="container mt-10">
    <div class="row">
        <div class="text-center d-inline-flex">
            <button class="btn btn-primary btn-sm" onclick="button1()">1</button>
            <button class="btn btn-primary btn-sm" onclick="button2()">2</button>
            <button class="btn btn-primary btn-sm" onclick="button3()">3</button>
            <button class="btn btn-primary btn-sm" onclick="button4()">4</button>
            <button class="btn btn-primary btn-sm" onclick="button5()">5</button>
            <button class="btn btn-primary btn-sm" onclick="button6()">6</button>
            <button class="btn btn-primary btn-sm" onclick="button7()">7</button>
        </div>
    </div>
</div>
<!--JavaScript-->


<script>
    $(document).ready(function () {
        $('.pg-2').hide();
        $('.pg-3').hide();
        $('.pg-4').hide();
        $('.pg-5').hide();
        $('.pg-6').hide();
        $('.pg-7').hide();
    });

    function button1() {
        $('.pg-1').show();
        $('.pg-2').hide();
        $('.pg-3').hide();
        $('.pg-4').hide();
        $('.pg-5').hide();
        $('.pg-6').hide();
        $('.pg-7').hide();


    }
    function button2() {
        $('.pg-2').show();
        $('.pg-1').hide();
        $('.pg-3').hide();
        $('.pg-4').hide();
        $('.pg-5').hide();
        $('.pg-6').hide();
        $('.pg-7').hide();
    }
    function button3() {
        $('.pg-3').show();
        $('.pg-1').hide();
        $('.pg-2').hide();
        $('.pg-4').hide();
        $('.pg-5').hide();
        $('.pg-6').hide();
        $('.pg-7').hide();
    }
    function button4() {
        $('.pg-4').show();
        $('.pg-1').hide();
        $('.pg-2').hide();
        $('.pg-3').hide();
        $('.pg-5').hide();
        $('.pg-6').hide();
        $('.pg-7').hide();
    }
    function button5() {
        $('.pg-5').show();
        $('.pg-1').hide();
        $('.pg-2').hide();
        $('.pg-3').hide();
        $('.pg-4').hide();
        $('.pg-6').hide();
        $('.pg-7').hide();
    }
    function button6() {
        $('.pg-6').show();
        $('.pg-1').hide();
        $('.pg-2').hide();
        $('.pg-3').hide();
        $('.pg-4').hide();
        $('.pg-5').hide();
        $('.pg-7').hide();
    }
    function button7() {
        $('.pg-7').show();
        $('.pg-1').hide();
        $('.pg-2').hide();
        $('.pg-3').hide();
        $('.pg-4').hide();
        $('.pg-5').hide();
        $('.pg-6').hide();
    }

</script>
@endsection