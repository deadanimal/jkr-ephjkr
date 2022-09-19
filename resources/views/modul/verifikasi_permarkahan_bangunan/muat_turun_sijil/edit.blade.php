@extends('layouts.base')

@section('content')
<div class="container-fluid">
    <div class="card-body" id="skorkadpenilaian">
        {{-- <form action="/penilaian_reka_bentuk_bangunan/muat_turun_sijil/{id}" method="post" enctype="multipart/form-data">
            @csrf --}}
            {{-- @method('PUT') --}}

                <div class="row mx-3">
                    <table class="table table-bordered line-table shadow-table-jkr line-corner-table-jkr">
                        <thead class="text-white line-table">
                            <tr align="center" style="background-color:#EB5500">
                                <th colspan="3">Jenis Pembangunan</th>
                                <th colspan="8">Pembangunan Baru</th>
                            </tr>
                
                            <tr align="center" style="background-color:#EB5500">
                                {{-- <th></th> --}}
                                <th colspan="3">Peratusan Mengikut Kriteria</th>
                                <th>MM</th>
                                <th>MS</th>
                                <th>MR</th>
                                <th>MMV</th>
                                <th>MS</th>
                                <th>MV</th>
                                <th>ML</th>
                            </tr>
                        </thead>

                            <tr align="center" class="text-black" >
                                <th>TL</th>
                                <th colspan="2">Perancangan dan Pengurusan Tapak Lestari</th>
                                <th>26</th>
                                <th>0</th>
                                <th>0</th>
                                <th>24</th>
                                <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MSV}}</th>
                                <th>{{$kriteria_phjkr_bangunan->markahTOTAL_TL_MMV}}</th>
                                <th>0</th>
                            </tr>
                            <tr align="center" class="text-black" >
                                <th>KT</th>
                                <th colspan="2">Pengurusan Kecekapan Tenaga</th>
                                <th>26</th>
                                <th>0</th>
                                <th>0</th>
                                <th>24</th>
                                <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MSV}}</th>
                                <th>{{$kriteria_phjkr_bangunan->markahTOTAL_KT_MMV}}</th>
                                <th>0</th>
                            </tr>

                            <tr align="center" class="text-black" >
                                <th>SB</th>
                                <th colspan="2">Pengurusan Sumber dan Bahan</th>
                                <th>26</th>
                                <th>0</th>
                                <th>0</th>
                                <th>24</th>
                                <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MSV}}</th>
                                <th>{{$kriteria_phjkr_bangunan->markahTOTAL_SB_MMV}}</th>
                                <th>0</th>
                            </tr>

                            <tr align="center" class="text-black" >
                                <th>PA</th>
                                <th colspan="2">Pengurusan Kecekapan Penggunaan Air</th>
                                <th>26</th>
                                <th>0</th>
                                <th>0</th>
                                <th>24</th>
                                <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MSV}}</th>
                                <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PA_MMV}}</th>
                                <th>0</th>
                            </tr>

                            <tr align="center" class="text-black" >
                                <th>PD</th>
                                <th colspan="2">Pengurusan Kualiti Persekitaran Dalaman</th>
                                <th>26</th>
                                <th>0</th>
                                <th>0</th>
                                <th>24</th>
                                <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MSV}}</th>
                                <th>{{$kriteria_phjkr_bangunan->markahTOTAL_PD_MMV}}</th>
                                <th>0</th>
                            </tr>

                            <tr align="center" class="text-black" >
                                <th>FL</th>
                                <th colspan="2">Pengurusan Fasiliti Lestari</th>
                                <th>26</th>
                                <th>0</th>
                                <th>0</th>
                                <th>24</th>
                                <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MSV}}</th>
                                <th>{{$kriteria_phjkr_bangunan->markahTOTAL_FL_MMV}}</th>
                                <th>0</th>
                            </tr>

                            <tr align="center" class="text-black" >
                                <th>IN</th>
                                <th colspan="2">Inovasi dalam Reka Bentuk</th>
                                <th>26</th>
                                <th>0</th>
                                <th>0</th>
                                <th>24</th>
                                <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MSV}}</th>
                                <th>{{$kriteria_phjkr_bangunan->markahTOTAL_IN_MMV}}</th>
                                <th>0</th>
                            </tr>

                            <tr align="center" class="text-black" >
                                <th colspan="3">JUMLAH</th>
                                <th>101</th>
                                <th>0</th>
                                <th>0</th>
                                <th>103</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                            </tr>
                    </table>
                </div> <!--row mx-3-->
            

            <div class="row mx-3">
                <table class="table table-bordered line-table shadow-table-jkr">
                    <thead class="text-white line-table">
                        <tr align="center" style="background-color:#EB5500">
                            <th colspan="3">KEPUTUSAN PENARAFAN HIJAU PERINGKAT REKA BENTUK (PRB)</th>
                        </tr>

                        <tr align="center" class="text-black">
                            <th colspan="3"><button class="btn btn-primary btn-sasaran">Sasaran</button>
                                <button class="btn btn-secondary">Disahkan</button></th>
                        </tr>

                        <tr align="center" style="background-color:#EB5500">
                            <th colspan="3">MARKAH PENILAIAN</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th colspan="2">Jumlah Markah</th>
                            <th colspan="2">0</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th colspan="2">Peratusan</th>
                            <th colspan="2">0</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th colspan="2">Penarafan PH</th>
                            <th colspan="2">1 <span class="star">&starf;</span></th>
                        </tr>

                        <tr align="center" style="background-color:#EB5500" >
                            <th colspan="2">Petunjuk Penarafan</th>
                            <th>Sijil Penarafan</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th><span class="star">&starf; &starf; &starf; &starf; &starf;</span></th>
                            <th>80 - 100</th>
                            <th>Kecemerlangan Global</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th><span class="star">&starf; &starf; &starf; &starf;</span></th>
                            <th>65 - 79</th>
                            <th>Kecemerlangan Nasional</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th><span class="star">&starf; &starf; &starf;</span></th>
                            <th>45 - 64</th>
                            <th>Amalan Pengurusan Terbaik</th>
                        </tr>

                        <tr align="center" class="text-black" >
                            <th><span class="star">&starf; &starf;</span></th>
                            <th>30 - 44</th>
                            <th>Potensi Pengiktirafan</th>
                        </tr>
                        <tr align="center" class="text-black" >
                            <th><span class="star">&starf;</span></th>
                            <th>< 29</th>
                            <th>Sijil Penyertaan</th>
                        </tr>

                    </thead>
                </table>
            </div>
    

                <!--BUTTON MUAT TURUN SIJIL-->
                <div class="dropdown text-center">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Muat Turun
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" id="download">Skor Kad Penilaian</a></li>
                      <li><a class="dropdown-item" id="embedded_sijil">Sijil Verifikasi Penilaian Reka Bentuk Bangunan </a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>


                {{-- <div class="mb-3 text-center">
                    <button class="btn btn-primary dropdown-toggle" id="download">Muat Turun</button>
                </div> --}}



        {{-- </form> <!--Form--> --}}
    </div> <!--Card Body-->
</div> <!--Container Fluid-->

<!----JavaScript---->
<!--Web Page to pdf-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

<!--Download Web Page to PDF without margin-->
{{-- <script>
window.onload = function(){
    document.getElementById("download")
    .addEventListener("click",()=>{
        const skorkadpenilaian = this.document.getElementById("skorkadpenilaian");
        console.log(skorkadpenilaian); 
        console.log(window);
        html2pdf().from(skorkadpenilaian).save(); 
    })
    
}
</script> --}}


<!--Download Web Page to PDF with margin-->
<script>
    window.onload = function(){
        document.getElementById("download")
        .addEventListener("click",()=>{
            const skorkadpenilaian = this.document.getElementById("skorkadpenilaian");
            console.log(skorkadpenilaian); 
            console.log(window);
            
            var opt = {
                margin:       0.5,
                filename:     'myfile.pdf',
                image:        { type: 'jpeg', quality: 0.98 },
                html2canvas:  { scale: 2 },
                jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(skorkadpenilaian).set(opt).save(); 
        })
        
    }
    </script>

@endsection
