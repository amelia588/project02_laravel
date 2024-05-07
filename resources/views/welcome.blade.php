<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Tienda en Línea')</title>
    <!-- Bootstrap 4.5.2 CDN para CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
        background-image: url('/project02/public/images/fondo.jpg');
        background-size: cover; /* Cubre todo el fondo */
        background-repeat: no-repeat; /* No repetir la imagen */
        background-attachment: fixed; /* La imagen de fondo fija al hacer scroll */
        background-position: center; /* Centra la imagen de fondo */
        }
        
        .hero {
            background-color: #f8f9fa; /* Color de fondo suave */
            padding: 2rem;
            margin-bottom: 2rem;
            border-radius: 0.5rem;
        }
        .subscribe-form {
            max-width: 320px;
            margin-top: 1rem;
        }
        .navbar-nav .nav-link {
            color: #505050; /* Color suave para los enlaces */
        }
        /* Estilos adicionales personalizados van aquí */
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Mi E-commerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('productos.index') }}">Ver Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('carrito.index') }}">Mi Carrito</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contactos') }}">Contacto</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('servicios') }}">Servicios</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="hero text-center">
        <h1>Bienvenidos a Mi Tienda en Línea</h1>
        <p>Descubre los mejores productos al mejor precio</p>
        <p>Suscríbete para recibir ofertas exclusivas</p>
        <form class="subscribe-form">
            <input type="email" class="form-control" placeholder="Ingresa tu email">
            <button type="submit" class="btn btn-primary mt-2">Suscribirse</button>
        </form>
    </div>
</div>

<!-- Bootstrap 4.5.2 CDN para JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

