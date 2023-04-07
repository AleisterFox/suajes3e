<?php

namespace App\Http\Controllers;

use App\Models\Production;
use App\Models\Machine;
use App\Models\Customer;
use App\Models\Estimate;
use App\Models\HulesInventory;
use App\Models\PlecasInventory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Livewire\Component;
use PDF;

class ProductionsController extends Controller
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
    public function index()
    {
        return view('productions.index',[
            'productions' => Production::all(),
            'customers' => Customer::all()
        ]);
    }

    public function select()
    {
        $type = 0;
        return view('productions.select',[
            'type' => $type
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {
        
        return view('productions.create',[
            'machines' => Machine::all(),
            'customers' => Customer::all(),
            'estimates' => Estimate::all(),
            'type' => $type
        ]);
    }

    public function template()
    {
        return view('productions.templates');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate ([
            'Folio' => 'required',
            'Cliente' => 'required',
            'Descripcion' => 'required',
            'Cm_totales' => 'required',
            'Corrugado' => 'required',
            'Maquina' => 'required',
            'Factor_reduccion' => 'required',
            'Cut' => 'required',
            'Score' => 'required',
            'Calado' => 'required',
            'S_rotativo' => 'nullable',
            'S_plano' => 'nullable',
            'Perforado' => 'required',
            'Fecha' => 'required',
            'Cotizacion' => 'nullable',
            'Corte' => 'required',
            'Doblez' => 'required',
            'Medida_perforado' => 'required',
            'Hule' => 'required',
            'Img1' => 'required|image',
            'Type' => 'required',
            'Pleca_2000' => 'nullable',
            'Profundidad_pleca_2000' => 'nullable',
            'Hule2' => 'nullable',
            'Hule3' => 'nullable',
            'Hule4' => 'nullable',
            'Hule5' => 'nullable',
            'P_madera' => 'nullable',
            'M_puentes' => 'required'
        ]);

        $customers = Customer::all();
        foreach ($customers as $customer){
            if ($validData['Cliente'] == $customer->Compañia){
                $validData['Cliente']= $customer->id ;
            }
        }

        $production = new Production();
        $production -> Folio = $validData['Folio'];
        $production -> Cliente = $validData['Cliente'];
        $production -> Descripcion = $validData['Descripcion'];
        $production -> Cm_totales = $validData['Cm_totales'];
        $production -> Corrugado = $validData['Corrugado'];
        $production -> Maquina = $validData['Maquina'];
        $production -> Factor_reduccion = $validData['Factor_reduccion'];
        $production -> Cut = $validData['Cut'];
        $production -> Score = $validData['Score'];
        $production -> Calado = $validData['Calado'];
        $production -> S_rotativo = $validData['S_rotativo'];
        $production -> S_plano = $validData['S_plano'];
        $production -> Perforado = $validData['Perforado'];
        $production -> Fecha = $validData['Fecha'];
        $production -> Cotizacion = $validData['Cotizacion'];
        $production -> Corte = $validData['Corte'];
        $production -> Doblez = $validData['Doblez'];
        $production -> Medida_perforado = $validData['Medida_perforado'];
        $production -> Hule = $validData['Hule'];
        $production -> Type = $validData['Type'];
        $production -> Pleca_2000 = $validData['Pleca_2000'];
        $production -> Profundidad_pleca_2000 = $validData['Profundidad_pleca_2000'];
        $production -> M_puentes = $validData['M_puentes'];
        if (array_key_exists('Hule2', $validData)) {
            $production -> Hule2 = $validData['Hule2'];
        }
        
        if (array_key_exists('Hule3', $validData)) {
            $production -> Hule3 = $validData['Hule3'];
        }
        
        if (array_key_exists('Hule4', $validData)) {
            $production -> Hule4 = $validData['Hule4'];
        }
        
        if (array_key_exists('Hule5', $validData)) {
            $production -> Hule5 = $validData['Hule5'];
        }

        if(array_key_exists('P_madera', $validData)){
            $production -> P_madera = $validData['P_madera'];
        }

        
        if ($request->hasFile("Img1")){
            $trazo = $request->file("Img1");
            $nombreTrazo = Str::slug($request->Folio).".png";
            $ruta = public_path("img/trazos/");
            $trazo->move($ruta,$nombreTrazo);
            $production -> Img1 = "/img/trazos/".$nombreTrazo;
        } 

        $production -> save();
        return redirect('/productions');
    }

    public function templateStore(Request $request)
    {
        $validData = $request->validate ([
            'Folio' => 'required',
            'Cliente' => 'required',
            'Descripcion' => 'required',
            'Cm_totales' => 'required',
            'Corrugado' => 'required',
            'Maquina' => 'required',
            'Factor_reduccion' => 'required',
            'Cut' => 'required',
            'Score' => 'required',
            'Calado' => 'required',
            'S_rotativo' => 'nullable',
            'S_plano' => 'nullable',
            'Perforado' => 'required',
            'Fecha' => 'required',
            'Cotizacion' => 'nullable',
            'Corte' => 'required',
            'Doblez' => 'required',
            'Medida_perforado' => 'required',
            'Hule' => 'required',
            'Img1' => 'required',
            'Type' => 'required',
            'Pleca_2000' => 'nullable',
            'Profundidad_pleca_2000' => 'nullable',
            'Hule2' => 'nullable',
            'Hule3' => 'nullable',
            'Hule4' => 'nullable',
            'Hule5' => 'nullable',
            'P_madera' => 'nullable',
            'M_puentes' => 'required'
        ]);

        $production = new Production();
        $production -> Folio = $validData['Folio'];
        $production -> Cliente = $validData['Cliente'];
        $production -> Descripcion = $validData['Descripcion'];
        $production -> Cm_totales = $validData['Cm_totales'];
        $production -> Corrugado = $validData['Corrugado'];
        $production -> Maquina = $validData['Maquina'];
        $production -> Factor_reduccion = $validData['Factor_reduccion'];
        $production -> Cut = $validData['Cut'];
        $production -> Score = $validData['Score'];
        $production -> Calado = $validData['Calado'];
        $production -> S_rotativo = $validData['S_rotativo'];
        $production -> S_plano = $validData['S_plano'];
        $production -> Perforado = $validData['Perforado'];
        $production -> Fecha = $validData['Fecha'];
        $production -> Cotizacion = $validData['Cotizacion'];
        $production -> Corte = $validData['Corte'];
        $production -> Doblez = $validData['Doblez'];
        $production -> Medida_perforado = $validData['Medida_perforado'];
        $production -> Hule = $validData['Hule'];
        $production -> Hule2 = $validData['Hule2'];
        $production -> Hule3 = $validData['Hule3'];
        $production -> Hule4 = $validData['Hule4'];
        $production -> Hule5 = $validData['Hule5'];
        $production -> P_madera = $validData['P_madera'];
        $production -> Type = $validData['Type'];
        $production -> Pleca_2000 = $validData['Pleca_2000'];
        $production -> Profundidad_pleca_2000 = $validData['Profundidad_pleca_2000'];
        $production -> M_puentes = $validData['M_puentes'];
        $production -> Img1 = $validData['Img1'];
        $production -> save();
        return redirect('/productions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function show(Production $production)
    {
        $pdf = PDF::loadView('productions.show',[
            'production' => $production,
            'customers' => Customer::all(),
            'machines' => Machine::all()
        ]);
            $pdf -> setPaper ('sra3','landscape'); //renderiza en horizontal
        return $pdf->stream();

        // return view('productions.show',[
        //     'production' => $production,
        //     'customers' => Customer::all(),
        //     'machines' => Machine::all()
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function edit(Production $production)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Production $production)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Production  $production
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        $url = "/productions";
        $production = Production::findOrFail($id);
        $production->delete();
        return redirect($url);
    }

    public function confirmDelete($id)
    {
        $production = Production::findOrFail($id);
        return view('productions.confirmDelete',[
            'production'=>$production
        ]);
    }
}
