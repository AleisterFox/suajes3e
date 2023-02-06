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

class ShowEstimateController extends Controller
{
    public function show(Customer $customer, Estimate $estimate)
    {
        
        $customers = Customer::all();
        $pdf = PDF::loadView('estimates.show',[
            'estimate'=>$estimate,
            'customers'=>$customers
        ]);
        return $pdf->stream();

    }
}