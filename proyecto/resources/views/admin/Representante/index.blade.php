@extends('layouts.layout')

@section('estilos')
    
    
@stop

@section('contenido')
<br><br>     
    <div class="col-md-12 col-sm-12 col-xs-12">            
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-align-left"></i> Descripción <small>Información tener en cuenta antes de iniciar la solicitud</small></h2> 
                <div class="clearfix"></div>
            </div>
            <p>Obtener autorización para realizar cualquier actividad con medicamentos de control especial de uso humano o veterinario, los cuales son utilizados para la prevención, diagnóstico, tratamiento, curación o rehabilitación de las enfermedades, y que cumplan con las normas establecidas por el Ministerio de la Protección Social y el Fondo Nacional de Estupefacientes - UAE.</p>
            <strong>Reunir los documentos (Extensiones permitidas: .doc, .tif, .jpg, .gif, .pdf, .docx) y cumplir con las condiciones necesarias para realizar el trámite.</strong>
            <div class="x_content">
                <!-- start accordion -->
                <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php $a=1;?>
                    @foreach($Doc as $doc)                
                        <div class="panel">
                            <a class="panel-heading" role="tab" id="heading{{ $a }}" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $a }}" aria-expanded="false" aria-controls="collapse{{ $a }}">
                                <h4 class="panel-title">{{ $doc->NomTso}}</h4>
                            </a>
                            <div id="collapse{{ $a }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $a }}">
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                            <th>Requisito</th>
                                            <th>Descripción</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $b=1;?>
                                            @foreach ($doc->RDocumentos as $temp) 
                                                <tr><th scope="row">{{ $b }}</th>
                                                    <td>{{ $temp->NomTip }}</td>
                                                    <td>{{ $temp->DesTip }}</td>
                                                </tr>
                                                <?php $b++;?>                                                                                               
                                            @endforeach 
                                        </tbody>
                                    </table>                                                                    
                                </div>
                            </div>
                        </div>
                        <?php $a++;?>
                    @endforeach                
                </div>
                <!-- end of accordion -->
            </div>
            <div class="clearfix"></div>
            <div class="text-center">           
                <a class="btn btn-primary btn-lg" href="{{ route('Solicitud.create') }}"><i class="fa fa-plus"></i> Iniciar solicitud</a>
            </div>
        </div>        
    </div>    
@stop

@section('scripts')
    
@stop

@section('scriptsadd')    
    
@stop