@extends('layouts.base')

@section


    <table>
        <thead class="bg-200 text-900">
            <tr>
                <th class="text-center">Bil</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Syarikat</th>
                <th class="text-center">No Telefon</th>
                <th class="text-center">No Fax</th>
                <th class="text-center">Emel</th>
                <th class="text-center">Disiplin</th>
                <th></th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($pemudahcara as $key => $s)
            <tr>
                {{-- <td>{{ $s->id }}</td> --}}
                <td style="text-align: center; vertical-align: middle;">{{$key + 1}}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $s->nama }}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $s->syarikat_cawangan }}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $s->no_tel }}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $s->noFax}}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $s->emel}}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $s->disiplin}}</td>

@endsection