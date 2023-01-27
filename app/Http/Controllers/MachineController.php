<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
use App\Models\Customer;
use App\Models\PlecasInventory;
use App\Models\HulesInventory;
use PDF;

class MachineController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view ('customers.index_machines',[
            'machines' => Machine::all(),
            'customers' => Customer::all(),
            'id' => $id
        ]);
    }

    public function select($id)
    {
        $type = 0;
        return view('customers.select_machine',[
            'id' => $id,
            'type' => $type
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $type)
    {
        return view('customers.create_machine',[
            'customers' => Customer::all(),
            'plecas' => PlecasInventory::all(),
            'hules' => HulesInventory::all(),
            'id' => $id,
            'type' => $type
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $validData = $request->validate([
            'Compañia' => 'required',
            'Marca_maquina' => 'required',
            'Diametro_rodillo' => 'required',
            'Largo_rodillo' => 'required',
            'NMPH_curvo' => 'required',
            'NMPH_recto' => 'required',
            'DMPH_curvo' => 'required',
            'DMPH_recto' => 'required',
            'Centro_maquina' => 'required',
            'Plecascs_corte_curvo' => 'required',
            'Plecascs_corte_recto' => 'required',
            'Plecascs_corte_fig' => 'required',
            'Plecascs_score_curvo' => 'required',
            'Plecascs_score_recto' => 'required',
            'Plecascs_punteado_curvo' => 'required',
            'Plecascs_punteado_recto' => 'required',
            'Plecascd_corte_curvo' => 'required',
            'Plecascd_corte_recto' => 'required',
            'Plecascd_score_curvo' => 'required',
            'Plecascd_score_recto' => 'required',
            'Plecascd_punteado_curvo' => 'required',
            'Plecascd_punteado_recto' => 'required',
            'Vista_plano' => 'required',
            'Velocidad_troquelado' => 'required',
            'Ceja_lado' => 'required',
            'Espesor_madera' => 'required',
            'Factor_reduccion' => 'required',
            'Rango_puentes_madera' => 'required',
            'Rango_puentes_pleca' => 'required',
            'Lado_impresion_troquela' => 'required',
            'Dimension_max_troquelar' => 'required',
            'Dimension_min_troquelar' => 'required',
            'Tamaño_desperdicios_trim' => 'required',
            'Tamaño_separacion_desperdicios' => 'required',
            'Tipo_hule_trim_curvo' => 'required',
            'Tipo_hule_trim_recto' => 'required',
            'Tipo_hule_cuerpo_caja' => 'required',
            'Tipo_hule_punteados' => 'required',
            'Tipo_hule_scores_favor_flauta' => 'required',
            'Tipo_hule_despuntes_cacahuates' => 'required',
            'Tipo_hule_figuras' => 'required',
            'Tipo_hules_desperdicio_5x5' => 'required',
            'Observaciones' => 'required',
            'Tipo_maquina' => 'required'
        ]);

        $customer = new Machine();
        $customer->Compañia = $validData['Compañia'];
        $customer->Marca_maquina = $validData['Marca_maquina'];
        $customer->Diametro_rodillo = $validData['Diametro_rodillo'];
        $customer->Largo_rodillo = $validData['Largo_rodillo'];
        $customer->NMPH_curvo = $validData['NMPH_curvo'];
        $customer->NMPH_recto = $validData['NMPH_recto'];
        $customer->DMPH_curvo = $validData['NMPH_curvo'];
        $customer->DMPH_recto = $validData['NMPH_recto'];
        $customer->Centro_maquina = $validData['Centro_maquina'];
        $customer->Plecascs_corte_curvo = $validData['Plecascs_corte_curvo'];
        $customer->Plecascs_corte_recto = $validData['Plecascs_corte_recto'];
        $customer->Plecascs_corte_fig = $validData['Plecascs_corte_fig'];
        $customer->Plecascs_score_curvo = $validData['Plecascs_score_curvo'];
        $customer->Plecascs_score_recto = $validData['Plecascs_score_recto'];
        $customer->Plecascs_punteado_curvo = $validData['Plecascs_punteado_curvo'];
        $customer->Plecascs_punteado_recto = $validData['Plecascs_punteado_recto'];
        $customer->Plecascd_corte_curvo = $validData['Plecascd_corte_curvo'];
        $customer->Plecascd_corte_recto = $validData['Plecascd_corte_recto'];
        $customer->Plecascd_score_curvo = $validData['Plecascd_score_curvo'];
        $customer->Plecascd_score_recto = $validData['Plecascd_score_recto'];
        $customer->Plecascd_punteado_curvo = $validData['Plecascd_punteado_curvo'];
        $customer->Plecascd_punteado_recto = $validData['Plecascd_punteado_recto'];
        $customer->Vista_plano = $validData['Vista_plano'];
        $customer->Velocidad_troquelado = $validData['Velocidad_troquelado'];
        $customer->Ceja_lado = $validData['Ceja_lado'];
        $customer->Espesor_madera = $validData['Espesor_madera'];
        $customer->Factor_reduccion = $validData['Factor_reduccion'];
        $customer->Rango_puentes_madera = $validData['Rango_puentes_madera'];
        $customer->Rango_puentes_pleca = $validData['Rango_puentes_pleca'];
        $customer->Lado_impresion_troquela = $validData['Lado_impresion_troquela'];
        $customer->Dimension_max_troquelar = $validData['Dimension_max_troquelar'];
        $customer->Dimension_min_troquelar = $validData['Dimension_min_troquelar'];
        $customer->Tamaño_desperdicios_trim = $validData['Tamaño_desperdicios_trim'];
        $customer->Tamaño_separacion_desperdicios = $validData['Tamaño_separacion_desperdicios'];
        $customer->Tipo_hule_trim_curvo = $validData['Tipo_hule_trim_curvo'];
        $customer->Tipo_hule_trim_recto = $validData['Tipo_hule_trim_recto'];
        $customer->Tipo_hule_cuerpo_caja = $validData['Tipo_hule_cuerpo_caja'];
        $customer->Tipo_hule_punteados = $validData['Tipo_hule_punteados'];
        $customer->Tipo_hule_scores_favor_flauta = $validData['Tipo_hule_scores_favor_flauta'];
        $customer->Tipo_hule_despuntes_cacahuates = $validData['Tipo_hule_despuntes_cacahuates'];
        $customer->Tipo_hule_figuras = $validData['Tipo_hule_figuras'];
        $customer->Tipo_hules_desperdicio_5x5 = $validData['Tipo_hules_desperdicio_5x5'];
        $customer->Observaciones = $validData['Observaciones'];
        $customer->Tipo_maquina = $validData['Tipo_maquina'];
        $customer->save();

        $url = "/customers"."/".$id."/machines";
        return redirect($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Machine $machine
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer,Machine $machine)
    {
        $customers = Customer::all();
        $pdf = PDF::loadView('customers.show',[
            'machine'=>$machine,
            'customers'=>$customers,
            'plecas' => PlecasInventory::all(),
            'hules' => HulesInventory::all()
        ]);
        return $pdf -> stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Machine  $machine
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer,Machine $machine)
    {   
        $machine = Machine::findOrFail($machine->id);
        return view('customers.edit_machine',[
            'machine' => $machine,
            'customer' => $customer,
            'plecas' => PlecasInventory::all(),
            'hules' => HulesInventory::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Machine  $machine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validData = $request->validate([
            'Compañia' => 'required',
            'Marca_maquina' => 'required',
            'Diametro_rodillo' => 'required',
            'Largo_rodillo' => 'required',
            'NMPH_curvo' => 'required',
            'NMPH_recto' => 'required',
            'DMPH_curvo' => 'required',
            'DMPH_recto' => 'required',
            'Centro_maquina' => 'required',
            'Plecascs_corte_curvo' => 'required',
            'Plecascs_corte_recto' => 'required',
            'Plecascs_corte_fig' => 'required',
            'Plecascs_score_curvo' => 'required',
            'Plecascs_score_recto' => 'required',
            'Plecascs_punteado_curvo' => 'required',
            'Plecascs_punteado_recto' => 'required',
            'Plecascd_corte_curvo' => 'required',
            'Plecascd_corte_recto' => 'required',
            'Plecascd_score_curvo' => 'required',
            'Plecascd_score_recto' => 'required',
            'Plecascd_punteado_curvo' => 'required',
            'Plecascd_punteado_recto' => 'required',
            'Vista_plano' => 'required',
            'Velocidad_troquelado' => 'required',
            'Ceja_lado' => 'required',
            'Espesor_madera' => 'required',
            'Factor_reduccion' => 'required',
            'Rango_puentes_madera' => 'required',
            'Rango_puentes_pleca' => 'required',
            'Lado_impresion_troquela' => 'required',
            'Dimension_max_troquelar' => 'required',
            'Dimension_min_troquelar' => 'required',
            'Tamaño_desperdicios_trim' => 'required',
            'Tamaño_separacion_desperdicios' => 'required',
            'Tipo_hule_trim_curvo' => 'required',
            'Tipo_hule_trim_recto' => 'required',
            'Tipo_hule_cuerpo_caja' => 'required',
            'Tipo_hule_punteados' => 'required',
            'Tipo_hule_scores_favor_flauta' => 'required',
            'Tipo_hule_despuntes_cacahuates' => 'required',
            'Tipo_hule_figuras' => 'required',
            'Tipo_hules_desperdicio_5x5' => 'required',
            'Observaciones' => 'required',
            'Tipo_maquina' => 'required'
        ]);

        $customer = Machine::findOrFail($id);
        $customer->Compañia = $validData['Compañia'];
        $customer->Marca_maquina = $validData['Marca_maquina'];
        $customer->Diametro_rodillo = $validData['Diametro_rodillo'];
        $customer->Largo_rodillo = $validData['Largo_rodillo'];
        $customer->NMPH_curvo = $validData['NMPH_curvo'];
        $customer->NMPH_recto = $validData['NMPH_recto'];
        $customer->DMPH_curvo = $validData['NMPH_curvo'];
        $customer->DMPH_recto = $validData['NMPH_recto'];
        $customer->Centro_maquina = $validData['Centro_maquina'];
        $customer->Plecascs_corte_curvo = $validData['Plecascs_corte_curvo'];
        $customer->Plecascs_corte_recto = $validData['Plecascs_corte_recto'];
        $customer->Plecascs_corte_fig = $validData['Plecascs_corte_fig'];
        $customer->Plecascs_score_curvo = $validData['Plecascs_score_curvo'];
        $customer->Plecascs_score_recto = $validData['Plecascs_score_recto'];
        $customer->Plecascs_punteado_curvo = $validData['Plecascs_punteado_curvo'];
        $customer->Plecascs_punteado_recto = $validData['Plecascs_punteado_recto'];
        $customer->Plecascd_corte_curvo = $validData['Plecascd_corte_curvo'];
        $customer->Plecascd_corte_recto = $validData['Plecascd_corte_recto'];
        $customer->Plecascd_score_curvo = $validData['Plecascd_score_curvo'];
        $customer->Plecascd_score_recto = $validData['Plecascd_score_recto'];
        $customer->Plecascd_punteado_curvo = $validData['Plecascd_punteado_curvo'];
        $customer->Plecascd_punteado_recto = $validData['Plecascd_punteado_recto'];
        $customer->Vista_plano = $validData['Vista_plano'];
        $customer->Velocidad_troquelado = $validData['Velocidad_troquelado'];
        $customer->Ceja_lado = $validData['Ceja_lado'];
        $customer->Espesor_madera = $validData['Espesor_madera'];
        $customer->Factor_reduccion = $validData['Factor_reduccion'];
        $customer->Rango_puentes_madera = $validData['Rango_puentes_madera'];
        $customer->Rango_puentes_pleca = $validData['Rango_puentes_pleca'];
        $customer->Lado_impresion_troquela = $validData['Lado_impresion_troquela'];
        $customer->Dimension_max_troquelar = $validData['Dimension_max_troquelar'];
        $customer->Dimension_min_troquelar = $validData['Dimension_min_troquelar'];
        $customer->Tamaño_desperdicios_trim = $validData['Tamaño_desperdicios_trim'];
        $customer->Tamaño_separacion_desperdicios = $validData['Tamaño_separacion_desperdicios'];
        $customer->Tipo_hule_trim_curvo = $validData['Tipo_hule_trim_curvo'];
        $customer->Tipo_hule_trim_recto = $validData['Tipo_hule_trim_recto'];
        $customer->Tipo_hule_cuerpo_caja = $validData['Tipo_hule_cuerpo_caja'];
        $customer->Tipo_hule_punteados = $validData['Tipo_hule_punteados'];
        $customer->Tipo_hule_scores_favor_flauta = $validData['Tipo_hule_scores_favor_flauta'];
        $customer->Tipo_hule_despuntes_cacahuates = $validData['Tipo_hule_despuntes_cacahuates'];
        $customer->Tipo_hule_figuras = $validData['Tipo_hule_figuras'];
        $customer->Tipo_hules_desperdicio_5x5 = $validData['Tipo_hules_desperdicio_5x5'];
        $customer->Observaciones = $validData['Observaciones'];
        $customer->Tipo_maquina = $validData['Tipo_maquina'];
        $customer->save();

        $url = "/customers"."/".$id."/machines";
        return redirect($url);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Machine  $machine
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $ids)
    {
        $url = "/customers"."/".$id."/machines";
        $machine = Machine::findOrFail($ids);
        $machine->delete();
        return redirect($url);
    }

    public function confirmDelete($id, $ids)
    {
        $machine = Machine::findOrFail($ids);
        return view('customers.confirmDeleteMachine',[
            'machine'=>$machine,
            'id' => $id 
        ]);
    }
}
