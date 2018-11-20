@extends('layouts.layout')

@section('estilos')
    <!-- DataTables -->
    <link href="{{ asset('plantilla/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('plantilla/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">    
    <link href="{{ asset('plantilla/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('plantilla/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
    <script type="text/javascript" class="init">
        $(document).ready(function() {
            $('#datatable-responsive').DataTable( {
                "language": {
                    "decimal": ",",
                    "thousands": ".",
                    "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "infoPostFix": "",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "loadingRecords": "Cargando...",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "searchPlaceholder": "Término de búsqueda",
                    "zeroRecords": "No se encontraron resultados",
                    "emptyTable": "Ningún dato disponible en esta tabla",                    
                }
            } );
        } );
    </script>
@stop

@section('contenido')       
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="btn-group" role="group" aria-label="Button group">
            <br>
            @include('admin.Documentos.partes.error')
            @include('admin.Documentos.partes.info')
        </div>
        <div class="x_panel">
            <div class="x_title">
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h2><small>Listado de Tipos de Solicitantes</small></h2>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4"> 
                    <a class="btn btn-success btn-sm" href="{{ route('Solicita.create') }}"><i class="fa fa-plus"></i> Agregar</a>
                    <a class="btn btn-info btn-sm" href="#"><i class="fa fa-download"></i> Descargar PDF</a>
                </div>                              
                <div class="clearfix"></div>
            </div>
            <div class="x_content">            
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                        <th>Tipo Solicitante</th>
                        <th>Descripción</th>                        
                        <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Tso as $tso)
                            <tr>                                
                                <td>{{ $tso->NomTso}}</td>
                                <td>{{ $tso->DesTso}}</td>                                
                                <td> <a class="btn btn-primary btn-xs" href="{{ route('Solicita.edit',$tso->IdTso) }}"><i class="fa fa-edit "></i></a></td>                                                        
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