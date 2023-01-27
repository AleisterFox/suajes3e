@extends('layouts.panel')

@section('title','New Invoice Template')

@section('brand')
<a class="h1 mb-0 text-white text-uppercase d-none d-lg-inline-block">New Invoice Template</a>
@endsection

@section('content')
    
    <div class="mt-8">
        <div class="body">
            <div class="butn cancel_butn">
                <ul>
                    <li>
                        <a href="/invoices/templates">
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
            <div class="container" id="container">
                <div class="estimate" id="estimate">
                
                    <form action="/invoices/templates" method="POST">
                        @csrf
                        
                        <div class="estimate_details">
                            
                            <!-- Table -->
                            <div class="tb" id="tbl">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Template Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-label="Item">
                                                <!-- Item and description -->
                                                <div class="input_box" id="Input_box"> 
                                                    <input class="form_control" type="text" id="Name" name="Name" value="{{old('Name')}}">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td data-label="Desc">
                                                <div class="input_box" id="Text_area" >
                                                    <textarea class="form_control" rows="2"  id="Actions" name="Actions" placeholder="Type description..." value="{{old('Item_description')}}"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!-- Button -->
                                                <div class="input_box" id="form_buttn">
                                                    <input class="button" type="submit" value="Save Template">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
