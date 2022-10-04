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
                      <td>EW</td>
                      <td colspan="6" align="left">ENVIRONMENT & WATER</td>
                     
                      
                      
                      
                    </tr>
  
                    <tr>
                      <td colspan="1" rowspan="2">EW 1</td>
                      <td colspan="2">ENVIRONMENTAL MANAGEMENT SYSTEM</td>
                      {{-- <td></td> --}}
                      <td>3</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>
  
                    <tr>
                      <td>Provision of EPW in contract (Design Stage)</td>
                      <td rowspan="1">CSFJ</td>
                      <td>3</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
  
                    

                    

                    <tr>
                      <td colspan="1" rowspan="3">EW 2</td>
                      <td colspan="2">STORMWATER MANAGEMENT</td>
                      {{-- <td></td> --}}
                      <td>2</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    
  
                    {{-- <tr>
                      <td rowspan="9">SM2</td>
                      <td colspan="2">Road alignment</td>
                      <td>6</td>
                      
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr> --}}

                    <tr>
                      <td >Develop a stormwater management documents and frawing plans</td>
                      <td rowspan="2">CKAS</td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >Develop a stromwater management plan for the site using stormwater</td>
                      {{-- <td></td> --}}
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    
                    <tr >
                      <td colspan="3"> SUB TOTAL EW POINT</td>
                      <td>5</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>

                    <tr>
                      <td>AE</td>
                      <td colspan="6" align="left">ACCESS & EQUITY</td>
                     
                      
                      
                      
                    </tr>
  
                    <tr>
                      <td colspan="1" rowspan="5">AE 1</td>
                      <td colspan="2">SAFETY AUDIT</td>
                      {{-- <td></td> --}}
                      <td>5</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Road Safety Audit (During Design Stage)</td>
                      <td></td>
                      <td>3</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Road Safety Audit (During Construction Stage)</td>
                      <td></td>
                      <td>3</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Additional Audit For Traffic Management Safety Report During Construction</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Road Safety Audit (During Operational Stage)</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td colspan="3"> SUB TOTAL AE POINT</td>
                      <td>5</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>

                    <tr>
                      <td>CA</td>
                      <td colspan="6" align="left">CONSTRUCTION ACTIVITY</td>
                      
                    </tr>
                    

                    <tr>
                      <td colspan="1" rowspan="2">CA 1</td>
                      <td colspan="2">REQUIREMENT FOR ROAD WORKS DESIGN</td>
                      {{-- <td></td> --}}
                      <td>3</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >MS ISO 9001:2008 or (latest version) certification for main contractor</td>
                      <td></td>
                      <td>3</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="3">CA 2</td>
                      <td colspan="2">OCCUPTIONAL HEALTH AND SAFETY MANAGEMENT SYSTEM</td>
                      {{-- <td></td> --}}
                      <td>3</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >OHSAS 18001:2007 0r (latest version) certification for main contractor</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >To provide site safety and health officer with certification by DOSH</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="5">CA 3</td>
                      <td colspan="2">OCONSTRUCTION WASTE MANAGEMENT PLAN	</td>
                      {{-- <td></td> --}}
                      <td>4</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Create, establish, implement and maintain a formal construction waste management plan during road construction</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Provision of Waste Management Plan in the contract (BQ)</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Provide a designated location to segregate construction waste on-site</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Appoint the licensed contractor(s) to collect the construction waste </td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="4">CA 4</td>
                      <td colspan="2">TRAFFIC MANAGEMENT PLAN</td>
                      {{-- <td></td> --}}
                      <td>4</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Create, establish and implement a formal traffic management plan during Design and road construction stage</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Provision of Traffic Management Officer in the contract document (BQ)</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td >Provision of third party auditor for Traffic Management Plan (TMP)</td>
                      <td></td>
                      <td>1</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="2">CA 5</td>
                      <td colspan="2">SITE ROUTINE MAINTENANCE PLAN 	</td>
                      {{-- <td></td> --}}
                      <td>2</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Create, establish, implement routine maintenanace for road project </td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="2">CA 6</td>
                      <td colspan="2">HOUSEKEEPING 	</td>
                      {{-- <td></td> --}}
                      <td>2</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >"Provision Housekeeping implementation in the contract document/ BQ
                        OR
                        Establish and implement housekeeping during construction "</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr>
                      <td colspan="1" rowspan="4">CA 7</td>
                      <td colspan="2">HOUSEKEEPING 	</td>
                      {{-- <td></td> --}}
                      <td>4</td>
                      <td>0</td>
                      <td>0</td>
                      <td></td>
                      
                      
                    </tr>

                    <tr>
                      <td >Perform scheduled maintenance of construction machineries</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >Use high performance machineries with low fuel consumption and low air emission</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>
                    <tr>
                      <td >Provision of ESCP and Environmental Monitoring Report (EMR) – (eg. Water/ Air/ Noise Quality ) in the contract</td>
                      <td></td>
                      <td>2</td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                      <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                    </tr>

                    <tr >
                      <td colspan="3"> SUB TOTAL CA POINT</td>
                      <td>22</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>

                  </tbody>
                </table>

                <div align="center" class="mt-3">
                  <button class="btn btn-primary" type="submit" title="Simpan">Batal</button>
                  <a href="/verifikasi_permarkahan_jalan/isi_skor_kad_verifikasi4" type="button" class="btn btn-primary">Simpan</a>          
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

