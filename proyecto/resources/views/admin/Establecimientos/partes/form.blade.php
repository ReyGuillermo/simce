<?php
	$TNom=null;$TDir=null;$TCiu=null;$TTso=null;$TPer=null;
	if(isset($Res))
	{
		$TNom=$Doc->NomTip;
		$TDes=$Doc->DesTip;
	}	
?>
<div class="well" style="overflow: auto">		
<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Matricula Inm.</label>
	<div class="col-md-6 col-sm-9 col-xs-12">
		{!! Form::text('MaiSuc',$TNom,['class'=>'form-control','placeholder'=>'Número de Matricula','required','pattern'=>'[0-9]{5,10}','title'=>'Debe digitar el Número de Matricula Inm.']) !!}
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-2 col-sm-3 col-xs-12">Nombre</label>
	<div class="col-md-10 col-sm-9 col-xs-12">
		{!! Form::text('NomEst',$TNom,['class'=>'form-control','placeholder'=>'Nombre','required','pattern'=>'.{3,125}','title'=>'Debe digitar el Nombre del Establecimiento']) !!}
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-2 col-sm-3 col-xs-12">Dirección</label>
	<div class="col-md-10 col-sm-9 col-xs-12">
		{!! Form::text('DirEst',$TDir,['class'=>'form-control','rows'=>'2','placeholder'=>'Dirección','data-val'=>'true','data-val-required'=>'Debe digitar la dirección.']) !!}
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-2 col-sm-3 col-xs-12">Ciudad</label>
	<div class="col-md-7 col-sm-9 col-xs-12">
		{!! Form::select('IdCiuEst',$Ciu,$TCiu,['class'=>'form-control','required','placeholder' => 'Seleccione la Ciudad']) !!}
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-4 col-sm-3 col-xs-12">T. Establecimiento</label>
	<div class="col-md-8 col-sm-9 col-xs-12">
		{!! Form::select('IdTipSuc',$Tso,$TTso,['class'=>'form-control','required','placeholder' => 'Seleccione un tipo de establecimiento']) !!}
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-4 col-sm-3 col-xs-12">Rep. Legal</label>
	<div class="col-md-8 col-sm-9 col-xs-12">
		{!! Form::select('IdPerSuc',$Per,$TPer,['class'=>'form-control','required','placeholder' => 'Seleccione el Representante Legal']) !!}
	</div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-5 col-sm-12 col-xs-12 col-md-offset-4">	
	{!! Form::reset('Reset', ['class'=>'btn btn-primary']) !!}
	{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
  </div>
</div>
</div>