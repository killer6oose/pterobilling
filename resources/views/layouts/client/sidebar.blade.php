<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('client.dash') }}" class="brand-link">
        <img src="{{ config('app.logo_file_path') }}" alt="AdminLTE Logo" class="brand-image">
        <span class="brand-text font-weight-light">{{ config('app.company_name') }}</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('client.dash') }}" class="nav-link @if(Route::currentRouteName() == 'client.dash') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('client.server.index') }}" class="nav-link @if(Route::currentRouteName() == 'client.server.index') active @endif">
                        <i class="fas fa-server nav-icon"></i>
                        <p>My Servers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ config('app.panel_url') }}" class="nav-link" target="_blank">
                        <i class="fas fa-columns nav-icon"></i>
                        <p>Pterodactyl Panel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ config('app.phpmyadmin_url') }}" class="nav-link" target="_blank">
                        <i class="fas fa-tools nav-icon"></i>
                        <p>phpMyAdmin</p>
                    </a>
                </li>
                <li class="nav-header">ACTIVE SERVERS</li>
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="fas fa-server nav-icon"></i>
                        <p>
                            Server #1
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('client.server.show', ['id' => 1]) }}" class="nav-link">
                                <i class="fas fa-info-circle nav-icon"></i>
                                <p>Server Info</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('client.server.plan.show', ['id' => 1]) }}" class="nav-link">
                                <i class="fas fa-scroll nav-icon"></i>
                                <p>Manage Plan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('client.server.addon.show', ['id' => 1]) }}" class="nav-link">
                                <i class="fas fa-puzzle-piece nav-icon"></i>
                                <p>Add-ons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('client.server.subdomain.show', ['id' => 1]) }}" class="nav-link">
                                <i class="fas fa-globe nav-icon"></i>
                                <p>Subdomain</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('client.server.software.show', ['id' => 1]) }}" class="nav-link">
                                <i class="fas fa-download nav-icon"></i>
                                <p>Softwares</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">BILLING</li>
                <li class="nav-item">
                    <a href="{{ route('client.invoice.index') }}" class="nav-link @if(Route::currentRouteName() == 'client.invoice.index') active @endif">
                        <i class="nav-icon fas fa-file-invoice-dollar"></i>
                        <p>Invoices</p>
                    </a>
                </li>
                <li class="nav-header">SUPPORT CENTER</li>
                <li class="nav-item">
                    <a href="{{ route('client.ticket.index') }}" class="nav-link">
                        <i class="fas fa-ticket-alt nav-icon"></i>
                        <p>Support Tickets</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kb') }}" class="nav-link">
                        <i class="fas fa-book nav-icon"></i>
                        <p>Knowledge Base</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('status') }}" class="nav-link">
                        <i class="fas fa-network-wired nav-icon"></i>
                        <p>System Status</p>
                    </a>
                </li>
                <li class="nav-header">ACCOUNT</li>
                <li class="nav-item">
                    <a href="{{ route('client.affiliate.show') }}" class="nav-link">
                        <i class="fas fa-user-friends nav-icon"></i>
                        <p>Affiliate Program</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('client.credit.show') }}" class="nav-link">
                        <i class="fas fa-money-bill-wave nav-icon"></i>
                        <p>Account Credit</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('client.account.show') }}" class="nav-link">
                        <i class="fas fa-cog nav-icon"></i>
                        <p>Account Settings</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>