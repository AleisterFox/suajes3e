@extends('layouts.panel')

@section('title','Clientes')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Clientes</a>
@endsection

@section('content')

    <div class="mt-4">
        <div class="body">
            <div class="buttons">
                <div class="butn cancel_butn">
                    <ul>
                        <li>
                            <a href="/customers">
                                <i class='bx bx-arrow-back'></i>
                                <span>Volver a clientes</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="butn">
                        <ul>
                            <li>
                                <a href="/customers/{{$id}}/machines/select">
                                    <i class='bx bx-plus'></i>
                                    <span>Nueva maquina</span>
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
                            <th>Maquina</th>
                            <th class="acciones">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($machines as $machine)
                            @if($id == $machine->Compañia)
                                <tr>
                                    <td>{{$machine->Marca_maquina}}</td>
                                    <td class="botones"><a class="buttn buttn-primary" href="./machines/{{$machine->id}}/edit"><i class='bx bx-edit'></i> </a> <a class="buttn buttn-danger" href="./machines/{{$machine->id}}/confirmDelete"><i class='bx bxs-trash'></i></a> <a class="buttn buttn-success" href="./machines/{{$machine->id}}" target="_blank"><i class="bx bxs-show"></i></a></td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection
