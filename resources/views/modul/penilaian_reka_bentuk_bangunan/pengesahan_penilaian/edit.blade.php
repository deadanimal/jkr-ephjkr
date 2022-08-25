@extends('layouts.base')

<!--Style-->
<style>
th {
    border-top: 1px solid #F4A258;
    border-bottom: 1px solid #F4A258;
    border-right: 1px solid #F4A258;
    background-color: #EB5500;
    color: #000;
    text-align: center;
    border-left: 1px solid #F4A258;
    


  }

    
  {{-- /* th:first-child {
    border-left: 1px solid #F4A258;
    text-align: center;

  } */ --}}
</style>


@section('content')
<div class="container">
<div class="table-responsive scrollbar">

<table class="table table-bordered line-table display" style="width:100%">
    <thead>
        <tr class="pg-1">
            <th rowspan="3" style="border-color: #F4A258">Kod</th>
            <th rowspan="3" style="border-color: #F4A258">Kriteria</th>
            <th rowspan="3" style="border-color: #F4A258">Kategori Bangunan</th>
            <th colspan="7" >Pembangunan Baru</th>
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
            @foreach ($kriteria_phjkr_bangunan as $k)
                
            
            <td>TL1</td>
            <td>Perancangan Tapak</td>
            <td>{{$k->jenisKategori}}</td>
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

            @endforeach
        </tr>
        <tr class="pg-1">
            <td>TL2</td>
            <td>Sistem Pengurusan Alam Sekitar (SPAS)</td>
            <td>{{$k->jenisKategori}}</td>
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
        <!--JUMLAH MARKAHKT-->
        <tr class="pg-1">
            <th colspan="3">Jumlah markah KT</th>
            <th colspan="2">1</th>
            <th colspan="2">0</th>
            <th colspan="2">0</th>
            <th colspan="2"></th>
            <th colspan="2">0</th>
            <th colspan="2">0</th>
            <th colspan="2">0</th>
            <th colspan="4"></th>
            <th colspan="3"></th>
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


</table>

</div>


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