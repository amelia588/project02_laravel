<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
    <title>Productos</title>
</head>
<body>

<div class="container text-center my-5">
    <h1 class="mb-4">Productos</h1>
    <div class="row">
                @foreach ($productos as $producto)
            <div class="col-md-4 mb-3">
                <div class="card h-100 shadow">
                <img src="{{ asset('storage/' . $producto['imagen']) }}" alt="{{ $producto['nombre'] }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $producto['nombre'] }}</h5>
                        <p class="card-text">${{ number_format($producto['precio'], 2) }}</p>
                        <form action="{{ route('carrito.agregar') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $producto['id'] }}">
                            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>

<!-- JavaScript & jQuery libraries -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Custom JavaScript -->
<script>
    $(document).ready(function() {
        $('.add-to-cart-btn').click(function() {
            const productoId = $(this).data('producto-id');
            console.log('Producto añadido al carrito:', productoId);
            // Aquí puedes agregar código adicional para manejar la adición al carrito
        });
    });
</script>

</body>
</html>

