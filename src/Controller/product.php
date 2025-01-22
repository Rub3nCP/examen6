<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {

    public function index() {
        // Obtener el listado de productos
        $product = Product::all();
        // Cargar la vista con los productos
        require '../app/views/productos/index.blade.php';
    }
}
