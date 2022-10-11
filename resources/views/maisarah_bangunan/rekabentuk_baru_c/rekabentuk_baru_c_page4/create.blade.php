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

                   <!--------------------------------------- MarkahPA ---------------------------------------->
                   <table id="example" class="table table-bordered line-table display">
                    <thead class="text-white">
                        <tr class="pg-4" align="center" style="background-color:#EB5500">
                            <th rowspan="3">Kod</th>
                            <th rowspan="3">Kriteria</th>
                            <th rowspan="3" colspan="6">Kategori bangunan</th>
                            <th colspan="2">Pembangunan Baru</th>
                            <th rowspan="2">Dokumen Pembuktian</th>
                            <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                            <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
                        </tr>

                        <tr class="pg-4" align="center" style="background-color:#EB5500">
                            <th colspan="2">Markah</th>
                        </tr>
                    
                        <tr class="pg-4" align="center" style="background-color:#EB5500">
                            <th>MM</th>
                            <th>MR</th>
                            <th>Rekabentuk (Peringkat 2)</th>
                        </tr>

                        <tr class="pg-4" style="background-color:#EB5500">
                            <th>PA</th>
                            <th colspan="21">PENGURUSAN KECEKAPAN PENGGUNAAN AIR</th>
                        </tr>
                    </thead>

                        <!--PA1-->
                        <tr class="pg-4" align="center">
                            <td>PA1</td>
                            <td>Produk Kecekapan Air</td>
                            <td colspan="6"></td>
                            <td>3</td>
                            <td><input onblur="findTotalMR_PA()" class="MR_PA" type="number" min="0" max="3" id="markahPA1_MR" name="markahPA1_MR" autocapitalize="off" required/></td>
                            <td>
                                            <span>&#183; Katalog bahan dan sampai yang telah disahkan WELPS dan SPAN</span><br>
                                            <span>&#183; Pengiraan penjimatan</span><br>
                            </td>
                            <td colspan="5" colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahPA1_ULASAN_PRB" name="markahPA1_ULASAN_PRB"></textarea></td>
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
                            <td colspan="6"></td>
                            <td>2</td>
                            <td><input onblur="findTotalMR_PA()" class="MR_PA" type="number" min="0" max="2" id="markahPA2_MR" name="markahPA2_MR" autocapitalize="off" required/></td>
                            <td>
                                <span>&#183; Katalog bahan dan sampai yang telah disahkan WELPS dan SPAN</span><br>
                                <span>&#183; Pengiraan</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahPA2_ULASAN_PRB" name="markahPA2_ULASAN_PRB"></textarea></td>
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
                            <td colspan="6"></td>
                            <td>4</td>
                            <td><input onblur="findTotalMR_PA()" class="MR_PA" type="number" min="0" max="4" id="markahPA3_MR" name="markahPA3_MR" autocapitalize="off" required/></td>
                            <td>
                                            <span>&#183; Katalog bahan dan sampai yang telah disahkan WELPS dan SPAN</span><br>
                                            <span>&#183; Pengiraan</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahPA3_ULASAN_PRB" name="markahPA3_ULASAN_PRB"></textarea></td>
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
                            <td colspan="6"></td>
                            <td>5</td>
                            <td><input onblur="findTotalMR_PA()" class="MR_PA" type="number" min="0" max="5" id="markahPA32_MR" name="markahPA32_MR" autocapitalize="off" required/></td>
                            <td>
                                            <span>&#183; Laporan rekabentuk dan pengiraan SPAH atau
                                                sistem kitar semula air sisa</span><br>
                                            <span>&#183; Lukisan SPAH atau lukisan sistem kitar semula air sisa</span><br>
                                            <span>&#183; Bil air domestik</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahPA32_ULASAN_PRB" name="markahPA32_ULASAN_PRB"></textarea></td>
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
                            <td colspan="6"></td>
                            <td>5</td>
                            <td><input onblur="findTotalMR_PA()" class="MR_PA" type="number" min="0" max="5" id="markahPA4_MR" name="markahPA4_MR" autocapitalize="off" required/></td>
                            <td>
                                <span>&#183; Pelan pemasangan sub-meter air</span><br>
                                <span>&#183; Lukisan skematik pemasangan sub-meter air</span><br>
                                <span>&#183; Brosur/katalog produk</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahPA4_ULASAN_PRB" name="markahPA4_ULASAN_PRB"></textarea></td>
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
                            <td colspan="6"></td>
                            <td>3</td>
                            <td><input onblur="findTotalMR_PA()" class="MR_PA" type="number" min="0" max="3" id="markahPA5_MR" name="markahPA5_MR" autocapitalize="off" required/></td>
                            <td>
                                <span>&#183; Pelan pemasangan sistem pengesan kebocoran air</span><br>
                                <span>&#183; Lukisan skematik pemasangan sistem pengesan kebocoran air</span><br>
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahPA5_ULASAN_PRB" name="markahPA5_ULASAN_PRB"></textarea></td>
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
                            <td colspan="9"></td>
                        </tr> 

                </table>

        </div>      <!--Scrollbar-->

                
                    <div class="mb-3 mt-3 text-center">
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <a href="/maisarah_bangunan/baru_c_page5" type="button" class="btn btn-secondary">Seterusnya</a> 
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
