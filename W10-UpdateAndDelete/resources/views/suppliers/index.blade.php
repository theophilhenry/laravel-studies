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
                    <tr>
                        <td class="numeric">{{ $supplier->id }}</td>
                        <td>{{ $supplier->supplier_name }}</td>
                        <td>{{ $supplier->supplier_address }}</td>
                        <td>
                            <a href="{{ route('suppliers.show', $supplier->id) }}" class="btn btn-sm"
                                data-target="#mymodal" data-toggle="modal">
                                Show in a New Page
                            </a>
                            <a href="#modalSupplier" class="btn btn-warning btn-sm" data-toggle="modal"
                                onclick="getDetailData({{ $supplier->id }})">
                                <i class="fa fa-pencil"></i>
                                Show w/ Modal AJAX
                            </a>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



        <div class="modal fade" id="modalSupplier" tabindex="-1" role="modal" aria-hidden="true" style="display: none;">
        </div>
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
        </script>
    @endsection
