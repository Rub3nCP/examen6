<?php

namespace Ruben\Examen6\Controller;

use Ruben\Examen6\Model\Empresa;

class EmpresaController {
    public function index() {
        $empresas = Empresa::all();
        require_once __DIR__ . '/../../resources/views/empresa/index.blade.php';
    }

    public function create() {
        require_once __DIR__ . '/../../resources/views/empresa/create.blade.php';
    }

    public function store($data) {
        Empresa::create($data);
        header("Location: /empresas");
    }

    public function edit($id) {
        $empresa = Empresa::find($id);
        require_once __DIR__ . '/../../resources/views/empresa/edit.blade.php';
    }

    public function update($id, $data) {
        Empresa::update($id, $data);
        header("Location: /empresas");
    }

    public function destroy($id) {
        Empresa::delete($id);
        header("Location: /empresas");
    }
}
