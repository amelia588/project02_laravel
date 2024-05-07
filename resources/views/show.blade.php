<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Producto</title>
</head>
<body>
    <h1>{{ $producto->nombre }}</h1>
    <img src="{{ $producto->imagen_url }}" alt="{{ $producto->nombre }}">
    <p>{{ $producto->descripcion }}</p>
    <p>Precio: {{ $producto->precio }} €</p>
    <form action="/carrito/agregar" method="POST">
        @csrf
        <input type="hidden" name="producto_id" value="{{ $producto->id }}">
        <button type="submit">Añadir al Carrito</button>
    </form>
    <a href="/productos">Volver al listado</a>
</body>
</html>
