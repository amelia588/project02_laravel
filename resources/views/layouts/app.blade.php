<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset('https://images-wixmp-530a50041672c69d335ba4cf.wixmp.com/templates/image/fd5aba39519559080ab0e3f1c1889ce7e7cfec2f26d434afe5dcc35ae42a55f4.jpg/v1/fill/w_536%2Ch_302%2Cq_90%2Cusm_0.60_1.00_0.01/fd5aba39519559080ab0e3f1c1889ce7e7cfec2f26d434afe5dcc35ae42a55f4.webp') }}'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .navbar-collapse {
            display: flex;
            align-items: center;
        }

        .navbar-nav {
            margin-right: auto; /* Asegura que todo se alinee a la izquierda y el formulario de búsqueda se vaya a la derecha */
        }

        .search-box {
            display: flex;
            align-items: center; /* Alinea verticalmente el input y el botón de búsqueda */
        }

        .navbar {
            background-color: #333;
            color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0,0,0,0.5);
            transition: all 0.3s;
        }
        .navbar .navbar-brand {
            color: #fff;
            transition: color 0.3s;
        }
        .navbar-nav .nav-link {
            color: #ddd;
            transition: color 0.3s;
        }
        .navbar-nav .nav-link:hover,
        .navbar .navbar-brand:hover {
            color: #fff;
        }
        .search-box input[type="search"] {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            transition: width 0.4s;
        }
        .search-box input[type="search"]:focus {
            width: 240px;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }
        footer a {
            color: #fff;
            transition: color 0.3s;
        }
        footer a:hover {
            color: #ccc;
        }
        main {
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        main:hover {
            transform: translateY(-5px);
        }
    </style>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.navbar-toggler').click(function() {
                $('.navbar').toggleClass('navbar-expanded');
            });
        });
    </script>

    <title>@yield('title', 'Bienvenido a Nuestra Tienda')</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Tienda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('productos.index') }}">Ver Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('carrito.index') }}">Mi Carrito</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contactos') }}">Contacto</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('servicios') }}">Servicios</a></li>
            </ul>
            <form class="search-box ms-auto">
                <input type="search" placeholder="Buscar..." aria-label="Buscar">
                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary" href="#">Registrarse</a>
                </li>
            </ul>
           </div>
        </div>
    </nav>
</header>

<main class="py-4">
    <div class="container">
        @yield('content')
    </div>
</main>

<footer class="text-center text-lg-start">
        <div class="text-center p-3">
            © 2024 Derechos reservados:
            <a href="{{ url('/') }}">TiendaOnline.com</a>
        </div>
</footer>

</body>
</html>
