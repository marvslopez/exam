<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex" >
        <div class="info">
            <a href="{{ route('profile.show') }}" class="d-block">
            <img src="{{ asset('images/marvi.jpg') }}" alt="marvin"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8" style="margin-left: 2px">
            {{ Auth::user()->name }}</a>
        </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2"  style = "background:rebeccapurple;">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="fas fa-link"></i>
                    <p>
                        {{ __('Dashboard') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('employee.index') }}" class="nav-link">
                    <i class="fas fa-link"></i>
                    <p>
                        {{ __('Employee Management') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('employee.show') }}" class="nav-link">
                    <i class="fas fa-link"></i>
                    <p>
                        System Management
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Child menu</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route('about') }}" class="nav-link">
                    <i class="fas fa-link"></i>
                    <p>
                        {{ __('User Management') }}
                    </p>
                </a>
            </li>
    <!-- /.sidebar-menu -->
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->