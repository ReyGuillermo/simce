<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documentos;
use App\Docsolicitados;
use App\Dsolicitantes;
use App\Didentificacion;
use App\Dciudad;
use App\Stemprep;
use App\Sestablecimiento;
use Illuminate\Support\Facades\Auth;
class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inicio()
    {
        //redirecciona a la pantalla inicial
        return view('admin.Solicitud.index'); 
    }
    
     public function index()
    {
        //redirecciona a la pantalla inicial        
        /*$Doc = \DB::table('dtsolicitante')
        ->join('ddsolicitados', 'IdTsoDso', '=', 'IdTso')
        ->join('dtdocumento', 'IdTipDso', '=', 'IdTip')                         
        ->select('dtsolicitante.NomTso', 'dtsolicitante.DesTso', 'dtdocumento.NomTip', 'dtdocumento.DesTip')                      
        ->orderBy('dtsolicitante.NomTso', 'ASC')
        ->get();*/        
        $Doc=Dsolicitantes::with('RDocumentos')->get();        
        //return $Doc;
        return view('admin.Solicitud.index')->with(['Doc'=>$Doc]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $IdUsu = Auth::id();
        $Rep=Stemprep::with('RRep_Per')->where('IdUsuRep',$IdUsu)->orderby('FecRep','DESC')->first();
        if(empty($Rep))
        {
            $Ban=0;
        }
        else
        {
            $Ban=1;
        }
        $Res=Sestablecimiento::with('Rsuc_Ciu')->where('IdSuc',$id)->first();
        $Tso=Dsolicitantes::All();       
        return view('admin.Solicitud.crear')->with(['Ban'=>$Ban,'Res'=>$Res,'Tso'=>$Tso,'Rep'=>$Rep]);
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
