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
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}
.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}

</style>


@section('content')
<!--Title: Header-->
<div class="header">
        <b>Papar dan Muat Turun Sijil Verifikasi Penilaian Reka Bentuk</b>
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
        <div class="card mt-4">
            <div class="card-header">
                {{-- <div class="card-body">

                </div> --}}
                
                        <!--TO ENABLE SCROLLBAR AT TABLES-->
                        <div class="table-responsive scrollbar">
                            <table class="content-table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Bil</th>
                                            <th class="text-center">ID Rujukan</th>
                                            <th class="text-center">Nama Projek</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Tindakan</th> 
                                        </tr>
                                    </thead>

                                {{-- <tbody> --}}
                                    <!--LOOPING TABLES-->
                                    {{-- @foreach ($projek as $key => $spb) --}}
                                        {{-- <tr> --}}
                                            {{-- <td>{{ $pdkk->id }}</td> --}}
                                            {{-- <td style="text-align: center; vertical-align: middle;">{{$key + 1}}</td> --}}
                                            {{-- <td style="text-align: center; vertical-align: middle;">{{ $spb->namaProjek }}</td> --}}
                                            {{-- <td style="text-align: center; vertical-align: middle;">{{ $spb->alamatProjek }}</td> --}}
                                            {{-- <td style="text-align: center; vertical-align: middle;">{{ $spb->statusProjek }}</td> --}}
                                            {{-- <td style="text-align: center; vertical-align: middle;">{{ $pdkk->alamat }}</td> --}}
                                            {{-- <td style="text-align: center; vertical-align: middle;">{{ $pdkk->status}}</td> --}}
                                            {{-- <td style="text-align: center; vertical-align: middle;"><a href="/pendaftarankeselamatankebakaran/{{$pdkk->id}}/edit">Kemaskini</a></td> --}}
                                            {{-- <td>
                                                <form action="/penilaianrekabentukbangunan/{{ $spb->id }}" method="post">
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
@endsection