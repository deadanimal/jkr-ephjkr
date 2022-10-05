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

<div class="row3 mx-1 table-responsive scrollbar text-center">
  <form action= "/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek/{id}" method="post" enctype="multipart/form-data">
    @method('POST')
      @csrf

      <div class="col">
        <table class="table table-bordered line-table text-center" style="width: 100%">
          <thead class="text-white bg-orange-jkr">
            
            <tr>
              <th colspan="8">List of products for architectural works - Floor</th>
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
              <td rowspan="18" >1</td>
              <td rowspan="18">Floor</td>
              <td >Epoxy paint</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorEpoxy}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorEpoxy}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorEpoxy}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorEpoxy}}</td>            
                                  
            </tr>
  
            <tr>
              <td >Floor hardener</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorFloorHardener}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorFloorHardener}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorFloorHardener}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorFloorHardener}}</td>                   
            </tr>
  
            <tr>
              
              <td >Ceramic tiles</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorCeramic}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorCeramic}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorCeramic}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorCeramic}}</td>                    
            </tr>
  
            <tr>
              <td >Stones</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorStones}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorStones}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorStones}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorStones}}</td>                    
            </tr>
  
            <tr>
              <td >Granites</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorGranite}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorGranite}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorGranite}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorGranite}}</td>                    
            </tr>
  
            <tr>
              <td >Marble</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorMarble}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorMarble}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorMarble}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorMarble}}</td>                   
            </tr>
  
            <tr>
              <td >Carpet</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorCarpet}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorCarpet}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorCarpet}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorCarpet}}</td>                    
            </tr>
  
            <tr>
              <td >Carpet underlay</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorUnderlay}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorUnderlay}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorUnderlay}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorUnderlay}}</td>                    
            </tr>
  
            <tr>
              <td >Vinyl</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorVinyl}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorVinyl}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorVinyl}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorVinyl}}</td>                    
            </tr>
  
            <tr>
              <td >Timber</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorTimber}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorTimber}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorTimber}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorTimber}}</td>                    
            </tr>
  
            <tr>
              <td >Interlocking pavers</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorPavers}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorPavers}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorPavers}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorPavers}}</td>                    
            </tr>
  
            <tr>
              <td >Pebble wash</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorPebble}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorPebble}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorPebble}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorPebble}}</td>                  
            </tr>
  
            <tr>
              <td >Bamboo</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorBamboo}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorBamboo}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorBamboo}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorBamboo}}</td>                    
            </tr>
  
            <tr>
              <td >Cement render</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorCement}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorCement}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorCement}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorCement}}</td>                    
            </tr>
  
            <tr>
              <td >Marmoleum</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorMarmoleum}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorMarmoleum}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorMarmoleum}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorMarmoleum}}</td>                   
            </tr>
  
            <tr>
              <td >Rubber mat(playgrouubd)</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorRubber}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorRubber}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorRubber}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorRubber}}</td>
            </tr>
  
            <tr>
              <td >Concrete imprint</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorConcrete}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorConcrete}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorConcrete}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorConcrete}}</td>                   
            </tr>
  
            <tr>
              <td >Laminated flooring</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorFloorLaminate}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorFloorLaminate}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorFloorLaminate}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorFloorLaminate}}</td>                   
            </tr>
            
            <tr>
              <td rowspan="3">2</td>
              <td rowspan="3">Water proofing</td>
              <td >Adhesive</td>
              <td >2</td>
              <td> {{$gpss_bangunan->AwFloorProofingAdhesive}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorProofingAdhesive}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorProofingAdhesive}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorProofingAdhesive}}</td>                  
            </tr>
  
            <tr>
              <td >Sealant</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorProofingSealant}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorProofingSealant}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorProofingSealant}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorProofingSealant}}</td>                   
            </tr>
  
            <tr>
              <td >Grout</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwFloorProofingGrout}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwFloorProofingGrout}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwFloorProofingGrout}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwFloorProofingGrout}}</td>                   
            </tr>
  
            {{-- New table for wall system --}}
            <tr class="text-white bg-orange-jkr">
              <th colspan="8">List of products for architectural works - System Furniture</th>
            </tr>
  
            <tr>
              
              <td rowspan="5">1</td>
              <td rowspan="5">Built in furniture (system furniture)</td>
              <td >Office workstation</td>
              <td >2</td>
              <td> {{$gpss_bangunan->AwSystemBuiltOffice}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwSystemBuiltOffice}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwSystemBuiltOffice}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwSystemBuiltOffice}}</td>
  
            </tr>
  
            <tr>
              <td >Toilet cubicle</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwSystemBuiltToilet}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwSystemBuiltToilet}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwSystemBuiltToilet}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwSystemBuiltToilet}}</td>                   
            </tr>
  
            <tr>
              <td >Institutional seating</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwSystemBuiltInstitutional}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwSystemBuiltInstitutional}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwSystemBuiltInstitutional}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwSystemBuiltInstitutional}}</td>                   
            </tr>
  
            <tr>
              <td >Built-in cupboards</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwSystemBuiltCupboards}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwSystemBuiltCupboards}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwSystemBuiltCupboards}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwSystemBuiltCupboards}}</td>                   
            </tr>
  
            <tr>
              <td >Sport facilities seating</td>
              <td >2</td>
              <td>{{$gpss_bangunan->AwSystemBuiltSport}}</td>            
              {{-- <td>{{$gpss_bangunan->Cons_AwSystemBuiltSport}}</td>             --}}
              {{-- <td>{{$gpss_bangunan->Awarded_AwSystemBuiltSport}}</td>             --}}
              <td>{{$gpss_bangunan->Remark_AwSystemBuiltSport}}</td>                   
            </tr>
  
            
  
          </tbody>
        </table>
  
        <div align="right" class="mt-3">
          <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
          <a href="/penilaian_reka_bentuk_gpss/pengesahan_penilaian/arkitek_page4/{{$gpss_bangunan->id}}" type="button" class="btn btn-secondary">Seterusnya</a>          
        </div>
  
       
      </div>
  
  
  </form>
    
  </div>

@endsection
