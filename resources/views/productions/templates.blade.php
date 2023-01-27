
@extends('layouts.panel')

@section('title','Orden de produccion')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Nueva orden de produccion</a>
@endsection

@section('content')
    @livewire('production-order')
    
@endsection




