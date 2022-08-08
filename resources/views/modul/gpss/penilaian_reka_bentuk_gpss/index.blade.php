@extends('layouts.base')

<!--from DataTables-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<!-- Styles -->

@section('content')

<!--Title: Header-->
<div class="header">
    <h1 class="header-title">
        Akaun Pendaftaran Keselamatan Kebakaran
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
                                    <table id="pdkk" class="display" style="width:100%">

                                        <thead class="bg-200 text-900">
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">No. Kad Pengenalan</th>
                                                <th class="text-center">No. Telefon</th>
                                                <th class="text-center">Alamat</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Tindakan</th>
                                                <th></th> 
                                            </tr>
                                        </thead>

                                    <tbody>
                                        <!--LOOPING TABLES-->
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--JAVASCRIPT-->
<!--from DataTables-->
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="hhttps://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    

<script>
$(document).ready(function() {
    $('#pdkk').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy',
            'csv',
            'excel',
            'pdf',
            {
                extend: 'print',
                text: 'Print all (not just selected)',
                exportOptions: {
                    modifier: {
                        selected: null
                    }
                }
            }
        ],
        select: true
    } );
} );
</script>

    
@endsection