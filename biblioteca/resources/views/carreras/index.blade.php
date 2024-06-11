@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Listado de Carreras</h2>
</div>

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carreras as $carrera)
            <tr>
                <td>{{ $carrera->codigo_carrera }}</td>
                <td>{{ $carrera->nombre }}</td>
                <td>{{ $carrera->descripcion }}</td>
                <td>
                    <a href="{{ route('carreras.show', $carrera->id) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('carreras.edit', $carrera->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('carreras.destroy', $carrera->id) }}" method="POST" style="display: inline;">
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