@extends('layouts.layout')

@section('estilos')
    
@stop

@section('contenido')   
    <div class="row">
        <div class="col-md-7 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    Agregar Tipo de Documento de Identificación <a href="{{route('Identidad.index')}}" class="btn btn-primary  btn-sm pull-right">Ver Listado</a><br><br>
                </div>
                <div class="clearfix"></div>
                <div class="x_content">
                    {!! Form::open(['route' => 'Identidad.store','class'=>'form-horizontal']) !!}

                        @include('admin.Identificacion.partes.form')

                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
        <div class="col-md-5 col-xs-12">
            @include('admin.Identificacion.partes.error')
            @include('admin.Identificacion.partes.info')
        </div> 
    </div>    

@stop



