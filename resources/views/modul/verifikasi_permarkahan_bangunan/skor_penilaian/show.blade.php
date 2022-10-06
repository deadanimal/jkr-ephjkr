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
                @method('POST')

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
                                <th colspan="2">Penarafan semula/bangunan sedia ada</th>
                                <th rowspan="2">Dokumen Pembuktian</th>
                                <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>

                            </tr>
            
                            <tr class="pg-1" align="center" style="background-color:#EB5500">
                                <th colspan="4">Markah</th>
                                <th colspan="4">Markah</th>
                                <th colspan="2">Markah</th>
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
                                <th>Verifikasi (Peringkat 3)</th>
            
                            </tr>
            
                            <tr class="pg-1" style="background-color:#EB5500">
                                <th>TL</th>
                                <th colspan="32">PERANCANGAN & PENGURUSAN TAPAK LESTARI</th>
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
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" /></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL2_MR}}</td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL2_MMV" name="markahTL2_MMV" /></td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL2_MR_PUN}}</td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL2_MMV_PUN" name="markahTL2_MMV_PUN" /></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span>&#183; Laporan Pelan Pengurusan Alam Sekitar</span><br>
                                    <span>&#183; Borang SPAS (Peringkat pembinaan)</span>
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

                            <!--TL3-->
                            <tr class="pg-1" align="center">
                                <td rowspan="2">TL3</td>
                                <td>i. Pemotongan dan Penambakan tanah</td>
                                <td rowspan="2" colspan="6">
                                                                     
                                </td>  
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL3_MR}}</td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV" name="markahTL3_MMV" /></td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL3_MR_PUN}}</td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV_PUN" name="markahTL3_MMV_PUN" /></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span>&#183; Laporan kuantiti tanah yang diimport atau eksport</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Pengesahan kuantiti tanah potong/tambak sebenar oleh PD/SO 
                                        atau setaraf
                                    </span>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
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
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahTL32_MMV" name="markahTL32_MMV" /></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL32_MR_PUN}}</td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahTL32_MMV_PUN" name="markahTL32_MMV_PUN" /></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Pengesahan kuantiti tanah potong/tambak sebenar oleh PD/SO atau setaraf</span><br>
                                    <span>&#183; Pengesahan pelaksanaan ESCP di tapak</span>
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
            
                            <!--TL4-->
                            <tr class="pg-1" align="center">
                                <td>TL4</td>
                                <td>Pelan Kawalan Hakisan & Kelodak (ESCP)</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL4_MR}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahTL4_MMV" name="markahTL4_MMV" /></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL4_MR_PUN}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahTL4_MMV_PUN" name="markahTL4_MMV_PUN" /></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span>&#183; Pengesahan pelaksanaan ESCP di tapak</span><br>
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
            
                            <!--TL5--><!--Baru shj-->
                            <tr class="pg-1" align="center">
                                <td>TL5</td>
                                <td>Pemuliharaan dan Pemeliharaan Cerun</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL5_MR}}</td>
                                <td>0</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL5_MMV" name="markahTL5_MMV" /></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL5_MR_PUN}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span>Tidak Berkenaan</span><br>
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

                            <!--TL6-->
                            <tr class="pg-1" align="center">
                                <td>TL6</td>
                                <td>Pengurusan Air Larian Hujan</td>
                                <td colspan="6"></td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL6_MR}}</td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL6_MMV" name="markahTL6_MMV" /></td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL6_MR_PUN}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahTL6_MMV_PUN" name="markahTL6_MMV_PUN" /></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahTL6_MMV_SEDIA" name="markahTL6_MMV_SEDIA" /></td>
                                <td>
                                    <span> &#40;a&#41; Baru</span><br>
                                    <span>&#183; Laporan sistem perparitan</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span> &#40;b&#41; Sedia ada</span><br>
                                    <span>&#183; Laporan penyenggaraan sistem perparitan berkala</span><br>
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

                            <!--TL7-->
                            <tr class="pg-1" align="center">
                                <td>TL7</td>
                                <td>Rekabentuk, Aksebiliti dan Kemudahan OKU</td>
                                <td colspan="6"></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL7_MR}}</td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahTL7_MMV" name="markahTL7_MMV" /></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL7_MR_PUN}}</td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahTL7_MMV_PUN" name="markahTL7_MMV_PUN" /></td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahTL7_MMV_SEDIA" name="markahTL7_MMV_SEDIA" /></td>
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
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL81_MMV" name="markahTL81_MMV" /></td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL81_MR_PUN}}</td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL81_MMV_PUN" name="markahTL81_MMV_PUN" /></td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL81_MMV_SEDIA" name="markahTL81_MMV_SEDIA" /></td>
                                <td>
                                    <span> &#40;a&#41; Lukisan siap bina landskap</span><br>
                                    <span>&#183; Bukti bergambar pokok tidak ditebang dan disenggara dengan baik</span><br>
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
            
                            <!--TL8.2-->
                            <tr class="pg-1" align="center">
                                <td>TL8.2</td>
                                <td>Menyediakan kawasan hijau</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL82_MR}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL82_MMV" name="markahTL82_MMV" /></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL82_MR_PUN}}</td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL82_MMV_PUN" name="markahTL82_MMV_PUN" /></td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL82_MMV_SEDIA" name="markahTL82_MMV_SEDIA" /></td>
                                <td>
                                    <span> &#40;a&#41; Pelan tapak siap bina yang telah disahkan oleh Arkitek Bertauliah</span><br>
                                    Nyatakan sekiranya ada perubahan
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

                            <!--TL8.3-->
                            <tr class="pg-1" align="center">
                                <td>TL8.3</td>
                                <td>Menyedia dan menyenggara penanaman pokok teduhan</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL83_MR}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahTL83_MMV" name="markahTL83_MMV" /></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL83_MR_PUN}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahTL83_MMV_PUN" name="markahTL83_MMV_PUN" /></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL83_MMV_SEDIA" name="markahTL83_MMV_SEDIA" /></td>
                                <td>
                                    <span> &#183; Pelan landskap siap bina</span><br>
                                    <span> &#183; Inventori pokok</span><br>
                                    <span> &#183; Bukti bergambar</span><br>
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

                            <!--TL8.4-->
                            <tr class="pg-1" align="center">
                                <td>TL8.4</td>
                                <td>Pemilihan bahan binaan siarkaki (walkway) yang mempunyai daya pantulan
                                    haba yang tinggi
                                </td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL4_MR}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahTL84_MMV" name="markahTL84_MMV" /></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL84_MR_PUN}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahTL84_MMV_PUN" name="markahTL84_MMV_PUN" /></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahTL84_MMV_SEDIA" name="markahTL84_MMV_SEDIA" /></td>
                                <td>
                                    <span> &#183; Bukti bergambar</span><br>
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

                            <!--TL8.5-->
                            <tr class="pg-1" align="center">
                                <td>TL8.5</td>
                                <td>Menyedia dan menyenggara sistem turapan berumput</td>
                                <td colspan="6"></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL85_MR}}</td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahTL85_MMV" name="markahTL85_MMV" /></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL85_MR_PUN}}</td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahTL85_MMV_PUN" name="markahTL85_MMV_PUN" /></td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahTL85_MMV_SEDIA" name="markahTL85_MMV_SEDIA" /></td>
                                <td>
                                    <span> &#183; Lukisan siap bina</span><br>
                                    <span> &#183; Bukti bergambar</span><br>
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
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahTL91_MMV" name="markahTL91_MMV" /></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL91_MR_PUN}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahTL91_MR_SEDIA" name="markahTL91_MR_SEDIA" /></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahTL91_MMV_SEDIA" name="markahTL91_MMV_SEDIA" /></td>
                                <td>
                                    <span>&#183; Method statement yang telah disahkan oleh
                                        pegawai penguasa (SO)</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
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

                            <!--TL9.2-->
                            <tr class="pg-1" align="center">
                                <td>TL9.2</td>
                                <td>Menggalakkan rekabentuk bumbung/dinding hijau
                                </td>
                                <td colspan="6"></td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL92_MR}}</td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL92_MMV" name="markahTL92_MMV" /></td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL92_MR_PUN}}</td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL92_MMV_PUN" name="markahTL92_MMV_PUN" /></td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahTL92_MMV_SEDIA" name="markahTL92_MMV_SEDIA" /></td>
                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
                                    <span>&#183; Rekod Senggaraan</span><br>
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

                            <!--TL10-->
                            <tr class="pg-1" align="center">
                                <td>TL10</td>
                                <td>Rekabentuk, Aksebiliti dan Kemudahan OKU</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL10_MR}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahTL10_MMV" name="markahTL10_MMV" /></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTL10_MR_PUN}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL10_MMV_PUN" name="markahTL10_MMV_PUN" /></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="0" autocapitalize="off" id="markahTL10_MMV_SEDIA" name="markahTL10_MMV_SEDIA" /></td>
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
                                <td colspan="3">29</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MR}}</td>
                                <td>27</td>
                                <td><input type="number" min="0" max="27" id="markahTOTAL_TL_MMV" name="markahTOTAL_TL_MMV"></td>
                                <td>27</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MR_PUN}}</td>
                                <td>26</td>
                                <td><input type="number" min="0" max="26" id="markahTOTAL_TL_MMV_PUN"></td>
                                <td>17</td>
                                <td><input type="number" min="0" max="17" id="markahTOTAL_TL_MMV_SEDIA" name="markahTOTAL_TL_MMV_SEDIA"></td>
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
                                <th colspan="2">Penarafan semula/bangunan sedia ada</th>
                                <th rowspan="2">Dokumen Pembuktian</th>
                                <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
                            </tr>

                            <tr class="pg-2" align="center" style="background-color:#EB5500">
                                <th colspan="4">Markah</th>
                                <th colspan="4">Markah</th>
                                <th colspan="2">Markah</th>
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
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahKT1_MMV" name="markahKT1_MMV" /></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT1_MR_PUN}}</td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahKT1_MMV_PUN" name="markahKT1_MMV_PUN" /></td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahKT1_MMV_SEDIA" name="markahKT1_MMV_SEDIA" /></td>
                                <td>
                                    <span>&#183; Katalog bahan dan sampel yang diluluskan</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
                                    <span>&#183; Bukti bergambar</span>
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
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT21_MMV" name="markahKT21_MMV" /></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT21_MR_PUN}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT21_MMV_PUN" name="markahKT21_MMV_PUN" /></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT21_MMV_SEDIA" name="markahKT21_MMV_SEDIA" /></td>
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

                            <!--KT2.2-->
                            <tr class="pg-2" align="center">
                                <td>KT2.2</td>
                                <td>Meminimumkan bukaan pada fasad yang menghadap timur dan barat</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT22_MR}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT22_MMV" name="markahKT22_MMV" /></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT22_MR_PUN}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT22_MMV_PUN" name="markahKT22_MMV_PUN" /></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT22_MMV_SEDIA" name="markahKT22_MMV_SEDIA" /></td>
                                <td>
                                    <span> &#183; Lukisan siap bina</span><br>
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
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT31_MMV" name="markahKT31_MMV" /></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT31_MR_PUN}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT31_MMV_PUN" name="markahKT31_MMV_PUN" /></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span>&#183; Katalog bahan yang diluluskan untuk pembinaan</span><br>
                                    <span>&#183; Pengiraan U-Value yang disahkan</span><br>
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

                            <!--KT3.2-->
                            <tr class="pg-2" align="center">
                                <td>KT3.2</td>
                                <td>Pengadang Suria Luaran</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT32_MR}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT32_MMV" name="markahKT32_MMV" /></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT32_MR_PUN}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT32_MMV_PUN" name="markahKT32_MMV_PUN" /></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT32_MMV_SEDIA" name="markahKT32_MMV_SEDIA" /></td>
                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
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

                            <!--KT4-->
                            <tr class="pg-2" align="center">
                                <td>KT4</td>
                                <td>OTTV & RTTV</td>
                                <td colspan="6"></td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT4_MR}}</td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="5" autocapitalize="off" id="markahKT4_MMV" name="markahKT4_MMV" /></td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT4_MR_PUN}}</td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="5" autocapitalize="off" id="markahKT4_MMV_PUN" name="markahKT4_MMV_PUN" /></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span>&#183; Pengiraan OTTV dan RTTV yang disahkan</span><br>
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
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahKT51_MMV" name="markahKT51_MMV" /></td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT51_MR_PUN}}</td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahKT51_MMV_PUN" name="markahKT51_MMV_PUN" /></td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahKT51_MMV_SEDIA" name="markahKT51_MMV_SEDIA" /></td>
                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Lukisan siap bina litar lampu yang telah di zon dan lokasi pemasangan sensor</span><br>
                                    <span> &#183; Bukti bergambar</span><br>
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

                            <!--KT5.2-->
                            <tr class="pg-2" align="center">
                                <td>KT5.2</td>
                                <td>Kawalan Pencahayaan</td>
                                <td colspan="6"></td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT52_MR}}</td>
                                <td>6</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="6" autocapitalize="off" id="markahKT52_MMV" name="markahKT52_MMV" /></td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT52_MR_PUN}}</td>
                                <td>6</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="6" autocapitalize="off" id="markahKT52_MMV_PUN" name="markahKT52_MMV_PUN" /></td>
                                <td>6</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="6" autocapitalize="off" id="markahKT52_MMV_SEDIA" name="markahKT52_MMV_SEDIA" /></td>
                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Lukisan siap bina yang menunjukkan lokasi suis</span><br>
                                    <span> &#183; Bukti bergambar</span><br>
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

                            <!--KT5.3-->
                            <tr class="pg-2" align="center">
                                <td>KT5.3</td>
                                <td>Lighting Power Density (LPD)</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT53_MR}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT53_MMV" name="markahKT53_MMV" /></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT53_MR_PUN}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT53_MMV_PUN" name="markahKT53_MMV_PUN" /></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT53_MMV_SEDIA" name="markahKT53_MMV_SEDIA" /></td>
                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Laporan pengambilan data mengikut spesifikasi</span><br>
                                    <span> &#183; Lukisan siap bina</span><br>
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
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT61_MMV" name="markahKT61_MMV" /></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT61_MR_PUN}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT61_MMV_PUN" name="markahKT61_MMV_PUN" /></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT61_MMV_SEDIA" name="markahKT61_MMV_SEDIA" /></td>
                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Laporan pengukuran dan verifikasi</span><br>
                                    <span> &#183; Pengiraan COP</span><br>
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

                            <!--KT6.2-->
                            <tr class="pg-2" align="center">
                                <td>KT6.2</td>
                                <td>Green Refrigerant</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT62_MR}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT62_MMV" name="markahKT62_MMV" /></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT62_MR_PUN}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT62_MMV_PUN" name="markahKT62_MMV_PUN" /></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT62_MMV_SEDIA" name="markahKT62_MMV_SEDIA" /></td>
                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Rekod penyenggaraan peralatan</span><br>
                                    <span> &#183; Brosur pembekal</span><br>
                                    <span> &#183; Rekod inventori</span>
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

                            <!--KT7-->
                            <tr class="pg-2" align="center">
                                <td>KT7</td>
                                <td>Penyusupan udara</td>
                                <td colspan="6"></td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT7_MR}}</td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahKT7_MMV" name="markahKT7_MMV" /></td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT7_MR_PUN}}</td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahKT7_MMV_PUN" name="markahKT7_MMV_PUN" /></td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahKT7_MMV_SEDIA" name="markahKT7_MMV_SEDIA" /></td>
                                <td>
                                    <span> &#183; Lukisan butiran</span><br>
                                    <span> &#183; Lukisan siap bina</span><br>
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

                            <!--KT8-->
                            <tr class="pg-2" align="center">
                                <td>KT8</td>
                                <td>Tenaga Boleh Baharu (TBB)</td>
                                <td colspan="6"></td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT8_MR}}</td>
                                <td>6</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="6" autocapitalize="off" id="markahKT8_MMV" name="markahKT8_MMV" /></td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT8_MR_PUN}}</td>
                                <td>6</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="6" autocapitalize="off" id="markahKT8_MMV_PUN" name="markahKT8_MMV_PUN" /></td>
                                <td>6</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="6" autocapitalize="off" id="markahKT8_MMV_SEDIA" name="markahKT8_MMV_SEDIA" /></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Mengemukakan lukisan rekabentuk sistem dan simulasi pengiraan
                                        bagi anggaran tenaga baharu yang boleh dihasilkan oleh sistem tersebut</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Salinan lukisan siap bina dan laporan uji terima yang mematuhi kehendak rekabentuk</span><br>
                                    <span> &#183; Pengiraan penjanaan tenaga boleh baharu berbanding jumlah penggunaan tenaga tahunan bangunan</span><br>
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

                            <!--KT9-->
                            <tr class="pg-2" align="center">
                                <td>KT9</td>
                                <td>Prestasi Penggunaan Tenaga</td>
                                <td colspan="6"></td>
                                <td>10</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT9_MR}}</td>
                                <td>10</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="10" autocapitalize="off" id="markahKT9_MMV" name="markahKT9_MMV" /></td>
                                <td>10</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT9_MR_PUN}}</td>
                                <td>10</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="10" autocapitalize="off" id="markahKT9_MMV_PUN" name="markahKT9_MMV_PUN" /></td>
                                <td>10</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="10" autocapitalize="off" id="markahKT9_MMV_SEDIA" name="markahKT9_MMV_SEDIA" /></td>
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
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="6" autocapitalize="off" id="markahKT101_MMV" name="markahKT101_MMV" /></td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT101_MR_PUN}}</td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="5" autocapitalize="off" id="markahKT101_MMV_PUN" name="markahKT101_MMV_PUN" /></td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="5" autocapitalize="off" id="markahKT101_MMV_SEDIA" name="markahKT101_MMV_SEDIA" /></td>
                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Lukisan siap bina yang menunjukkan lokasi suis</span><br>
                                    <span> &#183; Bukti bergambar</span><br>
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

                            <!--KT10.2-->
                            <tr class="pg-2" align="center">
                                <td>KT10.2</td>
                                <td>Sistem Pengurusan Kawalan Tenaga</td>
                                <td colspan="6"></td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT102_MR}}</td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="5" autocapitalize="off" id="markahKT102_MMV" name="markahKT102_MMV" /></td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT102_MR_PUN}}</td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="5" autocapitalize="off" id="markahKT102_MMV_PUN" name="markahKT102_MMV_PUN" /></td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="5" autocapitalize="off" id="markahKT102_MMV_SEDIA" name="markahKT102_MMV_SEDIA" /></td>
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

                            <!--KT10.3-->
                            <tr class="pg-2" align="center">
                                <td>KT10.3</td>
                                <td>Verifikasi sistem paparan dan kawalan</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT103_MR}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT103_MMV" name="markahKT103_MMV" /></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT103_MR_PUN}}</td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT103_MMV_PUN" name="markahKT103_MMV_PUN" /></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT103_MMV_SEDIA" name="markahKT103_MMV_SEDIA" /></td>
                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Senarai penggunaan tenaga berdasarkan bil elektrik bulanan</span><br>
                                    <span> &#183; Laporan verifikasi dan pelan penambahbaikan</span><br>
                                    <span> &#183; Manual Operasi dan Penyenggaraan</span>
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

                            <!--KT11-->
                            <tr class="pg-2" align="center">
                                <td>KT11</td>
                                <td>Pengujian dan pentauliahan</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT11_MR}}</td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahKT11_MMV" name="markahKT11_MMV" /></td>
                                <td>1</td>
                                <td>{{$kriteria_phjkr_bangunan->markahKT11_MR_PUN}}</td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahKT11_MMV_PUN" name="markahKT11_MMV_PUN" /></td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahKT11_MMV_SEDIA" name="markahKT11_MMV_SEDIA" /></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Pelan pengujian dan pentauliahan</span><br>
                                </td> --}}
                                <td>
                                    <span>&#183; Dokumen lengkap pengujian dan pentauliahan yang telah disahkan</span><br>
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

                            <!--JUMLAH MARKAHKT-->
                            <tr class="pg-2" align="center">
                                <td colspan="6">Jumlah markah KT</td>
                                <td colspan="3">55</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MR}}</td>
                                <td>57</td>
                                <td><input type="number" min="0" max="57" id="markahTOTAL_TL_MMV" name="markahTOTAL_TL_MMV"></td>
                                <td>54</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MR_PUN}}</td>
                                <td>56</td>
                                {{-- <td colspan="2"></td> --}}
                                <td><input type="number" min="0" max="56" id="markahTOTAL_TL_MMV_PUN"></td>
                                <td>48</td>
                                <td><input type="number" min="0" max="48" id="markahTOTAL_TL_MMV_SEDIA" name="markahTOTAL_TL_MMV_SEDIA"></td>
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
                                    <th colspan="2">Penarafan semula/bangunan sedia ada</th>
                                    <th rowspan="2">Dokumen Pembuktian</th>
                                    <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                    <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
                                </tr>

                                <tr class="pg-3" align="center" style="background-color:#EB5500">
                                    <th colspan="4">Markah</th>
                                    <th colspan="4">Markah</th>
                                    <th colspan="2">Markah</th>
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
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="7" autocapitalize="off" id="markahSB1_MMV" name="markahSB1_MMV" /></td>
                                <td>7</td>
                                <td>{{$kriteria_phjkr_bangunan->markahSB1_MR_PUN}}</td>
                                <td>7</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="7" autocapitalize="off" id="markahSB1_MMV_PUN" name="markahSB1_MMV_PUN" /></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span>&#183; Lukisan pembinaan IBS</span><br>
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

                            <!--SB2--><!--Baru dan PUN shj-->
                            <tr class="pg-3" align="center">
                                <td>SB2</td>
                                <td>Produk hijau</td>
                                <td colspan="6"></td>
                                <td>7</td>
                                <td>{{$kriteria_phjkr_bangunan->markahSB1_MR}}</td>
                                <td>7</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="7" autocapitalize="off" id="markahSB2_MMV" name="markahSB2_MMV" /></td>
                                <td>7</td>
                                <td>{{$kriteria_phjkr_bangunan->markahSB1_MR_PUN}}</td>
                                <td>7</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="7" autocapitalize="off" id="markahSB1_MMV_PUN" name="markahSB1_MMV_PUN" /></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span>&#183; Brosur pembekal</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Borang pengiraan skor GPSS</span><br>
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

                            <!--SB3--><!--Baru dan PUN shj-->
                            <tr class="pg-3" align="center">
                                <td>SB3</td>
                                <td>Pengurusan sisa semasa pembinaan</td>
                                <td colspan="6"></td>
                                <td>4</td>
                                <td>{{$kriteria_phjkr_bangunan->markahSB3_MR}}</td>
                                <td>4</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="7" autocapitalize="off" id="markahSB3_MMV" name="markahSB3_MMV" /></td>
                                <td>4</td>
                                <td>{{$kriteria_phjkr_bangunan->markahSB3_MR_PUN}}</td>
                                <td>4</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="7" autocapitalize="off" id="markahSB3_MMV_PUN" name="markahSB3_MMV_PUN" /></td>
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

                            <!--SB4-->
                            <tr class="pg-3" align="center">
                                <td>SB4</td>
                                <td>3r-Semasa Operasi</td>
                                <td colspan="6"></td>
                                <td>4</td>
                                <td>{{$kriteria_phjkr_bangunan->markahSB4_MR}}</td>
                                <td>4</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="4" autocapitalize="off" id="markahSB4_MMV" name="markahSB4_MMV" /></td>
                                <td>4</td>
                                <td>{{$kriteria_phjkr_bangunan->markahSB4_MR_PUN}}</td>
                                <td>4</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="4" autocapitalize="off" id="markahSB4_MMV_PUN" name="markahSB4_MMV_PUN" /></td>
                                <td>4</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="4" autocapitalize="off" id="markahSB4_MMV_SEDIA" name="markahSB4_MMV_SEDIA" /></td>
                                <td>
                                    <span>&#183; Pematuhan pelan pengurusan sisa domestik</span><br>
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
                            <tr>

                                <!--JUMLAH MARKAHSB-->
                                <tr class="pg-3" align="center">
                                    <td colspan="6">Jumlah markah SB</td>
                                    <td colspan="3">20</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MR}}</td>
                                    <td>20</td>
                                    <td><input type="number" min="0" max="20" id="markahTOTAL_SB_MMV" name="markahTOTAL_SB_MMV"></td>
                                    <td>15</td>
                                    <td>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MR_PUN}}</td>
                                    <td>15</td>
                                    <td><input type="number" min="0" max="15" id="markahTOTAL_SB_MMV_PUN" name="markahTOTAL_SB_MMV_PUN"></td>
                                    <td>4</td>
                                    <td><input type="number" min="0" max="4" id="markahTOTAL_SB_MMV_SEDIA" name="markahTOTAL_SB_MMV_SEDIA"></td>
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
                                <th colspan="2">Penarafan semula/bangunan sedia ada</th>
                                <th rowspan="2">Dokumen Pembuktian</th>
                                <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
                            </tr>

                            <tr class="pg-4" align="center" style="background-color:#EB5500">
                                <th colspan="4">Markah</th>
                                <th colspan="4">Markah</th>
                                <th colspan="2">Markah</th>
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
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="3" autocapitalize="off" id="markahPA1_MMV" name="markahPA1_MMV" /></td>
                                <td>3</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA1_MR_PUN}}</td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="3" autocapitalize="off" id="markahPA1_MMV_PUN" name="markahPA1_MMV_PUN" /></td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="3" autocapitalize="off" id="markahPA1_MMV_PUN" name="markahPA1_MMV_PUN" /></td>
                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Pensijilan WELPS</span><br>
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

                            <!--PA2-->
                            <tr class="pg-4" align="center">
                                <td>PA2</td>
                                <td>Penjimatan Penggunaan Air Dalam Bangunan</td>
                                <td colspan="6"></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA2_MR}}</td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPA2_MMV" name="markahPA2_MMV" /></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA2_MR_PUN}}</td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPA2_MMV_PUN" name="markahPA2_MMV_PUN" /></td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPA2_MMV_SEDIA" name="markahPA2_MMV_SEDIA" /></td>
                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Pensijilan WELPS</span><br>
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

                            <!--PA3-->
                            <tr class="pg-4" align="center">
                                <td rowspan="2">PA3</td>
                                <td>i. SPAH</td>
                                <td colspan="6"></td>
                                <td>4</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA3_MR}}</td>
                                <td>4</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="4" autocapitalize="off" id="markahPA3_MMV" name="markahPA3_MMV" /></td>
                                <td>4</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA3_MR_PUN}}</td>
                                <td>4</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="4" autocapitalize="off" id="markahPA3_MMV_PUN" name="markahPA3_MMV_PUN" /></td>
                                <td>4</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="4" autocapitalize="off" id="markahPA3_MMV_SEDIA" name="markahPA3_MMV_SEDIA" /></td>
                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Pensijilan WELPS</span><br>
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

                            <tr class="pg-4" align="center">
                                <td>ii. Kitar Semula Air Sisa</td>
                                <td colspan="6"></td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA32_MR}}</td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="5" autocapitalize="off" id="markahPA32_MMV" name="markahPA32_MMV" /></td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA32_MR_PUN}}</td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="5" autocapitalize="off" id="markahPA32_MMV_PUN" name="markahPA32_MMV_PUN" /></td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="5" autocapitalize="off" id="markahPA32_MMV_SEDIA" name="markahPA32_MMV_SEDIA" /></td>
                                <td>
                                    <span>&#183; Laporan pengujian sistem</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
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

                            <!--PA4-->
                            <tr class="pg-4" align="center">
                                <td>PA4</td>
                                <td>Sub-Meter Air</td>
                                <td colspan="6"></td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA4_MR}}</td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="5" autocapitalize="off" id="markahPA4_MMV" name="markahPA4_MMV" /></td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA4_MR_PUN}}</td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="5" autocapitalize="off" id="markahPA4_MMV_PUN" name="markahPA4_MMV_PUN" /></td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="5" autocapitalize="off" id="markahPA4_MMV_SEDIA" name="markahPA4_MMV_SEDIA" /></td>
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

                            <!--PA5-->
                            <tr class="pg-4" align="center">
                                <td>PA5</td>
                                <td>Sub-Meter Air</td>
                                <td colspan="6"></td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA5_MR}}</td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="5" autocapitalize="off" id="markahPA5_MMV" name="markahPA5_MMV" /></td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahPA5_MR_PUN}}</td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="5" autocapitalize="off" id="markahPA5_MMV_PUN" name="markahPA5_MMV_PUN" /></td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="5" autocapitalize="off" id="markahPA5_MMV_SEDIA" name="markahPA5_MMV_SEDIA" /></td>
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


                            <!-- Jumlah MarkahPA-->
                            <tr class="pg-4" align="center">
                                <th colspan="6">Jumlah markah PA</th>
                                <td colspan="3">20</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MR}}</td>
                                <td>22</td>
                                <td><input type="number" min="0" max="22" id="markahTOTAL_PA_MMV" name="markahTOTAL_PA_MMV"></td>
                                <td>22</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MR_PUN}}</td>
                                <td>22</td>
                                <td><input type="number" min="0" max="22" id="markahTOTAL_PA_MMV_PUN" name="markahTOTAL_PA_MMV_PUN"></td>
                                <td>22</td>
                                <td><input type="number" min="0" max="22" id="markahTOTAL_PA_MMV_SEDIA" name="markahTOTAL_PA_MMV_SEDIA"></td>
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
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="7" autocapitalize="off" id="markahPD1_MMV" name="markahPD1_MMV" /></td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD1_MR_PUN}}</td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="7" autocapitalize="off" id="markahPD1_MMV_PUN" name="markahPD1_MMV_PUN" /></td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="7" autocapitalize="off" id="markahPD1_MMV_PUN" name="markahPD1_MMV_PUN" /></td>
                            <td>
                                <span> a &#41; Baru</span><br>
                                <span> &#183; Gambar papan tanda dan lokasi larangan merokok</span><br>
                                <span> b &#41; Sedia ada</span><br>
                                <span> &#183; Gambar papan tanda dan lokasi larangan merokok</span><br>
                                <span> &#183; Rekod pelaksanaan program kesedaran atau langkah penguatkuasaan</span><br>                            </td>
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
                            <td>{{$kriteria_phjkr_bangunan->markahPD1_MR}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="7" autocapitalize="off" id="markahPD21_MMV" name="markahPD21_MMV" /></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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

                        <!--PD2.2-->
                        <tr class="pg-5" align="center">
                            <td>PD2.2</td>
                            <td>Susun atur ruang pejabat terbuka sepanjang permukaan fasad</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD22_MR}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD22_MMV" name="markahPD22_MMV" /></td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD22_MR_PUN}}</td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD22_MMV_PUN" name="markahPD22_MMV_PUN" /></td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD22_MMV_PUN" name="markahPD22_MMV_PUN" /></td>
                            <td>
                                <span>&#183; Lukisan siap bina</span><br>
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

                        <!--PD2.3-->
                        <tr class="pg-5" align="center">
                            <td>PD2.3</td>
                            <td>Dinding sesekat dalaman yang telus cahaya</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD23_MR}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD23_MMV" name="markahPD23_MMV" /></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD23_MR_PUN}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD23_MMV_PUN" name="markahPD23_MMV_PUN" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD23_MMV_PUN" name="markahPD23_MMV_PUN" /></td>
                            <td>
                                <span>&#183; Lukisan siap bina</span><br>
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


                        <!--PD2.4-->
                        <tr class="pg-5" align="center">
                            <td>PD2.4</td>
                            <td>Ketinggian siling yang efektif</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD22_MR}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD22_MMV" name="markahPD22_MMV" /></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD22_MR_PUN}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD12_MMV_PUN" name="markahPD22_MMV_PUN" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD22_MMV_PUN" name="markahPD22_MMV_PUN" /></td>
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

                        <!--PD2.5-->
                        <tr class="pg-5" align="center">
                            <td>PD2.5</td>
                            <td>Warna cerah di permukaan dinding dan siling</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD25_MR}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD25_MMV" name="markahPD25_MMV" /></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD25_MR_PUN}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD25_MMV_PUN" name="markahPD25_MMV_PUN" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD25_MMV_SEDIA" name="markahPD25_MMV_SEDIA" /></td>
                            <td>
                                <span>&#183; Bukti bergambar bagi mengesahkan skima warna yang digunakan</span><br>
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
                            <td>{{$kriteria_phjkr_bangunan->markahPD32_MR}}</td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_SB()" clas2="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD31_MMV" name="markahPD31_MMV" /></td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD32_MR_PUN}}</td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_SB()" clas2="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD31_MMV_PUN" name="markahPD31_MMV_PUN" /></td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_SB()" clas2="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD31_MMV_SEDIA" name="markahPD31_MMV_SEDIA" /></td>
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

                        <!--PD3.2-->
                        <tr class="pg-5" align="center">
                            <td>PD3.2</td>
                            <td>Menggunakan rak cahaya (light shelves)</td>
                            <td colspan="6"></td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD32_MR}}</td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD32_MMV" name="markahPD32_MMV" /></td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD32_MR_PUN}}</td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD32_MMV_PUN" name="markahPD32_MMV_PUN" /></td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD32_MMV_SEDIA" name="markahPD32_MMV_SEDIA" /></td>
                            <td>
                                <span>&#183; Lukisan pemasangan</span><br>
                                <span>&#183; Lukisan siap bina</span><br>
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

                        <!--PD3.3-->
                        <tr class="pg-5" align="center">
                            <td>PD3.3</td>
                            <td>Kawalan Tahap Kesilauan</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD33_MR}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD33_MMV" name="markahPD33_MMV" /></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD33_MR_PUN}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD33_MMV_PUN" name="markahPD33_MMV_PUN" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD33_MMV_SEDIA" name="markahPD33_MMV_SEDIA" /></td>
                            <td>
                                <span>&#183; Lukisan siap bina dan bukti bergambar
                                    bagi mengesahkan bidai yang digunakan</span><br>
                                <span>&#183; Laporan prestasi pencahayaan (jika ada)</span><br>
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

                        <!--PD3.4-->
                        <tr class="pg-5" align="center">
                            <td>PD3.4</td>
                            <td>Akses visual kepada pandangan di luar</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD34_MR}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD34_MMV" name="markahPD34_MMV" /></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD34_MR_PUN}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD34_MMV_PUN" name="markahPD34_MMV_PUN" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD34_MMV_SEDIA" name="markahPD34_MMV_SEDIA" /></td>
                            <td>
                                <span>&#183; Katalog dan sample bahan yang diluluskan oleh S.O.</span><br>
                                <span>&#183; Lukisan Siap Bina</span><br>
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

                        <!--PD3.5-->
                        <tr class="pg-5" align="center">
                            <td>PD3.5</td>
                            <td>Tahap Pencahayaan (bukan semulajadi) Bilik</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD35_MR}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD35_MMV" name="markahPD35_MMV" /></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD35_MR_PUN}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD35_MMV_PUN" name="markahPD35_MMV_PUN" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD35_MMV_SEDIA" name="markahPD35_MMV_SEDIA" /></td>
                            <td>
                                <span>&#183; Pengiraan dan lukisan terpasang bagi siling yang menunjukkan susun atur lampu</span><br>
                                <span>&#183; Laporan Pengujian dan Pentauliahan</span><br>
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
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD41_MMV" name="markahPD41_MMV" /></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD41_MR_PUN}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD41_MMV_PUN" name="markahPD41_MMV_PUN" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD41_MMV_SEDIA" name="markahPD41_MMV_SEDIA" /></td>
                            <td>
                                <span>&#183; Mengemukakan lukisan siap bina yang menunjukkan ruang
                                    pengudaraan secara semula jadi</span><br>
                                <span>&#183; Pelan susun atur</span><br>
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

                        <!--PD4.2-->
                        <tr class="pg-5" align="center">
                            <td>PD4.2</td>
                            <td>Prestasi Kualiti Udara Dalaman: ASHRAE 62.1:2007 & 129</td>
                            <td colspan="6"></td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD42_MR}}</td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD42_MMV" name="markahPD42_MMV" /></td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD42_MR_PUN}}</td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD42_MMV_PUN" name="markahPD42_MMV_PUN" /></td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD42_MMV_SEDIA" name="markahPD42_MMV_SEDIA" /></td>
                            <td>
                                            <span>&#183; Mengemukakan lukisan pelan lantai yang menunjukkan
                                                ruang pengudaraan secara semulajadi</span><br>
                                            <span>&#183; Laporan simulasi, jika ada</span><br>
                                            <span>&#183; Pelan susun atur</span><br>

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
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD51_MMV" name="markahPD51_MMV" /></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD51_MR_PUN}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD51_MMV_PUN" name="markahPD51_MMV_PUN" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD51_MMV_SEDIA" name="markahPD51_MMV_SEDIA" /></td>
                            <td>
                                <span>&#183; Laporan Post Occupancy Evaluation (POE)</span><br>
                                <span>&#183; Lukisan siap bina dan bukti bergambar bagi setiap
                                    jenis sensor dan kawalan keselesaan thermal</span><br>
                                <span>&#183; Menyediakan kaji selidik tahap keselesaan pengguna</span><br>

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

                         <!--PD5.2-->
                         <tr class="pg-5" align="center">
                            <td>PD5.2</td>
                            <td>Kawalan Sistem Pencahayaan & Pengudaraan (Pencahayaan)</td>
                            <td colspan="6"></td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD52_MR}}</td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD52_MMV" name="markahPD52_MMV" /></td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD52_MR_PUN}}</td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD52_MMV_PUN" name="markahPD52_MMV_PUN" /></td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD52_MMV_SEDIA" name="markahPD52_MMV_SEDIA" /></td>
                            <td>
                                <span>&#183; Bukti bergambar</span><br>
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
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD61_MMV" name="markahPD61_MMV" /></td>
                            <td>3</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD61_MR_PUN}}</td>
                            <td>3</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD61_MMV_PUN" name="markahPD61_MMV_PUN" /></td>
                            <td>3</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD61_MMV_SEDIA" name="markahPD61_MMV_SEDIA" /></td>
                             <td>
                                <span>&#183; Lukisan siap bina</span><br>
                                <span>&#183; Bukti bergambar</span><br>
                                <span>&#183; Rekod kalibrasi berkala</span><br>
                                <span>&#183; Rekod senggara sistem pemantauan dan kawalan CO2</span><br>

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

                         <!--PD6.2--><!--PUN | Sedia Ada not available-->
                         <tr class="pg-5" align="center">
                            <td>PD6.2</td>
                            <td>Kualiti Persekitaran Semasa Pembinaan dan Sebelum diduduki</td>
                            <td colspan="6"></td>
                            <td>2</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD52_MR}}</td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="2" autocapitalize="off" id="markahPD52_MMV" name="markahPD52_MMV" /></td>
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

                         <!--PD7-->
                         <tr class="pg-5" align="center">
                            <td>PD7</td>
                            <td>Keselesaan Akustik</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD7_MR}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD7_MMV" name="markahPD7_MMV" /></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD7_MR_PUN}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD7_MMV_PUN" name="markahPD7_MMV_PUN" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="1" autocapitalize="off" id="markahPD7_MMV_SEDIA" name="markahPD7_MMV_SEDIA" /></td>
                            <td>
                                <span>&#183; Laporan ukuran tahap bunyi dan penjelasan mengenai langkah-langkah
                                    yang telah dilaksanakan untuk mencapai tahap bunyi yang ditetapkan</span><br>
                                <span>&#183; Lukisan siap bina yang menunjukkan ciri-ciri kawalan bunyi yang telah dilaksanakan</span><br>
                                <span>&#183; Manufacturer's data sheets untuk bahan-bahan akustik 
                                    yang telah digunakan dalam bangunan</span><br>
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

                        <!--PD8-->
                        <tr class="pg-5" align="center">
                            <td>PD8</td>
                            <td>Kualiti Udara Dalaman (IAQ)</td>
                            <td colspan="6"></td>
                            <td>3</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD8_MR}}</td>
                            <td>3</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="3" autocapitalize="off" id="markahPD8_MMV" name="markahPD8_MMV" /></td>
                            <td>3</td>
                            <td>{{$kriteria_phjkr_bangunan->markahPD8_MR_PUN}}</td>
                            <td>3</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="3" autocapitalize="off" id="markahPD8_MMV_PUN" name="markahPD8_MMV_PUN" /></td>
                            <td>3</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="3" autocapitalize="off" id="markahPD8_MMV_SEDIA" name="markahPD8_MMV_SEDIA" /></td>
                            <td>
                                <span>&#183; Katalog dan kaedah pemasangan (method statement) yang telah
                                    disahkan oleh Pegawai yang kompeten</span><br>
                                <span>&#183; Gambar semasa kerja pemasangan</span><br>
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

                         <!--PD9-->
                         <tr class="pg-5" align="center">
                            <td>PD9</td>
                            <td>Pencegahan Kulapok (Mold)</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahTL9_MR}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahTL9_MMV" name="markahTL9_MMV" /></td>
                            <td>1</td>
                            <td>{{$kriteria_phjkr_bangunan->markahTL9_MR_PUN}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahTL9_MMV_PUN" name="markahTL9_MMV_PUN" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahTL9_MMV_SEDIA" name="markahTL9_MMV_SEDIA" /></td>
                            <td>
                                <span>&#183; Laporan ringkas yang menggariskan strategi yang akan dilaksanakan
                                    untuk memenuhi keperluan bagi pencegahan kulapok</span><br>
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

                        <!--PD10--><!--Baru not available-->
                        <tr class="pg-5" align="center">
                            <td>PD10</td>
                            <td>Kaji Selidik Keselesaan Penghuni</td>
                            <td colspan="6"></td>
                            <td></td>
                            <td></td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahTL10_MMV" name="markahTL10_MMV" /></td>
                            <td>0</td>
                            <td>{{$kriteria_phjkr_bangunan->markahTL10_MR_PUN}}</td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahTL10_MMV_PUN" name="markahTL10_MMV_PUN" /></td>
                            <td>2</td>
                            <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahTL10_MMV_SEDIA" name="markahTL10_MMV_SEDIA" /></td>
                            <td>
                                <span>&#183; Laporan maklumbalas kaji selidik</span><br>
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

                        <!-- Jumlah MarkahPD-->
                        <tr class="pg-5" align="center">
                            <td colspan="6">Jumlah markah PD</td>
                            <td colspan="3">29</td>
                            <td>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MR}}</td>
                            <td>31</td>
                            <td><input type="number" min="0" max="31" id="markahTOTAL_PD_MMV" name="markahTOTAL_PD_MMV"></td>
                            <td>27</td>
                            <td>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MR_PUN}}</td>
                            <td>29</td>
                            <td><input type="number" min="0" max="29" id="markahTOTAL_PD_MMV_PUN" name="markahTOTAL_PD_MMV_PUN"></td>
                            <td>29</td>
                            <td><input type="number" min="0" max="29" id="markahTOTAL_PD_MMV_SEDIA" name="markahTOTAL_PD_MMV_SEDIA"></td>
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
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahTL4_MMV_PUN" name="markahTL4_MMV_PUN" /></td>
                                <td>
                                    <span>&#183; Sijil Penarafan Hijau yang masih dalam tempoh sahlaku</span><br>
                                    <span>&#183; Laporan Audit Tenaga untuk audit yang telah dijalankan sekiranya terdapat perubahan
                                        ketara pada penggunaan tenaga elektrik bangunan</span><br>
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
                                <td>FL2.1</td>
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
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahFL32_MMV" name="markahFL32_MMV" /></td>
                                <td>0</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL32_MR_PUN}}</td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahFL32_MMV_PUN" name="markahFL32_MMV_PUN" /></td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahFL32_MMV_SEDIA" name="markahFL32_MMV_SEDIA" /></td>
                                <td>
                                    <span>&#183; Salinan surat tawaran kepada pasukan penyenggaraan 
                                        dan REEM yang berjaya dilantik
                                    </span>
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

                            <!--FL3.3-->
                            <tr class="pg-6" align="center">
                                <td>FL3.3</td>
                                <td>Pelan Pengurusan Fasiliti (FM)</td>
                                <td colspan="6"></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL33_MR}}</td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahFL33_MMV" name="markahFL33_MMV" /></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL33_MR_PUN}}</td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahFL33_MMV_PUN" name="markahFL33_MMV_PUN" /></td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahFL33_MMV_SEDIA" name="markahFL33_MMV_SEDIA" /></td>
                                <td>
                                    <span>&#183; Tatacara pelaksanaan pengurusan aset</span>
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

                            <!--FL3.4-->
                            <tr class="pg-6" align="center">
                                <td>FL3.4</td>
                                <td>Manual Operasi dan Penyenggaraan Bangunan</td>
                                <td colspan="6"></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL34_MR}}</td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahFL34_MMV" name="markahFL34_MMV" /></td>
                                <td>2</td>
                                <td>{{$kriteria_phjkr_bangunan->markahFL34_MR_PUN}}</td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahFL34_MMV_PUN" name="markahFL34_MMV_PUN" /></td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahFL34_MMV_SEDIA" name="markahFL34_MMV_SEDIA" /></td>
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

                            <!-- Jumlah MarkahFL-->
                            <tr class="pg-6" align="center">
                                <td colspan="6">Jumlah markah FL</td>
                                <td colspan="3">5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MR}}</td>
                                <td>10</td>
                                <td><input type="number" min="0" max="10" id="markahTOTAL_FL_MMV" name="markahTOTAL_FL_MMV"></td>
                                <td>5</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MR_PUN}}</td>
                                <td>10</td>
                                <td><input type="number" min="0" max="10" id="markahTOTAL_FL_MMV_PUN" name="markahTOTAL_FL_MMV_PUN"></td>
                                <td>19</td>
                                <td><input type="number" min="0" max="19" id="markahTOTAL_FL_MMV_SEDIA" name="markahTOTAL_FL_MMV_SEDIA"></td>
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
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="6" autocapitalize="off" id="markahIN1_MMV" name="markahIN1_MMV" /></td>
                            <td>6</td>
                            <td>{{$kriteria_phjkr_bangunan->markahIN1_MR_PUN}}</td>
                            <td>6</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="6" autocapitalize="off" id="markahIN1_MMV_PUN" name="markahIN1_MMV_PUN" /></td>
                            <td>6</td>
                            <td><input onblur="findTotalMV_SB()" class="sum_mv_sb" type="number" min="0" max="6" autocapitalize="off" id="markahIN1_MMV_PUN" name="markahIN1_MMV_PUN" /></td>
                            <td>
                                <span>&#183; Lukisan siap bina dan bukti bergambar</span><br>
                                <span>&#183; Laporan prestasi inovasi</span><br>
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

                            <!-- Jumlah MarkahIN-->
                            <tr class="pg-7" align="center">
                                <td colspan="6">Jumlah markah IN</td>
                                <td colspan="3">6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MR}}</td>
                                <td>6</td>
                                <td><input type="number" min="0" max="6" id="markahTOTAL_IN_MMV" name="markahTOTAL_IN_MMV"></td>
                                <td>6</td>
                                <td>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MR_PUN}}</td>
                                <td>6</td>
                                <td><input type="number" min="0" max="6" id="markahTOTAL_IN_MMV_PUN" name="markahTOTAL_IN_MMV_PUN"></td>
                                <td>6</td>
                                <td><input type="number" min="0" max="6" id="markahTOTAL_IN_MMV_SEDIA" name="markahTOTAL_IN_MMV_SEDIA"></td>
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
                        <button class="btn btn-secondary pg-1" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button2()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 2-->
                    <div class="mt-3 text-center pg-2">
                        <button class="btn btn-secondary pg-2" data-toggle="tooltip" data-placement="bottom" 
                        title="Kembali" onclick="button1()" type="submit">Kembali</button>
                        <button class="btn btn-secondary pg-2" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button3()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 3-->
                    <div class="mt-3 text-center pg-3">
                        <button class="btn btn-secondary pg-3" data-toggle="tooltip" data-placement="bottom" 
                        title="Kembali" onclick="button2()" type="submit">Kembali</button>
                        <button class="btn btn-secondary pg-3" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button4()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 4-->
                    <div class="mt-3 text-center pg-4">
                        <button class="btn btn-secondary pg-4" data-toggle="tooltip" data-placement="bottom" 
                        title="Kembali" onclick="button3()" type="submit">Kembali</button>
                        <button class="btn btn-secondary pg-4" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button5()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 5-->
                    <div class="mt-3 text-center pg-5">
                        <button class="btn btn-secondary pg-5" data-toggle="tooltip" data-placement="bottom" 
                        title="Kembali" onclick="button4()" type="submit">Kembali</button>
                        <button class="btn btn-secondary pg-5" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button6()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 6-->
                    <div class="mt-3 text-center pg-6">
                        <button class="btn btn-secondary pg-6" data-toggle="tooltip" data-placement="bottom" 
                        title="Kembali" onclick="button5()" type="submit">Kembali</button>
                        <button class="btn btn-secondary pg-6" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button7()" type="submit">Seterusnya</button>
                    </div>

                    <!--Page 7-->
                    <div class="mt-3 text-center pg-7">
                        <button class="btn btn-secondary pg-7" data-toggle="tooltip" data-placement="bottom" 
                        title="Kembali" onclick="button6()" type="submit">Kembali</button>
                    </div>

                    <!--Button Simpan (TOOLTIPS)-->
                    <!--Page 1-->
                    {{-- <div class="mt-3 text-center">
                        <button class="btn btn-primary pg-7" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <button class="btn btn-secondary pg-1" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button2()">Seterusnya</button>
                        <button class="btn btn-secondary pg-2" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button3()">Seterusnya</button>
                        <button class="btn btn-secondary pg-3" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button4()">Seterusnya</button>
                        <button class="btn btn-secondary pg-4" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button5()">Seterusnya</button>
                        <button class="btn btn-secondary pg-5" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button6()">Seterusnya</button>
                        <button class="btn btn-secondary pg-6" data-toggle="tooltip" data-placement="bottom" 
                        title="Seterusnya" onclick="button7()">Seterusnya</button>
                    </div> --}}

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
            {{-- </div> <!--Scrollbar--> --}}
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

            <!--MARKAH VERIFIKASI (MMV) VERIFIKASI CALCULATION-->
            <!--MMV_TL : MARKAH VERIFIKASI TL-->
            <!--MMV_KT : MARKAH VERIFIKASI KT-->
            <!--MMV_SB : MARKAH VERIFIKASI SB-->
            <!--MMV_PA : MARKAH VERIFIKASI PA-->
            <!--MMV_PD : MARKAH VERIFIKASI PD-->
            <!--MMV_FL : MARKAH VERIFIKASI FL-->
            <!--MMV_IN : MARKAH VERIFIKASI IN-->
            <script>
                function findTotalMMV_TL(){
                    var totalMMV_TL = document.getElementById('totalMMV_TL');
                    var MMV_TL = document.getElementsByClassName('MMV_TL');
                    var sumMMV_TL = 0;

                    for( var i = 0; i < MMV_TL.length; i++ ){
                        sumMMV_TL += Number(MMV_TL[i].value);

                    //display the total of inputs
                    totalMMV_TL.value = sumMMV_TL;
                    }
                    document.getElementById('totalMMV_TL').value = sumMMV_TL;
                }

                function findTotalMMV_KT(){
                    var totalMMV_KT = document.getElementById('totalMMV_KT');
                    var MMV_KT = document.getElementsByClassName('MMV_KT');
                    var sumMMV_KT = 0;

                    for( var i = 0; i < MMV_KT.length; i++ ){
                        sumMMV_KT += Number(MMV_KT[i].value);

                    //display the total of inputs
                    totalMMV_KT.value = sumMMV_KT;
                    }
                    document.getElementById('totalMMV_KT').value = sumMMV_KT;
                }

                function findTotalMMV_SB(){
                    var totalMMV_SB = document.getElementById('totalMMV_SB');
                    var MMV_SB = document.getElementsByClassName('MMV_SB');
                    var sumMMV_SB = 0;

                    for( var i = 0; i < MMV_SB.length; i++ ){
                        sumMMV_SB += Number(MMV_SB[i].value);

                    //display the total of inputs
                    totalMMV_SB.value = sumMMV_SB;
                    }
                    document.getElementById('totalMMV_SB').value = sumMMV_SB;
                }

                function findTotalMMV_PA(){
                    var totalMMV_PA = document.getElementById('totalMMV_PA');
                    var MMV_PA = document.getElementsByClassName('MMV_PA');
                    var sumMMV_PA = 0;

                    for( var i = 0; i < MMV_PA.length; i++ ){
                        sumMMV_PA += Number(MMV_PA[i].value);

                    //display the total of inputs
                    totalMMV_PA.value = sumMMV_PA;
                    }
                    document.getElementById('totalMMV_PA').value = sumMMV_PA;
                }

                function findTotalMMV_PD(){
                    var totalMMV_PD = document.getElementById('totalMMV_PD');
                    var MMV_PD = document.getElementsByClassName('MMV_PD');
                    var sumMMV_PD = 0;

                    for( var i = 0; i < MMV_PD.length; i++ ){
                        sumMMV_PD += Number(MMV_PD[i].value);

                    //display the total of inputs
                    totalMMV_PD.value = sumMMV_PD;
                    }
                    document.getElementById('totalMMV_PD').value = sumMMV_PD;
                }

                function findTotalMMV_FL(){
                    var totalMMV_FL = document.getElementById('totalMMV_FL');
                    var MMV_FL = document.getElementsByClassName('MMV_FL');
                    var sumMMV_FL = 0;

                    for( var i = 0; i < MMV_FL.length; i++ ){
                        sumMMV_FL += Number(MMV_FL[i].value);

                    //display the total of inputs
                    totalMMV_FL.value = sumMMV_FL;
                    }
                    document.getElementById('totalMMV_FL').value = sumMMV_FL;
                }

                function findTotalMMV_IN(){
                    var totalMMV_IN = document.getElementById('totalMMV_IN');
                    var MMV_IN = document.getElementsByClassName('MMV_IN');
                    var sumMMV_IN = 0;

                    for( var i = 0; i < MMV_IN.length; i++ ){
                        sumMMV_IN += Number(MMV_IN[i].value);

                    //display the total of inputs
                    totalMMV_IN.value = sumMMV_IN;
                    }
                    document.getElementById('totalMMV_IN').value = sumMMV_IN;
                }

                function findTotalMMV(){
                    var TL = totalMMV_TL.value || 0;
                    var KT = totalMMV_KT.value || 0;
                    var SB = totalMMV_SB.value || 0;
                    var PA = totalMMV_PA.value || 0;
                    var PD = totalMMV_PD.value || 0;
                    var FL = totalMMV_FL.value || 0;
                    var IN = totalMMV_IN.value || 0;
                    document.getElementById('totalMMV').value = Number(TL) + Number(KT)
                    + Number(SB) + Number(PA) + Number(PD) + Number(FL) + Number(IN);
                }

                document.addEventListener('keyup', function(){
                    findTotalMMV_TL();
                    findTotalMMV_KT();
                    findTotalMMV_SB();
                    findTotalMMV_PA();
                    findTotalMMV_PD();
                    findTotalMMV_FL();
                    findTotalMMV_IN();
                    findTotalMMV();
                });
                
                // function peratusan_markah() {

                //     var peratus = document.getElementById("totalMS").value;
                //     // Method returns the element of num1 id
                //     document.getElementById("peratus").value = (totalMS * 100) / 101 + "%";
                //     }
            </script>

            <!--MARKAH VERIFIKASI (MV) PUN CALCULATION-->
            <!--MV_TL : MARKAH VERIFIKASI TL-->
            <!--MV_KT : MARKAH VERIFIKASI KT-->
            <!--MV_SB : MARKAH VERIFIKASI SB-->
            <!--MV_PA : MARKAH VERIFIKASI PA-->
            <!--MV_PD : MARKAH VERIFIKASI PD-->
            <!--MV_FL : MARKAH VERIFIKASI FL-->
            <!--MV_IN : MARKAH VERIFIKASI IN-->
            <script>
                function findTotalMV_TL_PUN(){
                    var totalMV_TL_PUN = document.getElementById('totalMV_TL_PUN');
                    var MV_TL_PUN = document.getElementsByClassName('MV_TL_PUN');
                    var sumMV_TL_PUN = 0;

                    for( var i = 0; i < MV_TL_PUN.length; i++ ){
                        sumMV_TL_PUN += Number(MV_TL_PUN[i].value);

                    //display the total of inputs
                    totalMV_TL_PUN.value = sumMV_TL_PUN;
                }
                    document.getElementById('totalMV_TL_PUN').value = sumMV_TL_PUN;
                }

                function findTotalMV_KT_PUN(){
                    var totalMV_KT_PUN = document.getElementById('totalMV_KT_PUN');
                    var MV_KT_PUN = document.getElementsByClassName('MV_KT_PUN');
                    var sumMV_KT_PUN = 0;

                    for( var i = 0; i < MV_KT_PUN.length; i++ ){
                        sumMV_KT_PUN += Number(MV_KT_PUN[i].value);

                    //display the total of inputs
                    totalMV_KT_PUN.value = sumMV_KT_PUN;
                    }
                    document.getElementById('totalMV_KT_PUN').value = sumMV_KT_PUN;
                }

                function findTotalMV_SB_PUN(){
                    var totalMV_SB_PUN = document.getElementById('totalMV_SB_PUN');
                    var MV_SB_PUN = document.getElementsByClassName('MV_SB_PUN');
                    var sumMV_SB_PUN = 0;

                    for( var i = 0; i < MV_SB_PUN.length; i++ ){
                        sumMV_SB_PUN += Number(MV_SB_PUN[i].value);

                    //display the total of inputs
                    totalMV_SB_PUN.value = sumMV_SB_PUN;
                    }
                    document.getElementById('totalMV_SB_PUN').value = sumMV_SB_PUN;
                }

                function findTotalMV_PA_PUN(){
                    var totalMV_PA_PUN = document.getElementById('totalMV_PA_PUN');
                    var MV_PA = document.getElementsByClassName('MV_PA_PUN');
                    var sumMV_PA_PUN = 0;

                    for( var i = 0; i < MV_PA_PUN.length; i++ ){
                        sumMV_PA_PUN += Number(MV_PA_PUN[i].value);

                    //display the total of inputs
                    totalMV_PA_PUN.value = sumMV_PA_PUN;
                    }
                    document.getElementById('totalMV_PA_PUN').value = sumMV_PA_PUN;
                }

                function findTotalMV_PD_PUN(){
                    var totalMV_PD_PUN = document.getElementById('totalMV_PD_PUN');
                    var MV_PD = document.getElementsByClassName('MV_PD_PUN');
                    var sumMV_PD_PUN = 0;

                    for( var i = 0; i < MV_PD_PUN.length; i++ ){
                        sumMV_PD_PUN += Number(MV_PD_PUN[i].value);

                    //display the total of inputs
                    totalMV_PD_PUN.value = sumMV_PD_PUN;
                    }
                    document.getElementById('totalMV_PD_PUN').value = sumMV_PD_PUN;
                }

                function findTotalMV_FL_PUN(){
                    var totalMV_FL_PUN = document.getElementById('totalMV_FL_PUN');
                    var MV_FL_PUN = document.getElementsByClassName('MV_FL_PUN');
                    var sumMV_FL_PUN = 0;

                    for( var i = 0; i < MV_FL_PUN.length; i++ ){
                        sumMV_FL_PUN += Number(MV_FL_PUN[i].value);

                    //display the total of inputs
                    totalMV_FL_PUN.value = sumMV_FL_PUN;
                    }
                    document.getElementById('totalMV_FL_PUN').value = sumMV_FL_PUN;
                }

                function findTotalMV_IN_PUN(){
                    var totalMV_IN_PUN = document.getElementById('totalMV_IN_PUN');
                    var MV_IN_PUN = document.getElementsByClassName('MV_IN_PUN');
                    var sumMV_IN_PUN = 0;

                    for( var i = 0; i < MV_IN_PUN.length; i++ ){
                        sumMV_IN_PUN += Number(MV_IN_PUN[i].value);

                    //display the total of inputs
                    totalMV_IN_PUN.value = sumMV_IN_PUN;
                    }
                    document.getElementById('totalMV_IN_PUN').value = sumMV_IN_PUN;
                }

                function findTotalMV(){
                    var TL = totalMMV_TL_PUN.value || 0;
                    var KT = totalMMV_KT_PUN.value || 0;
                    var SB = totalMMV_SB_PUN.value || 0;
                    var PA = totalMMV_PA_PUN.value || 0;
                    var PD = totalMMV_PD_PUN.value || 0;
                    var FL = totalMMV_FL_PUN.value || 0;
                    var IN = totalMMV_IN_PUN.value || 0;
                    document.getElementById('totalMV_PUN').value = Number(TL) + Number(KT) + Number(SB) 
                    + Number(PA) + Number(PD) + Number(FL) + Number(IN);
                }

                document.addEventListener('keyup', function(){
                    findTotalMV_TL_PUN();
                    findTotalMV_KT_PUN();
                    findTotalMV_SB_PUN();
                    findTotalMV_PA_PUN();
                    findTotalMV_PD_PUN();
                    findTotalMV_FL_PUN();
                    findTotalMV_IN_PUN();
                    findTotalMV();
                });
            </script>
            
@endsection