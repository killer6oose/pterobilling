@extends('layouts.client')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>$10.00 USD</h3>
                    <p>Account Credit</p>
                </div>
                <div class="icon">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <a href="{{ route('client.credit.show') }}" class="small-box-footer">
                    Add Fund <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>3</h3>
                    <p>Active Servers</p>
                </div>
                <div class="icon">
                    <i class="fas fa-server"></i>
                </div>
                <a href="{{ route('client.server.index') }}" class="small-box-footer">
                    View All <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>2</h3>
                    <p>Unpaid Invoices</p>
                </div>
                <div class="icon">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <a href="{{ route('client.invoice.index') }}" class="small-box-footer">
                    View All <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>1</h3>
                    <p>Pending Tickets</p>
                </div>
                <div class="icon">
                    <i class="fas fa-ticket-alt"></i>
                </div>
                <a href="{{ route('client.ticket.index') }}" class="small-box-footer">
                    View All <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Active Servers</h3>
                    <div class="card-tools">
                        <a href="{{ route('client.server.index') }}" class="btn btn-default btn-sm float-right">View All Servers <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th style="width:10%">ID</th>
                                <th style="width:25%">Plan</th>
                                <th style="width:55%">Server Name</th>
                                <th style="width:10%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="{{ route('client.server.show', ['id' => 1]) }}">3</a></td>
                                <td>Plan 1</td>
                                <td>My Third Server</td>
                                <td><span class="badge bg-info">Starting</span></td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('client.server.show', ['id' => 1]) }}">2</a></td>
                                <td>Plan 1</td>
                                <td>My Second Server</td>
                                <td><span class="badge bg-danger">Offline</span></td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('client.server.show', ['id' => 1]) }}">1</a></td>
                                <td>Plan 1</td>
                                <td>My First Server</td>
                                <td><span class="badge bg-success">Online</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Recent Support Tickets</h3>
                    <div class="card-tools">
                        <a href="{{ route('client.ticket.index') }}" class="btn btn-default btn-sm float-right">View All Support Tickets <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th style="width:10%">ID</th>
                                <th style="width:70%">Subject</th>
                                <th style="width:20%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="{{ route('client.ticket.show', ['id' => 1]) }}">4</a></td>
                                <td>Please help!</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('client.ticket.show', ['id' => 1]) }}">3</a></td>
                                <td>Another question</td>
                                <td><span class="badge bg-info">Open</span></td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('client.ticket.show', ['id' => 1]) }}">2</a></td>
                                <td>Please help me!!</td>
                                <td><span class="badge bg-danger">Closed</span></td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('client.ticket.show', ['id' => 1]) }}">1</a></td>
                                <td>A question</td>
                                <td><span class="badge bg-success">Resolved</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Unpaid Invoices</h3>
                    <div class="card-tools">
                        <a href="{{ route('client.invoice.index') }}" class="btn btn-default btn-sm float-right">View All Invoices <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th style="width:10%">ID</th>
                                <th style="width:45%">Item</th>
                                <th style="width:15%">Amount</th>
                                <th style="width:30%">Due Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="{{ route('client.invoice.index', ['id' => 1]) }}">2</a></td>
                                <td>Server - Plan 1</td>
                                <td>$5.00 USD</td>
                                <td>Jan 1, 2021</td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('client.invoice.index', ['id' => 1]) }}">1</a></td>
                                <td>Server - Plan 1</td>
                                <td>$5.00 USD</td>
                                <td>Jan 1, 2021</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Credit Transactions</h3>
                    <div class="card-tools">
                        <a href="{{ route('client.credit.show') }}" class="btn btn-default btn-sm float-right">More details <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th style="width:10%">ID</th>
                                <th style="width:30%">Details</th>
                                <th style="width:15%">Change</th>
                                <th style="width:15%">Balance</th>
                                <th style="width:30%">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>Ordered Plan</td>
                                <td>-$5.00 USD</td>
                                <td>$10.00 USD</td>
                                <td>Jan 1, 2021</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ordered Plan</td>
                                <td>-$5.00 USD</td>
                                <td>$15.00 USD</td>
                                <td>Jan 1, 2021</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Affiliate Commission</td>
                                <td>+$20.00 USD</td>
                                <td>$20.00 USD</td>
                                <td>Jan 1, 2021</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
