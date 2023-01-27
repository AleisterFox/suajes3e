@extends('layouts.panel')

@section('title','Seleccionar Suaje')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Seleccionar tipo de suaje</a>
@endsection

@section('content')
    <div class="">
        <div class="butn cancel_butn">
            <ul>
                <li>
                    <a href="/productions">
                        <i class='bx bx-arrow-back'></i>
                        <span>Volver a producciones</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="vacio">

        </div>
        <div class="butn">
                <ul>
                    <li>
                        <a href="./create/1">
                            <i class='bx bx-plus'></i>
                            <span>Maquina Curva</span>
                        </a>
                    </li>
                </ul>
        </div>

        <div class="butn">
                <ul>
                    <li>
                        <a href="./create/2">
                            <i class='bx bx-plus'></i>
                            <span>Maquina Plana</span>
                        </a>
                    </li>
                </ul>
        </div>
    </div>
@endsection