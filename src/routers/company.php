<?php
$router->map('GET', '/companies', 'CompanyController#index', 'company-index');
$router->map('POST', '/companies', 'CompanyController#post');
$router->map('DELETE', '/companies/[i:id]', 'CompanyController#deleteCompany');
$router->map('GET', '/companies/[i:id]/edit', 'CompanyController#editCompany');
$router->map('PUT', '/companies/[i:id]', 'CompanyController#updateCompany');