@extends('layouts.base')
@section('content')
    <div class="row mb-3">
        <div class="col">
            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                        Manual Dan Standard
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3 class="mb-0 text-primary"><strong>MANUAL & STANDARD</strong></h3>
        </div>
    </div>

    <hr class="text-primary">

    <div class="row mt-3">
        <div class="col text-end">
            <a href="/pengurusan_maklumat/manual_dan_standard/create" class="btn btn-primary">Tambah</a>
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
                                <th class="sort">Nama Manual & Standard</th>
                                <th class="sort">Muat Turun</th>
                                <th class="sort">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($manual_dan_standard as $mds)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $mds->namaManual }}</td>
                                    <td><a href="../{{ $mds->failManual }}" class="text-primary">{{ $mds->failManual }}</a></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="/pengurusan_maklumat/manual_dan_standard/{{ $mds->id }}/edit"
                                                    class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                            </div>
                                            <div class="col-auto">
                                                <form action="/pengurusan_maklumat/manual_dan_standard/{{ $mds->id }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-outline-primary"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </div>
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
