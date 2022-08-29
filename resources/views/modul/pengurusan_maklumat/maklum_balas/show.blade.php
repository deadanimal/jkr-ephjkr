@extends('layouts.base')
@section('content')
    <div class="row mb-3">
        <div class="col">
            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/pengurusan_maklumat/senarai_pengguna" class="text-secondary">Maklum Balas</a>
                    </li>
                    <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                        Status Maklum Balas
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3 class="mb-0 text-primary"><strong>MAKLUM BALAS</strong></h3>
        </div>
    </div>

    <hr class="text-primary mb-3">

    <div class="row mt-2">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table datatable table-striped" style="width:100%">
                        <thead class="bg-primary">
                            <tr>
                                <th class="sort">Bil.</th>
                                <th class="sort">Maklum Balas</th>
                                <th class="sort">Kategori</th>
                                <th class="sort">Status</th>
                                
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($maklum_balas as $mb)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $mb->subjek }}</td>
                                    <td>{{ $mb->kategori }}</td>
                                    <td>{{ $mb->statusMaklumbalas }}</td>
                                    
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

