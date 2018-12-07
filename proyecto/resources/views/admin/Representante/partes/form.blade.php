<?php
	$TTid='0';$TCie='0';$TNui=null;$TPno=null;$TDir=null;$TEma=null;$TSap=null;$TPap=null;$TSno=null;
	$TNue=null;$TNoe=null;$TDie=null;$TEme=null;$TTee=null;$TTso=null;
	if(isset($Tid))
	{
		/*$TTid=$Doc->NomTip;
		$TTci=$Doc->DesTip;*/
	}	
?>
<div class="col-md-12 col-xs-12">
	<div class="x_panel">
			<div class="x_title">
					<h2>Agregar/Modificar Representante Legal </h2>                        
					<div class="clearfix"></div>
			</div>
			<div class="x_content">
					<br /> 
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-5 col-xs-12">N. Identificación</label>
						<div class="col-md-7 col-sm-7 col-xs-12">
							{!! Form::hidden('id',$id,['class'=>'form-control']) !!}
							{!! Form::text('NuiPer',$TNui,['class'=>'form-control','required','pattern'=>'[0-9]{7,15}','placeholder' => 'Digite el Número de Identificación','data-val'=>'true','data-val-required'=>'Digite el Número de Identificación.','autocomplete'=>'off']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-4 col-xs-12">Nombres</label>
						<div class="col-md-5 col-sm-4 col-xs-12">
							{!! Form::text('PnoPer',$TPno,['class'=>'form-control','required','pattern'=>'.{3,35}','placeholder' => 'Primer Nombre','data-val'=>'true','data-val-required'=>'Digite el Primer Nombre.','autocomplete'=>'off']) !!}
						</div>
						<div class="col-md-5 col-sm-4 col-xs-12">
							{!! Form::text('SnoPer',$TSno,['class'=>'form-control','placeholder' => 'Segundo Nombre','autocomplete'=>'off']) !!}
						</div>						
					</div>
					
					<div class="form-group">
							<label class="control-label col-md-2 col-sm-4 col-xs-12">Apellidos</label>
							<div class="col-md-5 col-sm-4 col-xs-12">
								{!! Form::text('PapPer',$TPno,['class'=>'form-control','required','pattern'=>'.{3,35}','placeholder' => 'Primer Apellido','data-val'=>'true','data-val-required'=>'Digite el Primer Nombre.','autocomplete'=>'off']) !!}
							</div>
							<div class="col-md-5 col-sm-4 col-xs-12">
								{!! Form::text('SapPer',$TSno,['class'=>'form-control','placeholder' => 'Segundo Apellido','autocomplete'=>'off']) !!}
							</div>						
						</div>
									
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Email *</label>
						<div class="col-md-10 col-sm-10 col-xs-12">
							{!! Form::email('EmaSot',$TEma,['class'=>'form-control','required','pattern'=>'.{10,125}','placeholder' => 'Digite el Email','data-val'=>'true','data-val-required'=>'Digite el Email.','autocomplete'=>'off']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Teléfono *</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							{!! Form::tel('TelSot',$TEma,['class'=>'form-control','required','pattern'=>'.{6,75}','placeholder' => 'Digite el Teléfono','data-val'=>'true','data-val-required'=>'Digite el Teléfono.','autocomplete'=>'off']) !!}
						</div>
					</div>				 
			</div>
	</div>
</div>
<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-5">	
	{!! Form::reset('Reset', ['class'=>'btn btn-primary']) !!}
	{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
  </div>
</div>