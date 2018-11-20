@extends('layouts.layout')

@section('estilos')
    
@stop

@section('contenido') 
<br>  
    <div class="row">
        <div class="col-md-7 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    Modificar Medicamento <a href="{{route('Medicamentos.index')}}" class="btn btn-primary  btn-sm pull-right">Ver Listado</a><br><br>
                </div>
                <div class="clearfix"></div>
                <div class="x_content">
                    {!! Form::open(['route' => ['Medicamentos.update',$Med->IdMed],'method'=>'PUT','class'=>'form-horizontal']) !!}

                        @include('admin.Medicamentos.partes.form')

                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
        <div class="col-md-5 col-xs-12">
            @include('admin.Medicamentos.partes.error')
            @include('admin.Medicamentos.partes.info')
        </div> 
    </div>
@stop


