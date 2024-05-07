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
            background-image: url('/'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .navbar {
            background-color: #333;
            color: #f8f9fa;
        }
        .navbar .navbar-brand {
            color: #fff;
        }
        .navbar-nav .nav-link {
            color: #ddd;
        }
        .navbar-nav .nav-link:hover {
            color: #fff;
        }
        .search-box {
            display: flex;
            align-items: center;
        }
        .search-box input[type="search"] {
            border: none;
            background: none;
            outline: none;
            color: #fff;
            padding: 8px;
            width: 180px;
        }
        .search-box .btn {
            color: #fff;
            background: none;
            border: none;
        }
        footer {
            background-color: #333;
            color: #fff;
        }
        footer a {
            color: #fff;
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
        }
    </style>

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
                <uul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('productos.index') }}">Ver Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('carrito.index') }}">Mi Carrito</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contactos') }}">Contacto</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('servicios') }}">Servicios</a></li>
            </uul>
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
            <a href="{{ url('/') }}">TiendaOnline.com</

