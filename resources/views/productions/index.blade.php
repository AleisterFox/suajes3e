@extends('layouts.panel')

@section('title','Productions')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Productions</a>
@endsection

@section('content')
    
    <div class="mt-4">
        <div class="body">
            <div class="buttons">
                <div class="butn">
                    <ul>
                        <li>
                            <a href="/productions/create">
                                <i class='bx bx-plus'></i>
                                <span>Nueva hoja</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="butn">
                    <ul>
                        <li>
                            <a href="/productions/template/create">
                                <i class='bx bxs-file-doc'></i>
                                <span>Desde cotizacion</span>
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
                            <th>Cliente</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productions as $production)
                                <tr>
                                    <td>{{$production->Folio}}</td>
                                    @foreach($customers as $customer)
                                        @if($production->Cliente == $customer->id)
                                            <td>{{$customer->Compañia}}</td>
                                        @endif
                                    @endforeach
                                    <td class="botones"><a class="buttn buttn-primary" href="./productions/{{$production->id}}/edit"><i class='bx bx-edit'></i> </a> <a class="buttn buttn-danger" href="./productions/{{$production->id}}/confirmDelete"><i class='bx bxs-trash'></i></a> <a class="buttn buttn-success" href="./productions/{{$production->id}}" target="_blank"><i class="bx bxs-show"></i></a></td>
                                </tr>
                            
                        @endforeach
                    </tbody>
                    </table>
            </div>
        </div>
    </div>

@endsection
