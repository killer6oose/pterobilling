<aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-no-expand">
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
                    <a href="{{ route('client.dash') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ config('app.panel_url') }}" class="nav-link">
                        <i class="fas fa-columns nav-icon"></i>
                        <p>Pterodactyl Panel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ config('app.phpmyadmin_url') }}" class="nav-link">
                        <i class="fas fa-tools nav-icon"></i>
                        <p>phpMyAdmin</p>
                    </a>
                </li>
                <li class="nav-header">SERVERS</li>
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="fas fa-server nav-icon"></i>
                        <p>
                            Server 1
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-info-circle nav-icon"></i>
                                <p>Server Info</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-scroll nav-icon"></i>
                                <p>Manage Plan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-puzzle-piece nav-icon"></i>
                                <p>Add-ons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-globe nav-icon"></i>
                                <p>Subdomain</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="fas fa-server nav-icon"></i>
                        <p>
                            Server 2
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-info-circle nav-icon"></i>
                                <p>Server Info</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-scroll nav-icon"></i>
                                <p>Manage Plan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-puzzle-piece nav-icon"></i>
                                <p>Add-ons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-globe nav-icon"></i>
                                <p>Subdomain</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">BILLING</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice-dollar"></i>
                        <p>Invoices</p>
                    </a>
                </li>
                <li class="nav-header">SUPPORT CENTER</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-ticket-alt nav-icon"></i>
                        <p>Support Tickets</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book nav-icon"></i>
                        <p>Knowledge Base</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-network-wired nav-icon"></i>
                        <p>System Status</p>
                    </a>
                </li>
                <li class="nav-header">AFFILIATE PROGRAM</li>
                <li class="nav-item">
                    <a href="{{ route('client.dash') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>Affiliates</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>