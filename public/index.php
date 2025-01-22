<?php

error_reporting(E_ALL & ~E_DEPRECATED);
ini_set('display_errors', 1);

require '../vendor/autoload.php';

// Usar las clases necesarias
use Philo\Blade\Blade;

$views = '../src/Views'; 
$cache = '../cache';     

$blade = new Blade($views, $cache);

$router = new AltoRouter();

$router->map('GET', '/', function() use ($blade) {
    // Renderizar la vista 'index.blade.php'
    echo $blade->view()->make('index')->render();
});

// Definir la ruta para la página de empresas
$router->map('GET', '/empresas', function() use ($blade) {
    // Renderizar la vista 'empresa/listado.blade.php'
    echo $blade->view()->make('empresa.listado')->render();
});

// Definir otras rutas según sea necesario
// $router->map('GET', '/otra-ruta', function() use ($blade) {
//     echo $blade->view()->make('otra-vista')->render();
// });

// Verificar si la ruta actual tiene una coincidencia
$match = $router->match();

// Si hay una coincidencia para la ruta
if (is_array($match)) {
    if (is_callable($match['target'])) {
        // Llamar a la función del controlador si la ruta tiene una función asociada
        call_user_func_array($match['target'], $match['params']);
    } else {
        // Si la ruta es un controlador/método
        $params = $match['params'];
        $controller = new $match['target'][0];
        $method = $match['target'][1];
        $controller->$method($params);
    }
} else {
    // Si la ruta no coincide con ninguna de las rutas definidas, mostrar la vista 404
    echo $blade->view()->make('404')->render();
}
