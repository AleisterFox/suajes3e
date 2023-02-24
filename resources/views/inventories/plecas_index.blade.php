@extends('layouts.panel')

@section('title','Plecas')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Plecas</a>
@endsection

@section('content')

    <div class="mt-4">
        <div class="body">
            <div class="buttons">
                <div class="butn cancel_butn">
                    <ul>
                        <li>
                            <a href="/inventories">
                                <i class='bx bx-arrow-back'></i>
                                <span>Volver a Inventarios</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="butn">
                        <ul>
                            <li>
                                <a href="/inventories/{{$id}}/Plecas/create">
                                    <i class='bx bx-plus'></i>
                                    <span>Nuevo item</span>
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
                            <th>Item</th>
                            <th>Descripcion</th>
                            <th class="acciones">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($plecas as $pleca)
                            <tr>
                                <td>{{$pleca->Codigo_interno}}</td>
                                <td>{{$pleca->Nombre}}</td>
                                <td class="botones"><a class="buttn buttn-primary" href="./Plecas/{{$pleca->id}}/edit"><i class='bx bx-edit'></i> </a> <a class="buttn buttn-danger" href="./Plecas/{{$pleca->id}}/confirmDelete"><i class='bx bxs-trash'></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection
