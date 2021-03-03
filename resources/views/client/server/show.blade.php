@extends('layouts.client')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title m-0">Server Information</h5>
                </div>
                <div class="card-body text-nowrap row">
                    <p class="card-text col-5">
                        <b>Plan Name</b><br>
                        <b>Server Name</b><br>
                        <b>Subdomain Name</b><br>
                        <b>Server IP</b><br>
                        <b>Server Status</b>
                    </p>
                    <p class="card-text col-7">
                        Plan 1<br>
                        Example Server<br>
                        server.example.com<br>
                        1.2.3.4:25565<br>
                        Online
                    </p>
                    <a href="{{ route('client.server.plan.show', ['id'=>1]) }}" class="btn btn-primary btn-sm col-12">Upgrade Server <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title m-0">Billing Overview</h5>
                </div>
                <div class="card-body text-nowrap row">
                    <p class="card-text col-7">
                        <b>Recurring Amount</b><br>
                        <b>Billing Cycle</b><br>
                        <b>Server Creation Date (UTC)</b><br>
                        <b>Next Due Date (UTC)</b><br>
                        <b>Payment Method</b><br>
                        <b>Backup Payment Method</b>
                    </p>
                    <p class="card-text col-5">
                        $5.00 USD<br>
                        Monthly<br>
                        Jan 1, 2021 13:00<br>
                        Feb 1, 2021 13:00<br>
                        PayPal<br>
                        Account Credit
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title m-0">Usage Statistics</h5>
                </div>
                <div class="card-body text-nowrap row">
                    <p class="card-text col-6">
                        <b>RAM</b><br>
                        <b>CPU</b><br>
                        <b>Disk</b><br>
                        <b>Databases</b><br>
                        <b>Backups</b><br>
                        <b>Ports</b><br>
                        <b>Slots</b>
                    </p>
                    <p class="card-text col-6">
                        1 / 4 GB<br>
                        30%<br>
                        2 / 10 GB<br>
                        1 / 3<br>
                        2 / 5<br>
                        1 / 2<br>
                        20
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title m-0">Quick Shortcuts</h5>
                </div>
                <div class="card-body text-nowrap row">
                    <p class="card-text col-lg-3 col-6">
                        <a href="{{ config('app.panel_url') }}/server/{{ $id }}"><i class="fas fa-terminal"></i> Console</a><br>
                        <a href="{{ config('app.panel_url') }}/server/{{ $id }}/files"><i class="fas fa-folder-open"></i> Files</a><br>
                        <a href="{{ config('app.panel_url') }}/server/{{ $id }}/databases"><i class="fas fa-database"></i> Databases</a>
                    </p>
                    <p class="card-text col-lg-3 col-6">
                        <a href="{{ config('app.panel_url') }}/server/{{ $id }}/schedules"><i class="fas fa-table"></i> Schedules</a><br>
                        <a href="{{ config('app.panel_url') }}/server/{{ $id }}/users"><i class="fas fa-users"></i> Users</a><br>
                        <a href="{{ config('app.panel_url') }}/server/{{ $id }}/backups"><i class="fas fa-file-archive"></i> Backups</a>
                    </p>
                    <p class="card-text col-lg-3 col-6">
                        <a href="{{ config('app.panel_url') }}/server/{{ $id }}/network"><i class="fas fa-network-wired"></i> Network</a><br>
                        <a href="{{ config('app.panel_url') }}/server/{{ $id }}/startup"><i class="fas fa-play"></i> Startup</a><br>
                        <a href="{{ config('app.panel_url') }}/server/{{ $id }}/settings"><i class="fas fa-cogs"></i> Settings</a>
                    </p>
                    <p class="card-text col-lg-3 col-6">
                        <a href="{{ route('client.server.subdomain.show', ['id' => 1]) }}"><i class="fas fa-globe"></i> Subdomain Name</a><br>
                        <a href="{{ route('client.server.software.show', ['id' => 1]) }}"><i class="fas fa-download"></i> Software Installer</a><br>
                        <a href="{{ config('app.phpmyadmin_url') }}"><i class="fas fa-tools"></i> phpMyAdmin</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection