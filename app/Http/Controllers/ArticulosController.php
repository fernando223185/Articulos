<?php

namespace App\Http\Controllers;

use App\Models\_articulos;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = _articulos::all();
        return view('welcome',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ArtNew');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $art = new _articulos();
        $art->Name = $request->post('Name');
        $art->Price = $request->post('Price');
        $art->Estatus = $request->post('Estatus');
        $art->Stock = $request->post('Stock');
        $art->save();

        return redirect()->route("articulos.index")->with("succes","Agregagdo con exito");

    }

    /**
     * Display the specified resource.
     */
    public function show(_articulos $_articulos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $art= _articulos::find($id);
        return view('ArtUpdt',compact('art'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $art= _articulos::find($id);
        $art->Name = $request->post('Name');
        $art->Price = $request->post('Price');
        $art->Estatus = $request->post('Estatus');
        $art->Stock = $request->post('Stock');
        $art->save();

        return redirect()->route("articulos.index")->with("succes","Agregagdo con exito");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $art = _articulos::find($id);
        $art->delete();
        return redirect()->route("articulos.index")->with("success", "Eliminado con exito!");
    
    }
}
