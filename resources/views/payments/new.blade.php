@extends ('layouts.panel')

@section ('title', 'New Payment')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">New Payment</a>
@endsection

@section ('content')

    <div class="mt-8">

        <div class="body">
            <div class="butn cancel_butn">
                <ul>
                    <li>
                        <a href="/payments">
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
                <form action="/payments" method="POST">
                    @csrf 
                    <div class="estimate_details">
                        <div class="main_data">
                            <table>
                            <th><div class="input_box" id="Input_box">
                                    <select class="form-control" name="Name" id="Name" value="{{old('Name')}}">
                                        <option value='none'>Select Invoice</option>
                                        @foreach($invoices as $invoice)
                                            @if($invoice->Status == 0)
                                                <option value='{{$invoice->Number}}'>{{$invoice->Number}}</option> 
                                            @endif
                                        @endforeach
                                    </select>
                                </div></th>

                            <th><div class="input_box" id="Input_box">
                                <input type="date" class="form_control" id="Payment_Date" name="Payment_Date" value="{{old('Payment_Date')}}">
                            </div></th>

                            <th>
                                <!-- Button -->
                                <div class="input_box" id="form_buttn">
                                    <input class="button" type="submit" value="Register Pay">
                                </div>
                            </th>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection