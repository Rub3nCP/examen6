<?php
error_reporting(E_ALL ^ E_DEPRECATED);

use Philo\Blade\Blade;

require '../vendor/autoload.php';

$router = new AltoRouter();

$views = '../src/views/';
$cache = '../cache';
$blade = new Blade($views, $cache);

// echo $blade->view()->make('index')->render();

include('../src/routers/company.php');

// $router->map('GET', '/companies', 'CompanyController#index', 'company-index');

// echo $blade->view()->make('companies.index')->render();

if (isset($_POST['_method'])) {
  $_SERVER['REQUEST_METHOD'] = $_POST['_method'];
}

$router->map('GET', '/', function () use ($blade) {
  echo $blade->view()->make('index')->render();
});

// Rutas de productos
$router->map('GET', '/products', function() use ($blade) {
    echo $blade->view()->make('index')->render();
});

// Rutas de productos de una empresa
$router->map('GET', '/empresas/[i:id]/productos', function($id) {
    (new \App\Controllers\ProductoController())->productosDeEmpresa($id);
});



$match = $router->match();
if (is_array($match)) {
  if (is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
  } else {
    $target = $match['target'];
    list($controllerName, $action) = explode("#", $target);
    $controller = new ($pathController . $controllerName)();
    $controller->$action($match['params']);
  }
} else {
  header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}