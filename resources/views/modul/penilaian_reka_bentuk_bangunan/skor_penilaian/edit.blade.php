@extends('layouts.base')
<link rel="stylesheet" href="/cssfile/skor_penilaian.css">
<link rel="stylesheet" href="/cssfile/style.css">


@section('content')

<div class="header">
        <b class="paparan-senarai-projek">> Penilaian</b>

            {{-- <h1 class="header-title">
                PENILAIAN REKA BENTUK BANGUNAN
            </h1> --}}
            <hr class="line-6">

<div class="container-fluid">
    <div class="card-body">
        <div class="table-responsive scrollbar">
            <form action="/penilaian_reka_bentuk_bangunan/simpan_skor/{id}" method="post" enctype="multipart/form-data">
                @csrf
                {{-- @method('PUT') --}}

                <table class="table table-bordered line-table" id="table">
                    <thead class="text-white">
                        <tr align="center" style="background-color:#EB5500">
                            <th rowspan="3">Kod</th>
                            <th rowspan="3">Kriteria</th>
                            <th rowspan="3">Kategori bangunan</th>
                            <th colspan="14">Pembangunan Baru</th>
                            {{-- <th>Markah</th> --}}
                            <th rowspan="2" colspan="4">Dokumen Pembuktian</th>
                            <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
                        </tr>
        
                        <tr align="center" style="background-color:#EB5500">
                            <th colspan="14">Markah</th>
                        </tr>
                    
                        <tr align="center" style="background-color:#EB5500">
                            {{-- <th>TL</th> --}}
                            {{-- <th>Kriteria</th> --}}
                            {{-- <th>Kategori Bangunan</th> --}}
                            <th colspan="2">MMR</th>
                            <th colspan="2">MS</th>
                            <th colspan="2">MR</th>
                            <th colspan="2">MMV</th>
                            <th colspan="2">MS</th>
                            <th colspan="2">MV</th>
                            <th colspan="2">ML</th>
                            <th colspan="2">Rekabentuk (Peringkat 2)</th>
                            <th>Verifikasi (Peringkat 3)</th>
        
                        </tr>
        
                        <tr style="background-color:#EB5500">
                            <th>TL</th>
                            <th colspan="28">PERANCANGAN & PENGURUSAN TAPAK LESTARI</th>
                        </tr>
                    </thead>
        
                    <tr align="center">
                        <th>TL1</th>
                        <th>Perancangan Tapak</th>
                        <th><input class="form-control" type="text" autocapitalize="off" name="jenisKategori" value="{{$kriteria_phjkr_bangunan ?? ''}}"/>                        
                        </th>
                        <th colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></th>
                        <th colspan="2"></th>
                        <th colspan="2"></th>
                        <th colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></th>
                        <th colspan="2"></th>
                        <th colspan="2"></th>
                        <th colspan="2"></th>
                        <th colspan="4">Rancangan Tempatan yang menunjukkan kawasan pembangunan yang terlibat</th>
                        <th>Tidak Berkenaan</th>
        
                    </tr>
        
                        <tr align="center">
                            <th>TL2</th>
                            <th>Sistem Pengurusan Alam Sekitar (SPAS)</th>
                            <th><input class="form-control" type="text" autocapitalize="off" name="jenisKategori" value="{{$kriteria_phjkr_bangunan ?? ''}}"</th>
                            <th colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="4"><span>&#183; Sijil ISO 14001</span><br>
                                <span>&#183; Senarai kuantiti (BQ) kerja-kerja perlindungan alam sekitar</span>
                            </th>
                            <th>
                                <span>&#183; Laporan Pelan Pengurusan Alam Sekitar</span><br>
                                <span>&#183; Borang SPAS (Peringkat pembinaan)</span>
                            </th>
        
                        </tr>

                        <!--TL3-->
                        <tr align="center">
                            <th rowspan="2">TL3</th>
                            <th>i. Pemotongan dan Penambakan tanah</th>
                            <th rowspan="2"><input class="form-control sum" type="text" autocapitalize="off" name="jenisKategori" value="{{$kriteria_phjkr_bangunan ?? ''}}"</th>
                            <th colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
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
                            <th colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
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
                            <th><input class="form-control" type="text" autocapitalize="off" name="jenisKategori" value="{{$kriteria_phjkr_bangunan ?? ''}}"</th>
                            <th colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
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
                            <th><input class="form-control" type="text" autocapitalize="off" name="jenisKategori" value="{{$kriteria_phjkr_bangunan ?? ''}}"</th>
                            <th colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
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
                            <th><input class="form-control" type="text" autocapitalize="off" name="jenisKategori" value="{{$kriteria_phjkr_bangunan ?? ''}}"</th>
                            <th colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
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
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="3"></th>
        
                        </tr>
        
                        <tr align="center">
                            <th>TL8.1</th>
                            <th>Memelihara dan menyenggara pokok yang matang</th>
                            <th><input class="form-control" type="text" autocapitalize="off" name="jenisKategori" value="{{$kriteria_phjkr_bangunan ?? ''}}"</th>
                            <th colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
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
                            <th>TL8.2</th>
                            <th>Menyediakan kawasan hijau</th>
                            <th><input class="form-control" type="text" autocapitalize="off" name="jenisKategori" value="{{$kriteria_phjkr_bangunan ?? ''}}"</th>
                            <th colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="4">
                                <span>Laporan cadangan menunjukkan:</span><br>
                                <span>&#183; 30% kawasan hijau (disahkan oleh arkitek atau jururancang bertauliah)</span><br>
                                <span>&#183; Pokok, pokok renek, tumbuhan penutup bumi, rumput</span><br>
                            </th>
                            <th>
                                <span> &#40;a&#41; Pelan tapak siap bina yang telah disahkan oleh Arkitek Bertauliah</span><br>
                                Nyatakan sekiranya ada perubahan
                            </th>
        
                        </tr>

                        <tr align="center">
                            <th>TL8.3</th>
                            <th>Menyedia dan menyenggara penanaman pokok teduhan</th>
                            <th><input class="form-control" type="text" autocapitalize="off" name="jenisKategori" value="{{$kriteria_phjkr_bangunan ?? ''}}"</th>
                            <th colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="4">
                                <span>&#183; Penyediaan pelan landskap</span><br>
                                <span>&#183; Jadual spesis pokok</span><br>
                                <span>&#183; Anggaran bayang-bayang pokok atau struktur selain bangunan</span><br>
                            </th>
                            <th>
                                <span> &#183; Pelan landskap siap bina</span><br>
                                <span> &#183; Inventori pokok</span><br>
                                <span> &#183; Bukti bergambar</span><br>
                            </th>
        
                        </tr>

                        <tr align="center">
                            <th>TL8.4</th>
                            <th>Pemilihan bahan binaan siarkaki (walkway) yang mempunyai daya pantulan
                                haba yang tinggi
                            </th>
                            <th><input class="form-control" type="text" autocapitalize="off" name="jenisKategori" value="{{$kriteria_phjkr_bangunan ?? ''}}"</th>
                            <th colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2">th>
                            <th colspan="4">
                                <span>&#183; Lukisan terperinci dengan spesifikasi</span><br>
                                <span>&#183; Katalog berserta jadual SRI bahan siarkaki</span><br>
                            </th>
                            <th>
                                <span> &#183; Bukti bergambar</span><br>
                            </th>
        
                        </tr>

                        <tr align="center">
                            <th>TL8.5</th>
                            <th>Menyedia dan menyenggara sistem turapan berumput</th>
                            <th><input class="form-control" type="text" autocapitalize="off" name="jenisKategori" value="{{$kriteria_phjkr_bangunan ?? ''}}"</th>
                            <th colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="4">
                                <span>&#183; Lukisan butiran dan spesifikasi sistem turapan</span><br>
                                <span>&#183; Lukisan susun atur tapak pembangunan</span><br>
                                <span>&#183; Pengiraan luas zon turapan</span><br>

                            </th>
                            <th>
                                <span> &#183; Lukisan siap bina</span><br>
                                <span> &#183; Bukti bergambar</span><br>
                            </th>
        
                        </tr>

                        <tr align="center">
                            <th>TL9</th>
                            <th>Bumbung Hijau & Dinding Hijau</th>
                            <th></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="3"></th>
                            <th colspan="3"></th>
        
                        </tr>

                        <tr align="center">
                            <th>TL9.1</th>
                            <th>Indeks Pantulan Suria (SRI) mengikut jenis & kecerunan bumbung
                            </th>
                            <th><input class="form-control sum" type="text" autocapitalize="off" name="jenisKategori" value="{{$kriteria_phjkr_bangunan ?? ''}}"</th>
                            <th colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="4">
                                <span>&#183; Katalog berserta jadual SRI bumbung</span><br>
                                <span>&#183; Pengiraan keluasan bumbung</span><br>
                            </th>
                            <th>
                                <span>&#183; Method statement yang telah disahkan oleh
                                    pegawai penguasa (SO)</span><br>
                                <span>&#183; Bukti bergambar</span><br>
                                <span>&#183; Lukisan siap bina</span><br>

                            </th>
        
                        </tr>

                        <tr align="center">
                            <th>TL9.2</th>
                            <th>Menggalakkan rekabentuk bumbung/dinding hijau
                            </th>
                            <th><input class="form-control sum" type="text" autocapitalize="off" name="jenisKategori" value="{{$kriteria_phjkr_bangunan ?? ''}}"</th>
                            <th colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="2"></th>
                            <th colspan="4">
                                <span>&#183; Pelan konsep rekabentuk</span><br>
                                <span>&#183; Jadual keluasan kawasan bumbung</span><br>
                                <span>&#183; Lukisan butiran dan jadual penanaman</span><br>
                                <span>&#183; Pengiraan</span><br>

                            </th>
                            <th>
                                <span>&#183; Bukti bergambar</span><br>
                                <span>&#183; Lukisan siap bina</span><br>
                                <span>&#183; Rekod Senggaraan</span><br>

                            </th>
        
                        </tr>

                        <tr align="center">
                            <th colspan="3">Jumlah markah TL</th>
                            <th colspan="2"><input class="form-control" id="total_amount_mmr" type="text" autocapitalize="off" name="markahTL1" value="{{$kriteria_phjkr_bangunan ?? ''}}"/></th>
                            <th colspan="2">0</th>
                            <th colspan="2">0</th>
                            <th colspan="2"><input class="form-control" id="total_amount_mmv" type="text" autocapitalize="off" name="markahTL2" value="{{$kriteria_phjkr_bangunan ?? ''}}"/></th>
                            <th colspan="2">0</th>
                            <th colspan="2">0</th>
                            <th colspan="2">0</th>
                            <th colspan="4"></th>
                            <th colspan="3"></th>
                        </tr>  
                
                </table>
                <!--Button Simpan (TOOLTIPS)-->
                <div class="text-center">
                    {{-- <a href="#" class="btn btn-primary" type="submit">Daftar</a> --}}
                    <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                    title="Simpan" type="submit">Simpan</button>
                </div>

            </form>
            </div>
        </div>
        
        
</div>
            
            
        <!--JS-->
            <!--JS BUTTON TOOLTIPS-->
            <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
            </script>  
            
            
            <!--MarkahTL for MMR-->
            <script>
                function findTotalMMR() {
                var arr = document.getElementsByClassName('sum_mmr');
                var tot = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mmr').value = tot;
            }

            </script>

            <!--MarkahTL for MMV-->
            <script>
                function findTotalMMV() {
                var arr = document.getElementsByClassName('sum_mmv');
                var tot1 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot1 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mmv').value = tot1;
            }

            </script>
@endsection