@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
                <h3>Clientes</h3>


                <a href="{{ route('clientes.create')}}" class="btn btn-primary" id="registrar">Crear Cliente</a><br>
                    <table class="table table-stripted">
                        <thead>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Identificación</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                            <th>Ciudad</th>
                            <th>Pais</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                        <tbody>
                            @foreach($clientes as $cliente)
                           
                                <tr>
                                    <td>{{ $cliente->id }}</td>
                                    <td>{{ $cliente->nombre }}</td>
                                    <td>{{ $cliente->apellido }}</td>
                                    <td>{{ $cliente->identificacion }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>{{ $cliente->telefono }}</td>
                                    <td>{{ $cliente->direccion }}</td>
                                    <td>{{ $cliente->ciudad }}</td>
                                    <td>{{ $cliente->pais }}</td>
                                    <td><a href="{{ route('clientes.edit', $cliente->id)}}" class="btn btn-warning">Editar</a><a href="{{ route('admin.clientes.destroy', $cliente->id)}}" class="btn btn-danger">Eliminar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                        </tbody>
                    </table>

        </div>
    </div>
</div>
@endsection
