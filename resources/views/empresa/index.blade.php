@extends('layouts.app')

@section('content')
    <h2>Listado de Empresas</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo de Contacto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empresas as $empresa)
                <tr>
                    <td>{{ $empresa->id }}</td>
                    <td>{{ $empresa->name }}</td>
                    <td>{{ $empresa->contact_info }}</td>
                    <td>
                        <a href="{{ route('empresas.edit', $empresa->id) }}">Editar</a>
                        <a href="{{ route('empresas.delete', $empresa->id) }}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
