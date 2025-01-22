<!-- src/Views/inicio.blade.php -->
@extends('layouts.layout') <!-- Hereda la estructura de la plantilla principal -->

@section('title', 'Página de Inicio') <!-- Título de la página -->

@section('content')
  <h2>Bienvenido a la página de inicio</h2>
  <p>Este es el contenido dinámico de la página de inicio. Aquí puedes colocar toda la información que desees mostrar a los usuarios.</p>
  <p>Este contenido se encuentra en un archivo Blade y está siendo renderizado desde el servidor.</p>
  <p>¡Utiliza las rutas y el enrutamiento de AltoRouter para navegar entre las páginas!</p>
@endsection
