<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ asset ( '/css/estimate.css' ) }}" rel="stylesheet">
    <link href="{{asset('img/brand/favicon.ico')}}" rel="icon" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizacion</title>
</head>

<body>

    <table class="header">
        <tr>
            <td class="logo">
                <img src="{{asset('img/brand/logo.png')}}" alt="logo">
            </td>
            <td class="datos">
                <p>SUAJES Y MONTAJES "3E"</p>
                <p>NARCIZO ELIAS OLIVARES</p>
                <p>RFC: GAFR7007098Z2</p>
                <p class="light">MARIA DEL ROSARIO GRANADOS FRIAS</p>
                <p>COTIZACION</p>
            </td>
            <td class="datos2">
                <p>FOLIO: {{$estimate->Folio}}</p> <br>
                <p>FECHA: {{$estimate->Fecha}}</p>
            </td>
        </tr>
    </table>
    <br>
    <table class="intermedio">
        <tr>
            <th>Empresa: &nbsp; </th>
            @foreach($customers as $customer)
                @if($customer->id == $estimate->Cliente)
                    <td> <p> {{$customer->Compañia}} </p></td>
                @endif
            @endforeach
        </tr>
        <tr>
            <th>Atencion: &nbsp;</th>
            <td>{{$estimate->Receptor}}</td>
        </tr>
    </table>

    <p>De acuerdo a su solicitud le estoy enviando la cotizacion referente a la elaboracion de:</p>
        
    <table class="productos">
        <tr>
            <th class="numeracion">Partida</th>
            <th colspan="2">Descripcion del producto</th>
            <th class="total">Total</th>
        </tr>
        <tr>
            <td class="numeracion">1</td>
            <td colspan="2">{{$estimate->Sj1}} &nbsp; ({{$estimate->Qty1}})</td>
            <td class="total">{{$estimate->S1}}</td>
        </tr>
        @if($estimate->Sj2 != NULL)
            <tr>
                <td class="numeracion">2</td>
                <td colspan="2">{{$estimate->Sj2}} &nbsp; ({{$estimate->Qty2}})</td>
                <td class="total">{{$estimate->S2}}</td>
            </tr>
        @endif

        @if($estimate->Sj3 != NULL)
            <tr>
                <td class="numeracion">3</td>
                <td colspan="2">{{$estimate->Sj3}} &nbsp; ({{$estimate->Qty3}})</td>
                <td class="total">{{$estimate->S3}}</td>
            </tr>
        @endif

        @if($estimate->Sj4 != NULL)
            <tr>
                <td class="numeracion">4</td>
                <td colspan="2">{{$estimate->Sj4}} &nbsp; ({{$estimate->Qty4}})</td>
                <td class="total">{{$estimate->S4}}</td>
            </tr>
        @endif

        @if($estimate->Sj5 != NULL)
            <tr>
                <td class="numeracion">5</td>
                <td colspan="2">{{$estimate->Sj5}} &nbsp; ({{$estimate->Qty5}})</td>
                <td class="total">{{$estimate->S5}}</td>
            </tr>
        @endif
    </table>
    <table class="productos2">
        <tr>
            <td rowspan="3" colspan="2" class="no-margin left">El suaje se realizará al recibir la autorización ORDEN DE COMPRA <br>
                El tiempo de entrega a partir de la liberacion OC sera de {{$estimate->Tiempo_liberacion}} dias <br>
                La entrega sera con cargo al cliente
            </td>
            <td class="no-margin">Subtotal: </td>
            @php 
                $St = $estimate->S1 + $estimate->S2 + $estimate->S3 + $estimate->S4 + $estimate->S5
            @endphp
            <td>{{$St}}</td>
        </tr>
        <tr>
            <td class="no-margin">IVA 16%: </td>
            @php 
                $iva = $St * 0.16
            @endphp
            <td>{{$iva}}</td>
        </tr>
        <tr>
            <td class="no-margin">Total (MXN): </td>
            @php 
                $total = $St + $iva
            @endphp
            <td>{{$total}}</td>
        </tr>
    </table>

    <div class="trazos">
        @if($estimate->Img1 != NULL)
            <div class="container">
                <img src= "{{asset($estimate->Img1)}}" >
            </div>
        @endif

        @if($estimate->Img2 != NULL)
            <div class="container">
                <img src= "{{asset($estimate->Img2)}}" >
            </div>
        @endif

        @if($estimate->Img3 != NULL)
            <div class="container">
                <img src= "{{asset($estimate->Img3)}}" >
            </div>
        @endif

        @if($estimate->Img4 != NULL)
            <div class="container">
                <img src= "{{asset($estimate->Img4)}}" >
            </div>
        @endif

        @if($estimate->Img5 != NULL)
            <div class="container">
                <img src= "{{asset($estimate->Img5)}}" >
            </div>
        @endif
    </div>

    <div id="firma">
        <p class="firma"> &nbsp; Firma de conformidad &nbsp;</p>
    </div>

</body>

</html>