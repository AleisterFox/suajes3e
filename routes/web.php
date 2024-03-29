<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* TEMPLATES */
Route::resource('/invoices/templates',\App\Http\Controllers\InvoiceTemplateController::class)-> middleware('auth');


Route::get('/home', function () {
    return view('home');
})-> middleware('auth');

Route::get('/', function() {
    return view('main');
});

/* CUSTOMERS */
Route::resource('/customers', \App\Http\Controllers\CustomerController::class) -> middleware('auth');
Route::get('/customers/{ids}/machines/select', 
[\App\Http\Controllers\MachineController::class, 'select']);
Route::get('/customers/{ids}/machines/create/{type}', 
[\App\Http\Controllers\MachineController::class, 'create']);
Route::resource('customers.machines', \App\Http\Controllers\MachineController::class) -> middleware('auth');
Route::get('/customers/{id}/machines/{ids}/edit', 
[\App\Http\Controllers\MachineController::class, 'edit']);
Route::get('/customers/{id}/confirmDelete',
[\App\Http\Controllers\CustomerController::class, 'confirmDelete']);
Route::get('/customers/{id}/machines/{ids}/confirmDelete',
[\App\Http\Controllers\MachineController::class, 'confirmDelete']);


/* ESTIMATES */
Route::resource('/estimates', \App\Http\Controllers\EstimateController::class)-> middleware('auth');
Route::resource('customer.estimates',\App\Http\Controllers\EstimateClientController::class)-> middleware('auth');
Route::get('/customer/{customer}/estimates/{estimate}',
[\App\Http\Controllers\ShowEstimateController::class, 'show']);
Route::get('/customer/{id}/estimates/{ids}/confirmDelete',
[\App\Http\Controllers\EstimateClientController::class, 'confirmDelete']);
Route::get('/customer/{id}/estimates/{ids}/send', 
[\App\Http\Controllers\EstimateClientController::class, 'send']);
Route::post('/customer/{id}/estimates/{ids}',
[\App\Http\Controllers\EstimateClientController::class, 'sendMail']);

/* PRODUCTIONS */
Route::resource('/productions', \App\Http\Controllers\ProductionsController::class)-> middleware('auth');
Route::get('/productions/create/select',
[\App\Http\Controllers\ProductionsController::class, 'select']);

Route::get('/productions/create/{type}', 
[\App\Http\Controllers\ProductionsController::class, 'create']);

Route::get('/productions/template/create',
[\App\Http\Controllers\ProductionsController::class, 'template']);
Route::post('/productions/template/store', 
[\App\Http\Livewire\ProductionOrder::class, 'store']);

Route::get('/productions/{id}/confirmDelete',
[\App\Http\Controllers\ProductionsController::class, 'confirmDelete']);

/* Inventories */
Route::resource('/inventories',\App\Http\Controllers\InventoryMainController::class)-> middleware('auth');
Route::resource('inventories.Hules', \App\Http\Controllers\HulesInventoryController::class)-> middleware('auth');
Route::get('/inventories/1/Hules/{id}/confirmDelete',
[\App\Http\Controllers\HulesInventoryController::class, 'confirmDelete']);
Route::resource('inventories.Plecas', \App\Http\Controllers\PlecasInventoryController::class)-> middleware('auth');
Route::get('/inventories/2/Plecas/{id}/confirmDelete',
[\App\Http\Controllers\PlecasInventoryController::class, 'confirmDelete']);



/* PAYMENTS */
Route::resource('/payments', \App\Http\Controllers\PaymentsController::class)-> middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
