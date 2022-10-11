@extends('layouts.base')

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
            @method('POST')

                <!--------------------------------------- MarkahTL ---------------------------------------->

                <table id="example" class="table table-bordered line-table display">
                    <thead class="text-white">
                        <tr class="pg-1" align="center" style="background-color:#EB5500">
                            <th rowspan="3">Kod</th>
                            <th rowspan="3">Kriteria</th>
                            <th rowspan="3" colspan="6">Kategori bangunan</th>
                            <th colspan="2">Pembangunan Baru</th>
                            <th colspan="2">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
                            <th rowspan="2">Dokumen Pembuktian</th>
                            <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                            <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
                        </tr>
        
                        <tr class="pg-1" align="center" style="background-color:#EB5500">
                            <th colspan="2">Markah</th>
                            <th colspan="2">Markah</th>
                        </tr>
                    
                        <tr class="pg-1" align="center" style="background-color:#EB5500">
                            <th>MM</th>
                            <th>MR</th>
                            {{-- <th>MM</th>
                            <th>MR</th> --}}
                            <th>Rekabentuk (Peringkat 2)</th>
                        </tr>
        
                        <tr class="pg-1" style="background-color:#EB5500">
                            <th>TL</th>
                            <th colspan="23">PERANCANGAN & PENGURUSAN TAPAK LESTARI</th>
                        </tr>
                    </thead>
        
                        <!--TL1--><!--Baru shj-->
                        <tr class="pg-1" align="center">
                            <td>TL1</td>
                            <td>Perancangan Tapak</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL1_MR" name="markahTL1_MR" /></td>
                            <td></td>
                            <td></td>
                            <td>Rancangan Tempatan yang menunjukkan kawasan pembangunan yang terlibat</td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahTL1_ULASAN_PRB" name="markahTL1_ULASAN_PRB"></textarea></td>
                            <td colspan="4">
                                <input  id="formFileSm" type="file">                                
                            </td>
            
                        </tr>
        
                        <!--TL2-->
                        <tr class="pg-1" align="center">
                            <td>TL2</td>
                            <td>Sistem Pengurusan Alam Sekitar (SPAS)</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>3</td>
                            <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="3" autocapitalize="off" id="markahTL2_MR" name="markahTL2_MR" /></td>
                            <td>3</td>
                            <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="3" id="markahTL2_MR_PUN" name="markahTL2_MR_PUN"></td>
                            <td><span>&#183; Sijil ISO 14001</span><br>
                                <span>&#183; Senarai kuantiti (BQ) kerja-kerja perlindungan alam sekitar</span>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahTL2_ULASAN_PRB" name="markahTL2_ULASAN_PRB"></textarea></td>
                            <td colspan="4">
                                <input  id="formFileSm" type="file">                                
                                {{-- <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form> --}}
                            </td>                        
                        </tr>

                        <!--TL3-->
                        <tr class="pg-1" align="center">
                            <td rowspan="2">TL3</td>
                            <td>i. Pemotongan dan Penambakan tanah</td>
                            <td rowspan="2" colspan="6">{{$projeks->kategoriBangunan}}</td>                            
                            <td>3</td>
                            <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MR" name="markahTL3_MR" /></td>
                            <td>3</td>
                            <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="3" id="markahTL3_MR_PUN" name="markahTL3_MR_PUN"></td>
                            <td>
                                <span>&#183; Laporan rekabentuk tanah</span><br>
                                <span>&#183; Lukisan pelan tanah</span><br>
                                <span>&#183; Laporan geoteknikal (jika perlu)</span>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahTL3_ULASAN_PRB" name="markahTL3_ULASAN_PRB"></textarea></td>
                            <td colspan="4">
                                <input  id="formFileSm" type="file">                                
                                {{-- <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form> --}}
                            </td>                        
                        </tr>
        
                        <tr class="pg-1" align="center">
                            <td>ii. Mengekalkan Topografi Tanah</td>
                            <td>2</td>
                            <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="2" autocapitalize="off" id="markahTL32_MR" name="markahTL32_MR" /></td>
                            <td>2</td>
                            <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="2" id="markahTL32_MR_PUN" name="markahTL32_MR_PUN"></td>
                            <td>
                                <span>&#183; Pelan Topografi</span><br>
                                <span>&#183; Laporan geoteknikal</span><br>
                                <span>&#183; Laporan rekabentuk tanah</span><br>
                                <span>&#183; Lukisan pelan kerja tanah</span><br>
                                <span>&#183; Pelan kawalan hakisan kelodak (ESCP)</span>
        
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahTL32_ULASAN_PRB" name="markahTL32_ULASAN_PRB"></textarea></td>
                            <td colspan="4">
                                <input  id="formFileSm" type="file">                                
                                {{-- <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form> --}}
                            </td>
                        </tr>
        
                        <!--TL4-->
                        <tr class="pg-1" align="center">
                            <td>TL4</td>
                            <td>Pelan Kawalan Hakisan & Kelodak (ESCP)</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL4_MR" name="markahTL4_MR" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="1" id="markahTL4_MR_PUN" name="markahTL4_MR_PUN"></td>
                            <td>
                                <span>&#183; Pelan Kawalan Hakisan & Kelodak (ESCP)</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahTL4_ULASAN_PRB" name="markahTL4_ULASAN_PRB"></textarea></td>
                            <td colspan="4">
                                <input  id="formFileSm" type="file">                                

                                {{-- <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form> --}}
                            </td>                        
                        </tr>
        
                        <!--TL5-->
                        <tr class="pg-1" align="center">
                            <td>TL5</td>
                            <td>Pemuliharaan dan Pemeliharaan Cerun</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>                            
                            <td>1</td>
                            <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL5_MR" name="markahTL5_MR" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="1" id="markahTL5_MR_PUN" name="markahTL5_MR_PUN"></td>
                            <td>
                                <span>&#183; Laporan penyenggaraan cerun</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahTL5_ULASAN_PRB" name="markahTL5_ULASAN_PRB"></textarea></td>
                            <td colspan="4">
                                <input  id="formFileSm" type="file">                                

                                {{-- <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form> --}}
                            </td>                        
                        </tr>


                        <!--TL6-->
                        <tr class="pg-1" align="center">
                            <td>TL6</td>
                            <td>Pengurusan Air Larian Hujan</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>                          
                            <td>3</td>
                            <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="3" autocapitalize="off" id="markahTL6_MR" name="markahTL6_MR" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="1" id="markahTL6_MR_PUN" name="markahTL6_MR_PUN"></td>
                            <td>
                                <span>&#183; Laporan rekabentuk sistem perparitan</span><br>
                                <span>&#183; Pelan sistem perparitan berdasarkan MSMA</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahTL6_ULASAN_PRB" name="markahTL6_ULASAN_PRB"></textarea></td>
                            <td colspan="4">
                                <input  id="formFileSm" type="file">                                

                                {{-- <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form> --}}
                            </td>
                        </tr>

                        <!--TL7-->
                        <tr class="pg-1" align="center">
                            <td>TL7</td>
                            <td>Rekabentuk, Aksebiliti dan Kemudahan OKU</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>                           
                            <td>2</td>
                            <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="2" autocapitalize="off" id="markahTL7_MR" name="markahTL7_MR" /></td>
                            <td>2</td>
                            <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="2" id="markahTL7_MR_PUN" name="markahTL7_MR_PUN"></td>
                            <td>
                                <span>&#183; Pelan susunatur (luar bangunan) yang menunjukkan aksesibiliti dan kemudahan OKU dalam pelan tapak</span><br>
                                <span>&#183; Lukisan terperinci kemudahan OKU dalam bangunan</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahTL7_ULASAN_PRB" name="markahTL7_ULASAN_PRB"></textarea></td>
                            <td colspan="4">
                                <input  id="formFileSm" type="file">                                

                                {{-- <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form> --}}
                            </td>
                        </tr>
        
                        <!--TL8--> <!--NO INPUT-->
                        <tr class="pg-1" align="center">
                            <td>TL8</td>
                            <td>Landskap strategik</td>
                            <td colspan="6"></td>
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
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>3</td>
                            <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="3" autocapitalize="off" id="markahTL81_MR" name="markahTL81_MR" /></td>
                            <td>3</td>
                            <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="3" id="markahTL81_MR_PUN" name="markahTL81_MR_PUN"></td>
                            <td>
                                <span>&#183; Inventori pokok</span><br>
                                <span>&#183; Pelan ukur bagi lokasi pokok matang sedia ada</span><br>
                                <span>&#183; Pelan penanaman pokok</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahTL8_ULASAN_PRB" name="markahTL8_ULASAN_PRB"></textarea></td>
                            <td colspan="4">
                                <input  id="formFileSm" type="file">                                

                                {{-- <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form> --}}
                            </td>
                        </tr>
        
                        <!--TL8.2-->
                        <tr class="pg-1" align="center">
                            <td>TL8.2</td>
                            <td>Menyediakan kawasan hijau</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>                           
                            <td>1</td>
                            <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL82_MR" name="markahTL82_MR" /></td>
                            <td>2</td>
                            <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="2" id="markahTL82_MR_PUN" name="markahTL82_MR_PUN"></td>
                            <td>
                                <span>Laporan cadangan menunjukkan:</span><br>
                                <span>&#183; 30% kawasan hijau (disahkan oleh arkitek atau jururancang bertauliah)</span><br>
                                <span>&#183; Pokok, pokok renek, tumbuhan penutup bumi, rumput</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahTL82_ULASAN_PRB" name="markahTL82_ULASAN_PRB"></textarea></td>
                            <td colspan="4"><input id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                        <!--TL8.3-->
                        <tr class="pg-1" align="center">
                            <td>TL8.3</td>
                            <td>Menyedia dan menyenggara penanaman pokok teduhan</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL83_MR" name="markahTL83_MR" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="1" id="markahTL83_MR_PUN" name="markahTL83_MR_PUN"></td>
                            <td>
                                <span>&#183; Penyediaan pelan landskap</span><br>
                                <span>&#183; Jadual spesis pokok</span><br>
                                <span>&#183; Anggaran bayang-bayang pokok atau struktur selain bangunan</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahTL83_ULASAN_PRB" name="markahTL83_ULASAN_PRB"></textarea></td>
                            <td colspan="4"><input id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                        <!--TL8.4-->
                        <tr class="pg-1" align="center">
                            <td>TL8.4</td>
                            <td>Pemilihan bahan binaan siarkaki (walkway) yang mempunyai daya pantulan
                                haba yang tinggi
                            </td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>                            
                            <td>1</td>
                            <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL84_MR" name="markahTL84_MR" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="1" id="markahTL84_MR_PUN" name="markahTL84_MR_PUN"></td>
                            <td>
                                <span>&#183; Lukisan terperinci dengan spesifikasi</span><br>
                                <span>&#183; Katalog berserta jadual SRI bahan siarkaki</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahTL84_ULASAN_PRB" name="markahTL84_ULASAN_PRB"></textarea></td>
                            <td colspan="4"><input id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                        <!--TL8.5-->
                        <tr class="pg-1" align="center">
                            <td>TL8.5</td>
                            <td>Menyedia dan menyenggara sistem turapan berumput</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>2</td>
                            <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="2" autocapitalize="off" id="markahTL85_MR" name="markahTL85_MR" /></td>
                            <td>2</td>
                            <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="2" id="markahTL85_MR_PUN" name="markahTL85_MR_PUN"></td>
                            <td>
                                <span>&#183; Lukisan butiran dan spesifikasi sistem turapan</span><br>
                                <span>&#183; Lukisan susun atur tapak pembangunan</span><br>
                                <span>&#183; Pengiraan luas zon turapan</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahTL85_ULASAN_PRB" name="markahTL85_ULASAN_PRB"></textarea></td>
                            <td colspan="4"><input id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
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
                            <td colspan="4"></td>
                            <td colspan="5"></td>
                        </tr>

                        <!--TL9.1-->
                        <tr class="pg-1" align="center">
                            <td>TL9.1</td>
                            <td>Indeks Pantulan Suria (SRI) mengikut jenis & kecerunan bumbung
                            </td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>                      
                            <td>1</td>
                            <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL91_MR" name="markahTL91_MR" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="1" id="markahTL91_MR_PUN" name="markahTL91_MR_PUN"></td>
                            <td>
                                <span>&#183; Katalog berserta jadual SRI bumbung</span><br>
                                <span>&#183; Pengiraan keluasan bumbung</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahTL91_ULASAN_PRB" name="markahTL91_ULASAN_PRB"></textarea></td>
                            <td colspan="4">
                                <input  id="formFileSm" type="file">                                

                                {{-- <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form> --}}
                            </td>
                        </tr>

                        <!--TL9.2-->
                        <tr class="pg-1" align="center">
                            <td>TL9.2</td>
                            <td>Menggalakkan rekabentuk bumbung/dinding hijau</td>
                            <td colspan="6">
                                                                 
                            </td>
                            <td>3</td>
                            <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="3" autocapitalize="off" id="markahTL92_MR" name="markahTL92_MR" /></td>
                            <td>3</td>
                            <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="3" id="markahTL92_MR_PUN" name="markahTL92_MR_PUN"></td>
                            <td>
                                <span>&#183; Pelan konsep rekabentuk</span><br>
                                <span>&#183; Jadual keluasan kawasan bumbung</span><br>
                                <span>&#183; Lukisan butiran dan jadual penanaman</span><br>
                                <span>&#183; Pengiraan</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahTL92_ULASAN_PRB" name="markahTL92_ULASAN_PRB"></textarea></td>
                            <td colspan="4">
                                <input  id="formFileSm" type="file">                                

                                {{-- <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>  --}}
                            </td>
                        </tr>

                        <!--TL10-->
                        <tr class="pg-1" align="center">
                            <td>TL10</td>
                            <td>Tempat Letak Kenderaan</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL10_MR" name="markahTL10_MR" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="1" id="markahTL10_MR_PUN" name="markahTL10_MR_PUN" ></td>
                            <td>
                                <span>&#183; Lukisan susun atur tempat letak kenderaan dan penanda</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahTL10_ULASAN_PRB" name="markahTL10_ULASAN_PRB"></textarea></td>
                            <td colspan="4">
                                <input  id="formFileSm" type="file">                                

                                {{-- <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>  --}}
                            </td>
                        </tr>

                        <!--JUMLAH MARKAHTL-->
                        <tr class="pg-1" align="center">
                            <th colspan="6">Jumlah markah TL</th>
                            <td colspan="3">29</td>
                            <td><input id="totalMR_TL" type="number" min="0" max="29" autocapitalize="off" name="markahTOTAL_TL_MR" id="markahTOTAL_TL_MR"/></td>
                            <td>27</td>
                            <td><input id="totalMR_TL_PUN" type="number" min="0" max="27" id="markahTOTAL_TL_MR_PUN" name="markahTOTAL_TL_MR_PUN"></td>
                            <td></td>
                            <td></td>
                        </tr> 

                                <!--Total MS and Total MR-->
                                {{-- <input id="totalMS" hidden type="number" id="markahMS" name="markahMS"/> --}}
                                {{-- <input id="totalMR" hidden type="number" id="markahMR" name="markahMR"/> --}}

                                <!--Peratusan Markah MS (Testing sat)-->

                                <!-- Defines a field for entering a number -->
                                    {{-- <label><input type="number" id="totalMS" />
                                        over
                                        <input type="number" id="num2" />?
                                    </label> --}}
                                    
                                    <!-- onclick event is to call the function 
                                        when user click on the button -->
                                    {{-- <button onclick="percentage_2()">Calculate</button></br> --}}
                                    
                                    <!-- Read-only input field to display 
                                        output and cannot be modified -->
                                    {{-- <input onblur="peratusan()" type="number" id="value2"/> --}}

                                    {{-- <a href="#" onClick="autoFill(); return true;" >Click to Autofill</a>
                                    <p>
                                        <label>Text Input: </label>
                                        <input type="text" id="input1">
                                    </p>
                                    <p>
                                        <label>Dropdown Input: </label>
                                        <select id="input2">
                                        <option value="Dropdown1">First Option</option>
                                        <option value="Dropdown2">Second Option</option>
                                        <option value="Dropdown3">Third Option</option>
                                        </select>
                                    </p>
                                    <p>
                                        <label>Radio Input: </label>
                                        <input type="radio" name="input3" value="Radio1">First Radio
                                        <input type="radio" name="input3" value="Radio2">Second Radio
                                        <input type="radio" name="input3" value="Radio3">Third Radio
                                    </p> --}}


                </table>
                                       
                <!--------------------------------------- MarkahKT ---------------------------------------->
                <table id="example" class="table table-bordered line-table display">
                    <thead class="text-white">
                        <tr class="pg-2" align="center" style="background-color:#EB5500">
                            <th rowspan="3">Kod</th>
                            <th rowspan="3">Kriteria</th>
                            <th rowspan="3" colspan="6">Kategori bangunan</th>
                            <th colspan="2">Pembangunan Baru</th>
                            <th colspan="2">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
                            <th rowspan="2">Dokumen Pembuktian</th>
                            <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                            <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
                        </tr>

                        <tr class="pg-2" align="center" style="background-color:#EB5500">
                            <th colspan="2">Markah</th>
                            <th colspan="2">Markah</th>
                        </tr>
                    
                        <tr class="pg-2" align="center" style="background-color:#EB5500">
                            <th>MM</th>
                            <th>MR</th>
                            <th>MM</th>
                            <th>MR</th>
                            <th>Rekabentuk (Peringkat 2)</th>
                        </tr>

                        <tr class="pg-2" style="background-color:#EB5500">
                            <th>KT</th>
                            <th colspan="23">PENGURUSAN KECEKAPAN TENAGA DAN PENGGUNAAN TENAGA BOLEH BAHARU</th>
                        </tr>
                    </thead>

                        <!--KT1-->
                        <tr class="pg-2" align="center">
                            <td>KT1</td>
                            <td>Rekabentuk bumbung</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>2</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="2" id="markahKT1_MR" name="markahKT1_MR" autocapitalize="off" /></td>
                            <td>2</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="2" id="markahKT1_MR_PUN" name="markahKT1_MR_PUN"></td>
                            <td>
                                <span>&#183; Katalog spesifikasi U-Value bahan</span><br>
                                <span>&#183; Pengiraan U-Value bagi rekabentuk bumbung</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" ></textarea></td>
                            <td colspan="4">
                                <input  id="formFileSm" type="file">                                

                                {{-- <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form> --}}
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
                            <td colspan="5"></td>
                            <td colspan="4"></td> 
                        </tr>

                        <!--KT2.1-->
                        <tr class="pg-2" align="center">
                            <td>KT2.1</td>
                            <td>Fasad Utama bangunan yang menghadap orientasi utara-selatan</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>                           
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT21_MR" name="markahKT21_MR" autocapitalize="off" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="1" id="markahKT21_MR_PUN" name="markahKT21_MR_PUN"></td>
                            <td>
                                <span>&#183; Pelan tapak berserta penunjuk arah utara
                                    menunjukkan pelan bangunan dengan meletakkan sun-path diagram</span><br>
                                <span>&#183; Lukisan siap bina</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4">
                                <input  id="formFileSm" type="file">                                

                                {{-- <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form> --}}
                            </td>
                        </tr>

                        <!--KT2.2-->
                        <tr class="pg-2" align="center">
                            <td>KT2.2</td>
                            <td>Meminimumkan bukaan pada fasad yang menghadap timur dan barat</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT22_MR" name="markahKT22_MR" autocapitalize="off" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="1" id="markahKT22_MR_PUN" name="markahKT22_MR_PUN"></td>
                            <td>
                                <span>&#183; Laporan penyenggaraan cerun</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4">
                                <input  id="formFileSm" type="file">                                

                                {{-- <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form> --}}
                            </td>
                        </tr>

                        <!--KT3--><!--NO INPUT-->
                        <tr class="pg-2" align="center">
                            <td>KT3</td>
                            <td>Rekabentuk fasad</td>
                            <td colspan="6">

                            </td>
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
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT31_MR" name="markahKT31_MR" autocapitalize="off" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="1" id="markahKT31_MR_PUN" name="markahKT31_MR_PUN"></td>
                            <td>
                                <span>&#183; Katalog spesifikasi U-Value bahan</span><br>
                                <span>&#183; Pengiraan U-Value bagi rekabentuk dinding</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4">
                                <input  id="formFileSm" type="file">                                

                                {{-- <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form> --}}
                            </td>

                        </tr>

                        <!--KT3.2-->
                        <tr class="pg-2" align="center">
                            <td>KT3.2</td>
                            <td>Pengadang Suria Luaran</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT32_MR" name="markahKT32_MR" autocapitalize="off" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="1" id="markahKT32_MR_PUN" name="markahKT32_MR_PUN"></td>
                            <td>
                                <span>&#183; Katalog bahan</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4">
                                <input  id="formFileSm" type="file">                                
                            </td>
                        </tr>

                        <!--KT4-->
                        <tr class="pg-2" align="center">
                            <td>KT4</td>
                            <td>OTTV & RTTV</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>5</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="5" id="markahKT4_MR" name="markahKT4_MR" autocapitalize="off" /></td>
                            <td>5</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="5" id="markahKT4_MR_PUN" name="markahKT4_MR_PUN"></td>
                            <td>
                                <span>&#183; Pengiraan OTTV dan RTTV yang disahkan</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>
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
                            <td colspan="5"></td>
                            <td colspan="4"></td>
                        </tr>

                        <!--KT5.1-->
                        <tr class="pg-2" align="center">
                            <td>KT5.1</td>
                            <td>Zon Pencahayaan</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>3</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="3" id="markahKT51_MR" name="markahKT51_MR" autocapitalize="off" /></td>
                            <td>3</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="3" id="markahKT51_MR_PUN" name="markahKT51_MR_PUN"></td>
                            <td>
                                <span>&#183; Lukisan pelan lantai bagi litar lampu yang telah di zon selari dengan pencahayaan semulajadi</span><br>
                                <span>&#183; Lukisan pelan lantai bagi lokasi pemasangan sensor</span><br>
                                <span>&#183; Pengiraan jumlah kawasan yang dikawal oleh pengesan cahaya automatik</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>
                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}

                        </tr>

                        <!--KT5.2-->
                        <tr class="pg-2" align="center">
                            <td>KT5.2</td>
                            <td>Kawalan Pencahayaan (M)</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>6</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="6" id="markahKT52_MR" name="markahKT52_MR" autocapitalize="off" /></td>
                            <td>6</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="6" id="markahKT52_MR_PUN" name="markahKT52_MR_PUN"></td>
                            <td>
                                <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                            </td>
                            {{-- <td>
                                <span> &#183; Lukisan siap bina yang menunjukkan lokasi suis</span><br>
                                <span> &#183; Bukti bergambar</span><br>
                            </td> --}}
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>
                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}

                        </tr>

                        <!--KT5.3-->
                        <tr class="pg-2" align="center">
                            <td>KT5.3</td>
                            <td>Lighting Power Density (LPD)</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT53_MR" name="markahKT53_MR" autocapitalize="off" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="1" id="markahKT53_MR_PUN" name="markahKT53_MR_PUN"></td>
                            <td>
                                <span>&#183; Brosur/katalog produk lampu</span><br>
                                <span>&#183; Pengiraan dan jadual LPD (kaedah manual atau simulasi) bagi setiap ruang</span><br>
                                <span>&#183; Lukisan pelan elektrik yang menunjukkan bilangan dan jenis lampu</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                        <!--KT6--><!--No input-->
                        <tr class="pg-2" align="center">
                            <td>KT6</td>
                            <td>Sistem Penyaman udara dan pengudaraan mekanikal (ACMV)</td>
                            <td colspan="6">
                                     
                            </td>
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

                        <!--KT6.1-->
                        <tr class="pg-2" align="center">
                            <td>KT6.1</td>
                            <td>Coefficient of Performance (COP)</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT61_MR" name="markahKT61_MR" autocapitalize="off" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="1" id="markahKT61_MR_PUN" name="markahKT61_MR_PUN"></td>
                            <td>
                                <span>&#183; Jadual peralatan (equipment schedule)</span><br>
                                <span>&#183; Pengiraan anggaran COP</span><br>
                                <span>&#183; Susun atur skematik ACMV</span><br>
                                <span>&#183; Brosur pembekal</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                        <!--KT6.2-->
                        <tr class="pg-2" align="center">
                            <td>KT6.2</td>
                            <td>Green Refrigerant</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT62_MR" name="markahKT62_MR" autocapitalize="off" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="1" id="markahKT62_MR_PUN" name="markahKT62_MR_PUN"></td>
                            <td>
                                <span>&#183; Equipment schedule</span><br>
                                <span>&#183; Skematik</span><br>
                                <span>&#183; Brosur pembekal</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                        <!--KT7-->
                        <tr class="pg-2" align="center">
                            <td>KT7</td>
                            <td>Penyusupan Udara</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>3</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="3" id="markahKT7_MR" name="markahKT7_MR" autocapitalize="off" /></td>
                            <td>3</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="3" id="markahKT7_MR_PUN" name="markahKT7_MR_PUN"></td>
                            <td>
                                <span>&#183; Rekabentuk awalan yang menunjukkan zon berhawa dingin</span><br>
                                <span>&#183; Jadual keperluan ruang (SOA)</span><br>
                                <span>&#183; Pelan susun atur menunjukkan ante-room, ruang berhawa dingin dan tidak berhawa dingin</span><br>
                                <span>&#183; Lukisan rekabentuk sistem penghawa dingin</span><br>

                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                        <!--KT8-->
                        <tr class="pg-2" align="center">
                            <td>KT8</td>
                            <td>Tenaga Boleh Baharu (TBB)</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>6</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="6" id="markahKT8_MR" name="markahKT8_MR" autocapitalize="off" /></td>
                            <td>6</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="6" id="markahKT8_MR_PUN" name="markahKT8_MR_PUN"></td>
                            <td>
                                <span>&#183; Mengemukakan lukisan rekabentuk sistem dan simulasi pengiraan
                                    bagi anggaran tenaga baharu yang boleh dihasilkan oleh sistem tersebut</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                         <!--KT9-->
                         <tr class="pg-2" align="center">
                            <td>KT9</td>
                            <td>Prestasi Penggunaan Tenaga</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>10</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="10" id="markahKT9_MR" name="markahKT9_MR" autocapitalize="off" /></td>
                            <td>10</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="10" id="markahKT9_MR_PUN" name="markahKT9_MR_PUN"></td>
                            <td>
                                <span>&#183; Laporan simulasi pengiraan pengurangan penggunaan tenaga</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}

                        </tr>

                         <!--KT10--><!--No input-->
                         <tr class="pg-2" align="center">
                            <td>KT10</td>
                            <td>Paparan dan kawalan</td>
                            <td colspan="6">        
                            </td>
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

                         <!--KT10.1-->
                         <tr class="pg-2" align="center">
                            <td>KT10.1</td>
                            <td>Pemasangan sub-meter digital</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>6</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="6" id="markahKT101_MR" name="markahKT101_MR" autocapitalize="off"/></td>
                            <td>5</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="5" id="markahKT101_MR_PUN" name="markahKT101_MR_PUN"></td>
                            <td>
                                <span>&#41; Baru</span><br>
                                <span>&#183; Single line drawing</span><br>
                                <span>&#183; Lukisan skematik</span><br>
                                <span>&#183; Brosur/katalog produk</span><br>
                                <span>&#41; Sedia ada</span><br>
                                <span>&#183; Bukti bergambar</span><br>
                                <span>&#183; Lukisan siap bina kedudukan sub-meter pada papan suis utama dan
                                    suis kecil, papan agihan bagi setiap servis yang &#8805; 100A (TCL)</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                         <!--KT10.2-->
                         <tr class="pg-2" align="center">
                            <td>KT10.2</td>
                            <td>Sistem Pengurusan Kawalan Tenaga</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>5</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="5" id="markahKT102_MR" name="markahKT102_MR" autocapitalize="off" /></td>
                            <td>5</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="5" id="markahKT102_MR_PUN" name="markahKT102_MR_PUN"></td>
                            <td>
                                <span>&#183; Input/Output (I/O) point</span><br>
                                <span>&#183; Gambar rajah litar</span><br>
                                <span>&#183; Brosur dan spesifikasi produk</span><br>

                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                         <!--KT10.3-->
                         <tr class="pg-2" align="center">
                            <td>KT10.3</td>
                            <td>Verifikasi sistem paparan dan kawalan</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT103_MR" name="markahKT103_MR" autocapitalize="off" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="1" id="markahKT103_MR_PUN" name="markahKT103_MR_PUN"></td>
                            <td>
                                <span>&#183; Mengemukakan Pelan Verifikasi</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                        <!--KT11-->
                        <tr class="pg-2" align="center">
                            <td>KT11</td>
                            <td>Pengujian dan pentauliahan</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT11_MR" name="markahKT11_MR" autocapitalize="off" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_KT_PUN()" class="MR_KT_PUN" type="number" min="0" max="1" id="markahKT11_MR_PUN" name="markahKT11_MR_PUN"></td>
                            <td>
                                <span>&#183; Pelan pengujian dan pentauliahan</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}

                        </tr>

                        <!--JUMLAH MARKAHKT-->
                        <tr class="pg-2" align="center">
                            <th colspan="6">Jumlah markah KT</th>
                            <td colspan="3">55</td>
                            <td><input id="totalMR_KT" type="number" min="0" max="55" autocapitalize="off" id="markahTOTAL_KT_MR" name="markahTOTAL_KT_MR"/></td>
                            <td>54</td>
                            <td><input id="totalMR_KT_PUN" type="number" min="0" max="54" autocapitalize="off" id="markahTOTAL_KT_MR_PUN" name="markahTOTAL_KT_MR_PUN"/></td>
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
                                <th colspan="2">Pembangunan Baru</th>
                                <th colspan="2">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
                                <th rowspan="2">Dokumen Pembuktian</th>
                                <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>

                            </tr>

                            <tr class="pg-3" align="center" style="background-color:#EB5500">
                                <th colspan="2">Markah</th>
                                <th colspan="2">Markah</th>
                            </tr>

                            <tr class="pg-3" align="center" style="background-color:#EB5500">
                                <th>MM</th>
                                <th>MR</th>
                                <th>MM</th>
                                <th>MR</th>
                                <th>Rekabentuk (Peringkat 2)</th>
                            </tr>

                            <tr class="pg-3" style="background-color:#EB5500">
                                <th>SB</th>
                                <th colspan="23">PENGURUSAN SUMBER DAN BAHAN</th>
                            </tr>
                        </thead>

                        <!--SB1--><!--PUN not available-->
                        <tr class="pg-3" align="center">
                            <td>SB1</td>
                            <td>Sistem Binaan Berindustri (IBS)</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>5</td>
                            <td><input onblur="findTotalMR_SB()" class="MR_SB" type="number" min="0" max="5" id="markahSB1_MR" name="markahSB1_MR" autocapitalize="off" /></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span>&#183; Cadangan sistem IBS oleh pembekal IBS berdaftar</span><br>
                                <span>&#183; Laporan Pengiraan Skor IBS</span><br>
                            </td>
                            <td colspan="5" colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}

                        </tr>

                        <!--SB2-->
                        <tr class="pg-3" align="center">
                            <td>SB2</td>
                            <td>Produk hijau</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>7</td>
                            <td><input onblur="findTotalMR_SB()" class="MR_SB" type="number" min="0" max="7" id="markahSB2_MR" name="markahSB2_MR" autocapitalize="off" /></td>
                            <td>7</td>
                            <td><input onblur="findTotalMR_SB_PUN()" class="MR_SB_PUN" type="number" min="0" max="7" id="markahSB2_MR_PUN" name="markahSB2_MR_PUN"></td>
                            <td>
                                <span>&#183; Sijil Pengesahan produk hijau</span><br>
                                <span>&#183; spesifikasi produk</span><br>
                                <span>&#183; Senarai permarkahan produk hijau berdasarkan GPSS</span><br>                    
                            </td>
                            <td colspan="5" colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                        <!--SB3-->
                        <tr class="pg-3" align="center">
                            <td>SB3</td>
                            <td>Pengurusan sisa semasa pembinaan</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>4</td>
                            <td><input onblur="findTotalMR_SB()" class="MR_SB" type="number" min="0" max="4" id="markahSB3_MR" name="markahSB3_MR" autocapitalize="off" /></td>
                            <td>4</td>
                            <td><input onblur="findTotalMR_SB_PUN()" class="MR_SB_PUN" type="number" min="0" max="4" id="markahSB3_MR_PUN" name="markahSB3_MR_PUN"></td>
                            <td>
                                <span>&#183; Pelan pengurusan sisa yang meliputi Buangan Terjadual
                                    dan Sisa Bahan Binaan</span><br>
                                <span>&#183; Lukisan yang menunjukkan ruang pengurusan sisa</span><br>
                                <span>&#183; Pelan tapak dengan kawasan simpanan sementara</span><br>
                            </td>
                            <td colspan="5" colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td>   --}}
                        </tr>

                        <!--SB4-->
                        <tr class="pg-3" align="center">
                            <td>SB4</td>
                            <td>3r-Semasa Operasi</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>4</td>
                            <td><input onblur="findTotalMR_SB()" class="MR_SB" type="number" min="0" max="4" id="markahSB4_MR" name="markahSB4_MR" autocapitalize="off" /></td>
                            <td>4</td>
                            <td><input onblur="findTotalMR_SB_PUN()" class="MR_SB_PUN" type="number" min="0" max="4" id="markahSB4_MR_PUN" name="markahSB4_MR_PUN"></td>
                            <td>
                                <span>&#183; Pelan pengurusan sisa domestik</span><br>
                                <span>&#183; Pelan kedudukan tong 3Rdi semua aras bangunan</span><br>
                                <span>&#183; Lokasi kebuk sampah</span><br>                    
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        <tr>

                            <!--Jumlah MarkahSB-->
                            <tr class="pg-3" align="center">
                                <th colspan="6">Jumlah markah SB</th>
                                <td colspan="3">20</td>
                                <td><input  id="totalMR_SB" type="number" autocapitalize="off" min="0" max="20" id="markahTOTAL_SB_MR" name="markahTOTAL_SB_MR"/></td>
                                <td>15</td>
                                <td><input id="totalMR_SB_PUN" type="number" min="0" max="15" id="markahTOTAL_SB_MR_PUN" name="markahTOTAL_SB_MR_PUN"></td>
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
                            <th colspan="2">Pembangunan Baru</th>
                            <th colspan="2">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
                            <th rowspan="2">Dokumen Pembuktian</th>
                            <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                            <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
                        </tr>

                        <tr class="pg-4" align="center" style="background-color:#EB5500">
                            <th colspan="2">Markah</th>
                            <th colspan="2">Markah</th>
                        </tr>
                    
                        <tr class="pg-4" align="center" style="background-color:#EB5500">
                            <th>MM</th>
                            <th>MR</th>
                            <th>MM</th>
                            <th>MR</th>
                            <th>Rekabentuk (Peringkat 2)</th>
                        </tr>

                        <tr class="pg-4" style="background-color:#EB5500">
                            <th>PA</th>
                            <th colspan="23">PENGURUSAN KECEKAPAN PENGGUNAAN AIR</th>
                        </tr>
                    </thead>

                        <!--PA1-->
                        <tr class="pg-4" align="center">
                            <td>PA1</td>
                            <td>Produk Kecekapan Air</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>3</td>
                            <td><input onblur="findTotalMR_PA()" class="MR_PA" type="number" min="0" max="3" id="markahPA1_MR" name="markahPA1_MR" autocapitalize="off" /></td>
                            <td>3</td>
                            <td><input onblur="findTotalMR_PA_PUN()" class="MR_PA_PUN" type="number" min="0" max="3" id="markahPA1_MR_PUN" name="markahPA1_MR_PUN"></td>
                            <td>
                                            <span>&#183; Katalog bahan dan sampai yang telah disahkan WELPS dan SPAN</span><br>
                                            <span>&#183; Pengiraan penjimatan</span><br>
                            </td>
                            <td colspan="5" colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                        <!--PA2-->
                        <tr class="pg-4" align="center">
                            <td>PA2</td>
                            <td>Penjimatan Penggunaan Air Dalam Bangunan</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>2</td>
                            <td><input onblur="findTotalMR_PA()" class="MR_PA" type="number" min="0" max="2" id="markahPA2_MR" name="markahPA2_MR" autocapitalize="off" /></td>
                            <td>2</td>
                            <td><input onblur="findTotalMR_PA_PUN()" class="MR_PA_PUN" type="number" min="0" max="2" id="markahPA2_MR_PUN" name="markahPA2_MR_PUN"></td>
                            <td>
                                <span>&#183; Katalog bahan dan sampai yang telah disahkan WELPS dan SPAN</span><br>
                                <span>&#183; Pengiraan</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                        <!--PA3-->
                        <tr class="pg-4" align="center">
                            <td rowspan="2">PA3</td>
                            <td>i. SPAH</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>4</td>
                            <td><input onblur="findTotalMR_PA()" class="MR_PA" type="number" min="0" max="4" id="markahPA3_MR" name="markahPA3_MR" autocapitalize="off" /></td>
                            <td>4</td>
                            <td><input onblur="findTotalMR_PA_PUN()" class="MR_PA_PUN" type="number" min="0" max="4" id="markahPA3_MR_PUN" name="markahPA3_MR_PUN"></td>
                            <td>
                                            <span>&#183; Katalog bahan dan sampai yang telah disahkan WELPS dan SPAN</span><br>
                                            <span>&#183; Pengiraan</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                        <tr class="pg-4" align="center">
                            <td>ii. Kitar Semula Air Sisa</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>5</td>
                            <td><input onblur="findTotalMR_PA()" class="MR_PA" type="number" min="0" max="5" id="markahPA32_MR" name="markahPA32_MR" autocapitalize="off" /></td>
                            <td>5</td>
                            <td><input onblur="findTotalMR_PA_PUN()" class="MR_PA_PUN" type="number" min="0" max="5" id="markahPA32_MR_PUN" name="markahPA32_MR_PUN"></td>
                            <td>
                                            <span>&#183; Laporan rekabentuk dan pengiraan SPAH atau
                                                sistem kitar semula air sisa</span><br>
                                            <span>&#183; Lukisan SPAH atau lukisan sistem kitar semula air sisa</span><br>
                                            <span>&#183; Bil air domestik</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                         <!--PA4-->
                         <tr class="pg-4" align="center">
                            <td>PA4</td>
                            <td>Sub-Meter Air</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>5</td>
                            <td><input onblur="findTotalMR_PA()" class="MR_PA" type="number" min="0" max="5" id="markahPA4_MR" name="markahPA4_MR" autocapitalize="off" /></td>
                            <td>5</td>
                            <td><input onblur="findTotalMR_PA_PUN()" class="MR_PA_PUN" type="number" min="0" max="5" id="markahPA4_MR_PUN" name="markahPA4_MR_PUN"></td>
                            <td>
                                <span>&#183; Pelan pemasangan sub-meter air</span><br>
                                <span>&#183; Lukisan skematik pemasangan sub-meter air</span><br>
                                <span>&#183; Brosur/katalog produk</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                         <!--PA5-->
                         <tr class="pg-4" align="center">
                            <td>PA5</td>
                            <td>Sistem Pengesan Kebocoran Air</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>3</td>
                            <td><input onblur="findTotalMR_PA()" class="MR_PA" type="number" min="0" max="3" id="markahPA5_MR" name="markahPA5_MR" autocapitalize="off" /></td>
                            <td>3</td>
                            <td><input onblur="findTotalMR_PA_PUN()" class="MR_PA_PUN" type="number" min="0" max="3" id="markahPA5_MR_PUN" name="markahPA5_MR_PUN"></td>
                            <td>
                                <span>&#183; Pelan pemasangan sistem pengesan kebocoran air</span><br>
                                <span>&#183; Lukisan skematik pemasangan sistem pengesan kebocoran air</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                        <!-- Jumlah MarkahPA-->
                        <tr class="pg-4" align="center">
                            <th colspan="6">Jumlah markah PA</th>
                            <td colspan="3">22</td>
                            <td><input  id="totalMR_PA" type="number" min="0" max="22" autocapitalize="off" id="markahTOTAL_PA_MR" name="markahTOTAL_PA_MR"/></td>
                            <td>22</td>
                            <td><input id="totalMR_PA_PUN" type="number" min="0" max="22" autocapitalize="off" id="markahTOTAL_PA_MR_PUN" name="markahTOTAL_PA_MR_PUN"></td>
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
                            <th colspan="2">Pembangunan Baru</th>
                            <th colspan="2">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
                            <th rowspan="2">Dokumen Pembuktian</th>
                            <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                            <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>

                        </tr>

                        <tr class="pg-5" align="center" style="background-color:#EB5500">
                            <th colspan="2">Markah</th>
                            <th colspan="2">Markah</th>
                        </tr>

                        <tr class="pg-5" align="center" style="background-color:#EB5500">
                            <th>MM</th>
                            <th>MR</th>
                            <th>MM</th>
                            <th>MR</th>
                            <th>Rekabentuk (Peringkat 2)</th>
                        </tr>

                        <tr class="pg-5" style="background-color:#EB5500">
                            <th>PD</th>
                            <th colspan="23">PENGURUSAN KUALITI PERSEKITARAN DALAMAN</th>
                        </tr>
                    </thead>

                    <!--PD1-->
                    <tr class="pg-5" align="center">
                        <td>PD1</td>
                        <td>Larangan merokok</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" id="markahPD1_MR" name="markahPD1_MR" type="number" min="0" max="1" autocapitalize="off" /></td>
                        <td>2</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="2" id="markahPD1_MR_PUN" name="markahPD1_MR_PUN"></td>
                        <td><span>&#183; Pelan susun atur lokasi papan tanda</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!--PD2--> <!--No input-->
                    <tr class="pg-5" align="center">
                        <td>PD2</td>
                        <td>Perancangan ruang</td>
                        <td colspan="6"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td colspan="5"></td>
                        <td colspan="4"></td>
                    </tr>

                     <!--PD2.1--><!--PUN not available-->
                     <tr class="pg-5" align="center">
                        <td>PD2.1</td>
                        <td>Lebar bangunan yang efektif &#40;no deep planning&#41;</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" id="markahPD21_MR" name="markahPD21_MR" type="number" min="0" max="1" autocapitalize="off" /></td>
                        <td></td>
                        <td></td>
                        <td>
                            <span>&#183; Pelan susun atur</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!--PD2.2-->
                    <tr class="pg-5" align="center">
                        <td>PD2.2</td>
                        <td>Susun atur ruang pejabat terbuka sepanjang permukaan fasad</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" id="markahPD22_MR" name="markahPD22_MR" type="number" min="0" max="1" autocapitalize="off"/></td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="1" id="markahPD22_MR_PUN" name="markahPD22_MR_PUN"></td>
                        <td><span>&#183; Rekabentuk awalan yang menunjukkan pembahagian zon antara ruang pejabat
                            terbuka dengan bilik-bilik</span><br>
                            <span>&#183; Pelan susun atur</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!--PD2.3-->
                    <tr class="pg-5" align="center">
                        <td>PD2.3</td>
                        <td>Dinding sesekat dalaman yang telus cahaya</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" id="markahPD23_MR" name="markahPD23_MR" type="number" min="0" max="1" autocapitalize="off" /></td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="1" id="markahPD23_MR_PUN" name="markahPD23_MR_PUN"></td>
                        <td>
                            <span>&#183; Pelan susunatur</span><br>
                            <span>&#183; Lukisan terperinci dinding sesekat berserta spesifikasi</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!--PD2.4-->
                    <tr class="pg-5" align="center">
                        <td>PD2.4</td>
                        <td>Ketinggian siling yang efektif</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" id="markahPD24_MR" name="markahPD24_MR" type="number" min="0" max="1" autocapitalize="off" /></td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="1" id="markahPD24_MR_PUN" name="markahPD24_MR_PUN"></td>
                        <td>
                                        <span>&#183; Lukisan keratan bangunan yang menunjukkan
                                            ukuran (lantai ke siling)</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!--PD2.5-->
                    <tr class="pg-5" align="center">
                        <td>PD2.5</td>
                        <td>Warna cerah di permukaan dinding dan siling</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" type="number" min="0" max="1"id="markahPD25_MR" name="markahPD25_MR" autocapitalize="off" /></td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="1" id="markahPD25_MR_PUN" name="markahPD25_MR_PUN"></td>
                        <td>
                                        <span>&#183; Katalog dan sampel menunjukkan warna yang dicadangkan</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!--PD3--> <!--No input-->
                    <tr class="pg-5" align="center">
                        <td>PD3</td>
                        <td>Kualiti Visual</td>
                        <td colspan="6"></td>
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
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>2</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" type="number" min="0" max="2" id="markahPD31_MR" name="markahPD31_MR" autocapitalize="off" /></td>
                        <td>2</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="2" id="markahPD31_MR_PUN" name="markahPD31_MR_PUN"></td>
                        <td>
                                        <span>&#183; Lukisan tampak dan jadual tingkap</span><br>
                                        <span>&#183; Pengiraan keluasan lantai yang menunjukkan
                                            30% daripada NLA yang menunjukkan nilai DF 1.0% - 3.5%</span><br>
                                        <span>&#183; Laporan simulasi (jika ada)</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!--PD3.2-->
                    <tr class="pg-5" align="center">
                        <td>PD3.2</td>
                        <td>Menggunakan rak cahaya (light shelves)</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>2</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" type="number" min="0" max="2" id="markahPD32_MR" name="markahPD32_MR" autocapitalize="off" /></td>
                        <td>2</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="2" id="markahPD32_MR_PUN" name="markahPD32_MR_PUN"></td>
                        <td>
                                        <span>&#183; Rekabentuk rak cahaya</span><br>
                                        <span>&#183; Lukisan terperinci</span><br>
                                        <span>&#183; Laporan simulasi, jika ada</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!--PD3.3-->
                    <tr class="pg-5" align="center">
                        <td>PD3.3</td>
                        <td>Kawalan Tahap Kesilauan</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" type="number" min="0" max="1" id="markahPD33_MR" name="markahPD33_MR" autocapitalize="off" /></td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="1" id="markahPD33_MR_PUN" name="markahPD33_MR_PUN"></td>
                        <td>
                                        <span>&#183; Katalog dan sampel menunjukkan bidai yang dicadangkan</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!--PD3.4-->
                    <tr class="pg-5" align="center">
                        <td>PD3.4</td>
                        <td>Akses visual kepada pandangan di luar</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" type="number" min="0" max="1" id="markahPD34_MR" name="markahPD34_MR" autocapitalize="off" /></td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="1" id="markahPD34_MR_PUN" name="markahPD34_MR_PUN"></td>
                        <td>
                                        <span>&#183; Pelan susuratur</span><br>
                                        <span>&#183; Rekabentuk awalan yang menunjukkan
                                            pembahagian ruang yang bebas halangan binaan kekal</span><br>
                                        <span>&#183; Lukisan terperinci dinding sesekat berserta spesifikasi</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4"> 
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!--PD3.5-->
                    <tr class="pg-5" align="center">
                        <td>PD3.5</td>
                        <td>Tahap Pencahayaan (bukan semulajadi) Bilik</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" id="markahPD35_MR" name="markahPD35_MR" type="number" min="0" max="1" autocapitalize="off" /></td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="1" id="markahPD35_MR_PUN" name="markahPD35_MR_PUN"></td>
                        <td>
                                        <span>&#183; Mengemukakan data tahap pencahayaan bagi
                                            setiap ruang dengan menggunakan kaedah pengiraan manual atau perisian simulasi</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
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

                    <!--PD4.1-->
                    <tr class="pg-5" align="center">
                        <td>PD4.1</td>
                        <td>Memaksimakan Kawasan Tanpa Keperluan Sistem Penyaman Udara</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" id="markahPD41_MR" name="markahPD41_MR" type="number" min="0" max="1" autocapitalize="off" /></td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="1" id="markahPD41_MR_PUN" name="markahPD41_MR_PUN"></td>
                        <td>
                                        <span>&#183; Mengemukakan lukisan pelan lantai yang menunjukkan
                                            ruang pengudaraan secara semulajadi</span><br>
                                        <span>&#183; Laporan simulasi, jika ada</span><br>
                                        <span>&#183; Pelan susun atur</span><br>

                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!--PD4.2-->
                    <tr class="pg-5" align="center">
                        <td>PD4.2</td>
                        <td>Prestasi Kualiti Udara Dalaman: ASHRAE 62.1:2007 & 129</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>2</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" id="markahPD42_MR" name="markahPD42_MR" type="number" min="0" max="2" autocapitalize="off" /></td>
                        <td>2</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="2" id="markahPD42_MR_PUN" name="markahPD42_MR_PUN"></td>
                        <td>
                                        <span>&#183; Mengemukakan lukisan pelan lantai yang menunjukkan
                                            ruang pengudaraan secara semulajadi</span><br>
                                        <span>&#183; Laporan simulasi, jika ada</span><br>
                                        <span>&#183; Pelan susun atur</span><br>

                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
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
                        <td colspan="5"></td>
                        <td colspan="4">
                        </td>
                    </tr>

                    <!--PD5.1-->
                    <tr class="pg-5" align="center">
                        <td>PD5.1</td>
                        <td>Rekabentuk Keselesaan Thermal: ASHRAE 55</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" id="markahPD51_MR" name="markahPD51_MR" type="number" min="0" max="1" autocapitalize="off" /></td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="1" id="markahPD51_MR_PUN" name="markahPD51_MR_PUN"></td>
                        <td>
                            <span>Laporan ringkas yang mengandungi:</span><br>
                            <span>&#183; Maklumat berkenaan kaedah yang digunakan untuk
                                mendapatkan keadaan keselesaan thermal bagi sesebuah projek</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!--PD5.2-->
                    <tr class="pg-5" align="center">
                        <td>PD5.2</td>
                        <td>Kawalan Sistem Pencahayaan & Pengudaraan (Pencahayaan)</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>2</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" id="markahPD52_MR" name="markahPD52_MR" type="number" min="0" max="2" autocapitalize="off" /></td>
                        <td>2</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="2" id="markahPD52_MR_PUN" name="markahPD52_MR_PUN"></td>
                        <td>
                            <span>&#183; Laporan strategi</span><br>
                            <span>&#183; Lukisan skematik dan pengiraan bagi perkara i &#41;</span><br>
                            <span>&#183; Lukisan skematik dan pengiraan bagi perkara ii &#41;</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
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
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!--PD6.1-->
                    <tr class="pg-5" align="center">
                        <td>PD6.1</td>
                        <td>Kawalan Paras Karbon Dioksida</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>3</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" id="markahPD61_MR" name="markahPD61_MR" type="number" min="0" max="3" autocapitalize="off" /></td>
                        <td>3</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="3" id="markahPD61_MR_PUN" name="markahPD61_MR_PUN"></td>
                         <td>
                            <span>&#183; Pelan pemasangan sistem pemantauan tahap CO2</span><br>
                            <span>&#183; Lukisan skematik pemasangan sistem pemantauan tahap CO2</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!--PD6.2--><!--PUN not available-->
                    <tr class="pg-5" align="center">
                        <td>PD6.2</td>
                        <td>Kualiti Persekitaran Semasa Pembinaan dan Sebelum diduduki</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>2</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" id="markahPD62_MR" name="markahPD62_MR" type="number" min="0" max="1" autocapitalize="off" /></td>
                        <td></td>
                        <td></td>
                        <td>
                            <span>&#183; Pelan pelaksanaan</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!--PD7-->
                    <tr class="pg-5" align="center">
                        <td>PD7</td>
                        <td>Keselesaan Akustik</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" id="markahPD7_MR" name="markahPD7_MR" type="number" min="0" max="1" autocapitalize="off" /></td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="1" id="markahPD7_MR_PUN" name="markahPD7_MR_PUN"></td>
                        <td>
                            <span>&#183; Laporan strategi rekabentuk untuk memastikan tahap bunyi dalaman
                                dikekalkan pada tahap yang ditetapkan</span><br>
                            <span>&#183; Pelan susun atur bangunan yang menunjukkan lokasi teras bangunan (core),
                                ruang laluan servis mekanikal/elektrikal</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!--PD8-->
                    <tr class="pg-5" align="center">
                        <td>PD8</td>
                        <td>Kualiti Udara Dalaman (IAQ)</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>3</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" type="number" min="0" max="3" id="markahPD8_MR" name="markahPD8_MR" autocapitalize="off" /></td>
                        <td>3</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="3" id="markahPD8_MR_PUN" name="markahPD8_MR_PUN"></td>
                        <td>
                                        <span>&#183; Katalog dan sijil pengesahan penarafan eco-label bahan</span><br>
                                        <span>&#183; Spesifikasi teknikal pembekal</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!--PD9-->
                    <tr class="pg-5" align="center">
                        <td>PD9</td>
                        <td>Pencegahan Kulapok (Mold)</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD()" class="MR_PD" id="markahPD9_MR" name="markahPD9_MR" type="number" min="0" max="1" autocapitalize="off" /></td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="1" id="markahPD9_MR_PUN" name="markahPD9_MR_PUN"></td>
                        <td>
                            <span>&#183; Laporan ringkas yang menggariskan strategi yang akan dilaksanakan
                                untuk memenuhi keperluan bagi pencegahan kulapok</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>


                    <!--PD10--><!--Baru not available-->
                    <tr class="pg-5" align="center">
                        <td>PD10</td>
                        <td>Kaji Selidik Keselesaan Penghuni</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td></td>
                        <td></td>
                        <td>0</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="0" id="markahPD10_MR_PUN" name="markahPD10_MR_PUN"></td>
                        <td> 
                            <span>&#183; Tidak berkaitan (TB)</span>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                    <!-- Jumlah MarkahPD-->
                    <tr class="pg-5" align="center">
                        <td colspan="6">Jumlah markah PD</td>
                        <td colspan="3">29</td>
                        <td><input  id="totalMR_PD" type="number" min="0" max="29" autocapitalize="off" id="markahTOTAL_PD_MR" name="markahTOTAL_PD_MR"/></td>
                        <td>27</td>
                        <td><input id="totalMR_PD_PUN" type="number" min="0" max="27" id="markahTOTAL_PD_MR_PUN" name="markahTOTAL_PD_MR_PUN"></td>
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
                            <th rowspan="3" colspan="6">Kategori bangunan</th>
                            <th colspan="2">Pembangunan Baru</th>
                            <th colspan="2">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
                            <th rowspan="2">Dokumen Pembuktian</th>
                            <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                            <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>

                        </tr>

                        <tr class="pg-6" align="center" style="background-color:#EB5500">
                            <th colspan="2">Markah</th>
                            <th colspan="2">Markah</th>
                        </tr>
                    
                        <tr class="pg-6" align="center" style="background-color:#EB5500">
                            <th>MM</th>
                            <th>MR</th>
                            <th>MM</th>
                            <th>MR</th>
                            <th>Rekabentuk (Peringkat 2)</th>
                        </tr>

                        <tr class="pg-6" style="background-color:#EB5500">
                            <th>FL</th>
                            <th colspan="21">PENGURUSAN FASILITI LESTARI</th>
                        </tr>
                    </thead>

                        <!--FL1--><!--Baru, PUN not available--><!--No Dokumen Pembuktian-->
                        <tr class="pg-6" align="center">
                            <td>FL1</td>
                            <td>Penarafan sedia ada</td>
                            <td colspan="6">   
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span>&#183; Tidak berkaitan (TB)</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
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

                        <!--FL2--><!--Baru, PUN not available--><!--No Dokumen Pembuktian--><!--No Ulasan/MaklumBalas-->
                        <tr class="pg-6" align="center">
                            <td>FL2</td>
                            <td>Pengurusan fasiliti bangunan</td>
                            <td colspan="6">     
                            </td>
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

                        <!--FL2.1--><!--Baru, PUN not available--><!--No Dokumen Pembuktian-->
                        <tr class="pg-6" align="center">
                            <td>FL2.1</td>
                            <td>Pengurusan data dan ruang</td>
                            <td colspan="6"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span>&#183; Tidak berkaitan (TB)</span><br>
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

                        <!--FL2.2--><!--Baru, PUN not available--><!--No Dokumen Pembuktian-->
                        <tr class="pg-6" align="center">
                            <td>FL2.2</td>
                            <td>Pengurusan sistem penyenggaraan</td>
                            <td colspan="6"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span>&#183; Tidak berkaitan (TB)</span><br>
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

                        <!--FL2.3--><!--Baru, PUN not available--><!--No Dokumen Pembuktian-->
                        <tr class="pg-6" align="center">
                            <td>FL2.3</td>
                            <td>Prestasi penggurusan</td>
                            <td colspan="6"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span>&#183; Tidak berkaitan (TB)</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
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

                        <!--FL3--><!--Baru, PUN not available--><!--No Dokumen Pembuktian--><!--No Ulasan/MaklumBalas-->
                        <tr class="pg-6" align="center">
                            <td>FL3</td>
                            <td>Penyenggaraan lestari</td>
                            <td colspan="6"></td>
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

                        <!--FL3.1-->
                        <tr class="pg-6" align="center">
                            <td>FL3.1</td>
                            <td>Ruang pejabat untuk pasukan penyenggaraan</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_FL()" class="MR_FL" type="number" min="0" max="1" id="markahFL31_MR" name="markahFL31_MR" autocapitalize="off" /></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_FL_PUN()" class="MR_FL_PUN" type="number" min="0" max="1" id="markahFL31_MR_PUN" name="markahFL31_MR_PUN"></td>
                            <td>
                                <span>&#183; Pelan susun atur yang menunjukkan ruang pejabat penyenggaraan</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                        <!--FL3.2--><!--Baru not available-->
                        <tr class="pg-6" align="center">
                            <td>FL3.2</td>
                            <td>Kontraktor pengurusan fasiliti (FM)</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td></td>
                            <td></td>
                            <td>0</td>
                            <td><input onblur="findTotalMR_FL_PUN()" class="MR_FL_PUN" type="number" min="0" max="0" id="markahFL32_MR_PUN" name="markahFL32_MR_PUN"></td>
                            <td>
                                <span>&#183; Tidak berkaitan (TB)</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                        <!--FL3.3-->
                        <tr class="pg-6" align="center">
                            <td>FL3.3</td>
                            <td>Pelan Pengurusan Fasiliti (FM)</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>2</td>
                            <td><input onblur="findTotalMR_FL()" class="MR_FL" type="number" min="0" max="2" id="markahFL33_MR" name="markahFL33_MR"autocapitalize="off" /></td>
                            <td>2</td>
                            <td><input onblur="findTotalMR_FL_PUN()" class="MR_FL_PUN" type="number" min="0" max="2" id="markahFL33_MR_PUN" name="markahFL33_MR_PUN"></td>
                            <td>
                                <span>&#183; Rangka Preventive Maintenance Plan</span><br>
                                <span>&#183; Surat Komitmen pemilik bangunan untuk menyediakan pelan
                                    strategi pengurusan aset</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                        <!--FL3.4-->
                        <tr class="pg-6" align="center">
                            <td>FL3.4</td>
                            <td>Manual Operasi dan Penyenggaraan Bangunan</td>
                            <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                            <td>2</td>
                            <td><input onblur="findTotalMR_FL()" class="MR_FL" type="number" min="0" max="2" id="markahFL34_MR" name="markahFL34_MR" autocapitalize="off" /></td>
                            <td>2</td>
                            <td><input onblur="findTotalMR_FL_PUN()" class="MR_FL_PUN" type="number" min="0" max="2" id="markahFL34_MR_PUN" name="markahFL34_MR_PUN"></td>
                            <td> 
                                <span>&#183; Surat Aku Janji pemilik bangunan untuk menyediakan manual pengguna</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                            <td colspan="4"><input  id="formFileSm" type="file"></td>

                            {{-- <td colspan="4">
                                <form class="form">
                                    <label for="form__input" class="form__label">
                                        <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                        <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                        <span id="custom-text">No file chosen, yet.</span>
                                    </label>
                                </form>
                            </td> --}}
                        </tr>

                        <!-- Jumlah MarkahFL-->
                        <tr class="pg-6" align="center">
                            <td colspan="6">Jumlah markah FL</td>
                            <td colspan="3">5</td>
                            <td><input  id="totalMR_FL" type="number" min="0" max="5" autocapitalize="off" id="markahTOTAL_FL_MR" name="markahTOTAL_FL_MR"/></td>
                            <td>5</td>
                            <td><input  id="totalMR_FL_PUN" type="number" min="0" max="5" autocapitalize="off" id="markahTOTAL_FL_MR_PUN" name="markahTOTAL_FL_MR_PUN"/></td>
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
                            <th colspan="2">Pembangunan Baru</th>
                            <th colspan="2">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
                            <th rowspan="2">Dokumen Pembuktian</th>
                            <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                            <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>

                        </tr>

                        <tr class="pg-7" align="center" style="background-color:#EB5500">
                            <th colspan="2">Markah</th>
                            <th colspan="2">Markah</th>
                        </tr>
                    
                        <tr class="pg-7" align="center" style="background-color:#EB5500">
                            <th>MM</th>
                            <th>MR</th>
                            <th>MM</th>
                            <th>MR</th>
                            <th>Rekabentuk (Peringkat 2)</th>
                        </tr>

                        <tr class="pg-7" style="background-color:#EB5500">
                            <th>IN</th>
                            <th colspan="23">INOVASI DALAM REKABENTUK</th>
                        </tr>
                    </thead>

                    <!--IN1-->
                    <tr class="pg-7" align="center">
                        <td>IN1</td>
                        <td>Reka Bentuk Inovasi</td>
                        <td colspan="6">{{$projeks->kategoriBangunan}}</td>
                        <td>6</td>
                        <td><input onblur="findTotalMR_IN()" class="MR_IN" type="number" min="0" max="6" id="markahIN1_MR" name="markahIN1_MR" autocapitalize="off" /></td>
                        <td>6</td>
                        <td><input onblur="findTotalMR_IN_PUN()" class="MR_IN_PUN" type="number" min="0" max="6" id="markahIN1_MR_PUN" name="markahIN1_MR_PUN" autocapitalize="off" /></td>
                        <td>
                        <span>&#183; Laporan cadangan inovasi</span><br>
                        <span>&#183; Laporan kajian Return of Investment</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input id="formFileSm" type="file"></td>

                        {{-- <td colspan="4">
                            <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form>
                        </td> --}}
                    </tr>

                        <!-- Jumlah MarkahIN-->
                        <tr class="pg-7" align="center">
                            <td colspan="6">Jumlah markah IN</td>
                            <td colspan="3">6</td>
                            <td><input  id="totalMR_IN" type="number" min="0" max="6" autocapitalize="off" id="markahTOTAL_IN_MR" name="markahTOTAL_IN_MR"/></td>
                            <td>6</td>
                            <td><input id="totalMR_IN_PUN" type="number" min="0" max="6" autocapitalize="off" id="markahTOTAL_IN_MR_PUN" name="markahTOTAL_IN_MR_PUN"/></td>
                            <td></td>
                            <td></td>
                        </tr> 
                </table>

                
                <div class="mt-3 text-center pg-7">
                <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                    title="Simpan" type="submit">Simpan</button>
                </div>
            </div>          <!--Scrollbar-->

        </form> <!--Form Markah-->
        {{-- </div> <!--Scrollbar--> --}}
         <!--Button Simpan (TOOLTIPS)-->
                <!--Page 1-->
                <div class="mt-3 text-center">
                    <button class="btn btn-primary pg-1" data-toggle="tooltip" data-placement="bottom" 
                    title="Seterusnya" onclick="button2()" type="submit">Seterusnya</button>
                </div>

                <!--Page 2-->
                <div class="mt-3 text-center pg-2">
                    <button class="btn btn-secondary pg-2" data-toggle="tooltip" data-placement="bottom" 
                    title="Kembali" onclick="button1()" type="submit">Kembali</button>
                    <button class="btn btn-primary pg-2" data-toggle="tooltip" data-placement="bottom" 
                    title="Seterusnya" onclick="button3()" type="submit">Seterusnya</button>
                </div>

                <!--Page 3-->
                <div class="mt-3 text-center pg-3">
                    <button class="btn btn-secondary pg-3" data-toggle="tooltip" data-placement="bottom" 
                    title="Kembali" onclick="button2()" type="submit">Kembali</button>
                    <button class="btn btn-primary pg-3" data-toggle="tooltip" data-placement="bottom" 
                    title="Seterusnya" onclick="button4()" type="submit">Seterusnya</button>
                </div>

                <!--Page 4-->
                <div class="mt-3 text-center pg-4">
                    <button class="btn btn-secondary pg-4" data-toggle="tooltip" data-placement="bottom" 
                    title="Kembali" onclick="button3()" type="submit">Kembali</button>
                    <button class="btn btn-primary pg-4" data-toggle="tooltip" data-placement="bottom" 
                    title="Seterusnya" onclick="button5()" type="submit">Seterusnya</button>
                </div>

                <!--Page 5-->
                <div class="mt-3 text-center pg-5">
                    <button class="btn btn-secondary pg-5" data-toggle="tooltip" data-placement="bottom" 
                    title="Kembali" onclick="button4()" type="submit">Kembali</button>
                    <button class="btn btn-primary pg-5" data-toggle="tooltip" data-placement="bottom" 
                    title="Seterusnya" onclick="button6()" type="submit">Seterusnya</button>
                </div>

                <!--Page 6-->
                <div class="mt-3 text-center pg-6">
                    <button class="btn btn-secondary pg-6" data-toggle="tooltip" data-placement="bottom" 
                    title="Kembali" onclick="button5()" type="submit">Kembali</button>
                    <button class="btn btn-primary pg-6" data-toggle="tooltip" data-placement="bottom" 
                    title="Seterusnya" onclick="button7()" type="submit">Seterusnya</button>
                </div>

                <!--Page 7-->
                <div class="mt-3 text-center pg-7">
                    <button class="btn btn-secondary pg-7" data-toggle="tooltip" data-placement="bottom" 
                    title="Kembali" onclick="button6()" type="submit">Kembali</button>
                </div>


    </div>
