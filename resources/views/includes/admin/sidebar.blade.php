<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
        </div>
        <div class="sidebar-brand-text mx-3">Ta'aruf.id</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @if (Route::current()->getName() == 'dashboard')
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
    @endif

    <hr class="sidebar-divider">

    <!-- Nav Item - CV-->
    @if (Route::current()->getName() == 'admin-cv')
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin-cv') }}">
                <i class="fas fa-file-alt"></i>
                <span>Cv Confirm</span></a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin-cv') }}">
                <i class="fas fa-file-alt"></i>
                <span>Cv Confirm</span></a>
        </li>
    @endif
    <hr class="sidebar-divider">
    <!-- Nav Item - Ta'aruf -->
    @if (Route::current()->getName() == 'admin-taaruf')
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin-taaruf') }}">
                <i class="fas fa-sticky-note"></i>
                <span>Ta'aruf</span></a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin-taaruf') }}">
                <i class="fas fa-sticky-note"></i>
                <span>Ta'aruf</span></a>
        </li>
    @endif
    <hr class="sidebar-divider">


    <!-- Nav Item - Users -->
    @if (Route::current()->getName() == 'admin-userlist')
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin-userlist') }}">
                <i class="fas fa-users"></i>
                <span>Users</span></a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin-userlist') }}">
                <i class="fas fa-users"></i>
                <span>Users</span></a>
        </li>
    @endif
    <hr class="sidebar-divider">

    <!-- Nav Item - counselor -->
    @if (Route::current()->getName() == 'admin-counselor')
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin-counselor') }}">
                <i class="fas fa-user-shield"></i>
                <span>Counselor</span></a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin-counselor') }}">
                <i class="fas fa-user-shield"></i>
                <span>Counselor</span></a>
        </li>
    @endif
    <hr class="sidebar-divider">


    <!-- Nav Item - web content setting -->
    @if (Route::current()->getName() == 'admin-content')
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin-content') }}">
                <i class="fas fa-window-restore"></i>
                <span>Content</span></a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin-content') }}">
                <i class="fas fa-window-restore"></i>
                <span>Content</span></a>
        </li>
    @endif
    <hr class="sidebar-divider">

    <!-- Nav Item - configure -->
    @if (Route::current()->getName() == 'admin-configure')
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin-configure') }}">
                <i class="fas fa-cog"></i>
                <span>Configure</span></a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin-configure') }}">
                <i class="fas fa-cog"></i>
                <span>Configure</span></a>
        </li>
    @endif
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->
