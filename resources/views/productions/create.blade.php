@extends('layouts.panel')

@section('title','Nueva produccion')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Nueva produccion</a>
@endsection

@section('content')

<div class="mt-4">
  <div class="body">
    <div class="butn cancel_butn">
      <ul>
        <li>
          <a href="/productions/create/select">
            <i class='bx bx-arrow-back'></i>
            <span>Volver a seleccionar</span>
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
                        <div class="nav nav-fill my-2">
                            <label class="nav-link shadow-sm step0   border ml-2 ">1</label>
                            <label class="nav-link shadow-sm step1   border ml-2 ">2</label>
                            <label class="nav-link shadow-sm step2   border ml-2 ">3</label>
                            <label class="nav-link shadow-sm step3   border ml-2 ">4</label>
                        </div>
                        @if($type == 1)
                            <form action="/productions" enctype="multipart/form-data" method="POST" class="employee-form">
                                @csrf
                                <!-- Step1 -->
                                <div class="user_details form-section">
                                    <div class="input_box" id="step0">
                                        <label for="Folio" class="label">Folio</label>
                                        <input type="text" class="form_control first" id="Folio" name="Folio" placeholder="Ingresa el folio" value="{{old('Folio')}}" required>
                                    </div>
                                    <div class="input_box">
                                        <label for="Cliente" class="label">Cliente</label>
                                        <select name="Cliente" id="Cliente" class="form_control">
                                            <option value="none">Selecciona un cliente</option>
                                            @foreach($customers as $customer)
                                                <option value="{{$customer->Compañia}}">{{$customer->Compañia}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="input_box">                                        
                                        <input type="text" id="Type" name="Type" class="form_control" value="1" hidden>
                                    </div>

                                    <div class="input_box">
                                        <label for="Descripcion" class="label">Descripcion</label>
                                        <input type="text" class="form_control" id="Descripcion" name="Descripcion" placeholder="Ingresa descripcion" value="{{old('Descripcion')}}" required>
                                    </div>

                                    <div class="input_box">
                                        <label for="Cm_totales" class="label">Cm Totales</label>
                                        <input type="text" class="form_control" id="Cm_totales" name="Cm_totales" placeholder="Ingresa los cm totales" value="{{old('Cm_totales')}}" required>
                                    </div>

                                    <div class="input_box">
                                        <input type="text" class="form_control" id="S_plano" name="S_plano" value="{{old('S_plano')}}" hidden>   
                                    </div>

                                    <div class="input_box">
                                        <label for="P_madera" class="label">P.Madera(Paleta)</label>
                                        <select name="P_madera" id="P_madera" class="form_control">
                                            <option value="none">Seleccionar</option>
                                            <option value="1">1</option>
                                            <option value="1 1/4">1 1/4</option>
                                        </select>
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
                                </div>
                                <!-- Step2 -->
                                <div class="user_details form-section">
                                    <div class="input_box">
                                        <label for="Maquina" class="label">Maquina</label>
                                        <select name="Maquina" id="Maquina" class="form_control">
                                            <option value="">Selecciona una maquina</option>
                                            @foreach($machines as $machine)
                                                <option value="{{$machine->Marca_maquina}}">{{$machine->Marca_maquina}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="input_box">
                                        <label for="M_puentes">Madera puentes</label>
                                        <input type="text" id="M_puentes" name="M_puentes" class="form_control">
                                    </div>
                
                                    <div class="input_box">
                                        <label for="Factor_reduccion">Factor de reduccion</label>
                                        <select name="Factor_reduccion" id="Factor_reduccion" class="form_control">
                                            <option value="">Select an option</option>
                                            <option value="SI">Si</option>
                                            <option value="NO">No</option>
                                        </select>
                                    </div>

                                    <div class="input_box">
                                        <label for="Cut">Cut</label>
                                        <select name="Cut" id="Cut" class="form_control">
                                            <option value="">Select an option</option>
                                            <option value="SI">Si</option>
                                            <option value="NO">No</option>
                                        </select>
                                    </div>
                
                                    <div class="input_box">
                                        <label for="Score">Score</label>
                                        <select name="Score" id="Score" class="form_control">
                                            <option value="">Select an option</option>
                                            <option value="SI">Si</option>
                                            <option value="NO">No</option>
                                        </select>
                                    </div>
                
                                    <div class="input_box">
                                        <label for="Calado">Puntos de Calado</label>
                                        <select name="Calado" id="Calado" class="form_control">
                                            <option value="">Select an option</option>
                                            <option value="3">3 puntos</option>
                                            <option value="4">4 puntos</option>
                                        </select>
                                    </div> 
                                </div>
                                <!-- Step3 --> 
                                <div class="user_details form-section">
                                    <textarea name="" id="" cols="30" rows="10" hidden></textarea>
                                    <div class="input_box">
                                        <label for="Fecha" class="label">Fecha</label>
                                        <input type="date" id="Fecha" name="Fecha" class="form_control">
                                    </div>
                                    <div class="input_box">
                                        <label for="S_rotativo" class="label">Desarrollo Cilindro</label>
                                        <select name="S_rotativo" id="S_rotativo" class="form_control">
                                            <option value="none">Select an option</option>
                                            <option value="37.5">37.5</option>
                                            <option value="50">50</option>
                                            <option value="60">60</option>
                                            <option value="66">66</option>
                                            <option value="75">75</option>
                                        </select>
                                    </div>

                                    <div class="input_box">
                                        <label for="Perforado">Perforado</label>
                                        <select name="Perforado" id="Perforado" class="form_control">
                                            <option value="none">Select an option</option>
                                            <option value="SI">Si</option>
                                            <option value="NO">No</option>
                                        </select>
                                    </div>
                                    <div class="input_box">
                                        <label for="Cotizacion" class="label">Cotizacion</label>
                                        <input type="text" id="Cotizacion" name="Cotizacion" class="form_control" value="none" readonly>
                                    </div>
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
                                </div>
                                <!-- Step4 -->
                                <div class="user_details form-section">
                                    <textarea name="" id="" cols="30" rows="10" hidden></textarea>

                                    <div class="input_box">
                                        <select name="Pleca_2000" id="Pleca_2000" class="form_control" hidden>
                                            <option value="">Seleccionar pleca 2000</option>
                                            <option value="N/A">N/A</option>
                                            <option value="3 Pts">3 Pts</option>
                                            <option value="4 Pts">4 Pts</option>
                                        </select>
                                    </div>

                                    <div class="input_box">
                                        <input type="text" name="Profundidad_pleca_2000" id="Profundidad_pleca_2000" class="form_control" value="{{old('Profundidad_pleca_2000')}}" hidden>
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
                                    <div class="input_box">
                                        <label for="Hule2" class="label">Hule2</label>
                                        <select name="Hule2" id="Hule2" class="form_control">
                                            <option value="none">Select an option</option>
                                            <option value="5/8 x 5/8 x 1 1/4">5/8 x 5/8 x 1 1/4</option>
                                            <option value="3/4 x 3/4 x 1 1/4">3/4 x 3/4 x 1 1/4</option>
                                            <option value="7/16 x 1/2 x 20">7/16 x 1/2 x 20</option>
                                            <option value="Kushion .315">Kushion .315</option>
                                            <option value="7/8 x 42 x52">7/8 x 42 x52</option>
                                        </select>
                                    </div>
                                    <div class="input_box">
                                        <label for="Hule3" class="label">Hule3</label>
                                        <select name="Hule3" id="Hule3" class="form_control">
                                            <option value="none">Select an option</option>
                                            <option value="5/8 x 5/8 x 1 1/4">5/8 x 5/8 x 1 1/4</option>
                                            <option value="3/4 x 3/4 x 1 1/4">3/4 x 3/4 x 1 1/4</option>
                                            <option value="7/16 x 1/2 x 20">7/16 x 1/2 x 20</option>
                                            <option value="Kushion .315">Kushion .315</option>
                                            <option value="7/8 x 42 x52">7/8 x 42 x52</option>
                                        </select>
                                    </div>
                                    <div class="input_box">
                                        <label for="Hule4" class="label">Hule4</label>
                                        <select name="Hule4" id="Hule4" class="form_control">
                                            <option value="none">Select an option</option>
                                            <option value="5/8 x 5/8 x 1 1/4">5/8 x 5/8 x 1 1/4</option>
                                            <option value="3/4 x 3/4 x 1 1/4">3/4 x 3/4 x 1 1/4</option>
                                            <option value="7/16 x 1/2 x 20">7/16 x 1/2 x 20</option>
                                            <option value="Kushion .315">Kushion .315</option>
                                            <option value="7/8 x 42 x52">7/8 x 42 x52</option>
                                        </select>
                                    </div>
                                    <div class="input_box">
                                        <label for="Hule5" class="label">Hule5</label>
                                        <select name="Hule5" id="Hule5" class="form_control">
                                            <option value="none">Select an option</option>
                                            <option value="5/8 x 5/8 x 1 1/4">5/8 x 5/8 x 1 1/4</option>
                                            <option value="3/4 x 3/4 x 1 1/4">3/4 x 3/4 x 1 1/4</option>
                                            <option value="7/16 x 1/2 x 20">7/16 x 1/2 x 20</option>
                                            <option value="Kushion .315">Kushion .315</option>
                                            <option value="7/8 x 42 x52">7/8 x 42 x52</option>
                                        </select>
                                    </div>
                                    <div class="input_box file-select">
                                        <label for="" class="label">Trazo</label>
                                        <span class="Img1">
                                            <input type="file" name="Img1" id="Img1" accept="image/*">
                                        </span>
                                        <label for="Img1"><span class="Img1">Subir Trazo &nbsp; <i class="bx bx-upload"></i></span></label>
                                    </div>
                                </div>
                                
                                <div class="form-navigation mt-0">
                                    <button type="button" class="previous btn btn-primary float-left">&lt; Atras</button>
                                    <button type="button" class="next btn btn-primary float-right">Siguiente &gt;</button>
                                    <button type="submit" class="btn btn-success float-right">Guardar</button>
                                </div>
                            </form>
                        @endif
                        @if($type == 2)
                            <form action="/productions" enctype="multipart/form-data" method="POST" class="employee-form">
                                @csrf
                                <!-- Step1 -->
                                <div class="user_details form-section">
                                    <div class="input_box" id="step0">
                                        <label for="Folio" class="label">Folio</label>
                                        <input type="text" class="form_control first" id="Folio" name="Folio" placeholder="Ingresa el folio" value="{{old('Folio')}}" required>
                                    </div>
                                    <div class="input_box">
                                        <label for="Cliente" class="label">Cliente</label>
                                        <select name="Cliente" id="Cliente" class="form_control">
                                            <option value="none">Selecciona un cliente</option>
                                            @foreach($customers as $customer)
                                                <option value="{{$customer->Compañia}}">{{$customer->Compañia}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="input_box">                                        
                                        <input type="text" id="Type" name="Type" class="form_control" value="2" hidden>
                                    </div>

                                    <div class="input_box">
                                        <label for="Descripcion" class="label">Descripcion</label>
                                        <input type="text" class="form_control" id="Descripcion" name="Descripcion" placeholder="Ingresa descripcion" value="{{old('Descripcion')}}" required>
                                    </div>

                                    <div class="input_box">
                                        <label for="Cm_totales" class="label">Cm Totales</label>
                                        <input type="text" class="form_control" id="Cm_totales" name="Cm_totales" placeholder="Ingresa los cm totales" value="{{old('Cm_totales')}}" required>
                                    </div>

                                    <div class="input_box">
                                        <label for="S_plano" class="label">S.Plano</label>
                                        <input type="text" class="form_control" id="S_plano" name="S_plano" value="{{old('S_plano')}}" >   
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
                                </div>
                                <!-- Step2 -->
                                <div class="user_details form-section">
                                    <div class="input_box">
                                        <label for="Maquina" class="label">Maquina</label>
                                        <select name="Maquina" id="Maquina" class="form_control">
                                            <option value="">Selecciona una maquina</option>
                                            @foreach($machines as $machine)
                                                <option value="{{$machine->Marca_maquina}}">{{$machine->Marca_maquina}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                
                                    <div class="input_box">
                                        <label for="Factor_reduccion">Factor de reduccion</label>
                                        <select name="Factor_reduccion" id="Factor_reduccion" class="form_control">
                                            <option value="">Select an option</option>
                                            <option value="SI">Si</option>
                                            <option value="NO">No</option>
                                        </select>
                                    </div>

                                    <div class="input_box">
                                        <label for="Cut">Cut</label>
                                        <select name="Cut" id="Cut" class="form_control">
                                            <option value="">Select an option</option>
                                            <option value="SI">Si</option>
                                            <option value="NO">No</option>
                                        </select>
                                    </div>
                
                                    <div class="input_box">
                                        <label for="Score">Score</label>
                                        <select name="Score" id="Score" class="form_control">
                                            <option value="">Select an option</option>
                                            <option value="SI">Si</option>
                                            <option value="NO">No</option>
                                        </select>
                                    </div>
                
                                    <div class="input_box">
                                        <label for="Calado">Puntos de Calado</label>
                                        <select name="Calado" id="Calado" class="form_control">
                                            <option value="">Select an option</option>
                                            <option value="3">3 puntos</option>
                                            <option value="4">4 puntos</option>
                                        </select>
                                    </div> 
                                </div>
                                <!-- Step3 --> 
                                <div class="user_details form-section">
                                    <textarea name="" id="" cols="30" rows="10" hidden></textarea>
                                    <div class="input_box">
                                        <label for="Fecha" class="label">Fecha</label>
                                        <input type="date" id="Fecha" name="Fecha" class="form_control">
                                    </div>
                                    <div class="input_box">
                                        <select name="S_rotativo" id="S_rotativo" class="form_control" hidden>
                                            <option value="none">Select an option</option>
                                            <option value="37.5">37.5</option>
                                            <option value="50">50</option>
                                            <option value="60">60</option>
                                            <option value="66">66</option>
                                            <option value="75">75</option>
                                        </select>
                                    </div>

                                    <div class="input_box">
                                        <label for="Perforado">Perforado</label>
                                        <select name="Perforado" id="Perforado" class="form_control">
                                            <option value="none">Select an option</option>
                                            <option value="SI">Si</option>
                                            <option value="NO">No</option>
                                        </select>
                                    </div>
                                    <div class="input_box">
                                        <label for="Cotizacion" class="label">Cotizacion</label>
                                        <input type="text" id="Cotizacion" name="Cotizacion" class="form_control" value="none" readonly>
                                    </div>
                                    <div class="input_box">
                                        <label for="Corte" class="label">Corte</label>
                                        <select name="Corte" id="Corte" class="form_control">
                                            <option value="none">Select an option</option>
                                            <option value="937">937</option>
                                            <option value="990">990</option>
                                            <option value="1000">1000</option>
                                            <option value="1040">1040</option>
                                        </select>
                                    </div>
                                    <div class="input_box">
                                        <label for="M_puentes">Madera puentes</label>
                                        <input type="text" id="M_puentes" name="M_puentes" class="form_control" required>
                                    </div>
                                </div>
                                <!-- Step4 -->
                                <div class="user_details form-section">
                                    <textarea name="" id="" cols="30" rows="10" hidden></textarea>

                                    <div class="input_box">
                                        <label for="Pleca_2000" class="label">Pleca 2000</label>
                                        <select name="Pleca_2000" id="Pleca_2000" class="form_control">
                                            <option value="">Seleccionar pleca 2000</option>
                                            <option value="N/A">N/A</option>
                                            <option value="3 Pts">3 Pts</option>
                                            <option value="4 Pts">4 Pts</option>
                                        </select>
                                    </div>

                                    <div class="input_box">
                                        <label for="Profundidad_pleca_2000" class="label">Profundidad pleca 2000</label>
                                        <input type="text" name="Profundidad_pleca_2000" id="Profundidad_pleca_2000" class="form_control" value="{{old('Profundidad_pleca_2000')}}">
                                    </div>
                                    
                                    <div class="input_box">
                                        <label for="Doblez" class="label">Doblez</label>
                                        <select name="Doblez" id="Doblez" class="form_control">
                                            <option value="none">Select an option</option>
                                            <option value="890">890</option>
                                            <option value="860">860</option>
                                            <option value="906">906</option>
                                        </select>
                                    </div>
                                    <div class="input_box">
                                        <label for="Medida_perforado" class="label">Medida de perforado</label>
                                        <select name="Medida_perforado" id="Medida_perforado" class="form_control">
                                            <option value="none">Select an option</option>
                                            <option value="1/2 x 1/2">1/2 x 1/2</option>
                                            <option value="1/4 x 1/4">1/4 x 1/4</option>
                                            <option value="3/8 x 3/8">3/8 x 3/8</option>
                                            <option value="1/8 x 1/8">1/8 x 1/8</option>
                                        </select>
                                    </div>
                                    <div class="input_box">
                                        <label for="Hule" class="label">Hule</label>
                                        <select name="Hule" id="Hule" class="form_control">
                                            <option value="">Select an option</option>
                                            <option value="1/2 x 1/2 x 1 1/4">1/2 x 1/2 x 1 1/4</option>
                                            <option value="7MM 9x18">7MM "9x18"</option>
                                        </select>
                                    </div>
                                    <div class="input_box file-select">
                                        <label for="" class="label">Trazo</label>
                                        <span class="Img1">
                                            <input type="file" name="Img1" id="Img1" accept="image/*">
                                        </span>
                                        <label for="Img1"><span class="Img1">Subir Trazo &nbsp; <i class="bx bx-upload"></i></span></label>
                                    </div>
                                </div>
                                
                                <div class="form-navigation mt-0">
                                    <button type="button" class="previous btn btn-primary float-left">&lt; Atras</button>
                                    <button type="button" class="next btn btn-primary float-right">Siguiente &gt;</button>
                                    <button type="submit" class="btn btn-success float-right">Guardar</button>
                                </div>
                            </form>
                        @endif
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
@endsection