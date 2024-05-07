<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    
    public function producto()
{
    $productos = [
        [
            'id' => 1,
            'nombre' => 'Laptop Notebook',
            'imagen' => 'images/notebook.jpg',
            'precio' => 999.99
        ],
        [
            'id' => 2,
            'nombre' => 'Laptop Ultrabook',
            'imagen' => 'images/laptop2.jpg',
            'precio' => 1299.99
        ],
        [
            'id' => 3,
            'nombre' => 'Laptop Gamer',
            'imagen' => 'images/gamer.png',
            'precio' => 1499.99
        ],
        [
            'id' => 4,
            'nombre' => 'Laptop 2 en 1',
            'imagen' => 'images/Laptop.jpg',
            'precio' => 1099.99
        ],
        [
            'id' => 5,
            'nombre' => 'Laptop Chromebook',
            'imagen' => 'images/lenovo.jpg',
            'precio' => 899.99
        ],
        [
            'id' =>6,
            'nombre' => 'Laptop Chromebook',
            'imagen' => 'images/mac.jpg',
            'precio' => 899.99
        ],
        // ... otros productos
    ];

     // Retorna la vista con los productos.
    return view('productos.index', compact('productos'));

}
}
