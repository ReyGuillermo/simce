@extends('layouts.layout')

@section('estilos')
    <!-- DataTables -->
    <link href="{{ asset('plantilla/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('plantilla/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">    
    <link href="{{ asset('plantilla/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('plantilla/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">    
    <script type="text/javascript" class="init">
      $(document).ready(function() {
    $('#datatable-responsive').dataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },        
    } );
} );
    </script>
@stop

@section('contenido')      
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="btn-group" role="group" aria-label="Button group">
            <br>
            @include('admin.Establecimientos.partes.error')
            @include('admin.Establecimientos.partes.info')
        </div>        
        <p class="text-muted well well-xs no-shadow bg-purple" style="margin-top: 10px;">
            <i class="fa fa-bell"></i> Puede radicar solicitudes a partir de los establecimientos creados, tenga en cuenta que los datos del establecimiento deben coincidir con el <strong>Registro Mercantil</strong> Actualizado.
        </p>
        <div class="x_panel">
            <div class="x_title">
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h2>Mis Establecimientos</h2>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4"> 
                    <a class="btn btn-success btn-sm pull-right" href="{{ route('Establecimiento.create') }}" alt="Crear Establecimiento"><i class="fa fa-plus"></i> Agregar</a>                    
                </div>                              
                <div class="clearfix"></div>
            </div>
            <div class="x_content">            
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                        <th>Mat.</th>
                        <th>Nombre</th>
                        <th>Dirección</th> 
                        <th>Tipo</th>                       
                        <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Res as $tem)
                            <tr>                                
                                <td>{{ $tem->MaiSuc}}</td>
                                <td>{{ $tem->NomEst}}</td>  
                                <td>{{ $tem->DirEst}}</td>  
                                <td>
                                    @foreach($Tso as $tem1)
                                        @if($tem->IdTipSuc == $tem1->IdTso)
                                            {{ $tem1->NomTso}}
                                        @endif  
                                    @endforeach
                                </td>                            
                                <td> 
                                    <a class="btn btn-primary btn-xs" href="{{ route('Establecimiento.edit',$tem->IdSuc) }}"><i class="fa fa-edit "></i></a> 
                                    <a class="btn btn-round btn-success btn-xs" href="{{ route('Solicitud.create',$tem->IdSuc) }}"><i class="fa fa-plus "></i> Crear Solicitud</a>                                    
                                </td>                                                        
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   

@stop

@section('scripts')
    <!-- Datatables -->
    <script src="{{ asset('plantilla/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('plantilla/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>    
    <script src="{{ asset('plantilla/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('plantilla/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{ asset('plantilla/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
@stop

@section('scriptsadd')    
    
@stop