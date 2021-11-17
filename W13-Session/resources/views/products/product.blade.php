@extends('layouts.frontend')

@section('title', 'Products')

@section('content')

<div class="container products">

    <div class="row">

        @foreach ($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ asset('images/' . $product->product_image) }}" alt="Product Image">
                <div class="caption">
                    <h4>{{ $product->product_name }}</h4>
                    <p>{{ $product->description ?? 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi' }}</p>
                    <p><strong>Price: </strong> {{ $product->product_selling_price }}</p>
                    <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
        @endforeach

    </div><!-- End row -->

</div>

@endsection