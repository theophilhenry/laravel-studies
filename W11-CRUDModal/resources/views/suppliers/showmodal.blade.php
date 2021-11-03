{{-- BEGIN Modal Basic --}}

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Info Detail Supplier</h4>
        </div>
        <div class="modal-body" id="modalSupplierBody">
            <p>Nama Supplier : {{ $supplier->supplier_name }}</p>
            <p>Alamat : {{ $supplier->supplier_address }}</p>
            <p>Produk yang dijual oleh Supplier : </p>
            <table class="table">
                <tr>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Stock</th>
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_selling_price }}</td>
                        <td>{{ $product->product_stock }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
