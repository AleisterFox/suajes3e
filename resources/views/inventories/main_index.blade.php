@extends('layouts.panel')

@section('title','Inventarios')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Inventarios</a>
@endsection

@section('content')

    <div class="mt-4">
        <div class="body">
            
            <div class="butn">
                <ul>
                    <li>
                        <a href="/inventories/create">
                            <i class='bx bx-plus'></i>
                            <span>Nuevo inventario</span>
                        </a>
                    </li>
                </ul>
            </div>

            <p></p>

            <div class="tbl">
                <table>
                    <thead>
                        <tr>
                            <th>Articulo</th>
                            <th class="acciones">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($inventories as $inventory)
                            <tr>
                                <td><a href="/inventories/{{$inventory->id}}/{{$inventory->Item}}">{{$inventory->Item}}</a></td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection
