@extends('layouts.base')

@section('content')
    {{-- header --}}
    <div class="row mb-3">
        <div class="col">
            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                        Paparan Senarai Lantikan Pemudah Cara
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3 class="mb-0 text-primary"><strong>PENILAIAN VERIFIKASI PERMARKAHAN GPSS</strong></h3>
        </div>
    </div>
    
    <hr style="background-color: #EB5500;">
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
    <div class="row d-flex justify-content-center">
        <table class="table table-bordered">
            <thead class="text-white bg-orange-jkr">
                <tr>
                    <th scope="col">Bil.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Syarikat/Cawangan</th>
                    <th scope="col">Nombor Telefon</th>
                    <th scope="col">Nombor Fax</th>
                    <th scope="col">Email</th>
                    <th scope="col">Disiplin</th>
                    <th scope="col">Lantik</th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>
               

                <tr>
                    @foreach ($pemudah_cara as $pc)

                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pc->nama }}</td>
                    <td>{{ $pc->syarikat_cawangan }}</td>
                    <td>{{ $pc->no_tel }}</td>
                    <td>{{ $pc->no_fax }}</td>
                    <td>{{ $pc->email }}</td>
                    <td>{{ $pc->disiplin }}</td>
                    <td align="center">
                        <input type="checkbox" value="Lantik" id="lantik" name="lantik">
                    </td>
                    <td style="text-align: center">
                        <a href="/penilaian_reka_bentuk_gpss/pemudah_cara/create/{id}" type="button" class="btn btn-warning">Kemaskini Pemudah Cara</a>
                    </td> 
                </tr>
                    @endforeach
                    
            </tbody>
            </table>
        </div>
    </div>
@endsection