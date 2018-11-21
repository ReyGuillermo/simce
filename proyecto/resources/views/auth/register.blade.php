@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrarse') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nombre/Razón Social" name="name" value="{{ old('name') }}" required autofocus>
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

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Correo Electrónico" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" minlength="8" maxlength="12" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" minlength="8" maxlength="12" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NuiSotNuiSot" class="col-md-4 col-form-label text-md-right">{{ __('N. Identificación') }}</label>

                            <div class="col-md-6">
                                <input id="NuiSot" type="text" class="form-control{{ $errors->has('NuiSot') ? ' is-invalid' : '' }}" name="NuiSot" placeholder="Nit" value="{{ old('NuiSot') }}" minlength="7" maxlength="12" pattern="[0-9]{7,12}" title="Debe digitar solo números" required>
                                <small>Nit, como lo indica el Registro mercantil</small>
                                @if ($errors->has('NuiSot'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('NuiSot') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="DirSot" class="col-md-4 col-form-label text-md-right">{{ __('Dir. Correspondencia') }}</label>

                            <div class="col-md-8">
                                <input id="DirSot" type="text" class="form-control{{ $errors->has('DirSot') ? ' is-invalid' : '' }}" placeholder="Dirección de Correspondencia" pattern="{10-75}" name="DirSot" value="{{ old('DirSot') }}" required>
                                <small>Dirección fisica de correspondencia indicando la ciudad</small>
                                @if ($errors->has('DirSot'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('DirSot') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="TelSot" class="col-md-4 col-form-label text-md-right">{{ __('Teléfonos') }}</label>

                            <div class="col-md-6">
                                <input id="TelSot" type="text" class="form-control{{ $errors->has('TelSot') ? ' is-invalid' : '' }}" placeholder="Movil/Fijo" pattern="{10-75}" name="TelSot" value="{{ old('TelSot') }}" required autofocus>
                                <small>No. de Celular, No. fijo con indicativo</small>
                                @if ($errors->has('TelSot'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('TelSot') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
