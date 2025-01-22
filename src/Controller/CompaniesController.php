<?php

namespace Ruben\Examen6\Controller;

use Ruben\Examen6\Core\Controller;
use Ruben\Examen6\Model\Company;

class CompaniesController extends Controller
{
    public function list()
    {
        $companies = Company::getAll();  // Llamamos al método que obtiene todas las empresas
        return $this->view('companies', ['companies' => $companies]);  // Pasamos las empresas a la vista
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Crear la nueva empresa con los datos del formulario
            Company::create($_POST);
            // Redirigir a la lista de empresas después de crear
            header('Location: /empresas');
            exit();
        }
        return $this->view('create_company');  // Mostrar el formulario
    }

    public function edit($id)
    {
        $company = Company::find($id);  // Encontramos la empresa por su ID

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            Company::update($id, $_POST);  // Actualizamos los datos
            header('Location: /empresas');
            exit();
        }

        return $this->view('edit_company', ['company' => $company]);  // Mostrar formulario con los datos actuales
    }

    public function delete($id)
    {
        Company::delete($id);  // Eliminar la empresa
        header('Location: /empresas');
        exit();
    }
}
