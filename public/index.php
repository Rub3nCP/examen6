<?php

// Habilitar la visualización de errores para facilitar el desarrollo
error_reporting(E_ALL & ~E_DEPRECATED);
ini_set('display_errors', 1);

// Cargar las dependencias de Composer
require '../vendor/autoload.php';

// Usar las clases necesarias
use Philo\Blade\Blade;

// Definir las rutas de las vistas y la caché
$views = 'src/Views';  // Ruta a la carpeta que contiene las vistas
$cache = 'cache';      // Ruta donde se almacenarán las vistas compiladas
$blade = new Blade($views, $cache);

// Crear una instancia de AltoRouter
$router = new AltoRouter();

// Definir la ruta principal para la página de inicio
$router->map('GET', '/', function() use ($blade) {
    // Renderiza la vista 'index.blade.php'
    echo $blade->view()->make('index')->render();
});

// Definir la ruta para la página de empresas (ver ejemplo más abajo)
$router->map('GET', '/empresas', function() use ($blade) {
    // Aquí, puedes cargar la vista de listado de empresas
    echo $blade->view()->make('empresa.listado')->render();
});

// Si se accede a una ruta que no está definida, mostrar una página 404
$match = $router->match();

// Verificar si la ruta encontrada tiene una función asignada
if (is_array($match)) {
    if (is_callable($match['target'])) {
        // Llamar a la función del controlador si existe
        call_user_func_array($match['target'], $match['params']);
    } else {
        $params = $match['params'];
        // Crear el controlador y método correspondiente
        $controller = new $match['target'][0];
        $method = $match['target'][1];
        $controller->$method($params);
    }
} else {
    // Si la ruta no coincide con ninguna definida, mostrar un error 404
    echo $blade->view()->make('404')->render();  // Esto buscará la vista 404.blade.php
}
echo $blade->view()->make('404');
echo $this->view->make('src/Views/404');
