<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TfunCRequest;
use App\Http\Requests\TfunURequest;
use App\Dfuncionarios;

class TfuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tfu=Dfuncionarios::all();        
        return view('admin.Tfuncionarios.index',compact('Tfu'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Tfuncionarios.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TfunCRequest $request)
    {
        $TId=new Dfuncionarios;
        $TId->TipTfu=$request->TipTfu;
        $TId->DesTfu=$request->DesTfu;        
        $TId->save();
        return redirect()->route('Tfuncion.index')->with('info','El Tipo de Funcionario fué Creado');
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
        $Tfu=Dfuncionarios::find($id);  
        return view('admin.Tfuncionarios.editar',compact('Tfu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TfunURequest $request, $id)
    {
        $TId=Dfuncionarios::find($id);       
        $TId->TipTfu=$request->TipTfu;
        $TId->DesTfu=$request->DesTfu;       
        $TId->save();
        return redirect()->route('Tfuncion.index')->with('info','El Tipo de Funcionario fué Actualizado');
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
