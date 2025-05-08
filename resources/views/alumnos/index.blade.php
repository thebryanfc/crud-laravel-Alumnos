@extends('layout/template')

@section('title', 'Alumnos | Escuela')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>LISTADO DE ALUMNOS</h2>
        <div class="d-md-flex justify-content-md-end">
            <form action="{{route('alumnos.index')}}" method="GET">
            <div class="btn-group">
                <input type="text" name="busqueda" class="form-control">
                <input type="submit" value="enviar" class="btn btn-primary">
            </div>
            </form>
        </div>
        <a href="{{ url('alumnos/create') }}" class="btn btn-primary btn-sm">Nuevo registro</a>

        <table class="table table-hover">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Fecha Nacimiento</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Nivel</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->matricula }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->fecha_nacimiento }}</td>
                    <td>{{ $alumno->telefono }}</td>
                    <td>{{ $alumno->email }}</td>
                    <td>{{ $alumno->nivel->nombre }}</td>
                    <td><a href="{{ url('alumnos/'.$alumno->id.'/edit' ) }}" class="btn btn-warning btn-sm">Editar</a></td>
                    <td>
                        <form action="{{ url('alumnos/'.$alumno->id) }}" method="post">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</main>