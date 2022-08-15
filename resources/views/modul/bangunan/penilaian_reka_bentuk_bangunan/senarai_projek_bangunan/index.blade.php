@extends('layouts.base')
<!--from DataTables-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<!-- Styles -->
<style>
.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 900px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #EB5500;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 20px 10px;
  border: 1px solid #F4A258;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #fff;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #fff;
}

</style>


@section('content')
<!--Title: Header-->
<div class="header">
    <b>Paparan Senarai Projek</b>
    <h1 class="header-title" style="color: #EB5500">
        PENILAIAN REKA BENTUK BANGUNAN
    </h1>
    <hr style="background-color: #EB5500"></hr>

</div>
    <div class="container-fluid">
        {{-- Carian --}}
        <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" >Nama Projek:</label>
                    <div class="col-md-5">
                        <input type="search" class="form-control rounded" placeholder="Carian" aria-label="Search" aria-describedby="search-addon" />
                    </div>
                        <div class="col-md-5">
                            <button type="button" class="btn btn-primary">Carian</button>
                        </div>         
        </div>

          
        <div class="col-12">
            {{-- <div class="card mt-4"> --}}
                <div class="card-header">
                    {{-- <div class="card-body">

                    </div> --}}
                    
                            <!--TO ENABLE SCROLLBAR AT TABLES-->
                            <div class="table-responsive scrollbar">
                                <table class="content-table">
                                        <thead>
                                            <tr>
                                                <th class="text-center" >Bil</th>
                                                <th class="text-center">ID Rujukan</th>
                                                <th class="text-center">Nama Projek</th>
                                                <th class="text-center">Alamat</th>
                                                <th class="text-center">Status</th>
                                                {{-- <th class="text-center">Tindakan</th>  --}}
                                            </tr>
                                        </thead>

                                    <tbody>
                                        <!--LOOPING TABLES-->
                                        {{-- @foreach ($senaraiprojekbangunan as $key => $p) --}}
                                            <tr>
                                                {{-- <td>{{ $p->id }}</td> --}}
                                                <td style="text-align: center; vertical-align: middle;">1</td>
                                                <td style="text-align: center; vertical-align: middle;">SKL0202</td>
                                                <td style="text-align: center; vertical-align: middle;">Hospital Seri Iskandar</td>
                                                <td style="text-align: center; vertical-align: middle;">Mukah</td>
                                                <td style="text-align: center; vertical-align: middle;">BERJAYA DIDAFTAR</td>
                                                {{-- <td style="text-align: center; vertical-align: middle;">{{ $p->alamat }}</td> --}}
                                                {{-- <td style="text-align: center; vertical-align: middle;">{{ $pdkk->status}}</td> --}}
                                                {{-- <td style="text-align: center; vertical-align: middle;"><a href="/pendaftarankeselamatankebakaran/{{$pdkk->id}}/edit">Kemaskini</a></td> --}}
                                                {{-- <td>
                                                    <form action="/senarai_projek_bangunan/" method="post">
                                                        @csrf 

                                                        <button type="submit" class="btn btn-outline-dark btn-sm">Daftar</button>
                                                    </form>
                                                </td> --}}
                                            </tr>
                                        {{--@endforeach--}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
    </div>
@endsection