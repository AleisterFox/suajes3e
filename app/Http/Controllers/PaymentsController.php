<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Invoice;
use App\Http\Controllers\InvoiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentsController extends Controller
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
        return view('payments.index',[
            'payments' => Payment::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payments.new',[
            'invoices' => Invoice::all()
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
            'Name' => 'required',
            'Payment_Date' => 'required'
        ]);
        $payment = new Payment();
        $payment->Name = $validData['Name'];
        $payment->Payment_Date = $validData['Payment_Date'];

        $invoices = Invoice::all();
        foreach($invoices as $invoice){
            if($invoice->Number == $payment->Name){
                $Customer = $invoice->Customer;
                $NameP = $payment->Name;
            }
        }

        $StatusInvoice='1';

        $hi=DB::table('invoices')->where('Number',$NameP)->update(['Status'=>'1']);

        

        $payment->Customer = $Customer;
        $payment->Status = '1';
        $payment->save();
        return view('payments.index',[
            'payments' => Payment::all()
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $payment = Payment::latest('id')->first();
        $invoice = Invoice::findOrFail($payment->Name);
        $invoice->Status = $payment->Status;
        $invoice->save();
        return redirect('/payments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
