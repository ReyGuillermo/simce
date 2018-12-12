@extends('layouts.layout')

@section('estilos')
    <!-- NProgress -->
    <link href="{{ asset ('plantilla/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
@stop

@section('contenido') 
<br>  
    <div class="row">
        <div class="col-md-5 col-xs-12">
            @include('admin.Solicitud.partes.error')
            @include('admin.Solicitud.partes.info')
        </div> 
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h2>Información de la Solicitud</h2>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4"> 
                    <a class="btn btn-primary btn-sm pull-right" href="{{ route('Establecimiento.index')}}"><i class="fa fa-th-list"></i> Mis Establecimientos</a>                
                    <br><br>
                </div>  
                <div class="clearfix"></div>  
                <div class="x_content">

                    <!-- Smart Wizard -->
                    <p>Debe completar el formualrio para crear la solicitud (Paso 1).</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                Paso 1<br />
                                <small>Paso 1 Datos del establecimiento</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                Paso 2<br />
                                <small>Paso 2 Anexar Documentación</small>
                            </span>
                          </a>
                        </li>                        
                      </ul>
                      <div class="col-md-6 col-xs-12">
                            <div class="well" style="overflow: auto"> 
                                <h2>Datos del Solicitante <small>Datos del solicitante</small></h2>                        
                                <div class="clearfix"></div>
                                <div class="x_content">
                                    <h4><strong>Datos del Representante Legal</strong></h4>
                                    @if($Ban>0)
                                       <div class="alert alert-info">
                                            <strong>Nombre: </strong> {{ $Rep->RRep_Per->PnoPer }} {{ $Rep->RRep_Per->SnoPer }} {{ $Rep->RRep_Per->PapPer }} {{ $Rep->RRep_Per->SapPer }}<br>
                                            <strong>Identificación: </strong> {{ $Rep->RRep_Per->NuiPer }}<br>
                                            <strong>Email: </strong> {{ $Rep->RRep_Per->EmaPer }}<br>
                                            <strong>Teléfono: </strong> {{ $Rep->RRep_Per->TelPer }}
                                        </div>  
                                        <p><i>Si desea crear o cambiar el representante legal, por favor complete el formulario correspondiente</i></p>                                  
                                    @else
                                        <div class="alert alert-danger fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="danger" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button>
                                            <strong>¡No existe Reprentante Legal!</strong><p> El sistema no registra un Representante Legal, si desea puede registralo en el formulario correspondiente.</p>
                                        </div>
                                    @endif
                                    <h4><strong>Datos del Establecimiento</strong></h4>
                                    <h5><strong>Nombre:</strong> {{ $Res->NomEst }}</h5>
                                    <h5><strong>Dirección:</strong> {{ $Res->DirEst }}</h5>
                                    <h5><strong>Ciudad:</strong> {{ $Res->RSuc_Ciu->NomCiu }}</h5>
                                    <h5><strong>Mat. Inm:</strong> {{ $Res->MaiSuc }}</h5>
                                    <h5><strong>Tipo:</strong> 
                                        @foreach ($Tso as $tem)
                                            @if($tem->IdTso == $Res->IdTipSuc)
                                                {{ $tem->NomTso }}
                                            @endif
                                        @endforeach                                        
                                    </h5>                                                                   
                                </div>
                            </div>
                        </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="well" style="overflow: auto">               
                            {!! Form::open(['route' => 'Representante.store','class'=>'form-horizontal']) !!}

                                @include('admin.Representante.partes.form')

                            {!! Form::close() !!} 
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div class="well" style="overflow: auto">               
                            <h4><strong>Documentación Requerida para estos establecimientos:</strong></h4>
                                <ul class="to_do">                                        
                                @foreach ($Dos as $tem)
                                    <li>
                                        <p><strong>{{ $tem->RDos_Doc->NomTip }}</strong><br>{{ $tem->RDos_Doc->DesTip }}</p>
                                    </li>                                       
                                @endforeach
                                </ul>
                             
                            @if($Ban>0)
                                {!! Form::open(['route' => 'Solicitud.store','class'=>'form-horizontal']) !!}

                                    @include('admin.Solicitud.partes.form')

                                {!! Form::close() !!}                                     
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div> 
@stop

@section('scriptsadd')
  

@stop

