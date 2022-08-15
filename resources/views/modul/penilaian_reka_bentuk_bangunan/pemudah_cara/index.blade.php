@extends('layouts.base')

@section('content')


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
        @foreach ($projeks as $key => $p)
        
            <tr>
                {{-- <td>{{ $s->id }}</td> --}}
                <td style="text-align: center; vertical-align: middle;">{{$key + 1}}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $p->$pemudah_cara->input('nama') }}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $p->$pemudah_cara->input('syarikat_cawangan') }}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $p->$pemudah_cara->input('no_tel') }}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $p->$pemudah_cara->input('no_fax')}}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $p->$pemudah_cara->input('email')}}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $p->$pemudah_cara->input('disiplin')}}</td>
            </tr>
        
        @endforeach
    </table>
@endsection