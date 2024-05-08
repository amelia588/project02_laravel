@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')
<style>
    .container {
        max-width: 1140px; /* Ajusta según las necesidades de tu diseño */
    }
    .stylish-image {
        border-radius: 20px; /* Bordes redondeados */
        box-shadow: 0 4px 8px rgba(0,0,0,0.15); /* Sombra suave para profundidad */
        transition: transform 0.3s ease-in-out; /* Transición suave para hover */
    }

    .stylish-image:hover {
        transform: scale(1.05); /* Efecto de zoom sutil al pasar el ratón */
    }
    h1, h2 { /* Ajustado para incluir h2 si decides usar subtítulos */
        font-size: 2.5rem; /* Ajusta el tamaño según tus preferencias */
        color: #333;
    }

    p {
        font-size: 1.2rem;
        color: #666;
        line-height: 1.6;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
        border-radius: 8px; /* Añade curvatura a la imagen */
    }

    /* Estilos adicionales para alternar las imágenes */
    .alternate-section .col-md-6:first-child {
        order: 2; /* Cambia el orden solo en secciones alternas */
    }
    .alternate-section .col-md-6:last-child {
        order: 1;
    }
</style>

<div class="container mt-4">
    <!-- Sección estándar -->
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="https://www.shutterstock.com/image-photo/specialist-working-on-personal-computer-260nw-1603390849.jpg" class="img-fluid" alt="Imagen representativa">
        </div>
        <div class="col-md-6">
            <h1>Sobre Nosotros</h1>
            <p>En esta sección, puedes hablar sobre la historia de tu empresa, tu misión, visión y los valores que guían tu negocio. También es un buen lugar para mencionar logros importantes y destacar el equipo detrás de tus productos o servicios.</p>
        </div>
    </div>

    <!-- Sección alternada -->
    <div class="row align-items-center mt-5 alternate-section">
        <div class="col-md-6">
            <img src="https://img.freepik.com/foto-gratis/experiencia-programacion-persona-que-trabaja-codigos-computadora_23-2150010130.jpg" class="img-fluid" alt="Otra Imagen">
        </div>
        <div class="col-md-6">
            <h2>Otra Sección</h2>
            <p>Texto para una nueva sección, describiendo otro aspecto de tu negocio o historia.</p>
        </div>
    </div>
</div>
@endsection




