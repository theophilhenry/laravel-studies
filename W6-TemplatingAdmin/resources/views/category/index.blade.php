@extends('layouts.conquer2')

@section('content')
    <div class="page-content">
        <h3 class="page-title">
            Category <small>list of categories</small>
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="index.html">Category</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">List of Categories</a>
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
                    <th>Category Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $category)
                    <tr>
                        <td class="numeric">{{ $category->id }}</td>
                        <td>{{ $category->category_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
