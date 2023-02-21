@extends('layouts.panel')

@section('title','Nueva Cotizacion')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Nueva Cotizacion</a>
@endsection

@section('content')
    
    <div class="mt-4">
    <div class="body">

        <div class="butn cancel_butn">
            <ul>
                <li>
                    <a href="/customer/{{$id}}/estimates">
                        <i class='bx bx-arrow-back'></i>
                        <span>Back</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="errors">
            @if($errors->any())
                <div>
                    {{ $errors->first() }}
                </div>
            @endif
        </div>

        <div class="container-fluid">
            <div class="row justify-content-md-start">
                <div class="column-md">
                    <div class="card px-3 py-2 mt-1 shadow">
                        <form action="/customer/{{$id}}/estimates" enctype="multipart/form-data" method="POST">
                            @csrf
                            
                            <div class="estimate_details">
                                <div class="main_data">
                                
                                    @foreach($customers as $customer)
                                        @if($customer->id == $id)
                                            <div class="input_box">
                                                <label for="Cliente">Cliente</label>
                                                <input type="text" class="form_control" name="Cliente" id="Cliente" value=<?php echo $customer->id?> readonly>
                                            </div>
                                        @endif
                                    @endforeach
                                
                                    <div class="input_box">
                                        <label for="Folio">Folio</label>
                                        <input type="text" class="form_control" id="Folio" name="Folio" value="SUAJ100{{$id}}">
                                    </div>
                                
                                    <div class="input_box">
                                        <label for="Fecha">Fecha</label>
                                        <input type="date" class="form_control" id="Fecha" name="Fecha" value="{{old('Date')}}">
                                    </div>

                                    <div class="input_box">
                                        <label for="Tiempo_liberacion">Tiempo de entrega (dias)</label>
                                        <input type="text" class="form_control" id="Tiempo_liberacion" name="Tiempo_liberacion" value="{{old('Tiempo_liberacion')}}">
                                    </div>
                                </div>

                                <!-- Table -->
                                <div class="second_data">
                                        
                                    <div class="details_data obj1">
                                        <!-- Item and description -->
                                        <div class="input_box"> 
                                            <label for="Sj1">Descripcion Item</label>
                                            <input class="form_control" type="text" id="Sj1" name="Sj1" value="{{old('Sj1')}}">
                                        </div>
                                    

                                        <!-- Number of items -->
                                
                                        <div class="input_box" >
                                            <label for="Qty1">Cantidad</label>
                                            <input type="number" small min='0' step="any" class="form_control" name="Qty1" id="Qty1" oninput="calcular()" value=1>
                                        </div>
                                    

                                        <!-- price of items -->
                                
                                        <div class="input_box">
                                            <label for="S1">Costo Unitario</label>
                                            <input type="number rel" min='1' class="form_control" name="S1" id="S1" oninput="calcular()" value=0>
                                        </div>

                                        <!-- subtotal Amount -->
                                        <div class="input_box">
                                            <label for="Subtotal1">Sub total</label>
                                            <input type="number" name="Subtotal1" id="Subtotal1" readonly value="{{old('Subtotal1')}}"> 
                                        </div>

                                    </div>    
                                
                                    
                                    <div class="finish_data">
                                        <!-- Trazo de suaje -->
                                        <div class="input_box file-select">
                                            <span class="Img1">
                                                <input type="file" name="Img1" id="Img1">
                                            </span>
                                            <label for="Img1"><span class="Img1">Subir Trazo &nbsp; <i class="bx bx-upload"></i></span></label>
                                        </div>
                                        

                                        <button type="button" class="next btn btn-primary float-right" id="mostrar">Agregar Suaje <i class="bx bx-plus"></i></button>
                                    </div>

                                <!-- Item2 -->
                                    <div class="details_data" >
                                        <!-- Item and description -->
                                        <div class="input_box"> 
                                            <label for="Sj2" id="Sj2l" hidden>Descripcion Item</label>
                                            <input class="form_control" type="text" id="Sj2" name="Sj2" value="{{old('Sj2')}}" hidden>
                                        </div>
                                    

                                        <!-- Number of items -->
                                
                                        <div class="input_box" >
                                            <label for="Qty2" id="Qty2l" hidden>Cantidad</label>
                                            <input type="number" small min='0' step="any" class="form_control" name="Qty2" id="Qty2" oninput="calcular()" value=1 hidden>
                                        </div>
                                    

                                        <!-- price of items -->
                                
                                        <div class="input_box">
                                            <label for="S2" id="S2l" hidden>Costo Unitario</label>
                                            <input type="number" min='0' class="form_control" name="S2" id="S2" oninput="calcular()" value=0 hidden>
                                        </div>

                                        <!-- subtotal Amount -->
                                        <div class="input_box">
                                            <label for="Subtotal2" id="Subtotal2l" hidden>Sub total</label>
                                            <input type="number" name="Subtotal2" id="Subtotal2" readonly value="{{old('Subtotal2')}}" hidden> 
                                        </div>

                                    </div> 
                                    <div class="finish_data">
                                        <!-- Trazo de suaje -->
                                        <div class="input_box">
                                            <span class="Img2">
                                                <input type="file" name="Img2" id="Img2" accept="image/*">
                                            </span>
                                            <label for="Img2" id="Img2l" hidden><span class="Img2">Subir Trazo &nbsp; <i class="bx bx-upload"></i></span></label>
                                        </div>
                                        
                                        <button type="button" class="next btn btn-primary float-right" id="mostrar2" hidden>Agregar Suaje <i class="bx bx-plus"></i></button>
                                    </div> 

                                <!-- Item3 -->
                                    <div class="details_data" >
                                        <!-- Item and description -->
                                        <div class="input_box"> 
                                            <label for="Sj3" id="Sj3l" hidden>Descripcion Item</label>
                                            <input class="form_control" type="text" id="Sj3" name="Sj3" value="{{old('Sj3')}}" hidden>
                                        </div>
                                    

                                        <!-- Number of items -->
                                
                                        <div class="input_box" >
                                            <label for="Qty3" id="Qty3l" hidden>Cantidad</label>
                                            <input type="number" small min='0' step="any" class="form_control" name="Qty3" id="Qty3" oninput="calcular()" value=1 hidden>
                                        </div>
                                    

                                        <!-- price of items -->
                                
                                        <div class="input_box">
                                            <label for="S3" id="S3l" hidden>Costo Unitario</label>
                                            <input type="number" min='0' class="form_control" name="S3" id="S3" oninput="calcular()" value=0 hidden>
                                        </div>

                                        <!-- subtotal Amount -->
                                        <div class="input_box">
                                            <label for="Subtotal3" id="Subtotal3l" hidden>Sub total</label>
                                            <input type="number" name="Subtotal3" id="Subtotal3" readonly value="{{old('Subtotal3')}}" hidden> 
                                        </div>

                                    </div> 
                                    <div class="finish_data">
                                        <!-- Trazo de suaje -->
                                        <div class="input_box">
                                            <span class="Img3">
                                                <input type="file" name="Img3" id="Img3" accept="image/*">
                                            </span>
                                            <label for="Img3" id="Img3l" hidden><span class="Img3">Subir Trazo &nbsp; <i class="bx bx-upload"></i></span></label>
                                        </div>
                                        
                                        <button type="button" class="next btn btn-primary float-right" id="mostrar3" hidden>Agregar Suaje <i class="bx bx-plus"></i></button>
                                    </div> 

                                <!-- Item4 -->
                                    <div class="details_data" >
                                        <!-- Item and description -->
                                        <div class="input_box"> 
                                            <label for="Sj4" id="Sj4l" hidden>Descripcion Item</label>
                                            <input class="form_control" type="text" id="Sj4" name="Sj4" value="{{old('Sj4')}}" hidden>
                                        </div>
                                    

                                        <!-- Number of items -->
                                
                                        <div class="input_box" >
                                            <label for="Qty4" id="Qty4l" hidden>Cantidad</label>
                                            <input type="number" small min='0' step="any" class="form_control" name="Qty4" id="Qty4" oninput="calcular()" value=1 hidden>
                                        </div>
                                    

                                        <!-- price of items -->
                                
                                        <div class="input_box">
                                            <label for="S4" id="S4l" hidden>Costo Unitario</label>
                                            <input type="number" min='0' class="form_control" name="S4" id="S4" oninput="calcular()" value=0 hidden>
                                        </div>

                                        <!-- subtotal Amount -->
                                        <div class="input_box">
                                            <label for="Subtotal4" id="Subtotal4l" hidden>Sub total</label>
                                            <input type="number" name="Subtotal4" id="Subtotal4" readonly value="{{old('Subtotal4')}}" hidden> 
                                        </div>

                                    </div> 
                                    <div class="finish_data">
                                        <!-- Trazo de suaje -->
                                        <div class="input_box">
                                            <span class="Img4">
                                                <input type="file" name="Img4" id="Img4" accept="image/*">
                                            </span>
                                            <label for="Img4" id="Img4l" hidden><span class="Img4">Subir Trazo &nbsp; <i class="bx bx-upload"></i></span></label>
                                        </div>
                                        
                                        <button type="button" class="next btn btn-primary float-right" id="mostrar4" hidden>Agregar Suaje <i class="bx bx-plus"></i></button>
                                    </div>

                                <!-- Item5 -->
                                    <div class="details_data" >
                                        <!-- Item and description -->
                                        <div class="input_box"> 
                                            <label for="Sj5" id="Sj5l" hidden>Descripcion Item</label>
                                            <input class="form_control" type="text" id="Sj5" name="Sj5" value="{{old('Sj5')}}" hidden>
                                        </div>
                                    

                                        <!-- Number of items -->
                                
                                        <div class="input_box" >
                                            <label for="Qty5" id="Qty5l" hidden>Cantidad</label>
                                            <input type="number" small min='0' step="any" class="form_control" name="Qty5" id="Qty5" oninput="calcular()" value=1 hidden>
                                        </div>
                                    

                                        <!-- price of items -->
                                
                                        <div class="input_box">
                                            <label for="S5" id="S5l" hidden>Costo Unitario</label>
                                            <input type="number" min='0' class="form_control" name="S5" id="S5" oninput="calcular()" value=0 hidden>
                                        </div>

                                        <!-- subtotal Amount -->
                                        <div class="input_box">
                                            <label for="Subtotal5" id="Subtotal5l" hidden>Sub total</label>
                                            <input type="number" name="Subtotal5" id="Subtotal5" readonly value="{{old('Subtotal5')}}" hidden> 
                                        </div>

                                    </div> 
                                    <div class="finish_data">
                                        <!-- Trazo de suaje -->
                                        <div class="input_box">
                                            <span class="Img5">
                                                <input type="file" name="Img5" id="Img5" accept="image/*">
                                            </span>
                                            <label for="Img5" id="Img5l" hidden><span class="Img5">Subir Trazo &nbsp; <i class="bx bx-upload"></i></span></label>
                                        </div>
                                    </div>

                                    <div class="input_box">
                                        <label for="Total">Total</label>
                                        <input type="number" name="Total" id="Total" readonly value="{{old('Total')}}"> 
                                    </div>

                                    <!-- Save Button -->
                                    <div class="input_box">
                                        <button type="submit" class="btn btn-success float-right">Guardar</button>
                                    </div>
                                </div>


                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script type="application/javascript">
