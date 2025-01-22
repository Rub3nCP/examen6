<?php

error_reporting(E_ALL & ~E_DEPRECATED);  // Suprimir las advertencias de desuso

require '../vendor/autoload.php';  // Autoload de Composer

use Philo\Blade\Blade;  // Esto sí es necesario

// Configuración de rutas y caché
$views = '../src/views/';
$cache = '../cache';

// Instancia de Blade
$blade = new Blade($views, $cache);

// Instancia de AltoRouter
$router = new AltoRouter();  // No hace falta usar "use AltoRouter" porque ya está cargado

// Definir ruta principal
$router->map('GET', '/', function() use ($blade) {
    echo $blade->view()->make('index')->render();  // Asegúrate de que estás renderizando la vista 'index'
});

// Procesar las rutas
$match = $router->match();

if (is_array($match)) {
    if (is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    } else {
        $params = $match['params'];
        $controller = new $match['target'][0];
        $method = $match['target'][1];
        $controller->$method($params);
    }
} else {
    echo $blade->view()->make('404')->render();
}
// Verifica si esto aparece
echo $blade->view()->make('index')->render();  // Renderiza la vista
  // Verifica que esta línea se muestra
