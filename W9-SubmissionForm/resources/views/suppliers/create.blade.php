@extends('layouts.conquer2')

@section('content')
<div class="page-content">
    <h3 class="page-title">
        Create New <small>supplier</small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">Supplier</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Create New Supplier</a>
            </li>
        </ul>
        <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height btn-primary" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('suppliers.store') }}">
        @csrf
        
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Enter Name" name="supplier_name">
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" rows="3" name="supplier_address"></textarea>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
        <button type="button" class="btn btn-default">Cancel</button>

    </form>

</div>
@endsection