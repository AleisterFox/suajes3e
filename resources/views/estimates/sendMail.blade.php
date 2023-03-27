@extends('layouts.panel')

@section('title','Send Estimate')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Enviar Cotizacion</a>
@endsection

@section('content')
    <div class="mt-4">
        <div class="container-fluid">
            <div class="column-md">
                <div>
                    <div class="body">
                        <form action="/customer/{{$id}}/estimates/{{$ids}}" method="post" class="">
                            @csrf
                            <div class="input_box">
                                <label for="email" class="label">Destinatario:</label>
                                <input type="email" name="email" id="email" class="form_control">
                            </div>
                            <div class="input_box">
                                <label for="cc" class="label">Cc:</label>
                                <input type="email" name="cc" id="cc" class="form_control">
                            </div>
                            <br>
                            <button type="submit" class="buttn buttn-success">Enviar Cotizacion</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection