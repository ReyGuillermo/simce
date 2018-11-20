<?php
	$TNom=null;$TDes=null;
	if(isset($Tso))
	{
		$TNom=$Tso->NomTso;
		$TDes=$Tso->DesTso;
	}	
?>
<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Solicitante *</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
		{!! Form::text('NomTso',$TNom,['class'=>'form-control','placeholder'=>'Tipo de Solicitante','required','pattern'=>'.{7,75}','title'=>'Debe digitar el Tipo de Solicitante']) !!}
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Descripción</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
		{!! Form::textarea('DesTso',$TDes,['class'=>'form-control','rows'=>'2','placeholder'=>'Escriba aquí la descripción del tipo de solicitante','data-val'=>'true','data-val-required'=>'Debe ingresar una descripción.','style'=>'resize:none']) !!}
	</div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-5 col-sm-12 col-xs-12 col-md-offset-4">	
	{!! Form::reset('Reset', ['class'=>'btn btn-primary']) !!}
	{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
  </div>
</div>