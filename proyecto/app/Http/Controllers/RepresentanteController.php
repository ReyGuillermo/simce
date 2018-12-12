<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spersonas;
use App\Stemprep;
use App\Http\Requests\RepresRequest;
use Illuminate\Support\Facades\Auth;
class RepresentanteController extends Controller
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
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RepresRequest $request)
    {
        return $request;
        $TRep=Spersonas::where('NuiPer',$request->NuiPer)->first();  
        $IdUsu = Auth::id();      
        if(empty($TRep))
        {
            $TId=new Spersonas;
            $TId->PnoPer=$request->PnoPer; $TId->SnoPer=$request->SnoPer;
            $TId->PapPer=$request->PapPer; $TId->SapPer=$request->SapPer;
            $TId->NuiPer=$request->NuiPer; $TId->TelPer=$request->TelPer;
            $TId->EmaPer=$request->EmaPer; 
            $TId->save();            
            $TRe=new Stemprep;
            $TRe->IdPerRep=$TId->IdPer;
            $TRe->IdUsuRep=$IdUsu;
            $TRe->save();
            return redirect()->action('SolicitudController@create',$request->id)->with('info','El Representante fué creado');
        }
        else{            
            $TId=Spersonas::find($TRep->IdPer);
            $TId->TelPer=$request->TelPer;$TId->EmaPer=$request->EmaPer; 
            $TId->save();
            $TRea=Stemprep::where('IdUsuRep',$IdUsu)->orderby('FecRep','DESC')->first();
            if(empty($TRea))
            {
                $TRe=new Stemprep;
                $TRe->IdPerRep=$TId->IdPer;
                $TRe->IdUsuRep=$IdUsu;
                $TRe->save();
            }
            else
            {
                if($TRea->IdPerRep<>$TId->IdPer)
                {
                    $TRe=new Stemprep;
                    $TRe->IdPerRep=$TId->IdPer;
                    $TRe->IdUsuRep=$IdUsu;
                    $TRe->save();
                }
            }            
            return redirect()->action('SolicitudController@create',$request->id)->with('info','El Representante fué Modificado');
        }
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
