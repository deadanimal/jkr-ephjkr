@extends('layouts.base')
@section('content')
    <!--header-->
    <div class="row mb-3">
        <div class="col">
            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/pengurusan_maklumat/verifikasi_permarkahan_jalan" class="text-secondary">Senarai Penilaian Verifikasi</a>
                    </li>
                    <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                        Pengesahan Markah Penilaian 
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3 class="mb-0 text-primary"><strong>VERIFIKASI PERMARKAHAN JALAN</strong></h3>
        </div>
    </div>

    <hr class="text-primary mb-3">

    <div class="row">
        <div class="col">
            <h5 class="mb-0 text-primary"><strong>Pengesahan Markah Penilaian</strong></h5>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action= "/verifikasi_permarkahan_jalan/verifikasi_permarkahan/{id}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!--Nama-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nama Projek:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="nama" />
                    </div>
                    </div>
                    <!--Syarikat/Cawangan-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Syarikat:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="syarikat_cawangan" />
                    </div>
                    </div>
                    <!--No. Telefon-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nama Pemudah Cara Jalan:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="no_tel" />
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <table>
        <div class="row3 mx-4 table-responsive scrollbar">
            <div class="col">
              <table class="table table-bordered line-table text-center" style="width: 100%">
                <thead class="text-white bg-orange-jkr">
                  <tr>
        
                    
                    <th >Kod</th>
                    <th colspan="8">Perancangan & Pengurusan Tapak Lestari</th>
                    <th colspan="12">Pembangunan Baru</th>
                    <th colspan="12">Dokumen Pembuktian</th>
                    <th rowspan="3">Ulasan / Maklum Balas Penilai</th>
                    <th rowspan="3">Muat Naik Dokumen Sokongan</th>
                    
                    
                    
                  </tr>
                  <tr>
                    <th scope="row">TL</th>
                    <th scope="col" colspan="4">Kriteria</th>
                    <th colspan="4">Kategori Bangunan</th>
                    <th >MM</th>
                    <th >MS</th>
                    <th >MR</th>
                    <th >MMV</th>
                    <th >MS</th>
                    <th >MV</th>
                    <th >ML</th>
                    <th colspan="6">Reka Bentuk (Peringkat 2)</th>
                    <th colspan="6">Verifikasi (Peringkat 3)</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>TL1</th>
                    <th colspan="4" >Perancangan Tapak</th>
                    <th colspan="4">A</th>
                    <th>0</th>            
                    <th>0</th>            
                    <th>24</th>            
                    <th>0</th>            
                    <th>0</th>            
                    <th>0</th>            
                    <th>0</th>
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>
                    <th>pdf</th>             
                  </tr>
                  <tr>
                    <th>TL2</th>
                    <th colspan="4" >Sistem Pengurusan Alam Sekitar</th>
                    <th colspan="4">A</th>
                    <th>0</th>            
                    <th>0</th>            
                    <th>24</th>            
                    <th>0</th>            
                    <th>0</th>            
                    <th>0</th>            
                    <th>0</th>
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th> 
                    <th>pdf</th>            
                  </tr>
                  <tr>
                    <th>TL3</th>
                    <th colspan="4" >Pemotongan & Penambahan Markah</th>
                    <th colspan="4">A</th>
                    <th>0</th>            
                    <th>0</th>            
                    <th>24</th>            
                    <th>0</th>            
                    <th>0</th>            
                    <th>0</th>            
                    <th>0</th>
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>
                    <th>pdf</th>             
                  </tr>
                  <tr>
                    <th>TL4</th>
                    <th colspan="4" >Pelan Kawalan Hakisan & Kelodak(ESCP)</th>
                    <th colspan="4">A</th>
                    <th>0</th>            
                    <th>0</th>            
                    <th>24</th>            
                    <th>0</th>            
                    <th>0</th>            
                    <th>0</th>            
                    <th>0</th>
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>
                    <th>pdf</th>             
                  </tr>
                  <tr>
                    <th>TL5</th>
                    <th colspan="4" >Pemuliharaan & Pemeliharaan Cerun</th>
                    <th colspan="4">A</th>
                    <th>0</th>            
                    <th>0</th>            
                    <th>24</th>            
                    <th>0</th>            
                    <th>0</th>            
                    <th>0</th>            
                    <th>0</th>
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>
                    <th>pdf</th>             
                  </tr>
                  <tr>
                    <th>TL6</th>
                    <th colspan="4" >Pengurusan Air Larian Hujan</th>
                    <th colspan="4">A</th>
                    <th>0</th>            
                    <th>0</th>            
                    <th>24</th>            
                    <th>0</th>            
                    <th>0</th>            
                    <th>0</th>            
                    <th>0</th>
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>             
                    <th colspan="6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga.</th>
                    <th>pdf</th>             
                  </tr>
                </tbody>
              </table>   
            </div>
          </div>
    </table>
    
    
    <!--Container Fluid-->
            <!--JS-->
            <!--JS BUTTON TOOLTIPS-->
            <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
            </script>

@endsection

