@extends('layouts.base')
<!--from DataTables-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<style>
    table {
    border-collapse: collapse;
    border-radius: 1em;
    overflow: hidden;
    box-shadow: 0px 2.86088px 7.15219px 7.15219px rgba(0, 0, 0, 0.05);
    border-color: #F4A258;
    }
</style>

@section('content')

<div class="header">
        <b class="text-dark-green-jkr">Borang Validasi</b>

    <h1 class="jkr-header-title">
        PENILAIAN VALIDASI PERMARKAHAN BANGUNAN
    </h1>
    <hr class="line-horizontal-jkr">
    

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
                                            </tr>
                                        </thead>
                                    {{-- </table>  --}}

                                    {{-- <table class="kotak" style="width:100%"> --}}
                                    <tbody id="myTable">
                                        <!--LOOPING TABLES-->
                                        @foreach ($projeks as $key => $p)
                                            <tr class="text-black">
                                                <td style="text-align: center; vertical-align: middle;">{{ $loop->iteration }}</td>
                                                {{-- <td style="text-align: center; vertical-align: middle;">1</td> --}}
                                                <td style="text-align: center; vertical-align: middle;">{{$p->id_ruj_skala}}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{$p->namaProjek}}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{$p->alamatProjek}}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{$p->statusProjek}}</td>
                                                <td style="text-align: center; vertical-align: middle;">
                                                    <a class="btn btn-primary" href="/validasi_permarkahan_bangunan/borang_validasi/{{$p->id}}" role="button"
                                                    data-toggle="tooltip" data-placement="bottom" title="Kemaskini Penilaian Validasi">Kemaskini</a>
                                                </td>
                                        @endforeach
                                        </tbody>
                                    {{-- </table> --}}
                                </table> 
                            </div>
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