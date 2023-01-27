@extends('layouts.panel')

@section('title','Nuevo inventario')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Nuevo inventario</a>
@endsection

@section('content')

<div class="mt-4">
  <div class="body">
    <div class="butn cancel_butn">
      <ul>
        <li>
          <a href="/inventories">
            <i class='bx bx-arrow-back'></i>
            <span>Volver a inventarios</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="errors">
      @if($errors->any())
          <div>
              {{ $errors->first() }}
          </div>
      @endif
    </div>
    <div class="container-fluid">
          <div class="row justify-content-md-start">
            <div class="column-md">
                <div>
              
                    <form action="/inventories/{{$id}}/Hules" method="POST" class="employee-form">
                    @csrf
                    <!-- Step1 -->
                    <div class="user_details">
                      <div class="input_box">
                          <label for="Codigo_interno" class="label"></label>
                          <input autofcus type="text" class="form_control first" id="Codigo_interno" name="Codigo_interno" placeholder="Ingresa el codigo interno" value="{{old('Codigo_interno')}}" required >
                      </div>
                      <div class="input_box">
                        <label for="Nombre_articulo" class="label"></label>
                        <input type="text" class="form_control" id="Nombre_articulo" name="Nombre_articulo" placeholder="Ingresa el nombre del articulo" value="{{old('Nombre_articulo')}}" required>
                      </div>
                    </div>

                  <div class="form-navigation mt-0">
                    <button type="submit" class="btn btn-success float-right">Guardar</button>
                  </div>

                </form>
            </div>
                
            </div>
          </div>
    </div>
  </div>
</div>

@endsection