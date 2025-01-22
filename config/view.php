<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Here you may specify an array of paths that should be checked for
    | your views. The usual location for views is within the "resources/views"
    | directory, but you may also specify other locations.
    |
    */

    'paths' => [
        resource_path('views'),  // Carpeta de vistas por defecto
        base_path('src/Views'),  // Carpeta personalizada para vistas
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade views are stored
    | for your application. Typically, this is within the storage path.
    |
    */

    'compiled' => storage_path('framework/views'),
];