jQuery('input[type=file]').change(function(){
 var filename = jQuery(this).val().split('\\').pop();
 var idname = jQuery(this).attr('id');
 console.log(jQuery(this));
 console.log(filename);
 console.log(idname);
 jQuery('span.'+idname).next().find('span').html(filename);
});
</script>
<script src="Jquery/jquery-1.6.3.min.js"></script>

<script>
    $(document).ready(function(){
        $('#mostrar').click(function(){
            $('#Sj2').attr("hidden",false);
            $('#S2').attr("hidden",false);
            $('#Qty2').attr("hidden",false);
            $('#Subtotal2').attr("hidden",false);
            $('#Sj2l').attr("hidden",false);
            $('#S2l').attr("hidden",false);
            $('#Qty2l').attr("hidden",false);
            $('#Subtotal2l').attr("hidden",false);
            $('#Img2l').attr("hidden",false);
            $('#mostrar2').attr("hidden",false);
            $('#mostrar').attr("hidden",true);
        });

        $('#mostrar2').click(function(){
            $('#Sj3').attr("hidden",false);
            $('#S3').attr("hidden",false);
            $('#Qty3').attr("hidden",false);
            $('#Subtotal3').attr("hidden",false);
            $('#Sj3l').attr("hidden",false);
            $('#S3l').attr("hidden",false);
            $('#Qty3l').attr("hidden",false);
            $('#Subtotal3l').attr("hidden",false);
            $('#Img3l').attr("hidden",false);
            $('#mostrar3').attr("hidden",false);
            $('#mostrar2').attr("hidden",true);
        });

        $('#mostrar3').click(function(){
            $('#Sj4').attr("hidden",false);
            $('#S4').attr("hidden",false);
            $('#Qty4').attr("hidden",false);
            $('#Subtotal4').attr("hidden",false);
            $('#Sj4l').attr("hidden",false);
            $('#S4l').attr("hidden",false);
            $('#Qty4l').attr("hidden",false);
            $('#Subtotal4l').attr("hidden",false);
            $('#Img4l').attr("hidden",false);
            $('#mostrar4').attr("hidden",false);
            $('#mostrar3').attr("hidden",true);
        });

        $('#mostrar4').click(function(){
            $('#Sj5').attr("hidden",false);
            $('#S5').attr("hidden",false);
            $('#Qty5').attr("hidden",false);
            $('#Subtotal5').attr("hidden",false);
            $('#Sj5l').attr("hidden",false);
            $('#S5l').attr("hidden",false);
            $('#Qty5l').attr("hidden",false);
            $('#Subtotal5l').attr("hidden",false);
            $('#Img5l').attr("hidden",false);
            $('#mostrar4').attr("hidden",true);
        });
    });
</script>
@endsection



