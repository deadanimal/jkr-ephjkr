@extends('layouts.base')

@section('content')

<div class="header">
    <b class="paparan-senarai-projek">> Penilaian</b>

        <hr class="line-6">

<div class="container-fluid">
    <div class="card-body">
        <div class="table-responsive scrollbar">
                <form action="/maisarah_bangunan/simpan_skor_rekabentuk" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <!--------------------------------------- MarkahTL ---------------------------------------->

                    <table id="example" class="table table-bordered line-table display">
                        <thead class="text-white">
                            <tr class="pg-1" align="center" style="background-color:#EB5500">
                                <th rowspan="3">Kod</th>
                                <th rowspan="3">Kriteria</th>
                                <th rowspan="3" colspan="6">Kategori bangunan</th>
                                <th colspan="2">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
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
                                <th colspan="21">PERANCANGAN & PENGURUSAN TAPAK LESTARI</th>
                            </tr>
                        </thead>
            
                            <!--TL1--><!--PUN DISABLED-->
                            <tr class="pg-1" align="center">
                                <td>TL1</td>
                                <td>Perancangan Tapak</td>
                                <td colspan="6"></td>
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
                                <td colspan="6"></td>
                                <td>3</td>
                                <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="3" id="markahTL2_MR_PUN" name="markahTL2_MR_PUN" required></td>
                                <td>
                                    <span>&#183; Sijil ISO 14001</span><br>
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
                                <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="3" id="markahTL3_MR_PUN" name="markahTL3_MR_PUN" required></td>
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
                                <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="2" id="markahTL32_MR_PUN" name="markahTL32_MR_PUN" required></td>
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
                                <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="1" id="markahTL4_MR_PUN" name="markahTL4_MR_PUN" required></td>
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
                                <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="1" id="markahTL5_MR_PUN" name="markahTL5_MR_PUN" required></td>
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
                                <td>1</td>
                                <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="1" id="markahTL6_MR_PUN" name="markahTL6_MR_PUN" required></td>
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

                            <!--TL8--> <!--NO INPUT-->
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
                                <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="3" id="markahTL81_MR_PUN" name="markahTL81_MR_PUN" required></td>
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
                                <td>2</td>
                                <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="2" autocapitalize="off" id="markahTL82_MR_PUN" name="markahTL82_MR_PUN" required/></td>
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
                                <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="1" id="markahTL83_MR_PUN" name="markahTL83_MR_PUN" required></td>
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
                                <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="1" id="markahTL84_MR_PUN" name="markahTL84_MR_PUN" required></td>
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
                                <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="2" id="markahTL85_MR_PUN" name="markahTL85_MR_PUN" required></td>
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
                                <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="1" id="markahTL91_MR_PUN" name="markahTL91_MR_PUN" required></td>
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
                                <td><input onblur="findTotalMR_TL_PUN()" class="MR_TL_PUN" type="number" min="0" max="3" id="markahTL92_MR_PUN" name="markahTL92_MR_PUN" required></td>
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

                            <!--JUMLAH MARKAHTL-->
                            <tr class="pg-1" align="center">
                                <th colspan="6">Jumlah markah TL</th>
                                <td colspan="3">24</td>
                                <td><input id="totalMR_TL_PUN" type="number" min="0" max="24" autocapitalize="off" name="markahTOTAL_TL_MR" id="markahTOTAL_TL_MR"></td>
                                <td colspan="9"></td>
                            </tr> 
                    </table>

        </div>      <!--Scrollbar-->

                
                    <div class="mb-3 mt-3 text-center">
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <a href="/maisarah_bangunan/pun_a_page2" type="button" class="btn btn-secondary">Seterusnya</a> 
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

            <!--MARKAH REKABENTUK (MR) PUN CALCULATION-->
            <!--MR_TL_PUN : MARKAH REKABENTUK TL-->
            <!--MR_KT_PUN : MARKAH REKABENTUK KT-->
            <!--MR_SB_PUN : MARKAH REKABENTUK SB-->
            <!--MR_PA_PUN : MARKAH REKABENTUK PA-->
            <!--MR_PD_PUN : MARKAH REKABENTUK PD-->
            <!--MR_FL_PUN : MARKAH REKABENTUK FL-->
            <!--MR_IN_PUN : MARKAH REKABENTUK IN-->
            <script>
                function findTotalMR_TL_PUN(){
                    var totalMR_TL_PUN = document.getElementById('totalMR_TL_PUN');
                    var MR_TL_PUN = document.getElementsByClassName('MR_TL_PUN');
                    var sumMR_TL_PUN = 0;

                    for( var i = 0; i < MR_TL_PUN.length; i++ ){
                        sumMR_TL_PUN += Number(MR_TL_PUN[i].value);

                    //display the total of inputs
                    totalMR_TL_PUN.value = sumMR_TL_PUN;
                }
                    document.getElementById('totalMR_TL_PUN').value = sumMR_TL_PUN;
                }

                function findTotalMR_KT_PUN(){
                    var totalMR_KT_PUN = document.getElementById('totalMR_KT_PUN');
                    var MR_KT_PUN = document.getElementsByClassName('MR_KT_PUN');
                    var sumMR_KT_PUN = 0;

                    for( var i = 0; i < MR_KT_PUN.length; i++ ){
                        sumMR_KT_PUN += Number(MR_KT_PUN[i].value);

                    //display the total of inputs
                    totalMR_KT_PUN.value = sumMR_KT_PUN;
                    }
                    document.getElementById('totalMR_KT_PUN').value = sumMR_KT_PUN;
                }

                function findTotalMR_SB_PUN(){
                    var totalMR_SB_PUN = document.getElementById('totalMR_SB_PUN');
                    var MR_SB_PUN = document.getElementsByClassName('MR_SB_PUN');
                    var sumMR_SB_PUN = 0;

                    for( var i = 0; i < MR_SB_PUN.length; i++ ){
                        sumMR_SB_PUN += Number(MR_SB_PUN[i].value);

                    //display the total of inputs
                    totalMR_SB_PUN.value = sumMR_SB_PUN;
                    }
                    document.getElementById('totalMR_SB_PUN').value = sumMR_SB_PUN;
                }

                function findTotalMR_PA_PUN(){
                    var totalMR_PA_PUN = document.getElementById('totalMR_PA_PUN');
                    var MR_PA_PUN = document.getElementsByClassName('MR_PA_PUN');
                    var sumMR_PA_PUN = 0;

                    for( var i = 0; i < MR_PA_PUN.length; i++ ){
                        sumMR_PA_PUN += Number(MR_PA_PUN[i].value);

                    //display the total of inputs
                    totalMR_PA_PUN.value = sumMR_PA_PUN;
                    }
                    document.getElementById('totalMR_PA_PUN').value = sumMR_PA_PUN;
                }

                function findTotalMR_PD_PUN(){
                    var totalMR_PD_PUN = document.getElementById('totalMR_PD_PUN');
                    var MR_PD_PUN = document.getElementsByClassName('MR_PD_PUN');
                    var sumMR_PD_PUN = 0;

                    for( var i = 0; i < MR_PD_PUN.length; i++ ){
                        sumMR_PD_PUN += Number(MR_PD_PUN[i].value);

                    //display the total of inputs
                    totalMR_PD_PUN.value = sumMR_PD_PUN;
                    }
                    document.getElementById('totalMR_PD_PUN').value = sumMR_PD_PUN;
                }

                function findTotalMR_FL_PUN(){
                    var totalMR_FL_PUN = document.getElementById('totalMR_FL_PUN');
                    var MR_FL_PUN = document.getElementsByClassName('MR_FL_PUN');
                    var sumMR_FL_PUN = 0;

                    for( var i = 0; i < MR_FL_PUN.length; i++ ){
                        sumMR_FL_PUN += Number(MR_FL_PUN[i].value);

                    //display the total of inputs
                    totalMR_FL_PUN.value = sumMR_FL_PUN;
                    }
                    document.getElementById('totalMR_FL_PUN').value = sumMR_FL_PUN;
                }

                function findTotalMR_IN_PUN(){
                    var totalMR_IN_PUN = document.getElementById('totalMR_IN_PUN');
                    var MR_IN_PUN = document.getElementsByClassName('MR_IN_PUN');
                    var sumMR_IN_PUN = 0;

                    for( var i = 0; i < MR_IN_PUN.length; i++ ){
                        sumMR_IN_PUN += Number(MR_IN_PUN[i].value);

                    //display the total of inputs
                    totalMR_IN_PUN.value = sumMR_IN_PUN;
                    }
                    document.getElementById('totalMR_IN_PUN').value = sumMR_IN_PUN;
                }

                function findTotalMR_PUN(){
                    var TL_PUN = totalMR_TL_PUN.value || 0;
                    var KT_PUN = totalMR_KT_PUN.value || 0;
                    var SB_PUN = totalMR_SB_PUN.value || 0;
                    var PA_PUN = totalMR_PA_PUN.value || 0;
                    var PD_PUN = totalMR_PD_PUN.value || 0;
                    var FL_PUN = totalMR_FL_PUN.value || 0;
                    var IN_PUN = totalMR_IN_PUN.value || 0;
                    document.getElementById('totalMR_PUN').value = Number(TL_PUN) + Number(KT_PUN) + Number(SB_PUN) 
                    + Number(PA_PUN) + Number(PD_PUN) + Number(FL_PUN) + Number(IN_PUN);
                    // document.getElementById('totalMR').value = Number(TL);
                }

                document.addEventListener('keyup', function(){
                    findTotalMR_TL_PUN();
                    findTotalMR_KT_PUN();
                    findTotalMR_SB_PUN();
                    findTotalMR_PA_PUN();
                    findTotalMR_PD_PUN();
                    findTotalMR_FL_PUN();
                    findTotalMR_IN_PUN();
                    findTotalMR_PUN();
                });
            </script>
@endsection
