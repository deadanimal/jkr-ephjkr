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
            <h3 class="mb-0 text-primary"><strong>PENILAIAN REKA BENTUK JALAN</strong></h3>
        </div>
    </div>

    <hr class="text-primary mb-3">

    <div class="row">
        <div class="col">
            <h4 class="mb-0 text-primary"><strong>Skor Kad</strong></h4>
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
                      <th colspan="3">Markah</th>
                      <th >Ulasan / Maklum Balas Pemudah Cara</th>
       
                    </tr>
                    <tr>
                      <th></th>
                      <th></th>
                      <th >7</th>
                      <th >0</th>
                      <th >0</th>
                      <th></th>
                    </tr>
  
                  </thead>
                  <tbody>
  
                    <tr>
                      <th rowspan="4">PT1</th>
                      <th >Existing pavement evaluation</th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
  
                    <tr>
                      <th >Surface condition survey</th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                    </tr>
  
                    <tr>
                      <th >Deflection test</th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                    </tr>
  
                    <tr>
                      <th >Trial pit</th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                    </tr>
  
                    <tr>
                      <th rowspan="1">PT2</th>
                      <th >Permeable pavement</th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                    </tr>

                    <tr>
                      <th rowspan="4">AE1</th>
                      <th >Safety audit</th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
  
                    <tr>
                      <th >Road safety audit</th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                    </tr>
  
                    <tr>
                      <th >Additional audit</th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                    </tr>
  
                    <tr>
                      <th >Survey drawing</th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                    </tr>
  
                    <tr>
                      <th rowspan="1">AE2</th>
                      <th >Road alignment</th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                    </tr>

                    <tr>
                      <th rowspan="4">CA1</th>
                      <th >Requirement for road works design</th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
  
                    <tr>
                      <th >To provide side safety</th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                    </tr>
  
                    <tr>
                      <th >Provide designated road</th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                    </tr>
  
                    <tr>
                      <th >Create establish, implement routine maintenance for road</th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                    </tr>
  
                    <tr>
                      <th rowspan="1">CA2</th>
                      <th >House keeping</th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                      <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                    </tr>

                  </tbody>
                </table>

                <div align="center" class="mt-3">
                  <button class="btn btn-primary" type="submit" title="Simpan">Batal</button>
                  <a href="/penilaian_reka_bentuk_jalan/isi_skor_kad_page3" type="button" class="btn btn-primary">Simpan</a>          
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

