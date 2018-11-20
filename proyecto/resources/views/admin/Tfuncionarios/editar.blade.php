@extends('layouts.layout')

@section('estilos')
    
@stop

@section('contenido')  
<br> 
    <div class="row">
        <div class="col-md-7 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    Modificar Tipo de Funcionario <a href="{{route('Tfuncion.index')}}" class="btn btn-primary  btn-sm pull-right">Ver Listado</a><br><br>
                </div>
                <div class="clearfix"></div>
                <div class="x_content">
                    {!! Form::open(['route' => ['Tfuncion.update',$Tfu->IdTfu],'method'=>'PUT','class'=>'form-horizontal']) !!}

                        @include('admin.Tfuncionarios.partes.form')

                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
        <div class="col-md-5 col-xs-12">
            @include('admin.Tfuncionarios.partes.error')
            @include('admin.Tfuncionarios.partes.info')
        </div> 
    </div>
@stop
