@extends('layouts.conquer2')

@section('content')
    <div class="page-content">
        @include('alerts.alert')
        <h3 class="page-title">
            Product <small>list of products</small>
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="index.html">Product</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">List of Products</a>
                </li>
            </ul>
            <div class="page-toolbar">
                <a href="{{ route('products.create') }}" class="btn btn-success">Add Product</a>
            </div>
        </div>
        <div class="row">
            @foreach ($data as $product)
                <div class="col-lg-3 col-md-4 col-sm-5">
                    <div class="panel" >
                        <div class="panel-heading">
                            <img src="{{ asset('images/' . $product->product_image) }}" alt="..." style="height: 200px;">
                        </div>
                        <div class="panel-body">
                            <h5 class="card-title">{{ $product->product_name }}</h5>
                            <p class="card-text">
                                <p>Production Price : {{ $product->product_production_price }}</p>
                                <p>Selling Price : {{ $product->product_selling_price }}</p>
                                <p>Stock : {{ $product->product_stock }}</p>
                                <p>Category : {{ $product->category->category_name }}</p>
                                <p>Supplier : {{ $product->supplier->supplier_name }}</p>
                            </p>
                        </div>
                        <div class="panel-footer">
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="post" style="display: inline;">@csrf @method('DELETE')<button type="submit" href="" class="btn btn-danger btn-sm" onclick="if(!confirm('Delete the data?')) return false;">Delete</button></form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
