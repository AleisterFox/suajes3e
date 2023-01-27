<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estimate;
use App\Models\Customer;
use App\Models\Template;
use PDF;

class EstimateController extends Controller
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
        return view ('estimates.index',[
            'customers'=>Customer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ids=Estimate::latest('id')->first();
        $data['customers'] = Customer::all();
        if($ids==NULL){
            $data['ids']=1;
        }
        else{
            $ids=Estimate::latest('id')->first();
            $data['ids']=$ids->id+1;
        }

        return view('estimates.create',$data);
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
            'Customer' => 'required',
            'Number' => 'required',
            'Date' => 'required',
            'Item' => 'required',
            'Item_description' => 'required',
            'Quantity' => 'required|numeric',
            'Price' => 'required',
            'Total' => 'required'
        ]);

        $estimate = new Estimate();
        $estimate->Customer = $validData['Customer'];
        $estimate->Number = $validData['Number'];
        $estimate->Date = $validData['Date'];
        $estimate->Item = $validData['Item'];
        $estimate->Item_description = $validData['Item_description'];
        $estimate->Quantity = $validData['Quantity'];
        $estimate->Price = $validData['Price'];
        $estimate->Total = $validData['Total'];
        $estimate->save();

        return redirect('/estimates');

    }

    public function template()
    {
        return view('estimates.templates',[
            'templates'=>Template::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Estimate $estimate)
    {
            $customers = Customer::all();
            $pdf = PDF::loadView('estimates.show',[
                'customers'=>$customers,
                'estimate'=>$estimate
            ]);
            return $pdf->stream();

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
