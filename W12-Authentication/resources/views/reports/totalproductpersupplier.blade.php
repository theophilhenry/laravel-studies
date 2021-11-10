@extends('layouts.conquer2')

@section('content')

    <div class="page-content">
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
                <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height btn-primary"
                    data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                    <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i
                        class="fa fa-angle-down"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
            Total Product <small>per Supplier</small>
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="index.html">Report</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Total Product per Supplier</a>
                </li>
            </ul>
        </div>
        <!-- END PAGE HEADER-->
        <table class="table">
            <thead>
                <tr>
                    <th>ID Supplier</th>
                    <th>Nama Supplier</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                {{-- {{ print_r($data) }} --}}
                @foreach ($data as $supplier)
                    <tr>
                        <td>{{ $supplier->id }}</td>
                        <td>{{ $supplier->name }}</td>
                        <td>{{ $supplier->jumlah }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
