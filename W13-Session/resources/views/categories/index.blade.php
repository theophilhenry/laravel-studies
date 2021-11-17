@extends('layouts.conquer2')

@section('content')
<div class="page-content">
    @include('alerts.alert')
    
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
            <a href="{{ route('categories.create') }}" class="btn btn-success">Add Category</a>
        </div>
    </div>

    <table class="table table-bordered table-striped table-condensed flip-content">
        <thead class="flip-content">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $category)
            <tr>
                <td class="numeric">{{ $category->id }}</td>
                <td>{{ $category->category_name }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="post" style="display: inline;">@csrf @method('DELETE')<button type="submit" href="" class="btn btn-danger btn-sm" onclick="if(!confirm('Delete the data?')) return false;">Delete</button></form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection