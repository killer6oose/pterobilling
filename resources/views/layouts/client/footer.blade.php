<footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; {{ date('Y') }} <a href="{{ route('home') }}">{{ config('app.company_name') }}</a>.</strong> Powered by <a href="https://github.com/pterobilling/pterobilling">PteroBilling</a> {{ config('app.version') }}.
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline-block">
        <a href="{{ route('terms') }}">Terms of Service</a> | <a href="{{ route('privacy') }}">Privacy Policy</a>
    </div>
</footer>