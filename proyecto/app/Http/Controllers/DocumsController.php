<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DocumsCRequest;
use App\Http\Requests\DocumsURequest;
use App\Documentos;
use App\Docsolicitados;
use App\Dsolicitantes;

class DocumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
            SELECT ddsolicitados.*, dtsolicitante.NomTso, dtdocumento.NomTip
            FROM (ddsolicitados INNER JOIN dtsolicitante ON ddsolicitados.IdTsoDso = dtsolicitante.IdTso) 
            INNER JOIN dtdocumento ON ddsolicitados.IdTipDso = dtdocumento.IdTip;
        */        
        //return Docsolicitados::with('CDocumentos')->get();

        $Doc = \DB::table('ddsolicitados')
                ->join('dtsolicitante', 'IdTsoDso', '=', 'IdTso') 
                ->join('dtdocumento', 'IdTipDso', '=', 'IdTip')                
                ->select('ddsolicitados.IdDso','ddsolicitados.IdTipDso','ddsolicitados.IdTsoDso','ddsolicitados.EstDso','ddsolicitados.IdDso','dtsolicitante.NomTso', 'dtdocumento.NomTip')              
                ->orderBy('dtsolicitante.NomTso', 'ASC')
                ->get();
        return view('admin.Docbasicos.index',compact('Doc'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Tii = Documentos::pluck('NomTip','IdTip');
        $Tis = Dsolicitantes::pluck('NomTso','IdTso');
        return view('admin.Docbasicos.crear')->with(['Tii'=>$Tii,'Tis'=>$Tis]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumsCRequest $request)
    {
        $TId=new Docsolicitados;
        $TId->IdTipDso=$request->IdTipDso;
        $TId->IdTsoDso=$request->IdTsoDso;        
        $TId->EstDso=$request->EstDso;
        $TId->save();
        return redirect()->route('Documentos.index')->with('info','El Tipo de Documento fué Creado');
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
        return redirect()->route('Documentos.index')->with('info','El Tipo de Documento fué Actualizado');
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
