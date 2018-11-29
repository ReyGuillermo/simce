<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dciudad;
use App\Spersonas;
use App\Sestablecimiento;
use App\Dsolicitantes;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EstabCRequest;
use App\Http\Requests\EstabURequest;

class EstablecimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $IdUsu = Auth::id();
        $Tso=Dsolicitantes::get();       
        $Res=Sestablecimiento::with('RSuc_Ciu')->where('IdUsuSuc',$IdUsu)->get();
        return view('admin.Establecimientos.index')->with(['Res'=>$Res,'Tso'=>$Tso]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Per=Spersonas::pluck('NuiPer','IdPer');
        $Ciu=Dciudad::pluck('NomCiu','IdCiu'); 
        $Tso=Dsolicitantes::where('IdTso','>',2)->pluck('NomTso','IdTso');       
        return view('admin.Establecimientos.crear')->with(['Per'=>$Per,'Ciu'=>$Ciu,'Tso'=>$Tso]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstabCRequest $request)
    {
        $IdUsu = Auth::id();
        $TId=new Sestablecimiento;
        $TId->IdUsuSuc=$IdUsu;
        $TId->DirEst=$request->DirEst;   
        $TId->IdCiuEst=$request->IdCiuEst;
        $TId->NomEst=$request->NomEst;
        $TId->IdTipSuc=$request->IdTipSuc;
        $TId->MaiSuc=$request->MaiSuc;     
        $TId->save();
        return redirect()->route('Establecimiento.index')->with('info','El Establecimiento fué Creado');

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
        $Per=Spersonas::pluck('NuiPer','IdPer');
        $Ciu=Dciudad::pluck('NomCiu','IdCiu'); 
        $Tso=Dsolicitantes::where('IdTso','>',2)->pluck('NomTso','IdTso');    
        $Res=Sestablecimiento::find($id); 
        return view('admin.Establecimientos.editar')->with(['Res'=>$Res,'Per'=>$Per,'Ciu'=>$Ciu,'Tso'=>$Tso]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EstabURequest $request, $id)
    {
        $TId=Sestablecimiento::find($id);
        $TId->DirEst=$request->DirEst;   
        $TId->IdCiuEst=$request->IdCiuEst;
        $TId->NomEst=$request->NomEst;
        $TId->IdTipSuc=$request->IdTipSuc;
        $TId->MaiSuc=$request->MaiSuc;     
        $TId->save();
        return redirect()->route('Establecimiento.index')->with('info','El Esablecimiento fué Actualizado');
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
