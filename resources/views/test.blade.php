
<!DOCTYPE html>
<html>

<head>
    <div class="row mb-3">
        <div class="col">
            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    
                    <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                        Muat Turun Matlumat Projek
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3 class="mb-0 text-primary"><strong>PENDAFTARAN PROJEK</strong></h3>
        </div>
    </div>
    

    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <hr class="text-primary mb-3">

    <div class="row mt-4 mb-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row mx-4">
                        <div class="col-4 mb-2">
                            <h5 class="h6">ID Skala:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">14234</h5>
                        </div> 
                       {{-- <input type="text" value={{$pendaftaran_projek->id}}> --}}
                        <div class="col-4 mb-2">
                            <h5 class="h6">Nama Projek:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;"> Besar jalan</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Alamat Projek:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">Damansara Perdana</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Poskod:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">420000</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Bandar:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">Damansara</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Negeri:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">Selangor</h5>
                        </div>

                        {{-- <div class="col-4 mb-2">
                            <h5 class="h6">Keluasan Tapak:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pendaftaran_projek->keluasanTapak }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Jumlah Blok Bangunan:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pendaftaran_projek->jumlahblokBangunan }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Dokumen Sokongan:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pendaftaran_projek->dokumenSokongan }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Tarikh:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pendaftaran_projek->tarikh }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">ID Status Projek:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pendaftaran_projek->id }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Tarikh Jangka Mula Pembinaan:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pendaftaran_projek->tarikhJangkaMulaPembinaan }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Tarikh Jangka Siap Pembinaan:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pendaftaran_projek->tarikhJangkaSiapPembinaan }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Kaedah Pelaksaan/Jenis Perolehan:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pendaftaran_projek->kaedahPelaksanaan }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Kod Projek:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pendaftaran_projek->kosProjek }}</h5>
                        </div>

                        

                        <div class="col-4 mb-2">
                            <h5 class="h6">Jenis Projek:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pendaftaran_projek->jenisKategoriProjek }}</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Jenis Kategori:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">{{ $pendaftaran_projek->kategoriBangunan }}</h5>
                        </div> --}}

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>