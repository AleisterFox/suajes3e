<?php

namespace App\Http\Controllers;

use App\Models\PlecasInventory;
use Illuminate\Http\Request;

class PlecasInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view ('inventories.plecas_index',[
            'plecas' => PlecasInventory::all(),
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
        return view('inventories.plecas_create',[
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
            'Nombre' => 'required',
            'Descripcion' => 'required',
            'Tipo' => 'required',
            'Calibre' => 'required'
        ]);

        $plecas = new PlecasInventory();
        $plecas->Codigo_interno = $validData['Codigo_interno'];
        $plecas->Nombre = $validData['Nombre'];
        $plecas->Descripcion = $validData['Descripcion'];
        $plecas->Tipo = $validData['Tipo'];
        $plecas->Calibre = $validData['Calibre'];
        $plecas->save();
        return redirect('/inventories/2/Plecas');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlecasInventory  $plecasInventory
     * @return \Illuminate\Http\Response
     */
    public function show(PlecasInventory $plecasInventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlecasInventory  $plecasInventory
     * @return \Illuminate\Http\Response
     */
    public function edit(PlecasInventory $plecasInventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlecasInventory  $plecasInventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlecasInventory $plecasInventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlecasInventory  $plecasInventory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $url = "/inventories";
        $plca = PlecasInventory::findOrFail($id);
        $pleca->delete();
        return redirect($url);
    }

    public function confirmDelete($ids, $id)
    {
        $pleca = plecasInventory::findOrFail($id);
        return view('inventories.plecas_confirmDelete',[
            'pleca' => $pleca,
            'ids' => $ids,
            'id' => $id
        ]);
    }
}

