@extends('layouts.base')
@section('content')
    <div class="row mb-3">
        <div class="col">
            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/pengurusan_maklumat/pendaftaran_projek" class="text-secondary">Pendaftaran Projek</a>
                    </li>
                    <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                        Kemaskini Pengesahan Pendafataran Projek
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3 class="mb-0 text-primary"><strong>PENGESAHAN PENDAFTARAN PROJEK</strong></h3>
        </div>
    </div>

    <hr class="text-primary mb-3">

    <div class="row mt-2">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table datatable table-striped" style="width:100%">
                        <thead class="bg-primary">
                            <tr>
                                <th class="sort">Bil.</th>
                                <th class="sort">ID Projek</th>
                                <th class="sort">Nama Projek</th>
                                <th class="sort">Alamat Projek</th>
                                <th class="sort">Status Projek</th>
                                <th class="sort">Jenis Kategori</th>
                                <th class="sort">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <td>
                                1.
                            </td>
                            <td>
                                {{$pengesahan_projek->id}}
                            </td>
                            <td>
                                {{$pengesahan_projek->namaProjek}}
                            </td>
                            <td>
                                {{$pengesahan_projek->alamatProjek}}
                            </td>
                            <td>
                                {{$pengesahan_projek->statusProjek}}
                            </td>
                            <td>
                                {{$pengesahan_projek->jenisKategoriProjek}}
                            </td>
                            <td>
                                <div
                                    class="col-auto mb-2 px-0"
                                        style="border: 1px solid #F4A258; box-shadow: inset 2px 2px 5px 2px lightgrey; background-color: white; z-index: 2; border-radius:5px;">
                                        @if ($pengesahan_projek->statusProjek == 'Lulus')
                                            <button class="btn btn-orange-jkr" type="button">LULUS</button>
                                        @else
                                            <button class="btn btn-final" type="button" data-bs-toggle="modal"
                                                data-bs-target="#lulus">LULUS</button>
                                        @endif
                                            
                                        @if ($pengesahan_projek->statusProjek == 'Gagal')
                                            <button class="btn btn-orange-jkr" type="button">GAGAL</button>
                                        @else
                                            <button class="btn btn-final" type="button" data-bs-toggle="modal"
                                                data-bs-target="#gagal">GAGAL</button>
                                        @endif

                                </div>
                                {{-- lulus modal --}}
                                         <div class="modal fade" id="gagal" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                                                <div class="modal-content position-relative">
                                                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                                                        {{-- <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                            data-bs-dismiss="modal" aria-label="Close"></button> --}}
                                                    </div>
                                                    <div class="modal-body p-0">

                                                        <div class="p-4 text-center">
                                                            <h5 class="h5 text-green-jkr">Adakah anda mahu tolak projek ini?</h5>
                                                            <form action="/pengurusan_maklumat/pendaftaran_projek/pengesahan_projek_simpan/{{ $pengesahan_projek->id }}"
                                                                method="post">
                                                                @method('POST')
                                                                @csrf
                                                                <input type="hidden" name="statusProjek" value="Gagal">
                                                                <button class="btn btn-outline-green-jkr mt-3" type="button"
                                                                    data-bs-dismiss="modal">TIDAK</button>
                                                                <button class="btn btn-green-jkr mt-3" type="submit">YA</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 

                                        {{-- tolak modal --}}
                                         <div class="modal fade" id="lulus" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                                                <div class="modal-content position-relative">
                                                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                                                        {{-- <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                            data-bs-dismiss="modal" aria-label="Close"></button> --}}
                                                    </div>
                                                    <div class="modal-body p-0">

                                                        <div class="p-4 text-center">
                                                            <h5 class="h5 text-green-jkr">Adakah anda pasti sahkan projek ini?</h5>
                                                            <form action="/pengurusan_maklumat/pendaftaran_projek/pengesahan_projek_simpan/{{ $pengesahan_projek->id }}"
                                                                method="post">
                                                                @method('POST')
                                                                @csrf
                                                                <input type="hidden" name="statusProjek" value="Lulus">
                                                                <button class="btn btn-outline-green-jkr mt-3" type="button"
                                                                    data-bs-dismiss="modal">TIDAK</button>
                                                                <button class="btn btn-green-jkr mt-3" type="submit">Ya</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                            </td>
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection

                                    {{-- <td>{{ $loop->iteration }}</td>
                                    <td>{{ $mb->nama }}</td>
                                    <td>{{ $mb->kategori }}</td> 
                                    <td>
                                        <div class="col-auto mb-2 px-0"
                                            style="border: 1px solid #F4A258; box-shadow: inset 2px 2px 5px 2px lightgrey; background-color: white; z-index: 2; border-radius:5px;">
                                            @if ($mb->statusMaklumbalas == 'Dalam Proses')
                                                <button class="btn btn-orange-jkr" type="button">DALAM PROSES</button>
                                            @else
                                                <button class="btn btn-final" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#dalamproses">DALAM PROSES</button>
                                            @endif
                                            |
                                            @if ($mb->statusMaklumbalas == 'Disemak')
                                                <button class="btn btn-orange-jkr" type="button">DISEMAK</button>
                                            @else
                                                <button class="btn btn-final" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#disemak">DISEMAK</button>
                                            @endif

                                        </div> --}}

                                        {{-- lulus modal --}}
                                        {{-- <div class="modal fade" id="dalamproses" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                                                <div class="modal-content position-relative">
                                                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1"> ------------}}
                                                        {{-- <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                            data-bs-dismiss="modal" aria-label="Close"></button> --}}
                                                    {{-- </div>
                                                    <div class="modal-body p-0">

                                                        <div class="p-4 text-center">
                                                            <h5 class="h5 text-green-jkr">Maklum Balas Pengguna ini dalam Proses?</h5>
                                                            <form action="/pengurusan_maklumat/maklum_balas/{{ $mb->id }}"
                                                                method="post">
                                                                @method('PUT')
                                                                @csrf
                                                                <input type="hidden" name="tarikhStatus" value="Dalam Proses">
                                                                <button class="btn btn-outline-green-jkr mt-3" type="button"
                                                                    data-bs-dismiss="modal">DALAM PROSES</button>
                                                                <button class="btn btn-green-jkr mt-3" type="submit">DISEMAK</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -------------}}

                                        {{-- tolak modal --}}
                                        {{-- <div class="modal fade" id="tolak" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                                                <div class="modal-content position-relative">
                                                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1"> -----------}}
                                                        {{-- <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                            data-bs-dismiss="modal" aria-label="Close"></button> --}}
                                                    {{-- </div>
                                                    <div class="modal-body p-0">

                                                        <div class="p-4 text-center">
                                                            <h5 class="h5 text-green-jkr">Adakah anda pasti ingin Sudah Menyemak Maklum Balas ini?</h5>
                                                            <form action="/pengurusan_maklumat/maklum_balas/{{ $mb->id }}"
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
                                         </div> --}}
                                    {{-- </td>
                                </tr>
                            @endforeach
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection  --}}
