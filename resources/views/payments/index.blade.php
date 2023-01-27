@extends('layouts.panel')

@section('title','Payments')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Payments</a>
@endsection

@section('content')

    <div class="mt-8">
        <div class="body">
            <div class="butn">
                <ul>
                    <li>
                        <a href="/payments/create">
                            <i class='bx bx-plus'></i>
                            <span>New payment</span>
                        </a>
                    </li>
                </ul>
            </div>
    
            <p></p>
    
            <div class="tbl">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Payment Date</th>
                            <th>Customer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payments as $payment)
                            <tr>
                                <td>{{$payment->Name}}</td>
                                <td>{{$payment->Payment_Date}}</td>
                                <td>{{$payment->Customer}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
            </div>
        </div>
    
    </div>
    
@endsection
