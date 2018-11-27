<div class="form-group row">
	<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
	<div class="col-md-7 col-sm-7 col-xs-12">
		{!! Form::text('name','',["class"=>"form-control {{ $errors->has('name') ? ' is-invalid' : '' }}",'required','placeholder' => 'Nombre/Razón Social',"value"=>"{{ old('name') }}", 'autocomplete'=>'off','autofocus']) !!}
		<small>Nombre o Razón Social, como lo indica el Registro mercantil</small>
		@if ($errors->has('name'))
				<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('name') }}</strong>
				</span>
		@endif
	</div>
</div>

<div class="form-group row">
	<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dirección E-Mail') }}</label>
	<div class="col-md-7 col-sm-7 col-xs-12">
		{!! Form::email('email','',["class"=>"form-control {{ $errors->has('email') ? ' is-invalid' : '' }}",'required','placeholder' => 'Correo Electrónico',"value"=>"{{ old('email') }}", 'autocomplete'=>'off']) !!}		
		@if ($errors->has('email'))
			<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('email') }}</strong>
			</span>
		@endif
	</div>
</div>

<div class="form-group row">
	<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
	<div class="col-md-4 col-sm-5 col-xs-12">
		{!! Form::password('password',["class"=>"form-control {{ $errors->has('password') ? ' is-invalid' : '' }}",'required','minlength'=>'8', 'maxlength'=>'12']) !!}		
		@if ($errors->has('password'))
			<span class="invalid-feedback" role="alert">
				<strong>{{ $errors->first('password') }}</strong>
			</span>
		@endif
	</div>
</div>

<div class="form-group row">
	<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Confirme Password') }}</label>
	<div class="col-md-4 col-sm-5 col-xs-12">
		{!! Form::password('password_confirmation',["id"=>"password-confirm","class"=>"form-control {{ $errors->has('password') ? ' is-invalid' : '' }}",'required','minlength'=>'8', 'maxlength'=>'12']) !!}				
	</div>
</div>

<div class="form-group row">
	<label for="NitNitEstEst" class="col-md-4 col-form-label text-md-right">{{ __('N. Identificación') }}</label>
	<div class="col-md-4 col-sm-8 col-xs-12">
		{!! Form::text('NitEst','',["class"=>"form-control {{ $errors->has('NitEst') ? ' is-invalid' : '' }}",'required','placeholder' => 'Nit',"value"=>"{{ old('NitEst') }}",'minlength'=>'7', 'maxlength'=>'12', 'pattern'=>'[0-9]{7,12}','title'=>'Debe digitar solo números','required', 'autocomplete'=>'off']) !!}
		<small>Nit, como lo indica el Registro mercantil</small>
		@if ($errors->has('NitEst'))
			<span class="invalid-feedback" role="alert">
				<strong>{{ $errors->first('NitEst') }}</strong>
			</span>
		@endif
	</div>
</div>

<div class="form-group row">
	<label for="DirEst" class="col-md-4 col-form-label text-md-right">{{ __('Dir. Correspondencia') }}</label>
	<div class="col-md-8 col-sm-8 col-xs-12">
		{!! Form::text('DirEst','',["class"=>"form-control {{ $errors->has('DirEst') ? ' is-invalid' : '' }}",'required','placeholder' => 'Dirección de Correspondencia',"value"=>"{{ old('DirEst') }}",'pattern'=>'{10,75}', 'autocomplete'=>'off']) !!}
		<small>Dirección fisica de correspondencia, indicando la ciudad</small>
		@if ($errors->has('DirEst'))
			<span class="invalid-feedback" role="alert">
				<strong>{{ $errors->first('DirEst') }}</strong>
			</span>
		@endif
	</div>
</div>

<div class="form-group row">
	<label for="TelSot" class="col-md-4 col-form-label text-md-right">{{ __('Teléfonos') }}</label>
	<div class="col-md-8 col-sm-8 col-xs-12">
		{!! Form::text('TelEst','',["class"=>"form-control {{ $errors->has('TelEst') ? ' is-invalid' : '' }}",'required','placeholder' => 'Teléfonos',"value"=>"{{ old('TelEst') }}", 'pattern'=>'{10,75}', 'autocomplete'=>'off']) !!}
		<small>No. de Celular, No. fijo con indicativo</small>
		@if ($errors->has('TelEst'))
			<span class="invalid-feedback" role="alert">
				<strong>{{ $errors->first('TelEst') }}</strong>
			</span>
		@endif
	</div>
</div>

<div class="ln_solid"></div>
	<div class="form-group text-center">
		<div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-4">	
			{!! Form::reset('Reset', ['class'=>'btn btn-primary']) !!}
			{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
		</div>
	</div>
</div>