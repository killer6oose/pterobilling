@extends('layouts.client')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="alert alert-success">
                <h5><i class="icon fas fa-check"></i> You have added $5.00 USD credit to your account!</h5>
                Your account balance is now $15.00 USD.
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <a href="{{ route('client.credit.show') }}" class="btn btn-primary col-lg-3 col-md-6">View Account Balance</a>
    </div>
@endsection