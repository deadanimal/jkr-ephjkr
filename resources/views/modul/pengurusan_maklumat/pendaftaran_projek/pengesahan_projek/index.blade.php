@extends('layouts.base')
@section('content')
<div class="row mb-3">
    <div class="col">
        <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/pengurusan_maklumat/senarai_pengguna" class="text-secondary">Pendaftaran Projek</a>
                </li>
                <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                    Papar Pengesahan Pendaftaran Projek
                </li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col">
        <h3 class="mb-0 text-primary"><strong>PENDAFTARAN PROJEK</strong></h3>
    </div>
</div>

<hr class="text-primary mb-3">

    <div class="row mt-3">
        <div class="col text-end">
            <a href="/pengurusan_maklumat/pendaftaran_projek/pengesahan_projek/create" class="btn btn-primary">Tambah</a>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table datatable table-striped" style="width:100%">
                        <thead class="bg-primary">
                            <tr>
                                <th class="sort">Bil.</th>
                                <th class="sort">ID Projek</th>
                                <th class="sort">Nama Projek</th>
                                <th class="sort">Alamat Projek</th>
                                <th class="sort">Status Projek</th>
                                <th class="sort">Jenis Kategori</th>
                                <th class="sort">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($pengesahan_projek as $ppp)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ppp->id }}</td>
                                    <td>{{ $ppp->namaProjek }}</td>
                                    <td>{{ $ppp->alamatProjek }}</td>
                                    <td>{{ $ppp->statusProjek }}</td>
                                    <td>{{ $ppp->jenisKategoriProjek }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="/pengurusan_maklumat/pendaftaran_projek/pengesahan_projek/edit/{{ $ppp->id }}"
                                                    class="btn btn-sm btn-primary">SAHKAN</a>
                                            </div>
                                        </div>
                                        {{-- <div
                                            class="col-auto mb-2 px-0"
                                                style="border: 1px solid #F4A258; box-shadow: inset 2px 2px 5px 2px lightgrey; background-color: white; z-index: 2; border-radius:5px;">
                                                @if ($pengesahan_projek->statusProjek == 'Lulus')
                                                    <button class="btn btn-orange-jkr" type="button">LULUS</button>
                                                @else
                                                    <button class="btn btn-final" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#lulus">LULUS</button>
                                                @endif
                                                    
                                                @if ($pengesahan_projek->statusProjek == 'Gagal')
                                                    <button class="btn btn-orange-jkr" type="button">GAGAL</button>
                                                @else
                                                    <button class="btn btn-final" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#gagal">GAGAL</button>
                                                @endif
        
                                        </div>  --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection