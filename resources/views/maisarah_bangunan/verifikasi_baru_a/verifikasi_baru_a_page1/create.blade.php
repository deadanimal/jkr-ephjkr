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

                    <!--------------------------------------- MarkahTL ---------------------------------------->

                    {{-- <table class="table table-bordered line-table" id="table"> --}}
                        <table id="example" class="table table-bordered line-table display">
                            <thead class="text-white">
                                <tr class="pg-1" align="center" style="background-color:#EB5500">
                                    <th rowspan="3">Kod</th>
                                    <th rowspan="3">Kriteria</th>
                                    <th rowspan="3" colspan="6">Kategori bangunan</th>
                                    <th colspan="4">Pembangunan Baru</th>
                                    <th rowspan="2">Dokumen Pembuktian</th>
                                    <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                    <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
    
                                </tr>
                
                                <tr class="pg-1" align="center" style="background-color:#EB5500">
                                    <th colspan="4">Markah</th>
                                </tr>
                            
                                <tr class="pg-1" align="center" style="background-color:#EB5500">
                                    <th>MM</th>
                                    <th>MR</th>
                                    <th>MMV</th>
                                    <th>MV</th>
                                    <th>Verifikasi (Peringkat 3)</th>
                
                                </tr>
                
                                <tr class="pg-1" style="background-color:#EB5500">
                                    <th>TL</th>
                                    <th colspan="23">PERANCANGAN & PENGURUSAN TAPAK LESTARI</th>
                                </tr>
                            </thead>
                
                                <!--TL1--><!--BARU SHJ-->
                                <tr class="pg-1" align="center">
                                    <td>TL1</td>
                                    <td>Perancangan Tapak</td>
                                    <td colspan="6"></td>
                                    <td>1</td>
                                    <td></td>
                                    <td>0</td>
                                    <td><input onblur="findTotalMMV_TL()" class="MMV_TL" type="number" min="0" max="0" autocapitalize="off" id="markahTL1_MMV" name="markahTL1_MMV" required/></td>
                                    <td>Tidak Berkenaan</td>
                                    <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
                                    <td colspan="4">
                                    <form class="form"><input  id="formFileSm" type="file">
                                        {{-- <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label> --}}
                                    </form>
                                    </td>
                    
                                </tr>
                
                                <!--TL2-->
                                <tr class="pg-1" align="center">
                                    <td>TL2</td>
                                    <td>Sistem Pengurusan Alam Sekitar (SPAS)</td>
                                    <td colspan="6"></td>
                                    <td>3</td>
                                    <td></td>
                                    <td>3</td>
                                    <td><input onblur="findTotalMMV_TL()" class="MMV_TL" type="number" min="0" max="3" autocapitalize="off" id="markahTL2_MMV" name="markahTL2_MMV" required/></td>
                                    <td>
                                        <span>&#183; Laporan Pelan Pengurusan Alam Sekitar</span><br>
                                        <span>&#183; Borang SPAS (Peringkat pembinaan)</span>
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
    
                                <!--TL3-->
                                <tr class="pg-1" align="center">
                                    <td rowspan="2">TL3</td>
                                    <td>i. Pemotongan dan Penambakan tanah</td>
                                    <td rowspan="2" colspan="6">
                                                                         
                                    </td>  
                                    <td>3</td>
                                    <td></td>
                                    <td>3</td>
                                    <td><input onblur="findTotalMMV_TL()" class="MMV_TL" type="number" min="0" max="3" autocapitalize="off" id="markahTL3_MMV" name="markahTL3_MMV" required/></td>
                                    <td>
                                        <span>&#183; Laporan kuantiti tanah yang diimport atau eksport</span><br>
                                        <span>&#183; Bukti bergambar</span><br>
                                        <span>&#183; Pengesahan kuantiti tanah potong/tambak sebenar oleh PD/SO 
                                            atau setaraf
                                        </span>
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
                
                                <tr class="pg-1" align="center">
                                    <td>ii. Mengekalkan Topografi Tanah</td>
                                    <td>2</td>
                                    <td></td>
                                    <td>2</td>
                                    <td><input onblur="findTotalMMV_TL()" class="MMV_TL" type="number" min="0" max="2" autocapitalize="off" id="markahTL32_MMV" name="markahTL32_MMV" required/></td>
                                    <td>
                                        <span>&#183; Bukti bergambar</span><br>
                                        <span>&#183; Pengesahan kuantiti tanah potong/tambak sebenar oleh PD/SO atau setaraf</span><br>
                                        <span>&#183; Pengesahan pelaksanaan ESCP di tapak</span>
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
                
                                <!--TL4-->
                                <tr class="pg-1" align="center">
                                    <td>TL4</td>
                                    <td>Pelan Kawalan Hakisan & Kelodak (ESCP)</td>
                                    <td colspan="6"></td>
                                    <td>1</td>
                                    <td></td>
                                    <td>1</td>
                                    <td><input onblur="findTotalMMV_TL()" class="MMV_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL4_MMV" name="markahTL4_MMV" required/></td>
                                    <td>
                                        <span>&#183; Pengesahan pelaksanaan ESCP di tapak</span><br>
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
                
                                <!--TL5--><!--Baru shj-->
                                <tr class="pg-1" align="center">
                                    <td>TL5</td>
                                    <td>Pemuliharaan dan Pemeliharaan Cerun</td>
                                    <td colspan="6"></td>
                                    <td>1</td>
                                    <td></td>
                                    <td>0</td>
                                    <td><input onblur="findTotalMMV_TL()" class="MMV_TL" type="number" min="0" max="0" autocapitalize="off" id="markahTL5_MMV" name="markahTL5_MMV" required/></td>
                                    <td>
                                        <span>Tidak Berkenaan</span><br>
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
    
                                <!--TL6-->
                                <tr class="pg-1" align="center">
                                    <td>TL6</td>
                                    <td>Pengurusan Air Larian Hujan</td>
                                    <td colspan="6"></td>
                                    <td>3</td>
                                    <td></td>
                                    <td>3</td>
                                    <td><input onblur="findTotalMMV_TL()" class="MMV_TL" type="number" min="0" max="3" autocapitalize="off" id="markahTL6_MMV" name="markahTL6_MMV" required/></td>
                                    <td>
                                        <span> &#40;a&#41; Baru</span><br>
                                        <span>&#183; Laporan sistem perparitan</span><br>
                                        <span>&#183; Bukti bergambar</span><br>
                                        <span> &#40;b&#41; Sedia ada</span><br>
                                        <span>&#183; Laporan penyenggaraan sistem perparitan berkala</span><br>
                                        <span>&#183; Bukti bergambar</span><br>
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
    
                                <!--TL8--><!--NO INPUT-->
                                <tr class="pg-1" align="center">
                                    <td>TL8</td>
                                    <td>Landskap strategik</td>
                                    <td colspan="6"></td>
                                    <td></td>
                                    <td></td>
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
                                    <td></td>
                                    <td>3</td>
                                    <td><input onblur="findTotalMMV_TL()" class="MMV_TL" type="number" min="0" max="3" autocapitalize="off" id="markahTL81_MMV" name="markahTL81_MMV" required/></td>
                                    <td>
                                        <span> &#40;a&#41; Lukisan siap bina landskap</span><br>
                                        <span>&#183; Bukti bergambar pokok tidak ditebang dan disenggara dengan baik</span><br>
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
                
                                <!--TL8.2-->
                                <tr class="pg-1" align="center">
                                    <td>TL8.2</td>
                                    <td>Menyediakan kawasan hijau</td>
                                    <td colspan="6"></td>
                                    <td>1</td>
                                    <td></td>
                                    <td>1</td>
                                    <td><input onblur="findTotalMMV_TL()" class="MMV_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL82_MMV" name="markahTL82_MMV" required/></td>
                                    <td>
                                        <span> &#40;a&#41; Pelan tapak siap bina yang telah disahkan oleh Arkitek Bertauliah</span><br>
                                        Nyatakan sekiranya ada perubahan
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
    
                                <!--TL8.3-->
                                <tr class="pg-1" align="center">
                                    <td>TL8.3</td>
                                    <td>Menyedia dan menyenggara penanaman pokok teduhan</td>
                                    <td colspan="6"></td>
                                    <td>1</td>
                                    <td></td>
                                    <td>1</td>
                                    <td><input onblur="findTotalMMV_TL()" class="MMV_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL83_MMV" name="markahTL83_MMV" required/></td>
                                    <td>
                                        <span> &#183; Pelan landskap siap bina</span><br>
                                        <span> &#183; Inventori pokok</span><br>
                                        <span> &#183; Bukti bergambar</span><br>
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
    
                                <!--TL8.4-->
                                <tr class="pg-1" align="center">
                                    <td>TL8.4</td>
                                    <td>Pemilihan bahan binaan siarkaki (walkway) yang mempunyai daya pantulan
                                        haba yang tinggi
                                    </td>
                                    <td colspan="6"></td>
                                    <td>1</td>
                                    <td></td>
                                    <td>1</td>
                                    <td><input onblur="findTotalMMV_TL()" class="MMV_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL84_MMV" name="markahTL84_MMV" required/></td>
                                    <td>
                                        <span> &#183; Bukti bergambar</span><br>
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
    
                                <!--TL8.5-->
                                <tr class="pg-1" align="center">
                                    <td>TL8.5</td>
                                    <td>Menyedia dan menyenggara sistem turapan berumput</td>
                                    <td colspan="6"></td>
                                    <td>2</td>
                                    <td></td>
                                    <td>2</td>
                                    <td><input onblur="findTotalMMV_TL()" class="MMV_TL" type="number" min="0" max="2" autocapitalize="off" id="markahTL85_MMV" name="markahTL85_MMV" required/></td>
                                    <td>
                                        <span> &#183; Lukisan siap bina</span><br>
                                        <span> &#183; Bukti bergambar</span><br>
                                    </td>
                                    <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"></textarea></td>
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
    
                                <!--TL9--><!--NO INPUT-->
                                <tr class="pg-1" align="center">
                                    <td>TL9</td>
                                    <td>Bumbung Hijau & Dinding Hijau</td>
                                    <td colspan="6"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td colspan="5"></td>
                                    <td colspan="4"></td>
                                </tr>
    
                                <!--TL9.1-->
                                <tr class="pg-1" align="center">
                                    <td>TL9.1</td>
                                    <td>Indeks Pantulan Suria (SRI) mengikut jenis & kecerunan bumbung
                                    </td>
                                    <td colspan="6"></td>
                                    <td>1</td>
                                    <td></td>
                                    <td>1</td>
                                    <td><input onblur="findTotalMMV_TL()" class="MMV_TL" type="number" min="0" max="1" autocapitalize="off" id="markahTL91_MMV" name="markahTL91_MMV" required/></td>
                                    <td>
                                        <span>&#183; Method statement yang telah disahkan oleh
                                            pegawai penguasa (SO)</span><br>
                                        <span>&#183; Bukti bergambar</span><br>
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
    
                                <!--TL9.2-->
                                <tr class="pg-1" align="center">
                                    <td>TL9.2</td>
                                    <td>Menggalakkan rekabentuk bumbung/dinding hijau</td>
                                    <td colspan="6"></td>
                                    <td>3</td>
                                    <td></td>
                                    <td>3</td>
                                    <td><input onblur="findTotalMMV_TL()" class="MMV_TL" type="number" min="0" max="3" autocapitalize="off" id="markahTL92_MMV" name="markahTL92_MMV" required/></td>
                                    <td>
                                        <span>&#183; Bukti bergambar</span><br>
                                        <span>&#183; Lukisan siap bina</span><br>
                                        <span>&#183; Rekod Senggaraan</span><br>
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
    
                                <!--JUMLAH MARKAHTL-->
                                <tr class="pg-1" align="center">
                                    <td colspan="6">Jumlah markah TL</td>
                                    <td colspan="3">26</td>
                                    <td></td>
                                    <td>24</td>
                                    <td><input id="totalMMV_TL" type="number" min="0" max="24" id="markahTOTAL_TL_MMV" name="markahTOTAL_TL_MMV"></td>
                                    <td colspan="9"></td>
                                </tr> 
                        </table>

                    {{-- </div>      <!--Scrollbar--> --}}

                
                    <div class="mb-3 mt-3 text-center">
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <a href="/maisarah_bangunan/verifikasi_baru_a_page2" type="button" class="btn btn-secondary">Seterusnya</a> 
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
