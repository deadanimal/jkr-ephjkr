@extends('layouts.base')
@section('content')
    <!--header-->
    <div class="row mb-3">
        <div class="col">
            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    
                    <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                        Isi Skor Kad
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
            <h4 class="mb-0 text-primary"><strong>Skor Kad</strong></h4>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action= "/penilaian_reka_bentuk_gpss/melantik_pemudah_cara_jalan/{id}" method="post" enctype="multipart/form-data">
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
                    <div class="mb-3 row">
                      <label class="col-sm-2 col-form-label">Kategori:</label>
                  <div class="col-sm-10">
                      <input class="form-control" type="text" autocapitalize="off" name="no_tel" />
                  </div>
                  </div>
                </form>
            </div>
        </div>
    </div>

    <div>
      <form action="">
        <table>
          <div class="row3 mx-4 table-responsive scrollbar">
              <div class="col">
                <table class="table table-bordered line-table text-center" style="width: 100%">
                  <thead class="text-white bg-orange-jkr">
                    <tr>
          
                      
                      <th >Kod</th>
                      <th >Kriteria</th>
                      <th >Responsibility</th>
                      <th colspan="4">Design</th>
                      
       
                    </tr>
                    <tr>
                      
                      <th></th>
                      <th></th>
                      <th></th>
                      <th >MAX POINT</th>
                      <th >TARGET POINT</th>
                      <th >ASSESSMENT POINT</th>
                      <th>COMMENT BY ASSESSOR</th>
                    </tr>
  
                  </thead>
                  <tbody>

                    <tr>
                      <td>SM</td>
                      <td colspan="6" align="left">site planning</td>
                     
                      
                      
                      
                    </tr>
  
                    <tr>
                      <td colspan="1" rowspan="12">SM1</td>
                      <td colspan="2">Requirement for road works design</td>
                      {{-- <td></td> --}}
                      <td>7</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>
  
                    <tr>
                      <td >Traffic study</td>
                      <td rowspan="7">CJ</td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
  
                    <tr>
                      <td >Site investigation data</td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >response to public</td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
  
                    <tr>
                      <td >Survey drawing</td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Flood records</td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Value Management</td>
                      <td>1</td>
                      {{-- <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td> --}}
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >As Built Drawings</td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Accident Reports</td>
                      <td>CSFJ</td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Structure Replacement</td>
                      <td rowspan="3">CJ</td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Forensic Report</td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Pavement Evaluation</td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
  
                    <tr>
                      <td rowspan="9">SM2</td>
                      <td >Road alignment</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Slope not more tdan 6berms</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >cut slope not ste</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >cut slope not ste</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >cut slope not ste</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >cut slope not ste</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >cut slope not ste</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >cut slope not ste</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >cut slope not ste</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td rowspan="7">SM3</td>
                      <td >Road alignment</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Slope not more tdan 6berms</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >cut slope not ste</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >cut slope not ste</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >cut slope not ste</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >cut slope not ste</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >cut slope not ste</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td rowspan="4">SM4</td>
                      <td >Road alignment</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Slope not more tdan 6berms</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >cut slope not ste</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >cut slope not ste</td>
                      <td></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td colspan="3"> SUB TOTAL SM POINT</td>
                      <td>18</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>

                  </tbody>
                </table>

                <div align="center" class="mt-3">
                  <button class="btn btn-primary" type="submit" title="Simpan">Batal</button>
                  <a href="/penilaian_reka_bentuk_jalan/isi_skor_kad_page2" type="button" class="btn btn-primary">Simpan</a>          
                </div>
      </form>
      </div>   
    
    
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

