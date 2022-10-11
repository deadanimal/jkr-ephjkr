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

                    <!--------------------------------------- MarkahSB ---------------------------------------->
                    <table id="example" class="table table-bordered line-table display">

                        <thead class="text-white">
                            <tr class="pg-3" align="center" style="background-color:#EB5500">
                                <th rowspan="3">Kod</th>
                                <th rowspan="3">Kriteria</th>
                                <th rowspan="3" colspan="6">Kategori bangunan</th>
                                <th colspan="2">Pembangunan Baru</th>
                                <th rowspan="2">Dokumen Pembuktian</th>
                                <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>

                            </tr>

                            <tr class="pg-3" align="center" style="background-color:#EB5500">
                                <th colspan="2">Markah</th>
                            </tr>

                            <tr class="pg-3" align="center" style="background-color:#EB5500">
                                <th>MM</th>
                                <th>MR</th>
                                <th>Rekabentuk (Peringkat 2)</th>
                            </tr>

                            <tr class="pg-3" style="background-color:#EB5500">
                                <th>SB</th>
                                <th colspan="23">PENGURUSAN SUMBER DAN BAHAN</th>
                            </tr>
                        </thead>

                        <!--SB1-->
                        <tr class="pg-3" align="center">
                            <td>SB1</td>
                            <td>Sistem Binaan Berindustri (IBS)</td>
                            <td colspan="6"></td>
                            <td>5</td>
                            <td><input onblur="findTotalMR_SB()" class="MR_SB" type="number" min="0" max="5" id="markahSB1_MR" name="markahSB1_MR" autocapitalize="off" required/></td>
                            <td>
                                <span>&#183; Cadangan sistem IBS oleh pembekal IBS berdaftar</span><br>
                                <span>&#183; Laporan Pengiraan Skor IBS</span><br>
                            </td>
                            <td colspan="5" colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahSB1_ULASAN_PRB" name="markahSB1_ULASAN_PRB"></textarea></td>
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
                            <td colspan="6"></td>
                            <td>7</td>
                            <td><input onblur="findTotalMR_SB()" class="MR_SB" type="number" min="0" max="7" id="markahSB2_MR" name="markahSB2_MR" autocapitalize="off" required/></td>
                            <td>
                                <span>&#183; Sijil Pengesahan produk hijau</span><br>
                                <span>&#183; spesifikasi produk</span><br>
                                <span>&#183; Senarai permarkahan produk hijau berdasarkan GPSS</span><br>                    
                            </td>
                            <td colspan="5" colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahSB2_ULASAN_PRB" name="markahSB2_ULASAN_PRB"></textarea></td>
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
                            <td colspan="6"></td>
                            <td>4</td>
                            <td><input onblur="findTotalMR_SB()" class="MR_SB" type="number" min="0" max="4" id="markahSB3_MR" name="markahSB3_MR" autocapitalize="off" required/></td>
                            <td>
                                <span>&#183; Pelan pengurusan sisa yang meliputi Buangan Terjadual
                                    dan Sisa Bahan Binaan</span><br>
                                <span>&#183; Lukisan yang menunjukkan ruang pengurusan sisa</span><br>
                                <span>&#183; Pelan tapak dengan kawasan simpanan sementara</span><br>
                            </td>
                            <td colspan="5" colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahSB3_ULASAN_PRB" name="markahSB3_ULASAN_PRB"></textarea></td>
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
                            <td colspan="6"></td>
                            <td>4</td>
                            <td><input onblur="findTotalMR_SB()" class="MR_SB" type="number" min="0" max="4" id="markahSB4_MR" name="markahSB4_MR" autocapitalize="off" required/></td>
                            <td>
                                <span>&#183; Pelan pengurusan sisa domestik</span><br>
                                <span>&#183; Pelan kedudukan tong 3Rdi semua aras bangunan</span><br>
                                <span>&#183; Lokasi kebuk sampah</span><br>                    
                            </td>
                            <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahSB4_ULASAN_PRB" name="markahSB4_ULASAN_PRB"></textarea></td>
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
                                <td colspan="9"></td>
                            </tr>  
                </table>

        </div>      <!--Scrollbar-->

                
                    <div class="mb-3 mt-3 text-center">
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <a href="/maisarah_bangunan/baru_b_page4" type="button" class="btn btn-secondary">Seterusnya</a> 
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
