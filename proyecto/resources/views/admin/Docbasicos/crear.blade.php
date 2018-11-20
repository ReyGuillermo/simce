@extends('layouts.layout')

@section('estilos')
    
@stop

@section('contenido') 
<br>  
    <div class="row">
        <div class="col-md-7 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    Agregar Tipo de Documento por Solicitante <a href="{{route('Documentos.index')}}" class="btn btn-primary  btn-sm pull-right">Ver Listado</a><br><br>
                </div>
                <div class="clearfix"></div>
                <div class="x_content">
                    {!! Form::open(['route' => 'Documentos.store','class'=>'form-horizontal']) !!}

                        @include('admin.Docbasicos.partes.form')

                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
        <div class="col-md-5 col-xs-12">
            @include('admin.Docbasicos.partes.error')
            @include('admin.Docbasicos.partes.info')
        </div> 
    </div>    

@stop



