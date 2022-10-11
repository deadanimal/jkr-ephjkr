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

                    <!--------------------------------------- MarkahSB ---------------------------------------->
                    <table id="example" class="table table-bordered line-table display">

                        <thead class="text-white">
                            <tr class="pg-3" align="center" style="background-color:#EB5500">
                                <th rowspan="3">Kod</th>
                                <th rowspan="3">Kriteria</th>
                                <th rowspan="3" colspan="6">Kategori bangunan</th>
                                <th colspan="2">Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN)</th>
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
                                <th colspan="21">PENGURUSAN SUMBER DAN BAHAN</th>
                            </tr>
                        </thead>

                        <!--SB2-->
                        <tr class="pg-3" align="center">
                            <td>SB2</td>
                            <td>Produk hijau</td>
                            <td colspan="6"></td>
                            <td>7</td>
                            <td><input onblur="findTotalMR_SB_PUN()" class="MR_SB_PUN" type="number" min="0" max="7" id="markahSB2_MR_PUN" name="markahSB2_MR_PUN" required></td>
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
                            <td><input onblur="findTotalMR_SB_PUN()" class="MR_SB_PUN" type="number" min="0" max="4" id="markahSB3_MR_PUN" name="markahSB3_MR_PUN" required></td>
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
                            <td><input onblur="findTotalMR_SB_PUN()" class="MR_SB_PUN" type="number" min="0" max="4" id="markahSB4_MR_PUN" name="markahSB4_MR_PUN" required></td>
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
                                <td colspan="3">15</td>
                                <td><input id="totalMR_SB_PUN" type="number" min="0" max="15" id="markahTOTAL_SB_MR_PUN" name="markahTOTAL_SB_MR_PUN"></td>
                                <td colspan="9"></td>
                            </tr>  
                </table>

        </div>      <!--Scrollbar-->

                
                    <div class="mb-3 mt-3 text-center">
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <a href="/maisarah_bangunan/pun_a_page4" type="button" class="btn btn-secondary">Seterusnya</a> 
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
