@extends('layouts.client')

@section('styles')
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title m-0">Ticket Information</h5>
                </div>
                <div class="card-body row">
                    <div class="col-lg-4 col-md-8 mb-1">
                        <h6 class="card-title">Title</h6>
                        <p class="card-text">Why XYZ is not working?</p>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-1">
                        <h6 class="card-title">Status</h6>
                        <p class="card-text"><span class="badge bg-success">Resolved</span></p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-1">
                        <h6 class="card-title">Created Date</h6>
                        <p class="card-text">Jan 1, 2021 13:30 (UTC)</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-1">
                        <h6 class="card-title">Updated Date</h6>
                        <p class="card-text">Jan 1, 2021 13:30 (UTC)</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-1">
                        <a href="{{ route('client.ticket.index') }}" class="card-link"><i
                                class="fas fa-arrow-left text-sm"></i> View All Tickets</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="direct-chat-messages">
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">User Name</span>
                                <span class="direct-chat-timestamp float-left">Jan 1, 2021 13:30 (UTC)</span>
                            </div>
                            <div class="direct-chat-text">
                                Please help! Please help! Please help! Please help! Please help! Please help!
                            </div>
                        </div>
                        <hr>
                        <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">Staff Name</span>
                                <span class="direct-chat-timestamp float-right">Jan 1, 2021 13:30 (UTC)</span>
                            </div>
                            <div class="direct-chat-text">
                                How can we help? How can we help? How can we help? How can we help?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <form action="" method="POST">
                    @csrf

                    <div class="card-header">
                        <h5 class="card-title m-0">Add Reply</h5>
                    </div>
                    <div class="card-body row">
                        <div class="form-group col-12">
                            <label for="titleInput">Title</label>
                            <input type="text" name="title" class="form-control" id="titleInput"
                                placeholder="Enter ticket title" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="summernote">Message</label>
                            <textarea id="summernote" name="message" required></textarea>
                        </div>
                    </div>
                    <div class="card-footer row justify-content-center">
                        <button type="submit" class="btn btn-default btn-sm col-lg-1 col-md-3">Reply</button>
                        <button type="submit" name="solved" value="solved" form="solvedForm" class="btn btn-success btn-sm col-lg-2 col-md-4 offset-1">Mark Solved</button>
                    </div>
                </form>
                <form action="" method="POST" id="solvedForm"> @csrf </form>
            </div>
        </div>
    </div>
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