</div>


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


<!--MARKAH REKABENTUK (MR) CALCULATION-->
            <!--MR_TL : MARKAH REKABENTUK TL-->
            <!--MR_KT : MARKAH REKABENTUK KT-->
            <!--MR_SB : MARKAH REKABENTUK SB-->
            <!--MR_PA : MARKAH REKABENTUK PA-->
            <!--MR_PD : MARKAH REKABENTUK PD-->
            <!--MR_FL : MARKAH REKABENTUK FL-->
            <!--MR_IN : MARKAH REKABENTUK IN-->
            <script>
                function findTotalMR_TL(){
                    var totalMR_TL = document.getElementById('totalMR_TL');
                    var MR_TL = document.getElementsByClassName('MR_TL');
                    var sumMR_TL = 0;

                    for( var i = 0; i < MR_TL.length; i++ ){
                        sumMR_TL += Number(MR_TL[i].value);

                    //display the total of inputs
                    totalMR_TL.value = sumMR_TL;
                }
                    document.getElementById('totalMR_TL').value = sumMR_TL;
                }

                function findTotalMR_KT(){
                    var totalMR_KT = document.getElementById('totalMR_KT');
                    var MR_KT = document.getElementsByClassName('MR_KT');
                    var sumMR_KT = 0;

                    for( var i = 0; i < MR_KT.length; i++ ){
                        sumMR_KT += Number(MR_KT[i].value);

                    //display the total of inputs
                    totalMR_KT.value = sumMR_KT;
                    }
                    document.getElementById('totalMR_KT').value = sumMR_KT;
                }

                function findTotalMR_SB(){
                    var totalMR_SB = document.getElementById('totalMR_SB');
                    var MR_SB = document.getElementsByClassName('MR_SB');
                    var sumMR_SB = 0;

                    for( var i = 0; i < MR_SB.length; i++ ){
                        sumMR_SB += Number(MR_SB[i].value);

                    //display the total of inputs
                    totalMR_SB.value = sumMR_SB;
                    }
                    document.getElementById('totalMR_SB').value = sumMR_SB;
                }

                function findTotalMR_PA(){
                    var totalMR_PA = document.getElementById('totalMR_PA');
                    var MR_PA = document.getElementsByClassName('MR_PA');
                    var sumMR_PA = 0;

                    for( var i = 0; i < MR_PA.length; i++ ){
                        sumMR_PA += Number(MR_PA[i].value);

                    //display the total of inputs
                    totalMR_PA.value = sumMR_PA;
                    }
                    document.getElementById('totalMR_PA').value = sumMR_PA;
                }

                function findTotalMR_PD(){
                    var totalMR_PD = document.getElementById('totalMR_PD');
                    var MR_PD = document.getElementsByClassName('MR_PD');
                    var sumMR_PD = 0;

                    for( var i = 0; i < MR_PD.length; i++ ){
                        sumMR_PD += Number(MR_PD[i].value);

                    //display the total of inputs
                    totalMR_PD.value = sumMR_PD;
                    }
                    document.getElementById('totalMR_PD').value = sumMR_PD;
                }

                function findTotalMR_FL(){
                    var totalMR_FL = document.getElementById('totalMR_FL');
                    var MR_FL = document.getElementsByClassName('MR_FL');
                    var sumMR_FL = 0;

                    for( var i = 0; i < MR_FL.length; i++ ){
                        sumMR_FL += Number(MR_FL[i].value);

                    //display the total of inputs
                    totalMR_FL.value = sumMR_FL;
                    }
                    document.getElementById('totalMR_FL').value = sumMR_FL;
                }

                function findTotalMR_IN(){
                    var totalMR_IN = document.getElementById('totalMR_IN');
                    var MR_IN = document.getElementsByClassName('MR_IN');
                    var sumMR_IN = 0;

                    for( var i = 0; i < MR_IN.length; i++ ){
                        sumMR_IN += Number(MR_IN[i].value);

                    //display the total of inputs
                    totalMR_IN.value = sumMR_IN;
                    }
                    document.getElementById('totalMR_IN').value = sumMR_IN;
                }

                function findTotalMR(){
                    var TL = totalMR_TL.value || 0;
                    var KT = totalMR_KT.value || 0;
                    var SB = totalMR_SB.value || 0;
                    var PA = totalMR_PA.value || 0;
                    var PD = totalMR_PD.value || 0;
                    var FL = totalMR_FL.value || 0;
                    var IN = totalMR_IN.value || 0;
                    document.getElementById('totalMR').value = Number(TL) + Number(KT) + Number(SB) 
                    + Number(PA) + Number(PD) + Number(FL) + Number(IN);
                    // document.getElementById('totalMR').value = Number(TL);
                }

                document.addEventListener('keyup', function(){
                    findTotalMR_TL();
                    findTotalMR_KT();
                    findTotalMR_SB();
                    findTotalMR_PA();
                    findTotalMR_PD();
                    findTotalMR_FL();
                    findTotalMR_IN();
                    findTotalMR();
                });
            </script>



@endsection
