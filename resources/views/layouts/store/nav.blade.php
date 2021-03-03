<nav class="main-header navbar navbar-expand-md @if(config('app.dark_mode')) navbar-dark @else navbar-white navbar-light @endif">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
        <img src="{{ config('app.logo_file_path') }}" alt="AdminLTE Logo" height="50px">
        <span class="brand-text font-weight-light">{{ config('app.company_name') }}</span>
        </a>
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a id="plansMenu" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Plans</a>
                    <ul aria-labelledby="plansMenu" class="dropdown-menu border-0 shadow">
                        <li><a href="{{ route('plans') }}" class="dropdown-item">All Plans</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="{{ route('plans', ['id' => 1]) }}" class="dropdown-item">Category 1</a></li>
                        <li><a href="{{ route('plans', ['id' => 2]) }}" class="dropdown-item">Category 2</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ route('kb') }}" class="nav-link">Knowledge Base</a></li>
                <li class="nav-item"><a href="{{ route('status') }}" class="nav-link">System Status</a></li>
                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact Us</a></li>
            </ul>
        </div>
        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <li class="nav-item dropdown">
                <a id="currencyMenu" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">USD<a>
                <ul aria-labelledby="currencyMenu" class="dropdown-menu dropdown-menu-right border-0 shadow">
                    <li><a href="{{ route('currency', ['id' => 'USD']) }}" class="dropdown-item">USD</a></li>
                    <li><a href="{{ route('currency', ['id' => 'EUR']) }}" class="dropdown-item">EUR</a></li>
                    <li><a href="{{ route('currency', ['id' => 'GBP']) }}" class="dropdown-item">GBP</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a id="countryMenu" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Global<a>
                <ul aria-labelledby="countryMenu" class="dropdown-menu dropdown-menu-right border-0 shadow">
                    <li><a href="{{ route('country', ['id' => 0]) }}" class="dropdown-item">Global</a></li>
                    <li><a href="{{ route('country', ['id' => 'US']) }}" class="dropdown-item">United States</a></li>
                    <li><a href="{{ route('country', ['id' => 'UK']) }}" class="dropdown-item">United Kingdom</a></li>
                </ul>
            </li>
            {{--
            <li class="nav-item dropdown">
                <a id="countryMenu" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">English<a>
                <ul aria-labelledby="countryMenu" class="dropdown-menu dropdown-menu-right border-0 shadow">
                    <li><a href="{{ route('lang', ['id' => 0]) }}" class="dropdown-item">English</a></li>
                </ul>
            </li>
            --}}
            <li class="nav-item dropdown">
                <a id="accountMenu" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Account</a>
                <ul aria-labelledby="accountMenu" class="dropdown-menu dropdown-menu-right border-0 shadow">
                    <li><a href="{{ route('client.login') }}" class="dropdown-item">Login</a></li>
                    <li><a href="{{ route('client.register') }}" class="dropdown-item">Register</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a href="{{ route('client.forgot') }}" class="dropdown-item">Forgot Password?</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>