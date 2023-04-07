@extends('layouts.panel')

@section('title','Nueva produccion')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">Nueva produccion</a>
@endsection

@section('content')
    <div class="mt-8">
        <div class="body">
            <div class="butn cancel_butn">
                <ul>
                    <li>
                        <a href="/invoices/template">
                            <i class='bx bx-arrow-back'></i>
                            <span>Back</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="errors">
                @if($errors->any())
                    <div>
                        {{ $errors->first() }}
                    </div>
                @endif
            </div>
            <div class="container">
                <div>
                    <form action="/invoices" method="POST">
                        @csrf
                        
                        <div class="estimate_details">
                            <div class="main_data">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Invoice Number</th>
                                            <th>Date</th>
                                            <th>Date Due</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td><div class="input_box" id="Input_box">
                                            <select class="form-control" name="Customer" id="Customer" value="{{old('Customer')}}">
                                                <option value='none'>Select Customer</option>
                                                @foreach($customers as $customer)
                                                    <option value='{{$customer->Name}}'>{{$customer->Name}}</option> 
                                                @endforeach
                                            </select>
                                        </div></td>
                                    
                                        <td><div class="input_box" id="Input_box">
                                            <input type="text" class="form_control" id="Number" name="Number" value="INV-{{$ids}}">
                                        </div></td>
                                        
                                        <td><div class="input_box" id="Input_box">
                                            <input type="date" class="form_control" id="Date" name="Date" value="{{old('Date')}}">
                                        </div></td>

                                        <td><div class="input_box" id="Input_box">
                                            <input type="date" class="form_control" id="Date_due" name="Date_due" value="{{old('Date_due')}}">
                                        </div></td>
                                    </tr>
                                </table>
                            </div>

                            <!-- Table -->
                            <div class="tb" id="tbl">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-label="Item">
                                                <!-- Item and description -->
                                                <div class="input_box" id="Input_box"> 
                                                    <input class="form_control" type="text" id="Item" name="Item" value="{{old('Item')}}">
                                                </div>
                                            </td>

                                                <!-- Number of items -->
                                            <td data-label="Qty">
                                                <div class="input_box" id="Input_box" >
                                                    <input type="number" small min='0' step="any" class="form_control" name="Quantity" id="Quantity" oninput="calcular()" value="{{old('Quantity')}}" placeholder="0">
                                                </div>
                                            </td>

                                                <!-- price of items -->
                                            <td data-label="Price">
                                                <div class="input_box" id="Input_box">
                                                    <input type="number tel" min='0' class="form_control" name="Price" id="Price" oninput="calcular()" value="{{old('Price')}}" placeholder="$0.00">
                                                </div>
                                            </td>
                                                <!-- Total Amount -->
                                            <td data-label="Amount">
                                                <div class="input_box" id="Input_box">
                                                    <input type="number" name="Total" id="Total" readonly value="{{old('Total')}}"> 
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td data-label="Desc">
                                                <div class="input_box" id="Text_area" >
                                                    <textarea class="form_control" rows="2"  id="Item_description" name="Item_description" placeholder="Type description...">{{old('Item_description',$template->Actions)}}</textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!-- Button -->
                                                <div class="input_box" id="form_buttn">
                                                    <input class="button" type="submit" value="Save Estimate">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <td><div class="input_box" id="Input_box" style="display:none;">
                                <input type="text" class="form_control" id="Status" name="Status" value="0">
                            </div></td>
                            </div>


                        </div>
                        
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = focus;
        var textarea = document.querySelector('textarea');
        textarea.addEventListener('focus', autosize);

        function focus(){
            textarea.focus();
        }

        function autosize(){
                var el = this;
                setTimeout(function(){
                    el.style.cssText = 'height:auto; padding:0';
                    el.style.cssText = 'height:' + el.scrollHeight + 'px';
                },0);
            }
    </script>

@endsection
