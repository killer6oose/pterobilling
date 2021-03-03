@extends('layouts.store')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Name of an Example Category</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <ul>
                        <li><a href="{{ route('kb', ['article' => 1]) }}">Subject of an Example Support Article</a></li>
                        <li><a href="{{ route('kb', ['article' => 2]) }}">Subject of an Example Support Article</a></li>
                        <li><a href="{{ route('kb', ['article' => 3]) }}">Subject of an Example Support Article</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Name of an Example Category</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <ul>
                        <li><a href="{{ route('kb', ['article' => 1]) }}">Subject of an Example Support Article</a></li>
                        <li><a href="{{ route('kb', ['article' => 2]) }}">Subject of an Example Support Article</a></li>
                        <li><a href="{{ route('kb', ['article' => 3]) }}">Subject of an Example Support Article</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection