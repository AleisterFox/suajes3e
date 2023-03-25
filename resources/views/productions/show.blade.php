<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="{{ asset( '/css/production.css' ) }}" rel="stylesheet" type="text/css">
        <link href="{{asset('img/brand/favicon.ico')}}" rel="icon" type="image/png">
        <script src="{{asset('/js/production.js')}}"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hoja de produccion</title>
    </head>
    
    <body onload="rellenar('1000/1000')">
    
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

    @if($production->Type == 1)
        <table class="footer_header">
            <tr>
                <th class="header">
                    Especificaciones para elaborar suaje Curvo
                </th>
            </tr>
        </table>
        <table class="footer">
            <tr>
                <th>Corte:</th>
                <td>{{$production->Corte}}</td>
            
                <th>Doblez:</th>
                <td>{{$production->Doblez}}</td>
            
                <th>Perforado:</th>
                <td>{{$production->Medida_perforado}}</td>
            
                <th>Calado:</th>
                <td>{{$production->Calado}} pts</td>
            
                <th>P.Madera:</th>
                <td>{{$production->P_madera}}</td>
            </tr>
            <tr>
                <th>Hule1:</th>
                <td>{{$production->Hule}}</td>

                <th>Hule2:</th>
                <td>{{$production->Hule2}}</td>

                <th>Hule3:</th>
                <td>{{$production->Hule3}}</td>

                <th>Hule4:</th>
                <td>{{$production->Hule4}}</td>

                <th>Hule5:</th>
                <td>{{$production->Hule5}}</td>
            </tr>
            <tr>
                <th>M.Puentes</th>
                <td></td>

                <th>F.reduccion</th>
                
                @foreach ($machines as $machine)
                    @if ($machine->Compañia == $production->Cliente)
                    <td>{{$machine->Factor_reduccion}}</td>
                    @endif
                @endforeach
                
            </tr>
        </table>
    @endif

    @if($production->Type == 2)
        <table class="footer_header">
            <tr>
                <th class="header">
                    Especificaciones para elaborar suaje plano
                </th>
            </tr>
        </table>
        <table class="footer">
            <tr>
                <th>Corte:</th>
                <td>{{$production->Corte}}</td>
            
                <th>Doblez:</th>
                <td>{{$production->Doblez}}</td>
            
                <th>Perforado:</th>
                <td>{{$production->Medida_perforado}}</td>
            
                <th>Calado:</th>
                <td>{{$production->Calado}} pts</td>
            
                <th>P.Madera:</th>
                <td>{{$production->P_madera}}</td>
            </tr>
            <tr>
                <th>Hule:</th>
                <td>{{$production->Hule}}</td>

                <th>Corte 2.00:</th>
                <td>{{$production->Pleca_2000}}</td>

                <th>Prof 2.00:</th>
                <td>{{$production->Profundidad_pleca_2000}}</td>

                <th>M.Puentes:</th>
                <td></td>

                <th>F.reducc:</th>
                
                @foreach ($machines as $machine)
                    @if ($machine->Compañia == $production->Cliente)
                    <td>{{$machine->Factor_reduccion}}</td>
                    @endif
                @endforeach
            </tr>
        </table>
        
    @endif

    <table class="trazos">
        <td>
            <img src= "{{asset($production->Img1)}}" >
        </td>
    </table>

    <table class="footer_header">
        <tr>
            <th class="header">
                Verificacion del proceso
            </th>
        </tr>
    </table>
    <div class="table-wrapper">
        
        <table class="t1">
            <tr class="head">
                <th colspan=4>PLOTEADO</th>
            </tr>
            <tr>
                <th class="espacio"></th>
                <td>Si</td>
                <td>No</td>
                <td></td>
            </tr>
            <tr>
                <th>Dimensiones</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>Acomodo</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>Lineas</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>F.reduccion</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <td style="color:#fff;" colspan="4">hola</td>
            </tr>
            <tr>
                <td style="color:#fff;" colspan="4">hola</td>
            </tr>
            <tr>
                <td style="color:#fff;" colspan="4">hola</td>
            </tr>
            <tr>
                <td style="color:#fff;" colspan="4">hola</td>
            </tr>
            <tr>
                <td colspan="4"></td>
            </tr>
        </table>
        <table class="t1">
            <tr class="head">
                <th colspan=4>CALADO</th>
            </tr>
            <tr>
                <th class="espacio"></th>
                <td>Si</td>
                <td>No</td>
                <td></td>
            </tr>
            <tr>
                <th>Tipo suaje</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>Calado(3-4 pts)</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>Dimension puentes</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>Lineas rectas</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>Lineas caladas</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <td style="color:#fff;" colspan="4">hola</td>
            </tr>
            <tr>
                <td style="color:#fff;" colspan="4">hola</td>
            </tr>
            <tr>
                <td style="color:#fff;" colspan="4">hola</td>
            </tr>
            <tr>
                <td colspan="4"></td>
            </tr>
        </table>
        <table class="t1">
            <tr class="head">
                <th colspan=4>PLECADO</th>
            </tr>
            <tr>
                <th class="espacio"></th>
                <td>Si</td>
                <td>No</td>
                <td></td>
            </tr>
            <tr>
                <th>Altura pleca</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>Tamaño puentes</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>Plecas asentadas</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>Uniones cerradas</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>Plecas derechas</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <td style="color:#fff;" colspan="4">hola</td>
            </tr>
            <tr>
                <td style="color:#fff;" colspan="4">hola</td>
            </tr>
            <tr>
                <td style="color:#fff;" colspan="4">hola</td>
            </tr>
            <tr>
                <td colspan="4"></td>
            </tr>
            
        </table>
        <table class="t1">
            <tr class="head">
                <th colspan=4>ENGOMADO</th>
            </tr>
            <tr>
                <th class="espacio"></th>
                <td>Si</td>
                <td>No</td>
                <td></td>
            </tr>
            <tr>
                <th>1/2x1/2x1 1/4</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>3/4x3/4x1 1/4</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>7MMX"9x18"</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>5/8x5/8x1 1/4</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>Kushion 0.315</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>7/16x1/2x20</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>7/8x42x52</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <th>Hules pegados</th>
                <td class="no-rellenar"></td>
                <td class="no-rellenar"></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="4"></td>
            </tr>
            <tr>
                <td colspan="4"></td>
            </tr>
        </table>
    </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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