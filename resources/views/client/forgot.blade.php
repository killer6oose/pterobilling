@extends('layouts.store')

@section('content')
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Forgot Password?</h3>
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
                        @isset ($captcha_error)
                            <div class="form-group">
                                <div class="alert alert-danger">
                                    Please solve the hCaptcha challenge again.
                                </div>
                            </div>
                        @endisset
                        @isset ($success)
                            <div class="form-group">
                                <div class="alert alert-success">
                                    We have sent you an email. Please click the link inside to reset your password.
                                </div>
                            </div>
                        @endisset
                        <div class="form-group">
                            <label for="emailInput">Email Address</label>
                            <input type="email" name="email" class="form-control" id="emailInput" placeholder="Email Address" required autofocus>
                        </div>
                        @include('layouts.store.hcaptcha')
                        <div class="form-group mb-0">
                            <a href="{{ route('client.login') }}">Go back to login</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
@endsection