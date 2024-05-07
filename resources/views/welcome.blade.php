<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Tienda en Línea')</title>
    <!-- Bootstrap 4.5.2 CDN para CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
                @media (max-width: 768px) {
            .hero {
                padding: 1rem;
            }
            .navbar-nav .nav-link {
                padding: 0.5rem 1rem; /* Más espacio para clickear en móviles */
            }
        }
        body {
        background-image: url('https://www.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2023/05/torre-gaming-3036108.jpg');
        background-size: cover; /* Cubre todo el fondo */
        background-repeat: no-repeat; /* No repetir la imagen */
        background-attachment: fixed; /* La imagen de fondo fija al hacer scroll */
        background-position: center; /* Centra la imagen de fondo */
        }
        
        .hero {
            background-color:  #fca8ee ; /* Color de fondo suave */
            padding: 2rem;
            margin-bottom: 2rem;
            border-radius: 0.5rem;
            border: 2px solid #fd0abd;
        }
        .subscribe-form {
            max-width: 320px;
            margin-top: 1rem;
        }
        .navbar-nav .nav-link {
            color:  #fd0abd; /* Color suave para los enlaces */
        }
            .navbar-nav .nav-link:hover {
            color: #fd0abd; /* Cambia el color al pasar el mouse */
            background-color:  #ecf1f1 ; /* Fondo suave al hacer hover */
            border-radius: 5px; /* Bordes redondeados */
            border: 2px solid #fd0abd;
        }
                .hero {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Sombra suave */
            transition: transform 0.3s ease-in-out; /* Transición suave al cambiar tamaño */
        }

        .hero:hover {
            transform: scale(1.03); /* Aumenta ligeramente el tamaño al hacer hover */
                }
                .btn-primary:active {
            transform: translateY(2px); /* Mueve el botón hacia abajo al presionar */
        }
                .btn-primary.loading {
            pointer-events: none; /* Deshabilita interacción mientras carga */
            opacity: 0.75; /* Opacidad reducida para indicar procesamiento */
        }
                .navbar-brand img {
            vertical-align: middle;
            margin-right: 10px; /* Espacio entre el logo y el texto */
        }


    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 30px; width: auto;">
        </a>
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

