<?php
	$Tiiv='0';$Tsov='0';$TEst='0';
	if(isset($Doc))
	{
		$TNom=$Doc->NomTip;
		$TDes=$Doc->DesTip;
	}	
?>
<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Documento *</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
		{!! Form::select('IdTipDso',$Tii,$Tiiv,['class'=>'form-control','required','placeholder' => 'Seleccione un tipo de documento']) !!}
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Solicitante *</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
		{!! Form::select('IdTsoDso',$Tis,$Tsov,['class'=>'form-control','required','placeholder' => 'Seleccione un tipo de solicitante']) !!}
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Estado *</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
		{!! Form::select('EstDso',['1' => 'Activo', '2' => 'In-Activo'],$TEst,['class'=>'form-control','required','placeholder' => 'Seleccione el estado']) !!}
	</div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-5 col-sm-12 col-xs-12 col-md-offset-4">	
	{!! Form::reset('Reset', ['class'=>'btn btn-primary']) !!}
	{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
  </div>
</div>