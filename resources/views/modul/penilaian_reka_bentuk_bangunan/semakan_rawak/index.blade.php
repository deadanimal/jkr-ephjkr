@extends('layouts.base')
<!--from DataTables-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/cssfile/style.css">

<!-- Styles -->
@section('content')
<!--Title: Header-->
<div class="header">
        <b class="text-dark-green-jkr">Semakan Rawak dan Jana Sijil</b>

    <h1 class="header-title">
        PENILAIAN REKA BENTUK BANGUNAN
    </h1>
    <hr class="hr-jkr">
    

</div>
    <div class="container-fluid">
        <!--Carian Nama Projek-->
        <div class="mt-8 form-group row">
            <label class="col-sm-2 col-form-label">Nama Projek:</label>
                <div class="col-sm-5">
                    <input type="text" id="myInput" class="form-control" placeholder="e-Penarafan Hijau Jabatan Kerja Raya"/>
                </div>
                    <div class="col-sm-5">
                        <button type="button" class="btn btn-primary">Carian</button>
                    </div>
        </div>

          
        <div class="col-12">
            <div class="card-header">
                    {{-- <div class="card-body">

                    </div> --}}
                            <div class="mt-5 row">
                                <table class="table table-bordered line-table" style="width:100%">
                                        <thead class="text-white bg-orange-jkr">
                                            <tr>
                                                <th class="text-center">Bil</th>
                                                <th class="text-center">ID Rujukan</th>
                                                <th class="text-center">Nama Projek</th>
                                                <th class="text-center">Alamat</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Tindakan</th>
                                                <th class="text-center">Sijil</th> 
                                            </tr>
                                        </thead>

                                    <tbody id="myTable">
                                        <!--LOOPING TABLES-->
                                        @foreach ($projeks as $key => $p)
                                            <tr class="text-black">
                                                <td style="text-align: center; vertical-align: middle;">{{ $p->id }}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{$p->id_ruj_skala}}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{$p->namaProjek}}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{$p->alamatProjek}}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{$p->statusProjek}}</td>
                                                <td style="text-align: center; vertical-align: middle;">
                                                    <a class="btn btn-primary" href="/penilaian_reka_bentuk_bangunan/semakan_rawak/{{$p->id}}" role="button"
                                                    data-toggle="tooltip" data-placement="bottom" title="Papar Skor Penilaian">Papar</a>
                                                </td>
                                                <td style="text-align: center; vertical-align: middle;">
                                                    <a class="btn btn-primary" href="/penilaian_reka_bentuk_bangunan/jana_sijil/create" role="button"
                                                        data-toggle="tooltip" data-placement="bottom" title="Jana Sijil">Sijil</a>
                                                </td>
                                            </tr> 
                                        @endforeach
                                    </tbody>
                                </table> 
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

<!---------------JavaScript--------------->
        <!--Filter Paparan Senarai Projek-->
        <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
        </script>
@endsection