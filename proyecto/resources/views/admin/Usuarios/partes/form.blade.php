<?php
	$TNom=null;$TDes=null;
	if(isset($Doc))
	{
		$TNom=$Doc->NomTip;
		$TDes=$Doc->DesTip;
	}	
?>
<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre *</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
		{!! Form::text('Name',$TNom,['class'=>'form-control','placeholder'=>'Tipo de Documento','required','pattern'=>'.{3,75}','title'=>'Debe digitar el Tipo de Documento']) !!}
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Descripción</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
		{!! Form::textarea('DesTip',$TDes,['class'=>'form-control','rows'=>'2','placeholder'=>'Escriba aquí la descripción del tipo de documento','data-val'=>'true','data-val-required'=>'Debe ingresar una descripción.','style'=>'resize:none']) !!}
	</div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-5 col-sm-12 col-xs-12 col-md-offset-4">	
	{!! Form::reset('Reset', ['class'=>'btn btn-primary']) !!}
	{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
  </div>
</div>