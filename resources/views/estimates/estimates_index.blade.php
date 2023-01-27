@extends('layouts.panel')

@section('title','Customer Estimates')

@section('brand')
    @foreach($customers as $customer)
        @if($customer->id == $id)
            <a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">{{$customer->Compañia}}  Cotizaciones</a>
        @endif
    @endforeach
@endsection

@section('content')

    <div class="mt-4">
        <div class="body">
            
            <div class="buttons">
                <div class="butn cancel_butn">
                    <ul>
                        <li>
                            <a href="/estimates">
                                <i class='bx bx-arrow-back'></i>
                                <span>Atras</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="butn">
                    <ul>
                        <li>
                            <a href="/customer/{{$id}}/estimates/create">
                                <i class='bx bx-plus'></i> 
                                <span>Nueva cotizacion</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <p></p>

            <div class="tbl">
                <table>
                    <thead>
                        <tr>
                            <th>Folio</th>
                            <th class="acciones">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($estimates as $estimate)
                            @if($id == $estimate->Cliente)
                                <tr>
                                    <td>{{$estimate->Folio}}</td>
                                    <td class="botones"><a class="buttn buttn-primary" href="./estimates/{{$estimate->id}}/edit"><i class='bx bx-edit'></i> </a> <a class="buttn buttn-danger" href="./estimates/{{$estimate->id}}/confirmDelete"><i class='bx bxs-trash'></i></a> <a class="buttn buttn-success" href="./estimates/{{$estimate->id}}" target="_blank"><i class="bx bxs-show"></i></a><a class="buttn buttn-warn" href="./estimates/{{$estimate->id}}/send"><i class="bx bx-mail-send"></i></a></td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                    </table>
            </div>
        </div>

    </div>    
@endsection
