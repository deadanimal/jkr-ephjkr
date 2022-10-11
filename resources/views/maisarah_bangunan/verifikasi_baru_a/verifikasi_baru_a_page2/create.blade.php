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

                     <!--------------------------------------- MarkahKT ---------------------------------------->
                     <table id="example" class="table table-bordered line-table display">
                        <thead class="text-white">
                            <tr class="pg-2" align="center" style="background-color:#EB5500">
                                <th rowspan="3">Kod</th>
                                <th rowspan="3">Kriteria</th>
                                <th rowspan="3" colspan="6">Kategori bangunan</th>
                                <th colspan="4">Pembangunan Baru</th>
                                <th rowspan="2">Dokumen Pembuktian</th>
                                <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
                            </tr>

                            <tr class="pg-2" align="center" style="background-color:#EB5500">
                                <th colspan="4">Markah</th>
                            </tr>
                        
                            <tr class="pg-2" align="center" style="background-color:#EB5500">
                                <th>MM</th>
                                <th>MR</th>
                                <th>MMV</th>
                                <th>MV</th>
                                <th>Verifikasi (Peringkat 3)</th>
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
                                <td colspan="6"></td>
                                <td>2</td>
                                <td></td>
                                <td>2</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="2" autocapitalize="off" id="markahKT1_MMV" name="markahKT1_MMV" required/></td>
                                <td>
                                    <span>&#183; Katalog bahan dan sampel yang diluluskan</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
                                    <span>&#183; Bukti bergambar</span>
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
                                <td></td>
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
                                <td colspan="6"></td>
                                <td>1</td>
                                <td></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT21_MMV" name="markahKT21_MMV" /></td>
                                <td>1</td>
                                <td></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT21_MMV_PUN" name="markahKT21_MMV_PUN" /></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT21_MMV_SEDIA" name="markahKT21_MMV_SEDIA" /></td>
                                <td>
                                    <span>&#183; Lukisan siap bina</span><br>
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
                            </tr>

                            <!--KT2.2-->
                            <tr class="pg-2" align="center">
                                <td>KT2.2</td>
                                <td>Meminimumkan bukaan pada fasad yang menghadap timur dan barat</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT22_MMV" name="markahKT22_MMV" /></td>
                                <td>1</td>
                                <td></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT22_MMV_PUN" name="markahKT22_MMV_PUN" /></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT22_MMV_SEDIA" name="markahKT22_MMV_SEDIA" /></td>
                                <td>
                                    <span> &#183; Lukisan siap bina</span><br>
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
                            </tr>

                            <!--KT3--><!--NO INPUT-->
                            <tr class="pg-2" align="center">
                                <td>KT3</td>
                                <td>Rekabentuk fasad</td>
                                <td colspan="6"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="5"></td>
                                <td colspan="4"></td>
                            </tr>

                            <!--KT3.1--><!--Baru | PUN-->
                            <tr class="pg-2" align="center">
                                <td>KT3.1</td>
                                <td>Dinding luar bangunan</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT31_MMV" name="markahKT31_MMV" /></td>
                                <td>1</td>
                                <td></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT31_MMV_PUN" name="markahKT31_MMV_PUN" /></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span>&#183; Katalog bahan yang diluluskan untuk pembinaan</span><br>
                                    <span>&#183; Pengiraan U-Value yang disahkan</span><br>
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
                            </tr>

                            <!--KT3.2-->
                            <tr class="pg-2" align="center">
                                <td>KT3.2</td>
                                <td>Pengadang Suria Luaran</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT32_MMV" name="markahKT32_MMV" /></td>
                                <td>1</td>
                                <td></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT32_MMV_PUN" name="markahKT32_MMV_PUN" /></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT32_MMV_SEDIA" name="markahKT32_MMV_SEDIA" /></td>
                                <td>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
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
                            </tr>

                            <!--KT4-->
                            <tr class="pg-2" align="center">
                                <td>KT4</td>
                                <td>OTTV & RTTV</td>
                                <td colspan="6"></td>
                                <td>5</td>
                                <td></td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="5" autocapitalize="off" id="markahKT4_MMV" name="markahKT4_MMV" /></td>
                                <td>5</td>
                                <td></td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="5" autocapitalize="off" id="markahKT4_MMV_PUN" name="markahKT4_MMV_PUN" /></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span>&#183; Pengiraan OTTV dan RTTV yang disahkan</span><br>
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="5"></td>
                                <td colspan="4"></td>
                            </tr>

                            <!--KT5.2-->
                            <tr class="pg-2" align="center">
                                <td>KT5.2</td>
                                <td>Kawalan Pencahayaan</td>
                                <td colspan="6"></td>
                                <td>6</td>
                                <td></td>
                                <td>6</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="6" autocapitalize="off" id="markahKT52_MMV" name="markahKT52_MMV" /></td>
                                <td>6</td>
                                <td></td>
                                <td>6</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="6" autocapitalize="off" id="markahKT52_MMV_PUN" name="markahKT52_MMV_PUN" /></td>
                                <td>6</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="6" autocapitalize="off" id="markahKT52_MMV_SEDIA" name="markahKT52_MMV_SEDIA" /></td>
                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Lukisan siap bina yang menunjukkan lokasi suis</span><br>
                                    <span> &#183; Bukti bergambar</span><br>
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
                            </tr>

                            <!--KT8-->
                            <tr class="pg-2" align="center">
                                <td>KT8</td>
                                <td>Tenaga Boleh Baharu (TBB)</td>
                                <td colspan="6"></td>
                                <td>6</td>
                                <td></td>
                                <td>6</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="6" autocapitalize="off" id="markahKT8_MMV" name="markahKT8_MMV" /></td>
                                <td>6</td>
                                <td></td>
                                <td>6</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="6" autocapitalize="off" id="markahKT8_MMV_PUN" name="markahKT8_MMV_PUN" /></td>
                                <td>6</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="6" autocapitalize="off" id="markahKT8_MMV_SEDIA" name="markahKT8_MMV_SEDIA" /></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Mengemukakan lukisan rekabentuk sistem dan simulasi pengiraan
                                        bagi anggaran tenaga baharu yang boleh dihasilkan oleh sistem tersebut</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Salinan lukisan siap bina dan laporan uji terima yang mematuhi kehendak rekabentuk</span><br>
                                    <span> &#183; Pengiraan penjanaan tenaga boleh baharu berbanding jumlah penggunaan tenaga tahunan bangunan</span><br>
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
                            </tr>

                            <!--KT9-->
                            <tr class="pg-2" align="center">
                                <td>KT9</td>
                                <td>Prestasi Penggunaan Tenaga</td>
                                <td colspan="6"></td>
                                <td>10</td>
                                <td></td>
                                <td>10</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="10" autocapitalize="off" id="markahKT9_MMV" name="markahKT9_MMV" /></td>
                                <td>10</td>
                                <td></td>
                                <td>10</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="10" autocapitalize="off" id="markahKT9_MMV_PUN" name="markahKT9_MMV_PUN" /></td>
                                <td>10</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="10" autocapitalize="off" id="markahKT9_MMV_SEDIA" name="markahKT9_MMV_SEDIA" /></td>
                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Pengiraan semula berdasarkan bacaan meter</span><br>
                                    <span> &#183; Bil elektrik 12 bulan (jika berkaitan)</span><br>
                                    <span> &#183; Lukisan siap bina yang berkaitan</span>
                                    <span> &#183; Pengiraan peratus pengurangan</span>
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
                            </tr>

                            <!--KT10--><!--No input-->
                            <tr class="pg-2" align="center">
                                <td>KT10</td>
                                <td>Paparan dan kawalan</td>
                                <td colspan="6"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    {{-- <span> &#183; Lukisan siap bina yang menunjukkan lokasi suis</span><br>
                                    <span> &#183; Bukti bergambar</span><br> --}}
                                </td>
                                <td colspan="5"></td>
                                <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td>
                            </tr>

                            <!--KT10.1-->
                            <tr class="pg-2" align="center">
                                <td>KT10.1</td>
                                <td>Pemasangan sub-meter digital</td>
                                <td colspan="6"></td>
                                <td>6</td>
                                <td></td>
                                <td>6</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="6" autocapitalize="off" id="markahKT101_MMV" name="markahKT101_MMV" /></td>
                                <td>5</td>
                                <td></td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="5" autocapitalize="off" id="markahKT101_MMV_PUN" name="markahKT101_MMV_PUN" /></td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="5" autocapitalize="off" id="markahKT101_MMV_SEDIA" name="markahKT101_MMV_SEDIA" /></td>
                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Lukisan siap bina yang menunjukkan lokasi suis</span><br>
                                    <span> &#183; Bukti bergambar</span><br>
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
                            </tr>

                            <!--KT10.2-->
                            <tr class="pg-2" align="center">
                                <td>KT10.2</td>
                                <td>Sistem Pengurusan Kawalan Tenaga</td>
                                <td colspan="6"></td>
                                <td>5</td>
                                <td></td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="5" autocapitalize="off" id="markahKT102_MMV" name="markahKT102_MMV" /></td>
                                <td>5</td>
                                <td></td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="5" autocapitalize="off" id="markahKT102_MMV_PUN" name="markahKT102_MMV_PUN" /></td>
                                <td>5</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="5" autocapitalize="off" id="markahKT102_MMV_SEDIA" name="markahKT102_MMV_SEDIA" /></td>
                                <td>
                                    <span> a &#41; Baru</span><br>
                                    <span> &#183; Lukisan siap bina</span><br>
                                    <span> &#183; Gambar rajah litar</span><br>
                                    <span> &#183; Rekod Pengujian dan Pentauliahan</span><br>
                                    <span> &#183; Sijil pengiktirafan MS ISO 50001</span><br>
                                    <span> b &#41; Sedia ada</span><br>
                                    <span> &#183; Lukisan siap bina</span><br>
                                    <span> &#183; Gambar rajah litar</span><br>
                                    <span> &#183; Laporan BEMS</span><br>
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
                            </tr>

                            <!--KT10.3-->
                            <tr class="pg-2" align="center">
                                <td>KT10.3</td>
                                <td>Verifikasi sistem paparan dan kawalan</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT103_MMV" name="markahKT103_MMV" /></td>
                                <td>1</td>
                                <td></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT103_MMV_PUN" name="markahKT103_MMV_PUN" /></td>
                                <td>1</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="1" autocapitalize="off" id="markahKT103_MMV_SEDIA" name="markahKT103_MMV_SEDIA" /></td>
                                {{-- <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td> --}}
                                <td>
                                    <span> &#183; Senarai penggunaan tenaga berdasarkan bil elektrik bulanan</span><br>
                                    <span> &#183; Laporan verifikasi dan pelan penambahbaikan</span><br>
                                    <span> &#183; Manual Operasi dan Penyenggaraan</span>
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
                            </tr>

                            <!--KT11-->
                            <tr class="pg-2" align="center">
                                <td>KT11</td>
                                <td>Pengujian dan pentauliahan</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td></td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahKT11_MMV" name="markahKT11_MMV" /></td>
                                <td>1</td>
                                <td></td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahKT11_MMV_PUN" name="markahKT11_MMV_PUN" /></td>
                                <td>3</td>
                                <td><input onblur="findTotalMV_TL()" class="sum_mv_tl" type="number" min="0" max="3" autocapitalize="off" id="markahKT11_MMV_SEDIA" name="markahKT11_MMV_SEDIA" /></td>
                                {{-- <td colspan="2">
                                    <span>&#183; Pelan pengujian dan pentauliahan</span><br>
                                </td> --}}
                                <td>
                                    <span>&#183; Dokumen lengkap pengujian dan pentauliahan yang telah disahkan</span><br>
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
                            </tr>

                            <!--JUMLAH MARKAHKT-->
                            <tr class="pg-2" align="center">
                                <td colspan="6">Jumlah markah KT</td>
                                <td colspan="3">55</td>
                                <td></td>
                                <td>57</td>
                                <td><input type="number" min="0" max="57" id="markahTOTAL_TL_MMV" name="markahTOTAL_TL_MMV"></td>
                                <td>54</td>
                                <td></td>
                                <td>56</td>
                                {{-- <td colspan="2"></td> --}}
                                <td><input type="number" min="0" max="56" id="markahTOTAL_TL_MMV_PUN"></td>
                                <td>48</td>
                                <td><input type="number" min="0" max="48" id="markahTOTAL_TL_MMV_SEDIA" name="markahTOTAL_TL_MMV_SEDIA"></td>
                                <td></td>
                                <td></td>
                            </tr> 
                            
                    </table>

                
                    <div class="mb-3 mt-3 text-center">
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <a href="/maisarah_bangunan/verifikasi_baru_a_page3" type="button" class="btn btn-secondary">Seterusnya</a> 
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
