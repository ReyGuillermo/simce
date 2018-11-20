<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TsoliCRequest;
use App\Http\Requests\TsoliURequest;
use App\Dsolicitantes;
class TsoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tso=Dsolicitantes::all();
        return view('admin.Tsolicitantes.index',compact('Tso'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Tsolicitantes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TsoliCRequest $request)
    {
        $TId=new Dsolicitantes;
        $TId->NomTso=$request->NomTso;
        $TId->DesTso=$request->DesTso;        
        $TId->save();
        return redirect()->route('Solicita.index')->with('info','El Tipo de Solicitante fué Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Tso=Dsolicitantes::find($id);
        return view('admin.Tsolicitantes.editar',compact('Tso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TsoliURequest $request, $id)
    {
        $TId=Dsolicitantes::find($id);       
        $TId->NomTso=$request->NomTso;
        $TId->DesTso=$request->DesTso;        
        $TId->save();
        return redirect()->route('Solicita.index')->with('info','El Tipo de Solicitante fué Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
