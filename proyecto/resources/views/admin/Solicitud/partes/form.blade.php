<?php
	$TTid='0';$TCie='0';$TNui=null;$TPno=null;$TDir=null;$TEma=null;$TSap=null;$TPap=null;$TSno=null;
	$TNue=null;$TNoe=null;$TDie=null;$TEme=null;$TTee=null;$TTso=null;
	if(isset($Tid))
	{
		/*$TTid=$Doc->NomTip;
		$TTci=$Doc->DesTip;*/
	}	
?>
<div class="col-md-6 col-xs-12">
	<div class="x_panel">
			<div class="x_title">
					<h2>Datos del Solicitante <small>Datos personales (Representante Legal)</small></h2>                        
					<div class="clearfix"></div>
			</div>
			<div class="x_content">
					<br />               
					<div class="form-group">
						<label class="control-label col-md-5 col-sm-5 col-xs-12">Tipo de Identificación *</label>
						<div class="col-md-7 col-sm-7 col-xs-12">
							{!! Form::select('IdTidSot',$Tid,$TTid,['class'=>'form-control','required','placeholder' => 'Seleccione un tipo de documento']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-5 col-sm-5 col-xs-12">Número de Identificación *</label>
						<div class="col-md-7 col-sm-7 col-xs-12">
							{!! Form::text('NuiSot',$TNui,['class'=>'form-control','required','pattern'=>'[0-9]{7,15}','placeholder' => 'Digite el Número de Identificación','data-val'=>'true','data-val-required'=>'Digite el Número de Identificación.','autocomplete'=>'off']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12">Primer Nombre *</label>
						<div class="col-md-8 col-sm-8 col-xs-12">
							{!! Form::text('PnoSot',$TPno,['class'=>'form-control','required','pattern'=>'.{3,35}','placeholder' => 'Digite el Primer Nombre','data-val'=>'true','data-val-required'=>'Digite el Primer Nombre.','autocomplete'=>'off']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12">Segundo Nombre</label>
						<div class="col-md-8 col-sm-8 col-xs-12">
							{!! Form::text('SnoSot',$TSno,['class'=>'form-control','placeholder' => 'Digite el Segundo Nombre','autocomplete'=>'off']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12">Primer Apellido *</label>
						<div class="col-md-8 col-sm-8 col-xs-12">
							{!! Form::text('PapSot',$TPap,['class'=>'form-control','required','pattern'=>'.{3,35}','placeholder' => 'Digite el Primer Apellido','data-val'=>'true','data-val-required'=>'Digite el Primer Apellido.','autocomplete'=>'off']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12">Segundo Apellido</label>
						<div class="col-md-8 col-sm-8 col-xs-12">
							{!! Form::text('SapSot',$TSap,['class'=>'form-control','placeholder' => 'Digite el Segundo Apellido','autocomplete'=>'off']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Dirección *</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							{!! Form::text('DirSot',$TDir,['class'=>'form-control','required','pattern'=>'.{10,175}','placeholder' => 'Digite la Dirección','data-val'=>'true','data-val-required'=>'Digite la Dirección.','autocomplete'=>'off']) !!}
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

<div class="col-md-6 col-xs-12">
	<div class="x_panel">
			<div class="x_title">
					<h2>Datos del Establecimiento <small>Datos del Establecimiento</small></h2>                        
					<div class="clearfix"></div>
			</div>
			<div class="x_content">
					<br />
					<div class="form-group">
						<label class="control-label col-md-5 col-sm-3 col-xs-12">Tipo de establecimiento*</label>
						<div class="col-md-7 col-sm-9 col-xs-12">
							{!! Form::select('IdTsoEst',$Tso,$TTso,['class'=>'form-control','required','placeholder' => 'Seleccione el Tipo','data-val'=>'true','data-val-required'=>'Seleccione el Tipo']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-5 col-sm-5 col-xs-12">Número de Identificación *</label>
						<div class="col-md-7 col-sm-7 col-xs-12">
							{!! Form::text('NuiEst',$TNue,['class'=>'form-control','required','pattern'=>'.{7,11}','placeholder' => 'Digite el Número de Identificación','data-val'=>'true','data-val-required'=>'Digite el Número de Identificación.','autocomplete'=>'off']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre *</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							{!! Form::text('NomEst',$TNoe,['class'=>'form-control','required','placeholder' => 'Digite la Razón Social','data-val'=>'true','data-val-required'=>'Digite la Razón Social.','autocomplete'=>'off']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Dirección *</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							{!! Form::text('DirEst',$TDie,['class'=>'form-control','required','placeholder' => 'Digite la Dirección','data-val'=>'true','data-val-required'=>'Digite la Dirección.','autocomplete'=>'off']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Ciudad *</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							{!! Form::select('IdCiuEst',$Ciu,$TCie,['class'=>'form-control','required','placeholder' => 'Seleccione la Ciudad','data-val'=>'true','data-val-required'=>'Seleccione la Ciudad.']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Email *</label>
						<div class="col-md-10 col-sm-10 col-xs-12">
							{!! Form::email('EmaEst',$TEme,['class'=>'form-control','required','placeholder' => 'Digite el Email','data-val'=>'true','data-val-required'=>'Digite el Email.','autocomplete'=>'off']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Teléfono *</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							{!! Form::tel('TelEst',$TTee,['class'=>'form-control','required','placeholder' => 'Digite el Teléfono','data-val'=>'true','data-val-required'=>'Digite el Teléfono.','autocomplete'=>'off']) !!}
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