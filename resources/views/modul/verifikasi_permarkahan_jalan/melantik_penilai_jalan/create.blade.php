@extends('layouts.base')
@section('content')
    <div class="row mb-3">
        <div class="col">
            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/pengurusan_maklumat/senarai_pengguna" class="text-secondary">Melantik Penilai Jalan</a>
                    </li>
                    <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                        Tambah Penilai Jalan
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

    <hr class="text-primary mb-3">

    <div class="row">
        <div class="col">
            <h5 class="mb-0 text-primary"><strong>Lantikan Penilai Jalan</strong></h5>
        </div>
    </div>

    <div class="row mt-4 mb-3">
        <div class="col">
            <form action="/verifikasi_permarkahan_jalan/melantik_penilai_jalan" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mx-4">
                    <div class="col-3 mb-2">
                        <label class="col-form-label">Nama Projek:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="namaFAQ" type="text"/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Syarikat/Cawangan:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="soalanFAQ" type="text"/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Nama Pemudah Cara Jalan:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="JawapanFAQ" type="text"/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">No. Tel:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="JawapanFAQ" type="text"/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">E-mel:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="JawapanFAQ" type="text"/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">No. Fax:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="JawapanFAQ" type="text"/>
                    </div>

                    
    
                    <div class="col-3 mb-2">
                        
                    </div>
                    <div class="col-7 mb-2">
                        <div class="row mt-4">
                            <div class="col-6">
                                <a href="/verifikasi_permarkahan_jalan/papar_senarai_projek" class="btn btn-outline-primary">Batal</a>
                            </div>
                            <div class="col-6 text-end">
                                <button type="submit" class="btn btn-primary">Lantik Penilai Jalan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
