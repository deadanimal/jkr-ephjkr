@extends('layouts.base')
@section('content')
    <div class="row mb-3">
        <div class="col">
            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                    Paparan Profil
                </li>
            </ol>
        </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3 class="mb-0 text-primary"><strong>Profil Pengguna</strong></h3>
        </div>
    </div>

    <hr class="text-primary mb-3">

    <div class="row mt-4 mb-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row mx-4">
                        <div class="col-4 mb-2">
                            <h5 class="h6">Nama:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->name }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">e-Mel Pengguna:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->email }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">No. Telefon Bimbit:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->notelbimbitPengguna }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Nama Syarikat:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->namaSyarikat }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Nama Cawangan:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->namaCawangan }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Alamat Syarikat:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->alamatSyarikat }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col text-end">
            <a href="/pengurusan_maklumat/profil_pengguna/{{$pengguna->id}}/edit" class="btn btn-primary">Kemaskini</a>
        </div>
    </div>
@endsection
