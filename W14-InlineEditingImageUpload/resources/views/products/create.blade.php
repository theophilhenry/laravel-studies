@extends('layouts.conquer2')

@section('content')
<div class="page-content">
    <h3 class="page-title">
        Create New <small>product</small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">Product</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Create New Product</a>
            </li>
        </ul>
        <div class="page-toolbar">
            {{-- Toolbar Here --}}
        </div>
    </div>

    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" role="form">
        @csrf
        
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" name="product_name">
        </div>
        <div class="form-group">
            <label for="inputProductionPrice">Production Price</label>
            <input type="text" class="form-control" id="inputProductionPrice" name="product_production_price">
        </div>
        <div class="form-group">
            <label for="inputSellingPrice">Selling Price</label>
            <input type="text" class="form-control" id="inputSellingPrice" name="product_selling_price">
        </div>
        <div class="form-group">
            <label for="inputStock">Stock</label>
            <input type="text" class="form-control" id="inputStock" name="product_stock">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Supplier</label>
            <select class="form-control" name="supplier_id">
                @foreach ($suppliers as $supplier)
                <option value="{{ $supplier->id }}">{{ $supplier->supplier_name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label>Image</label>
            <input class="form-control" type="file" id='product_image' name='product_image'/>
        </div>
        
        <button type="submit" class="btn btn-info">Submit</button>
        <a href="{{ route('products.index') }}" type="button" class="btn btn-default">Cancel</a>

    </form>

</div>
@endsection