@extends('layouts.panel')

@section('title','Delete Production')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Eliminar hoja de produccion: {{$production->Folio}}</a>
@endsection

@section('content')

    <div class="mt-4">
        <h2><strong class="font-black">Quieres eliminar la hoja de produccion: {{$production->Folio}}?</strong></h2>
    
        <div class="butn cancel_butn eliminar">
            <ul>
                <li>
                    <a href="/productions">
                        <i class='bx bx-arrow-back'></i>
                        <span>Cancelar</span>
                    </a>
                </li>
            </ul>
        </div>
        <form action="/productions/{{$production->id}}" method="POST">
            @csrf 
            @method('delete')
            <div class="input_box" id="button">
                    <input class="button" id="delete" type="submit" value="Confirmar">
            </div>
            <!-- <button class="font-weight-bold btn btn-outline-danger" type="submit">Confirm</button> -->
        </form>

    </div>        

@endsection
