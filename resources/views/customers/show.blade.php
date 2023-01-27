<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Favicon -->
    <link href="{{asset('img/brand/favicon.ico')}}" rel="icon" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Tecnicos Troquelados</title>
    <link rel="stylesheet" href="{{asset('/css/customer.css')}}">
</head>
<body onload="resizing()">
    <header id="info">
        @if($machine->Tipo_maquina == 1)
            <h3>DATOS TECNICOS DE TROQUELADORAS CURVAS</h3>
        @else
            <h3>DATOS TECNICOS DE TROQUELADORAS PLANAS</h3>
        @endif
    </header>
    <table>
        <tr>
            <th id="first">Compañia</th>

            <td id="first"><strong>
            @foreach($customers as $customer)
                @if($customer->id == $machine->Compañia)
                    {{$customer->Compañia}}
                @endif
            @endforeach
            </strong></td>
        </tr>

        <tr>
            <th>Marca de la maquina</th>

            <td>{{$machine->Marca_maquina}}</td>
        </tr>

        <tr>
            <th>Diametro del rodillo</th>

            <td>{{$machine->Diametro_rodillo}}</td>
        </tr>

        <tr>
            <th>Largo del rodillo</th>

            <td>{{$machine->Largo_rodillo}}</td>
        </tr>
    </table>
    <table>
        <tr>
            <th id="info first first-left">Patron de huecos</th>
            <th id="info first" class="heads">Sentido Curvo</th>
            <th id="info first" class="heads">Sentido Recto</th>
            <th id="info first" class="heads">Fecha</th>
        </tr>
        <tr>
            <th>Numero de MHP</th>
            <td>{{$machine->NMPH_curvo}}</td>
            <td>{{$machine->NMPH_recto}}</td>
            <td class="date">{{$machine->created_at}}</td>
        </tr>
        <tr>
            <th>Distancia entre MHP</th>
            <td>{{$machine->DMPH_curvo}}</td>
            <td>{{$machine->DMPH_recto}}</td>
            <td rowspan="2"></td>
        </tr>
        <tr>
            <th>Centro de maquina</th>
            <td colspan="2">{{$machine->Centro_maquina}}</td>
        </tr>
    </table>
    <table>
        <tr>
            <th id="info first first-left">Altura de plecas corrugado sencillo</th>
            <th id="info first" class="heads">Sentido Curvo</th>
            <th id="info first" class="heads">Sentido Recto</th>
            <th id="info first" class="heads">Figuras y despuntes</th>
        </tr>
        <tr>
            <th>Plecas de corte</th>
            @foreach($plecas as $pleca)
                @if($machine->Plecascs_corte_curvo == $pleca->Codigo_interno)
                    <td>{{$pleca->Nombre}}</td>
                @endif
                @if($machine->Plecascs_corte_recto == $pleca->Codigo_interno)
                    <td>{{$pleca->Nombre}}</td>
                @endif
                @if($machine->Plecascs_corte_fig == $pleca->Codigo_interno)
                    <td>{{$pleca->Nombre}}</td>
                @endif
            @endforeach
        </tr>
        <tr>
            <th>Plecas de score</th>
            @foreach($plecas as $pleca)
                @if($machine->Plecascs_score_curvo == $pleca->Codigo_interno)
                    <td>{{$pleca->Nombre}}</td>
                @endif
                @if($machine->Plecascs_score_recto == $pleca->Codigo_interno)
                    <td>{{$pleca->Nombre}}</td>
                @endif
            @endforeach
            <td rowspan="2"></td>
        </tr>
        <tr>
            <th>Plecas de punteado</th>
            @foreach($plecas as $pleca)
                @if($machine->Plecascs_punteado_curvo == $pleca->Codigo_interno)
                    <td>{{$pleca->Nombre}}</td>
                @endif
                @if($machine->Plecascs_punteado_recto == $pleca->Codigo_interno)
                    <td>{{$pleca->Nombre}}</td>
                @endif
            @endforeach
        </tr>
    </table>
    <table>
        <tr>
            <th id="info first first-left">Altura de plecas doble corrugado</th>
            <th id="info first" class="heads">Sentido Curvo</th>
            <th id="info first" class="heads">Sentido Recto</th>
            <th id="info first" class="heads">Figuras y despuntes</th>
        </tr>
        <tr>
            <th>Plecas de corte</th>
            @foreach($plecas as $pleca)
                @if($machine->Plecascd_corte_curvo == $pleca->Codigo_interno)
                    <td>{{$pleca->Nombre}}</td>
                @endif
                @if($machine->Plecascd_corte_recto == $pleca->Codigo_interno)
                    <td>{{$pleca->Nombre}}</td>
                @endif
            @endforeach
            <td rowspan="3">N/A</td>
        </tr>
        <tr>
            <th>Plecas de score</th>
            @foreach($plecas as $pleca)
                @if($machine->Plecascd_score_curvo == $pleca->Codigo_interno)
                    <td>{{$pleca->Nombre}}</td>
                @endif
                @if($machine->Plecascd_score_recto == $pleca->Codigo_interno)
                    <td>{{$pleca->Nombre}}</td>
                @endif
            @endforeach
        </tr>
        <tr>
            <th>Plecas de punteado</th>
            @foreach($plecas as $pleca)
                @if($machine->Plecascd_punteado_curvo == $pleca->Codigo_interno)
                    <td>{{$pleca->Nombre}}</td>
                @endif
                @if($machine->Plecascd_punteado_recto == $pleca->Codigo_interno)
                    <td>{{$pleca->Nombre}}</td>
                @endif
            @endforeach
        </tr>
    </table>
    <table>
        <tr>
            <th id="first" class="second-part">Vista del plano</th>

            <td id="first">{{$machine->Vista_plano}}</td>
        </tr>

        <tr>
            <th class="second-part">Velocidad de troquelado</th>

            <td>{{$machine->Velocidad_troquelado}}</td>
        </tr>

        <tr>
            <th class="second-part">Ceja lado</th>

            <td>{{$machine->Ceja_lado}}</td>
        </tr>

        <tr>
            <th class="second-part">Espesor de madera</th>

            <td>{{$machine->Espesor_madera}}</td>
        </tr>

        <tr>
            <th class="second-part">Factor de reduccion</th>

            <td>{{$machine->Factor_reduccion}}</td>
        </tr>
    </table>
    <table>
        <tr>
            <th id="first" class="third-part">Rango de puentes en madera</th>

            <td id="first">{{$machine->Rango_puentes_madera}}</td>
        </tr>

        <tr>
            <th class="third-part">Rango de puentes en pleca</th>

            <td>{{$machine->Rango_puentes_pleca}}</td>
        </tr>

        <tr>
            <th class="third-part">Por que lado de la impresion troquela</th>

            <td>{{$machine->Lado_impresion_troquela}}</td>
        </tr>

        <tr>
            <th class="third-part">Dimension maxima para troquelar</th>

            <td>{{$machine->Dimension_max_troquelar}}</td>
        </tr>

        <tr>
            <th class="third-part">Dimension minima para troquelar</th>

            <td>{{$machine->Dimension_min_troquelar}}</td>
        </tr>

        <tr>
            <th class="third-part">Tamaño de desperdicios del trim</th>

            <td>{{$machine->Tamaño_desperdicios_trim}}</td>
        </tr>
    </table>
    <table>
        <tr>
            <th id="first" class="third-part">Tamaño de la separacion del desperdicio del trim</th>

            <td id="first">{{$machine->Tamaño_separacion_desperdicios}}</td>
        </tr>

        <tr>
            <th class="third-part">Tipo de hule para trim curvo</th>
            @foreach($hules as $hule)
                @if($machine->Tipo_hule_trim_curvo == $hule->Codigo_interno)
                    <td>{{$hule->Nombre_articulo}}</td>
                @endif
            @endforeach
        </tr>

        <tr>
            <th class="third-part">Tipo de hule para trim recto</th>
            @foreach($hules as $hule)
                @if($machine->Tipo_hule_trim_recto == $hule->Codigo_interno)
                    <td>{{$hule->Nombre_articulo}}</td>
                @endif
            @endforeach
        </tr>

        <tr>
            <th class="third-part">Tipo de hule para el cuerpo de la caja</th>
            @foreach($hules as $hule)
                @if($machine->Tipo_hule_cuerpo_caja == $hule->Codigo_interno)
                    <td>{{$hule->Nombre_articulo}}</td>
                @endif
            @endforeach
        </tr>

        <tr>
            <th class="third-part">Tipo de hule para punteados</th>
            @foreach($hules as $hule)
                @if($machine->Tipo_hule_punteados == $hule->Codigo_interno)
                    <td>{{$hule->Nombre_articulo}}</td>
                @endif
            @endforeach
        </tr>

        <tr>
            <th class="third-part">Tipo de hule para scores a favor de la flauta</th>
            @foreach($hules as $hule)
                @if($machine->Tipo_hule_scores_favor_flauta == $hule->Codigo_interno)
                    <td>{{$hule->Nombre_articulo}}</td>
                @endif
            @endforeach
        </tr>

        <tr>
            <th class="third-part">Tipo de hule para despuntes y cacahuates</th>
            @foreach($hules as $hule)
                @if($machine->Tipo_hule_despuntes_cacahuates == $hule->Codigo_interno)
                    <td>{{$hule->Nombre_articulo}}</td>
                @endif
            @endforeach
        </tr>

        <tr>
            <th class="third-part">Tipo de hule para figuras</th>
            @foreach($hules as $hule)
                @if($machine->Tipo_hule_figuras == $hule->Codigo_interno)
                    <td>{{$hule->Nombre_articulo}}</td>
                @endif
            @endforeach
        </tr>

        <tr>
            <th class="third-part">Tipo de hules para desperdicio de mas de 5x5</th>
            @foreach($hules as $hule)
                @if($machine->Tipo_hules_desperdicio_5x5 == $hule->Codigo_interno)
                    <td>{{$hule->Nombre_articulo}}</td>
                @endif
            @endforeach
        </tr>
    </table>
    <div class="comments">
        <h4>Observaciones:</h4>
        <p>{{$machine->Observaciones}}</p>
    </div>
</body>
</html>