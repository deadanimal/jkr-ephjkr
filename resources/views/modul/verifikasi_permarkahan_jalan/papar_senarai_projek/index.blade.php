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
                                <th class="sort">ID Rujukan</th>
                                <th class="sort">Nama Projek</th>
                                <th class="sort">Alamat</th>
                                <th class="sort">Status Projek</th>
                                <th class="sort">Jenis Projek</th>
                                <th class="sort">Kategori</th>
                                <th class="sort">Nama Pemudah Cara</th>
                                <th class="sort">Nama Penilai</th>
                                {{-- <th class="sort">Tindakan</th> --}}
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($senarai_projek as $spk)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $spk->id_ruk_skala }}</td>
                                    <td>{{ $spk->namaProjek }} </td>
                                    <td>{{ $spk->alamatProjek }}</td>
                                    <td>{{ $spk->statusProjek }}</td>
                                    <td>{{ $spk->jenisKategoriProjek }}</td>
                                    <td>
                                        <select class="select-action" name="action" class="btn btn-warning">
                                            <option  disabled selected>Pilih Kategori</option>
                                            <option value ="arkitek">New Road</option>
                                            <option value ="mekanikal">Existing Road</option>
                                         </select>
                                    </td>
                                    
                                    <td style="text-align: right">{{ $spk->nama }}
                                        <a href="/verifikasi_permarkahan_jalan/pemudah_cara/create/{{$spk->id}}" type="button" class="btn btn-warning">+</a>
                                    </td>
                                    <td style="text-align: right">{{ $spk->nama }}
                                        <a href="/penilaian_reka_bentuk_jalan/melantik_pemudah_cara_jalan/{{$spk->id}}" type="button" class="btn btn-warning">+</a>
                                    </td>
                                    
                                    {{-- <td>
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="/verifikasi_permarkahan_jalan/papar_senarai_projek/{{ $spk->id }}/edit"
                                                    class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                            </div>
                                            <div class="col-auto">
                                                <form action="/verifikasi_permarkahan_jalan/papar_senarai_projek/{{ $spk->id }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-outline-primary"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection