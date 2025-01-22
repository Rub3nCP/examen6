@extends('layouts.app')

@section('content')
    <h2>Crear Nueva Empresa</h2>
    <form method="POST" action="{{ route('empresas.store') }}">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>

        <label for="contact_info">Correo de Contacto:</label>
        <input type="email" id="contact_info" name="contact_info" required>

        <button type="submit">Guardar</button>
    </form>
@endsection
