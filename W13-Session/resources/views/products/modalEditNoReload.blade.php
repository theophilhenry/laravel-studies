<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Edit Product</h4>
        </div>
        <div class="modal-body" id="modalEditBody">
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="formEditProductNameNR" name="product_name" value="{{ $product->product_name }}">
                </div>
                <div class="form-group">
                    <label for="inputProductionPrice">Production Price</label>
                    <input type="text" class="form-control" id="formEditProductProductionPriceNR" name="product_production_price" value="{{ $product->product_production_price }}">
                </div>
                <div class="form-group">
                    <label for="inputSellingPrice">Selling Price</label>
                    <input type="text" class="form-control" id="formEditProductSellingPriceNR" name="product_selling_price" value="{{ $product->product_selling_price }}">
                </div>
                <div class="form-group">
                    <label for="inputStock">Stock</label>
                    <input type="text" class="form-control" id="formEditProductStockNR" name="product_stock" value="{{ $product->product_stock }}">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id" id="formEditProductCategoryNR">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if($category->id == $product->category->id ) selected @endif>{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
        
                <div class="form-group">
                    <label>Supplier</label>
                    <select class="form-control" name="supplier_id" id="formEditProductSupplierNR">
                        @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}" @if($supplier->id == $product->supplier->id ) selected @endif>{{ $supplier->supplier_name }}</option>
                        @endforeach
                    </select>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-info" data-dismiss="modal" onclick="updateProductNoReload({{ $product->id }})">Update</button>
        </div>
    </div>
</div>