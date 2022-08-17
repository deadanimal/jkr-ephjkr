@extends('layouts.base')

@section('content')

    {{-- header --}}
    <div class="header" >
        <h1 class="header-title" style="color: #EB5500">
            PENILAIAN REKA BENTUK GPSS
        </h1>
    </div>
    <hr style="background-color: #EB5500;">
    
    {{-- body --}}
    <div class="row3 mx-8">
      <div class="col">
        <table class="table table-bordered line-table text-center" style="width: 100%">
          <thead class="text-white bg-orange-jkr">
            <tr>
  
              
              <th colspan="4">Jenis Pembangunan</th>
              <th colspan="10">Pembangunan Baru</th>
              
            </tr>
            <tr>
              <th></th>
              <th scope="col" colspan="3">Peratusan Mengikut Kriteria</th>
              <th >MM</th>
              <th >MS</th>
              <th >MR</th>
              <th >MMV</th>
              <th >MS</th>
              <th >MV</th>
              <th >ML</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">TL</th>
              <td colspan="3" >Perancangan dan Pengurusan Tapak Lestari</td>
              <td>26</td>
              <td>0</td>
              <td>0</td>
              <td>24</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <th scope="row">KT</th>
              <td colspan="3" >Pengurusan Kecekapan Tenaga</td>
              <td>26</td>
              <td>0</td>
              <td>0</td>
              <td>24</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <th scope="row">SB</th>
              <td colspan="3" >Pengurusan Sumber dan Bahan</td>
              <td>26</td>
              <td>0</td>
              <td>0</td>
              <td>24</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <th scope="row">PA</th>
              <td colspan="3" >Pengurusan Kecekapan Penggunaan Air</td>
              <td>26</td>
              <td>0</td>
              <td>0</td>
              <td>24</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <th scope="row">PD</th>
              <td colspan="3" >Pengurusan Kualiti Persekitaran Dalaman</td>
              <td>26</td>
              <td>0</td>
              <td>0</td>
              <td>24</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <th scope="row">FL</th>
              <td colspan="3" >Pengurusan Fasiliti Lestari</td>
              <td>26</td>
              <td>0</td>
              <td>0</td>
              <td>24</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <th scope="row">IN</th>
              <td colspan="3" >Inovasi dalam Reka Bentuk</td>
              <td>26</td>
              <td>0</td>
              <td>0</td>
              <td>24</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              
              <td colspan="4" >JUMLAH</td>
              <td>101</td>
              <td>0</td>
              <td>0</td>
              <td>103</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
          </tbody>
        </table>
  
        <div class="row3 ">
          <table class="table table-bordered text-center " style="width: 100%">
            <thead class="text-white line-table">
              <tr class="bg-orange-jkr">
                <th colspan="12">KEPUTUSAN PENARAFAN HIJAU PERINGKAT REKA BENTUK (PRB)</th>
              </tr>
              <tr>
                <td style="align-content: center" colspan="12">
                  <button class="btn btn-warning">Sasaran</button>
                  <button>Disahkan</button>
                </td>
              </tr>
              <tr class="text-white bg-orange-jkr">
                <th colspan="12">MARKAH PENILAIAN</th>
              </tr>
              <tr  class="text-black">
                <th colspan="6">Jumlah Markah</th>
                <th >0</th>
              </tr>
              <tr class="text-black">
                <th colspan="6">Peratusan</th>
                <td colspan="3">0</td>
              </tr>
              <tr class="text-black">
                <th colspan="6">Penarafan PH</th>
                <td colspan="3">1 <span class="text-danger">&#9733</span></td>
              </tr>
              <tr class="bg-orange-jkr">
                <th colspan="6">Petunjuk Penarafan</th>
                <th>Sijil Penarafan</th>
              </tr>
              <tr class="text-black">
                <th colspan="2"><span class="text-danger">&#9733;&#9733;&#9733;&#9733;&#9733;</span></th>
                <th colspan="3">80-100</th>
                <th colspan="6">Kecemerlangan Global</th>
              </tr>
              <tr class="text-black">
                <th colspan="2"><span class="text-danger">&#9733;&#9733;&#9733;&#9733;</span></th>
                <th colspan="3">65-79</th>
                <th colspan="6">Kecemerlangan Nasional</th>
              </tr>
              <tr class="text-black">
                <th colspan="2"><span class="text-danger">&#9733;&#9733;&#9733;</span></th>
                <th colspan="3">45-64</th>
                <th colspan="6">Amalan Pengurusan Terbaik</th>
              </tr>
              <tr class="text-black">
                <th colspan="2"><span class="text-danger">&#9733;&#9733;</span></th>
                <th colspan="3">30-44</th>
                <th colspan="6">Potensi Pengiktirafan</th>
              </tr>
              <tr class="text-black">
                <th colspan="2"><span class="text-danger">&#9733;</span></th>
                <th colspan="3">< 29</th>
                <th colspan="6">Sijil Penyertaan</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
    

    
        

    




    
   


    
@endsection