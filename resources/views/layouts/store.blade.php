<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }} - {{ config('app.company_name') }}</title>
        <link rel="icon" href="{{ config('app.favicon_file_path') }}">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/dist/css/adminlte.min.css">
        <!-- Custom Styles -->
        @yield('styles')
    </head>
    <body class="hold-transition layout-top-nav @if(config('app.dark_mode')) dark-mode @endif">
        <div class="wrapper">
            <!-- Navbar -->
            @include('layouts.store.nav')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                @include('layouts.store.header')

                <!-- Main content -->
                <div class="content">
                    <div class="container">
                        @unless ($secure)
                            @include('layouts.store.secure')
                        @endunless
                        @include('layouts.store.announcement')
                        @yield('content')
                    </div>
                </div>
            </div>

            <!-- Main Footer -->
            @include('layouts.store.footer')
        </div>

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/dist/js/adminlte.min.js"></script>

        <!-- CUSTOM SCRIPTS -->
        @yield('scripts')
        
        <!-- EXTENSION SCRIPTS -->
        <!-- hCaptcha -->
        <script src='https://www.hCaptcha.com/1/api.js' async defer></script>
    </body>
</html>
