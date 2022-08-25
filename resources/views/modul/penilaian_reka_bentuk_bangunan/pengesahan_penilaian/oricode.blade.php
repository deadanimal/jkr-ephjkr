@extends('layouts.base')
<link rel="stylesheet" href="/cssfile/pengesahan_penilaian_style.css">

<!--Style-->
<style>
/* .custom-button {
    padding: 10px;
    color: white;
    background-color: #009578;
    border: 1px solid #000;
    border-radius: 5px;
    cursor: pointer;
  } */
  
  /* .custom-button:hover {
    background-color: #00b28f;
  } */
  
  .custom-text {
    margin-left: 10px;
    font-family: sans-serif;
    color: #aaa;
  }
</style>
  

@section('content')
<body>
      <!--MarkahTL-->

    <!--TO ENABLE SCROLLBAR AT TABLES-->
    <div class="table-responsive scrollbar">
        <table class="table table-bordered line-table">
            <form action="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian/{id}">
                @csrf

                    <thead class="text-white">
                        <tr align="center" style="background-color:#EB5500">
                            <th rowspan="3">Kod</th>
                            <th rowspan="3">Kriteria</th>
                            <th rowspan="3">Kategori bangunan</th>
                            <th colspan="7">Pembangunan Baru</th>
                            {{-- <th>Markah</th> --}}
                            <th rowspan="2" colspan="4">Dokumen Pembuktian</th>
                            <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
                        </tr>

                        <tr align="center" style="background-color:#EB5500">
                            <th colspan="7">Markah</th>
                        </tr>
            
                        <tr align="center" style="background-color:#EB5500">
                            {{-- <th>TL</th> --}}
                            {{-- <th>Kriteria</th> --}}
                            {{-- <th>Kategori Bangunan</th> --}}
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
                            <th>TL</th>
                            <th colspan="14">PERANCANGAN & PENGURUSAN TAPAK LESTARI</th>
                        </tr>
                    </thead>

                    <tr align="center">
                        <th>TL1</th>
                        <th>Perancangan Tapak</th>
                        <th>A</th>
                        <th>1</th>
                        <th></th>
                        <th></th>
                        <th>0</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th colspan="4">Rancangan Tempatan yang menunjukkan kawasan pembangunan yang terlibat</th>
                        <th>Tidak Berkenaan</th>
                        
                    </tr>

                        <tr align="center">
                            <th>TL2</th>
                            <th>Sistem Pengurusan Alam Sekitar (SPAS)</th>
                            <th>A</th>
                            <th>3</th>
                            <th></th>
                            <th></th>
                            <th>3</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th colspan="4"><span>&#183; Sijil ISO 14001</span><br>
                                <span>&#183; Senarai kuantiti (BQ) kerja-kerja perlindungan alam sekitar</span>
                            </th>
                            <th>
                                <span>&#183; Laporan Pelan Pengurusan Alam Sekitar</span><br>
                                <span>&#183; Borang SPAS (Peringkat pembinaan)</span>
                            </th>
                            

                        </tr>
                <tr align="center">
                    <th rowspan="2">TL3</th>
                    <th>i. Pemotongan dan Penambakan tanah</th>
                    <th rowspan="2">A</th>
                    <th>3</th>
                    <th></th>
                    <th></th>
                    <th>3</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Laporan rekabentuk tanah</span><br>
                        <span>&#183; Lukisan pelan tanah</span><br>
                        <span>&#183; Laporan geoteknikal (jika perlu)</span>
                    </th>
                    <th>
                        <span>&#183; Laporan kuantiti tanah yang diimport atau eksport</span><br>
                        <span>&#183; Bukti bergambar</span><br>
                        <span>&#183; Pengesahan kuantiti tanah potong/tambak sebenar oleh PD/SO 
                            atau setaraf
                        </span>
                    </th>
                
                </tr>

                <tr align="center">
                    <th>ii. Mengekalkan Topografi Tanah</th>
                    {{-- <th>A</th> --}}
                    <th>2</th>
                    <th></th>
                    <th></th>
                    <th>2</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Pelan Topografi</span><br>
                        <span>&#183; Laporan geoteknikal</span><br>
                        <span>&#183; Laporan rekabentuk tanah</span><br>
                        <span>&#183; Lukisan pelan kerja tanah</span><br>
                        <span>&#183; Pelan kawalan hakisan kelodak (ESCP)</span>

                    </th>
                    <th>
                        <span>&#183; Bukti bergambar</span><br>
                        <span>&#183; Pengesahan kuantiti tanah potong/tambak sebenar oleh PD/SO atau setaraf</span><br>
                        <span>&#183; Pengesahan pelaksanaan ESCP di tapak</span>
                    </th>
                    
                </tr>

                <tr align="center">
                    <th>TL4</th>
                    <th>Pelan Kawalan Hakisan & Kelodak (ESCP)</th>
                    <th>A</th>
                    <th>1</th>
                    <th></th>
                    <th></th>
                    <th>1</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Pelan Kawalan Hakisan & Kelodak (ESCP)</span><br>
                    </th>
                    <th>
                        <span>&#183; Pengesahan pelaksanaan ESCP di tapak</span><br>
                    </th>

                </tr>

                <tr align="center">
                    <th>TL5</th>
                    <th>Pemuliharaan dan Pemeliharaan Cerun</th>
                    <th>A</th>
                    <th>1</th>
                    <th></th>
                    <th></th>
                    <th>0</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Laporan penyenggaraan cerun</span><br>
                    </th>
                    <th>
                        <span>Tidak Berkenaan</span><br>
                    </th>

                </tr>

                <tr align="center">
                    <th>TL6</th>
                    <th>Pengurusan Air Larian Hujan</th>
                    <th>A</th>
                    <th>3</th>
                    <th></th>
                    <th></th>
                    <th>3</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Laporan rekabentuk sistem perparitan</span><br>
                        <span>&#183; Pelan sistem perparitan berdasarkan MSMA</span><br>
                    </th>
                    <th>
                        <span> &#40;a&#41; Baru</span><br>
                        <span>&#183; Laporan sistem perparitan</span><br>
                        <span>&#183; Bukti bergambar</span><br>
                        <span> &#40;b&#41; Sedia ada</span><br>
                        <span>&#183; Laporan penyenggaraan sistem perparitan berkala</span><br>
                        <span>&#183; Bukti bergambar</span><br>
                    </th>

                </tr>

                <tr align="center">
                    <th>TL8</th>
                    <th>Landskap strategik</th>
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
                    <th colspan="2"></th>
                </tr>

                <tr align="center">
                    <th>TL8.1</th>
                    <th>Memelihara dan menyenggara pokok yang matang</th>
                    <th>A</th>
                    <th>3</th>
                    <th></th>
                    <th></th>
                    <th>3</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Inventori pokok</span><br>
                        <span>&#183; Pelan ukur bagi lokasi pokok matang sedia ada</span><br>
                        <span>&#183; Pelan penanaman pokok</span><br>
                    </th>
                    <th>
                        <span> &#40;a&#41; Lukisan siap bina landskap</span><br>
                        <span>&#183; Bukti bergambar pokok tidak ditebang dan disenggara dengan baik</span><br>
                    </th>
                    

                </tr>

                <tr align="center">
                    <th>TL8.1</th>
                    <th>Memelihara dan menyenggara pokok yang matang</th>
                    <th>A</th>
                    <th>3</th>
                    <th></th>
                    <th></th>
                    <th>3</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">
                        <span>&#183; Inventori pokok</span><br>
                        <span>&#183; Pelan ukur bagi lokasi pokok matang sedia ada</span><br>
                        <span>&#183; Pelan penanaman pokok</span><br>
                    </th>
                    <th>
                        <span> &#40;a&#41; Lukisan siap bina landskap</span><br>
                        <span>&#183; Bukti bergambar pokok tidak ditebang dan disenggara dengan baik</span><br>
                    </th>

                </tr>
        
        </table>
    </div>

</body>

       

                <div class="mt-3 text-center">
                    <button type="submit" class="btn btn-secondary">Tolak</button>
                    <button type="submit" class="btn btn-primary-sah">Sah</button>

                </div>
        

      
    </form>

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

<!--JavaScript-->

{{-- <script> --}}
        {{-- // const realFileBtn = document.getElementById("real-file");
        // const customBtn = document.getElementById("custom-button");
        // const customTxt = document.getElementById("custom-text");

        // customBtn.addEventListener("click", function() {
        // realFileBtn.click();
        // });

        // realFileBtn.addEventListener("change", function() {
        // if (realFileBtn.value) {
        //     customTxt.innerHTML = realFileBtn.value.match(
        //     /[\/\\]([\w\d\s\.\-\(\)]+)$/
        //     )[1];
        // } else {
        //     customTxt.innerHTML = "No file chosen, yet.";
        // }
        // }); --}}

{{-- </script> --}}

@endsection