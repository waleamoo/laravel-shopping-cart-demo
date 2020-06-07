@extends('layouts.master')

@section('title')
    Laravel Shopping Cart | Sign Up
@endsection

@section('content')
    <div class="col-md-4 col-md-offset-4">
        <h1>User Profile</h1>
        <hr>
        <h2>Your orders</h2>
        @foreach ($orders as $order)

        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($order->cart->items as $item)
                    <li class="list-group-item">
                        <span class="badge badge-danger"> ${{ $item['price'] }}</span>
                        {{ $item['item']['title']}} | {{ $item['qty']}} Units
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="panel-footer">
                <strong>Total Price: ${{ $order->cart->totalPrice }}</strong>
            </div>
        </div>
        
        @endforeach

    </div>
@endsection