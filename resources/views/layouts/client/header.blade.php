<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">
                    @isset($header_title) {{ $header_title }} @else {{ $title }} @endisset
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ config('app.company_name') }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('client.dash') }}">Client Area</a></li>
                    @isset($header1)
                    <li class="breadcrumb-item"><a href="{{ route("$header1_route") }}">{{ $header1 }}</a></li>
                    @endisset
                    @isset($header2)
                    <li class="breadcrumb-item"><a href="{{ route("$header2_route", ['id' => $id]) }}">{{ $header2 }}</a></li>
                    @endisset
                    @isset($header_title)
                    <li class="breadcrumb-item active">{{ $header_title }}</li>
                    @else
                    <li class="breadcrumb-item active">{{ $title }}</li>
                    @endisset
                </ol>
            </div>
        </div>
    </div>
</div>