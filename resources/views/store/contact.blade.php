@extends('layouts.store')

@section('content')
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">We'd love to hear from you!</h3>
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
                                    Your message has been sent!
                                </div>
                            </div>
                        @endisset
                        <div class="form-group">
                            <label for="emailInput">Email Address</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="emailInput" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <label for="firstNameInput">Your Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="NameInput" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="subjectInput">Subject</label>
                            <input type="text" name="subject" value="{{ old('subject') }}" class="form-control" id="subjectInput" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <label for="messageInput">Message</label>
                            <textarea type="text" name="message" class="form-control" id="messageInput" placeholder="Please enter your message here..." style="height:200px;" required>{{ old('message') }}</textarea>
                        </div>
                        @include('layouts.store.hcaptcha')
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
@endsection