@extends('layouts/conquer2')

@section('content')
    <h1>Product Table</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Selling Price</th>
                <th scope="col">Production Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Category ID</th>
                <th scope="col">Supplier ID</th>
            </tr>
        </thead>
        <tbody>
            {{-- {{ dd($data) }} --}}
            @foreach ($data as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_selling_price }}</td>
                    <td>{{ $product->product_production_price }}</td>
                    <td>{{ $product->product_stock }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>{{ $product->supplier_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
