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
          <tr>
            <th scope="col">Lorem</th>
            <th scope="col">Lorem ipsum dolor sit amet.</th>
            <th scope="col">Lorem ipsum dolor sit amet.</th>
            <th scope="col">Lorem ipsum dolor sit amet consectetur.</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
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