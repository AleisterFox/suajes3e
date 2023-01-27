@extends('layouts.panel')

@section('title','Cotizaciones')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Cotizaciones</a>
@endsection

@section('content')

    <div class="mt-6">
        <div class="body">
            <!-- <div class="butn">
                <ul>
                    <li>
                        <a href="/estimates/create">
                            <i class='bx bx-plus'></i>
                            <span>Nueva Cotizacion</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="butn">
                <ul>
                    <li>
                        <a href="/estimates/templates">
                            <i class='bx bxs-file-doc'></i>
                            <span>From templates</span>
                        </a>
                    </li>
                </ul>
            </div> -->
    
            <p></p>
    
            <div class="tbl">
                <table>
                    <thead>
                        <tr>
                            <th>Cliente</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td><a href="/customer/{{$customer->id}}/estimates">{{$customer->Compañia}}</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
            </div>
        </div>
    
    </div>
    
@endsection
