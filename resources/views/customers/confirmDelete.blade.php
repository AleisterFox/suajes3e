@extends('layouts.panel')

@section('title','Delete Customer')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Delete Customer: {{$customer-> Name}}</a>
@endsection

@section('content')

    <div class="mt-4">
        <h2><strong class="font-black">Quieres eliminar el cliente: {{$customer->Compañia}}?</strong></h2>
    
        <div class="butn cancel_butn eliminar">
            <ul>
                <li>
                    <a href="/customers">
                        <i class='bx bx-arrow-back'></i>
                        <span>Cancelar</span>
                    </a>
                </li>
            </ul>
        </div>
        <form action="/customers/{{$customer->id}}" method="POST">
            @csrf 
            @method('delete')
            <div class="input_box" id="button">
                    <input class="button" id="delete" type="submit" value="Confirmar">
            </div>
            <!-- <button class="font-weight-bold btn btn-outline-danger" type="submit">Confirm</button> -->
        </form>

    </div>        

@endsection
