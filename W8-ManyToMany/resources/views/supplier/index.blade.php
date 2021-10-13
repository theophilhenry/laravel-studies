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
                            <a href="{{ route('supplier.show', $supplier->id) }}" class="btn btn-sm"
                                data-target="#mymodal" data-toggle="modal">
                                Show in New Page
                            </a>
                            <a href="#basic" class="btn btn-warning btn-sm" data-toggle="modal" onclick="getDetailData({{$supplier->id}})">
                                <i class="fa fa-pencil"></i>
                                Show w/ AJAX
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div id="msg">

        </div>
@endsection

@section('ajax')
    <script>
        function getDetailData(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('supplier.showAjax') }}",
                data: '_token = <?php echo csrf_token(); ?> &id=' + id,
                success: function(data) {
                    alert(id);
                    // $('#msg').html(data.msg);
                }
            });
        }
    </script>
@endsection
