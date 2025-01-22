<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Mi Página'); ?></title>
</head>
<body>
    <header>
        <h1>Encabezado común para todas las páginas</h1>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>  <!-- Aquí se muestra el contenido de las vistas hijas -->
    </main>

    <footer>
        <p>&copy; 2025 Mi Página</p>
    </footer>
</body>
</html>
