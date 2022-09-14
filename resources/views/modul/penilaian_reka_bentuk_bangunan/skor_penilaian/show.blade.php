@extends('layouts.base')
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}
{{-- <link rel="stylesheet" type="text/css" href="https://code.jquery.com/jquery-3.5.1.js"> --}}

<link rel="stylesheet" href="/cssfile/skor_penilaian.css">
<link rel="stylesheet" href="/cssfile/style.css">

<!--Style-->
<style>
    /* Muat Naik Fail */
    .body{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
      }

      .drag-area {
        border: 1.23px dashed #8B9EB0;
        height: 150px;
        width: 100px;
        border-radius: 11.07px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #ECF1F6;
      }

      .drag-area header{
        font-size: 12.3022px;
        font-weight: 500;
        display: flex;
        align-items: center;
      }

      .outer-border {
        border: 1.23px solid #F4A258;
        height: 200px;
        width: 900px;
        border-radius: 11.07px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }

      .drag-area_label {
        height: 150px;
        width: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }

      .form__input {
        /* position: absolute; */
        visibility: hidden;
        }
</style>


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
                            <tr class="pg-1" align="center" style="background-color:#EB5500">
                                <th rowspan="3">Kod</th>
                                <th rowspan="3">Kriteria</th>
                                <th rowspan="3" colspan="6">Kategori bangunan</th>
                                <th colspan="17">Pembangunan Baru</th>
                                {{-- <th>Markah</th> --}}
                                <th rowspan="2" colspan="2">Dokumen Pembuktian</th>
                                <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>

                            </tr>
            
                            <tr class="pg-1" align="center" style="background-color:#EB5500">
                                <th colspan="17">Markah</th>
                            </tr>
                        
                            <tr class="pg-1" align="center" style="background-color:#EB5500">
                                {{-- <th>TL</th> --}}
                                {{-- <th>Kriteria</th> --}}
                                {{-- <th>Kategori Bangunan</th> --}}
                                <th colspan="4">MMR</th>
                                <th colspan="4">MS</th>
                                <th colspan="5">MR</th>
                                <th>MMV</th>
                                <th>MS</th>
                                <th>MV</th>
                                <th>ML</th>
                                <th>Rekabentuk (Peringkat 2)</th>
                                <th>Verifikasi (Peringkat 3)</th>
            
                            </tr>
            
                            <tr class="pg-1" style="background-color:#EB5500">
                                <th>TL</th>
                                <th colspan="29">PERANCANGAN & PENGURUSAN TAPAK LESTARI</th>
                            </tr>
                        </thead>
            
                            <!--TL1-->
                            <tr class="pg-1" align="center">
                                <td>TL1</td>
                                <td>Perancangan Tapak</td>
                                {{-- <th><input  type="text" autocapitalize="off" name="jenisKategori"/></th> --}}
                                <td colspan="6">
                                    <select onClick="autoFill(); return true;" class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option id="input1" hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                         
                                </td>

                                <td colspan="4">1</td>
                                <td colspan="4"><input onblur="findTotalMS()" class="sum_ms" type="number" autocapitalize="off" id="markahTL1_MS" name="markahTL1_MS" required/></td>
                                <td colspan="5"><input onblur="findTotalMR()" class="sum_mr" type="number" autocapitalize="off" id="markahTL1_MR" name="markahTL1_MR" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Rancangan Tempatan yang menunjukkan kawasan pembangunan yang terlibat</td>
                                <td>Tidak Berkenaan</td>
                                <td></td>
                                <td colspan="4">
                                    <div class="form-group">
                                        <label for="file">Choose File</label>
                                        <input type="file" class="form-control" name="dokumenSokongan" id="dokumenSokongan"/>
                                    </div>
                                    <button type="submit">Upload</button>
                                {{-- <form class="form"> --}}
                                    {{-- <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label> --}}
                                {{-- </form> --}}
                                </td>
                
                            </tr>
            
                            <!--TL2-->
                            <tr class="pg-1" align="center">
                                <td>TL2</td>
                                <td>Sistem Pengurusan Alam Sekitar (SPAS)</td>
                                <td colspan="6">
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                                 
                                </td>
                                <td colspan="4">3</td>
                                <td colspan="4"><input onblur="findTotalMS()" class="sum_ms" type="number" autocapitalize="off" id="markahTL2_MS" name="markahTL2_MS" required/></td>
                                <td colspan="5"><input onblur="findTotalMR()" class="sum_mr" type="number" autocapitalize="off" id="markahTL2_MR" name="markahTL2_MR" required/></td>
                                <td></td>
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
                                <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                    </td>                        
                                </tr>

                            <!--TL3-->
                            <tr class="pg-1" align="center">
                                <td rowspan="2">TL3</td>
                                <td>i. Pemotongan dan Penambakan tanah</td>
                                <td rowspan="2" colspan="6">
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                                 
                                </td>                            
                                <td colspan="4">3</td>
                                <td colspan="4"><input onblur="findTotalMS()" class="sum_ms" type="number" autocapitalize="off" id="markahTL3_MS" name="markahTL3_MS" required/></td>
                                <td colspan="5"><input onblur="findTotalMR()" class="sum_mr" type="number" autocapitalize="off" id="markahTL3_MR" name="markahTL3_MR" required/></td>
                                <td></td>
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
                                <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                    </td>                        
                                </tr>
            
                            <tr class="pg-1" align="center">
                                <td>ii. Mengekalkan Topografi Tanah</td>
                                {{-- <th>A</th> --}}
                                <td colspan="4">2</td>
                                <td colspan="4"><input onblur="findTotalMS()" class="sum_ms" type="number" autocapitalize="off" id="markahTL32_MS" name="markahTL32_MS" required/></td>
                                <td colspan="5"><input onblur="findTotalMR()" class="sum_mr" type="number" autocapitalize="off" id="markahTL32_MR" name="markahTL32_MR" required/></td>
                                <td></td>
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
                                <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                    </td>
                            </tr>
            
                            <!--TL4-->
                            <tr class="pg-1" align="center">
                                <td>TL4</td>
                                <td>Pelan Kawalan Hakisan & Kelodak (ESCP)</td>
                                <td colspan="6">
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                                 
                                </td>                            
                                <td colspan="4">3</td>
                                <td colspan="4"><input onblur="findTotalMS()" class="sum_ms" type="number" autocapitalize="off" id="markahTL4_MS" name="markahTL4_MS" required/></td>
                                <td colspan="5"><input onblur="findTotalMR()" class="sum_mr" type="number" autocapitalize="off" id="markahTL4_MR" name="markahTL4_MR" required/></td>
                                <td></td>
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
                                <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                    </td>                        
                                </tr>
            
                            <!--TL5-->
                            <tr class="pg-1" align="center">
                                <td>TL5</td>
                                <td>Pemuliharaan dan Pemeliharaan Cerun</td>
                                <td colspan="6">
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                                 
                                </td>                            
                                <td colspan="4">3</td>
                                <td colspan="4"><input onblur="findTotalMS()" class="sum_ms" type="number" autocapitalize="off" id="markahTL5_MS" name="markahTL5_MS" required/></td>
                                <td colspan="5"><input onblur="findTotalMR()" class="sum_mr" type="number" autocapitalize="off" id="markahTL5_MR" name="markahTL5_MR" required/></td>
                                <td></td>
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
                                <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                    </td>                        
                                </tr>

                            <!--TL6-->
                            <tr class="pg-1" align="center">
                                <td>TL6</td>
                                <td>Pengurusan Air Larian Hujan</td>
                                <td colspan="6">
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                                 
                                </td>                            
                                <td colspan="4">3</td>
                                <td colspan="4"><input onblur="findTotalMS()" class="sum_ms" type="number" autocapitalize="off" id="markahTL6_MS" name="markahTL6_MS" required/></td>
                                <td colspan="5"><input onblur="findTotalMR()" class="sum_mr" type="number" autocapitalize="off" id="markahTL6_MR" name="markahTL6_MR" required/></td>
                                <td></td>
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
                                <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                    </td>
                            </tr>
            
                            <!--TL8--> <!--NO INPUT-->
                            <tr class="pg-1" align="center">
                                <td>TL8</td>
                                <td>Landskap strategik</td>
                                <td colspan="6"></td>
                                <td colspan="4"></td>
                                <td colspan="4"></td>
                                <td colspan="5"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4"></td>
            
                            </tr>
            
                            <!--TL8.1-->
                            <tr class="pg-1" align="center">
                                <td>TL8.1</td>
                                <td>Memelihara dan menyenggara pokok yang matang</td>
                                <td colspan="6">
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                                 
                                </td>                            
                                <td colspan="4">3</td>
                                <td colspan="4"><input onblur="findTotalMS()" class="sum_ms" type="number" autocapitalize="off" id="markahTL81_MS" name="markahTL81_MS" required/></td>
                                <td colspan="5"><input onblur="findTotalMR()" class="sum_mr" type="number" autocapitalize="off" id="markahTL81_MR" name="markahTL81_MR" required/></td>
                                <td></td>
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
                                <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>
            
                            </tr>
            
                            <!--TL8.2-->
                            <tr class="pg-1" align="center">
                                <td>TL8.2</td>
                                <td>Menyediakan kawasan hijau</td>
                                <td colspan="6">
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                                 
                                </td>                            
                                <td colspan="4">3</td>
                                <td colspan="4"><input onblur="findTotalMS()" class="sum_ms" type="number" autocapitalize="off" id="markahTL82_MS" name="markahTL82_MS" required/></td>
                                <td colspan="5"><input onblur="findTotalMR()" class="sum_mr" type="number" autocapitalize="off" id="markahTL82_MR" name="markahTL82_MR" required/></td>
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
                                <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>
                            </tr>

                            <!--TL8.3-->
                            <tr class="pg-1" align="center">
                                <td>TL8.3</td>
                                <td>Menyedia dan menyenggara penanaman pokok teduhan</td>
                                <td colspan="6">
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                                 
                                </td>                            
                                <td colspan="4">3</td>
                                <td colspan="4"><input onblur="findTotalMS()" class="sum_ms" type="number" autocapitalize="off" id="markahTL83_MS" name="markahTL83_MS" required/></td>
                                <td colspan="5"><input onblur="findTotalMR()" class="sum_mr" type="number" autocapitalize="off" id="markahTL83_MR" name="markahTL83_MR" required/></td>
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
                                <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>
                            </tr>

                            <!--TL8.4-->
                            <tr class="pg-1" align="center">
                                <td>TL8.4</td>
                                <td>Pemilihan bahan binaan siarkaki (walkway) yang mempunyai daya pantulan
                                    haba yang tinggi
                                </td>
                                <td colspan="6">
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                                 
                                </td>                            
                                <td colspan="4">3</td>
                                <td colspan="4"><input onblur="findTotalMS()" class="sum_ms" type="number" autocapitalize="off" id="markahTL84_MS" name="markahTL84_MS" required/></td>
                                <td colspan="5"><input onblur="findTotalMR()" class="sum_mr" type="number" autocapitalize="off" id="markahTL84_MR" name="markahTL84_MR" required/></td>
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
                                <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>
                            </tr>

                            <!--TL8.5-->
                            <tr class="pg-1" align="center">
                                <td>TL8.5</td>
                                <td>Menyedia dan menyenggara sistem turapan berumput</td>
                                <td colspan="6">
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                                 
                                </td>                            
                                <td colspan="4">3</td>
                                <td colspan="4"><input onblur="findTotalMS()" class="sum_ms" type="number" autocapitalize="off" id="markahTL85_MS" name="markahTL85_MS" required/></td>
                                <td colspan="5"><input onblur="findTotalMR()" class="sum_mr" type="number" autocapitalize="off" id="markahTL85_MR" name="markahTL85_MR" required/></td>
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
                                <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>
                            </tr>

                            <!--TL9--><!--NO INPUT-->
                            <tr class="pg-1" align="center">
                                <td>TL9</td>
                                <td>Bumbung Hijau & Dinding Hijau</td>
                                <td colspan="6"></td>
                                <td colspan="4"></td>
                                <td colspan="4"></td>
                                <td colspan="5"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4"></td>
                            </tr>

                            <!--TL9.1-->
                            <tr class="pg-1" align="center">
                                <td>TL9.1</td>
                                <td>Indeks Pantulan Suria (SRI) mengikut jenis & kecerunan bumbung
                                </td>
                                <td colspan="6">
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                                 
                                </td>                            
                                <td colspan="4">3</td>
                                <td colspan="4"><input onblur="findTotalMS()" class="sum_ms" type="number" autocapitalize="off" id="markahTL91_MS" name="markahTL91_MS" required/></td>
                                <td colspan="5"><input onblur="findTotalMR()" class="sum_mr" type="number" autocapitalize="off" id="markahTL91_MR" name="markahTL91_MR" required/></td>
                                <td></td>
                                <td></td>
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
                                <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>
                            </tr>

                            <!--TL9.2-->
                            <tr class="pg-1" align="center">
                                <td>TL9.2</td>
                                <td>Menggalakkan rekabentuk bumbung/dinding hijau
                                </td>
                                <td colspan="6">
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                                 
                                </td>
                                <td colspan="4">3</td>
                                <td colspan="4"><input onblur="findTotalMS()" class="sum_ms" type="number" autocapitalize="off" id="markahTL92_MS" name="markahTL92_MS" required/></td>
                                <td colspan="5"><input onblur="findTotalMR()" class="sum_mr" type="number" autocapitalize="off" id="markahTL92_MR" name="markahTL92_MR" required/></td>
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
                                <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                    
                                </td>
            
                            </tr>

                            <!--JUMLAH MARKAHTL-->
                            <tr class="pg-1" align="center">
                                <th colspan="6">Jumlah markah TL</th>
                                <td colspan="4">11</td>
                                <td colspan="4"><input  id="total_amount_ms" type="number" autocapitalize="off" name="markahTOTAL_TL_MS" id="markahTOTAL_TL_MS"/></td>
                                <td colspan="5"><input  id="total_amount_mr" type="number" autocapitalize="off" name="markahTOTAL_TL_MR" id="markahTOTAL_TL_MR"/></td>
                                
                                {{-- <td colspan="4"></td> --}}
                            </tr> 

                            <!--Test kira jap-->
                            <tr>
                                <td>
                                    <input onblur="addFunctionOneAddFunctionTwo()"id="total" type="number" autocapitalize="off" name="markahMS" id="markahMS">
                                </td>
                            </tr>

                    </table>
                                           
                    <!--------------------------------------- MarkahKT ---------------------------------------->
                    <table id="example" class="table table-bordered line-table display">
                        <thead class="text-white">
                            <tr class="pg-2" align="center" style="background-color:#EB5500">
                                <th rowspan="3">Kod</th>
                                <th rowspan="3">Kriteria</th>
                                <th rowspan="3">Kategori bangunan</th>
                                <th colspan="14">Pembangunan Baru</th>
                                {{-- <th>Markah</th> --}}
                                <th rowspan="2" colspan="4">Dokumen Pembuktian</th>
                                <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
                                <th rowspan="3" colspan="3">Muat Naik Dokumen Sokongan</th>

                            </tr>

                            <tr class="pg-2" align="center" style="background-color:#EB5500">
                                <th colspan="14">Markah</th>
                            </tr>
                        
                            <tr class="pg-2" align="center" style="background-color:#EB5500">
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

                            <tr class="pg-2" style="background-color:#EB5500">
                                <th>KT</th>
                                <th colspan="28">PENGURUSAN KECEKAPAN TENAGA DAN PENGGUNAAN TENAGA BOLEH BAHARU</th>
                            </tr>
                        </thead>

                            <!--KT1-->
                            <tr class="pg-2" align="center">
                                <td>KT1</td>
                                <td>Rekabentuk bumbung</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                         
                                </td>

                                <td colspan="2">3</td>
                                <td colspan="2"><input onblur="findTotalMS_KT()" class="sum_ms_kt" type="number" id="markahKT1_MS" name="markahKT1_MS" autocapitalize="off" required/></td>
                                <td colspan="2"><input onblur="findTotalMR_KT()" class="sum_mr_kt" type="number" id="markahKT1_MR" name="markahKT1_MR" autocapitalize="off" required/></td>
                                <td colspan="2"></td>
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
                                <td>
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>

                            </tr>

                            <!--KT2--><!--NO INPUT-->
                            <tr class="pg-2" align="center">
                                <td>KT2</td>
                                <td>Orientasi bangunan</td>
                                {{-- <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                                  --}}
                                </td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="4"></td>
                                <td></td>

                            </tr>

                            <!--KT2.1-->
                            <tr class="pg-2" align="center">
                                <td>KT2.1</td>
                                <td>Fasad Utama bangunan yang menghadap orientasi utara-selatan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                                 
                                </td>                            
                                <td colspan="2">3</td>
                                <td colspan="2"><input onblur="findTotalMS_KT()" class="sum_ms_kt" type="number" id="markahKT21_MS" name="markahKT21_MS" autocapitalize="off" required/></td>
                                <td colspan="2"><input onblur="findTotalMR_KT()" class="sum_mr_kt" type="number" id="markahKT21_MR" name="markahKT21_MR" autocapitalize="off" required/></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
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
                                <td>
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>
                                

                            </tr>

                            <!--KT2.2-->
                            <tr class="pg-2" align="center">
                                <td>KT2.2</td>
                                <td>Meminimumkan bukaan pada fasad yang menghadap timur dan barat</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                
                                </td>
                                <td colspan="2">3</td>
                                <td colspan="2"><input onblur="findTotalMS_KT()" class="sum_ms_kt" type="number" id="markahKT22_MS" name="markahKT22_MS" autocapitalize="off" required/></td>
                                <td colspan="2"><input onblur="findTotalMR_KT()" class="sum_mr_kt" type="number" id="markahKT22_MR" name="markahKT22_MR" autocapitalize="off" required/></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <th colspan="2"></th>
                                <th colspan="2"></th>
                                <th colspan="4">
                                    <span>&#183; Laporan penyenggaraan cerun</span><br>
                                </th>
                                <th>
                                    <span>Tidak Berkenaan</span><br>
                                </th>
                                <td>
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>

                            </tr>

                            <!--KT3--><!--NO INPUT-->
                            <tr class="pg-2" align="center">
                                <td>KT3</td>
                                <td>Rekabentuk fasad</td>
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="4"></td>
                                <td></td>
                                <td>
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>
                            </tr>

                            <!--KT3.1-->
                            <tr class="pg-2" align="center">
                                <td>KT3.1</td>
                                <td>Dinding luar bangunan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select> 
                                </td>
                                <td colspan="2">3</td>
                                <td colspan="2"><input onblur="findTotalMS_KT()" class="sum_ms_kt" type="number" id="markahKT31_MS" name="markahKT31_MS" autocapitalize="off" required/></td>
                                <td colspan="2"><input onblur="findTotalMR_KT()" class="sum_mr_kt" type="number" id="markahKT31_MR" name="markahKT31_MR" autocapitalize="off" required/></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="4">
                                    <span>&#183; Katalog spesifikasi U-Value bahan</span><br>
                                    <span>&#183; Pengiraan U-Value bagi rekabentuk dinding</span><br>
                                </td>
                                <td>
                                    <span>&#183; Katalog bahan yang diluluskan untuk pembinaan</span><br>
                                    <span>&#183; Pengiraan U-Value yang disahkan</span><br>
                                </td>
                                <td>
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                    </td>

                            </tr>

                            <!--KT3.2-->
                            <tr class="pg-2" align="center">
                                <td>KT3.2</td>
                                <td>Pengadang Suria Luaran</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                
                                </td>
                                <td colspan="2">3</td>
                                <td colspan="2"><input onblur="findTotalMS_KT()" class="sum_ms_kt" type="number" id="markahKT32_MS" name="markahKT32_MS" autocapitalize="off" required/></td>
                                <td colspan="2"><input onblur="findTotalMR_KT()" class="sum_mr_kt" type="number" id="markahKT32_MR" name="markahKT32_MR" autocapitalize="off" required/></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="4">
                                    <span>&#183; Katalog bahan</span><br>
                                </td>
                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
                                </td>
                                {{-- <td colspan="3"><input  type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}


                            </tr>

                            <!--KT4-->
                            <tr class="pg-2" align="center">
                                <td>KT4</td>
                                <td>OTTV & RTTV</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                
                                </td>
                                <td colspan="2">3</td>
                                <td colspan="2"><input onblur="findTotalMS_KT()" class="sum_ms_kt" type="number" id="markahKT4_MS" name="markahKT4_MS" autocapitalize="off" required/></td>
                                <td colspan="2"><input onblur="findTotalMR_KT()" class="sum_mr_kt" type="number" id="markahKT4_MR" name="markahKT4_MR" autocapitalize="off" required/></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="4">
                                    <span>&#183; Pengiraan OTTV dan RTTV yang disahkan</span><br>
                                </td>
                                <td>
                                    <span>&#183; Pengiraan OTTV dan RTTV yang disahkan</span><br>
                                </td>
                                {{-- <td colspan="3"><input  type="file" name="dokumenSokongan" id="file_dokumenSokongan" value="{{$dokumen_sokongan ?? ''}}"></td> --}}


                            </tr>

                            <!--KT5--><!--NO INPUT-->
                            <tr class="pg-2" align="center">
                                <td>KT5</td>
                                <td>Kecekapan pencahayaan</td>
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"><td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="4"></td>
                                <td colspan="3"></td>
                                <td></td>
                                

                            </tr>

                            <!--KT5.2-->
                            <tr class="pg-2" align="center">
                                <td>KT5.2</td>
                                <td>Kawalan Pencahayaan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                
                                </td>
                                <td colspan="2">3</td>
                                <td colspan="2"><input onblur="findTotalMS_KT()" class="sum_ms_kt" type="number" id="markahKT52_MS" name="markahKT52_MS" autocapitalize="off" required/></td>
                                <td colspan="2"><input onblur="findTotalMR_KT()" class="sum_mr_kt" type="number" id="markahKT52_MR" name="markahKT52_MR" autocapitalize="off" required/></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="4">
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td>
                                <td>
                                    <span> &#183; Lukisan siap bina yang menunjukkan lokasi suis</span><br>
                                    <span> &#183; Bukti bergambar</span><br>
                                </td>
                                <td>
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                    </td>

                            </tr>

                            <!--KT8-->
                            <tr class="pg-2" align="center">
                                <td>KT8</td>
                                <td>Tenaga Boleh Baharu (TBB)</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>                
                                </td>
                                <td colspan="2">3</td>
                                <td colspan="2"><input onblur="findTotalMS_KT()" class="sum_ms_kt" type="number" id="markahKT8_MS" name="markahKT8_MS" autocapitalize="off" required/></td>
                                <td colspan="2"><input onblur="findTotalMR_KT()" class="sum_mr_kt" type="number" id="markahKT8_MR" name="markahKT8_MR" autocapitalize="off" required/></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="4">
                                    <span>&#183; Mengemukakan lukisan rekabentuk sistem dan simulasi pengiraan
                                        bagi anggaran tenaga baharu yang boleh dihasilkan oleh sistem tersebut</span><br>
                                </td>
                                <td>
                                    <span> &#183; Salinan lukisan siap bina dan laporan uji terima yang mematuhi kehendak rekabentuk</span><br>
                                    <span> &#183; Pengiraan penjanaan tenaga boleh baharu berbanding jumlah penggunaan tenaga tahunan bangunan</span><br>
                                </td>
                                <td>
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                    </td>

                            </tr>

                            <!--KT11-->
                            <tr class="pg-2" align="center">
                                <td>KT11</td>
                                <td>Pengujian dan pentauliahan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>  
                                </td>
                                <td colspan="2">3</td>
                                <td colspan="2"><input onblur="findTotalMS_KT()" class="sum_ms_kt" type="number" id="markahKT11_MS" name="markahKT11_MS" autocapitalize="off" required/></td>
                                <td colspan="2"><input onblur="findTotalMR_KT()" class="sum_mr_kt" type="number" id="markahKT11_MR" name="markahKT11_MR" autocapitalize="off" required/></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="4">
                                    <span>&#183; Pelan pengujian dan pentauliahan</span><br>
                                </td>
                                <td>
                                    <span>&#183; Dokumen lengkap pengujian dan pentauliahan yang telah disahkan</span><br>
                                </td>
                                <td>
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                    </td>

                            </tr>

                            <!--JUMLAH MARKAHKT-->
                            <tr class="pg-2" align="center">
                                <th colspan="3">Jumlah markah KT</th>
                                <th colspan="2">0</th>
                                <th colspan="2"><input  id="total_amount_ms_kt" type="text" autocapitalize="off" id="markahTOTAL_KT_MS" name="markahTOTAL_KT_MS"/></th>
                                <th colspan="2"><input  id="total_amount_mr_kt" type="text" autocapitalize="off" id="markahTOTAL_KT_MR" name="markahTOTAL_KT_MR"/></th>
                                <th colspan="2">0</th>
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
                                <tr class="pg-3" align="center" style="background-color:#EB5500">
                                    <th rowspan="3">Kod</th>
                                    <th rowspan="3">Kriteria</th>
                                    <th rowspan="3">Kategori bangunan</th>
                                    <th colspan="7">Pembangunan Baru</th>
                                    <th rowspan="2" colspan="4">Dokumen Pembuktian</th>
                                    <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
                                    <th rowspan="3" colspan="3">Muat Naik Dokumen Sokongan</th>

                                </tr>

                                <tr class="pg-3" align="center" style="background-color:#EB5500">
                                    <th colspan="7">Markah</th>
                                </tr>

                                <tr class="pg-3" align="center" style="background-color:#EB5500">
                                    <th>MMR</th>
                                    <th>MS</th>
                                    <th>MR</th>
                                    <th>MMV</th>
                                    <th>MS</th>
                                    <th>MV</th>
                                    <th>ML</th>
                                    <th colspan="2">Rekabentuk (Peringkat 2)</th>
                                    <th>Verifikasi (Peringkat 3)</th>

                                </tr>

                                <tr class="pg-3" style="background-color:#EB5500">
                                    <th>SB</th>
                                    <th colspan="20">PENGURUSAN SUMBER DAN BAHAN</th>
                                </tr>
                            </thead>

                            <!--SB1-->
                            <tr class="pg-3" align="center">
                                <td>SB1</td>
                                <td>Sistem Binaan Berindustri (IBS)</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>    
                                </td>
                                <td></td>
                                <td><input onblur="findTotalMS_SB()" class="sum_ms_sb" type="number" id="markahSB1_MS" name="markahSB1_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_SB()" class="sum_mr_sb" type="number" id="markahSB1_MR" name="markahSB1_MR" autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4">
                                    <span>&#183; Cadangan sistem IBS oleh pembekal IBS berdaftar</span><br>
                                    <span>&#183; Laporan Pengiraan Skor IBS</span><br>
                                </td>
                                <td>
                                    <span>&#183; Lukisan pembinaan IBS</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
                                </td>
                                <td>
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                    </td>

                            </tr>

                            <!--SB2-->
                            <tr class="pg-3" align="center">
                                <td>SB2</td>
                                <td>Produk hijau</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td><input onblur="findTotalMS_SB()" class="sum_ms_sb" type="number" id="markahSB2_MS" name="markahSB2_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_SB()" class="sum_mr_sb" type="number" id="markahSB2_MR" name="markahSB2_MR" autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4">
                                    <span>&#183; Sijil Pengesahan produk hijau</span><br>
                                    <span>&#183; spesifikasi produk</span><br>
                                    <span>&#183; Senarai permarkahan produk hijau berdasarkan GPSS</span><br>                    
                                </td>
                                <td>
                                    <span>&#183; Brosur pembekal</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Borang pengiraan skor GPSS</span><br>

                                </td>
                                <td>
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                    </td>

                            </tr>

                            <!--SB3-->
                            <tr class="pg-3" align="center">
                                <td>SB3</td>
                                <td>Pengurusan sisa semasa pembinaan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td><input onblur="findTotalMS_SB()" class="sum_ms_sb" type="number" id="markahSB3_MS" name="markahSB3_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_SB()" class="sum_mr_sb" type="number" id="markahSB3_MR" name="markahSB3_MR" autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4">
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
                                <td>
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>
                                
                            </tr>

                            <!--SB4-->
                            <tr class="pg-3" align="center">
                                <td>SB4</td>
                                <td>3r-Semasa Operasi</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td><input onblur="findTotalMS_SB()" class="sum_ms_sb" type="number" id="markahSB4_MS" name="markahSB4_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_SB()" class="sum_mr_sb" type="number" id="markahSB4_MR" name="markahSB4_MR" autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4">
                                    <span>&#183; Pelan pengurusan sisa domestik</span><br>
                                    <span>&#183; Pelan kedudukan tong 3Rdi semua aras bangunan</span><br>
                                    <span>&#183; Lokasi kebuk sampah</span><br>                    
                                </td>
                                <td>
                                    <span>&#183; Pematuhan pelan pengurusan sisa domestik</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
                                </td>
                                <td>
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>
                                <tr>

                                <!--Jumlah MarkahSB-->
                                <tr class="pg-3" align="center">
                                    <th colspan="3">Jumlah markah SB</th>
                                    <th>0</th>
                                    <th><input  id="total_amount_mr_sb" type="text" autocapitalize="off" id="markahTOTAL_SB_MS" name="markahTOTAL_SB_MS"/></th>
                                    <th><input  id="total_amount_ms_sb" type="text" autocapitalize="off" id="markahTOTAL_SB_MR" name="markahTOTAL_SB_MR"/></th>
                                    <th>0</th>
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
                            <tr class="pg-4" align="center" style="background-color:#EB5500">
                                <th rowspan="3">Kod</th>
                                <th rowspan="3">Kriteria</th>
                                <th rowspan="3">Kategori bangunan</th>
                                <th colspan="7">Pembangunan Baru</th>
                                <th rowspan="2" colspan="4">Dokumen Pembuktian</th>
                                <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
                                <th rowspan="3" colspan="3">Muat Naik Dokumen Sokongan</th>
                            </tr>

                            <tr class="pg-4" align="center" style="background-color:#EB5500">
                                <th colspan="7">Markah</th>
                            </tr>
                        
                            <tr class="pg-4" align="center" style="background-color:#EB5500">
                                <th>MMR</th>
                                <th>MS</th>
                                <th>MR</th>
                                <th>MMV</th>
                                <th>MS</th>
                                <th>MV</th>
                                <th>ML</th>
                                <th colspan="2">Rekabentuk (Peringkat 2)</th>
                                <th>Verifikasi (Peringkat 3)</th>

                            </tr>

                            <tr class="pg-4" style="background-color:#EB5500">
                                <th>PA</th>
                                <th colspan="15">PENGURUSAN KECEKAPAN PENGGUNAAN AIR</th>
                            </tr>
                        </thead>

                            <!--PA1-->
                            <tr class="pg-4" align="center">
                                <td>PA1</td>
                                <td>Produk Kecekapan Air</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td>1</td>
                                <td><input onblur="findTotalMS_PA()" class="sum_ms_pa" type="number" id="markahPA1_MS" name="markahPA1_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_PA()" class="sum_mr_pa" type="number" id="markahPA1_MR" name="markahPA1_MR" autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4">
                                                <span>&#183; Katalog bahan dan sampai yang telah disahkan WELPS dan SPAN</span><br>
                                                <span>&#183; Pengiraan penjimatan</span><br>
                                </td>
                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Pensijilan WELPS</span><br>
                                </td>
                                <td>
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                    </td>

                            </tr>

                            <!--PA2-->
                            <tr class="pg-4" align="center">
                                <td>PA2</td>
                                <td>Penjimatan Penggunaan Air Dalam Bangunan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    </select>
                                </td>
                                <td>1</td>
                                <td><input onblur="findTotalMS_PA()" class="sum_ms_pa" type="number" id="markahPA2_MS" name="markahPA2_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_PA()" class="sum_mr_pa" type="number" id="markahPA2_MR" name="markahPA2_MR" autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4">
                                                <span>&#183; Katalog bahan dan sampai yang telah disahkan WELPS dan SPAN</span><br>
                                                <span>&#183; Pengiraan</span><br>
                                </td>
                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Pensijilan WELPS</span><br>
                                </td>
                                <td>
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                    </td>

                            </tr>

                            <!--PA3-->
                            <tr class="pg-4" align="center">
                                <td rowspan="2">PA3</td>
                                <td>i. SPAH</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td>1</td>
                                <td><input onblur="findTotalMS_PA()" class="sum_ms_pa" type="number" id="markahPA3_MS" name="markahPA3_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_PA()" class="sum_mr_pa" type="number" id="markahPA3_MR" name="markahPA3_MR" autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4">
                                                <span>&#183; Katalog bahan dan sampai yang telah disahkan WELPS dan SPAN</span><br>
                                                <span>&#183; Pengiraan</span><br>
                                </td>
                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Pensijilan WELPS</span><br>
                                </td>
                                <td>
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>

                            </tr>

                            <tr class="pg-4" align="center">
                                {{-- <td rowspan="2">PA3</td> --}}
                                <td>ii. Kitar Semula Air Sisa</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td>1</td>
                                <td><input onblur="findTotalMS_PA()" class="sum_ms_pa" type="number" id="markahPA32_MS" name="markahPA32_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_PA()" class="sum_mr_pa" type="number" id="markahPA32_MR" name="markahPA32_MR" autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4">
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
                                <td>
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>

                            </tr>

                            <!-- Jumlah MarkahPA-->
                            <tr class="pg-4" align="center">
                                <th colspan="3">Jumlah markah PA</th>
                                <th>0</th>
                                <th><input  id="total_amount_ms_pa" type="number" autocapitalize="off" name="markahTOTAL_PA_MS"/></th>
                                <th><input  id="total_amount_mr_pa" type="number" autocapitalize="off" name="markahTOTAL_PA_MR"/></th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                                <th colspan="4"></th>
                                <th colspan="3"></th>
                            </tr> 

                    </table>

                    <!--------------------------------------- MarkahPD ---------------------------------------->
                    <table id="example" class="table table-bordered line-table display">
                        <thead class="text-white">
                            <tr class="pg-5" align="center" style="background-color:#EB5500">
                                <th rowspan="3">Kod</th>
                                <th rowspan="3">Kriteria</th>
                                <th rowspan="3">Kategori bangunan</th>
                                <th colspan="7">Pembangunan Baru</th>
                                <th rowspan="2" colspan="4">Dokumen Pembuktian</th>
                                <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
                            </tr>

                            <tr class="pg-5" align="center" style="background-color:#EB5500">
                                <th colspan="7">Markah</th>
                            </tr>

                            <tr class="pg-5" align="center" style="background-color:#EB5500">
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

                            <tr class="pg-5" style="background-color:#EB5500">
                                <th>PD</th>
                                <th colspan="24">PENGURUSAN KUALITI PERSEKITARAN DALAMAN</th>
                            </tr>
                        </thead>

                        <!--PD2--> <!--No input-->
                        <tr class="pg-5" align="center">
                            <td>PD2</td>
                            <td>Perancangan ruang</td>
                            <td>
                                {{-- <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select> --}}
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="4"></td>
                            <td></td>
                            <td>
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td>

                        </tr>

                        <!--PD2.4-->
                        <tr class="pg-5" align="center">
                            <td>PD2.4</td>
                            <td>Ketinggian siling yang efektif</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td></td>
                            <td><input onblur="findTotalMS_PD()" class="sum_ms_pd" id="markahPD24_MS" name="markahPD24_MS" type="number" autocapitalize="off" required/></td>
                            <td><input onblur="findTotalMR_PD()" class="sum_mr_pd" id="markahPD24_MR" name="markahPD24_MR" type="number" autocapitalize="off" required/></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="4">
                                            <span>&#183; Lukisan keratan bangunan yang menunjukkan
                                                ukuran (lantai ke siling)</span><br>
                            </td>
                            <td>
                                <span>&#183; Lukisan siap bina</span><br>
                            </td>
                            <td>
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td>

                        </tr>

                        <!--PD2.5-->
                        <tr class="pg-5" align="center">
                            <td>PD2.5</td>
                            <td>Warna cerah di permukaan dinding dan siling</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td></td>
                            <td><input onblur="findTotalMS_PD()" class="sum_ms_pd" type="number" id="markahPD25_MS" name="markahPD25_MS" autocapitalize="off" required/></td>
                            <td><input onblur="findTotalMR_PD()" class="sum_mr_pd" type="number" id="markahPD25_MR" name="markahPD25_MR"autocapitalize="off" required/></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="4">
                                            <span>&#183; Katalog dan sampel menunjukkan warna yang dicadangkan</span><br>
                            </td>
                            <td>
                                <span>&#183; Bukti bergambar bagi mengesahkan skima warna yang digunakan</span><br>
                            </td>
                            <td>
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td>

                        </tr>

                        <!--PD3--> <!--No input-->
                        <tr class="pg-5" align="center">
                            <td>PD3</td>
                            <td>Kualiti Visual</td>
                            <td>
                                {{-- <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select> --}}
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="4">
                            </td>
                            <td></td>
                            <td>
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td>

                        </tr>

                        <!--PD3.1-->
                        <tr class="pg-5" align="center">
                            <td>PD3.1</td>
                            <td>Faktor Pencahayaan Siang (DF)</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td></td>
                            <td><input onblur="findTotalMS_PD()" class="sum_ms_pd" type="number" id="markahPD31_MS" name="markahPD31_MS" autocapitalize="off" required/></td>
                            <td><input onblur="findTotalMR_PD()" class="sum_mr_pd" type="number" id="markahPD31_MR" name="markahPD31_MR" autocapitalize="off" required/></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="4">
                                            <span>&#183; Lukisan tampak dan jadual tingkap</span><br>
                                            <span>&#183; Pengiraan keluasan lantai yang menunjukkan
                                                30% daripada NLA yang menunjukkan nilai DF 1.0% - 3.5%</span><br>
                                            <span>&#183; Laporan simulasi (jika ada)</span><br>
                            </td>
                            <td>
                                <span>&#183; Lukisan siap bina</span><br>
                            </td>
                            <td>
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td>

                        </tr>

                        <!--PD3.2-->
                        <tr class="pg-5" align="center">
                            <td>PD3.2</td>
                            <td>Menggunakan rak cahaya (light shelves)</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td></td>
                            <td><input onblur="findTotalMS_PD()" class="sum_ms_pd" type="number" id="markahPD32_MS" name="markahPD32_MS" autocapitalize="off" required/></td>
                            <td><input onblur="findTotalMR_PD()" class="sum_mr_pd" type="number" id="markahPD32_MR" name="markahPD32_MR" autocapitalize="off" required/></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="4">
                                            <span>&#183; Rekabentuk rak cahaya</span><br>
                                            <span>&#183; Lukisan terperinci</span><br>
                                            <span>&#183; Laporan simulasi, jika ada</span><br>
                            </td>
                            <td>
                                <span>&#183; Lukisan pemasangan</span><br>
                                <span>&#183; Lukisan siap bina</span><br>
                                <span>&#183; Bukti bergambar</span><br>

                            </td>
                            <td>
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td>

                        </tr>

                        <!--PD3.3-->
                        <tr class="pg-5" align="center">
                            <td>PD3.3</td>
                            <td>Kawalan Tahap Kesilauan</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td></td>
                            <td><input onblur="findTotalMS_PD()" class="sum_ms_pd" type="number" id="markahPD33_MS" name="markahPD33_MS" autocapitalize="off" required/></td>
                            <td><input onblur="findTotalMR_PD()" class="sum_mr_pd" type="number" id="markahPD33_MR" name="markahPD33_MR" autocapitalize="off" required/></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="4">
                                            <span>&#183; Katalog dan sampel menunjukkan bidai yang dicadangkan</span><br>
                            </td>
                            <td>
                                <span>&#183; Lukisan siap bina dan bukti bergambar
                                    bagi mengesahkan bidai yang digunakan</span><br>
                                <span>&#183; Laporan prestasi pencahayaan (jika ada)</span><br>
                            </td>
                            <td>
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td>

                        </tr>

                        <!--PD3.4-->
                        <tr class="pg-5" align="center">
                            <td>PD3.4</td>
                            <td>Akses visual kepada pandangan di luar</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td></td>
                            <td><input onblur="findTotalMS_PD()" class="sum_ms_pd" type="number" id="markahPD34_MS" name="markahPD34_MS" autocapitalize="off" required/></td>
                            <td><input onblur="findTotalMR_PD()" class="sum_mr_pd" type="number" id="markahPD34_MR" name="markahPD34_MR" autocapitalize="off" required/></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="4">
                                            <span>&#183; Pelan susuratur</span><br>
                                            <span>&#183; Rekabentuk awalan yang menunjukkan
                                                pembahagian ruang yang bebas halangan binaan kekal</span><br>
                                            <span>&#183; Lukisan terperinci dinding sesekat berserta spesifikasi</span><br>
                            </td>
                            <td>
                                <span>&#183; Katalog dan sample bahan yang diluluskan oleh S.O.</span><br>
                                <span>&#183; Lukisan Siap Bina</span><br>
                            </td>
                            <td>
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td>

                        </tr>

                        <!--PD8-->
                        <tr class="pg-5" align="center">
                            <td>PD8</td>
                            <td>Kualiti Udara Dalaman (IAQ)</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td></td>
                            <td><input onblur="findTotalMS_PD()" class="sum_ms_pd" type="number" id="markahPD8_MS" name="markahPD8_MS" autocapitalize="off" required/></td>
                            <td><input onblur="findTotalMR_PD()" class="sum_mr_pd" type="number" id="markahPD8_MR" name="markahPD8_MR" autocapitalize="off" required/></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="4">
                                            <span>&#183; Katalog dan sijil pengesahan penarafan eco-label bahan</span><br>
                                            <span>&#183; Spesifikasi teknikal pembekal</span><br>
                            </td>
                            <td>
                                <span>&#183; Katalog dan kaedah pemasangan (method statement) yang telah
                                    disahkan oleh Pegawai yang kompeten</span><br>
                                <span>&#183; Gambar semasa kerja pemasangan</span><br>
                                <span>&#183; Lukisan siap bina</span><br>
                            </td>
                            <td>
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td>

                        </tr>

                        <!--PD10-->
                        <tr class="pg-5" align="center">
                            <td>PD10</td>
                            <td>Kaji Selidik Keselesaan Penghuni</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td></td>
                            <td><input onblur="findTotalMS_PD()" class="sum_ms_pd" type="number" id="markahPD10_MS" name="markahPD10_MS" autocapitalize="off" required/></td>
                            <td><input onblur="findTotalMR_PD()" class="sum_mr_pd" type="number" id="markahPD10_MR" name="markahPD10_MR" autocapitalize="off" required/></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="4"> 
                                <span>&#183; Tidak berkaitan (TB)</span></td>
                            <td>
                                <span>&#183; Laporan maklumbalas kaji selidik</span><br>
                            </td>
                            <td>
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td>

                        </tr>

                        <!-- Jumlah MarkahPD-->
                        <tr class="pg-5" align="center">
                            <th colspan="3">Jumlah markah PD</th>
                            <th>0</th>
                            <th><input  id="total_amount_ms_pd" type="text" autocapitalize="off" name="markahTOTAL_PD_MS"/></th>
                            <th><input  id="total_amount_mr_pd" type="text" autocapitalize="off" name="markahTOTAL_PD_MR"/></th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th colspan="4"></th>
                            <th colspan="3"></th>
                        </tr>   
                    </table>

                    <!--------------------------------------- MarkahFL ---------------------------------------->
                    <table id="example" class="table table-bordered line-table display">
                        <thead class="text-white">
                            <tr class="pg-6" align="center" style="background-color:#EB5500">
                                <th rowspan="3">Kod</th>
                                <th rowspan="3">Kriteria</th>
                                <th rowspan="3">Kategori bangunan</th>
                                <th colspan="7">Pembangunan Baru</th>
                                <th rowspan="2" colspan="4">Dokumen Pembuktian</th>
                                <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
                                <th rowspan="3" colspan="3">Muat Naik Dokumen Sokongan</th>

                            </tr>

                            <tr class="pg-6" align="center" style="background-color:#EB5500">
                                <th colspan="7">Markah</th>
                            </tr>
                        
                            <tr class="pg-6" align="center" style="background-color:#EB5500">
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

                            <tr class="pg-6" style="background-color:#EB5500">
                                <th>FL</th>
                                <th colspan="15">PENGURUSAN FASILITI LESTARI</th>
                            </tr>
                        </thead>

                            <!--FL1-->
                            <tr class="pg-6" align="center">
                                <td>FL1</td>
                                <td>Penarafan sedia ada</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" id="markahFL1_MS" name="markahFL1_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_FL()" class="sum_mr_fl" type="number" id="markahFL1_MR" name="markahFL1_MR" autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4"></td>
                                <td></td>
                                <td colspan="2">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>

                            </tr>

                            <!--FL2-->
                            <tr class="pg-6" align="center">
                                <td>FL2</td>
                                <td>Pengurusan fasiliti bangunan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" id="markahFL2_MS" name="markahFL2_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_FL()" class="sum_mr_fl" type="number" id="markahFL2_MR" name="markahFL2_MR" autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4">
                                </td>
                                <td></td>
                                <td colspan="2">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>

                            </tr>

                            <!--FL2.1-->
                            <tr class="pg-6" align="center">
                                <td>FL2.1</td>
                                <td>Pengurusan data dan ruang</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" id="markahFL21_MS" name="markahFL21_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_FL()" class="sum_mr_fl" type="number" id="markahFL21_MR" name="markahFL21_MR" autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4">
                                </td>
                                <td></td>
                                <td colspan="2">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>

                            </tr>

                            <!--FL2.2-->
                            <tr class="pg-6" align="center">
                                <td>FL2.2</td>
                                <td>Pengurusan sistem penyenggaraan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" id="markahFL22_MS" name="markahFL22_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_FL()" class="sum_mr_fl" type="number" id="markahFL22_MR" name="markahFL22_MR" autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4">
                                </td>
                                <td></td>
                                <td colspan="2">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>

                            </tr>

                            <!--FL2.3-->
                            <tr class="pg-6" align="center">
                                <td>FL2.3</td>
                                <td>Prestasi penggurusan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" id="markahFL23_MS" name="markahFL23_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_FL()" class="sum_mr_fl" type="number" id="markahFL23_MR" name="markahFL23_MR" autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4">
                                </td>
                                <td></td>
                                <td colspan="2">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>

                            </tr>

                            <!--FL3-->
                            <tr class="pg-6" align="center">
                                <td>FL3</td>
                                <td>Penyenggaraan lestari</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" id="markahFL3_MS" name="markahFL3_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_FL()" class="sum_mr_fl" type="number" id="markahFL3_MR" name="markahFL3_MR" autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4">
                                </td>
                                <td></td>
                                <td colspan="2">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>

                            </tr>

                            <!--FL3.1-->
                            <tr class="pg-6" align="center">
                                <td>FL3.1</td>
                                <td>Ruang pejabat untuk pasukan penyenggaraan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" id="markahFL31_MS" name="markahFL31_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_FL()" class="sum_mr_fl" type="number" id="markahFL31_MR" name="markahFL31_MR" autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4">
                                </td>
                                <td></td>
                                <td colspan="2">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>

                            </tr>

                            <!--FL3.2-->
                            <tr class="pg-6" align="center">
                                <td>FL3.2</td>
                                <td>Kontraktor pengurusan fasiliti (FM)</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" id="markahFL32_MS" name="markahFL32_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_FL()" class="sum_mr_fl" type="number" id="markahFL32_MR" name="markahFL32_MR" autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4">
                                </td>
                                <td></td>
                                <td colspan="2">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>

                            </tr>

                            <!--FL3.3-->
                            <tr class="pg-6" align="center">
                                <td>FL3.3</td>
                                <td>Pelan Pengurusan Fasiliti (FM)</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" id="markahFL33_MS" name="markahFL33_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_FL()" class="sum_mr_fl" type="number" id="markahFL33_MR" name="markahFL33_MR"autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4">
                                </td>
                                <td></td>
                                <td colspan="2">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>

                            </tr>

                            <!--FL3.4-->
                            <tr class="pg-6" align="center">
                                <td>FL3.4</td>
                                <td>Manual Operasi dan Penyenggaraan Bangunan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" id="markahFL34_MS" name="markahFL34_MS" autocapitalize="off" required/></td>
                                <td><input onblur="findTotalMR_FL()" class="sum_mr_fl" type="number" id="markahFL34_MR" name="markahFL34_MR" autocapitalize="off" required/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="4"> 
                                Lorem ipsum</td>
                                <td>
                                    loren ipsum<br>
                                </td>
                                <td colspan="2">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>

                            </tr>

                            <!-- Jumlah MarkahFL-->
                            <tr class="pg-6" align="center">
                                <th colspan="3">Jumlah markah FL</th>
                                <th>
                                   0
                                </th>
                                <th><input  id="total_amount_ms_fl" type="text" autocapitalize="off" name="markahTOTAL_FL_MS"/></th>
                                <th><input  id="total_amount_mr_fl" type="text" autocapitalize="off" name="markahTOTAL_FL_MR"/></th>
                                <th>
                                    0
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
                            <tr class="pg-7" align="center" style="background-color:#EB5500">
                                <th rowspan="3">Kod</th>
                                <th rowspan="3">Kriteria</th>
                                <th rowspan="3">Kategori bangunan</th>
                                <th colspan="7">Pembangunan Baru</th>
                                <th rowspan="2" colspan="4">Dokumen Pembuktian</th>
                                <th rowspan="3">Ulasan/Maklumbalas Penilai</th>
                                <th rowspan="3" colspan="3">Muat Naik Dokumen Sokongan</th>

                            </tr>

                            <tr class="pg-7" align="center" style="background-color:#EB5500">
                                <th colspan="7">Markah</th>
                            </tr>
                        
                            <tr class="pg-7" align="center" style="background-color:#EB5500">
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

                            <tr class="pg-7" style="background-color:#EB5500">
                                <th>IN</th>
                                <th colspan="15">INOVASI DALAM REKABENTUK</th>
                            </tr>
                        </thead>

                        <!--IN1-->
                        <tr class="pg-7" align="center">
                            <td>IN1</td>
                            <td>Reka Bentuk Inovasi</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori" required>
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td>1</td>
                            <td><input onblur="findTotalMS_IN()" class="sum_ms_in" type="number" id="markahIN1_MS" name="markahIN1_MS" autocapitalize="off" required/></td>
                            <td><input onblur="findTotalMR_IN()" class="sum_mr_in" type="number" id="markahIN2_MR" name="markahIN2_MR" autocapitalize="off" required/></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="4">
                            <span>&#183; Laporan cadangan inovasi</span><br>
                            <span>&#183; Laporan kajian Return of Investment</span><br>
                            </td>
                            <td>
                            <span>&#183; Lukisan siap bina dan bukti bergambar</span><br>
                            <span>&#183; Laporan prestasi inovasi</span><br>
                            </td>
                            <td colspan="2">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td>

                        </tr>

                            <!-- Jumlah MarkahIN-->
                            <tr class="pg-7" align="center">
                                <th colspan="3">Jumlah markah IN</th>
                                <th>
                                    0
                                </th>
                                <th><input  id="total_amount_ms_in" type="text" autocapitalize="off" name="markahTOTAL_IN_MS"/></th>
                                <th>
                                    <input  id="total_amount_mr_in" type="text" autocapitalize="off" name="markahTOTAL_IN_MR"/>
                                </th>
                                <th>0
                                </th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                                <th colspan="4"></th>
                                <th colspan="3"></th>
                            </tr> 
                    </table>

                    
                    <div class="mt-3 text-center">
                    <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                    </div>
                </div>          <!--Scrollbar-->


                    <!--Button Simpan (TOOLTIPS)-->
                    <!--Page 1-->
                    <div class="mt-3 text-center">
                        {{-- <button class="btn btn-primary pg-1" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button> --}}
                        <button class="btn btn-secondary pg-1" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button2()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 2-->
                    <div class="mt-3 text-center pg-2">
                        {{-- <button class="btn btn-primary pg-2" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button> --}}
                        <button class="btn btn-secondary pg-2" data-toggle="tooltip" data-placement="bottom" 
                        title="Kembali" onclick="button1()" type="submit">Kembali</button>
                        <button class="btn btn-secondary pg-2" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button3()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 3-->
                    <div class="mt-3 text-center pg-3">
                        {{-- <button class="btn btn-primary pg-3" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button> --}}
                        <button class="btn btn-secondary pg-3" data-toggle="tooltip" data-placement="bottom" 
                        title="Kembali" onclick="button2()" type="submit">Kembali</button>
                        <button class="btn btn-secondary pg-3" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button4()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 4-->
                    <div class="mt-3 text-center pg-4">
                        {{-- <button class="btn btn-primary pg-4" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button> --}}
                        <button class="btn btn-secondary pg-4" data-toggle="tooltip" data-placement="bottom" 
                        title="Kembali" onclick="button3()" type="submit">Kembali</button>
                        <button class="btn btn-secondary pg-4" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button5()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 5-->
                    <div class="mt-3 text-center pg-5">
                        {{-- <button class="btn btn-primary pg-5" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button> --}}
                        <button class="btn btn-secondary pg-5" data-toggle="tooltip" data-placement="bottom" 
                        title="Kembali" onclick="button4()" type="submit">Kembali</button>
                        <button class="btn btn-secondary pg-5" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button6()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 6-->
                    <div class="mt-3 text-center pg-6">
                        {{-- <button class="btn btn-primary pg-6" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button> --}}
                        <button class="btn btn-secondary pg-6" data-toggle="tooltip" data-placement="bottom" 
                        title="Kembali" onclick="button5()" type="submit">Kembali</button>
                        <button class="btn btn-secondary pg-6" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button7()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 7-->
                    <div class="mt-3 text-center pg-7">
                        {{-- <button class="btn btn-primary pg-7" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button> --}}
                        <button class="btn btn-secondary pg-7" data-toggle="tooltip" data-placement="bottom" 
                        title="Kembali" onclick="button6()" type="submit">Kembali</button>
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
            
            <!--MS: Markah Sasaran-->
            <!--MR: Markah Rekabentuk-->
            <!--------------------------------------- MarkahTL ---------------------------------------->

            <!--MarkahTL for MS-->
            <script>
                function findTotalMS() {
                var sum_ms = document.getElementsByClassName('sum_ms');
                var tot = 0;
                for (var i = 0; i < sum_ms.length; i++) {
                    if (parseFloat(sum_ms[i].value))
                    tot += parseFloat(sum_ms[i].value);
                }
                document.getElementById('total_amount_ms').value = tot;

                //display the total of inputs
                sum_ms.innerText = tot;
            }

            </script>

            <!--MarkahTL for MR-->
            <script>
                function findTotalMR() {
                var sum_mr = document.getElementsByClassName('sum_mr');
                var tot1 = 0;
                for (var i = 0; i < sum_mr.length; i++) {
                    if (parseFloat(sum_mr[i].value))
                    tot1 += parseFloat(sum_mr[i].value);
                }
                document.getElementById('total_amount_mr').value = tot1;
            }


            </script>

            <!--------------------------------------- MarkahKT ---------------------------------------->

            <!--MarkahKT for MS-->
            <script>
                function findTotalMS_KT() {
                var sum_ms_kt = document.getElementsByClassName('sum_ms_kt');
                var tot2 = 0;
                for (var i = 0; i < sum_ms_kt.length; i++) {
                    if (parseFloat(sum_ms_kt[i].value))
                    tot2 += parseFloat(sum_ms_kt[i].value);
                }
                document.getElementById('total_amount_ms_kt').value = tot2;
            }

                sum_ms_kt.innerText = tot2;

            </script>

            <!--MarkahKT for MR-->
            <script>
                function findTotalMR_KT() {
                var sum_mr_kt = document.getElementsByClassName('sum_mr_kt');
                var tot3 = 0;
                for (var i = 0; i < sum_mr_kt.length; i++) {
                    if (parseFloat(sum_mr_kt[i].value))
                    tot3 += parseFloat(sum_mr_kt[i].value);
                }
                document.getElementById('total_amount_mr_kt').value = tot3;

            }

            </script>

            <!--------------------------------------- MarkahSB ---------------------------------------->

            <!--MarkahSB for MS-->
            <script>
                function findTotalMS_SB() {
                var sum_ms_sb = document.getElementsByClassName('sum_ms_sb');
                var tot4 = 0;
                for (var i = 0; i < sum_ms_sb.length; i++) {
                    if (parseFloat(sum_ms_sb[i].value))
                    tot4 += parseFloat(sum_ms_sb[i].value);
                }
                document.getElementById('total_amount_ms_sb').value = tot4;
            }

                //penambahan
                sum_ms_sb.innerText = tot4;
            </script>

            <!--MarkahSB for MR-->
            <script>
                function findTotalMR_SB() {
                var sum_mr_sb = document.getElementsByClassName('sum_mr_sb');
                var tot5 = 0;
                for (var i = 0; i < sum_mr_sb.length; i++) {
                    if (parseFloat(sum_mr_sb[i].value))
                    tot5 += parseFloat(sum_mr_sb[i].value);
                }
                document.getElementById('total_amount_mr_sb').value = tot5;
            }

            </script>

            <!--------------------------------------- MarkahPA ---------------------------------------->

            <!--MarkahPA for MS-->
            <script>
                function findTotalMS_PA() {
                var sum_ms_pa = document.getElementsByClassName('sum_ms_pa');
                var tot6 = 0;
                for (var i = 0; i < sum_ms_pa.length; i++) {
                    if (parseFloat(sum_ms_pa[i].value))
                    tot6 += parseFloat(sum_ms_pa[i].value);
                }
                document.getElementById('total_amount_ms_pa').value = tot6;
            }

                sum_ms_pa.innerText = tot6;

            </script>

            <!--MarkahPA for MR-->
            <script>
                function findTotalMR_PA() {
                var sum_mr_pa = document.getElementsByClassName('sum_mr_pa');
                var tot7 = 0;
                for (var i = 0; i < sum_mr_pa.length; i++) {
                    if (parseFloat(sum_mr_pa[i].value))
                    tot7 += parseFloat(sum_mr_pa[i].value);
                }
                document.getElementById('total_amount_mr_pa').value = tot7;
            }

            </script>

            <!--------------------------------------- MarkahPD ---------------------------------------->

            <!--MarkahPD for MS-->
            <script>
                function findTotalMS_PD() {
                var sum_ms_pd = document.getElementsByClassName('sum_ms_pd');
                var tot8 = 0;
                for (var i = 0; i < sum_ms_pd.length; i++) {
                    if (parseFloat(sum_ms_pd[i].value))
                    tot8 += parseFloat(sum_ms_pd[i].value);
                }
                document.getElementById('total_amount_ms_pd').value = tot8;
            }

                sum_ms_pd.innerText = tot8;

            </script>

            <!--MarkahPD for MR-->
            <script>
                function findTotalMR_PD() {
                var sum_mr_pd = document.getElementsByClassName('sum_mr_pd');
                var tot9 = 0;
                for (var i = 0; i < sum_mr_pd.length; i++) {
                    if (parseFloat(sum_mr_pd[i].value))
                    tot9 += parseFloat(sum_mr_pd[i].value);
                }
                document.getElementById('total_amount_mr_pd').value = tot9;
            }

            </script>

            <!--------------------------------------- MarkahFL ---------------------------------------->

            <!--MarkahFL for MS-->
            <script>
                function findTotalMS_FL() {
                var sum_ms_fl = document.getElementsByClassName('sum_ms_fl');
                var tot10 = 0;
                for (var i = 0; i < sum_ms_fl.length; i++) {
                    if (parseFloat(sum_ms_fl[i].value))
                    tot10 += parseFloat(sum_ms_fl[i].value);
                }
                document.getElementById('total_amount_ms_fl').value = tot10;
            }

                sum_ms_fl.innerText = tot10;

            </script>

            <!--MarkahFL for MR-->
            <script>
                function findTotalMR_FL() {
                var sum_mr_fl = document.getElementsByClassName('sum_mr_fl');
                var tot11 = 0;
                for (var i = 0; i < sum_mr_fl.length; i++) {
                    if (parseFloat(sum_mr_fl[i].value))
                    tot11 += parseFloat(sum_mr_fl[i].value);
                }
                document.getElementById('total_amount_mr_fl').value = tot11;
            }

            </script>

            <!--------------------------------------- MarkahIN ---------------------------------------->

            <!--MarkahIN for MS-->
            <script>
                function findTotalMS_IN() {
                var sum_ms_in = document.getElementsByClassName('sum_ms_in');
                var tot12 = 0;
                for (var i = 0; i < sum_ms_in.length; i++) {
                    if (parseFloat(sum_ms_in[i].value))
                    tot12 += parseFloat(sum_ms_in[i].value);
                }
                document.getElementById('total_amount_ms_in').value = tot12;
            }

                sum_ms_in.innerText = tot12;

            </script>

            <!--MarkahIN for MR-->
            <script>
                function findTotalMR_IN() {
                var sum_mr_in = document.getElementsByClassName('sum_mr_in');
                var tot13 = 0;
                for (var i = 0; i < sum_mr_in.length; i++) {
                    if (parseFloat(sum_mr_in[i].value))
                    tot13 += parseFloat(sum_mr_in[i].value);
                }
                document.getElementById('total_amount_mr_in').value = tot13;
            }

            </script>

            <!--Pagination using button JavaScript-->
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

            <!--Autofill form-->

            {{-- <script>
                function autoFill() {
                document.getElementById('input1').value = "My Text Input";
                document.getElementById('input2').value = "Dropdown2";
            
                var radioElements = document.getElementsByName("input3");

                for (var i=0; i<radioElements.length; i++) {
                if (radioElements[i].getAttribute('value') == 'Radio3') {
                    radioElements[i].checked = true;
                }
                }
            }
            </script> --}}

            <!--Test kira jap-->
            <script>
                function addFunctionOneAddFunctionTwo(){
                var sum_ms = sum_ms.innerText || 0; 
                var sum_ms_kt = sum_ms_kt.innerText || 0; 
                var sum_ms_sb = sum_ms_sb.innerText || 0; 
                var sum_ms_pa = sum_ms_pa.innerText || 0; 
                var sum_ms_pd = sum_ms_pd.innerText || 0; 
                var sum_ms_fl = sum_ms_fl.innerText || 0; 
                var sum_ms_in = sum_ms_in.innerText || 0;  

                document.getElementById('total').innerText = 
                parseFloat(sum_ms) + parseFloat(sum_ms_kt) + parseFloat(sum_ms_sb)
                + parseFloat(sum_ms_pa) + parseFloat(sum_ms_pd) + parseFloat(sum_ms_fl)
                + parseFloat(sum_ms_in);
                }

                document.addEventListener('keyup', function() {
                findTotalMS();
                findTotalMS_KT();
                findTotalMS_SB();
                findTotalMS_PA();
                findTotalMS_PD();
                findTotalMS_FL();

                addFunctionOneAddFunctionTwo();
                });
            </script>
            
@endsection