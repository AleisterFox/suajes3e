@extends('layouts.panel')

@section('title','Nuevo cliente')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Nuevo cliente</a>
@endsection

@section('content')

<div class="mt-4">
  <div class="body">
    <div class="butn cancel_butn">
      <ul>
        <li>
          <a href="/customers">
            <i class='bx bx-arrow-back'></i>
            <span>Volver a clientes</span>
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
    <div class="container-fluid  ">
          <div class="row justify-content-md-start">
            <div class="column-md ">
                <div>
              
                    <form action="/customers/{{$customer->id}}" method="POST" class="employee-form">
                    @csrf
                    @method('put')
                    <!-- Step1 -->
                    <div class="user_details">
                        <h3>Editar Compañia</h3>
                      <div class="input_box">
                          <label for="Compañia" class="label">Compañia</label>
                          <input autofcus type="text" class="form_control edit" id="Compañia" name="Compañia" placeholder="Ingresa el nombre de la compañia" value="{{old('Compañia',$customer->Compañia)}}" required >
                      </div>
                    </div>

                  <div class="form-navigation mt-0">
                    <button type="submit" class="btn btn-success float-left">Actualizar</button>
                  </div>

                </form>
            </div>
                
            </div>
          </div>
    </div>
  </div>
</div>

@endsection