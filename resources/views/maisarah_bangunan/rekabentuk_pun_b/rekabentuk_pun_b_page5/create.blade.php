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

                  <!--------------------------------------- MarkahPD ---------------------------------------->
                  <table id="example" class="table table-bordered line-table display">
                    <thead class="text-white">
                        <tr class="pg-5" align="center" style="background-color:#EB5500">
                            <th rowspan="3">Kod</th>
                            <th rowspan="3">Kriteria</th>
                            <th rowspan="3" colspan="6">Kategori bangunan</th>
                            <th colspan="2">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
                            <th rowspan="2">Dokumen Pembuktian</th>
                            <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                            <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>

                        </tr>

                        <tr class="pg-5" align="center" style="background-color:#EB5500">
                            <th colspan="2">Markah</th>
                        </tr>

                        <tr class="pg-5" align="center" style="background-color:#EB5500">
                            <th>MM</th>
                            <th>MR</th>
                            <th>Rekabentuk (Peringkat 2)</th>
                        </tr>

                        <tr class="pg-5" style="background-color:#EB5500">
                            <th>PD</th>
                            <th colspan="21">PENGURUSAN KUALITI PERSEKITARAN DALAMAN</th>
                        </tr>
                    </thead>

                    <!--PD2.4-->
                    <tr class="pg-5" align="center">
                        <td>PD2.4</td>
                        <td>Ketinggian siling yang efektif</td>
                        <td colspan="6"></td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="1" id="markahPD24_MR_PUN" name="markahPD24_MR_PUN" required></td>
                        <td>
                                        <span>&#183; Lukisan keratan bangunan yang menunjukkan
                                            ukuran (lantai ke siling)</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahPD24_ULASAN_PRB" name="markahPD24_ULASAN_PRB"></textarea></td>
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
                        <td colspan="6"></td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="1" id="markahPD25_MR_PUN" name="markahPD25_MR_PUN" required></td>
                        <td>
                                        <span>&#183; Katalog dan sampel menunjukkan warna yang dicadangkan</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahPD25_ULASAN_PRB" name="markahPD25_ULASAN_PRB"></textarea></td>
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

                    <!--PD3--> <!--NO INPUT-->
                    <tr class="pg-5" align="center">
                        <td>PD3</td>
                        <td>Kualiti Visual</td>
                        <td colspan="6"></td>
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
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="2" id="markahPD31_MR_PUN" name="markahPD31_MR_PUN" required></td>
                        <td>
                                        <span>&#183; Lukisan tampak dan jadual tingkap</span><br>
                                        <span>&#183; Pengiraan keluasan lantai yang menunjukkan
                                            30% daripada NLA yang menunjukkan nilai DF 1.0% - 3.5%</span><br>
                                        <span>&#183; Laporan simulasi (jika ada)</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahPD31_ULASAN_PRB" name="markahPD31_ULASAN_PRB"></textarea></td>
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
                        <td colspan="6"></td>
                        <td>2</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="2" id="markahPD32_MR_PUN" name="markahPD32_MR_PUN" required></td>
                        <td>
                                        <span>&#183; Rekabentuk rak cahaya</span><br>
                                        <span>&#183; Lukisan terperinci</span><br>
                                        <span>&#183; Laporan simulasi, jika ada</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahPD32_ULASAN_PRB" name="markahPD32_ULASAN_PRB"></textarea></td>
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
                        <td colspan="6"></td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="1" id="markahPD33_MR_PUN" name="markahPD33_MR_PUN" required></td>
                        <td>
                                        <span>&#183; Katalog dan sampel menunjukkan bidai yang dicadangkan</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahPD33_ULASAN_PRB" name="markahPD33_ULASAN_PRB"></textarea></td>
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
                        <td colspan="6"></td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="1" id="markahPD34_MR_PUN" name="markahPD34_MR_PUN" required></td>
                        <td>
                                        <span>&#183; Pelan susuratur</span><br>
                                        <span>&#183; Rekabentuk awalan yang menunjukkan
                                            pembahagian ruang yang bebas halangan binaan kekal</span><br>
                                        <span>&#183; Lukisan terperinci dinding sesekat berserta spesifikasi</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahPD34_ULASAN_PRB" name="markahPD34_ULASAN_PRB"></textarea></td>
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
                        <td colspan="6"></td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="1" id="markahPD35_MR_PUN" name="markahPD35_MR_PUN" required></td>
                        <td>
                                        <span>&#183; Mengemukakan data tahap pencahayaan bagi
                                            setiap ruang dengan menggunakan kaedah pengiraan manual atau perisian simulasi</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahPD35_ULASAN_PRB" name="markahPD35_ULASAN_PRB"></textarea></td>
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

                    <!--PD4--><!--NO INPUT-->
                    <tr class="pg-5" align="center">
                        <td>PD4</td>
                        <td>Prestasi Pengudaraan</td>
                        <td colspan="6"></td>
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
                        <td colspan="6"></td>
                        <td>1</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="1" id="markahPD41_MR_PUN" name="markahPD41_MR_PUN" required></td>
                        <td>
                                        <span>&#183; Mengemukakan lukisan pelan lantai yang menunjukkan
                                            ruang pengudaraan secara semulajadi</span><br>
                                        <span>&#183; Laporan simulasi, jika ada</span><br>
                                        <span>&#183; Pelan susun atur</span><br>

                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahPD41_ULASAN_PRB" name="markahPD41_ULASAN_PRB"></textarea></td>
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
                        <td colspan="6"></td>
                        <td>3</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="3" id="markahPD8_MR_PUN" name="markahPD8_MR_PUN" required></td>
                        <td>
                                        <span>&#183; Katalog dan sijil pengesahan penarafan eco-label bahan</span><br>
                                        <span>&#183; Spesifikasi teknikal pembekal</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahPD8_ULASAN_PRB" name="markahPD8_ULASAN_PRB"></textarea></td>
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

                    <!--PD10-->
                    <tr class="pg-5" align="center">
                        <td>PD10</td>
                        <td>Kaji Selidik Keselesaan Penghuni</td>
                        <td colspan="6"></td>
                        <td>0</td>
                        <td><input onblur="findTotalMR_PD_PUN()" class="MR_PD_PUN" type="number" min="0" max="0" id="markahPD10_MR_PUN" name="markahPD10_MR_PUN" required></td>
                        <td> 
                            <span>&#183; Tidak berkaitan (TB)</span>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahPD10_ULASAN_PRB" name="markahPD10_ULASAN_PRB"></textarea></td>
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
                        <td colspan="3">13</td>
                        <td><input id="totalMR_PD_PUN" type="number" min="0" max="13" id="markahTOTAL_PD_MR_PUN" name="markahTOTAL_PD_MR_PUN"></td>
                        <td colspan="9"></td>
                    </tr>   
                </table>

        </div>      <!--Scrollbar-->

                
                    <div class="mb-3 mt-3 text-center">
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <a href="/maisarah_bangunan/pun_b_page6" type="button" class="btn btn-secondary">Seterusnya</a> 
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
