<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DocumCRequest;
use App\Http\Requests\DocumURequest;
use App\Documentos;

class DocumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Doc=Documentos::all();        
        return view('admin.Documentos.index',compact('Doc'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Documentos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumCRequest $request)
    {
        $TId=new Documentos;
        $TId->NomTip=$request->NomTip;
        $TId->DesTip=$request->DesTip;        
        $TId->save();
        return redirect()->route('Documento.index')->with('info','El Tipo de Documento fué Creado');
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
        $Doc=Documentos::find($id);
        return view('admin.Documentos.editar',compact('Doc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocumURequest $request, $id)
    {
        $TId=Documentos::find($id);       
        $TId->NomTip=$request->NomTip;
        $TId->DesTip=$request->DesTip;        
        $TId->save();
        return redirect()->route('Documento.index')->with('info','El Tipo de Documento fué Actualizado');
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
