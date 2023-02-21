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
    public function create()
    {
        
        return view('productions.create',[
            'machines' => Machine::all(),
            'customers' => Customer::all(),
            'estimates' => Estimate::all(),
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
            'Profundidad_pleca_2000' => 'nullable'
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
            'Profundidad_pleca_2000' => 'nullable'
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
        $production -> Type = $validData['Type'];
        $production -> Pleca_2000 = $validData['Pleca_2000'];
        $production -> Profundidad_pleca_2000 = $validData['Profundidad_pleca_2000'];

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
            'customers' => Customer::all()
        ]);
        return $pdf->stream();
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

    public function confirmDelete($ids)
    {
        $production = Production::findOrFail($ids);
        return view('productions.confirmDelete',[
            'production'=>$production
        ]);
    }
    
    public function destroy($ids)
    {
        $url = "/productions";
        $production = Production::findOrFail($ids);
        $production->delete();
        return redirect($url);
    }
}
