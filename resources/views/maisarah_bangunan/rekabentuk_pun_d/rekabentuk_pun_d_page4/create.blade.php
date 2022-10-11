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

               <!--------------------------------------- MarkahPA ---------------------------------------->
               <table id="example" class="table table-bordered line-table display">
                <thead class="text-white">
                    <tr class="pg-4" align="center" style="background-color:#EB5500">
                        <th rowspan="3">Kod</th>
                        <th rowspan="3">Kriteria</th>
                        <th rowspan="3" colspan="6">Kategori bangunan</th>
                        <th colspan="2">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
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
                        <td><input onblur="findTotalMR_PA_PUN()" class="MR_PA_PUN" type="number" min="0" max="3" id="markahPA1_MR_PUN" name="markahPA1_MR_PUN" required></td>
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
                        <td><input onblur="findTotalMR_PA_PUN()" class="MR_PA_PUN" type="number" min="0" max="2" id="markahPA2_MR_PUN" name="markahPA2_MR_PUN" required></td>
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
                        <td><input onblur="findTotalMR_PA_PUN()" class="MR_PA_PUN" type="number" min="0" max="4" id="markahPA3_MR_PUN" name="markahPA3_MR_PUN" required></td>
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
                        <td><input onblur="findTotalMR_PA_PUN()" class="MR_PA_PUN" type="number" min="0" max="5" id="markahPA32_MR_PUN" name="markahPA32_MR_PUN" required></td>
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
                        <td><input onblur="findTotalMR_PA_PUN()" class="MR_PA_PUN" type="number" min="0" max="5" id="markahPA4_MR_PUN" name="markahPA4_MR_PUN" required></td>
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
                        <td><input onblur="findTotalMR_PA_PUN()" class="MR_PA_PUN" type="number" min="0" max="3" id="markahPA5_MR_PUN" name="markahPA5_MR_PUN" required></td>
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
                        <td><input id="totalMR_PA_PUN" type="number" min="0" max="22" autocapitalize="off" id="markahTOTAL_PA_MR_PUN" name="markahTOTAL_PA_MR_PUN"></td>
                        <td colspan="9"></td>
                    </tr> 

            </table>

        </div>      <!--Scrollbar-->

                
                    <div class="mb-3 mt-3 text-center">
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <a href="/maisarah_bangunan/pun_d_page5" type="button" class="btn btn-secondary">Seterusnya</a> 
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
