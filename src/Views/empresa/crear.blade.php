@extends('layouts.layout')

@section('title', 'Crear Nueva Empresa')

@section('content')
<h1>Crear Nueva Empresa</h1>

<!-- Formulario para crear una nueva empresa -->
<form method="POST" action="/empresas/crear">
    @csrf  <!-- Protección contra ataques CSRF -->
    
    <label for="nombre">Nombre de la empresa:</label>
    <input type="text" name="nombre" id="nombre" required>
    
    <label for="email">Correo de contacto:</label>
    <input type="email" name="email" id="email" required>
    
    <button type="submit">Crear Empresa</button>
</form>
@endsection
