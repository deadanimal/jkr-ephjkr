@extends('layouts.base')

@section('content')
    {{-- header --}}
    <div class="row">
        <div class="col">
            <h3 class="mb-0 text-primary"><strong>PENILAIAN REKA BENTUK GPSS</strong></h3>
        </div>
    </div>

    <hr class="text-primary mb-3">

    {{-- body --}}
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="card p-3  py-4">
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <label for="nama_projek">Nama Projek:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="e-Penarafan Hijau Jabatan Kerja Raya">
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-warning btn-block">Carian</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <table class="table datatable table-bordered">
                        <thead class="text-white bg-orange-jkr">
                            <tr>
                                <th scope="col">Bil.</th>
                                <th scope="col">ID Rujukan</th>
                                <th scope="col">Nama Projek</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tindakan</th>
                            </tr>
        
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1.</th>
                                <td>SKL0202</td>
                                <td>Hospital Seri Iskandar</td>
                                <td>Mukah</td>
                                <td>BERJAYA DIDAFTAR</td>
                                <td>
                                    <a href="/penilaian_reka_bentuk_gpss/skor_penilaian/edit" type="button" class="btn btn-warning">PILIH</a>
                                </td>
                            </tr>
                            {{-- @foreach ($projeks as $p)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$p->id_ruj_skala}}</td>
                                    <td>{{$p->namaProjek}}</td>
                                    <td>{{$p->alamatProjek}}</td>
                                    <td>{{$p->status->status_projek}}</td>
                                    <td>
                                        <a href="/penilaian_reka_bentuk_gpss/melantik_pemudah_cara/{{$p->id}}"
                                            type="button" class="btn btn-warning">PILIH</a>
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
@endsection
