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
                    <th scope="col">ID Rujukan</th>
                    <th scope="col">Nama Projek</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Status</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tindakan</th>
                    {{-- <th scope="col">Kategori</th> --}}
                </tr>
            </thead>
            <tbody>
                {{-- <tr>
                    <th scope="row">1.</th>
                    <td>SKL0202</td>
                    <td>Hospital Seri Iskandar</td>
                    <td>Mukah</td>
                    <td>BERJAYA DIDAFTAR</td>
                    <td style="text-align: center"><a href="/penilaian_reka_bentuk_gpss/pemudah_cara/create" type="submit" class="btn btn-warning margin-auto">DAFTAR</a></td>
                    
                </tr> --}}

                <tr>
                    @foreach ($projeks as $p)

                    {{-- <th scope="row">1.</th> --}}
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->id_ruj_skala }}</td>
                    <td>{{ $p->namaProjek }}</td>
                    <td>{{ $p->alamatProjek }}</td>
                    <td>{{ $p->statusProjek }}</td>
                    <td>{{ $p->jenisKategoriProjek }}</td>
                    <td style="text-align: center">{{ $p->nama }}
                        <a href="/verifikasi_permarkahan_gpss/pemudah_cara_verifikasi_gpss/create/{{$p->id}}" type="button" class="btn btn-warning">Lantik Pemudah Cara</a>
                    </td>
                    {{-- <td>
                        <select class="select-action" name="action" class="btn btn-warning">
                            <option  disabled selected>Pilih Kategori</option>
                            <option value ="arkitek">Bangunan 1</option>
                            <option value ="mekanikal">Mekanikal</option>
                            <option value ="elektrikal">Elektrikal</option>
                            <option value ="civil">Civil</option>
                         </select>
                    </td>  --}}
                </tr>
                    @endforeach
                    
            </tbody>
            </table>
        </div>
    </div>
@endsection













