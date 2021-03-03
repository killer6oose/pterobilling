@extends('layouts.client')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="card-title m-0">Your Current Add-ons</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Add-on 1</h6><h6 class="card-title float-right">$3 /month</h6>
                    <p class="card-text">
                        <a href="{{ route('client.server.addon.remove', ['id' => 1, 'addon' => 1]) }}" class="card-link text-danger">Remove Add-on</a>
                    </p>
                    <hr>
                    <h6 class="card-title">Add-on 2</h6><h6 class="card-title float-right">$5 /month</h6>
                    <p class="card-text">
                        <a href="{{ route('client.server.addon.remove', ['id' => 1, 'addon' => 1]) }}" class="card-link text-danger">Remove Add-on</a>
                    </p>
                    <hr>
                    <h6 class="card-title">Add-on 3</h6><h6 class="card-title float-right">$10 /month</h6>
                    <p class="card-text">
                        <a href="{{ route('client.server.addon.remove', ['id' => 1, 'addon' => 1]) }}" class="card-link text-danger">Remove Add-on</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-8">
                        <h6 class="card-title">Add-on 1</h6><h6 class="card-title float-right">$3 /month ($0 setup fee)</h6>
                    </div>
                    <div class="col-md-4"><a href="{{ route('client.server.addon.add', ['id' => 1, 'addon' => 1]) }}" class="btn btn-primary float-right">Order Add-on <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-8">
                        <h6 class="card-title">Add-on 1</h6><h6 class="card-title float-right">$3 /month ($0 setup fee)</h6>
                    </div>
                    <div class="col-md-4"><a href="{{ route('client.server.addon.add', ['id' => 1, 'addon' => 1]) }}" class="btn btn-primary float-right">Order Add-on <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-8">
                        <h6 class="card-title">Add-on 1</h6><h6 class="card-title float-right">$3 /month ($0 setup fee)</h6>
                    </div>
                    <div class="col-md-4"><a href="{{ route('client.server.addon.add', ['id' => 1, 'addon' => 1]) }}" class="btn btn-primary float-right">Order Add-on <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection