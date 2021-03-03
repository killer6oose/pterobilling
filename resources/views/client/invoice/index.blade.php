@extends('layouts.client')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Unpaid Invoices</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th style="width:5%">ID</th>
                                <th style="width:32%">Item</th>
                                <th style="width:13%">Amount</th>
                                <th style="width:25%">Invoice Date</th>
                                <th style="width:25%">Due Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="{{ route('client.invoice.show', ['id' => 1]) }}">2</a></td>
                                <td>Server - Plan 1</td>
                                <td>$5.00 USD</td>
                                <td>Jan 1, 2021 13:30 (UTC)</td>
                                <td>Jan 1, 2021 13:30 (UTC)</td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('client.invoice.show', ['id' => 1]) }}">1</a></td>
                                <td>Server - Plan 1</td>
                                <td>$5.00 USD</td>
                                <td>Jan 1, 2021 13:30 (UTC)</td>
                                <td>Jan 1, 2021 13:30 (UTC)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Paid Invoices</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th style="width:5%">ID</th>
                                <th style="width:32%">Item</th>
                                <th style="width:13%">Amount</th>
                                <th style="width:25%">Invoice Date</th>
                                <th style="width:25%">Paid Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="{{ route('client.invoice.show', ['id' => 1]) }}">2</a></td>
                                <td>Server - Plan 1</td>
                                <td>$5.00 USD</td>
                                <td>Jan 1, 2021 13:30 (UTC)</td>
                                <td>Jan 1, 2021 13:30 (UTC)</td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('client.invoice.show', ['id' => 1]) }}">1</a></td>
                                <td>Server - Plan 1</td>
                                <td>$5.00 USD</td>
                                <td>Jan 1, 2021 13:30 (UTC)</td>
                                <td>Jan 1, 2021 13:30 (UTC)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
