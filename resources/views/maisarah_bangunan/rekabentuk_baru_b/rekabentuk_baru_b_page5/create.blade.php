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

                     <!--------------------------------------- MarkahPD ---------------------------------------->
                    <table id="example" class="table table-bordered line-table display">
                        <thead class="text-white">
                            <tr class="pg-5" align="center" style="background-color:#EB5500">
                                <th rowspan="3">Kod</th>
                                <th rowspan="3">Kriteria</th>
                                <th rowspan="3" colspan="6">Kategori bangunan</th>
                                <th colspan="2">Pembangunan Baru</th>
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
                                <th colspan="23">PENGURUSAN KUALITI PERSEKITARAN DALAMAN</th>
                            </tr>
                        </thead>

                        <!--PD2.4-->
                        <tr class="pg-5" align="center">
                            <td>PD2.4</td>
                            <td>Ketinggian siling yang efektif</td>
                            <td colspan="6"></td>
                            <td>1</td>
                            <td><input onblur="findTotalMR_PD()" class="MR_PD" id="markahPD24_MR" name="markahPD24_MR" type="number" min="0" max="1" autocapitalize="off" required/></td>
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
                            <td><input onblur="findTotalMR_PD()" class="MR_PD" type="number" min="0" max="1"id="markahPD25_MR" name="markahPD25_MR" autocapitalize="off" required/></td>
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
                            <td><input onblur="findTotalMR_PD()" class="MR_PD" type="number" min="0" max="2" id="markahPD31_MR" name="markahPD31_MR" required></td>
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
                            <td><input onblur="findTotalMR_PD()" class="MR_PD" type="number" min="0" max="2" id="markahPD32_MR" name="markahPD32_MR" autocapitalize="off" required/></td>
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
                            <td><input onblur="findTotalMR_PD()" class="MR_PD" type="number" min="0" max="1" id="markahPD33_MR" name="markahPD33_MR" autocapitalize="off" required/></td>
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
                            <td><input onblur="findTotalMR_PD()" class="MR_PD" type="number" min="0" max="1" id="markahPD34_MR" name="markahPD34_MR" autocapitalize="off" required/></td>
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
                            <td><input onblur="findTotalMR_PD()" class="MR_PD" id="markahPD35_MR" name="markahPD35_MR" type="number" min="0" max="1" autocapitalize="off" required/></td>
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
                            <td><input onblur="findTotalMR_PD()" class="MR_PD" type="number" min="0" max="1" id="markahPD41_MR" name="markahPD41_MR" required></td>
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
                            <td><input onblur="findTotalMR_PD()" class="MR_PD" type="number" min="0" max="3" id="markahPD8_MR" name="markahPD8_MR" autocapitalize="off" required/></td>
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

                        <!--PD10--><!--BARU DISABLED-->
                        <tr class="pg-5" align="center">
                            <td>PD10</td>
                            <td>Kaji Selidik Keselesaan Penghuni</td>
                            <td colspan="6"></td>
                            <td></td>
                            <td></td>
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
                            <td><input  id="totalMR_PD" type="number" min="0" max="13" autocapitalize="off" id="markahTOTAL_PD_MR" name="markahTOTAL_PD_MR"/></td>
                            <td colspan="9"></td>
                        </tr>   
                    </table>

        </div>      <!--Scrollbar-->

                
                    <div class="mb-3 mt-3 text-center">
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <a href="/maisarah_bangunan/baru_b_page6" type="button" class="btn btn-secondary">Seterusnya</a> 
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
