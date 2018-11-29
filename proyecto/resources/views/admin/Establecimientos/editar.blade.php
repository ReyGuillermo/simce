@extends('layouts.layout')

@section('estilos')
    
@stop

@section('contenido')   
<br> 
<div class="col-md-12 col-xs-12">       
    <div class="x_panel">
        <div class="x_title">
            <div class="col-md-8 col-sm-8 col-xs-8">
                <h2>Modificar Establecimiento</h2>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4"> 
                <a class="btn btn-primary btn-sm pull-right" href="{{ route('Establecimiento.index')}}"><i class="fa fa-th-list"></i>Mis Establecimientos</a>                
                <br><br>
            </div>  
            <div class="clearfix"></div> 
                                       
            <div class="x_content">
                <br>
                <div class="col-md-6 col-xs-12">
                    {!! Form::open(['route' => ['Establecimiento.update',$Res->IdSuc],'method'=>'PUT','class'=>'form-horizontal']) !!}

                        @include('admin.Establecimientos.partes.form')

                    {!! Form::close() !!}    
                </div>         
            </div>
        </div>         
    </div>
</div>
<div class="col-md-5 col-xs-12">
    @include('admin.Establecimientos.partes.error')
    @include('admin.Establecimientos.partes.info')
</div>
@stop
