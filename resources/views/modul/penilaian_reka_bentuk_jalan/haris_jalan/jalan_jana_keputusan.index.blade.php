@extends('layouts.base')

@section('content')
    {{-- header --}}
    <div class="row mb-3">
        <div class="col">
            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                    Jana Skor Kad
                </li>
            </ol>
        </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3 class="mb-0 text-primary"><strong> PENILAIAN REKA BENTUK JALAN</strong></h3>
        </div>
    </div>

    <hr class="text-primary mb-3">

    <div class="row">
      <div class="col">
          <h4 class="mb-0 text-primary"><strong>Senarai Penilaian Sedia Di Jana</strong></h4>
      </div>
  </div>

    <div class="row d-flex justify-content-center table-responsive scrollbar">
        <table class="table table-bordered">
            <thead class="text-white bg-orange-jkr">
                <tr>
                    <th scope="col">Bil.</th>
                    <th scope="col">ID Rujukan Skala</th>
                    <th scope="col">Nama Projek</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Status Penilaian Verifikasi</th>
                    <th scope="col">Tindakan</th>
                </tr>
                
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1.</th>
                    <td>SKL0202</td>
                    <td>Bina Jalan</td>
                    <td>Damansara Perdana</td>
                    <td>Penilaian Verifikasi Berjaya</td>
                    <td>
                        <a href="#" type="button" class="btn btn-warning">Jana Kad Skor</a>
                    </td>
                    
                </tr>
            </tbody>
            </table>
        </div>
    </div>

    {{-- score summary --}}
    <div>
        <form action="">
          <table>
            <div class="row3 mx-4 table-responsive scrollbar">
                <div class="col">
                  <table class="table table-bordered line-table text-center" style="width: 100%">
                    <thead class="text-white bg-orange-jkr">
                      <tr>
            
                        
                        <th colspan="3"></th>
                       
                        <th colspan="4">DESIGN</th>
                        
         
                      </tr>
                      <tr>
                        
                        <th colspan="3">TOTAL POINTS (CORE)</th>
                        
                        <th >MAX </th>
                        <th >TARGET </th>
                        <th >ASSESSMENT </th>
                      </tr>
    
                    </thead>
                    <tbody>
  
    
                      <tr>
                        <td colspan="1">SM</td>
                        <td colspan="2">SUSTAINABLE SITE PLANNING AND MANAGEMENT</td>
                        {{-- <td></td> --}}
                        <td>18</td>
                        <td>0</td>
                        <td>0</td>
                      </tr>

                      <tr>
                        <td colspan="1">PT</td>
                        <td colspan="2">PAVEMENT TECHNOLOGIES</td>
                        {{-- <td></td> --}}
                        <td>12</td>
                        <td>0</td>
                        <td>0</td>
                      </tr>
    
                      <tr>
                        <td colspan="1">EW</td>
                        <td colspan="2">ENVIRONMENT & WATER</td>
                        {{-- <td></td> --}}
                        <td>4</td>
                        <td>0</td>
                        <td>0</td>
                      </tr>

                      <tr>
                        <td colspan="1">AE</td>
                        <td colspan="2">ACCESS & EQUITY</td>
                        {{-- <td></td> --}}
                        <td>3</td>
                        <td>0</td>
                        <td>0</td>
                      </tr>

                      <tr>
                        <td colspan="1">CA</td>
                        <td colspan="2">CONSTRUCTION ACTIVITIES</td>
                        {{-- <td></td> --}}
                        <td>19</td>
                        <td>0</td>
                        <td>0</td>
                      </tr>

                      <tr>
                        <td colspan="1">MR</td>
                        <td colspan="2">MATERIAL AND RESOURCES</td>
                        {{-- <td></td> --}}
                        <td>12</td>
                        <td>0</td>
                        <td>0</td>
                      </tr>

                      <tr>
                        <td colspan="1">EC</td>
                        <td colspan="2">ELECTIVE CRITERIA</td>
                        {{-- <td></td> --}}
                        <td>27</td>
                        <td>0</td>
                        <td>0</td>
                      </tr>

                      <tr>
                        <td colspan="1">IN</td>
                        <td colspan="2">INOVATION</td>
                        {{-- <td></td> --}}
                        <td>5</td>
                        <td>0</td>
                        <td>0</td>
                      </tr>

                      <tr>
                        <td colspan="3">TOTAL CORE POINTS	</td>
                        {{-- <td></td> --}}
                        <td>68</td>
                        <td>0</td>
                        <td>0</td>
                      </tr>

                      <tr>
                        <td colspan="3">TOTAL ELECTIVE & INNOVATION POINTS	</td>
                        {{-- <td></td> --}}
                        <td>15</td>
                        <td>0</td>
                        <td>0</td>
                      </tr>
                      
  
                    </tbody>

                  </table>
  
                  
        </form>
        </div> 

        <div>
            <form action="">
              <table>
                <div class="row3 mx-4 table-responsive scrollbar">
                    <div class="col">
                      <table class="table table-bordered line-table text-center" style="width: 100%">
                        <thead class="text-white bg-orange-jkr">
                         
                          <tr>
                             <th></th>
                            <th colspan="3" rowspan="3">TARGET SUMMARY</th>
                            <th colspan="3" rowspan="3">SCORING VERIFICATION SUMMARY</th>
                            
                            
                          </tr>
        
                        </thead>
                        <tbody>
      
        
                          <tr>
                            <td colspan="1">TOTAL SCORE (%)</td>
                            <td colspan="2">0</td>
                            <td colspan="2">0</td>

                          </tr>
    
                          <tr>
                            <td colspan="1" rowspan="3">pH JKR RATING</td>
                            <td colspan="2" >0</td>
                            <td colspan="2" >0</td>

                            {{-- <td>ds</td> --}}
                            
                          </tr>
                          
                          <tr>
                              <td>NO RECOGNITION</td>
                          </tr>



                          

                          

                        



                         
        
                          
                          
      
                        </tbody>
                        
                      </table>
      
                      <div align="center" class="mt-3">
                        <button class="btn btn-primary" type="submit" title="Simpan">Batal</button>
                        <a href="/verifikasi_permarkahan_jalan/isi_skor_kad_verifikasi2" type="button" class="btn btn-primary">Simpan</a>          
                      </div>
            </form>
            </div> 
        
        <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
            </script>


@endsection