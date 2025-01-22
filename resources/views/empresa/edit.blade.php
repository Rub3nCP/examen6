@extends('layouts.app')

@section('content')
    <h2>Editar Empresa</h2>
    <form method="POST" action="{{ route('empresas.update', $empresa->id) }}">
        @csrf
        @method('PUT')
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="{{ $empresa->name }}" required>

        <label for="contact_info">Correo de Contacto:</label>
        <input type="email" id="contact_info" name="contact_info" value="{{ $empresa->contact_info }}" required>

        <button type="submit">Guardar Cambios</button>
    </form>
@endsection
