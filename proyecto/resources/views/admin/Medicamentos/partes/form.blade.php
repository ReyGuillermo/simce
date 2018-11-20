<?php
	$TTis=null;$TNum=null;$TDci=null;$TCon=null;$TFor=null;$TCla=null;$TUso=null;
	if(isset($Med))
	{
		$TTis=$Med->TisMed;$TNum=$Med->NumMed;$TDci=$Med->DciMed;$TCon=$Med->ConMed;
		$TFor=$Med->ForMed;$TCla=$Med->ClaMed;$TUso=$Med->UsoMed;
	}	
?>
<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">TS *</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
		{!! Form::text('TisMed',$TTis,['class'=>'form-control','placeholder'=>'Tipo de Sustancia','required','pattern'=>'.{2,3}','title'=>'Debe digitar el Tipo de Sustancia']) !!}
		<small>Es: Estupefaciente; Si: Sicotropico; Pr: Precursor; Fn: Fiscalización Nacional</small>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Número *</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
		{!! Form::text('NumMed',$TNum,['class'=>'form-control','placeholder'=>'Número','required','pattern'=>'.{3,4}','title'=>'Debe digitar el Número']) !!}
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Denominación Común *</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
		{!! Form::text('DciMed',$TDci,['class'=>'form-control','placeholder'=>'Denominación Común Internacional (DCI)','required','pattern'=>'.{7,175}','title'=>'Debe digitar la Denominación Común Internacional']) !!}
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Concentración *</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
		{!! Form::text('ConMed',$TCon,['class'=>'form-control','placeholder'=>'Concentración','required','pattern'=>'.{4,45}','title'=>'Debe digitar la Concentración']) !!}
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Forma Farmaceutica *</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
		{!! Form::text('ForMed',$TFor,['class'=>'form-control','placeholder'=>'Forma Farmaceutica','required','pattern'=>'.{7,75}','title'=>'Debe digitar la Forma Farmaceutica']) !!}
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Clasificación *</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
		{!! Form::text('ClaMed',$TCla,['class'=>'form-control','placeholder'=>'Clasificación','required','pattern'=>'.{3,5}','title'=>'Debe digitar la Clasificación']) !!}
		<small>MCE: Medicamentos de Control Especial. <br>MME: Medicamentos Monopolio del Estado.</small>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Uso *</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
			{!! Form::text('UsoMed',$TUso,['class'=>'form-control','placeholder'=>'Uso','required','pattern'=>'.{6,75}','title'=>'Uso']) !!}
	</div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-5 col-sm-12 col-xs-12 col-md-offset-4">	
	{!! Form::reset('Reset', ['class'=>'btn btn-primary']) !!}
	{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
  </div>
</div>