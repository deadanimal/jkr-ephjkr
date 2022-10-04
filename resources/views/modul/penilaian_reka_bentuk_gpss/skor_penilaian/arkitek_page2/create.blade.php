@extends('layouts.base')

<link rel="stylesheet" href="/cssfile/pengesahan_penilaian_style.css">

<style>
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button
  {
  -webkit-appearance: none;
  margin: 0;
  }
</style>

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
  <form action="/penilaian_reka_bentuk_gpss/simpan_skor_penilaian_arkitek_page2/{id}" method="post">
    @method('POST')
    @csrf
    <div class="col">
      <table class="table table-bordered line-table text-center" style="width: 100%">
        <thead class="text-white bg-orange-jkr">
          
          <tr>
            <th colspan="8">List of products for architectural works - Window</th>
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
            <th >Supporting Documents</th>

          </tr>
        </thead>
        <tbody>

          
          
          <tr class="text-center">
            <td rowspan="4" >1</td>
            <td rowspan="4">Frames</td>
            <td >Aluminium</td>
            <td >2</td>
            <td><input onblur="findTotalWindow()" min="0" max="2" type="number" class="arkitek" name="AwWindowFramesAluminium" id="AwWindowFramesAluminium"></td>            
            {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFramesAluminium" id="Cons_AwWindowFramesAluminium"></td>             --}}
            {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFramesAluminium" id="Awarded_AwWindowFramesAluminium"></td>                         --}}
            <td><input type="text" name="Remark_AwWindowFramesAluminium" id="Remark_AwWindowFramesAluminium"></td>                    
            <td><input type="file" name="Remark_AwWindowFramesAluminium" id="Remark_AwWindowFramesAluminium"></td>                    
          </tr>

          <tr>
            <td >Mild steel</td>
            <td >2</td>
            <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFramesMildSteel" id="AwWindowFramesMildSteel"></td>            
            {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFramesMildSteel" id="Cons_AwWindowFramesMildSteel"></td>             --}}
            {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFramesMildSteel" id="Awarded_AwWindowFramesMildSteel"></td>             --}}
            <td><input type="text" name="Remark_AwWindowFramesMildSteel" id="Remark_AwWindowFramesMildSteel"></td>                    
            <td><input type="file" name="Remark_AwWindowFramesMildSteel" id="Remark_AwWindowFramesMildSteel"></td>                    
          </tr>

          <tr>
            
            <td >Timber</td>
            <td >2</td>
            <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFramesTimber" id="AwWindowFramesTimber"></td>            
            {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFramesTimber" id="Cons_AwWindowFramesTimber"></td>             --}}
            {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFramesTimber" id="Awarded_AwWindowFramesTimber"></td>             --}}
            <td><input type="text" name="Remark_AwWindowFramesTimber" id="Remark_AwWindowFramesTimber"></td>                    
            <td><input type="file" name="Remark_AwWindowFramesTimber" id="Remark_AwWindowFramesTimber"></td>                    
          </tr>

          <tr>
            <td >UPVC</td>
            <td >2</td>
            <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFramesUpvc" id="AwWindowFramesUpvc"></td>            
            {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFramesUpvc" id="Cons_AwWindowFramesUpvc"></td>             --}}
            {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFramesUpvc" id="Awarded_AwWindowFramesUpvc"></td>             --}}
            <td><input type="text" name="Remark_AwWindowFramesUpvc" id="Remark_AwWindowFramesUpvc"></td>                    
            <td><input type="file" name="Remark_AwWindowFramesUpvc" id="Remark_AwWindowFramesUpvc"></td>                    
          </tr>
          
          <tr>
            <td rowspan="4">2</td>
            <td rowspan="4">Sub component (panel)</td>
            <td >Glass</td>
            <td >2</td>
            <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowPanelGlass" id="AwWindowPanelGlass"></td>            
            {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowPanelGlass" id="Cons_AwWindowPanelGlass"></td>             --}}
            {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowPanelGlass" id="Awarded_AwWindowPanelGlass"></td>             --}}
            <td><input type="text" name="Remark_AwWindowPanelGlass" id="Remark_AwWindowPanelGlass"></td>                    
            <td><input type="file" name="Remark_AwWindowPanelGlass" id="Remark_AwWindowPanelGlass"></td>                    
          </tr>

          <tr>
            <td >Timber</td>
            <td >2</td>
            <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowPanelTimber" id="AwWindowPanelTimber"></td>            
            {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowPanelTimber" id="Cons_AwWindowPanelTimber"></td>             --}}
            {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowPanelTimber" id="Awarded_AwWindowPanelTimber"></td>             --}}
            <td><input type="text" name="Remark_AwWindowPanelTimber" id="Remark_AwWindowPanelTimber"></td>                    
            <td><input type="file" name="Remark_AwWindowPanelTimber" id="Remark_AwWindowPanelTimber"></td>                    
          </tr>

          <tr>
            <td >Aluminium</td>
            <td >2</td>
            <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowPanelAluminium" id="AwWindowPanelAluminium"></td>            
            {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowPanelAluminium" id="Cons_AwWindowPanelAluminium"></td>             --}}
            {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowPanelAluminium" id="Awarded_AwWindowPanelAluminium"></td>             --}}
            <td><input type="text" name="Remark_AwWindowPanelAluminium" id="Remark_AwWindowPanelAluminium"></td>                    
            <td><input type="file" name="Remark_AwWindowPanelAluminium" id="Remark_AwWindowPanelAluminium"></td>                    
          </tr>

          <tr>
            <td >Steel</td>
            <td >2</td>
            <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowPanelSteel" id="AwWindowPanelSteel"></td>            
            {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowPanelAluminium" id="Cons_AwWindowPanelAluminium"></td>             --}}
            {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowPanelAluminium" id="Awarded_AwWindowPanelAluminium"></td>             --}}
            <td><input type="text" name="Remark_AwWindowPanelAluminium" id="Remark_AwWindowPanelAluminium"></td>                    
            <td><input type="FILE" name="Remark_AwWindowPanelAluminium" id="Remark_AwWindowPanelAluminium"></td>                    
          </tr>

          <tr>
            <td rowspan="4">3</td>
            <td rowspan="4">Ironmongeries</td>
            <td >Friction Stay</td>
            <td >2</td>
            <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowIronFriction" id="AwWindowIronFriction"></td>            
            {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowIronFriction" id="Cons_AwWindowIronFriction"></td>             --}}
            {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowIronFriction" id="Awarded_AwWindowIronFriction"></td>             --}}
            <td><input type="text" name="Remark_AwWindowIronFriction" id="Remark_AwWindowIronFriction"></td>                    
            <td><input type="file" name="Remark_AwWindowIronFriction" id="Remark_AwWindowIronFriction"></td>                    
          </tr>

          <tr>
            <td >Hinges</td>
            <td >2</td>
            <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowIronHinges" id="AwWindowIronHinges"></td>            
            {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowIronHinges" id="Cons_AwWindowIronHinges"></td>             --}}
            {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowIronHinges" id="Awarded_AwWindowIronHinges"></td>             --}}
            <td><input type="text" name="Remark_AwWindowIronHinges" id="Remark_AwWindowIronHinges"></td>                    
            <td><input type="file" name="Remark_AwWindowIronHinges" id="Remark_AwWindowIronHinges"></td>                    
          </tr>

          <tr>
            <td >Handle</td>
            <td >2</td>
            <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowIronHandle" id="AwWindowIronHandle"></td>            
            {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowIronHandle" id="Cons_AwWindowIronHandle"></td>             --}}
            {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowIronHandle" id="Awarded_AwWindowIronHandle"></td>             --}}
            <td><input type="text" name="Remark_AwWindowIronHandle" id="Remark_AwWindowIronHandle"></td>                    
            <td><input type="file" name="Remark_AwWindowIronHandle" id="Remark_AwWindowIronHandle"></td>                    
          </tr>

          <tr>
            <td >Rubber Gasket</td>
            <td >2</td>
            <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowIronRubber" id="AwWindowIronRubber"></td>            
            {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowIronRubber" id="Cons_AwWindowIronRubber"></td>             --}}
            {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowIronRubber" id="Awarded_AwWindowIronRubber"></td>            --}}
            <td><input type="text" name="Remark_AwWindowIronRubber" id="Remark_AwWindowIronRubber"></td>                    
            <td><input type="file" name="Remark_AwWindowIronRubber" id="Remark_AwWindowIronRubber"></td>                    
          </tr>

          <tr>
            <td rowspan="3">4</td>
            <td rowspan="3">Finishes</td>
            <td >Anodised Coatings</td>
            <td >2</td>
            <td> <input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFinishesAnodised" id="AwWindowFinishesAnodised"></td>            
            {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFinishesAnodised" id="Cons_AwWindowFinishesAnodised"></td>             --}}
            {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFinishesAnodised" id="Awarded_AwWindowFinishesAnodised"></td> --}}
            <td><input type="text" name="Remark_AwWindowFinishesAnodised" id="Remark_AwWindowFinishesAnodised"></td>                    
            <td><input type="file" name="Remark_AwWindowFinishesAnodised" id="Remark_AwWindowFinishesAnodised"></td>                    
          </tr>

          <tr>
            <td >Paint</td>
            <td >2</td>
            <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFinishesPaint" id="AwWindowFinishesPaint"></td>            
            {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFinishesPaint" id="Cons_AwWindowFinishesPaint"></td>             --}}
            {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFinishesPaint" id="Awarded_AwWindowFinishesPaint"></td>            --}}
            <td><input type="text" name="Remark_AwWindowFinishesPaint" id="Remark_AwWindowFinishesPaint"></td>                    
            <td><input type="file" name="Remark_AwWindowFinishesPaint" id="Remark_AwWindowFinishesPaint"></td>                    
          </tr>

          <tr>
            <td >Varnish/shellac</td>
            <td >2</td>
            <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFinishesVarnish" id="AwWindowFinishesVarnish"></td>            
            {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFinishesVarnish" id="Cons_AwWindowFinishesVarnish"></td>             --}}
            {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFinishesVarnish" id="Awarded_AwWindowFinishesVarnish"></td>             --}}
            <td><input type="text" name="Remark_AwWindowFinishesVarnish" id="Remark_AwWindowFinishesVarnish"></td>                    
            <td><input type="file" name="Remark_AwWindowFinishesVarnish" id="Remark_AwWindowFinishesVarnish"></td>                    
          </tr>

          <tr style="display: none">
            <td>markahPRAwWindow <input type="text" name="markahPRAwWindow" id="markahPRAwWindow" /></td>            
          </tr>

          <tr style="display: none">
            <td>markahPRAwWindowConstruction <input type="text" name="Cons_markahPRAwWindow" id="Cons_markahPRAwWindow" /></td>            
          </tr>

          <tr style="display: none">
            <td>markahPRAwWindowAwarded <input type="text" name="Awarded_markahPRAwWindow" id="Awarded_markahPRAwWindow" /></td>            
          </tr>

          {{-- New table for door --}}
          <tr class="text-white bg-orange-jkr">
            <th colspan="8">List of products for architectural works - Door</th>
          </tr>

          <tr>
            <td rowspan="4">1</td>
            <td rowspan="4">Frames</td>
            <td >Aluminium</td>
            <td >2</td>
            <td> <input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFramesAluminium" id="AwDoorFramesAluminium"></td>            
            {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFramesAluminium" id="Cons_AwDoorFramesAluminium"></td>             --}}
            {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFramesAluminium" id="Awarded_AwDoorFramesAluminium"></td>             --}}
            <td><input type="text" name="Remark_AwDoorFramesAluminium" id="Remark_AwDoorFramesAluminium"></td>                    
            <td><input type="file" name="Remark_AwDoorFramesAluminium" id="Remark_AwDoorFramesAluminium"></td>                    
          </tr>

          <tr>
            <td >Mild steel</td>
            <td >2</td>
            <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFramesMildSteel" id="AwDoorFramesMildSteel"></td>            
            {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFramesMildSteel" id="Cons_AwDoorFramesMildSteel"></td>             --}}
            {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFramesMildSteel" id="Awarded_AwDoorFramesMildSteel"></td>             --}}
            <td><input type="text" name="Remark_AwDoorFramesMildSteel" id="Remark_AwDoorFramesMildSteel"></td>                    
            <td><input type="file" name="Remark_AwDoorFramesMildSteel" id="Remark_AwDoorFramesMildSteel"></td>                    
          </tr>

          <tr>
            <td >Timber</td>
            <td >2</td>
            <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFramesTimber" id="AwDoorFramesTimber"></td>            
            {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFramesTimber" id="Cons_AwDoorFramesTimber"></td>             --}}
            {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFramesTimber" id="Awarded_AwDoorFramesTimber"></td>             --}}
            <td><input type="text" name="Remark_AwDoorFramesTimber" id="Remark_AwDoorFramesTimber"></td>                    
            <td><input type="file" name="Remark_AwDoorFramesTimber" id="Remark_AwDoorFramesTimber"></td>                    
          </tr>

          <tr>
            <td >Upvc</td>
            <td >2</td>
            <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFramesUpvc" id="AwDoorFramesUpvc"></td>            
            {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFramesUpvc" id="Cons_AwDoorFramesUpvc"></td>             --}}
            {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFramesUpvc" id="Awarded_AwDoorFramesUpvc"></td>             --}}
            <td><input type="text" name="Remark_AwDoorFramesUpvc" id="Remark_AwDoorFramesUpvc"></td>
            <td><input type="file" name="Remark_AwDoorFramesUpvc" id="Remark_AwDoorFramesUpvc"></td>
          </tr>

          <tr>
            <td rowspan="5">2</td>
            <td rowspan="5">Sub component (Panel)</td>
            <td >Timber</td>
            <td >2</td>
            <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelTimber" id="AwDoorPanelTimber"></td>            
            {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelTimber" id="Cons_AwDoorPanelTimber"></td>             --}}
            {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelTimber" id="Awarded_AwDoorPanelTimber"></td>             --}}
            <td><input type="text" name="Remark_AwDoorPanelTimber" id="Remark_AwDoorPanelTimber"></td>                   
            <td><input type="file" name="Remark_AwDoorPanelTimber" id="Remark_AwDoorPanelTimber"></td>                   
          </tr>

          <tr>
            <td >Aluminium</td>
            <td >2</td>
            <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelAluminium" id="AwDoorPanelAluminium"></td>            
            {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelAluminium" id="Cons_AwDoorPanelAluminium"></td>             --}}
            {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelAluminium" id="Awarded_AwDoorPanelAluminium"></td>             --}}
            <td><input type="text" name="Remark_AwDoorPanelAluminium" id="Remark_AwDoorPanelAluminium"></td>
            <td><input type="file" name="Remark_AwDoorPanelAluminium" id="Remark_AwDoorPanelAluminium"></td>
          </tr>

          <tr>
            <td >Upvc</td>
            <td >2</td>
            <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelUpvc" id="AwDoorPanelUpvc"></td>            
            {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelAluminium" id="Cons_AwDoorPanelAluminium"></td>             --}}
            {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelAluminium" id="Awarded_AwDoorPanelAluminium"></td>             --}}
            <td><input type="text" name="Remark_AwDoorPanelAluminium" id="Remark_AwDoorPanelAluminium"></td>
            <td><input type="file" name="Remark_AwDoorPanelAluminium" id="Remark_AwDoorPanelAluminium"></td>
          </tr>

          <tr>
            <td >Steel</td>
            <td >2</td>
            <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelSteel" id="AwDoorPanelSteel"></td>            
            {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelSteel" id="Cons_AwDoorPanelSteel"></td>             --}}
            {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelSteel" id="Awarded_AwDoorPanelSteel"></td>             --}}
            <td><input type="text" name="Remark_AwDoorPanelSteel" id="Remark_AwDoorPanelSteel"></td>                    
            <td><input type="file" name="Remark_AwDoorPanelSteel" id="Remark_AwDoorPanelSteel"></td>                    
          </tr>

          <tr>
            <td >Glass</td>
            <td >2</td>
            <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelGlass" id="AwDoorPanelGlass"></td>            
            {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelGlass" id="Cons_AwDoorPanelGlass"></td>             --}}
            {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelGlass" id="Awarded_AwDoorPanelGlass"></td>             --}}
            <td><input type="text" name="Remark_AwDoorPanelGlass" id="Remark_AwDoorPanelGlass"></td>                    
            <td><input type="file" name="Remark_AwDoorPanelGlass" id="Remark_AwDoorPanelGlass"></td>                    
          </tr>

          <tr>
            <td rowspan="3">3</td>
            <td rowspan="3">Ironmongeries</td>
            <td >Lockset</td>
            <td >2</td>
            <td> <input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorIronLockset" id="AwDoorIronLockset"></td>            
            {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorIronLockset" id="Cons_AwDoorIronLockset"></td>             --}}
            {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorIronLockset" id="Awarded_AwDoorIronLockset"></td>             --}}
            <td><input type="text" name="Remark_AwDoorIronLockset" id="Remark_AwDoorIronLockset"></td>
            <td><input type="file" name="Remark_AwDoorIronLockset" id="Remark_AwDoorIronLockset"></td>
          </tr>

          <tr>
            <td >Door closer</td>
            <td >2</td>
            <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorIronDoorCloser" id="AwDoorIronDoorCloser"></td>            
            {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorIronDoorCloser" id="Cons_AwDoorIronDoorCloser"></td>             --}}
            {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorIronDoorCloser" id="Awarded_AwDoorIronDoorCloser"></td>             --}}
            <td><input type="text" name="Remark_AwDoorIronDoorCloser" id="Remark_AwDoorIronDoorCloser"></td>                   
            <td><input type="file" name="Remark_AwDoorIronDoorCloser" id="Remark_AwDoorIronDoorCloser"></td>                   
          </tr>

          <tr>
            <td >Hinges</td>
            <td >2</td>
            <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorIronHinges" id="AwDoorIronHinges"></td>            
            {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorIronHinges" id="Cons_AwDoorIronHinges"></td>             --}}
            {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorIronHinges" id="Awarded_AwDoorIronHinges"></td>             --}}
            <td><input type="text" name="Remark_AwDoorIronHinges" id="Remark_AwDoorIronHinges"></td>
            <td><input type="file" name="Remark_AwDoorIronHinges" id="Remark_AwDoorIronHinges"></td>
          </tr>

          <tr>
            <td rowspan="3">4</td>
            <td rowspan="3">Finishes</td>
            <td >Anodised coatings</td>
            <td >2</td>
            <td> <input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFinishesAnodised" id="AwDoorFinishesAnodised"></td>            
            {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFinishesAnodised" id="Cons_AwDoorFinishesAnodised"></td>             --}}
            {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFinishesAnodised" id="Awarded_AwDoorFinishesAnodised"></td>             --}}
            <td><input type="text" name="Remark_AwDoorFinishesAnodised" id="Remark_AwDoorFinishesAnodised"></td>                   
            <td><input type="file" name="Remark_AwDoorFinishesAnodised" id="Remark_AwDoorFinishesAnodised"></td>                   
          </tr>

          <tr>
            <td >Paint</td>
            <td >2</td>
            <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFinishesPaint" id="AwDoorFinishesPaint"></td>            
            {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFinishesPaint" id="Cons_AwDoorFinishesPaint"></td>             --}}
            {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFinishesPaint" id="Awarded_AwDoorFinishesPaint"></td>             --}}
            <td><input type="text" name="Remark_AwDoorFinishesPaint" id="Remark_AwDoorFinishesPaint"></td>                    
            <td><input type="file" name="Remark_AwDoorFinishesPaint" id="Remark_AwDoorFinishesPaint"></td>                    
          </tr>

          <tr>
            <td >Varnish/shellac</td>
            <td >2</td>
            <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFinishesVarnish" id="AwDoorFinishesVarnish"></td>            
            {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFinishesVarnish" id="Cons_AwDoorFinishesVarnish"></td>             --}}
            {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFinishesVarnish" id="Awarded_AwDoorFinishesVarnish"></td>             --}}
            <td><input type="text" name="Remark_AwDoorFinishesVarnish" id="Remark_AwDoorFinishesVarnish"></td>
            <td><input type="file" name="Remark_AwDoorFinishesVarnish" id="Remark_AwDoorFinishesVarnish"></td>
          </tr>

          <tr style="display: none">
            <td>markahPRAwDoor<input type="text" name="markahPRAwDoor" id="markahPRAwDoor" />
            </td>
          </tr>

          <tr style="display: none">
            <td>Cons_markahPRAwDoor<input type="text" name="Cons_markahPRAwDoor" id="Cons_markahPRAwDoor" />
            </td>
          </tr>

          <tr style="display: none">
            <td>Awarded_markahPRAwDoor<input type="text" name="Awarded_markahPRAwDoor" id="Awarded_markahPRAwDoor" />
            </td>
          </tr>

        </tbody>
      </table>

      <div align="right" class="mt-3">
        <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
        <a href="/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page3/create/{{$id}}" type="button" class="btn btn-secondary">Seterusnya</a>          
      </div>

     
    </div>
  </form>
    
  </div>



<script>
  function findTotalWindow(){
  var arr = document.getElementsByClassName('arkitek');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('markahPRAwWindow').value = tot;
}  
</script>

<script>
  function findTotalWindowConstruction(){
  var arr = document.getElementsByClassName('window_construction');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('Cons_markahPRAwWindow').value = tot;
}  
</script>

<script>
  function findTotalWindowAwarded(){
  var arr = document.getElementsByClassName('window_awarded');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('Awarded_markahPRAwWindow').value = tot;
}  
</script>

<script>
  function findTotalDoor(){
  var arr = document.getElementsByClassName('door');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('markahPRAwDoor').value = tot;
}  
</script>

<script>
  function findTotalDoorConstruction(){
  var arr = document.getElementsByClassName('door_construction');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('Cons_markahPRAwDoor').value = tot;
}  
</script>

<script>
  function findTotalDoorAwarded(){
  var arr = document.getElementsByClassName('door_awarded');
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
  }
  document.getElementById('Awarded_markahPRAwDoor').value = tot;
}  
</script>

@endsection
