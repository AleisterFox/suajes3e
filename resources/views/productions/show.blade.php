<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="{{ public_path ( '/css/production.css' ) }}" rel="stylesheet" type="text/css">
        <link href="{{asset('img/brand/favicon.ico')}}" rel="icon" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hoja de produccion</title>
    </head>
    <body>
    <table class="cabecera">
        <td class="logo">
            <img src="{{asset('img/brand/logo.png')}}" alt="logo">
        </td>
        <td>
            <h2>ORDEN DE PRODUCCION</h2>
        </td>
    </table>
    <table class="datos1">
        <tr>
            <th class="first-left">Folio:</th>
            <td class="last-right">{{$production->Folio}}</td>
            <th class="first-left">Corrugado:</th>
            <td class="last-right">{{$production->Corrugado}}</td>
            <th class="first-left">Calado:</th>
            <td class="last-right">{{$production->Calado}} pts</td>
            <th class="first-left">Fecha:</th>
            <td class="last-right">{{$production->Fecha}}</td>
        </tr>
        <tr>
            <th class="first-left">Cliente:</th>
            @foreach($customers as $customer)
                @if($production->Cliente == $customer->id)
                    <td class="last-right">{{$customer->Compañia}}</td>
                @endif
            @endforeach
            <th class="first-left">Maquina:</th>
            <td class="last-right">{{$production->Maquina}}</td>
            @if($production->Type == 1)
                <th class="first-left">S.Rotativo:</th>
                <td class="last-right">{{$production->S_rotativo}}</td>
            @else
                <th class="first-left"></th>
                <td class="last-right"></td>
            @endif

            <th class="first-left"></th>
            <td class="last-right"></td>
        </tr>
        <tr>
            <th class="first-left">Descripcion:</th>
            <td class="last-right">{{$production->Descripcion}}</td>
            <th class="first-left">F.Reduccion:</th>
            <td class="last-right">{{$production->Factor_reduccion}}</td>
            @if($production->Type == 2)
                <th class="first-left">S.Plano:</th>
                <td class="last-right">{{$production->S_plano}}</td>
            @else
                <th class="first-left"></th>
                <td class="last-right"></td>
            @endif
            <th class="first-left">Cotizacion:</th>
            <td class="last-right">{{$production->Cotizacion}}</td>
        </tr>
        <tr>
            <th class="first-left">Cm totales:</th>
            <td class="last-right">{{$production->Cm_totales}}</td>
            <th class="first-left">Cut:</th>
            <td class="last-right">{{$production->Cut}}</td>
            <th class="first-left">Score:</th>
            <td class="last-right">{{$production->Score}}</td>
            <th class="first-left">Perforado:</th>
            <td class="last-right">{{$production->Perforado}}</td>
        </tr>
    </table>

    <table class="trazos">
        <td>
            <img src= "{{asset($production->Img1)}}" >
        </td>
    </table>

    <table class="footer_header">
        <tr>
            @if($production->Type == 1)
                <th class="header">
                    Especificaciones para elaborar suaje Curvo
                </th>
            @endif
            @if($production->Type == 2)
                <th class="header">
                    Especificaciones para elaborar suaje Plano
                </th>
            @endif
        </tr>
    </table>

    <table class="footer">
        <tr>
            <th class="first-left">Corte:</th>
            <td class="last-right">{{$production->Corte}}</td>
        </tr>
        <tr>
            <th class="first-left">Doblez:</th>
            <td class="last-right">{{$production->Doblez}}</td>
        </tr>
        <tr>
            <th class="first-left">Medida_perforado:</th>
            <td class="last-right">{{$production->Medida_perforado}}</td>
        </tr>
        <tr>
            <th class="first-left">Hule:</th>
            <td class="last-right">{{$production->Hule}}</td>
        </tr>
        @if($production->Type == 2)
            <tr>
                <th class="first-left">Pleca 2":</th>
                <td class="last-right">{{$production->Pleca_2000}}</td>
            </tr>
            <tr>
                <th class="first-left">Profundidad_pleca_2000:</th>
                <td class="last-right">{{$production->Profundidad_pleca_2000}}</td>
            </tr>
        @endif
    </table>
    <br>
    <br>
    <br>
    <br>
    <table class="firmas">
        <tr>
            <td class="firma">CALADO</td>
            <td>&nbsp; &nbsp;</td>
            <td class="firma">PLECADO</td>
            <td>&nbsp; &nbsp;</td>
            <td class="firma">ENGOMADO</td>
        </tr>
    </table>

    </body>
</html>

