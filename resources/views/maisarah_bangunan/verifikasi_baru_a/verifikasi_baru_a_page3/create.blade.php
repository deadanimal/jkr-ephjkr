@extends('layouts.base')

@section('content')

<div class="header">
    <b class="paparan-senarai-projek">> Penilaian</b>

        <hr class="line-6">

<div class="container-fluid">
    <div class="card-body">
        <div class="table-responsive scrollbar">
                <form action="/maisarah_bangunan/simpan_skor_verifikasi" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    
                   <!--------------------------------------- MarkahSB ---------------------------------------->
                   <table id="example" class="table table-bordered line-table display">

                    <thead class="text-white">
                        <tr class="pg-3" align="center" style="background-color:#EB5500">
                            <th rowspan="3">Kod</th>
                            <th rowspan="3">Kriteria</th>
                            <th rowspan="3" colspan="6">Kategori bangunan</th>
                            <th colspan="4">Pembangunan Baru</th>
                            <th rowspan="2">Dokumen Pembuktian</th>
                            <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                            <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
                        </tr>

                        <tr class="pg-3" align="center" style="background-color:#EB5500">
                            <th colspan="4">Markah</th>
                        </tr>

                        <tr class="pg-3" align="center" style="background-color:#EB5500">
                            <th>MM</th>
                            <th>MR</th>
                            <th>MMV</th>
                            <th>MV</th>
                            <th>Verifikasi (Peringkat 3)</th>
                        </tr>

                        <tr class="pg-3" style="background-color:#EB5500">
                            <th>SB</th>
                            <th colspan="23">PENGURUSAN SUMBER DAN BAHAN</th>
                        </tr>
                    </thead>

                    <!--SB1--><!--Baru dan PUN shj-->
                    <tr class="pg-3" align="center">
                        <td>SB1</td>
                        <td>Sistem Binaan Berindustri (IBS)</td>
                        <td colspan="6"></td>
                        <td>5</td>
                        <td></td>
                        <td>5</td>
                        <td><input onblur="findTotalMMV_SB()" class="MMV_SB" type="number" min="0" max="7" autocapitalize="off" id="markahSB1_MMV" name="markahSB1_MMV" required/></td>
                        <td>
                            <span>&#183; Lukisan pembinaan IBS</span><br>
                            <span>&#183; Lukisan siap bina</span><br>      
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file">

                            {{-- <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form> --}}
                        </td>
                    </tr>

                    <!--SB2--><!--Baru dan PUN shj-->
                    <tr class="pg-3" align="center">
                        <td>SB2</td>
                        <td>Produk hijau</td>
                        <td colspan="6"></td>
                        <td>7</td>
                        <td></td>
                        <td>7</td>
                        <td><input onblur="findTotalMMV_SB()" class="MMV_SB" type="number" min="0" max="7" autocapitalize="off" id="markahSB2_MMV" name="markahSB2_MMV" required/></td>
                        <td>
                            <span>&#183; Brosur pembekal</span><br>
                            <span>&#183; Bukti bergambar</span><br>
                            <span>&#183; Borang pengiraan skor GPSS</span><br>
                        </td>
                        <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                        <td colspan="4"><input  id="formFileSm" type="file">

                            {{-- <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form> --}}
                        </td>
                    </tr>

                    <!--SB3--><!--Baru dan PUN shj-->
                    <tr class="pg-3" align="center">
                        <td>SB3</td>
                        <td>Pengurusan sisa semasa pembinaan</td>
                        <td colspan="6"></td>
                        <td>4</td>
                        <td></td>
                        <td>4</td>
                        <td><input onblur="findTotalMMV_SB()" class="MMV_SB" type="number" min="0" max="7" autocapitalize="off" id="markahSB3_MMV" name="markahSB3_MMV" required/></td>
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
                        <td colspan="4"><input  id="formFileSm" type="file">

                            {{-- <form class="form">
                                <label for="form__input" class="form__label">
                                    <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                    <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                    <span id="custom-text">No file chosen, yet.</span>
                                </label>
                            </form> --}}
                        </td>        
                    </tr>

                    <!--SB4-->
                    <tr class="pg-3" align="center">
                        <td>SB4</td>
                        <td>3r-Semasa Operasi</td>
                        <td colspan="6"></td>
                        <td>4</td>
                        <td></td>
                        <td>4</td>
                        <td><input onblur="findTotalMMV_SB()" class="MMV_SB" type="number" min="0" max="4" autocapitalize="off" id="markahSB4_MMV" name="markahSB4_MMV" required/></td>
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
                            <td></td>
                            <td>20</td>
                            <td><input id="totalMMV_SB" type="number" min="0" max="20" id="markahTOTAL_SB_MMV" name="markahTOTAL_SB_MMV"></td>
                        </tr>  
            </table>
                
                    <div class="mb-3 mt-3 text-center">
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <a href="/maisarah_bangunan/verifikasi_baru_a_page4" type="button" class="btn btn-secondary">Seterusnya</a> 
                    </div>


                
                </form> <!--Form Markah-->
            </div> <!--Scrollbar--> 
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
@endsection
