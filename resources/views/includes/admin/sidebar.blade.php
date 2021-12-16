<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
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
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-sticky-note"></i>
            <span>Ta'aruf</span></a>
    </li>
    <hr class="sidebar-divider">


    <!-- Nav Item - Users -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-users"></i>
            <span>Users</span></a>
    </li>
    <hr class="sidebar-divider">

    <!-- Nav Item - Users -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-cog"></i>
            <span>Configure</span></a>
    </li>
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->
