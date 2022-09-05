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
        <b class="text-dark-green-jkr">Paparan Senarai Projek</b>

    <h1 class="jkr-header-title">
        PENILAIAN REKA BENTUK BANGUNAN
    </h1>
    <hr class="line-horizontal-jkr">
    

</div>
    <div class="container-fluid">
        <!--Carian Nama Projek-->
        <div class="mt-8 form-group row">
                <label class="col-sm-2 col-form-label">Nama Projek:</label>
                    <div class="col-sm-5">
                        <input type="search" onkeyup="myFunction()" class="form-control" placeholder="e-Penarafan Hijau Jabatan Kerja Raya"/>
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
                                    <tbody>
                                        <!--LOOPING TABLES-->
                                        @foreach ($projeks as $key => $p)
                                            <tr class="text-black">
                                                <td>{{ $p->id }}</td>
                                                {{-- <td style="text-align: center; vertical-align: middle;">1</td> --}}
                                                <td style="text-align: center; vertical-align: middle;">{{$p->id_ruj_skala}}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{$p->namaProjek}}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{$p->alamatProjek}}</td>
                                                <td style="text-align: center; vertical-align: middle;">{{$p->statusProjek}}</td>
                                                <td style="text-align: center; vertical-align: middle;">
                                                    <a class="btn btn-primary" href="/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara" role="button"
                                                    data-toggle="tooltip" data-placement="bottom" title="Daftar Pemudah Cara">Daftar</a>
                                                </td>

                                                {{-- <td>{{ $pdkk->id }}</td> --}}
                                                {{-- <td style="text-align: center; vertical-align: middle;">1</td>
                                                <td style="text-align: center; vertical-align: middle;">SKL0202</td>
                                                <td style="text-align: center; vertical-align: middle;">Hospital Seri Iskandar</td>
                                                <td style="text-align: center; vertical-align: middle;">Mukah</td>
                                                <td style="text-align: center; vertical-align: middle;">BERJAYA DIDAFTAR</td>
                                                <td style="text-align: center; vertical-align: middle;"> --}}
                                                    {{-- <button class="btn-daftar" data-toggle="tooltip" data-placement="bottom" 
                                                    title="Daftar Pemudah Cara" type="submit">
                                                    <a href="/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara/create">Daftar</a>
                                                </button> --}}
                                                    {{-- <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                                                    title="Daftar Pemudah Cara" type="submit">Daftar</button> --}}
                                                    {{-- <a class="btn btn-primary" href="/penilaian_reka_bentuk_bangunan/melantik_pemudah_cara/create" role="button"
                                                    data-toggle="tooltip" data-placement="bottom" title="Daftar Pemudah Cara">Daftar</a>
                                                </td>
                                            </tr>  --}}

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


<!---------JavaScript--------------->
    {{-- <script>
        function myFunction() {
          // Declare variables
          var input, filter, ul, li, a, i, txtValue;
          input = document.getElementById('myInput');
          filter = input.value.toUpperCase();
          ul = document.getElementById("myUL");
          li = ul.getElementsByTagName('li');
        
          // Loop through all list items, and hide those who don't match the search query
          for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              li[i].style.display = "";
            } else {
              li[i].style.display = "none";
            }
          }
        }
        </script> --}}
@endsection