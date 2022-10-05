@extends('layouts.base')
@section('content')
    <!--header-->
    <div class="row mb-3">
        <div class="col">
            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/penilaian_reka_bentuk_gpss/melantik_pemudah_cara/{id}" class="text-secondary">Penilaian Verifikasi Pemarkahan GPSS</a>
                    </li>
                    <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                        Melantik Pemudah Cara
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <hr class="text-primary mb-3">

    {{-- <div class="row">
        <div class="col">
            <h3 class="mb-0 text-primary"><strong>PENILAIAN REKA BENTUK GPSS</strong></h3>
        </div>
    </div> --}}

    {{-- <div class="container mt-5">
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
        </div> --}}
        {{-- <div class="container-fluid mt-5">
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
                            <a href="/penilaian_reka_bentuk_gpss/pemudah_cara/create" type="button" class="btn btn-warning">Kemaskini Pemudah Cara</a>
                        </td> 
                    </tr>
                        @endforeach
                        
                </tbody>
                </table>
            </div>
        </div> --}}


        {{-- Form Pemudah Cara --}}
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-oranje-jkr">
                    <b>Maklumat Pemudah Cara</b>
                </div>
                <div class="card-body">
                    <form action= "/penilaian_reka_bentuk_gpss/melantik_pemudah_cara/{id}" method="post" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <!--Nama-->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Nama:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" autocapitalize="off" name="nama" />
                        </div>
                        </div>
                        <!--Syarikat/Cawangan-->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Syarikat:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" autocapitalize="off" name="syarikat_cawangan"  />
                        </div>
                        </div>
                        <!--No. Telefon-->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">No. Tel:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" autocapitalize="off" name="no_tel"  />
                        </div>
                        </div>
                        <!--No. Fax-->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">No. Fax:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" autocapitalize="off" name="no_fax"  />
                        </div>
                        </div>
                        <!--Emel-->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">E-mel:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" autocapitalize="off" name="email"  />
                        </div>
                        </div>
                        <!--Disiplin-->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Disiplin:</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="disiplin">
                                    <option selected="">Sila Pilih</option>
                                    <option value="Arkitektur">Arkitektur</option>
                                    <option value="Mekanikal">Mekanikal</option>
                                    <option value="Elektrikal">Elektrikal</option>
                                    <option value="Awam">Awam</option>
                                    <option value="Jalan">Jalan</option>
                                </select>
                            </div>
                        </div>
                        {{--Kategori--}}
                        <div class="col-sm-10">
                            <input class="form-control" type="hidden" name="kategori" value="verifikasi_gpss" />
                        </div>
                        
                        <!--Button Daftar-->
                        {{-- <button class=“btn btn-primary” type=“submit”>Daftar</button> --}}
                        <!--Button Daftar (TOOLTIPS)-->
                        <div class="text-center">
                            <button class="btn btn-warning" data-toggle="tooltip" data-placement="center"
                            title="Daftar Pemudah Cara" type="submit">Lantik Pemudah Cara</button>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    
    
    
    <!--Container Fluid-->
            <!--JS-->
            <!--JS BUTTON TOOLTIPS-->
            <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
            </script>

@endsection

