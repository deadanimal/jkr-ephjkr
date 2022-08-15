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
                    <div class="row mx-4">
                        <div class="col-4 mb-2">
                            <h5 class="h6">Nama:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->name }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">No. Kad Pengenalan:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->icPengguna }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">e-Mel Pengguna:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->email }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">No. Telefon Bimbit:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->notelbimbitPengguna }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">No. Faks:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->nofaxPengguna }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Nama Syarikat:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->namaSyarikat }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Alamat Syarikat:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->alamatSyarikat }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Daerah:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->daerah }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Negeri:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->negeri }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Kata Laluan:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->katalaluan }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Sijil Kompeten:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->sijilKompeten }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Kelayakan Akademik:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pengguna->kelayakanAkademik }}</h5>
                        </div>

                        <div class="col-4 mb-2">

                        </div>
                        <div class="col-auto mb-2 px-0"
                            style="border: 1px solid #F4A258; box-shadow: inset 2px 2px 5px 2px lightgrey; background-color: white; z-index: 2; border-radius:5px;">
                            @if ($pengguna->status_akaun == 'Lulus')
                                <button class="btn btn-orange-jkr" type="button">Lulus</button>
                            @else
                                <button class="btn btn-final" type="button" data-bs-toggle="modal"
                                    data-bs-target="#lulus">Lulus</button>
                            @endif
                            |
                            @if ($pengguna->status_akaun == 'Tolak')
                                <button class="btn btn-orange-jkr" type="button">Tolak</button>
                            @else
                                <button class="btn btn-final" type="button" data-bs-toggle="modal"
                                    data-bs-target="#tolak">Tolak</button>
                            @endif

                        </div>

                        {{-- lulus modal --}}
                        <div class="modal fade" id="lulus" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                                <div class="modal-content position-relative">
                                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                                        {{-- <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                            data-bs-dismiss="modal" aria-label="Close"></button> --}}
                                    </div>
                                    <div class="modal-body p-0">

                                        <div class="p-4 text-center">
                                            <h5 class="h5 text-green-jkr">Adakah anda pasti ingin meluluskan pendaftaran
                                                pengguna ini?</h5>
                                            <form action="/dashboard/pengesahan_pengguna/{{ $pengguna->id }}"
                                                method="post">
                                                @method('PUT')
                                                @csrf
                                                <input type="hidden" name="status_akaun" value="Lulus">
                                                <button class="btn btn-outline-green-jkr mt-3" type="button"
                                                    data-bs-dismiss="modal">Tidak</button>
                                                <button class="btn btn-green-jkr mt-3" type="submit">Ya</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- tolak modal --}}
                        <div class="modal fade" id="tolak" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                                <div class="modal-content position-relative">
                                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                                        {{-- <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                            data-bs-dismiss="modal" aria-label="Close"></button> --}}
                                    </div>
                                    <div class="modal-body p-0">

                                        <div class="p-4 text-center">
                                            <h5 class="h5 text-green-jkr">Adakah anda pasti ingin menolak pendaftaran
                                                pengguna ini?</h5>
                                            <form action="/dashboard/pengesahan_pengguna/{{ $pengguna->id }}"
                                                method="post">
                                                @method('PUT')
                                                @csrf
                                                <input type="hidden" name="status_akaun" value="Tolak">
                                                <button class="btn btn-outline-green-jkr mt-3" type="button"
                                                    data-bs-dismiss="modal">Tidak</button>
                                                <button class="btn btn-green-jkr mt-3" type="submit">Ya</button>
                                            </form>
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
@endsection
