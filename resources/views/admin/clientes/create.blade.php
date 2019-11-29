@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h3>Crear Cliente</h3>

                <div>
                {!! Form::open(['route' => 'clientes.store', 'method' => 'POST']) !!}
                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombres') !!}
                            {!! Form::text('nombre', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('apellido', 'Apellidos') !!}
                            {!! Form::text('apellido', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('identificacion', 'Identificación') !!}
                            {!! Form::text('identificacion', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('telefono', 'Telefono') !!}
                            {!! Form::text('telefono', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('direccion', 'Dirección') !!}
                            {!! Form::text('direccion', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('ciudad', 'Ciudad') !!}
                            {!! Form::text('ciudad', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('pais', 'País') !!}
                            {!! Form::text('pais', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>

@endsection
