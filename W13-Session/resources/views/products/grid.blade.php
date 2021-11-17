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
            <a href="#modalCreate" data-toggle="modal" class="btn btn-success">Add Supplier (Modal)</a>
        </div>
    </div>
    <div class="row">
        @foreach ($data as $product)
        <div id="product_{{ $product->id }}" class="col-lg-3 col-md-4 col-sm-5">
            <div class="panel">
                <div class="panel-heading">
                    <img src="{{ asset('images/' . $product->product_image) }}" alt="..." style="height: 200px;">
                </div>
                <div class="panel-body">
                    <h5 class="card-title" id="product_production_name_{{ $product->id }}">{{ $product->product_name }}</h5>
                    <p class="card-text">
                    <p>Production Price : <span id="product_production_price_{{ $product->id }}">{{ $product->product_production_price }}</span></p>
                    <p>Selling Price : <span id="product_selling_price_{{ $product->id }}">{{ $product->product_selling_price }}</span></p>
                    <p>Stock : <span id="product_stock_{{ $product->id }}">{{ $product->product_stock }}</span></p>
                    <p>Category : <span id="product_category_name_{{ $product->id }}">{{ $product->category->category_name }}</span></p>
                    <p>Supplier : <span id="product_supplier_name_{{ $product->id }}">{{ $product->supplier->supplier_name }}</span></p>
                    </p>
                </div>
                <div class="panel-footer">
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="#modalEdit" data-toggle="modal" class="btn btn-primary btn-sm" onclick="getModalEdit({{ $product->id }})">Edit A (Modal)</a>
                    <a href="#modalEdit" data-toggle="modal" class="btn btn-primary btn-sm" onclick="getModalEditNoReload({{ $product->id }})">Edit B (No Reload)</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="post" style="display: inline;">@csrf @method('DELETE')<button type="submit" href="" class="btn btn-danger btn-sm" onclick="if(!confirm('Delete the data?')) return false;">Delete</button></form>
                    <button class="btn btn-danger btn-sm" onclick="if(!confirm('Delete the data?')) return false; else deleteProductNoReload({{ $product->id }})">Delete (No Reload)</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


    {{-- ADD MODAL --}}
    <div class="modal fade" id="modalCreate" tabindex="-1" role="modal" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Add New Supplier</h4>
                </div>
                <div class="modal-body" id="modalCreateBody">
                    <form method="POST" action="{{ route('products.store') }}" id="formCreateProduct">
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
                
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-info" form="formCreateProduct">Submit</button>
                </div>
            </div>
        </div>
    </div>
    {{-- / ADD MODAL --}}

    
    {{-- EDIT MODAL --}}
    <div class="modal fade" id="modalEdit" tabindex="-1" role="modal" aria-hidden="true" style="display: none;">
    </div>
    {{-- / EDIT MODAL --}}
@endsection

@section('ajax')
<script>
    function getModalEdit(id) {
        $.ajax({
            type: 'POST',
            url: "{{ route('products.getModalEdit') }}",
            data: {
                '_token': '<?php echo csrf_token(); ?>',
                'id': id,
            },
            success: function(data) {
                $('#modalEdit').html(data.msg);
            }
        });
    }
    
    function getModalEditNoReload(id) {
        $.ajax({
            type: 'POST',
            url: "{{ route('products.getModalEditNoReload') }}",
            data: {
                '_token': '<?php echo csrf_token(); ?>',
                'id': id,
            },
            success: function(data) {
                $('#modalEdit').html(data.msg);
            }
        });
    }

    function updateProductNoReload(id){
        var product_name = $('#formEditProductNameNR').val();
        var product_production_price = $('#formEditProductProductionPriceNR').val();
        var product_selling_price = $('#formEditProductSellingPriceNR').val();
        var product_stock = $('#formEditProductStockNR').val();
        var product_category_id = $('#formEditProductCategoryNR').val();
        var product_category_name = $('#formEditProductCategoryNR option:selected').text();
        var product_supplier_id = $('#formEditProductSupplierNR').val();
        var product_supplier_name = $('#formEditProductSupplierNR option:selected').text();
        $.ajax({
            type: 'POST',
            url: "{{ route('products.updateProductNoReload') }}",
            data: {
                '_token': '<?php echo csrf_token(); ?>',
                'id': id,
                'product_name': product_name,
                'product_production_price': product_production_price,
                'product_selling_price': product_selling_price,
                'product_stock': product_stock,
                'product_category_id': product_category_id,
                'product_supplier_id': product_supplier_id
            },
            success: function(data) {
                alert(data.msg);
                // TODO
                $('#product_production_name_'+id).html(product_name);
                $('#product_production_price_'+id).html(product_production_price);
                $('#product_selling_price_'+id).html(product_selling_price);
                $('#product_stock_'+id).html(product_stock);
                $('#product_category_name_'+id).html(product_category_name);
                $('#product_supplier_name_'+id).html(product_supplier_name);
            }
        });
    }

    function deleteProductNoReload(id){
        $.ajax({
            type: 'POST',
            url: "{{ route('products.deleteProductNoReload') }}",
            data: {
                '_token': '<?php echo csrf_token(); ?>',
                'id': id,
            },
            success: function(data) {
                alert(data.msg);
                if(data.status = "success")
                    $('#product_'+id).remove();
            }
        });
    }
</script>
@endsection