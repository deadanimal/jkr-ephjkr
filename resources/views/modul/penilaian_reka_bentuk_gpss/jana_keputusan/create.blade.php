@extends('layouts.base')

<style>
    ::placeholder{
        color: black !important
    }
</style>

@section('content')
    {{-- header --}}
    <div class="header" >
        <h1 class="header-title" style="color: #EB5500">
            PENILAIAN REKA BENTUK GPSS
        </h1>
    </div>
    <hr style="background-color: #EB5500;">
    {{-- body --}}
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="card p-3  py-4">
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <label for="nama_projek">Nama:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Hospital Seri Iskandar">
                    </div>
                </div>
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <label for="nama_projek">ID Rujukan Skala:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="SKL0202">
                    </div>
                </div>
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <label for="nama_projek">Alamat:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Mukah">
                    </div>
                </div>
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <label for="nama_projek">Kos Projek Semasa:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" placeholder="RM 5,000,000.00">
                    </div>
                </div>
            </div>
        </div>

        <div>
            <form action= "/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek/{id}" method="post" enctype="multipart/form-data">
                @method('POST')
                  @csrf
            
                  <div class="col">
                    <table class="table table-bordered line-table text-center" style="width: 100%">
                      <thead class="text-white bg-orange-jkr">
                        
                        <tr>
                          <th colspan="2">OVERALL GREEN PRODUCT SCORING SHEET</th>
                        </tr>
                        <tr>
                          <th>Green Product Scoring Sheet</th>
                        </tr>
                      </thead>
                      <tbody>

                       <table>
                        <div class="row d-flex justify-content-center">
                            <div class="card p-3  py-4">
                                <div class="row g-3 mt-2">
                                    <div class="col-md-3">
                                        <label for="nama_projek">Name of evaluator:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Hospital Seri Iskandar">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-3">
                                        <label for="nama_projek">Date:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="SKL0202">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-3">
                                        <label for="nama_projek">Time:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Mukah">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-3">
                                        <label for="nama_projek">Project:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" placeholder="RM 5,000,000.00">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-3">
                                        <label for="nama_projek">Building/Road:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" placeholder="RM 5,000,000.00">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-3">
                                        <label for="nama_projek">Work component:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" placeholder="RM 5,000,000.00">
                                    </div>
                                </div>
                            </div>
                        </div>
                       </table>

                      </tbody>
                     
                    </table>
            
                  </div>
              </form>
        </div>

        
    </div>

@endsection