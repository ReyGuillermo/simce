<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\IdentCRequest;
use App\Http\Requests\IdentURequest;
use App\Didentificacion;

class IdentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ide=Didentificacion::all();
        return view('admin.Identificacion.index',compact('Ide'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Identificacion.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IdentCRequest $request)
    {
        $TId=new Didentificacion;
        $TId->NomTid=$request->NomTid;
        $TId->DesTid=$request->DesTid;        
        $TId->save();
        return redirect()->route('Identidad.index')->with('info','El Tipo de Identificación fué Creado');
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
        $Ide=Didentificacion::find($id);
        return view('admin.Identificacion.editar',compact('Ide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IdentURequest $request, $id)
    {
        $TId=Didentificacion::find($id);       
        $TId->NomTid=$request->NomTid;
        $TId->DesTid=$request->DesTid;        
        $TId->save();
        return redirect()->route('Identidad.index')->with('info','El Tipo de Identidad fué Actualizado');
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
