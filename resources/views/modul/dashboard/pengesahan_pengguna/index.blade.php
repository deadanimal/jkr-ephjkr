@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col">
        <h3 class="mb-0 text-primary"><strong>PENGESAHAN PENGGUNA</strong></h3>
    </div>
</div>

<hr class="text-primary">


<div class="row mt-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <table class="table datatable table-striped" style="width:100%">
                    <thead class="bg-primary">
                        <tr>
                            <th class="sort">Bil.</th>
                            <th class="sort">Nama Pengguna</th>
                            <th class="sort">No. Kad Pengenalan</th>
                            <th class="sort">e-Mel</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($pengguna as $p)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$p->name}}</td>
                                <td>{{$p->icPengguna}}</td>
                                <td>{{$p->email}}</td>
                                <td>
                                    <a href="/dashboard/pengesahan_pengguna/{{$p->id}}" class="btn btn-primary">Butiran</a>
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