
@extends('layouts.base')

@section('content')

    {{-- header --}}
    <div class="header" >
        <h1 class="header-title" style="color: #EB5500">
            PENILAIAN REKA BENTUK GPSS
        </h1>
    </div>
    <hr style="background-color: #EB5500;"></hr>
    
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
            <thead style="background-color: #f0a420;">
                <tr>
                    <th scope="col">Bil.</th>
                    <th scope="col">ID Rujukan</th>
                    <th scope="col">Nama Projek</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tindakan</th>
                </tr>
                
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1.</th>
                    <td>SKL0202</td>
                    <td>Hospital Seri Iskandar</td>
                    <td>Mukah</td>
                    <td>BERJAYA DIDAFTAR</td>
                    <td>
                        <a href="/pengesahan_penilaian_reka_bentuk_gpss" type="button" class="btn btn-warning">DAFTAR</a>
                    </td>
                    </tr>                    
            </tbody>
            </table>
        </div>
    </div>



    
@endsection
