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
                                            <h3 class="text-primary text-center">Terlupa Kata Laluan</h3>
                                        </div>
                                    </div>
                                    <form method="POST" action="{{ route('password.update') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between">
                                                <label class="form-label text-primary">E-mel</label>
                                            </div>
                                            <input type="text" name="email" placeholder="user@gmail.com" class="form-control">
                                        </div>
                                        <div class="mb-3" id="nric">
                                            <label class="form-label text-primary">No.
                                                Kad Pengenalan</label>
                                            <input class="form-control" type="text" name="icPengguna" placeholder="000000000000"
                                                :value="old('no_KP')" maxlength="12" size="12"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between">
                                                <label class="form-label text-primary">Kata
                                                    Laluan</label>
                                            </div>
                                            <input class="form-control" type="password" name="password" required
                                                autocomplete="current-password" />
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between">
                                                <label class="form-label text-primary">Pengesahan Kata
                                                    Laluan</label>
                                            </div>
                                            <input class="form-control" type="password" name="password_confirmation" required
                                                autocomplete="current-password" />
                                        </div>
                                        
                                        <div class="">
                                            <button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                                name="submit">Hantar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@stop
