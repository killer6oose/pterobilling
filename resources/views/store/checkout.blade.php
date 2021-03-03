@extends('layouts.store')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title m-0">Billing Overview</h5>
                </div>
                <div class="card-body row">
                    <div class="col-lg-3 col-md-6 mb-1">
                        <h6 class="card-title">Total Due Today</h6>
                        <p class="card-text">$2 USD</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-1">
                        <h6 class="card-title">Billing Cycle</h6>
                        <p class="card-text">Monthly</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-1">
                        <h6 class="card-title">Recurring Amount</h6>
                        <p class="card-text">$5 USD</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-1">
                        <h6 class="card-title">Next Due Date</h6>
                        <p class="card-text">Jan 1, 2021 13:00 <small>(UTC)</small></p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-1">
                        <a href="{{ route('order', ['id' => $id]) }}" class="card-link"><i class="fas fa-arrow-left text-sm"></i> Configure plan</a>
                    </div>
                </div>
            </div>
            <form method="POST" action="">
                @csrf
                
                @isset ($payment_error)
                    <div class="form-group">
                        <div class="alert alert-danger">
                            We failed to process your payment. Please try again.
                        </div>
                    </div>
                @endisset
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Payment Method</label>
                    <div class="col-lg-7">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gateway" value="PayPal" checked>
                            <label class="form-check-label">PayPal</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-5"></div>
                    <button type="submit" class="btn btn-primary col-lg-2">Checkout <i class="fas fa-arrow-circle-right"></i></button>
                </div>
            </form>
            <div class="alert alert-info">
                Your billing details is encrypted and your IP address ({{ $ip }}) is logged.
            </div>
        </div>
    </div>
@endsection