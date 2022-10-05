@extends('layouts.base')

@section('content')
    {{-- header --}}
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
            <h3 class="mb-0 text-primary"><strong>PENGESAHAN RAYUAN VERIFIKASI JALAN</strong></h3>
        </div>
    </div>

    <hr class="text-primary mb-3">

    <div class="row d-flex justify-content-center table-responsive scrollbar">
        <table class="table table-bordered">
            <thead class="text-white bg-orange-jkr">
                <tr>
                    <th scope="col">Bil.</th>
                    <th scope="col">ID Rujukan</th>
                    <th scope="col">Nama Projek</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Sebab Rayuan</th>
                    <th scope="col">Status Rayuan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1.</th>
                    <td>SKL0202</td>
                    <td>Bina Jalan</td>
                    <td>Jalan Sekapur Sireh</td>
                    <td>Penilaian reka bentuk salah masuk markah</td>
                    <td>Permohonan rayuan dalam proses</td>
                </tr>

                <tr>
                    <th scope="row">2.</th>
                    <td>SKL0202</td>
                    <td>Bina Jalan</td>
                    <td>Jalan Sekapur Sireh</td>
                    <td>Penilaian reka bentuk salah masuk markah</td>
                    <td>Permohonan rayuan berjaya</td>
                </tr>

            
                    


            </tbody>
            </table>
        </div>
    </div>


@endsection