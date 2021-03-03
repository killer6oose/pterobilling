@extends('layouts.store')

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Related Support Articles</h5>
                    <p class="card-text">
                        <li><a href="{{ route('kb', ['article' => 2]) }}">Subject of an Example Support Article</a></li>
                        <li><a href="{{ route('kb', ['article' => 3]) }}">Subject of an Example Support Article</a></li>
                        <li><a href="{{ route('kb', ['article' => 4]) }}">Subject of an Example Support Article</a></li>
                        <li><a href="{{ route('kb', ['article' => 5]) }}">Subject of an Example Support Article</a></li>
                        <li><a href="{{ route('kb', ['article' => 6]) }}">Subject of an Example Support Article</a></li>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <h1>{{ $subject }}</h1>
                    <p><a href="{{ route('kb') }}" class="card-link"><i class="fas fa-arrow-left text-sm"></i> Back to Knowledge Base</a></p>
                    {!! $body !!}
                </div>
            </div>
        </div>
    </div>
@endsection