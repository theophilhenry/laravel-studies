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
        <div class="row">
            @foreach ($data as $product)
                <div class="col-lg-3 col-md-4 col-sm-5">
                    <div class="panel" >
                        <div class="panel-heading">
                            <img src="{{ asset('images/' . $product->product_image) }}" alt="..." style="height: 200px;">
                        </div>
                        <div class="panel-body">
                            <h5 class="card-title">{{ $product->id }}</h5>
                            <p class="card-text">{{ $product->product_name }}</p>
                        </div>
                        <div class="panel-footer">
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
