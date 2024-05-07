{{-- resources/views/carrito/checkout.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Checkout</h1>
    <form action="{{ route('carrito.checkout') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="address" class="form-label">Dirección de Envío</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <button type="submit" class="btn btn-success">Confirmar Pedido</button>
    </form>
</div>
@endsection
