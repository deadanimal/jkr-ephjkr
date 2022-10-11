@extends('layouts.base')

@section('content')

<div class="header">
    <b class="paparan-senarai-projek">> Penilaian</b>

        <hr class="line-6">

<div class="container-fluid">
    <div class="card-body">
        <div class="table-responsive scrollbar">
                <form action="/maisarah_bangunan/simpan_skor_baru" method="post" enctype="multipart/form-data">
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
                                <th rowspan="2">Dokumen Pembuktian</th>
                                <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
                            </tr>
            
                            <tr class="pg-1" align="center" style="background-color:#EB5500">
                                <th colspan="2">Markah</th>
                            </tr>
                        
                            <tr class="pg-1" align="center" style="background-color:#EB5500">
                                <th>MM</th>
                                <th>MR</th>
                                <th>Rekabentuk (Peringkat 2)</th>
                            </tr>
            
                            <tr class="pg-1" style="background-color:#EB5500">
                                <th>TL</th>
                                <th colspan="23">PERANCANGAN & PENGURUSAN TAPAK LESTARI</th>
                            </tr>
                        </thead>
            
                            <!--TL1-->
                            <tr class="pg-1" align="center">
                                <td>TL1</td>
                                <td>Perancangan Tapak</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL1_MR" name="markahTL1_MR" required/></td>
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
                                <td colspan="6"></td>
                                <td>3</td>
                                <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="3" autocapitalize="off" id="markahTL2_MR" name="markahTL2_MR" required/></td>
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
                                <td rowspan="2" colspan="6"></td>                            
                                <td>3</td>
                                <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MR" name="markahTL3_MR" required/></td>
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
                                <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="2" autocapitalize="off" id="markahTL32_MR" name="markahTL32_MR" required/></td>
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
                                <td colspan="6"></td>
                                <td>1</td>
                                <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL4_MR" name="markahTL4_MR" required/></td>
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
                                <td colspan="6"></td>                            
                                <td>1</td>
                                <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL5_MR" name="markahTL5_MR" required/></td>
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
                                <td colspan="6"></td>                          
                                <td>3</td>
                                <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="3" autocapitalize="off" id="markahTL6_MR" name="markahTL6_MR" required/></td>
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
                                <td colspan="6"></td>                           
                                <td>2</td>
                                <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="2" autocapitalize="off" id="markahTL7_MR" name="markahTL7_MR" required/></td>
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
            
                            <!--TL8--><!--NO INPUT-->
                            <tr class="pg-1" align="center">
                                <td>TL8</td>
                                <td>Landskap strategik</td>
                                <td colspan="6"></td>
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
                                <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="3" autocapitalize="off" id="markahTL81_MR" name="markahTL81_MR" required/></td>
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
                                <td colspan="6"></td>                           
                                <td>1</td>
                                <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL82_MR" name="markahTL82_MR" required/></td>
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
                                <td colspan="6"></td>
                                <td>1</td>
                                <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL83_MR" name="markahTL83_MR" required/></td>
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
                                <td colspan="6"></td>                            
                                <td>1</td>
                                <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL84_MR" name="markahTL84_MR" required/></td>
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
                                <td colspan="6"></td>
                                <td>2</td>
                                <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="2" autocapitalize="off" id="markahTL85_MR" name="markahTL85_MR" required/></td>
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
                                <td colspan="4"></td>
                                <td colspan="5"></td>
                            </tr>

                            <!--TL9.1-->
                            <tr class="pg-1" align="center">
                                <td>TL9.1</td>
                                <td>Indeks Pantulan Suria (SRI) mengikut jenis & kecerunan bumbung
                                </td>
                                <td colspan="6"></td>                      
                                <td>1</td>
                                <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL91_MR" name="markahTL91_MR" required/></td>
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
                                <td colspan="6"></td>
                                <td>3</td>
                                <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="3" autocapitalize="off" id="markahTL92_MR" name="markahTL92_MR" required/></td>
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
                                <td colspan="6"></td>
                                <td>1</td>
                                <td><input onblur="findTotalMR_TL()" class="MR_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL10_MR" name="markahTL10_MR" required/></td>
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
                                <td colspan="9"></td>
                            </tr> 
                    </table>

        </div>      <!--Scrollbar-->

                
                    <div class="mb-3 mt-3 text-center">
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <a href="/maisarah_bangunan/baru_b_page2" type="button" class="btn btn-secondary">Seterusnya</a> 
                    </div>


                
                </form> <!--Form Markah--> 
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
