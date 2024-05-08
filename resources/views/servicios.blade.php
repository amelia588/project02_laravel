@extends('layouts.app')

@section('title', 'Servicios')

@section('content')
<style>
.service-card {
    text-align: center; /* Centra el texto de cada tarjeta */
    margin-bottom: 20px; /* Espacio debajo de cada tarjeta */
}

.service-image {
    width: 80%; /* Las imágenes ocuparán el 80% del ancho de la tarjeta */
    height: auto; /* Mantiene la proporción de la imagen */
    border-radius: 10px; /* Bordes redondeados para las imágenes */
    margin-bottom: 15px; /* Espacio entre la imagen y el texto */
    display: block; /* Asegura que la imagen se trate como bloque */
    margin-left: auto; /* Centra la imagen horizontalmente */
    margin-right: auto; /* Centra la imagen horizontalmente */
}
.service-image {
    width: 80%;
    height: auto;
    border-radius: 10px;
    margin-bottom: 15px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

/* Ajusta el tamaño en dispositivos más pequeños */
@media (max-width: 768px) {
    .service-image {
        width: 100%;
    }
}


</style>
<div class="container mt-4">
    <h1 class="mb-3">Nuestros Servicios</h1>
    <p>Aquí puedes describir los servicios que ofreces. Detalla cada servicio con información sobre lo que incluye, cómo se benefician los clientes, y por qué deberían elegir tus servicios sobre los de la competencia.</p>
    <div class="row">
        <div class="col-md-4">
            <div class="service-card">
                <img src="/" alt="Imagen del Servicio 1" class="service-image">
                <h3>PC ESCRITORIO</h3>
                <br>Por tal motivo, si su empresa tiene</br>
                <br>planificado contar con una</br>
                <br>capacitación, un charla o un evento</br>
                <br>en el cual se requiere equipos de</br>
                <br>computo, nosotros somos la solución.</br>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card">
                <img src="/" alt="Imagen del Servicio 2" class="service-image">
                <h3>TABLETS</h3>
                <br>Segun tus requerimientos y 
                necesidades, puedes escoger las 
                tablets de acuerdo a la potencia y gama.</br>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card">
                <img src="url-a-imagen-servicio-3.jpg" alt="Imagen del Servicio 3" class="service-image">
                <h3>ACCESORIOS</h3>
                <br>Teclados, mouse, sistemas de audio,
                 tabletas de dibujo, y adicionales.</br>
            </div>
        </div>
    </div>
</div>

@endsection
