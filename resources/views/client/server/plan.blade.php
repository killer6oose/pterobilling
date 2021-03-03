@extends('layouts.client')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="card-title m-0">Your Current Plan</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Plan 1</h6><h6 class="card-title float-right">$3 /month</h6>
                    <p class="card-text">
                        <ul class="list-unstyled">
                            <li>RAM <span class="float-right">2 GB</span></li>
                            <li>CPU <span class="float-right">2 Cores</span></li>
                            <li>Disk <span class="float-right">10 GB</span></li>
                            <li>Databases <span class="float-right">3</span></li>
                            <li>Backups <span class="float-right">5</span></li>
                            <li>Ports <span class="float-right">3</span></li>
                            <li>Slots <span class="float-right">20</span></li>
                        </ul>
                    </p>
                    <a href="{{ route('client.server.plan.cancel', ['id' => 1, 'plan' => 1]) }}" class="btn btn-danger col-12">Cancel Plan</a>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-6 row">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title m-0">Plan 1</h5><h5 class="card-title m-0 float-right">$3 /month</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <ul class="list-unstyled">
                                <li>RAM <span class="float-right">2 GB</span></li>
                                <li>CPU <span class="float-right">2 Cores</span></li>
                                <li>Disk <span class="float-right">10 GB</span></li>
                                <li>Databases <span class="float-right">3</span></li>
                                <li>Backups <span class="float-right">5</span></li>
                                <li>Ports <span class="float-right">3</span></li>
                                <li>Slots <span class="float-right">20</span></li>
                            </ul>
                        </p>
                        <a href="{{ route('client.server.plan.change', ['id' => 1, 'plan' => 1]) }}" class="btn btn-primary    col-12">Change Plan <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title m-0">Plan 1</h5><h5 class="card-title m-0 float-right">$3 /month</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <ul class="list-unstyled">
                                <li>RAM <span class="float-right">2 GB</span></li>
                                <li>CPU <span class="float-right">2 Cores</span></li>
                                <li>Disk <span class="float-right">10 GB</span></li>
                                <li>Databases <span class="float-right">3</span></li>
                                <li>Backups <span class="float-right">5</span></li>
                                <li>Ports <span class="float-right">3</span></li>
                                <li>Slots <span class="float-right">20</span></li>
                            </ul>
                        </p>
                        <a href="{{ route('client.server.plan.change', ['id' => 1, 'plan' => 1]) }}" class="btn btn-primary    col-12">Change Plan <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title m-0">Plan 1</h5><h5 class="card-title m-0 float-right">$3 /month</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <ul class="list-unstyled">
                                <li>RAM <span class="float-right">2 GB</span></li>
                                <li>CPU <span class="float-right">2 Cores</span></li>
                                <li>Disk <span class="float-right">10 GB</span></li>
                                <li>Databases <span class="float-right">3</span></li>
                                <li>Backups <span class="float-right">5</span></li>
                                <li>Ports <span class="float-right">3</span></li>
                                <li>Slots <span class="float-right">20</span></li>
                            </ul>
                        </p>
                        <a href="{{ route('client.server.plan.change', ['id' => 1, 'plan' => 1]) }}" class="btn btn-primary    col-12">Change Plan <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection