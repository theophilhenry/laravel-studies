@extends('layouts.conquer2')

@section('content')
    <div class="page-content">
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
                <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height btn-primary"
                    data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                    <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i
                        class="fa fa-angle-down"></i>
                </div>
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
                            <a href="{{ route('supplier.show', $supplier->id ) }}" class="btn btn-sm" 
                                data-target="#mymodal" data-toggle="modal">
                                Show in New Page
                            </a>
                            <a href="#basic" class="btn btn-warning btn-sm" data-toggle="modal">
                                <i class="fa fa-pencil"></i>
                                Show w/ AJAX
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- BEGIN Modal Basic --}}
        <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Modal Title</h4>
                    </div>
                    <div class="modal-body">
                        Modal body goes here
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        {{-- END Modal Basic --}}
    @endsection
