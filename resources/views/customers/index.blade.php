@extends('layouts.panel')

@section('title','Clientes')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Clientes</a>
@endsection

@section('content')

    <div class="mt-4">
        <div class="body">
            
            <div class="butn">
                <ul>
                    <li>
                        <a href="/customers/create">
                            <i class='bx bx-plus'></i>
                            <span>Nuevo cliente</span>
                        </a>
                    </li>
                </ul>
            </div>

            <p></p>

            <div class="tbl">
                <table>
                    <thead>
                        <tr>
                            <th>Compañia</th>
                            <th class="acciones">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td><a href="/customers/{{$customer->id}}/machines">{{$customer->Compañia}}</a></td>
                                <td class="botones"><a class="buttn buttn-primary" href="./customers/{{$customer->id}}/edit"><i class='bx bx-edit'></i> </a> <a class="buttn buttn-danger" href="./customers/{{$customer->id}}/confirmDelete"><i class='bx bxs-trash'></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection
