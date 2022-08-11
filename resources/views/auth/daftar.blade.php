@extends('layouts.landing-base')
@section('content')
<div class="container mt-4">
    <div class="row text-orange">
        <div class="col text-center">
            DAFTAR AKAUN
            <hr class="text-orange">
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-8">
            <form action="/register" method="post">
                @csrf
                <div class="row">
                    <div class="col-3">
                        <label >Nama Pengguna:</label>
                    </div>
                    <div class="col-9 mb-2">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="col-3">
                        <label >No. Kad Pengguna:</label>
                    </div>
                    <div class="col-9 mb-2">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="col-3">
                        <label >Nama Pengguna:</label>
                    </div>
                    <div class="col-9 mb-2">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="col-3">
                        <label >Nama Pengguna:</label>
                    </div>
                    <div class="col-9 mb-2">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="col-3">
                        <label >Nama Pengguna:</label>
                    </div>
                    <div class="col-9 mb-2">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="col-3">
                        <label >Nama Pengguna:</label>
                    </div>
                    <div class="col-9 mb-2">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="col-3">
                        <label >Nama Pengguna:</label>
                    </div>
                    <div class="col-9 mb-2">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="col-3">
                        <label >Nama Pengguna:</label>
                    </div>
                    <div class="col-9 mb-2">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="col-3">
                        <label >Nama Pengguna:</label>
                    </div>
                    <div class="col-9 mb-2">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="col-3">
                        <label >Nama Pengguna:</label>
                    </div>
                    <div class="col-9 mb-2">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection