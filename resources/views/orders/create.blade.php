@extends('layouts.app')
@section('content')
<h1>Order details</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-light">
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </thead>
            <tbody>
    @foreach($cart->products as $product)
            <tr>
                <td>
                <img src="{{ asset($product->images->first()->path) }}" width="100">
                    {{ $product->title }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->pivot->quantity }}</td>
                <td>{{ $product->price * $product->pivot->quantity }}</td> 
            </tr>
    @endforeach
            </tbody>
        </table>
    </div>
@endsection