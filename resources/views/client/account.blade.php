@extends('layouts.client')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update Panel Username</h3>
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
                                    Your panel username has been updated!
                                </div>
                            </div>
                        @endisset
                        <div class="form-group">
                            <label for="usernameInput">Panel Username</label>
                            <input type="text" name="username" class="form-control" id="usernameInput" placeholder="Panel Username" required>
                        </div>
                        <div class="form-group">
                            <label for="passwordInput">Current Password</label>
                            <input type="password" name="password" class="form-control" id="passwordInput" placeholder="Current Password" required>
                        </div>
                        @include('layouts.store.hcaptcha')
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                </form>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update Email Address</h3>
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
                                    Your email address has been updated!
                                </div>
                            </div>
                        @endisset
                        <div class="form-group">
                            <div class="alert alert-warning">
                                Changing the account email will also change the panel email.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="emailInput">Email Address</label>
                            <input type="email" name="email" class="form-control" id="emailInput" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <label for="passwordInput">Current Password</label>
                            <input type="password" name="password" class="form-control" id="passwordInput" placeholder="Current Password" required>
                        </div>
                        @include('layouts.store.hcaptcha')
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Change Password</h3>
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
                                    Your account password has been updated!
                                </div>
                            </div>
                        @endisset
                        <div class="form-group">
                            <div class="alert alert-warning">
                                Changing the account password will also change the panel password.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="passwordInput">Current Password</label>
                            <input type="password" name="current" class="form-control" id="passwordInput" placeholder="Current Password" required>
                        </div>
                        <div class="form-group">
                            <label for="newPasswordInput">New Password</label>
                            <input type="password" name="new" class="form-control" id="newPasswordInput" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPasswordInput">Confirm Password</label>
                            <input type="password" name="confirm" class="form-control" id="confirmPasswordInput" placeholder="Confirm Password" required>
                        </div>
                        @include('layouts.store.hcaptcha')
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
