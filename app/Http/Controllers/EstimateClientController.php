<?php

namespace App\Http\Controllers;

use App\Models\Estimate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Machine;
use App\Mail\estimatesMailable;
use Illuminate\Support\Facades\Mail;
use PDF;

class EstimateClientController extends Controller
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
        return view('estimates.estimates_index',[
            'estimates'=>Estimate::all(),
            'customers'=>Customer::all(),
            'id'=>$id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('estimates.create',[
            'customers'=>Customer::all(),
            'id'=>$id,
            'machines'=>Machine::all('Compañia')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'Sj1' => 'required',
            'S1' => 'required',
            'Img1' => 'required|image',
            'Folio' => 'required',
            'Cliente' => 'required',
            'Tiempo_liberacion' => 'required',
            'Fecha' => 'required',
            'Qty1' => 'required',
            'Subtotal1' => 'required',
            'Total' => 'required',
            'Qty2' => 'nullable',
            'Subtotal2' => 'nullable',
            'Qty3' => 'nullable',
            'Subtotal3' => 'nullable',
            'Qty4' => 'nullable',
            'Subtotal4' => 'nullable',
            'Qty5' => 'nullable',
            'Subtotal5' => 'nullable',
            'Sj2' => 'nullable',
            'S2' => 'nullable',
            'Img2' => 'nullable|image',
            'Sj3' => 'nullable',
            'S3' => 'nullable',
            'Sj4' => 'nullable',
            'S4' => 'nullable',
            'Sj5' => 'nullable',
            'S5' => 'nullable',
            'Img3' => 'nullable|image',
            'Img4' => 'nullable|image',
            'Img5' => 'nullable|image'
        ]);

        $estimate = new Estimate();
        $estimate -> Sj1 = $validData['Sj1'];
        $estimate -> S1 = $validData['S1'];
        $estimate -> Folio = $validData['Folio'];
        $estimate -> Cliente = $validData['Cliente'];
        $estimate -> Tiempo_liberacion = $validData['Tiempo_liberacion'];
        $estimate -> Fecha = $validData['Fecha'];
        $estimate -> Total = $validData['Total'];
        $estimate -> Qty1 = $validData['Qty1'];
        $estimate -> Subtotal1 = $validData['Subtotal1'];
        $estimate -> Qty2 = $validData['Qty2'];
        $estimate -> Subtotal2 = $validData['Subtotal2'];
        $estimate -> Qty3 = $validData['Qty3'];
        $estimate -> Subtotal3 = $validData['Subtotal3'];
        $estimate -> Qty4 = $validData['Qty4'];
        $estimate -> Subtotal4 = $validData['Subtotal4'];
        $estimate -> Qty5 = $validData['Qty5'];
        $estimate -> Subtotal5 = $validData['Subtotal5'];
        $estimate -> Sj2 = $validData['Sj2'];
        $estimate -> S2 = $validData['S2'];
        $estimate -> Sj3 = $validData['Sj3'];
        $estimate -> S3 = $validData['S3'];
        $estimate -> Sj4 = $validData['Sj4'];
        $estimate -> S4 = $validData['S4'];
        $estimate -> Sj5 = $validData['Sj5'];
        $estimate -> S5 = $validData['S5'];

        if ($request->hasFile("Img1")){
            $trazo1 = $request->file("Img1");
            $nombreTrazo = Str::slug($request->Sj1).".png";
            $ruta = public_path("img/trazos/");
            $trazo1->move($ruta,$nombreTrazo);
            $estimate -> Img1 = "/img/trazos/".$nombreTrazo;
        }   
        if ($request->hasFile("Img2")){
            $trazo2 = $request->file("Img2");
            $nombreTrazo = Str::slug($request->Sj2).".png";
            $ruta = public_path("img/trazos/");
            $trazo2->move($ruta,$nombreTrazo);
            $estimate -> Img2 = "/img/trazos/".$nombreTrazo;
        } 
        if ($request->hasFile("Img3")){
            $trazo3 = $request->file("Img3");
            $nombreTrazo = Str::slug($request->Sj3).".png";
            $ruta = public_path("img/trazos/");
            $trazo3->move($ruta,$nombreTrazo);
            $estimate -> Img3 = "/img/trazos/".$nombreTrazo;
        } 
        if ($request->hasFile("Img4")){
            $trazo4 = $request->file("Img4");
            $nombreTrazo = Str::slug($request->Sj4).".png";
            $ruta = public_path("img/trazos/");
            $trazo4->move($ruta,$nombreTrazo);
            $estimate -> Img4 = "/img/trazos/".$nombreTrazo;
        } 
        if ($request->hasFile("Img5")){
            $trazo5 = $request->file("Img5");
            $nombreTrazo = Str::slug($request->Sj5).".png";
            $ruta = public_path("img/trazos/");
            $trazo5->move($ruta,$nombreTrazo);
            $estimate -> Img5 = "/img/trazos/".$nombreTrazo;
        } 
        
        $estimate -> save();

        return redirect('/estimates');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EstimateClient  $estimateClient
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer, Estimate $estimate)
    {
        
        $customers = Customer::all();
        $pdf = PDF::loadView('estimates.show',[
            'estimate'=>$estimate,
            'customers'=>$customers
        ]);
        return $pdf->stream();

        // return view('estimates.show',[
        //     'estimate' => $estimate
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EstimateClient  $estimateClient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EstimateClient  $estimateClient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstimateClient $estimateClient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstimateClient  $estimateClient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $ids)
    {
        $url = "/customer"."/".$id."/estimates";
        $estimate = Estimate::findOrFail($ids);
        $estimate->delete();
        return redirect($url);
    }

    public function confirmDelete($id, $ids)
    {
        $estimate = Estimate::findOrFail($ids);
        return view('estimates.confirmDelete',[
            'estimate'=>$estimate,
            'id' => $id
        ]);
    }

    public function send($id, $ids)
    {
        return view('estimates.sendMail',[
            'id' => $id,
            'ids' => $ids
        ]);
    }

    public function sendMail(Request $request, $id, $ids)
    {

        

        $validData = $request -> validate ([
            'email' => 'required|email'
        ]);

        $destinatario = $validData['email'];

        $correo = new estimatesMailable($id,$ids);
        Mail::to($destinatario)->send($correo);

        return redirect('/estimates');

    }
}
