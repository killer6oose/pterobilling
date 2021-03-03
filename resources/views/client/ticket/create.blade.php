@extends('layouts.client')

@section('styles')
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
@endsection

@section('content')
    <form action="" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body row">
                        <div class="form-group col-12">
                            <label for="titleInput">Title</label>
                            <input type="text" name="title" class="form-control" id="titleInput" placeholder="Enter ticket title" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="summernote">Message</label>
                            <textarea id="summernote" name="message" required></textarea>
                        </div>
                    </div>
                    <div class="card-footer row justify-content-center">
                        <a href="{{ route('client.ticket.index') }}" class="btn btn-default btn-sm col-lg-1 col-md-3">Cancel</a>
                        <button type="submit" class="btn btn-success btn-sm col-lg-2 col-md-4 offset-1">Create Ticket</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <!-- Summernote -->
    <script src="/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function () {
              // Summernote
              $('#summernote').summernote()
          
              // CodeMirror
              CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
              });
            })
    </script>
@endsection
