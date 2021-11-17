<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Edit Supplier</h4>
        </div>
        <div class="modal-body" id="modalEditBody">
            <form method="POST" action="{{ route('suppliers.update', $supplier->id) }}" id="formEditSupplier">
                @csrf
                @method("PATCH")
        
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Enter Name" name="supplier_name" value="{{ $supplier->supplier_name }}">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" rows="3" name="supplier_address">{{ $supplier->supplier_address }}</textarea>
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
                <a href="{{ route('suppliers.index') }}" class="btn btn-default">Cancel</a>
        
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info" form="formEditSupplier">Update</button>
        </div>
    </div>
</div>