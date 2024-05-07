<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <title>Carrito de Compras</title>
    <style>
    body {
        background-color: #f4f4f4; /* Fondo claro para la página */
        font-family: Arial, sans-serif; /* Fuente más legible */
    }
    .container {
        background: #fff;
        padding: 2rem;
        border-radius: 8px; /* Bordes redondeados para la tabla */
        box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Sombra sutil para dar profundidad */
        margin-top: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse; /* Colapsar los bordes de la tabla */
    }
    th, td {
        text-align: left;
        padding: 8px; /* Espaciado interno en las celdas */
        border-bottom: 1px solid #ddd; /* Línea divisoria sutil entre filas */
    }
    th {
        background-color: #f8f9fa; /* Fondo para los encabezados de la tabla */
        color: #333; /* Color de texto para los encabezados */
    }
    .btn {
        color: white;
        background-color: #007bff;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer; /* Cursor tipo 'mano' al pasar el mouse sobre el botón */
    }
    .btn-danger {
        background-color: #dc3545; /* Botones para eliminar con un rojo estándar de Bootstrap */
    }
    input[type="number"], input[type="text"] {
        padding: 5px;
        margin-right: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    .total {
        font-size: 1.25rem; /* Tamaño más grande para el total */
        text-align: right; /* Alineación a la derecha para el total */
        margin-top: 20px; /* Espacio antes del total del carrito */
    }
</style>


</head>
<body>
    <div class="container py-5">
        <h2 class="mb-4">Carrito de compras</h2>
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col"></th> <!-- Columna para botón eliminar -->
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>{{ $item->nombre }}</td>
                    <td>${{ number_format($item->precio, 2) }}</td>
                    <td>
                        <input type="number" class="form-control" value="{{ $item->cantidad }}">
                    </td>
                    <td>${{ number_format($item->precio * $item->cantidad, 2) }}</td>
                    <td>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-between">
            <div>
                <input type="text" class="form-control w-auto" placeholder="Código de cupón">
                <button class="btn btn-outline-primary mt-2">Aplicar cupón</button>
            </div>
            <div class="text-right">
                <h4>Total del carrito: ${{ number_format($total, 2) }}</h4>
                <a href="/checkout" class="btn btn-primary">Proceder al Pago</a>
            </div>
        </div>
    </div>
</body>
</html>

