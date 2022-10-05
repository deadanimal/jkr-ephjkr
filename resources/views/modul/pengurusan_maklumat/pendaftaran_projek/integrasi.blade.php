@extends('layouts.base')
@section('content')
    <div class="row mb-3">
        <div class="col">
            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/pengurusan_maklumat/senarai_pengguna" class="text-secondary">Pendaftaran Projek</a>
                    </li>
                    <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                        Papar Senarai Projek
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3 class="mb-0 text-primary"><strong>PENDAFTARAN PROJEK</strong></h3>
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
                                <th class="sort">Bil. </th>
                                <th class="sort">Nama Projek</th>

                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($id_pengguna as $r)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- <td>{{ $r->tajuk }}</td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- <button type="button" class="btn btn-danger" onclick="a()">
        check
    </button>

    <script>
        $(document).ready(function() {
            setInterval(() => {
                console.log('asa');
            }, 1000);
            function a() {
                console.log('a');
            }
            $('#check').click(function() {
                // $.ajax({
                //             url: 'http://admin3-skala.jkr.gov.my/~vnisa/2022-devpskala/web/www/api/ephjkr-api.php',
                //             type: "GET"
                //             data: {
                //                 id_pengguna: '850703045020', //no ic pengguna e-PHIKR
                //             },
                //             dataType: "json",
                //             cache: false,
                //             success: function(data) {
                //                 console.log('a', data);
                //                 //sila masukkan kod disini
                //                 //variable data adalah respon daripada server
                //             }
                //         });
                console.log('asas');
            });
        })

        function a() {
            console.log('a');
        }
        $('#check').click(function() {
            // $.ajax({
            //             url: 'http://admin3-skala.jkr.gov.my/~vnisa/2022-devpskala/web/www/api/ephjkr-api.php',
            //             type: "GET"
            //             data: {
            //                 id_pengguna: '850703045020', //no ic pengguna e-PHIKR
            //             },
            //             dataType: "json",
            //             cache: false,
            //             success: function(data) {
            //                 console.log('a', data);
            //                 //sila masukkan kod disini
            //                 //variable data adalah respon daripada server
            //             }
            //         });
            console.log('asas');
        });
    </script> --}}
@endsection