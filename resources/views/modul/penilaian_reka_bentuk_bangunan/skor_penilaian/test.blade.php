@extends('layouts.base')
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}
{{-- <link rel="stylesheet" type="text/css" href="https://code.jquery.com/jquery-3.5.1.js"> --}}

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

<!--------------------------------------- MarkahTL ---------------------------------------->

                {{-- <table class="table table-bordered line-table" id="table"> --}}
                <table id="example" class="table table-bordered line-table display">
                    <thead class="text-white">
                        <tr align="center" style="background-color:#EB5500">
                            <th rowspan="3">Kod</th>
                            <th rowspan="3">Kriteria</th>
                            <th rowspan="3">Kategori bangunan</th>
                            <th colspan="14">Pembangunan Baru</th>
                            {{-- <th>Markah</th> --}}
                            <th rowspan="2" colspan="4">Dokumen Pembuktian</th>
                            <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
                            {{-- <th rowspan="3" colspan="3">Muat Naik Dokumen Sokongan</th> --}}

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
        
                    <!--TL1-->
                    <tr align="center">
                        <td>TL1</td>
                        <td>Perancangan Tapak</td>
                        {{-- <th><input class="form-control" type="text" autocapitalize="off" name="jenisKategori" value="{{$kriteria_phjkr_bangunan ?? ''}}"/></th> --}}
                        <td>
                            <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                <option hidden selected="">Sila Pilih</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>                         
                        </td>

                        <td colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></td>
                        <td colspan="2"></td>
                        <td colspan="2"></td>
                        <td colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></td>
                        <td colspan="2"></td>
                        <td colspan="2"></td>
                        <td colspan="2"></td>
                        <td colspan="4">Rancangan Tempatan yang menunjukkan kawasan pembangunan yang terlibat</td>
                        <td>Tidak Berkenaan</td>
                        {{-- <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}

        
                    </tr>
        
                        <!--TL2-->
                        <tr align="center">
                            <td>TL2</td>
                            <td>Sistem Pengurusan Alam Sekitar (SPAS)</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>                                 
                            </td>
                            <td colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="4"><span>&#183; Sijil ISO 14001</span><br>
                                <span>&#183; Senarai kuantiti (BQ) kerja-kerja perlindungan alam sekitar</span>
                            </td>
                            <td>
                                <span>&#183; Laporan Pelan Pengurusan Alam Sekitar</span><br>
                                <span>&#183; Borang SPAS (Peringkat pembinaan)</span>
                            </td>
                            {{-- <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}
                        </tr>

                        <!--TL3-->
                        <tr align="center">
                            <td rowspan="2">TL3</td>
                            <td>i. Pemotongan dan Penambakan tanah</td>
                            <td rowspan="2">
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>                                 
                            </td>                            
                            <td colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="4">
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
                            {{-- <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}
                        </tr>
        
                        <tr align="center">
                            <td>ii. Mengekalkan Topografi Tanah</td>
                            {{-- <th>A</th> --}}
                            <td colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="4">
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
                            {{-- <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}

                        </tr>
        
                        <!--TL4-->
                        <tr align="center">
                            <td>TL4</td>
                            <td>Pelan Kawalan Hakisan & Kelodak (ESCP)</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>                                 
                            </td>                            
                            <td colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="4">
                                <span>&#183; Pelan Kawalan Hakisan & Kelodak (ESCP)</span><br>
                            </td>
                            <td>
                                <span>&#183; Pengesahan pelaksanaan ESCP di tapak</span><br>
                            </td>
                            {{-- <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}
                        </tr>
        
                        <!--TL5-->
                        <tr align="center">
                            <td>TL5</td>
                            <td>Pemuliharaan dan Pemeliharaan Cerun</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>                                 
                            </td>                            
                            <td colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="4">
                                <span>&#183; Laporan penyenggaraan cerun</span><br>
                            </td>
                            <td>
                                <span>Tidak Berkenaan</span><br>
                            </td>
                            {{-- <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}
                        </tr>

                        <!--TL6-->
                        <tr align="center">
                            <td>TL6</td>
                            <td>Pengurusan Air Larian Hujan</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>                                 
                            </td>                            
                            <td colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="4">
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
                            {{-- <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}
                        </tr>
        
                        <!--TL8-->
                        <tr align="center">
                            <td>TL8</td>
                            <td>Landskap strategik</td>
                            <td></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="3"></td>
        
                        </tr>
        
                        <!--TL8.1-->
                        <tr align="center">
                            <td>TL8.1</td>
                            <td>Memelihara dan menyenggara pokok yang matang</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>                                 
                            </td>                            
                            <td colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="4">
                                <span>&#183; Inventori pokok</span><br>
                                <span>&#183; Pelan ukur bagi lokasi pokok matang sedia ada</span><br>
                                <span>&#183; Pelan penanaman pokok</span><br>
                            </td>
                            <td>
                                <span> &#40;a&#41; Lukisan siap bina landskap</span><br>
                                <span>&#183; Bukti bergambar pokok tidak ditebang dan disenggara dengan baik</span><br>
                            </td>
                            {{-- <td colspan="2">
                                <input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}">
                            </td> --}}
        
                        </tr>
        
                        <!--TL8.2-->
                        <tr align="center">
                            <td>TL8.2</td>
                            <td>Menyediakan kawasan hijau</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>                                 
                            </td>                            
                            <td colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="4">
                                <span>Laporan cadangan menunjukkan:</span><br>
                                <span>&#183; 30% kawasan hijau (disahkan oleh arkitek atau jururancang bertauliah)</span><br>
                                <span>&#183; Pokok, pokok renek, tumbuhan penutup bumi, rumput</span><br>
                            </td>
                            <td>
                                <span> &#40;a&#41; Pelan tapak siap bina yang telah disahkan oleh Arkitek Bertauliah</span><br>
                                Nyatakan sekiranya ada perubahan
                            </td>
                            {{-- <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}

                        </tr>

                        <!--TL8.3-->
                        <tr align="center">
                            <td>TL8.3</td>
                            <td>Menyedia dan menyenggara penanaman pokok teduhan</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>                                 
                            </td>                            
                            <td colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="4">
                                <span>&#183; Penyediaan pelan landskap</span><br>
                                <span>&#183; Jadual spesis pokok</span><br>
                                <span>&#183; Anggaran bayang-bayang pokok atau struktur selain bangunan</span><br>
                            </td>
                            <td>
                                <span> &#183; Pelan landskap siap bina</span><br>
                                <span> &#183; Inventori pokok</span><br>
                                <span> &#183; Bukti bergambar</span><br>
                            </td>
                            <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>

                        </tr>

                        <!--TL8.4-->
                        <tr align="center">
                            <td>TL8.4</td>
                            <td>Pemilihan bahan binaan siarkaki (walkway) yang mempunyai daya pantulan
                                haba yang tinggi
                            </td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>                                 
                            </td>                            
                            <td colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="4">
                                <span>&#183; Lukisan terperinci dengan spesifikasi</span><br>
                                <span>&#183; Katalog berserta jadual SRI bahan siarkaki</span><br>
                            </td>
                            <td>
                                <span> &#183; Bukti bergambar</span><br>
                            </td>
                            {{-- <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}

                        </tr>

                        <!--TL8.5-->
                        <tr align="center">
                            <td>TL8.5</td>
                            <td>Menyedia dan menyenggara sistem turapan berumput</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>                                 
                            </td>                            
                            <td colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="4">
                                <span>&#183; Lukisan butiran dan spesifikasi sistem turapan</span><br>
                                <span>&#183; Lukisan susun atur tapak pembangunan</span><br>
                                <span>&#183; Pengiraan luas zon turapan</span><br>

                            </td>
                            <td>
                                <span> &#183; Lukisan siap bina</span><br>
                                <span> &#183; Bukti bergambar</span><br>
                            </td>
                            {{-- <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}

                        </tr>

                        <!--TL9-->
                        <tr align="center">
                            <td>TL9</td>
                            <td>Bumbung Hijau & Dinding Hijau</td>
                            <td></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="3"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                        </tr>

                        <!--TL9.1-->
                        <tr align="center">
                            <td>TL9.1</td>
                            <td>Indeks Pantulan Suria (SRI) mengikut jenis & kecerunan bumbung
                            </td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>                                 
                            </td>                            
                            <td colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="4">
                                <span>&#183; Katalog berserta jadual SRI bumbung</span><br>
                                <span>&#183; Pengiraan keluasan bumbung</span><br>
                            </td>
                            <td>
                                <span>&#183; Method statement yang telah disahkan oleh
                                    pegawai penguasa (SO)</span><br>
                                <span>&#183; Bukti bergambar</span><br>
                                <span>&#183; Lukisan siap bina</span><br>
                            </td>
                            {{-- <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}
        
                        </tr>

                        <tr align="center">
                            <td>TL9.2</td>
                            <td>Menggalakkan rekabentuk bumbung/dinding hijau
                            </td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>                                 
                            </td>
                            <td colspan="2"><input onblur="findTotalMMR()" class="form-control sum_mmr" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"><input onblur="findTotalMMV()" class="form-control sum_mmv" type="number" autocapitalize="off"/></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="4">
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
                            {{-- <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}

        
                        </tr>

                        <!--JUMLAH MARKAHTL-->
                        <tr align="center">
                            <th colspan="3">Jumlah markah TL</th>
                            <td colspan="2"><input class="form-control" id="total_amount_mmr" type="text" autocapitalize="off" name="markahTL1" value="{{$kriteria_phjkr_bangunan ?? ''}}"/></td>
                            <td colspan="2">0</td>
                            <td colspan="2">0</td>
                            <td colspan="2"><input class="form-control" id="total_amount_mmv" type="text" autocapitalize="off" name="markahTL2" value="{{$kriteria_phjkr_bangunan ?? ''}}"/></td>
                            <td colspan="2">0</td>
                            <td colspan="2">0</td>
                            <td colspan="2">0</td>
                            <td colspan="4"></td>
                            <td colspan="3"></td>
                        </tr> 
                </table>
                        
                        
<!--------------------------------------- MarkahKT ---------------------------------------->
<table id="example" class="table table-bordered line-table display">
    <thead class="text-white">
        <tr align="center" style="background-color:#EB5500">
            <th rowspan="3">Kod</th>
            <th rowspan="3">Kriteria</th>
            <th rowspan="3">Kategori bangunan</th>
            <th colspan="14">Pembangunan Baru</th>
            {{-- <th>Markah</th> --}}
            <th rowspan="2" colspan="4">Dokumen Pembuktian</th>
            <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
            {{-- <th rowspan="3" colspan="3">Muat Naik Dokumen Sokongan</th> --}}

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
            <th>KT</th>
            <th colspan="28">PENGURUSAN KECEKAPAN TENAGA DAN PENGGUNAAN TENAGA BOLEH BAHARU</th>
        </tr>
    </thead>

    <!--KT1-->
    <tr align="center">
        <td>KT1</td>
        <td>Rekabentuk bumbung</td>
        {{-- <th><input class="form-control" type="text" autocapitalize="off" name="jenisKategori" value="{{$kriteria_phjkr_bangunan ?? ''}}"/></th> --}}
        <td>
            <select class="form-select" aria-label="Default select example" name="jenisKategori">
                <option hidden selected="">Sila Pilih</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>                         
        </td>

        <td colspan="2"><input onblur="findTotalMMR_KT()" class="form-control sum_mmr_kt" type="number" autocapitalize="off"/></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"><input onblur="findTotalMMV_KT()" class="form-control sum_mmv_kt" type="number" autocapitalize="off"/></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="4">
            <span>&#183; Katalog spesifikasi U-Value bahan</span><br>
            <span>&#183; Pengiraan U-Value bagi rekabentuk bumbung</span><br>
        </td>
        <td>
            <span>&#183; Katalog bahan dan sampel yang diluluskan</span><br>
            <span>&#183; Lukisan siap bina</span><br>
            <span>&#183; Bukti bergambar</span><br>
        </td>
        {{-- <td colspan="3"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}


    </tr>

        <!--KT2-->
        <tr align="center">
            <td>KT2</td>
            <td>Orientasi bangunan</td>
            <td>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>                                 
            </td>
            <td colspan="2"><input onblur="findTotalMMR_KT()" class="form-control sum_mmr_kt" type="number" autocapitalize="off"/></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"><input onblur="findTotalMMV_KT()" class="form-control sum_mmv_kt" type="number" autocapitalize="off"/></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="4"></td>
            <td></td>

        </tr>

        <!--KT2.1-->
        <tr align="center">
            <th>KT2.1</th>
            <th>Fasad Utama bangunan yang menghadap orientasi utara-selatan</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>                                 
            </th>                            
            <th colspan="2"><input onblur="findTotalMMR_KT()" class="form-control sum_mmr_kt" type="number" autocapitalize="off"/></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"><input onblur="findTotalMMV_KT()" class="form-control sum_mmv_kt" type="number" autocapitalize="off"/></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <td colspan="4">
                <span>&#183; Pelan tapak berserta penunjuk arah utara
                    menunjukkan pelan bangunan dengan meletakkan sun-path diagram</span><br>
                <span>&#183; Lukisan siap bina</span><br>
            </td>
            <td>
                <span>&#183; Bukti bergambar</span><br>
            </td>
            {{-- <td colspan="3"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}

            

        </tr>

        <!--KT2.2-->
        <tr align="center">
            <th>KT2.2</th>
            <th>Meminimumkan bukaan pada fasad yang menghadap timur dan barat</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>                
            </th>
            <th colspan="2"><input onblur="findTotalMMR_KT()" class="form-control sum_mmr_kt" type="number" autocapitalize="off"/></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"><input onblur="findTotalMMV_KT()" class="form-control sum_mmv_kt" type="number" autocapitalize="off"/></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="4">
                <span>&#183; Laporan penyenggaraan cerun</span><br>
            </th>
            <th>
                <span>Tidak Berkenaan</span><br>
            </th>
            {{-- <td colspan="3"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}


        </tr>

        <!--KT3-->
        <tr align="center">
            <th>KT3</th>
            <th>Rekabentuk fasad</th>
            <th></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="4"></th>
            <th></th>
            {{-- <td colspan="3"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}

        </tr>

        <!--KT3.1-->
        <tr align="center">
            <th>KT3.1</th>
            <th>Dinding luar bangunan</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select> 
            </th>
            <th colspan="2"><input onblur="findTotalMMR_KT()" class="form-control sum_mmr_kt" type="number" autocapitalize="off"/></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"><input onblur="findTotalMMV_KT()" class="form-control sum_mmv_kt" type="number" autocapitalize="off"/></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="4">
                <span>&#183; Katalog spesifikasi U-Value bahan</span><br>
                <span>&#183; Pengiraan U-Value bagi rekabentuk dinding</span><br>
            </th>
            <th>
                <span>&#183; Katalog bahan yang diluluskan untuk pembinaan</span><br>
                <span>&#183; Pengiraan U-Value yang disahkan</span><br>
            </th>
            {{-- <td colspan="3"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}


        </tr>

        <!--KT3.2-->
        <tr align="center">
            <th>KT3.2</th>
            <th>Pengadang Suria Luaran</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>                
            </th>
            <th colspan="2"><input onblur="findTotalMMR_KT()" class="form-control sum_mmr_kt" type="number" autocapitalize="off"/></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"><input onblur="findTotalMMV_KT()" class="form-control sum_mmv_kt" type="number" autocapitalize="off"/></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="4">
                <span>&#183; Katalog bahan</span><br>
            </th>
            <th>
                <span>&#183; Bukti bergambar</span><br>
                <span>&#183; Lukisan siap bina</span><br>
            </th>
            {{-- <td colspan="3"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}


        </tr>

        <!--KT4-->
        <tr align="center">
            <th>KT4</th>
            <th>OTTV & RTTV</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>                
            </th>
            <th colspan="2"><input onblur="findTotalMMR_KT()" class="form-control sum_mmr_kt" type="number" autocapitalize="off"/></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"><input onblur="findTotalMMV_KT()" class="form-control sum_mmv_kt" type="number" autocapitalize="off"/></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="4">
                <span>&#183; Pengiraan OTTV dan RTTV yang disahkan</span><br>
            </th>
            <th>
                <span>&#183; Pengiraan OTTV dan RTTV yang disahkan</span><br>
            </th>
            {{-- <td colspan="3"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}


        </tr>

        <!--KT5-->
        <tr align="center">
            <th>KT5</th>
            <th>Kecekapan pencahayaan</th>
            <th>
                {{-- <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>                 --}}
            </th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"><th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="4"></th>
            <th colspan="4"></th>
            <th></th>
            {{-- <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}


        </tr>

        <!--KT5.2-->
        <tr align="center">
            <th>KT5.2</th>
            <th>Kawalan Pencahayaan</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>                
            </th>
            <th colspan="2"><input onblur="findTotalMMR_KT()" class="form-control sum_mmr_kt" type="number" autocapitalize="off"/></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"><input onblur="findTotalMMV_KT()" class="form-control sum_mmv_kt" type="number" autocapitalize="off"/></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="4">
                <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
            </th>
            <th>
                <span> &#183; Lukisan siap bina yang menunjukkan lokasi suis</span><br>
                <span> &#183; Bukti bergambar</span><br>
            </th>
            {{-- <td colspan="3"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}


        </tr>

        <!--KT8-->
        <tr align="center">
            <th>KT8</th>
            <th>Tenaga Boleh Baharu (TBB)</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>                
            </th>
            <th colspan="2"><input onblur="findTotalMMR_KT()" class="form-control sum_mmr_kt" type="number" autocapitalize="off"/></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"><input onblur="findTotalMMV_KT()" class="form-control sum_mmv_kt" type="number" autocapitalize="off"/></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="4">
                <span>&#183; Mengemukakan lukisan rekabentuk sistem dan simulasi pengiraan
                    bagi anggaran tenaga baharu yang boleh dihasilkan oleh sistem tersebut</span><br>
            </th>
            <th>
                <span> &#183; Salinan lukisan siap bina dan laporan uji terima yang mematuhi kehendak rekabentuk</span><br>
                <span> &#183; Pengiraan penjanaan tenaga boleh baharu berbanding jumlah penggunaan tenaga tahunan bangunan</span><br>
            </th>
            {{-- <td colspan="3"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}


        </tr>

        <!--KT11-->
        <tr align="center">
            <th>KT11</th>
            <th>Pengujian dan pentauliahan</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>  
            </th>
            <th colspan="2"><input onblur="findTotalMMR_KT()" class="form-control sum_mmr_kt" type="number" autocapitalize="off"/></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"><input onblur="findTotalMMV_KT()" class="form-control sum_mmv_kt" type="number" autocapitalize="off"/></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="2"></th>
            <th colspan="4">
                <span>&#183; Pelan pengujian dan pentauliahan</span><br>
            </th>
            <th>
                <span>&#183; Dokumen lengkap pengujian dan pentauliahan yang telah disahkan</span><br>
            </th>
            {{-- <td colspan="3"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}


        </tr>

        <!--JUMLAH MARKAHKT-->
        <tr align="center">
            <th colspan="3">Jumlah markah KT</th>
            <th colspan="2"><input class="form-control" id="total_amount_mmr_kt" type="text" autocapitalize="off" name="markahKT1" value="{{$kriteria_phjkr_bangunan ?? ''}}"/></th>
            <th colspan="2">0</th>
            <th colspan="2">0</th>
            <th colspan="2"><input class="form-control" id="total_amount_mmv_kt" type="text" autocapitalize="off" name="markahKT2" value="{{$kriteria_phjkr_bangunan ?? ''}}"/></th>
            <th colspan="2">0</th>
            <th colspan="2">0</th>
            <th colspan="2">0</th>
            <th colspan="4"></th>
            <th colspan="3"></th>
        </tr> 
        
</table>

<!--------------------------------------- MarkahSB ---------------------------------------->
<table id="example" class="table table-bordered line-table display">

        <thead class="text-white">
            <tr align="center" style="background-color:#EB5500">
                <th rowspan="3">Kod</th>
                <th rowspan="3">Kriteria</th>
                <th rowspan="3">Kategori bangunan</th>
                <th colspan="7">Pembangunan Baru</th>
                <th rowspan="2" colspan="4">Dokumen Pembuktian</th>
                <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
                {{-- <th rowspan="3" colspan="3">Muat Naik Dokumen Sokongan</th> --}}

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
                <th colspan="20">PENGURUSAN SUMBER DAN BAHAN</th>
            </tr>
        </thead>

        <!--SB1-->
        <tr align="center">
            <th>SB1</th>
            <th>Sistem Binaan Berindustri (IBS)</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>    
            </th>
            <th colspan="2"><input onblur="findTotalMMR_SB()" class="form-control sum_mmr_sb" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th colspan="2"><input onblur="findTotalMMV_SB()" class="form-control sum_mmv_sb" type="number" autocapitalize="off"/></th>
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
            {{-- <td colspan="3"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}


        </tr>

        <!--SB2-->
        <tr align="center">
            <th>SB2</th>
            <th>Produk hijau</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </th>
            <th colspan="2"><input onblur="findTotalMMR_SB()" class="form-control sum_mmr_sb" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th colspan="2"><input onblur="findTotalMMV_SB()" class="form-control sum_mmv_sb" type="number" autocapitalize="off"/></th>
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
            {{-- <td colspan="3"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}


        </tr>

        <!--SB3-->
        <tr align="center">
            <th>SB3</th>
            <th>Pengurusan sisa semasa pembinaan</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </th>
            <th colspan="2"><input onblur="findTotalMMR_SB()" class="form-control sum_mmr_sb" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th colspan="2"><input onblur="findTotalMMV_SB()" class="form-control sum_mmv_sb" type="number" autocapitalize="off"/></th>
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
            {{-- <td colspan="3"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}

            

        </tr>

        <!--SB4-->
        <tr align="center">
            <th>SB4</th>
            <th>3r-Semasa Operasi</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </th>
            <th colspan="2"><input onblur="findTotalMMR_SB()" class="form-control sum_mmr_sb" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th colspan="2"><input onblur="findTotalMMV_SB()" class="form-control sum_mmv_sb" type="number" autocapitalize="off"/></th>
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
            <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>
            <tr>

            <tr align="center">
                <th colspan="3">Jumlah markah SB</th>
                <th colspan="2"><input class="form-control" id="total_amount_mmr_sb" type="text" autocapitalize="off" name="markahSB1" value="{{$kriteria_phjkr_bangunan ?? ''}}"/></th>
                <th>0</th>
                <th>0</th>
                <th colspan="2"><input class="form-control" id="total_amount_mmv_sb" type="text" autocapitalize="off" name="markahSB2" value="{{$kriteria_phjkr_bangunan ?? ''}}"/></th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th colspan="4"></th>
                <th colspan="3"></th>
            </tr>  
</table>

<!--------------------------------------- MarkahPA ---------------------------------------->
<table id="example" class="table table-bordered line-table display">
    <thead class="text-white">
        <tr align="center" style="background-color:#EB5500">
            <th rowspan="3">Kod</th>
            <th rowspan="3">Kriteria</th>
            <th rowspan="3">Kategori bangunan</th>
            <th colspan="7">Pembangunan Baru</th>
            <th rowspan="2" colspan="4">Dokumen Pembuktian</th>
            <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
            <th rowspan="3" colspan="3">Muat Naik Dokumen Sokongan</th>
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

        <!--PA1-->
        <tr align="center">
            <th>PA1</th>
            <th>Produk Kecekapan Air</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </th>
            <th colspan="2"><input onblur="findTotalMMR_PA()" class="form-control sum_mmr_pa" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th colspan="2"><input onblur="findTotalMMV_PA()" class="form-control sum_mmv_pa" type="number" autocapitalize="off"/></th>
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
            <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


        </tr>

        <!--PA2-->
        <tr align="center">
            <th>PA2</th>
            <th>Penjimatan Penggunaan Air Dalam Bangunan</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                <option hidden selected="">Sila Pilih</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                </select>
            </th>
            <th colspan="2"><input onblur="findTotalMMR_PA()" class="form-control sum_mmr_pa" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th colspan="2"><input onblur="findTotalMMV_PA()" class="form-control sum_mmv_pa" type="number" autocapitalize="off"/></th>
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
            <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


        </tr>

        <!--PA3-->
        <tr align="center">
            <th rowspan="2">PA3</th>
            <th>i. SPAH</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </th>
            <th colspan="2"><input onblur="findTotalMMR_PA()" class="form-control sum_mmr_pa" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th colspan="2"><input onblur="findTotalMMV_PA()" class="form-control sum_mmv_pa" type="number" autocapitalize="off"/></th>
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
            <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


        </tr>

        <tr align="center">
            {{-- <th rowspan="2">PA3</th> --}}
            <th>ii. Kitar Semula Air Sisa</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </th>
            <th colspan="2"><input onblur="findTotalMMR_PA()" class="form-control sum_mmr_pa" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th colspan="2"><input onblur="findTotalMMV_PA()" class="form-control sum_mmv_pa" type="number" autocapitalize="off"/></th>
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
            <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


        </tr>

        <!-- Jumlah MarkahPA-->
        <tr align="center">
            <th colspan="3">Jumlah markah PA</th>
            <th colspan="2"><input class="form-control" id="total_amount_mmr_pa" type="text" autocapitalize="off" name="markahPA1" value="{{$kriteria_phjkr_bangunan ?? ''}}"/></th>
            <th colspan="2">0</th>
            <th colspan="2">0</th>
            <th colspan="2"><input class="form-control" id="total_amount_mmv_pa" type="text" autocapitalize="off" name="markahPA2" value="{{$kriteria_phjkr_bangunan ?? ''}}"/></th>
            <th colspan="2">0</th>
            <th colspan="2">0</th>
            <th colspan="2">0</th>
            <th colspan="4"></th>
            <th colspan="3"></th>
        </tr> 

</table>

<!--------------------------------------- MarkahPD ---------------------------------------->
<table id="example" class="table table-bordered line-table display">
    <thead class="text-white">
        <tr align="center" style="background-color:#EB5500">
            <th rowspan="3">Kod</th>
            <th rowspan="3">Kriteria</th>
            <th rowspan="3">Kategori bangunan</th>
            <th colspan="7">Pembangunan Baru</th>
            <th rowspan="2" colspan="4">Dokumen Pembuktian</th>
            <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
            <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
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
            <th colspan="24">PENGURUSAN KUALITI PERSEKITARAN DALAMAN</th>
        </tr>
    </thead>

    <!--PD2-->
    <tr align="center">
        <th>PD2</th>
        <th>Perancangan ruang</th>
        <th>
            <select class="form-select" aria-label="Default select example" name="jenisKategori">
                <option hidden selected="">Sila Pilih</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </th>
        <th><input onblur="findTotalMMR_PD()" class="form-control sum_mmr_pd" type="number" autocapitalize="off"/></th>
        <th></th>
        <th></th>
        <th><input onblur="findTotalMMV_PD()" class="form-control sum_mmv_pd" type="number" autocapitalize="off"/></th>
        <th></th>
        <th></th>
        <th></th>
        <th colspan="4"></th>
        <th></th>
        <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


    </tr>

    <!--PD2.4-->
    <tr align="center">
        <th>PD2.4</th>
        <th>Ketinggian siling yang efektif</th>
        <th>
            <select class="form-select" aria-label="Default select example" name="jenisKategori">
                <option hidden selected="">Sila Pilih</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </th>
        <th><input onblur="findTotalMMR_PD()" class="form-control sum_mmr_pd" type="number" autocapitalize="off"/></th>
        <th></th>
        <th></th>
        <th><input onblur="findTotalMMV_PD()" class="form-control sum_mmv_pd" type="number" autocapitalize="off"/></th>
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
        <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


    </tr>

    <!--PD2.5-->
    <tr align="center">
        <th>PD2.5</th>
        <th>Warna cerah di permukaan dinding dan siling</th>
        <th>
            <select class="form-select" aria-label="Default select example" name="jenisKategori">
                <option hidden selected="">Sila Pilih</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </th>
        <th><input onblur="findTotalMMR_PD()" class="form-control sum_mmr_pd" type="number" autocapitalize="off"/></th>
        <th></th>
        <th></th>
        <th><input onblur="findTotalMMV_PD()" class="form-control sum_mmv_pd" type="number" autocapitalize="off"/></th>
        <th></th>
        <th></th>
        <th></th>
        <th colspan="4">
                        <span>&#183; Katalog dan sampel menunjukkan warna yang dicadangkan</span><br>
        </th>
        <th>
            <span>&#183; Bukti bergambar bagi mengesahkan skima warna yang digunakan</span><br>
        </th>
        <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


    </tr>

    <!--PD3-->
    <tr align="center">
        <th>PD3</th>
        <th>Kualiti Visual</th>
        <th>
            <select class="form-select" aria-label="Default select example" name="jenisKategori">
                <option hidden selected="">Sila Pilih</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </th>
        <th><input onblur="findTotalMMR_PD()" class="form-control sum_mmr_pd" type="number" autocapitalize="off"/></th>
        <th></th>
        <th></th>
        <th><input onblur="findTotalMMV_PD()" class="form-control sum_mmv_pd" type="number" autocapitalize="off"/></th>
        <th></th>
        <th></th>
        <th></th>
        <th colspan="4">
        </th>
        <th></th>
        <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


    </tr>

    <tr align="center">
        <th>PD3.1</th>
        <th>Faktor Pencahayaan Siang (DF)</th>
        <th>
            <select class="form-select" aria-label="Default select example" name="jenisKategori">
                <option hidden selected="">Sila Pilih</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </th>
        <th><input onblur="findTotalMMR_PD()" class="form-control sum_mmr_pd" type="number" autocapitalize="off"/></th>
        <th></th>
        <th></th>
        <th><input onblur="findTotalMMV_PD()" class="form-control sum_mmv_pd" type="number" autocapitalize="off"/></th>
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
        <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


    </tr>

    <!--PD3.2-->
    <tr align="center">
        <th>PD3.2</th>
        <th>Menggunakan rak cahaya (light shelves)</th>
        <th>
            <select class="form-select" aria-label="Default select example" name="jenisKategori">
                <option hidden selected="">Sila Pilih</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </th>
        <th><input onblur="findTotalMMR_PD()" class="form-control sum_mmr_pd" type="number" autocapitalize="off"/></th>
        <th></th>
        <th></th>
        <th><input onblur="findTotalMMV_PD()" class="form-control sum_mmv_pd" type="number" autocapitalize="off"/></th>
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
        <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


    </tr>

    <!--PD3.3-->
    <tr align="center">
        <th>PD3.3</th>
        <th>Kawalan Tahap Kesilauan</th>
        <th>
            <select class="form-select" aria-label="Default select example" name="jenisKategori">
                <option hidden selected="">Sila Pilih</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </th>
        <th><input onblur="findTotalMMR_PD()" class="form-control sum_mmr_pd" type="number" autocapitalize="off"/></th>
        <th></th>
        <th></th>
        <th><input onblur="findTotalMMR_PD()" class="form-control sum_mmv_pd" type="number" autocapitalize="off"/></th>
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
        <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


    </tr>

    <!--PD3.4-->
    <tr align="center">
        <th>PD3.4</th>
        <th>Akses visual kepada pandangan di luar</th>
        <th>
            <select class="form-select" aria-label="Default select example" name="jenisKategori">
                <option hidden selected="">Sila Pilih</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </th>
        <th><input onblur="findTotalMMR_PD()" class="form-control sum_mmr_pd" type="number" autocapitalize="off"/></th>
        <th></th>
        <th></th>
        <th><input onblur="findTotalMMV_PD()" class="form-control sum_mmv_pd" type="number" autocapitalize="off"/></th>
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
        <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


    </tr>

    <!--PD8-->
    <tr align="center">
        <th>PD8</th>
        <th>Kualiti Udara Dalaman (IAQ)</th>
        <th>
            <select class="form-select" aria-label="Default select example" name="jenisKategori">
                <option hidden selected="">Sila Pilih</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </th>
        <th><input onblur="findTotalMMR_PD()" class="form-control sum_mmr_pd" type="number" autocapitalize="off"/></th>
        <th></th>
        <th></th>
        <th><input onblur="findTotalMMV_PD()" class="form-control sum_mmv_pd" type="number" autocapitalize="off"/></th>
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
        <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


    </tr>

    <!--PD10-->
    <tr align="center">
        <th>PD10</th>
        <th>Kaji Selidik Keselesaan Penghuni</th>
        <th>
            <select class="form-select" aria-label="Default select example" name="jenisKategori">
                <option hidden selected="">Sila Pilih</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </th>
        <th><input onblur="findTotalMMR_PD()" class="form-control sum_mmr_pd" type="number" autocapitalize="off"/></th>
        <th></th>
        <th></th>
        <th><input onblur="findTotalMMV_PD()" class="form-control sum_mmv_pd" type="number" autocapitalize="off"/></th>
        <th></th>
        <th></th>
        <th></th>
        <th colspan="4"> 
            <span>&#183; Tidak berkaitan (TB)</span></th>
        <th>
            <span>&#183; Laporan maklumbalas kaji selidik</span><br>
        </th>
        <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


    </tr>

    <!-- Jumlah MarkahPD-->
    <tr align="center">
        <th colspan="3">Jumlah markah PD</th>
        <th colspan="2"><input class="form-control" id="total_amount_mmr_pd" type="text" autocapitalize="off" name="markahPD1" value="{{$kriteria_phjkr_bangunan ?? ''}}"/></th>
        <th colspan="2">0</th>
        <th colspan="2">0</th>
        <th colspan="2"><input class="form-control" id="total_amount_mmv_pd" type="text" autocapitalize="off" name="markahPD2" value="{{$kriteria_phjkr_bangunan ?? ''}}"/></th>
        <th colspan="2">0</th>
        <th colspan="2">0</th>
        <th colspan="2">0</th>
        <th colspan="4"></th>
        <th colspan="3"></th>
    </tr>   
</table>

<!--------------------------------------- MarkahFL ---------------------------------------->
<table id="example" class="table table-bordered line-table display">
    <thead class="text-white">
        <tr align="center" style="background-color:#EB5500">
            <th rowspan="3">Kod</th>
            <th rowspan="3">Kriteria</th>
            <th rowspan="3">Kategori bangunan</th>
            <th colspan="7">Pembangunan Baru</th>
            <th rowspan="2" colspan="4">Dokumen Pembuktian</th>
            <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
            <th rowspan="3" colspan="3">Muat Naik Dokumen Sokongan</th>

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

        <!--FL1-->
        <tr align="center">
            <th>FL1</th>
            <th>Penarafan sedia ada</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </th>
            <th><input onblur="findTotalMMR_FL()" class="form-control sum_mmr_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th><input onblur="findTotalMMV_FL()" class="form-control sum_mmv_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th></th>
            <th colspan="4"></th>
            <th></th>
            <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


        </tr>

        <!--FL2-->
        <tr align="center">
            <th>FL2</th>
            <th>Pengurusan fasiliti bangunan</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </th>
            <th><input onblur="findTotalMMR_FL()" class="form-control sum_mmr_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th><input onblur="findTotalMMV_FL()" class="form-control sum_mmv_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th></th>
            <th colspan="4">
            </th>
            <th></th>
            <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


        </tr>

        <!--FL2.1-->
        <tr align="center">
            <th>FL2.1</th>
            <th>Pengurusan data dan ruang</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </th>
            <th><input onblur="findTotalMMR_FL()" class="form-control sum_mmr_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th><input onblur="findTotalMMV_FL()" class="form-control sum_mmv_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th></th>
            <th colspan="4">
            </th>
            <th></th>
            <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


        </tr>

        <!--FL2.2-->
        <tr align="center">
            <th>FL2.2</th>
            <th>Pengurusan sistem penyenggaraan</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </th>
            <th><input onblur="findTotalMMR_FL()" class="form-control sum_mmr_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th><input onblur="findTotalMMV_FL()" class="form-control sum_mmv_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th></th>
            <th colspan="4">
            </th>
            <th></th>
            <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


        </tr>

        <!--FL2.3-->
        <tr align="center">
            <th>FL2.3</th>
            <th>Prestasi penggurusan</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </th>
            <th><input onblur="findTotalMMR_FL()" class="form-control sum_mmr_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th><input onblur="findTotalMMV_FL()" class="form-control sum_mmv_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th></th>
            <th colspan="4">
            </th>
            <th></th>
            <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


        </tr>

        <!--FL3-->
        <tr align="center">
            <th>FL3</th>
            <th>Penyenggaraan lestari</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </th>
            <th><input onblur="findTotalMMR_FL()" class="form-control sum_mmr_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th><input onblur="findTotalMMV_FL()" class="form-control sum_mmv_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th></th>
            <th colspan="4">
            </th>
            <th></th>
            <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


        </tr>

        <!--FL3.1-->
        <tr align="center">
            <th>FL3.1</th>
            <th>Ruang pejabat untuk pasukan penyenggaraan</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </th>
            <th><input onblur="findTotalMMR_FL()" class="form-control sum_mmr_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th><input onblur="findTotalMMV_FL()" class="form-control sum_mmv_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th></th>
            <th colspan="4">
            </th>
            <th></th>
            <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


        </tr>

        <!--FL3.2-->
        <tr align="center">
            <th>FL3.2</th>
            <th>Kontraktor pengurusan fasiliti (FM)</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </th>
            <th><input onblur="findTotalMMR_FL()" class="form-control sum_mmr_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th><input onblur="findTotalMMV_FL()" class="form-control sum_mmv_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th></th>
            <th colspan="4">
            </th>
            <th></th>
            <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


        </tr>

        <!--FL3.3-->
        <tr align="center">
            <th>FL3.3</th>
            <th>Pelan Pengurusan Fasiliti (FM)</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </th>
            <th><input onblur="findTotalMMR_FL()" class="form-control sum_mmr_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th><input onblur="findTotalMMV_FL()" class="form-control sum_mmv_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th></th>
            <th colspan="4">
            </th>
            <th></th>
            <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


        </tr>

        <!--FL3.4-->
        <tr align="center">
            <th>FL3.4</th>
            <th>Manual Operasi dan Penyenggaraan Bangunan</th>
            <th>
                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                    <option hidden selected="">Sila Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </th>
            <th><input onblur="findTotalMMR_FL()" class="form-control sum_mmr_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th><input onblur="findTotalMMV_FL()" class="form-control sum_mmv_fl" type="number" autocapitalize="off"/></th>
            <th></th>
            <th></th>
            <th></th>
            <th colspan="4"> 
            Lorem ipsum</th>
            <th>
                loren ipsum<br>
            </th>
            <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


        </tr>

        <!-- Jumlah MarkahFL-->
        <tr align="center">
            <th colspan="3">Jumlah markah FL</th>
            <th>
                <input class="form-control" id="total_amount_mmr_fl" type="text" autocapitalize="off" name="markahFL1" value="{{$kriteria_phjkr_bangunan ?? ''}}"/>
            </th>
            <th>0</th>
            <th>0</th>
            <th>
                <input class="form-control" id="total_amount_mmv_fl" type="text" autocapitalize="off" name="markahFL2" value="{{$kriteria_phjkr_bangunan ?? ''}}"/>
            </th>
            <th>0</th>
            <th>0</th>
            <th>0</th>
            <th colspan="4"></th>
            <th colspan="3"></th>
        </tr>  
</table>

<!--------------------------------------- MarkahIN ---------------------------------------->
<table id="example" class="table table-bordered line-table display">
    <thead class="text-white">
        <tr align="center" style="background-color:#EB5500">
            <th rowspan="3">Kod</th>
            <th rowspan="3">Kriteria</th>
            <th rowspan="3">Kategori bangunan</th>
            <th colspan="7">Pembangunan Baru</th>
            <th rowspan="2" colspan="4">Dokumen Pembuktian</th>
            <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
            <th rowspan="3" colspan="3">Muat Naik Dokumen Sokongan</th>

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
            <th>IN</th>
            <th colspan="15">INOVASI DALAM REKABENTUK</th>
        </tr>
    </thead>

    <!--IN1-->
    <tr align="center">
        <th>IN1</th>
        <th>Reka Bentuk Inovasi</th>
        <th>
            <select class="form-select" aria-label="Default select example" name="jenisKategori">
                <option hidden selected="">Sila Pilih</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </th>
        <th><input onblur="findTotalMMR_IN()" class="form-control sum_mmr_in" type="number" autocapitalize="off"/></th>
        <th></th>
        <th></th>
        <th><input onblur="findTotalMMV_IN()" class="form-control sum_mmv_in" type="number" autocapitalize="off"/></th>
        <th></th>
        <th></th>
        <th></th>
        <th colspan="4">
          <span>&#183; Laporan cadangan inovasi</span><br>
          <span>&#183; Laporan kajian Return of Investment</span><br>
        </th>
        <th>
          <span>&#183; Lukisan siap bina dan bukti bergambar</span><br>
          <span>&#183; Laporan prestasi inovasi</span><br>
        </th>
        <td colspan="2"><input class="form-control" type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td>


    </tr>

        <!-- Jumlah MarkahIN-->
        <tr align="center">
            <th colspan="3">Jumlah markah IN</th>
            <th>
                <input class="form-control" id="total_amount_mmr_in" type="text" autocapitalize="off" name="markahIN1" value="{{$kriteria_phjkr_bangunan ?? ''}}"/>
            </th>
            <th>0</th>
            <th>0</th>
            <th>
                <input class="form-control" id="total_amount_mmv_in" type="text" autocapitalize="off" name="markahIN2" value="{{$kriteria_phjkr_bangunan ?? ''}}"/>
            </th>
            <th>0</th>
            <th>0</th>
            <th>0</th>
            <th colspan="4"></th>
            <th colspan="3"></th>
        </tr> 
</table>
        </div> <!--Scrollbar-->

                <!--Muat Naik Dokumen Sokongan-->
                <div class="mb-3 text-center">
                    <label class="form-label" for="customFile">MUAT NAIK DOKUMEN SOKONGAN</label>
                    <input type="file" class="form-control" id="customFile" name="dokumenSokongan" value="{{$dokumen ?? ''}}"/>
                </div>


                <!--Button Simpan (TOOLTIPS)-->
                <div class="text-center">
                    <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                    title="Simpan" type="submit">Hantar</button>
                </div>

            </form> <!--Form Markah-->
            {{-- </div> <!--Scrollbar--> --}}
        </div>
        
        
</div>
            
            
        <!--JavaScript-->
            <!--Button Simpan TOOLTIPS-->
            <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
            </script>  
            
            <!--------------------------------------- MarkahTL ---------------------------------------->

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

            <!--------------------------------------- MarkahKT ---------------------------------------->

            <!--MarkahKT for MMR-->
            <script>
                function findTotalMMR_KT() {
                var arr = document.getElementsByClassName('sum_mmr_kt');
                var tot2 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot2 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mmr_kt').value = tot2;
            }

            </script>

            <!--MarkahKT for MMV-->
            <script>
                function findTotalMMV_KT() {
                var arr = document.getElementsByClassName('sum_mmv_kt');
                var tot3 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot3 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mmv_kt').value = tot3;
            }

            </script>

            <!--------------------------------------- MarkahSB ---------------------------------------->

            <!--MarkahSB for MMR-->
            <script>
                function findTotalMMR_SB() {
                var arr = document.getElementsByClassName('sum_mmr_sb');
                var tot4 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot4 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mmr_sb').value = tot4;
            }

            </script>

            <!--MarkahSB for MMV-->
            <script>
                function findTotalMMV_SB() {
                var arr = document.getElementsByClassName('sum_mmv_sb');
                var tot5 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot5 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mmv_sb').value = tot5;
            }

            </script>

            <!--------------------------------------- MarkahPA ---------------------------------------->

            <!--MarkahPA for MMR-->
            <script>
                function findTotalMMR_PA() {
                var arr = document.getElementsByClassName('sum_mmr_pa');
                var tot6 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot6 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mmr_pa').value = tot6;
            }

            </script>

            <!--MarkahPA for MMV-->
            <script>
                function findTotalMMV_PA() {
                var arr = document.getElementsByClassName('sum_mmv_pa');
                var tot7 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot7 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mmv_pa').value = tot7;
            }

            </script>

            <!--------------------------------------- MarkahPD ---------------------------------------->

            <!--MarkahPD for MMR-->
            <script>
                function findTotalMMR_PD() {
                var arr = document.getElementsByClassName('sum_mmr_pd');
                var tot8 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot8 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mmr_pd').value = tot8;
            }

            </script>

            <!--MarkahPD for MMV-->
            <script>
                function findTotalMMV_PD() {
                var arr = document.getElementsByClassName('sum_mmv_pd');
                var tot9 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot9 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mmv_pd').value = tot9;
            }

            </script>

            <!--------------------------------------- MarkahFL ---------------------------------------->

            <!--MarkahFL for MMR-->
            <script>
                function findTotalMMR_FL() {
                var arr = document.getElementsByClassName('sum_mmr_fl');
                var tot10 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot10 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mmr_fl').value = tot10;
            }

            </script>

            <!--MarkahFL for MMV-->
            <script>
                function findTotalMMV_FL() {
                var arr = document.getElementsByClassName('sum_mmv_fl');
                var tot11 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot11 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mmv_fl').value = tot11;
            }

            </script>

            <!--------------------------------------- MarkahIN ---------------------------------------->

            <!--MarkahIN for MMR-->
            <script>
                function findTotalMMR_IN() {
                var arr = document.getElementsByClassName('sum_mmr_in');
                var tot12 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot12 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mmr_in').value = tot12;
            }

            </script>

            <!--MarkahIN for MMV-->
            <script>
                function findTotalMMV_IN() {
                var arr = document.getElementsByClassName('sum_mmv_in');
                var tot13 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot13 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mmv_in').value = tot13;
            }

            </script>

            <!--DataTable-->
            <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

            <script>
                $(document).ready(function () {
                    $('#example').DataTable();
                });
            </script>
@endsection