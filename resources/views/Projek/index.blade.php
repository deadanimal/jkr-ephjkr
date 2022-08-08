@extends('layouts.base')
<!--from DataTables-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<!-- Styles -->


@section('content')
<!--Title: Header-->
<div class="header">
    <h1 class="header-title">
        Penilaian Reka Bentuk Bangunan
    </h1>
</div>
    <div class="container-fluid">
        <div class="col-12">
            <div class="card mt-4">
                <div class="card-header">
                    <div class="card-body">

                    </div>
                    
                            <!--TO ENABLE SCROLLBAR AT TABLES-->
                            <div class="table-responsive scrollbar">
                                <table class="table table-bordered table-striped fs--1 mb-0">

                                    <!--DATATABLES CODE-->
                                    <table id="pdkk" class="stripe" >

                                        <thead class="bg-200 text-900">
                                            <tr>
                                                <th class="text-center" style="background-color: #f0a420" >Bil</th>
                                                <th class="text-center" style="background-color: #f0a420">ID Rujukan</th>
                                                <th class="text-center" style="background-color: #f0a420">Nama Projek</th>
                                                <th class="text-center" style="background-color: #f0a420">Alamat</th>
                                                <th class="text-center" style="background-color: #f0a420">Status</th>
                                                <th class="text-center" style="background-color: #f0a420">Tindakan</th>
                                                {{-- <th></th>  --}}
                                            </tr>
                                        </thead>

                                    {{-- <tbody> --}}
                                        <!--LOOPING TABLES-->
                                        {{-- @foreach ($penilaian as $key => $pdkk)
                                            <tr> --}}
                                                {{-- <td>{{ $pdkk->id }}</td> --}}
                                                {{-- <td style="text-align: center; vertical-align: middle;">{{$key + 1}}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{ $pdkk->name }}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{ $pdkk->icNo }}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{ $pdkk->telNo }}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{ $pdkk->alamat }}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{ $pdkk->status}}</td>
                                                <td style="text-align: center; vertical-align: middle;"><a href="/pendaftarankeselamatankebakaran/{{$pdkk->id}}/edit">Kemaskini</a></td>
                                                <td> --}}
                                                    {{-- <form action="/penilaianrekabentukbangunan/{{ $pdkk->id }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-dark btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody> --}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--from DataTables-->
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    
<script>
        $(document).ready( function () {
    $('#pdkk').DataTable();
} );
</script>

@endsection