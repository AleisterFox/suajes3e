<?php

namespace App\Http\Controllers;

use App\Models\HulesInventory;
use Illuminate\Http\Request;

class HulesInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view ('inventories.hules_index',[
            'hules' => HulesInventory::all(),
            'id' => $id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('inventories.hules_create',[
            'id'=>$id
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
            'Codigo_interno' => 'required',
            'Nombre_articulo' => 'required'
        ]);

        $hules = new HulesInventory();
        $hules->Codigo_interno = $validData['Codigo_interno'];
        $hules->Nombre_articulo = $validData['Nombre_articulo'];
        $hules->save();
        return redirect('/inventories/1/Hules');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HulesInventory  $hulesInventory
     * @return \Illuminate\Http\Response
     */
    public function show(HulesInventory $hulesInventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HulesInventory  $hulesInventory
     * @return \Illuminate\Http\Response
     */
    public function edit(HulesInventory $hulesInventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HulesInventory  $hulesInventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HulesInventory $hulesInventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HulesInventory  $hulesInventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(HulesInventory $hulesInventory)
    {
        //
    }
}
