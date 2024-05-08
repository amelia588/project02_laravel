@extends('layouts.app')

@section('title', 'Contactos')

@section('content')
<style>
    .container {
        max-width: 1140px; /* Ajusta según las necesidades de tu diseño */
    }

    .social-icons a {
        color: #007bff; /* Color azul, ajusta según tu esquema de colores */
        transition: color 0.3s ease-in-out;
    }

    .social-icons a:hover {
        color: #0056b3; /* Color más oscuro al pasar el ratón */
        text-decoration: none; /* Elimina el subrayado */
    }

    .card {
        border-radius: 15px; /* Bordes redondeados para la tarjeta */
    }

    .btn-primary {
        background-color: #004085; /* Oscurece el botón principal */
        border-color: #003768; /* Borde del botón */
    }
</style>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <!-- Tarjeta para la sección de contacto -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="card-title mb-4">Contacta Con Nosotros</h1>
                    <p class="card-text">Si tienes alguna pregunta sobre nuestros productos o servicios, o necesitas asistencia, no dudes en contactarnos. Completa el formulario a continuación y te responderemos tan pronto como sea posible.</p>
                    
                    <!-- Iconos de redes sociales con un poco más de estilo -->
                    <div class="social-icons mb-3">
                        <a href="https://facebook.com/tuPagina" class="me-3">
                            <i class="fab fa-facebook-f fa-lg"></i>
                        </a>
                        <a href="https://wa.me/tuNumero" class="me-3">
                            <i class="fab fa-whatsapp fa-lg"></i>
                        </a>
                        <a href="https://tiktok.com/@tuUsuario" class="me-3">
                            <i class="fab fa-tiktok fa-lg"></i>
                        </a>
                        <a href="https://linkedin.com/in/tuPerfil" class="me-3">
                            <i class="fab fa-linkedin-in fa-lg"></i>
                        </a>
                    </div>

                    <!-- Formulario -->
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


