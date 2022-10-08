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

    

    <div>
      <form action="/verifikasi_permarkahan_jalan/simpan_isi_skor_kad_page5/{id}" method="post" enctype="multipart/form-data">
        @method('POST')
        @csrf
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
                      {{-- <th >ASSESSMENT POINT</th> --}}
                      <th>COMMENT BY ASSESSOR</th>
                    </tr>
  
                  </thead>
                  <tbody>

                    <tr>
                      <td>IN</td>
                      <td colspan="6" align="left">INNOVATION</td>
                     
                      
                      
                      
                    </tr>
  
                    <tr>
                      <td colspan="1" rowspan="2">IN 1</td>
                      <td colspan="2">ANY RELATED INNOVATION</td>
                      {{-- <td></td> --}}
                      <td>5</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>
  
                    <tr>
                      <td>Come up with an idea for a design or construction best practice for road that is not currently included in Manual pH JKR and is more sustainable than standard or conventional practices</td>
                      <td rowspan="1">ANY</td>
                      <td>5</td>
                      <td><input onblur="findTargetPointIN()" type="number" min="0" max="2" class="targetPointIN"></td>
                      {{-- <td><input onblur="findAssessmentPointIN()" type="number" min="0" max="2" class="assessmentPointIN"></td> --}}
                      <td><input onblur="commentIN()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td colspan="3"> TOTAL INNOVATION POINT</td>
                      <td><input type="text" name="markahIN" id="markahIN" /></td> 
                      <td></td>           
                      <td></td>
                      <td></td>
                    </tr>

                  </tbody>
                </table>

                <div align="center" class="mt-3">
                  <button class="btn btn-primary" type="submit" title="Batal">Batal</button>
                  <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
                  {{-- <a href="/penilaian_reka_bentuk_jalan/isi_skor_kad" type="button" class="btn btn-primary">Simpan</a>           --}}
                </div>
      </form>
      </div>  
      
      <script>
        function findTargetPointIN(){
        var arr = document.getElementsByClassName('targetPointIN');
        // add new var 
        var tot=0;
        for(var i=0;i<arr.length;i++){
            if(parseFloat(arr[i].value))
                tot += parseFloat(arr[i].value);
                // add tot2
        }
        document.getElementById('markahIN').value = tot;
      } 
        </script> 
    
    
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

