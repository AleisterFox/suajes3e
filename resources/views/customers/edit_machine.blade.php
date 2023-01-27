@extends('layouts.panel')

@section('title','Editar maquina de cliente')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Editar maquina</a>
@endsection

@section('content')

<div class="mt-4">
  <div class="body">
    <div class="butn cancel_butn">
      <ul>
        <li>
          <a href="/customers/{{$customer->id}}/machines">
            <i class='bx bx-arrow-back'></i>
            <span>Volver al cliente</span>
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
    <div class="container-fluid  ">
          <div class="row justify-content-md-center">
            <div class="col-md-9 ">
                <div class="card px-5 py-3 mt-1 shadow">
                            <div class="nav nav-fill my-3">
                              <label class="nav-link shadow-sm step0   border ml-2 ">1</label>
                              <label class="nav-link shadow-sm step1   border ml-2 ">2</label>
                              <label class="nav-link shadow-sm step2   border ml-2 ">3</label>
                              <label class="nav-link shadow-sm step3   border ml-2 ">4</label>
                              <label class="nav-link shadow-sm step4   border ml-2 ">5</label>
                              <label class="nav-link shadow-sm step5   border ml-2 ">6</label>
                              <label class="nav-link shadow-sm step6   border ml-2 ">7</label>
                              <label class="nav-link shadow-sm step7   border ml-2 ">8</label>
                              <label class="nav-link shadow-sm step8   border ml-2 ">9</label>
                            </div>
              
                    <form action="/customers/{{$customer->id}}/machines/{{$machine->id}}" method="POST" class="employee-form">
                    @csrf
                    @method('put')
                    <!-- Step1 -->
                    <div class="user_details form-section">
                      <h3>Datos tecnicos</h3>
                      <div class="input_box" id="step0">
                          <label for="Compañia" class="label"></label>
                          <input autofcus type="text" class="form_control edit" id="Compañia" name="Compañia" placeholder="Ingresa el nombre de la compañia" value="{{old('Compañia',$machine->Compañia)}}" required hidden>
                      </div>

                      <div class="input_box">
                          <label for="Marca_maquina" class="label">Marca de la maquina</label>
                          <input type="text" class="form_control edit" id="Marca_maquina" name="Marca_maquina" placeholder="Ingresa la marca de la maquina" value="{{old('Marca_maquina',$machine->Marca_maquina)}}" required>
                      </div>

                      <div class="input_box">
                          <label for="Diametro_rodillo" class="label">Diametro del rodillo</label>
                          <input type="text" class="form_control edit" id="Diametro_rodillo" name="Diametro_rodillo" placeholder="Ingresa el diametro del rodillo" value="{{old('Diametro_rodillo',$machine->Diametro_rodillo)}}" required>
                      </div>
  
                      <div class="input_box">
                          <label for="Largo_rodillo" class="label">Largo del rodillo</label>
                          <input type="text" class="form_control edit" id="Largo_rodillo" name="Largo_rodillo" placeholder="Ingresa el largo del rodillo" value="{{old('Largo_rodillo',$machine->Largo_rodillo)}}" required>
                      </div>
                    </div>

                    <!-- Step2 -->
                    <div class="user_details form-section">
                      <h3>Patron de huecos</h2>
                        <div class="input_box">
                            <label for="NMPH_curvo" class="label">Numero de MPH curvo</label>
                            <input type="text" class="form_control edit" id="NMPH_curvo" name="NMPH_curvo" placeholder="Ingresa el numero de MPH para sentido curvo" value="{{old('NMPH_curvo',$machine->NMPH_curvo)}}" required>
                        </div>
    
                        <div class="input_box">
                            <label for="NMPH_recto">Numero de MPH recto</label>
                            <input type="text" class="form_control edit" id="NMPH_recto" name="NMPH_recto" placeholder="Ingresa el numero de MPH para sentido recto" value="{{old('NMPH_recto',$machine->NMPH_recto)}}" required>
                        </div>

                        <div class="input_box">
                            <label for="DMPH_curvo">Distancia de MPH curvo</label>
                            <input type="text" class="form_control edit" id="DMPH_curvo" name="DMPH_curvo" placeholder="Ingresa la distancia de MPH para sentido curvo" value="{{old('DMPH_curvo',$machine->DMPH_curvo)}}" required>
                        </div>
    
                        <div class="input_box">
                            <label for="DMPH_recto">Distancia de MPH recto</label>
                            <input type="text" class="form_control edit" id="DMPH_recto" name="DMPH_recto" placeholder="Ingresa la distancia de MPH para sentido recto" value="{{old('DMPH_recto',$machine->DMPH_recto)}}" required>
                        </div>
    
                        <div class="input_box">
                            <label for="Centro_maquina">Centro de maquina</label>
                            <input type="text" class="form_control edit" id="Centro_maquina" name="Centro_maquina" placeholder="Ingresa el centro de maquina" value="{{old('Centro_maquina',$machine->Centro_maquina)}}" required>
                        </div> 
                    </div>

                    <!-- Step3 --> 
                    <div class="user_details form-section">
                        <h3>Altura de plecas corrugado sencillo</h3>
                        <textarea hidden></textarea>
                        <div class="input_box">
                            <label for="Plecascs_corte_curvo" class="label">Plecas de corte curvo</label>
                            <select class="form_control" name="Plecascs_corte_curvo" id="Plecascs_corte_curvo" required>
                                <option value="{{old('Plecascs_corte_curvo',$machine->Plecascs_corte_curvo)}}">{{old('Plecascs_corte_curvo',$machine->Plecascs_corte_curvo)}}</option>
                                @foreach($plecas as $pleca)
                                    <option value="{{$pleca->Codigo_interno}}">{{$pleca->Codigo_interno}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form_control" id="Plecascs_corte_curvo" name="Plecascs_corte_curvo" placeholder="Ingresa las plecas de corte para sentido curvo" value="{{old('Plecascs_corte_curvo')}}" required> -->
                        </div>
                        <div class="input_box">
                            <label for="Plecascs_corte_recto" class="label">Plecas de corte recto</label>
                            <select class="form_control" name="Plecascs_corte_recto" id="Plecascs_corte_recto" required>
                                <option value="{{old('Plecascs_corte_recto',$machine->Plecascs_corte_recto)}}">{{old('Plecascs_corte_recto',$machine->Plecascs_corte_recto)}}</option>
                                @foreach($plecas as $pleca)
                                    <option value="{{$pleca->Codigo_interno}}">{{$pleca->Codigo_interno}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form_control" id="Plecascs_corte_recto" name="Plecascs_corte_recto" placeholder="Ingresa las plecas de corte para sentido recto" value="{{old('Plecascs_corte_recto')}}" required> -->
                        </div>
                        <div class="input_box">
                            <label for="Plecascs_corte_fig" class="label">Plecas de corte figuras y despuntes</label>
                            <select class="form_control" name="Plecascs_corte_fig" id="Plecascs_corte_fig" required>
                                <option value="{{old('Plecascs_corte_fig',$machine->Plecascs_corte_fig)}}">{{old('Plecascs_corte_fig',$machine->Plecascs_corte_fig)}}</option>
                                @foreach($plecas as $pleca)
                                    <option value="{{$pleca->Codigo_interno}}">{{$pleca->Codigo_interno}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form_control" id="Plecascs_corte_fig" name="Plecascs_corte_fig" placeholder="Ingresa las plecas de corte para figuras y despuntes" value="{{old('Plecascs_corte_fig')}}" required> -->
                        </div>
                        <div class="input_box">
                            <label for="Plecascs_score_curvo" class="label">Plecas de score curvo</label>
                            <select class="form_control" name="Plecascs_score_curvo" id="Plecascs_score_curvo" required>
                                <option value="{{old('Plecascs_score_curvo',$machine->Plecascs_score_curvo)}}">{{old('Plecascs_score_curvo',$machine->Plecascs_score_curvo)}}</option>
                                @foreach($plecas as $pleca)
                                    <option value="{{$pleca->Codigo_interno}}">{{$pleca->Codigo_interno}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form_control" id="Plecascs_score_curvo" name="Plecascs_score_curvo" placeholder="Ingresa las plecas de score para sentido curvo" value="{{old('Plecascs_score_curvo')}}" required> -->
                        </div>
                        <div class="input_box">
                            <label for="Plecascs_score_recto" class="label">Plecas de score recto</label>
                            <select class="form_control" name="Plecascs_score_recto" id="Plecascs_score_recto" required>
                                <option value="{{old('Plecascs_score_recto',$machine->Plecascs_score_recto)}}">{{old('Plecascs_score_recto',$machine->Plecascs_score_recto)}}</option>
                                @foreach($plecas as $pleca)
                                    <option value="{{$pleca->Codigo_interno}}">{{$pleca->Codigo_interno}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form_control" id="Plecascs_score_recto" name="Plecascs_score_recto" placeholder="Ingresa las plecas de score para sentido recto" value="{{old('Plecascs_score_recto')}}" required> -->
                        </div>
                        <div class="input_box">
                            <label for="Plecascs_punteado_curvo" class="label">Plecas de punteado curvo</label>
                            <select class="form_control" name="Plecascs_punteado_curvo" id="Plecascs_punteado_curvo" required>
                                <option value="{{old('Plecascs_punteado_curvo',$machine->Plecascs_punteado_curvo)}}">{{old('Plecascs_punteado_curvo',$machine->Plecascs_punteado_curvo)}}</option>
                                @foreach($plecas as $pleca)
                                    <option value="{{$pleca->Codigo_interno}}">{{$pleca->Codigo_interno}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form_control" id="Plecascs_punteado_curvo" name="Plecascs_punteado_curvo" placeholder="Ingresa las plecas de punteado para sentido curvo" value="{{old('Plecascs_punteado_curvo')}}" required> -->
                        </div>
                        <div class="input_box">
                            <label for="Plecascs_punteado_recto" class="label">Plecas de punteado recto</label>
                            <select class="form_control" name="Plecascs_punteado_recto" id="Plecascs_punteado_recto" required>
                                <option value="{{old('Plecascs_punteado_recto',$machine->Plecascs_punteado_recto)}}">{{old('Plecascs_punteado_recto',$machine->Plecascs_punteado_recto)}}</option>
                                @foreach($plecas as $pleca)
                                    <option value="{{$pleca->Codigo_interno}}">{{$pleca->Codigo_interno}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form_control" id="Plecascs_punteado_recto" name="Plecascs_punteado_recto" placeholder="Ingresa las plecas de punteado para sentido recto" value="{{old('Plecascs_punteado_recto')}}" required> -->
                        </div>
                    </div>

                    <!-- Step4 -->
                    <div class="user_details form-section">
                        <h3>Altura de plecas doble corrugado</h3>
                        <div class="input_box">
                            <label for="Plecascd_corte_curvo" class="label">Plecas de corte curvo</label>
                            <select class="form_control" name="Plecascd_corte_curvo" id="Plecascd_corte_curvo" required>
                                <option value="{{old('Plecascd_corte_curvo',$machine->Plecascd_corte_curvo)}}">{{old('Plecascd_corte_curvo',$machine->Plecascd_corte_curvo)}}</option>
                                @foreach($plecas as $pleca)
                                    <option value="{{$pleca->Codigo_interno}}">{{$pleca->Codigo_interno}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form_control" id="Plecascd_corte_curvo" name="Plecascd_corte_curvo" placeholder="Ingresa las plecas de corte para sentido curvo" value="{{old('Plecascd_corte_curvo')}}" required> -->
                        </div>
                        <div class="input_box">
                            <label for="Plecascd_corte_recto" class="label">Plecas de corte recto</label>
                            <select class="form_control" name="Plecascd_corte_recto" id="Plecascd_corte_recto" required>
                                <option value="{{old('Plecascd_corte_recto',$machine->Plecascd_corte_recto)}}">{{old('Plecascd_corte_recto',$machine->Plecascd_corte_recto)}}</option>
                                @foreach($plecas as $pleca)
                                    <option value="{{$pleca->Codigo_interno}}">{{$pleca->Codigo_interno}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form_control" id="Plecascd_corte_recto" name="Plecascd_corte_recto" placeholder="Ingresa las plecas de corte para sentido recto" value="{{old('Plecascd_corte_recto')}}" required> -->
                        </div>
                        <div class="input_box">
                            <label for="Plecascd_score_curvo" class="label">Plecas de score curvo</label>
                            <select class="form_control" name="Plecascd_score_curvo" id="Plecascd_score_curvo" required>
                                <option value="{{old('Plecascd_score_curvo',$machine->Plecascd_score_curvo)}}">{{old('Plecascd_score_curvo',$machine->Plecascd_score_curvo)}}</option>
                                @foreach($plecas as $pleca)
                                    <option value="{{$pleca->Codigo_interno}}">{{$pleca->Codigo_interno}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form_control" id="Plecascd_score_curvo" name="Plecascd_score_curvo" placeholder="Ingresa las plecas de score para sentido curvo" value="{{old('Plecascd_score_curvo')}}" required> -->
                        </div>
                        <div class="input_box">
                            <label for="Plecascd_score_recto" class="label">Plecas de score recto</label>
                            <select class="form_control" name="Plecascd_score_recto" id="Plecascd_score_recto" required>
                                <option value="{{old('Plecascs_score_recto',$machine->Plecascs_score_recto)}}">{{old('Plecascs_score_recto',$machine->Plecascs_score_recto)}}</option>
                                @foreach($plecas as $pleca)
                                    <option value="{{$pleca->Codigo_interno}}">{{$pleca->Codigo_interno}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form_control" id="Plecascd_score_recto" name="Plecascd_score_recto" placeholder="Ingresa las plecas de score para sentido recto" value="{{old('Plecascd_score_recto')}}" required> -->
                        </div>
                        <div class="input_box">
                            <label for="Plecascd_punteado_curvo" class="label">Plecas de punteado curvo</label>
                            <select class="form_control" name="Plecascd_punteado_curvo" id="Plecascd_punteado_curvo" required>
                                <option value="{{old('Plecascs_punteado_curvo',$machine->Plecascs_punteado_curvo)}}">{{old('Plecascs_punteado_curvo',$machine->Plecascs_punteado_curvo)}}</option>
                                @foreach($plecas as $pleca)
                                    <option value="{{$pleca->Codigo_interno}}">{{$pleca->Codigo_interno}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form_control" id="Plecascd_punteado_curvo" name="Plecascd_punteado_curvo" placeholder="Ingresa las plecas de punteado para sentido curvo" value="{{old('Plecascd_punteado_curvo')}}" required> -->
                        </div>
                        <div class="input_box">
                            <label for="Plecascd_punteado_recto" class="label">Plecas de punteado recto</label>
                            <select class="form_control" name="Plecascd_punteado_recto" id="Plecascd_punteado_recto" required>
                                <option value="{{old('Plecascs_punteado_recto',$machine->Plecascs_punteado_recto)}}">{{old('Plecascs_punteado_recto',$machine->Plecascs_punteado_recto)}}</option>
                                @foreach($plecas as $pleca)
                                    <option value="{{$pleca->Codigo_interno}}">{{$pleca->Codigo_interno}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form_control" id="Plecascd_punteado_recto" name="Plecascd_punteado_recto" placeholder="Ingresa las plecas de punteado para sentido recto" value="{{old('Plecascd_punteado_recto')}}" required> -->
                        </div>
                    </div>
                    <!-- Step5 -->
                    <div class="user_details form-section">
                      <h3>Planos</h3>
                      <div class="input_box">
                          <label for="Vista_plano" class="label">Vista del plano</label>
                          <input type="text" class="form_control edit" id="Vista_plano" name="Vista_plano" placeholder="Ingresa la vista del plano" value="{{old('Vista_plano',$machine->Vista_plano)}}" required>
                      </div>
                      <div class="input_box">
                          <label for="Velocidad_troquelado" class="label">Velocidad del troquelado</label>
                          <input type="text" class="form_control edit" id="Velocidad_troquelado" name="Velocidad_troquelado" placeholder="Ingresa la velocidad del troquelado" value="{{old('Velocidad_troquelado',$machine->Velocidad_troquelado)}}" required>
                      </div>
                      <div class="input_box">
                          <label for="Ceja_lado" class="label">Ceja lado</label>
                          <input type="text" class="form_control edit" id="Ceja_lado" name="Ceja_lado" placeholder="Ingresa la ceja lado" value="{{old('Ceja_lado',$machine->Ceja_lado)}}" required>
                      </div>
                      <div class="input_box">
                          <label for="Espesor_madera" class="label">Espesor de madera</label>
                          <input type="text" class="form_control edit" id="Espesor_madera" name="Espesor_madera" placeholder="Ingresa el espesor de madera" value="{{old('Espesor_madera',$machine->Espesor_madera)}}" required>
                      </div>
                      <div class="input_box">
                          <label for="Factor_reduccion" class="label">Factor de reduccion</label>
                          <input type="text" class="form_control edit" id="Factor_reduccion" name="Factor_reduccion" placeholder="Ingresa el espesor de madera" value="{{old('Factor_reduccion',$machine->Factor_reduccion)}}" required>
                      </div>
                    </div>
                    <!-- Step6 -->
                    <div class="user_details form-section">
                      <h3>Puentes y dimensiones</h3>
                      <div class="input_box">
                          <label for="Rango_puentes_madera" class="label">Rango de puentes en madera</label>
                          <input type="text" class="form_control edit" id="Rango_puentes_madera" name="Rango_puentes_madera" placeholder="Ingresa el rango de puentes en madera" value="{{old('Rango_puentes_madera',$machine->Rango_puentes_madera)}}" required>
                      </div>
                      <div class="input_box">
                          <label for="Rango_puentes_pleca" class="label">Rango de puentes en pleca</label>
                          <input type="text" class="form_control edit" id="Rango_puentes_pleca" name="Rango_puentes_pleca" placeholder="Ingresa el rango de puentes en pleca" value="{{old('Rango_puentes_pleca',$machine->Rango_puentes_pleca)}}" required>
                      </div>
                      <div class="input_box">
                          <label for="Lado_impresion_troquela" class="label">Lado de impresion en troquelado</label>
                          <input type="text" class="form_control edit" id="Lado_impresion_troquela" name="Lado_impresion_troquela" placeholder="Ingresa por que lado de la impresion se troquela" value="{{old('Lado_impresion_troquela',$machine->Lado_impresion_troquela)}}" required>
                      </div>
                      <div class="input_box">
                          <label for="Dimension_max_troquelar" class="label">Dimension maxima para troquelar</label>
                          <input type="text" class="form_control edit" id="Dimension_max_troquelar" name="Dimension_max_troquelar" placeholder="Ingresa la dimension maxima para troquelar" value="{{old('Dimension_max_troquelar',$machine->Dimension_max_troquelar)}}" required>
                      </div>
                      <div class="input_box">
                          <label for="Dimension_min_troquelar" class="label">Dimension minima para troquelar</label>
                          <input type="text" class="form_control edit" id="Dimension_min_troquelar" name="Dimension_min_troquelar" placeholder="Ingresa la dimension minima para troquelar" value="{{old('Dimension_min_troquelar',$machine->Dimension_min_troquelar)}}" required>
                      </div>
                    </div>
                    <!-- Step7 -->
                    <div class="user_details form-section">
                        <h3>Trims</h3>
                        <div class="input_box">
                            <label for="Tamaño_desperdicios_trim" class="label">Tamaño de desperdicios del trim</label>
                            <input type="text" class="form_control" id="Tamaño_desperdicios_trim" name="Tamaño_desperdicios_trim" placeholder="Ingresa el tamaño de desperdicios del trim" value="{{old('Tamaño_desperdicios_trim',$machine->Tamaño_desperdicios_trim)}}" required>
                        </div>
                        <div class="input_box">
                            <label for="Tamaño_separacion_desperdicios" class="label">Tamaño de la separacion del desperdicio del trim</label>
                            <input type="text" class="form_control" id="Tamaño_separacion_desperdicios" name="Tamaño_separacion_desperdicios" placeholder="Ingresa el tamaño de la separacion de desperdicios del trim" value="{{old('Tamaño_separacion_desperdicios',$machine->Tamaño_separacion_desperdicios)}}" required>
                        </div>
                        <div class="input_box">
                            <label for="Tipo_hule_trim_curvo" class="label">Tipo de hule para el trim curvo</label>
                            <select class="form_control" name="Tipo_hule_trim_curvo" id="Tipo_hule_trim_curvo" required>
                                <option value="{{old('Tipo_hule_trim_curvo',$machine->Tipo_hule_trim_curvo)}}">{{old('Tipo_hule_trim_curvo',$machine->Tipo_hule_trim_curvo)}}</option>
                                @foreach($hules as $hule)
                                    <option value="{{$hule->Codigo_interno}}">{{$hule->Codigo_interno}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form_control" id="Tipo_hule_trim_curvo" name="Tipo_hule_trim_curvo" placeholder="Ingresa el tipo de hule para trim curvo" value="{{old('Tipo_hule_trim_curvo')}}" required> -->
                        </div>
                        <div class="input_box">
                            <label for="Tipo_hule_trim_recto" class="label">Tipo de hule para el trim recto</label>
                            <select class="form_control" name="Tipo_hule_trim_recto" id="Tipo_hule_trim_recto" required>
                                <option value="{{old('Tipo_hule_trim_recto',$machine->Tipo_hule_trim_recto)}}">{{old('Tipo_hule_trim_recto',$machine->Tipo_hule_trim_recto)}}</option>
                                @foreach($hules as $hule)
                                    <option value="{{$hule->Codigo_interno}}">{{$hule->Codigo_interno}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form_control" id="Tipo_hule_trim_recto" name="Tipo_hule_trim_recto" placeholder="Ingresa el tipo de hule para trim recto" value="{{old('Tipo_hule_trim_recto')}}" required> -->
                        </div>
                        <div class="input_box">
                            <label for="Tipo_hule_cuerpo_caja" class="label">Tipo de hule para el cuerpo de la caja</label>
                            <select class="form_control" name="Tipo_hule_cuerpo_caja" id="Tipo_hule_cuerpo_caja" required>
                                <option value="{{old('Tipo_hule_cuerpo_caja',$machine->Tipo_hule_cuerpo_caja)}}">{{old('Tipo_hule_cuerpo_caja',$machine->Tipo_hule_cuerpo_caja)}}</option>
                                @foreach($hules as $hule)
                                    <option value="{{$hule->Codigo_interno}}">{{$hule->Codigo_interno}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form_control" id="Tipo_hule_cuerpo_caja" name="Tipo_hule_cuerpo_caja" placeholder="Ingresa el tipo de hule para el cuerpo de la caja" value="{{old('Tipo_hule_cuerpo_caja')}}" required> -->
                        </div>
                    </div>
                    <!-- Step8 -->
                    <div class="user_details form-section">
                        <h3>Hules</h3>
                        <div class="input_box">
                            <label for="Tipo_hule_punteados" class="label">Tipo de hule para punteados</label>
                            <select class="form_control" name="Tipo_hule_punteados" id="Tipo_hule_punteados" required>
                                    <option value="{{old('Tipo_hule_punteados',$machine->Tipo_hule_punteados)}}">{{old('Tipo_hule_punteados',$machine->Tipo_hule_punteados)}}</option>
                                    @foreach($hules as $hule)
                                        <option value="{{$hule->Codigo_interno}}">{{$hule->Codigo_interno}}</option>
                                    @endforeach
                                </select>
                            <!-- <input type="text" class="form_control" id="Tipo_hule_punteados" name="Tipo_hule_punteados" placeholder="Ingresa el tipo de hule para punteados" value="{{old('Tipo_hule_punteados')}}" required> -->
                        </div>
                        <div class="input_box">
                            <label for="Tipo_hule_scores_favor_flauta" class="label">Tipo de hules para scores a favor de la flauta</label>
                            <select class="form_control" name="Tipo_hule_scores_favor_flauta" id="Tipo_hule_scores_favor_flauta" required>
                                    <option value="{{old('Tipo_hule_scores_favor_flauta',$machine->Tipo_hule_scores_favor_flauta)}}">{{old('Tipo_hule_scores_favor_flauta',$machine->Tipo_hule_scores_favor_flauta)}}</option>
                                    @foreach($hules as $hule)
                                        <option value="{{$hule->Codigo_interno}}">{{$hule->Codigo_interno}}</option>
                                    @endforeach
                                </select>
                            <!-- <input type="text" class="form_control" id="Tipo_hule_scores_favor_flauta" name="Tipo_hule_scores_favor_flauta" placeholder="Ingresa el tipo de hule para scores a favor de la flauta" value="{{old('Tipo_hule_scores_favor_flauta')}}" required> -->
                        </div>
                        <div class="input_box">
                            <label for="Tipo_hule_despuntes_cacahuates" class="label">Tipo de hule para despuntes y cacahuates</label>
                            <select class="form_control" name="Tipo_hule_despuntes_cacahuates" id="Tipo_hule_despuntes_cacahuates" required>
                                    <option value="{{old('Tipo_hule_despuntes_cacahuates',$machine->Tipo_hule_despuntes_cacahuates)}}">{{old('Tipo_hule_despuntes_cacahuates',$machine->Tipo_hule_despuntes_cacahuates)}}</option>
                                    @foreach($hules as $hule)
                                        <option value="{{$hule->Codigo_interno}}">{{$hule->Codigo_interno}}</option>
                                    @endforeach
                                </select>
                            <!-- <input type="text" class="form_control" id="Tipo_hule_despuntes_cacahuates" name="Tipo_hule_despuntes_cacahuates" placeholder="Ingresa el tipo de hule para despuntes y cacahuates" value="{{old('Tipo_hule_despuntes_cacahuates')}}" required> -->
                        </div>
                        <div class="input_box">
                            <label for="Tipo_hule_figuras" class="label">Tipo de hule para figuras</label>
                            <select class="form_control" name="Tipo_hule_figuras" id="Tipo_hule_figuras" required>
                                    <option value="{{old('Tipo_hule_figuras',$machine->Tipo_hule_figuras)}}">{{old('Tipo_hule_figuras',$machine->Tipo_hule_figuras)}}</option>
                                    @foreach($hules as $hule)
                                        <option value="{{$hule->Codigo_interno}}">{{$hule->Codigo_interno}}</option>
                                    @endforeach
                                </select>
                            <!-- <input type="text" class="form_control" id="Tipo_hule_figuras" name="Tipo_hule_figuras" placeholder="Ingresa el tipo de hule para figuras" value="{{old('Tipo_hule_figuras')}}" required> -->
                        </div>
                        <div class="input_box">
                            <label for="Tipo_hules_desperdicio_5x5" class="label">Tipo de hule para desperdicio de mas de 5x5</label>
                            <select class="form_control" name="Tipo_hule_desperdicio_5x5" id="Tipo_hule_desperdicio_5x5" required>
                                    <option value="{{old('Tipo_hules_desperdicio_5x5',$machine->Tipo_hules_desperdicio_5x5)}}">{{old('Tipo_hules_desperdicio_5x5',$machine->Tipo_hules_desperdicio_5x5)}}</option>
                                    @foreach($hules as $hule)
                                        <option value="{{$hule->Codigo_interno}}">{{$hule->Codigo_interno}}</option>
                                    @endforeach
                                </select>
                            <!-- <input type="text" class="form_control" id="Tipo_hules_desperdicio_5x5" name="Tipo_hules_desperdicio_5x5" placeholder="Ingresa el tipo de hule para desperdicio de mas de 5x5 cm" value="{{old('Tipo_hules_desperdicio_5x5')}}" required> -->
                        </div>
                    </div>
                    <!-- Step9 -->
                    <div class="user_details form-section">
                        <div class="input_box">
                            <label for="Observaciones">Observaciones</label>
                            <textarea class="form_control" name="Observaciones" id="Observaciones" cols="30" rows="10" placeholder="Ingrese las observaciones a considerar" required>{{old('Observaciones',$machine->Observaciones)}}</textarea>
                        </div>
                    </div>
                  <div class="form-navigation mt-0">
                    <button type="button" class="previous btn btn-primary float-left">&lt; Atras</button>
                    <button type="button" class="next btn btn-primary float-right">Siguiente &gt;</button>
                    <button type="submit" class="btn btn-success float-right">Actualizar</button>
                  </div>

                </form>
            </div>
                
            </div>
          </div>
    </div>
  </div>
</div>

@endsection