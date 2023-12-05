@extends('layouts.app')

@section('title', 'Carrito de compras')

@section('content')
@endsection

<body>
    <h1>Carrito de compras</h1>

    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $item)
            <tr>
                <td>{{ $item['product']['name'] }}</td>
                <td>{{ $item['quantity'] }}</td>
                <td>{{ $item['product']['price'] }}</td>
                <td>{{ $item['quantity'] * $item['product']['price'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p>Total: {{ $total }}</p>

    <a href="{{ route('cart.index') }}">Volver</a>

</body>
@endsection