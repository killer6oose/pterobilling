@extends('layouts.store')

@section('content')
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Nice to meet you!</h3>
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
                                    We have sent you an email. Please click the link inside to verify your account.
                                </div>
                            </div>
                        @endisset
                        <div class="form-group">
                            <label for="emailInput">Email Address</label>
                            <input type="email" name="email" class="form-control" id="emailInput" placeholder="Email Address" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="usernameInput">Panel Username</label>
                            <input type="text" name="username" class="form-control" id="usernameInput" placeholder="Panel Username" required>
                        </div>
                        <div class="form-group">
                            <label for="passwordInput">Password</label>
                            <input type="password" name="password" class="form-control" id="passwordInput" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPasswordInput">Confirm Password</label>
                            <input type="password" name="confirm" class="form-control" id="confirmPasswordInput" placeholder="Confirm Password" required>
                        </div>
                        @include('layouts.store.hcaptcha')
                        <div class="form-group mb-0">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="terms" class="custom-control-input" id="checkboxInput" required>
                                <label class="custom-control-label" for="checkboxInput">I agree to the <a href="{{ route('terms') }}">terms of service</a> and the <a href="{{ route('privacy') }}">privacy policy</a>.</label>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <a href="{{ route('client.login') }}">Already registered?</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
@endsection