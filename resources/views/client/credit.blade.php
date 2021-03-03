@extends('layouts.client')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>$10.00 USD</h3>
                    <p>Account Credit</p>
                </div>
                <div class="icon">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Fund</h3>
                </div>
                <form action="" method="POST">
                    @csrf

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="form-group">
                                <div class="alert alert-danger">
                                    Please fix the following error(s):
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="creditInput">Credit Amount</label>
                            <input type="number" name="credit" step="0.1" class="form-control" id="creditInput" placeholder="Credit Amount" required>
                        </div>
                        <div class="form-group">
                            <label class="form-check-label">Payment Method</label>
                            <select name="gateway" class="form-control">
                                <option value="PayPal">PayPal</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Purchase Credit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Credit Transactions</h3>
                    <div class="card-tools">
                        <a href="#" class="btn btn-default btn-sm float-right">More details <i class="fas fa-arrow-circle-right"></i></a>
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
                                <td>Jan 1, 2021 13:30 (UTC)</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ordered Plan</td>
                                <td>-$5.00 USD</td>
                                <td>$15.00 USD</td>
                                <td>Jan 1, 2021 13:30 (UTC)</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Affiliate Commission</td>
                                <td>+$20.00 USD</td>
                                <td>$20.00 USD</td>
                                <td>Jan 1, 2021 13:30 (UTC)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection