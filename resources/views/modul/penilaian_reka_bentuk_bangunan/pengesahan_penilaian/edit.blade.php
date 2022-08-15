@extends('layouts.base')
<link rel="stylesheet" href="/cssfile/pengesahan_penilaian_style.css">

@section('content')
<body>
    <!--TO ENABLE SCROLLBAR AT TABLES-->
    <div class="table-responsive scrollbar">
        <table>
            <thead>
                <tr>
                    <th>Kod</th>
                    <th colspan="2">Perancangan & Pengurusan Tapak Lestari</th>
                    <th colspan="7">Pembangunan Baru</th>
                    <th rowspan="3">Markah</th>
                    <th>Dokumen</th>
                </tr>
            </thead>
                <tr>
                    <th>TL</th>
                    <th>Kriteria</th>
                    <th>Kategori Bangunan</th>
                    <th>MM</th>
                    <th>MS</th>
                    <th>MR</th>
                    <th>MMV</th>
                    <th>MS</th>
                    <th>MV</th>
                    <th>ML</th>
                    <th>Reka Bentuk (Peringkat 2)</th>

                </tr>

                <tr>
                    <th>TL2</th>
                    <th>Sistem Pengurusan Alam Sekitar</th>
                    <th>A</th>
                    <th>0</th>
                    <th>0</th>
                    <th>24</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>Lorem Ipsum</th>

                </tr>
                <tr>
                    <th>TL3</th>
                    <th>Sistem Pengurusan Alam Sekitar</th>
                    <th>A</th>
                    <th>0</th>
                    <th>0</th>
                    <th>24</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>Lorem Ipsum</th>

                </tr>

                <tr>
                    <th>TL3</th>
                    <th>Sistem Pengurusan Alam Sekitar</th>
                    <th>A</th>
                    <th>0</th>
                    <th>0</th>
                    <th>24</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>Lorem Ipsum</th>

                </tr>

                <tr>
                    <th>TL4</th>
                    <th>Pelan Kawalan Hakisan & Kelodak (ESCP)</th>
                    <th>A</th>
                    <th>0</th>
                    <th>0</th>
                    <th>24</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>Lorem Ipsum</th>

                </tr>

                <tr>
                    <th>TL5</th>
                    <th>Pemuliharaan & Pemeliharaan Cerun</th>
                    <th>A</th>
                    <th>0</th>
                    <th>0</th>
                    <th>24</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>Lorem Ipsum</th>

                </tr>

                <tr>
                    <th>TL6</th>
                    <th>Pengurusan Air Larian Hujan</th>
                    <th>A</th>
                    <th>0</th>
                    <th>0</th>
                    <th>24</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>Lorem Ipsum</th>

                </tr>

                <tr>
                    <th>TL8</th>
                    <th>Sistem Pengurusan Alam Sekitar</th>
                    <th>A</th>
                    <th>0</th>
                    <th>0</th>
                    <th>24</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>Lorem Ipsum</th>

                </tr>

                <tr>
                    <th>TL8.1</th>
                    <th>Memelihara & Memulihara Pokok yang Matang</th>
                    <th>A</th>
                    <th>0</th>
                    <th>0</th>
                    <th>24</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>Lorem Ipsum</th>

                </tr>
        
        </table>
    </div>
</body>

<td>
    <form action="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian/{id}" method="post">
        @csrf
        @method('DELETE')
        <div class="text-left">
            <button type="submit" class="btn-tolak">Tolak</button>
        </div>
    </form>
</td>

<td>
    <form action="/penilaian_reka_bentuk_bangunan/pengesahan_penilaian/{id}" method="post">
        @csrf
        @method('POST')
        <div class="text-right">
            <button type="submit" class="btn-sah">Sah</button>
        </div>
    </form>
</td>
@endsection