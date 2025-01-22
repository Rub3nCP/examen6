<?php

// Cargar Composer y el autoload generado
require_once __DIR__ . '/../vendor/autoload.php';  // Cargar el autoload generado por Composer

// Usar AltoRouter
use AltoRouter;

$router = new AltoRouter();

// Definir rutas
$router->map('GET', '/', function() {
    echo "Página de inicio";
});

$router->map('GET', '/examen', function() {
    echo "Página del examen";
});

// Buscar la ruta correspondiente
$match = $router->match();

if ($match) {
    // Ejecutar la función asociada a la ruta
    call_user_func_array($match['target'], $match['params']);
} else {
    // Si no se encuentra la ruta
    echo 'Página no encontrada';
}
