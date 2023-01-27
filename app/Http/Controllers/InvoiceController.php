<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Template;
use PDF;

class InvoiceController extends Controller
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
        return view ('invoices.index',[
            'invoices'=>Invoice::all(),
            'payments'=>Payment::all()
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Invoice::latest('id') !== 'int'){
            return view('invoices.create',[
                'customers' => Customer::all(),
                $ids = 1,
                'ids' => $ids
            ]);
        }
        else{
            return view('invoices.create',[
                'customers' => Customer::all(),
                $ids = Invoice::latest('id')->first(),
                'ids' => $ids -> id + 1
            ]);
        }
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
            'Date_due' => 'required',
            'Item' => 'required',
            'Item_description' => 'required',
            'Quantity' => 'required|numeric',
            'Price' => 'required',
            'Total' => 'required',
            'Status' => 'required'
        ]);

        $invoice = new Invoice();
        $invoice->Status = $validData['Status'];
        $invoice->Customer = $validData['Customer'];
        $invoice->Number = $validData['Number'];
        $invoice->Date = $validData['Date'];
        $invoice->Date_due = $validData['Date_due'];
        $invoice->Item = $validData['Item'];
        $invoice->Item_description = $validData['Item_description'];
        $invoice->Quantity = $validData['Quantity'];
        $invoice->Price = $validData['Price'];
        $invoice->Total = $validData['Total'];
        $invoice->Amount_Due = $validData['Total'];
        $invoice->save();

        return redirect('/invoices');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        $customers = Customer::all();
            $pdf = PDF::loadView('invoices.show',[
                'customers'=>$customers,
                'invoice'=>$invoice
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
