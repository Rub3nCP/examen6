@extends('layouts.layout')

@section('title', 'Listado de Empresas')

@section('content')
<h1>Listado de Empresas</h1>

<!-- Tabla para mostrar el listado de empresas -->
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empresas as $empresa)
        <tr>
            <td>{{ $empresa['nombre'] }}</td>
            <td>{{ $empresa['email'] }}</td>
            <td>
                <!-- Acciones para editar o borrar -->
                <a href="/empresas/{{ $empresa['id'] }}/editar">Editar</a>
                <a href="/empresas/{{ $empresa['id'] }}/borrar">Borrar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
