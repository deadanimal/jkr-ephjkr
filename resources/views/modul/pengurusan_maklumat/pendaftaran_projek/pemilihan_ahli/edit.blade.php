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
                        Pemilihan Ahli Projek
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3 class="mb-0 text-primary"><strong>PEMILIHAN AHLI PROJEK</strong></h3>
        </div>
    </div>

    <hr class="text-primary mb-3">

    <div class="row mt-4 mb-3">
        <div class="col">
            <form action="/pengurusan_maklumat/pemilihan_ahli/{{$pp->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="row justify-content-center mx-4">
                    <div class="col-3 mb-2">
                        <label class="col-form-label">Ahli:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" type="text" disabled value="{{$pp->namaProjek}}"/>
                        <input class="form-control" name="projek_id" type="hidden" value="{{$pp->id}}"/>
                    </div>
        
                    <div class="col-3 mb-2">
                        <label class="col-form-label">Ahli:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <select name="user_id" class="form-select form-control">
                            <option value="" hidden selected>Sila Pilih</option>
                            @foreach ($pengguna as $peng)
                                <option value="{{$peng->id}}">{{$peng->name}}</option>
                            @endforeach
                        </select>
                    </div>
        
                    <div class="col-3 mb-2">
                        <label class="col-form-label">Peranan:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <select name="role_id" class="form-select form-control">
                            <option value="" hidden selected>Sila Pilih</option>
                            @foreach ($peranan as $pera)
                                <option value="{{$pera->id}}">{{$pera->name}}</option>
                            @endforeach
                        </select>
                    </div>
        
                    <div class="col-3 mb-2">
                        
                    </div>
                    <div class="col-7 mb-2">
                        <div class="row mt-4">
                            <div class="col-6">
                                <a href="/pengurusan_maklumat/senarai_pengguna" class="btn btn-outline-primary">Batal</a>
                            </div>
                            <div class="col-6 text-end">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
                                <th class="sort">Nama</th>
                                <th class="sort">Peranan</th>
                                <th class="sort">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($ahli as $a)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $a->pengguna->name }}</td>
                                    <td>{{ $a->peranan->name }}</td>
                                    <td>
                                        <div class="col-auto">
                                            <form action="/pengurusan_maklumat/pemilihan_ahli/{{ $a->id }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-outline-primary"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
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
