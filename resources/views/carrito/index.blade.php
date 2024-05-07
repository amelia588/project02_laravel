{{-- resources/views/carrito/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Carrito de Compras</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $item->nombre }}</td>
                <td>${{ number_format($item->precio, 2) }}</td>
                <td>{{ $item->cantidad }}</td>
                <td>${{ number_format($item->precio * $item->cantidad, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h3>Total: ${{ number_format($total, 2) }}</h3>
    <a href="{{ route('carrito.checkout') }}" class="btn btn-primary">Proceder al Pago</a>
</div>
@endsection


