@extends('layouts.base')

<style>
    ::placeholder{
        color: black !important
    }
</style>

@section('content')
    {{-- header --}}
    <div class="header" >
        <h1 class="header-title" style="color: #EB5500">
            PENILAIAN REKA BENTUK GPSS
        </h1>
    </div>
    <hr style="background-color: #EB5500;">
    {{-- body --}}
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="card p-3  py-4">
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <label for="nama_projek">Nama:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Hospital Seri Iskandar">
                    </div>
                </div>
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <label for="nama_projek">ID Rujukan Skala:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="SKL0202">
                    </div>
                </div>
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <label for="nama_projek">Alamat:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Mukah">
                    </div>
                </div>
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <label for="nama_projek">Kos Projek Semasa:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" placeholder="RM 5,000,000.00">
                    </div>
                </div>
            </div>
        </div>
        
    </div>

@endsection