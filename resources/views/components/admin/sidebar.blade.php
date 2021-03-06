<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('assets/admin/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/admin/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info d-flex">
                <a href="javascript: void(0);" class="d-block mr-3">{{ auth()->user()->fullName }}</a>
                {{-- Profile Link --}}
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    
                    <a href="{{ route('admin.logout') }}" title="Logout" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="fas fa-fw fa-sign-out-alt"></i>
                    </a>
                </form>
            </div>
        </div>
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
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ is_active('admin.dashboard') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @superadmin
                    <li class="nav-item {{ is_active(array(
                            'admin.role.index', 'admin.role.create', 'admin.role.edit',
                            'admin.permission.index', 'admin.permission.create', 'admin.permission.edit',
                        ), 'menu-open') }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-lock"></i>
                            <p>
                                Roles and Permissions
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.permission.index') }}" class="nav-link {{ is_active(array(
                                    'admin.permission.index', 'admin.permission.create', 'admin.permission.edit',
                                )) }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Permission</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('admin.role.index') }}" class="nav-link {{ is_active(array(
                                    'admin.role.index', 'admin.role.create', 'admin.role.edit',
                                )) }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Role</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endsuperadmin
                
                @role(\App\Models\User::SUPER_ADMIN)
                    <li class="nav-item">
                        <a href="{{ route('admin.setting.index') }}" class="nav-link {{ is_active('admin.setting.index') }}">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>Setting</p>
                        </a>
                    </li>
                @endrole

                <li class="nav-item">
                    <a href="{{ route('admin.user.index') }}" class="nav-link {{ is_active(array(
                        'admin.user.index', 'admin.user.create', 'admin.user.edit',
                    )) }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>