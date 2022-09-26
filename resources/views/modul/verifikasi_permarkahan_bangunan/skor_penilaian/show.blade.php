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
            <form action="/verifikasi_permarkahan_bangunan/simpan_skor/{id}" method="post" enctype="multipart/form-data">
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
                                <th colspan="4">Pembangunan Baru</th>
                                <th colspan="4">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
                                <th colspan="4">Penarafan semula/bangunan sedia ada</th>
                                <th rowspan="2">Dokumen Pembuktian</th>
                                <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>

                            </tr>
            
                            <tr class="pg-1" align="center" style="background-color:#EB5500">
                                <th colspan="4">Markah</th>
                                <th colspan="4">Markah</th>
                                <th colspan="4">Markah</th>
                            </tr>
                        
                            <tr class="pg-1" align="center" style="background-color:#EB5500">
                                <th>MM</th>
                                <th>MR</th>
                                <th>MMV</th>
                                <th>MV</th>
                                <th>MM</th>
                                <th>MR</th>
                                <th>MMV</th>
                                <th>MV</th>
                                <th>MM</th>
                                <th>MR</th>
                                <th>MMV</th>
                                <th>MV</th>
                                {{-- <th colspan="2">Rekabentuk (Peringkat 2)</th> --}}
                                <th>Verifikasi (Peringkat 3)</th>
            
                            </tr>
            
                            <tr class="pg-1" style="background-color:#EB5500">
                                <th>TL</th>
                                <th colspan="32">PERANCANGAN & PENGURUSAN TAPAK LESTARI</th>
                            </tr>
                        </thead>
            
                            <!--TL1-->
                            <tr class="pg-1" align="center">
                                <td>TL1</td>
                                <td>Perancangan Tapak</td>
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                {{-- <td><input onblur="findTotalMS_TL()" class="sum_ms_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MSV" name="markahTL1_MSV" required/></td> --}}
                                <td>Tidak Berkenaan</td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
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
            
                            <!--TL2-->
                            <tr class="pg-1" align="center">
                                <td>TL2</td>
                                <td>Sistem Pengurusan Alam Sekitar (SPAS)</td>
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL2_MMV" name="markahTL2_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL2_MMV" name="markahTL2_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL2_MMV" name="markahTL2_MMV" required/></td>
                                {{-- <td colspan="2"><span>&#183; Sijil ISO 14001</span><br>
                                    <span>&#183; Senarai kuantiti (BQ) kerja-kerja perlindungan alam sekitar</span>
                                </td> --}}
                                <td>
                                    <span>&#183; Laporan Pelan Pengurusan Alam Sekitar</span><br>
                                    <span>&#183; Borang SPAS (Peringkat pembinaan)</span>
                                </td>
                                <td colspan="5"></td>
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
                                                                     
                                </td>  
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL3_MMV" name="markahTL3_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL3_MMV" name="markahTL3_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL3_MMV" name="markahTL3_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Laporan rekabentuk tanah</span><br>
                                    <span>&#183; Lukisan pelan tanah</span><br>
                                    <span>&#183; Laporan geoteknikal (jika perlu)</span>
                                </td> --}}
                                <td>
                                    <span>&#183; Laporan kuantiti tanah yang diimport atau eksport</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Pengesahan kuantiti tanah potong/tambak sebenar oleh PD/SO 
                                        atau setaraf
                                    </span>
                                </td>
                                <td colspan="5"></td>
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
            
                            <tr class="pg-1" align="center">
                                <td>ii. Mengekalkan Topografi Tanah</td>
                                {{-- <th>A</th> --}}
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL32_MMV" name="markahTL32_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL32_MMV" name="markahTL32_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Pengesahan kuantiti tanah potong/tambak sebenar oleh PD/SO atau setaraf</span><br>
                                    <span>&#183; Pengesahan pelaksanaan ESCP di tapak</span>
                                </td>
                                <td colspan="5"></td>
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
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL4_MMV" name="markahTL4_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL4_MMV" name="markahTL4_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL4_MMV" name="markahTL4_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Pelan Kawalan Hakisan & Kelodak (ESCP)</span><br>
                                </td> --}}
                                <td>
                                    <span>&#183; Pengesahan pelaksanaan ESCP di tapak</span><br>
                                </td>
                                <td colspan="5"></td>
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
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL5_MMV" name="markahTL5_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL5_MMV" name="markahTL5_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL2_MMV" name="markahTL2_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Laporan penyenggaraan cerun</span><br>
                                </td> --}}
                                <td>
                                    <span>Tidak Berkenaan</span><br>
                                </td>
                                <td colspan="5"></td>
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
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL6_MMV" name="markahTL6_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL6_MMV" name="markahTL6_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL6_MMV" name="markahTL6_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Laporan rekabentuk sistem perparitan</span><br>
                                    <span>&#183; Pelan sistem perparitan berdasarkan MSMA</span><br>
                                </td> --}}
                                <td>
                                    <span> &#40;a&#41; Baru</span><br>
                                    <span>&#183; Laporan sistem perparitan</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span> &#40;b&#41; Sedia ada</span><br>
                                    <span>&#183; Laporan penyenggaraan sistem perparitan berkala</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
                                </td>
                                <td colspan="5"></td>
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

                            <!--TL7-->
                            <tr class="pg-1" align="center">
                                <td>TL7</td>
                                <td>Rekabentuk, Aksebiliti dan Kemudahan OKU</td>
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                {{-- <td><input onblur="findTotalMS_TL()" class="sum_ms_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MSV" name="markahTL1_MSV" required/></td> --}}
                                <td>
                                    <span>a&#41; Baru</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
                                    <span>&#183; Laporan audit akses OKU dan bukti bergambar yang telah siap</span><br>
                                    <span>a&#41; Sedia Ada</span><br>
                                    <span>&#183; Laporan audit akses OKU</span><br>
                                    <span>&#183; Bukti bergambar kerja-kerja penambahbaikan yang dilaksanakan
                                        mengikut laporan audit akses</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
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
            
                            <!--TL8--><!--NO INPUT-->
                            <tr class="pg-1" align="center">
                                <td>TL8</td>
                                <td>Landskap strategik</td>
                                <td colspan="6"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                {{-- <td colspan="2"></td> --}}
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="5"></td>
                                <td colspan="4"></td>
            
                            </tr>
            
                            <!--TL8.1-->
                            <tr class="pg-1" align="center">
                                <td>TL8.1</td>
                                <td>Memelihara dan menyenggara pokok yang matang</td>
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL81_MMV" name="markahTL81_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL81_MMV" name="markahTL81_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL81_MMV" name="markahTL81_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Inventori pokok</span><br>
                                    <span>&#183; Pelan ukur bagi lokasi pokok matang sedia ada</span><br>
                                    <span>&#183; Pelan penanaman pokok</span><br>
                                </td> --}}
                                <td>
                                    <span> &#40;a&#41; Lukisan siap bina landskap</span><br>
                                    <span>&#183; Bukti bergambar pokok tidak ditebang dan disenggara dengan baik</span><br>
                                </td>
                                <td colspan="5"></td>
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
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL82_MMV" name="markahTL82_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL82_MMV" name="markahTL82_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL82_MMV" name="markahTL82_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>Laporan cadangan menunjukkan:</span><br>
                                    <span>&#183; 30% kawasan hijau (disahkan oleh arkitek atau jururancang bertauliah)</span><br>
                                    <span>&#183; Pokok, pokok renek, tumbuhan penutup bumi, rumput</span><br>
                                </td> --}}
                                <td>
                                    <span> &#40;a&#41; Pelan tapak siap bina yang telah disahkan oleh Arkitek Bertauliah</span><br>
                                    Nyatakan sekiranya ada perubahan
                                </td>
                                <td colspan="5"></td>
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
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL83_MMV" name="markahTL83_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL83_MMV" name="markahTL83_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL83_MMV" name="markahTL83_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Penyediaan pelan landskap</span><br>
                                    <span>&#183; Jadual spesis pokok</span><br>
                                    <span>&#183; Anggaran bayang-bayang pokok atau struktur selain bangunan</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Pelan landskap siap bina</span><br>
                                    <span> &#183; Inventori pokok</span><br>
                                    <span> &#183; Bukti bergambar</span><br>
                                </td>
                                <td colspan="5"></td>
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
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL84_MMV" name="markahTL84_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL84_MMV" name="markahTL84_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL84_MMV" name="markahTL84_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Lukisan terperinci dengan spesifikasi</span><br>
                                    <span>&#183; Katalog berserta jadual SRI bahan siarkaki</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Bukti bergambar</span><br>
                                </td>
                                <td colspan="5"></td>
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
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL85_MMV" name="markahTL85_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL85_MMV" name="markahTL85_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL85_MMV" name="markahTL85_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Lukisan butiran dan spesifikasi sistem turapan</span><br>
                                    <span>&#183; Lukisan susun atur tapak pembangunan</span><br>
                                    <span>&#183; Pengiraan luas zon turapan</span><br>

                                </td> --}}
                                <td>
                                    <span> &#183; Lukisan siap bina</span><br>
                                    <span> &#183; Bukti bergambar</span><br>
                                </td>
                                <td colspan="5"></td>
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
                                <td></td>
                                <td></td>
                                <td colspan="5"></td>
                                <td colspan="4"></td>
                            </tr>

                            <!--TL9.1-->
                            <tr class="pg-1" align="center">
                                <td>TL9.1</td>
                                <td>Indeks Pantulan Suria (SRI) mengikut jenis & kecerunan bumbung
                                </td>
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL91_MMV" name="markahTL91_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL91_MMV" name="markahTL91_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL91_MMV" name="markahTL91_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Katalog berserta jadual SRI bumbung</span><br>
                                    <span>&#183; Pengiraan keluasan bumbung</span><br>
                                </td> --}}
                                <td>
                                    <span>&#183; Method statement yang telah disahkan oleh
                                        pegawai penguasa (SO)</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
                                </td>
                                <td colspan="5"></td>
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
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL92_MMV" name="markahTL92_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL92_MMV" name="markahTL92_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL92_MMV" name="markahTL92_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Pelan konsep rekabentuk</span><br>
                                    <span>&#183; Jadual keluasan kawasan bumbung</span><br>
                                    <span>&#183; Lukisan butiran dan jadual penanaman</span><br>
                                    <span>&#183; Pengiraan</span><br>

                                </td> --}}
                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
                                    <span>&#183; Rekod Senggaraan</span><br>

                                </td>
                                <td colspan="5"></td>
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

                            <!--TL10-->
                            <tr class="pg-1" align="center">
                                <td>TL10</td>
                                <td>Rekabentuk, Aksebiliti dan Kemudahan OKU</td>
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                {{-- <td><input onblur="findTotalMS_TL()" class="sum_ms_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MSV" name="markahTL1_MSV" required/></td> --}}
                                <td>
                                    <span>&#183; Lukisan siap bina tempat letak kenderaan dan penanda</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
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
                                <td colspan="6">Jumlah markah TL</td>
                                <td colspan="3"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><input id="total_amount_ms_tl" type="text" autocapitalize="off" name="markahTOTAL_TL_MSV" id="markahTOTAL_TL_MSV" /></td>
                                <td><input id="total_amount_mv_tl" type="text" autocapitalize="off" name="markahTOTAL_TL_MMV" id="markahTOTAL_TL_MMV" /></td>
                                <td></td>
                                {{-- <td colspan="2"></td> --}}
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr> 

                            {{-- <tr>
                                <td>Jumlah MS and MV</td>
                                <td><input onclick="add()" id="answer" type="number" autocapitalize="off" name="markahMSV"/></td>
                            </tr> --}}
                    </table>

                    <!--------------------------------------- MarkahKT ---------------------------------------->
                    <table id="example" class="table table-bordered line-table display">
                        <thead class="text-white">
                            <tr class="pg-2" align="center" style="background-color:#EB5500">
                                <th rowspan="3">Kod</th>
                                <th rowspan="3">Kriteria</th>
                                <th rowspan="3" colspan="6">Kategori bangunan</th>
                                <th colspan="4">Pembangunan Baru</th>
                                <th colspan="4">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
                                <th colspan="4">Penarafan semula/bangunan sedia ada</th>
                                <th rowspan="2">Dokumen Pembuktian</th>
                                <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>

                            </tr>

                            <tr class="pg-2" align="center" style="background-color:#EB5500">
                                <th colspan="4">Markah</th>
                                <th colspan="4">Markah</th>
                                <th colspan="4">Markah</th>
                            </tr>
                        
                            <tr class="pg-2" align="center" style="background-color:#EB5500">
                                <th>MM</th>
                                <th>MR</th>
                                <th>MMV</th>
                                <th>MV</th>
                                <th>MM</th>
                                <th>MR</th>
                                <th>MMV</th>
                                <th>MV</th>
                                <th>MM</th>
                                <th>MR</th>
                                <th>MMV</th>
                                <th>MV</th>
                                {{-- <th colspan="2">Rekabentuk (Peringkat 2)</th> --}}
                                <th>Verifikasi (Peringkat 3)</th>
                            </tr>

                            <tr class="pg-2" style="background-color:#EB5500">
                                <th>KT</th>
                                <th colspan="32">PENGURUSAN KECEKAPAN TENAGA DAN PENGGUNAAN TENAGA BOLEH BAHARU</th>
                            </tr>
                        </thead>

                            <!--KT1-->
                            <tr class="pg-2" align="center">
                                <td>KT1</td>
                                <td>Rekabentuk bumbung</td>
                                {{-- <th><input class="form-control" type="text" autocapitalize="off" name="jenisKategori" value="{{$kriteria_phjkr_bangunan ?? ''}}"/></th> --}}
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Katalog spesifikasi U-Value bahan</span><br>
                                    <span>&#183; Pengiraan U-Value bagi rekabentuk bumbung</span><br>
                                </td> --}}
                                <td>
                                    <span>&#183; Katalog bahan dan sampel yang diluluskan</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
                                </td>
                                <td colspan="5"></td>
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

                            <!--KT2--><!--NO INPUT-->
                            <tr class="pg-2" align="center">
                                <td>KT2</td>
                                <td>Orientasi bangunan</td>
                                <td colspan="6"></td>
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
                                <td></td>
                                <td></td>
                                <td colspan="5"></td>
                                <td colspan="4"></td>

                            </tr>

                            <!--KT2.1-->
                            <tr class="pg-2" align="center">
                                <td>KT2.1</td>
                                <td>Fasad Utama bangunan yang menghadap orientasi utara-selatan</td>
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                {{-- <td>
                                    <span>&#183; Pelan tapak berserta penunjuk arah utara
                                        menunjukkan pelan bangunan dengan meletakkan sun-path diagram</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
                                </td> --}}
                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                </td>
                                <td colspan="5"></td>
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

                            <!--KT2.2-->
                            <tr class="pg-2" align="center">
                                <td>KT2.2</td>
                                <td>Meminimumkan bukaan pada fasad yang menghadap timur dan barat</td>
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Laporan penyenggaraan cerun</span><br>
                                </td> --}}
                                <td>
                                    <span>Tidak Berkenaan</span><br>
                                </td>
                                <td colspan="5"></td>
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

                            <!--KT3--><!--NO INPUT-->
                            <tr class="pg-2" align="center">
                                <td>KT3</td>
                                <td>Rekabentuk fasad</td>
                                <td colspan="6"></td>
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
                                <td></td>
                                <td></td>
                                <td colspan="5"></td>
                                <td colspan="4"></td>
                            </tr>

                            <!--KT3.1-->
                            <tr class="pg-2" align="center">
                                <td>KT3.1</td>
                                <td>Dinding luar bangunan</td>
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Katalog spesifikasi U-Value bahan</span><br>
                                    <span>&#183; Pengiraan U-Value bagi rekabentuk dinding</span><br>
                                </td> --}}
                                <td>
                                    <span>&#183; Katalog bahan yang diluluskan untuk pembinaan</span><br>
                                    <span>&#183; Pengiraan U-Value yang disahkan</span><br>
                                </td>
                                <td colspan="5"></td>
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

                            <!--KT3.2-->
                            <tr class="pg-2" align="center">
                                <td>KT3.2</td>
                                <td>Pengadang Suria Luaran</td>
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Katalog bahan</span><br>
                                </td> --}}
                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
                                </td>
                                <td colspan="5"></td>
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

                            <!--KT4-->
                            <tr class="pg-2" align="center">
                                <td>KT4</td>
                                <td>OTTV & RTTV</td>
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Pengiraan OTTV dan RTTV yang disahkan</span><br>
                                </td> --}}
                                <td colspan="2">
                                    <span>&#183; Pengiraan OTTV dan RTTV yang disahkan</span><br>
                                </td>
                                <td colspan="5"></td>
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

                            <!--KT5--><!--NO INPUT-->
                            <tr class="pg-2" align="center">
                                <td>KT5</td>
                                <td>Kecekapan pencahayaan</td>
                                <td colspan="6"></td>
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
                                <td></td>
                                <td></td>
                                <td colspan="5"></td>
                                <td colspan="4"></td>
                            </tr>

                            <!--KT5.1-->
                            <tr class="pg-2" align="center">
                                <td>KT5.1</td>
                                <td>Kawalan Pencahayaan</td>
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Lukisan siap bina yang menunjukkan lokasi suis</span><br>
                                    <span> &#183; Bukti bergambar</span><br>
                                </td>
                                <td colspan="5"></td>
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

                            <!--KT5.2-->
                            <tr class="pg-2" align="center">
                                <td>KT5.2</td>
                                <td>Kawalan Pencahayaan</td>
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Lukisan siap bina yang menunjukkan lokasi suis</span><br>
                                    <span> &#183; Bukti bergambar</span><br>
                                </td>
                                <td colspan="5"></td>
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

                            <!--KT8-->
                            <tr class="pg-2" align="center">
                                <td>KT8</td>
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Mengemukakan lukisan rekabentuk sistem dan simulasi pengiraan
                                        bagi anggaran tenaga baharu yang boleh dihasilkan oleh sistem tersebut</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Salinan lukisan siap bina dan laporan uji terima yang mematuhi kehendak rekabentuk</span><br>
                                    <span> &#183; Pengiraan penjanaan tenaga boleh baharu berbanding jumlah penggunaan tenaga tahunan bangunan</span><br>
                                </td>
                                <td colspan="5"></td>
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

                            <!--KT11-->
                            <tr class="pg-2" align="center">
                                <td>KT11</td>
                                <td>Pengujian dan pentauliahan</td>
                                <td colspan="6"></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                <td>MM</td>
                                <td>MR</td>
                                <td>MMV</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Pelan pengujian dan pentauliahan</span><br>
                                </td> --}}
                                <td>
                                    <span>&#183; Dokumen lengkap pengujian dan pentauliahan yang telah disahkan</span><br>
                                </td>
                                <td colspan="5"></td>
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

                            <!--JUMLAH MARKAHKT-->
                            <tr class="pg-2" align="center">
                                <td colspan="3">Jumlah markah KT</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><input id="total_amount_ms_kt" type="number" min="0" max="26" autocapitalize="off" name="markahTOTAL_KT_MSV" id="markahTOTAL_KT_MSV" /></td>
                                <td><input id="total_amount_mv_kt" type="number" min="0" max="26" autocapitalize="off" name="markahTOTAL_KT_MMV" id="markahTOTAL_KT_MMV" /></td>
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td></td>
                                <td></td>
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
                                    <th rowspan="3">Muat Naik Dokumen Sokongan</th>

                                </tr>

                                <tr class="pg-3" align="center" style="background-color:#EB5500">
                                    <th colspan="7">Markah</th>
                                </tr>

                                <tr class="pg-3" align="center" style="background-color:#EB5500">
                                    <th>MM</th>
                                    <th>MS</th>
                                    <th>MR</th>
                                    <th>MMV</th>
                                    <th>MS</th>
                                    <th>MV</th>
                                    <th>ML</th>
                                    <th colspan="2">Rekabentuk (Peringkat 2)</th>
                                    <th colspan="2">Verifikasi (Peringkat 3)</th>

                                </tr>

                                <tr class="pg-3" style="background-color:#EB5500">
                                    <th>SB</th>
                                    <th colspan=15">PENGURUSAN SUMBER DAN BAHAN</th>
                                </tr>
                            </thead>

                            <!--SB1-->
                            <tr class="pg-3" align="center">
                                <td>SB1</td>
                                <td>Sistem Binaan Berindustri (IBS)</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>    
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>5</td>
                                <td><input onblur="findTotalMS_SB()" class="sum_ms_sb" type="number" min="0" max="5" autocapitalize="off" id="markahSB1_MSV" name="markahSB1_MSV" required/></td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="5" autocapitalize="off" id="markahSB1_MMV" name="markahSB1_MMV" required/></td>
                                <td></td>
                                <td colspan="2">
                                    <span>&#183; Cadangan sistem IBS oleh pembekal IBS berdaftar</span><br>
                                    <span>&#183; Laporan Pengiraan Skor IBS</span><br>
                                </td>
                                <td colspan="2">
                                    <span>&#183; Lukisan pembinaan IBS</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
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

                            <!--SB2-->
                            <tr class="pg-3" align="center">
                                <td>SB2</td>
                                <td>Produk hijau</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>5</td>
                                <td><input onblur="findTotalMS_SB()" class="sum_ms_sb" type="number" min="0" max="5" autocapitalize="off" id="markahSB2_MSV" name="markahSB2_MSV" required/></td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="5" autocapitalize="off" id="markahSB2_MMV" name="markahSB2_MMV" required/></td>
                                <td></td>
                                <td colspan="2">
                                    <span>&#183; Sijil Pengesahan produk hijau</span><br>
                                    <span>&#183; spesifikasi produk</span><br>
                                    <span>&#183; Senarai permarkahan produk hijau berdasarkan GPSS</span><br>                    
                                </td>
                                <td colspan="2">
                                    <span>&#183; Brosur pembekal</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Borang pengiraan skor GPSS</span><br>
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

                            <!--SB3-->
                            <tr class="pg-3" align="center">
                                <td>SB3</td>
                                <td>Pengurusan sisa semasa pembinaan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>4</td>
                                <td><input onblur="findTotalMS_SB()" class="sum_ms_sb" type="number" min="0" max="4" autocapitalize="off" id="markahSB3_MSV" name="markahSB3_MSV" required/></td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="4" autocapitalize="off" id="markahSB3_MMV" name="markahSB3_MMV" required/></td>
                                <td></td>
                                <td colspan="2">
                                    <span>&#183; Pelan pengurusan sisa yang meliputi Buangan Terjadual
                                        dan Sisa Bahan Binaan</span><br>
                                    <span>&#183; Lukisan yang menunjukkan ruang pengurusan sisa</span><br>
                                    <span>&#183; Pelan tapak dengan kawasan simpanan sementara</span><br>
                                </td>
                                <td colspan="2">
                                    <span>&#183; Dokumen bukti proses penyimpanan</span><br>
                                    <span>&#183; Dokumen bukti proses penghantaran ke tapak pelupusan</span><br>
                                    <span>&#183; Dokumen bukti proses pelupusan sisa berjadual seperti resit
                                        dan borang semasa audit dijalankan
                                    </span><br>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Pengiraan kitar semula (jika ada)</span><br>
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

                            <!--SB4-->
                            <tr class="pg-3" align="center">
                                <td>SB4</td>
                                <td>3r-Semasa Operasi</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>4</td>
                                <td><input onblur="findTotalMS_SB()" class="sum_ms_sb" type="number" min="0" max="4" autocapitalize="off" id="markahSB4_MSV" name="markahSB4_MSV" required/></td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="4" autocapitalize="off" id="markahSB4_MMV" name="markahSB4_MMV" required/></td>
                                <td></td>
                                <td colspan="2">
                                    <span>&#183; Pelan pengurusan sisa domestik</span><br>
                                    <span>&#183; Pelan kedudukan tong 3Rdi semua aras bangunan</span><br>
                                    <span>&#183; Lokasi kebuk sampah</span><br>                    
                                </td>
                                <td colspan="2">
                                    <span>&#183; Pematuhan pelan pengurusan sisa domestik</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
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
                                <tr>

                                <!--JUMLAH MARKAHSB-->
                                <tr class="pg-3" align="center">
                                    <td colspan="3">Jumlah markah SB</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><input id="total_amount_ms_sb" type="text" autocapitalize="off" name="markahTOTAL_SB_MSV" /></td>
                                    <td><input id="total_amount_mv_sb" type="text" autocapitalize="off" name="markahTOTAL_SB_MMV"/></td>
                                    <td></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td></td>
                                    <td></td>
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
                                <th rowspan="3">Muat Naik Dokumen Sokongan</th>
                            </tr>

                            <tr class="pg-4" align="center" style="background-color:#EB5500">
                                <th colspan="7">Markah</th>
                            </tr>
                        
                            <tr class="pg-4" align="center" style="background-color:#EB5500">
                                <th>MM</th>
                                <th>MS</th>
                                <th>MR</th>
                                <th>MMV</th>
                                <th>MS</th>
                                <th>MV</th>
                                <th>ML</th>
                                <th colspan="2">Rekabentuk (Peringkat 2)</th>
                                <th colspan="2">Verifikasi (Peringkat 3)</th>

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
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>3</td>
                                <td><input onblur="findTotalMS_PA()" class="sum_ms_pa" type="number" min="0" max="3" autocapitalize="off" id="markahPA1_MSV" name="markahPA1_MSV" required/></td>
                                <td><input onblur="findTotalMV_PA()" class="sum_mv_pa" type="number" min="0" max="3" autocapitalize="off" id="markahPA1_MMV" name="markahPA1_MMV" required/></td>
                                <td></td>
                                <td colspan="2">
                                                <span>&#183; Katalog bahan dan sampai yang telah disahkan WELPS dan SPAN</span><br>
                                                <span>&#183; Pengiraan penjimatan</span><br>
                                </td>
                                <td colspan="2">
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Pensijilan WELPS</span><br>
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

                            <!--PA2-->
                            <tr class="pg-4" align="center">
                                <td>PA2</td>
                                <td>Penjimatan Penggunaan Air Dalam Bangunan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>2</td>
                                <td><input onblur="findTotalMS_PA()" class="sum_ms_pa" type="number" min="0" max="2" autocapitalize="off" id="markahPA2_MSV" name="markahPA2_MSV" required/></td>
                                <td><input onblur="findTotalMV_PA()" class="sum_mv_pa" type="number" min="0" max="2" autocapitalize="off" id="markahPA2_MMV" name="markahPA2_MMV" required/></td>
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
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>4</td>
                                <td><input onblur="findTotalMS_PA()" class="sum_ms_pa" type="number" min="0" max="4" autocapitalize="off" id="markahPA3_MSV" name="markahPA3_MSV" required/></td>
                                <td><input onblur="findTotalMV_PA()" class="sum_mv_pa" type="number" min="0" max="4" autocapitalize="off" id="markahPA3_MMV" name="markahPA3_MMV" required/></td>
                                <td></td>
                                <td colspan="2">
                                                <span>&#183; Katalog bahan dan sampai yang telah disahkan WELPS dan SPAN</span><br>
                                                <span>&#183; Pengiraan</span><br>
                                </td>
                                <td colspan="2">
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Pensijilan WELPS</span><br>
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

                            <tr class="pg-4" align="center">
                                <td>ii. Kitar Semula Air Sisa</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>5</td>
                                <td><input onblur="findTotalMS_PA()" class="sum_ms_pa" type="number" min="0" max="5" autocapitalize="off" id="markahPA32_MSV" name="markahPA32_MSV" required/></td>
                                <td><input onblur="findTotalMV_PA()" class="sum_mv_pa" type="number" min="0" max="5" autocapitalize="off" id="markahPA32_MMV" name="markahPA32_MMV" required/></td>
                                <td></td>
                                <td colspan="2">
                                                <span>&#183; Laporan rekabentuk dan pengiraan SPAH atau
                                                    sistem kitar semula air sisa</span><br>
                                                <span>&#183; Lukisan SPAH atau lukisan sistem kitar semula air sisa</span><br>
                                                <span>&#183; Bil air domestik</span><br>
                                </td>
                                <td colspan="2">
                                    <span>&#183; Laporan pengujian sistem</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
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

                            <!-- Jumlah MarkahPA-->
                            <tr class="pg-4" align="center">
                                <th colspan="3">Jumlah markah PA</th>
                                <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><input id="total_amount_ms_pa" type="number" min="0" max="14" autocapitalize="off" name="markahTOTAL_PA_MSV" /></td>
                                    <td><input id="total_amount_mv_pa" type="number" min="0" max="14" autocapitalize="off" name="markahTOTAL_PA_MMV"/></td>
                                    <td></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td></td>
                                    <td></td>
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
                                <th rowspan="3">Muat Naik Dokumen Sokongan</th>
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
                                <th colspan="2">Verifikasi (Peringkat 3)</th>

                            </tr>

                            <tr class="pg-5" style="background-color:#EB5500">
                                <th>PD</th>
                                <th colspan="15">PENGURUSAN KUALITI PERSEKITARAN DALAMAN</th>
                            </tr>
                        </thead>

                        <!--PD2--><!--NO INPUT-->
                        <tr class="pg-5" align="center">
                            <td>PD2</td>
                            <td>Perancangan ruang</td>
                            <td>
                                {{-- <select class="form-select" aria-label="Default select example" name="jenisKategori">
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
                            <td colspan="2"></td>
                            <td colspan="2"></td>
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
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>1</td>
                            <td><input onblur="findTotalMS_PD()" class="sum_ms_pd" type="number" min="0" max="1" autocapitalize="off" id="markahPD24_MSV" name="markahPD24_MSV" required/></td>
                            <td><input onblur="findTotalMV_PD()" class="sum_mv_pd" type="number" min="0" max="1" autocapitalize="off" id="markahPD24_MMV" name="markahPD24_MMV" required/></td>
                            <td></td>
                            <td colspan="2">
                                            <span>&#183; Lukisan keratan bangunan yang menunjukkan
                                                ukuran (lantai ke siling)</span><br>
                            </td>
                            <td colspan="2">
                                <span>&#183; Lukisan siap bina</span><br>
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

                        <!--PD2.5-->
                        <tr class="pg-5" align="center">
                            <td>PD2.5</td>
                            <td>Warna cerah di permukaan dinding dan siling</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>1</td>
                            <td><input onblur="findTotalMS_PD()" class="sum_ms_pd" type="number" min="0" max="1" autocapitalize="off" id="markahPD25_MSV" name="markahPD25_MSV" required/></td>
                            <td><input onblur="findTotalMV_PD()" class="sum_mv_pd" type="number" min="0" max="1" autocapitalize="off" id="markahPD25_MMV" name="markahPD25_MMV" required/></td>
                            <td></td>
                            <td colspan="2">
                                            <span>&#183; Katalog dan sampel menunjukkan warna yang dicadangkan</span><br>
                            </td>
                            <td colspan="2">
                                <span>&#183; Bukti bergambar bagi mengesahkan skima warna yang digunakan</span><br>
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

                        <!--PD3--><!--NO INPUT-->
                        <tr class="pg-5" align="center">
                            <td>PD3</td>
                            <td>Kualiti Visual</td>
                            <td>
                                {{-- <select class="form-select" aria-label="Default select example" name="jenisKategori">
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
                            <td colspan="2"></td>
                            <td colspan="2"></td>
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
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>2</td>
                            <td><input onblur="findTotalMS_PD()" class="sum_ms_pd" type="number" min="0" max="2" autocapitalize="off" id="markahPD31_MSV" name="markahPD31_MSV" required/></td>
                            <td><input onblur="findTotalMV_PD()" class="sum_mv_pd" type="number" min="0" max="2" autocapitalize="off" id="markahPD31_MMV" name="markahPD31_MMV" required/></td>
                            <td></td>
                            <td colspan="2">
                                            <span>&#183; Lukisan tampak dan jadual tingkap</span><br>
                                            <span>&#183; Pengiraan keluasan lantai yang menunjukkan
                                                30% daripada NLA yang menunjukkan nilai DF 1.0% - 3.5%</span><br>
                                            <span>&#183; Laporan simulasi (jika ada)</span><br>
                            </td>
                            <td colspan="2">
                                <span>&#183; Lukisan siap bina</span><br>
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

                        <!--PD3.2-->
                        <tr class="pg-5" align="center">
                            <td>PD3.2</td>
                            <td>Menggunakan rak cahaya (light shelves)</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>2</td>
                            <td><input onblur="findTotalMS_PD()" class="sum_ms_pd" type="number" min="0" max="2" autocapitalize="off" id="markahPD32_MSV" name="markahPD32_MSV" required/></td>
                            <td><input onblur="findTotalMV_PD()" class="sum_mv_pd" type="number" min="0" max="2" autocapitalize="off" id="markahPD32_MMV" name="markahPD32_MMV" required/></td>
                            <td></td>
                            <td colspan="2">
                                            <span>&#183; Rekabentuk rak cahaya</span><br>
                                            <span>&#183; Lukisan terperinci</span><br>
                                            <span>&#183; Laporan simulasi, jika ada</span><br>
                            </td>
                            <td colspan="2">
                                <span>&#183; Lukisan pemasangan</span><br>
                                <span>&#183; Lukisan siap bina</span><br>
                                <span>&#183; Bukti bergambar</span><br>
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

                        <!--PD3.3-->
                        <tr class="pg-5" align="center">
                            <td>PD3.3</td>
                            <td>Kawalan Tahap Kesilauan</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>1</td>
                            <td><input onblur="findTotalMS_PD()" class="sum_ms_pd" type="number" min="0" max="1" autocapitalize="off" id="markahPD33_MSV" name="markahPD33_MSV" required/></td>
                            <td><input onblur="findTotalMV_PD()" class="sum_mv_pd" type="number" min="0" max="1" autocapitalize="off" id="markahPD33_MMV" name="markahPD33_MMV" required/></td>
                            <td></td>
                            <td colspan="2">
                                            <span>&#183; Katalog dan sampel menunjukkan bidai yang dicadangkan</span><br>
                            </td>
                            <td colspan="2">
                                <span>&#183; Lukisan siap bina dan bukti bergambar
                                    bagi mengesahkan bidai yang digunakan</span><br>
                                <span>&#183; Laporan prestasi pencahayaan (jika ada)</span><br>
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

                        <!--PD3.4-->
                        <tr class="pg-5" align="center">
                            <td>PD3.4</td>
                            <td>Akses visual kepada pandangan di luar</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>1</td>
                            <td><input onblur="findTotalMS_PD()" class="sum_ms_pd" type="number" min="0" max="1" autocapitalize="off" id="markahPD34_MSV" name="markahPD34_MSV" required/></td>
                            <td><input onblur="findTotalMV_PD()" class="sum_mv_pd" type="number" min="0" max="1" autocapitalize="off" id="markahPD34_MMV" name="markahPD34_MMV" required/></td>
                            <td></td>
                            <td colspan="2">
                                            <span>&#183; Pelan susuratur</span><br>
                                            <span>&#183; Rekabentuk awalan yang menunjukkan
                                                pembahagian ruang yang bebas halangan binaan kekal</span><br>
                                            <span>&#183; Lukisan terperinci dinding sesekat berserta spesifikasi</span><br>
                            </td>
                            <td colspan="2">
                                <span>&#183; Katalog dan sample bahan yang diluluskan oleh S.O.</span><br>
                                <span>&#183; Lukisan Siap Bina</span><br>
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

                        <!--PD8-->
                        <tr class="pg-5" align="center">
                            <td>PD8</td>
                            <td>Kualiti Udara Dalaman (IAQ)</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>3</td>
                            <td><input onblur="findTotalMS_PD()" class="sum_ms_pd" type="number" min="0" max="3" autocapitalize="off" id="markahPD8_MSV" name="markahPD8_MSV" required/></td>
                            <td><input onblur="findTotalMV_PD()" class="sum_mv_pd" type="number" min="0" max="3" autocapitalize="off" id="markahPD8_MMV" name="markahPD8_MMV" required/></td>
                            <td></td>
                            <td colspan="2">
                                            <span>&#183; Katalog dan sijil pengesahan penarafan eco-label bahan</span><br>
                                            <span>&#183; Spesifikasi teknikal pembekal</span><br>
                            </td>
                            <td colspan="2">
                                <span>&#183; Katalog dan kaedah pemasangan (method statement) yang telah
                                    disahkan oleh Pegawai yang kompeten</span><br>
                                <span>&#183; Gambar semasa kerja pemasangan</span><br>
                                <span>&#183; Lukisan siap bina</span><br>
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

                        <!--PD10-->
                        <tr class="pg-5" align="center">
                            <td>PD10</td>
                            <td>Kaji Selidik Keselesaan Penghuni</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>2</td>
                            <td><input onblur="findTotalMS_PD()" class="sum_ms_pd" type="number" min="0" max="2" autocapitalize="off" id="markahPD10_MSV" name="markahPD10_MSV" required/></td>
                            <td><input onblur="findTotalMV_PD()" class="sum_mv_pd" type="number" min="0" max="2" autocapitalize="off" id="markahPD10_MMV" name="markahPD10_MMV" required/></td>
                            <td></td>
                            <td colspan="2"> 
                                <span>&#183; Tidak berkaitan (TB)</span></td>
                            <td colspan="2">
                                <span>&#183; Laporan maklumbalas kaji selidik</span><br>
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

                        <!-- Jumlah MarkahPD-->
                        <tr class="pg-5" align="center">
                            <td colspan="3">Jumlah markah PD</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td><input id="total_amount_ms_pd" type="number" min="0" max="13" autocapitalize="off" name="markahTOTAL_PD_MSV"/></td>
                            <td><input id="total_amount_mv_pd" type="number" min="0" max="13" autocapitalize="off" name="markahTOTAL_PD_MMV"/></td>
                            <td>0</td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
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
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL1_MSV" name="markahFL1_MSV" required/></td>
                                <td><input onblur="findTotalMV_FL()" class="sum_mv_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL1_MMV" name="markahFL1_MMV" required/></td>
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
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

                            <!--FL2-->
                            <tr class="pg-6" align="center">
                                <td>FL2</td>
                                <td>Pengurusan fasiliti bangunan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL2_MSV" name="markahFL2_MSV" required/></td>
                                <td><input onblur="findTotalMV_FL()" class="sum_mv_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL2_MMV" name="markahFL2_MMV" required/></td>
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
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

                            <!--FL2.1-->
                            <tr class="pg-6" align="center">
                                <td>FL2.1</td>
                                <td>Pengurusan data dan ruang</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL21_MSV" name="markahFL21_MSV" required/></td>
                                <td><input onblur="findTotalMV_FL()" class="sum_mv_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL21_MMV" name="markahFL21_MMV" required/></td>
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
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

                            <!--FL2.2-->
                            <tr class="pg-6" align="center">
                                <td>FL2.2</td>
                                <td>Pengurusan sistem penyenggaraan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL22_MSV" name="markahFL22_MSV" required/></td>
                                <td><input onblur="findTotalMV_FL()" class="sum_mv_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL22_MMV" name="markahFL22_MMV" required/></td>
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
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

                            <!--FL2.3-->
                            <tr class="pg-6" align="center">
                                <td>FL2.3</td>
                                <td>Prestasi penggurusan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL23_MSV" name="markahFL23_MSV" required/></td>
                                <td><input onblur="findTotalMV_FL()" class="sum_mv_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL23_MMV" name="markahFL23_MMV" required/></td>
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
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

                            <!--FL3-->
                            <tr class="pg-6" align="center">
                                <td>FL3</td>
                                <td>Penyenggaraan lestari</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL3_MSV" name="markahFL3_MSV" required/></td>
                                <td><input onblur="findTotalMV_FL()" class="sum_mv_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL3_MMV" name="markahFL3_MMV" required/></td>
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
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

                            <!--FL3.1-->
                            <tr class="pg-6" align="center">
                                <td>FL3.1</td>
                                <td>Ruang pejabat untuk pasukan penyenggaraan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL31_MSV" name="markahFL31_MSV" required/></td>
                                <td><input onblur="findTotalMV_FL()" class="sum_mv_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL31_MMV" name="markahFL31_MMV" required/></td>
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
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

                            <!--FL3.2-->
                            <tr class="pg-6" align="center">
                                <td>FL3.2</td>
                                <td>Kontraktor pengurusan fasiliti (FM)</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL32_MSV" name="markahFL32_MSV" required/></td>
                                <td><input onblur="findTotalMV_FL()" class="sum_mv_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL32_MMV" name="markahFL32_MMV" required/></td>
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
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

                            <!--FL3.3-->
                            <tr class="pg-6" align="center">
                                <td>FL3.3</td>
                                <td>Pelan Pengurusan Fasiliti (FM)</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL33_MSV" name="markahFL33_MSV" required/></td>
                                <td><input onblur="findTotalMV_FL()" class="sum_mv_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL33_MMV" name="markahFL33_MMV" required/></td>
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
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

                            <!--FL3.4-->
                            <tr class="pg-6" align="center">
                                <td>FL3.4</td>
                                <td>Manual Operasi dan Penyenggaraan Bangunan</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                        <option hidden selected="">Sila Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>0</td>
                                <td><input onblur="findTotalMS_FL()" class="sum_ms_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL34_MSV" name="markahFL34_MSV" required/></td>
                                <td><input onblur="findTotalMV_FL()" class="sum_mv_fl" type="number" min="0" max="0" autocapitalize="off" id="markahFL34_MMV" name="markahFL34_MMV" required/></td>
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
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

                            <!-- Jumlah MarkahFL-->
                            <tr class="pg-6" align="center">
                                <td colspan="3">Jumlah markah FL</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td><input id="total_amount_ms_fl" type="number" autocapitalize="off" name="markahTOTAL_FL_MSV" /></td>
                                <td><input id="total_amount_mv_fl" type="number" autocapitalize="off" name="markahTOTAL_FL_MMV" /></td>
                                <td>0</td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td></td>
                                <td></td>
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
                                <th rowspan="3">Muat Naik Dokumen Sokongan</th>

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
                                <th colspan="2">Verifikasi (Peringkat 3)</th>

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
                                <select class="form-select" aria-label="Default select example" name="jenisKategori">
                                    <option hidden selected="">Sila Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>0</td>
                            <td><input onblur="findTotalMS_IN()" class="sum_ms_in" type="number" min="0" max="0" autocapitalize="off" id="markahIN1_MSV" name="markahIN1_MSV" required/></td>
                            <td><input onblur="findTotalMV_IN()" class="sum_mv_in" type="number" min="0" max="0" autocapitalize="off" id="markahIN1_MMV" name="markahIN1_MMV" required/></td>
                            <td></td>
                            <td colspan="2">
                                <span>&#183; Laporan cadangan inovasi</span><br>
                                <span>&#183; Laporan kajian Return of Investment</span><br>
                            </td>
                            <td colspan="2">
                                <span>&#183; Lukisan siap bina dan bukti bergambar</span><br>
                                <span>&#183; Laporan prestasi inovasi</span><br>
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

                            <!-- Jumlah MarkahIN-->
                            <tr class="pg-7" align="center">
                                <td colspan="3">Jumlah markah IN</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>
                                    <input id="total_amount_ms_in" type="number" autocapitalize="off" name="markahTOTAL_IN_MSV" />
                                </td>
                                <td> 
                                    <input id="total_amount_mv_in" type="number" autocapitalize="off" name="markahTOTAL_IN_MMV" />
                                </td>
                                <td>0</td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td></td>
                                <td></td>
                            </tr> 
                    </table>

                    {{-- <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button> --}}
                {{-- </div>          <!--Scrollbar--> --}}


                    <!--Button Simpan (TOOLTIPS)-->
                    <!--Page 1-->
                    <div class="mt-3 text-center">
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <button class="btn btn-secondary pg-1" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button2()" type="submit">Seterusnya</button>
                        <button class="btn btn-secondary pg-2" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button3()" type="submit">Seterusnya</button>
                        <button class="btn btn-secondary pg-3" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button4()" type="submit">Seterusnya</button>
                        <button class="btn btn-secondary pg-4" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button5()" type="submit">Seterusnya</button>
                        <button class="btn btn-secondary pg-5" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button6()" type="submit">Seterusnya</button>
                        <button class="btn btn-secondary pg-6" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button7()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 2-->
                    {{-- <div class="mt-3 text-center pg-2">
                        <button class="btn btn-primary pg-2" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <button class="btn btn-secondary pg-2" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button3()" type="submit">Seterusnya</button>
                    </div> --}}

                    <!--Page 3-->
                    {{-- <div class="mt-3 text-center pg-3">
                        <button class="btn btn-primary pg-3" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <button class="btn btn-secondary pg-3" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button4()" type="submit">Seterusnya</button>
                    </div> --}}

                    <!--Page 4-->
                    {{-- <div class="mt-3 text-center pg-4">
                        <button class="btn btn-primary pg-4" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <button class="btn btn-secondary pg-4" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button5()" type="submit">Seterusnya</button>
                    </div> --}}

                    <!--Page 5-->
                    {{-- <div class="mt-3 text-center pg-5">
                        <button class="btn btn-primary pg-5" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <button class="btn btn-secondary pg-5" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button6()" type="submit">Seterusnya</button>
                    </div> --}}

                    <!--Page 6-->
                    {{-- <div class="mt-3 text-center pg-6">
                        <button class="btn btn-primary pg-6" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <button class="btn btn-secondary pg-6" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button7()" type="submit">Seterusnya</button>
                    </div> --}}

                    <!--Page 7-->
                    {{-- <div class="mt-3 text-center pg-7">
                        <button class="btn btn-primary pg-7" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                    </div> --}}



            </form> <!--Form Markah-->
            </div> <!--Scrollbar-->
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
            <!--Button Simpan TOOLTIPS-->
            <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
            </script>  
            
            <!--MS: Markah Sasaran Verifikasi-->
            <!--MV: Markah Verifikasi-->
            <!--------------------------------------- MarkahTL ---------------------------------------->

            <!--MarkahTL for MS-->
            {{-- <script>
                function findTotalMS_TL() {
                var arr = document.getElementsByClassName('sum_ms_tl');
                var tot = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_ms_tl').value = tot;
            }

            </script> --}}

            <!--MarkahTL for MV-->
            {{-- <script>
                function findTotalMV_TL() {
                var arr = document.getElementsByClassName('sum_mv_tl');
                var tot1 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot1 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mv_tl').value = tot1;
            }

            </script> --}}

            <!--ADD MARKAHTL_MSV AND MARKAHTL_MMV-->
            {{-- <script>
                function add(){
                var tot, tot1, sum;
                tot = parseInt(document.getElementById("sum_ms_tl").value);
                tot1 = parseInt(document.getElementById("sum_mv_tl").value);
                sum = tot + tot1;
                document.getElementById("answer").value = sum;
                }
            </script> --}}

            <!--------------------------------------- MarkahKT ---------------------------------------->

            <!--MarkahKT for MS-->
            {{-- <script>
                function findTotalMS_KT() {
                var arr = document.getElementsByClassName('sum_ms_kt');
                var tot2 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot2 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_ms_kt').value = tot2;
            }

            </script> --}}

            <!--MarkahKT for MV-->
            {{-- <script>
                function findTotalMV_KT() {
                var arr = document.getElementsByClassName('sum_mv_kt');
                var tot3 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot3 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mv_kt').value = tot3;
            }

            </script> --}}

            <!--------------------------------------- MarkahSB ---------------------------------------->

            <!--MarkahSB for MS-->
            {{-- <script>
                function findTotalMS_SB() {
                var arr = document.getElementsByClassName('sum_ms_sb');
                var tot4 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot4 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_ms_sb').value = tot4;
            }

            </script> --}}

            <!--MarkahSB for MV-->
            {{-- <script>
                function findTotalMV_SB() {
                var arr = document.getElementsByClassName('sum_mv_sb');
                var tot5 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot5 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mv_sb').value = tot5;
            }

            </script> --}}

            <!--------------------------------------- MarkahPA ---------------------------------------->

            <!--MarkahPA for MS-->
            {{-- <script>
                function findTotalMS_PA() {
                var arr = document.getElementsByClassName('sum_ms_pa');
                var tot6 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot6 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_ms_pa').value = tot6;
            }

            </script> --}}

            <!--MarkahPA for MV-->
            {{-- <script>
                function findTotalMV_PA() {
                var arr = document.getElementsByClassName('sum_mv_pa');
                var tot7 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot7 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mv_pa').value = tot7;
            }

            </script> --}}

            <!--------------------------------------- MarkahPD ---------------------------------------->

            <!--MarkahPD for MS-->
            {{-- <script>
                function findTotalMS_PD() {
                var arr = document.getElementsByClassName('sum_ms_pd');
                var tot8 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot8 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_ms_pd').value = tot8;
            }

            </script> --}}

            <!--MarkahPD for MV-->
            {{-- <script>
                function findTotalMV_PD() {
                var arr = document.getElementsByClassName('sum_mv_pd');
                var tot9 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot9 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mv_pd').value = tot9;
            }

            </script> --}}

            <!--------------------------------------- MarkahFL ---------------------------------------->

            <!--MarkahFL for MS-->
            {{-- <script>
                function findTotalMS_FL() {
                var arr = document.getElementsByClassName('sum_ms_fl');
                var tot10 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot10 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_ms_fl').value = tot10;
            }

            </script> --}}

            <!--MarkahFL for MV-->
            {{-- <script>
                function findTotalMV_FL() {
                var arr = document.getElementsByClassName('sum_mv_fl');
                var tot11 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot11 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mv_fl').value = tot11;
            }

            </script> --}}

            <!--------------------------------------- MarkahIN ---------------------------------------->

            <!--MarkahIN for MS-->
            {{-- <script>
                function findTotalMS_IN() {
                var arr = document.getElementsByClassName('sum_ms_in');
                var tot12 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot12 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_ms_in').value = tot12;
            }

            </script> --}}

            <!--MarkahIN for MV-->
            {{-- <script>
                function findTotalMV_IN() {
                var arr = document.getElementsByClassName('sum_mv_in');
                var tot13 = 0;
                for (var i = 0; i < arr.length; i++) {
                    if (parseFloat(arr[i].value))
                    tot13 += parseFloat(arr[i].value);
                }
                document.getElementById('total_amount_mv_in').value = tot13;
            }

            </script> --}}

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
                var select = document.getElementsByClassName('js-select-auto__select'); // make sure you are selecting the right <select> element
                var value = select[0].value; // e.g., 3
            </script> --}}

            {{-- <script>
                var selectAutocomplete = document.getElementsByClassName('select-auto')['A']; // your dynamically created select
                new SelectAuto(selectAutocomplete);
            </script> --}}

            <!--MARKAH SASARAN (MS) VERIFIKASI CALCULATION-->
            <!--MS_TL : MARKAH SASARAN TL-->
            <!--MS_KT : MARKAH SASARAN KT-->
            <!--MS_SB : MARKAH SASARAN SB-->
            <!--MS_PA : MARKAH SASARAN PA-->
            <!--MS_PD : MARKAH SASARAN PD-->
            <!--MS_FL : MARKAH SASARAN FL-->
            <!--MS_IN : MARKAH SASARAN IN-->
            <script>
                function findTotalMS_TL(){
                    var totalMS_TL = document.getElementById('totalMS_TL');
                    var MS_TL = document.getElementsByClassName('MS_TL');
                    var sumMS_TL = 0;

                    for( var i = 0; i < MS_TL.length; i++ ){
                        sumMS_TL += Number(MS_TL[i].value);

                    //display the total of inputs
                    totalMS_TL.value = sumMS_TL;
                    }
                    document.getElementById('totalMS_TL').value = sumMS_TL;
                }

                function findTotalMS_KT(){
                    var totalMS_KT = document.getElementById('totalMS_KT');
                    var MS_KT = document.getElementsByClassName('MS_KT');
                    var sumMS_KT = 0;

                    for( var i = 0; i < MS_KT.length; i++ ){
                        sumMS_KT += Number(MS_KT[i].value);

                    //display the total of inputs
                    totalMS_KT.value = sumMS_KT;
                    }
                    document.getElementById('totalMS_KT').value = sumMS_KT;
                }

                function findTotalMS_SB(){
                    var totalMS_SB = document.getElementById('totalMS_SB');
                    var MS_SB = document.getElementsByClassName('MS_SB');
                    var sumMS_SB = 0;

                    for( var i = 0; i < MS_SB.length; i++ ){
                        sumMS_SB += Number(MS_SB[i].value);

                    //display the total of inputs
                    totalMS_SB.value = sumMS_SB;
                    }
                    document.getElementById('totalMS_SB').value = sumMS_SB;
                }

                function findTotalMS_PA(){
                    var totalMS_PA = document.getElementById('totalMS_PA');
                    var MS_PA = document.getElementsByClassName('MS_PA');
                    var sumMS_PA = 0;

                    for( var i = 0; i < MS_PA.length; i++ ){
                        sumMS_PA += Number(MS_PA[i].value);

                    //display the total of inputs
                    totalMS_PA.value = sumMS_PA;
                    }
                    document.getElementById('totalMS_PA').value = sumMS_PA;
                }

                function findTotalMS_PD(){
                    var totalMS_PD = document.getElementById('totalMS_PD');
                    var MS_PD = document.getElementsByClassName('MS_PD');
                    var sumMS_PD = 0;

                    for( var i = 0; i < MS_PD.length; i++ ){
                        sumMS_PD += Number(MS_PD[i].value);

                    //display the total of inputs
                    totalMS_PD.value = sumMS_PD;
                    }
                    document.getElementById('totalMS_PD').value = sumMS_PD;
                }

                function findTotalMS_FL(){
                    var totalMS_FL = document.getElementById('totalMS_FL');
                    var MS_FL = document.getElementsByClassName('MS_FL');
                    var sumMS_FL = 0;

                    for( var i = 0; i < MS_FL.length; i++ ){
                        sumMS_FL += Number(MS_FL[i].value);

                    //display the total of inputs
                    totalMS_FL.value = sumMS_FL;
                    }
                    document.getElementById('totalMS_FL').value = sumMS_FL;
                }

                function findTotalMS_IN(){
                    var totalMS_IN = document.getElementById('totalMS_IN');
                    var MS_IN = document.getElementsByClassName('MS_IN');
                    var sumMS_IN = 0;

                    for( var i = 0; i < MS_IN.length; i++ ){
                        sumMS_IN += Number(MS_IN[i].value);

                    //display the total of inputs
                    totalMS_IN.value = sumMS_IN;
                    }
                    document.getElementById('totalMS_IN').value = sumMS_IN;
                }

                function findTotalMS(){
                    var TL = totalMS_TL.value || 0;
                    var KT = totalMS_KT.value || 0;
                    var SB = totalMS_SB.value || 0;
                    var PA = totalMS_PA.value || 0;
                    var PD = totalMS_PD.value || 0;
                    var FL = totalMS_FL.value || 0;
                    var IN = totalMS_IN.value || 0;
                    document.getElementById('totalMS').value = Number(TL) + Number(KT)
                    + Number(SB) + Number(PA) + Number(PD) + Number(FL) + Number(IN);
                }

                document.addEventListener('keyup', function(){
                    findTotalMS_TL();
                    findTotalMS_KT();
                    findTotalMS_SB();
                    findTotalMS_PA();
                    findTotalMS_PD();
                    findTotalMS_FL();
                    findTotalMS_IN();
                    findTotalMS();
                });
                
                // function peratusan_markah() {

                //     var peratus = document.getElementById("totalMS").value;
                //     // Method returns the element of num1 id
                //     document.getElementById("peratus").value = (totalMS * 100) / 101 + "%";
                //     }
            </script>

            <!--MARKAH VERIFIKASI (MV)  CALCULATION-->
            <!--MV_TL : MARKAH VERIFIKASI TL-->
            <!--MV_KT : MARKAH VERIFIKASI KT-->
            <!--MV_SB : MARKAH VERIFIKASI SB-->
            <!--MV_PA : MARKAH VERIFIKASI PA-->
            <!--MV_PD : MARKAH VERIFIKASI PD-->
            <!--MV_FL : MARKAH VERIFIKASI FL-->
            <!--MV_IN : MARKAH VERIFIKASI IN-->
            <script>
                function findTotalMV_TL(){
                    var totalMV_TL = document.getElementById('totalMV_TL');
                    var MV_TL = document.getElementsByClassName('MV_TL');
                    var sumMV_TL = 0;

                    for( var i = 0; i < MV_TL.length; i++ ){
                        sumMV_TL += Number(MV_TL[i].value);

                    //display the total of inputs
                    totalMV_TL.value = sumMV_TL;
                }
                    document.getElementById('totalMV_TL').value = sumMV_TL;
                }

                function findTotalMV_KT(){
                    var totalMV_KT = document.getElementById('totalMV_KT');
                    var MV_KT = document.getElementsByClassName('MV_KT');
                    var sumMV_KT = 0;

                    for( var i = 0; i < MV_KT.length; i++ ){
                        sumMV_KT += Number(MV_KT[i].value);

                    //display the total of inputs
                    totalMV_KT.value = sumMV_KT;
                    }
                    document.getElementById('totalMV_KT').value = sumMV_KT;
                }

                function findTotalMV_SB(){
                    var totalMV_SB = document.getElementById('totalMV_SB');
                    var MV_SB = document.getElementsByClassName('MV_SB');
                    var sumMV_SB = 0;

                    for( var i = 0; i < MV_SB.length; i++ ){
                        sumMV_SB += Number(MV_SB[i].value);

                    //display the total of inputs
                    totalMV_SB.value = sumMV_SB;
                    }
                    document.getElementById('totalMV_SB').value = sumMV_SB;
                }

                function findTotalMV_PA(){
                    var totalMV_PA = document.getElementById('totalMV_PA');
                    var MV_PA = document.getElementsByClassName('MV_PA');
                    var sumMV_PA = 0;

                    for( var i = 0; i < MV_PA.length; i++ ){
                        sumMV_PA += Number(MV_PA[i].value);

                    //display the total of inputs
                    totalMV_PA.value = sumMV_PA;
                    }
                    document.getElementById('totalMV_PA').value = sumMV_PA;
                }

                function findTotalMV_PD(){
                    var totalMV_PD = document.getElementById('totalMV_PD');
                    var MV_PD = document.getElementsByClassName('MV_PD');
                    var sumMV_PD = 0;

                    for( var i = 0; i < MV_PD.length; i++ ){
                        sumMV_PD += Number(MV_PD[i].value);

                    //display the total of inputs
                    totalMV_PD.value = sumMV_PD;
                    }
                    document.getElementById('totalMV_PD').value = sumMV_PD;
                }

                function findTotalMV_FL(){
                    var totalMV_FL = document.getElementById('totalMV_FL');
                    var MV_FL = document.getElementsByClassName('MV_FL');
                    var sumMV_FL = 0;

                    for( var i = 0; i < MV_FL.length; i++ ){
                        sumMV_FL += Number(MV_FL[i].value);

                    //display the total of inputs
                    totalMV_FL.value = sumMV_FL;
                    }
                    document.getElementById('totalMV_FL').value = sumMV_FL;
                }

                function findTotalMV_IN(){
                    var totalMV_IN = document.getElementById('totalMV_IN');
                    var MV_IN = document.getElementsByClassName('MV_IN');
                    var sumMV_IN = 0;

                    for( var i = 0; i < MV_IN.length; i++ ){
                        sumMV_IN += Number(MV_IN[i].value);

                    //display the total of inputs
                    totalMV_IN.value = sumMV_IN;
                    }
                    document.getElementById('totalMV_IN').value = sumMV_IN;
                }

                function findTotalMV(){
                    var TL = totalMV_TL.value || 0;
                    var KT = totalMV_KT.value || 0;
                    var SB = totalMV_SB.value || 0;
                    var PA = totalMV_PA.value || 0;
                    var PD = totalMV_PD.value || 0;
                    var FL = totalMV_FL.value || 0;
                    var IN = totalMV_IN.value || 0;
                    document.getElementById('totalMV').value = Number(TL) + Number(KT) + Number(SB) 
                    + Number(PA) + Number(PD) + Number(FL) + Number(IN);
                }

                document.addEventListener('keyup', function(){
                    findTotalMV_TL();
                    findTotalMV_KT();
                    findTotalMV_SB();
                    findTotalMV_PA();
                    findTotalMV_PD();
                    findTotalMV_FL();
                    findTotalMV_IN();
                    findTotalMV();
                });
            </script>
            
@endsection