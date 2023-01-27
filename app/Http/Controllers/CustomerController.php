<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use PDF;

class CustomerController extends Controller
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
        return view ('customers.index',[
            'customers'=> Customer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
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
            'Compañia' => 'required'
        ]);

        $customer = new Customer();
        $customer->Compañia = $validData['Compañia'];
        $customer->save();

        return redirect('/customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        // $pdf = PDF::loadView('customers.show',[
        //     'customer'=>$customer
        // ]);
        // return $pdf -> stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $ids)
    {
        $customer = Customer::findOrFail($id);
        $machine = Machine::findOrFail($ids);
        return view('customers.edit',[
            'customer' => $customer,
            'machine' => $machine
        ]);
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
        $validData = $request->validate([
            'Compañia' => 'required'
        ]);

        $customer = Customer::findOrFail($id);
        $customer->Compañia = $validData['Compañia'];
        $customer->save();

        return redirect('/customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect('/customers');
    }
    
    public function confirmDelete($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.confirmDelete',[
            'customer'=>$customer
        ]);
    }
}
