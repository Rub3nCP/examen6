<?php

namespace Ruben\Examen6\Core;

class Controller
{
    public function view($view, $data = [])
    {
        // Cargar vista y pasarle los datos
        extract($data);
        include '../resources/views/' . $view . '.blade.php';
    }
}
