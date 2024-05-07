@extends('layouts.app')

@section('title', 'Contactos')

@section('content')
<div class="container mt-4">
    <h1 class="mb-3">Contacta Con Nosotros</h1>
    <p>Si tienes alguna pregunta sobre nuestros productos o servicios, o necesitas asistencia, no dudes en contactarnos. Completa el formulario a continuación y te responderemos tan pronto como sea posible.</p>
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
            <textarea class="form-control" id="message" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
    </form>
</div>
@endsection
