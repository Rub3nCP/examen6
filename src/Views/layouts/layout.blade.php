<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Página')</title>
</head>
<body>
@include('layouts.header')
    @include('layouts.menu')
    @yield('content')  <!-- Aquí se mostrará el contenido dinámico -->
    @include('layouts.footer')
  <!-- Aquí se muestra el encabezado común para todas las páginas -->
    <header>
        <h1>Encabezado común para todas las páginas</h1>
    </header>

    <main>
        @yield('content')  <!-- Aquí se muestra el contenido de las vistas hijas -->
    </main>

    <footer>
        <p>&copy; 2025 Mi Página</p>
    </footer>
</body>
</html>
