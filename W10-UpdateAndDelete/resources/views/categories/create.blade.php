@extends('layouts.conquer2')

@section('content')
<div class="page-content">
    <h3 class="page-title">
        Create New <small>category</small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">Category</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Create New Category</a>
            </li>
        </ul>
        <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height btn-primary" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Enter Name" name="category_name">
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
        <a href="{{ route('categories.index') }}" class="btn btn-default">Cancel</a>

    </form>

</div>
@endsection