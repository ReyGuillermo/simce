@extends('layouts.layout')

@section('estilos')
    
@stop

@section('contenido')  
<br> 
<div class="col-md-7 col-xs-12">       
    <div class="x_panel">
        <div class="x_title">
            <div class="col-md-8 col-sm-8 col-xs-8">
                <h2><small>Agregar Tipo de Solicitante</small></h2>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4"> 
                <a class="btn btn-primary btn-sm pull-right" href="{{ route('Solicita.index')}}"><i class="fa fa-th-list"></i> Ver Listado</a>                
                <br><br>
            </div>  
            <div class="clearfix"></div> 
                                       
            <div class="x_content">
                <br>
                {!! Form::open(['route' => 'Solicita.store','class'=>'form-horizontal']) !!}

                    @include('admin.Tsolicitantes.partes.form')

                {!! Form::close() !!}           
            </div>
        </div>         
    </div>
</div>
<div class="col-md-5 col-xs-12">
        @include('admin.Tsolicitantes.partes.error')
        @include('admin.Tsolicitantes.partes.info')
</div>
@stop



