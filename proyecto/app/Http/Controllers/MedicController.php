<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MedicCRequest;
use App\Http\Requests\MedicURequest;
use App\Smedicamentos;

class MedicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Med=Smedicamentos::all();
        return view('admin.Medicamentos.index',compact('Med'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Medicamentos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicCRequest $request)
    {
        $TId=new Smedicamentos;
        $TId->TisMed=$request->TisMed;
        $TId->NumMed=$request->NumMed;
        $TId->DciMed=$request->DciMed;
        $TId->ConMed=$request->ConMed;
        $TId->ForMed=$request->ForMed;
        $TId->ClaMed=$request->ClaMed;
        $TId->UsoMed=$request->UsoMed;        
        $TId->save();
        return redirect()->route('Medicamentos.index')->with('info','El Medicamento fué Creado'); 
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
        $Med=Smedicamentos::find($id);
        return view('admin.Medicamentos.editar',compact('Med'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(USisproRequest $request, $id)
    {
        /*$TId=MProductos::find($id);       
        $TId->NomPrd=$request->NomPrd;
        $TId->AplPrd=$request->AplPrd;        
        $TId->save();
        return redirect()->route('sispro.index')->with('info','El Sistema de Producción fué Actualizado');*/
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
