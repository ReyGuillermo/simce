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
                    
                    <div id="step-1">                
                {!! Form::open(['route' => 'Solicitud.store','class'=>'form-horizontal']) !!}

                    @include('admin.Solicitud.partes.form')

                {!! Form::close() !!} 
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

