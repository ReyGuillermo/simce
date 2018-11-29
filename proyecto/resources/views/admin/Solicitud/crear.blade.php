@extends('layouts.layout')

@section('estilos')
    <!-- NProgress -->
    <link href="{{ asset ('plantilla/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
@stop

@section('contenido') 
<br>  
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <strong>Información de la Solicitud</strong>
                </div>
                <div class="x_content">

                    <!-- Smart Wizard -->
                    <p>Debe completar el formualrio para crear la solicitud (Paso 1).</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
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
                                @if($Ban>0)
                                    <a href="{{ route('Solicitud.edit',$Res->IdSuc) }}" class="btn btn-success">Crear Solicitud</a>
                                @endif
                            </div>
                            
                                
                        </div>
                           
                      
                    <div class="col-md-6 col-xs-12">
                        <div class="well" style="overflow: auto">               
                            {!! Form::open(['route' => 'Solicitud.store','class'=>'form-horizontal']) !!}

                                @include('admin.Solicitud.partes.form')

                            {!! Form::close() !!} 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-xs-12">
            @include('admin.Solicitud.partes.error')
            @include('admin.Solicitud.partes.info')
        </div> 
    </div> 
@stop

@section('scriptsadd')
  

@stop

