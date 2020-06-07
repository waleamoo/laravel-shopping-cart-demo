@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
    @if(Session::has('cart'))
        <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <ul class="list-group">

            @foreach ($products as $product)
                <li class="list-group-item">
                    <span class="badge badge-danger">{{ $product['qty'] }} </span>
                    <strong> {{ $product['item']['title']}}</strong>
                    <span class="badge badge-success">${{ $product['price'] }}</span>
                    

                    <div class="btn-group">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">Reduce by 1</a>
                            <a class="dropdown-item" href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">Reduce All</a>
                        </div>
                    </div>

                </li>
            @endforeach
            </ul>
        </div>
        </div>
        <!-- total price section -->
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{ $totalPrice }}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2> No items in cart! </h2>
            </div>
        </div>
    @endif
@endsection