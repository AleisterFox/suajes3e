@extends('layouts.panel')

@section('title','Delete Hule')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Eliminar hule: {{$hule->Codigo_interno}}</a>
@endsection

@section('content')

    <div class="mt-4">
        <h2><strong class="font-black">Quieres eliminar el hule: {{$hule->Nombre_articulo}}?</strong></h2>
    
        <div class="butn cancel_butn eliminar">
            <ul>
                <li>
                    <a href="/inventories/1/Hules">
                        <i class='bx bx-arrow-back'></i>
                        <span>Cancelar</span>
                    </a>
                </li>
            </ul>
        </div>
        <form action="/inventories/{{$id}}/Hules/{{$hule->id}}" method="POST">
            @csrf 
            @method('delete')
            <div class="input_box" id="button">
                <button class="button" id="delete" type="submit">Confirmar</button>
            </div>
        </form>

    </div>        

@endsection