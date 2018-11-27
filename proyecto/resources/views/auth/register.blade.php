@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrarse') }}</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'register','class'=>'form-horizontal']) !!}

                        @include('registro.partes.form')

                    {!! Form::close() !!} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
