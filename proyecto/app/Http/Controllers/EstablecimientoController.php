<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dciudad;
use App\Spersonas;
use App\Sestablecimiento;
use App\Dsolicitantes;
use Illuminate\Support\Facades\Auth;
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
        $Tso=Dsolicitantes::pluck('NomTso','IdTso');       
        return view('admin.Establecimientos.crear')->with(['Per'=>$Per,'Ciu'=>$Ciu,'Tso'=>$Tso]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
