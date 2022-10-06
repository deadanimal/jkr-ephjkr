@extends('layouts.base')

<link rel="stylesheet" href="/cssfile/pengesahan_penilaian_style.css">

@section('content')

 {{-- header --}}
 <div class="row">
  <div class="col">
      <h3 class="mb-0 text-primary"><strong>PENILAIAN REKA BENTUK GPSS</strong></h3>
  </div>
</div>

<hr class="text-primary mb-3">

<div class="row mb-3">
  <div class="col">
      <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                  Architectural Works (Aw)
              </li>
          </ol>
      </nav>
  </div>
</div>

<div class="row3 mx-1 text-center">
  <form action= "/penilaian_reka_bentuk_gpss/simpan_pengesahan_penilaian/{id}" method="post" enctype="multipart/form-data">
    @method('POST')
      @csrf
      <div class="col">
        <table class="table table-bordered line-table text-center" style="width: 100%">
          <thead class="text-white bg-orange-jkr">
            
            <tr>
              <th colspan="8">List of products for architectural works - Sanitary</th>
            </tr>
            <tr>
              <th>No.</th>
              <th >Component</th>
              <th>Product</th>
              <th>Point Allocated</th>
              <th>Point Requested (design)</th>
              {{-- <th>Point Requested (construction)</th>
              <th>Point Awarded</th> --}}
              <th >Remark</th>
            </tr>
          </thead>
          <tbody>
            
            <tr class="text-center">
              <td rowspan="9" >1</td>
              <td rowspan="9">Sanitary Features</td>
              <td >Tap fitting</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwSanitaryTapFitting}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwSanitaryTapFitting}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwSanitaryTapFitting}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwSanitaryTapFitting}}</td>            
                                
            </tr>
  
            <tr>
              <td >Water closet</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwSanitaryWaterCloset}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwSanitaryWaterCloset}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwSanitaryWaterCloset}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwSanitaryWaterCloset}}</td>
            </tr>
  
            <tr>
              
              <td >Water basin</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwSanitaryWaterBasin}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwSanitaryWaterBasin}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwSanitaryWaterBasin}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwSanitaryWaterBasin}}</td>                    
            </tr>
  
            <tr>
              <td >Sink</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwSanitarySink}}   </td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwSanitarySink}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwSanitarySink}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwSanitarySink}}</td>                   
            </tr>
  
            <tr>
              <td >Urinal</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwSanitaryUrinal}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwSanitaryUrinal}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwSanitaryUrinal}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwSanitaryUrinal}}</td>                    
            </tr>
  
            <tr>
              <td >Bidet</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwSanitaryBidet}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwSanitaryBidet}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwSanitaryBidet}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwSanitaryBidet}}</td>                    
            </tr>
  
            <tr>
              <td >Floor trap</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwSanitaryFloorTrap}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwSanitaryFloorTrap}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwSanitaryFloorTrap}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwSanitaryFloorTrap}}</td>                    
            </tr>
  
            <tr>
              <td >Shower</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwSanitaryShower}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwSanitaryShower}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwSanitaryShower}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwSanitaryShower}}</td>                    
            </tr>
  
            <tr>
              <td >Faucet</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwSanitaryFaucet}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwSanitaryFaucet}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwSanitaryFaucet}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwSanitaryFaucet}}</td>                   
            </tr>
          </tbody>
        </table>

        <div>
          <p>NOTE. Figure B.3 presents a non-exhaustive list of products of reference for architectural works. 
            Products used in a project may be selected from the list or can be added when required.
          </p>
        </div>

        <div>
        
        </div>
  
        {{-- <div align="center" class="mt-3">
          <button class="btn btn-primary" type="submit" title="sahkan" name="pengesahan">Sahkan</button>
        </div> --}}

      <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Pengesahan:</label>
        <div class="col-sm-10" align='center'>
          <button class="btn btn-primary" type="submit" title="sahkan" name="pengesahan">Sahkan</button>
        </div>
      </div>
  
      </div>
  
  </form>
   

  </div>
   
@endsection
