<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;  // Asegúrate de tener esta línea para poder usar el modelo Producto

class CarritoController extends Controller
{
    public function index()
    {
        // Este método puede incluir lógica para mostrar los ítems en el carrito
    }

    public function agregar(Request $request)
    {
        $productoId = $request->id;
        $producto = Producto::findOrFail($productoId); // Encuentra el producto o falla con error 404

        $cart = session()->get('cart', []);
        if (isset($cart[$productoId])) {
            $cart[$productoId]['cantidad']++;
        } else {
            $cart[$productoId] = [
                "nombre" => $producto->nombre,
                "precio" => $producto->precio,
                "cantidad" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('productos.index')->with('success', 'Producto añadido al carrito con éxito!');
    }

    // Aquí puedes añadir otros métodos relacionados con el carrito
}


