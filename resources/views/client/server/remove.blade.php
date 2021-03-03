@extends('layouts.client')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="alert alert-warning row justify-content-center">
                <h5><i class="icon fas fa-exclamation-triangle"></i> Are you sure to remove the add-on '<b>add-on 1</b>'?</h5>
                Your add-on will be removed immediately without any refund.
                <button type="submit" form="removeAddon" class="btn btn-danger col-md-4">Yes</button>
                <a href="{{ route('client.server.addon.show', ['id' => 1]) }}" class="btn btn-primary col-md-4 offset-md-1">No</a>
            </div>
        </div>
    </div>
    <form action="" method="POST" id="removeAddon"> @csrf </form>
@endsection