@extends('layouts.base')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/cssfile/pengesahan_penilaian_style.css">


@section('content')

<div class="header">
    Penilaian Verifikasi Permarkahan GPSS 
    <b style="color: #0F5E31;">> Permohonan Rayuan</b>

    <h1 class="header-title">
        PENILAIAN VERIFIKASI PERMARKAHAN GPSS
    </h1>
    <hr class="line-6">
    

</div>
    <div class="container-fluid">
        <!--Carian Nama Projek-->
        <div class="mt-8 form-group row">
            <label class="col-sm-2 col-form-label">Nama Projek:</label>
                <div class="col-sm-5">
                    <input type="search" class="form-control" placeholder="e-Penarafan Hijau Jabatan Kerja Raya"/>
                </div>
                    <div class="col-sm-5">
                        <button type="button" class="btn btn-primary">Carian</button>
                    </div>
    </div>

          
        <div class="col-12">
            <div class="card-header">
                    <div class="mt-5 row">
                    
                            <!--TO ENABLE SCROLLBAR AT TABLES-->
                            {{-- <div class="table-responsive scrollbar"> --}}
                            
                                <table class="table table-bordered line-table" style="width:100%" border="1px solid">
                                        <thead class="text-white bg-orange-jkr">
                                            <tr>
                                                <th class="text-center">Bil</th>
                                                <th class="text-center">ID Rujukan</th>
                                                <th class="text-center">Nama Projek</th>
                                                <th class="text-center">Alamat</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Rayuan</th>
                                                <th class="text-center">Tindakan</th> 
                                            </tr>
                                        </thead>
                                    {{-- </table>  --}}

                                    {{-- <table class="kotak" style="width:100%"> --}}
                                    <tbody>
                                        <!--LOOPING TABLES-->
                                        {{-- @foreach ($projek as $key => $p) --}}
                                            <tr class="text-black">
                                                {{-- <td>{{ $pdkk->id }}</td> --}}
                                                <td style="text-align: center; vertical-align: middle;">1</td>
                                                <td style="text-align: center; vertical-align: middle;">SKL0202</td>
                                                <td style="text-align: center; vertical-align: middle;">Hospital Seri Iskandar</td>
                                                <td style="text-align: center; vertical-align: middle;">Mukah</td>
                                                <td style="text-align: center; vertical-align: middle;">BERJAYA DIDAFTAR</td>
                                                <td style="text-align: center; vertical-align: middle;">Rayuan Dibuat/Tiada</td>
                                                <td style="text-align: center; vertical-align: middle;">
                                                    {{-- <button class="btn-daftar" data-toggle="tooltip" data-placement="bottom" 
                                                    title="Daftar Pemudah Cara" type="submit">
                                                    <a href="/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara/create">Daftar</a>
                                                </button> --}}
                                                    {{-- <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                                                    title="Daftar Pemudah Cara" type="submit">Daftar</button> --}}
                                                    <a class="btn btn-primary" href="#" role="button"
                                                    data-toggle="tooltip" data-placement="bottom" title="Rayuan">Papar Rayuan</a>
                                                </td>
                                            </tr> 
                                        {{-- @endforeach --}}
                                        </tbody>
                                    {{-- </table> --}}
                                </table> 
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection