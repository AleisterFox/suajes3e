<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Production;
use App\Models\Machine;
use App\Models\Customer;
use App\Models\Estimate;
use App\Models\HulesInventory;
use App\Models\PlecasInventory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PDF;

class ProductionOrder extends Component
{
    public $cliente = null, $estimate = null, $machine = null, $tipo = null;
    public $maquinas = null, $cotizaciones = null, $desarrollos = null, $suajes = null, $tipos = null;
    protected $listeners = ['logic' => 'stepsLogic'];
    
    public function render()
    {
        return view('livewire.production-order',[
            'customers' => Customer::all()
        ]);
    }

    public function updatedCliente($id)
    {
        $this->maquinas = Machine::where('Compañia',$id)->get();
        $this->cotizaciones = Estimate::where('Cliente',$id)->get();
    }

    public function updatedMachine($mach)
    {
        $this->desarrollos = Machine::where('Marca_maquina',$mach)->get();
    }

    public function updatedEstimate($folio)
    {
        $this->suajes = Estimate::where('Folio',$folio)->get();
    }

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
        $production -> Img1 = $validData['Img1'];
        $production -> Type = $validData['Type'];
        $production -> Pleca_2000 = $validData['Pleca_2000'];
        $production -> Profundidad_pleca_2000 = $validData['Profundidad_pleca_2000'];
        $production -> save();
        return redirect('/productions');
    }

}
