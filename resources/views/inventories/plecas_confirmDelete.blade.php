@extends('layouts.panel')

@section('title','Delete Pleca')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Eliminar pleca: {{$pleca->Codigo_interno}}</a>
@endsection

@section('content')

    <div class="mt-4">
        <h2><strong class="font-black">Quieres eliminar la pleca: {{$pleca->Nombre}}?</strong></h2>
    
        <div class="butn cancel_butn eliminar">
            <ul>
                <li>
                    <a href="/inventories/{{$ids}}/Plecas">
                        <i class='bx bx-arrow-back'></i>
                        <span>Cancelar</span>
                    </a>
                </li>
            </ul>
        </div>
        <form action="/inventories/{{$ids}}/Plecas/{{$id}}" method="POST">
            @csrf 
            @method('delete')
            <div class="input_box" id="button">
                <button class="button" id="delete" type="submit">Confirmar</button>
            </div>
        </form>

    </div>        

@endsection