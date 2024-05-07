<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PedidoController;

// Página principal
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rutas para productos
Route::get('productos', [ProductoController::class, 'producto'])->name('productos.index');
Route::get('productos/{id}', [ProductoController::class, 'show'])->name('productos.show');

// Rutas para el carrito de compras
Route::post('carrito/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::get('carrito', [CarritoController::class, 'index'])->name('carrito.index');
Route::post('checkout', [CarritoController::class, 'checkout'])->name('carrito.checkout');

// Rutas para usuarios con middleware de autenticación
Route::middleware(['auth'])->prefix('usuario')->group(function () {
    Route::get('perfil', [UsuarioController::class, 'perfil'])->name('usuario.perfil');
    Route::post('actualizar', [UsuarioController::class, 'actualizar'])->name('usuario.actualizar');
    Route::post('login', [UsuarioController::class, 'login'])->name('usuario.login');
    Route::post('logout', [UsuarioController::class, 'logout'])->name('usuario.logout');
});

// Rutas de administración con middleware de autenticación
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('pedidos', [PedidoController::class, 'index'])->name('admin.pedidos.index');
    Route::get('pedidos/{id}', [PedidoController::class, 'show'])->name('admin.pedidos.show');
});

// Rutas de páginas estáticas
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::view('servicios', 'servicios')->name('servicios');
Route::view('contactos', 'contactos')->name('contactos');

