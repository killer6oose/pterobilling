@extends('layouts.store')

@section('content')
    <div class="row">
        @isset($category)
            <div class="col-lg-12">
                <div class="callout callout-info">
                    <h5>You are viewing the plans of {{ $category }}.</h5>
                    <p><a href="{{ route('plans') }}">View all plans <i class="fas fa-arrow-circle-right"></i></a></p>
                </div>
            </div>
        @endisset
        <div class="col-lg-3 col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="card-title m-0">Plan 1</h5><h5 class="card-title m-0 float-right">$3 /month</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-title">RAM</h6><h6 class="card-title float-right">2 GB</h6>
                    <p class="card-text">
                        <ul class="list-unstyled">
                            <li>CPU <span class="float-right">2 Cores</span></li>
                            <li>Disk <span class="float-right">10 GB</span></li>
                            <li>Databases <span class="float-right">3</span></li>
                            <li>Backups <span class="float-right">5</span></li>
                            <li>Ports <span class="float-right">3</span></li>
                            <li>Slots <span class="float-right">20</span></li>
                        </ul>
                    </p>
                    <a href="{{ route('order', ['id' => 1]) }}" class="btn btn-primary col-12">Order <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="card-title m-0">Plan 1</h5><h5 class="card-title m-0 float-right">$3 /month</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-title">RAM</h6><h6 class="card-title float-right">2 GB</h6>
                    <p class="card-text">
                        <ul class="list-unstyled">
                            <li>CPU <span class="float-right">2 Cores</span></li>
                            <li>Disk <span class="float-right">10 GB</span></li>
                            <li>Databases <span class="float-right">3</span></li>
                            <li>Backups <span class="float-right">5</span></li>
                            <li>Ports <span class="float-right">3</span></li>
                            <li>Slots <span class="float-right">20</span></li>
                        </ul>
                    </p>
                    <a href="{{ route('order', ['id' => 1]) }}" class="btn btn-primary col-12">Order <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="card-title m-0">Plan 1</h5><h5 class="card-title m-0 float-right">$3 /month</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-title">RAM</h6><h6 class="card-title float-right">2 GB</h6>
                    <p class="card-text">
                        <ul class="list-unstyled">
                            <li>CPU <span class="float-right">2 Cores</span></li>
                            <li>Disk <span class="float-right">10 GB</span></li>
                            <li>Databases <span class="float-right">3</span></li>
                            <li>Backups <span class="float-right">5</span></li>
                            <li>Ports <span class="float-right">3</span></li>
                            <li>Slots <span class="float-right">20</span></li>
                        </ul>
                    </p>
                    <a href="{{ route('order', ['id' => 1]) }}" class="btn btn-primary col-12">Order <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="card-title m-0">Plan 1</h5><h5 class="card-title m-0 float-right">$3 /month</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-title">RAM</h6><h6 class="card-title float-right">2 GB</h6>
                    <p class="card-text">
                        <ul class="list-unstyled">
                            <li>CPU <span class="float-right">2 Cores</span></li>
                            <li>Disk <span class="float-right">10 GB</span></li>
                            <li>Databases <span class="float-right">3</span></li>
                            <li>Backups <span class="float-right">5</span></li>
                            <li>Ports <span class="float-right">3</span></li>
                            <li>Slots <span class="float-right">20</span></li>
                        </ul>
                    </p>
                    <a href="{{ route('order', ['id' => 1]) }}" class="btn btn-primary col-12">Order <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection