<div class="mt-4">
    <div class="body">
        <div class="butn cancel_butn">
            <ul>
                <li>
                    <a href="/productions">
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
            <div class="justify-content-md-start row">
                <div class="column-md">
                    <div class="card px-3 py-2 mt-1 shadow">
                        
                        <form action="/productions/template/store" method="POST">
                            @csrf
                            <table>
                                <tr>
                                    <td>
                                        <!-- Step1 -->
                                        <div class="user_details form_section">
                                            <div class="input_box" id="step0">
                                                <label for="Cliente">Clientes</label>
                                                <select id="Cliente" name="Cliente" class="form_control" wire:model="cliente">
                                                    <option value="">== Clientes ==</option>
                                                    @foreach($customers as $customer)
                                                        <option value="{{$customer->id}}">{{$customer->Compañia}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="input_box">
                                                <label for="Type" class="label">Tipo de Suaje</label>
                                                <select name="Type" id="Type" class="form_control" wire:model="tipo">
                                                    <option value="">== Tipo Suaje ==</option>
                                                    <option value="1">Curvo</option>
                                                    <option value="2">Plano</option>
                                                </select>
                                            </div>
                                            @if (!is_null($maquinas))
                                            <div class="input_box">
                                                <label for="Maquina">Maquinas</label>
                                                <select class="form_control" name="Maquina" id="Maquina" wire:model="machine">
                                                    <option value="">== Maquinas ==</option>
                                                    @foreach($maquinas as $maquina)
                                                        @if($maquina->Tipo_maquina == $tipo)
                                                            <option value="{{$maquina->Marca_maquina}}">{{$maquina->Marca_maquina}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            @endif
                                            @if (!is_null($cotizaciones))
                                            <div class="input_box">
                                                <label for="Cotizacion">Cotizaciones</label>
                                                <select class="form_control" name="Cotizacion" id="Cotizacion" wire:model="estimate">
                                                    <option value="">== Cotizaciones ==</option>
                                                    @foreach($cotizaciones as $cotizacion)
                                                    <option value="{{$cotizacion->Folio}}">{{$cotizacion->Folio}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="input_box">
                                                <label for="Descripcion" class="label ">Descripcion</label>
                                                <input type="text" class="form_control mitad" id="Descripcion" name="Descripcion" placeholder="Ingresa descripcion" value="{{old('Descripcion')}}" required>
                                            </div>

                                            <div class="input_box">
                                                <label for="Cm_totales" class="label">Cm Totales</label>
                                                <input type="text" class="form_control mitad" id="Cm_totales" name="Cm_totales" placeholder="Ingresa los cm totales" value="{{old('Cm_totales')}}" required>
                                            </div>
                                            @endif
                                        </div>
                                    </td>
                                        <!-- Step2 -->
                                        <div class="user_details form_section">
                                            <div class="input_box">
                                                <input type="text" id="Factor_reduccion" name="Factor_reduccion" class="form_control" value="SI" readonly hidden>
                                            </div>
                                            <div class="input_box">
                                                <input type="text" id="Cut" name="Cut" class="form_control" value="SI" readonly hidden>
                                            </div>
                                            <div class="input_box">
                                                <input type="text" id="Score" name="Score" class="form_control" value="SI" readonly hidden>
                                            </div>
                                            <div class="input_box">
                                                <input type="text" id="Perforado" name="Perforado" class="form_control" value="SI" readonly hidden>
                                            </div>
                                        </div>
                                    @if (!is_null($tipo))
                                        @if($tipo == 1)
                                        
                                            <td>
                                                <!-- Step3 -->
                                                <div class="user_details form_section">
                                                    <div class="input_box" id="step0">
                                                        <label for="Folio" class="label">Folio</label>
                                                        <input type="text" class="form_control first" id="Folio" name="Folio" placeholder="Ingresa el folio" value="{{old('Folio')}}" required>
                                                    </div>
                                                    <div class="input_box">
                                                        <label for="Corrugado" class="label">Corrugado</label>
                                                        <select name="Corrugado" id="Corrugado" class="form_control">
                                                            <option value="none">Selecciona tipo corrugado</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="E">E</option>
                                                            <option value="MICA">MICA</option>
                                                            <option value="BC">BC</option>
                                                            <option value="BE">BE</option>
                                                            <option value="AAC">AAC</option>
                                                        </select>
                                                    </div>
                                                    <div class="input_box">
                                                        <label for="Calado">Puntos de Calado</label>
                                                        <select name="Calado" id="Calado" class="form_control">
                                                            <option value="none">Select an option</option>
                                                            <option value="3">3 puntos</option>
                                                            <option value="4">4 puntos</option>
                                                        </select>
                                                    </div>
                                                    <div class="input_box">
                                                        <label for="Fecha" class="label">Fecha</label>
                                                        <input type="date" id="Fecha" name="Fecha" class="form_control">
                                                    </div>

                                                    @if(!is_null($desarrollos))
                                                        @foreach($maquinas as $maquina)
                                                            @foreach($desarrollos as $desarrollo)
                                                                @if($maquina->Marca_maquina == $desarrollo->Marca_maquina)
                                                                @php
                                                                    $madera = $maquina->Diametro_rodillo;
                                                                    if($madera == "22"){
                                                                        $madera = 75;
                                                                    }
                                                                    elseif($madera == "19 3/16"){
                                                                        $madera = "66";
                                                                    }
                                                                    elseif($madera == "17"){
                                                                        $madera = "60";
                                                                    }
                                                                    elseif($madera == "14 3/16"){
                                                                        $madera = "50";
                                                                    }
                                                                    else{
                                                                        $madera = "37.5";
                                                                    }
                                                                @endphp
                                                                <div class="input_box">
                                                                    <label for="S_rotativo" class="label">Desarrollo Rotativo</label>
                                                                    <input id="S_rotativo" name="S_rotativo" type="text" class="form_control" value=<?php echo $madera; ?> readonly>
                                                                </div>
                                                                @endif

                                                            @endforeach
                                                        @endforeach
                                                    @endif

                                                    @if(!is_null($suajes))
                                                        <div class="input_box">
                                                            <label class="label">Trazo</label>
                                                            <select name="Img1" id="Img1" class="form_control">
                                                                <option value="">Selecciona un trazo</option>
                                                                @foreach($suajes as $suaje)
                                                                    <option value="{{$suaje->Img1}}">{{$suaje->Sj1}}</option>
                                                                    @if(!is_null($suaje->Sj2))
                                                                    <option value="{{$suaje->Img2}}">{{$suaje->Sj2}}</option>
                                                                    @endif
                                                                    @if(!is_null($suaje->Sj3))
                                                                    <option value="{{$suaje->Img3}}">{{$suaje->Sj3}}</option>
                                                                    @endif
                                                                    @if(!is_null($suaje->Sj4))
                                                                    <option value="{{$suaje->Img4}}">{{$suaje->Sj4}}</option>
                                                                    @endif
                                                                    @if(!is_null($suaje->Sj5))
                                                                    <option value="{{$suaje->Img5}}">{{$suaje->Sj5}}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <!-- Step4 -->
                                                <div class="user_details form_section">
                                                    <div class="input_box">
                                                        <label for="Corte" class="label">Corte</label>
                                                        <select name="Corte" id="Corte" class="form_control">
                                                            <option value="none">Select an option</option>
                                                            <option value="990/970">990/970</option>
                                                            <option value="1000/1000">1000/1000</option>
                                                            <option value="1030/1030">1030/1030</option>
                                                            <option value="1040/1030">1040/1030</option>
                                                        </select>
                                                    </div>
                                                    <div class="input_box">
                                                        <label for="Doblez" class="label">Doblez</label>
                                                        <select name="Doblez" id="Doblez" class="form_control">
                                                            <option value="none">Select an option</option>
                                                            <option value="860/850">860/850</option>
                                                            <option value="860/850(8/4)">860/850(8/4)</option>
                                                        </select>
                                                    </div>
                                                    <div class="input_box">
                                                        <label for="Medida_perforado" class="label">Medida de perforado</label>
                                                        <select name="Medida_perforado" id="Medida_perforado" class="form_control">
                                                            <option value="none">Select an option</option>
                                                            <option value="970">970</option>
                                                            <option value="1/2 x 1/2">1/2 x 1/2</option>
                                                            <option value="1/4 x 1/4">1/4 x 1/4</option>
                                                            <option value="3/8 x 3/8">3/8 x 3/8</option>
                                                            <option value="1/8 x 1/8">1/8 x 1/8</option>
                                                        </select>
                                                    </div>
                                                    <div class="input_box">
                                                        <label for="Hule" class="label">Hule</label>
                                                        <select name="Hule" id="Hule" class="form_control">
                                                            <option value="none">Select an option</option>
                                                            <option value="5/8 x 5/8 x 1 1/4">5/8 x 5/8 x 1 1/4</option>
                                                            <option value="3/4 x 3/4 x 1 1/4">3/4 x 3/4 x 1 1/4</option>
                                                            <option value="7/16 x 1/2 x 20">7/16 x 1/2 x 20</option>
                                                            <option value="Kushion .315">Kushion .315</option>
                                                            <option value="7/8 x 42 x52">7/8 x 42 x52</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        @endif
                                        @if($tipo == 2)
                                            <td>
                                                <!-- Step3 -->
                                                <div class="user_details form_section">
                                                    <div class="input_box" id="step0">
                                                        <label for="Folio" class="label">Folio</label>
                                                        <input type="text" class="form_control first" id="Folio" name="Folio" placeholder="Ingresa el folio" value="{{old('Folio')}}" required>
                                                    </div>
                                                    <div class="input_box">
                                                        <label for="Corrugado" class="label">Corrugado</label>
                                                        <select name="Corrugado" id="Corrugado" class="form_control">
                                                            <option value="none">Selecciona tipo corrugado</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="E">E</option>
                                                            <option value="MICA">MICA</option>
                                                            <option value="BC">BC</option>
                                                            <option value="BE">BE</option>
                                                            <option value="AAC">AAC</option>
                                                        </select>
                                                    </div>
                                                    <div class="input_box">
                                                        <label for="Calado">Puntos de Calado</label>
                                                        <select name="Calado" id="Calado" class="form_control">
                                                            <option value="none">Select an option</option>
                                                            <option value="3">3 puntos</option>
                                                            <option value="4">4 puntos</option>
                                                        </select>
                                                    </div>
                                                    <div class="input_box">
                                                        <label for="Fecha" class="label">Fecha</label>
                                                        <input type="date" id="Fecha" name="Fecha" class="form_control">
                                                    </div>
                                                    <div class="input_box">
                                                        <label for="S_plano" class="label">S.Plano</label>
                                                        <input type="text" id="S_plano" name="S_plano" class="form_control" value="{{old('S_plano')}}">
                                                    </div>
                                                    @if(!is_null($suajes))
                                                        <div class="input_box">
                                                            <label class="label">Trazo</label>
                                                            <select name="Img1" id="Img1" class="form_control">
                                                                <option value="">Selecciona un trazo</option>
                                                                @foreach($suajes as $suaje)
                                                                    <option value="{{$suaje->Img1}}">{{$suaje->Sj1}}</option>
                                                                    @if(!is_null($suaje->Sj2))
                                                                    <option value="{{$suaje->Img2}}">{{$suaje->Sj2}}</option>
                                                                    @endif
                                                                    @if(!is_null($suaje->Sj3))
                                                                    <option value="{{$suaje->Img3}}">{{$suaje->Sj3}}</option>
                                                                    @endif
                                                                    @if(!is_null($suaje->Sj4))
                                                                    <option value="{{$suaje->Img4}}">{{$suaje->Sj4}}</option>
                                                                    @endif
                                                                    @if(!is_null($suaje->Sj5))
                                                                    <option value="{{$suaje->Img5}}">{{$suaje->Sj5}}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <!-- Step4 -->
                                                <div class="user_details form_section">
                                                    <div class="input_box">
                                                        <label for="Corte" class="label">Corte</label>
                                                        <select name="Corte" id="Corte" class="form_control">
                                                            <option value="none">Select an option</option>
                                                            <option value="937">937</option>
                                                            <option value="990">990</option>
                                                            <option value="1000">1000</option>
                                                            <option value="1030">1030</option>
                                                        </select>
                                                    </div>
                                                    <div class="input_box">
                                                        <label for="Doblez" class="label">Doblez</label>
                                                        <select name="Doblez" id="Doblez" class="form_control">
                                                            <option value="none">Select an option</option>
                                                            <option value="860">860</option>
                                                            <option value="890">890</option>
                                                            <option value="906">906</option>
                                                        </select>
                                                    </div>
                                                    <div class="input_box">
                                                        <label for="Medida_perforado" class="label">Medida de perforado</label>
                                                        <select name="Medida_perforado" id="Medida_perforado" class="form_control">
                                                            <option value="none">Select an option</option>
                                                            <option value="970">970</option>
                                                            <option value="1/2 x 1/2">1/2 x 1/2</option>
                                                            <option value="1/4 x 1/4">1/4 x 1/4</option>
                                                            <option value="3/8 x 3/8">3/8 x 3/8</option>
                                                            <option value="1/8 x 1/8">1/8 x 1/8</option>
                                                        </select>
                                                    </div>
                                                    <div class="input_box">
                                                        <label for="Hule" class="label">Hule</label>
                                                        <select name="Hule" id="Hule" class="form_control">
                                                            <option value="none">Select an option</option>
                                                            <option value="1/2 x 1/2 x 1 1/4">1/2 x 1/2 x 1 1/4</option>
                                                        </select>
                                                    </div>
                                                    <div class="input_box">
                                                        <label for="Pleca_2000" class="label">Pleca2000</label>
                                                        <select name="Pleca_2000" id="Pleca_2000">
                                                            <option value="">== Seleccionar ==</option>
                                                            <option value="3 Pts">3PTS</option>
                                                            <option value="4 Pts">4PTS</option>
                                                        </select>
                                                    </div>
                                                    <div class="input_box">
                                                        <label for="Profundidad_pleca_2000" class="label">Profundidad pleca2000</label>
                                                        <input type="text" id="Profundidad_pleca_2000" name="Profundidad_pleca_2000" class="form_control" value="{{old('Profundidad_pleca_2000')}}">
                                                    </div>
                                                </div>
                                            </td>
                                        @endif
                                    @endif
                                </tr>
                            </table>
                            <div class="form-navigation mt-0">
                                <button type="submit" class="btn btn-success float-right">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function(){
        Livewire.on('formLogic', () => {
        $(function(){
            var $sections=$('.form-section');
            function navigateTo(index){
                $sections.removeClass('current').eq(index).addClass('current');
                $('.form-navigation .previous').toggle(index>0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [Type=submit]').toggle(atTheEnd);

                const step = document.querySelector('.step'+index);
                step.style.backgroundColor="#17a2b8";
                step.style.color="white";
            }

            function curIndex(){
                return $sections.index($sections.filter('.current'));
            }
            $('.form-navigation .previous').click(function(){
                navigateTo(curIndex() - 1);
            });
            $('.form-navigation .next').click(function(){
                $('.employee-form').parsley().whenValidate({
                    group:'block-'+curIndex()
                }).done(function(){
                    navigateTo(curIndex()+1);
                });
            });
            $sections.each(function(index,section){
                $(section).find(':input').attr('data-parsley-group','block-'+index);
            });
            navigateTo(0);
        });
    })
    }

</script>
