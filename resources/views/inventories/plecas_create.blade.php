@extends('layouts.panel')

@section('title','Nuevo item')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Nuevo item</a>
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
              
                    <form action="/inventories/{{$id}}/Plecas" method="POST" class="employee-form">
                    @csrf
                    <!-- Step1 -->
                    <div class="user_details">
                      <div class="input_box">
                          <label for="Codigo_interno" class="label"></label>
                          <input autofcus type="text" class="form_control first" id="Codigo_interno" name="Codigo_interno" placeholder="Ingresa el codigo interno" value="{{old('Codigo_interno')}}" required >
                      </div>
                      <div class="input_box">
                        <label for="Nombre" class="label"></label>
                        <input type="text" class="form_control" id="Nombre" name="Nombre" placeholder="Ingresa el nombre del articulo" value="{{old('Nombre')}}" required>
                      </div>
                      <div class="input_box">
                        <label for="Descripcion" class="label"></label>
                        <input type="text" class="form_control" id="Descripcion" name="Descripcion" placeholder="Ingresa la descripcion del articulo" value="{{old('Descripcion')}}" required>
                      </div>
                      <div class="input_box">
                        <label for="Tipo" class="label"></label>
                        <input type="text" class="form_control" id="Tipo" name="Tipo" placeholder="Ingresa el tipo de pleca (curvo/recto)" value="{{old('Tipo')}}" required>
                      </div>
                      <div class="input_box">
                        <label for="Calibre" class="label"></label>
                        <input type="number" class="form_control" id="Calibre" name="Calibre" placeholder="Ingresa el calibre de la pleca en puntos" value="{{old('Calibre')}}" required>
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