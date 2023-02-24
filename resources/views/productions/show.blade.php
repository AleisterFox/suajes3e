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

    <table class="trazos">
        <td>
            <img src= "{{asset($production->Img1)}}" >
        </td>
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
            @php
                $corte = [
                    "1" => "no-rellenar",
                    "2" => "no-rellenar",
                    "3" => "no-rellenar",
                    "4" => "no-rellenar"
                    ];
                if($production->Corte == "990/970"){
                    $corte[1] = "rellenar";
                }
                if($production->Corte == "1030/1030"){
                    $corte[2] = "rellenar";
                }
                if($production->Corte == "1040/1030"){
                    $corte[3] = "rellenar";
                }
                if($production->Corte == "1000/1000"){
                    $corte[4] = "rellenar";
                }
            @endphp
            <tr>
                <th rowspan="2" class="">Corte:</th>
                <td id="990/970">990/970</td>
                <td class="<?php echo $corte[1] ?>"></td>
                <td id="1030/1030">1030/1030</td>
                <td class="<?php echo $corte[2] ?>"></td>
            </tr>
            <tr>
                <td id="1040/1030">1040/1030</td>
                <td class="<?php echo $corte[3] ?>"></td>
                <td>1000/1000</td>
                <td class="<?php echo $corte[4] ?>"></td>
            </tr>
            <br>
            @php
                $doblez = [
                    "1" => "no-rellenar",
                    "2" => "no-rellenar",
                    ];
                if($production->Doblez == "860/850"){
                    $doblez[1] = "rellenar";
                }
                if($production->Doblez == "860/850(8/4)"){
                    $doblez[2] = "rellenar";
                }
            @endphp
            <tr>
                <th class="">Doblez:</th>
                <td class="">860/850</td>
                <td class="<?php echo $doblez[1] ?>"></td>
                <td class="">860/850 (8/4)</td>
                <td class="<?php echo $doblez[2] ?>"></td>
            </tr>
        </table>
        <table class="footer">
            @php
                $perforado = [
                    "1" => "no-rellenar",
                    "2" => "no-rellenar",
                    "3" => "no-rellenar",
                    "4" => "no-rellenar",
                    "5" => "no-rellenar"
                    ];
                if($production->Medida_perforado == "970"){
                    $perforado[1] = "rellenar";
                }
                if($production->Medida_perforado == "1/2 x 1/2"){
                    $perforado[2] = "rellenar";
                }
                if($production->Medida_perforado == "1/8 x 1/8"){
                    $perforado[3] = "rellenar";
                }
                if($production->Medida_perforado == "1/4 x 1/4"){
                    $perforado[4] = "rellenar";
                }
                if($production->Medida_perforado == "3/8 x 3/8"){
                    $perforado[5] = "rellenar";
                }
            @endphp
            <tr>
                <th class="" rowspan="3">Perforado:</th>
                <td class="">970</td>
                <td class="<?php echo $perforado[1] ?>"></td>
                <td class="">1/8x1/8</td>
                <td class="<?php echo $perforado[2] ?>"></td>
            </tr>
            <tr>
                <td class="">1/2x1/2</td>
                <td class="<?php echo $perforado[3] ?>"></td>
                <td class="">1/4x1/4</td>
                <td class="<?php echo $perforado[4] ?>"></td>
            </tr>
            <tr>
                <td class="">3/8x3/8</td>
                <td class="<?php echo $perforado[5] ?>"></td>
            </tr>
            <br>
        </table>
        <table class="footer final">
                @php
                    $hule = [
                        "1" => "no-rellenar",
                        "2" => "no-rellenar",
                        "3" => "no-rellenar",
                        "4" => "no-rellenar",
                        "5" => "no-rellenar"
                    ];
                    if($production->Hule == "5/8 x 5/8 x 1 1/4" or $production->Hule2 == "5/8 x 5/8 x 1 1/4" or $production->Hule3 == "5/8 x 5/8 x 1 1/4" or $production->Hule4 == "5/8 x 5/8 x 1 1/4" or $production->Hule5 == "5/8 x 5/8 x 1 1/4"){
                        $hule[1] = "rellenar";
                    }
                    if($production->Hule == "3/4 x 3/4 x 1 1/4" or $production->Hule2 == "3/4 x 3/4 x 1 1/4" or $production->Hule3 == "3/4 x 3/4 x 1 1/4" or $production->Hule4 == "3/4 x 3/4 x 1 1/4" or $production->Hule5 == "3/4 x 3/4 x 1 1/4"){
                        $hule[2] = "rellenar";
                    }
                    if($production->Hule == "7/16 x 1/2 x 20" or $production->Hule2 == "7/16 x 1/2 x 20" or $production->Hule3 == "7/16 x 1/2 x 20" or $production->Hule4 == "7/16 x 1/2 x 20" or $production->Hule5 == "7/16 x 1/2 x 20"){
                        $hule[3] = "rellenar";
                    }
                    if($production->Hule == "7/8 x 42 x 52" or $production->Hule2 == "7/8 x 42 x 52" or $production->Hule3 == "7/8 x 42 x 52" or $production->Hule4 == "7/8 x 42 x 52" or $production->Hule5 == "7/8 x 42 x 52"){
                        $hule[4] = "rellenar";
                    }
                    if($production->Hule == "Kushion .315" or $production->Hule2 == "Kushion .315" or $production->Hule3 == "Kushion .315" or $production->Hule4 == "Kushion .315" or $production->Hule5 == "Kushion .315"){
                        $hule[5] = "rellenar";
                    }
                @endphp
            <tr>
                <th class="" rowspan="3">Hule:</th>
                <td class="">5/8x5/8x1 1/4</td>
                <td class="<?php echo $hule[1] ?>"></td>
                <td class="">3/4x3/4x1 1/4</td>
                <td class="<?php echo $hule[2] ?>"></td>
            </tr>
            <tr>
                <td class="">7/16x1/2x20</td>
                <td class="<?php echo $hule[3] ?>"></td>
                <td class="">7/8x42x52</td>
                <td class="<?php echo $hule[4] ?>"></td>
            </tr>
            <tr>
                <td class="">Kushion .315</td>
                <td class="<?php echo $hule[5] ?> last-right"></td>
            </tr>
            <br>
            @php
                $madera = [
                    "1" => "no-rellenar",
                    "2" => "no-rellenar",
                    ];
                if($production->P_madera == "1 1/4"){
                    $madera[1] = "rellenar";
                }
                if($production->P_madera == "1"){
                    $madera[2] = "rellenar";
                }
            @endphp
            <tr>
                <th class="">P.Madera(Paleta)</th>
                <td class="">1 1/4</td>
                <td class="<?php echo $madera[1] ?>"></td>
                <td class="">1</td>
                <td class="<?php echo $madera[2] ?>"></td>
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
            @php
                $corte = [
                    "1" => "no-rellenar",
                    "2" => "no-rellenar",
                    "3" => "no-rellenar",
                    "4" => "no-rellenar"
                    ];
                if($production->Corte == "990"){
                    $corte[1] = "rellenar";
                }
                if($production->Corte == "937"){
                    $corte[2] = "rellenar";
                }
                if($production->Corte == "1040"){
                    $corte[3] = "rellenar";
                }
                if($production->Corte == "1000"){
                    $corte[4] = "rellenar";
                }
            @endphp
            <tr>
                <th rowspan="2" class="">Corte:</th>
                <td>990</td>
                <td class="<?php echo $corte[1] ?>"></td>
                <td>937</td>
                <td class="<?php echo $corte[2] ?>"></td>
            </tr>
            <tr>
                <td>1040</td>
                <td class="<?php echo $corte[3] ?>"></td>
                <td>1000</td>
                <td class="<?php echo $corte[4] ?>"></td>
            </tr>
            <br>
            @php
                $doblez = [
                    "1" => "no-rellenar",
                    "2" => "no-rellenar",
                    "3" => "no-rellenar"
                    ];
                if($production->Doblez == "860"){
                    $doblez[1] = "rellenar";
                }
                if($production->Doblez == "890"){
                    $doblez[2] = "rellenar";
                }
                if($production->Doblez == "906"){
                    $doblez[3] = "rellenar";
                }
            @endphp
            <tr>
                <th rowspan="2">Doblez:</th>
                <td>860</td>
                <td class="<?php echo $doblez[1] ?>"></td>
                <td>890</td>
                <td class="<?php echo $doblez[2] ?>"></td>
            </tr>
            <tr>
                <td>906</td>
                <td class="<?php echo $doblez[3] ?>"></td>
            </tr>
        </table>
        <table class="footer">
            @php
                $perforado = [
                    "1" => "no-rellenar",
                    "2" => "no-rellenar",
                    "3" => "no-rellenar",
                    "4" => "no-rellenar",
                    ];

                if($production->Medida_perforado == "1/2 x 1/2"){
                    $perforado[1] = "rellenar";
                }
                if($production->Medida_perforado == "1/8 x 1/8"){
                    $perforado[2] = "rellenar";
                }
                if($production->Medida_perforado == "1/4 x 1/4"){
                    $perforado[3] = "rellenar";
                }
                if($production->Medida_perforado == "3/8 x 3/8"){
                    $perforado[4] = "rellenar";
                }
            @endphp
            <tr>
                <th class="" rowspan="3">Perforado:</th>
                <td class="">1/8x1/8</td>
                <td class="<?php echo $perforado[1] ?>"></td>
            </tr>
            <tr>
                <td class="">1/2x1/2</td>
                <td class="<?php echo $perforado[2] ?>"></td>
                <td class="">1/4x1/4</td>
                <td class="<?php echo $perforado[3] ?>"></td>
            </tr>
            <tr>
                <td class="">3/8x3/8</td>
                <td class="<?php echo $perforado[4] ?>"></td>
            </tr>
            <br>
            <tr>
                <th>Hule:</th>
                <td class="">1/2x1/2x1 1/4</td>
                <td class="rellenar"></td>
            </tr>
            <br>
            @php 
                $corte2 = [
                    "1" => "no-rellenar",
                    "2" => "no-rellenar",
                    ];

                if($production->Pleca_2000 == "3 Pts"){
                    $corte2[1] = "rellenar";
                }
                if($production->Pleca_2000 == "4 Pts"){
                    $corte2[2] = "rellenar";
                }
            @endphp
            <tr>
                <th rowspan="2">Corte 2.00:</th>
                <td>3pts</td>
                <td class="<?php echo $corte2[1] ?>"></td>
                <td>4pts</td>
                <td class="<?php echo $corte2[2] ?>"></td>
            </tr>
            
        </table>
        <table class="footer final">
            <tr>
                <td>Profundidad de corte:</td>
                <td class="info">{{$production->Profundidad_pleca_2000}}</td>
            </tr>
        </table>
        
    @endif
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