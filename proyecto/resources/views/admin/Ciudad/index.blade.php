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
<div class="row">

</div>
<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
              <h2>Mis Solicitudes <small>Solicitudes Realizadas </small></h2>              
              <div class="clearfix"></div>
            </div>
            <div class="x_content">            
              <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap jambo_table bulk_action" cellspacing="0" width="100%">
                <thead>
                  <tr><th class="text-center">No.</th><th>Fecha</th><th>Establecimiento</th><th>Estado</th><th>&nbsp;</th></tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>06-Jun-2018</td><td>Calle 23 No. 10-84 Yopal</td><td>Radicada</td><td>Ver</td></tr>

                </tbody>
              </table>
            </div>
          </div>
    </div>

    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
              <h2>Mis Establecimientos <small>Establecimientos/Sucursales </small></h2>              
              <div class="clearfix"></div>
            </div>
            <div class="x_content">            

              
            </div>
          </div>
    </div>
  </div>

@endsection

@section('scripts')
    <!-- Datatables -->
    <script src="{{ asset('plantilla/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('plantilla/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>    
    <script src="{{ asset('plantilla/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('plantilla/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{ asset('plantilla/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
@stop