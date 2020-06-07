@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
    @if(Session::has('success'))
    <div class="row">
        <div class="col-sm-6">
            <div id="charge-message" class="alert alert-success">
                {{ Session::get('success' )}}
            </div>
        </div>
    </div>
    @endif
    @foreach($products->chunk(3) as $productChunk)
    <div class="row">
        @foreach($productChunk as $product)
            <div class="card" style="width: 18rem;">
            <img src="{{ $product->imagePath }}" class="card-img-top" alt="Supplement Image" style="width: 150px; height: 130px;">
            <div class="card-body">
                <h5 class="card-title">{{ $product->title }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <p class="price pull-left">${{ $product->price }}</p>
                <a href="{{ route('product.addToCart', ['id' => $product->id])}}" class="btn btn-success pull-right">Add to Cart</a>
            </div>
            </div>
        @endforeach
    </div>
    @endforeach
@endsection