@extends('layouts.base')
<link rel="stylesheet" href="/cssfile/style.css">

@section('content')
<div class="header">
    <b class="text-dark-green-jkr">Semakan Rawak dan Jana Sijil</b>

<h1 class="header-title">
    PENILAIAN REKA BENTUK BANGUNAN
</h1>
<hr class="hr-jkr">


</div>
<div class="container-fluid">
    <div class="card-body">
        <form action="/penilaian_reka_bentuk_bangunan/simpan_semakan_rawak/{id}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- @method('PUT') --}}

            <div class="row mx-3">
                <table class="table table-bordered line-table shadow-table-jkr line-corner-table-jkr">
                    <thead class="text-white line-table">
                            <tr align="center" style="background-color:#EB5500">
                                <th colspan="3">Jenis Pembangunan</th>
                                <th colspan="8">Pembangunan Baru</th>
                            </tr>
                
                            <tr align="center" style="background-color:#EB5500">
                                {{-- <th></th> --}}
                                <th colspan="3">Peratusan Mengikut Kriteria</th>
                                <th>MMR</th>
                                <th>MS</th>
                                <th>MR</th>
                                <th>MMV</th>
                                <th>MS</th>
                                <th>MV</th>
                                <th>ML</th>
                            </tr>
                    </thead>

                    {{-- @foreach ($kriteria_phjkr_bangunan ?? '') --}}
                            <tr align="center" class="text-black" >
                                <th>TL</th>
                                <th colspan="2">Perancangan dan Pengurusan Tapak Lestari</th>
                                <th name="markahTL1">{{$kriteria_phjkr_bangunan ?? ''}}</th>
                                <th>0</th>
                                <th>0</th>
                                <th name="markahTL2">{{$kriteria_phjkr_bangunan ?? ''}}</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                            </tr>

                            <tr align="center" class="text-black" >
                                <th>KT</th>
                                <th colspan="2">Pengurusan Kecekapan Tenaga</th>
                                <th name="markahKT1">{{$kriteria_phjkr_bangunan ?? ''}}</th>
                                <th>0</th>
                                <th>0</th>
                                <th name="markahKT2">{{$kriteria_phjkr_bangunan ?? ''}}</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                            </tr>

                            <tr align="center" class="text-black" >
                                <th>SB</th>
                                <th colspan="2">Pengurusan Sumber dan Bahan</th>
                                <th name="markahSB1">26</th>
                                <th>0</th>
                                <th>0</th>
                                <th name="markahSB2">24</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                            </tr>

                            <tr align="center" class="text-black" >
                                <th>PA</th>
                                <th colspan="2">Pengurusan Kecekapan Penggunaan Air</th>
                                <th name="markahPA1">26</th>
                                <th>0</th>
                                <th>0</th>
                                <th name="markahPA2">24</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                            </tr>

                            <tr align="center" class="text-black" >
                                <th>PD</th>
                                <th colspan="2">Pengurusan Kualiti Persekitaran Dalaman</th>
                                <th name="markahPD1">26</th>
                                <th>0</th>
                                <th>0</th>
                                <th name="markahPD2">24</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                            </tr>

                            <tr align="center" class="text-black" >
                                <th>FL</th>
                                <th colspan="2">Pengurusan Fasiliti Lestari</th>
                                <th name="markahKT2">26</th>
                                <th>0</th>
                                <th>0</th>
                                <th >24</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                            </tr>

                            <tr align="center" class="text-black" >
                                <th>IN</th>
                                <th colspan="2">Inovasi dalam Reka Bentuk</th>
                                <th>26</th>
                                <th>0</th>
                                <th>0</th>
                                <th>24</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                            </tr>

                            <tr align="center" class="text-black" >
                                <th colspan="3">JUMLAH</th>
                                <th>101</th>
                                <th>0</th>
                                <th>0</th>
                                <th>103</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                            </tr>

                        {{-- @endforeach --}}
        
                </table> <!--Table Jenis Pembangunan-->
            </div> <!--row mx-3-->
            

            <div class="row mx-3">
                <table class="table table-bordered line-table shadow-table-jkr">
                    <thead class="text-white line-table">
                        <tr align="center" style="background-color:#EB5500">
                            <th colspan="3">KEPUTUSAN PENARAFAN HIJAU PERINGKAT REKA BENTUK (PRB)</th>
                        </tr>

                        <tr align="center" class="text-black">
                            <th colspan="3">
                                {{-- <button class="btn btn-primary btn-sasaran">Sasaran</button> --}}
                                <a class="button btn btn-primary" href="/penilaian_reka_bentuk_bangunan/skor_penilaian/edit">Sasaran</a>
                                <button type="submit" class="btn btn-secondary">Disahkan</button></th>
                        </tr>

                        <tr align="center" style="background-color:#EB5500">
                            <th colspan="3">MARKAH PENILAIAN</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th colspan="2">Jumlah Markah</th>
                            <th colspan="2">0</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th colspan="2">Peratusan</th>
                            <th colspan="2">0</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th colspan="2">Penarafan PH</th>
                            <th colspan="2">1 <span class="star">&starf;</span></th>
                        </tr>

                        <tr align="center" style="background-color:#EB5500" >
                            <th colspan="2">Petunjuk Penarafan</th>
                            <th>Sijil Penarafan</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th><span class="star">&starf; &starf; &starf; &starf; &starf;</span></th>
                            <th>80 - 100</th>
                            <th>Kecemerlangan Global</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th><span class="star">&starf; &starf; &starf; &starf;</span></th>
                            <th>65 - 79</th>
                            <th>Kecemerlangan Nasional</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th><span class="star">&starf; &starf; &starf;</span></th>
                            <th>45 - 64</th>
                            <th>Amalan Pengurusan Terbaik</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th><span class="star">&starf; &starf;</span></th>
                            <th>30 - 44</th>
                            <th>Potensi Pengiktirafan</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th><span class="star">&starf;</span></th>
                            <th>< 29</th>
                            <th>Sijil Penyertaan</th>
                        </tr>
                    </thead>
                </table> <!--Table Keputusan Penarafan Hijau Peringkat Reka Bentuk(PRB)-->
            </div>

                 <!--Muat Naik Dokumen Sokongan-->
                 <div class="mb-3 row text-center">
                    <label class="form-label" for="customFile">MUAT NAIK DOKUMEN SOKONGAN</label>
                    <input type="file" class="form-control" id="customFile" name="dokumenSokongan" value="{{$dokumen ?? ''}}"/>
                </div>

                <!--Button Simpan (TOOLTIPS)-->
                <div class="text-center">
                    <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                    title="Simpan" type="submit">Jana</button>
                </div>

        </form> <!--Form Sasaran/Disahkan--> 
    </div> <!--Card Body-->
</div> <!--Container Fluid-->

<!--JavaScript-->



@endsection
