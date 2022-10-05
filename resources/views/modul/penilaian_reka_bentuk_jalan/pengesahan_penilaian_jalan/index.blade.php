@extends('layouts.base')
<style>
    ::placeholder{
        color: black;
        font-weight: bold
    }
</style>
@section('content')
    <!--header-->
    <div class="row mb-3">
      <div class="col">
          <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
              aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                      <a href="/penilaian_reka_bentuk_gpss/melantik_pemudah_cara/{id}" class="text-secondary">Paparan Senarai Projek</a>
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
            <h3 class="mb-0 text-primary"><strong>PENILAIAN REKA BENTUK JALAN</strong></h3>
        </div>
    </div>

    <hr class="text-primary mb-3">

    <div class="row">
        <div class="col">
            <h4 class="mb-0 text-primary"><strong>Pengesahan Markah Penilaian</strong></h4>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card">
            
            <div class="card-body">
                <form action= "/penilaian_reka_bentuk_gpss/melantik_pemudah_cara/{id}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!--Nama-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nama Projek:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="nama" value="{{ $pemudah_cara ?? '' }}" placeholder="Turap Jalan" />
                    </div>
                    </div>
                    <!--Syarikat/Cawangan-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Syarikat:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="syarikat_cawangan" value="{{ $pemudah_cara ?? '' }}" placeholder="JKR Lumut" />
                    </div>
                    </div>
                    <!--Nama Penilai Jalan-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nama Penilai Jalan:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="no_tel" value="{{ $pemudah_cara ?? '' }}" placeholder="Abu Adib" />
                    </div>
                    </div>
                    {{-- Kategori-dropdown --}}
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Kategori:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="no_tel" value="{{ $pemudah_cara ?? '' }}" placeholder="GPSS Jalan" />
                    </div>
                    </div>

                    <div>
                        <div class="row3 mx-1  text-center">
                            <form action= "/penilaian_reka_bentuk_gpss/simpan_skor_penilaian_civil/{id}" method="post" enctype="multipart/form-data">
                              @method('POST')
                                @csrf
                          
                                <div class="col">
                                  <table class="table table-bordered line-table text-center" style="width: 100%">
                                    <thead class="text-white bg-orange-jkr">
                                      
                                      <tr>
                                        <th colspan="8">List of products for road works</th>
                                      </tr>
                                      <tr>
                                        <th>No.</th>
                                        <th >Component</th>
                                        <th>Product</th>
                                        <th>Point Allocated</th>
                                        <th>Point Requested (design)</th>
                                        <th>Point Requested (construction)</th>
                                        <th>Point Awarded</th>
                                        <th >Remark</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                          
                                        <tr class="text-center">
                                          <td rowspan="6" >1</td>
                                          <td rowspan="6">Common items</td>
                                          <td >Cement</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonCement" id="CwCommonCement">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Timber</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonTimber" id="CwCommonTimber">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Reinforcement bar</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonBar" id="CwCommonBar">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Sand</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonSand" id="CwCommonSand">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Aggregate</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonAggregate" id="CwCommonAggregate">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Stone/rock</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonStone" id="CwCommonStone">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="6" >2</td>
                                          <td rowspan="6">Earthworks/erosion sediment control</td>
                                          <td >Geotextile</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksGeotextile" id="CwEarthworksGeotextile">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Erosion mat</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksErosion" id="CwEarthworksErosion">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Geogrid</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksGeogrid" id="CwEarthworksGeogrid">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Mulching</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksMulching" id="CwEarthworksMulching">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Gabion</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksGabion" id="CwEarthworksGabion">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Hydroseeding</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksHydroseeding" id="CwEarthworksHydroseeding">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="6" >3</td>
                                          <td rowspan="6">Drainage works</td>
                                          <td >Drain culvert</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageCulvert" id="CwDrainageCulvert">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Sump</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageSump" id="CwDrainageSump">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Pipe</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainagePipe" id="CwDrainagePipe">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Modular tank</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageTank" id="CwDrainageTank">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Geotextile</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageGeotextile" id="CwDrainageGeotextile">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Grating</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageGrating" id="CwDrainageGrating">
                                          </td>            
                                          <td>
                                            <input type="number" min="0" max="2"></td>            
                                          <td><input type="number" min="0" max="2"></td>            
                                          <td><input type="text"></td>                    
                                        </tr>
                          
                                        
                          
                                        <tr style="display: none">
                                          <td><input type="text" name="markahPRCw" id="markahPRCw" /></td>
                                        </tr>
                          
                                    </tbody>
                                  </table>
                          
                                
                                </div>
                            </form>
                              
                            </div>
                    </div>
                    
                    
                    
                    <!--Button Daftar-->
                    {{-- <button class=“btn btn-primary” type=“submit”>Daftar</button> --}}
                    <!--Button Daftar (TOOLTIPS)-->
                    <div class="text-center">
                        <button class="btn btn-secondary" data-toggle="tooltip" data-placement="center"
                        title="Daftar Pemudah Cara" type="submit">Markah Tidak Diterima</button>
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="center"
                        title="Daftar Pemudah Cara" type="submit">Sahkan Markah</button>
                    </div>
                   
                </form>
            </div>
        </div> <!--Card-->
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

