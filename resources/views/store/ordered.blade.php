@extends('layouts.store')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="alert alert-success">
                <h5><i class="icon fas fa-check"></i> Your server is ordered and being installed!</h5>
                We have sent you the order details to your email address.
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <a href="{{ route('client.dash') }}" class="btn btn-primary col-lg-3 col-md-6">Go to dashboard</a>
    </div>
@endsection