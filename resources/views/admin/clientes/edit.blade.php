@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <h3>Crear Cliente</h3>

                {!! Form::open(['route' => ['clientes.update', $cliente], 'method' => 'PUT']) !!}
                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombres') !!}
                            {!! Form::text('nombre', $cliente->nombre, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('apellido', 'Apellido') !!}
                            {!! Form::text('apellido', $cliente->apellido, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('identificacion', 'Identificación') !!}
                            {!! Form::text('identificacion', $cliente->identificacion, ['class' => 'form-control','required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Correo Electronico') !!}
                            {!! Form::email('email', $cliente->email, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('telefono', 'Telefono') !!}
                            {!! Form::text('telefono', $cliente->telefono, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('direccion', 'Dirección') !!}
                            {!! Form::text('direccion', $cliente->direccion, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('ciudad', 'Ciudad') !!}
                            {!! Form::text('ciudad', $cliente->ciudad, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('pais', 'País') !!}
                            {!! Form::text('pais', $cliente->pais, ['class' => 'form-control', 'required']) !!}
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
