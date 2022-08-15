@extends('layouts.base')

@section('content')

    {{-- header --}}
    <div class="header" >
        <h1 class="header-title" style="color: #EB5500">
            PENILAIAN REKA BENTUK GPSS
        </h1>
    </div>
    <hr style="background-color: #EB5500;"></hr>
    
    {{-- body --}}
    <table class="table table-bordered">
        <thead style="background-color: #f0a420;">
          <tr style="height=20%">
            <th scope="col">Kod</th>
            <th scope="col" colspan="2">Perancangan & Pengurusan</th>
            <th scope="col" colspan="2">Pembangunan Baru</th>
            <th scope="col">Dokumen</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">TL1</th>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>0</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, porro?</td>
          </tr>
          <tr>
            <th scope="row">TL2</th>
            <td>Lorem ipsum dolor sit amet consectetur.</td>
            <td>0</td>
            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, explicabo at delectus laudantium ipsam perspiciatis!</td>
          </tr>
          <tr>
            <th scope="row">TL3</th>
            <td>Lorem ipsum dolor sit amet.</td>
            <td>0</td>
            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam, ullam deleniti. Atque?</td>
          </tr>
          

        </tbody>
      </table>




    {{-- pagination --}}
    <tfoot>
        <nav aria-label="Page navigation example">
            <ul class="pagination ">
              <li class="page-item">
                {{-- <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a> --}}
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li>
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>

    </tfoot>
   


    
@endsection