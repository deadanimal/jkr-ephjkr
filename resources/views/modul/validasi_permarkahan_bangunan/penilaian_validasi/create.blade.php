@extends('layouts.base')
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

        /* Hide Arrows from Input Number*/
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }

        select {
            width: 250px;
        }
</style>


@section('content')

<div class="header">
    Penilaian Validasi Permarkahan Bangunan
        <b class="paparan-senarai-projek">> Penilaian</b>

            {{-- <h1 class="header-title">
                PENILAIAN REKA BENTUK BANGUNAN
            </h1> --}}
            <hr class="line-6">

<div class="container-fluid">
    <div class="card-body">
        <div class="table-responsive scrollbar">
            <form action="/validasi_permarkahan_bangunan/penilaian_validasi/{id}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')

                 <!--------------------------------------- MarkahTL ---------------------------------------->

                        <table id="example" class="table table-bordered line-table display">
                            <thead class="text-white">
                                <tr class="pg-1" align="center" style="background-color:#EB5500">
                                    <th rowspan="3">Kod</th>
                                    <th rowspan="3">Kriteria</th>
                                    <th rowspan="3" colspan="6">Kategori bangunan</th>
                                    <th colspan="4">Pembangunan Baru</th>
                                    <th colspan="4">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
                                    <th colspan="3">Penarafan semula/bangunan sedia ada</th>
                                    <th rowspan="2">Dokumen Pembuktian</th>
                                    <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                    <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
    
                                </tr>
                
                                <tr class="pg-1" align="center" style="background-color:#EB5500">
                                    <th colspan="4">Markah</th>
                                    <th colspan="4">Markah</th>
                                    <th colspan="3">Markah</th>
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
                                    <th>MMV</th>
                                    <th>MV</th>
                                    <th>ML</th>
                                    <th>Verifikasi (Peringkat 3)</th>
                
                                </tr>
                
                                <tr class="pg-1" style="background-color:#EB5500">
                                    <th>TL</th>
                                    <th colspan="33">PERANCANGAN & PENGURUSAN TAPAK LESTARI</th>
                                </tr>
                            </thead>
                
                                <!--TL1--><!--BARU SHJ-->
                                <tr class="pg-1" align="center">
                                    <td>TL1</td>
                                    <td>Perancangan Tapak</td>
                                    <td colspan="6"></td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL1_MR}}</td>
                                    <td>0</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL1_MMV}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Tidak Berkenaan</td>
                                    <td colspan="5">{{$kriteria_phjkr_bangunan->markahTL1_ULASAN_VERIFIKASI}}</td>
                                    <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" autocapitalize="off" id="markahTL1_ML_PUN" name="markahTL1_ML_PUN" /></td>

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
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL2_MR}}</td>
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL2_MMV}}</td>
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL2_MR_PUN}}</td>
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL2_MMV_PUN}}</td>
                                    <td></td>
                                    <td></td>
                                    <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                    <td>
                                        <span>&#183; Laporan Pelan Pengurusan Alam Sekitar</span><br>
                                        <span>&#183; Borang SPAS (Peringkat pembinaan)</span>
                                    </td>
                                    <td colspan="5">{{$kriteria_phjkr_bangunan->markahTL2_ULASAN_VERIFIKASI}}</td>
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
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL3_MR}}</td>
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL3_MMV}}</td>
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL3_MR_PUN}}</td>
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL3_MMV_PUN}}</td>
                                    <td></td>
                                    <td></td>
                                    <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                    <td>
                                        <span>&#183; Laporan kuantiti tanah yang diimport atau eksport</span><br>
                                        <span>&#183; Bukti bergambar</span><br>
                                        <span>&#183; Pengesahan kuantiti tanah potong/tambak sebenar oleh PD/SO 
                                            atau setaraf
                                        </span>
                                    </td>
                                    <td colspan="5">{{$kriteria_phjkr_bangunan->markahTL3_ULASAN_VERIFIKASI}}</td>
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
                                    <td>2</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL32_MR}}</td>
                                    <td>2</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL32_MMV}}</td>
                                    <td>2</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL32_MR_PUN}}</td>
                                    <td>2</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL32_MMV_PUN}}</td>
                                    <td></td>
                                    <td></td>
                                    <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                    <td>
                                        <span>&#183; Bukti bergambar</span><br>
                                        <span>&#183; Pengesahan kuantiti tanah potong/tambak sebenar oleh PD/SO atau setaraf</span><br>
                                        <span>&#183; Pengesahan pelaksanaan ESCP di tapak</span>
                                    </td>
                                    <td colspan="5">{{$kriteria_phjkr_bangunan->markahTL32_ULASAN_VERIFIKASI}}</td>
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
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL4_MR}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL4_MMV}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL4_MR_PUN}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL4_MMV_PUN}}</td>
                                    <td></td>
                                    <td></td>
                                    <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                    <td>
                                        <span>&#183; Pengesahan pelaksanaan ESCP di tapak</span><br>
                                    </td>
                                    <td colspan="5">{{$kriteria_phjkr_bangunan->markahTL4_ULASAN_VERIFIKASI}}</td>
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
                
                                <!--TL5--><!--Baru shj-->
                                <tr class="pg-1" align="center">
                                    <td>TL5</td>
                                    <td>Pemuliharaan dan Pemeliharaan Cerun</td>
                                    <td colspan="6"></td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL5_MR}}</td>
                                    <td>0</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL5_MMV}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL5_MR_PUN}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <span>Tidak Berkenaan</span><br>
                                    </td>
                                    <td colspan="5">{{$kriteria_phjkr_bangunan->markahTL5_ULASAN_VERIFIKASI}}</td>
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
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL6_MR}}</td>
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL6_MMV}}</td>
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL6_MR_PUN}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL6_MMV_PUN}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL6_MMV_SEDIA}}</td>
                                    <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                    <td>
                                        <span> &#40;a&#41; Baru</span><br>
                                        <span>&#183; Laporan sistem perparitan</span><br>
                                        <span>&#183; Bukti bergambar</span><br>
                                        <span> &#40;b&#41; Sedia ada</span><br>
                                        <span>&#183; Laporan penyenggaraan sistem perparitan berkala</span><br>
                                        <span>&#183; Bukti bergambar</span><br>
                                    </td>
                                    <td colspan="5">{{$kriteria_phjkr_bangunan->markahTL6_ULASAN_VERIFIKASI}}</td>
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
                                    <td>2</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL7_MR}}</td>
                                    <td>2</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL7_MMV}}</td>
                                    <td>2</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL7_MR_PUN}}</td>
                                    <td>2</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL7_MMV_PUN}}</td>
                                    <td>2</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL7_MMV_SEDIA}}</td>
                                    <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                    <td>
                                        <span>a&#41; Baru</span><br>
                                        <span>&#183; Lukisan siap bina</span><br>
                                        <span>&#183; Laporan audit akses OKU dan bukti bergambar yang telah siap</span><br>
                                        <span>a&#41; Sedia Ada</span><br>
                                        <span>&#183; Laporan audit akses OKU</span><br>
                                        <span>&#183; Bukti bergambar kerja-kerja penambahbaikan yang dilaksanakan
                                            mengikut laporan audit akses</span><br>
                                    </td>
                                    <td colspan="5">{{$kriteria_phjkr_bangunan->markahTL7_ULASAN_VERIFIKASI}}</td>
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
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL81_MR}}</td>
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL81_MMV}}</td>
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL81_MR_PUN}}</td>
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL81_MMV_PUN}}</td>
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL81_MMV_SEDIA}}</td>
                                    <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                    <td>
                                        <span> &#40;a&#41; Lukisan siap bina landskap</span><br>
                                        <span>&#183; Bukti bergambar pokok tidak ditebang dan disenggara dengan baik</span><br>
                                    </td>
                                    <td colspan="5">{{$kriteria_phjkr_bangunan->markahTL81_ULASAN_VERIFIKASI}}</td>
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
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL82_MR}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL82_MMV}}</td>
                                    <td>2</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL82_MR_PUN}}</td>
                                    <td>2</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL82_MMV_PUN}}</td>
                                    <td>2</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL82_MMV_SEDIA}}</td>
                                    <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                    <td>
                                        <span> &#40;a&#41; Pelan tapak siap bina yang telah disahkan oleh Arkitek Bertauliah</span><br>
                                        Nyatakan sekiranya ada perubahan
                                    </td>
                                    <td colspan="5">{{$kriteria_phjkr_bangunan->markahTL82_ULASAN_VERIFIKASI}}</td>
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
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL83_MR}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL83_MMV}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL83_MR_PUN}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL83_MMV_PUN}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL83_MMV_SEDIA}}</td>
                                    <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                    <td>
                                        <span> &#183; Pelan landskap siap bina</span><br>
                                        <span> &#183; Inventori pokok</span><br>
                                        <span> &#183; Bukti bergambar</span><br>
                                    </td>
                                    <td colspan="5">{{$kriteria_phjkr_bangunan->markahTL83_ULASAN_VERIFIKASI}}</td>
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
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL84_MR}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL84_MMV}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL84_MR_PUN}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL84_MMV_PUN}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL84_MMV_SEDIA}}</td>
                                    <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                    <td>
                                        <span> &#183; Bukti bergambar</span><br>
                                    </td>
                                    <td colspan="5">{{$kriteria_phjkr_bangunan->markahTL84_ULASAN_VERIFIKASI}}</td>
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
                                    <td>2</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL85_MR}}</td>
                                    <td>2</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL85_MMV}}</td>
                                    <td>2</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL85_MR_PUN}}</td>
                                    <td>2</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL85_MMV_PUN}}</td>
                                    <td>2</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL85_MMV_SEDIA}}</td>
                                    <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                    <td>
                                        <span> &#183; Lukisan siap bina</span><br>
                                        <span> &#183; Bukti bergambar</span><br>
                                    </td>
                                    <td colspan="5">{{$kriteria_phjkr_bangunan->markahTL85_ULASAN_VERIFIKASI}}</td>
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
                                    <td colspan="5"></td>
                                    <td colspan="4"></td>
                                </tr>
    
                                <!--TL9.1-->
                                <tr class="pg-1" align="center">
                                    <td>TL9.1</td>
                                    <td>Indeks Pantulan Suria (SRI) mengikut jenis & kecerunan bumbung
                                    </td>
                                    <td colspan="6"></td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL91_MR}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL91_MMV}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL91_MR_PUN}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL91_MMV_PUN}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL91_MMV_SEDIA}}</td>
                                    <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>
                                    <td>
                                        <span>&#183; Method statement yang telah disahkan oleh
                                            pegawai penguasa (SO)</span><br>
                                        <span>&#183; Bukti bergambar</span><br>
                                        <span>&#183; Lukisan siap bina</span><br>
                                    </td>
                                    <td colspan="5">{{$kriteria_phjkr_bangunan->markahTL91_ULASAN_VERIFIKASI}}</td>
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
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL92_MR}}</td>
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL92_MMV}}</td>
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL92_MR_PUN}}</td>
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL92_MMV_PUN}}</td>
                                    <td>3</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL92_MMV_SEDIA}}</td>
                                    <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                    <td>
                                        <span>&#183; Bukti bergambar</span><br>
                                        <span>&#183; Lukisan siap bina</span><br>
                                        <span>&#183; Rekod Senggaraan</span><br>
                                    </td>
                                    <td colspan="5">{{$kriteria_phjkr_bangunan->markahTL92_ULASAN_VERIFIKASI}}</td>
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
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL10_MR}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL10_MMV}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL10_MR_PUN}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL10_MMV_PUN}}</td>
                                    <td>1</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTL10_MMV_SEDIA}}</td>
                                    <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                    <td>
                                        <span>&#183; Lukisan siap bina tempat letak kenderaan dan penanda</span><br>
                                        <span>&#183; Bukti bergambar</span><br>
                                    </td>
                                    <td colspan="5">{{$kriteria_phjkr_bangunan->markahTL10_ULASAN_VERIFIKASI}}</td>
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
                                    <td colspan="3">29</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MR}}</td>
                                    <td>27</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MMV}}</td>
                                    <td>27</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MR_PUN}}</td>
                                    <td>26</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MMV_PUN}}</td>
                                    <td>17</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MMV_SEDIA}}</td>
                                    <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

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
                                <th colspan="3">Penarafan semula/bangunan sedia ada</th>
                                <th rowspan="2">Dokumen Pembuktian</th>
                                <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
                            </tr>

                            <tr class="pg-2" align="center" style="background-color:#EB5500">
                                <th colspan="4">Markah</th>
                                <th colspan="4">Markah</th>
                                <th colspan="3">Markah</th>
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
                                <th>MMV</th>
                                <th>MV</th>
                                <th>ML</th>
                                <th>Verifikasi (Peringkat 3)</th>
                            </tr>

                            <tr class="pg-2" style="background-color:#EB5500">
                                <th>KT</th>
                                <th colspan="38">PENGURUSAN KECEKAPAN TENAGA DAN PENGGUNAAN TENAGA BOLEH BAHARU</th>
                            </tr>
                        </thead>

                            <!--KT1-->
                            <tr class="pg-2" align="center">
                                <td>KT1</td>
                                <td>Rekabentuk bumbung</td>
                                <td colspan="6"></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT1_MR}}</td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT1_MMV}}</td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT1_MR_PUN}}</td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT1_MMV_PUN}}</td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT1_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                <td>
                                    <span>&#183; Katalog bahan dan sampel yang diluluskan</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
                                    <span>&#183; Bukti bergambar</span>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT1_ULASAN_VERIFIKASI}}</td>
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
                                <td colspan="5"></td>
                                <td colspan="4"></td>

                            </tr>

                            <!--KT2.1-->
                            <tr class="pg-2" align="center">
                                <td>KT2.1</td>
                                <td>Fasad Utama bangunan yang menghadap orientasi utara-selatan</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT21_MR}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT21_MMV}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT21_MR_PUN}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT21_MMV_PUN}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT21_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                <td>
                                    <span>&#183; Lukisan siap bina</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT21_ULASAN_VERIFIKASI}}</td>
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
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT22_MR}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT22_MMV}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT22_MR_PUN}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT22_MMV_PUN}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT22_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                <td>
                                    <span> &#183; Lukisan siap bina</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT22_ULASAN_VERIFIKASI}}</td>
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
                                <td colspan="5"></td>
                                <td colspan="4"></td>
                            </tr>

                            <!--KT3.1--><!--Baru | PUN-->
                            <tr class="pg-2" align="center">
                                <td>KT3.1</td>
                                <td>Dinding luar bangunan</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT31_MR}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT31_MMV}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT31_MR_PUN}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT31_MMV_SEDIA}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span>&#183; Katalog bahan yang diluluskan untuk pembinaan</span><br>
                                    <span>&#183; Pengiraan U-Value yang disahkan</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT31_ULASAN_VERIFIKASI}}</td>
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
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT32_MR}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT32_MMV}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT32_MR_PUN}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT32_MMV_PUN}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT32_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT32_ULASAN_VERIFIKASI}}</td>
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
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT4_MR}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT4_MMV}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT4_MR_PUN}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT4_MMV_PUN}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span>&#183; Pengiraan OTTV dan RTTV yang disahkan</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT4_ULASAN_VERIFIKASI}}</td>
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
                                <td colspan="5"></td>
                                <td colspan="4"></td>
                            </tr>

                            <!--KT5.1-->
                            <tr class="pg-2" align="center">
                                <td>KT5.1</td>
                                <td>Zon Pencahayaan</td>
                                <td colspan="6"></td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT51_MR}}</td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT51_MMV}}</td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT51_MR_PUN}}</td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT51_MMV_PUN}}</td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT51_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Lukisan siap bina litar lampu yang telah di zon dan lokasi pemasangan sensor</span><br>
                                    <span> &#183; Bukti bergambar</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT51_ULASAN_VERIFIKASI}}</td>
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
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT52_MR}}</td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT52_MMV}}</td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT52_MR_PUN}}</td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT52_MMV_PUN}}</td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT52_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Lukisan siap bina yang menunjukkan lokasi suis</span><br>
                                    <span> &#183; Bukti bergambar</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT52_ULASAN_VERIFIKASI}}</td>
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

                            <!--KT5.3-->
                            <tr class="pg-2" align="center">
                                <td>KT5.3</td>
                                <td>Lighting Power Density (LPD)</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT53_MR}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT53_MMV}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT53_MR_PUN}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT53_MMV_PUN}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT53_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Laporan pengambilan data mengikut spesifikasi</span><br>
                                    <span> &#183; Lukisan siap bina</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT53_ULASAN_VERIFIKASI}}</td>
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
                            
                            <!--KT6--><!--No input-->
                            <tr class="pg-2" align="center">
                                <td>KT6</td>
                                <td>Sistem penyaman udara dan pengudaraan mekanikal (ACMV)</td>
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
                                <td>
                                    {{-- <span> &#183; Lukisan siap bina yang menunjukkan lokasi suis</span><br>
                                    <span> &#183; Bukti bergambar</span><br> --}}
                                </td>
                                <td colspan="5"></td>
                                <td colspan="4">
                                    {{-- <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form> --}}
                                </td>
                            </tr>

                            <!--KT6.1-->
                            <tr class="pg-2" align="center">
                                <td>KT6.1</td>
                                <td>Coefficient of Performance (COP)</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT61_MR}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT61_MMV}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT61_MR_PUN}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT61_MMV_PUN}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT61_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Laporan pengukuran dan verifikasi</span><br>
                                    <span> &#183; Pengiraan COP</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT61_ULASAN_VERIFIKASI}}</td>
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

                            <!--KT6.2-->
                            <tr class="pg-2" align="center">
                                <td>KT6.2</td>
                                <td>Green Refrigerant</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT62_MR}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT62_MMV}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT62_MR_PUN}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT62_MMV_PUN}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT62_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Rekod penyenggaraan peralatan</span><br>
                                    <span> &#183; Brosur pembekal</span><br>
                                    <span> &#183; Rekod inventori</span>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT62_ULASAN_VERIFIKASI}}</td>
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

                            <!--KT7-->
                            <tr class="pg-2" align="center">
                                <td>KT7</td>
                                <td>Penyusupan udara</td>
                                <td colspan="6"></td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT7_MR}}</td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT7_MMV}}</td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT7_MR_PUN}}</td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT7_MMV_PUN}}</td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT7_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                <td>
                                    <span> &#183; Lukisan butiran</span><br>
                                    <span> &#183; Lukisan siap bina</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT7_ULASAN_VERIFIKASI}}</td>
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
                                <td>Tenaga Boleh Baharu (TBB)</td>
                                <td colspan="6"></td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT8_MR}}</td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT8_MMV}}</td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT8_MR_PUN}}</td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT8_MMV_PUN}}</td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT8_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                {{-- <td colspan="2">
                                    <span>&#183; Mengemukakan lukisan rekabentuk sistem dan simulasi pengiraan
                                        bagi anggaran tenaga baharu yang boleh dihasilkan oleh sistem tersebut</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Salinan lukisan siap bina dan laporan uji terima yang mematuhi kehendak rekabentuk</span><br>
                                    <span> &#183; Pengiraan penjanaan tenaga boleh baharu berbanding jumlah penggunaan tenaga tahunan bangunan</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT8_ULASAN_VERIFIKASI}}</td>
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

                            <!--KT9-->
                            <tr class="pg-2" align="center">
                                <td>KT9</td>
                                <td>Prestasi Penggunaan Tenaga</td>
                                <td colspan="6"></td>
                                <td>10</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT9_MR}}</td>
                                <td>10</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT9_MMV}}</td>
                                <td>10</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT9_MR_PUN}}</td>
                                <td>10</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT9_MMV_PUN}}</td>
                                <td>10</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT9_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Pengiraan semula berdasarkan bacaan meter</span><br>
                                    <span> &#183; Bil elektrik 12 bulan (jika berkaitan)</span><br>
                                    <span> &#183; Lukisan siap bina yang berkaitan</span>
                                    <span> &#183; Pengiraan peratus pengurangan</span>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT9_ULASAN_VERIFIKASI}}</td>
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

                            <!--KT10--><!--No input-->
                            <tr class="pg-2" align="center">
                                <td>KT10</td>
                                <td>Paparan dan kawalan</td>
                                <td colspan="6"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    {{-- <span> &#183; Lukisan siap bina yang menunjukkan lokasi suis</span><br>
                                    <span> &#183; Bukti bergambar</span><br> --}}
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

                            <!--KT10.1-->
                            <tr class="pg-2" align="center">
                                <td>KT10.1</td>
                                <td>Pemasangan sub-meter digital</td>
                                <td colspan="6"></td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT101_MR}}</td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT101_MMV}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT101_MR_PUN}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT101_MMV_PUN}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT101_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Lukisan siap bina yang menunjukkan lokasi suis</span><br>
                                    <span> &#183; Bukti bergambar</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT101_ULASAN_VERIFIKASI}}</td>
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

                            <!--KT10.2-->
                            <tr class="pg-2" align="center">
                                <td>KT10.2</td>
                                <td>Sistem Pengurusan Kawalan Tenaga</td>
                                <td colspan="6"></td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT102_MR}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT102_MMV}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT102_MR_PUN}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT102_MMV_PUN}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT102_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                <td>
                                    <span> a &#41; Baru</span><br>
                                    <span> &#183; Lukisan siap bina</span><br>
                                    <span> &#183; Gambar rajah litar</span><br>
                                    <span> &#183; Rekod Pengujian dan Pentauliahan</span><br>
                                    <span> &#183; Sijil pengiktirafan MS ISO 50001</span><br>
                                    <span> b &#41; Sedia ada</span><br>
                                    <span> &#183; Lukisan siap bina</span><br>
                                    <span> &#183; Gambar rajah litar</span><br>
                                    <span> &#183; Laporan BEMS</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT102_ULASAN_VERIFIKASI}}</td>
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

                            <!--KT10.3-->
                            <tr class="pg-2" align="center">
                                <td>KT10.3</td>
                                <td>Verifikasi sistem paparan dan kawalan</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT103_MR}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT103_MMV}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT103_MR_PUN}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT103_MMV_PUN}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT103_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Senarai penggunaan tenaga berdasarkan bil elektrik bulanan</span><br>
                                    <span> &#183; Laporan verifikasi dan pelan penambahbaikan</span><br>
                                    <span> &#183; Manual Operasi dan Penyenggaraan</span>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT103_ULASAN_VERIFIKASI}}</td>
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
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT11_MR}}</td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT11_MMV}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT11_MR_PUN}}</td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT11_MMV_PUN}}</td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT11_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                {{-- <td colspan="2">
                                    <span>&#183; Pelan pengujian dan pentauliahan</span><br>
                                </td> --}}
                                <td>
                                    <span>&#183; Dokumen lengkap pengujian dan pentauliahan yang telah disahkan</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahKT11_ULASAN_VERIFIKASI}}</td>
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
                                <td colspan="6">Jumlah markah KT</td>
                                <td colspan="3">55</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MR}}</td>
                                <td>57</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MMV}}</td>
                                <td>54</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MR_PUN}}</td>
                                <td>56</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MMV_PUN}}</td>
                                <td>48</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>
                                <td></td>
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
                                <th rowspan="3" colspan="6">Kategori bangunan</th>
                                <th colspan="4">Pembangunan Baru</th>
                                <th colspan="4">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
                                <th colspan="3">Penarafan semula/bangunan sedia ada</th>
                                <th rowspan="2">Dokumen Pembuktian</th>
                                <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
                            </tr>

                            <tr class="pg-3" align="center" style="background-color:#EB5500">
                                <th colspan="4">Markah</th>
                                <th colspan="4">Markah</th>
                                <th colspan="3">Markah</th>
                            </tr>

                            <tr class="pg-3" align="center" style="background-color:#EB5500">
                                <th>MM</th>
                                <th>MR</th>
                                <th>MMV</th>
                                <th>MV</th>
                                <th>MM</th>
                                <th>MR</th>
                                <th>MMV</th>
                                <th>MV</th>
                                <th>MMV</th>
                                <th>MV</th>
                                <th>ML</th>
                                <th>Verifikasi (Peringkat 3)</th>
                            </tr>

                            <tr class="pg-3" style="background-color:#EB5500">
                                <th>SB</th>
                                <th colspan="38">PENGURUSAN SUMBER DAN BAHAN</th>
                            </tr>
                        </thead>

                        <!--SB1--><!--Baru dan PUN shj-->
                        <tr class="pg-3" align="center">
                            <td>SB1</td>
                            <td>Sistem Binaan Berindustri (IBS)</td>
                            <td colspan="6"></td>
                            <td>5</td>
                            <td>{{$kriteria_phjkr_bangunan->markahSB1_MR}}</td>
                            <td>5</td>
                            <td>{{$kriteria_phjkr_bangunan->markahSB1_MMV}}</td>
                            <td>7</td>
                            <td>{{$kriteria_phjkr_bangunan->markahSB1_MR_PUN}}</td>
                            <td>7</td>
                            <td>{{$kriteria_phjkr_bangunan->markahSB1_MMV_PUN}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span>&#183; Lukisan pembinaan IBS</span><br>
                                <span>&#183; Lukisan siap bina</span><br>      
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahSB1_ULASAN_VERIFIKASI}}</td>
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

                        <!--SB2--><!--Baru dan PUN shj-->
                        <tr class="pg-3" align="center">
                            <td>SB2</td>
                            <td>Produk hijau</td>
                            <td colspan="6"></td>
                            <td>7</td>
                            <td>{{$kriteria_phjkr_bangunan->markahSB2_MR}}</td>
                            <td>7</td>
                            <td>{{$kriteria_phjkr_bangunan->markahSB2_MMV}}</td>
                            <td>7</td>
                            <td>{{$kriteria_phjkr_bangunan->markahSB2_MR_PUN}}</td>
                            <td>7</td>
                            <td>{{$kriteria_phjkr_bangunan->markahSB2_MMV_PUN}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span>&#183; Brosur pembekal</span><br>
                                <span>&#183; Bukti bergambar</span><br>
                                <span>&#183; Borang pengiraan skor GPSS</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahSB2_ULASAN_VERIFIKASI}}</td>
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

                        <!--SB3--><!--Baru dan PUN shj-->
                        <tr class="pg-3" align="center">
                            <td>SB3</td>
                            <td>Pengurusan sisa semasa pembinaan</td>
                            <td colspan="6"></td>
                            <td>4</td>
                            <td>{{$kriteria_phjkr_bangunan->markahSB3_MR}}</td>
                            <td>4</td>
                            <td>{{$kriteria_phjkr_bangunan->markahSB3_MMV}}</td>
                            <td>4</td>
                            <td>{{$kriteria_phjkr_bangunan->markahSB3_MR_PUN}}</td>
                            <td>4</td>
                            <td>{{$kriteria_phjkr_bangunan->markahSB3_MMV_PUN}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span>&#183; Dokumen bukti proses penyimpanan</span><br>
                                <span>&#183; Dokumen bukti proses penghantaran ke tapak pelupusan</span><br>
                                <span>&#183; Dokumen bukti proses pelupusan sisa berjadual seperti resit
                                    dan borang semasa audit dijalankan
                                </span><br>
                                <span>&#183; Bukti bergambar</span><br>
                                <span>&#183; Pengiraan kitar semula (jika ada)</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahSB3_ULASAN_VERIFIKASI}}</td>
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

                        <!--SB4-->
                        <tr class="pg-3" align="center">
                            <td>SB4</td>
                            <td>3r-Semasa Operasi</td>
                            <td colspan="6"></td>
                            <td>4</td>
                            <td>{{$kriteria_phjkr_bangunan->markahSB4_MR}}</td>
                            <td>4</td>
                            <td>{{$kriteria_phjkr_bangunan->markahSB4_MMV}}</td>
                            <td>4</td>
                            <td>{{$kriteria_phjkr_bangunan->markahSB4_MR_PUN}}</td>
                            <td>4</td>
                            <td>{{$kriteria_phjkr_bangunan->markahSB4_MMV_PUN}}</td>
                            <td>4</td>
                            <td>{{$kriteria_phjkr_bangunan->markahSB4_MMV_SEDIA}}</td>
                            <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                            <td>
                                <span>&#183; Pematuhan pelan pengurusan sisa domestik</span><br>
                                <span>&#183; Bukti bergambar</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahSB4_ULASAN_VERIFIKASI}}</td>
                            <td colspan="4">
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
                                <td colspan="6">Jumlah markah SB</td>
                                <td colspan="3">20</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MR}}</td>
                                <td>20</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOAL_SB_MMV}}</td>
                                <td>15</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MR_PUN}}</td>
                                <td>15</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MMV_PUN}}</td>
                                <td>4</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>
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
                                <th rowspan="3" colspan="6">Kategori bangunan</th>
                                <th colspan="4">Pembangunan Baru</th>
                                <th colspan="4">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
                                <th colspan="3">Penarafan semula/bangunan sedia ada</th>
                                <th rowspan="2">Dokumen Pembuktian</th>
                                <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
                            </tr>

                            <tr class="pg-4" align="center" style="background-color:#EB5500">
                                <th colspan="4">Markah</th>
                                <th colspan="4">Markah</th>
                                <th colspan="3">Markah</th>
                            </tr>
                        
                            <tr class="pg-4" align="center" style="background-color:#EB5500">
                                    <th>MM</th>
                                    <th>MR</th>
                                    <th>MMV</th>
                                    <th>MV</th>
                                    <th>MM</th>
                                    <th>MR</th>
                                    <th>MMV</th>
                                    <th>MV</th>
                                    <th>MMV</th>
                                    <th>MV</th>
                                    <th>ML</th>
                                    <th>Verifikasi (Peringkat 3)</th>
                            </tr>

                            <tr class="pg-4" style="background-color:#EB5500">
                                <th>PA</th>
                                <th colspan="38">PENGURUSAN KECEKAPAN PENGGUNAAN AIR</th>
                            </tr>
                        </thead>

                            <!--PA1-->
                            <tr class="pg-4" align="center">
                                <td>PA1</td>
                                <td>Produk Kecekapan Air</td>
                                <td colspan="6"></td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA1_MR}}</td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA1_MMV}}</td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA1_MR_PUN}}</td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA1_MMV_PUN}}</td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA1_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Pensijilan WELPS</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahPA1_ULASAN_VERIFIKASI}}</td>
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

                            <!--PA2-->
                            <tr class="pg-4" align="center">
                                <td>PA2</td>
                                <td>Penjimatan Penggunaan Air Dalam Bangunan</td>
                                <td colspan="6"></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA2_MR}}</td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA2_MMV}}</td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA2_MR_PUN}}</td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA2_MMV_PUN}}</td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA2_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Pensijilan WELPS</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahPA2_ULASAN_VERIFIKASI}}</td>
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

                            <!--PA3-->
                            <tr class="pg-4" align="center">
                                <td rowspan="2">PA3</td>
                                <td>i. SPAH</td>
                                <td colspan="6"></td>
                                <td>4</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA3_MR}}</td>
                                <td>4</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA3_MMV}}</td>
                                <td>4</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA3_MR_PUN}}</td>
                                <td>4</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA3_MMV_PUN}}</td>
                                <td>4</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA3_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Pensijilan WELPS</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahPA3_ULASAN_VERIFIKASI}}</td>
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

                            <tr class="pg-4" align="center">
                                <td>ii. Kitar Semula Air Sisa</td>
                                <td colspan="6"></td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA32_MR}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA32_MMV}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA32_MR_PUN}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA32_MMV_PUN}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA32_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                <td>
                                    <span>&#183; Laporan pengujian sistem</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahPA32_ULASAN_VERIFIKASI}}</td>
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

                            <!--PA4-->
                            <tr class="pg-4" align="center">
                                <td>PA4</td>
                                <td>Sub-Meter Air</td>
                                <td colspan="6"></td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA4_MR}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA4_MMV}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA4_MR_PUN}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA4_MMV_PUN}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA4_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                <td>
                                    <span>&#183; Lukisan siap bina</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahPA4_ULASAN_VERIFIKASI}}</td>
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

                            <!--PA5-->
                            <tr class="pg-4" align="center">
                                <td>PA5</td>
                                <td>Sub-Meter Air</td>
                                <td colspan="6"></td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA5_MR}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA5_MMV}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA5_MR_PUN}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA5_MMV_PUN}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA5_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>

                                <td>
                                    <span>&#183; Lukisan siap bina</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahPA5_ULASAN_VERIFIKASI}}</td>
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


                            <!-- Jumlah MarkahPA-->
                            <tr class="pg-4" align="center">
                                <th colspan="6">Jumlah markah PA</th>
                                <td colspan="3">20</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MR}}</td>
                                <td>22</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MMV}}</td>
                                <td>22</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MR_PUN}}</td>
                                <td>22</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MMV_PUN}}</td>
                                <td>22</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MMV_SEDIA}}</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>
                                <td></td>
                            </tr> 

                    </table>

                    <!--------------------------------------- MarkahPD ---------------------------------------->
                    <table id="example" class="table table-bordered line-table display">
                        <thead class="text-white">
                            <tr class="pg-5" align="center" style="background-color:#EB5500">
                                <th rowspan="3">Kod</th>
                                <th rowspan="3">Kriteria</th>
                                <th rowspan="3" colspan="6">Kategori bangunan</th>
                                <th colspan="4">Pembangunan Baru</th>
                                <th colspan="4">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
                                <th colspan="2">Penarafan semula/bangunan sedia ada</th>
                                <th rowspan="2">Dokumen Pembuktian</th>
                                <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
                            </tr>

                            <tr class="pg-5" align="center" style="background-color:#EB5500">
                                <th colspan="4">Markah</th>
                                <th colspan="4">Markah</th>
                                <th colspan="2">Markah</th>
                            </tr>

                            <tr class="pg-5" align="center" style="background-color:#EB5500">
                                <th>MM</th>
                                <th>MR</th>
                                <th>MMV</th>
                                <th>MV</th>
                                <th>MM</th>
                                <th>MR</th>
                                <th>MMV</th>
                                <th>MV</th>
                                <th>MMV</th>
                                <th>MV</th>
                                <th>Verifikasi (Peringkat 3)</th>
                            </tr>

                            <tr class="pg-5" style="background-color:#EB5500">
                                <th>PD</th>
                                <th colspan="32">PENGURUSAN KUALITI PERSEKITARAN DALAMAN</th>
                            </tr>
                        </thead>

                        <!--PD1-->
                        <tr class="pg-5" align="center">
                            <td>PD1</td>
                            <td>Larangan merokok</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD1_MR}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD1_MMV}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD1_MR_PUN}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD1_MMV_PUN}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD1_MMV_SEDIA}}</td>
                            <td>
                                <span> a &#41; Baru</span><br>
                                <span> &#183; Gambar papan tanda dan lokasi larangan merokok</span><br>
                                <span> b &#41; Sedia ada</span><br>
                                <span> &#183; Gambar papan tanda dan lokasi larangan merokok</span><br>
                                <span> &#183; Rekod pelaksanaan program kesedaran atau langkah penguatkuasaan</span><br>                            </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD1_ULASAN_VERIFIKASI}}</td>
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

                        <!--PD2--><!--NO INPUT-->
                        <tr class="pg-5" align="center">
                            <td>PD2</td>
                            <td>Perancangan ruang</td>
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
                            <td colspan="5"></td>
                            <td colspan="4"></td>
                        </tr>

                        <!--PD2.1--><!--BARU SHJ-->
                        <tr class="pg-5" align="center">
                            <td>PD2.1</td>
                            <td>Lebar bangunan yang efektif &#40;no deep planning&#41;</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD21_MR}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD21_MMV_PUN}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span>&#183; Lukisan siap bina</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD21_ULASAN_VERIFIKASI}}</td>
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

                        <!--PD2.2-->
                        <tr class="pg-5" align="center">
                            <td>PD2.2</td>
                            <td>Susun atur ruang pejabat terbuka sepanjang permukaan fasad</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD22_MR}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD22_MMV}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD22_MR_PUN}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD22_MMV_PUN}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD22_MMV_SEDIA}}</td>
                            <td>
                                <span>&#183; Lukisan siap bina</span><br>
                                <span>&#183; Bukti bergambar</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD22_ULASAN_VERIFIKASI}}</td>
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

                        <!--PD2.3-->
                        <tr class="pg-5" align="center">
                            <td>PD2.3</td>
                            <td>Dinding sesekat dalaman yang telus cahaya</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD23_MR}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD23_MMV}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD23_MR_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD23_MMV_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD23_MMV_SEDIA}}</td>
                            <td>
                                <span>&#183; Lukisan siap bina</span><br>
                                <span>&#183; Bukti bergambar</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD23_ULASAN_VERIFIKASI}}</td>
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


                        <!--PD2.4-->
                        <tr class="pg-5" align="center">
                            <td>PD2.4</td>
                            <td>Ketinggian siling yang efektif</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD24_MR}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD24_MMV_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD24_MR_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD24_MMV_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD24_MMV_SEDIA}}</td>
                            <td>
                                <span>&#183; Lukisan siap bina</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD24_ULASAN_VERIFIKASI}}</td>
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

                        <!--PD2.5-->
                        <tr class="pg-5" align="center">
                            <td>PD2.5</td>
                            <td>Warna cerah di permukaan dinding dan siling</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD25_MR}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD25_MMV}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD25_MR_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD25_MMV_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD25_MMV_SEDIA}}</td>
                            <td>
                                <span>&#183; Bukti bergambar bagi mengesahkan skima warna yang digunakan</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD25_ULASAN_VERIFIKASI}}</td>
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

                        <!--PD3--><!--NO INPUT-->
                        <tr class="pg-5" align="center">
                            <td>PD3</td>
                            <td>Kualiti Visual</td>
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
                            <td colspan="5"></td>
                            <td colspan="4"></td>
                        </tr>

                        <!--PD3.1-->
                        <tr class="pg-5" align="center">
                            <td>PD3.1</td>
                            <td>Faktor Pencahayaan Siang (DF)</td>
                            <td colspan="6"></td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD31_MR}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD31_MMV}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD31_MR_PUN}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD31_MMV_PUN}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD31_MMV_SEDIA}}</td>
                            <td>
                                <span>&#183; Lukisan siap bina</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD31_ULASAN_VERIFIKASI}}</td>
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

                        <!--PD3.2-->
                        <tr class="pg-5" align="center">
                            <td>PD3.2</td>
                            <td>Menggunakan rak cahaya (light shelves)</td>
                            <td colspan="6"></td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD32_MR}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD32_MMV}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD32_MR_PUN}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD32_MMV_PUN}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD32_MMV_SEDIA}}</td>
                            <td>
                                <span>&#183; Lukisan pemasangan</span><br>
                                <span>&#183; Lukisan siap bina</span><br>
                                <span>&#183; Bukti bergambar</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD32_ULASAN_VERIFIKASI}}</td>
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

                        <!--PD3.3-->
                        <tr class="pg-5" align="center">
                            <td>PD3.3</td>
                            <td>Kawalan Tahap Kesilauan</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD33_MR}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD33_MMV}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD33_MR_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD33_MMV_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD33_MMV_SEDIA}}</td>
                            <td>
                                <span>&#183; Lukisan siap bina dan bukti bergambar
                                    bagi mengesahkan bidai yang digunakan</span><br>
                                <span>&#183; Laporan prestasi pencahayaan (jika ada)</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD33_ULASAN_VERIFIKASI}}</td>
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

                        <!--PD3.4-->
                        <tr class="pg-5" align="center">
                            <td>PD3.4</td>
                            <td>Akses visual kepada pandangan di luar</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD34_MR}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD34_MMV}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD34_MR_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD34_MMV_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD34_MMV_SEDIA}}</td>
                            <td>
                                <span>&#183; Katalog dan sample bahan yang diluluskan oleh S.O.</span><br>
                                <span>&#183; Lukisan Siap Bina</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD34_ULASAN_VERIFIKASI}}</td>
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

                        <!--PD3.5-->
                        <tr class="pg-5" align="center">
                            <td>PD3.5</td>
                            <td>Tahap Pencahayaan (bukan semulajadi) Bilik</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD35_MR}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD35_MMV}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD35_MR_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD35_MMV_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD35_MMV_SEDIA}}</td>
                            <td>
                                <span>&#183; Pengiraan dan lukisan terpasang bagi siling yang menunjukkan susun atur lampu</span><br>
                                <span>&#183; Laporan Pengujian dan Pentauliahan</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD35_ULASAN_VERIFIKASI}}</td>
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

                        <!--PD4--><!--No input-->
                        <tr class="pg-5" align="center">
                            <td>PD4</td>
                            <td>Prestasi Pengudaraan</td>
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
                            <td colspan="5"></td>
                            <td colspan="4"></td>
                        </tr>

                        <!--PD4.1-->
                        <tr class="pg-5" align="center">
                            <td>PD4.1</td>
                            <td>Memaksimakan Kawasan Tanpa Keperluan Sistem Penyaman Udara</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD41_MR}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD41_MMV}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD41_MR_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD41_MMV_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD41_MMV_SEDIA}}</td>
                            <td>
                                <span>&#183; Mengemukakan lukisan siap bina yang menunjukkan ruang
                                    pengudaraan secara semula jadi</span><br>
                                <span>&#183; Pelan susun atur</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD41_ULASAN_VERIFIKASI}}</td>
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

                        <!--PD4.2-->
                        <tr class="pg-5" align="center">
                            <td>PD4.2</td>
                            <td>Prestasi Kualiti Udara Dalaman: ASHRAE 62.1:2007 & 129</td>
                            <td colspan="6"></td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD42_MR}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD42_MMV}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD42_MR_PUN}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD42_MMV_PUN}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD42_MMV_SEDIA}}</td>
                            <td>
                                            <span>&#183; Mengemukakan lukisan pelan lantai yang menunjukkan
                                                ruang pengudaraan secara semulajadi</span><br>
                                            <span>&#183; Laporan simulasi, jika ada</span><br>
                                            <span>&#183; Pelan susun atur</span><br>

                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD42_ULASAN_VERIFIKASI}}</td>
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

                        <!--PD5--><!--No input-->
                        <tr class="pg-5" align="center">
                            <td>PD5</td>
                            <td>Keselesaan Thermal & Kawalan Sistem</td>
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
                            <td colspan="5"></td>
                            <td colspan="4"></td>
                            </td>
                        </tr>

                        <!--PD5.1-->
                        <tr class="pg-5" align="center">
                            <td>PD5.1</td>
                            <td>Rekabentuk Keselesaan Thermal: ASHRAE 55</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD51_MR}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD51_MMV}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD51_MR_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD51_MMV_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD51_MMV_SEDIA}}</td>
                            <td>
                                <span>&#183; Laporan Post Occupancy Evaluation (POE)</span><br>
                                <span>&#183; Lukisan siap bina dan bukti bergambar bagi setiap
                                    jenis sensor dan kawalan keselesaan thermal</span><br>
                                <span>&#183; Menyediakan kaji selidik tahap keselesaan pengguna</span><br>

                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD51_ULASAN_VERIFIKASI}}</td>
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

                         <!--PD5.2-->
                         <tr class="pg-5" align="center">
                            <td>PD5.2</td>
                            <td>Kawalan Sistem Pencahayaan & Pengudaraan (Pencahayaan)</td>
                            <td colspan="6"></td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD52_MR}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD52_MMV}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD52_MR_PUN}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD52_MMV_PUN}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD52_MMV_SEDIA}}</td>
                            <td>
                                <span>&#183; Bukti bergambar</span><br>
                                <span>&#183; Lukisan siap bina</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD52_ULASAN_VERIFIKASI}}</td>
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

                        <!--PD6--><!--No input-->
                        <tr class="pg-5" align="center">
                            <td>PD6</td>
                            <td>Kualiti Persekitaran Dalaman Dipertingkatkan</td>
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
                            <td colspan="5"></td>
                            <td colspan="4"></td>
                        </tr>

                         <!--PD6.1-->
                         <tr class="pg-5" align="center">
                            <td>PD6.1</td>
                            <td>Kawalan Paras Karbon Dioksida</td>
                            <td colspan="6"></td>
                            <td>3</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD61_MR}}</td>
                            <td>3</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD61_MMV}}</td>
                            <td>3</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD61_MR_PUN}}</td>
                            <td>3</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD61_MMV_PUN}}</td>
                            <td>3</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD61_SEDIA}}</td>
                             <td>
                                <span>&#183; Lukisan siap bina</span><br>
                                <span>&#183; Bukti bergambar</span><br>
                                <span>&#183; Rekod kalibrasi berkala</span><br>
                                <span>&#183; Rekod senggara sistem pemantauan dan kawalan CO2</span><br>

                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD61_ULASAN_VERIFIKASI}}</td>
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

                         <!--PD6.2--><!--PUN | Sedia Ada not available-->
                         <tr class="pg-5" align="center">
                            <td>PD6.2</td>
                            <td>Kualiti Persekitaran Semasa Pembinaan dan Sebelum diduduki</td>
                            <td colspan="6"></td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD62_MR}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD62_MMV}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span>&#183; Laporan bergambar berkala tahap kebersihan tapak</span><br>
                                <span>&#183; Laporan flush out</span>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD62_ULASAN_VERIFIKASI}}</td>
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

                         <!--PD7-->
                         <tr class="pg-5" align="center">
                            <td>PD7</td>
                            <td>Keselesaan Akustik</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD7_MR}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD7_MMV}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD7_MR_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD7_MMV_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD7_MMV_SEDIA}}</td>
                            <td>
                                <span>&#183; Laporan ukuran tahap bunyi dan penjelasan mengenai langkah-langkah
                                    yang telah dilaksanakan untuk mencapai tahap bunyi yang ditetapkan</span><br>
                                <span>&#183; Lukisan siap bina yang menunjukkan ciri-ciri kawalan bunyi yang telah dilaksanakan</span><br>
                                <span>&#183; Manufacturer's data sheets untuk bahan-bahan akustik 
                                    yang telah digunakan dalam bangunan</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD7_ULASAN_VERIFIKASI}}</td>
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

                        <!--PD8-->
                        <tr class="pg-5" align="center">
                            <td>PD8</td>
                            <td>Kualiti Udara Dalaman (IAQ)</td>
                            <td colspan="6"></td>
                            <td>3</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD8_MR}}</td>
                            <td>3</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD8_MMV}}</td>
                            <td>3</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD8_MR_PUN}}</td>
                            <td>3</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD8_MMV_PUN}}</td>
                            <td>3</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD8_MMV_SEDIA}}</td>
                            <td>
                                <span>&#183; Katalog dan kaedah pemasangan (method statement) yang telah
                                    disahkan oleh Pegawai yang kompeten</span><br>
                                <span>&#183; Gambar semasa kerja pemasangan</span><br>
                                <span>&#183; Lukisan siap bina</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD8_ULASAN_VERIFIKASI}}</td>
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

                         <!--PD9-->
                         <tr class="pg-5" align="center">
                            <td>PD9</td>
                            <td>Pencegahan Kulapok (Mold)</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD9_MR}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD9_MMV}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD9_MR_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD9_MMV_PUN}}</td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD9_MMV_SEDIA}}</td>
                            <td>
                                <span>&#183; Laporan ringkas yang menggariskan strategi yang akan dilaksanakan
                                    untuk memenuhi keperluan bagi pencegahan kulapok</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD9_ULASAN_VERIFIKASI}}</td>
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

                        <!--PD10--><!--Baru not available-->
                        <tr class="pg-5" align="center">
                            <td>PD10</td>
                            <td>Kaji Selidik Keselesaan Penghuni</td>
                            <td colspan="6"></td>
                            <td></td>
                            <td></td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD10_MMV}}</td>
                            <td>0</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD10_MR_PUN}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD10_MMV_PUN}}</td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD10_MMV_SEDIA}}</td>
                            <td>
                                <span>&#183; Laporan maklumbalas kaji selidik</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahPD10_ULASAN_VERIFIKASI}}</td>
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

                        <!-- Jumlah MarkahPD-->
                        <tr class="pg-5" align="center">
                            <td colspan="6">Jumlah markah PD</td>
                            <td colspan="3">29</td>
                            <td>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MR}}</td>
                            <td>31</td>
                            <td>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MMV}}</td>
                            <td>27</td>
                            <td>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MR_PUN}}</td>
                            <td>29</td>
                            <td>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MMV_PUN}}</td>
                            <td>29</td>
                            <td>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MMV_SEDIA}}</td>
                        </tr>   
                    </table>

                    <!--------------------------------------- MarkahFL ---------------------------------------->
                    <table id="example" class="table table-bordered line-table display">
                        <thead class="text-white">
                            <tr class="pg-6" align="center" style="background-color:#EB5500">
                                <th rowspan="3">Kod</th>
                                <th rowspan="3">Kriteria</th>
                                <th rowspan="3" colspan="6">Kategori bangunan</th>
                                <th colspan="4">Pembangunan Baru</th>
                                <th colspan="4">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
                                <th colspan="2">Penarafan semula/bangunan sedia ada</th>
                                <th rowspan="2">Dokumen Pembuktian</th>
                                <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>

                            </tr>

                            <tr class="pg-6" align="center" style="background-color:#EB5500">
                                <th colspan="4">Markah</th>
                                <th colspan="4">Markah</th>
                                <th colspan="2">Markah</th>                            </tr>
                        
                            <tr class="pg-6" align="center" style="background-color:#EB5500">
                                <th>MM</th>
                                <th>MR</th>
                                <th>MMV</th>
                                <th>MV</th>
                                <th>MM</th>
                                <th>MR</th>
                                <th>MMV</th>
                                <th>MV</th>
                                <th>MMV</th>
                                <th>MV</th>
                                <th>Verifikasi (Peringkat 3)</th>
                            </tr>

                            <tr class="pg-6" style="background-color:#EB5500">
                                <th>FL</th>
                                <th colspan="32">PENGURUSAN FASILITI LESTARI</th>
                            </tr>
                        </thead>

                            <!--FL1-->
                            <tr class="pg-6" align="center">
                                <td>FL1</td>
                                <td>Penarafan sedia ada</td>
                                <td colspan="6"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL1_MMV_PUN}}</td>
                                <td>
                                    <span>&#183; Sijil Penarafan Hijau yang masih dalam tempoh sahlaku</span><br>
                                    <span>&#183; Laporan Audit Tenaga untuk audit yang telah dijalankan sekiranya terdapat perubahan
                                        ketara pada penggunaan tenaga elektrik bangunan</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahFL1_ULASAN_VERIFIKASI}}</td>
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

                            <!--FL2-->
                            <tr class="pg-6" align="center">
                                <td>FL2</td>
                                <td>Pengurusan fasiliti bangunan</td>
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
                                <td colspan="5"></td>
                                <td colspan="4">
                                    {{-- <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form> --}}
                                </td>
                            </tr>

                            <!--FL2.1--><!--Baru, PUN, Sedia Ada Not Available-->
                            <tr class="pg-6" align="center">
                                <td>FL2.1</td>
                                <td>Pengurusan data dan ruang</td>
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
                                <td>
                                    <span>&#183; Cetakan templat untuk setiap pengurusan data dan ruang</span><br>
                                    <span>&#183; Demonstrasi sistem pengurusan fasiliti bangunan yang disediakan</span><br>
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

                            <!--FL2.2-->
                            <tr class="pg-6" align="center">
                                <td>FL2.2</td>
                                <td>Pengurusan sistem penyenggaraan</td>
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
                                <td>
                                    <span>&#183; Contoh salinan print out daripada sistem
                                        CMMS/eSPFB</span><br>
                                    <span>&#183; Demonstrasi sistem pengurusan fasiliti bangunan yang disediakan</span><br>
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

                            <!--FL2.3-->
                            <tr class="pg-6" align="center">
                                <td>FL2.3</td>
                                <td>Prestasi penggurusan</td>
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
                                <td>
                                    <span>&#183; Senarai petunjuk prestasi utama di dalam kontrak</span><br>
                                    <span>&#183; Laporan prestasi bulanan</span><br>
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

                            <!--FL3-->
                            <tr class="pg-6" align="center">
                                <td>FL3</td>
                                <td>Penyenggaraan Lestari</td>
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
                                <td>
                                    {{-- <span>&#183; Cetakan templat untuk setiap pengurusan data dan ruang</span><br> --}}
                                    {{-- <span>&#183; Demonstrasi sistem pengurusan fasiliti bangunan yang disediakan</span><br> --}}
                                </td>
                                <td colspan="5"></td>
                                <td colspan="4">
                                    {{-- <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form> --}}
                                </td>
                            </tr>

                            <!--FL3.1-->
                            <tr class="pg-6" align="center">
                                <td>FL3.1</td>
                                <td>Ruang pejabat untuk pasukan penyenggaraan</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL31_MMR}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL31_MMV}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL31_MMR_PUN}}</td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL31_MMV_SEDIA}}</td>
                                <td>1</td>
                                <td></td>
                                <td>
                                    <span>&#183; Lukisan siap bina</span><br>
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

                            <!--FL3.2-->
                            <tr class="pg-6" align="center">
                                <td>FL3.2</td>
                                <td>Prestasi pengurusan</td>
                                <td colspan="6"></td>
                                <td></td>
                                <td></td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL32_MMV}}</td>
                                <td>0</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL32_MR_PUN}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL32_MMV_PUN}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL32_MMV_SEDIA}}</td>
                                <td>
                                    <span>&#183; Salinan surat tawaran kepada pasukan penyenggaraan 
                                        dan REEM yang berjaya dilantik
                                    </span>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahFL32_ULASAN_VERIFIKASI}}</td>
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

                            <!--FL3.3-->
                            <tr class="pg-6" align="center">
                                <td>FL3.3</td>
                                <td>Pelan Pengurusan Fasiliti (FM)</td>
                                <td colspan="6"></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL33_MR}}</td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL33_MMV}}</td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL33_MR_PUN}}</td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL33_MMV_PUN}}</td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL33_MMV_SEDIA}}</td>
                                <td>
                                    <span>&#183; Tatacara pelaksanaan pengurusan aset</span>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahFL33_ULASAN_VERIFIKASI}}</td>
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

                            <!--FL3.4-->
                            <tr class="pg-6" align="center">
                                <td>FL3.4</td>
                                <td>Manual Operasi dan Penyenggaraan Bangunan</td>
                                <td colspan="6"></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL34_MR}}</td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL34_MMV}}</td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL34_MR_PUN}}</td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL34_MMV_PUN}}</td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL34_MMV_SEDIA}}</td>
                                <td>
                                    <span>&#183; Manual operasi dan penyenggaraan bangunan</span><br>
                                    <span>&#183; Latihan penggunaan sistem kepada pemilik bangunan</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
                                    <span>&#183; Kad pendaftaran aset tak pilih & Laporan daftar aset khusus</span><br>
                                    <span>&#183; Pelan kedudukan kunci</span><br>
                                    <span>&#183; Sijil Testing & Commisioning</span><br>
                                    <span>&#183; Sijil jaminan (jika berkenaan)</span><br>
                                    <span>&#183; Sijil siap kerja</span><br>
                                    <span>&#183; Sijil siap membaiki kecacatan</span><br>
                                    <span>&#183; Completion Compliance Certificate (CCC)</span><br>
                                    <span>&#183; Sijil Kerja Awam, Arkitek, Elektrikal & Mekanikal</span><br>
                                </td>
                                <td colspan="5">{{$kriteria_phjkr_bangunan->markahFL34_ULASAN_VERIFIKASI}}</td>
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

                            <!-- Jumlah MarkahFL-->
                            <tr class="pg-6" align="center">
                                <td colspan="6">Jumlah markah FL</td>
                                <td colspan="3">5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MR}}</td>
                                <td>10</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MMV}}</td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MR_PUN}}</td>
                                <td>10</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MMV_PUN}}</td>
                                <td>19</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MMV_SEDIA}}</td>
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
                                <th rowspan="3" colspan="6">Kategori bangunan</th>
                                <th colspan="4">Pembangunan Baru</th>
                                <th colspan="4">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
                                <th colspan="2">Penarafan semula/bangunan sedia ada</th>
                                <th rowspan="2">Dokumen Pembuktian</th>
                                <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
                            </tr>

                            <tr class="pg-7" align="center" style="background-color:#EB5500">
                                <th colspan="4">Markah</th>
                                <th colspan="4">Markah</th>
                                <th colspan="2">Markah</th>                            </tr>
                        
                            <tr class="pg-7" align="center" style="background-color:#EB5500">
                                    <th>MM</th>
                                    <th>MR</th>
                                    <th>MMV</th>
                                    <th>MV</th>
                                    <th>MM</th>
                                    <th>MR</th>
                                    <th>MMV</th>
                                    <th>MV</th>
                                    <th>MMV</th>
                                    <th>MV</th>
                                    <th>Verifikasi (Peringkat 3)</th>

                            </tr>

                            <tr class="pg-7" style="background-color:#EB5500">
                                <th>IN</th>
                                <th colspan="38">INOVASI DALAM REKABENTUK</th>
                            </tr>
                        </thead>

                        <!--IN1-->
                        <tr class="pg-7" align="center">
                            <td>IN1</td>
                            <td>Reka Bentuk Inovasi</td>
                            <td colspan="6"></td>
                            <td>6</td>
                            <td>{{$kriteria_phjkr_bangunan->markahIN1_MR}}</td>
                            <td>6</td>
                            <td>{{$kriteria_phjkr_bangunan->markahIN1_MMV}}</td>
                            <td>6</td>
                            <td>{{$kriteria_phjkr_bangunan->markahIN1_MR_PUN}}</td>
                            <td>6</td>
                            <td>{{$kriteria_phjkr_bangunan->markahIN1_MMV_PUN}}</td>
                            <td>6</td>
                            <td>{{$kriteria_phjkr_bangunan->markahIN1_MMV_SEDIA}}</td>
                            <td>
                                <span>&#183; Lukisan siap bina dan bukti bergambar</span><br>
                                <span>&#183; Laporan prestasi inovasi</span><br>
                            </td>
                            <td colspan="5">{{$kriteria_phjkr_bangunan->markahIN1_ULASAN_VERIFIKASI}}</td>
                            <td colspan="4">
                                {{-- <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form> --}}
                            </td>

                        </tr>

                            <!-- Jumlah MarkahIN-->
                            <tr class="pg-7" align="center">
                                <td colspan="6">Jumlah markah IN</td>
                                <td colspan="3">6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MR}}</td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MMV}}</td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MR_PUN}}</td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MMV_PUN}}</td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MMV_SEDIA}}</td>
                                <td></td>
                                <td></td>
                            </tr> 
                    </table>

                    <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
        </div>          <!--Scrollbar-->


                    <!--Button Simpan (TOOLTIPS)-->
                    <!--Page 1-->
                    <div class="mt-3 text-center pg-1">
                        {{-- <button class="btn btn-primary pg-1" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button> --}}
                        <button class="btn btn-secondary pg-1" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button2()" type="submit">Seterusnya</button>
                    </div>
                    {{-- <button class="btn btn-primary pg-7" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Kemas kini</button>
                        <button class="btn btn-primary pg-7" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Hantar</button> --}}

                    <!--Page 2-->
                    <div class="mt-3 text-center pg-2">
                        {{-- <button class="btn btn-primary pg-2" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button> --}}
                        <button class="btn btn-secondary pg-2" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button3()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 3-->
                    <div class="mt-3 text-center pg-3">
                        {{-- <button class="btn btn-primary pg-3" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button> --}}
                        <button class="btn btn-secondary pg-3" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button4()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 4-->
                    <div class="mt-3 text-center pg-4">
                        {{-- <button class="btn btn-primary pg-4" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button> --}}
                        <button class="btn btn-secondary pg-4" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button5()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 5-->
                    <div class="mt-3 text-center pg-5">
                        {{-- <button class="btn btn-primary pg-5" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button> --}}
                        <button class="btn btn-secondary pg-5" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button6()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 6-->
                    <div class="mt-3 text-center pg-6">
                        {{-- <button class="btn btn-primary pg-6" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button> --}}
                        <button class="btn btn-secondary pg-6" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button7()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 7-->
                    <div class="mt-3 text-center pg-7">
                        <button class="btn btn-primary pg-7" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
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

            <!--Autofill select form-->

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

            <!--MARKAH VALIDASI (ML) CALCULATION-->
            <!--ML_TL : MARKAH VALIDASI TL-->
            <!--ML_KT : MARKAH VALIDASI KT-->
            <!--ML_SB : MARKAH VALIDASI SB-->
            <!--ML_PA : MARKAH VALIDASI PA-->
            <!--ML_PD : MARKAH VALIDASI PD-->
            <!--ML_FL : MARKAH VALIDASI FL-->
            <!--ML_IN : MARKAH VALIDASI IN-->
            <script>
                function findTotalML_TL(){
                    var totalML_TL = document.getElementById('totalML_TL');
                    var ML_TL = document.getElementsByClassName('ML_TL');
                    var sumML_TL = 0;

                    for( var i = 0; i < ML_TL.length; i++ ){
                        sumML_TL += Number(ML_TL[i].value);

                    //display the total of inputs
                    totalML_TL.value = sumML_TL;
                }
                    document.getElementById('totalML_TL').value = sumML_TL;
                }

                function findTotalML_KT(){
                    var totalML_KT = document.getElementById('totalML_KT');
                    var ML_KT = document.getElementsByClassName('ML_KT');
                    var sumML_KT = 0;

                    for( var i = 0; i < ML_KT.length; i++ ){
                        sumML_KT += Number(ML_KT[i].value);

                    //display the total of inputs
                    totalML_KT.value = sumML_KT;
                    }
                    document.getElementById('totalML_KT').value = sumML_KT;
                }

                function findTotalML_SB(){
                    var totalML_SB = document.getElementById('totalML_SB');
                    var ML_SB = document.getElementsByClassName('ML_SB');
                    var sumML_SB = 0;

                    for( var i = 0; i < ML_SB.length; i++ ){
                        sumML_SB += Number(ML_SB[i].value);

                    //display the total of inputs
                    totalML_SB.value = sumML_SB;
                    }
                    document.getElementById('totalML_SB').value = sumML_SB;
                }

                function findTotalML_PA(){
                    var totalML_PA = document.getElementById('totalML_PA');
                    var ML_PA = document.getElementsByClassName('ML_PA');
                    var sumML_PA = 0;

                    for( var i = 0; i < ML_PA.length; i++ ){
                        sumML_PA += Number(ML_PA[i].value);

                    //display the total of inputs
                    totalML_PA.value = sumML_PA;
                    }
                    document.getElementById('totalML_PA').value = sumML_PA;
                }

                function findTotalML_PD(){
                    var totalML_PD = document.getElementById('totalML_PD');
                    var ML_PD = document.getElementsByClassName('ML_PD');
                    var sumML_PD = 0;

                    for( var i = 0; i < ML_PD.length; i++ ){
                        sumML_PD += Number(ML_PD[i].value);

                    //display the total of inputs
                    totalML_PD.value = sumML_PD;
                    }
                    document.getElementById('totalML_PD').value = sumML_PD;
                }

                function findTotalML_FL(){
                    var totalML_FL = document.getElementById('totalML_FL');
                    var ML_FL = document.getElementsByClassName('ML_FL');
                    var sumML_FL = 0;

                    for( var i = 0; i < ML_FL.length; i++ ){
                        sumML_FL += Number(ML_FL[i].value);

                    //display the total of inputs
                    totalML_FL.value = sumML_FL;
                    }
                    document.getElementById('totalML_FL').value = sumML_FL;
                }

                function findTotalML_IN(){
                    var totalML_IN = document.getElementById('totalML_IN');
                    var ML_IN = document.getElementsByClassName('ML_IN');
                    var sumML_IN = 0;

                    for( var i = 0; i < ML_IN.length; i++ ){
                        sumML_IN += Number(ML_IN[i].value);

                    //display the total of inputs
                    totalML_IN.value = sumML_IN;
                    }
                    document.getElementById('totalML_IN').value = sumML_IN;
                }

                function findTotalML(){
                    var TL = totalML_TL.value || 0;
                    var KT = totalML_KT.value || 0;
                    var SB = totalML_SB.value || 0;
                    var PA = totalML_PA.value || 0;
                    var PD = totalML_PD.value || 0;
                    var FL = totalML_FL.value || 0;
                    var IN = totalML_IN.value || 0;
                    document.getElementById('totalML').value = Number(TL) + Number(KT) + Number(SB) 
                    + Number(PA) + Number(PD) + Number(FL) + Number(IN);
                }

                document.addEventListener('keyup', function(){
                    findTotalML_TL();
                    findTotalML_KT();
                    findTotalML_SB();
                    findTotalML_PA();
                    findTotalML_PD();
                    findTotalML_FL();
                    findTotalML_IN();
                    findTotalML();
                });
            </script>
            
@endsection