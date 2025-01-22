<?php

namespace Ruben\Examen6\Controller;

use Ruben\Examen6\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // Llamar a la vista 'home'
        return $this->view('home');
    }
}
