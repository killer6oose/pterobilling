@extends('layouts.client')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Active Servers</h3>
                    <div class="card-tools">
                        <a href="{{ config('app.panel_url') }}" class="btn btn-default btn-sm float-right" target="_blank">View in Panel <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th style="width:5%">ID</th>
                                <th style="width:15%">Plan</th>
                                <th style="width:25%">Server Name</th>
                                <th style="width:25%">Subdomain Name</th>
                                <th style="width:8%">Players</th>
                                <th style="width:6%">CPU</th>
                                <th style="width:6%">RAM</th>
                                <th style="width:10%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="{{ route('client.server.show', ['id' => 1]) }}">3</a></td>
                                <td>Plan 1</td>
                                <td>My Third Server</td>
                                <td>server3.example.com</td>
                                <td>-- / 20</td>
                                <td>100%</td>
                                <td>8%</td>
                                <td><span class="badge bg-info">Starting</span></td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('client.server.show', ['id' => 1]) }}">2</a></td>
                                <td>Plan 1</td>
                                <td>My Second Server</td>
                                <td>server2.example.com</td>
                                <td>-- / 20</td>
                                <td>0%</td>
                                <td>0%</td>
                                <td><span class="badge bg-danger">Offline</span></td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('client.server.show', ['id' => 1]) }}">1</a></td>
                                <td>Plan 1</td>
                                <td>My First Server</td>
                                <td>server1.example.com</td>
                                <td>-- / 20</td>
                                <td>29%</td>
                                <td>36%</td>
                                <td><span class="badge bg-success">Online</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pending Servers</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th style="width:10%">ID</th>
                                <th style="width:20%">Plan</th>
                                <th style="width:35%">Server Name</th>
                                <th style="width:35%">Order Date (UTC)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="{{ route('client.server.show', ['id' => 1]) }}">3</a></td>
                                <td>Plan 1</td>
                                <td>My Third Server</td>
                                <td>Jan 1, 2021 13:00</td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('client.server.show', ['id' => 1]) }}">2</a></td>
                                <td>Plan 1</td>
                                <td>My Second Server</td>
                                <td>Jan 1, 2021 13:00</td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('client.server.show', ['id' => 1]) }}">1</a></td>
                                <td>Plan 1</td>
                                <td>My First Server</td>
                                <td>Jan 1, 2021 13:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Canceled Servers</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th style="width:10%">ID</th>
                                <th style="width:20%">Plan</th>
                                <th style="width:35%">Server Name</th>
                                <th style="width:35%">Cancellation (UTC)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="{{ route('client.server.show', ['id' => 1]) }}">3</a></td>
                                <td>Plan 1</td>
                                <td>My Third Server</td>
                                <td>Jan 1, 2021 13:00</td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('client.server.show', ['id' => 1]) }}">2</a></td>
                                <td>Plan 1</td>
                                <td>My Second Server</td>
                                <td>Jan 1, 2021 13:00</td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('client.server.show', ['id' => 1]) }}">1</a></td>
                                <td>Plan 1</td>
                                <td>My First Server</td>
                                <td>Jan 1, 2021 13:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Suspended Servers</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th style="width:10%">ID</th>
                                <th style="width:20%">Plan</th>
                                <th style="width:35%">Server Name</th>
                                <th style="width:35%">Suspension (UTC)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="{{ route('client.server.show', ['id' => 1]) }}">3</a></td>
                                <td>Plan 1</td>
                                <td>My Third Server</td>
                                <td>Jan 1, 2021 13:00</td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('client.server.show', ['id' => 1]) }}">2</a></td>
                                <td>Plan 1</td>
                                <td>My Second Server</td>
                                <td>Jan 1, 2021 13:00</td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('client.server.show', ['id' => 1]) }}">1</a></td>
                                <td>Plan 1</td>
                                <td>My First Server</td>
                                <td>Jan 1, 2021 13:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
