<!-- src/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
</head>
<body>
    <!-- Cabecera -->
    <header>
        <h1>Mi Empresa</h1>
    </header>

    <!-- Menú de navegación -->
    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/empresas">Empresas</a></li>
        </ul>
    </nav>

    <!-- Contenido de la página -->
    <main>
        @yield('content')
    </main>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2025 Mi Empresa</p>
    </footer>
</body>
</html>
