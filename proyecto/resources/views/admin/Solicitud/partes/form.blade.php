<div class="form-group">
  <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-5">	
	{!! Form::hidden('IdSucSol',$Res->IdSuc,['class'=>'form-control','required','pattern'=>'.{3,35}','placeholder' => 'Primer Nombre','data-val'=>'true','data-val-required'=>'Digite el Primer Nombre.','autocomplete'=>'off']) !!}
	{!! Form::submit('Crear Solicitud', ['class'=>'btn btn-success btn-lg']) !!}
  </div>
</div>