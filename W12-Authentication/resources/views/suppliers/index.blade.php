@extends('layouts.conquer2')

@section('content')
<div class="page-content">
    @include('alerts.alert')

    <h3 class="page-title">
        Supplier <small>list of suppliers</small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">Supplier</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">List of Supplier</a>
            </li>
        </ul>
        <div class="page-toolbar">
            <a href="{{ route('suppliers.create') }}" class="btn btn-success">Add Supplier</a>
            <a href="#modalCreate" data-toggle="modal" class="btn btn-success">Add Supplier (Modal)</a>
        </div>
    </div>

    <table class="table table-bordered table-striped table-condensed flip-content">
        <thead class="flip-content">
            <tr>
                <th>ID</th>
                <th>Supplier Name</th>
                <th>Supplier Adress</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $supplier)
            <tr id="tr_supplier_{{$supplier->id}}">
                <td class="numeric">{{ $supplier->id }}</td>
                <td id="td_supplier_name_{{$supplier->id}}">{{ $supplier->supplier_name }}</td>
                <td id="td_supplier_address_{{$supplier->id}}">{{ $supplier->supplier_address }}</td>
                <td>
                    <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="#modalEdit" data-toggle="modal" class="btn btn-primary btn-sm" onclick="getModalEdit({{ $supplier->id }})">Edit A (Modal)</a>
                    <a href="#modalEdit" data-toggle="modal" class="btn btn-primary btn-sm" onclick="getModalEditNoReload({{ $supplier->id }})">Edit B (No Reload)</a>
                    @can('delete-supplier-permission', $supplier)
                    <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="post" style="display: inline;">@csrf @method('DELETE')<button type="submit" href="" class="btn btn-danger btn-sm" onclick="if(!confirm('Delete the data?')) return false;">Delete</button></form>
                    <button class="btn btn-danger btn-sm" onclick="if(!confirm('Delete the data?')) return false; else deleteSupplierNoReload({{ $supplier->id }})">Delete (No Reload)</button>
                    @endcan
                    <a href="#modalSupplier" class="btn btn-warning btn-sm" data-toggle="modal" onclick="getDetailData({{ $supplier->id }})"><i class="fa fa-pencil"></i>Show w/ Modal AJAX</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="modal fade" id="modalSupplier" tabindex="-1" role="modal" aria-hidden="true" style="display: none;">
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
                    <form method="POST" action="{{ route('suppliers.store') }}" id="formCreateSupplier">
                        @csrf

                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Enter Name" name="supplier_name">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" rows="3" name="supplier_address"></textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-info" form="formCreateSupplier">Submit</button>
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
        function getDetailData(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('suppliers.showAjax') }}",
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'id': id,
                },
                success: function(data) {
                    $('#modalSupplier').html(data.msg);
                }
            });
        }
        function getModalEdit(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('suppliers.getModalEdit') }}",
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
                url: "{{ route('suppliers.getModalEditNoReload') }}",
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'id': id,
                },
                success: function(data) {
                    $('#modalEdit').html(data.msg);
                }
            });
        }
        function updateSupplierNoReload(id){
            var name = $('#formEditSupplierNameNR').val()
            var address = $('#formEditSupplierAddressNR').val() // Or HTML?
            $.ajax({
                type: 'POST',
                url: "{{ route('suppliers.updateSupplierNoReload') }}",
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'id': id,
                    'name': name,
                    'address': address
                },
                success: function(data) {
                    alert(data.msg);
                    $('#td_supplier_name_'+id).html(name);
                    $('#td_supplier_address_'+id).html(address);
                }
            });
        }

        function deleteSupplierNoReload(id){
            $.ajax({
                type: 'POST',
                url: "{{ route('suppliers.deleteSupplierNoReload') }}",
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'id': id,
                },
                success: function(data) {
                    alert(data.msg);
                    if(data.status = "success")
                        $('#tr_supplier_'+id).remove();
                }
            });
        }
    </script>
    @endsection