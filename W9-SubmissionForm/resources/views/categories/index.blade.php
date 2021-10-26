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

        {{-- BEGIN Portlet --}}
        <div class="portlet">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-reorder"></i>Portlet1
                </div>
                <div class="actions">
                    <a href="#" class="btn btn-warning btn-sm" onclick="showInfo()"><i class="fa fa-pencil"></i>AJAX</a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;"><div class="scroller" style="overflow: hidden; width: auto; height: 200px;" data-rail-visible="1" data-rail-color="yellow" data-handle-color="#a1b2bd">
                    <strong>Scroll is hidden</strong><br>
                    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
                </div><div class="slimScrollBar" style="background: rgb(161, 178, 189); width: 7px; position: absolute; border-radius: 7px; z-index: 99; right: 1px; top: 0px; height: 170.94px; display: none; opacity: 0.4;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; border-radius: 7px; background: yellow; z-index: 90; right: 1px; display: none; opacity: 0.2;"></div></div>
            </div>
        </div>
        {{-- END Portlet --}}

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

        <script>
            function showInfo() {
                alert('hello');
            }
        </script>
    @endsection
