@extends('layouts.auth-base')
@section('content')
    <div class="container-fluid">
        <div class="row min-vh-100 flex-center g-0">
            <div class="col-lg-6 col-xxl-5 py-3 position-relative">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row g-0 h-100 d-flex flex-center">
                            <div class="col-lg-8 d-flex flex-center">
                                <div class="p-4 p-md-5 flex-grow-1">
                                    <div class="row flex-between-center">
                                        <div class="col mb-3">
                                            <h3 class="text-primary text-center">Log Masuk</h3>
                                        </div>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <input type="hidden" value="staf" name="pengguna">
                                        <div class="mb-3" id="nric">
                                            <label class="form-label text-primary">No.
                                                Kad Pengenalan</label>
                                            <input class="form-control" type="text" name="no_KP"
                                                :value="old('no_KP')" maxlength="12" size="12"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between">
                                                <label class="form-label text-primary">Peranan Pengguna</label>
                                            </div>
                                            <input type="text" name="peranan_pengguna" id="peranan_pengguna" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between">
                                                <label class="form-label text-primary">Kata
                                                    Laluan</label>
                                            </div>
                                            <input class="form-control" type="password" name="password" required
                                                autocomplete="current-password" />
                                        </div>
                                        <div class="form-check mb-0">
                                            <div class="row">
                                                <div class="col text-end">
                                                    <a class="fs--1 text-primary" href="/lupa_katalaluan">Terlupa Kata
                                                        Laluan?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                                name="submit">Log Masuk</button>
                                        </div>
                                    </form>
                                    <div class="text-center">
                                        <label>Atau</label>
                                    </div>
    
                                    <div class="row">
                                        <div class="col text-center">
                                            <div class="mb-3">
                                                <a class="btn btn-outline-primary d-block w-100" href="/register">Daftar Akaun</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@stop
