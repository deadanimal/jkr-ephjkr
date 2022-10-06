@extends('layouts.base')
@section('content')
    <div class="row mb-3">
        <div class="col">
            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                        Paparan Senarai Projek
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3 class="mb-0 text-primary"><strong>VERIFIKASI PERMARKAHAN JALAN</strong></h3>
        </div>
    </div>

    <hr class="text-primary">

    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
                <div class="card p-3  py-4">
                    <div class="row g-3 mt-2">
                        <div class="col-md-3">
                            <label for="nama_projek">Nama Projek:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="myInput" class="form-control" placeholder="e-Penarafan Hijau Jabatan Kerja Raya">
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-warning btn-block">Carian</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {{-- <div class="row mt-3">
        <div class="col text-end">
            <a href="/verifikasi_permarkahan_jalan/senarai_projek_create/create" class="btn btn-primary">Tambah</a>
        </div>
    </div> --}}

    <div class="row mt-2">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table datatable table-striped" style="width:100%">
                        <thead class="bg-primary">
                            <tr>
                                <th class="sort">Bil.</th>
                                <th class="sort">Nama</th>
                                <th class="sort">syarikat</th>
                                <th class="sort">No Tel</th>
                                <th class="sort">E-mel</th>
                                <th class="sort">No Fax</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($verifikasi_jalan as $vj)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $vj->nama }}</td>
                                    <td>{{ $vj->syarikat_cawangan }} </td>
                                    <td>{{ $vj->no_tel }}</td>
                                    <td>{{ $vj->email }}</td>
                                    <td>{{ $vj->no_fax }}</td>
                                    
                                    
                                    
                                    
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection