@extends('layouts.layout')

@section('estilos')
    
@stop

@section('contenido')   
    <div class="row">
        <div class="col-md-7 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    Modificar Tipo de Documento <a href="{{route('Documento.index')}}" class="btn btn-primary  btn-sm pull-right">Ver Listado</a><br><br>
                </div>
                <div class="clearfix"></div>
                <div class="x_content">
                    {!! Form::open(['route' => ['Documento.update',$Doc->IdTip],'method'=>'PUT','class'=>'form-horizontal']) !!}

                        @include('admin.Documentos.partes.form')

                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
        <div class="col-md-5 col-xs-12">
            @include('admin.Documentos.partes.error')
            @include('admin.Documentos.partes.info')
        </div> 
    </div>
@stop
