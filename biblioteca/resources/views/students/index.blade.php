@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Listado de Estudiantes</h2>
</div>

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>CIF</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->cif }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->lat_name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>
                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

@endsection