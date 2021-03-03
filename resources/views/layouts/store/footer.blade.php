<footer class="main-footer">
    <div class="container">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            <a href="{{ route('terms') }}">Terms of Service</a> | <a href="{{ route('privacy') }}">Privacy Policy</a>
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; {{ date('Y') }} <a href="{{ route('home') }}">{{ config('app.company_name') }}</a>.</strong> Powered by <a href="https://github.com/pterobilling/pterobilling">PteroBilling</a> {{ config('app.version') }}.
    </div>
</footer>