<?php

namespace Ruben\Examen6\Controller;

use Ruben\Examen6\Model\Empresa;

class EmpresaController {
    public function index() {
        $dao = new EmpresaDAO();
        $empresas = $dao->getAllEmpresas();
        echo $blade->view()->make('empresa.listado', compact('empresas'))->render();
    }
}

