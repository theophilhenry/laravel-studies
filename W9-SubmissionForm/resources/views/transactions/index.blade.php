@extends('layouts.conquer2')

@section('content')
    <div class="page-content">
        <h3 class="page-title">
            Transactions <small>list of transactions</small>
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="index.html">Transactions</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">List of Transactions</a>
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
                    <th>Pembeli</th>
                    <th>Kasir</th>
                    <th>Tanggal Transaksi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td class="numeric">{{ $transaction->id }}</td>
                        <td>{{ $transaction->customer->customer_name }}</td>
                        <td>{{ $transaction->user->name }}</td>
                        <td>{{ $transaction->transaction_date }}</td>
                        <td>
                            <button type="button" data-target="#modalTransaction" class="btn btn-warning btn-sm" data-toggle="modal"
                                onclick="getDetailData({{ $transaction->id }})">
                                <i class="fa fa-pencil"></i>
                                Lihat Rincian Pembelian
                            </button>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



        <div class="modal fade" id="modalTransaction" tabindex="-1" role="modal" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Rincian Pembelian</h4>
                    </div>
                    <div class="modal-body" id="modalTransactionBody">
                        {{-- Modal Body Here --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('ajax')
        <script>
            function getDetailData(id) {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('transactions.showAjax') }}",
                    data: {
                        '_token': '<?php echo csrf_token(); ?>',
                        'id': id,
                    },
                    success: function(data) {
                        $('#modalTransactionBody').html(data.msg);
                    }
                });
            }
        </script>
    @endsection
